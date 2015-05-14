<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>KTV简介</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/back.css" media="all" />
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
    </head>
<body onselectstart="return true;" ondragstart="return false;">
<div class="wrapper" id="container">
	<!-- start -->
	<div class="act_top" id="actTop" style="">
		<div class="act_top_show">
			<img src="<?php echo $set->headpic; ?>" width="100%" height="175" id="bannerPic">
		</div>
	</div>
	<!-- end -->
	<!-- 楼盘简介 start -->
	<div class="box box_up">
		<!-- 收起时加上样式box_up,展开时去掉 -->
		<h3>
			服务理念
		</h3>
		<div class="box_time">
			<?php echo $set->jianjie; ?>
		</div>
		<a href="javascript:void(0);" onclick="showdetail(this);" class="btn_more">
			<span>
				更多
			</span>
		</a>
	</div>
	<!-- 楼盘简介 end -->
	<!-- 地图 start -->
	<div class="box">
		<h3>
			地图
		</h3>
		<div class="box_map">
		<a href="http://api.map.baidu.com/marker?location=<?php echo $set->wd; ?>,<?php echo $set->jd; ?>&title=<?php echo $set->name; ?>&content=<?php echo $set->addr; ?>&output=html&src=weiba|weiweb">
			<div class="map_area">
				<img id="mapImg" title="<?php echo $set->addr; ?>" alt="<?php echo $set->addr; ?>"
				src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
				style="background:url(http://api.map.baidu.com/staticimage?center=<?php echo $set->jd; ?>,<?php echo $set->wd; ?>&zoom=12&markers=<?php echo $set->jd; ?>,<?php echo $set->wd; ?>&width=600&height=75&markerStyles=m,) no-repeat left top;"
				width="600" height="75">
			</div>
			<p>
				<?php echo $set->addr; ?>
			</p>
		</a>
		</div>
	</div>
	<!-- 地图 end -->
	<!-- 视频 start -->
	<div class="box" jqmoldstyle="block" style="display: none;">
		<h3>
			视频欣赏
		</h3>
		<div class="box_type" style="text-align:center;" id="videoDiv">
		</div>
		<p>
			&nbsp;
		</p>
	</div>
	<!-- 视频 end -->
	<!-- 项目简介 start -->
	<div class="box box_up" style="display:">
		<h3>
			公司简介
		</h3>
		<div class="box_info">
			<?php echo $set->xiangmu; ?>
		</div>
		<a href="javascript:void(0);" onclick="showdetail(this);"
		class="btn_more">
			<span>
				更多
			</span>
		</a>
	</div>
	<!-- 项目简介 end -->
	<!-- 交通配套 start -->
	<div class="box box_up" style="display:">
		<h3>
			服务配套
		</h3>
		<div class="box_info">
			<?php echo $set->jiaotong; ?>
		</div>
		<a href="javascript:void(0);" onclick="showdetail(this);"
		class="btn_more">
			<span>
				更多
			</span>
		</a>
	</div>
	<!-- 交通配套 end -->
</div>
<p>&nbsp;</p>

<div class="pop_tips" id="popTips" style="display:none;">
	<div class="oval"></div>
	<div class="pop_show">
		<h4 id="tipsTitle">温馨提示</h4>
		<div class="pop_info" id="tipsMsg">
			<p></p>
		</div>
		<div class="pop_btns">
			<a href="javascript:void(0);" id="tipsOK">确定</a>
			<a href="javascript:void(0);" style="display:none;" id="tipsCancel">取消</a>
		</div>
	</div>
</div>

<a href="javascript:history.go(-1);" class="back360" style="">&nbsp;</a>
<div mark="stat_code" style="width:0px; height:0px; display:none;">
</div>
<script type="text/javascript">
function showdetail(o){
	if($(o).parent().is('.box_up')){
		$(o).parent().removeClass('box_up');
		$(o).children('span').text('收起');
	}else{
		$(o).parent().addClass('box_up');
		$(o).children('span').text('更多');
	}
}
$(function(){
	var bgurl = 'http://api.map.baidu.com/staticimage?center=<?php echo $set->jd; ?>,<?php echo $set->wd; ?>&zoom=12&markers=<?php echo $set->jd; ?>,<?php echo $set->wd; ?>&width=600&height=75&markerStyles=m,';
	bgurl = bgurl.replace('width=600','width='+$('.act_top_show').width());
	$('#mapImg').css('backgroundImage','url('+bgurl+')');
});
</script>
<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
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
