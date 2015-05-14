<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/reset.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/common2.css?2013-12-18-1" media="all" />
<title>车主关怀</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
    <body class="portrait">
	<div class="top">
		<div class="stage_container relative">
			<div class="ofh relative">
					
					<ul class="">
						<li>
<!--							<img alt="" src="http://stc.weimob.com/img/default/car_series.jpg" style="width:100%;max-height:480px;"/>   -->
						</li>
					</ul>
										<ol style="position:absolute;line-height:25px;bottom:0;z-index:10;width:100%;background:rgba(0,0,0,0.2);padding:5px 10px;color:#fff;">
						<p>车牌号：<?php echo $m->cpai; ?></p>
						<p>车系车型：<?php echo $pp->name;  echo $cx->name; ?> <?php echo $c->name; ?></p>
					</ol>
									</div>
			</div>
		</div>
	</div>
		<div class="main" style="padding-top: 10px;">
			<ul class="car_detail">

								<div style="margin:5px;border: 1px solid #ccc;line-height:35px;text-indent:10px;border-radius:5px;background: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#eee));-webkit-box-shadow: 0 1px 1px #fff;">
					<a href="mycheliang.html" style="color:#666;display:block;text-align:center;">修改您的爱车信息</a>
				</div>
				<div>
					<ul class="list3">
						<li>
							<div>
								<p>下次保养</p>
								<p><img src="/res/carrepare.png" /></p>
								<p>87天</p>
							</div>
						</li>
						<li>
							<div>
								<p>下次保险</p>
								<p><img src="/res/carcare.png" /></p>
								<p>362天</p>
							</div>
						</li>
						<li>
							<div>
								<p>下次年检</p>
								<p><img src="/res/carcheck.png" /></p>
								<p>338天</p>
							</div>
						</li>
					</ul>
				</div>
								<li class="box group_btn">
					<div><a href="yyby.html#mp.weixin.qq.com" class="gray">预约保养</a></div>
					<div><a href="xiaoshou.html#mp.weixin.qq.com" class="gray">联系销售</a></div>
				</li>
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
					<li><a href="/weiweb/<?php echo $wid; ?>/" >首页</a></li>
					<li><a href="javascript:location.reload();" >刷新</a></li>
				</ul>
		</footer>
	</body>

</html>
