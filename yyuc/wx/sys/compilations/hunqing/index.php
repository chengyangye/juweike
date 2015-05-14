<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $set->name; ?></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/home-38.css" media="all" />
<script type="text/javascript" src="<?php echo $JS; ?>mwm/maivl.js"></script>
<script type="text/javascript" src="<?php echo $JS; ?>mwm/swipe.js"></script>
<script type="text/javascript" src="<?php echo $JS; ?>mwm/zepto.js"></script>
<!-- Mobile Devices Support @begin -->
    <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<!-- Mobile Devices Support @end -->
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    </head>
    <body onselectstart="return true;" ondragstart="return false;">
        
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/font-awesome.css" media="all" />

<div class="body">
		<!--
	幻灯片管理
	-->
	<div style="-webkit-transform:translate3d(0,0,0);">
		<div id="banner_box" class="box_swipe">
			<ul class="mainul">
					<li>
					<img src="<?php echo $hb->pic; ?>" alt="1" style="width:100%;" />
					</li>
									<li>
												<a onclick="return false;">
																<img src="<?php echo $hb->pic1; ?>" alt="2" style="width:100%;" />
								</a>
					</li>
									<li>
												<a onclick="return false;">
																<img src="<?php echo $hb->pic2; ?>" alt="3" style="width:100%;" />
								</a>
					</li>
									<li>
												<a onclick="return false;">
																<img src="<?php echo $hb->pic3; ?>" alt="4" style="width:100%;" />
								</a>
					</li>
									<li>
												<a onclick="return false;">
																<img src="<?php echo $hb->pic4; ?>" alt="5" style="width:100%;" />
								</a>
					</li>
							</ul>
							<ol id="indtagol">
									<li class="on"></li>
									<li ></li>
									<li ></li>
									<li ></li>
									<li ></li>
							</ol>
			
		</div>
		
	</div>
		<script>
		$(function(){			
			new Swipe(document.getElementById('banner_box'), {
				speed:500,
				auto:3000,
				callback: function(index, elem){
					var lis = $('#indtagol').children();
					lis.removeClass("on").eq(index).addClass("on");
				}
			});
			
		});
		
	</script>
<br/>
		<div class="navList_boxdp">
			<div id="navList_box" class="box_swipe">
				<ul>
							<li>
							<a href="info.html" class="weimob-list-item">
							<span class="icon-home"></span>
							<div><?php echo $set->jjname; ?></div>
							</a>
							<a href="xc.html" class="weimob-list-item">
							<span class="icon-picture"></span>
							<div><?php echo $set->xcname; ?></div>
							</a>
							<a href="huxing.html" class="weimob-list-item">
							<span class="icon-building"></span>
							<div><?php echo $set->hxname; ?></div>
							</a>
							<a href="review.html" class="weimob-list-item">
							<span class="icon-check"></span>
							<div><?php echo $set->yxname; ?></div>
							</a>
							</li>
							<li>
							<a href="<?php echo $xwurl; ?>" class="weimob-list-item">
							<span class="icon-rss-sign"></span>
							<div><?php echo $set->xwname; ?></div>
							</a>
							<a href="<?php echo $yyurl; ?>" class="weimob-list-item">
							<span class="icon-edit"></span>
							<div><?php echo $set->yyname; ?></div>
							</a>
							<a href="<?php echo $hyurl; ?>" class="weimob-list-item">
							<span class="icon-credit-card"></span>
							<div><?php echo $set->hyname; ?></div>
							</a>
							<a href="tel:<?php echo $set->tel; ?>" class="weimob-list-item">
							<span class="icon-phone"></span>
							<div><?php echo $set->lxname; ?></div>
							</a>
							</li>
				</ul>
				<ol>
					<a href="javascript:navList_box.prev();">&nbsp;</a>
					<a href="javascript:navList_box.next();">&nbsp;</a>
				</ol>
			</div>
		</div>
		<script>
			$(document).ready(function(){
				window.navList_box = new Swipe(document.getElementById('navList_box'), { auto:0});
			});
		</script>
	</div>
	</body>
</html>