<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统首页</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/invalid.css" type="text/css" media="screen" />	
</head>
<BODY>
<div class="content-box role">
	<div class="content-box-header">
		<h3>密码修改&nbsp;&nbsp;[<a href="updatePwd.html">密码修改</a>]</h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="tab-content default-tab" id="form">
			<form method="post" action="" name="clientForm" id="clientForm">
			<table cellSpacing="0" cellPadding="0" width="100%" border="0">
			<?php if (Session::get('hupc')=='0'){ ?>
             <tr>
			 <td height="25" width="30%" class="left" align="center" colspan="2" style="color: red;text-align: center;" >
             <strong>温馨提示</strong>：系统检测您的密码过于简单，请更新密码后继续使用！！
             </td>
             </tr>
            <?php } ?>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					账号
				：</td>
				<td height="25" width="*" align="left">
				<?php echo $un; ?>
				</td></tr>
				 <tr>
				<td height="25" width="30%" class="left" align="right">
					原密码
				：</td>
				<td height="25" width="*" align="left">
				<input name="oldpwd" id="oldpwd" type="password">
				    <br />
				</td>
				</tr>
                <tr>
				<td height="25" width="30%" class="left" align="right">
					新密码
				：</td>
				<td height="25" width="*" align="left">
				<input name="newpwd" id="newpwd" type="password">
				    <br />
				</td>
				</tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					确认密码
				：</td>
				<td height="25" width="*" align="left">
					   <input name="renewpwd" id="renewpwd" type="password">
				    <br />为了系统安全，密码长度尽量八位以上，至少要包含字母和数字，尽量包含大小写字母和数字组合
				</td>
				</tr>
				
								
				<tr>				
				<td height="25" width="30%" align="right">
				</td>
				<td height="25"><div align="left"><input type="hidden" name="action" value="add" />
					<input name="btnAdd" ID="btnAdd" type="button" class="button" value=" 提 交 " />
					<input name="reset" ID="Submit1" type="reset" class="button" value=" 重 置 " />
					<input name="back" ID="back" type="button" onclick="history.back();" class="button" value=" 返 回 " />
				</div></td></tr>
				<tr>
				<td colspan="2" height="100" width="30%" align="right">
				 </td>
				 </tr>
			</table>
			</form>
		</div>
	</div>
</div>
<br />
<br />
<br />
</BODY>
</html>
<script type="text/javascript">
$(function(){
	 
  $("#btnAdd").click(function(){
	  var oldpwd   = $("#oldpwd").val();
	  var pwd   = $("#newpwd").val();
	  var pwd1 = $("#renewpwd").val();
	  var id       = $("#id").val();
	  if(pwd == '' || pwd1 == '' || oldpwd == ''){
		  tusi('请填写完整。');
		  return false;
	  }
	  if(pwd!= pwd1){
		  tusi('两次密码不一致!');
		  return false;
	  }
	  if(oldpwd == pwd){
		  tusi('新旧密码不能相同!');
		  return false;
	  }
	  ajax('updatePwd.html',{ pwd:pwd,pwd1:pwd1,oldpwd:oldpwd},function(data){
		  if(data == 0){
			  tusi('两次密码不一致!');
			  return false;
		  }else if(data == 2){
			  tusi('不能为空');
			  return false;
		  }else if(data ==3){
			  tusi('原密码不正确!');
		  }else{
			  tusi('操作成功');
			  $("#oldpwd").val("");
			  $("#newpwd").val('');
			  $("#renewpwd").val('');
			//  window.location.reload();
			  
		  }
		  
	  });
  });
});


</script>