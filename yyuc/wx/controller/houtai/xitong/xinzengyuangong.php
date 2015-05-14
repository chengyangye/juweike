<?php
$mu = Session::get('mu');
$al_arr = translate_employee_level();
$ag = new Employee();
if(Request::get(1)){
	$ag->find(Request::get(1));
}else{
	$ag->level = '7';
}
$user_agency = new Model('user_agency');
$ld = $user_agency->where(array('isyg'=>'1'))->map_array('id','name');
if($ag->try_post()){
	if($ag->has(array('un'=>$ag->un,'id@<>'=>$ag->id))){
		tusi('帐号名称重复');
	}else{
		$ag->isyg = '1';
		if(!$mu->isadmin){
			$ag->pid = $mu->id;
		}		
		$ag->rtime = DB::raw('now()');
		if($ag->save()){
			tusi('操作成功！');
			Redirect::delay_to('yuangongliebiao',2);
		}else{
			tusi('数据操作失败');
		}
	}	
}

