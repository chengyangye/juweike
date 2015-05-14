<?php
$mu = Session::get('mu');
$ua = new Model('user_agency');
$ua->find(Request::get(1));
$ma = new Model('user_agency');
$ma->find($mu->id);
$mp = new Model('agency_price');
if(Request::post('je')){
	$hf = intval(Request::post('je'));
	if($hf<=0){
		die();
	}
	$wdye = intval($ma->yue);
	if($wdye<$hf && !$ma->isadmin){
		die();
	}else{
		//进行充值
		$red = new Model('admin_pay_record');
		$red->aid = $ua->id;
		$red->pid = $ma->id;
		$red->cwid = $ma->cwid;
		$red->money = $hf;
		$red->relmoney = '0';
		$red->bz = Request::post('bz');
		$red->ctime = DB::raw('now()');
		if($red->save()){
			if(!$ma->isadmin){
				$ma->yue = intval($ma->yue)-$hf;
				$ma->save();
			}			
			$ua->yue = intval($ua->yue)+$hf;			
			$ua->save();
		}
		Response::write('ok');
	}	
}