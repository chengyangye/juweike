<?php
/*
 *   @desc 微调研 用户调研详情
 * */
$lbs = new Model('micro_survey');

if(Request::get(1) && Request::get(2)){
	        $id = Request::get(1);  //micro_survey_record 表中的id
	        $id1= Request::get(2);   //micro_survey 表中的id(调研主题id)
			$rcd = new Model('micro_survey_tk');
			$lbs->find($id1);
			if($lbs->has_id() && $lbs->wid == Session::get('wid')){
				$where = array('sid'=>$id1);
				$record= new Model('micro_survey_record');
				$record->find(array('id'=>$id));
				$ans   = json_decode($record->ans);
				$res = $rcd->where($where)->order('id')->list_all();
				for($i=0;$i<count($ans);$i++){
					for($j=$i;$j<$i+1;$j++){
						if(strstr($ans[$i],'@')){ 
							$res[$j]->a = explode('@',$ans[$i]);
						}else{
							$res[$j]->a = $ans[$i];
						}
					}
				}
				
			}	
}
