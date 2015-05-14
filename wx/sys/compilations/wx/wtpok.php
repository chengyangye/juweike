<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>投票结束</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/wtp/style/vote.css" />
</head>
<body>
<div class="wrapper" style="margin-top:-8px;">
	<img class="bg" src="/res/wtp/images/bg.jpg">
	<div class="top fn-clear">
		<div class="count-cont">
			<h3>参与人数</h3>
			<div class="count"><?php echo $cyrs; ?></div>
		</div>
		<div class="title-cont">
			<p class="title"><?php echo $wtp->name; ?></p>
			<p class="timeout"><img class="clock" src="/res/wtp/images/clock.png"><span class="text">距离投票结束还有<?php echo $end_time; ?></span></p>
		</div>
	</div>
	<div class="cover">
		<img class="line" src="/res/wtp/images/ctline.jpg">
		<img class="cimg" src="<?php echo $wtp->pic; ?>">
		<img class="line" src="/res/wtp/images/cbline.jpg">
	</div>
	<div class="summary"><?php echo $wtp->ms; ?></div>
	<div class="tip-cont">
		<img class="icon" src="/res/wtp/images/tip_icon.png">
		投票后才能看到结果 | 最多选1项
	</div>
	<div class="option-cont">
	
	<?php if (trim($wtp->option1)!=''){ ?>
	        <?php if (trim($wtp->headpic1)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic1; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option1; ?></div>
			
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl1; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans1; ?>(<?php echo $bl1; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	

	<?php if (trim($wtp->option2)!=''){ ?>
			<?php if (trim($wtp->headpic2)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic2; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option2; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl2; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans2; ?>(<?php echo $bl2; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option3)!=''){ ?>
			<?php if (trim($wtp->headpic3)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic3; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option3; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl3; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans3; ?>(<?php echo $bl3; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	
	<?php if (trim($wtp->option4)!=''){ ?>
			<?php if (trim($wtp->headpic4)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic4; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option4; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl2; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans4; ?>(<?php echo $bl4; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option5)!=''){ ?>
	    <?php if (trim($wtp->headpic5)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic5; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option5; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl5; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans5; ?>(<?php echo $bl5; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option6)!=''){ ?>
		<?php if (trim($wtp->headpic6)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic6; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option6; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl6; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans6; ?>(<?php echo $bl6; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option7)!=''){ ?>
			<?php if (trim($wtp->headpic7)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic7; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option7; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl7; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans7; ?>(<?php echo $bl7; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option8)!=''){ ?>
		<?php if (trim($wtp->headpic8)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic8; ?>"/>
		<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option8; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl8; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans8; ?>(<?php echo $bl8; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>

<?php if (trim($wtp->option9)!=''){ ?>
		<?php if (trim($wtp->headpic9)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic9; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option9; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl9; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans9; ?>(<?php echo $bl9; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option10)!=''){ ?>
		<?php if (trim($wtp->headpic10)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic10; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option10; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl10; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans10; ?>(<?php echo $bl10; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option11)!=''){ ?>
		<?php if (trim($wtp->headpic11)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic11; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option11; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl11; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans11; ?>(<?php echo $bl11; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option12)!=''){ ?>
		<?php if (trim($wtp->headpic12)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic12; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option12; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl12; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans12; ?>(<?php echo $bl12; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option13)!=''){ ?>
		<?php if (trim($wtp->headpic13)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic13; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option13; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl13; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans13; ?>(<?php echo $bl13; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option14)!=''){ ?>
          	<?php if (trim($wtp->headpic14)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic14; ?>"/>
			<?php } ?>($wtp->option14)!=''}
		
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option14; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl14; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans14; ?>(<?php echo $bl14; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option15)!=''){ ?>
		<?php if (trim($wtp->headpic15)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic15; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option15; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl15; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans15; ?>(<?php echo $bl15; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option16)!=''){ ?>
		<?php if (trim($wtp->headpic16)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic16; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option16; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl16; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans16; ?>(<?php echo $bl16; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option17)!=''){ ?>
		<?php if (trim($wtp->headpic17)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic17; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option17; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl17; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans17; ?>(<?php echo $bl17; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option18)!=''){ ?>
		<?php if (trim($wtp->headpic18)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic18; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option18; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl18; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans18; ?>(<?php echo $bl18; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option19)!=''){ ?>
		<?php if (trim($wtp->headpic19)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic19; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option19; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl19; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans19; ?>(<?php echo $bl19; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
<?php if (trim($wtp->option20)!=''){ ?>
		<?php if (trim($wtp->headpic20)!= ''){ ?>
			<img  width="200" height="160" src="<?php echo $wtp->headpic20; ?>"/>
			<?php } ?>
		<div class="option fn-clear option-statis" data-value="0">
			<div><?php echo $wtp->option20; ?></div>
			<div class="progress"><div data-per="56.52" class="bar bar0" style="width:<?php echo $bl20; ?>%;"></div></div><span class="per" style="left: 102.78px;"><?php echo $ans20; ?>(<?php echo $bl20; ?>%)</span>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	</div>
 	<p class="page-url">
		<a href="/" target="_blank" class="page-url-link"></a>
	</p>
</div>
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
