<?php
$wid = Session::get('wid');
$m = new Model('micro_xitie_set');
$front = array('1'=>'新郎名字在前','2'=>'新娘名字在前');
if(Request::get(1)=='del'){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('micro_xitie_set');
		$lbs->find($id);
		if($lbs->wid == $wid){
			$lbs->remove();
		}
	}
	Response::write('ok');
	
}else{
	$tj = new SampleModel();
	$where = $tj->load_array_from_get();
	$where['wid'] = $wid;
	if(trim($where['gjz']!='')){
		$where['gjz@~'] = trim($where['gjz']);
	}
	unset($where['gjz']);
	$res = $m->where($where)->order('id desc')->list_all();
}
