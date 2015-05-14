<?php
$target = 'lowerAgency.html';

/* 
 *   @desc 下级代理列表
 * */
$mu = Session::get('mu');
$ag = new Model('user_agency');
$tj = new SampleModel('tj');
$dl_arr =array(''=>'不限') + translate_agency_level();
$zt_arr  = array(''=>'不限','0'=>'正常','1'=>'停用');
$where = $tj->load_array_from_get();
//name 模糊查询
if(trim($where['name'])!=''){
	$where['name@~'] = $where['name'];	
}
unset($where['name']);

if(trim($where['un'])!=''){
	$where['un@~'] = $where['un'];
}
unset($where['un']);
$where['isyg'] = '0';

$where['pid'] = $mu->id;
if(trim($where['isstop'])==''){
	$where['isstop@<>'] = '2';
}
if(Request::get(1) && Request::get(2) == md5(Request::get(1).$mu->pwd)){
	$where['pid'] = Request::get(1);
	$target = 'lowerAgency-'.Request::get(1).'-'.Request::get(2).'.html';
}
$p = new Pagination();


$res = $p->model_list($ag->where($where)->order('id desc'));
$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');
