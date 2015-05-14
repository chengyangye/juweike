<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>代理充值</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">

</head>
<body>
<h3>代理OEM设置</h3>
	<div class="alert alert-info">
	  	<p><span class="bold">说明：</span>OEM设置完成后，你将拥有带有自己的和<?php echo $_SERVER['WEB_NAME']; ?>一样的站点。</p>
	</div>
	<form class="form-horizontal" id="lbsForm" action="" method="post"><?php echo tk();  echo $u->hidden('id'); ?>
		<div class="control-group">
	    	<label class="control-label" for="keyword">网站名称</label>
	    	<div class="controls">
	    	<?php echo $u->text('webname','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group">
	    	<label class="control-label" for="keyword">网站域名</label>
	    	<div class="controls">http://
	    	<?php echo $u->text('domain','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">绑定的域名</span>
	    	</div>
	  	</div>
	 
		<div class="control-group">
		    <label class="control-label" for="">网站LOGO:</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $u->upload('logo',array('text'=>'上传图片并剪裁','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>160),null,null,'picsethere',array('width'=>176,'height'=>54,'buttonText'=>'确认剪裁')); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">尺寸：176像素 * 54像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="picsethere">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">客服代码</label>
	    	<div class="controls">
	    	<?php echo $u->textarea('kfcode'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">左下角QQ客服代码</span>
	    	</div>
	  	</div>
 		<div class="control-group">
		    <div class="controls">
		    
		      <button id="save-btn" type="submit" class="btn btn-primary btn-large">保存</button>
		     
		    </div>
	    </div>
	</form>  
</body>
</html>