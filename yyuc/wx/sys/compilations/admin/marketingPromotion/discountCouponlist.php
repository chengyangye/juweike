<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<title>我的活动</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

</head>
<body>
	<div class="main-title">
		<h3><?php echo $lbs->name; ?>优惠券活动</h3>
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
<form action="discountCouponlist-<?php echo $lbs->id; ?>.html">
手机号：
<?php echo $tj->text('tel','style="margin-top: 10px;width:100px;"'); ?>
使用状态：
<?php echo $tj->select($isused_arr,'isused','style="margin-top: 10px;width:80px;"'); ?>
开始时间：
<?php echo $tj->datetime('kssj','style="margin-top: 10px;width:140px;"'); ?>
结束时间：
<?php echo $tj->datetime('jssj','style="margin-top: 10px;width:140px;"'); ?>
消费门店：
<?php echo $tj->select($mdlb_arr,'mdid','style="margin-top: 10px;width:300px;"'); ?>
<button type="submit" class="btn">检索</button>
</form>

</div>
<div>总计：<B><?php echo $p->totalnum; ?>条/<?php echo $p->totalpage; ?>页</B></div>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th>用户名称</th>
					<th>用户电话</th>
					<th>参与时间</th>
					<th>消费门店</th>
					<th>消费备注</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>			 
			      <tr>
						<td><?php echo $r->un; ?></td>
						<td><?php echo $r->tel; ?></td>
						<td>
						<?php echo $r->ctime; ?>
						</td>
						<td>
						<?php echo $mdlb[$r->mdid]; ?>
						</td>
						<td>
						<?php echo $r->bz; ?>
						</td>
						<td>
						<span>
						<?php if ($r->isused=='1'){ ?>
						已使用
						<?php }else{ ?>
						[
						<a href="javascript:;" onclick="toused(<?php echo $r->id; ?>,this)">标记使用</a>
						]
						<?php } ?>						
						</span>
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

<script type="text/javascript">
function dellbs(id,o){
	if(id=='a'){
		if(confirm('确定删除这些活动信息吗？')){
			var ids = [];
			$('td').find('input[type="checkbox"]:checked').each(function(){
				ids[ids.length] = $(this).val();
			});
			ajax('discountCoupon-del.html',{ id:ids.join(',')},function(){
				$('td').find('input[type="checkbox"]:checked').each(function(){
					$(this).parent().parent().remove();
				});
			});	
		}
	}else{
		if(confirm('确定删除此条活动信息吗？')){
			ajax('discountCoupon-del.html',{ id:id},function(){
				$(o).parent().parent().parent().remove();
			});	
		}
	}	
}

function selallck(o){
	if($(o).prop('checked')){
		$('td').find('input[type="checkbox"]').prop('checked',true);
	}else{
		$('td').find('input[type="checkbox"]').prop('checked',false);
	}
}

</script>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
<div id="jfczarea" style="display:none">
	<table>
		<tr>
			<td style="line-height: 30px;" valign="top">门店：</td>
			<td colspan="3"><select style="width: 228px;" class="mdlb">
					<option value="0">--不标记--</option>
					<?php $__i=0; foreach ((array)$mdlb as $k=>$v) { $__i++; ?>
					<option value="<?php echo $k; ?>"><?php echo $v; ?></option>
					<?php } ?>
			</select></td>
			</tr>
			<tr>
			<td style="line-height: 30px;" valign="top">备注：</td>
			<td colspan="2"><input type="text" class="bz" style="width: 150px;"></td>
			<td valign="top" align="right">
			<button onclick="fyjs('discountCouponlist')" class="btn">确定</button>
			</td>
		</tr>
	</table>
</div>
<br/><br/><br/></body></html>