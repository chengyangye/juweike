<?php
/**
 *    @desc 我的公众账号
 * */
$uid = Session::get(mainuid);
$u = new Model('user');
$u->find($uid);
$user = new Model('user');
$res  = $user->field('id')->where(array('pid'=>$uid))->list_all();
$pubs = new Model('pubs');
$pub1 = $pubs->where(array('uid'=>$uid))->field('id,wun,isval,headpic')->find();
$u->headpic = $pub1->headpic;
$u->wun = $pub1->wun;
$u->wuid = $pub1->id;
$u->isval = $pub1->isval;

$xe = $u->isval=='1'?0:1;
foreach ($res as $r){
	$pubs = new Model('pubs');
	$pub1 = $pubs->where(array('uid'=>$uid))->field('id,wun,isval')->find(); 
	$r->wun = $pub1->wun;
	$r->wuid = $pub1->id;
	$r->isval = $pub1->isval;
	$r->headpic = $pub1->headpic;
}



