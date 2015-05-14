<?php 
/**
  * wechat php test
  */
//define your token
define("TOKEN",md5(Request::get('appid').Conf::$management_center_target));
$wid = Request::get('appid');
if($GLOBALS["HTTP_RAW_POST_DATA"]){	
	$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];	
	//extract post data
	if (!empty($postStr)){
		$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);		
		$fromUsername = $postObj->FromUserName;
		$toUsername = $postObj->ToUserName;
		$keyword = trim($postObj->Content);
		$type = $postObj->MsgType;	
		if($type=='location'){
			$data_tj = new Model('data_statistics');
			$data_tj->wid = $wid;
			$data_tj->type= 4;
			$data_tj->ctime= DB::raw('NOW()');
			$data_tj->save();
			//地理位置信息
			$m = new Model('lbs');
			$lres = $m->where(array('wid'=>$wid))->list_all();
			$jd = floatval($postObj->Location_Y);
			$wd = floatval($postObj->Location_X);
			$jlarr = array();
			$ja = false;
			foreach ($lres as $l){
				$jl = get_distance_by_lng_lat($jd,$wd,floatval($l->jd),floatval($l->wd));//Conf::$http_path.'weiweb/'.$wid.'/'
				$name = preg_replace("/\s/","",$l->name);
				$content = preg_replace("/\s/","",strip_tags($l->content));
				$hyurl = 'http://api.map.baidu.com/marker?location='.$l->wd.','.$l->jd.'&title='.$name.'&content='.$name.'&output=html&src=weiba|weiweb';
				$jlarr[$jl] = array('tit'=>($l->name.',距离'.$jl.'米'),'pic'=>Conf::$http_path.$l->pic,'url'=>$hyurl,'ms'=>$content);
				if(!$ja){
					$ja = $jlarr[$jl];
				}
			}			
			ksort($jlarr);
			if(count($lres)>1){
				response_more($jlarr,$postObj);
			}else{
				response_one($ja['tit'].'。',$ja['pic'],$ja['ms'],$ja['url'],$postObj);
			}
			
			
		}
		//找到消息号码
		if($type=='event'){
			if('subscribe'==$postObj->Event){
				$data_tj = new Model('data_statistics');
				$data_tj->wid = $wid;
				$data_tj->type= 1;
				$data_tj->ctime= DB::raw('NOW()');
				$data_tj->save();
				//关注
				$fa = new Model('first_attention');
				$fa->find(array('wid'=>$wid));
				if($fa->has_id()){
					if($fa->typ=='0'){
						response_text($fa->content,$postObj);
					}else{
						$res = new Model('res');
						$res->find($fa->resource_id);
						response_arts($res,$postObj);
					}
				}else{
					
				}
				
			}if('unsubscribe'==$postObj->Event){
				$data_tj = new Model('data_statistics');
				$data_tj->wid = $wid;
				$data_tj->type= 5;
				$data_tj->ctime= DB::raw('NOW()');
				$data_tj->save();
			}elseif('CLICK'==$postObj->Event){
				$data_tj = new Model('data_statistics');
				$data_tj->wid = $wid;
				$data_tj->type= 3;
				$data_tj->ctime= DB::raw('NOW()');
				$data_tj->save();
				
				$key = $postObj->EventKey;
				$key = explode('@', $key);
				if($key[0]=='res_wb'){
					//文本回复
					$ggk = new Model('res_text');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						response_text($ggk->txt,$postObj);
						return;
					}
				}elseif($key[0]=='res_tw' || $key[0]=='res_dtw'){
					//图文回复
					$res = new Model('res');
					$res->find($key[1]);
					if($res->has_id()){
						response_arts($res,$postObj);
					}					
				}elseif($key[0]=='res_gjz'){
					//关键字
					$ggk = new Model('res_text');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						check_and_replay($ggk->txt,$postObj);
						return;
					}
				}elseif($key[0]=='res_yhq'){
					//优惠券
					$coupon = new Model('coupon');
					$coupon->find($key[1]);
					if($coupon->has_id()){
						$url = Conf::$http_path.'wx/yhq-'.$coupon->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($coupon->name,Conf::$http_path.$coupon->pic,$coupon->ms,$url,$postObj);
						return;
					}
				}elseif($key[0]=='res_ggk'){
					//刮刮卡
					$ggk = new Model('ggk');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						$url = Conf::$http_path.'wx/ggk-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
						return;
					}
				}elseif($key[0]=='res_xydzp'){
					//幸运大转盘
					$ggk = new Model('xydzp');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						$url = Conf::$http_path.'wx/xydzp-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
						return;
					}
					}elseif($key[0]=='res_wgw'){
					$ggk = new Model('wwz_keyword');
					$ggk->find(array('wid'=>$wid));
					if($ggk->has_id()){
						$url = Conf::$http_path.'weiweb/'.$wid;
						response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
						return;
					}
				}elseif($key[0]=='res_xyj'){
					//幸运机
					$ggk = new Model('xyj');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						$url = Conf::$http_path.'wx/xyj-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
						return;
					}
				}elseif($key[0]=='res_wtg'){
					//微团购
					$ggk = new Model('micro_group_buy');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						$url = Conf::$http_path.'wx/wtg-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
						return;
					}
				}elseif($key[0]=='res_yzdd'){
					//一站到底
					$ggk = new Model('yzdd');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						$url = Conf::$http_path.'wx/yzdd-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
						return;
					}
				}elseif($key[0]=='res_weiba'){
					//微吧
					$ggk = new Model('weiba');
					$ggk->find(array('wid'=>$wid));
					if($ggk->has_id()){
						$arts = array();
						$fart = array();
						$url = Conf::$http_path.'wx/weiba-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						$fart['tit'] = $ggk->ms;
						$fart['url'] = $url;
						$fart['pic'] = Conf::$http_path.$ggk->pic;
						$arts[] = $fart;
						//查找话题
						$m = new Model('weiba_ht');
						$subres = $m->where(array('wid'=>$wid))->order('zm desc')->limit('7')->list_all();
						if(count($subres)>0){
							foreach ($subres as $re){
								$tart = array();
								$tart['tit'] = '#'.$re->keywd.'#';
								$tart['url'] = Conf::$http_path.'wx/weiba-'.$ggk->id.'-'.$re->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
								$fart['pic'] = Conf::$http_path.'res/s.png';
								$arts[] = $tart;
							}
						}else{
							$tart = array();
							$tart['tit'] = '发起新话题';
							$tart['url'] = Conf::$http_path.'wx/weiba-'.$ggk->id.'-new.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
							$fart['pic'] = Conf::$http_path.'res/s.png';
							$arts[] = $tart;
						}
						response_more($arts,$postObj);
						return;
					}
				}elseif($key[0]=='res_whyk'){
					//会员卡
					$coupon = new Model('micro_member_card');
					$coupon->find($key[1]);
					if($coupon->has_id()){
						$url = Conf::$http_path.'wx/hyk-'.$coupon->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						//查询我的会员卡号
						$red = new Model('micro_member_card_record');
						$red->find(array('cid'=>$coupon->id,'wxid'=>$postObj->FromUserName));
						if($red->has_id()){
							response_one($coupon->name,Conf::$http_path.$coupon->pic,'尊敬的会员卡用户，您的卡号为：'.$red->sn.'。'.$coupon->ms,$url,$postObj);
						}else{
							response_one($coupon->name,Conf::$http_path.$coupon->pic,$coupon->ms,$url,$postObj);
						}
						
						return;
					}
				}elseif($key[0]=='res_wdy'){
					//微调研
					$ggk = new Model('micro_survey');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						$url = Conf::$http_path.'wx/wdy-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
						return;
					}
				}elseif($key[0]=='res_wtp'){
					//微投票
					$ggk = new Model('micro_vote');
					$ggk->find($key[1]);
					if($ggk->has_id()){
						$url = Conf::$http_path.'wx/wtp-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
						return;
					}
				}elseif($key[0]=='res_wyy'){
					//在线预订
					$zxyd = new Model('online_booking');
					$zxyd->find($key[1]);
					if($zxyd->has_id()){
						$url = Conf::$http_path.'wx/onlineBooking-'.$zxyd->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
						response_one($zxyd->name,Conf::$http_path.$zxyd->pic,$zxyd->ms,$url,$postObj);
						return;
					}
		        }
				////////////////////////////-----------------------------
			}
			//菜单待续
		}elseif(!empty( $keyword )){
			$data_tj = new Model('data_statistics');
			$data_tj->wid = $wid;
			$data_tj->type= 2;
			$data_tj->ctime= DB::raw('NOW()');
			$data_tj->save();
			if($keyword=='宝宝'){
				response_text('升级成功',$postObj);
				//记住账户的uuid
				$pub = new Model('pubs');
				$pub->update(array('id'=>Request::get('appid')),array('uuid'=>$toUsername));
			}else{
				check_and_replay($keyword,$postObj);
			}
		}
	}
	die();
}else{
	$wechatObj = new wechatCallbackapiTest();	
	if($wechatObj->valid()){//更新验证规则
		$pub = new Model('pubs');
		$pub->update(array('id'=>Request::get('appid')),array('http'=>'','token'=>'','isval'=>'1'));
	}
}
die();





//智能回复
function check_and_replay($keyword,$postObj){
	global $wid;
	//匹配各项活动
	//优惠券
	$coupon = new Model('coupon');
	$coupon->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($coupon->has_id()){
		$url = Conf::$http_path.'wx/yhq-'.$coupon->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($coupon->name,Conf::$http_path.$coupon->pic,$coupon->ms,$url,$postObj);
		return;
	}
	//刮刮卡
	$ggk = new Model('ggk');
	$ggk->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($ggk->has_id()){
		$url = Conf::$http_path.'wx/ggk-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
		return;
	}
	
	//幸运大转盘
	$ggk = new Model('xydzp');
	$ggk->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($ggk->has_id()){
		$url = Conf::$http_path.'wx/xydzp-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
		return;
	}
	
	//幸运机
	$ggk = new Model('xyj');
	$ggk->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($ggk->has_id()){
		$url = Conf::$http_path.'wx/xyj-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
		return;
	}
	
	//微团购
	$ggk = new Model('micro_group_buy');
	$ggk->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($ggk->has_id()){
		$url = Conf::$http_path.'wx/wtg-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
		return;
	}
	
	//一站到底
	$ggk = new Model('yzdd');
	$ggk->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($ggk->has_id()){
		$url = Conf::$http_path.'wx/yzdd-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
		return;
	}
	
	//微吧
	$ggk = new Model('weiba');
	$ggk->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($ggk->has_id()){
		$arts = array();
		$fart = array();
		$url = Conf::$http_path.'wx/weiba-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		$fart['tit'] = $ggk->ms;
		$fart['url'] = $url;
		$fart['pic'] = Conf::$http_path.$ggk->pic;
		$arts[] = $fart;
		//查找话题
		$m = new Model('weiba_ht');
		$subres = $m->where(array('wid'=>$wid))->order('zm desc')->limit('7')->list_all();
		if(count($subres)>0){
			foreach ($subres as $re){
				$tart = array();
				$tart['tit'] = '#'.$re->keywd.'#';
				$tart['url'] = Conf::$http_path.'wx/weiba-'.$ggk->id.'-'.$re->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
				$fart['pic'] = Conf::$http_path.'res/s.png';
				$arts[] = $tart;
			}			
		}else{
			$tart = array();
			$tart['tit'] = '发起新话题';
			$tart['url'] = Conf::$http_path.'wx/weiba-'.$ggk->id.'-new.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
			$fart['pic'] = Conf::$http_path.'res/s.png';
			$arts[] = $tart;
		}
		response_more($arts,$postObj);
		return;
	}
	
	//会员卡	
	$coupon = new Model('micro_member_card');
	$coupon->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($coupon->has_id()){
		$url = Conf::$http_path.'wx/hyk-'.$coupon->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;		
		//查询我的会员卡号
		$red = new Model('micro_member_card_record');
		$red->find(array('cid'=>$coupon->id,'wxid'=>$postObj->FromUserName));
		if($red->has_id()){
			response_one($coupon->name,Conf::$http_path.$coupon->pic,'尊敬的会员卡用户，您的卡号为：'.$red->sn.'。'.$coupon->ms,$url,$postObj);
		}else{
			response_one($coupon->name,Conf::$http_path.$coupon->pic,$coupon->ms,$url,$postObj);
		}
		return;
	}
	
	//微调研
	$ggk = new Model('micro_survey');
	$ggk->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($ggk->has_id()){
		$url = Conf::$http_path.'wx/wdy-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
		return;
	}
	//微投票
	$ggk = new Model('micro_vote');
	$ggk->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($ggk->has_id()){
		$url = Conf::$http_path.'wx/wtp-'.$ggk->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($ggk->name,Conf::$http_path.$ggk->pic,$ggk->ms,$url,$postObj);
		return;
	}
	//在线预订
	$booking = new Model('online_booking');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wx/onlineBooking-'.$booking->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,$booking->ms,$url,$postObj);
		return;
	}
	
	//微相册
	$booking = new Model('micro_photo_list');
	$booking->find(array('wid'=>$wid,'keyword'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wx/wxclist-'.$booking->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->artpic,$booking->ms,$url,$postObj);
		return;
	}
	//微房产
	$booking = new Model('micro_estate_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wfc/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微食品
	$booking = new Model('micro_shipin_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'shipin/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}

	//微旅游
	$booking = new Model('micro_lvyou_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wlvy/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}

	//微健身
	$booking = new Model('micro_jianshen_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wjs/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微美容
	$booking = new Model('micro_meirong_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wmr/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微政务
	$booking = new Model('micro_zhengwu_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wzw/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微点菜
	$booking = new Model('micro_diancai_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'dc/index-'.$wid.'.html?wxid='.$postObj->FromUserName;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微物业
	$booking = new Model('micro_wuye_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wwy/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微ktv
	$booking = new Model('micro_ktv_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'ktv/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微教育
	$booking = new Model('micro_jiaoyu_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'jiaoyu/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微酒吧
	$booking = new Model('micro_jiuba_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'jiuba/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微花店
	$booking = new Model('micro_huadian_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'huadian/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微婚庆
	$booking = new Model('micro_hunqing_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'hunqing/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微装修
	$booking = new Model('micro_zhuangxiu_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'zhuangxiu/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微汽修
	$booking = new Model('micro_qixiu_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'qixiu/index.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微餐饮
	$booking = new Model('micro_canyin_keyword');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'admin2/index.php?g=Wap&m=Product&a=index&wecha_id='.$postObj->FromUserName.'&wid='.$wid.'&token='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微商城
        /*
	$booking = new Model('micro_shop_keyword');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'admin2/index.php?g=Wap&m=Product&a=index&wecha_id='.$postObj->FromUserName.'&wid='.$wid.'&token='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
        */
	//微喜帖
	$booking = new Model('micro_xitie_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wx/wXiTie-'.$booking->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->art_pic,'',$url,$postObj);
		return;
	}
	//微酒店
        /*
	$booking = new Model('micro_hotel');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wjd/index-'.$booking->id.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->tit,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
        */
	//微留言
	$booking = new Model('liuyan_set');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wly/ly.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->tit,Conf::$http_path.$booking->pic,'',$url,$postObj);
		return;
	}
	//微汽车
	$booking = new Model('micro_car_keyword');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		
		$url = Conf::$http_path.'weiweb/'.$wid.'/'.$booking->xwid.'.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,$booking->ms,$url,$postObj);
		return;
	}
	//车主关怀
        /*
	$booking = new Model('micro_car_guanhuai');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wqc/guanhuai.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,$booking->ms,$url,$postObj);
		return;
	}
        */
	//预约试驾
$booking = new Model('micro_car_yysj');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wqc/yyby.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->tit,Conf::$http_path.$booking->pic,$booking->des,$url,$postObj);
		return;
	}
	//预约保养
	$booking = new Model('micro_car_yyby');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'wqc/yysj.html?wxid='.$postObj->FromUserName.'&wid='.$wid;
		response_one($booking->tit,Conf::$http_path.$booking->pic,$booking->des,$url,$postObj);
		return;
	}
	//官网

	$booking = new Model('wwz_keyword');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'weiweb/'.$wid."/?wxid=".$postObj->FromUserName;
		response_one($booking->name,Conf::$http_path.$booking->pic,$booking->ms,$url,$postObj);
		return;
	}
	//贺卡
        /*
	$booking = new Model('z01_hk');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'hk/hk.html?wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,$booking->ms,$url,$postObj);
		return;
	}
        */
	//贺卡
	$booking = new Model('z01_hkdq');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'heka/index.html?wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,$booking->ms,$url,$postObj);
		return;
	}
	//360
	$booking = new Model('360_full_view');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'qj/quanjing-'.$booking->id.'.html?wid='.$wid;
		response_one($booking->name,Conf::$http_path.$booking->pic,$booking->ms,$url,$postObj);
		return;
	}

	//新版预约
	$booking = new Model('newyy');
	$booking->find(array('wid'=>$wid,'gjz'=>$keyword));
	if($booking->has_id()){
		$url = Conf::$http_path.'yuyue/yy-'.$booking->id.'.html?wid='.$wid;
		response_one($booking->tit,Conf::$http_path.$booking->pic,$booking->ms,$url,$postObj);
		return;
	}

	//微信墙
	$booking = new Model('micro_wall_config');
	$booking->find(array('wid'=>$wid));
	if($booking->has_id()){
		if(strpos($keyword,$booking->sqgjz)!==false)
	{
	$key = str_replace($booking->sqgjz,"",$keyword);
	$m = new Model('micro_wall_content');
	$m->wid=$wid;
	$m->wxid=$postObj->FromUserName;
	$m->content=$key;
	$m->check=$booking->need_check?$booking->need_check:1;
	$m->time=DB::raw('NOW()');
	$m->save();
	$re = $booking->res_word;
	response_text($re,$postObj);
	}elseif(strpos($keyword,$booking->tpgjz)!==false){	

	if($booking->open_luck){
	$m = new Model('micro_wall_vote_user');
	$m->find(array('wid'=>$wid,'wxid'=>$postObj->FromUserName));
	if($m->has_id() && $booking->re_luck === false)
	{}else{
	$m->wid=$wid;
	$m->wxid=$postObj->FromUserName;
	$m->last_time=time();
	$m->time=DB::raw('NOW()');
	$m->save();
	$key = str_replace($booking->tpgjz,"",$keyword);
	$s = new Model('micro_wall_vote');
	$s->find(array('wid'=>$wid,'id'=>$key));
	$s->count++;
	$s->save();
	$re = $booking->res_word;
	response_text($re,$postObj);
	}
	}}}

	//return;
	//匹配关键词
	$key_word = new Model('key_word');
	$kkres = $key_word->where(array('pubsId'=>$wid))->list_all();
	foreach ($kkres as $kk){
		$kkarr = $kk->keyWord.'';
		$kkarr = str_replace('，', ',', $kkarr);
		$kkarr = explode(',', $kkarr);
		if(in_array($keyword, $kkarr)){
			check_and_replay_keyword($kk,$postObj);
			return;
		}
	}
	
	foreach ($kkres as $kk){
		$kkarr = $kk->keyWord.'';
		$keytype = $kk->matchingType;
		if($keytype=='1'){
			$kkarr = str_replace('，', ',', $kkarr);
			$kkarr = explode(',', $kkarr);
			foreach ($kkarr as $tkw){
				if(strpos($keyword, $tkw)!==false){
					check_and_replay_keyword($kk,$postObj);
					return;
				}
				if(strpos($tkw, $keyword)!==false){
					check_and_replay_keyword($kk,$postObj);
					return;
				}
			}
		}

	}

	$key_word->find(array('keyWord@~'=>$keyword,'pubsId'=>$wid));
	if($key_word->has_id()){
		check_and_replay_keyword($key_word,$postObj);
		return;
	}

	//匹配智能客服
	//智能客服(调教)
	$myans = new Model('my_answer');
	$myans->find(array('question'=>$keyword,'wid'=>$wid));
	if($myans->has_id()){
		response_text($myans->answer,$postObj);
		return;
	}

	$myans->find(array('question@~'=>$keyword,'wid'=>$wid));
	if($myans->has_id()){
		response_text($myans->answer,$postObj);
		return;
	}

	$cs = new Model('customer_service');
	$cs->find(array('wid'=>$wid));
	$nc = trim($cs->name);
	$nc = $nc==''?'小宝':$nc;
	
	//匹配"*"关键词
	$key_word = new Model('key_word');
	$key_word->find(array('keyWord'=>'*','pubsId'=>$wid));
	if($key_word->has_id()){
		check_and_replay_keyword($key_word,$postObj);
		return;
	}
	//都没有匹配上则不回答
	
	return;
}
function check_and_replay_keyword($key_word,$postObj){
	global $wid;
	$rtyp = $key_word->replyType;
	if($rtyp=='1'){
		response_text($key_word->replyContent,$postObj);
	}else{
		$res = new Model('res');
		$res->find($key_word->resId);
		response_arts($res,$postObj);
	}
}


//回复文本
function response_text($txt,$postObj){
	$fromUsername = $postObj->FromUserName;
	$toUsername = $postObj->ToUserName;
	$textTpl = "<xml>
	<ToUserName><![CDATA[%s]]></ToUserName>
	<FromUserName><![CDATA[%s]]></FromUserName>
	<CreateTime>%s</CreateTime>
	<MsgType><![CDATA[%s]]></MsgType>
	<Content><![CDATA[%s]]></Content>
	<FuncFlag>0</FuncFlag>
	</xml>";
	$res = sprintf($textTpl, $fromUsername, $toUsername, time(), "text", trim($txt));
	echo $res;
}

function response_arts($res,$postObj){
	$r = json_decode($res->con);
	if(is_array($r)){
		response_morearts($r,$res->id,$postObj);
	}else{
		response_oneart($r,$res->id,$postObj);
	}
}
//回复单图文
function response_oneart($r,$rid,$postObj){
	global $wid;
	$fromUsername = $postObj->FromUserName;
	$toUsername = $postObj->ToUserName;
	$textTpl = "<xml>
	<ToUserName><![CDATA[%s]]></ToUserName>
	<FromUserName><![CDATA[%s]]></FromUserName>
	<CreateTime>%s</CreateTime>
	<MsgType><![CDATA[%s]]></MsgType>
	<ArticleCount>%s</ArticleCount>
	<Articles>
	ITEM
	</Articles>
	</xml>";
	$resstr =  sprintf($textTpl, $fromUsername, $toUsername, time(), "news", 1);				
	$subitem = "<item>
	<Title><![CDATA[%s]]></Title>
	<Description><![CDATA[%s]]></Description>
	<PicUrl><![CDATA[%s]]></PicUrl>
	<Url><![CDATA[%s]]></Url>
	</item>";
	$addpos = '?';
	if(strpos($r->ourl, '?')!==false){
		$addpos = '&';
	}
	$r->ourl = $r->ourl.$addpos.'wxid='.$fromUsername.'&wid='.$wid.'&rid='.$rid;
	$r->ourl = $r->ourl.'#mp.weixin.qq.com';
	$item=sprintf($subitem, $r->tit, $r->des, Conf::$http_path.$r->pic, $r->ourl);
	$resstr = str_replace('ITEM', $item, $resstr);
	echo $resstr;
}
//回复多图文
function response_morearts($res,$rid,$postObj){
	global $wid;
	$fromUsername = $postObj->FromUserName;
	$toUsername = $postObj->ToUserName;
	$textTpl = "<xml>
	<ToUserName><![CDATA[%s]]></ToUserName>
	<FromUserName><![CDATA[%s]]></FromUserName>
	<CreateTime>%s</CreateTime>
	<MsgType><![CDATA[%s]]></MsgType>
	<ArticleCount>%s</ArticleCount>
	<Articles>
	ITEM
	</Articles>
	</xml>";
	$resstr =  sprintf($textTpl, $fromUsername, $toUsername, time(), "news", count($res));
	$item = '';
	$subitem = "<item>
	<Title><![CDATA[%s]]></Title>
	<PicUrl><![CDATA[%s]]></PicUrl>
	<Url><![CDATA[%s]]></Url>
	</item>";
	foreach ($res as $r){
		$addpos = '?';
		if(strpos($r->ourl, '?')!==false){
			$addpos = '&';
		}
		$r->ourl = $r->ourl.$addpos.'wxid='.$fromUsername.'&wid='.$wid.'&rid='.$rid;
		$r->ourl = $r->ourl.'#mp.weixin.qq.com';
		$item.=sprintf($subitem, $r->tit, Conf::$http_path.$r->pic, $r->ourl);
	}
	$resstr = str_replace('ITEM', $item, $resstr);
	echo $resstr;
}



//回复单图文内容
function response_one($tit,$pic,$des,$url,$postObj){
	global $wid;
	$fromUsername = $postObj->FromUserName;
	$toUsername = $postObj->ToUserName;
	$textTpl = "<xml>
	<ToUserName><![CDATA[%s]]></ToUserName>
	<FromUserName><![CDATA[%s]]></FromUserName>
	<CreateTime>%s</CreateTime>
	<MsgType><![CDATA[%s]]></MsgType>
	<ArticleCount>%s</ArticleCount>
	<Articles>
	ITEM
	</Articles>
	</xml>";
	$resstr =  sprintf($textTpl, $fromUsername, $toUsername, time(), "news", 1);
	$subitem = "<item>
	<Title><![CDATA[%s]]></Title>
	<Description><![CDATA[%s]]></Description>
	<PicUrl><![CDATA[%s]]></PicUrl>
	<Url><![CDATA[%s]]></Url>
	</item>";
	$url = $url.'#mp.weixin.qq.com';
	$item=sprintf($subitem, $tit, $des, $pic, $url);
	$resstr = str_replace('ITEM', $item, $resstr);
	echo $resstr;
}


//回复多图文
function response_more($res,$postObj){
	global $wid;
	$fromUsername = $postObj->FromUserName;
	$toUsername = $postObj->ToUserName;
	$textTpl = "<xml>
	<ToUserName><![CDATA[%s]]></ToUserName>
	<FromUserName><![CDATA[%s]]></FromUserName>
	<CreateTime>%s</CreateTime>
	<MsgType><![CDATA[%s]]></MsgType>
	<ArticleCount>%s</ArticleCount>
	<Articles>
	ITEM
	</Articles>
	</xml>";
	$resstr =  sprintf($textTpl, $fromUsername, $toUsername, time(), "news", count($res));
	$item = '';
	$subitem = "<item>
	<Title><![CDATA[%s]]></Title>
	<PicUrl><![CDATA[%s]]></PicUrl>
	<Url><![CDATA[%s]]></Url>
	</item>";
	foreach ($res as $r){
		$r['url'] = $r['url'].'#mp.weixin.qq.com';
		$item.=sprintf($subitem, $r['tit'],$r['pic'], $r['url']);
	}
	$resstr = str_replace('ITEM', $item, $resstr);
	echo $resstr;
}

class wechatCallbackapiTest
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	return true;
        }
        return false;
    }
	private function checkSignature()
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}




/**
 *  @desc 根据两点间的经纬度计算距离
 *  @param float $lat 纬度值
 *  @param float $lng 经度值
 */
function get_distance_by_lng_lat($lng1,$lat1,$lng2,$lat2)
{
	$earthRadius = 6367000; //approximate radius of earth in meters

	/*
	 Convert these degrees to radians
	to work with the formula
	*/

	$lat1 = ($lat1 * pi() ) / 180;
	$lng1 = ($lng1 * pi() ) / 180;

	$lat2 = ($lat2 * pi() ) / 180;
	$lng2 = ($lng2 * pi() ) / 180;

	/*
	 Using the
	Haversine formula

	http://en.wikipedia.org/wiki/Haversine_formula

	calculate the distance
	*/

	$calcLongitude = $lng2 - $lng1;
	$calcLatitude = $lat2 - $lat1;
	$stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2);  $stepTwo = 2 * asin(min(1, sqrt($stepOne)));
	$calculatedDistance = $earthRadius * $stepTwo;

	return round($calculatedDistance);
}
