<?php
$id = Request::get(1);
$wid = Request::get(2);
$list = new Model('micro_music_list');
$list1 = $list->where(array('id'=>$id,'wid'=>$wid))->order('id','pic')->list_all();
$m = new Model('micro_music_m');
$m1 = $m->where(array('wid'=>$wid,'zid'=>$id))->order('id','name','ms','pic')->list_all();//map_array('name','ms');
//tusi(print_r($list1));
