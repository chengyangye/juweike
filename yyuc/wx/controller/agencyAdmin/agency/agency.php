<?php
/**
 *   @desc 代理的用户
 * 
 * */

$user = new Model('user');
$where=array("agency_id"=>'0');
$kw = trim(Request::get('yhm'));
if($kw != ''){
	$where = array("un@~"=>$kw);
}
$p = new Pagination();
$level = array(2=>'普通会员',3=>'白金会员',4=>'钻石会员');
$res = $p->model_list($user->where($where)->order('id desc'));
$tit = '未被代理用户列表';

$ag_arr = array();