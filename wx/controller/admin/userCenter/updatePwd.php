<?php
/**
 *   @desc 用户密码的修改
 * */
$user = new Model('user');
$user->find(Session::get('mainuid'));
if(Request::get(1) != ''){
	if(Session::get('uid')=='28'){
		Response::write('演示帐号，不允许修改密码！');
	}	
	$opwd    = Request::post('opwd');
	$pwd    = Request::post('pwd');
	$pwd1  = Request::post('pwd1');
	if($opwd != $user->pwd){
		Response::write('原密码错误');
	}
   if($pwd != $pwd1){
   	    Response::write(0);
   }
   if($pwd =='' ||$pwd1 ==''){
     	Response::write(2);
   }
   $user1 = new Model('user');
   $user1->find(Session::get('uid'));
   $user1->pwd = $pwd;
   $user1->ispwdcg= '1';
   Session::set('upc','1');
   $user1->save();
   Response::write('修改完成');
}

