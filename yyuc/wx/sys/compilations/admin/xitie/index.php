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
                            <h3><i class="icon-table"></i>喜帖管理</h3>
                        </div>
                        <div class="span4">
                                <form action=""  class="form-horizontal">
                                   <?php echo $tj->text('gjz','class="input-large" placeholder="请输入关键字" '); ?>
								   <button class="btn">查询</button>
                                </form>
                        </div>
                    </div>

                    <div class="box-content">

                        <div class="row-fluid">

                            <div class="span12 control-group">
                                <a href="xitieAdd.html" class="btn" id="add_menu"><i class="icon-plus"></i>添加喜帖</a>
                                <div class="btn-group datatabletool">
                                    <a class="btn" attr="BatchDel" title="删除" onclick="dellbs('index','a',this)"><i class="icon-trash"></i></a>
                                </div>
                            </div>


                        </div>

                        <div class="row-fluid dataTables_wrapper">

                            <table id="listTable" class="table table-bordered table-hover dataTable">

                                <thead>
                                    <tr>
                                        <th class='with-checkbox'>
                                            <input type="checkbox" class="check_all"   onclick="selallck(this)"/></th>
                                        <th>标题</th>
                                        <th>关键字</th>
                                        <th>新郎/新娘</th>
                                        <th>密码</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <?php if ($res){ ?>
									<?php $__i=0; foreach ((array)$res as $r ) { $__i++; ?>
									  <tr>
									    <td><input type="checkbox" value="<?php echo $r->id; ?>"/></td> 
									     <td><?php echo $r->name; ?></td>
									     <td><?php echo $r->gjz; ?></td>
									    
									     <td><?php echo $r->xl_name; ?>/<?php echo $r->xn_name; ?></td>
									      <td><?php echo $r->pwd; ?></td>
									     <td>
									       <a href="infoList-<?php echo $r->id; ?>.html" class="btn" rel="tooltip" title="查看"><i class="icon-search"></i></a>
									      
									     	<a href="xitieAdd-<?php echo $r->id; ?>.html" class="btn"><i class="icon-edit"></i></a>
										   <a href="javascript:;" class="btn" onclick="dellbs('index',<?php echo $r->id; ?>,this)"><i class="icon-remove"></i></a>
									     </td>
									  </tr>
									  <?php } ?>
									  <?php }else{ ?>
																
										<tr>
											<td colspan="4" style="text-align:center; height:30px;">没有任何喜帖盘信息</td>
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
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
<script>

</script></body>
</html>