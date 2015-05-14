<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>话题内容</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/weiba/style/topic.css" />
</head>
<body>
	<div class="wrapper">
	    <div class="topic_detail">
		   <img id="detail_gb" src="<?php echo $wb->pic; ?>" style="width:100%;">
		   <div class="con">
	           <div class="summry">话题简介：<p style="float:right;marging-right:20px;">发起人：<?php echo $fht->un; ?></p></div>
	           <div class="content">#<?php echo $wh->keywd; ?>#<?php echo $fht->con; ?></div>
	           <div class="title">#<?php echo $wh->keywd; ?>#</div>
	           <div class="time"><?php echo $fht->stime; ?></div>
           </div>
           <div class="spacing">&nbsp;</div>
           <div class="btn_bar">
               <div class="btn_con btn_1">
                    <a href="javascript:;" class="praise_btn" onclick="tozan(<?php echo $fht->id; ?>,this)" data-id="187">赞</a>
                    <p class="praise_count" data-id="187"><?php echo $fht->zan; ?></p>
               </div>
               <div class="left_slider">&nbsp;</div>
               <div class="btn_con btn_2 pub_topic"><a href="weibaadd-<?php echo $wh->id; ?>.html">参与</a></div>
               <div class="right_slider">&nbsp;</div>
               <div class="btn_con btn_3">
                    <a href="javascript:;" class="tread_btn" data-id="187" onclick="toma(<?php echo $fht->id; ?>,this)">踩 </a>
                    <p class="tread_count" data-id="187"><?php echo $fht->ma; ?></p>
               </div>
           </div>
	    </div>
		<ul id="topic_data" class="mod_item_list topic_comment_list" style="background-color: #f0f0f0;">
		<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
		<li>
                <div class="item_con">
                    <h2><?php echo $r->un; ?></h2>
                    <div class="con"><span class="topic_name">#<?php echo $wh->keywd; ?>#</span><?php echo $r->con; ?></div>                         
                    <div class="time"><?php echo $r->stime; ?>                            
                        <p style="float:right;margin-right:10px;">                                 
                            <a href="javascript:;" class="icon praise_btn" data-id="6919"  onclick="tozan(<?php echo $r->id; ?>,this)"><span>赞</span></a>
                            <span class="praise_count" data-id="6919"><?php echo $r->zan; ?></span>                                 
                            <a href="javascript:;" class="icon tread_btn" data-id="6919" onclick="toma(<?php echo $r->id; ?>,this)"><span>踩</span></a>
                            <span class="tread_count" data-id="6919"><?php echo $r->ma; ?></span>                             
                        </p>                         
                    </div>                     
                </div>                 
            </li>
		<?php } ?>
        </ul>
		<div class="city_select get_more">
			<ul class="mod_item_list city_list">
				<li><a id="get_more" href="javascript:loadmore();">查看更多</a></li>
			</ul>
		</div>
	</div>
 	<p class="page-url">
		<a href="/" target="_blank" class="page-url-link"></a>
	</p>
	<script type="text/javascript">
	function tozan(id,o){
		if(!$(o).data('haszan')){
			ajax('weibafk-zan.html',{ id:id},function(m){
				$(o).next().text(m);
				tusi('谢谢参与');
			});
			$(o).data('haszan',true);
		}else{
			tusi('已经赞过了');
		}
		
	}
	function toma(id,o){
		if(!$(o).data('hascai')){
			ajax('weibafk-ma.html',{ id:id},function(m){
				$(o).next().text(m);
				tusi('谢谢参与');
			});
			$(o).data('hascai',true);
		}else{
			tusi('已经踩过了');
		}
		
	}
	
	function loadmore(){
		if(!window.loadnum){
			window.loadnum = 10;
		}else{
			window.loadnum += 10;
		}
		$('.get_more').hide();
		ajax('weibamore-con.html',{ id:<?php echo $wh->id; ?>,num:window.loadnum},function(m){
			if(m.length <10){
				$('.get_more').remove();
			}else{
				$('.get_more').show();
			}
			for(var i=0;i<m.length;i++){
				var mm = m[i];
				$('#topic_data').append('<li><div class="item_con"><h2>'+mm.un+'</h2><div class="con"><span class="topic_name">#<?php echo $wh->keywd; ?>#</span>'+$.trim(mm.con)+'</div><div class="time">'+mm.stime+'<p style="float:right;margin-right:10px;"><a href="javascript:;" class="icon praise_btn" data-id="6919"  onclick="tozan('+mm.id+',this)"><span>赞</span></a><span class="praise_count" data-id="6919">'+mm.zan+'</span><a href="javascript:;" class="icon tread_btn" data-id="6919" onclick="toma('+mm.id+',this)"><span>踩</span></a><span class="tread_count" data-id="6919">'+mm.ma+'</span></p></div></div></li>');
			}
		});
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
