<?php
access_control();
$res = Request::json();
$wid = Session::get('wid');
//删除本wid下的数据
$wxweb = new Model('wxweb');
$wxweb->delete(array('wid'=>$wid));
foreach ($res as $r){
	$r['wid'] = $wid;
	$wxweb = new Model('wxweb');
	$wxweb->save($r);
}
Response::write('ok');
