<?php
$wid = Session::get('wid');
$m = new Model('micro_jiaoyu_ziloupan');
$set = new Model('micro_jiaoyu_set');
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
	Redirect::delay_to('ziloupan',1);
}
