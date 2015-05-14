<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$wid= Session::has('wid');
	$tool = new Model('micro_car_tool');
	$tool->find(array('wid'=>Request::get('wid')));
}

