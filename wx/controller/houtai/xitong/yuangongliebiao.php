<?php

//停用操作
if('stop'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	$user_agency = new Model('user_agency');
	foreach ($ids as $id){
		$user_agency->update(array('id'=>$id),array('isstop'=>1));
	}
	Response::write('ok');
}
$mu = Session::get('mu');
$ag = new Model('user_agency');
$tj = new SampleModel('tj');
$dl_arr =array(''=>'不限') + translate_employee_level();
$zt_arr  = array(''=>'不限','0'=>'正常','1'=>'停用');
$where = $tj->load_array_from_get();
//name 模糊查询
if(trim($where['name'])!=''){
	$where['OR']=array('name@~'=>$where['name'],'un@~'=>$where['name']);
}
if(!isset($tj->isstop)){
	$where['isstop'] = '0';
	$tj->isstop = '0';
}
unset($where['name']);
$where['isyg'] = '1';
if(!$mu->isadmin){
	$where['pid'] = $mu->id;
}
$p = new Pagination();


$res = $p->model_list($ag->where($where)->order('id'));
