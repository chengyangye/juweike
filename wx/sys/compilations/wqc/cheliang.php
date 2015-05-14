<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/reset.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/common2.css?2013-12-18-1" media="all" />
<title>车辆信息</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
        <script type="text/javascript" src="<?php echo $JS; ?>mwm/swipe.js"></script>
    </head>
<body onselectstart="return true;" ondragstart="return false;" class="portrait">
	<div class="header">
		<div class="logo">
			<img src="<?php echo $pp->pic; ?>" width="213" height="29" alt="" style="width:auto!important;max-width:213px;"/>
		</div>
		<!-- <div style="clear: both;"></div>-->
	</div>
	<span class="gradient_h_wbw"></span>
	<div class="top">
		<div id="roundabout_container" class="relative">
			<a id="scrollLeft__7f8fc196" class="scrollLeft__7f8fc196 btn_ra_prev"></a>
			<a id="scrollRight__7f8fc196" class="scrollRight__7f8fc196 btn_ra_next"></a>
			<div id='roundabout__7f8fc196' class="ofh">
				<ul class="list_ul_top">
					<?php $__i=0; foreach ((array)$cxres as $r) { $__i++; ?>
					<li data-start="start" >
						<a href="chexing-<?php echo $r->id; ?>.html#mp.weixin.qq.com"><span><?php echo $r->name; ?></span></a>
					</li>
				<?php } ?>
				</ul>
			</div>
		</div>
		<?php if (count($pics)>0){ ?>
		<span class="gradient_h_wbw"></span>
			<div class="stage_container relative">
			<article id="indicator_36eea047" class="indicator" data-maxBullets="8">
			<?php $__i=0; foreach ((array)$pics as $p) { $__i++; ?>
				<span <?php if ($__i==1){ ?>class="ind_a"<?php } ?>></span>
			<?php } ?>
			</article>
			<div id="stage_36eea047" class="ofh" style="position: relative;">
					<ul class="list_ul_scroll">
					<?php $__i=0; foreach ((array)$pics as $p) { $__i++; ?>
						<li data-itemid="1" data-start="start" style="float: left;position: relative;">
							<img alt="" src="<?php echo $p->src; ?>" data-touchable="touchable"/>
						</li>
					<?php } ?>
					</ul>
				</div>
			</div>
			<?php } ?>
		</div>
			<script type="text/javascript">
				$(document).ready(function() {
					new Swipe(document.getElementById('stage_36eea047'), {
						speed:500,
						//auto:3000,
						callback: function(index, elem){
							var lis = $("#indicator_36eea047 span");
							lis.removeClass("ind_a").eq(index).addClass("ind_a");
						}
					});
				});
			</script>
			</div>
<!-------------------- 车系列表 begin ----------------------->
<!-------------------- 车型列表 begin ----------------------->

<!-------------------- 车型详情 begin ----------------------->

		<div class="main" style="padding-top: 10px;">
			<ul class="car_detail">
			<?php if ($qj->has_id()){ ?>
				<div style="margin:5px;border: 1px solid #ccc;line-height:35px;text-indent:10px;border-radius:5px;background: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#eee));-webkit-box-shadow: 0 1px 1px #fff;">
					<a href="qc360-<?php echo $qj->id; ?>-<?php echo $cxid; ?>.html" style="color:#666;display:block;">特别关注：360全景看车</a>
				</div>
			<?php } ?>
				<table>
					<tr>
						<td>指导价：</td>
						<td><?php echo $c->zdj; ?>万</td>
					</tr>
					<tr>
						<td>排量：</td>
						<td><?php echo $c->pl; ?>L</td>
					</tr>
					<tr>
						<td>年款：</td>
						<td><?php echo $c->nk; ?></td>
					</tr>
					<tr>
						<td>经销商报价：</td>
						<td><?php echo $c->bj; ?>万</td>
					</tr>
					<tr>
						<td>档位：</td>
						<td><?php echo $c->dws; ?>档</td>
					</tr>
					<tr>
						<td>变速箱：</td>
						<td><?php echo $bsx_arr[$c->bsx]; ?></td>
					</tr>
				</table>
				<li class="box group_btn">
					<div><a href="xiaoshou.html" class="gray">联系销售</a></div>
					<div><a href="yysj-<?php echo $cxid; ?>.html">预约试驾</a></div>
				</li>
			</ul>
		</div>
<!-------------------- end ----------------------->
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

		<footer class="nav_footer">
				<ul class="box">
					<li><a href="javascript:history.go(-1);" >返回</a></li>
					<li><a href="javascript:history.go(1);" >前进</a></li>
					<li><a href="/weiweb/<?php echo $wid; ?>/">首页</a></li>
					<li><a href="javascript:location.reload();" >刷新</a></li>
				</ul>
		</footer>
	</body>        		
</html>
