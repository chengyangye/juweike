<?php
$lbs = new Model('yzdd');
$tk_arr = array('100'=>'我的题库','1'=>'文学艺术','2'=>'生活常识','3'=>'地理知识','4'=>'综合题目');
if(Request::get(1)){
	$lbs->find(Request::get(1));
	if($lbs->wid != Session::get('wid')){
		die();
	}
}
if($lbs->try_post()){
	$lbs->uid = Session::get('uid');
	$lbs->wid = Session::get('wid');
	$lbs->trans_file('pic');
	
	$ztm = intval($lbs->mrtm)*intval($lbs->dtts);
	$tmarr = array();
	//存储哪些题目
	if(strpos($lbs->tk, ',100,')!==false){
		$tk = new Model('yzddtk');
		$tkres = $tk->field('id')->where(array('wid'=>$lbs->wid))->order('rand()') ->list_all();
		if(count($tkres)>=$ztm){
			for($i=0;$i<$ztm;$i++){
				$r = $tkres[$i];
				$tmarr[] = array('t',$r->id);
			}
		}else{
			foreach($tkres as $r){
				$tmarr[] = array('t',$r->id);
			}
		}
	}
	$sydetm = $ztm-count($tmarr);
	if($sydetm>0){
		$tk = new Model('yzddsys');
		$tkres = $tk->where("typ in (99".$lbs->tk."101)")->limit($sydetm)->order('rand()') ->list_all();
		foreach($tkres as $r){
			$tmarr[] = array('s',$r->id);
		}
	}
	
	shuffle($tmarr);
	$lbs->tms = json_encode($tmarr);
	$lbs->save();
	do_keyword_add($lbs,'yzdd');
	Redirect::to('yzdd');
}
