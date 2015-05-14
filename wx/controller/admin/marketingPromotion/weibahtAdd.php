<?php
$lbs = new Model('weiba_ht');
if(Request::get(1)){
	$lbs->find(Request::get(1));
	if($lbs->wid != Session::get('wid')){
		die();
	}
}
if($lbs->try_post()){
	$lbs->uid = Session::get('uid');
	$lbs->wid = Session::get('wid');
//	$lbs->trans_file('pic');
	$lbs->save();
	Redirect::to('weibaht');
}
