<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>具体内容</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/wdy/style/examine.css" />
<script type="text/javascript">
	$(function(){
		<?php if ($tk->type=='2'){ ?>
		$('.option').click(function(){
			if($(this).attr('sel')=='sel'){
				$(this).find('img').eq(0).show();
				$(this).find('img').eq(1).hide();
				$(this).attr('sel','0');
			}else{
				$(this).find('img').eq(0).hide();
				$(this).find('img').eq(1).show();
				$(this).attr('sel','sel');
			}			
		});		
		<?php }else{ ?>
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
		<?php } ?>
		
	});
</script>
</head>
<body style="background-color: #ffb100;">
<div class="wrapper">
	<img class="bg" src="/res/wdy/images/bg.jpg">
	<div class="question" style="overflow:hidden;">
		<div class="title"><?php echo $tk->question; ?></div>
		<?php if ($tk->type=='2'){ ?>
		<div class="tip1">注：本题可以选择多个答案！</div>
		<?php }else{ ?>
		<div class="tip1">注：本题最多能选择1个答案！</div>
		<?php } ?>
		
		<div class="options">
		<?php if (trim($tk->option1) != ''){ ?>
		<div class="option" data-value="1">
				<img id="img1" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img11" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option1; ?></div>
				</div>
			</div>
		<?php } ?>
		<?php if (trim($tk->option2) != ''){ ?>
		<div class="option" data-value="2">
				<img id="img2" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img21" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option2; ?></div>
				</div>
			</div>
		<?php } ?>
		<?php if (trim($tk->option3) != ''){ ?>
		<div class="option" data-value="3">
				<img id="img3" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img31" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option3; ?></div>
				</div>
			</div>
		<?php } ?>
		<?php if (trim($tk->option4) != ''){ ?>
			<div class="option" data-value="4">
				<img id="img4" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img41" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option4; ?></div>
				</div>
			</div>
		<?php } ?>
		<?php if (trim($tk->option5) != ''){ ?>
			<div class="option" data-value="5">
				<img id="img5" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img51" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option5; ?></div>
				</div>
			</div>
		<?php } ?>
<?php if (trim($tk->option6) != ''){ ?>
			<div class="option" data-value="6">
				<img id="img6" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img61" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option6; ?></div>
				</div>
			</div>
		<?php } ?>
<?php if (trim($tk->option7) != ''){ ?>
			<div class="option" data-value="7">
				<img id="img7" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img71" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option7; ?></div>
				</div>
			</div>
		<?php } ?>
<?php if (trim($tk->option8) != ''){ ?>
			<div class="option" data-value="8">
				<img id="img8" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img81" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option8; ?></div>
				</div>
			</div>
		<?php } ?>
<?php if (trim($tk->option9) != ''){ ?>
			<div class="option" data-value="9">
				<img id="img9" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img91" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option9; ?></div>
				</div>
			</div>
		<?php } ?>
<?php if (trim($tk->option10) != ''){ ?>
			<div class="option" data-value="10">
				<img id="img10" class="oimg" src="/res/wdy/images/option_bg.png">
				<img id="img101" class="oimg-sel" src="/res/wdy/images/option_sel_bg.png">
				<div class="text">
					<div class="otext"><?php echo $tk->option10; ?></div>
				</div>
			</div>
		<?php } ?>
			

		</div>
		<div id="submit" onclick="gotonext()">
			<img src="/res/wdy/images/next_btn.png">
			<span>下一步</span>
		</div>
	</div>
 	<p class="page-url">
		<a href="/" target="_blank" class="page-url-link"></a>
	</p>
</div>
<script type="text/javascript">
function gotonext(){
	var res = [];
	$('.option[sel="sel"]').each(function(){
		res[res.length] = $(this).attr('data-value');
	});
	if(res.length==0){
		tusi('请选择答案');
		return;
	}else{
		location.href = 'wdyans-<?php echo $yid; ?>-'+res.join('@')+'.html';
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
