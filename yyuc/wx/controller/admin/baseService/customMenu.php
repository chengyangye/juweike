<?php
access_control();
$db = DB::get_db();
$wid = Session::get('wid');
//单图文
$sql ="select r.id,r.wid,c.title from  res as r inner join res_content  as c  on r.id=c.rid where r.wid={$wid} and c.ord=1 and r.typ='1'";
$dtwres  = $db->query($sql);
//多图文
$sql ="select r.id,r.wid,c.title from  res as r inner join res_content  as c  on r.id=c.rid where r.wid={$wid} and c.ord=1 and r.typ='2'";
$ddtwres  = $db->query($sql);
//优惠券
$m_yhq = new Model('coupon');
$yhqres = $m_yhq->where(array('wid'=>$wid))->order('id desc')->list_all();
//优惠券
$m_wyy = new Model('online_booking');
$wyyres = $m_wyy->where(array('wid'=>$wid))->order('id desc')->list_all();
//刮刮卡
$m_ggk = new Model('ggk');
$ggkres = $m_ggk->where(array('wid'=>$wid))->order('id desc')->list_all();
//幸运大转盘
$m_xydzp = new Model('xydzp');
$xydzpres = $m_xydzp->where(array('wid'=>$wid))->order('id desc')->list_all();
//一战到底
$m_yzdd = new Model('yzdd');
$yzddres = $m_yzdd->where(array('wid'=>$wid))->order('id desc')->list_all();
//幸运机
$m_xyj = new Model('xyj');
$xyjres = $m_xyj->where(array('wid'=>$wid))->order('id desc')->list_all();
//微会员卡
$m_whyk = new Model('micro_member_card');
$whykres = $m_whyk->where(array('wid'=>$wid))->order('id desc')->list_all();
//微团购
$m_wtg = new Model('micro_group_buy');
$wtgres = $m_wtg->where(array('wid'=>$wid))->order('id desc')->list_all();
//微调研
$m_wdy = new Model('micro_survey');
$wdyres = $m_wdy->where(array('wid'=>$wid))->order('id desc')->list_all();

//微投票
$m_wtp = new Model('micro_vote');
$wtpres = $m_wtp->where(array('wid'=>$wid))->order('id desc')->list_all();

//原始数据

$m = new Model('menu');
$m->find(array('wid'=>$wid));




