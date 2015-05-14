
<!DOCTYPE html>
<html>
    <head>
    <title>在线预约</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
        <script type="text/javascript" src="/js/mwm/swipe.js"></script>
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
	<div class="banner">
	<div id="imgs_box" class="box_swipe">
		<img class="mm" src="/res/yy_pic.jpg" style="width: 100%;">	
	</div>
	</div>
	<div class="cardexplain">


			<ul class="round">
				<li class="title mb"><span class="none">订单说明</span></li>
				
				<li class="nob">
					<?php echo $h->msg;?>				</li>
			</ul>

			<!--后台可控制是否显示-->
			<ul class="round">
				<li class="tel"><a href="tel:<?php echo $h->tel;?>"><span><?php echo $h->tel;?> </span></a></li>
				<li class="addr"><a href="http://api.map.baidu.com/marker?location=<?php echo $h->wd;?>,<?php echo $h->jd;?>&title=ff&name=f&content=f&output=html&src=weiba|weiweb"><span><?php echo $h->addr;?></span></a></li>
			</ul>
			

			<ul class="round">
                <li>
                    <a href="myby-<?php echo Request::get(1); ?>.html?wid=<?php echo $_GET['wid']; ?>" >
                        <span>我的在线预约<em class="ok"><?php echo $ddzs; ?></em></span>                        
                    </a>
                </li>
            </ul>
		  

			<ul class="round">
				<form action="javascript:void(0);" method="post" id="theform">
				<li class="title mb"><span class="none">请认真填写在线订单</span></li>
				<?php $__i=0; foreach ((array)$ddx as $dd) { $__i++; ?>
				<li class="nob">
					<table class="kuang" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody><tr>
							<th><?php echo $dd->name; ?></th>
							<td><?php echo $dd->form; ?></td>
						</tr>
					</tbody></table>
				</li>
				<?php } ?>
				</form>
			</ul>
			<div class="footReturn">
				<a id="showcard" class="submit" href="javascript:void(0);">提交订单</a>
				<div class="window" id="windowcenter">
					<div id="title" class="wtitle">提示<span class="close" id="alertclose"></span></div>
					<div class="content">
						<div id="txt"></div>
					</div>
				</div>
			</div>
		</div>
	<div class="plugback">
		<a href="javascript:history.back(-1)">
			<div class="plugbg themeStyle">
				<span class="plugback">
				</span>
			</div>
		</a>
	</div>
</section>
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
     <script>
    	$(document).ready(function(){
    		$(function(){
				new Swipe(document.getElementById('imgs_box'), {
					speed:500,
					//auto:3000,
					callback: function(index, elem){
						var lis = $('#imgs_box').children("ol").children();
						lis.removeClass("on").eq(index).addClass("on");
					}
				}); 
			});
    		
    		$('#showcard').click(function(){
    			var ctj = true;
    			$('#theform').find('select,input[type="text"]').each(function(){
    				if($.trim($(this).val())==''){    					
    					ctj = false;
    				}
    			});
    			if(!ctj){
    				tusi('请填写完整预约项');
    				return;
    			}
    			$.ajax({
    			url:'yybyok-<?php echo Request::get(1); ?>.html',
    			data:$('#theform').serialize(),
    			type:'POST',
    			success:function(m){
    				if(m=='ok'){
    					$('#txt').text('提交成功');
    					$('#windowcenter').slideDown();
    				}
    				setTimeout(function(){
    					$('#windowcenter').slideUp();
    					location.href = location.href;
    				},1000);
    			}
    			});
    		});
    	});
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
