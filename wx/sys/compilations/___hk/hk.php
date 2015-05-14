
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>点击进入领取我的祝福噢！还可以编辑成自己的祝福贺卡呢~</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link href="/res/hk/hk.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
</head>
<body>
<div id="sharemcover" onClick="document.getElementById('sharemcover').style.display='';" style=" display:none"><img src="/res/hk/me.png"></div>
<div class="hot"><p>点击文字可直接编辑，按底部按钮发送</p></div>
<div class="cardWrap">
    
<style>
.btn_music {
display: inline-block;
width: 35px;
height: 35px;
background: url('/res/hk/play.png') no-repeat center center;
background-size: 100% auto;
position: absolute;
z-index: 100;
left: 15px;
top: 30px;
}
.btn_music.on {
    background-image: url("/res/hk/stop.png");
}

</style>
<script src="/res/hk/audio.js" type="text/javascript"></script>
 <script>
window.addEventListener("DOMContentLoaded", function(){
playbox.init("playbox");
}, false);
</script>
    
 
<span id="playbox" class="btn_music" onClick="playbox.init(this).play();">
<audio src="/res/hk/<?php echo empty($_GET['lx'])?$m->lx:$_GET['lx']; ?>.mp3" loop id="audio" autoplay="true"></audio>
</span>

    <img class="cardbg" src="/res/hk/<?php echo empty($_GET['lx'])?$m->lx:$_GET['lx']; ?>.jpg">

    <div class="messageBox">
            <div class="user">
                <div class="message"><?php echo empty($_GET['info'])?$m->info:$_GET['info']; ?></div>
                <div class="name"><?php echo empty($_GET['fname'])?$m->fname:$_GET['fname']; ?></div>
                <div class="time"><?php echo date('Y年m月d日'); ?></div>
            </div>
            <div  class="dh" id="dh" style="display:none">
            <select class="selectstyle fl" id="bjdh" onChange="doit()" name="bjdh"> 
                     <option value="1" >下落的枫叶</option>
                     <option value="2" selected="selected">飘雪</option>
                     <option value="3" >飘玫瑰</option>
                     <option value="4" >星光</option>
 
             </select>
                     <select class="selectstyle fr" id="bjid" onChange="doit()" name="bjid"   > 
                     <option value="1" >生日贺卡</option>					 
                     <option value="2" selected="selected">新年贺卡1</option>
                     <option value="3" >新年贺卡2</option>
                    </select>
                    </div>
            <div class="sendBtn-box"> <a class="sendBtn" onClick="document.getElementById('sharemcover').style.display='block';">发送贺卡</a> </div>
            <div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="<?php echo Conf::$http_path; ?>weiweb/3702/" style="color: #5e5e5e;font-size: 12px;"><?php echo empty($m->fname)?"生活一点通":$m->fname; ?></a></span>
</div>
<div style="width: 0px;height: 0px;overflow: hidden;">
<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>
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
    </div>
</div>

<script type="text/javascript">
function doit(){
 window.location = "hk.html?wid=<?php echo $m->wid; ?>&lx="+$("#bjid").val()+"&fname="+encodeURIComponent($.trim($(".name").html()))+"&xg="+$("#bjdh").val()+"&info="+encodeURIComponent($.trim($(".message").html()));
}

$(document).ready(function(){
$(".name").click(function(){
$(".dh").show();
if($(this).find(".sort_input").attr("type") == "text"){ return false;}
var name = $.trim($(this).html());
var m = $.trim($(this).text());
$(this).html("<input type=text value=\""+name+"\" class=\"sort_input\">");
$(this).find(".sort_input").focus();
$(this).find(".sort_input").bind("blur", function(){
var n = $.trim($(this).val());
if(n != m && n != ""){
//window.location = "sort.php?val="+encodeURIComponent(n);
//发送信息
$(this).parent().html(n);
}else{
$(this).parent().html(name);
}
});
});
$(".message").click(function(){
$(".dh").show();
if($(this).find(".sort_textarea").attr("name") == "textarea"){ return false;}
var message = $.trim($(this).html());
var mm = $.trim($(this).text());
$(this).html("<textarea name=\"textarea\" class=\"sort_textarea\">"+message+"</textarea>");
$(this).find(".sort_textarea").focus();
$(this).find(".sort_textarea").select() ;
$(this).find(".sort_textarea").bind("blur", function(){
 
var nn = $.trim($(this).val());
if(nn != mm && nn != ""){
//window.location = "sort.php?val="+encodeURIComponent(n);
//发送信息
$(this).parent().html(nn);
}else{
$(this).parent().html(message);
}
});
});
});

 
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
				"img_url": "<?php echo Conf::$http_path; ?>res/hk/2.jpg",
                "img_width": "640",
                "img_height": "640",
                "link": "<?php echo Conf::$http_path; ?>hk/hk.html?wid=<?php echo $m->wid; ?>&lx="+$("#bjid").val()+"&fname="+encodeURIComponent($.trim($(".name").html()))+"&xg="+$("#bjdh").val()+"&info="+encodeURIComponent($.trim($(".message").html())),
                "desc":  $(".message").html(),
                "title": "点击进入领取我的祝福噢！还可以编辑成自己的祝福贺卡呢~"
            }, function (res) {
                _report('send_msg', res.err_msg);
            })

	$.ajax({   
      type: "POST",
      url: "index.php",
      data: "act=index&pluginid=heka&utid=3",
	});   
			
        });
		
        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
				"img_url": "<?php echo Conf::$http_path; ?>res/hk/2.jpg",
                "img_width": "640",
                "img_height": "640",
                "link": "<?php echo Conf::$http_path; ?>hk/hk.html?wid=<?php echo $m->wid; ?>&lx="+$("#bjid").val()+"&fname="+encodeURIComponent($.trim($(".name").html()))+"&xg="+$("#bjdh").val()+"&info="+encodeURIComponent($.trim($(".message").html())),
                "desc":  $(".message").html(),
                "title": "点击进入领取我的祝福噢！还可以编辑成自己的祝福贺卡呢~"
            }, function (res) {
                _report('timeline', res.err_msg);
            });
			
	
			
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": $(".message").html(),
                "url":  "<?php echo Conf::$http_path; ?>hk/hk.html?wid=<?php echo $m->wid; ?>&lx="+$("#bjid").val()+"&fname="+encodeURIComponent($.trim($(".name").html()))+"&xg="+$("#bjdh").val()+"&info="+encodeURIComponent($.trim($(".message").html())),
            }, function (res) {
                _report('weibo', res.err_msg);
            });
	
        });
        }, false)
</script>

<div id="leafContainer"></div>   
</div>
<style>
 #leafContainer 
{
    position:fixed;
    z-index:2;
width:100%;
    height: 690px;
top:0;
overflow:hidden;
}
 #leafContainer > div 
{
    position: absolute;
    max-width: 100px;
    max-height: 100px;
    -webkit-animation-iteration-count: infinite, infinite;
    -webkit-animation-direction: normal, normal;
    -webkit-animation-timing-function: linear, ease-in;
}

#leafContainer > div > img {
     position: absolute;
     width: 100%;
     -webkit-animation-iteration-count: infinite;
     -webkit-animation-direction: alternate;
     -webkit-animation-timing-function: ease-in-out;
     -webkit-transform-origin: 50% -100%;
}

 @-webkit-keyframes fade
{
   
    0%   { opacity: 1; }
    95%  { opacity: 1; }
    100% { opacity: 0; }
}

 @-webkit-keyframes drop
{
       0%   { -webkit-transform: translate(0px, -50px); }
    100% { -webkit-transform: translate(0px, 650px); }
}
 @-webkit-keyframes clockwiseSpin
{
    0%   { -webkit-transform: rotate(-50deg); }
    100% { -webkit-transform: rotate(50deg); }
}
 @-webkit-keyframes counterclockwiseSpinAndFlip 
{
    
    0%   { -webkit-transform: scale(-1, 1) rotate(50deg); }
   
    100% { -webkit-transform: scale(-1, 1) rotate(-50deg); }
}
 </style>
<script src="/res/hk/bjdh<?php echo empty($_GET['xg'])?$m->xg:$_GET['xg']; ?>.js" type="text/javascript"></script>
 <script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>
</body></html>