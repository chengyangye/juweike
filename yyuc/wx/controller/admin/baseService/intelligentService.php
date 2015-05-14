<?php
/*
 *   @desc 智能客服设置 
 * */
access_control();
$customer_service = new Model('customer_service');

function checkIsSet($wid){
	 $znkf = new Model('customer_service');
	 $rs   = $znkf->find(array('wid'=>$wid));
	 return $rs->has_id() ? 1 : 0 ;
}

$customer_service->find(array('wid'=>Session::get('wid')));
if($customer_service->has_id()){
	$type  = $customer_service->type;
	$state = $customer_service->state;
	$name  = $type == 0 ? $customer_service->name : 0;
}else{
	$type  = 0;
	$state = 1;
}

if(Request::post()){
	
    $wid = Session::get('wid');
    $customer_service->uid = Session::get('uid');
    $customer_service->wid = $wid;
    $customer_service->name= Request::post('name') == '' ? '' : Request::post('name');
    $customer_service->type= Request::post('type');
    $customer_service->state= Request::post('state');
	
   
    $isSet = checkIsSet($wid); 
    if($isSet == 0){
    		$customer_service->save();
    		Response::write(1);
    }else{
            $customer_service->update(array('wid'=>$wid),array('name'=>$customer_service->name,'type'=>$customer_service->type,'state'=>  $customer_service->state));
    	    Response::write( 1);
    }
	
	
}