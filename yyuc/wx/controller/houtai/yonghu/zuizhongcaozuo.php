<?php
$mu = Session::get('mu');
//停用操作
if('stop'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	$user = new Model('user');
	foreach ($ids as $id){
		$user->update(array('id'=>$id),array('isstop'=>1));
	}
	Response::write('ok');
}elseif('start'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	$user = new Model('user');
	foreach ($ids as $id){
		$user->update(array('id'=>$id),array('isstop'=>'0'));
	}
	Response::write('ok');
}elseif('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	$user = new Model('user');
	foreach ($ids as $id){
		$user->update(array('id'=>$id),array('isstop'=>2));
	}
	Response::write('ok');
}elseif('reldel'==Request::get(1)){
	$ids = explode(',', Request::post('id'));	
	foreach ($ids as $id){
		$user = new Model('user');
		$user->find($id);
		if($mu->isadmin || $user->agid == $mu->id){
			$user->remove();
		}		
	}
	Response::write('ok');
}
Response::write('no');
