<?php
$wid = Session::get('wid');
$type_id = Session::get('huxing_id');
$full_view = new Model('micro_diancai_type_full_view');

if($full_view->try_post()){
	$full_view->wid = $wid;
	$full_view->type_id = $type_id;
	$full_view->save();
	tusi('保存成功');
    Redirect::delay_to('loupanhuxingquanjing-1-'.$type_id,1);
}
if(Request::get(1)){
	$full_view->find(Request::get(1));
	if($full_view->wid != $wid){
		die();
	}
}