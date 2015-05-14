<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<title>我的活动</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

</head>
<body>
	<div class="main-title">
		<h3><?php echo $lbs->name; ?>微会员卡活动</h3>
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
<form action="">
手机号：
<?php echo $tj->text('tel','style="margin-top: 10px;width:100px;"'); ?>
会员卡号：
<?php echo $tj->text('sn','style="margin-top: 10px;width:100px;"'); ?>
开始时间：
<?php echo $tj->datetime('kssj','style="margin-top: 10px;width:140px;"'); ?>
结束时间：
<?php echo $tj->datetime('jssj','style="margin-top: 10px;width:140px;"'); ?>
<button type="submit" class="btn">检索</button>
</form>

</div>
<div>总计：<B><?php echo $p->totalnum; ?>条/<?php echo $p->totalpage; ?>页</B></div>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th>会员名称</th>
					<th>电话</th>
					<th>生日</th>
					<th>地址</th>
					<th>参与时间</th>
					<th>会员卡号</th>
					<th>余额</th>
					<th>积分</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>			 
			      <tr>
						<td><?php echo $r->un; ?></td>
						<td><?php echo $r->tel; ?></td>
						<td><?php echo $r->sr; ?></td>
						<td><?php echo $r->dz; ?></td>
						<td>
						<?php echo $r->ctime; ?>
						</td>
						<td><?php echo $r->sn; ?></td>
						<td>￥<?php echo $r->ye; ?></td>
						<td><?php echo $r->jf; ?></td>
						<td>
						<span>
						[<a href="javascript:;" onclick="toused(<?php echo $r->id; ?>,this)">操作</a>]&nbsp;			
						[<a href="microMemberCardListList-<?php echo $r->id; ?>.html">记录</a>]					
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
function fyjs(){
	var fs = $('.zcsel').val();
	var je = $('.je').val();
	var bz = $('.bz').val();
	var md = $('.mdlb').val();
	ajax('microMemberCardListset.html',{ fs:fs,je:je,id:window.yjsid,bz:bz,md:md},function(m){
		tusi('操作成功');
		setTimeout(function(){
			location.href =location.href; 
		},1000);
		
	});
}
function toused(id,o){
	if(!window.pophtm){
		window.pophtm = $('#jfczarea').html();
		$('#jfczarea').remove();
	}
	window.yjsid = id;
	pophtml(window.pophtm,360,180);
	
	/**
	if(confirm('确定标记微会员卡已使用吗？')){
		ajax('microMemberCardList-used.html',{ id:id},function(m){
			if(m=='ok'){
				$(o).parent().html('已使用');
			}
		});
	}
	*/
}
</script>
<div id="jfczarea" style="display: none;">
	<table>
		<tr>
			<td style="line-height: 30px;" valign="top">方式：</td>
			<td><select style="width: 120px;" class="zcsel">
					<option value="cz">充值</option>
					<option value="xf">消费</option>
					<option value="jfa">积分累加</option>
					<option value="jfd">积分消费</option>
			</select></td>
			<td style="line-height: 30px;" valign="top">数额：</td>
			<td><input type="text" class="je" style="width: 50px;"></td>
			</tr>
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
			<button onclick="fyjs()" class="btn">确定</button>
			</td>
		</tr>
	</table>
</div>
<br/><br/><br/></body></html>