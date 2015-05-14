<?php
$sid = Session::get('sid');
$type= Request::get(1);
$w = new SampleModel();
if($w->try_post()){
	$pwd = $w->pwd;
	$set = new Model('micro_xitie_set');
	$set->find($sid);
	if($set->has_id()){
		if($pwd == $set->pwd){
			Redirect::to('wxt_infolist-'.$type);
		}else{
			tusi('密码不对');
		}
		
	}
	
}