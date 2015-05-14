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
		$jcon = json_decode($res->con);
		$res_content = new Model('res_content');
		$res_content->find(array('rid'=>$resid));
		$jcon->content = $res_content->content;
		$ysdata = json_encode($jcon);
	}	
}elseif(Request::post()){
	$isnew = true;
	$data = Request::json();
	if(trim($data['id'])!=''){
		$res->find($data['id']);
		if($res->wid != Session::get('wid')){
			Redirect::to_404();
		}
		$isnew = false;
	}
	
	$content = $data['con'];
	$res->id = $data['id'];
	$data['ourl'] = $data['url'];
	if(trim(strip_tags($data['con']))!=''){
		$data['ourl'] = Conf::$http_path.'gzzh/artview-1.html';
	}
	unset($data['id']);
	unset($data['con']);	
	$pic = $data['pic'];
	$pic = explode('?', $pic);
	$data['pic'] = $pic = $pic[0];
	
	if(strpos($pic, '/temp/')!==false){
		$pic = str_ireplace(Conf::$http_path, '/', $pic);
		$nnpath = Session::get('upath').'upload1/'.md5($pic).'.'.File::extension($pic);
		File::creat_dir_with_filepath(YYUC_FRAME_PATH.YYUC_PUB.$nnpath);
		copy(YYUC_FRAME_PATH.YYUC_PUB.$pic, YYUC_FRAME_PATH.YYUC_PUB.$nnpath);
		$data['pic'] = $nnpath;
	}
	
	$res->uid = Session::get('uid');
	$res->wid = Session::get('wid');
	$res->con = json_encode($data);
	$res->typ = '1';
	$res->save();
	
	$res_content = new Model('res_content');
	$res_content->delete(array('rid'=>$res->id));
	$res_content->ord = '1';
	$res_content->rid = $res->id;
	$res_content->content = $content;
	$res_content->title = $data['tit'];
	$res_content->url = $data['url'];
	$res_content->insert();
	
}