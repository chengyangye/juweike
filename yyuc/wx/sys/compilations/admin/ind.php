<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<base target="mainFrame" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<style type="text/css">
.main-nav, .icon-nav{
height: 56px;
}
.main-nav li, .icon-nav li,.dropdown{
height: 56px;
}

.icon-nav li.subtitle{
height: 16px;
}
.main-nav li a,#navigation .user .dropdown a,.icon-nav li a,.toggle-nav{
line-height: 36px;
padding: 10px;
}
#navigation .main-nav li a .caret,#navigation .icon-nav li a .caret,#navigation .user .dropdown a .caret{
margin-top: 14px;
}
</style>
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="<?php if ($_SERVER['IS_OEM']){ ?>/favicon.ico<?php }else{ ?>/faviconmy.ico<?php } ?>" />
<script type="text/javascript">
$(function(){
	if(window.parent && window.parent != window){
		window.parent.location.href = location.href;
	}
	$('#maincolor').find('span').click(function(){
		var col = 'theme-'+$(this).attr('class');
		$('body').removeAttr('class').addClass(col);
		$('#maincolor').hide();
		ajax('ind-setcolor.html',{ col:col},function(){
			$('#mainFrame').contents().find("body").removeAttr('class').addClass(col);
		});
	});
});


</script>
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
	<div id="navigation">
        <div class="container-fluid" style="position:relative;">
            <div>
                <a href="javascript:;" target="_self" id="brand"><img src="/media/images/reg/logo2.png>" style="margin-top: 6px;"/></a>
                <a href="javascript:;" target="_self" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
            </div>
            <ul class='main-nav' >
                <li class='active'>
                    <a href="ind.html" target="_self">
                        <span>管理平台</span>
                    </a>
                </li>
                <li>
                    <a href="main.html" target="_self">
                        <span><?php echo $_SERVER['WEB_NAME']; ?>功能</span>
                    </a>
                </li>
<!--                <li><a href="/htm/help2/features.html">功能介绍</a> </li> -->
<!--                <li><a href="/htm/help2/taocan.html">套餐介绍</a> </li> -->
                <li><a href="/htm/help2/shiyongzhn.html">使用指南</a></li>
                <?php if (!$_SERVER['IS_OEM']){ ?>
                <!-- <li><a href="javascript:void(0)" data-toggle="dropdown" class='dropdown-toggle' data-hover="dropdown">
                    <span>个性化服务</span>
                    <span class="caret"></span>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="/htm/help2/yunying.html">运营托管</a></li>
                        <li><a href="/htm/help2/dingzhi.html">定制开发</a></li>
                    </ul>
                </li> -->
                <?php } ?>
                <li><a href="javascript:void(0)" data-toggle="dropdown" class='dropdown-toggle' data-hover="dropdown">
                    <span>帮助中心</span>
                    <span class="caret"></span>
                </a>
                    <ul class="dropdown-menu">

                        <li style="display:none"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_SERVER['CHAT_JS']; ?>&site=qq&menu=yes" target="_blank">在线客服</a></li>
                        <li><a href="/htm/help2/aboutus.html">关于我们</a></li>
                        <li><a href="/htm/help2/help.html">常见问题</a></li>
                    </ul>
                </li>
                <li style="position: absolute;right: 350px;"><a class="shortcut-button" href="ind.html" target="_top">
		          	<img src="/media/images/ht/pencil_48.png" alt="系统首页" title="系统首页">
			    </a></li>

                <li style="position: absolute;right: 290px;"><a class="shortcut-button" href="/admin/userCenter/updatePwd.html">
			            <img src="/media/images/ht/paper_content_pencil_48.png" alt="修改密码" title="修改密码">					
			        </a>
			    </li>
			    <li style="position: absolute;right: 230px;"><a class="shortcut-button" href="javascript:void(0);" onclick="fresh_sys();">
			      <img src="/media/images/ht/clock_48.png" alt="刷新系统" title="刷新系统">
			      </a>
			    </li>
            </ul>
            <div class="user">
                <ul class="icon-nav">
                    <li class='dropdown'>
                        <a href="javascript:;" class='dropdown-toggle' data-toggle="dropdown" title="消息" style="display:none;"><i class="icon-envelope"></i><span class="label label-lightred">4</span></a>
                    </li>
                    <li class="dropdown sett" style="display:none;">
                        <a href="javascript:;" class='dropdown-toggle' data-toggle="dropdown" title="系统设置"><i class="icon-cog"></i></a>
                    </li>
                    <li class='dropdown colo'>
                        <a href="javascript:;" class='dropdown-toggle' data-toggle="dropdown" title="选择颜色"><i class="icon-tint"></i></a>
                        <ul class="dropdown-menu pull-right theme-colors" id="maincolor">
                            <li class="subtitle">请选择系统颜色
                            </li>
                            <li>
                                <span class='red'></span>
                                <span class='orange'></span>
                                <span class='green'></span>
                                <span class="brown"></span>
                                <span class="blue"></span>
                                <span class='lime'></span>
                                <span class="teal"></span>
                                <span class="purple"></span>
                                <span class="pink"></span>
                                <span class="magenta"></span>
                                <span class="grey"></span>
                                <span class="darkblue"></span>
                                <span class="lightred"></span>
                                <span class="lightgrey"></span>
                                <span class="satblue"></span>
                                <span class="satgreen"></span>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="javascript:;"  target="_self" class='dropdown-toggle' data-toggle="dropdown" style="width:127px;"><nobr><?php echo $u->un; ?> <span class="caret"></span><img class="thumb_img" src="<?php echo $u->headpic; ?>" id="pic_apartpic" style="max-width:40px" /></nobr></a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a  href="ind.html" target="_self">管理帐号</a>
                        </li>
                        <li>
                            <a href="/logout.html" target="_self">退出</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid" id="content">
        <div id="left">
			<div class="subnav">
                <div class="subnav-title">
                    <a href="javascript:void(0);" target="_self" class='toggle-subnav'><i class="icon-angle-right"></i><span><?php echo $_SERVER['WEB_NAME']; ?></span></a>
                </div>
                <ul class="subnav-menu" style="display: block">
                    <li>
                        <a href="/admin/userCenter/myAccount.html">账户信息</a>
                    </li>
                    <li>
                        <a href="/admin/userCenter/updatePwd.html">修改密码</a>
                    </li>
                    <li class="active">
                        <a href="/admin/userCenter/pubs.html">公众号管理</a>
                    </li>
                    <li>
                        <a href="/admin/main.html" target="_top"><?php echo $_SERVER['WEB_NAME']; ?>功能</a>
                    </li>
                </ul>
            </div>
            <div class="subnav bottom">
                <div class="subnav-title">
                    <a href="javascript:alert('没有权限');" class='toggle-subnav'><i class="icon-angle-right"></i><span></span></a>
                </div>
                <ul class="subnav-menu">
                </ul>
            </div>
        </div>

        <div class="right">
            <div class="main">
                <iframe frameborder="0" id="mainFrame" name="mainFrame" src="/admin/userCenter/pubs.html" style="background: url('http://wx.zongyangtech.cn/static/wxgjcn/weiqin/loading.gif') center no-repeat"></iframe>
            </div>
        </div>

    </div>
    
    
    <script type="text/javascript">
    $('[data-toggle="dropdown"]').each(function(){
    	$(this).parent().hover(function(){
    		$(this).find('ul').show();
    	},function(){
    		$(this).find('ul').hide();
    	});
    });
    $('div.subnav > .subnav-title').click(function(){    	
    	if($(this).parent().find('ul').is(':hidden')){
    		$('div.subnav').find('ul').slideUp();
    		$(this).parent().find('ul').stop().slideDown();
    	}else{
    		$('div.subnav').find('ul').slideUp();
    	}
    });
    $('div.subnav').find('ul').children('li').click(function(){
    	$('div.subnav').find('ul').children('li').removeClass('active');
    	$(this).addClass('active');
    });
    $('.toggle-nav').click(function(){
    	if($('.right').is('.reight_p')){
    		$('.right').removeClass('reight_p');	
    		$('#left').show();
    	}else{
    		$('.right').addClass('reight_p');
    		$('#left').hide();
    	}    	
    });
    $('.main-nav').children('li').click(function(){
    	$('.main-nav').find('li').removeClass('active');
    	$(this).addClass('active');
    });
    
    function fresh_sys(){
    	mainFrame.location.reload();
    	
    }
    </script>
</body>

</html>
