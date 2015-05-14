<?php
//微调研活动
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$yid = Request::get(1);
	$wdy = new Model('micro_survey');
	$wdy->find($yid);
	if(strtotime($wdy->kssj)>time()){
		Page::view('activitynotscratch');
	}elseif(strtotime($wdy->jssj)<time()){
		Page::view('activityend');
	}
	
}else{
	die();
}

