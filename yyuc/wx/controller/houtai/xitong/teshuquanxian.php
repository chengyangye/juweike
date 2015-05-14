<?php
include another();
$pages = ht_pages();
$mu = Session::get('mu');
$aum = new Model('user_agency');
$aumres = $aum->field('id,un,name,level,isyg')->where(array('isstop'=>'0','isadmin'=>'0'))->order('isyg desc,id,level')->list_all();
$dl_arr = array();
$agl = translate_agency_level();
$ygl = translate_employee_level();
$typid = 0;
foreach ($aumres as $a){
	if($typid == 0){
		$typid = $a->id;
	}	
	$yhzw = '';
	if($a->isyg){
		$yhzw = $ygl[$a->level];
	}else{
		$yhzw = $agl[$a->level];
	}
	$dl_arr[$a->id] = $a->name.'['.$a->un.'] - '.$yhzw;
}

if(Request::get(1)){
	$typid = Request::get(1);
}


$m = new SampleModel();
$qxm = new Model('houtai_check');
$qxm->find(array('typ'=>'3','typid'=>$typid));

if($m->try_post()){
	$qxm->typ = '3';
	$qxm->typid = $typid;
	$qxm->nopages = $m->nopages;
	$qxm->save();
	tusi('更新成功');
}


$m->typid = $typid;
$nopages = '';
if($qxm->has_id()){
	$nopages = $qxm->nopages;
}
if($nopages == ''){
	//属性继承
	$qxmm = new Model('houtai_check');
	$tjwhere = array();
	$aumm = new Model('user_agency');
	$aumm->find($typid);
	if($aumm->isyg){
		$tjwhere['typ'] = '1';
	}else{
		$tjwhere['typ'] = '2';
	}
	$tjwhere['typid'] = $aumm->level;
	$qxmm->field('id,nopages')->find($tjwhere);
	if($qxmm->has_id()){
		$nopages = $qxmm->nopages;
	}
}
$m->nopages = $nopages;
