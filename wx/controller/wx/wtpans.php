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
	$wtp = new Model('micro_vote');
		$wtp->find($yid);
		if(strtotime($wtp->kssj)>time()){
			Page::view('activitynotscratch');
		}elseif(strtotime($wtp->jssj)<time()){
			Page::view('activityend');
		}
		$yzrec = new Model('micro_vote_record');
		$yzrec->find(array('wxid'=>$wxid,'cid'=>$yid));
		if(trim($yzrec->ans)!=''){
			Redirect::delay_to('wtpok-'.$yid.'.html',0);
		}else{
			$yzrec = new Model('micro_vote_record');
			$cyrs = $yzrec->where(array('cid'=>$yid))->count();
			//初次进入
			$left_time = strtotime($wtp->jssj)-time();
			$day = floor($left_time / 86400);		
			$sec = $left_time - $day * 86400;
			$hour = floor($sec / 3600);
			$sec = $sec - $hour * 3600;
			$min = floor($sec / 60);
			$sec = $sec - $min * 60;
			if ($day == 0) {
				$end_time = "{$hour}小时{$min}分{$sec}秒";
			} else {
				$end_time = "{$day}天 {$hour}小时{$min}分{$sec}秒";
			}			
		}
	
}else{
	die();
}

