<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$m = new Model('micro_car_my');
	$m->find(array('wid'=>$wid,'wxid'=>$wxid));
	
	$c = new Model('micro_car_chexing');
	$c->find($m->cxing);
	
	$cx = new Model('micro_car_chexi');
	$cx->find($m->cxi);
	
	
	$pp = new Model('micro_car_pinpai');
	$pp->find($m->cpp);
	
	$bysj = time()-strtotime($m->bytime);
}
