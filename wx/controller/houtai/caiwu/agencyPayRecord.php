<?php
/**
 *   @desc (财务查看)代理充值记录
 * */
$mu = Session::get('mu');
$user_role = translate_employee_level($mu->level);
if($mu->isadmin){
	$user_role = '管理员';
}
$tj = new SampleModel('tj');

$csql = "select r.*,a.un as aun, c.un as cun, k.un as kun, p.un as pun,a.level as al from admin_pay_record r 
left join user_agency a on a.id = r.aid
left join user_agency c on a.cwid = c.id
left join user_agency k on a.kfid = k.id
left join user_agency p on a.pid = p.id
where r.relmoney<>0 and r.isyg=1";
$ssql = "select sum(r.money) as m,sum(r.relmoney) as rm from admin_pay_record r
left join user_agency a on a.id = r.aid
left join user_agency c on a.cwid = c.id
left join user_agency k on a.kfid = k.id
left join user_agency p on a.pid = p.id
where r.relmoney<>0 and r.isyg=1";
$sql = ' ';
$where = $tj->load_array_from_get();
if(trim($where['begin_time'])!= ''){
	$sql.= " and r.ctime >= '".$where['begin_time']."'";
}
if(trim($where['end_time'])!= ''){
	$sql.= " and r.ctime <= '".$where['end_time']."'";
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
if(intval($where['atype'])>0){
	$sql.= " and a.level = '".mysql_escape_string($where['atype'])."'";
}
$p = new Pagination();
$res = $p->sql_list($csql.$sql,null,true);
$db = DB::get_db();
$lres = $db->query($ssql.$sql);
$payTotal = $lres[0]['m'];
$payRelTotal = $lres[0]['rm'];
$agency_type = array(''=>'不限')+translate_agency_level();

$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');
/**
$where1['isyg']  = '0';
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
$agency_type = array(''=>'不限','0'=>'间接代理','1'=>'直接代理');
$ua_un = $ua->where($where1)->map_array('id','un');
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
// 管理员查询筛选
if($mu->isadmin){
	if(!isset($tj->atype)){
		$where['cwid@<>'] = '0';
		$tj->atype = '1';
	}
	if(trim($where['atype'])!=''){
		if($where['atype'] == 0){
			$where['cwid'] = '0'; //间接代理
		}else{
			$where['cwid@<>'] = '0';//直接代理
		}
	}
}
unset ($where['atype']);

if(!$mu->isadmin){
	if($mu->level == 2 || $mu->level == 4){//财务主管 客服主管
		$where['cwid@<>'] = '0';
	}else{
		$where['cwid'] = $mu->id;
	}
}
$where['isyg'] = '1';
$where['relmoney@<>'] = '0'; 
$p = new Pagination();
$res = $p->model_list($ag->where($where)->order('id desc'));
$payTotal = $ag->where($where)->sum('money');
$payRelTotal = $ag->where($where)->sum('relmoney');
$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');
**/
