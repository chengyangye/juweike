<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$set = new Model('micro_meirong_set');
	$set->find(array('wid'=>Session::get('wid')));
	if(!$set->has_id()){
		die();
	}
	
	
	if(Request::get('typ')=='get'){
		$hxid = Request::get(1);
		$hxtype = new Model('micro_meirong_type');
		$hxtype->find($hxid);
		if(trim($hxtype->pic)==''){
			Response::write('{}');
		}
		$lp = new Model('micro_meirong_ziloupan');
		$lp->find($hxtype->zid);
		
		
		$pics = json_decode($hxtype->pic,true);
		$data = array();
		$data['id'] = $hxid;
		$data['name'] = $pics[0]['txt'];
		$data['tit'] = $hxtype->name;
		$data['desc'] = $lp->name;
		$data['rooms'] = $hxtype->fang.'室'.$hxtype->ting.'厅';
		$data['area'] = $hxtype->mianji;
		$data['simg'] = $data['bimg'] = Conf::$http_path.$pics[0]['src'];		
		$data['width'] = $data['height'] = 1600;
		$data['dtitle'] = array($hxtype->name);
		$data['dlist'] = array($hxtype->jianjie);
		$picarr = array();
		$isfirst = true;
		foreach ($pics as $pic){
			if($isfirst){
				$isfirst = false;
				continue;
			}
			$picarr[] = array('img'=>Conf::$http_path.$pic['src'],'width'=>$pic['w']*2,'height'=>$pic['h']*2,'name'=>$pic['txt']);
		}
		$data['pics'] = $picarr;
		$res= array();
		$res['rooms'] = array($data);
		Response::json($res);
	}
}else{
	die();
}

function hasqj($hx){
	$qj = new Model('micro_meirong_type_full_view');
	$qj->find(array('type_id'=>$hx->id));
	return $qj->has_id();
}
