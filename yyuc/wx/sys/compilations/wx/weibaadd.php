<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>我的话题</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/weiba/style/topic.css" />
</head>
<body>
<div class="wrapper" style="display:block;">
<form method="post"  action="weibaadd.html">
    <div class="content_con">
        <textarea id="content" class="contentTxt" name="wbht"><?php echo $htnr; ?></textarea>
    </div>
    <div class="content_con">
        昵称：<input type="text" id="un" class="" name="un" value="<?php echo $op->un; ?>"/>
    </div>
    <div class="btns">
        <input id="submitBtn" name="submitBtn" type="submit" class="btn_submit"  value="发布话题">
    </div>
</form>
</div>
</body>
</html>