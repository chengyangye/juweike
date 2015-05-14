<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<title>微调研</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

</head>
<body>
	<div class="main-title">
		<h3>我的微调研</h3>
	</div>
	<div class="alert alert-info">
	  	<p><span class="bold">注意：</span>微调研的目的是获得系统客观的收集信息研究数据，为决策做准备。。</p>
	</div>
	
	


<div class="pagination">
 <!--  <ul>

    <li class="disabled"><span>上一页</span></li>
  </ul>
 -->  
</div>
	<div class="tb-toolbar">
		
		<a href="microSurveyAdd.html" class="btn btn-small btn-primary">新增</a>
		<button class="btn btn-small" onclick="dellbs('a',this)" id="del">删除</button>
	</div>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width:10px;"><input type="checkbox" onclick="selallck(this);"></th>
					<th>微调研名称</th>
					<th>关键字</th>
					<th>时间</th>
					<th>微调研状态</th>
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
						<a href="microSurveyAdd-<?php echo $r->id; ?>.html">修改</a>
						]
						</span>
						<span>
						[
						<a href="javascript:;" onclick="dellbs(<?php echo $r->id; ?>,this)">删除</a>
						]
						</span>
						<span>
						[
						<a href="microSurveyTk-<?php echo $r->id; ?>.html">题库管理</a>
						]
						</span>
						<span>
						[
						<a href="microSurveyList-<?php echo $r->id; ?>.html">数据监测</a>
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
  </ul> -->
  
</div>

<script type="text/javascript">
$(function() {
	$("#gotonext").click(function(){
		window.parent.$('.menu-toupiao').trigger('click');
	});
});

function dellbs(id,o){
	if(id=='a'){
		if(confirm('确定删除这些信息吗？')){
			var ids = [];
			$('td').find('input[type="checkbox"]:checked').each(function(){
				ids[ids.length] = $(this).val();
			});
			ajax('microSurvey-del.html',{ id:ids.join(',')},function(){
				$('td').find('input[type="checkbox"]:checked').each(function(){
					$(this).parent().parent().remove();
				});
			});	
		}
	}else{
		if(confirm('确定删除此条信息吗？')){
			ajax('microSurvey-del.html',{ id:id},function(){
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

<div id="gotonext" >
	<img src="<?php echo $IMG; ?>/admin/v3/toupiao.png" ></img>
</div>

<br/><br/><br/></body></html>