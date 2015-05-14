<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>一战到底设定</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
	<h3>一战到底题库设置</h3>
	<div class="alert alert-info">
	  	<p><span class="bold">说明：</span>一战到底是一种智力游戏推广宣传模式。</p>
	  	<p><span class="bold">当前地址：</span><?php echo getUrl(); ?></p>
	</div>
	<form class="form-horizontal" id="lbsForm" action="" method="post"><?php echo tk();  echo $lbs->hidden('id'); ?>
		<div class="control-group">
			<label class="control-label" for="detail">题目描述:</label>
			<div class="controls">
			<?php echo $lbs->textarea('tm','class="span5" style="height:90px;width:520px;"'); ?>
				<span class="maroon">*</span><br><span class="help-inline">最多为1000个字符。</span>
			</div>
		</div>
		<div class="control-group">
	    	<label class="control-label" for="keyword">答案1</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('d1','class="span4"'); ?>
		    	<span class="maroon">*</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">答案2</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('d2','class="span4"'); ?>
		    	<span class="maroon">*</span>
	    	</div>
	  	</div>
	  		<div class="control-group">
	    	<label class="control-label" for="keyword">答案3</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('d3','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  		<div class="control-group">
	    	<label class="control-label" for="keyword">答案4</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('d4','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">正确答案</label>
	    	<div class="controls">
	    	<?php echo $lbs->select($da_arr,'zd'); ?>
	    	</div>
	  	</div>
 		<div class="control-group">
		    <div class="controls">		    
		      <button id="save-btn" type="submit" class="btn btn-primary btn-large">保存并开启</button>		     
		    </div>
	    </div>
	</form>

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
   	return cansv;
   });
});
</script>
<br/><br/><br/></body>

</html>