<?php
set_time_limit(0);
ignore_user_abort(true);
/**
//自由注册用户 需要为其分配一个员工
$yg = new Model('user_agency');
$ptygs = $yg->field('id')->where(array('isyg'=>'1','isstop'=>'0','level'=>array('8','9')))->list_all();
$ptygsl = count($ptygs);
if($ptygsl > 0){
	if(!Session::get('WXGJ_PTYGJS')){
		Session::set('WXGJ_PTYGJS',0);
	}
	$us = new Model('user');
	$ures = $us->where(array('isdirect'=>'1','ygid'=>'28'))->field('id,ygid')->list_all();
	foreach ($ures as $u){
		if(trim($u->ygid)=='28' || trim($u->ygid)=='0'){
			$hyind = intval(Session::get('WXGJ_PTYGJS'));
			if($hyind>($ptygsl-1)){
				$hyind = 0;
			}
			$theyg = $ptygs[$hyind];
			$us->update(array('id'=>$u->id),array('ygid'=>$theyg->id));
			Session::set('WXGJ_PTYGJS',$hyind+1);
		}
	}
}

**/
$yg = new Model('user_agency');
$ptygs = $yg->field('id,un,telephone')->where(array('isyg'=>'1','isstop'=>'0'))->list_all();
$db = DB::get_db();
foreach ($ptygs as $yg){
	$db->execute("insert into `user` (`logtimes`,`level_id`,`next_level_id`,`agid`,`cwid`,`kfid`,`isstop`,`ygid`,`isdirect`,`isfromnet`,`pid`,`un`,`pwd`,`l_sheng`,`l_shi`,`l_xianqu`,`addr`,`jingli`,`lxr`,`tel`,`telephone`,`email`,`qq`,`mendtime`,`rtime`,`rip`) values ('0','4','1','1','11','15','0','0','1','0','0','".$yg->un."','abc123','1502','1620','1622',null,null,'".$yg->un."',null,'".$yg->telephone."',null,null,'2014-12-31',now(),'127.0.0.1')");
}
//insert into `user` (`logtimes`,`level_id`,`next_level_id`,`agid`,`cwid`,`kfid`,`isstop`,`ygid`,`isdirect`,`isfromnet`,`pid`,`un`,`pwd`,`l_sheng`,`l_shi`,`l_xianqu`,`addr`,`jingli`,`lxr`,`tel`,`telephone`,`email`,`qq`,`mendtime`,`rtime`,`rip`) values ('0','4','1','1','11','15','0','0','1','0','0','临沂孟庆群','abc123','1502','1620','1622',null,null,'临沂孟庆群',null,'18953965807',null,null,'2013-12-31',now(),'127.0.0.1')