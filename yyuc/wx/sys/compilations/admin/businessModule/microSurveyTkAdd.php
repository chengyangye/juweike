<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>微调研设定</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
	<h3>微调研题库设置</h3>
	<div class="alert alert-info">
	  	<p><span class="bold">说明：</span>微调研的目的是获得系统客观的收集信息研究数据，为决策做准备，选项不足10项的留空即可。</p>
	  	<p><span class="bold">当前地址：</span><?php echo getUrl(); ?></p>
	</div>
	<form class="form-horizontal" id="lbsForm" action="" method="post"><?php echo tk();  echo $lbs->hidden('id'); ?>
		<div class="control-group">
			<label class="control-label" for="detail">题目描述:</label>
			<div class="controls">
			<?php echo $lbs->textarea('question','class="span5" style="height:90px;width:520px;"'); ?>
				<span class="maroon">*</span><br><span class="help-inline">最多为1000个字符。</span>
			</div>
		</div>
		
		<div class="control-group">
	    	<label class="control-label" for="keyword">选项1</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option1','class="span4"'); ?>
		    	<span class="maroon">*</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项2</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option2','class="span4"'); ?>
		    	<span class="maroon">*</span>
	    	</div>
	  	</div>
	  		<div class="control-group">
	    	<label class="control-label" for="keyword">选项3</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option3','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项4</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option4','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项5</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option5','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项6</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option6','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项7</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option7','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项8</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option8','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项9</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option9','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项10</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option10','class="span4" noneed="1"'); ?>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">题型</label>
	    	<div class="controls">
	    	<?php echo $lbs->radio(array('1'=>"单选",'2'=>"多选"),'type'); ?>
	    	</div>
	  	</div>
 		<div class="control-group">
		    <div class="controls">		    
		      <button id="save-btn" type="submit" class="btn btn-primary btn-large">保存并开启</button>		     
		    </div>
	    </div>
	    <br><br><br><br>
	</form>

<script type="text/javascript">
$(function(){
	 $("#lbsForm").submit(function(){
		var cansv= true;
		$(this).find('input[type="text"],radio,select,textarea').each(function(){
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
		 var list= $('input:radio:checked').val();
			if(list == null){
				tusi('请将信息填写完整');
				return false;
			}
		$(this).find('input[type="text"],radio,select,textarea').each(function(){
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
<br><br><br><br>
</body>

</html>