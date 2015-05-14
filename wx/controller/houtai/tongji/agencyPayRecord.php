<?php
/**
 *   @desc 代理充值记录
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
$ag = new Model('admin_pay_record');
$ua = new Model('user_agency');
//$user= new Model('user');
//$user_un = $user->field("id,un")->where(array('agid'=>$mu->id))->map_array('id','un');
$ua_un = $ua->field("id,un")->where(array('pid'=>$mu->id,'isyg'=>'0'))->map_array('id','un');
$un = array(''=>'不限') + $ua_un;
$tj = new SampleModel('tj');
$where = $tj->load_array_from_get(); 
if(trim($where['begin_time'])!= ''){
	$where['ctime@>'] = $where['begin_time'];
}
unset($where['begin_time']);
if(trim($where['end_time'])!= ''){
	$where['ctime@<'] = $where['end_time'];
} 
unset($where['end_time']);
$where['pid'] = $mu->id;
$where['relmoney@<>'] = '0'; 
$p = new Pagination();
$res = $p->model_list($ag->where($where)->order('id desc'));
$payTotal = $ag->where($where)->sum('money');
$payRelTotal = $ag->where($where)->sum('relmoney');
$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');

