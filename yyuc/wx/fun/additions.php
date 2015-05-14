<?php
/**
 * 全局启动函数
 */
function yyuc_start(){
	$_SERVER['WEB_NAME'] = '聚微客';
	$_SERVER['WEI_URL'] = 'wx.zongyangtech.cn/weiweb/17/';
	//$_SERVER['CHAT_JS'] = '<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODA0ODQ2NV84MTExNV80MDA2MjMyMDAzXw"></script>';
	$_SERVER['CHAT_JS'] = '86671718';
        $_SERVER['QQ_QUN'] = '86671718';
        $_SERVER['DEMO_ADDR'] = '无锡市滨湖区黄金湾工业园';
        $_SERVER['DEMO_TEL'] = '18621784057';
	$_SERVER['LOGO_PIC'] = '/media/images/reg/logo_big.png';
	$_SERVER['LOGO_PIC2'] = '/media/images/reg/logo2.png';
	$_SERVER['IS_OEM'] = false;
	$_SERVER['OEM_ID'] = '0';
        if($_SERVER ['HTTP_HOST'] =='121.199.59.187'|| $_SERVER ['HTTP_HOST'] == '223.6.250.136'|| $_SERVER ['HTTP_HOST'] == 'wangmob.com'|| $_SERVER ['HTTP_HOST'] == 'wx.dxcx.com'
        || $_SERVER ['HTTP_HOST'] == 'weimob.com' || $_SERVER ['HTTP_HOST'] == '115.28.231.188' || $_SERVER ['HTTP_HOST'] == 's22.cnzz.com'){
		die();
	}
	if(strpos($_SERVER ['HTTP_HOST'], 'wx.zongyangtech.cn')==false){
		$ag = new Model('user_agency');
		$ag->find(array('domain'=>strtolower($_SERVER ['HTTP_HOST'])));
		if($ag->has_id()){
			$_SERVER['WEB_NAME'] = $ag->webname;
			$_SERVER['CHAT_JS'] = $ag->kfcode;
			$_SERVER['LOGO_PIC'] = $_SERVER['LOGO_PIC2'] = $ag->logo;
			$_SERVER['IS_OEM'] = true;
			$_SERVER['OEM_ID'] = $ag->id;
			$_SERVER['WEI_URL'] = $ag->weiurl;
		}
	}
	//记录访问日志
	//Log::error(Request::ip().'：'.$_SERVER['HTTP_USER_AGENT'].'-'.Request::url());	
}
function get_sn($pre = '',$key=''){
	if(!Cache::forever($key.'WXGJ_HYZZJH'.Session::get('wid'))){
		Cache::forever($key.'WXGJ_HYZZJH'.Session::get('wid'),10000000);
	}
	$hyind = intval(Cache::forever($key.'WXGJ_HYZZJH'.Session::get('wid')))+1;
	Cache::forever($key.'WXGJ_HYZZJH'.Session::get('wid'),$hyind);
	$hyklen = strlen($hyind.'');
	for ($i=$hyklen;$i<8;$i++){
		$hyind = '0'.$hyind;
	}
	return $pre.$hyind;
}
//会员级别翻译
function translate_level($level_id=null,$justtext = false){
	//$l_arr = array('1'=>'普通用户','2'=>'普通版会员','3'=>'标准版会员','4'=>'钻石版会员','5'=>'行业版会员');
	$l_arr = array('1'=>'普通用户','2'=>'普通版会员','3'=>'标准版会员','4'=>'钻石版会员','5'=>'行业版会员',
	'6'=>'行业版会员-餐饮外卖','7'=>'行业版会员-美容美发','8'=>'行业版会员-休闲娱乐','9'=>'行业版会员-电商','10'=>'行业版会员-教育','11'=>'行业版会员-商超零售','12'=>'行业版会员-房地产','13'=>'行业版会员-酒店住宿','14'=>'行业版会员-汽车');
	if($level_id===null){
		return $justtext ? '' : $l_arr;
	}else{
		return $l_arr[$level_id];
	}	
}

/*
 *   @desc代理级别翻译 
 *   @param $level 
 *  */
function translate_agency_level($level_id=null,$justtext = false){
	$l_arr = array('1'=>'银牌代理','2'=>'金牌代理','3'=>'核心代理','4'=>'独家代理');
	if($level_id===null){
		return $justtext ? '' : $l_arr;
	}else{
		return $l_arr[$level_id];
	}
}

//员工级别
function translate_employee_level($level_id=null,$justtext = false){
	$l_arr = array('1'=>'网络销售','2'=>'财务主管','3'=>'财务人员','4'=>'客服主管','5'=>'客服人员','6'=>'业务主管','7'=>'业务人员','8'=>'招商主管','9'=>'招商人员');
	if($level_id===null){
		return $justtext ? '' : $l_arr;
	}else{
		return $l_arr[$level_id];
	}
}

function getUrl($controlName){	
     $wid = Session::get('wid');
     $weiba = new Model('weiba');
     $weiba->find(array('wid'=>$wid));
     if($controlName=='weibaAll'){
     	return conf::$http_path.'wx/'.'weiba'.'-'.$weiba->id.conf::$suffix.'?&wid='.$wid;
     }elseif($controlName=='weiba'){
     	return conf::$http_path.'wx/'.$controlName.'-'.$weiba->id.'-'.Request::get(1).conf::$suffix.'?&wid='.$wid;
     }else{ 
     	return conf::$http_path.'wx/'.$controlName.'-'.Request::get(1).conf::$suffix.'?&wid='.$wid;
    }
}

function getShopList($arr=null){
	$mds = new Model('lbs');
	$mdlb = $mds->where(array('istag'=>'1','wid'=>Session::get('wid')))->map_array('id', 'name');
	if($arr !== null){
		return array(''=>'不限')+$mdlb;
	}else{
		return $mdlb;
	}
}

function keyword_add($tn,$id,$kw){
	$wid = Session::get('wid');
	$kwt = new Model('main_keyword');
	$kwt->delete(array('wid'=>$wid,'kw'=>$kw));
	$kwt->delete(array('tn'=>$tn,'tid'=>$id));
	$kwt->wid = $wid;
	$kwt->kw = $kw;
	$kwt->tn = $tn;
	$kwt->tid = $id;
	$kwt->save();
}
/**
 *   @param $lbs object
 *   @param $tn  table name
 * */
function do_keyword_add($lbs,$tn){
	$id = $lbs->id;
	$kw = $lbs->gjz;
	if($id == ''){
		$id =  mysql_insert_id();
	}
	keyword_add($tn,$id,$kw);
}


function keyword_desc(){
	$desc = array(
		//优惠券
		'coupon'=>array(
				'name'=>'优惠券',
				'auth'=>'marketingPromotion/discountCoupon',
				'url'=>'wx/yhq-@id.html'
		),
		'ggk'=>array(
				'name'=>'刮刮卡',
				'auth'=>'marketingPromotion/ggk',
				'url'=>'wx/ggk-@id.html'
		),
		'xydzp'=>array(
				'name'=>'幸运大转盘',
				'auth'=>'marketingPromotion/xydzp',
				'url'=>'wx/xydzp-@id.html'
		),			
		'xydzp'=>array(
				'name'=>'幸运机',
				'auth'=>'marketingPromotion/xyj',
				'url'=>'wx/xyj-@id.html'
		),
		'micro_group_buy'=>array(
				'name'=>'微团购',
				'auth'=>'businessModule/microGroupBuy',
				'url'=>'wx/wtg-@id.html'
		),
		'yzdd'=>array(
				'name'=>'一站到底',
				'auth'=>'marketingPromotion/yzdd',
				'url'=>'wx/yzdd-@id.html'
		),
		'weiba'=>array(
				'name'=>'微吧',
				'auth'=>'marketingPromotion/weiba',
				'url'=>'wx/weiba-@id.html'
		),
		'micro_member_card'=>array(
				'name'=>'会员卡',
				'auth'=>'businessModule/microMemberCard',
				'url'=>'wx/hyk-@id.html'
		),
		'micro_member_card'=>array(
				'name'=>'微调研',
				'auth'=>'businessModule/microSurvey',
				'url'=>'wx/wdy-@id.html'
		),
		'micro_member_card'=>array(
				'name'=>'微投票',
				'auth'=>'businessModule/microVote',
				'url'=>'wx/wtp-@id.html'
		),
		'online_booking'=>array(
				'name'=>'在线预订',
				'auth'=>'businessModule/onlineBooking',
				'url'=>'wx/onlineBooking-@id.html'
		),			
		'micro_photo_list'=>array(
				'name'=>'微相册',
				'auth'=>'xiangce/set',
				'url'=>'wx/wxclist-@id.html'
		),			
	);
}

/*
 *   @desc  人品测算
 *   @param $name 
 *    
 * */
	
function renpin($name,&$fs){
	$haor = array('孟庆群','廉兆金','郭子仪','郭海庆','郭海涛','郭一鸣','于月','张文杰','王玉思','猪八戒','沙和尚','科比','乔丹');
	$huair = array();
	if(in_array($name, $haor)){
		$rp = 999999;
	}else if(strpos($name, '日本')!==false){
		$rp = -44444;
	}else{
		$rp = base_convert(substr(md5(md5($name)),26),36,10);
		$rp = (2*($rp%100))%100;
	}    
	$fs = $rp;
	if($rp < 0){
		return '你它妈的是被强奸出来的的吧，吃屎去吧';
	}elseif($rp == 0){
		return '你一定不是人吧？怎么一点人品都没有？！';
	}elseif (1<= $rp && $rp <=5){
		return '算了，跟你没什么人品好谈的...';
	}elseif(6<= $rp && $rp <=10){
		return '是我不好...不应该跟你谈人品问题的...';
	}elseif(11<= $rp && $rp <=15){
		return '杀过人没有?放过火没有?你应该无恶不做吧?';
	}elseif(16<= $rp && $rp <=20){
		return '你貌似应该三岁就偷看隔壁大妈洗澡的吧...';
	}elseif(21<= $rp && $rp <=25){
		return '你的人品之低下实在让人惊讶啊...';
	}elseif(26<= $rp && $rp <=30){
		return '你的人品太差了。你应该有干坏事的嗜好吧?';
	}elseif(31<= $rp && $rp <=35){
		return '你的人品真差!肯定经常做偷鸡摸狗的事...';
	}elseif(36<= $rp && $rp <=40){
		return '你拥有如此差的人品请经常祈求佛祖保佑你吧...';
	}elseif(41<= $rp && $rp <=45){
		return '老实交待..那些论坛上面经常出现的偷拍照是不是你的杰作?';
	}elseif(46<= $rp && $rp <=50){
		return '你随地大小便之类的事没少干吧?';
	}elseif(51<= $rp && $rp <=55){
		return '你的人品太差了..稍不小心就会去干坏事了吧?';
	}elseif(56<= $rp && $rp <=60){
		return '你的人品很差了..要时刻克制住做坏事的冲动哦..';
	}elseif(61<= $rp && $rp <=65){
		return '你的人品比较差了..要好好的约束自己啊..';
	}elseif(66<= $rp && $rp <=70){
		return '你的人品勉勉强强..要自己好自为之..';
	}elseif(71<= $rp && $rp <=75){
		return '有你这样的人品算是不错了..';
	}elseif(76<= $rp && $rp <=80){
		return '你有较好的人品..继续保持..';
	}elseif(81<= $rp && $rp <=85){
		return '你的人品不错..应该一表人才吧?';
	}elseif(86<= $rp && $rp <=90){
		return '你的人品真好..做好事应该是你的爱好吧..';
	}elseif(91<= $rp && $rp <=95){
		return '你的人品太好了..你就是当代活雷锋啊...';
	}elseif(96<= $rp && $rp <=99){
		return '你是世人的榜样！';
	}elseif( $rp == 100){
		return '天啦！你不是人！你是神！！！';
	}else{
		return '么么哒，你的人品爆棚了，宇宙第一大好人！！！';
		die;
	}
		
}

$bsx_arr = array('1'=>'自动变速箱(AT)','2'=>'手动变速箱(MT)','3'=>'手自一体','4'=>'无级变速箱(CVT)','5'=>'无级变速(VDT)','6'=>'双离合变速箱(DCT)','7'=>'序列变速箱(AMT)');
