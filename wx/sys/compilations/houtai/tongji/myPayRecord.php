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
	<div class="content-box-header">
		<h3>当前登录角色：<?php echo $user_role; ?>, 累计充值总金额:<?php echo $payTotal; ?>,累计实际充值总金额:<?php echo $payRelTotal; ?></h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="default-tab" >
            
			<!-- <div class="top_dep">
                <a href="xinzengyuangong.html" class="add_dep">新增员工 </a>
			</div>
			 -->
            
			
			<div class="searchgrid">
			<form method="get" action="" name="Form" id="Form1">
			<label>开始时间</label><?php echo $tj->datetime('begin_time'); ?>
			<label>结束时间</label><?php echo $tj->datetime('end_time'); ?>
		  <!--   <label>充值人</label><?php echo $tj->select($un,'aid'); ?> -->
			<input type="submit" class="button" value="查询" />
			</form>

		</div>
		<div class="tab-content default-tab" >
			<table>
				<thead>
					<tr>
			<th style="padding-left:5px;border-left:1px solid #C1DAD7">序号</th><th>充值人</th><th>实际充值金额</th><th>折扣后享受充值金额</th><th>充值时间</th><th>备注</th>				</tr>
				</thead>
				<tbody>
				<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
					<TR>
					<td style='padding-left:5px;'>
					<?php echo $p->totalnum-$__i+1-$p->stratnum; ?>
					</td>
					<td>
					<?php echo $agency_arr[$r->pid]; ?>
					</td>
					<td>
					<?php echo $r->relmoney; ?>
					</td>
					<td>
					<?php echo $r->money; ?>
					</td>
					<td>
					<?php echo $r->ctime; ?>
					</td>
					<td>
					<?php echo $r->bz; ?>
					</td>
					
					</TR>
				<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="13">
							<div class="pagination">
								<a>共有 <B><?php echo $p->totalnum; ?>条/<?php echo $p->totalpage; ?>页</B> </a>
								<?php if(isset($P)&&($P->totalpage>1||$P->showifone)){  if (!$P->isfirst){ ?>
<a href="<?php echo $P->firstlink; ?>" class="number">首页</a>
<?php }  if (!$P->isfirst){ ?>
<a href="<?php echo $P->prevlink; ?>" class="number">上一页</a>
<?php }  if($P->needleftgap){  }  for($page_num=$P->startpage;$page_num<=$P->endpage;$page_num++){  $page_link = $P->firstlink;  if($page_num!=1){  $page_link = ($P->commonlink.Conf::$paging_separate.$page_num.Conf::$suffix).$P->querystr;  }  if($page_num==$P->pagenum){ ?><a class="number current"><?php echo $page_num; ?></a><?php }else{ ?><a href="<?php echo $page_link; ?>" class="number"><span><?php echo $page_num; ?></span></a><?php }  }  if($P->needrightgap){  }  if (!$P->islast){ ?>
<a href="<?php echo $P->nextlink; ?>" class="number">下一页</a>
<?php }  if (!$P->islast){ ?>
<a href="<?php echo $P->lastlink; ?>" class="number">末页</a>
<?php } ?>
<?php if ($P->linknum < $P->totalpage){ ?>
<input type="text" id="YYUC_PAGE_jumptxt" style="width:25px;" value="<?php echo $P->pagenum; ?>">
<a href="javascript:;" class="number" onclick="page_jump('#Form1')">跳转</a>
<?php }  } ?>
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
			
			
			</div>
		</div>
	</div>
</div>

</BODY>
</html>
<script type="text/javascript">
function stop(id,o){
	if(id=='a'){
		var ids = [];
		$('td').find('input[type="checkbox"]:checked').each(function(){
			ids[ids.length] = $(this).val();
		});
		if(ids.length == 0){
			tusi('请选择！');
			return false;
		}
		if(confirm('确定停用这些代理吗？')){
			ajax('yuangongliebiao-stop.html',{ id:ids.join(',')},function(data){
				if(data == 'ok'){
					tusi('操作成功');
					setTimeout(function(){
						goto(location.href);
					},500);
				}
			});	
		}
	}
}

function tochongzhi(id){
	pophtml('<iframe id="jd_iframe" src="yuangongchongzhi-'+id+'.html" scrolling="auto" frameborder="0" width="370" height="185"></iframe>',410,265);
}
</script>