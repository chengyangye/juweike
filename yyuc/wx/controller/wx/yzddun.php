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
	$yid = Request::get('1');
	$op = new Model('openid');
	if($yid=='add'){
		$yid = Request::post('id');
		$yzrec = new Model('yzdd_record');
		$yzrec->find(array('wxid'=>$wxid,'yid'=>$yid));
		$yzrec->wxid = $wxid;
		$yzrec->wid = $wid;
		$yzrec->yid = $yid;
		$yzrec->ctime = DB::raw('now()');
		$yzrec->un = Request::post('un');
		$yzrec->tel = Request::post('tel');
		$yzrec->wxun = Request::post('wxun');
		$yzrec->save();
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
		if($op->un != $yzrec->un || $op->tel != $yzrec->tel){
			$op->un = $yzrec->un;
			$op->tel = $yzrec->tel;
			$op->wid = $yzrec->wid;
			$op->wxid = $yzrec->wxid;
			$op->wxun = $yzrec->wxun;
			$op->save();
		}
		Response::write('ok');
	}else{
		$yzdd = new Model('yzdd');
		$yzdd->find($yid);
		//查找用户信息
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	}	
}else{
	die();
}

