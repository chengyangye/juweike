<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>会员服务</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
    <div class="act_top" id="actTop">
        <div class="act_top_show">
            <img  src="<?php echo $set->apartpic; ?>" width="720" height="130" id="bannerPic">
        </div>
    </div>
    <?php $__i=0; foreach ((array)$res as $k=>$v) { $__i++; ?>
    <div id="roomDetails">
        <div class="box box_up box_up3" id="box0">
            <h3>
                <?php echo $k; ?>
            </h3>
            <div class="box_type" style=" height:auto;">
                <ul class="house_type">
                <?php $__i=0; foreach ((array)$v as $kk=>$vv) { $__i++; ?>
                    <li id="boxLi27">
                        <a href="javascript:void(0);" onclick="showdetail(this);">
                            <strong>
                                <?php echo $vv->name; ?>
                            </strong>
                            <span>
                                <?php echo $vv->name; ?>
                            </span>
                            <em>
                                <?php echo $vv->fang; ?>室<?php echo $vv->ting; ?>厅&nbsp;&nbsp;&nbsp;<?php echo $vv->mianji; ?>
                            </em>
                        </a>
                        <div class="house_photo" style="display:none;">
                            <a href="huxingpic-<?php echo $vv->id; ?>.html" class="ico_type">食品图</a>
                            <?php if (hasqj($vv)){ ?>
                            <a href="quanjingstart-<?php echo $vv->id; ?>.html" class="ico_360">全景图</a>
                            <?php } ?>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
    <p>
        &nbsp;
    </p>
    <!-- end -->
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
	if($(o).next('div').is('.house_arrow')){
		$(o).next('div').removeClass('house_arrow').hide();
		$(o).parent().removeClass('current');
	}else{
		$(o).next('div').addClass('house_arrow').show();
		$(o).parent().addClass('current');
	}
}

</script>
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
