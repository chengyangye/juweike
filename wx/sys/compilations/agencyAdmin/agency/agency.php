<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
</head>
<body>
<h3><?php echo $tit; ?></h3>
<form action="">
<table>
<tr>
<td valign="top" style="line-height: 25px;">用户名:</td>
<td valign="top"><input type="text" class="span2" name="yhm" value="<?php echo htmlspecialchars(($kw),ENT_QUOTES); ?>"></td>
<td valign="top"><button type="submit" class="btn btn-primary">检索</button></td>
</tr>
</table>

</form>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th>用户ID</th>
					<th>用户名称</th>
					<th>当前级别</th>
					<th>到期时间</th>
					<th>下一级别</th>
					<th>到期时间</th>
					<th>上级代理</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>			 
			      <tr>
			      <td><?php echo $r->id; ?></td>
						<td><?php echo $r->un; ?></td>
						<td><?php if ($r->level_id ==1){ ?>
						    普通用户
						    <?php }elseif ($r->level_id ==2 ){ ?>
						    普通会员
						    <?php }elseif ($r->level_id ==3 ){ ?>
						    白金会员
						    <?php }else{ ?>
						    钻石会员
						    <?php } ?>
						
						</td>
						<td><?php if ($r->mendtime == 0){ ?>
						    永久免费
						    <?php }else{ ?>
						    <?php echo $r->mendtime; ?>
						    <?php } ?> 
						</td>
						<td>
					       <?php if ($r->next_level_id ==1){ ?>
						    普通用户
						    <?php }elseif ($r->next_level_id ==2 ){ ?>
						    普通会员
						    <?php }elseif ($r->next_level_id ==3 ){ ?>
						    白金会员
						    <?php }elseif ($r->next_level_id ==4){ ?>
						    钻石会员
						    <?php }else{ ?>
						    暂无
						    <?php } ?>
						
						</td>
						<td>
					       <?php if ($r->next_mendtime == 0){ ?>
					        暂无
					        <?php }else{ ?>
		                     <?php echo $r->next_mendtime; ?>			       
					       <?php } ?>
						</td>
						<td>
						<?php echo $ag_arr[$r->agency_id]; ?>
						</td>
						<td>
							<span>
							<?php if ($r->next_level_id != '' && $r->next_level_id != '0' && $r->next_level_id != '1' ){ ?>
							已充值
							<?php }else{ ?>
							<a href="agencyPay-<?php echo $r->id; ?>.html">充值</a>
							<?php } ?>
							</span>
						</td>
				  </tr>
			<?php } ?>
			</tbody>
		</table>
<div class="pagination">
  <ul>
<?php if(isset($P)&&($P->totalpage>1||$P->showifone)){  if (!$P->isfirst){ ?>
<li class="pagination_first"><a href="<?php echo $P->firstlink; ?>"><span>第一页</span></a></li>
<?php }  if (!$P->isfirst){ ?>
<li class="pagination_prev"><a href="<?php echo $P->prevlink; ?>"><span>上一页</span></a></li>
<?php }  if($P->needleftgap){ ?><li class="page_gap separator"><span>...</span></li><?php }  for($page_num=$P->startpage;$page_num<=$P->endpage;$page_num++){  $page_link = $P->firstlink;  if($page_num!=1){  $page_link = ($P->commonlink.Conf::$paging_separate.$page_num.Conf::$suffix).$P->querystr;  }  if($page_num==$P->pagenum){ ?><li class="pagination_current current"><span><?php echo $page_num; ?></span></li><?php }else{ ?><li class="pagination_common"><a href="<?php echo $page_link; ?>"><span><?php echo $page_num; ?></span></a></li><?php }  }  if($P->needrightgap){ ?><li class="page_gap separator"><span>...</span></li><?php }  if (!$P->islast){ ?>
<li class="pagination_next"><a href="<?php echo $P->nextlink; ?>"><span>下一页</span></a></li>
<?php }  if (!$P->islast){ ?>
<li class="pagination_last"><a href="<?php echo $P->lastlink; ?>"><span>末页</span></a></li>
<?php }  } ?>
  </ul>
  
</div>
</body>
</html>