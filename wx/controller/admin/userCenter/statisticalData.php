<?php
/**
 *   @desc  数据统计(接受消息数量，新增粉丝用户等)
 * */
/**
$data_tj = new Model('data_statistics');
$wid     = Session::get('wid');
$today   = date('Y-m-d',time());
$db = DB::get_db();
$sql="select count(*)as a,a.* from data_statistics as a where DATE_FORMAT(a.ctime,'%y-%m-%d')>date_add(now(), interval -8 day) and wid={$wid} and type=1 group by DATE_FORMAT(a.ctime,'%y-%m-%d') order by a.ctime desc";
$notic_total = $db->query($sql);
$sql1="select count(*)as message,left(ctime,10)as t,a.* from data_statistics as a where DATE_FORMAT(a.ctime,'%y-%m-%d')>date_add(now(), interval -8 day) and wid={$wid} and type=2 group by DATE_FORMAT(a.ctime,'%y-%m-%d') order by a.ctime desc";
$message_total = $db->query($sql1);
for($i=0;$i<8;$i++){
	foreach ($notic_total as $v1){
		$message_total[$i]['gz'] = $notic_total[$i]['a'];
	}
}
*/
$nf = Request::get(1);
$yf = Request::get(2);
if(trim($nf)==''){
	$nf = date('Y');
}

if(trim($yf)==''){
	$yf = date('m');
}