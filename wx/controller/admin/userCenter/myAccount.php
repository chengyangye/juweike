<?php
/**
 *    @desc 我的账户信息
 * */
$user = new Model('user');
$user->find(Session::get('mainuid'));
if($user->try_post()){
	$user->save();
	tusi('更新成功');
}