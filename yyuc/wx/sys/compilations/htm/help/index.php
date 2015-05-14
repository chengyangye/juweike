<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<meta content="微管家、微信营销、微信代运营、微信托管、微网站、微商城、微营销、微信定制开发" name="Keywords">
<meta content="<?php echo $_SERVER['WEB_NAME']; ?>,国内领先的微信公众智能服务平台,管家十大微体系:微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计、微支付、微客服,企业微营销必备。" name="Description">
<link rel="icon" href="/favicon.ico?v000015" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico?v000015" type="image/x-icon">
<link rel="stylesheet" href="<?php echo $CSS; ?>htm/base.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo $CSS; ?>htm/index.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo $CSS; ?>htm/global.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="/res/index/weixin.css" media="all" />
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
<body><div id="header" class="head">
   <div class="top">
<div class="topnav" style="position: relative;">
        	<a class="tel">咨询热线：<span>18621784057</span> </a>
            
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
<?php $noindh='help'; ?>
<div class="m_box r3  pb30 clearfix ifconh">
    <div class="top_bar">
      <h2>帮助中心</h2>
    </div>
    <div class="layout210 sidebar rl3">
      <div class="sidebar_in">
        <div class="sidebar_nav">
          <ul>
           <li class="li_features curr"><a href="javascript:;" onclick="help(this)" rel="ptys"><i class="ico ico_praise"></i>平台优势</a></li>
           <li class="li_faqs"><a href="javascript:;" onclick="help(this)" rel="newone"><i class="ico ico_page"></i>新手指引</a></li>
           <li class="first li_about_apppark"><a href="javascript:;" onclick="help(this)" rel="about"><i class="ico ico_fans"></i>关于我们</a></li>
           <li class="li_faqs"><a href="javascript:;" onclick="help(this)" rel="about2"><i class="ico ico_account"></i>公司资质</a></li>
           <!-- <li class="li_faqs"><a href="javascript:;" onclick="help(this)" rel="contact"><i class="ico ico_message"></i><span class="arror"></span>联系我们</a></li> -->
           <li class="li_faqs"><a href="javascript:;" onclick="help(this)" rel="questions"><i class="ico ico_follow"></i><span class="arror"></span>常见问题</a></li>
           <li class="li_faqs"><a href="javascript:;" onclick="help(this)" rel="joinus"><i class="ico ico_push"></i><span class="arror"></span>加入我们</a></li>
           <!-- <li class="li_faqs"><a href="javascript:;" onclick="help(this)" rel="price"><i class="ico ico_appstats"></i><span class="arror"></span>资费套餐</a></li>-->
           <!-- <li class="li_faqs"><a href="javascript:;" onclick="help(this)" rel="pay"><i class="ico ico_app_manage"></i><span class="arror"></span>支付方式</a></li>-->
          </ul>
        </div>
      </div>
    </div>
<div class="layout750 content ifconh" id="helpContainer" style="height: 530px;overflow: hidden;">
<iframe src="/htm/help/about.html" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes" id="ifcon" class="ifconh" style="border: none;width:100%;height: 530px;overflow: hidden;" ></iframe>
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
$(function(){
	
});
</script>
<div class="mfooter">
<div class="m-one">
  <div class="m-one-l" style="width: 560px;">
 <ul><li class="li-tit">企业服务</li>
  <li><img src="/res/index/img/iphone.png" width="13" height="20">&nbsp;<img src="/res/index/img/android.png" width="18" height="20"></li>
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
</body></html>
