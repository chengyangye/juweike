<?php
$list = new Model('micro_xitie_infolist');
$sid  = Session::get('sid');
$type = Request::get(1);
 if(Session::has('wxid') && Session::has('wid') && $sid){
	if($type == 1){
		$title = '赴宴名单';
		$td_name = '人数';
	    $res = $list->where(array('sid'=>$sid,'type'=>1))->list_all();
	   
	    
	}
	if($type == 2){
		$title = '我的祝福';
		$td_name = '祝福语';
		$res = $list->where(array('sid'=>$sid,'type'=>2))->list_all();
		
	}
	
 }else{
	die;
} 