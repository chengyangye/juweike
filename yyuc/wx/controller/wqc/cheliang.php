<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');

	$cxid = Request::get(1);
	
	$c = new Model('micro_car_chexing');
	$c->find($cxid);
	$pics = array();
	if(trim($c->pic)!=''){
		$pics = json_decode($c->pic);
	}
	$cx = new Model('micro_car_chexi');
	$cx->find($c->pid);
	$cxs = new Model('micro_car_chexi');
	$cxres = $cxs->where(array('pid'=>$cx->pid))->order('sort desc')->list_all();
	
	$pp = new Model('micro_car_pinpai');
	$pp->find($cx->pid);
	//查看是否有全景
	$qj = new Model('micro_car_chexing_full_view');
	$qj->find(array('xid'=>$cxid));
	
}else{
	die();
}

