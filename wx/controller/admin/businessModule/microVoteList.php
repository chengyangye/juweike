<?php
/*
 *   @desc 微投票 用户数据监测
 * */
$lbs = new Model('micro_vote');

if(Request::get(1)){
    	$rcd = new Model('micro_vote_record');
		$lbs->find(Request::get(1));
		if($lbs->has_id() && $lbs->wid == Session::get('wid')){
			$where = array('cid'=>$lbs->id);
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

