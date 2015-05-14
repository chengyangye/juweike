<?php 
$p_name = '充值统计';
$p_ind = 3;
$p_sub = array(
	array(
		'name'=>'当前账户充值记录',
		'file'=>'myPayRecord'
		),
	array(
		'name'=>'下线代理充值记录',
		'file'=>'agencyPayRecord'
	),
	array(
			'name'=>'下级员工充值记录',
			'file'=>'employeePayRecord'
	),
	array(
		'name'=>'前台用户续费记录',
		'file'=>'directPayRecord'
	)
);