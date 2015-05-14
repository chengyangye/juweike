<?php
$wid = Session::get('wid');
$m = new Model('micro_music_m');
$list = new Model('micro_music_list');
$list1 = $list->where(array('wid'=>$wid))->map_array('id','name');
if(Request::get(1)){
	$m->find(Request::get(1));
	if($m->wid != $wid){
		die();
	}
}
if($m->try_post()){
	$m->wid = $wid;
	$m->save();
	tusi('保存成功');
	Redirect::delay_to('music',1);
}
