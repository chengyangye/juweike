<?php

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
}elseif(!$mu->isadmin){
	if($mu->isyg){
		if($mu->level=='5'){
			//客服人员
			$where['kfid'] = $mu->id;
		}else if($mu->level=='3'){
			//财务人员
			$where['cwid'] = $mu->id;
		}else if($mu->level!='4' && $mu->level!='2' && $mu->level!='6' && $mu->level!='8'){//不是主管
			$where['ygid'] = $mu->id;
		}
	}else{
		$where['agid'] = $mu->id;
	}
}
//间接客户
$where['isstop'] = '2';

$p = new Pagination();
$res = $p->model_list($ag->where($where)->order('id desc'));
$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');