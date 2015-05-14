<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title><?php echo $_SERVER['WEB_NAME']; ?>-国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/reset.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/invalid.css" type="text/css" media="screen"/>	
<link rel="shortcut icon" href="<?php if ($_SERVER['IS_OEM']){ ?>/favicon.ico<?php }else{ ?>/favicon.ico<?php } ?>" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
    <div id="login-top">
        <img id="logo" src="<?php if ($_SERVER['IS_OEM']){  echo $IMG; ?>ht/logo2.png<?php }else{  echo $IMG; ?>ht/logo2.png<?php } ?>" alt="Simpla Admin logo"/>
    </div>
    <div id="login-content">
        <form id="login_form" method="post" name="login_form" action="" method="post">
            <div class="notification information png_bg">
                <div id="tip" align="center">
                    欢迎使用微信综合信息管理系统。
                </div>
            </div>
            <p>
                <label>用户名</label>
                <?php echo $u->text('un','class="text-input"'); ?>
            </p>
            <div class="clear" style="height:1px;"></div>
            <p>
                <label>密　码</label>
                <?php echo $u->password('pwd','class="text-input"'); ?>
            </p>
            <div class="clear" style="height:1px;"></div>
            <p>
            	<label>验证码</label>
            	<?php echo $u->vercode('img_auth',60,30,'value="" class="text-input text_auth"'); ?>
                <a class="img_auth" id="img_auth"></a>
            </p>
            <div class="clear" style="height:1px;"></div>
            <p>
				<label>&nbsp;</label>
                <input type="checkbox" name="remembermeadmin" id="remembermeadmin" value="1" style="float: left;width:20px;"/>
                <label style="width:80px;float: left;line-height: 15px;">记住登录</label>
                <input class="button" type="submit" style="width:70px;" value="登录系统"/>
            </p>
        </form>
    </div>
</div>
<script type="text/javascript">
$(function(){
	if(window.parent && window.parent != window){
		window.parent.location.href = location.href;
	}
	$('#fYYUC_vercode').trigger('focus').trigger('blur').attr('placeholder','');
});
</script>
</body></html>