<?php
//优惠券活动
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$wbid = Request::get('1');
	if(!Request::get(2)){
		$wh = new Model('weiba_ht');
		$res = $wh->where(array('wid'=>$wid))->order('id desc')->limit('10')->list_all();
		Page::view('weibalist');
	}elseif (Request::get(2)=='new'){
		$htnr = '#我的话题#';
		Page::view('weibaadd');
		//查找用户信息
		$op = new Model('openid');
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	}else{
		$wb = new Model('weiba');
		$wb->find(array('wid'=>$wid));
		$wh = new Model('weiba_ht');
		$wbid = Request::get('2');
		$wh->find($wbid);
		$con  = new Model('weiba_con');
		$res = $con->where(array('wbid'=>$wbid))->order('id desc')->limit('10')->list_all();
		$fht  = new Model('weiba_con');
		$fht->where(array('wbid'=>$wbid))->order('id')->find();
	}
	
}else{
	die();
}

