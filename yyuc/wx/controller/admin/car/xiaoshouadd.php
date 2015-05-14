<?php
$wid = Session::get('wid');
$uid = Session::get('uid');
$type_arr = array('1'=>'售前','2'=>'售后','3'=>'售前/售后');
$m = new Model('micro_car_xiaoshou');
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
	Redirect::delay_to('xiaoshou',1);
}
