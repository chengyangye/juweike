<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="微信">
<title>微团购</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/tg/style/buying.css" />
</head>

<body>
    <section class="Fh_head"></section>
	<div class="Fh_hbot"></div>
	<section class="F_home box-shadow marg20">
		<h1><?php echo $wtg->name; ?></h1>
		<div class="Fh_img position_re">
			<img class="img_width" src="<?php echo $wtg->pic; ?>">
				<span id="countDown" style="display: none;"></span>
		</div>
		<div class="Fh_price Fh_teshd F_zindex">
			<strong>￥<?php echo $wtg->jg; ?></strong>
			<del>￥<?php echo $wtg->scjg; ?></del>
			<span class="F_grey">已有<cite><?php echo $wtg->ctrs; ?></cite>人参与</span>
		    <div style="clear: both;margin-top:10px;">
				<small class="F_grey">剩余：<?php echo $tgsysj; ?></small>
				<small style="text-align: bottom;float:right;">快来参团</small>
			</div>
		</div>
		<!-- 商品描述 -->
		<h2 class="fhdtl_h">
			<strong>活动描述</strong>
		</h2>
		<div class="fhdtl_p">
			<p>
				<?php echo $wtg->ms; ?>
			</p>
		</div>
		<h2 class="fhdtl_h">
			<strong>特别提醒</strong>
		</h2>
		<div class="fhdtl_p">
			<?php echo nl2br($wtg->tbtx); ?>
		</div>
		<div style="margin-bottom:80px;text-align: center;margin-top:50px;">
            <p class="page-url">
                <a href="/" target="_blank" class="page-url-link"></a>
            </p>
		</div>
		<footer>
			<div class="Fh_btn2 dlt_btn">
				<i></i>
				<?php if ($sn!=''){ ?>
				<a class="fhbtn F_bB1" id="tuanBtn" href="javascript:alert('<?php echo $sn; ?>');void(0);" style="font-size: small;">您的SN码为(点击查看详情)：<?php echo $sn; ?></a>
				<?php }else{ ?>
				<a class="fhbtn F_bB1" id="tuanBtn" href="wtgbuy-<?php echo $tgid; ?>.html?wid=<?php echo $wid; ?>&wxid=<?php echo $wxid; ?>" style="font-size:large;">立即参团</a>
				<?php } ?>
				<i class="iright"></i>
			</div>
		</footer>
	</section>
	<img src="/res/tg/images/tuan_success.png" id="status" style="position: absolute; z-index: 1999; top: 10px; left: 70px; display: none;">
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
