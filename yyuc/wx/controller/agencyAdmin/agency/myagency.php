<?php
/**
 *   @desc 代理的用户
 * 
 * */

$user = new Model('user');
if(Auth::is_admin('admin')){
	$where=array("agency_id@<>"=>'0');
}else{
	$where=array("agency_id"=>Session::get('id'));
}

$kw = trim(Request::get('yhm'));
if($kw != ''){
	$where = array("un@~"=>$kw);
}
$p = new Pagination();
$level = array(2=>'普通会员',3=>'白金会员',4=>'钻石会员');
$res = $p->model_list($user->where($where)->order('id desc'));
Page::view('agency');
$tit = '已被代理用户列表';
$agus = new Model('user_agency');
$ag_arr = $agus->map_array('id','un');