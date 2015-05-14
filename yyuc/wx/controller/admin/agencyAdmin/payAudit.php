<?php
/**
 *  @desc 对代理支付情况的审核(记录审核人、时间等)
 * */
$agency_pay = new Model('agency_pay_record');
$admin_id   = Session::get('aid') == '' ? 22 : Session::get('aid');
$p = new Pagination();

$res = $p->model_list($agency_pay->order('id desc'));
// 审核操作
if(Request::get(1)){
	$agency_pay->status = 1;
	$agency_pay->is_check = 1;
	$agency_pay->check_time = DB::raw('Now()');
	$agency_pay->check_user = $admin_id;
	$agency_pay->update(array('id'=>Request::get(1)));
	Redirect::to('payAudit');
	
}
