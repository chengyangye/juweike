<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>代理充值</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">

</head>
<body>
<h3>为会员充值</h3>
	<div class="alert alert-info">
	  	<p><span class="bold">说明：</span>使用代理折扣为该用户充值。当前折扣为:<span style="color: red;"><?php echo $myzk; ?></span>,账户余额为：<span style="color: red;"><?php echo $mu->balance; ?></span></p>
	</div>
	<form class="form-horizontal" id="lbsForm" action="" method="post">
		<div class="control-group">
	    	<label class="control-label" for="keyword">会员名称 </label>
	    	<div class="controls">
	    	<?php echo $u->un; ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline"></span>
	    	</div>
	  	</div>
		<div class="control-group">
	    	<label class="control-label" for="keyword">当前级别</label>
	    	<div class="controls">
	    	 <?php echo translate_level($level_id); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline"></span>
	    	</div>
	  	</div>
	 	
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">购买级别</label>
	    	<div class="controls">
	    	<?php echo $agency_pay->select($level,'level_id'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline"></span>
	    	</div>
	  	</div>
	  	
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">购买月数</label>
	    	<div class="controls">
	    	<?php echo $agency_pay->select($ys,'buy_months'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline"></span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">实际花费</label>
	    	<div class="controls" id="sjhf" style="color: red;">
	    	<?php echo $agency_pay->text('money','readonly'); ?>
	    	</div>
	  	</div>
 		<div class="control-group">
		    <div class="controls">
		    
		      <button id="save-btn" type="submit" class="btn btn-primary btn-large">保存</button>
		     
		    </div>
	    </div>
	</form> 
	<script type="text/javascript">
	var prc = <?php echo $prcjson; ?>;
	var zkl = <?php echo $myzk; ?>;
	$(function(){
		jsjg();
		$('#agency_pay_recordlevel_id,#agency_pay_recordbuy_months').change(function(){
			jsjg();
		});
	});
	function jsjg(){
		var prrc = parseInt(prc['a'+$('#agency_pay_recordlevel_id').val()]);
		var mt = parseInt($('#agency_pay_recordbuy_months').val());
		var sjhf = prrc*mt*zkl;
		$('#sjhf').find('input').val(sjhf);
		return sjhf;
	}
	</script>
</body>
</html>