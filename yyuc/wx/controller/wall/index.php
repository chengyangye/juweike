<?php
if(Request::get('wxid')){
	Session::set('wid',Request::get('wid'));
}
$wid = Session::get('wid');
$m = new Model('micro_wall_config');
$m->find(array('wid'=>$wid));
$color_str = 'new Array(';
foreach((array)$m->items_color as $r){
    $color_str .= '1'.$r.',';
}
//$color_str = rtrim($color_str, ",").');';
$color_str = 'new Array("rgba(93,181,11,.8)","rgba(229,182,0,.8)","rgba(239,112,39,.8)","rgba(10,106,54,.8)","rgba(0,175,215,.8)");';
$last_id = 0;

if(!$m->show_last) try{
    $pdobj = getpdobj();
    if($pdobj){
        $last_id = (int)$pdobj->query('select max(id) from `micro_wall_config`')->fetchColumn();
    }else{
        die('-02');
    }
}catch(PDOException $e){
    die('-1');
}
