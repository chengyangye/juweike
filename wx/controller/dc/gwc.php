<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('1'));
}
$red = new Model('micro_diancai_type_full_view');
$b = new Model('micro_diancai_haibao');
$m = $b->find(array('wxid'=>$wxid,'wid'=>Request::get('1')));

if(!empty($_POST))
{
foreach($_POST as $a => $b)
{
$red->$a =$b;
}
$red->time=time();
$red->state = "0";
$red->wid = Request::get('1');
$red->wxid = Request::get('wxid');
$red->save();
$a=1;
}
