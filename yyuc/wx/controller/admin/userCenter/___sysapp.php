<?php
$zt = new Model('customer_service');
$zt->find(array('wid'=>Session::get('wid')));
if(Request::post()){
	$rel = Request::post('rel');
	$val = Request::post('val');
	$zt->$rel = $val;
	$zt->wid = Session::get('wid');
	$zt->uid = Session::get('uid');
	$zt->save();
	die();
}
