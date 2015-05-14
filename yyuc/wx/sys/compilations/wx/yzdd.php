<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>一战到底</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/yzdd/style/war.css" />
</head>
<body>
<div class="wrapper">
    <img class="bg" src="/res/yzdd/images/desc_bg.png">
    <div class="desc-cont">
        <h3>活动说明：</h3>
        <p><?php echo $yzdd->ms; ?>
        </p>
		<br>
		<h3>活动规则：</h3>
		<p>
1. 活动持续<?php echo $yzdd->dtts; ?>天，每天每个用户只能参加一次答题，每次<?php echo $yzdd->mrtm; ?>道。<br/>
2. 每题积分为10分，答对加10分。答错不扣分。<br/>
3. 同样积分者，按答题速度优先的用户排名为先。<br/>
4. 积分累计到活动结束后根据排名顺序派发相应奖项。</p>
        <a href="javascript:location.href='yzddun-<?php echo $yid; ?>.html'"><img class="start" src="/res/yzdd/images/start.png"></a>
	</div>	
</div>
<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
</div>
<!--
<div style="width: 0px;height: 0px;overflow: hidden;">
<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>
</div>
 -->
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
</body>
</html>
