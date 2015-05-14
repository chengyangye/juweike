<?php
$wid = Session::get('wid');
$set = new Model('micro_wall_config');
$set->find(array('wid'=>$wid));
$rel = Request::post('rel');
$val = Request::post('val');
if($set->try_post()){
	$set->wid = $wid;
if(!empty($rel)){
	$set->$rel = $val;
	$set->wid = $wid;
	$set->save();
	tusi('设置成功');
	die();
	}
	$set->save();
	tusi('设置成功');
	$vote1 = new Model('micro_wall_vote');
	$ff = $vote1->where(array('wid'=>$wid))->list_all();
	foreach((array)$ff as $fff)
	{
	if(strpos($set->vote_list,"|".$fff->name."|") === false)
	{
	$vote1->find(array('wid'=>$wid,'name'=>$fff->name))->delete();
	}
	}
	$v = explode("|",$set->vote_list);
	foreach($v as $g => $f)
	{
	$vote = new Model('micro_wall_vote');
	$vote->find(array('name'=>$f));
	$vote->wid=$wid;
	$vote->name=$f;
	$vote->count=0;
	$vote->save();
	}
}