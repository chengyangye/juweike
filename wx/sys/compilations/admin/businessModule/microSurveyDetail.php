<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<title>我的活动</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

</head>
<body>
	<div class="main-title">
		<h3><?php echo $lbs->name; ?>微调研活动</h3>
	</div>

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
<div>
</div>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th>问题</th>
					<th>回答</th>
					
					<!-- <th>操作</th> -->
				</tr>
			</thead>
			<tbody>
			<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
			      <tr>
						<td><?php echo $r->question; ?></td>
						<td>
						<?php
						if(!isset($r->a)){
								echo '[未回答]';

						}elseif(is_array($r->a)){
                                for($i=0;$i<count($r->a);$i++){
									$opt = 'option'.$r->a[$i];																
									echo $r->$opt;
								}

							}else{
							$opt = 'option'.$r->a;
								echo $r->$opt;
							}
							
						?>
						</td>
				  </tr>
			<?php } ?>
			</tbody>
		</table>
	<div class="tb-toolbar">
	</div>

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
<br/><br/><br/></body></html>