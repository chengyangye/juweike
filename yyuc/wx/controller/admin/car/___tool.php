<?php
$zt = new Model('micro_car_tool');
$zt->find(array('wid'=>Session::get('wid')));
if(!$zt->has_id()){
	$zt->wid = Session::get('wid');
	$zt->uid = Session::get('uid');
	$zt->save();
}
if(Request::post()){
	$rel = Request::post('rel');
	$val = Request::post('val');
	$zt->$rel = $val;
	$zt->wid = Session::get('wid');
	$zt->uid = Session::get('uid');
	$zt->save();
	die();
}
