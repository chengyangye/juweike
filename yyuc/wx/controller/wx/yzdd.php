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
	$yid = Request::get('1');
	$yzdd = new Model('yzdd');
	$yzdd->find($yid);
	if(strtotime($yzdd->kssj)>time()){
		Page::view('activitynotscratch');
	}elseif(strtotime($yzdd->jssj)<time()){
		Page::view('activityend');
	}
	$yzrec = new Model('yzdd_record');
	$yzrec->find(array('wxid'=>$wxid,'yid'=>$yid));
	if($yzrec->has_id()){
		Redirect::to('yzddkz-'.$yid.'.html');
	}else{
		//初次进入		
	}
}else{
	die();
}

