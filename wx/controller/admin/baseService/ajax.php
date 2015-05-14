<?php
$autoreply = new Model('first_attention');
$wid = Session::get('wid');
$autoreply->find(array('wid'=>$wid));
/*
**   回复类型为文字的操作
*/
if($_POST['type'] == 0){

	$autoreply->typ    = $_POST['type'];
	$autoreply->content = trim($_POST['content']);
	$autoreply->wid     = $wid;
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
	
	$autoreply->typ         = $ary[1];
	$autoreply->resource_id = $ary[0];
	$autoreply->wid         = $wid;
	if($autoreply->save()){
		Response::write(1);
	}else{
		Response::write(0);
	}
	
}
