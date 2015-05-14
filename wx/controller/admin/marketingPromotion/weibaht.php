<?php
/*
 *   @dese 微吧话题管理
 * */
$wid = Session::get('wid');
$wh = new Model('weiba_ht');
$p = new Pagination();
$res = $p->model_list($wh->where(array('wid'=>$wid))->order('id desc'));
// delete weiba topic and  con
if('del'==Request::get(1)){
	$weiba = new Model('weiba_ht');
	$wbcon = new Model('weiba_con');
	$ids = explode(',',Request::post('id'));
	foreach ($ids as $id){
		$weiba->find($id);
		$weiba->remove();
		$wbcon->delete(array('wbid'=>$id));
	}
}