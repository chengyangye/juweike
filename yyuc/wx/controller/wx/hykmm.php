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
	$hykid = Request::get('2');
	$hykrid = Request::post('rid');
	$hykms = Request::get('1');
	
	$hyk = new Model('micro_member_card');
	$hyk->find($hykid);
	if($hykms=='qdl'){
		$hykrecord = new Model('micro_member_card_record');
		$hykrecord->find($hykrid);
		if(!$hykrecord->has_id()){
			Response::write('not');
		}
		if($hykrecord->qdrq != date('Y-m-d')){
			$hykrecord->jf = $hykrecord->jf+intval($hyk->jf);
			$hykrecord->qdrq = date('Y-m-d');
			$hykrecord->save();
			Response::write('ok');
		}
		
		die();
	}
	$tit = $hykms=='sm'?'会员卡说明':($hykms=='tq'?'会员卡特权':($hykms=='jfhd'?'积分兑换':'会员卡通知'));
	$nr = $hyk->$hykms;
}else{
	die();
}

