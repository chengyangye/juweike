<?php
/*
 *   @desc 微会员卡  用户数据监测
 * */


$lbs = new Model('micro_member_card_list');
$fs_arr = array(''=>'不限',"cz"=>'充值',"xf"=>'消费',"jfa"=>'积分累加',"jfd"=>'积分消费');
$mds = new Model('lbs');
$mdlb = $mds->where(array('istag'=>'1','wid'=>Session::get('wid')))->map_array('id', 'name');
$md_arr = array(''=>'不限')+$mdlb;
if(Request::get(1)){
	
	$tj = new SampleModel();
	$where = $tj->load_array_from_get();
	$where['rid'] =Request::get(1);
	if(trim($where['kssj'])!= ''){
		$where['stime@>'] = $where['kssj'];
	}
	unset($where['kssj']);
	if(trim($where['jssj'])!= ''){
		$where['stime@<'] = $where['jssj'];
	}
	unset($where['jssj']);
	$rcd = new Model('micro_member_card_record');
	$rcd->find(Request::get(1));
	$lbs->where($where)->order('id desc');
	$p = new Pagination();
	$res = $p->model_list($lbs);
	$lbs = new Model('micro_member_card_list');
	$hj = $lbs->where($where)->sum('je');
}