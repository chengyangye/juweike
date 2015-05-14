<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="baidu-site-verification" content="quuUyChCRX" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="<?php echo $gkw; ?>" name="Keywords">
	<meta content="<?php echo $gde; ?>" name="Description">
    <meta property="qc:admins" content="731030567767510167516211636" />
    <link rel="stylesheet" type="text/css" href="/res/index/weixin.css" media="all" />

<TITLE><?php echo $gti; ?></TITLE>
<script type="text/javascript" src="http://wx.zongyangtech.cn/res/index/img/jQuery.js?2013-08-17"></script>
<script type="text/javascript" src="http://wx.zongyangtech.cn/res/index/img/skdslider.js?2013-08-17"></script>
<script type="text/javascript" src="http://wx.zongyangtech.cn/res/index/img/base.js?2013-08-17"></script>
<script type="text/javascript" src="http://wx.zongyangtech.cn/res/index/img/index_case_data.js?2013-08-17"></script>
<script type="text/javascript" src="http://wx.zongyangtech.cn/res/index/img/index.js?2013-08-17"></script>
<script type="text/javascript" src="http://wx.zongyangtech.cn/res/index/img/jquery_lightbox_min.js?2013-08-17"></script>
<script type="text/javascript" src="http://wx.zongyangtech.cn/res/index/img/backToTop.js?2013-08-17"></script>
<link rel="shortcut icon" href="<?php if ($_SERVER['IS_OEM']){ ?>/favicon.ico<?php }else{ ?>/faviconmy.ico<?php } ?>" />
<link rel="stylesheet" href="/res/mp3/skin/circle.skin/circle.player.css">
<script type="text/javascript" src="/res/mp3/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/res/mp3/js/jquery.transform2d.js"></script>
<script type="text/javascript" src="/res/mp3/js/jquery.grab.js"></script>
<script type="text/javascript" src="/res/mp3/js/mod.csstransforms.min.js"></script>
<script type="text/javascript" src="/res/mp3/js/circle.player.js"></script>

</head>
<body>

<div id="header" class="head">
   <div class="top">
<div class="topnav" style="position: relative;">
        	<a class="tel">咨询热线：<span>18621784057</span> </a>
            
        </div>
        <div class="menu" id="nav" >
        	<a class="active" href="#app">微菜单</a>
            <a href="#menber">微官网</a>
            <a href="#sever">微会员</a>
            <a href="#lps">微活动</a>
            <a href="#tivi">微商城</a>
            <a href="#site">微推送</a>
            <a href="#statics">微服务</a>
            <a href="#weitj">微统计</a>
            <a href="#caser">微案例</a>
        </div>

   </div>

</div>

<style type="text/css">
.footer dd p {
	line-height: 32px;
	font-family: 宋体;
	margin: 10px 0;
	display: block;
}

#cooper {
	width: 1400px;
	margin: 0 auto;
	height: 100px;
}
</style>
<script type="text/javascript">

 function checkEmail(){
	 var email = Duomeng.getElementById('fun');
	 var _email=document.getElementById('email_warn_box');
	 var warn=document.getElementById('email_warn');
	 var value = email.value;
	 //if (value  && value.match(/^[\w\.\-]+@([\w\-]+\.)+[a-z]<?php echo 2,4; ?>$/ig)){
	 if (value){
		 input_correct(email);
		 _email.style.visibility="hidden";
		 return true;
	 }
	 else {
		 //      input_error(email,"input_email_e");
		 input_error1(email);
		 warn.innerHTML="用户名不能为空";
		 _email.style.visibility="visible";
		 return false;
	 }
 }
 function checkPwd(){
	 var pwd = Duomeng.getElementById('fpwd');

	 var _password=document.getElementById('pw_warn_box');
	 var warn1=document.getElementById('pw_warn');
	 //if (pwd.value  && pwd.value.length >= 6 && pwd.value.length <= 20){
	 if (pwd.value){
		 input_correct(pwd);
		 _password.style.visibility="hidden";
	 } else {
		 //   input_error(pwd,"reinput_password_e");
		 input_error1(pwd);
		 warn1.innerHTML="密码不能为空";
		 _password.style.visibility="visible";
		 return false;
	 }

	 return true;
 }
setTimeout(function(){
  Duomeng.getElementById('fun').value && checkEmail();
  Duomeng.getElementById('fpwd').value && checkPwd();
},500);

function input_error(el,classname){
	el.className = classname;
}

function input_correct(el){
	//el.className = "input_correct";
}
function change_input_bg(el,id){
	var warn=document.getElementById(id);
	el.className="input_active";
	warn.style.visibility="hidden";
}
function back_input_bg(el){
	    el.className="";
}
function bgnone(el){
	    el.className="bgnone";
}
function  input_error1(el){

	    el.className="input_error1";
}

-->
</script>
<script type="text/javascript">
		jQuery(document).ready(function(){
			if(window.parent && window.parent != window){
				window.parent.location.href = location.href;
			}
			
			jQuery('#demo').skdslider({ 'delay':5000, 'fadeSpeed': 2000,'autoStart':true});
		});
</script>
<div id="container banner">
	<div id="demo" class="skdslider">
            <ul>
                <li id="p0"><!--<a href='http://cainiaoapp.cn/reg.html' target='_blank'></a>--></li>
                <li id="p1"></li>
                <li id="p2"></li>
                <li id="p3"></li>
                <li id="p4"></li>
              
            </ul>
    </div>
	<div id="login_panel">
		<div class="window">
		<form id="loginform" action="" class="fn-clear" method="post">
					<div id="panel">
								<div class="title">
					<h1><span class="f30px threedhighlight">登录</span><span class="f17px identity"><?php echo $_SERVER['WEB_NAME']; ?>后台</span></h1>
				</div>
				<div class="first">
					<div class="inputlist" style="position:relative;">
						<div id="email_warn_box" class="warn_box">
							<p id="email_warn" class="warn"></p>
							<p class="angle"></p>
						</div>
						<p class="email_box input_box">
						<?php echo $u->text('un','class="" style="outline: 0;" placeholder="请输入用户名" tabindex="1" maxlength="40"'); ?>
						</p>
					</div>
					<div class="inputlist">
						<div id="pw_warn_box" class="warn_box">
							<p id="pw_warn" class="warn"></p>
							<p class="angle"></p>
						</div>
						<p class="password_box input_box">
						<?php echo $u->password('pwd','class="" placeholder="请输入密码" maxlength="30" style="outline: 0;"'); ?>
						</p>
					</div>
					<div>
						<input id="hold" type="checkbox" checked  value="1" name="remme"/>&nbsp;
						<label for="hold">记住登录</label>
						<a class="dotted" href="/reg.html" style="line-height:34px;color: red;font-size: 16px;font-weight: bold;" target="_blank">&nbsp;&nbsp;&nbsp;申请试用</a>
						<a class="dotted" href="/findpwd.html" style="line-height:34px;color: gray;font-size: 12px;" target="_blank">&nbsp;&nbsp;&nbsp;忘记密码？</a>
					</div>
				</div>

				<div id="tips">
					<h1><input id="login-btn" class="btn" type="submit" value="登录" />
					<a  class="btn" href="https://graph.qq.com/oauth2.0/authorize?response_type=code&scope=get_user_info,add_t,add_idol,del_t,add_share&client_id=100543439&redirect_uri=http://wx.zongyangtech.cn&state=qqreg"><img src="/res/qq.png" style="vertical-align:middle;"/>QQ登录</a>
					</h1>
				</div>
			</div>
			</form>
					</div>

					</div>
</div>



<div id="app" class="weiapp" data-connect="nav">
	<dl>
    	<dt>自定义菜单——打造最便捷的微信</dt>
        <dd>
        	<p><?php echo $_SERVER['WEB_NAME']; ?>提供微信公众号自定义菜单管理功能，用户无需再通过输入关键词触发回复，直接点击菜单就可以看相关的内容，<?php echo $_SERVER['WEB_NAME']; ?>可与企业原有Wap进行打通，同时可定制个性化功能、使用HTML5新技术进行无限拓展，帮助企业打造最便捷、易推广的微信，此功能如果结合微信3G网站可以使您的公众号用户体验更好，带给粉丝不一样的感受。</p>
            <a href="/reg.html" target="_blank" class="bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
        </dd>
    </dl>
</div>
<div id="menber" class="weimenber" data-connect="nav">
	<dl>
      <dt>微官网——五分钟打造超炫微信3G网站</dt>
      <dd>
      	<p>微官网是指将企业信息、服务、活动等内容通过微信网页的方式进行表现，用户只要通过简单的设置，就能快速生成属于您自己的微信3G网站，并且有各种精美模板，供您选择，还有自定义模版，可以设计出自己的风格，不但提高了信息量，也使信息的展现更加赏心悦目，进一步提高用户体验。</p>
  <a href="/reg.html" target="_blank" class="bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
        </dd>
      </dd>

    </dl>

</div>
<div id="sever" class="weicustomer" data-connect="nav">
	<dl>
    	<dt>微会员——移动时代的社会化会员管理平台</dt>
        <dd>
           <p>微信会员卡通过在微信内植入会员卡，基于全国4亿微信用户，帮助企业建立集品牌推广、会员管理、营销活动、统计报表于一体的微信会员管理平台。清晰记录企业用户的消费行为并进行数据分析；还可根据用户特征进行精细分类，从而实现各种模式的精准营销。</p>
           <a href="/reg.html" target="_blank" class="bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
        </dd>

    </dl>
</div>

<div id="lps" class="weilsp" data-connect="nav">
	<dl>
    	<dt>微活动——优惠券+刮刮卡+大转盘+微投票+一战到底的会员再营销</dt>
        <dd>
        	<p>我们将利用微信的强交互性，让您通过对互动流程、环节和方式的设计，运用各种设计活动从而实现与用户的互动交流,，微整合系统互动符合微信娱乐性强的产品本质，<?php echo $_SERVER['WEB_NAME']; ?>内置了专为商家定制的"商家营销服务模块"，包括优惠券推广模块、幸运大转盘推广模块、刮刮卡抽奖模块、微投票、一战到底等功能模块，商家通过发起营销活动，对已有客户进行再营销，通过不断更新补充主题，用户可以反复参与，并可带动周边朋友一起分享，从而形成极强的口碑营销效果。</p>
             <a href="/reg.html" target="_blank" class="bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
        </dd>
    </dl>

</div>

<div id="tivi" class="weiactivity"  data-connect="nav">
	<dl>
    	<dt>微商城——打造微信在线购物平台</dt>
        <dd>

            <p>微商城是国内首款基于移动互联网的商城应用服务产品，以时下最热门的互动应用微信为媒介，配合微信5.0微信支付功能，实现商家与客户的在线互动，即时推送最新商品信息给微信用户，可以为每一个公众号建立品牌微信商城，实现商城的在线支付功能，并且对商城参与人数，交易量进行跟踪。</p>   <a href="http://wpa.qq.com/msgrd?v=3&uin=4006305400&site=qq&menu=yes" class="bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
        </dd>
    </dl>
</div>

<div id="site" class="weioffsite"  data-connect="nav">
	<dl>
    	<dt>微推送（LSP）：微信附近的人——精准营销</dt>
        <dd>
        <p>Location Surround Push(基于附近的人的消息推送)微信中基于LBS(基于位置的服务)的功能插件"查看附近的人"便可以使更多陌生人看到这种强制性广告。
用户点击"查看附近的人"后，可以根据自己的地理位置查找到周围的微信用户。在这些附近的微信用户中，除了显示用户姓名等基本信息外，还会显示用户签名档的内容。所以用户可以利用这个免费的广告位为自己的产品打广告。 </p>
<p>营销人员在人流最旺盛的地方后台24小时运行微信，如果"查看附近的人"使用者足够多，这个广告效果也会不断随着微信用户数量的上升，可能这个简单的签名栏也会变成会移动的"黄金广告位"。</p>
      <a href="/reg.html" target="_blank" class="bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
      </dd>
    </dl>
</div>

<div id="statics" class="weistatistical"  data-connect="nav">

	<dl>
    	<dt>微服务——微信企业应用与电子商务</dt>
        <dd>
        <p>有小黄鸡陪聊加强版510万数据，过滤了广告和一些敏感词汇。 还有天气查询 ，手机查询，邮编查询，快递查询（支持160家快递公司），身份证查询，人品计算，翻译，字典，百科（全网数据），音乐80.1万 ，笑话5万条，小黄鸡陪聊510万条，诗词23万首，诗句 225万，成语5万，谜语5万，解梦3万，糗事55万，公交线路4万，火车线路4500，机器人学习功能等等......</p>
         <a href="#" class="target="_blank" bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
        </dd>

    </dl>
</div>

<div id="weitj" class="weitj"  data-connect="nav">
	<dl>
    	<dt>微统计——实时数据统计，监控运营效果</dt>
        <dd>
        <p><?php echo $_SERVER['WEB_NAME']; ?>后台可以实时统计微信公众号的粉丝关注情况和用户语音请求数，根据统计对相关推广营销活动效果及某些敏感因素对您的影响作出判断，并对相关市场行为作出相应调整，从一定程度上实现了对市场的监控与及时应对。</p>
      <a href="/reg.html" target="_blank" class="bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
      </dd>
    </dl>
</div>


<DIV id=caser class=weiCase data-connect="nav">
<DIV id=case data-connect="nav" 
data-img-path="/http://wx.zongyangtech.cn/res/index/img/www/caseimg">
<DIV class=title_pic>微案例：我们服务的客户包含但不限于……</DIV>
<DIV class=wm_case_mod><!--div class="wm_case_mod_hd">
            <h3 class="wm_case_mod_t">成功案例
            </h3>
        </div-->
<DIV class=wm_case_mod_bd>
<UL class=wm_case_list>
  <LI id=case_0 class=wm_case_item name="hgyj"><SPAN class=icon_wrapper><I 
  class="icon_wm_case hgyj"></I></SPAN>
  <H4 class=wm_case_t></H4></LI>
  <LI id=case_1 class=wm_case_item name="wny"><SPAN class=icon_wrapper><I 
  class="icon_wm_case wny"></I></SPAN>
  <H4 class=wm_case_t></H4></LI>
  <LI id=case_2 class=wm_case_item name="shdz"><SPAN class=icon_wrapper><I 
  class="icon_wm_case shdz"></I></SPAN>
  <H4 class=wm_case_t></H4></LI>
  <LI id=case_3 class=wm_case_item name="bgy"><SPAN class=icon_wrapper><I 
  class="icon_wm_case bgy"></I></SPAN>
  <H4 class=wm_case_t></H4></LI>
  <LI id=case_4 class=wm_case_item name="mddd"><SPAN class=icon_wrapper><I 
  class="icon_wm_case mddd"></I></SPAN>
  <H4 class=wm_case_t></H4></LI>
  <LI id=case_5 class=wm_case_item name="yhd"><SPAN class=icon_wrapper><I 
  class="icon_wm_case yhd"></I></SPAN>
  <H4 class=wm_case_t></H4></LI>
  <LI id=case_6 class=wm_case_item name="hqc"><SPAN class=icon_wrapper><I 
  class="icon_wm_case hqc"></I></SPAN>
  <H4 class=wm_case_t></H4></LI></UL>
<DIV class="default_wrapper wm_case_desc group">
<DIV class=wm_case_desc_c>
<IMG id=case_img_left class=wm_case_desc_img alt="" src="http://wx.zongyangtech.cn/res/index/img/hgyj_l.jpg">
<IMG id=case_img_right class="wm_case_desc_img extra" alt="" src="http://wx.zongyangtech.cn/res/index/img/hgyj_r.jpg"> 
<P class=wm_case_desc_text><STRONG id=case_title></STRONG><BR><SPAN 
id=case_desc></SPAN><BR>
<P style="TEXT-ALIGN: center">
<IMG id=case_ewm src="http://wx.zongyangtech.cn/res/index/img/hgyj-ewm.jpg" width=180 height=180></P>
<P></P></DIV><SPAN id=case_arrow class=arrow><I class=arrow_out></I><I 
class=arrow_in></I></SPAN></DIV></DIV></DIV>
<SCRIPT type=text/javascript>


        var case_tips_len = 7;
        var case_tips = {
            'hgyj': {
                'title': '韩国艺匠',
                'desc': '服务号 -- 韩国艺匠是一家专注于韩式婚纱的高端摄影集团公司，7月份通过与<?php echo $_SERVER['WEB_NAME']; ?>合作，采用<?php echo $_SERVER['WEB_NAME']; ?>平台的微官网、微预约、微团购等一系列功能，在微官网上展现出自己的场景、套餐、婚纱礼服，还可以分享客照，并且通过刮刮卡、大转盘、积分计划等活动与客户产生很好的互动，大大的提高了用户体验度，在业界取得很好的口碑！微信粉丝量直线上升，1个月之内通过<?php echo $_SERVER['WEB_NAME']; ?>微预约功能预约的客户量达到200多人！'
            },
            'wny': {
                'title': '微诺亚',
                'desc': '订阅号 -- 如果你是持卡人，可快捷查询信用卡账单、额度及积分；快速还款、申请账单分期；微信转接人工服务；信用卡消费，微信免费笔笔提醒。如果不是持卡人，可以微信办卡！'
            },
            'shdz': {
                'title': '上海大众',
                'desc': '订阅号 -- 上海大众利用公众账号建立自己跟顾客和车友的互动平台，通过使用<?php echo $_SERVER['WEB_NAME']; ?>平台自定义菜单功能展现最新车型，功能介绍，还可以基于地理位置找到附近的4S店，及相应的车友试驾活动报名。目前已经通过<?php echo $_SERVER['WEB_NAME']; ?>平台销售出300多部汽车。'
            },
            'bgy': {
                'title': '碧桂园',
                'desc': '订阅号 -- 碧桂园十里银滩是深圳的一家地产企业旗下的楼盘，通过<?php echo $_SERVER['WEB_NAME']; ?>360全景户型展示，从视觉上震撼客户的心灵；加上<?php echo $_SERVER['WEB_NAME']; ?>会员卡功能与客户的实景照片互动，让原本严肃的楼盘介绍变的有趣生动，加深了客户的映像，赢得了客户的信赖，自4月份以来通过<?php echo $_SERVER['WEB_NAME']; ?>平台有20%的预约看房来自微信。'
            },
            'mddd': {
                'title': '麦兜点点',
                'desc': '服务号 --麦兜点点是属于线下一个中式快餐店打造的微信点餐平台，里面有相应菜式搭配介绍及相应价格，更有一键电话联系这样的快捷功能，配以相应的微官网活动推广及品牌故事介绍，这样高端的用户体验给他带来的是每天微信订单量一度飙升到3000+。'
            },
            'yhd': {
                'title': '1号店',
                'desc': '订阅号 --1号店使用<?php echo $_SERVER['WEB_NAME']; ?>"刮刮乐"微信营销活动，用户通过微信玩刮刮卡，在手机屏幕进行刮奖的游戏， 1号店借助<?php echo $_SERVER['WEB_NAME']; ?>的"刮刮乐"活动，使用户在参与过程中感受到了趣味性和互动感，同时也借此获得了很好的用户'
            },
            'hqc': {
                'title': '深圳华侨城',
                'desc': '订阅号 --深圳东部华侨城为多数人所熟知，主要分：茶溪谷度假公园、大华兴寺、大峡谷生态公园。其把<?php echo $_SERVER['WEB_NAME']; ?>作为了自己的主要展示平台，不仅设立了结合3D地图加语音介绍的导游功能，更是提供了相应的吃住娱攻略及驴友日记，让游玩者更好的了解景区情况，<?php echo $_SERVER['WEB_NAME']; ?>这项超赞的定制开发功能为深证东部华侨城赢来了一致好评。'
            },
          
        };
        (function (jQ) {
            jQ(".wm_case_item").hover(function () {
                var id = jQ(this).attr("id");
                show_case(id);
            },
            function () {
                jQ(this).removeClass("on");
            });

            var idx = 0,
            play = timer = null;
            function show_case(case_id) {
                jQ(".on").removeClass("on");
                var _this = jQ("#" + case_id);
                _this.find(".icon_wm_case").addClass("on");

                /*
					if( timer != null )
					{
					  clearInterval( timer );
					  timer = null;
					}
					*/
                var alpha = 0;
                var path = jQ("#case_img_left").attr("src"),
                prefix = path.substr(0, path.lastIndexOf('/') + 1),
                name = _this.attr('name');
                jQ("#case_img_left").attr("src", prefix + name + '_l.jpg');
                jQ("#case_img_right").attr("src", prefix + name + '_r.jpg');
                jQ("#case_arrow").css("left", _this.position().left + jQ(".icon_wm_case:first").width() / 2);
                jQ("#case_title").text(case_tips[name]['title']);
                jQ("#case_desc").text(case_tips[name]['desc']);
				jQ("#case_ewm").attr("src", prefix + name + '-ewm.jpg');
                idx = parseInt(case_id.split('_')[1]);

                /*
			timer = setInterval( function(){
			  alpha += 25;
			  alpha > 100 && ( alpha = 100 );
			  jQ(".wm_case_desc_c").css( "opacity", alpha / 100 );
			  jQ(".wm_case_desc_c").css( "filter", "alpha(opacity = " + alpha + ")" );
			  alpha == 100 && clearInterval( timer );
			}, 20 );
			*/
            };

            function auto_play() {
                play = setInterval(function () {
                    ++idx;
                    idx >= case_tips_len && (idx = 0);
                    show_case('case_' + idx);
                },
                1500);
            };

            jQ(".wm_case_mod_bd").hover(function () {
                clearInterval(play);
                play = null;
            },
            function () {
                if (play != null) {
                    clearInterval(play);
                }
                auto_play();
            });

            (function _init() {
                jQ(".wm_case_item").each(function () {
                    jQ(this).find('.wm_case_t').text(case_tips[jQ(this).attr('name')]['title']);
                });
                jQ("#case_title").text(case_tips['hgyj']['title']);
                jQ("#case_desc").text(case_tips['hgyj']['desc']);
                show_case('case_' + 0);
                auto_play();

            })();
        })(jQuery);
    </SCRIPT>
<!--  -->
<!-- <DIV class=title_pic>入驻品牌</DIV> -->
<!-- <DIV class="page block block_case">
<UL>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/huanlegu.jpg"></div>
  <DIV class=circle><IMG alt="" src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt=""  src="http://wx.zongyangtech.cn/res/index/img/case_01.jpg"></DIV>
  <H4>欢乐谷</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/yilong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_02.jpg"></DIV>
  <H4>艺龙</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/dazhong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_03.jpg"></DIV>
  <H4>一汽大众</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/lvdi.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_04.jpg"></DIV>
  <H4>绿地集团</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/108shop.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_05.jpg"></DIV>
  <H4>108shop</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/motoul.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_06.jpg"></DIV>
  <H4>motoul</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_07.jpg"></DIV>
  <H4>遇见台湾</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_08.jpg"></DIV>
  <H4>杰威尔</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/zhenzhen.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_09.jpg"></DIV>
  <H4>蓁蓁</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/mofashijia.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_10.jpg"></DIV>
  <H4>膜法世家</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_11.jpg"></DIV>
  <H4>GGMM</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/xiangyue.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_12.jpg"></DIV>
  <H4>香约</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_13.jpg"></DIV>
  <H4>江边城外</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/shanghaifuda.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_14.jpg"></DIV>
  <H4>上海复大医院</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/weiduoliya.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_15.jpg"></DIV>
  <H4>维多利亚妇科医院</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/yichenghuayi.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_16.jpg"></DIV>
  <H4>一城画一</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/hongdou.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
src="http://wx.zongyangtech.cn/res/index/img/190.jpg"></DIV>
  <H4>红豆</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/sanmozhanfang.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_18.jpg"></DIV>
  <H4>参陌绽放</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/xuanfei.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_19.jpg"></DIV>
  <H4>轩妃大码女装</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_20.jpg"></DIV>
  <H4>潮酷男族</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/haoledi.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_21.jpg"></DIV>
  <H4>好乐迪</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/zuanshixiaoniao.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_22.jpg"></DIV>
  <H4>钻石小鸟</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/zhongguopingan.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_23.jpg"></DIV>
  <H4>中国平安</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_24.jpg"></DIV>
  <H4>麗公馆</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_25.jpg"></DIV>
  <H4>ONE SHINE</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_26.jpg"></DIV>
  <H4>上海歌城</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_27.jpg"></DIV>
  <H4>SEASON WIND</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/baisheng.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_28.jpg"></DIV>
  <H4>百盛</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/baliyiren.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_29.jpg"></DIV>
  <H4>芭俪伊人</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/shanghaipurui.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_30.jpg"></DIV>
  <H4>上海普瑞眼科医院</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_31.jpg"></DIV>
  <H4>必瘦站</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/rongwei.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_32.jpg"></DIV>
  <H4>荣威</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/feilipu.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_33.jpg"></DIV>
  <H4>PHILIPS</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/longpai369.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_34.jpg"></DIV>
  <H4>龍拍369</H4></LI>
  <LI>
  <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="http://wx.zongyangtech.cn/res/index/img/kong.jpg"></div>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_35.jpg"></DIV>
  <H4>COLOUR</H4></LI>
  <LI>
  <DIV class=circle><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/circle_bg2x.png"></DIV>
  <DIV class=logo><IMG alt="" 
  src="http://wx.zongyangtech.cn/res/index/img/case_74.jpg"></DIV>
  <H4></H4></LI></UL>
<P 
style="TEXT-ALIGN: center; COLOR: #000; FONT-SIZE: 18px; FONT-WEIGHT: bold">近百个品牌商户入驻，近万个商家使用<?php echo $_SERVER['WEB_NAME']; ?></P></DIV> -->
<!-- 
<DIV class=title_pic>最近入驻品牌</DIV>
<DIV class="page block block_case">
 
  <ul>
		<li>
   <div class="code"><img src="//img/www/case/img/hgyj_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/hgyj.jpg" alt=""></div>
  <h4>韩国艺匠</h4>
</li>
<li>
		</li><li>
   <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/lvbmw-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/lvbmw.jpg" alt=""></div>
  <h4>上海绿地宝仕</h4>
</li>
<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/paiba-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/paiba.jpg" alt=""></div>
  <h4>拍吧视觉</h4>
</li>
<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/mcq_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/mcq.jpg" alt=""></div>
  <h4>茗草泉</h4>
</li>
<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/cheny-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/cheny.jpg" alt=""></div>
  <h4>辰嫣国际微刊</h4>
</li>
<li>
 <div class="code"><img src="//img/www/case/img/jianwei-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/jianwei.jpg" alt=""></div>
  <h4>健威人性家具</h4>
</li>

<li>
 <div class="code"><img src="//img/www/case/img/shfdyy_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/shfdyy.jpg" alt=""></div>
  <h4>上海复大医院</h4>
</li>

<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/nbwew_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/nboeo.jpg" alt=""></div>
  <h4>沃尔沃宁波丰颐</h4>
</li>
<li>
 <div class="code"><img src="//img/www/case/img/bbossparty_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/bbossparty.jpg" alt=""></div>
  <h4>BBOSS至尊party</h4>
</li>
<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/dls_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/dls.jpg" alt=""></div>
  <h4>多乐士</h4>
</li>
<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/dian_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/dian.jpg" alt=""></div>
  <h4>麦兜点点</h4>
</li>


<li>
 <div class="code" style="display: none; opacity: 1; margin-top: 78px;"><img src="//img/www/case/img/anv_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/ans.jpg" alt=""></div>
  <h4>爱女神3D婚纱摄影</h4>
</li>

<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="http://112.124.28.82:88/img/www/case/img/jm_ewm.jpg"></div>
  <div class="circle"><img src="http://112.124.28.82:88/img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="http://112.124.28.82:88/img/www/case/img/jm.jpg" alt=""></div>
  <h4>JM营销</h4>
</li>
<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="http://112.124.28.82:88/img/www/case/img/myyl_ewm.jpg"></div>
  <div class="circle"><img src="http://112.124.28.82:88/img/www/case/img/circle_bg2x.png"></div>
  <div class="logo"><img src="http://112.124.28.82:88/img/www/case/img/myylnxs.jpg"></div>
  <h4>民营医疗那些事</h4>
</li>
<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/mddj_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/mddj.jpg" alt=""></div>
  <h4>美地度假</h4>
</li>

<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/wnd_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/wnd.jpg" alt=""></div>
  <h4>诺维达</h4>
</li>

<li>
 <div class="code"><img src="//img/www/case/img/hyjl_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/hyjl.jpg" alt=""></div>
  <h4>衡阳金联和通讯</h4>
</li>
<li>
 <div class="code"><img src="//img/www/case/img/jielong_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/jielong.jpg" alt=""></div>
  <h4>牛牛生态水产</h4>
</li>

<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/luomen_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/luomen.jpg" alt=""></div>
  <h4>罗门</h4>
</li>


<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/simsig_ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/smsg.jpg" alt=""></div>
  <h4>诗美诗格</h4>
</li>

<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/benc-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/benc.jpg" alt=""></div>
  <h4>奔驰</h4>
</li>

<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/bmw-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/bmw.jpg" alt=""></div>
  <h4>微房产</h4>
</li>
<li>
 <div class="code" style="display: none; opacity: 0; margin-top: 98px;"><img src="//img/www/case/img/chaoliu-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/chaoliu.jpg" alt=""></div>
  <h4>潮流百货</h4>
</li>

<li>
 <div class="code"><img src="//img/www/case/img/huizt-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/huizt.jpg" alt=""></div>
  <h4>慧之通高尔夫</h4>
</li>

<li>
 <div class="code"><img src="//img/www/case/img/suancy-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/suancy.jpg" alt=""></div>
  <h4>舌尖上的酸菜鱼</h4>
</li>

<li>
 <div class="code"><img src="//img/www/case/img/thinkpad-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/thinkpad.jpg" alt=""></div>
  <h4>Thinkpad</h4>
</li>
<li>
 <div class="code"><img src="//img/www/case/img/wuhuan-ewm.jpg"></div>
  <div class="circle"><img src="//img/www/case/img/circle_bg2x.png" alt=""></div>
  <div class="logo"><img src="//img/www/case/img/wuhuan.jpg" alt=""></div>
  <h4>衡阳市五环广场</h4>
</li>



</ul>
  
</DIV>
 -->


<div id="about" class="footer"  data-connect="nav">
		<dl>
        	<dt>关于我们</dt>
            <dl>
<!--            	<p style="font-style: 微软雅黑，宋体;line-height: 28px;color: #333;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上海XXXXX信息技术股份有限公司（聚微客，股票代码：100189）成立于2003年，注册资金：1000万，是一家专注于移动互联网业务的高新技术企业，是山东省首批5家新三板上市公司之一。
            	<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司有近260名员工， 17项知识产权，在各地开设9家分公司和办事处，并开拓遍布电商、CRM、ERP、L连锁、金融、零售、汽车、房产、医疗等多个行业的数万家企业客户。
             	随着公司业务的不断发展，为了更好地服务客户，聚微客本着真诚合作、共同发展的原则，面向全国诚征代理商。欢迎关注移动商务发展的人士加入我们，共同开创移动信息新时代！
             	<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;聚微客与中国移动、中国联通、中国网通、中国电信有着丰富的合作经验，并先后获得了由中华人民共和国信息产业部颁发的“中华人民共和国增值电信业务经营许可证”、“中华人民共和国电信与信息服务业务经营许可证”和由信产部批准的全国四网合一短消息类服。
                <br/>	-->
         		<div style=" display:inline-block; "><img src="<?php echo $IMG; ?>index/13.jpg" width="235px" height="140px" style="border-width:1px; border-style:solid; border-color:#e0dcdd;	padding: 5px;
		border-radius:15px; "></div>
				<div style=" display:inline-block; "><img src="<?php echo $IMG; ?>index/14.jpg" width="235px" height="140px" style="border-width:1px; border-style:solid; border-color:#e0dcdd;	padding: 5px;
		border-radius:15px;"></div>
				<div style=" display:inline-block; "><img src="<?php echo $IMG; ?>index/11.jpg" width="235px" height="140px" style="border-width:1px; border-style:solid; border-color:#e0dcdd;	padding: 5px;
		border-radius:15px;"></div>
				<div style=" display:inline-block; "><img src="<?php echo $IMG; ?>index/12.jpg" width="235px" height="140px" style="border-width:1px; border-style:solid; border-color:#e0dcdd;	padding: 5px;
		border-radius:15px;"></div>
         		<br/><br/>更详细的了解我们，或申请试用，请拨打咨询热线：18621784057 ，加盟合作咨询&nbsp;&nbsp; 叶经理：18621784057 。</p>
        		 <a href="/reg.html" target="_blank" class="bottom"><img src="http://wx.zongyangtech.cn/res/index/img/weimob_10.jpg" height="37" width="135"></a>
            </dl>

        </dl>
<div id="fixed_footer"></div>
</div>

<DIV style="TEXT-ALIGN: center; COLOR: #000; FONT-SIZE: 18px" 
class=title_pic>合作商家面向全国，<?php echo $_SERVER['WEB_NAME']; ?>期待您的入驻</DIV></DIV></DIV>

<!-- <div class="me_footer">
 <ul><li> 咨询热线:18621784057 &nbsp; &nbsp; QQ:86671718</li>
 <li>Copyright © 2013  All Rights Reserved 上海XXXXX信息技术有限公司版权所有 </li></ul>
 
 
 
 </div>-->
 
<div class="mfooter">
<div class="m-one">
  <div class="m-one-l" style="width: 560px;">
<li><A href="/htm/help/index-about.html">关于我们</A></li>
<li><A href="/htm/help/index-about2.html">公司资质</A></li>
</ul>

<ul><li class="li-tit">服务指南</li>
  <li><A href="/htm/help/index-ptys.html">帮助中心</A></li>
  <li><A href="/htm/help/index-joinus.html">加入我们</A></li>
  <li><A href="/agencyAdmin/login.html">代理登录</A></li>
  </ul>
  
<ul><li class="li-tit">快速入门</li>
  <li><A href="/htm/help/index-ptys.html">平台优势</A></li>
  <li><A href="/htm/help/index-newone.html">新手指引</A></li>
  <li><A href="/htm/help/index-questions.html">常见问题</A></li>
  </ul>

  <ul class="weibo"><li class="li-tit">社交分享</li>
  <li><em class="w1"></em><A class=sina href="http://e.weibo.com/dxcxcn" target=_blank>新浪微博</A></li>
  <li><em class="w2"></em><A class=tenx href="http://e.t.qq.com/dxcxcn" target=_blank>腾讯微博</A></li>
  <li><em class="w3"></em><A class=qq href="http://dxcxcn.t.sohu.com" target=_blank>搜狐微博</A></li></ul>
  
  </div>
    <div class="m-one-r" style="width: 350px;">
      <ul><li class="li-tit">聚微客微信</li><li><img src="/res/index/img/zzbwxewm.jpg" width="110" height="110"></li></ul>
       <ul><li class="li-tit">聚微客APP</li><li><img src="/res/index/img/zzbappewm.png" width="110" height="110"></li></ul>
    </div>
</div>
<div class="m-two">友情链接: <a target="_blank" href="http://wx.zongyangtech.cn/"><?php echo $_SERVER['WEB_NAME']; ?></a>
                   
</div>
<div class="m-three"><span class="sp1">服务热线：18621784057 QQ：86671718    招商加盟：18621784057  QQ：86671718 叶经理</span> 
<span class="sp2">Copyright 2005-2013 聚微客&nbsp;版权所有</span></div>
</div>
<!--
<div style="width: 0px;height: 0px;overflow: hidden;">
<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>
</div> 
 -->
 <dl id="weimob-wx" class="bg"> <dt><img src="http://wx.zongyangtech.cn/res/index/img/weixin.png"/></dt><dd style="font-size:12px">微信扫描，体验<?php echo $_SERVER['WEB_NAME']; ?></dd></dl>

<script type="text/javascript">jQuery(document).ready(function($){ $('.lightbox').lightbox();});</script>
<div id="returnTop" href="javascript:;" style="bottom: 200px;">回到顶部</div>
<script>
$(function(){
    $("#returnTop").returntop();

    
	$("#password").keyup(function(e) {
		if (e.keyCode == 13) {
			$("#login-btn").click();
			return false;
		}
	});
    var temp = ' <div id="qihoo_ie6_tips" style="CLEAR: both; FONT-SIZE: 12px; BACKGROUND: #f8efb4; WIDTH: 100%; COLOR: #503708; LINE-HEIGHT: 42px; PADDING-TOP: 7px; BORDER-BOTTOM: #eed64d 1px solid; FONT-FAMILY: SimSun; HEIGHT: 42px; TEXT-ALIGN: center"> '
+ ' <div id="qihoo_ie6_tips" style="CLEAR: both; FONT-SIZE: 12px; BACKGROUND: #f8efb4; WIDTH: 100%; COLOR: #503708; LINE-HEIGHT: 42px; PADDING-TOP: 7px; BORDER-BOTTOM: #eed64d 1px solid; FONT-FAMILY: SimSun; HEIGHT: 42px; TEXT-ALIGN: center"> '
+ '<div style="WIDTH: 990px"><em style="DISPLAY: inline-block; BACKGROUND: url(http://w.qhimg.com/images/v2/360se/2012/06/01/13385405772638.png); MARGIN: 0px 5px 2px; VERTICAL-ALIGN: middle; WIDTH: 40px; HEIGHT: 33px"></em>'
+ '您使用的浏览器内核为IE6，不兼容此系统,落后于全球76.2%用户！推荐您：安装<a id="qihoo_ie6_tips_se" style="DISPLAY: inline-block; BACKGROUND: url(http://w.qhimg.com/images/v2/360se/2012/06/01/13385405772638.png) 0px -33px; MARGIN: 0px 5px 2px; VERTICAL-ALIGN: middle; WIDTH: 194px; HEIGHT: 32px" href="http://down.360safe.com/cse/360cse_7.1.0.350.exe"></a>或直接升级到<a id="qihoo_ie6_tips_ie8" style="DISPLAY: inline-block; BACKGROUND: url(http://w.qhimg.com/images/v2/360se/2012/06/01/13385405772638.png) -152px 0px; MARGIN: 0px 5px 2px; VERTICAL-ALIGN: middle; WIDTH: 50px; HEIGHT: 32px" href="http://windows.microsoft.com/zh-CN/internet-explorer/downloads/ie-8"></a> &nbsp; </div> </div>'
    var p = /Windows NT 5.2/.test(navigator.userAgent), d = /MSIE 6/i.test(navigator.userAgent) && !/MSIE [^6]/i.test(navigator.userAgent);
    if (!p && d) { document.body.insertAdjacentHTML("afterBegin", temp); }

});
</script>
<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODA0ODQ2NV84MDEyMV80MDA2MjMyMDAzXw"></script>

<!-- 
<iframe allowtransparency="true" frameBorder="0" scrolling="no" style="border: none;position: fixed;overflow:hidden; bottom: 20px;left: 20px;width: 104px;height: 104px;" src="http://wx.zongyangtech.cn/res/mp3/index.htm"></iframe>
 -->
<div id="jquery_jplayer_111" allowtransparency="true" frameBorder="0" scrolling="no" style="border: none;position: fixed;overflow:hidden; bottom: 20px;left: 20px;width: 104px;height: 104px;zoom:80%;-webkit-transform:scale(0.6);-moz-transform:scale(0.6);-ms-transform:scale(0.6);transform:scale(0.6);">

<!-- The jPlayer div must not be hidden. Keep it at the root of the body element to avoid any such problems. -->
			<div id="jquery_jplayer_1" class="cp-jplayer"></div>

			<!-- The container for the interface can go where you want to display it. Show and hide it as you need. -->

			<div id="cp_container_1" class="cp-container">
				<div class="cp-buffer-holder"> <!-- .cp-gt50 only needed when buffer is > than 50% -->
					<div class="cp-buffer-1"></div>
					<div class="cp-buffer-2"></div>
				</div>
				<div class="cp-progress-holder"> <!-- .cp-gt50 only needed when progress is > than 50% -->
					<div class="cp-progress-1"></div>
					<div class="cp-progress-2"></div>
				</div>
				<div class="cp-circle-control"></div>
				<ul class="cp-controls">
					<li><a class="cp-play" tabindex="1">play</a></li>
					<li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li> <!-- Needs the inline style here, or jQuery.show() uses display:inline instead of display:block -->
				</ul>
			</div>


</div> 
<script type="text/javascript">
//<![CDATA[
window.yyi = 1;
$(document).ready(function(){
	//$('#jquery_jplayer_111').css('opacity',0);
	
	var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
	{
		mp3: "/res/mp3/yy/"+window.yyi+'.mp3'
	}, {
		cssSelectorAncestor: "#cp_container_1",
		swfPath: "/res/mp3/js",
		wmode: "window",
		keyEnabled: true
	});
});
//]]>
</script>
</body>
</html>
