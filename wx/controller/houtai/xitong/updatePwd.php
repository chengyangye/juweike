<?php
/**
 *   @desc 用户密码的修改
 * */
$mu = Session::get('mu');
$user = new Model('user_agency');
$un   = $mu->un;
$user->find($mu->id);
if(Request::post()){
   $oldpwd = Request::post('oldpwd');
   $pwd    = Request::post('pwd');
   $pwd1  = Request::post('pwd1');
   if($oldpwd != $user->pwd){
   	   Response::write(3);
   	   die;
   } 
   if($pwd != $pwd1){
   	    Response::write(0);
   	    die;  	
   }
   if($pwd =='' ||$pwd1 ==''){
     	Response::write(2);
   	    die;
   }
   $user->pwd = $pwd;
   $user->ispwdcg= '1';
   Session::set('hupc','1');
   $user->save();
   Response::write(1);
}
