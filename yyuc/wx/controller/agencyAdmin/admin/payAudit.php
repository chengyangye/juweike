<?php
/**
 *  @desc 对代理支付情况的审核(记录审核人、时间等)
 *        若代理账户余额不足以支付用户的充值金额（安代理级别折扣后），则审核不通过
 * */
$agency_pay = new Model('agency_pay_record');
$admin_id   = Session::get('id');
$shzt = trim(Request::get('shzt'));
$where = array();
if($shzt != ''){
	$where['is_check'] = $shzt;	
}
if(!Auth::is_admin('admin')){
  	$where['agency_id'] = Session::get('id');	
}
$agency_pay->where($where);
$p = new Pagination();
$res = $p->model_list($agency_pay->order('id desc'));

// 审核操作
if(Request::get(1)){
  	if(!Auth::is_admin('admin')){
  		die();
  	}
	$apr = new Model('agency_pay_record');
	$apr->find(array('id'=>Request::get(1)));
	$id    = $apr->id;
	$aid   = $apr->agency_id; 
	$check = checkAudit($apr,$aid);
	if($check == false){
		Redirect::back('该代理账户余额不足！');
		
	}else{
		$agency_pay->is_check = 1;
		$agency_pay->check_time = DB::raw('Now()');
		$agency_pay->check_user = $admin_id;
		$agency_pay->update(array('id'=>Request::get(1)));
		
		//当审核后，将会员级别和到期时间更新到user表
		$agency_pay->find(array('id'=>Request::get(1)));
		$u = new Model('user');
		$u->find(array('id'=>$agency_pay->uid));
		if($u->level_id == 1 || strtotime($u->mendtime)<time()){
			$u->next_level_id = $agency_pay->level_id;
			$u->next_mendtime = date('Y-m-d H:i:s',strtotime('+'.$agency_pay->buy_months." months"));
			$u->save();
		
		}
		if(strtotime($u->mendtime) > time()){
			$u->next_level_id = $agency_pay->level_id;
			$u->next_mendtime = date('Y-m-d H:i:s',strtotime('+'.$agency_pay->buy_months." months",strtotime($u->mendtime)));
			$u->save();
		}
	}
	Redirect::back('操作完成');
}
/*
 *   @desc 判断代理账户余额是否足以支付用户的充值金额
 *   @param $id (充值记录id)
 *          $aid  代理id
 *         
 *   @return boolean
 *   */
function checkAudit($agency_pay_record,$aid){	
	// get agency balance
	$user_agency = new Model('user_agency');
	$user_agency->find(array('id'=>$aid));

	$money = $agency_pay_record->money;
	

	if($user_agency->balance >= $money){
		$ag = new Model('user_agency');
		$ag->update(array('id'=>$aid),array('balance'=> $user_agency->balance - $money));
		return true;
	}else{
		return false;
	}
	
}

$agus = new Model('user_agency');
$ag_arr = $agus->map_array('id','un');
$lastdata =Redirect::last_data(); 
if($lastdata){
	tusi($lastdata);
}
