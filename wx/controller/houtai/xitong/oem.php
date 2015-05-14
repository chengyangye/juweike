<?php
$mu = Session::get('mu');
$u = new Model('user_agency');
$u->find($mu->id);
if($u->try_post()){
	$u->trans_file('logo');
	$u->save();
	tusi('设置成功');
}

Session::set('mu',$u);