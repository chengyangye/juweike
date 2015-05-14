<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$m = new Model('micro_car_xiaoshou');
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$m->where(array('wid'=>$wid,'type'=>array('1','3')))->order('sort desc');
	$sqres = $m->list_all();
	$m->where(array('wid'=>$wid,'type'=>array('2','3')))->order('sort desc');
	$shres = $m->list_all();
}