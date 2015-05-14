<?php
$wid = Session::get('wid');
$m = new Model('micro_estate_type');
$ziloupan = new Model('micro_estate_ziloupan');
$set = new Model('micro_estate_set');
$ziloupan1 = $ziloupan->where(array('wid'=>$wid))->map_array('id','name');
$loupan_name = $set->field('name')->where(array('wid'=>$wid))->find();
$loupan[0]= $loupan_name->name;
$loupan = $ziloupan1;

$fang = array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5);

if(Request::get(1)){
	$m->find(Request::get(1));
	if($m->wid != $wid){
		die();
	}
}
if($m->try_post()){
	$m->wid = $wid;
	$m->save();
	tusi('保存成功');
	Redirect::delay_to('loupanhuxing',1);
}
