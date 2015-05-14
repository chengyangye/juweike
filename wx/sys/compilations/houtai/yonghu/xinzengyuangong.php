<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统首页</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/invalid.css" type="text/css" media="screen" />	
</head>
<BODY>
<div class="content-box role">
	<div class="content-box-header">
		<h3>添加员工&nbsp;&nbsp;[<a href="yuangongliebiao.html">员工管理</a>]</h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="tab-content default-tab" id="form">
			<form method="post" action="" name="clientForm" id="clientForm"><?php echo tk();  echo $ag->hidden('id'); ?>
			<table cellSpacing="0" cellPadding="0" width="100%" border="0">
				<tr>
				<td height="25" width="30%" class="left" align="right">
					账号
				：</td>
				<td height="25" width="*" align="left">
				<?php echo $ag->text('un','style="width:125px"'); ?>
				<font color="red">*</font>
				</td></tr>                
				<tr>
				<td height="25" width="30%" class="left" align="right">
					密码
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $ag->text('pwd','style="width:125px"'); ?><font color="red">*</font>
				    <br />为了系统安全，密码长度尽量八位以上，至少要包含字母和数字，尽量包含大小写字母和数字组合
				</td>
				</tr>
				<tr>
                <td height="25" width="30%" class="left" align="right">
					姓名
				：</td>
				<td height="25" width="*" align="left">
                   <?php echo $ag->text('name'); ?>
				</td></tr>
                <tr>
				<td height="25" width="30%" class="left" align="right">
					所在区域
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $ag->mulselect('chinaarea',array('l_sheng','l_shi')); ?>
                </td>
                </tr>
                <tr>
                <td height="25" width="30%" class="left" align="right">
					手机号
				：</td>
				<td height="25" width="*" align="left">
                   <?php echo $ag->text('telephone'); ?>
				</td></tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					邮箱
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $ag->email('email'); ?>
				</td></tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					QQ
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $ag->text('qq'); ?>
				</td></tr>
				<?php if ($mu->isadmin){ ?>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					是否管理员
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $ag->checkbox('isadmin'); ?>
				</td></tr>
				<?php } ?>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					员工职务
				：</td>
				<td height="25" width="*" align="left">
				<?php echo $ag->select($al_arr,'level'); ?>
				<font color="red">*</font>
				</td></tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					是否停用
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $ag->checkbox('isstop'); ?>
				</td></tr>
				<tr>				
				<td height="25" width="30%" align="right">
				</td>
				<td height="25"><div align="left"><input type="hidden" name="action" value="add" />
					<input name="btnAdd" ID="btnAdd" type="submit" class="button" value=" 提 交 " />
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