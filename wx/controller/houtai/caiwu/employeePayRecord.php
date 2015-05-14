<?php
/**
 *   @desc (财务查看)所有员工充值记录
 * */
$mu = Session::get('mu');
$user_role = translate_employee_level($mu->level);
$where1['isyg']  = '1';
//get current user role
if($mu->isadmin){
	$user_role = '管理员';	
}elseif($mu->level == 3){ //财务人员	
	$where1['cwid'] = $mu->id;
}elseif($mu->level == 2){ //财务主管	
	$where1['cwid@<>'] = '0';
}
$ag = new Model('admin_pay_record');
$ua = new Model('user_agency');
//var_dump($where);die;
$ua_un = $ua->field("id,un")->where($where1)->map_array('id','un');
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
//财务主管或管理员可查看所有记录，财务人员只能查看起下属的记录
if(!$mu->isadmin){
	if($mu->level == 2){//财务主管
		//$where['cwid@<>'] = '0';
	}else{
		$where['cwid'] = $mu->id;
	}
}
$where['relmoney'] = 0;
$p = new Pagination();
$res = $p->model_list($ag->where($where)->order('id desc'));
$payTotal = $ag->where($where)->sum('money');
$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');

