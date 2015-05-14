<?php

if(Request::get(1)=='bj'){
	$id = Request::post('id');
	$red = new Model('micro_car_yyby_record');
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
	$m = new SampleModel();
	$where = $m->load_array_from_get();
	$h = new Model('micro_car_yyby');
	$h->find(Request::get(1));
	$red = new Model('micro_car_yyby_record');
	$where['hid'] = $h->id;
	$where['wid'] = Session::get('wid');
	$ddres = $red->where($where)->order('id desc')->list_all();
	$rednum = new Model('micro_car_yyby_record');
	$ddzs = $rednum->where(array('hid'=>$h->id,'wid'=> Session::get('wid')))->count();
	$ddcg = $rednum->where(array('hid'=>$h->id,'wid'=> Session::get('wid'),'state'=>'1'))->count();
	$ddsb = $rednum->where(array('hid'=>$h->id,'wid'=> Session::get('wid'),'state'=>'2'))->count();
	$dddd = $rednum->where(array('hid'=>$h->id,'wid'=> Session::get('wid'),'state'=>'0'))->count();
	$p = new Pagination();
	$ddres = $p->model_list($red);
	//$state_arr = array('0'=>'已预订','1'=>'已确认','2'=>'已取消','3'=>'已完成');
	$state_arr = array(''=>'全部','0'=>'等待确认','1'=>'已确认','2'=>'已放弃','3'=>'已保养');
	$sf_arr = array('0'=>'否','1'=>'是');
	$ddxjson = json_decode($h->bookingset);
	$zdcount = count($ddxjson);
	
	$my_car = new Model('micro_car_my');
	$cpai_arr = $my_car->where(array('wid'=>Session::get('wid')))->map_array('wxid', 'cpai');
	
}

