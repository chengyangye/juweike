<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('1'));
}
$wxid=Request::get('wxid');
$red = new Model('micro_diancai_type_full_view');
$f = $red->where(array('wxid'=>$wxid,'wid'=>Request::get('1')))->list_all();
$zt = array("0"=>"未处理","1"=>"已处理","2"=>"已驳回","3"=>"已完成");

