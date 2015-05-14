<?php
$linkurl = Conf::$http_path.'hk/hk.html?wid='.Session::get('wid');
$m = new Model('z01_hk');
$m->find(array('wid'=>$_GET['wid']));
if($m->try_post()){
	$m->wid = $_GET['wid'];
	$m->save();
	tusi('保存成功');
}
?>