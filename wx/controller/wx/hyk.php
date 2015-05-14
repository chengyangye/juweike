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
	$hykid = Request::get('1');
	$hyk = new Model('micro_member_card');
	$hyk->find($hykid);
	if(strtotime($hyk->kssj)>time()){
		Page::view('activitynotscratch');
	}elseif(strtotime($hyk->jssj)<time()){
		Page::view('activityend');
	}
	$sn = '';
	//查看是否已经领取
	$hykrecord = new Model('micro_member_card_record');
	$hykrecord->find(array('cid'=>$hykid,'wxid'=>$wxid));
	if($hykrecord->has_id()){
		$sn = $hykrecord->sn;
		$ckr = $hykrecord->un;
	}else{
		//查找用户信息
		$op = new Model('openid');
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
		$ckr = $op->un;
	}
	$yjqd = true;
	if($hykrecord->qdrq != date('Y-m-d')){
		$yjqd = false;
	}
	if(strpos($hyk->loc, ',')!==false){
		$sbloc = explode(',', $hyk->loc);
		$hyurl = 'http://api.map.baidu.com/marker?location='.$sbloc[1].','.$sbloc[0].'&title='.($hyk->addr).'&content='.($hyk->name).'&output=html&src=weiba|weiweb';
	}else{
		$hyurl = 'http://map.baidu.com';
	}
	
}else{
	die();
}

