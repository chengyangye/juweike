<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$h = new Model('newyy');
$h->find(Request::get(1));
$red = new Model('newyy_record');
$ddres = $red->where(array('hid'=>$h->id,'wxid'=>Session::get('wxid')))->order('id desc')->list_all();
$state_arr = array('0'=>'已预订','1'=>'已确认','2'=>'已取消','3'=>'已完成');
$rednum = new Model('newyy_record');
$ddzs = $rednum->where(array('hid'=>Request::get(1),'wxid'=> Session::get('wxid')))->count();
$ddxjson = json_decode($h->bookingset);
foreach ($ddres as $dr){
	$formind = 0;
	$ddx = array();
	$dd = new stdClass();
	$dd->name = '房间类型';
	$dd->val = $room_arr[$dr->rid];
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

