<?php
access_control();
$lbs = new Model('weiba');
$lbs->find(array('wid'=>Session::get('wid')));
if($lbs->try_post()){
	$lbs->uid = Session::get('uid');
	$lbs->wid = Session::get('wid');
	$lbs->trans_file('pic');
	$lbs->save();
	do_keyword_add($lbs,'weiba');
}
