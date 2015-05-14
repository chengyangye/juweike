<?php
$ord = Request::get(1);
$wid = Request::get('wid');
$wwid = Request::get('wwid');
$rid = Request::get('rid');
$rescon = new Model('res_content');
$rescon->find(array('ord'=>$ord,'rid'=>$rid));
if(trim($rescon->rid)==''){
	Redirect::to('/404.html');
}