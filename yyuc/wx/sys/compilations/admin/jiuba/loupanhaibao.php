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
<script src="http://api.map.baidu.com/api?v=1.5&ak=1b0ace7dde0245f796844a06fb112734"></script>
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
	<div id="main">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<div class="span12">
								<h3><i class="icon-cog"></i>酒吧海报</h3>
							</div>
						</div>
						<div class="box-content">
							<form action="" method="post" id="lbsForm" class="form-horizontal form-validate" ><?php echo tk();  echo $m->hidden('id'); ?>
								<div class="control-group">
									<label for="title" class="control-label">海报名称：</label>
									<div class="controls">
									<?php echo $m->text('name','class="input-xlarge" required="required"'); ?>
										<span class="maroon">*</span>
										<!-- <span class="help-inline">触发关键词后返回的图文消息标题</span> -->
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label">海报1：</label>
									<div class="controls">
										<img class="thumb_img" src="<?php echo $m->pic; ?>" id="pic" style="max-height:100px;" />
										<?php echo $m->hidden('pic'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic','micro_jiuba_haibaopic');">选择图片</button>
											<span class="help-inline">建议尺寸：宽400像素，高720像素</span>
										</span>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label">海报2：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $m->pic1; ?>" id="pic1"  style="max-height:100px;" />
										<?php echo $m->hidden('pic1'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic1','micro_jiuba_haibaopic1');">选择图片</button>
											<span class="help-inline">建议尺寸：宽400像素，高720像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">海报3：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $m->pic2; ?>" id="pic2"  style="max-height:100px;" />
										<?php echo $m->hidden('pic2'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic2','micro_jiuba_haibaopic2');">选择图片</button>
											<span class="help-inline">建议尺寸：宽400像素，高720像素</span>
										</span>
									</div>
								</div>
							
								<div class="control-group">
									<label class="control-label">海报4：</label>
									<div class="controls">
									
									<img class="thumb_img" src="<?php echo $m->pic3; ?>" id="pic3" style="max-height:100px;" />
									<?php echo $m->hidden('pic3'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic3','micro_jiuba_haibaopic3');">选择图片</button>
											<span class="help-inline">建议尺寸：宽400像素，高720像素</span>
										</span>
									</div>
								</div>
									<div class="control-group">
									<label class="control-label">海报5：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $m->pic4; ?>" id="pic4" style="max-height:100px;" />
									<?php echo $m->hidden('pic4'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic4','micro_jiuba_haibaopic4');">选择图片</button>
											<span class="help-inline">建议尺寸：宽400像素，高720像素</span>
										</span>
									</div>
								
						
								</div>								
								
								<div class="form-actions">
									<button type="submit" id="bsubmit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
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
	function setpic(imgid,hideid){
		window.piccbk = function(m){
			$('#'+imgid).attr('src',m);
			$('#'+hideid).val(m);
			window.piccbk = null;
		}
		window.curpic = null;
		openpicset();	
	} 
	function openpicset(){
		pophtml('<iframe src="../businessModule/wspicif.html" style="width:630px;height:470px;border:none;background-color: #dfdfdf;" width="630px" height="475px"></iframe>',670,510,true);
	}


	$(function(){
		
		 $("#lbsForm").submit(function(){
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
</html>