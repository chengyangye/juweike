<?php
access_control();
$res = new Model('res');
$list1 = $res->where(array('wid'=>Session::get('wid'),'typ'=>'1'))->order('id')->list_all();
$list2 = $res->where(array('wid'=>Session::get('wid'),'typ'=>'2'))->order('id')->list_all();

$sel = false;
if('tosel'==Request::get(1)){
	$sel = true;
}
