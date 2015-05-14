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
<script src="<?php echo $JS; ?>comm.js"></script> 
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
                            <div class="span10">
                                <h3><i class="icon-edit"></i>添加车系</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>

                        <div class="box-content">


                            <form action="" method="post" class="form-horizontal form-validate"><?php echo tk();  echo $m->hidden('id'); ?>
								 <div class="control-group">
									 <label for="brand" class="control-label">品牌：</label>
									 <div class="controls">
											<?php echo $m->select($pinpai_arr,'pid'); ?>
									</div>
								</div>
                                <div class="control-group">
                                    <label for="name" class="control-label">车系名称：</label>
                                    <div class="controls">
                                    	<?php echo $m->text('name','class="input-medium" required = "required"'); ?>
                                        <span class="maroon">*</span>
										<span class="help-inline">请添加车系的完整名称，如“奔驰A级”</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="name" class="control-label">车系简称：</label>
                                    <div class="controls">
                                    	<?php echo $m->text('jc','class="input-medium" required = "required"'); ?>
                                        <span class="maroon">*</span>
										<span class="help-inline">请添加车系的简称,如“A级”；手机端显示的是车系简称</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="picture">图片</label>
                                    <div class="controls">
                                    <img class="thumb_img" id="pic" src="<?php echo $m->pic; ?>" style="max-height: 100px;">
                                    <?php echo $m->hidden('pic','class="input-large" required="required"'); ?>
                                    <span class="help-inline">
                                        <button class="btn select_img" type="button" onclick="setpic('pic','micro_car_chexipic')">选择图片</button></span>
                              
										<span class="help-inline">建议图片尺寸640*180，图片大小不超过300K</span>
                                    </div>
                               </div>
                                
                                <div class="control-group">
                                    <label for="sort" class="control-label">显示顺序：</label>
                                    <div class="controls">
                                     <?php echo $m->text('sort','class="input-mini" data-rule-required="true" data-rule-number="true"'); ?>
                                        <span class="maroon">*</span>
										<span class="help-inline">数字越大越靠前</span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="note" class="control-label">车系亮点 ：</label>
                                    <div class="controls">
                                        <?php echo $m->textarea('ld','class="input-xxlarge" style="height:80px;width:380px;" data-rule-maxlength="200"'); ?>
                                      
                                        <span class="help-inline">请用简短的文字描述该车系的亮点所在,不超过200字</span>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                    <button type="button" class="btn" onclick="window.history.go(-1)">取消</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	
</body></body>
</html>
