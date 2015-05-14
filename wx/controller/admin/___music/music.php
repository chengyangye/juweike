<?php
$wid = Session::get('wid');
$m = new Model('micro_music_m');
if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('micro_music_m');
		$lbs->find($id);
		if($lbs->wid==Session::get('wid')){
			$lbs->remove();
		}
	}
	Response::write('ok');
}else{
	$tj = new SampleModel();
	$where = $tj->load_array_from_get();
	$where['wid'] = $wid;
	if(trim($where['huxing']!='')){
		$where['name@~'] = $where['huxing'];
	}
	unset($where['huxing']);
	$p = new Pagination(100,10,false);
	$res = $p->model_list($m->where($where)->order('id desc'));
	$list = new Model('micro_music_list');
	$list1 = $list->where(array('wid'=>$wid))->map_array('id','name');

}