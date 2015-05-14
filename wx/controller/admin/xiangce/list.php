<?php
/*
 *   @desc 微相册
 * */
$wid = Session::get('wid');
$lbs = new Model('micro_photo_list');
if(Request::get(1)=='del'){
      $id = Request::post('id');
      $lbs->find($id);
      if($lbs->wid==Session::get('wid')){
      	$lbs->remove();
      	Response::write(1);
      }	
}else{
	$where = array();
	$where['wid']= $wid;
	$res = $lbs->where($where)->order('sort desc,id desc')->list_all();
}
