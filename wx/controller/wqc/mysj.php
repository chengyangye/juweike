<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$wxid = Session::get('wxid');
$wid = Session::get('wid');
$h = new Model('micro_car_yysj');
$h->find(array('wid'=>$wid));
$red = new Model('micro_car_yysj_record');
$ddres = $red->where(array('hid'=>$h->id,'wxid'=>Session::get('wxid')))->order('id desc')->list_all();

$pp = new Model('micro_car_pinpai');
$pp_arr = $pp->where(array('wid'=>Session::get('wid')))->map_array('id', 'name');

$cx = new Model('micro_car_chexi');
$cx_arr = $cx->where(array('wid'=>Session::get('wid')))->map_array('id', 'name');

$cxing = new Model('micro_car_chexing');
$cxing_arr = $cxing->where(array('wid'=>Session::get('wid')))->map_array('id', 'name');

$state_arr = array('0'=>'已预订','1'=>'已确认','2'=>'已取消','3'=>'已完成');

$ddxjson = json_decode($h->bookingset);
foreach ($ddres as $dr){
	$formind = 0;
	$ddx = array();
	$dd = new stdClass();
	$dd->name = '品牌';
	$dd->val = $pp_arr[$dr->ppid];
	$ddx[] = $dd;
	$dd = new stdClass();
	$dd->name = '车系';
	$dd->val = $cx_arr[$dr->xid];
	$ddx[] = $dd;
	$dd = new stdClass();
	$dd->name = '车型';
	$dd->val = $cxing_arr[$dr->xingid];
	$ddx[] = $dd;
	foreach ($ddxjson as $dj){
		$dd = new stdClass();
		$dd->name = $dj->name;
		$val = 'form'.$formind;
		$dd->val = $dr->$val;
		$formind++;
		$ddx[] = $dd;
	}
	$dr->nr = $ddx;
}

