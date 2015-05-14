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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/album.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
    <div id="main">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span12">
                                <h3><i class="icon-cog"></i>微官网--关键字设置</h3>
                            </div>
                        </div>
                        <div class="box-content">
                            <form action="" method="post" class="form-horizontal form-validate"><?php   echo $set->hidden('id'); ?>
								<input type="hidden" name="aid" id="aid" value="33260"/>
                                <div class="control-group">
                                    <label class="control-label" for="keyword">触发关键词:</label>
                                    <div class="controls">
                                    <?php echo $set->text('gjz','class="input-xlarge" required="required"'); ?>
                                          <span class="maroon">*</span>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="title">标题：</label>
                                    <div class="controls">
		 							 <?php echo $set->text('name','class="input-xlarge" required="required"'); ?>
                                     <span class="maroon">*</span>
                                    </div>
                                </div>
                             
                                

                                <div class="control-group">
                                    <label class="control-label" for="cover">图文消息封面</label>
									  <div class="controls">
										<img class="thumb_img" src="<?php echo $set->pic; ?>" id="pic_pic" style="max-height:100px;" />
										<?php echo $set->hidden('pic'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_pic','wwz_keywordpic');">选择封面</button>
											<span class="help-inline">建议尺寸：宽720像素，高400像素,图片大小不超过300K</span>
										</span>
									</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="brief">图文消息简介</label>
                                    <div class="controls">
										<?php echo $set->textarea('ms','class="input-large" style="height:80px;width:380px;"'); ?>	
                                        <span class="maroon">*</span>
                                        <span class="help-block">150文字以内</span>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="brief">链接地址</label>
                                    <div class="controls">
									<?php echo Conf::$http_path."weiweb/".Session::get('wid')."/";//Conf::$http_path; ?>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="47">
                                <div class="form-actions">
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>