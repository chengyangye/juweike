<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$m = new Model('micro_diancai_set');
$m->find(array('wid'=>Request::get('1')));

$c = new Model('micro_diancai_ziloupan');
$f = $c->where(array('wid'=>Request::get('1')))->list_all();



$h = new Model('micro_diancai_type');
	$where['zid'] = Request::get('2');
	$where['wid'] = Request::get('1');

$d = $h->where($where)->list_all();

//$ddres = $red->where(array('hid'=>$h->id,'wxid'=>Session::get('wxid')))->order('id desc')->list_all();