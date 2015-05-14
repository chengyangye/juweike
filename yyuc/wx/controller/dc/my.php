<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('1'));
}
$wxid =empty($_GET['wxid'])?Request::get('wxid'):$_GET['wxid'];
$a = new Model('micro_diancai_haibao');
$m = $a->find(array('wxid'=>$wxid,'wid'=>Request::get('1')));
if($m->try_post()){
	$m->wid = Request::get('1');
	$m->wxid = $wxid;
	$m->save();
	tusi('±£´æ³É¹¦');
	Redirect::delay_to('index-'.Request::get('1'),1);
}