<?php
$radio = array('0' => '首页','1' => '分类','2' => '商品');
$li = array('1' => '默认','2' => '商城红','3' => '橙色');
$set = new Model('ai9me_shop_style');
$set->find(array('wid'=>Session::get('wid')));
if($set->try_post()){
	$set->wid = Session::get('wid');
	$set->save();
	tusi("保存成功");
}