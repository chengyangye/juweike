<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>填写资料</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/wtp/style/vote.css" />
<script type="text/javascript">
	$(function(){
		$('.option').click(function(){
			$('.option').each(function(){
				$(this).find('img').eq(0).show();
				$(this).find('img').eq(1).hide();
				$(this).attr('sel','0');
			});
			$(this).find('img').eq(0).hide();
			$(this).find('img').eq(1).show();
			$(this).attr('sel','sel');		
		});		
	});
</script>
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
			<img width="200" height="160" src="<?php echo $wtp->headpic1; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="1" onclick="divClick('img1')">
			<img id="img1" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img11" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option1; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option2)!=''){ ?>
	 <?php if (trim($wtp->headpic2)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic2; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="2" onclick="divClick('img2')">
			<img id="img2" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img21" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option2; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option3)!=''){ ?>
	 <?php if (trim($wtp->headpic3)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic3; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="3" onclick="divClick('img3')">
			<img id="img3" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img31" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option3; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option4)!=''){ ?>
	 <?php if (trim($wtp->headpic4)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic4; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="4" onclick="divClick('img4')">
			<img id="img4" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img41" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option4; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option5)!=''){ ?>
	 <?php if (trim($wtp->headpic5)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic5; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="5" onclick="divClick('img5')">
			<img id="img5" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img51" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option5; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option6)!=''){ ?>
	 <?php if (trim($wtp->headpic6)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic6; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="6" onclick="divClick('img6')">
			<img id="img6" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img61" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option6; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option7)!=''){ ?>
	 <?php if (trim($wtp->headpic7)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic7; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="7" onclick="divClick('img7')">
			<img id="img7" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img71" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option7; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option8)!=''){ ?>
	 <?php if (trim($wtp->headpic8)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic8; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="8" onclick="divClick('img8')">
			<img id="img8" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img81" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option8; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option9)!=''){ ?>
	 <?php if (trim($wtp->headpic9)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic9; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="9" onclick="divClick('img9')">
			<img id="img9" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img91" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option9; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option10)!=''){ ?>
	 <?php if (trim($wtp->headpic10)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic10; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="10" onclick="divClick('img10')">
			<img id="img10" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img101" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option10; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option11)!=''){ ?>
	 <?php if (trim($wtp->headpic11)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic11; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="11" onclick="divClick('img11')">
			<img id="img11" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img111" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option11; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option12)!=''){ ?>
	 <?php if (trim($wtp->headpic12)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic12; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="12" onclick="divClick('img12')">
			<img id="img12" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img121" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option12; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option13)!=''){ ?>
	 <?php if (trim($wtp->headpic13)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic13; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="13" onclick="divClick('img13')">
			<img id="img13" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img131" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option13; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option14)!=''){ ?>
	 <?php if (trim($wtp->headpic14)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic14; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="14" onclick="divClick('img14')">
			<img id="img14" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img141" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option14; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option15)!=''){ ?>
	 <?php if (trim($wtp->headpic15)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic15; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="15" onclick="divClick('img15')">
			<img id="img15" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img151" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option15; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option16)!=''){ ?>
	 <?php if (trim($wtp->headpic16)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic16; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="16" onclick="divClick('img16')">
			<img id="img16" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img161" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option16; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option17)!=''){ ?>
	 <?php if (trim($wtp->headpic17)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic17; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="17" onclick="divClick('img17')">
			<img id="img17" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img171" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option17; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option18)!=''){ ?>
	 <?php if (trim($wtp->headpic18)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic18; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="18" onclick="divClick('img18')">
			<img id="img18" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img181" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option18; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option19)!=''){ ?>
	 <?php if (trim($wtp->headpic19)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic19; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="19" onclick="divClick('img19')">
			<img id="img19" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img191" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option19; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	<?php if (trim($wtp->option20)!=''){ ?>
	 <?php if (trim($wtp->headpic20)!= ''){ ?>
			<img width="200" height="160" src="<?php echo $wtp->headpic20; ?>"/>
		  <?php } ?>
	    <div class="option" data-value="20" onclick="divClick('img20')">
			<img id="img20" class="oimg" src="/res/wtp/images/checkimg.png">
			<img id="img201" class="oimg-sel" src="/res/wtp/images/checkimg_check.png">
			<div><?php echo $wtp->option20; ?></div>	
		</div>
		<img class="sep" src="/res/wtp/images/option_sep.jpg">
	<?php } ?>
	
	</div>
	<div class="vote-cont" onclick="gotonext()">
		<div style="height: 10px;"></div>
		<img class="vote-btn" id="submit" src="/res/wtp/images/vote.png">
		<div style="height: 10px;"></div>
	</div>
 	<p class="page-url">
		<a href="/" target="_blank" class="page-url-link"></a>
	</p>
</div>
<script type="text/javascript">
function gotonext(){
	var res = $('.option[sel="sel"]').attr('data-value');
	if($.trim(res)==''){
		tusi('请选择答案');
	}else{
		location.href = 'wtpok-<?php echo $yid; ?>-'+res+'.html';
	}
	
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
