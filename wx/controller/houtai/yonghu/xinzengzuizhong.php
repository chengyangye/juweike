<?php
$mu = Session::get('mu');
$user = new User1();

$user_agency = new Model('user_agency');

$kf = $user_agency->where(array('isyg'=>'1','OR'=>array('level'=>'5',' level'=>'4'),'isstop'=>'0'))->map_array('id','name');
$cw = $user_agency->where(array('isyg'=>'1','OR'=>array('level'=>'2',' level'=>'3'),'isstop'=>'0'))->map_array('id','name');
//网销售员工
$yg = $user_agency->where(array('isyg'=>'1','level'=>'1','isstop'=>'0'))->map_array('id','name',array('0'=>'-请选择-'));
//业务人员
$yw = $user_agency->where(array('isstop'=>'0'))->order('isyg desc,id')->map_array('id','name');
if(Request::get(1)){
	$display = true;
	$user->find(Request::get(1));
	$pubs = new Model('pubs');
	$pubs->find(array('uid'=>Request::get(1),'isval'=>1));
	if($pubs->has_id()){
		$ms ="已绑定，绑定名：".$pubs->wun;
	}else{
		$ms ='未绑定';
	}
}
if($user->try_post()){
	if($user->has(array('un'=>$user->un,'id@<>'=>$user->id))){
		tusi('帐号名称重复');
	}else{
		//$user->agid = $mu->id;
		if($mu->isyg && !$mu->isadmin){
			$user->ygid = $mu->id;
		}
		if(!$mu->isyg && !$mu->isadmin){
			//不是员工则为间接用户
			$user->isdirect = '0';
		}
		if(!$user->has_id()){
			$user->level_id = '5';
			$user->mendtime=date('Y-m-d',time()+1296000);
			$user->rtime = DB::raw('now()');
			$user->rip = Request::ip();
			$user->isfromnet = '0';
			if(!$mu->isadmin){
				$user->agid = $mu->id;
			}
		}
		if($user->save()){
			tusi('操作成功！');
			Redirect::delay_to('lowerUser',2);
		}else{
			tusi('数据操作失败');
		}
	}
}
