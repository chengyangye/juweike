<?php
$wxid = Session::get('wxid');
$wid = Session::get('wid');
$pid = Request::post('pid','0');
$nc = Request::post('nc','');
$msg = trim(Request::post('msg'));
if($msg !='' && Session::has('wid')){
	$ly = new Model('liuyan');
	$ly->msg = $msg;
	$ly->pid = $pid;
	$ly->nc = $nc;
	$ly->ctime = DB::raw('now()');
	$ly->wid = Session::get('wid');
	$ly->wxid =  Session::get('wxid');
	$ly->save();
	//查找用户信息
	$op = new Model('openid');
	$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	if(!$op->has_id()){
		$op->wid = $wid;
		$op->wxid = $wxid;
	}
	$op->nc = $nc;
	$op->save();
	Response::write('ok');
}