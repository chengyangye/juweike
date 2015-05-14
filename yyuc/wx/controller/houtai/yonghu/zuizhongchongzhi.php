<?php
$mu = Session::get('mu');
$ua = new Model('user');
$ua->find(Request::get(1));
$ma = new Model('user_agency');
$ma->find($mu->id);
$mp = new Model('user_price');
$prc_arr = $mp->where("id > '2'")->map_array('id', 'price2');
$m = new SampleModel();
$yhlx_arr = translate_level();
unset($yhlx_arr['1']);
unset($yhlx_arr['2']);
if(!$mu->isyg && $mu->isdirect){
	$mp2 = new Model('agency_price');
	$prc_arr2 = $mp2->map_array('id', 'price');
	$zsjiagebiao = intval($prc_arr2[$mu->level])/100*$ma->yue;
}
$ys = array();
for($i=1;$i<37;$i++){
	$ys[$i] = $i;
}

if(Request::post('ys')){
	$ys = intval(Request::post('ys'));
	$lx = Request::post('lx');
	$myfy = intval($prc_arr[$lx]);
	$zsys = intval($ys/6);
	$hf = $myfy*($ys-$zsys);
	if($hf<=0){
		die();
	}
	$wdye = intval($ma->yue);
	if($wdye<$hf){
		die();
	}else{
		//判断是否充值过
		if(!empty($ua->next_level_id) && $ua->next_level_id !='1'){
			die('no');
		}
		//进行充值
		$red = new Model('agency_pay_record');
		$red->uid = $ua->id;
		$red->pid = $ma->id;
		$red->money = $hf;
		$red->months = $ys;
		$red->level_id = $lx;
		$red->cwid = $ua->cwid;
		$red->un = $ua->un;
		$red->bz = Request::post('bz');
		$red->btime = DB::raw('now()');
		$red->isyg = $mu->isyg;
		if($red->save()){
			$ma->yue = intval($ma->yue)-$hf;
			if($ua->level_id == 1 || strtotime($ua->mendtime)<time()){
				$ua->next_level_id = $red->level_id;
				$ua->next_mendtime = date('Y-m-d H:i:s',strtotime('+'.$red->months." months"));	
			}
			if(strtotime($ua->mendtime) > time()){
				$ua->next_level_id = $red->level_id;
				$ua->next_mendtime = date('Y-m-d H:i:s',strtotime('+'.$red->months." months",strtotime($ua->mendtime)));
			}
			$ma->save();
			$ua->save();
		}
		Response::write('ok');
	}	
}