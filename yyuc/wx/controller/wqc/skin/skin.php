<?php
$qjid = Request::get(1);
$qj = new Model('micro_car_chexing_full_view');
$qj->find($qjid);
$txt = file_get_contents(YYUC_FRAME_PATH.YYUC_PUB.'/wqc/skin/vtourskin.xml');
$txt = str_replace('music1.mp3', $qj->mp3, $txt);
$txt = str_replace('music2.mp3', $qj->mp3, $txt);
Response::write($txt,Mime::$xml);