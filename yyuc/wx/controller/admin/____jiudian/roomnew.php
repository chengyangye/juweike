<?php
$m = new Model('micro_hotel_room');
if(Request::get(2)){
	$m->find(Request::get(2));
	if($m->wid != Session::get('wid')){
		die();
	}
}else{
	
}
if($m->try_post()){	
	$m->uid = Session::get('uid');
	$m->hid = Request::get(1);
	$m->wid = Session::get('wid');
	$m->save();	
	tusi('保存成功');
	Redirect::delay_to('roomset-'.$m->hid.'.html',1);
}