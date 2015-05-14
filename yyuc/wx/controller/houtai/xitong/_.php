<?php
function ht_pages(){
	$fs = File::scandir(YYUC_FRAME_PATH.'controller/houtai');
	$menu_arr = array();
	foreach ($fs as $f){
		if(file_exists(YYUC_FRAME_PATH.'controller/houtai/'.$f.'/index.php')){
			include YYUC_FRAME_PATH.'controller/houtai/'.$f.'/index.php';
			$menu_arr[$p_ind] = array('path'=>$f,'name'=>$p_name,'sub'=>$p_sub);
		}
	}
	ksort($menu_arr);
	return $menu_arr;
}
