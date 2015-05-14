<?php
$da_arr = array('1'=>'答案1','2'=>'答案2','3'=>'答案3','4'=>'答案4');
$lbs = new Model('yzddtk');
if(Request::get(1)){
	$lbs->find(Request::get(1));
	if($lbs->wid != Session::get('wid')){
		die();
	}
}
if($lbs->try_post()){
	$lbs->uid = Session::get('uid');
	$lbs->wid = Session::get('wid');
	$lbs->save();
	Redirect::to('yzddtk');
}
