<?php
//优惠券活动
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$hykrid = Request::get(1);
	$hykrecord = new Model('micro_member_card_record');
	$hykrecord->find($hykrid);
	if($hykrecord->try_post()){
		$hykrecord->save();
		tusi('信息更新成功');
		Redirect::delay_to('hyk-'.$hykrecord->cid.'.html',1);
	}
}else{
	die();
}

