<?php
$lbs = new Model('micro_member_card');
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
	$lbs->trans_file('pic1');
	$lbs->trans_file('pic2');
	$lbs->save();
	do_keyword_add($lbs,'micro_member_card');
	Redirect::to('microMemberCard');
}
