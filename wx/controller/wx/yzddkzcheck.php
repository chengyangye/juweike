<?php
//优惠券活动
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$yrid = Request::get('1');
	if(trim(Request::post('zqda'))!=''){
		$res = 'no';
		$yzrec = new Model('yzdd_record');
		$yzrec->find($yrid);
		if($yzrec->has_id()){
			//正确的加一
			if(Request::post('zqda') == '0'){
				$res = 'out';
			}elseif(Request::post('zqda') == Session::get('yzdd_zqda')){
				$yzrec->zqs = intval($yzrec->zqs)+1;
				$res = 'ok';
			}else{
				$res = 'no';
			}
			$yzrec->jrtms = intval($yzrec->jrtms)+1;
			$yzrec->save();
			Session::remove('yzdd_zqda');
		}
		Response::write($res);		
	}
}else{
	die();
}

