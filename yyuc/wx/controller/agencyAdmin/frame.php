<?php
$mu = Session::get('mu');
$fs = File::scandir(YYUC_FRAME_PATH.'controller/houtai');
$menu_arr = array();
foreach ($fs as $f){
	if(file_exists(YYUC_FRAME_PATH.'controller/houtai/'.$f.'/index.php')){
		include YYUC_FRAME_PATH.'controller/houtai/'.$f.'/index.php';
		$menu_arr[$p_ind] = array('path'=>$f,'name'=>$p_name,'sub'=>$p_sub);
	}
}
ksort($menu_arr);

//查找用户权限
$qxm = new Model('houtai_check');
$qxm->field('id,nopages')->find(array('typ'=>'3','typid'=>$mu->id));
if(!$qxm->has_id()){
	$qxm = new Model('houtai_check');	
	$tjwhere = array();
	if($mu->isyg){
		$tjwhere['typ'] = '1';
	}else{
		$tjwhere['typ'] = '2';
	}
	$tjwhere['typid'] = $mu->level;
	$qxm->field('id,nopages')->find($tjwhere);
}
$nopages = explode(',', trim($qxm->nopages));
function check_page($p,$f){
	global $nopages,$mu;
	//echo $p.'@'.$f;
	if(!$mu->isadmin && in_array($p.'@'.$f, $nopages)){
		return false;
	}
	return true;
}