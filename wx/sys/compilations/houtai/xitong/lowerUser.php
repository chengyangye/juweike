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
		<h3>非代理账户域名纠正</h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="default-tab" >
            <!-- 
			<div class="top_dep">
                <a href="xinzengyuangong.html" class="add_dep">新增用户 </a>
			</div>
			 -->
            
			
			<div class="searchgrid">
			<form method="get" action="<?php echo $target; ?>" name="Form" id="Form1">
			<label>用户名</label><?php echo $tj->text('un'); ?>
			<label>用户级别</label>
			<?php echo $tj->select($user_level,'level_id'); ?>
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
			<th style="padding-left:5px;border-left:1px solid #C1DAD7">序号</th><th>用户名</th><th>开户时间</th><th>用户级别</th><th>到期时间</th><th>手机</th><th>所属员工(代理)</th><th>网络销售</th><th>续费级别</th><th>到期时间</th><th>绑定状态</th><th>操作</th>
					</tr>
				</thead>
				<tbody>
				<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
					<tr class="yzval" val="<?php echo $r->reval; ?>" valid="<?php echo $r->id; ?>">
					<td style='padding-left:5px;'>
					<input type='checkbox' name='checkbox' value='<?php echo $r->id; ?>' /><?php echo $r->id; ?>
					</td>
					<td>
					<a href="xinzengzuizhong-<?php echo $r->id; ?>.html"><?php echo $r->un; ?></a>
					</td>
					<td>
					<?php echo date('Y-m-d',strtotime($r->rtime)); ?>
					</td>
					<td>
					<?php echo $user_level[$r->level_id]; ?>
					</td>
					<td>
					<?php if (trim($r->mendtime)!=''){ ?>
					<?php echo date('Y-m-d',strtotime($r->mendtime)); ?>
					<?php } ?>
					</td>					
					<td>
					<?php echo $r->telephone; ?>
					</td>
					<td>
					<?php echo $agency_arr[$r->agid]; ?>
					</td>
					<td>
					<?php echo $agency_arr[$r->ygid]; ?>
					</td>				
					<td>
					<?php echo $user_level[$r->next_level_id]; ?>
					</td>
					<td>
					<?php if (trim($r->next_mendtime)!=''){ ?>
					<?php echo date('Y-m-d',strtotime($r->next_mendtime)); ?>
					<?php } ?>
					</td>
					<td>
					
					<span><?php echo $rval_arr[$r->reval]; ?></span>
					
					</td>
					<td>
					<a href="<?php echo $loginurl; ?>/index.html?uid=<?php echo $r->id; ?>&upwd=<?php echo md5($r->pwd); ?>" target="_blank">登录</a>&nbsp;
					</td>
					</tr>
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
		if(confirm('确定停用这些用户吗？')){
			ajax('zuizhongcaozuo-stop.html',{ id:ids.join(',')},function(data){
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
		if(confirm('确定启用这些用户吗？')){
			ajax('zuizhongcaozuo-start.html',{ id:ids.join(',')},function(data){
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
		if(confirm('确定删除这些用户吗？')){
			ajax('zuizhongcaozuo-del.html',{ id:ids.join(',')},function(data){
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
	pophtml('<iframe id="jd_iframe" src="autoyz-'+id+'.html" scrolling="auto" frameborder="0" width="670" height="385"></iframe>',710,465,null,0,1);
}

$(function(){
	var cftr = $('tr.yzval').filter('[val="0"]');
	if($.trim($('.pagination').find('a.current').text())=='1'){
		if(confirm('确定开始批量执行吗?')){
			if(cftr.size()>0){
				var tcftr = cftr.eq(0);
				tochongzhi(tcftr.attr('valid'));
			}else{				
				//alert($('.pagination').find('a.current').next('a').size());
				goto($('.pagination').find('a.current').next('a').attr('href'));
			}
		}
	}else{
		if(cftr.size()>0){
			var tcftr = cftr.eq(0);
			tochongzhi(tcftr.attr('valid'));
		}else{
			
			//alert($('.pagination').find('a.current').next('a').size());
			goto($('.pagination').find('a.current').next('a').attr('href'));
		}
	}
	
});
</script>