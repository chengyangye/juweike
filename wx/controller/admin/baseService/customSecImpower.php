<?php
$p = new Model('pubs');
$p->find(array('id'=>Session::get('wid')));
$badun = '';
if($p->try_post()){
	$p->uid = Session::get('uid');
	$p->save();
	Session::set('wid',$p->id);
	tusi('保存成功');
}
