<?php
include YYUC_FRAME_PATH.'controller/admin/index.php';

$mu = Session::get('mu');
$dl_arr = translate_level();
$typid = 1;
if(Request::get(1)){
	$typid = Request::get(1);
}


$m = new SampleModel();
$qxm = new Model('auth_check');
$qxm->find(array('auth_id'=>$typid));

if($m->try_post()){
	$qxm->auth_id = $typid;
	$qxm->controllers = $m->nopages;
	$qxm->save();
	tusi('更新成功');
}


$m->typid = $typid;
$nopages = '';
if($qxm->has_id()){
	$nopages = $qxm->controllers;
}
$m->nopages = $nopages;