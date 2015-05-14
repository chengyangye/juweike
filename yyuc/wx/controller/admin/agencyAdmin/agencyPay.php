<?php
/**
 *   @desc 代理充值操作
 * */

$agency_pay = new Model('agency_pay_record');
$agency_id  = session::get('agencyId') == '' ? 21 : session::get('agencyId');
$level = array(2=>'普通会员',3=>'白金会员',4=>'钻石会员');
if(Request::get(1)){
     Session::set('uid',Request::get(1));	
	
}

if($agency_pay->try_post()){
	$agency_pay->agency_id = $agency_id;
	$agency_pay->uid       = Session::get('uid'); 
	$agency_pay->buy_time  = DB::raw('Now()');
    $agency_pay->save();
    
    Redirect::to('agency');
	
}
