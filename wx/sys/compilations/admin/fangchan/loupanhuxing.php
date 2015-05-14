<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<base target="mainFrame" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/album.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
	<div id="main">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<div class="span8">
								<h3><i class="icon-table"></i>户型管理</h3>
							</div>
						</div>
						<div class="box-content">
							<div class="row-fluid">
								<div class="span8 control-group">
									<a href="loupanhuxingadd.html" class="btn"><i class="icon-plus"></i>添加户型</a>
									<div class="btn-group datatabletool">
										<a class="btn" title="删除" onclick="dellbs('a',this)"><i class="icon-trash"></i></a>
									</div>
								</div>
								<div class="span4" style="text-align:right;">
									<form action="" class="form-horizontal form-validate">
									<?php echo $tj->text('huxing','class="input-large" placeholder="请输入户型名称" '); ?>
										
										<button class="btn">查询</button>
									</form>
								</div>
							</div>
							<div class="row-fluid dataTables_wrapper">
								<table id="listTable" class="table table-bordered table-hover dataTable">
									<thead>
										<tr>
											<th class='with-checkbox'>
											    <input type="checkbox" class="check_all"  onclick="selallck(this);">
											</th>
											<th class="span3">户型名称</th>
											<th class="span3">所属子楼盘</th>
											<th class="span1">显示顺序</th>
											<th class="span3">操作</th>
										</tr>
									</thead>
									<?php if ($res){ ?>
									<?php $__i=0; foreach ((array)$res as $r ) { $__i++; ?>
									  <tr>
									     <td><input type="checkbox" value="<?php echo $r->id; ?>"/></td>
									     <td><?php echo $r->name; ?></td>
									     <td><?php echo $loupan_arr[$r->zid]; ?></td>
									     <td><?php echo $r->sort; ?></td>
									    
									     <td>
									       <a href="loupanhuxingquanjing-<?php echo '1'; ?>-<?php echo $r->id; ?>.html" class="btn">管理全景图</a>
									       
									     	<a href="loupanhuxingadd-<?php echo $r->id; ?>.html" class="btn"><i class="icon-edit"></i></a>
										   <a href="javascript:;" class="btn" onclick="dellbs(<?php echo $r->id; ?>,this)"><i class="icon-remove"></i></a>
									     </td>
									  </tr>
									  <?php } ?>
									  <?php }else{ ?>
																			<tr>
											<td colspan="6" style="text-align:center; height:30px;">没有任何户型信息</td>
										</tr>
										<?php } ?>
																	</table>
					    	</div>
					    	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br/><br/><br/></body>


<script>
function selallck(o){
	if($(o).prop('checked')){
		$('td').find('input[type="checkbox"]').prop('checked',true);
	}else{
		$('td').find('input[type="checkbox"]').prop('checked',false);
	}
}

function dellbs(id,o){
	if(id=='a'){
		var ids = [];
		$('td').find('input[type="checkbox"]:checked').each(function(){
			ids[ids.length] = $(this).val();
		});
		if(ids.length == 0){
			alert('请选择要删除的选项');
	        return false;
		}else{
		if(confirm('确定删除这些信息吗？')){
			ajax('loupanhuxing-del.html',{ id:ids.join(',')},function(){
				$('td').find('input[type="checkbox"]:checked').each(function(){
					$(this).parent().parent().remove();
				});
			});	
		}
	}
	}else{
		if(confirm('确定删除此条信息吗？')){
			ajax('loupanhuxing-del.html',{ id:id},function(){
				$(o).parent().parent().remove();
			});	
		}
	}	
}
</script>	<script>
		window.document.onkeydown = function(e) {
			if ('' == document.activeElement.id) {
				var e=e || event;
　 				var currKey=e.keyCode || e.which || e.charCode;
				if (8 == currKey) {
					return false;
				}
			}
		};
	</script>
</html>