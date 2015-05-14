<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid') && Request::get(1)){	
	
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$hdid = Request::get(1);
	Session::remove($wxid.'jiang');
	
	//查找用户信息
	$op = new Model('openid');
	$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	
	$hd = new Model('xyj');
	$hd->find($hdid);
	if(strtotime($hd->kssj)>time()){
		Page::view('activitynotscratch');
	}elseif(strtotime($hd->jssj)<time()){
		Page::view('activityend');
	}else{
		$hdlog = new Model('xyj_record');
		
		//出奖次数
		$hasjingpin = true;
		$cjcs = $hdlog->where(array('jx@<>'=>'0','hid'=>$hdid,'jdate'=>date('Y-m-d')))->count();
		$zdcs = intval($hd->mrzd);
		if($zdcs>0 && $cjcs>=$zdcs){
			$hasjingpin = false;
		}
		
		//参加总次数
		$yjzcs = $hdlog->where(array('wxid'=>$wxid,'hid'=>$hdid))->count();
		//是否已经参见过活动
		$yjcs = $hdlog->where(array('wxid'=>$wxid,'hid'=>$hdid,'jdate'=>date('Y-m-d')))->count();
		//找到最后一个参加活动的人手机号
		$hdlog->where("hid='".$hdid."' and jx <> '0' and tel is not null")->order('id desc')->find();
		if($hdlog->has_id() && strlen($hdlog->tel)==11){
			$hdlog->tel = substr($hdlog->tel, 0,5).'****'.substr($hdlog->tel, 9,2);
		}else{
			$hdlog->id=null;
		}
		//剩余机会
		$sycs = intval($hd->mtsl)-$yjcs;
		//剩余机会
		$syzcs = intval($hd->mrzs)-$yjzcs;
		$sycs = $sycs<$syzcs? $sycs : $syzcs;
		$jxmc = '谢谢参与';
		$jx = '0';
		//非会员不参与有奖
		$yjmj = '0';
		Session::set($wxid.'jiang',$jx);
		//需要收集会员卡
		$gljs = 1;//概率基数
		if($sycs >0){
			if($hasjingpin){
				//随机定下奖项
				for($i=1;$i<9;$i++){
					$mc = 'j'.$i.'mc';
					$ms = 'j'.$i.'ms';
					$gl = 'j'.$i.'gl';
					$sl = 'j'.$i.'sl';
					$yj = 'j'.$i.'yj';
					if(trim($hd->$mc)==''){
						break;
					}
					if(intval($hd->$sl)-intval($hd->$yj)>0){
						//还有剩余奖品
						$gls = rand(0,100000000);
						if($gls<doubleval($hd->$gl)*1000000){
							$jx = $i;
							$jxmc = $hd->$mc;
							$jxms = $hd->$ms;
							Session::set($wxid.'jiang',$jx);			
							break;
						}
					}
				}
			}
		}else{
			Page::view('chanceend');
		}
	}	
}else{
	die();
}

