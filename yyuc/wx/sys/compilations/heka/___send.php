<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $s->f; ?>给你送祝福！</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<meta name="Robots" contect="all" />
<meta name="viewport" content="target-densitydpi=320,width=640,user-scalable=no">	
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

<link rel="stylesheet" href="/res/xheka/show.css" />
<link rel="stylesheet" href="/res/xheka/share.css" />
<link rel="stylesheet" type="text/css" href="/res/mu/mu.css" media="all" />
<script type="text/javascript" src="/res/mu/mu.js"></script>
<style>
#con_1{ background:url(/res/xheka/1/t<?php echo $s->t; ?>.jpg) no-repeat;}
.video{ position:absolute;top:50px;left:60px;width:520px;height:390px;}
</style>
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
<audio src="/res/xheka/<?php echo $s->t; ?>.MP3" loop id="audio" autoplay="true"></audio>
</span>
</head>

<body>
<img src="/res/xheka/send.png" class="sharebtn" style="position: fixed;right:2px;top:0px;z-index:999;"/>
<div id="con">
  <div id="con_1">
  	<div id="con_v" class="zq1"><p><?php echo $s->c; ?></p><h2><?php echo $s->f; ?></h2></div>
    <div id="con_11">
    <a href="javascript:;" onclick="$('#hkbg').show();"><img src="/res/set.png"/></a><br/>
    <a href="/heka/sub/<?php echo $s->t; ?>.html"><img src="/res/xheka/button.png" width="392" height="124" /></a>
    
    </div>
</div>
<div style="position: fixed; right: 0px; top: 50px; z-index: 2;">
<img src="/res/xheka/00.gif">
</div>
<div style="position: fixed; left: 0px; bottom: 50px; z-index: 2;">
<img src="/res/xheka/00.gif">
</div>
</div>
<script id="txt-desc" type="txt/text"><?php echo $s->c; ?></script>
<script id="txt-title" type="txt/text"><?php echo $s->f; ?>给你送祝福</script>
<script>
$(function(){
	window.docurl = location.href;
	window.doctitle = document.title;
	window.docimg = "<?php echo Conf::$http_path.$s->b; ?>";
	window.docthumb = "<?php echo Conf::$http_path."res/xheka/fx".$s->t.".png"; ?>";
	window.doccon = $('#txt-desc').html()+'('+$('#txt-title').html()+')';
});

</script>
<script src="/res/xheka/card.js"></script>
<script src="/res/xheka/snow.js"></script>
<script>createSnow('/res/xheka/snow/', 20);</script>
<img src="/res/bg1.png" style="position: fixed;z-index: 998;right:0px;bottom:0px;"/>
<div id="hkbg" onclick="$(this).hide()" style="display:none;width:100%;height:100%;background-color:rgba(0,0,0,0.4);position: fixed;z-index: 999998;top:0px;left:0px;text-align:center;" >
<img src="/res/share.png" style="width:90%"/>
</div>
</body>
</html>