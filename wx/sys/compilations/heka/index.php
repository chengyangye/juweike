<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>微贺卡 手机贺卡</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="/res/xheka/style.css" rel="stylesheet" type="text/css" />
</head>

<body id="cate1">


<ul class="mainmenu"> 
<li>
<div class="menubtn">
<a href="/heka/sub/hk-1.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/bainian.jpg" /></div>
<div class="menutitle">拜年贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-2.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/chunjie.jpg" /></div>
<div class="menutitle">春节贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-3.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/lichun.jpg" /></div>
<div class="menutitle">立春贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-4.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/yuanxiao.jpg" /></div>
<div class="menutitle">元宵节贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-5.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/qingren.jpg" /></div>
<div class="menutitle">情人节贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-6.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/aiqing.jpg" /></div>
<div class="menutitle">爱情贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-7.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/shengri.jpg" /></div>
<div class="menutitle">生日贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-8.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/xinhun.jpg" /></div>
<div class="menutitle">新婚贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-9.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/youyi.jpg" /></div>
<div class="menutitle">友谊贺卡</div>
</div>
</a>
</div>
</li>
<li>
<div class="menubtn">
<a href="/heka/sub/hk-10.html">
<div class="menumesg">
<div class="menuimg"><img src="/res/xheka/yuandan.jpg" /></div>
<div class="menutitle">新年贺卡</div>
</div>
</a>
</div>
</li>
  
<li class="clr"></li>
</ul>
<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="" style="color: #5e5e5e;font-size: 12px;">技术支持：</a></span>
</div>
<div style="width: 0px;height: 0px;overflow: hidden;">
<!--<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>-->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F43da571de43e9d6228927d0883b8b8b4' type='text/javascript'%3E%3C/script%3E"));
</script>

</div>
<script>
/**
$(function(){
	if($('body').height()<$(window).height()){
		$('body').height($(window).height());
		$('#wxgjfooter').css('position','fixed').css('bottom','0px');
	}
});
**/
</script>
<div style="display:none"> </div>
<div style="display:none"></div>
<script id="txt-desc" type="txt/text">微贺卡，节日贺卡、生日贺卡...手指轻轻一点，即可生成个性贺卡，赶快来DIY送给你的好友吧！</script>
<script id="txt-title" type="txt/text">微贺卡</script>
<script>

(function(){
	var onBridgeReady = function () {
	var
	appId = '',
	imgUrl = '<?php echo Conf::$http_path; ?>/res/xheka/fx1.png',
	link = '<?php echo Conf::$http_path; ?>/heka/',	
	title = '微贺卡',
	desc = '微贺卡，节日贺卡、生日贺卡...手指轻轻一点，即可生成个性贺卡，赶快来DIY送给你的好友吧！';
	// 发送给好友;
	WeixinJSBridge.on('menu:share:appmessage', function(argv){
	WeixinJSBridge.invoke('sendAppMessage',{
	"appid" : appId,
	"img_url" : imgUrl,
	"img_width" : "640",
	"img_height" : "640",
	"link" : link,
	"desc" : desc,
	"title" : title
	}, function(res) {})
	});
	// 分享到朋友圈;
	WeixinJSBridge.on('menu:share:timeline', function(argv){
	WeixinJSBridge.invoke('shareTimeline',{
	"img_url" : imgUrl,
	"img_width" : "640",
	"img_height" : "640",
	"link" : link,
	"desc" : desc,
	"title" : title
	}, function(res) {
	});
	});
	// 分享到微博;
	var weiboContent = '';
	WeixinJSBridge.on('menu:share:weibo', function(argv){
	WeixinJSBridge.invoke('shareWeibo',{
	"content" : title + link,
	"url" : link
	}, function(res) {
	});
	});
	// 隐藏右上角的选项菜单入口;
	//WeixinJSBridge.call('hideOptionMenu');
	};
	if(document.addEventListener){
	document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
	} else if(document.attachEvent){
	document.attachEvent('WeixinJSBridgeReady' , onBridgeReady);
	document.attachEvent('onWeixinJSBridgeReady' , onBridgeReady);
	}
	})();
	</script>
<!-- 
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:50px"
     data-ad-client="ca-pub-9796508128392349"
     data-ad-slot="9900993814"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
 -->
</body>
</html>
