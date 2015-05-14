<?php
/*
 * @desc 针对话题的评论，赞骂等记录
 * */
$weibaht = new Model('weiba_ht');
if(Request::get(1)){
	$wb_con = new Model('weiba_con');
	$weibaht->find(Request::get(1));
	
	if($weibaht->has_id()){ 
		$tj = new SampleModel();
		$where = $tj->load_array_from_get();
		$where['wbid'] = $weibaht->id;
		if(trim($where['kssj'])!= ''){
			$where['stime@>'] = $where['kssj'];
		}
		unset($where['kssj']);
		if(trim($where['jssj'])!= ''){
			$where['stime@<'] = $where['jssj'];
		}
		unset($where['jssj']);
		$p = new Pagination();
		$res = $p->model_list($wb_con->where($where)->order('id desc'));
	
		
	}
	
	
	
}