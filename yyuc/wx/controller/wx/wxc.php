<?php
//优惠券活动
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}


if(Session::has('wxid') && Session::has('wid')){
	$set = new Model('micro_photo_set');
	$set->find(array('wid'=>Session::get('wid')));
	$lbs = new Model('micro_photo_list');
	$res = $lbs->where(array('wid'=>Session::get('wid'),'isshow'=>'1'))->order('sort desc,id desc')->list_all();
}
