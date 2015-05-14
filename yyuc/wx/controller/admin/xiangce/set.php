<?php

$set = new Model('micro_photo_set');
$wid = Session::get('wid');

$show_type = array('1'=>'瀑布流','2'=>'单行','3'=>'双排');
$set->find(array('wid'=>$wid));

if($set->try_post()){
	
	$set->wid = $wid;

	$set->save();
	tusi('设置成功');
}
