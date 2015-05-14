<?php
$yy = new Model('online_booking');
$yy_arr = $yy->where(array('wid'=>Session::get('wid')))->map_array('id', 'name');

$xw = new Model('wxweb');
$xw_arr = $xw->where(array('wid'=>Session::get('wid')))->order('id')->map_array('uuid', 'name');

$hy = new Model('micro_member_card');
$hy_arr = $hy->where(array('wid'=>Session::get('wid')))->map_array('id', 'name');
$m = new Model('micro_estate_set');
$m->find(array('wid'=>Session::get('wid')));
$linkurl = Conf::$http_path.'wfc/index.html?wid='.Session::get('wid');
if($m->try_post()){
	$m->wid = Session::get('wid');
	$m->save();
	tusi('保存成功');
}