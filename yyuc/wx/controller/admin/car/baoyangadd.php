<?php
$m = new Model('micro_car_yuyue_baoyang');
if(Request::get(1)){
	$m->find(Request::get(1));
	if($m->wid != Session::get('wid')){
		die();
	}
}else{
	$m->bookingset = '[{"type":"text","name":"联系人","holder":"请输入您的名字","issys":"1"},{"type":"text","name":"联系电话","holder":"请输入您的电话","issys":"1"},{"type":"text","name":"车牌","holder":"请输入您的车牌","issys":"1"},{"type":"text","name":"公里数","holder":"请输入您的公里数","issys":"1"},{"type":"date","name":"预约时间","holder":"请选择预约时间","issys":"1"},{"type":"date","name":"预约日期","holder":"请选择预约日期","issys":"1"},{"type":"select","name":"房间数量","holder":"1|2|3|4|5|6|7|8|9|10","issys":"1"},{"type":"text","name":"自定义字段","holder":"请输入"},{"type":"select","name":"自定义下拉框","holder":"选择1|选择2"},{"type":"textarea","name":"备注","holder":"请留言","issys":"1"}]';
}
if($m->try_post()){
	if(!$m->has_id()){
		$m->ctime = DB::raw("now()");
	}
	$m->uid = Session::get('uid');
	$m->wid = Session::get('wid');
	$m->save();
	tusi('保存成功');
	Redirect::delay_to('baoyang',1);
}