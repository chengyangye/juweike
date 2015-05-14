<?php
$target = 'daililiebiaojianjie.html';
Page::view('lowerAgency');
/* 
 *   @desc 代理列表
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
$where['isdirect'] = '0';
if(trim($where['isstop'])==''){
	$where['isstop@<>'] = '2';
}
if(Request::get(1) && Request::get(2) == md5(Request::get(1).$mu->pwd)){
	$where['pid'] = Request::get(1);
}else if(!$mu->isadmin){
	if($mu->isyg){
		if($mu->level=='5'){
			//客服人员
			$where['kfid'] = $mu->id;
		}else if($mu->level=='3'){
			//财务人员
			$where['cwid'] = $mu->id;
		}else if($mu->level!='4' && $mu->level!='2' && $mu->level!='6' && $mu->level!='8'){//不是主管
			$where['pid'] = $mu->id;
		}
	}else{
		$where['pid'] = $mu->id;
	}
}

$p = new Pagination();


$res = $p->model_list($ag->where($where)->order('id desc'));
$agency = new Model('user_agency');
$agency_arr = $agency->map_array('id','un');
