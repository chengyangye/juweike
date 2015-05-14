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
	$list = new Model('micro_photo_list');
	$list->find(Request::get(1));
	$lbs = new Model('micro_photo_images');
	$res = $lbs->where(array('lid'=>Request::get(1)))->order('sort')->list_all();
}
