<?php
/**
 *   @desc 代理充值操作
 * */
$mu = new Model('user_agency');
$mu->find(Session::get('id'));


$agency_pay = new Model('agency_pay_record');
$agency_id  = Session::get('id');
$level = array(2=>'普通会员',3=>'白金会员',4=>'钻石会员');
$zkl = new Model('agency_price');
$zklarr = $zkl->map_array('id', 'price');
$prc = new Model('user_price');
$prcarr = $prc->map_array('id', 'price');
foreach ($prcarr as $k=>$v){
	$prcarr['a'.$k]=$v;
	unset($prcarr[$k]);
}
$prcjson = json_encode($prcarr);
$myzk = $zklarr[$mu->isadmin];
if(trim($myzk)==''){
	$myzk = '0';
}
$ys = array();
for($i=1;$i<37;$i++){
	$ys[$i] = $i;
}
if(Request::get(1)){
    $u = new Model('user');
    $u->find(Request::get(1)); 
    $level_id = $u->level_id;	
	Session::set('uid',Request::get(1));
}

if($agency_pay->try_post()){
	$agency_pay2 = new Model('agency_pay_record');
	$agency_pay2->field('id')->find(array('uid'=>Session::get('uid'),'is_check'=>'0'));
	if($agency_pay2->has_id()){
		$agency_pay->id = $agency_pay2->id; 
	}
	$agency_pay->agency_id = $agency_id;
	$agency_pay->uid = Session::get('uid'); 
	$agency_pay->buy_time  = DB::raw('Now()');
    $agency_pay->save();
    $u1 = new Model('user');
    $u1->update(array('id'=>Session::get('uid')),array('agency_id'=>$agency_id));
   
    Redirect::to('/agencyAdmin/admin/payAudit.html');
    Session::remove('uid');	
}
