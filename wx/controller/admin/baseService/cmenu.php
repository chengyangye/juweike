<?php
$wid = Session::get('wid');
$uid = Session::get('uid');
$id = Request::post('id');
$m = new Model('menu');
if(trim($id)!=''){
	$m->find($id);
	if($m->wid != $wid){
		die();
	}
}
$m->wid = $wid;
$m->uid = $uid;
$m->menu = Request::post('data');
$m->save();