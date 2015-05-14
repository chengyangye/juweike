<?php
$wid = Session::get('wid');
$m = new Model('micro_car_xiaoshou');
$type_arr = array('1'=>'售前','2'=>'售后','3'=>'售前/售后');
if(Request::get(1)=='del'){
	$ids = explode(',', Request::post('id'));
	$lbs = new Model('micro_car_xiaoshou');
	foreach ($ids as $id){
		$lbs->find($id);
		if($lbs->wid == $wid){
			$lbs->remove();
		}
	}
	Response::write('ok');
	
}else{
	$where['wid'] = $wid;
	$res = $m->where($where)->order('id desc')->list_all();
}
