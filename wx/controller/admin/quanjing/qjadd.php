<?php
$wid = Session::get('wid');
$type_id = Session::get('huxing_id');
$full_view = new Model('360_full_view');
if($full_view->try_post()){
	$full_view->wid = $wid;
	$full_view->uid = $type_id;
	$full_view->save();
	tusi('保存成功');
    Redirect::delay_to('qj');
}
if(Request::get(1)){
	$full_view->find(Request::get(1));
	if($full_view->wid != Session::get('wid')){
		die(Session::get('wid'));
	}
$url = "本全景页面：".Conf::$http_path.'qj/quanjing-'.Request::get(1).'.html';
}