<?php
$m = new Model('micro_hotel_room');
$hid = Request::get(1);
if('del'==$hid){
	$id = Request::post('id');
	$m->find($id);
	if($m->wid != Session::get('wid')){
		die();
	}
	$m->remove();
}else{
	$res = $m->where(array('wid'=>Session::get('wid'),'hid'=>Request::get(1)))->order('id')->list_all();
}
