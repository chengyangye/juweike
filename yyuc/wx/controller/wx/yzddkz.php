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
	$yzdd = new Model('yzdd');
	$yzdd->find($yid);
	$yzrec = new Model('yzdd_record');
	$yzrec->find(array('wxid'=>$wxid,'yid'=>$yid));
	if($yzrec->has_id()){
		$dtts = intval($yzdd->dtts);
		$zjkssj = time()-strtotime($yzrec->ctime);
		$yjts = intval($zjkssj/86400);
		if($yjts<$dtts){//可以答题
			if(intval($yzrec->jt) != $yjts){
				//今天第一次开始答题
				Page::view('yzddjr');
				$yzrec->jt = $yjts;
				$yzrec->jrtms = '0';
				$yzrec->save();
			}else{
				
				//找到对应的题目
				$tms = intval($yzrec->jrtms);
				$mtts = intval($yzdd->mrtm);
				//目前积分
				$mqjf = 10*intval($yzrec->zqs);
				if($tms<$mtts){
					//可以答题
					$thetm = json_decode($yzdd->tms);
					$ind = $tms+$yjts*$mtts;
					$jrtmsj = $thetm[$ind];
					$tbn = 'yzddtk';
					if($jrtmsj[0]=='s'){
						$tbn = 'yzddsys';
					}
					$m = new Model($tbn);
					$m->find($jrtmsj[1]);
					Session::set('yzdd_zqda',$m->zd);
				}elseif($tms<$mtts){
					//答题结束
					Page::view('yzdddtjs');
				}else{
					//今日结束
					Page::view('yzddjrjs');
				}
			}
		}else{
			//答题结束
			Page::view('yzdddtjs');
		}
	}else{
		die();
	}

}else{
	die();
}

