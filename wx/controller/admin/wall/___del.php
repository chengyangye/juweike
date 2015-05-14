<?php
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$wid = Request::get('wid');
$id = (int)$_GET['id'];
$set = new Model('micro_wall_content');
$set->find(array('wid'=>$wid,'id'=>$id))->delete();
die('0');