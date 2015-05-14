<?php
$infoList = new Model('micro_xitie_infolist');
if(Request::get(1)){
	    $set_id = Request::get(1);
        $where['sid'] = Request::get(1); 
        $where['type']= 1;
		$res = $infoList->where($where)->order('id desc')->list_all();
}