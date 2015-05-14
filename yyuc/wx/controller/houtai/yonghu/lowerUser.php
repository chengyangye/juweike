<?php
/**
 *   @desc  lower user list
 * */
$target = 'lowerUser.html';
$mu = Session::get('mu');
$loginurl = trim($mu->domain)==''? Conf::$http_path:'http://'.$mu->domain;
$ag = new Model('user');
$tj = new SampleModel('tj');
$user_level  = array(''=>'全部') + translate_level();
$zt_arr  = array(''=>'不限','0'=>'正常','1'=>'停用');
$where = $tj->load_array_from_get();
//name 模糊查询
if(trim($where['un'])!=''){
	$where['un@~'] = $where['un'];	
}
unset($where['un']);

if(Request::get(1) && Request::get(2) == md5(Request::get(1).$mu->pwd)){
	//查看下线
	$where['agid'] = Request::get(1);
	$target = 'lowerUser-'.Request::get(1).'-'.Request::get(2).'.html';
}else{
	$where['OR'] = array('agid'=>$mu->id,'ygid'=>$mu->id);
}
if(trim($where['isstop'])==''){
	$where['isstop@<>'] = '2';
}
$p = new Pagination();


$res = $p->model_list($ag->where($where)->order('id desc'));
$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');