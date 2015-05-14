<?php

$lbs = new Model('micro_survey_tk');
if(Request::get(1)){
	$lbs->find(Request::get(1));
	if($lbs->wid != Session::get('wid')){
		die();
	}
}
if($lbs->try_post()){
	$lbs->uid = Session::get('uid');
	$lbs->wid = Session::get('wid');
	$lbs->sid = Session::get('sid');
	$lbs->save();
	Session::remove('sid');
	Redirect::prev();
	
}
