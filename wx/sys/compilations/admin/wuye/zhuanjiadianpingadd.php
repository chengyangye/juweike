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
								<h3><i class="icon-cog"></i>添加点评</h3>
							</div>
						</div>
						<div class="box-content">
							<form action="" method="post" class="form-horizontal form-validate"><?php echo tk();  echo $m->hidden('id'); ?>
								<div class="control-group">
									<label for="title" class="control-label">标题：</label>
									<div class="controls">
									<?php echo $m->text('title','class="input-large" required="required" data-rule-maxlength="20"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">尽量简单，不要超过20字</span>
									</div>
								</div>
								<div class="control-group">
									<label for="sort" class="control-label">显示顺序：</label>
									<div class="controls">
									<?php echo $m->text('sort','class="input-mini" required="required" data-rule-number="true"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">数值越大越靠前</span>
									</div>
								</div>
								<div class="control-group">
									<label for="name" class="control-label">专家姓名：</label>
									<div class="controls">
									<?php echo $m->text('expert_name','class="input-large" required="required"'); ?>
										<span class="maroon">*</span>
									</div>
								</div>
								<div class="control-group">
									<label for="position" class="control-label">专家职位：</label>
									<div class="controls">
									<?php echo $m->text('zhiwei','class="input-large" required="required"'); ?>
										<span class="maroon">*</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">专家照片：</label>
									<div class="controls">
										<img class="thumb_img" src="<?php echo $m->pic; ?>" id="pic" style="max-height:100px;" />
										<?php echo $m->hidden('pic'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic','micro_wuye_expert_commentpic');">选择图片</button>
											<span class="help-inline">建议尺寸：宽400像素，高400像素</span>
										</span>
									</div>
									
								</div>
								<div class="control-group">
									<label for="description" class="control-label">专家介绍：</label>
									<div class="controls">
									<?php echo $m->textarea('jianjie','class="input-large" style="height:80px;width:380px;"'); ?>
										<span class="maroon">*</span>
										<span class="help-block">最多可150字</span>
									</div>
								</div>
								<div class="control-group">
									<label for="comment" class="control-label">点评内容：</label>
									<div class="controls">
									<?php echo $m->textarea('content','class="input-large" style="height:80px;width:380px;"'); ?>
										
										<span class="maroon">*</span>
										<span class="help-block">最多可5k字</span>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" id="bsubmit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
									<button type="button" class="btn" onclick="window.history.go(-1);">取消</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br/><br/><br/></body>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
	<script>
		window.document.onkeydown = function(e) {
			if ('' == document.activeElement.id) {
				var e=e || event;
　 				var currKey=e.keyCode || e.which || e.charCode;
				if (8 == currKey) {
					return false;
				}
			}
		};
	</script>
</html>