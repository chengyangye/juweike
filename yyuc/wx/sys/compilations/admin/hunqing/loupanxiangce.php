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
								<h3><i class="icon-table"></i>婚庆相册管理</h3>
							</div>
						</div>
						<div class="box-content">
							<div class="row-fluid">
								<div class="span8 control-group">
									<a href="loupanxiangceadd.html" class="btn"><i class="icon-plus"></i>添加相册</a><span style="color:red;">（注：系统默认为至少添加3个相册）</span>
									<div class="btn-group datatabletool">
										<a class="btn" title="删除" onclick="dellbs('loupanxiangce','a',this)"><i class="icon-trash"></i></a>
									</div>
								</div>
								<div class="span4" style="text-align:right;">
									<form action=""  class="form-horizontal form-validate">
										<?php echo $tj->text('name','class="input-large" placeholder="请输入相册标题" '); ?>
										<button class="btn">查询</button>
									</form>
								</div>
							</div>
							<div class="row-fluid dataTables_wrapper">
								<table id="listTable" class="table table-bordered table-hover dataTable">
									<thead>
										<tr>
											<th class='with-checkbox'>
												<input type="checkbox" class="check_all" onclick="selallck(this)" />
											</th>
											<th class="span3">相册名称</th>
											<th class="span5">描述</th>
											<th class="span2">显示顺序</th>
											<th class="span2">操作</th>
										</tr>
									</thead>
							    	<?php if ($res){ ?>
									<?php $__i=0; foreach ((array)$res as $r ) { $__i++; ?>
									  <tr>
									     <td><input type="checkbox" value="<?php echo $r->id; ?>"/></td>
									     <td><?php echo $r->name; ?></td>
									     <td><?php echo $r->jianjie; ?></td>
									     <td><?php echo $r->sort; ?></td>
									    
									     <td>
									     	<a href="loupanxiangceadd-<?php echo $r->id; ?>.html" class="btn"><i class="icon-edit"></i></a>
										   <a href="javascript:;" class="btn" onclick="dellbs('loupanxiangce',<?php echo $r->id; ?>,this)"><i class="icon-remove"></i></a>
									     </td>
									  </tr>
									  <?php } ?>
									  <?php }else{ ?>
																			<tr>
											<td colspan="6" style="text-align:center; height:30px;">没有任何婚庆相册信息</td>
										</tr>
										<?php } ?>
																	</table>
															</div>
															<?php if(isset($P)&&($P->totalpage>1||$P->showifone)){  if (!$P->isfirst){ ?>
<li class="pagination_first"><a href="<?php echo $P->firstlink; ?>"><span>第一页</span></a></li>
<?php }  if (!$P->isfirst){ ?>
<li class="pagination_prev"><a href="<?php echo $P->prevlink; ?>"><span>上一页</span></a></li>
<?php }  if($P->needleftgap){ ?><li class="page_gap separator"><span>...</span></li><?php }  for($page_num=$P->startpage;$page_num<=$P->endpage;$page_num++){  $page_link = $P->firstlink;  if($page_num!=1){  $page_link = ($P->commonlink.Conf::$paging_separate.$page_num.Conf::$suffix).$P->querystr;  }  if($page_num==$P->pagenum){ ?><li class="pagination_current current"><span><?php echo $page_num; ?></span></li><?php }else{ ?><li class="pagination_common"><a href="<?php echo $page_link; ?>"><span><?php echo $page_num; ?></span></a></li><?php }  }  if($P->needrightgap){ ?><li class="page_gap separator"><span>...</span></li><?php }  if (!$P->islast){ ?>
<li class="pagination_next"><a href="<?php echo $P->nextlink; ?>"><span>下一页</span></a></li>
<?php }  if (!$P->islast){ ?>
<li class="pagination_last"><a href="<?php echo $P->lastlink; ?>"><span>末页</span></a></li>
<?php }  } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br/><br/><br/></body>


<script type="text/javascript" src="<?php echo $JS; ?>/comm.js"></script>
<script>
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