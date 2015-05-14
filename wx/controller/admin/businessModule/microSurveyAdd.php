<?php
/*
 *   @desc 微调研设置
 * */
$lbs = new Model('micro_survey');
if(Request::get(1)){
	$lbs->find(Request::get(1));
	if($lbs->wid != Session::get('wid')){
		die();
	}
}
if($lbs->try_post()){
	$lbs->uid = Session::get('uid');
	$lbs->wid = Session::get('wid');
	$lbs->trans_file('pic');
	$lbs->save();
	do_keyword_add($lbs,'micro_survey');
	Redirect::to('microSurvey');
}
