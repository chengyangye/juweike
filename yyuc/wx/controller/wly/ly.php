<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
//查找用户信息
$op = new Model('openid');
$op->find(array('wid'=>$wid,'wxid'=>$wxid));
$nc = trim($op->nc);
$set = new Model('liuyan_set');
$set->find(array('wid'=>$wid));
//查询一级留言
$ly = new Model('liuyan');
$mres = $ly->where(array('pid'=>'0','wid'=>$wid))->order('id desc')->list_all();
$lly = new Model('liuyan');
$nres = $lly->where(array('pid@<>'=>'0','wid'=>$wid))->order('id desc')->map_array_allres('pid');
}else{
	die();
}