<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?php echo $rescon->title; ?></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

</head><style type="text/css" id="__360se6_success_css"></style>
<body>
<div style="width: 100%;text-align: center;">
<h1><?php echo $rescon->title; ?></h1>
</div>
<hr/>
<div id="wxgjmainview" style="margin: 20px 10px 30px 10px;">
<?php echo $rescon->content; ?>
</div>
<?php if (trim($rescon->url) !=''){ ?>
<div style="margin: 20px 10px 30px 10px;">
<span><a href="<?php echo $rescon->url; ?>">查看原文</a></span>
</div>
<?php } ?>
<script type="text/javascript">
$(function(){
	$('#wxgjmainview').find('img').each(function(){
		var maxw = $(window).width()-$(this).offset().left-8;
		if($(this).width()>maxw){
			$(this).width(maxw);
		}
		//$(this).css('maxWidth',($(window).width()-$(this).offset().left-8)+'px');
	});
});

</script>
</body></html>