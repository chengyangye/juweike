<?php
//优惠券活动
$jjf = Request::get(1)=='zan'?1:-1;
$conid = Request::post('id');
$con = new Model('weiba_con');
$con->find($conid);
$res = 0;
if($jjf==1){
	$con->zan = intval($con->zan)+1;
	$res = $con->zan;
}else{
	$con->ma = intval($con->ma)+1;
	$res = $con->ma;
}
$con->save();
Response::write($res);