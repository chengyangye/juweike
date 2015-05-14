<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$set = new Model('micro_jianshen_set');
	$set->find(array('wid'=>Session::get('wid')));
	if(!$set->has_id()){
		die();
	}
}else{
	die();
}
