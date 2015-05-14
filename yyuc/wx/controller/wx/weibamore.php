<?php
//优惠券活动
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$typ = Request::get('1');
	if($typ=='con'){
		$wbid = Request::post('id');
		$con  = new Model('weiba_con');
		$res = $con->where(array('wbid'=>$wbid))->order('id desc')->limit(Request::post('num').',10')->list_all_array();
		Response::json($res);		
	}
	if($typ=='list'){
		$con  = new Model('weiba_ht');
		$res = $con->where(array('wid'=>$wid))->order('id desc')->limit(Request::post('num').',10')->list_all_array();
		Response::json($res);
	}	
}else{
	die();
}

