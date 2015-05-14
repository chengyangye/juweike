<?php
$wid = Session::get('wid');
$my_tk = new Model('my_answer');
if($wid){
	$p = new Pagination();
	$res = $p->model_list($my_tk->where(array('wid'=>$wid))->order('id desc'));
	
}else{
	die;
}