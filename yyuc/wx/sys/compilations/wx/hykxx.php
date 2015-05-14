<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="微信">
<title><?php echo $tit; ?></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/tg/style/buying.css" />
<style type="text/css">

</style>
</head>

<body><form action="" method="post" id="hykform">
    <section class="Fh_head"></section>
	<div class="Fh_hbot"></div>
	<section class="F_home box-shadow marg20">
		<h1>会员信息</h1>
		<!-- 商品描述 -->
		
		<div class="fhdtl_p">
			<p>
				姓名：<?php echo $hykrecord->text('un'); ?>
			</p>
			<p>
				电话：<?php echo $hykrecord->text('tel'); ?>
			</p>
			<p class="rqxz">
				生日：<?php echo $hykrecord->mdate('sr'); ?>
			</p>
			<p>
				地址：<?php echo $hykrecord->text('dz'); ?>
			</p>
		</div>
		<div style="margin-bottom:80px;text-align: center;margin-top:50px;">
            <p class="page-url">
                <a href="/" target="_blank" class="page-url-link"></a>
            </p>
		</div>
		<div style="text-align: center;">
		<button type="submit" class="btn">保存信息</button>
		</div>
		
	</section>
	</form>
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
