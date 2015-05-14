<?php
//微调研活动
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$yid = Request::get('1');
	//查找用户信息
	$op = new Model('openid');
	if($yid=='add'){
		$yid = Request::post('id');		
		$yzrec = new Model('micro_survey_record');
		$yzrec->find(array('wxid'=>$wxid,'cid'=>$yid));
		$yzrec->un = Request::post('un');
		$yzrec->tel = Request::post('tel');
		$yzrec->wid = $wid;
		$yzrec->wxid = $wxid;
		$yzrec->cid = $yid;
		$yzrec->ctime = DB::raw('now()');
		$yzrec->ans = '[]';
		$yzrec->save();
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
		if($op->un != $yzrec->un || $op->tel != $yzrec->tel){
			$op->un = $yzrec->un;
			$op->tel = $yzrec->tel;
			$op->wid = $yzrec->wid;
			$op->wxid = $yzrec->wxid;
			$op->save();
		}
		
	}else{
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	}	
}else{
	die();
}

