<?php
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$wid = Session::get('wid');
$id = $_GET['id'];
$set = new Model('micro_wall_content');
$set->find(array('id'=>$id));
$set->check = 1;
$set->save();
die('0');