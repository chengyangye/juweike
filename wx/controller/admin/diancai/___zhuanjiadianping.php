<?php
$wid = Session::get('wid');
$m = new Model('micro_diancai_expert_comment');

if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('micro_diancai_expert_comment');
		$lbs->find($id);
		if($lbs->wid==$wid){
			$lbs->remove();
		}
	}
	Response::write('ok');
}else{

	$tj = new SampleModel();
	$where = $tj->load_array_from_get();
	$where['wid'] = $wid;
	if(trim($where['title']!='')){
		$where['title@~'] = $where['title'];
	}
	unset($where['title']);
	
	$p = new Pagination(100,10,false);
	$res = $p->model_list($m->where($where)->order('id desc'));
	
}