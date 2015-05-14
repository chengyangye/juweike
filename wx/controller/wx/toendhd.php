<?php
$tabname = Request::get(1);
if(Session::has('wxid') && Request::post('hid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$hdlog = new Model($tabname.'_record');
	if(Request::post('lid')){
		//第二遍中奖了要反馈填写的内容
		$hdlog->find(Request::post('lid'));
		if($hdlog->wxid == $wxid){
			$hdlog->tel = Request::post('sjh');
			$hdlog->un = Request::post('un');
			$hdlog->wxun = Request::post('wxun');
			$hdlog->jx = Session::get($hdlog->wxid.'jiang');
			$hdlog->save();
			
			$hd = new Model($tabname);
			$hd->find(Request::post('hid'));
			$jxcoln = 'j'.$hdlog->jx.'yj';
			$hd->$jxcoln = intval($hd->$jxcoln)+1;
			$hd->save();
			
			$op = new Model('openid');
			$op->find(array('wid'=>$wid,'wxid'=>$wxid));
			if($op->un != $hdlog->un || $op->tel != $hdlog->tel){
				$op->un = $hdlog->un;
				$op->tel = $hdlog->tel;
				$op->wxun= $hdlog->wxun;
				$op->wid = $wid;
				$op->wxid = $wxid;
				$op->save();
			}
		}
		Response::write('ok');
	}else{
		//第一遍出结果了要写入的内容
		$hdlog->wxid = Session::get('wxid');
		$hdlog->hid = Request::post('hid');
		$hdlog->jx = '0';
		$hdlog->jtime = DB::raw('now()');
		$hdlog->jdate = DB::raw('now()');
		$hdlog->save();
		$jmxm = Session::get($hdlog->wxid.'jiang');
		Response::json(array($jmxm,$hdlog->id));
	}
	
}
Response::write('0');