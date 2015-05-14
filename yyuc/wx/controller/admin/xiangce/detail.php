<?php
$rid = Request::get(1);
$lbs = new Model('micro_photo_list');
$lbs->find($rid);
if($lbs->wid != Session::get('wid')){
	die();
}


$pics = new Model('micro_photo_images');
if(Request::post()){
	$pics->delete(array('lid'=>$rid));
	$data = Request::json();
	foreach ($data as $da){
		$da['lid'] = $rid;
		$pic = new Model('micro_photo_images');
		$pic->insert($da);
	}
	$lbs = new Model('micro_photo_list');
	$lbs->update(array('id'=>$rid),array('num'=>count($data)));
}else{
	$pres = $pics->where(array('lid'=>$rid))->order('sort')->list_all();	
}
