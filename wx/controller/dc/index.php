<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$m = new Model('micro_diancai_set');
$m->find(array('wid'=>Request::get('1')));
$ddxjson = json_decode($m->xiangmu);