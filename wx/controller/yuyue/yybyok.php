<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}

$m = new Model('newyy_record');
$m->find(array('hid'=>Request::get(1),'wxid'=> Session::get('wxid'),'state'=>'0'));
if($m->has_id()){
	//Response::write('rep');
}
if($m->try_post()){

	$m->hid = Request::get(1);
	$m->wid = Session::get('wid');
	$m->wxid = Session::get('wxid');
	$m->ctime = DB::raw('now()');
	$m->save();
	Response::write('ok');
	
}