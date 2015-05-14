<?php
$u = new Model('user_agency');
$u->find(Session::get('id'));
if($u->try_post()){
	$u->trans_file('logo');
	$u->save();
	tusi('设置成功');
}