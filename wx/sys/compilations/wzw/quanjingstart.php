<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>政务全景</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/reset.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/estate/view.css" media="all" />
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
        <script type="text/javascript">
        $(function(){
        	$('#full3dDiv').height($(window).height());
        });
        </script>
    </head>
<body onselectstart="return true;" ondragstart="return false;">
        <style type="text/css">
	.view_list{ overflow-y:scroll;bottom:72px;overflow:scroll;-webkit-overflow-scrolling: touch; }
	::-webkit-scrollbar { display:none;}
	.view_list,.view_change,.view_house{ z-index:301;}
	.view_select,.view_house{ opacity:0;}
	.view_full{ overflow:hidden;}
	#popFail{ z-index:25;}
	.pop_mask{ z-index:24;}
</style>

<div class="view_full" id="full3dDiv" style="width: 100%; height: 48px;">
	<img src="http://imgcache.gtimg.cn/lifestyle/app/wx_house/pic/bg_3.jpg" width="100%" height="100%" style="width: 100%;height:100%;">
</div>

<div class="view_select" style="min-height: 150px; overflow-y: scroll; padding-top: 0px; margin-top: 20px; opacity: 1.02; margin-bottom: 20px;">
    <div class="view_list" id="placeLink" style="opacity: 1.02;">
    <?php $__i=0; foreach ((array)$qres as $q) { $__i++; ?>
        <h3><?php echo $q->name; ?><em></em>
        </h3>
        <ul style="margin-left: 45px;">
            <li>
                <a href="quanjing-<?php echo $q->id; ?>.html"><?php echo $q->name; ?></a>
            </li>
        </ul>
     <?php } ?>
    </div>
</div>

<div class="view_house" style="opacity: 1.02;"><a id="currPlace" href="javascript:void(0);"><?php echo $hxmc; ?>-<?php echo $lpmc; ?></a></div>
<a href="javascript:void(0);" id="closeBtn" class="btn_show_close"><span>关闭</span></a>


<div class="pop_mask" id="popMask" style="display: none;"></div>


<a href="javascript:history.go(-1);" class="back360" style="">&nbsp;</a>        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
					</div>
	
</body>
</html>