<?php
$wid = Session::get('wid');
$uid = Session::get('uid');
$m = new Model('micro_car_pinpai');

if(Request::get(1)){
	$m->find(Request::get(1));
	if($m->wid != $wid){
		die();
	}
}
if($m->try_post()){
	$m->wid = $wid;
	$m->uid = $uid;
	$m->save();
	tusi('保存成功');
	Redirect::delay_to('pinpai',1);
}
