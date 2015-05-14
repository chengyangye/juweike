<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$set = new Model('micro_lvyou_set');
	$set->find(array('wid'=>Session::get('wid')));
	if(!$set->has_id()){
		die();
	}
	$lp = new Model('micro_lvyou_ziloupan');
	$zlpres = $lp->where(array('wid'=>Session::get('wid')))->order('sort desc,id')->list_all();
	$res = array();
	
	//查找户型
	$hxtype = new Model('micro_lvyou_type');
	$hxres = $hxtype->where(array('wid'=>Session::get('wid'),'zid'=>'0'))->order('sort desc,id')->list_all();
	if(count($hxres)>0){
		$res[$set->name] = $hxres;
	}
	foreach ($zlpres as $zlp){
		$hxtype = new Model('micro_lvyou_type');
		$hxres = $hxtype->where(array('zid'=>$zlp->id))->order('sort desc,id')->list_all();
		if(count($hxres)>0){
			$res[$zlp->name] = $hxres;
		}
	}
	
}else{
	die();
}

function hasqj($hx){
	$qj = new Model('micro_lvyou_type_full_view');
	$qj->find(array('type_id'=>$hx->id));
	return $qj->has_id();
}
