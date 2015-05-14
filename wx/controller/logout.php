<?php
/*
 *   @desc 用户退出
 * */
$mu = null;
if(Session::has('mu')){
	$mu = Session::get('mu');
}
Session::clear();
Session::set('mu',$mu);
Cookie::remove('weixinid');
Redirect::delay_to('index',2);