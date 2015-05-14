<?php

$wid = Session::get('wid');
$m = new Model('micro_meirong_expert_comment');
$set = new Model('micro_meirong_set');
$set->field('id')->where(array('wid'=>$wid))->find();
$zid = $set->id;
if(Request::get(1)){
	$m->find(Request::get(1));
	if($m->wid != $wid){
		die();
	}
}
if($m->try_post()){
	$m->wid = $wid;
	$m->zid = $zid;
	$m->save();
	tusi('保存成功');
	Redirect::delay_to('zhuanjiadianping',1);
}
