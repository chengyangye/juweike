<?php

if('val'==Request::get(1)){
	$ids = explode(',',Request::post('ids'));
	$l = new Model('liuyan');
	foreach ($ids as $id){
		$l->update(array('id'=>$id),array('isval'=>'1'));
	}
	Response::write('ok');
}elseif('del'==Request::get(1)){
	$ids = explode(',',Request::post('ids'));
	$l = new Model('liuyan');
	foreach ($ids as $id){
		$l->delete(array('id'=>$id));
	}
	Response::write('ok');
}elseif('hei'==Request::get(1)){
	$ids = explode(',',Request::post('ids'));	
	foreach ($ids as $id){
		$l = new Model('liuyan');
		$l->find($id);
		$hei = new Model('liuyan_hei');
		$hei->wxid = $l->wxid;
		$hei->wid = Session::get('wid');
		$hei->nc = $l->nc;
		$hei->msg = $l->msg;
		$hei->ctime = DB::raw('now()');
		@$hei->insert();
		$l->delete(array('wxid'=>$l->wxid));		
	}
	Response::write('ok');
}else{
	$m = new Model('liuyan_set');
	$m->find(array('wid'=>Session::get('wid')));
	$l = new Model('liuyan');
	$l->where(array('wid'=>Session::get('wid')))->order('id desc');
	$p = new Pagination(20);
	$res = $p->model_list($l);
	$zt_arr = array('0'=>'未审核','1'=>'已通过');
}
