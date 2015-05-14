<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<title>微团购</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

</head>
<body>
	<div class="main-title">
		<h3>我的微团购</h3>
	</div>
	<div class="alert alert-info">
	  	<p><span class="bold">注意：</span>微信团购，随着移动互联网的迅速发展，横空出世的微信，作为一个强关系的社交平台，也吸引了众多商家的关注，纷纷尝试着利用微信来为自己的产品和服务进行宣传推广，微信团购也随之应运而生。
</p>
	</div>
	
	


<div class="pagination">
<!--   <ul>

    <li class="disabled"><span>上一页</span></li>
  </ul> -->
  
</div>
	<div class="tb-toolbar">
		
		<a href="microGroupBuyAdd.html" class="btn btn-small btn-primary">新增</a>
		<button class="btn btn-small" onclick="dellbs('a',this)" id="del">删除</button>
	</div>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width:10px;"><input type="checkbox" onclick="selallck(this);"></th>
					<th>团购名称</th>
					<th>关键字</th>
					<th>时间</th>
					<th>团购状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>			 
			      <tr>
						<td>
						<input type="checkbox"  value="<?php echo $r->id; ?>">
						</td>
						<td><?php echo $r->name; ?></td>
						<td><?php echo $r->gjz; ?></td>
						<td>
						<?php echo $r->kssj; ?>-<?php echo $r->jssj; ?>
						</td>
						<td><?php echo ztpd($r); ?></td>
						<td>
						<span>
						[
						<a href="microGroupBuyAdd-<?php echo $r->id; ?>.html">修改</a>
						]
						</span>
						<span>
						[
						<a href="javascript:;" onclick="dellbs(<?php echo $r->id; ?>,this)">删除</a>
						]
						</span>
						<span>
						 [
						<a href="microGroupBuyList-<?php echo $r->id; ?>.html">数据监测</a>
						]
						</span> 
						</td>
				  </tr>
			<?php } ?>
			</tbody>
		</table>

	


<div class="pagination">
  <!-- <ul>

    <li class="disabled"><span>上一页</span></li>
  </ul>
 -->  
</div>

<script type="text/javascript">
$(function() {
	$("#gotonext").click(function(){
		window.parent.$('.menu-diaoyan').trigger('click');
	});
});

function dellbs(id,o){
	if(id=='a'){
		if(confirm('确定删除这些团购信息吗？')){
			var ids = [];
			$('td').find('input[type="checkbox"]:checked').each(function(){
				ids[ids.length] = $(this).val();
			});
			ajax('microGroupBuy-del.html',{ id:ids.join(',')},function(){
				$('td').find('input[type="checkbox"]:checked').each(function(){
					$(this).parent().parent().remove();
				});
			});	
		}
	}else{
		if(confirm('确定删除此条团购信息吗？')){
			ajax('microGroupBuy-del.html',{ id:id},function(){
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

<div id="gotonext">
	<img src="<?php echo $IMG; ?>/admin/v3/diaoyan.png" ></img>
</div>


<br/><br/><br/></body></html>