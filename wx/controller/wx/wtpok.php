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
	$yid = Request::get(1);
	$ans = Request::get(2);
	$wtp = new Model('micro_vote');
	$wtp->find($yid);
	if(trim($ans != '')){
		$yzrec = new Model('micro_vote_record');
		$yzrec->find(array('wxid'=>$wxid,'cid'=>$yid));
		if($yzrec->has_id()){
			$yzrec->ans = $ans;
			$yzrec->save();
		}
	}
	$yzrec = new Model('micro_vote_record');
	$ans1 =  $yzrec->where(array('cid'=>$yid,'ans'=>'1'))->count();
	$ans2 =  $yzrec->where(array('cid'=>$yid,'ans'=>'2'))->count();
	$ans3 =  $yzrec->where(array('cid'=>$yid,'ans'=>'3'))->count();
	$ans4 =  $yzrec->where(array('cid'=>$yid,'ans'=>'4'))->count();
	$ans5 =  $yzrec->where(array('cid'=>$yid,'ans'=>'5'))->count();
	$ans6 =  $yzrec->where(array('cid'=>$yid,'ans'=>'6'))->count();
	$ans7 =  $yzrec->where(array('cid'=>$yid,'ans'=>'7'))->count();
	$ans8 =  $yzrec->where(array('cid'=>$yid,'ans'=>'8'))->count();
	$ans9 =  $yzrec->where(array('cid'=>$yid,'ans'=>'9'))->count();
	$ans10 =  $yzrec->where(array('cid'=>$yid,'ans'=>'10'))->count();
	$ans11 =  $yzrec->where(array('cid'=>$yid,'ans'=>'11'))->count();
	$ans12 =  $yzrec->where(array('cid'=>$yid,'ans'=>'12'))->count();
	$ans13 =  $yzrec->where(array('cid'=>$yid,'ans'=>'13'))->count();
	$ans14=  $yzrec->where(array('cid'=>$yid,'ans'=>'14'))->count();
	$ans15 =  $yzrec->where(array('cid'=>$yid,'ans'=>'15'))->count();
	$ans16 =  $yzrec->where(array('cid'=>$yid,'ans'=>'16'))->count();
	$ans17 =  $yzrec->where(array('cid'=>$yid,'ans'=>'17'))->count();
	$ans18 =  $yzrec->where(array('cid'=>$yid,'ans'=>'18'))->count();
	$ans19 =  $yzrec->where(array('cid'=>$yid,'ans'=>'19'))->count();
	$ans20=  $yzrec->where(array('cid'=>$yid,'ans'=>'20'))->count();
	$cyrs = $ans1+$ans2+$ans3+$ans4+$ans5+$ans6+$ans7+$ans8+$ans9+$ans10+$ans11+$ans12+$ans13+$ans14+$ans15+$ans16+$ans17+$ans18+$ans19+$ans20;
	$bl1=round($ans1/$cyrs*100, 2);
	$bl2=round($ans2/$cyrs*100, 2);
	$bl3=round($ans3/$cyrs*100, 2);
	$bl4=round($ans4/$cyrs*100, 2);
	$bl5=round($ans5/$cyrs*100, 2);
	$bl6=round($ans6/$cyrs*100, 2);
	$bl7=round($ans7/$cyrs*100, 2);
	$bl8=round($ans8/$cyrs*100, 2);
	$bl9=round($ans9/$cyrs*100, 2);
	$bl10=round($ans10/$cyrs*100, 2);
	$bl11=round($ans11/$cyrs*100, 2);
	$bl12=round($ans12/$cyrs*100, 2);
	$bl13=round($ans13/$cyrs*100, 2);
	$bl14=round($ans14/$cyrs*100, 2);
	$bl15=round($ans15/$cyrs*100, 2);
	$bl16=round($ans16/$cyrs*100, 2);
	$bl17=round($ans17/$cyrs*100, 2);
	$bl18=round($ans18/$cyrs*100, 2);
	$bl19=round($ans19/$cyrs*100, 2);
	$bl20=round($ans20/$cyrs*100, 2);
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
}else{
	die();
}

