<?php

$uid = Session::get('mainuid');
$user = new Model('user');
$user->find($uid);
$time_cha = (strtotime($user->mendtime) - strtotime($user->rtime))/86400;

$data_tj = new Model('data_statistics');
$wid     = Session::get('wid');
$today   = date('Y-m-d',time());
$month   = date('Y-m',time());

$gz_today = $data_tj->where(array('type'=>1,'wid'=>$wid,'ctime@~'=>$today))->count('id');
$gz_month = $data_tj->where(array('type'=>1,'wid'=>$wid,'ctime@~'=>$month))->count('id');
$js_today = $data_tj->where(array('type@<>'=>5,'wid'=>$wid,'ctime@~'=>$today))->count('id');
$js_month = $data_tj->where(array('type@<>'=>5,'wid'=>$wid,'ctime@~'=>$month))->count('id');