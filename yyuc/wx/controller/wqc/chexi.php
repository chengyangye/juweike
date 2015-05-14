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
	$pp = new Model('micro_car_pinpai');
	$pp->find($cxid);
	$cx = new Model('micro_car_chexi');
	$res = $cx->where(array('pid'=>$cxid))->order('sort desc')->list_all();
}else{
	die();
}

