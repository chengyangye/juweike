<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="微信">

<!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->

<title><?php echo $m->name; ?></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/wz/style/list.css" />
<style type="text/css">

</style>
<script type="text/javascript" src="/res/swipe.js"></script>
<script type="text/javascript">
$(function(){
	$('table').attr("cellpadding","0").attr("cellspacing","0");
	$('[fixed="fixed"]').css('position','fixed');
	resize();
	$(window).resize(function(){
		resize();
	});
	$('.add_qq_more').each(function(){
		var tourl = $.trim($(this).attr('toto'));
		if(tourl ==''){
			tourl = 'javascript:;'
		}
		if(tourl.indexOf(':')==-1){
			tourl = tourl+'.html';
		}
		if(tourl !=''){
			if(tourl.indexOf('tel')!==0){
				if(tourl.indexOf('?')>0){
					tourl = tourl + '&wxid=<?php echo Session::get('wxid'); ?>#mp.weixin.qq.com';
				}else{
					tourl = tourl + '#mp.weixin.qq.com';
				}
				
			}
			if($(this).is('a')){
				$(this).attr('href',tourl);
			}else if($(this).find('a').size()>0){
				$(this).find('a').each(function(){
					if($.trim($(this).attr('href')).indexOf('http')==-1){
						$(this).attr('href',tourl);
					}
				});
			}else{
				$(this).wrap('<a href="'+tourl+'"></a>');
			}			
		}
	});
	if($('.mainpicarea').is('div')){
		var tplth = $('.mainpicarea').find('td').length;
		$('#ppoool').append('<li class="on" style="margin-left:5px;"></li>');
		for(var i=1;i<tplth;i++){
			$('#ppoool').append('<li style="margin-left:5px;"></li>');
		}
		$('.mainpicarea').qswipe({ stime:3600});
		$('.mainpicarea').on('dragok',function(e,msg){
			if((msg+'').indexOf('.')>0){
				msg = 0;
			}
			$('#ppoool').find('li').removeClass('on');
			$('#ppoool').find('li').eq(msg).addClass('on');
		});
		
	}
	

});
function resize(){
	var ww = $(window).width();
	$('.picshowtop,.mainpicshow').css('width',ww+'px');
	$('#tpdhtr').children('td').css('width',ww+'px');
	$('#tpdhtr').children('td').find('img').css('width',ww+'px');
	$('img').each(function(){
		var pw = $(this).parent().width();
		var ppw = $(this).parent().parent().width();
		if($(this).width()>ppw){
			$(this).width(ppw);
		}
	});
}
</script>
<style type="text/css">
.mainpicshow{
height: <?php echo $m->tpdhh; ?>px;
overflow: hidden;
}
.mainpicarea{
height: <?php echo $m->tpdhh; ?>px;
}
.mainpicarea table,.mainpicarea tr,.mainpicarea td{
border: none;
border-image-width:0px;
}
.mainpicarea img{
height: <?php echo $m->tpdhh; ?>px;
}
#ppoool{
    height:20px;
    position: relative;
    z-index:10;
    margin-top:0px;
    text-align:right;
    padding-right:15px;
    background-color:rgba(0,0,0,0.3);
}
#ppoool>li{
    display:inline-block;
    margin:5px 0;
    width:8px;
    height:8px;
    background-color:#757575;
    border-radius: 8px;
}
#ppoool>li.on{
    background-color:#ffffff;
}
</style>
</head>
<body>
<?php if (trim($m->bgpic)!=''){ ?>
<div style="top:0px;left:0px;width: 100%;height: 100%;position: fixed;z-index:-999;background-image: url('<?php echo $m->bgpic; ?>');background-size:100%,100%;">

</div>
<?php } ?>
<?php if (trim($m->tpdh)!=''){ ?>
<div class="picshowtop" style="position: relative;">
<?php echo str_replace('<table', '<table cellpadding="0" cellspacing="0"', $m->tpdh); ?>
<div style="position: absolute;width: 100%;height: 20px;bottom: 0px;" id="ppooind">
<ol id="ppoool">
    
</ol>

</div>
</div>
<?php } ?>
<div class="mainshowtop">
<?php echo $m->htm; ?>
</div>
<?php if (trim($m->bgpic)==''){ ?>
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
<?php } ?>
</body>
<script type="text/javascript">
</script>

</html>
