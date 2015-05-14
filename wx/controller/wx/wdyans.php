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
	$wdy = new Model('micro_survey');
	$wdy->find($yid);
	if(strtotime($wdy->kssj)>time()){
		Page::view('activitynotscratch');
	}elseif(strtotime($wdy->jssj)<time()){
		Page::view('activityend');
	}
	$yzrec = new Model('micro_survey_record');
	$yzrec->find(array('wxid'=>$wxid,'cid'=>$yid));
	if($yzrec->has_id()){
		$yjfk = trim($yzrec->yjfk);
		if($yjfk != ''){
			Redirect::delay_to('wdyok-'.$yid.'.html',0);
		}else{
			$jgs = json_decode($yzrec->ans);
			if(is_array($jgs)){
				//查看是否是答题跳转进来的
				if(Request::get(2)){
					$jgs[]= Request::get(2);
					$yzrec->ans = json_encode($jgs);
					$yzrec->save();
				}
				
				//查询题目
				$tk = new Model('micro_survey_tk');
				$sytm = $tk->where(array('sid'=>$yid))->count();
				if($sytm == count($jgs)){
					//已答完跳转到填写意见
					Redirect::delay_to('wdyyj-'.$yid.'.html',0);
				}else{
					$rtk = $tk->limit(count($jgs).',1')->list_all();
					if(count($rtk)>0){
						$tk = $rtk[0];
					}
				}
			}
		}		
	}else{
		die();
	}
}else{
	die();
}

