<?php
/**
 *    @desc 代替用户充值记录
 * */
$mu = Session::get('mu');
$user_role = translate_employee_level($mu->level);
//get current user role
if($mu->isadmin){
	$user_role = '管理员';	
}
$tj = new SampleModel('tj');

$csql = "select r.*,a.un as aun, c.un as cun, k.un as kun, p.un as pun from agency_pay_record r
left join `user` a on a.id = r.uid
left join user_agency c on a.cwid = c.id
left join user_agency k on a.kfid = k.id
left join user_agency p on a.agid = p.id
where r.isyg=1";
$ssql = "select sum(r.money) as m from agency_pay_record r
left join `user` a on a.id = r.uid
left join user_agency c on a.cwid = c.id
left join user_agency k on a.kfid = k.id
left join user_agency p on a.agid = p.id
where r.isyg=1";

$sql = ' ';
$where = $tj->load_array_from_get();
if(trim($where['begin_time'])!= ''){
	$sql.= " and r.btime >= '".$where['begin_time']."'";
}
if(trim($where['end_time'])!= ''){
	$sql.= " and r.btime <= '".$where['end_time']."'";
}
if(trim($where['aun'])!= ''){
	$sql.= " and a.un like '%".mysql_escape_string($where['aun'])."%'";
}
if(trim($where['kun'])!= ''){
	$sql.= " and k.un like '%".mysql_escape_string($where['kun'])."%'";
}
if(trim($where['cun'])!= ''){
	$sql.= " and c.un like '%".mysql_escape_string($where['cun'])."%'";
}
if(trim($where['pun'])!= ''){
	$sql.= " and p.un like '%".mysql_escape_string($where['pun'])."%'";
}

$p = new Pagination();
$res = $p->sql_list($csql.$sql.' order by r.id desc',null,true);
$db = DB::get_db();
$lres = $db->query($ssql.$sql.' order by r.id desc');
$payTotal = $lres[0]['m'];
$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');
/**
$ag = new Model('agency_pay_record');
$tj = new SampleModel('tj');
$user_type = array(''=>'不限','1'=>'直接用户','0'=>'间接用户');
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
// 管理员查询筛选
if($mu->isadmin){
	if(!isset($tj->utype)){
		$where['cwid@<>'] = '0';
		$tj->utype = '1';
	}
	if(trim($where['utype'])!=''){
		if($where['utype'] == 0){
			$where['cwid'] = '0'; //间接用户
		}else{
			$where['cwid@<>'] = '0';//直接用户
		}
	}
}
unset ($where['utype']);

if(!$mu->isadmin){
	if($mu->level == 2){//财务主管
		$where['cwid@<>'] = '0';
	}else{
		$where['cwid'] = $mu->id;
	}
}
$where['isyg'] = '1';
$p = new Pagination();
$res = $p->model_list($ag->where($where)->order('id desc'));
$payTotal = $ag->where($where)->sum('money');


**/

