<?php
/**
 *   @desc  管理员为代理用户充值操作
 * */

$admin_pay = new Model('admin_pay_record');
$agency_id  = Session::get('id');

if(Request::get(1)){
    $u = new Model('user_agency');
    $u->find(Request::get(1)); 
    $level_id = $u->level_id;	
	Session::set('uid',Request::get(1));	
     
	
}

if($admin_pay->try_post()){
	
	$admin_pay->agency_id = $agency_id;
	$admin_pay->admin_id  = Session::get('uid'); 
	$admin_pay->buy_time  = DB::raw('Now()');
    $admin_pay->save();
    
    $user = new Model('user_agency'); 
    $user->find(array('id'=>Session::get('uid')));
    $money = $user->balance+$admin_pay->money;
    $u1 = new Model('user_agency');
    $u1->update(array('id'=>Session::get('uid')),array('balance'=>$money)); 
   
    Redirect::to('adminPay');
    Session::remove('uid'); 
   
	
}
