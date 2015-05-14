<?php
$wid = Session::get('wid');
$uid = Session::get('uid');
$pinpai = new Model('micro_car_pinpai');
$pinpai_arr = $pinpai->where(array('wid'=>$wid))->map_array('id','name');
$m = new Model('micro_car_chexi');

if(Request::get(1)){
//	$url = Conf::$http_path.'wqc/chexi-'.Request::get(1).'.html?wid='.$wid;
	$m->find(Request::get(1));
	if($m->wid != $wid){
		die();
	}
}

if($m->try_post()){
	$m->wid = $wid;
	$m->uid = $uid;
	$m->save();
	tusi('保存成功');
	Redirect::delay_to('chexi',1);
}

