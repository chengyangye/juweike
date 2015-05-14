<?php
/**
 *   @desc 用户密码的修改
 * */
$user = new Model('user_agency');
$user->find(Session::get('id'));
if(Request::get(1) != ''){
   $pwd    = Request::post('pwd');
   $pwd1  = Request::post('pwd1'); 
   if($pwd != $pwd1){
   	    Response::write(0);
   	    die;  	
   }
   if($pwd =='' ||$pwd1 ==''){
     	Response::write(2);
   	    die;
   }
   $user->pwd = $pwd;
   $user->save();
   Response::write(1);
}
