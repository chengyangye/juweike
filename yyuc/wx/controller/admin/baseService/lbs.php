<?php
access_control();
if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('lbs');
		$lbs->find($id);
		if($lbs->wid==Session::get('wid')){
			$lbs->remove();			
		}
	}
	Response::write('ok');
}else{
	$lbs = new Model('lbs');
	$res = $lbs->where(array('wid'=>Session::get('wid')))->list_all();
	$sjlb = new Model('industry');
	$lb_arr = $sjlb->map_array('id', 'name');
	$cnlb = new Model('chinaarea');
	$cn_arr = $cnlb->map_array('id', 'name');
}

