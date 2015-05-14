<?php
/*
 *   @desc 微会员卡  用户数据监测
 * */
$lbs = new Model('micro_member_card');

if(Request::get(1)){
	$rcd = new Model('micro_member_card_record');
	if('used'==Request::get(1)){    
		$rcd->find(Request::post('id'));
		$rcd->isused = '1';
		$rcd->save();
		Response::write('ok');
	}else{
		$lbs->find(Request::get(1));
		if($lbs->has_id() && $lbs->wid == Session::get('wid')){
			$isused_arr = array(''=>'全部','0'=>'未使用','1'=>'已使用');
			$tj = new SampleModel();
			$where = $tj->load_array_from_get();
			$where['cid'] =$lbs->id;
			if(trim($where['sn']!='')){
				$where['sn@~'] = $where['sn'];
			}
			unset($where['sn']);
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
$md_arr = array(''=>'不限')+$mdlb;