<?php

if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('micro_survey_tk');
		$lbs->find($id);
		if($lbs->wid==Session::get('wid')){
			$lbs->remove();			
		}
	}
	Response::write('ok');
}else{
	$sid = Request::get(1);
	Session::set('sid',$sid);
	$lbs = new Model('micro_survey_tk');
	$res = $lbs->where(array('wid'=>Session::get('wid'),'sid'=>$sid))->list_all();
}
