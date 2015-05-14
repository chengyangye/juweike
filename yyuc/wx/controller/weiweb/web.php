<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}

$wid = Request::part(1);
Session::set('wid',$wid);
$pageid = Request::part(2);
$m = new Model('wxweb');
$m->find(array('wid'=>$wid,'uuid'=>$pageid));
if($m->has_id()){
	
}else{
	Redirect::to_404();
}