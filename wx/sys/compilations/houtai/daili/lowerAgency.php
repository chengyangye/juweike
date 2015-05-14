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
		<h3>下级代理管理</h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="default-tab" >
            
			<!-- <div class="top_dep">
                <a href="xinzengdaili.html" class="add_dep">新增代理 </a>
			</div> -->
			<div class="searchgrid">
			<form method="get" action="<?php echo $target; ?>" name="Form" id="Form1">
			<label>姓名</label><?php echo $tj->text('name'); ?>
			<label>帐号</label><?php echo $tj->text('un'); ?>
			<?php if ($mu->isyg || $mu->isadmin){ ?>
			<label>类型</label><?php echo $tj->select($dl_arr,'level'); ?>
			<?php } ?>
			<label>状态</label>
			<?php echo $tj->select($zt_arr,'isstop'); ?>			
			<input type="submit" class="button" value="查询" />	
			<button type="button" class="button"  onclick="stop('a',this)" id="del">停用</button>	
			<button type="button" class="button"  onclick="tostart('a',this)" id="del">启用</button>
			<button type="button" class="button"  onclick="todel('a',this)" id="del">删除</button>
			</form>

		</div>
		<div class="tab-content default-tab" >
			<table>
				<thead>
					<tr>
			<th style="padding-left:5px;border-left:1px solid #C1DAD7">序号</th><th>账号</th><th>名称</th><th>类型</th><th>开户时间</th><th>余额(￥)</th><th>手机</th><th>QQ</th><th>所属员工(代理)</th><th>状态</th><th>操作</th>
					</tr>
				</thead>
				<tbody>
				<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
					<TR>
					<td style='padding-left:5px;'>
					<input type='checkbox' name='checkbox' value='<?php echo $r->id; ?>' /><?php echo $r->id; ?>
					</td>
					<td>
					<a href="xinzengdaili-<?php echo $r->id; ?>.html"><?php echo $r->un; ?></a>
					</td>
					<td>
					<?php echo $r->name; ?>
					</td>
					<td>
					<?php echo $dl_arr[$r->level]; ?>
					</td>
					<td>
					<?php echo $r->rtime; ?>
					</td>
					<td>
					<?php echo $r->yue; ?>
					</td>
					<td>
					<?php echo $r->telephone; ?>
					</td>
					<td>
					<?php echo $r->qq; ?>
					</td>
					<td>
					<?php echo $agency_arr[$r->pid]; ?>
					</td>
					<td>
					<span <?php if ($r->isstop=='1'){ ?>style="color:red;"<?php } ?> ><?php echo $zt_arr[$r->isstop]; ?></span>
					</td>
					<td>
					<a href="javascript:tochongzhi(<?php echo $r->id; ?>);">充值</a>&nbsp;|&nbsp;					
					<a href="lowerAgency-<?php echo $r->id; ?>-<?php echo md5($r->id.$mu->pwd); ?>.html">下级代理</a>&nbsp;|&nbsp;
					<a href="/houtai/yonghu/lowerUser-<?php echo $r->id; ?>-<?php echo md5($r->id.$mu->pwd); ?>.html">下级用户</a>&nbsp;|&nbsp;
					<a href="xinzengdaili-<?php echo $r->id; ?>.html">编辑【查看】</a>
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
			ajax('dailicaozuo-stop.html',{ id:ids.join(',')},function(data){
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
function tostart(id,o){
	if(id=='a'){
		var ids = [];
		$('td').find('input[type="checkbox"]:checked').each(function(){
			ids[ids.length] = $(this).val();
		});
		if(ids.length == 0){
			tusi('请选择！');
			return false;
		}
		if(confirm('确定启用这些代理吗？')){
			ajax('dailicaozuo-start.html',{ id:ids.join(',')},function(data){
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
function todel(id,o){
	if(id=='a'){
		var ids = [];
		$('td').find('input[type="checkbox"]:checked').each(function(){
			ids[ids.length] = $(this).val();
		});
		if(ids.length == 0){
			tusi('请选择！');
			return false;
		}
		if(confirm('确定删除这些代理吗？')){
			ajax('dailicaozuo-del.html',{ id:ids.join(',')},function(data){
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
	pophtml('<iframe id="jd_iframe" src="dailichongzhi-'+id+'.html" scrolling="auto" frameborder="0" width="370" height="185"></iframe>',410,265,null,0,1);
}
</script>