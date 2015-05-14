<?php

$trdano = Request::post('out_trade_no');
$atrdano = Request::post('trade_no');
$jsarr = array();
$sign = Request::post('sign');
$sign_type = Request::post('sign_type');
$nid = Request::post('notify_id');
/**
unset($_POST['sign']);
unset($_POST['sign_type']);
foreach ($_POST as $k=>$v){
	$jsarr[] = $k.'='.$v;
}
**/
$yzres = HttpCurl::get_contents('https://mapi.alipay.com/gateway.do?service=notify_verify&partner=2088901443830772&notify_id='.$nid);
if($yzres=='true'){
	$online = new Model('online_pay_record');
	$online->find($trdano);
	$yfs = $online->months;
	$hylv = $online->level_id;
	$online->update(array('id'=>$trdano),array('status'=>'1'));
	$u = new Model('user');
	$u->find($online->uid);
	$u->next_level_id = $hylv;
	$dqsj = trim($u->mendtime)==''? time() : strtotime($u->mendtime);
	$ntimes = mktime(intval(date('G',$dqsj)),intval(date('i',$dqsj)),intval(date('s',$dqsj)),intval(date('m',$dqsj))+intval($online->months),intval(date('d',$dqsj)),intval(date('Y',$dqsj)));
	$u->next_mendtime = date('Y-m-d H:i:s',$ntimes);
	$u->save();
}else{
	Log::error('ALIPAY errs');
}