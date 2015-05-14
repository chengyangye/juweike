<?php

$wid = Session::get('wid');
$album = new Model('micro_zhengwu_album');
$set   = new Model('micro_zhengwu_set');
$set->find(array('wid'=>$wid));

if(Request::get(1)){
	$album->find(Request::get(1));
	if($album->wid != $wid){
		die();
	}
}
if($album->try_post()){
	$album->wid = $wid;
	$album->estate_id = $set->id;
	$album->save();
	tusi('保存成功');
	Redirect::delay_to('loupanxiangce',1);
	
}