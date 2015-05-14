<?php
/**
 *   在线预订（用户前端数据的保存操作）
 * */
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$cid = Request::post('cid');
	$record = new Model('online_booking_record');
	$record->find(array('cid'=>$cid,'wxid'=>$wxid));
	if($record->has_id()){
		Response::write(0);
	}else{
		$record->wxid = $wxid;
		$record->wid = $wid;
		$record->cid = $cid;
		$record->ctime = Request::post('ctime');
		$record->un = Request::post('un');
		$record->tel = Request::post('tel');
		$record->rs = Request::post('rs');
		$record->type_name = Request::post('type_name');
		$record->type = Request::post('type');
		$record->type1_name = Request::post('type1_name');
		$record->type1 = Request::post('type1');
		$record->type2_name = Request::post('type2_name');
		$record->type2 = Request::post('type2');
		$record->remarks = Request::post('remarks');
		$record->save();
		
		$op = new Model('openid');
		$op->find(array('wid'=>$wid,'wxid'=>$wxid));
		if($op->un != $record->un || $op->tel != $record->tel){
			$op->un = $record->un;
			$op->tel = $record->tel;
			$op->wid = $record->wid;
			$op->wxid = $record->wxid;
			$op->save();
		}
		Response::write(1);
	}

}else{
	die();
}

