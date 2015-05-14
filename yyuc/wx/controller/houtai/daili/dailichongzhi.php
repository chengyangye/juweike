<?php
$mu = Session::get('mu');
$ua = new Model('user_agency');
$ua->find(Request::get(1));
$ma = new Model('user_agency');
$ma->find($mu->id);
$mp = new Model('agency_price');
$prc_arr = $mp->map_array('id', 'price');
$zszk = intval($prc_arr[$ua->level])/10;
if(!$mu->isyg && $mu->isdirect){
	$zsjiagebiao = intval($prc_arr[$mu->level])/100*$ma->yue;
}
if(Request::post('je')){
	if(!$mu->isyg){
		$zk = 100;
	}else{
		$zk = intval($prc_arr[$ua->level]);
	}	
	$hf = intval(Request::post('je'));	
	$je= intval($hf*100/$zk);
	if($hf<=0){
		die();
	}
	$wdye = intval($ma->yue);
	if($wdye<$hf){
		die();
	}else{
		//进行充值
		$red = new Model('admin_pay_record');
		$red->aid = $ua->id;
		$red->pid = $ma->id;
		$red->money = $je;
		$red->relmoney = $hf;
		$red->cwid = $ua->cwid;
		$red->bz = Request::post('bz');
		$red->ctime = DB::raw('now()');
		$red->isyg = $mu->isyg;
		$red->aun = $ua->un;
		if($red->save()){
			$ma->yue = intval($ma->yue)-$hf;
			$ua->yue = intval($ua->yue)+$je;
			$ma->save();
			$ua->save();
		}
		Response::write('ok');
	}	
}