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
	$yhqid = Request::get('1');
	$yhq = new Model('coupon');
	$yhq->find($yhqid);
	if(strtotime($yhq->kssj)>time()){
		Page::view('activitynotscratch');
	}elseif(strtotime($yhq->jssj)<time()){
		Page::view('activityend');
	}
	$sn = '';
	//查看是否已经领取
	$yhqrecord = new Model('coupon_record');
	$yhqrecord->find(array('cid'=>$yhqid,'wxid'=>$wxid));
	if($yhqrecord->has_id()){
		$sn = $yhqrecord->sn;
	}else{
		//查找用户信息
		$op = new Model('openid');
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	}
	
	
}else{
	die();
}

