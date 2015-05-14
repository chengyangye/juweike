<?php

$photo_list = new Model('micro_photo_list');
$wid = Session::get('wid');
if(Request::get(1)){
	$photo_list->find(Request::get(1));
	if($photo_list->wid != Session::get('wid')){
		die();
	}
}
if($photo_list->try_post()){
	
	$photo_list->wid = Session::get('wid');
	//$photo_list->trans_file('pic');
	if($photo_list->save()){
		tusi('保存成功');
	}else{
		tusi('保存失败');
	}
	
	$id = $photo_list->id;
	$kw = $photo_list->keyword;
	if($id == ''){
		$id =  mysql_insert_id();
	}
	keyword_add('micro_photo_list',$id,$kw);
	Redirect::delay_to('list',1);
}