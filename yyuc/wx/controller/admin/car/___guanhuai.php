<?php
$wid = Session::get('wid');
$uid = Session::get('uid');
$set = new Model('micro_car_guanhuai');
$set->find(array('wid'=>$wid));
if($set->try_post()){
	$set->wid = $wid;
	$set->uid = $uid;
	$set->save();
	tusi('设置成功');
}
