<!DOCTYPE html>
<html>
    <head>
    <title>预约试驾</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
    <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/hotel/hotels.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/reset.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/common2.css?2013-12-18-1" media="all" />
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
        <script type="text/javascript" src="<?php echo $JS; ?>mwm/swipe.js"></script>
        <style>
            img{ width:100%!important;}
        </style>
    </head>
        <body id="hotels" ondragstart="return false;" onselectstart="return false;" >
<section class="body">
	<div class="banner">
	<div id="imgs_box" class="box_swipe">
		<img alt="" src="<?php echo $h->headpic; ?>" style="width: 100%;">	
	</div>
	</div>
	<div class="cardexplain">


			<!--后台可控制是否显示-->
			<ul class="round">
				<li>
					<h2>订单说明</h2>
					<div class="text"><?php echo $h->msg; ?></div>
				</li>
				<li class="tel"><a href="tel:<?php echo $h->tel; ?>"><span><?php echo $h->tel; ?> </span></a></li>
				<li class="addr"><a href="http://api.map.baidu.com/marker?location=<?php echo $h->wd; ?>,<?php echo $h->jd; ?>&title=<?php echo $h->tit; ?>&name=<?php echo $h->addr; ?>&content=<?php echo $h->addr; ?>&output=html&src=weiba|weiweb"><span><?php echo $h->addr; ?></span></a></li>
			</ul>


		    <ul class="round">
                <li>
                    <a href="mysj.html" >
                        <span>我的预约试驾</span>
                    </a>
                </li>
            </ul>

					
			<ul class="round">
				<form action="javascript:void(0);" method="post" id="theform">
				<li class="title mb"><span class="none">请认真填写在线订单</span></li>
				<div class="pb_5 pl_10 pr_10 pt_10">
						<dl class="list_book">
							<dt><label>添加车型</label></dt>
							<dd>
								<div>
								<?php echo $m->mulselect(array('micro_car_pinpai','micro_car_chexi','micro_car_chexing'),array('ppid','xid','xingid'),'',"wid='".$wid."' order by sort desc","</div></dd><dd><div>"); ?>
								</div>
							</dd>
						</dl>
				</div>				
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
    				if($.trim($(this).val()=='')){
    					//ctj = false;
    				}
    			});
    			if(!ctj){
    				tusi('请填写完整预约项');
    				return;
    			}
    			$.ajax({
    			url:'yysjok-<?php echo $h->id; ?>.html',
    			data:$('#theform').serialize(),
    			type:'POST',
    			success:function(m){
    				if(m=='ok'){
    					$('#txt').text('提交成功');
    					$('#windowcenter').slideDown();
    					setTimeout(function(){
    						location.href="mysj.html";    						
    					},888);
    				}if(m=='rep'){
    					$('#txt').text('请勿重复提交');
    					$('#windowcenter').slideDown();
    				}
    				setTimeout(function(){
    					$('#windowcenter').slideUp();
    				},1000);
    			}
    			});
    		});
    	});
   	</script>        		
</body>        		
</html>
