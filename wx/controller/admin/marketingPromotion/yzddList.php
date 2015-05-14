<?php
/*
 *   @desc 一战到底活动--用户数据监测
 * */
$lbs = new Model('yzdd');

if(Request::get(1)){
	$rcd = new Model('yzdd_record');
	if('used'==Request::get(1)){    //标识是否已领取奖项
		$rcd->find(Request::post('id'));
		$rcd->iscom = '1';
		$rcd->save();
		Response::write('ok');
	}else{
		$lbs->find(Request::get(1));
		if($lbs->has_id() && $lbs->wid == Session::get('wid')){
			$isused_arr = array(''=>'全部','0'=>'未领奖','1'=>'已领奖');
			$tj = new SampleModel();
			$where = $tj->load_array_from_get();
			$where['yid'] =$lbs->id;
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

