<?php
$uid = Session::get('uid');
$wid = Session::get('wid');
$kw = new Model('key_word');

//图文标题的获得
$res = new Model('res');
$rs  = $res->where(array('wid'=>$wid))->list_all_array();
$con = array();
$rs_title = array();
foreach($rs as $v){
	$con[$v['id']] = json_decode($v['con'],true);
	$rs_title[$v['id']] = $con[$v['id']]['tit'];
	if(count($con[$v['id']][0]) > 1){
		$rs_title[$v['id']] = $con[$v['id']][0]['tit'];
	}
}
$matching_type = array('1'=>'模糊匹配','2'=>'全匹配');
$reply_type    = array('1'=>'文字','2'=>'图文');
//end
$ooid = 0;
if(Request::get(1)){
	$ooid = Request::get(1);
	$kw->find(Request::get(1));
	if($kw->pubsId != $wid){
		die();
	}
}
if($kw->try_post()){
	$kw->pubsId = $wid;
	$kw->save();
	tusi('保存成功');
	Redirect::delay_to('keyword',1);
}