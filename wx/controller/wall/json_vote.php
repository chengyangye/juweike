<?php
$wid=Session::get('wid');
$m = new Model("micro_wall_vote");
$s = $m->where(array("wid"=>$wid))->list_all();
$s1 = "[";
$max_count = 0;
foreach($s as $a =>$b)
{
$max_count = $b->count>$max_count?$b->count:$max_count;
$count = $count + $b->count;
$s2 = "{\"id\":\"".$b->id."\",\"name\":\"".$b->name."\",\"count\":\"".$b->count."\",\"time\":\"".$b->time."\"}";
$s1.=$s2.",";
}
$s3 = substr($s1,0,-1)."]";
echo '{"count":"'.$count.'","max_count":"'.$max_count.'","list":'.$s3.'}';