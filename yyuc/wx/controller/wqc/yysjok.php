<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$wxid = Session::get('wxid');
$wid = Session::get('wid');
$hid  = Request::get(1);


$m = new Model('micro_car_yysj_record');
if($m->try_post()){
	$mm = new Model('micro_car_yysj_record');
	$mm->find(array('hid'=>$hid,'wxid'=>$wxid,'xingid'=>$m->xingid,'state'=>'0'));
	if($mm->has_id()){
		Response::write('rep');
	}
	$m->hid = Request::get(1);
	$m->wid = Session::get('wid');
	$m->wxid = Session::get('wxid');
	$m->ctime = DB::raw('now()');
	$m->save();
	Response::write('ok');
}