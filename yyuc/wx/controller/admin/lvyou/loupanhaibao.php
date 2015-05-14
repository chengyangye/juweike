<?php
$m = new Model('micro_lvyou_haibao');
$m->find(array('wid'=>Session::get('wid')));
if($m->try_post()){
	$m->wid = Session::get('wid');
	$m->save();
	tusi('保存成功');
}