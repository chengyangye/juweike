<?php
include another();
$pages = ht_pages();
$mu = Session::get('mu');
$dl_arr = translate_employee_level();

$typid = 1;
if(Request::get(1)){
	$typid = Request::get(1);
}


$m = new SampleModel();
$qxm = new Model('houtai_check');
$qxm->find(array('typ'=>'1','typid'=>$typid));

if($m->try_post()){
	$qxm->typ = '1';
	$qxm->typid = $typid;
	$qxm->nopages = $m->nopages;
	$qxm->save();
	tusi('更新成功');
}


$m->typid = $typid;
$nopages = '';
if($qxm->has_id()){
	$nopages = $qxm->nopages;
}
$m->nopages = $nopages;