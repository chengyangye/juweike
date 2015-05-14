<?php

//停用操作
$mu = Session::get('mu');
if('stop'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	$user_agency = new Model('user_agency');
	foreach ($ids as $id){		
		$user_agency->update(array('id'=>$id),array('isstop'=>1));
	}
	Response::write('ok');
}elseif('start'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	$user_agency = new Model('user_agency');
	foreach ($ids as $id){		
		$user_agency->update(array('id'=>$id),array('isstop'=>'0'));
	}
	Response::write('ok');
}elseif('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	$user_agency = new Model('user_agency');
	foreach ($ids as $id){		
		$user_agency->update(array('id'=>$id),array('isstop'=>2));
	}
	Response::write('ok');
}elseif('reldel'==Request::get(1)){
	$ids = explode(',', Request::post('id'));	
	foreach ($ids as $id){	
		$user_agency = new Model('user_agency');
		$user_agency->find($id);
		if($mu->isadmin || $user_agency->pid == $mu->id){
			$user_agency->remove();
		}
	}
	Response::write('ok');
}
Response::write('no');
