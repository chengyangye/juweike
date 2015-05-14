<?php
//优惠券活动
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$yhqid = Request::post('id');
	$yhqrecord = new Model('coupon_record');
	$yhqrecord->find(array('cid'=>$yhqid,'wxid'=>$wxid));
	if($yhqrecord->has_id()){
		Response::write('rep');
	}else{
		$yhqrecord->wxid = $wxid;
		$yhqrecord->wid = $wid;
		$yhqrecord->cid = $yhqid;
		$yhqrecord->ctime = DB::raw('now()');
		$yhqrecord->un = Request::post('un');
		$yhqrecord->tel = Request::post('tel');
		$yhqrecord->sn = get_sn('YH','YHQ');
		$yhqrecord->save();
		
		$op = new Model('openid');
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
		if($op->un != $yhqrecord->un || $op->tel != $yhqrecord->tel){
			$op->un = $yhqrecord->un;
			$op->tel = $yhqrecord->tel;
			$op->wid = $yhqrecord->wid;
			$op->wxid = $yhqrecord->wxid;
			$op->save();
		}
		Response::write($yhqrecord->sn);
	}
	$yhq = new Model('coupon');
	$yhq->find($yhqid);
	
	
}else{
	die();
}

