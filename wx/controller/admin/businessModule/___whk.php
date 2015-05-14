<?php
$lx = array('1'=>"生日贺卡",'2'=>"新年贺卡1",'3'=>"新年贺卡2",'4'=>"情人节表白");
$xg = array('1'=>"下落的枫叶",'2'=>"飘雪",'3'=>"飘玫瑰",'4'=>"星光");
$linkurl = Conf::$http_path.'hk/hk.html?wid='.Session::get('wid');
$m = new Model('z01_hk');
$m->find(array('wid'=>Session::get('wid')));
if($m->try_post()){
	$m->wid = Session::get('wid');
	$m->save();
	tusi('保存成功');
}
?>