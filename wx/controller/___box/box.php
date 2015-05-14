<?php
$wid = $_GET['wid'];//Session::get('wid');
$list = new Model('micro_music_list');
$list1 = $list->where(array('wid'=>$wid))->order('id','name','ms','pic')->list_all();//map_array('name','ms');

