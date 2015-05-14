<?php
/*
 *   @desc 在线预订
 * */

//用户权限验证
access_control();
 if('del'==Request::get(1)){
 	$ids = explode(',', Request::post('id'));
 	foreach ($ids as $id){
 		$lbs = new Model('online_booking');
 		$lbs->find($id);
 		if($lbs->wid==Session::get('wid')){
 			$lbs->remove();
 		}
 	}
 	Response::write('ok');
 }else{
 	$lbs = new Model('online_booking');
 	$res = $lbs->where(array('wid'=>Session::get('wid')))->list_all();
 }
 
 /*在线预订状态判断*/
 function ztpd($q){
 	if(strtotime($q->kssj)>time()){
 		return '<span>未生效</span>';
 	}
 
 	if(strtotime($q->jssj)<time()){
 		return '<span>已失效</span>';
 	}
 	return '<span>有效</span>';
 }
 
 