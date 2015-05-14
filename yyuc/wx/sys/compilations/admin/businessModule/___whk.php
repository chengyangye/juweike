<!DOCTYPE html>
<!-- saved from url=(0057)http://wx.zongyangtech.cn/admin/businessModule/whk.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<!--<base target="mainFrame">-->
<link rel="stylesheet" type="text/css" href="/css/wm/index.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/wm/bootstrap_min.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/wm/bootstrap_responsive_min.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/wm/style.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/wm/themes.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/wm/todc_bootstrap.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/wm/inside.css" media="all">
<link rel="stylesheet" type="text/css" href="/css/wm/album.css" media="all">
<title>聚微客—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico">
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
    <div id="main">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span12">
                                <h3><i class="icon-cog"></i>微贺卡设置</h3>
                            </div>
                        </div>
                        <div class="box-content">
                            <form action="" method="post" class="form-horizontal form-validate"><?php echo $m->hidden('id'); ?>								<input type="hidden" name="aid" id="aid" value="33260">
                                <div class="control-group">
                                    <label class="control-label" for="keyword">触发关键词:</label>
                                    <div class="controls">
                                    <?php echo $m->text('gjz','class="input-xlarge" required="required"'); ?>                                          <span class="maroon">*</span>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="title">标题：</label>
                                    <div class="controls">
		 							 <?php echo $m->text('name','class="input-xlarge" required="required"'); ?>                                     <span class="maroon">*</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="cover">图文消息封面</label>
									  <div class="controls">
										<img class="thumb_img" src="<?php echo $m->pic; ?>" id="pic_pic" style="max-height:100px;" />
										<?php echo $m->hidden('pic'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_pic','z01_hkpic');">选择封面</button>
											<span class="help-inline">建议尺寸：宽720像素，高400像素,图片大小不超过300K</span>
										</span>
									</div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="brief">图文消息简介</label>
                                    <div class="controls">
										<?php echo $m->textarea('ms','class="input-large" style="height:80px;width:380px;"'); ?>	
                                        <?php echo $m->hidden('lx');?>
										<span class="maroon">*</span>
                                        <span class="help-block">150文字以内</span>
                                    </div>
                                </div>
                               <div class="control-group">
                                    <label class="control-label" for="brief">默认贺卡类型</label>
                                    <div class="controls">
										<?php echo $m->select($lx,'lx'); ?>	
                                        <span class="maroon">*</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="brief">默认贺卡动画</label>
                                    <div class="controls">
										<?php echo $m->select($xg,'xg');?>
										<?php echo $m->hidden('xg');?>
                                        <span class="maroon">*</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="brief">贺卡祝福语</label>
                                    <div class="controls">
										<?php echo $m->textarea('info','class="input-large" style="height:80px;width:380px"'); ?>
                                        <span class="maroon">*</span>
                                        <span class="help-block">150文字以内</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="keyword">寄卡人:</label>
                                    <div class="controls">
                                    <?php echo $m->text('fname','class="input-xlarge"  required="required"'); ?>                                          <span class="maroon">*</span>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="brief">链接地址</label>
                                    <div class="controls">
										<?php echo $linkurl; ?>                                    </div>
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
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>