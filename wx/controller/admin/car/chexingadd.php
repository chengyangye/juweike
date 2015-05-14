<?php
$wid = Session::get('wid');
$uid = Session::get('uid');
$bsx_arr = array('1'=>'自动变速箱(AT)','2'=>'手动变速箱(MT)','3'=>'手自一体','4'=>'无级变速箱(CVT)','5'=>'无级变速(VDT)','6'=>'双离合变速箱(DCT)','7'=>'序列变速箱(AMT)');
$nk = array(''=>'请选择')+ get_year(12);

$m = new Model('micro_car_chexing');
if(Request::get(1)){
	$m->find(Request::get(1));
	if($m->wid != $wid){
		die();
	}
}
if($m->try_post()){
	$m->wid = $wid;
	$m->uid = $uid;
	$m->save();
	tusi('保存成功');
	Redirect::delay_to('chexing',1);
}
$pinpai = new Model('micro_car_pinpai');
$pinpai_arr = $pinpai->where(array('wid'=>$wid))->map_array('id','name');

function get_year($n=12){
	$year = array();
	for($i = 0 ; $i <= $n ; $i++){
		$year[date('Y',strtotime("-$i Year"))] = date('Y',strtotime("-$i Year"));
	}
	$next_year[date('Y',strtotime("+1 Year"))] = date('Y',strtotime("+1 Year"));
    return ( $next_year + $year);
}
