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
							<form action="" method="post" class="form-horizontal form-validate">
								<div class="control-group">
									<label for="title" class="control-label">标题：</label>
									<div class="controls">
									<?php echo $m->text('name','class="input-large" required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">请填写4个中文印象！</span>
									</div>
								</div>
								<div class="control-group">
									<label for="sort" class="control-label">显示顺序：</label>
									<div class="controls">
									   <?php echo $m->text('sort','class="input-mini"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">数值越大越靠前</span>
									</div>
								</div>
								<div class="control-group">
									<label for="comment" class="control-label">印象数：</label>
									<div class="controls">
									  <?php echo $m->text('yinxiang_number','class="input-large" required="required"'); ?>
										<span class="maroon">*</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">是否显示：</label>
									<div class="controls">
											<?php echo $m->checkbox('isshow'); ?>
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
<script type="text/javascript">


$(function(){
	 $("#bsubmit").submit(function(){
			var cansv= true;
			$(this).find('input[type="text"],select,textarea').filter('[required="required"]').each(function(){
				if($.trim($(this).val())==''){
					cansv = false;
					$(this).css('backgroundColor','yellow');
					$(this).one('focus',function(){
						$(this).css('backgroundColor','transparent');
					});
				}
			});
			if(!cansv){
				tusi('请将信息填写完整');
			}
	    	return cansv;
	    });
	
	
	
});
</script>
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