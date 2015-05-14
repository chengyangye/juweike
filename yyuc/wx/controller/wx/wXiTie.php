<?php
// 微喜帖
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}

if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$path = Conf::$http_path;
	$sid =  Request::get(1);
	Session::set('sid',$sid);
	$set = new Model('micro_xitie_set');
	$set->find($sid);
	
	
}else{
	die;
}
