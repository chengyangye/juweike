<?php
/**
 *   @desc 新增代理
 * */
$mu = Session::get('mu');
$user_agency = new Employee();
$user_agency->find($mu->id);

if(!$mu->isyg && $mu->isdirect){
	$mp = new Model('agency_price');
	$prc_arr = $mp->map_array('id', 'price');
	$zszk = intval($prc_arr[$mu->level])/100*$user_agency->yue;
}

if($user_agency->try_post()){
	if($user_agency->save()){
		tusi('更新成功');
		Session::set('mu',$user_agency);
	}else{
		print_r($user_agency->errors());
		tusi('数据操作失败');
	}
}
