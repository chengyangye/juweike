<?php 
$wid = Session::get('wid');
$full_view = new Model('360_full_view');
if(Request::get(2)){
	$type_id = Request::get(2); 
	Session::set('huxing_id',$type_id);
}
if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('360_full_view');
		$lbs->find($id);
		if($lbs->wid==Session::get('wid')){
			$lbs->remove();
		}
	}
	
}

$tj = new SampleModel();
$where = $tj->load_array_from_get();
$where['wid'] = $wid;
//$where['uid'] = $type_id;13705020632
if(trim($where['name']!='')){
	$where['name@~'] = $where['name'];
}
unset($where['name']);

$p = new Pagination(100,10,false);
$res = $p->model_list($full_view->where($where)->order('id desc'));
