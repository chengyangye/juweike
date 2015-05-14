<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>代理支付审核</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<script type="text/javascript">
$(function(){
	$('#shzt').val('<?php echo $shzt; ?>');
});
</script>
</head>
<body>
<h3>
代理充值审核
</h3>
<form action="">
<table>
<tr>
<td valign="top" style="line-height: 25px;">审核状态:</td>
<td valign="top">
<select name="shzt" id="shzt">
<option value="">全部</option>
<option value="0">未审核</option>
<option value="1">已审核</option>
</select>
</td>
<td valign="top"><button type="submit" class="btn btn-primary">检索</button></td>
</tr>
</table>

</form>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th>代理</th>
					<th>用户ID</th>
					<th>购买级别</th>
					<th>购买月数</th>
					<th>够买金额</th>
					<th>够买时间</th>
				<!-- 	<th>支付状态</th> -->
					<th>审核状态</th>
				</tr>
			</thead>
			<tbody>
			<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
						 
			      <tr>
						<td><?php echo $ag_arr[$r->agency_id]; ?></td>
						<td><?php echo $r->uid; ?></td>
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
						<td><?php echo $r->buy_months; ?></td>
						<td><?php echo $r->money; ?>	</td>
						<td><?php echo $r->buy_time; ?></td>
						<!-- <td><?php if ($r->status == 0){ ?>
						     <span style="color:blue">[未支付]</span>
						     <?php }else{ ?>
						     [已支付]
						     <?php } ?>
						</td> -->
						<td>
						<?php if ($r->is_check == 0){ ?>
						<?php if (Auth::is_admin('admin')){ ?>
						   [<a href="payAudit-<?php echo $r->id; ?>.html">点击通过审核</a>]
						<?php }else{ ?>
							[未审核]
						<?php } ?>
						   <?php }else{ ?>
						   [已审核]
						   <?php } ?>
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