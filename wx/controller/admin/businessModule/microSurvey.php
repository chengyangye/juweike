<?php
/*
 *   @desc 微调研
 * */
access_control();
 if('del'==Request::get(1)){
 	$ids = explode(',', Request::post('id'));
 	foreach ($ids as $id){
 		$lbs = new Model('micro_survey');
 		$lbs->find($id);
 		if($lbs->wid==Session::get('wid')){
 			$lbs->remove();
 		}
 	}
 	Response::write('ok');
 }else{
 	$lbs = new Model('micro_survey');
 	$res = $lbs->where(array('wid'=>Session::get('wid')))->list_all();
 }
 
 /*会员卡状态判断*/
 function ztpd($q){
 	if(strtotime($q->kssj)>time()){
 		return '<span>未生效</span>';
 	}
 
 	if(strtotime($q->jssj)<time()){
 		return '<span>已失效</span>';
 	}
 	return '<span>有效</span>';
 }
 
 