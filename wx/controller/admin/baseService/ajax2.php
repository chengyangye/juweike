<?php
$autoreply = new Model('key_word');
$id = Request::get(1);
$wid = Session::get('wid');
if($id !='0'){
	$autoreply->find($id);
}
$autoreply->keyWord = Request::post('kw');
$autoreply->matchingType = Request::post('pptyp');
$autoreply->pubsId  = $wid;
/*
**   回复类型为文字的操作
*/
if($_POST['type'] == 0){
	$autoreply->ctime = DB::raw('now()');
	$autoreply->replyType = '1';
	$autoreply->replyContent = trim($_POST['content']);
	if($autoreply->save()){
		Response::write(1);
	}else{
		Response::write(0);
	}
}
/**
 *   回复类型为多图文的操作
 * */
if($_POST['type'] == 1){
	
	$con = $_POST['con'];
	$ary = explode('-', $con);	
	$autoreply->replyType = '2';
	$autoreply->resId = $ary[0];
	$autoreply->ctime = DB::raw('now()');
	if($autoreply->save()){
		Response::write(1);
	}else{
		Response::write(0);
	}
	
}
