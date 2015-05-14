<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>地理位置定位</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<style type="text/css">
	table td {
		min-width:50px;
		overflow:hidden;text-overflow:ellipsis;
	}
	
	
</style>

<script>

$(function() {
	$("#gotonext").click(function(){
		window.parent.$('.menu-youhui').trigger('click');
	});
});


function dellbs(id,o){
	if(id=='a'){
		if(confirm('确定删除这些lbs信息吗？')){
			var ids = [];
			$('td').find('input[type="checkbox"]:checked').each(function(){
				ids[ids.length] = $(this).val();
			});
			ajax('lbs-del.html',{ id:ids.join(',')},function(){
				$('td').find('input[type="checkbox"]:checked').each(function(){
					$(this).parent().parent().remove();
				});
			});	
		}
	}else{
		if(confirm('确定删除此条lbs信息吗？')){
			ajax('lbs-del.html',{ id:id},function(){
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
<title>关键词管理</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
<body>
	<div id="questionsContainer">
		<h3>商家位置设置</h3>
		<div class="tb-toolbar">
			<button class="btn btn-small btn-primary" onclick="goto('lbsadd.html')" id="add">新增</button>
			<button class="btn btn-small" onclick="dellbs('a',this)" id="del">删除</button>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width:10px;"><input type="checkbox" onclick="selallck(this);"></th>
					<th>商家名称</th>
					<th>商家类别</th>
					<th>商家地址</th>
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
						<td botid="19979">
						<?php echo $lb_arr[$r->l_ind1]; ?>-<?php echo $lb_arr[$r->l_ind2]; ?>
						</td>
						<td>
						<?php echo $cn_arr[$r->l_sheng];  echo $cn_arr[$r->l_shi];  echo $cn_arr[$r->l_xianqu]; ?>	
						<?php echo $r->address; ?>
						</td>
						<td>
						<span>
						[
						<a href="lbsadd-<?php echo $r->id; ?>.html">修改</a>
						]
						</span>
						<span>
						[
						<a href="javascript:;" onclick="dellbs(<?php echo $r->id; ?>,this)">删除</a>
						]
						</span>
						</td>
				  </tr>
			<?php } ?>
			</tbody>
		</table>
		<!-- <div class="tb-toolbar">
			<button class="btn btn-small btn-primary" onclick="goto('lbsadd.html')" id="add">新增</button>
			<button class="btn btn-small" onclick="dellbs('a',this)" id="del">删除</button>
		</div> -->
	</div>
	
<div id="gotonext" >
	<img src="<?php echo $IMG; ?>/admin/v3/youhuiquan.png" ></img>
</div>
<br/><br/><br/></body></html>