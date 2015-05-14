<?php

$m = new Model('newyy');
if('del'==Request::get(1)){
	$id = Request::post('id');
	$m->find($id);
	if($m->wid != Session::get('wid')){
		die();
	}
	$m->remove();
}else{
	$res = $m->where(array('wid'=>Session::get('wid')))->order('id')->list_all();
}

