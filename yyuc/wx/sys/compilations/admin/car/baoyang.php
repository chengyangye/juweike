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
                                <h3><i class="icon-table"></i>预约管理 </h3>
                            </div>
                            <div class="span4">
                                <!-- <form action="" method="get" class="form-horizontal">
                                    <input type="text" id="keyword-input" name="keywords" class="input-small-z" placeholder="请输入关键词" data-rule-required="true" />
                                    <button class="btn">查询</button>
                                </form> -->
                            </div>
                        </div>

                        <div class="box-content">

                            <div class="row-fluid">
                                <div class="span12 control-group">
                                    <div class="span4">
                                        <a class="btn" href="baoyangadd.html"><i class="icon-plus"></i>新增预约</a>
                                        <a class="btn" href="javascript:location.reload()"><i class="icon-refresh"></i>刷新</a>
                                    </div>
                                    <!-- <div class="span8 datatabletool">
                                        <a class="btn" title="删除" onclick="batdel(33260);"><i class="icon-trash"></i>删除</a>
                                    </div> -->
                                </div>

                            </div>

                            <div class="row-fluid dataTables_wrapper">
                                <form action="/plus/formajax.php" method="post" class="form-horizontal">
                                    <table id="listTable" class="table table-bordered table-hover  dataTable">
                                        <thead>
                                            <tr>
                                               <!--  <th class='with-checkbox'>
                                                    <input type="checkbox" class="check_all" /></th> -->
                                                <th>预约名称</th>
                                                <th>关键字</th>
                                                <th>预约电话</th>
                                                <th>限定量</th>
                                                <th>总订单限制</th>
                                                <th>开始时间/结束时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
                                        	<tr>
                                                <!-- <td class="with-checkbox">
                                                    <input type="checkbox" name="check" value="680"/></td> -->
                                                <td><?php echo $r->tit; ?></td>
												<td><?php echo $r->gjz; ?></td>
												<td><?php echo $r->yuyue_tel; ?></td>
												<td></td>
												<td></td>
												<td></td>
                                               <td > 
                                                    <a href="" class="btn" title="订单管理"><i class="icon-cog"></i>订单管理</a>
                                                    <a class="btn" href="baoyangadd-<?php echo $r->id; ?>.html" title="编辑"><i class="icon-edit"></i>编辑</a> 
                                                    <a class="btn" href="javascript:void(0)" onclick="del_reserve(680,33260);" title="删除"><i class="icon-remove"></i>删除</a></td>
                                            </tr>
                                            <?php } ?>
																															                                        </tbody>
                                    </table>
                                </form>
                                <div class="dataTables_paginate paging_full_numbers"><span>       </span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	
</body>
</html>