<?php
$wid = Session::get('wid');
//删除本wid下的数据
$wxweb = new Model('wxweb');
$res = $wxweb->where(array('wid'=>$wid))->order('id')->list_all_array();
Response::json($res);
