<?php
$wid = Session::get('wid');
$uid = Session::get('uid');
$set = new Model('micro_shop_keyword');
$set->find(array('wid'=>$wid));

$s = new Model('ai9me_shop_style');
$s->find(array('wid'=>Session::get('wid')));
switch($s->s_style)
{
case 0:
$url = Conf::$http_path."admin2/index.php?g=Wap&m=Product&a=index&token=".$wid."&wid=".Session::get('wid')."&theme=".$s->s_style."&show=".$s->s_show;
break;
case 1:
$url = Conf::$http_path."admin2/index.php?g=Wap&m=Product&a=cats&token=".$wid."&wid=".Session::get('wid')."&theme=".$s->s_style."&show=".$s->s_show;
break;
case 2:
$url = Conf::$http_path."admin2/index.php?g=Wap&m=Product&a=products&token=".$wid."&wid=".Session::get('wid')."&theme=".$s->s_style."&show=".$s->s_show;
break;
}




if($set->try_post()){
	$set->wid = $wid;
	$set->uid = $uid;
	$set->save();
	tusi('设置成功');
}
