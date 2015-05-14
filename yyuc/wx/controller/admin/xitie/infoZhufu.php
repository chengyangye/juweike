<?php
$infoList = new Model('micro_xitie_infolist');
if(Request::get(1)){
	    $set_id = Request::get(1);
        $where['sid'] = Request::get(1); 
        $where['type']= 2;
        $p = new Pagination(100,10,false);
        $res = $p->model_list($infoList->where($where)->order('id desc'));
		
}