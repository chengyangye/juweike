<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$tgid = Request::get(1);
	$wtg = new Model('micro_group_buy');
	$wtg->find($tgid);
	if(strtotime($wtg->kssj)>time()){
		Page::view('activitynotscratch');
	}elseif(strtotime($wtg->jssj)<time()){
		Page::view('activityend');
	}
	$tgsysj = strtotime($wtg->jssj)-time();
	$date=floor($tgsysj/86400);
	$hour=floor($tgsysj%86400/3600);
	$tgsysj = $date.'天'.$hour.'小时';
	$tgr = new Model('micro_group_buy_record');
	$sn = '';
	$tgr->find(array('tid'=>$tgid,'wxid'=>$wxid,'isused'=>'0'));
	if($tgr->has_id()){
		$sn = $tgr->sn;
	}
}else{
	die();
}

