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
        <?php $__i=0; foreach ((array)$hres as $h) { $__i++; ?>
        <div class="qiandaobanner"> 
            <a href="javascript:;">
                <img src="<?php echo $h->headpic; ?>" />
            </a>
        </div>
        <ul class="round">
                <li>
                    <a href="mydd-<?php echo $h->id; ?>.html" >
                        <span>我的订单<em class="ok"><?php echo $h->ddcount; ?></em></span>
                    </a>
                </li>
            </ul>
            <ul class="round">
            <li class="title">
                <span class="none"><?php echo $h->tit; ?></span>
            </li>
            <?php $__i=0; foreach ((array)$h->res as $r) { $__i++; ?>
			<li class="dandanb">
                <a href="yd-<?php echo $h->id; ?>-<?php echo $r->id; ?>.html#mp.weixin.qq.com" >
                    <span>
                    <table class="jiagebiao" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td><div><?php echo $r->typ; ?></div>
                            <div><p><?php echo $r->des; ?></p>
                            <p>原价：<a class="yuanjia"><?php echo $r->price1; ?></a></p>
                            <p>优惠价：<a class="youhuijia"><?php echo $r->price2; ?></a></p></div></td>
                        </tr>
                    </table>
                </span>
                </a>
            </li>
            <?php } ?>		           
            </ul>
            
            <!--后台可控制是否显示-->
            <ul class="round">
                <li class="title"><span class="none">订单说明</span></li><li style="display:none;">999</li>
                <ol>
                    <div class="text" style="padding-left:10px;"><?php echo $h->msg; ?></div>
                </ol>
            </ul>
            <!--后台可控制是否显示-->
            <ul class="round">
                <li class="addr"><a href="http://api.map.baidu.com/marker?location=<?php echo $h->wd; ?>,<?php echo $h->jd; ?>&title=<?php echo $h->tit; ?>&name=<?php echo $h->addr; ?>&content=<?php echo $h->addr; ?>&output=html&src=weiba|weiweb"><span><?php echo $h->addr; ?></span></a></li>
                <li class="tel"><a href="tel:<?php echo $h->tel; ?>"><span><?php echo $h->tel; ?> 电话预订</span></a></li>
                <li class="detail"><a href="detail-<?php echo $h->id; ?>.html#mp.weixin.qq.com"><span>查看商家详情</span></a></li>
            </ul>
		<?php } ?>
            
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
/**
	 document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {  
            "imgUrl": "http://stc.weimob.com/img/hotel_head.jpg", 
            "timeLineLink": "http://www.weimob.com/webhotel/index?hid=69&pid=3800&bid=8068",
            "sendFriendLink": "http://www.weimob.com/webhotel/index?hid=69&pid=3800&bid=8068",
            "weiboLink": "http://www.weimob.com/webhotel/index?hid=69&pid=3800&bid=8068",
            "tTitle": "最佳西方财富酒店",
            "tContent": "点击进入预订",
            "fTitle": "最佳西方财富酒店",
            "fContent": "点击进入预订",
            "wContent": "点击进入预订" 
        };
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
        **/
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