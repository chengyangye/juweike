<?php
/*
 *  @desc 关于智能客服调教的相关操作
 * */
access_control();
$my_answer = new Model('my_answer');

$wid  = Session::get('wid');
$uid  = Session::get('uid');
$customer_service = new Model('customer_service');
$customer_service->field('name')->find(array('wid'=>$wid));
$kf_name = $customer_service->name;

if(Request::post('action')== 'tj'){
			//查询匹配用户自定义的问题库
			$que = trim(Request::post('question'));
			$answer = searchAnsByQuestion($wid, $que);
			
			//查询匹配系统定义的库
			 if(empty($answer)){
				$db = DB::get_db();
				$sys= new Model('sys_auto_answer');
				$sys->find(array('question'=>$que));
				if($sys->has_id()){
					$answer = $sys->answer.'(参考答案)';
				}else{
					$sql= "select * from sys_auto_answer where question like '%{$que}%' order by rand() limit 1";
					$rs = $db->query($sql);
					if(!empty($rs)){
					     $answer = $rs[0]['answer'].'(参考答案)';
					}
				}
			}
			if(empty($answer)){
				$answer = '我不知道你的意思，教教我吧。';
			} 
			Response::write($answer);
}

//我的回答库(read)
if(Request::get('action') == 'getAns'){
	 
		$qu  = Request::get('ques');
		$my_answer->find(array('wid'=>$wid,'question'=>$qu));
		if($my_answer->has_id()){
			$rs   = array('success'=>true,'id'=>$my_answer->id,'answer'=>$my_answer->answer);
			$json = json_encode($rs);
			Response::write($json);
		}else{
			$rs   = array('success'=>false);
			$json = json_encode($rs);
			Response::write($json);
		}
	
}
//添加我的回答库
if(Request::post('action') == 'save_ans'){
	
	$my_answer->find(array('wid'=>$wid,'question'=>Request::post('ques')));
	if($my_answer->has_id()){
		    Response::write(0);
	}else{
			$my_answer->wid = $wid;
			$my_answer->uid = $uid;
			$my_answer->question = Request::post('ques');
			$my_answer->answer   = Request::post('ans');
			$my_answer->save();
			Response::write(1);
	}
	
}
if(Request::post('action') == 'del_ans'){
	$rs = $my_answer->id(Request::post('id'))->remove();
    if($rs == 1){
	    Response::write(1);
    }
}
if(Request::get(1)== 'kefu_name'){
	$name = Request::post('name');
	$kefu = new Model('customer_service');
	$kefu->find(array('wid'=>$wid));
	$kefu->wid = $wid;
	$kefu->uid = $uid;
	$kefu->name = $name;
	$kefu->save();
	Response::write(1);
}
/*
 *   @desc search answers by question in the my_answer  table
 *   @return string or false
 * */
function searchAnsByQuestion($wid,$que){
	$my_ans = new Model('my_answer');
	$my_ans->find(array('wid'=>$wid,'question'=>$que));
	$answer = $my_ans->answer;
	if(!empty($answer)){
		 return $answer .= '(来自我的库)';
	}else{
		$my_ans->find(array('wid'=>$wid,'question@~'=>$que));
		if($my_ans->has_id()){
			return $answer = ($my_ans->answer. "(来自我的库)");
		}else{
			return false;
		}
	}
}
