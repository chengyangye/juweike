<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统首页</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/invalid.css" type="text/css" media="screen" />	
</head>
<BODY>
<div class="content-box role">
<form action="" method="post">
	<div class="content-box-header">
		<h3>用户价格设置</h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="default-tab" >
		<div class="tab-content default-tab" >
			<table>
				<thead>
					<tr>
			<th style="padding-left:5px;border-left:1px solid #C1DAD7">用户类型</th><th>网络用户</th><th>直销用户</th>
					</tr>
				</thead>
				<tbody>
				<?php $__i=0; foreach ((array)$jgres as $r) { $__i++; ?>
					<TR>
					<td>
					<?php echo $utxt_arr[$r->id]; ?>
					</td>
					<td>
					<?php if ($r->id>'1'){ ?>
					<input type="text" value="<?php echo $r->price; ?>" name="price@<?php echo $r->id; ?>"/>
					<?php } ?>			
					</td>
					<td>
					<?php if ($r->id>'2'){ ?>
					<input type="text" value="<?php echo $r->price2; ?>" name="price2@<?php echo $r->id; ?>"/>
					<?php } ?>
					</td>
					</TR>
				<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="13">
							<div class="pagination">
								<input name="btnAdd" ID="btnAdd" type="submit" class="button" value=" 提 交 " />
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
			
			
			</div>
		</div>
	</div>
	</form>
</div>

</BODY>
</html>