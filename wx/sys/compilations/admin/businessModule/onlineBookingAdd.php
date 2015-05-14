<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在线预订设置</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<style type="text/css">
	table td {
		min-width:50px;
		overflow:hidden;text-overflow:ellipsis;
	}
	#picsethere{
		width: 510px;
		display: block;
	}
	#picsethere img{
		max-width: 500px;
		display: block;
	}
</style>
</head>
<body>
	<h3>在线预订设置</h3>
	<div class="alert alert-info">
	  	<p><span class="bold">说明：</span>在线预订更快速便捷、无需奔波到门市排队等候、只要有微信就可轻松搞定。</p>
	    <p><span class="bold">当前地址：</span><?php echo getUrl('onlineBooking'); ?></p>
	</div>
	<form class="form-horizontal" id="lbsForm" action="" method="post"><?php echo tk();  echo $lbs->hidden('id'); ?>
		<div class="control-group">
	    	<label class="control-label" for="keyword">在线预订名称</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('name','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">在线预订键字</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('gjz','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入20个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group">
	    	<label class="control-label" for="location_p">在线预订开始时间</label>
	    	<div class="controls">
	    	<?php echo $lbs->datetime('kssj','class="span4"'); ?>
	    	</div>
	  	</div>
	  
	  	<div class="control-group">
	    	<label class="control-label" for="category_f">在线预订设置结束时间</label>
	    	<div class="controls">
	    	<?php echo $lbs->datetime('jssj','class="span4"'); ?>
	    	</div>
	  	</div>
		<div class="control-group">
		    <label class="control-label" for="">在线预订展示图片</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('pic',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'picsethere'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：700像素 * 380像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="picsethere">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group">
			<label class="control-label" for="detail">在线预订简述:</label>
			<div class="controls">
			<?php echo $lbs->textarea('ms','class="span5" style="height:90px;width:520px;"'); ?>
				<span class="maroon">*</span><br><span class="help-inline">最多为1000个字符。</span>
			</div>
		</div>
		
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">电话</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('tel','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">请输入整数</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">地址</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('addr','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">名称描述</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('type_name','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline"></span>
	    	</div>
	  	</div>
		<div class="control-group">
	    	<label class="control-label" for="keyword">描述</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('type','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">各描述用逗号分隔，如宝马x1,宝马x6</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">名称描述1</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('type1_name','class="span4" noneed="1"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline"></span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">描述1</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('type1','class="span4" noneed="1"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">各描述用逗号分隔，如宝马x1,宝马x6</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">名称描述2</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('type2_name','class="span4" noneed="1"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline"></span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">描述2</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('type2','class="span4" noneed="1"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">各描述用逗号分隔，如宝马x1,宝马x6</span>
	    	</div>
	  	</div>
	  
 		<div class="control-group">
		    <div class="controls">
		    
		      <button id="save-btn" type="submit" class="btn btn-primary btn-large">保存并开启</button>
		     
		    </div>
	    </div>
	</form>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
<script type="text/javascript">
$(function(){
	 $("#lbsForm").submit(function(){
		var cansv= true;
		$(this).find('input[type="text"],select,textarea').each(function(){
			if($.trim($(this).val())=='' && $(this).attr('noneed')!='1'){
				cansv = false;
				$(this).css('backgroundColor','yellow');
				$(this).one('focus',function(){
					$(this).css('backgroundColor','transparent');
				});
			}
		});
		if(!cansv){
			tusi('请将信息填写完整');
			return false;
		}
		$(this).find('input[type="text"],select,textarea').each(function(){
			if($(this).attr('isint')=='1' && $.trim($(this).val())!=''){
				var intthis = parseInt2($(this).val());
				if(intthis+''=='NaN'){
					cansv = false;
					$(this).css('backgroundColor','yellow');
					$(this).one('focus',function(){
						$(this).css('backgroundColor','transparent');
					});
				}else{
					$(this).val(parseInt($(this).val()));
				}
			}
		});
		if(!cansv){
			tusi('标注的项目必须为整数');
			return false;
		}
		
		$(this).find('input[type="text"],select,textarea').each(function(){
			if($(this).attr('isfloat')=='1' && $.trim($(this).val())!=''){
				var intthis = parseFloat($(this).val());
				if(intthis+''=='NaN'){
					$(this).val('0');
					cansv = false;
					$(this).css('backgroundColor','yellow');
					$(this).one('focus',function(){
						$(this).css('backgroundColor','transparent');
					});
				}else{
					$(this).val(parseFloat($(this).val()));
				}
			}
		});
		if(!cansv){
			tusi('标注的项目必须为数字');
			return false;
		}
		
		if($('#picsethere').find('img').size()<1){
   		cansv = false;
   		tusi('请上传活动图片');
   		return false;
   	}
   	return cansv;
   });
});
</script>
<br/><br/><br/></body>

</html>