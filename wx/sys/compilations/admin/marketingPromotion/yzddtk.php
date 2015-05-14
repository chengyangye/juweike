<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<title>我的活动</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

</head>
<body>
	<div class="main-title">
		<h3>我的一战到底活动</h3>
	</div>
	<div class="alert alert-info">
	  	<p><span class="bold">注意：</span>当前推广活动（优惠券、刮刮卡、大转盘）。如活动配额满请删除已结束活动</p>
	  	<p style="display: none;">普通用户每次新建活动需要消耗相应的积分，优惠券为300积分，刮刮卡为500积分，大转盘为500积分</p>
	</div>
	
	


<div class="pagination">
  <ul>

    <li class="disabled"><span>上一页</span></li>
  </ul>
  
</div>
	<div class="tb-toolbar">
		
		<a href="yzddtkadd.html" class="btn btn-small btn-primary">新增</a>
		<button class="btn btn-small" onclick="dellbs('a',this)" id="del">删除</button>
	</div>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width:10px;"><input type="checkbox" onclick="selallck(this);"></th>
					<th>题目</th>
					<th>正确答案</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
			<?php $tzda = 'd'.$r->zd; ?>
			      <tr>
						<td>
						<input type="checkbox"  value="<?php echo $r->id; ?>">
						</td>
						<td><?php echo $r->tm; ?></td>
						<td><?php echo $r->$tzda; ?></td>
						<td>
						<span>
						[
						<a href="yzddtkadd-<?php echo $r->id; ?>.html">修改</a>
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

	


<div class="pagination">
  <ul>

    <li class="disabled"><span>上一页</span></li>
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
			ajax('yzddtk-del.html',{ id:ids.join(',')},function(){
				$('td').find('input[type="checkbox"]:checked').each(function(){
					$(this).parent().parent().remove();
				});
			});	
		}
	}else{
		if(confirm('确定删除此条活动信息吗？')){
			ajax('yzddtk-del.html',{ id:id},function(){
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
<br/><br/><br/></body></html>