<?php
/**
 *    @desc （财务查看）用户直接充值记录
 * */
$mu = Session::get('mu');
//get current user role
if($mu->isadmin){
	$user_role = '管理员';
}elseif($mu->isyg){
	$user_role = translate_employee_level($mu->level);
}else{
	$user_role = translate_agency_level($mu->level);
}

$ag = new Model('online_pay_record');
$status_arr = array(''=>'不限','0'=>'未支付','1'=>'已支付');
$tj = new SampleModel('tj');
$where = $tj->load_array_from_get();
if(trim($where['begin_time'])!= ''){
	$where['pay_time@>'] = $where['begin_time'];
}
unset($where['begin_time']);
if(trim($where['end_time'])!= ''){
	$where['pay_time@<'] = $where['end_time'];
}
unset($where['end_time']);
if(trim($where['name'])!= ''){
	$where['un'] = $where['name'];
}
if(!isset($tj->status)){
	$where['status'] = '1';
	$tj->status      = '1';
}
unset($where['name']);


$p = new Pagination();
$res = $p->model_list($ag->where($where)->order('id desc'));
$payTotal = $ag->where($where)->sum('money');




