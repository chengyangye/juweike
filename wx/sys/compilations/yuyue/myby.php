
<!DOCTYPE html>
<html>
    <head>
    <title>我的订单</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
    <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="/css/mwm/hotel/hotels.css" media="all" />
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
             img.mm{ width:100%!important;}
            
            .footermenu {
position: fixed;
bottom: 0;
left: 0;
right: 0;
z-index: 900;
-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.footermenu ul {
border-top: 1px solid #3D3D46;
position: fixed;
z-index: 900;
bottom: 0;
left: 0;
right: 0;
margin: auto;
display: block;
width: 100%;
background: rgba(255,255,255,0.7);
height: 48px;
display: -webkit-box;
display: box;
-webkit-box-orient: horizontal;
background: -webkit-gradient(linear, 0 0, 0 100%, from(#697077), to(#3F434E), color-stop(60%, #464A53));
box-shadow: 0 1px 0 #949494 inset;
}
.footermenu ul li{
width: auto!important;
height: 100%;
position: static!important;
margin: 0;
border-radius: 0!important;
-webkit-box-sizing: border-box;
box-sizing: border-box;
-webkit-box-flex: 1;
box-flex: 1;
-webkit-box-sizing: border-box;
box-shadow: none!important;
background: none;
}
.footermenu ul li a {
color: #fff;
font-size: 20px;
line-height: 20px;
text-align: center;
display: block;
text-decoration: none;
padding-top: 2px;
position:relative;
text-shadow:0 1px rgba(0, 0, 0, 0.2);
}
.footermenu ul li a.active {
    background:-webkit-gradient(linear, 0 0, 0 100%, from(#535A5F), to(#17181B), color-stop(60%, #32363A));
	border: 1px solid rgba(148, 148, 148, 0.6);
	border-bottom:0;
}
.footermenu ul li a .num {
font-size:10px;
	position:absolute;
	left: 55%;
	top:-5px;
	background-color:#eb3634;
	color:#fff;
	font-family:Verdana;
	font-weight:normal;
	line-height:10px;
	padding:2px 4px;
	-moz-box-shadow:0 0 0 2px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25);
	-webkit-box-shadow:0 0 0 2px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25);
	box-shadow:0 0 0 2px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25);
	border-radius:15px;
}
.footermenu ul li a img{
width:24px;
height:24px;
}
.footermenu ul li a p{
margin: 2px 0 0 0;
font-size: 12px;
display: block !important;
line-height: 18px;
text-align: center;
}
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
						<span><?php echo date('m月d日 H时i分',strtotime($r->ctime)); ?>订单详情 <em class="no"><?php echo $state_arr[$r->state]; ?></em></span>
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
<span class="sp2"><a href="http://wx.zongyangtech.cn/weiweb/3702/" style="color: #5e5e5e;font-size: 12px;">技术支持：<?php echo $_SERVER['WEB_NAME']; ?></a></span>
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

	
   	<br/><br/><br/>
   	<div class="footermenu">
    <ul>
    <li>
            <a href="javascript:history.go(-1);">
            <img src="http://bcs.duapp.com/baeimg/9uKCykhUSh.png">
            <p>返回</p>
            </a>
        </li>
    <li>
            <a class="active" href="yy-<?php echo Request::get(1); ?>.html?wid=<?php echo $_GET['wid']; ?>#mp.weixin.qq.com">
            <img src="http://bcs.duapp.com/baeimg/3YQLfzfunJ.png">
            <p>订单首页</p>
            </a>
        </li>
        <li>
            <a href="myby-<?php echo Request::get(1); ?>.html?wid=<?php echo $_GET['wid']; ?>#mp.weixin.qq.com">
            <span class="num"><?php echo $ddzs; ?></span>            <img src="http://bcs.duapp.com/baeimg/s22KaR0Wtc.png">
            <p>我的订单</p>
            </a>
        </li>
    </ul>
</div>	
</body>        		
</html>
