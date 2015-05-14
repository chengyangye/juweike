<?php
/*
 *   关于用户在线预订的操作
 *   */

$lbs = new Model('online_booking');
if(Request::get(1)){
	$rcd = new Model('online_booking_record');
	if('used'==Request::get(1)){
		$rcd->find(Request::post('id'));
		$rcd->mdid = Request::post('md');
		$rcd->bz = Request::post('bz');
		$rcd->isused = '1';
		$rcd->save();
		Response::write('ok');
	}else{
		$lbs->find(Request::get(1));
		if($lbs->has_id() && $lbs->wid == Session::get('wid')){
			$isused_arr = array(''=>'全部','0'=>'未处理','1'=>'已处理');
			$mdlb_arr   = getShopList('arr');
			$tj = new SampleModel();
			$where = $tj->load_array_from_get();
			$where['cid'] =$lbs->id;
			if(trim($where['kssj'])!= ''){
				$where['ctime@>'] = $where['kssj'];
			}
			unset($where['kssj']);
			if(trim($where['jssj'])!= ''){
				$where['ctime@<'] = $where['jssj'];
			}
			unset($where['jssj']);
			
			$p = new Pagination();
			$res = $p->model_list($rcd->where($where)->order('id desc'));
		}
	}	
}
$mdlb = getShopList();
