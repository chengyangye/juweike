<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="微信">
<link type="text/css" rel="stylesheet" href="/res/weiXiTie/style/wedding.css" />
<title>微喜帖</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
	<body onselectstart="return true;" ondragstart="return false;">
		<div class="container">
			<section class="body p_10">
				<div class="box" style="line-height:35px;border-bottom:1px solid #000;margin-bottom:10px;padding-bottom:10px;">
					<div><h3><?php echo $title; ?></h3></div>
					<div class="btns_1" style="text-align:right;"><a href="javascript:location.reload();" class="align_center">刷新</a></div>
				</div>
				<table class="list_table">
					<tr class="align_left">
						<td>姓名</td>
						<td>手机号码</td>
						<td><?php echo $td_name; ?></td>
					</tr>
					<?php if ($type == 1){ ?>
						<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
						<tr>
							<td><?php echo $r->name; ?></td>
							<td><?php echo $r->tel; ?></td>
							<td><?php echo $r->rs; ?></td>
						</tr>
						<?php } ?>
					<?php }else{ ?>	
					     <?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
						 <tr>
							<td><?php echo $r->name; ?></td>
							<td><?php echo $r->tel; ?></td>
							<td><?php echo $r->zhufu; ?></td>
						</tr>
						<?php } ?>
					<?php } ?>
						
				</table>
			<section>
		</div>
		
	</body>
</html>
</body>
</html>