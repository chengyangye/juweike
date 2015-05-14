<?php
$mu = Session::get('mu');
$utxt_arr = translate_level();
if(Request::post()){
	$uu_arr = array();
	for($i=2;$i<6;$i++){
		$uu = new Model('user_price');
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
$u = new Model('user_price');
$jgres = $u->order('id')->list_all();