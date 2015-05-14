<?php

if(Request::get(1)=='bj'){
	$id = Request::post('id');
	$red = new Model('micro_diancai_type_full_view');
	$red->find($id);
	$state = Request::post('s');
	if($state=='del'){
		$red->remove();
	}else{
		$red->state = $state;
		$red->save();
	}
	Response::write('ok');
}else{
	$red = new Model('micro_diancai_type_full_view');
	$where['wid'] = Session::get('wid');
	$ddres = $red->where($where)->list_all();
	$rednum = new Model('micro_diancai_type_full_view');
	$ddzs = $rednum->where(array('wid'=> Session::get('wid')))->count();
	$ddcg = $rednum->where(array('wid'=> Session::get('wid'),'state'=>'1'))->count();
	$ddsb = $rednum->where(array('wid'=> Session::get('wid'),'state'=>'2'))->count();
	$dddd = $rednum->where(array('wid'=> Session::get('wid'),'state'=>'0'))->count();
	$state_arr = array(''=>'全部','0'=>'未处理','1'=>'已处理','2'=>'已驳回','3'=>'已完成');
	$red = new Model('micro_diancai_type');
	$ddzs1 = $red->where(array('wid'=> Session::get('wid')))->list_all();
	foreach((array)$ddzs1 as $dd)
	{
	$cc[$dd->id] = $dd->name;
	}
}

