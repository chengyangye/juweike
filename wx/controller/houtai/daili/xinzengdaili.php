<?php
/**
 *   @desc 新增代理
 * */
$mu = Session::get('mu');
$user_agency = new Model('user_agency');
$kf = $user_agency->where(array('isyg'=>'1','OR'=>array('level'=>'5',' level'=>'4'),'isstop'=>'0'))->map_array('id','name');
$cw = $user_agency->where(array('isyg'=>'1','OR'=>array('level'=>'2',' level'=>'3'),'isstop'=>'0'))->map_array('id','name');
//业务人员
$yw = $user_agency->where(array('isstop'=>'0'))->order('isyg desc,id')->map_array('id','name');
$user_agency = new UserAgency();
$al_arr = translate_agency_level();
//如果是代理则不显示$al_arr

if(Request::get(1)){
	$user_agency->find(Request::get(1));
}

$coulddaili = false;
if($mu->isadmin  || ($mu->isyg && ($mu->level=='4' || $mu->level=='5'))){//不是客服
	$coulddaili = true;
}

if($user_agency->try_post()){
	if($user_agency->has(array('un'=>$user_agency->un,'id@<>'=>$user_agency->id))){
		tusi('帐号名称重复');
	}else{
		$user_agency->isyg = '0';
		if(!$mu->isadmin && !$mu->isyg){
			//代理只能创建普通间接代理
			$user_agency->level = '1';
			$user_agency->isdirect = '0';
		}
		$user_agency->rtime = DB::raw('now()');
		if(!$user_agency->has_id()){
			$user_agency->pid = $mu->id;
		}
		
		
		if($user_agency->save()){
			tusi('操作成功！');
			Redirect::delay_to('lowerAgency',2);
		}else{
			tusi('数据操作失败');
		}
	}
}
