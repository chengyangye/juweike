<?php
/*
 *   @desc 幸运机活动 用户数据监测
 * */
$lbs = new Model('xyj');

if(Request::get(1)){
	$rcd = new Model('xyj_record');
	if('used'==Request::get(1)){    //标识是否已领取奖项
		$rcd->find(Request::post('id'));
		$rcd->mdid = Request::post('md');
		$rcd->bz = Request::post('bz');
		$rcd->iscom = '1';
		$rcd->save();
		Response::write('ok');
	}else{
		$lbs->find(Request::get(1));
		if($lbs->has_id() && $lbs->wid == Session::get('wid')){
			$jiangxiang_arr = array(''=>'全部','0'=>'未中奖','1'=>'奖项一','2'=>'奖项二','3'=>'奖项三','4'=>'奖项四','5'=>'奖项五','6'=>'奖项六','7'=>'奖项七','8'=>'奖项八');
			$isused_arr = array(''=>'全部','0'=>'未领奖','1'=>'已领奖');
			$mdlb_arr   = getShopList('arr');
			$tj = new SampleModel();
			$where = $tj->load_array_from_get();
			$where['hid'] =$lbs->id;
			if(trim($where['kssj'])!= ''){
				$where['jtime@>'] = $where['kssj'];
			}
			unset($where['kssj']);
			if(trim($where['jssj'])!= ''){
				$where['jtime@<'] = $where['jssj'];
			}
			unset($where['jssj']);
			$p = new Pagination();
			$res = $p->model_list($rcd->where($where)->order('id desc'));
		}
	}	
}
$mdlb = getShopList();

