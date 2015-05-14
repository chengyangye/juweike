<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){


	$set = new Model('micro_shipin_set');
	$set->find(array('wid'=>Session::get('wid')));
	if(!$set->has_id()){
		die();
	}
	
	$hb = new Model('micro_shipin_haibao');
	$hb->find(array('wid'=>Session::get('wid')));
	$xwurl = '/weiweb/'.Session::get('wid').'/'.$set->xwid.'.html#mp.wx.qq.com';
	$yyurl = '/wx/onlineBooking-'.$set->yyid.'.html#mp.wx.qq.com';
	$hyurl = '/wx/hyk-'.$set->hyid.'.html#mp.wx.qq.com';
	
	
}else{
	die();
}
