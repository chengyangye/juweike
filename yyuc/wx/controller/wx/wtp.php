<?php
//微调研活动
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
	$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	if($yid=='add'){
		$yid = Request::post('id');	
		$yzrec = new Model('micro_vote_record');
		$yzrec->find(array('wxid'=>$wxid,'cid'=>$yid));
		$yzrec->un = Request::post('un');
		$yzrec->tel = Request::post('tel');
		$yzrec->wid = $wid;
		$yzrec->wxid = $wxid;
		$yzrec->cid = $yid;
		$yzrec->ctime = DB::raw('now()');
		$yzrec->ans = '';
		$yzrec->save();
		if($op->un != $yzrec->un || $op->tel != $yzrec->tel){
			$op->un = $yzrec->un;
			$op->tel = $yzrec->tel;
			$op->wid = $yzrec->wid;
			$op->wxid = $yzrec->wxid;
			$op->save();
		}	
	}else{
		$wtp = new Model('micro_vote');
		$wtp->find($yid);
		if(strtotime($wtp->kssj)>time()){
			Page::view('activitynotscratch');
		}elseif(strtotime($wtp->jssj)<time()){
			Page::view('activityend');
		}
		$yzrec = new Model('micro_vote_record');
		$yzrec->find(array('wxid'=>$wxid,'cid'=>$yid));
		if($yzrec->has_id()){
			Redirect::delay_to('wtpans-'.$yid.'.html',0);
		}else{
			//初次进入
		}
	}
	
}else{
	die();
}

