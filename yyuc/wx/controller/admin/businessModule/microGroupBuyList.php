<?php
/*
 *   @desc 微团购 用户数据监测
 * */
$lbs = new Model('micro_group_buy');

if(Request::get(1)){
	$rcd = new Model('micro_group_buy_record');
	if('used'==Request::get(1)){    //标识是否已领取奖项
		$rcd->find(Request::post('id'));
		$rcd->mdid = Request::post('md');
		$rcd->bz = Request::post('bz');
		$rcd->isused = '1';
		$rcd->save();
		Response::write('ok');
	}else{
		$lbs->find(Request::get(1));
		if($lbs->has_id() && $lbs->wid == Session::get('wid')){
			$isused_arr = array(''=>'全部','0'=>'未使用','1'=>'已使用');
			$mdlb_arr   = getShopList('arr');
			$tj = new SampleModel();
			$where = $tj->load_array_from_get();
			$where['tid'] =$lbs->id;
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

$mds = new Model('lbs');
$mdlb = $mds->where(array('istag'=>'1','wid'=>Session::get('wid')))->map_array('id', 'name');