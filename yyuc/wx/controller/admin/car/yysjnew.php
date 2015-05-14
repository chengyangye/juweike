<?php
$m = new Model('micro_car_yysj');
$m->find(array('wid'=>Session::get('wid')));
if($m->has_id()){
	if($m->wid != Session::get('wid')){
		die();
	}
}else{
	$m->bookingset = '[{"type":"text","name":"联系人","holder":"请输入您的名字","issys":"1"},{"type":"text","name":"联系电话","holder":"请输入您的电话","issys":"1"},{"type":"date","name":"预约日期","holder":"请选择预约日期","issys":"1"},{"type":"text","name":"自定义字段","holder":"请输入"},{"type":"select","name":"自定义下拉框","holder":"选择1|选择2"},{"type":"textarea","name":"备注","holder":"请留言","issys":"1"}]';
}
if($m->try_post()){
	if(!$m->has_id()){
		$m->ctime = DB::raw("now()");
	}
	$m->uid = Session::get('uid');
	$m->wid = Session::get('wid');
	$m->save();
	tusi('保存成功');
	Redirect::delay_to('yysj.html',1);
}