<?php
access_control();
$keyWord = new Model('key_word');

$uid = Session::get('uid');
$wid = Session::get('wid');
$kww = '';
if(isset($_GET['keyword'])){
	  $kww = $_GET['keyword'];
	  //$rs = $keyWord->where(array('keyWord@~'=>$kww))->list_all_array(); 
	  $where = array('keyWord@~'=>$kww,'pubsId'=>$wid);
}else{
     // $rs = $keyWord->where(array('pubsId'=>$wid))->list_all_array();
      $where = array('pubsId'=>$wid);
}
 $p = new Pagination();
 $rs = $p->model_list($keyWord->where($where)->order('id desc'));
//关键词保存操作
if($keyWord->try_post()){

	$kws = explode(',',$keyWord->keyWord); 
	foreach($kws as $v){
		  $keyWord = new Model('key_word');
	      $keyWord->pubsId = $wid;
	      $keyWord->keyWord = $v;
		  $keyWord->save();
	}
	Redirect::to('keyWordReply.html');
	
}

//关键词删除操作
if(Request::get()){  
    
	$kw = new Model('key_word');
	
	// delete single record
	if(Request::get(1) == 'del'){
			$kw->id(Request::get(2))->remove();
			Redirect::to("keyWordReply.html");
	}
	// To delete multiple records 
	if($_GET['type'] == 'dels'){
			$ids = $_GET['ids'];
			$id_s=explode(',', $ids);
			foreach($id_s as $v){
			     $rs  = $kw->delete(array('id'=>$v));
			}
			
				Response::write(1);
			
	}
 }
 
