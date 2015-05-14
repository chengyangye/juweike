<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$h = new Model('micro_hotel');
$h->find(Request::get(1));
$r = new Model('micro_hotel_room');
$r->find(Request::get(2));

function hrefto($href){
	return trim($href)== '' ? 'javascript:;':$href;
}