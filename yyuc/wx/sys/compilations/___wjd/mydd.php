<!DOCTYPE html>
<html>
    <head>
    <title>微酒店</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
    <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/hotel/hotels.css" media="all" />
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
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <style>
            img{ width:100%!important;}
        </style>
    </head>
        <body id="hotels" ondragstart="return false;" onselectstart="return false;" >

    <section class="body">
        
        <div class="cardexplain">
            
        <!--普通用户登录时显示-->
        <!--商家房价及类型-->
        <div class="qiandaobanner"> 
            <a href="javascript:;">
                <img src="<?php echo $h->headpic; ?>" />
            </a>
        </div>
            <ul class="round">
            <?php $__i=0; foreach ((array)$ddres as $r) { $__i++; ?>
            <li class="title">
					<a href="#">
						<span><?php echo date('m月d日 H时i分',strtotime($r->ctime)); ?>订单详情<!-- <em class="no">确认</em> --></span>
					</a>
			</li>
			<li>
				<div class="text">
					<p>预约商家：<?php echo $h->tit; ?></p>
					<?php $__i=0; foreach ((array)$r->nr as $n) { $__i++; ?>
					<p><?php echo $n->name; ?>：<?php echo $n->val; ?></p>
					<?php } ?>
			    </div>
			</li>
			<?php } ?>        
            </ul>        
        </div>

        <div class="plugback">
            <a href="javascript:history.back(-1)">
                <div class="plugbg themeStyle">
                    <span class="plugback"></span>
                </div>
            </a>
        </div>
    </section>

<script type="text/javascript">

</script> 
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
</body>        		
</html>