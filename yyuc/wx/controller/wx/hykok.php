<?php
//优惠券活动
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$hykid = Request::post('id');
	$hykrecord = new Model('micro_member_card_record');
	$hykrecord->find(array('cid'=>$hykid,'wxid'=>$wxid));
	if($hykrecord->has_id()){
		Response::write('rep');
	}else{
		$hykrecord->wxid = $wxid;
		$hykrecord->wid = $wid;
		$hykrecord->cid = $hykid;
		$hykrecord->ctime = DB::raw('now()');
		$hykrecord->un = Request::post('un');
		$hykrecord->tel = Request::post('tel');
		$hykrecord->sn = get_sn('','HYK');
		$hykrecord->save();
		
		$op = new Model('openid');
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
		if($op->un != $hykrecord->un || $op->tel != $hykrecord->tel){
			$op->un = $hykrecord->un;
			$op->tel = $hykrecord->tel;
			$op->wid = $hykrecord->wid;
			$op->wxid = $hykrecord->wxid;
			$op->save();
		}
		Response::write($hykrecord->sn);
	}
}else{
	die();
}

