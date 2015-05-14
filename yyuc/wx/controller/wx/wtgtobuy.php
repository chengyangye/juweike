<?php
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$tgr = new Model('micro_group_buy_record');
	$tgid = Request::post('id');
	$tg = new Model('micro_group_buy');
	$tg->find($tgid);
	$tgr->find(array('tid'=>$tgid,'wxid'=>$wxid,'isused'=>'0'));
	if(!$tgr->has_id()){
		$tgr->wxid = $wxid;
		$tgr->wid = $wid;
		$tgr->tid = $tgid;
		$tgr->ctime = DB::raw('now()');
		$tgr->un = Request::post('un');
		$tgr->tel = Request::post('tel');
		$tgr->sl = Request::post('num');
		$tgr->sn = get_sn('TG');
		$tgr->save();
		$tg->ctrs = intval($tg->ctrs)+1;
		$tg->tgsl = intval($tg->tgsl)+intval($tgr->sl);
		$tg->save();
	}
	//查找用户信息
	$op = new Model('openid');
	$op->find(array('wid'=>$wid,'wxid'=>$wxid));
	if($op->un != $tgr->un || $op->tel != $tgr->tel){
		$op->un = $tgr->un;
		$op->tel = $tgr->tel;
		$op->wid = $tgr->wid;
		$op->wxid = $tgr->wxid;
		$op->save();
	}
	Response::write('ok');
}else{
	die();
}

