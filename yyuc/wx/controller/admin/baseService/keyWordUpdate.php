<?php
/*
 *   @desc 关键字的修改、删除操作
 * */
$keyWord = new Model('key_word');
$id = $_GET[2];
$keyWord->find($id);

$uid = Session::get('uid');
$wid = Session::get('wid');

//执行关键字的修改操作
if(Request::post()){  
	$keyWord->pubsId = $wid;
	$keyWord->load_from_post()->save(); 
	Redirect::to("keyWordReply.html");
}


