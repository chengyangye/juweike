<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<title>会员卡</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>


</head>
<body>
	<div class="main-title">
		<h3>我的会员卡</h3>
	</div>
	<div class="alert alert-info">
	  	<p><span class="bold">注意：</span>微信会员卡其实相当于手机会员卡使用，商家通过微信公众平台账号后台设置二维码内容，让用户扫描二维码成为会员。</p>
	</div>
	
	


<div class="pagination">
  <!-- <ul>

    <li class="disabled"><span>上一页</span></li>
  </ul> -->
  
</div>
	<div class="tb-toolbar">
		
		<a href="microMemberCardAdd.html" class="btn btn-small btn-primary">新增</a>
		<button class="btn btn-small" onclick="dellbs('a',this)" id="del">删除</button>
	</div>
	<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width:10px;"><input type="checkbox" onclick="selallck(this);"></th>
					<th>会员卡名称</th>
					<th>关键字</th>
					<th>时间</th>
					<th>会员卡状态</th>
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
						<a href="microMemberCardAdd-<?php echo $r->id; ?>.html">修改</a>
						]
						</span>
						<span>
						[
						<a href="javascript:;" onclick="dellbs(<?php echo $r->id; ?>,this)">删除</a>
						]
						</span>
						<span>
					    [
						<a href="microMemberCardList-<?php echo $r->id; ?>.html">数据监测</a>
						]
						</span> 
						</td>
				  </tr>
			<?php } ?>
			</tbody>
		</table>

	


<div class="pagination">
<!--   <ul>

    <li class="disabled"><span>上一页</span></li>
  </ul> -->
  
</div>

<script type="text/javascript">
$(function() {
	$("#gotonext").click(function(){
		window.parent.$('.menu-tuangou').trigger('click');
	});
});

function dellbs(id,o){
	if(id=='a'){
		if(confirm('确定删除这些会员卡信息吗？')){
			var ids = [];
			$('td').find('input[type="checkbox"]:checked').each(function(){
				ids[ids.length] = $(this).val();
			});
			ajax('microMemberCard-del.html',{ id:ids.join(',')},function(){
				$('td').find('input[type="checkbox"]:checked').each(function(){
					$(this).parent().parent().remove();
				});
			});	
		}
	}else{
		if(confirm('确定删除此条会员卡信息吗？')){
			ajax('microMemberCard-del.html',{ id:id},function(){
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
	<img src="<?php echo $IMG; ?>/admin/v3/tuangou.png" ></img>
</div>

<br/><br/><br/></body></html>