<?php
$res = new Model('res');
$ysdata = '';
$g = new SampleModel();
if(Request::get(1)){
	$resid = Request::get(1);
	if($resid=='del'){
		$resid = Request::post('id');
		$res->find($resid);
		if($res->wid != Session::get('wid')){
			die();
		}
		$res_content = new Model('res_content');
		$res_content->delete(array('rid'=>$resid));
		$res->remove();
		Response::write('ok');
	}else{
		$res->find($resid);
		$jcon = json_decode($res->con,true);
		$res_content = new Model('res_content');
		$cons = $res_content->where(array('rid'=>$resid))->order('ord')->list_all();
		$ncon = array();
		foreach ($jcon as $k=>$v){
			$v['con'] = $cons[$k]->content;
			$ncon[] = $v;
		}		
		$ysdata = json_encode($ncon);
	}	
}elseif(Request::post()){
	$data = Request::json();
	if(trim($data['id'])!=''){
		$res->find($data['id']);
		if($res->wid != Session::get('wid')){
			Redirect::to_404();
		}
	}
	$data = $data['data'];
	$contents = array();
	$datas = array();
	foreach ($data as $i=>$da){
		$contents[] = array($da['tit'],$da['con'],$da['url']);
		$da['ourl'] = $da['url'];
		if(trim(strip_tags($da['con']))!=''){
			$da['ourl'] = Conf::$http_path.'gzzh/artview-'.($i+1).'.html';
		}
		unset($da['con']);
		$pic = $da['pic'];
		$pic = explode('?', $pic);
		$da['pic'] = $pic = $pic[0]; 		
		if(strpos($pic, '/temp/')!==false){
			$nnpath = Session::get('upath').'upload1/'.md5($pic).'.'.File::extension($pic);
			File::creat_dir_with_filepath(YYUC_FRAME_PATH.YYUC_PUB.$nnpath);
			copy(YYUC_FRAME_PATH.YYUC_PUB.$pic, YYUC_FRAME_PATH.YYUC_PUB.$nnpath);
			$da['pic'] = $nnpath;
		}
		
		
		$datas[] = $da;
	}
	$res->uid = Session::get('uid');
	$res->wid = Session::get('wid');
	$res->con = json_encode($datas);
	$res->typ = '2';
	$res->save();
	$res_content = new Model('res_content');
	$res_content->delete(array('rid'=>$res->id));
	foreach ($contents as $i=>$c){
		$res_content = new Model('res_content');
		$res_content->ord = $i+1;
		$res_content->rid = $res->id;
		$res_content->content = $c[1];
		$res_content->title = $c[0];
		$res_content->url = $c[2];
		$res_content->insert();
	}
	
}