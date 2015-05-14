<?php
/*
 *   @desc 关键字回复的查看、修改、删除等操作
 * */

function getTitleById($id1){
	 
	$res_con = new Model('res_content');
    $title   = $res_con->field('title')->find(array('rid'=>$id1,'ord'=>1));
	return $title->title;
}

$kw = new Model('key_word');
$id = $_GET[1];
$kw ->find($id);

$id1 = $kw->resId;
if($kw->replyContent == null){ 
	$kw->replyContent = getTitleById($id1);
}
//var_dump($kw);
//图文标题的获得
$res = new Model('res');
$uid = Session::get('uid');
$wid = Session::get('wid');
$rs  = $res->where(array('wid'=>$wid))->list_all_array();
$con = array();
$rs_title = array();
foreach($rs as $v){
	
    $con[$v['id']] = json_decode($v['con'],true);
    $rs_title[$v['id']] = $con[$v['id']]['tit'];
    if(count($con[$v['id']][0]) > 1){
    	$rs_title[$v['id']] = $con[$v['id']][0]['tit'];
    }
}

//关键字回复的保存操作
if(Request::post()){
		   
		   $kw->load_from_post();
		   if ($kw->replyType == 1){ //若回复类型为文字，则将resId制空
		          $kw->resId = null;
		   }else{
		   	      $kw->replyContent = null;
		   }
			$kw->save();
			Redirect::to('keyWordReply.html');
			
}
if($_GET[1]=='del'){
	
	$kw->id($_GET[2])->remove();
	Redirect::to('keyWordReply.html');
}









