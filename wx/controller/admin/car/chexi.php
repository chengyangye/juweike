<?php
$wid = Session::get('wid');
$m = new Model('micro_car_chexi');

if(Request::get(1)=='del'){
	$ids = explode(',', Request::post('id'));
	$lbs = new Model('micro_car_chexi');
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

$pinpai = new Model('micro_car_pinpai');
$pinpai_arr = $pinpai->where(array('wid'=>$wid))->map_array('id','name');