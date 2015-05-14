<?php
/*
 *   @desc 微调研 用户数据监测
 * */
$lbs = new Model('micro_survey');

if(Request::get(1)){
			$rcd = new Model('micro_survey_record');
			$lbs->find(Request::get(1));
			if($lbs->has_id() && $lbs->wid == Session::get('wid')){
				$where = array('cid'=>Request::get(1));
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
