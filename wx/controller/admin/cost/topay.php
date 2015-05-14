<?php
$hyj = new Model('user_price');
$jg_arr = $hyj->map_array('id', 'price');
$hy_arr = array('2'=>'普通会员','3'=>'白金会员','4'=>'钻石会员');
$u = new Model('user');
$u->find(Session::get('uid'));
if(trim($u->next_level_id)!='' && trim($u->next_level_id)!='1'){
	//die('已经购买成功，有疑问请联系客服');
	Response::exejs('alert("您已经购买成功，有疑问请联系客服!")');
	Redirect::delay_to('/admin/userCenter/myAccount.html',1);	
}elseif(Request::post()){
	$hykx = Request::post('tpapyradio');
	$sjyf = Request::post('huiyuan'.$hykx);
	$realyf = intval($sjyf)-intval(intval($sjyf)/6);
	$realfy =floatval($jg_arr[$hykx])*intval($realyf);
	$online = new Model('online_pay_record');
	$online->delete(array('uid'=>Session::get('uid'),'status'=>'0'));
	$online->uid = Session::get('uid');
	$online->un  = Session::get('un');
	$online->level_id = $hykx;
	$online->money = $realfy;
	$online->months = $sjyf;
	$online->pay_time = DB::raw('now()');
	$online->status = '0';
	
	if($online->save()){
		$csarr = array(
				'_input_charset'=>'utf-8',
				//'defaultbank'=>'CMB',
				'notify_url'=>'http://wx.zongyangtech.cn/czok.html',
				'out_trade_no'=>$online->id,				
				'partner'=>'2088901443830772',
				'payment_type'=>'1',
				//'paymethod'=>'bankPay',				
				'return_url'=>'http://wx.zongyangtech.cn/uczok.html',				
				'seller_email'=>'dxcxcom@qq.com',
				'service'=>'create_direct_pay_by_user',
				'subject'=>$hy_arr[$hykx].$realyf.'月费用套餐',
				'total_fee'=>$realfy
		);
		$paytype = Request::post('paytype');
		if($paytype != 'alipay'){
			$csarr['defaultbank'] = $paytype;
			$csarr['paymethod'] = 'bankPay';
		}
		
		$csarrss = array();
		$csarrssss = array();
		foreach ($csarr as $k=>$v){
			$csarrss[] = $k.'='.$v;
			$csarrssss[] = $k.'='.urlencode($v);
		}
		sort($csarrss);
		sort($csarrssss);
		$djmzc = implode('&', $csarrss);
		$rjmzc = implode('&', $csarrssss);
		$sign = md5($djmzc.'aio6lu079cg38rto5jfue6urzy969ai3');
		$rjmzc = $rjmzc.('&sign='.$sign.'&sign_type=MD5');
		Redirect::to('https://mapi.alipay.com/gateway.do?'.$rjmzc);
	}	
}