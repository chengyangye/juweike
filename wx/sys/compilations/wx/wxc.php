<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>微相册</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" type="text/css" href="/res/wxc/photo.css" media="all">
<link rel="stylesheet" type="text/css" href="/res/wxc/photoswipe.css" media="all">
<script type="text/javascript" src="/res/wxc/jquery_imagesloaded.js"></script>
<script type="text/javascript" src="/res/wxc/jquery_wookmark_min.js"></script>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<!-- Mobile Devices Support @begin -->
            
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- Mobile Devices Support @end -->
        <link rel="shortcut icon" href="http://wx.zongyangtech.cn/favicon.ico">
        <style>
            img{ width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;" id="photo">
        <style>
       <?php if ($set->fs=='2'){ ?>
       	#Gallery li{
			display:block;
			width:inherit;
			margin:5px;
		} 
       <?php } ?>
       <?php if ($set->fs=='3'){ ?>
       	#gallery{
		overflow:hidden;
	}
	#gallery li{
		display:inline-block;
		width:50%;
		-webkit-box-sizing:border-box;
		float:left;
		border-radius:0;
		background:none;
		padding:5px;
		border:0;
		box-shadow:none;
	}
	#gallery li a{
		display:block;
		background-color: #ffffff;
		border: 1px solid #ffffff;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		cursor: pointer;
		padding: 4px;
		box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.1);
		-moz-box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.1);
		-webkit-box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.1);
		height:150px;
		overflow:hidden;
		position:relative;
	}
	#gallery li a p{
		position:absolute;
		width:100%;
		bottom:0;
		background:#fff;
		line-height:30px;
		padding-right: 10px;
		-webkit-box-sizing:border-box;
	}
	#gallery li a img{
		width:100%;
		min-height:100%;
	}
       
       <?php } ?>
       
.album li p>span, .album1 li p>span, .album2 li p>span {
float: right;
color: #aaa;
position: absolute;
right: 5px;
background: #fff;
padding-left: 5px;
}
#Gallery li p {
display: inline-block;
max-width: 100%;
}
</style>

	<div class="body">
		<div class="qiandaobanner">
			<a href="javascript:;">
				<img src="<?php echo $set->headpic; ?>" alt="" style="max-height:200px;">
			</a>
		</div>
		<div id="main" role="main" <?php if ($set->fs=='3'){ ?>class="album2"<?php }else{ ?>class="album"<?php } ?> style="height: 139px;">
		      <ul <?php if ($set->fs=='3'){ ?>id="gallery"<?php }else{ ?>id="Gallery"<?php } ?> class="gallery">
			  	<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
			  	<li style="<?php if ($set->fs=='1'){ ?>position: absolute; left: 38px;<?php } ?> top: 0px; display: list-item;">
		        	<a href="wxclist-<?php echo $r->id; ?>.html">
		        		<img src="<?php echo $r->headpic; ?>">
		        		<p><?php echo $r->name; ?><span>(<?php echo $r->num; ?>张)</span></p>
		        	</a>
		        </li>
		   		<?php } ?>
		       	</ul>
		</div>
	</div>
<?php if ($set->fs=='1'){ ?>
<!--下面是瀑布流js-->
<script type="text/javascript">
    (function ($){
      $('#Gallery').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: false, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 4, // Optional, the distance between grid items
          itemWidth: 140 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#Gallery li');
        // Call the layout function.
        handler.wookmark(options);
      });
    })(jQuery);
  </script>
 <?php } ?>
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
        		<div mark="stat_code" style="width:0px; height:0px; display:none;">
					</div>
	
</body></html>
