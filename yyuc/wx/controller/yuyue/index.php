<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$hotel = new Model('micro_hotel');
if(Request::get(1)){
	$hres = $hotel->where(array('id'=>Request::get(1)))->list_all();
}else{
	$hres = $hotel->where(array('wid'=>Session::get('wid')))->list_all();
}
foreach ($hres as $h){
	$room = new Model('micro_hotel_room');
	$h->res = $room->where(array('hid'=>$h->id))->list_all();	
	$red = new Model('micro_hotel_record');
	$h->ddcount = $red->where(array('hid'=>$h->id,'wxid'=>Session::get('wxid')))->count();	
}
