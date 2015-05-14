<?php
access_control();
if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('ggk');
		$lbs->find($id);
		if($lbs->wid==Session::get('wid')){
			$lbs->remove();			
		}
	}
	Response::write('ok');
}else{
	$lbs = new Model('ggk');
	$res = $lbs->where(array('wid'=>Session::get('wid')))->list_all();
}

/*优惠券状态判断*/
function ztpd($q){
	if(strtotime($q->kssj)>time()){
		return '<span>未开始</span>';
	}
	
	if(strtotime($q->jssj)<time()){
		return '<span>已结束</span>';
	}
	return '<span>进行中</span>';
}

