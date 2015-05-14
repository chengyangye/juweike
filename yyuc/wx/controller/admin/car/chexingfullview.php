<?php 
$wid = Session::get('wid');
$full_view = new Model('micro_car_chexing_full_view');
if(Request::get(2)){
	$type_id = Request::get(2); 
	Session::set('xid',$type_id);
}
if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('micro_car_chexing_full_view');
		$lbs->find($id);
		if($lbs->wid==Session::get('wid')){
			$lbs->remove();
		}
	}
	
}
if('checkone'==Request::get(1)){
	$full_view->find(array('wid'=>$wid,'xid'=>Session::get('xid')));
	if($full_view->has_id()){
		Response::write(1);
	}else{
		Response::write(2);
	}
}
$where['wid'] = $wid;
$where['xid'] = $type_id;
$res = $full_view->where($where)->order('id')->list_all();



