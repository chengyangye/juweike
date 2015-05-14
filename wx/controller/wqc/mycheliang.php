<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$m = new Model('micro_car_my');
	$m->find(array('wid'=>$wid,'wxid'=>$wxid));
	if($m->try_post()){
		$m->trans_file('pic');
		$m->wxid = $wxid;
		$m->wid = $wid;
		$m->save();
		tusi('更新成功');
		Redirect::to('guanhuai');
	}	
}
