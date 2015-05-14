<?php
access_control();
if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('yzddtk');
		$lbs->find($id);
		if($lbs->wid==Session::get('wid')){
			$lbs->remove();			
		}
	}
	Response::write('ok');
}else{
	$lbs = new Model('yzddtk');
	$res = $lbs->where(array('wid'=>Session::get('wid')))->list_all();
}
