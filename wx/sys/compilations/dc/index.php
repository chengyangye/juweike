
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $m->name;?></title>
<link href="/res/dc/diancai.css" rel="stylesheet" type="text/css">
<script src="/res/dc/jquery.min.js" type="text/javascript"></script>
<script src="/res/dc/iscroll.js" type="text/javascript"></script>
<SCRIPT type=text/javascript>
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
}
document.addEventListener('DOMContentLoaded', loaded, false);
</SCRIPT>
<style>
</style>
</head>
<body class="mode_webapp">

<div class="menu_header"> 
     <div class="menu_topbar">
      <strong class="head-title">店铺介绍</strong>
      <span class="head_btn_left"><a href="javascript:history.go(-1);"><span>返回</span></a><b></b></span>
      <a class="head_btn_right" href="<?php echo Conf::$http_path.'dc/index-'.$wid.'.html?wxid='.$_GET['wxid']; ?>">
      <span><i class="menu_header_home"></i></span><b></b>
      </a>
     </div>
</div>




<div class="banner">
<div id="wrapper">
<div id="scroller">
<ul id="thelist">
               
<li><p></p><img src="<?php echo $m->headpic;?>"></li>

</ul>
</div>
</div>
<div id="nav">
<div id="prev" onClick="myScroll.scrollToPage('prev', 0,400,2);return false">&larr; prev</div>
<ul id="indicator">
            
<li>1</li>
 
</ul>
<div id="next" onClick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
</div>
<div class="clr"></div>
</div>



<div class="cardexplain">
    <div class="detailcontent"><h2>公告</h2>
<div class="content"><?php echo $m->jianjie;?></div>
    </div>

<ul class="round">
    <li class="title"><span class="none smallspan">店铺信息</span></li>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cpbiaoge">
				<?php $__i=0; foreach ((array)$ddxjson as $dd) { $__i++; ?>
						<tr>
							<!--<th><?php//echo $dd->name; ?></th>-->
							<td><?php echo $dd->name."：<em class='ok'>".$dd->holder; ?></td>
						</tr>
				<?php } ?>
        </table>
</ul>
    
    <ul class="round">
        <li class="tel"><a href="tel:<?php echo $m->tel;?>"><span><?php echo $m->tel;?></span></a></li>
<li class="addr"><a href="http://api.map.baidu.com/marker?location=<?php echo $m->wd.",".$m->jd;?>&amp;title=<?php echo $m->name;?>&amp;content=<?php echo $m->addr;?>&amp;output=html"><span><?php echo $m->addr;?></span></a></li>
        <li class="addr"><a href="<?php echo "dd-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com"><span>订单管理</span></a></li>
</ul>

<div class="detailcontent"><h2>详情介绍</h2>
        <div class="content">
           <p><?php echo $m->jiaotong;?></p><br>
        </div>
    </div>
</div>
<script>
var count = $("#thelist img").size();
$("#thelist img").css("width",document.body.clientWidth);
$("#scroller").css("width",document.body.clientWidth*count);
 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
 
  $("#thelist img").css("width",document.body.clientWidth);
  $("#scroller").css("width",document.body.clientWidth*count);
} 

</script>


<div class="footermenu">
    <ul>
        <li>
            <a class="active" href="<?php echo "index-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/xxyX63YryG.png">
            <p>关于</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "dc-".Request::get('1')."-1.html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/Lngjm86JQq.png">
            <p>点菜</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "gwc-".Request::get('1')."-1.html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <span class="num" id="cartN2">0</span>
            <img src="/res/dc/2yFKO6TwKI.png">
            <p>购物车</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "dd-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/s22KaR0Wtc.png">
            <p>订单</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "my-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/J0uZbXQWvJ.png">
            <p>我的</p>
            </a>
        </li>
    </ul>
</div>

<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>
</body>
</html>
