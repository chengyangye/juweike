<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>微信运营管理平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/reset.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/index.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/invalid.css" type="text/css" media="screen"/>
<link rel="shortcut icon" href="<?php if ($_SERVER['IS_OEM']){ ?>/favicon.ico<?php }else{ ?>/favicon.ico<?php } ?>" />
<style type="text/css">
.szda{
font-size: 18px;
font-weight: bolder;
color: red;
}
</style>
<script type="text/javascript">
$(function(){
	$('#main-nav').children('li').children('a').hover(function(){
		$(this).stop().animate({ paddingRight:'25px'},500);
	},function(){
		$(this).stop().animate({ paddingRight:'15px'},100);
	}).click(function(){		
		var ul = $(this).parent().children('ul');
		if(ul.size()==1){
			if(ul.is(':hidden')){
				$('#main-nav').children('li').children('ul').hide(300);
				ul.stop().show(300);
			}else{
				ul.stop().hide(300);
			}
		}
	});
	$('#leftFrame').height($(window).height()-120);
	$('#sidebar').height($(window).height()-95);
	$(window).resize(function(){
		$('#leftFrame').height($(window).height()-120);
		$('#sidebar').height($(window).height()-95);
	});
	$('a[target="leftFrame"]').click(function(){
		$('a[target="leftFrame"]').removeClass('szda');
		$(this).addClass('szda');
	});
	
	
	$('#main-nav').children('li').each(function(){
		if($(this).find('li').size()<1){
			$(this).hide();
		}
	});
});
function fresh_sys(){
	leftFrame.location.reload();
	
}
</script>

</head> 
<body style="overflow: hidden;">
<div class="body_header">
	<div class="header_left">
		<h1 class="header_logo"><a href="javascript:void(0)"><img id="logo" src="<?php if ($_SERVER['IS_OEM']){  echo $IMG; ?>ht/logo2.png<?php }else{  echo $IMG; ?>ht/logo2.png<?php } ?>" alt="短信通平台"></a></h1>
	</div>
	<ul class="shortcut-buttons-set">
		<li><a class="shortcut-button" href="frame.html">
			<img src="<?php echo $IMG; ?>ht/pencil_48.png" alt="系统首页" title="系统首页">
			</a></li>
		<li><a class="shortcut-button" href="/houtai/xitong/updatePwd.html" target="leftFrame">
			<img src="<?php echo $IMG; ?>ht/paper_content_pencil_48.png" alt="修改密码" title="修改密码">					
			</a></li>
		<!-- <li><a class="shortcut-button" href="" target="leftFrame">
			<img src="<?php echo $IMG; ?>ht/image_add_48.png" alt="通知信息" title="通知信息">
			</a></li> -->
		<li><a class="shortcut-button" href="javascript:void(0);" onclick="fresh_sys();">
			<img src="<?php echo $IMG; ?>ht/clock_48.png" alt="刷新系统" title="刷新系统">
			</a></li>
		<li><a class="shortcut-button" href="logout.html" rel="modal">
			<img src="<?php echo $IMG; ?>ht/comment_48.png" alt="退出系统" title="退出系统">
			</a></li>
	</ul>
	<div id="profile-links">
		欢迎<a href="/houtai/xitong/editme.html" target="leftFrame"><?php echo $mu->un; ?></a>使用本系统！
	</div>
</div>
<div id="body-wrapper">
	<div id="sidebar">
		<div id="sidebar-wrapper">
			<ul id="main-nav">
				<?php $__i=0; foreach ((array)$menu_arr as $k=>$m) { $__i++; ?>
				<li>
					<a target="leftFrame" class="nav-top-item">
						<?php echo $m['name']; ?>
					</a>
					<ul style="display: none;">
					    <?php $__i=0; foreach ((array)$m['sub'] as $kk=>$mm) { $__i++; ?>
					    <?php if (check_page($m['path'],$mm['file'])){ ?>
						<li><a href="/houtai/<?php echo $m['path']; ?>/<?php echo $mm['file']; ?>.html" target="leftFrame"><?php echo $mm['name']; ?></a></li>
						<?php } ?>
						<?php } ?>
					</ul>
				</li>
				<?php } ?>
				</ul>
		</div>
	</div>
	<div id="main-content">
		<div class="clear"></div>
		<iframe name="leftFrame" id="leftFrame" frameborder="0" src="default.html" style="VISIBILITY: inherit; WIDTH: 100%; Z-INDEX: 5;border:none"  height="453"></iframe>
	</div>
	
	
	<div id="winpop" style="height: 0px;"><div class="title">消息提示<span class="closeTip" onclick="closeTip()">X</span></div>	<div id="showContent" class="con"></div></div>

</div>
<embed src="ring.wav" type="audio/mpeg" width="0" height="0" autostart="false" id="showbg" loop="false">

</body></html>