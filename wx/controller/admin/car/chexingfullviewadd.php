<?php
$wid = Session::get('wid');
$type_id = Session::get('xid');
$full_view = new Model('micro_car_chexing_full_view');

if($full_view->try_post()){ 
	
	if(!empty($full_view->id)){ //若为修改则清空目录
		$full_view->wid = $wid;
		$full_view->xid = $type_id;
		$full_view->save();
		
		$id = $full_view->id;
		$new_dir = YYUC_FRAME_PATH.'pub/wqc/fullview/'.$full_view->id;
		File::clear_dir($new_dir);
		/* if(!file_exists($new_dir)){
			File::creat_dir($new_dir);
		}else{
		    File::clear_dir($new_dir);
		} */
	}else{
		$full_view->wid = $wid;
		$full_view->xid = $type_id;
		$full_view->save();
	    $id = mysql_insert_id();
	    $new_dir = YYUC_FRAME_PATH.'pub/wqc/fullview/'.$full_view->id;
	    File::creat_dir($new_dir);
	   
	}
	$full_view->find($id); 
	$pub = 'pub';
	//echo YYUC_FRAME_PATH.$pub.$full_view->pic_qian;die;
	File::all_copy(YYUC_FRAME_PATH.$pub.$full_view->pic_qian, $new_dir.'/pano_f.jpg');
    
    File::all_copy(YYUC_FRAME_PATH.$pub.$full_view->pic_hou, $new_dir.'/pano_b.jpg');
    
    File::all_copy(YYUC_FRAME_PATH.$pub.$full_view->pic_zuo, $new_dir.'/pano_l.jpg');
    
    File::all_copy(YYUC_FRAME_PATH.$pub.$full_view->pic_you, $new_dir.'/pano_r.jpg');
    
    File::all_copy(YYUC_FRAME_PATH.$pub.$full_view->pic_shang, $new_dir.'/pano_u.jpg');
    
    File::all_copy(YYUC_FRAME_PATH.$pub.$full_view->pic_xia, $new_dir.'/pano_d.jpg');
    
	tusi('保存成功');
    Redirect::delay_to('chexingfullview-1-'.$type_id,1);
}
if(Request::get(1)){
	$full_view->find(Request::get(1));
	if($full_view->wid != $wid){
		die();
	}
	$show = 1;
	$url = Conf::$http_path.'wqc/qc360-'.$full_view->id.'-'.$type_id.'.html?wid='.$wid;
}
function get_file_name($path){
	$f_path = pathinfo($path);
	return $f_path['basename'];
}