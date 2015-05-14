<?php
//坐标点
$center = Request::get('center');//
if(trim($center)==''){
	$center = '118.27155,34.99295';
}
$tit = Request::get('tit');
if(trim($tit)==''){
	$tit = '地图';
}
$zoom = Request::get('zoom');
if(trim($zoom)==''){
	$zoom = '15';
}
$mtit = trim(Request::get('mtit'));
$mcon = trim(Request::get('mcon'));