<?php
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$wid = Session::get('wid');
$m = new Model("micro_wall_vote");
$rel = Request::post('rel');
if(!empty($rel))
{
if($rel == "sq")
{
$m1 = new Model("micro_wall_content");
$m1->where(array('wid'=>$wid))->delete();
}elseif($_POST['rel'] == "tp")
{
$f = $m->where(array("wid"=>$wid))->list_all();
foreach((array)$f as $g)
{
$h = $m->find(array("id"=>$g->id,"wid"=>$g->wid));
$h->count = 0;
$h->save();
}
}
}else{
foreach($_POST as $c =>$d)
{
$r = $m->find(array("id"=>$c,"wid"=>$wid));
$r->count = $d;
$r->save();
}
}
$s = $m->where(array("wid"=>$wid))->list_all();
 