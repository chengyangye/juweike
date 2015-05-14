<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$h = new Model('micro_hotel');
$h->find(Request::get(1));
$red = new Model('micro_hotel_record');
$ddres = $red->where(array('hid'=>$h->id,'wxid'=>Session::get('wxid')))->order('id desc')->list_all();

$room = new Model('micro_hotel_room');
$room_arr = $room->where(array('wid'=>Session::get('wid')))->map_array('id', 'typ');
$state_arr = array('0'=>'已预订','1'=>'已确认','2'=>'已取消','3'=>'已完成');

$ddxjson = json_decode($h->bookingset);
foreach ($ddres as $dr){
	$formind = 0;
	$ddx = array();
	$dd = new stdClass();
	$dd->name = '房间类型';
	$dd->val = $room_arr[$dr->rid];
	$ddx[] = $dd;
	foreach ($ddxjson as $dj){
		$dd = new stdClass();
		$dd->name = $dj->name;
		$val = 'form'.$formind;
		$dd->val = $dr->$val;
		$formind++;
		$ddx[] = $dd;
	}
	$dr->nr = $ddx;
}

