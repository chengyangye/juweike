<?php
//优惠券活动
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	if(Request::post()){
		$wbht = Request::post('wbht');
		$un = Request::post('un');
		$op = new Model('openid');
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
		if($op->un != $un->un){
			$op->un = $un;
			$op->wid = $wid;
			$op->wxid = $wxid;
			$op->save();
		}
		//对话题进行解析
		$hts = explode('#', '@'.$wbht);
		$ht = $hts[1];
		$con = $hts[2];
		$m = new Model('weiba_ht');
		$m->find(array('wid'=>$wid,'keywd'=>$ht));
		if(!$m->has_id()){
			$m->wid = $wid;
			$m->wxid = $wxid;
			$m->keywd = $ht;
			$m->stime = DB::raw('now()');
			$m->un = $un;
			$m->save();
		}
		
		$mm = new Model('weiba_con');
		$mm->wbid = $m->id;
		$mm->wxid = $wxid;
		$mm->con = $con;
		$mm->stime = DB::raw('now()');
		$mm->un = $un;
		$mm->save();
		Redirect::delay_to('weiba-'.$wid.'-'.$m->id.'.html',0);
	}else if(Request::get(1)){
		$m = new Model('weiba_ht');
		$m->find(Request::get(1));
		$htnr = '#'.$m->keywd.'#';
		Page::view('weibaadd');
		//查找用户信息
		$op = new Model('openid');
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	}
	
}else{
	die();
}

