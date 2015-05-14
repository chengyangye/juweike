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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
<div id="main">
        <div class="row-fluid">
            <div class="span12">
                <div class="box ">
                    <div class="box-title">
                        <h3><i class="icon-user"></i>账户信息</h3>
                    </div>
                    <div class="box-content">

                        <dl class="dl-horizontal">
                            <dt>
                              <!--   <img src="http://img.weimob.com/static/2d/f4/76/image/20131125/20131125093622_45962.png" style="width: 88px; height: 88px" class="img-rounded"></dt> -->
                            <dd style="margin-left: 20px;">
                                <p><strong><?php echo $user->un; ?></strong>：<b class="text-warning">套餐级别：<?php echo translate_level($user->level_id);  if ($time_cha <16 and $user->mendtime!='' and $user->next_mendtime==''){ ?> 试用版(15天)<?php } ?></b>
                                <?php if ($user->next_level_id == '' || $user->next_level_id == '1'){ ?>
                                <?php if ($user->isdirect == 1 && $user->isfromnet == 1){ ?>
                              <a href="/admin/cost/topay.html"><i class="icon-arrow-up" title="升级"></i>升级</a> 
                                <?php }else{ ?>
                                <a href="/admin/cost/topay.html" target="_blank"><i class="icon-arrow-up" title="升级"></i>升级</a>
                                <?php } ?>
                                <?php } ?>
                                
                                
                                </p>



                                <table class="table noborder">
							    <tbody><tr>
                                       
                                        <td>开户时间：<?php echo $user->rtime; ?></td>
                                        <td>到期时间：<?php if ($user->level_id == 1){ ?>永久<?php }else{  echo $user->mendtime;  } ?></td>
                                        <td>续费级别：
                                        <?php if ($user->next_level_id == ''){ ?>
                                        	暂无
                                        <?php }else{ ?>
                                        <?php echo translate_level($user->next_level_id); ?>
                                        <?php } ?>
                                        </td>
                                        <td>未来级别到期时间：<?php if ($user->next_mendtime == ''){ ?>暂无<?php }else{  echo $user->next_mendtime;  } ?></td>
                                    </tr>
                                    <tr>
                                        <td>今日关注数 : <?php echo $gz_today; ?></td>
                                        <td>今日请求数 : <?php echo $js_today; ?></td>
                                        <td>本月关注总数：<?php echo $gz_month; ?></td>
                                        <td>本月请求总数：<?php echo $js_month; ?></td>
                                    </tr>
                                     <tr>
                                        <td>文本自定义: 不限 </td>
                                        <td>图文自定义 : 不限 </td>
                                        <td>语音自定义：不限</td>
                                        <td>每月可请求数：不限</td>
                                    </tr>
                                </tbody></table>
								<p><strong>接口地址：</strong><?php echo Conf::$http_path; ?>mpapi.html?appid=<?php echo Session::get('wid'); ?>&nbsp;&nbsp;&nbsp;&nbsp;
								<strong>TOKEN：</strong><?php echo md5(Session::get('wid').Conf::$management_center_target); ?></p>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
</div>


<script type="text/javascript">


</script>
<br/><br/><br/></body>
</html>
