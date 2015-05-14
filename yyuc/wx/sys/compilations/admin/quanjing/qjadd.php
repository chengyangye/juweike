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
<script type="text/javascript" src="/res/mbaudio/inc/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/res/mbaudio/inc/jquery.mb.miniPlayer.js"></script>
<link rel="stylesheet" type="text/css" href="/uploadify/uploadify.css">
<script type="text/javascript" src="/uploadify/jquery.uploadify.js"></script>
<link rel="stylesheet" type="text/css" href="/res/mbaudio/css/miniplayer.css" title="style" media="screen"/>
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
								<h3><i class="icon-cog"></i>添加全景图(<?php echo $url;?>)</h3>
							</div>
						</div>
						<div class="box-content">
							<form action="" method="post" class="form-horizontal form-validate"><?php echo tk();  echo $full_view->hidden('id'); ?>
								<div class="control-group">
									<label for="title" class="control-label">触发关键字：</label>
									<div class="controls">
										 <?php echo $full_view->text('gjz','class="input-large"  required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline"></span>
									</div>
								</div>
								<div class="control-group">
									<label for="title" class="control-label">全景图标题：</label>
									<div class="controls">
										 <?php echo $full_view->text('name','class="input-large"  required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">尽量简单，不要超过20字</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">图文消息封面</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $full_view->pic; ?>" id="pic" style="max-height:100px;" />
									<?php echo $full_view->hidden('pic'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic','360_full_viewpic');">选择封面</button>
											<span class="help-inline">建议尺寸：宽720像素，高400像素,图片大小不超过300K</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-前：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $full_view->pic_qian; ?>" id="pic_qian" style="max-height:100px;" />
									<?php echo $full_view->hidden('pic_qian'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_qian','360_full_viewpic_qian');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-后：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $full_view->pic_hou; ?>" id="pic_hou" style="max-height:100px;" />
									<?php echo $full_view->hidden('pic_hou'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_hou','360_full_viewpic_hou');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-左：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $full_view->pic_zuo; ?>" id="pic_zuo" style="max-height:100px;" />
									<?php echo $full_view->hidden('pic_zuo'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_zuo','360_full_viewpic_zuo');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-右：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $full_view->pic_you; ?>" id="pic_you" style="max-height:100px;" />
									<?php echo $full_view->hidden('pic_you'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_you','360_full_viewpic_you');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-上：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $full_view->pic_shang; ?>" id="pic_shang" style="max-height:100px;" />
									<?php echo $full_view->hidden('pic_shang'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_shang','360_full_viewpic_shang');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="prices" class="control-label">相册图片-下：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $full_view->pic_xia; ?>" id="pic_xia" style="max-height:100px;" />
									<?php echo $full_view->hidden('pic_xia'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_xia','360_full_viewpic_xia');">选择图片</button>
											<span class="help-inline">建议尺寸：宽700像素，高700像素</span>
										</span>
									</div>
								</div>
								
								<div class="control-group">
                                    <label class="control-label" for="brief">全景图描述</label>
                                    <div class="controls">
									<?php echo $full_view->textarea('ms','class="input-large"  style="height:80px;width:380px;"'); ?>	
                                    <span class="help-block"><?php echo $full_view->ms; ?></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="brief">全景图背景音乐</label>
                                    <div class="controls">
                                    <table>
                                    <tr>
                                     <td class="audiotd"><a id="m1" class="audio { skin:'blue'}" href="<?php echo $full_view->music; ?>" >......</a></td>
                                      <td>
									  <button id="file_upload-button" class="btn pl_add btn-primary">
									  <span class="uploadify-button-text"><i class="icon-plus-sign"></i> 音乐</span></button></td>
                                    </tr>                                 
                                    
                                    </table>
									<?php echo $full_view->hidden('music','rel="music"'); ?>	
                                                                      
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


<script type="text/javascript" src="<?php echo $JS; ?>/comm.js"></script>
<script>
$(function(){
	$('#file_upload-button').uploadify({
        height        : 20,
        swf           : '/uploadify/uploadify.swf',
        uploader      : '/uploadify.html',
        width         : 70,
        multi         : true ,
        buttonText	  : '<span class="uploadify-button-text"><i class="icon-plus-sign"></i>上传音乐</span>',
        buttonClass   : 'btn pl_add btn-primary',
        onUploadSuccess    : function (a, b, c, d, e){
        	$('input[rel="music"]').val(b);
        	$('.audiotd').html('<a id="m1" class="audio { skin:\'blue\'}" href="'+b+'" >......</a>');
        	$(".audio").mb_miniPlayer({
    	        width:50,
    	        inLine:false
    	 	});
        }
    });
	
	 $(".audio").mb_miniPlayer({
	        width:50,
	        inLine:false
	 });
});


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