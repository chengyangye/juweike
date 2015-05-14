<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$h = new Model('micro_hotel');
$h->find(Request::get(1));
function hrefto($href){
	return trim($href)== '' ? 'javascript:;':$href;
}