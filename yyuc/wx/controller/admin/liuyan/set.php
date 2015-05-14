<?php
$m = new Model('liuyan_set');
$m->find(array('wid'=>Session::get('wid')));
if($m->try_post()){
	$m->wid = Session::get('wid');
	$m->save();
	tusi('保存成功');
}