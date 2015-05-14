<?php
if('back'==Request::get(1)){
	$ids = explode(',',Request::post('ids'));	
	foreach ($ids as $id){
		$hei = new Model('liuyan_hei');
		$hei->delete(array('id'=>$id));		
	}
	Response::write('ok');
}else{
	$l = new Model('liuyan_hei');
	$l->where(array('wid'=>Session::get('wid')))->order('id desc');
	$p = new Pagination(20);
	$res = $p->model_list($l);
}
