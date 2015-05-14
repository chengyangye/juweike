<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/reset.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/common2.css?2013-12-18-1" media="all" />
<title>实用工具</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <style>
            img{ width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;" class="portrait">
       
	<div class="header">
		<div class="logo">
			<img src="/res/wqc/20131010110532_58317.jpg" width="213" height="29" alt="" style="width:auto!important;max-width:213px;">
		</div>
		<div style="clear: both;"></div>
	</div>
	<span class="gradient_h_wbw"></span>
	<div class="top">
		<div id="roundabout_container" class="relative">
			
		</div>
		<span class="gradient_h_wbw"></span>
	</div>
		<div class="main" style="padding-top: 10px;">
			<ul class="list_ul_common">
			<?php if ($tool->chedai){ ?>
				<li>
					<a href="http://car.m.yiche.com/qichedaikuanjisuanqi/">
						<div>
							<p>车贷计算器</p>
						</div>
					</a>
				</li>
			<?php } ?>
			<?php if ($tool->baoxian){ ?>
			<li>
					<a href="http://car.m.yiche.com/qichebaoxianjisuan/">
						<div>
							<p>保险计算</p>
						</div>
					</a>
				</li>
							<?php } ?>
			<?php if ($tool->quankuan){ ?>								<li>
					<a href="http://car.m.yiche.com/gouchejisuanqi/">
						<div>
							<p>全款计算</p>
						</div>
					</a>
				</li>
								<?php } ?>
			<?php if ($tool->chexing){ ?>							<li>
					<a href="http://car.m.yiche.com/chexingduibi/?carIDs=102501">
						<div>
							<p>车型比较</p>
						</div>
					</a>
				</li>
								<?php } ?>
			<?php if ($tool->weizhang){ ?>							<li>
					<a href="http://cha.weiche.me/uc">
						<div>
							<p>违章查询</p>
						</div>
					</a>
				</li>
				<?php } ?>
											</ul> 
		</div>
		<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
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
		<footer class="nav_footer">
				<ul class="box">
					<li><a href="javascript:history.go(-1);" >返回</a></li>
					<li><a href="javascript:history.go(1);" >前进</a></li>
					<li><a href="/weiweb/<?php echo $_GET['wid']; ?>/">首页</a></li>
					<li><a href="javascript:location.reload();" >刷新</a></li>
				</ul>
		</footer>
	
</body>
</html>