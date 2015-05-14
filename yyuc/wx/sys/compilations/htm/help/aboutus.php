<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>菜鸟应用-为APP而生，APP在线制作、手机APP、手机APP开发、手机客户端</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<meta name="description" content="菜鸟应用--完全免费的手机APP在线制作平台，不需任何编程基础，人人都能快速打造自己的专属手机应用，一次制作的APP应用支持iPhone、android、iPad等主流手机操作系统并自动扩展适应多分辨率。菜鸟应用还是一个自由开放的应用分享“广场”，毫无门槛，各种各样的丰富APP应用在这里汇集，免费供人欣赏交流和下载，让每个人都成为APP的制作者和发布者.">
<meta name="keywords" content="菜鸟应用,APP在线制作、手机APP、手机APP开发、手机客户端,APP软件,App制作,app软件制作,在线App制作,淘宝店铺App制作">
<link rel="icon" href="/favicon.ico?v000015" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico?v000015" type="image/x-icon">
<link rel="stylesheet" href="<?php echo $CSS; ?>htm/base.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo $CSS; ?>htm/index.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo $CSS; ?>htm/global.css" type="text/css" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo $CSS; ?>htm/help.css" />
<style type="text/css">
.drag_li img {
width: 144px;
height: 204px;
cursor: pointer;
}
.drag_li div{
	text-align: center;
}
</style>
</head>

<body>
<?php $noindh='help'; ?>
<div id="header" class="head">
   <div class="top">
   		<div class="topnav">
        	<a class="tel">咨询热线：<span>18621784057 </span> 　</a>
 </div>
        <div class="menu" id="nav" >
        	<a href="/#app">微菜单</a>
            <a href="/#menber">微官网</a>
            <a href="/#sever">微会员</a>
            <a href="/#lps">微活动</a>
            <a href="/#tivi">微商城</a>
            <a href="/#site">微推送</a>
            <a href="/#statics">微服务</a>
            <a href="/#weitj">微统计</a>
            <a href="/#caser">微案例</a>
        </div>

   </div>

</div>
<div class="m_box r3  pb30 clearfix ifconh" >
    <div class="top_bar">
      <h2>关于我们</h2>
    </div>
    <div style="width: 700px;margin: 0 auto;">
    <p class="tac"><img src="<?php echo $IMG; ?>htm/help_logo.gif" alt="菜鸟应用平台" width="300" height="147px"></p>
    
    <p class="t2 fs14">
    上海XXXXX信息技术有限公司是可以快速创作手机应用的在线平台，也是发布、下载、交流各类手机应用的分享家园。在这里，您不需要懂编程，也不需要精通界面设计，您需要的，只是发挥您的精美创意。通过菜鸟应用平台独有的三大模式和简单直观的操作方式，您的各种idea，都能快速变成您的专属APP。您还可以将作品上架发布，让大家欣赏你的杰作，吸引粉丝下载。
</p><br/>
    <p class="t2 fs14">如果你想非常快速地创造您自己网站的APP，那么欢迎体验一键模式。
    </p><br/>
    <p class="t2 fs14">如果你想寻找最合适的风格来制作某一领域的应用，不需要操心设计即可能让界面和功能丰富精美，那么去主题模式试试吧。
    </p><br/>
    <p class="t2 fs14">如果你想自己完全自由的创作，随心所欲地打造独一无二的应用，那么，自由模式将是帮您实现的平台。
    </p><br/>
    </div>
    
  </div>
<script type="text/javascript">
$(function(){
	var o = $("a[rel='<?php echo $bzpage; ?>']").get(0);
	help(o);
});
function help(o){
	var page = $(o).attr('rel');
	$('#ifcon').attr('src','/htm/help/'+page+'.html');
	$('.sidebar_nav').find('li').removeClass('curr');
	$(o).parent().addClass('curr');
}
</script>
<div class="mfooter">
<div class="m-one">
  <div class="m-one-l">
 <ul><li class="li-tit">企业服务</li>
  <li><img src="/res/index/img/iphone.png" width="13" height="20">&nbsp;<img src="/res/index/img/android.png" width="18" height="20"></li>
<li><A href="/htm/help/index-about.html">关于我们</A></li>
<li><A href="/htm/help/index-about2.html">公司资质</A></li>
</ul>

<ul><li class="li-tit">服务指南</li>
  <li><A href="/htm/help/index-contact.html">联系我们</A></li>
  <li><A href="#statics">支付方式</A></li>
  <li><A href="#statics">加入我们</A></li>
  </ul>


</div>
    <div class="m-one-r">
      <ul><li class="li-tit">APP微信</li><li><img src="/res/index/img/wxewm.jpg" width="86"></li></ul>
       <ul><li class="li-tit">APP二维码</li><li><img src="/res/index/img/wxewm.jpg" width="86" height="86"></li></ul>
       <ul><li class="li-tit">微信二维码</li><li><img src="/res/index/img/wxewm.jpg" width="86" height="86"></li></ul>
    </div>
</div>
<!--<div class="m-two">友情链接: <a href="">菜鸟应用</a></div>-->
<div class="m-three"><span class="sp1">服务热线：18621784057 客服QQ：86671718</span> 
<span class="sp2">Copyright 2005-2013 聚微客版权所有</span></div>
</div>
</body></html>