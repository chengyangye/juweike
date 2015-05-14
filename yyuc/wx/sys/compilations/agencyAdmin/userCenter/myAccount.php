<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>我的账户</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<style>
.username{
	padding-top: 4px;
	display: inline-block;
	font-weight: bold;
}
</style>
</head>

<body>
<h3>我的账户信息</h3>
	<form id="accountform" action="#" method="post" class="form-horizontal">
	  <?php echo $user->hidden('id'); ?>
	  <div class="control-group">
	    <label class="control-label">用户名</label>
	    <div class="controls">
	      <span class="username"><?php echo $user->un; ?></span>
	    </div>
	  </div>
	   <div class="control-group">
	    <label class="control-label">代理级别</label>
	    <div class="controls">
	      <span class="username">
	      <?php echo translate_agency_level($user->isadmin); ?>
	      </span>
	    </div>
	  </div>
	</form>
</body></html>
<script type="text/javascript">
$(function(){
	$("#accountform").submit(function(){
		var cansv= true;
		$(this).find('input[type="text"]').each(function(){
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
	});
});
</script>