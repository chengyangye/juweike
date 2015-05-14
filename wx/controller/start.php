<?php

if(!Session::get('uid')){
	Redirect::index();
}
$pub = new Model('pubs');
$pub->find(array('uid'=>Session::get('uid')));
if(!$pub->has_id()){
	$pub->uid = Session::get('uid');
	$pub->isval = '0';
	$pub->save();
	Session::set('wid',$pub->id);
	init_data($pub->id,$pub->uid);
	Redirect::to('/admin/ind');
}else if($pub->isval !='1'){
	Session::set('wid',$pub->id);
	Redirect::to('/admin/ind');
}else{	
	Session::set('wid',$pub->id);
	Redirect::to('/admin/ind');
}


function init_data($wid,$uid){

	$begin_time = date('Y-m-d H:i:s',time());
	$end_time   = date('Y-m-d H:i:s',time()+604800*4);
	//单图文
	$res  = new Model('res');
	$res->id  = null;
	$res->con = '{"tit":"\u6b22\u8fce\u5173\u6ce8\u5fae\u4fe1\u516c\u4f17\u8d26\u53f7\u3010\u6f14\u793a\u7248\uff0c\u8bf7\u4fee\u6539\u3011","pic":"\/ups\/img_default\/dan.jpg","des":"\u70b9\u51fb\u8fdb\u5165\u5fae\u5b98\u7f51\u3010\u6f14\u793a\u7248\uff0c\u8bf7\u4fee\u6539\u3011","url":"http:\/\/wx.zongyangtech.cn\/weiweb\/365\/","ourl":"http:\/\/wx.zongyangtech.cn\/gzzh\/artview-1.html"}';
	$res->wid = $wid;
	$res->uid = $uid;
	$res->typ = 1;
	$res->save();
	//多图文
	$res1 = new Model('res');
	$res1->id  = null;
	$res1->con = '[{"tit":"\u6b22\u8fce\u5173\u6ce8\u5fae\u4fe1\u516c\u4f17\u8d26\u53f7\uff0c\u70b9\u51fb\u8fdb\u5165\u5fae\u5b98\u7f51\u3010\u6f14\u793a\u7248\uff0c\u8bf7\u4fee\u6539\u3011","pic":"\/ups\/img_default\/duo1.jpg","url":"http:\/\/wx.zongyangtech.cn\/weiweb\/365\/","ourl":"http:\/\/wx.zongyangtech.cn\/gzzh\/artview-1.html"},{"tit":"\u6b22\u8fce\u5173\u6ce8\u5fae\u4fe1\u516c\u4f17\u8d26\u53f7\uff0c\u6211\u4eec\u5c06\u7aed\u8bda\u4e3a\u60a8\u670d\u52a1","pic":"\/ups\/img_default\/duo.jpg","url":"http:\/\/wx.zongyangtech.cn\/weiweb\/365\/","ourl":"http:\/\/wx.zongyangtech.cn\/gzzh\/artview-2.html"}]';
	$res1->wid = $wid;
	$res1->uid = $uid;
	$res1->typ = 2;
	$res1->save();

	

	$res_1 = new Model('res');
	$res_1->find(array('wid'=>$wid,'typ'=>1));  //单图文
	$res_2 = new Model('res');
	$res_2->find(array('wid'=>$wid,'typ'=>2));  //多图文

	$res_content = new Model('res_content');
	$res_content->rid = $res_2->id;
	$res_content->ord = 1;
	$res_content->content = '<p>点击进入微官网[演示版，请修改]<br></p>';
	$res_content->title = '欢迎关注微信公众账号，点击进入微官网[演示版，请修改]';
	$res_content->url ='';
	$res_content->save();
	
	$res_content1 = new Model('res_content');
	$res_content1->rid = $res_2->id;
	$res_content1->ord = 2;
	$res_content1->content = '<p>点击进入微官网[演示版，请修改]<br></p>';
	$res_content1->title = '欢迎关注微信公众账号，点击进入微官网[演示版，请修改]';
	$res_content1->url ='';
	$res_content1->save();
	
	$res_content2 = new Model('res_content');
	$res_content2->rid = $res_1->id;
	$res_content2->ord = 1;
	$res_content2->content = '<p>点击进入微官网[演示版，请修改]<br></p>';
	$res_content2->title = '欢迎关注微信公众账号，点击进入微官网[演示版，请修改]';
	$res_content2->url ='';
	$res_content2->save();
	// 关键字
	$key_word = new Model('key_word');
	$key_word->id = null;
	$key_word->pubsId = $wid;
	$key_word->keyWord ='你好';
	$key_word->matchingType = 1;
	$key_word->replyType = 1;
	$key_word->replyContent = '你好';
	$key_word->resId = null;
	$key_word->save();
   //首次关注
	$first_attention = new Model('first_attention');
	$first_attention->id = null;
	$first_attention->wid = $wid;
	$first_attention->resource_id = null;
	$first_attention->typ = 0;
	$first_attention->content = '欢迎您关注XXXXXX微信服务号；您的关注是我们的不竭动力。';
	$first_attention->save();
	
	//lbs
	$lbs = new Model('lbs');
	$lbs->id = null;
	$lbs->uid = $uid;
	$lbs->wid = $wid;
	$lbs->l_sheng = 1502;
	$lbs->l_shi = 1620;
	$lbs->l_xianqu = 1622;
	$lbs->l_ind1 = 26;
	$lbs->l_ind2 = 28;
	$lbs->address ='人民广场';
	$lbs->name = '魔法屋【所有设置为演示版，请修改】';
	$lbs->content = '魔法屋';
	$lbs->pic = null;
	$lbs->jd = '118.343683';
	$lbs->wd = '35.068229';
	$lbs->tel = '400-6232003';
	$lbs->save();
 
	//优惠券
	$coupon = new Model('coupon');
	$coupon->id = null;
	$coupon->uid = $uid;
	$coupon->wid = $wid;
	$coupon->name = '优惠券活动开始啦【所有设置为演示版，请修改】';
	$coupon->ms = '优惠代金券，满300立减100！';
	$coupon->kssj = $begin_time;
	$coupon->jssj = $end_time;
	$coupon->sl = '100';
	//$coupon->pic = '/upload/auto/2013/11/08/6745576e2a1f6e3d55818292830a5eab.jpg';
	$coupon->gjz = '优惠券';
	$coupon->save();
	
	//刮刮卡
	$ggk = new Model('ggk');
	$ggk->id = null;
	$ggk->uid = $uid;
	$ggk->wid = $wid;
	$ggk->name = '刮刮卡活动开始啦【所有设置为演示版，请修改】';
	$ggk->ms = '凭此奖品可以享受聚微客套餐相应折扣。';
	$ggk->kssj= $begin_time;
	$ggk->jssj = $end_time;
	$ggk->sl = null;
	//$ggk->pic = '/upload/auto/2013/11/08/529006e16b8e2ebe1ad88a4d31e7bcf1.jpg';
	$ggk->gjz = '刮刮卡';
	$ggk->j1mc = '一等奖';
	$ggk->j1ms ='大润发200元购物卡';
	$ggk->j1gl = '1';
	$ggk->j1sl = 1;
	$ggk->j2mc = '二等奖';
	$ggk->j2ms ='大润发100元购物卡';
	$ggk->j2gl = '1';
	$ggk->j2sl = 1;
	$ggk->j3mc = '三等奖';
	$ggk->j3ms ='大润发50元购物卡';
	$ggk->j3gl = '1';
	$ggk->j3sl = 1;
	$ggk->mrzs = 20;
	$ggk->mtsl =3;
	$ggk->save();
	
//幸运大转盘
    $xydzp = new Model('xydzp');
    $xydzp->id = null;
    $xydzp->uid = $uid;
    $xydzp->wid = $wid;
    $xydzp->name = '幸运大转盘活动开始啦【所有设置为演示版，请修改】';
    $xydzp->ms = '幸运大转盘活动开始啦[演示版，请修改]';
    $xydzp->kssj = $begin_time;
    $xydzp->jssj = $end_time;
    $xydzp->sl = null;
  //  $xydzp->pic = '/upload/auto/2013/11/16/ae0944d217665441bc72e64dc6d8d805.jpg';
    $xydzp->gjz = '大转盘';
    $xydzp->j1mc = '一等奖';
	$xydzp->j1ms ='大润发200元购物卡';
	$xydzp->j1gl = '1';
	$xydzp->j1sl = 1;
	$xydzp->j2mc = '二等奖';
	$xydzp->j2ms ='大润发100元购物卡';
	$xydzp->j2gl = '1';
	$xydzp->j2sl = 1;
	$xydzp->j3mc = '三等奖';
	$xydzp->j3ms ='大润发50元购物卡';
	$xydzp->j3gl = '1';
	$xydzp->j3sl = 1;
	$xydzp->mrzs = 20;
	$xydzp->mtsl =3;
	$xydzp->save();
    
	//一站到底
	$yzdd = new Model('yzdd');
	$yzdd->id = null;
	$yzdd->uid = $uid;
    $yzdd->wid = $wid;
    $yzdd->name = '快来参加一战到底活动吧【所有设置为演示版，请修改】';
    $yzdd->ms = '亲，请点击进入一战到底答题页面，快来参加活动吧！[演示版，请修改]';
    $yzdd->kssj = $begin_time;
    $yzdd->jssj = $end_time;
    $yzdd->sl = null;
  //  $yzdd->pic = '/upload/auto/2013/11/08/44e75de6b4dc291433d089e894cbdf00.jpg';
    $yzdd->gjz = '一战到底';
    $yzdd->mrtm = 10;
    $yzdd->tk = ',100,1,';
    $yzdd->dtts = 5;
    $yzdd->tms = null;
    $yzdd->save();

	//幸运机
    $xyj = new Model('xyj');
    
    $xyj->id = null;
    $xyj->uid = $uid;
    $xyj->wid = $wid;
    $xyj->name = '幸运机活动开始啦【所有设置为演示版，请修改】';
    $xyj->ms = '幸运机活动开始啦[演示版，请修改]';
    $xyj->kssj =  $begin_time;
    $xyj->jssj =  $end_time;
    $xyj->sl = null;
  //  $xyj->pic = '/upload/auto/2013/11/08/2e1a4f6b4a189bc34a9e000f6c315b43.jpg';
    $xyj->gjz = '幸运机';
    $xyj->j1mc = '一等奖';
    $xyj->j1ms ='产品50元抵用券';
    $xyj->j1gl = '1';
    $xyj->j1sl = 1;
    $xyj->j2mc = '二等奖';
    $xyj->j2ms ='产品30元抵用券';
    $xyj->j2gl = '1';
    $xyj->j2sl = 1;
    $xyj->j3mc = '三等奖';
    $xyj->j3ms ='产品20元抵用券卡';
    $xyj->j3gl = '1';
    $xyj->j3sl = 1;
    $xyj->mrzs = 20;
    $xyj->mtsl =3;
    $xyj->save();
    
    //微吧
    $weiba = new Model('weiba');
    $weiba->id = null;
    $weiba->uid = $uid;
    $weiba->wid = $wid;
 //   $weiba->pic = '/upload/auto/2013/11/08/a089a46b5bc02de8c98d38d46720d247.jpg';
    $weiba->ms = '畅所欲言';
    $weiba->gjz = '微吧';
    $weiba->isopen = 1;
    $weiba->save();
    
   //会员卡
    $hyk = new Model('micro_member_card');
    $hyk->id = null;
    $hyk->uid = $uid;
    $hyk->wid = $wid;
    $hyk->name = '会员卡免费发放啦【所有设置为演示版，请修改】';
    $hyk->ms = '会员卡免费发放啦';
    $hyk->kssj=  $begin_time;
    $hyk->jssj =  $end_time;
    $hyk->sl = 100;
  //  $hyk->pic = '/upload/auto/2013/11/08/bd8b8e98caa2e11911ff92f7308a9e27.jpg';
   // $hyk->pic1 = '/upload/auto/2013/11/08/dd982636ac10db78063bb028cd4e3d93.png';
  //  $hyk->pic2 = '/upload/auto/2013/11/08/e69453a7f0684fff43071c0d4f5bd027.png';
    $hyk->gjz = '会员卡';
    $hyk->addr = '上海';
    $hyk->tel = '0539';
    $hyk->jf = 2;
    $hyk->save();
    
    //微团购
    $wtg = new Model('micro_group_buy');
    $wtg->id = null;
    $wtg->uid = $uid;
    $wtg->wid = $wid;
    $wtg->name = '微团购活动开始啦【所有设置为演示版，请修改】';
    $wtg->ms = '团购活动开始啦！';
    $wtg->kssj=  $begin_time;
    $wtg->jssj =  $end_time;
    $wtg->pic = '/upload/auto/2013/11/08/1af48981ddde3082e20f498a0b7a2b84.jpg';
    $wtg->gjz ='团购';
    $wtg->jg = 200;
    $wtg->scjg= 260;
    $wtg->tbtx ='买到等于赚到！';
    $wtg->save();   

    // 微调研
    $wdy = new Model('micro_survey');
    $wdy->id = null;
    $wdy->uid = $uid;
    $wdy->wid = $wid;
    $wdy->name = '微调研活动开始啦【所有设置为演示版，请修改】';
    $wdy->ms = '微调研活动开始啦！';
    $wdy->kssj=  $begin_time;
    $wdy->jssj =  $end_time;
    $wdy->pic = '/upload/auto/2013/11/08/69ffe6fe093bb5782c14a4f7ec1c13f4.jpg';
    $wdy->gjz ='微调研';
    $wdy->save();
    
    //在线预订
    $zxyd = new Model('online_booking');
    $zxyd->id = null;
    $zxyd->uid = $uid;
    $zxyd->wid = $wid;
    $zxyd->name = '在线预订活动开始啦【所有设置为演示版，请修改】';
    $zxyd->ms = '在线预订活动开始啦！';
    $zxyd->kssj=  $begin_time;
    $zxyd->jssj =  $end_time;
    $zxyd->pic = '/upload/auto/2013/11/13/2b088da89fe7a1e38d7bf726b38e21b9.jpg';
    $zxyd->gjz ='在线预订';
    $zxyd->addr = '上海';
    $zxyd->tel = '0539';
    $zxyd->type_name='车型';
    $zxyd->type = '宝马x6,宝马z4,宝马x1,宝马x7';
    $zxyd->save();
    //微投票
    $wtp = new Model('micro_vote');
    $wtp->id = null;
    $wtp->uid = $uid;
    $wtp->wid = $wid;
    $wtp->name = '微投票活动开始啦？【所有设置为演示版，请修改】';
    $wtp->ms = '您觉得我们的公众平台最需要修改的板块是？';
    $wtp->kssj=  $begin_time;
    $wtp->jssj =  $end_time;
    $wtp->pic = '/upload/auto/2013/11/08/893a3112f9688bf5ff6c1c33df05e8d5.jpg';
    $wtp->gjz ='微投票';
    $wtp->option1 ='刮刮卡';
    $wtp->option2 ='大转盘';
    $wtp->option3 ='微官网';
    $wtp->option4 ='微团购';
    $wtp->save();
}

function init_data1($wid,$uid){

	$begin_time = date('Y-m-d H:i:s',time());
	$end_time   = date('Y-m-d H:i:s',time()+604800*4);
	$db= DB::get_db();

	$res_sql1 ="INSERT INTO `res` VALUES (null, '{\"tit\":\"欢迎关注微信公众账号\",\"pic\":\"/ups/img_default/dan.jpg\",\"des\":\"欢迎关注微信公众账号\",\"url\":\"http:\\/\\/wx.zongyangtech.cn\\/weiweb\\/365\\/\",\"ourl\":\"http:\\/\\/wx.zongyangtech.cn\\/gzzh\\/artview-1.html\"}', $wid, $uid, '1')";
	$res_sql2="INSERT INTO `res` VALUES (null, '[{\"tit\":\"欢迎关注微信公众账号\",\"pic\":\"/ups/img_default/duo.jpg\",\"url\":\"\",\"ourl\":\"http://wx.zongyangtech.cn/gzzh/artview-1.html\"},{\"tit\":\"欢迎关注微信公众账号\",\"pic\":\"/ups/img_default/duo1.jpg\",\"url\":\"\",\"ourl\":\"\"},{\"tit\":\"欢迎关注微信公众账号\",\"pic\":\"/ups/img_default/dan.jpg\",\"url\":\"\",\"ourl\":\"\"}]', $wid, $uid, '2');";
	$db->query($res_sql1);
	$db->query($res_sql2);

	$res = new Model('res');
	$res->find(array('wid'=>$wid,'typ'=>1));  //单图文
	$res1 = new Model('res');
	$res1->find(array('wid'=>$wid,'typ'=>2));  //多图文
	
	$res_content = new Model('res_content');
	$res_content_sql11 = "INSERT INTO `res_content` VALUES ($res1->id, '1', '<p>点击进入微官网[演示版，请修改]<br></p>', '欢迎关注微信公众账号，点击进入微官网[演示版，请修改]', 'http://wx.zongyangtech.cn/weiweb/365/')";
	$res_content_sql12 = "INSERT INTO `res_content` VALUES ($res1->id, '2', '<p>点击进入微官网[演示版，请修改]<br></p>', '欢迎关注微信公众账号，点击进入微官网[演示版，请修改]', 'http://wx.zongyangtech.cn/weiweb/365/')";
	$res_content_sql2  = "INSERT INTO `res_content` VALUES ($res->id, '1','欢迎关注微信公众账号','欢迎关注微信公众账号', '')";
	$db->query($res_content_sql11);
	$db->query($res_content_sql12);
	$db->query($res_content_sql2);
	
	
	
	
	
	$key_word_sql  ="INSERT INTO `key_word` VALUES (null, $wid, '你好', '1', '1', '你好', null);";
	$db->query($key_word_sql);
	
	$first_attention_sql1 = "INSERT INTO `first_attention` VALUES (null,$wid, null,'0', '欢迎您关注XXXXXX微信服务号；您的关注我们的动力。')";
	$db->query($first_attention_sql1);

	$lbs_sql = "INSERT INTO `lbs` VALUES (null,$uid,$wid, 1502, 1620, 1622, 26, 28, '人民广场', '魔法屋【所有设置为演示版，请修改】', '132', '/upload/auto/2013/11/07/c1827c3af453fbea214676b6e973b1de.jpg', '118.343683', '35.068229');";
	$db->query($lbs_sql);

	$coupon_sql = "INSERT INTO `coupon` VALUES (null, $uid,$wid, '优惠券活动开始啦【所有设置为演示版，请修改】', '优惠代金券，满300立减100！', '{$begin_time}', '{$end_time}', 100, '/upload/auto/2013/11/08/6745576e2a1f6e3d55818292830a5eab.jpg', '3')";
	$db->query($coupon_sql);

	$ggk_sql = "INSERT INTO `ggk` VALUES (null, $uid,$wid, '刮刮卡活动开始啦【所有设置为演示版，请修改', '凭此奖品可以享受聚微客套餐相应折扣。', '{$begin_time}', '{$end_time}', NULL, '/upload/auto/2013/11/08/529006e16b8e2ebe1ad88a4d31e7bcf1.jpg', '2', '一等奖', '大润发200元购物卡', '0', 4, '二等奖', '大润发100元购物卡', '0', 8, '三等奖', '大润发50元购物卡', '0', 15, '四等奖', '美的饮水机', '2', 1, 10, 2, 1, 3, 2, 10, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
	$db->query($ggk_sql);

	$xydzp_sql ="INSERT INTO `xydzp` VALUES (null, $uid,$wid, '幸运大转盘活动开始啦！', '幸运大转盘活动开始啦[演示版，请修改]', '{$begin_time}', '{$end_time}', NULL, '/upload/auto/2013/11/08/bf4eceebae165a230941a74a6f235ee5.jpg', '3', '一等奖', '免费赠送短信1千条', '0', 5, '二等奖', '免费赠送短信5百条', '0', 10, '三等奖', '免费赠送短信2百条', '0', 20, 2, 2, 1, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0)";
	$db->query($xydzp_sql);

	$yzdd_sql ="INSERT INTO `yzdd` VALUES (null, $uid,$wid, '快来参加一战到底活动吧', '亲，请点击进入一战到底答题页面，快来参加活动吧！【所有设置为演示版，请修改】', '{$begin_time}', '{$end_time}', 0, '/upload/auto/2013/11/08/44e75de6b4dc291433d089e894cbdf00.jpg', 'rw', 10, ',100,1,', 5, NULL)";
	$db->query($yzdd_sql);

	$xyj_sql = "INSERT INTO `xyj` VALUES (null, $uid,$wid, '无敌幸运星活动开始啦！', '凭此奖品可享受聚微客套餐相应折扣。【所有设置为演示版，请修改】', '{$begin_time}', '{$end_time}', NULL, '/upload/auto/2013/11/07/c02452257079bb530a7acabf6cd9d20a.jpg', '4', '一等奖', '聚微客钻石会员试用7天', '0', 5, '二等奖', '聚微客抵用券50元', '0', 10, '参与奖', '聚微客抵用券20元', '0', 20, 5, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0);";
	$db->query($xyj_sql);

	$hyk_sql ="INSERT INTO `micro_member_card` VALUES (null, $uid,$wid, '会员回馈月【所有设置为演示版，请修改】', 'CARD获得微信加平台7天试用特权\r\n新功能上线优先体验权\r\n获得渠道代理高额返点优先权\r\n获得微信加平台7天试用特权\r\n新功能上线优先体验权\r\n获得渠道代理高额返点优先权\r\n', '{$begin_time}', '{$end_time}', 100, '/upload/auto/2013/11/07/8f586a735bcc867a4234643baa49572f.jpg', '/upload/auto/2013/11/08/bd8b8e98caa2e11911ff92f7308a9e27.jpg', '/upload/auto/2013/11/07/fa0d5bd577c51a467e606ff57fe9fca0.jpg', '6', '上海万阅城17层', '86671718', '<span style=\"white-space:nowrap;\">新功能上线优先体验权</span><br />\r\n<span style=\"white-space:nowrap;\">获得渠道代理高额返点优先权</span><br />\r\n<span style=\"white-space:nowrap;\">获得微信加平台7天试用特权</span><br />\r\n<span style=\"white-space:nowrap;\">新功能上线优先体验权</span><br />', '<span style=\"white-space:nowrap;\">新功能上线优先体验权</span><br />\r\n<span style=\"white-space:nowrap;\">获得渠道代理高额返点优先权</span><br />\r\n<span style=\"white-space:nowrap;\">获得微信加平台7天试用特权</span><br />\r\n<span style=\"white-space:nowrap;\">新功能上线优先体验权</span><br />', '<span style=\"white-space:nowrap;\">新功能上线优先体验权</span><br />\r\n<span style=\"white-space:nowrap;\">获得渠道代理高额返点优先权</span><br />\r\n<span style=\"white-space:nowrap;\">获得微信加平台7天试用特权</span><br />\r\n<span style=\"white-space:nowrap;\">新功能上线优先体验权</span><br />', 2, NULL)";
	$db->query($hyk_sql);

	$wtg_sql ="INSERT INTO `micro_group_buy` VALUES (null, $uid,$wid, '微团购活动开始啦 【所有设置为演示版，请修改】', '团购活动开始啦！速来抢购~', '{$begin_time}', '{$end_time}', NULL, '/upload/auto/2013/10/09/7b0d4d90f0e64563129bf42315d88bea.jpg', '7', 600.0, 700.0, 0, 0, '本团购一旦购买，恕不退款')";
	$db->query($wtg_sql);

	$wdy_sql = "INSERT INTO `micro_survey` VALUES (null, $uid,$wid, '微调研【所有设置为演示版，请修改】', '奉献您的几分钟，即可收获一份精美礼物~ \r\n亲，您的参与和选择对我们很重要，对此，我们将以精美礼品作为回报，同时您对本答卷的所有问题都以匿名形式进行并且答案得到严格保密，不会泄露您的任何信息，感谢参与~', '{$begin_time}', '{$end_time}', '/upload/auto/2013/11/08/69ffe6fe093bb5782c14a4f7ec1c13f4.jpg', '8')";
	$db->query($wdy_sql);

	$wtp_sql ="INSERT INTO `micro_vote` VALUES (null, $uid,$wid, '苹果用户体验好么【所有设置为演示版，请修改】？', 'BBBBNN苹果2013年全球开发者大会(WWDC)在美国旧金山召开，发布iOS 7系统，新系统几乎重新设计了所有用户界面(UI)，采用\"扁平化设计\"。这种极简主义的设计，你怎么看？NNNNNNNNN    ', '{$begin_time}', '{$end_time}', NULL, '/upload/auto/2013/11/08/893a3112f9688bf5ff6c1c33df05e8d5.jpg', '9', '好', '不好', '很差','无语')";
	$db->query($wtp_sql);

	$zxyd_sql ="INSERT INTO `online_booking` VALUES (null,$wid,$uid, '宝马试驾在线预约【所有设置为演示版，请修改】', '试驾宝马全系车型，体验前瞻性主动安全系统，智能车载交互系统，豪华精致的\r\n设计，高效动力操控系统。', '/upload/auto/2013/11/08/62cac18850281adb575eacbddd5841e7.jpg', '临沂市兰山区万阅城17层', '86671718', '10', '{$begin_time}', '{$end_time}', '车型', '宝马x6,宝马z4,宝马x1,宝马x7', '驱动', '前驱,后驱,全时四驱,适时四驱', NULL, NULL)";
	$db->query($zxyd_sql);


}
