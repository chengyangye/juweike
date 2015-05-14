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
	$cx = new Model('micro_car_chexi');
	$cx->find($cxid);
	$cxing = new Model('micro_car_chexing');
	$res = $cxing->where(array('pid'=>$cxid))->order('sort desc')->list_all();
	
	$cxs = new Model('micro_car_chexi');
	$cxres = $cxs->where(array('pid'=>$cx->pid))->order('sort desc')->list_all();
	
	$pp = new Model('micro_car_pinpai');
	$pp->find($cx->pid);
}else{
	die();
}

