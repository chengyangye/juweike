<?php
/**
 *   @desc 批量删除用户，员工，代理的操作
 * */
if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	$type= Request::get(2);
	$where['isstop'] = 1;
	if($type == 'user'){
		$obj = new Model('user');
	}
	if($type == 'agency'){
		$obj = new Model('user_agency');
		$where['isyg'] = 0;
	}
	if($type == 'employee'){
		$obj = new Model('user_agency');
		$where['isyg'] = 1;
	}
	foreach ($ids as $id){
		$where['id'] = $id;
		$obj->delete($where);
	}
	Response::write('ok');
}