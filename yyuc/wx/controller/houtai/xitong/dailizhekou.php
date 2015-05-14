<?php
$mu = Session::get('mu');
$utxt_arr = translate_agency_level();
if(Request::post()){
	$uu_arr = array();
	for($i=1;$i<5;$i++){
		$uu = new Model('agency_price');
		$uu_arr[$i] = $uu->find($i);
	}
	foreach ($_POST as $k=>$v){
		if(strpos($k,'@')){
			$kk = explode('@', $k);
			$uu = $uu_arr[$kk[1]];
			$uu->$kk[0] = $v;
			$uu->save();
		}
	}
	tusi('设置成功');
}
$u = new Model('agency_price');
$jgres = $u->order('id')->list_all();