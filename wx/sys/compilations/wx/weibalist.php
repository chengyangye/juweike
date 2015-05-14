<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>话题列表</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/weiba/style/topic.css" />
</head>
<body>
	<div id="wrapper" class="wrapper main_content">
		<div>
			<div class="load_more">
				<a href="weiba-<?php echo $wbid; ?>-new.html?wid=<?php echo $wid; ?>&wxid<?php echo $wxid; ?>">发布话题</a>
			</div>
			<div class="topic_list">
				<ul id="topic_data" class="topic_list_item">
				<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
					<li>
						<a href="weiba-<?php echo $wbid; ?>-<?php echo $r->id; ?>.html?wid=<?php echo $wid; ?>&wxid=<?php echo $wxid; ?>">#<?php echo $r->keywd; ?>#
						</a>
						<span class="hot">热度：<?php echo $r->zm; ?></span>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div class="load_more">
				<a href="javascript:loadmore();">查看更多</a>
			</div>
		</div>
	</div>
 	<p class="page-url">
		<a href="/" target="_blank" class="page-url-link"></a>
	</p>
	<script type="text/javascript">
	function loadmore(){
		if(!window.loadnum){
			window.loadnum = 10;
		}else{
			window.loadnum += 10;
		}
		$('.load_more').eq(1).hide();
		ajax('weibamore-list.html',{ num:window.loadnum},function(m){
			if(m.length <10){
			}else{
				$('.load_more').eq(1).show();
			}
			for(var i=0;i<m.length;i++){
				var mm = m[i];
				$('#topic_data').append('<li><a href="weiba-<?php echo $wbid; ?>-'+mm.id+'.html?wid=<?php echo $wid; ?>&wxid=<?php echo $wxid; ?>">#'+mm.keywd+'#</a><span class="hot">热度：'+mm.zm+'</span></li>');
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
