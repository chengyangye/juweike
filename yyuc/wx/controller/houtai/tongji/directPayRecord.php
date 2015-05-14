<?php
/**
 *    @desc 代替用户充值记录
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

$ag = new Model('agency_pay_record');
$tj = new SampleModel('tj');
$where = $tj->load_array_from_get();
if(trim($where['begin_time'])!= ''){
	$where['btime@>'] = $where['begin_time'];
}
unset($where['begin_time']);
if(trim($where['end_time'])!= ''){
	$where['btime@<'] = $where['end_time'];
}
unset($where['end_time']);
if(trim($where['name'])!= ''){
	$where['un'] = $where['name'];
}
unset($where['name']);

$where['pid'] = $mu->id;

$p = new Pagination();
$res = $p->model_list($ag->where($where)->order('id desc'));
$payTotal = $ag->where($where)->sum('money');



