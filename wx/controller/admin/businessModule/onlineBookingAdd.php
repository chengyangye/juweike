<?php
/*
 *   @desc在线预订设置
 * */
$lbs = new Model('online_booking');
if(Request::get(1)){
	$lbs->find(Request::get(1));
	if($lbs->wid != Session::get('wid')){
		die();
	}
}
if($lbs->try_post()){
	$lbs->uid = Session::get('uid');
	$lbs->wid = Session::get('wid');
	$lbs->type= str_replace('，',',',$lbs->type);
	$lbs->type1= str_replace('，',',',$lbs->type1);
	$lbs->type2= str_replace('，',',',$lbs->type2);
	$lbs->trans_file('pic');
	$lbs->save();
	do_keyword_add($lbs,'online_booking');
	Redirect::to('onlineBooking');
}
