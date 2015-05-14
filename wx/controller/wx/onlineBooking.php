<?php
/**
 *   在线预约
 */

if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){ 
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$bid = Request::get(1);  //online_booking table id
	$onlineBooking  = new Model('online_booking');
	$onlineBooking->find($bid);
	if(strtotime($onlineBooking->kssj)>time()){
		Page::view('activitynotscratch');
	}elseif(strtotime($onlineBooking->jssj)<time()){
		Page::view('activityend');
	}
	$record = new Model('online_booking_record');
	$record->find(array('cid'=>$bid,'wxid'=>$wxid));
	$has_record = '';
	if($record->has_id()){
		$has_record = 1;
	}
	$typ    = explode(',',$onlineBooking->type);
	$v      = array_values($typ);
	$type   = array_combine($v,$typ);
	
	$typea   = explode(',',$onlineBooking->type1);
	$v1      = array_values($typea);
	$type1   = array_combine($v1,$typea);
	
	$type2   = explode(',',$onlineBooking->type2);
	$v2      = array_values($type2);
	$type2   = array_combine($v2,$type2);
	
	
}else{
	die();
}

