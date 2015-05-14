<?php
$wid = Session::get('wid');
$uid = Session::get('uid');

$xw = new Model('wxweb');
$xw_arr = $xw->where(array('wid'=>$wid))->order('id')->map_array('uuid', 'name');

$set = new Model('micro_car_keyword');
$set->find(array('wid'=>$wid));
if($set->try_post()){
	$set->wid = $wid;
	$set->uid = $uid;
	$set->save();
	tusi('设置成功');
}
