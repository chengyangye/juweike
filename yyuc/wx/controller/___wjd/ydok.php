<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$h = new Model('micro_hotel');
$h->find(Request::get(1));
$r = new Model('micro_hotel_room');
$r->find(Request::get(2));
$m = new Model('micro_hotel_record');
$m->find(array('hid'=>Request::get(1),'rid'=>Request::get(2),'state'=>'0'));
if($m->has_id()){
	Response::write('rep');
}
if($m->try_post()){
	$m->rid = Request::get(2);
	$m->hid = Request::get(1);
	$m->wid = Session::get('wid');
	$m->wxid = Session::get('wxid');
	$m->ctime = DB::raw('now()');
	$m->save();
	Response::write('ok');
}