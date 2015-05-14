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
		<h3>添加客户&nbsp;&nbsp;[<a href="zuizhongliebiao.html">客户管理</a>]</h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="tab-content default-tab" id="form">
			<form method="post" action="" name="clientForm" id="regform"><?php echo tk();  echo $user->hidden('id'); ?>
			<table cellSpacing="0" cellPadding="0" width="100%" border="0">
				<tr>
				<td height="25" width="30%" class="left" align="right">
					账号
				：</td>
				<td height="25" width="*" align="left">
				<?php if ($user->has_id()){ ?>
				<?php echo $user->un; ?>
				<?php }else{ ?>
				<?php echo $user->text('un','style="width:125px"'); ?>
				<?php } ?>				
				<font color="red">*</font><span class="help-inline"></span>
				</td></tr>
                
				<tr>
				<td height="25" width="30%" class="left" align="right">
					密码
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $user->text('pwd','style="width:125px"'); ?><font color='red'>*</font><span class="help-inline"></span>
				    <br />
				</td>
				</tr>
                <tr>
				<td height="25" width="30%" class="left" align="right">
					所在区域
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $user->mulselect('chinaarea',array('l_sheng','l_shi','l_xianqu')); ?>
                </td>
                </tr>
                <tr>
                <td height="25" width="30%" class="left" align="right">
					客户地址
				：</td>
				<td height="25" width="*" align="left">
                   <?php echo $user->text('addr'); ?>
				</td></tr>
                <tr>
                <td height="25" width="30%" class="left" align="right">
					客户经理
				：</td>
				<td height="25" width="*" align="left">
                   <?php echo $user->text('jingli'); ?>
				</td></tr>
                <tr>
                <td height="25" width="30%" class="left" align="right">
					联系人
				：</td>
				<td height="25" width="*" align="left">
                   <?php echo $user->text('lxr'); ?><font color='red'>*</font><span class="help-inline"></span>
				</td></tr>
                <tr>
                <td height="25" width="30%" class="left" align="right">
					电话
				：</td>
				<td height="25" width="*" align="left">
                   <?php echo $user->text('tel'); ?>
				</td></tr>
                <tr>
                <td height="25" width="30%" class="left" align="right">
					手机号
				：</td>
				<td height="25" width="*" align="left">
                   <?php echo $user->text('telephone'); ?><font color='red'>*</font><span class="help-inline"></span>
				</td></tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					邮箱
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $user->email('email'); ?>
				</td></tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					QQ
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $user->text('qq'); ?>
				</td></tr>
				<?php if ($mu->isyg || $mu->isadmin){ ?>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					归属财务
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $user->select($cw,'cwid'); ?>
				</td></tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					归属客服
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $user->select($kf,'kfid'); ?>
				</td></tr>
				<?php } ?>
				<?php if ($mu->isadmin){ ?>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					所属业务(代理)
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $user->select($yw,'agid'); ?>
				</td></tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					网销人员
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $user->select($yg,'ygid'); ?>
				</td></tr>
				<?php } ?>	
				<?php if ($display){ ?>	
				<?php } ?>			
				<tr>
								
				<td height="25" width="30%" align="right">
				</td>
				<td height="25"><div align="left"><input type="hidden" name="action" value="add" />
					<input name="btnAdd" ID="btnAdd" type="button"  onclick="registerUser()"class="button" value=" 提 交 " />
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
	
	function registerUser(){  
		$('.help-inline').remove();
		$('.maroon').css('display','none')
		$('#regform').validate(function(m){
		    if(m.length>0){
		        for(var i=0;i<m.length;i++){
		            //m[i].e为验证错误的表单元素
		            //m[i].m该单元的错误信息（非空错误为false，其他为信息数组）
		 			var ntip = $('<span class="help-inline" style="color:red">'+(m[i].m===false?'该项内容不能为空':m[i].m.join(','))+'</span>');
		            $(m[i].e).after(ntip.show());
		            $(m[i].e).one('blur',function(){
		            	ntip.remove();
		            });
		        }
		    }else{
		        $('form').submit();
		    }
		});
	}
</script>