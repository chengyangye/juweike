<?php
/*
 *   @desc 微投票设置
 * */
$lbs = new Model('micro_vote');
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
	for($i=1;$i<21;$i++){
	    $lbs->trans_file('headpic'.$i);
	}
	$lbs->save();
	do_keyword_add($lbs,'micro_vote');
	Redirect::to('microVote');
}
