<?php
$m = new SampleModel();
if('changepath'==Request::get(1)){
	$path = explode('?',Request::post('path'));
	$path = $path[0];
	$path = str_replace(Conf::$http_path, '', $path);
	$relpath = Session::get('upath').md5($path).'.'.File::extension($path);
	rename(YYUC_FRAME_PATH.YYUC_PUB.'/'.$path, YYUC_FRAME_PATH.YYUC_PUB.$relpath);
	Response::write($relpath);
}