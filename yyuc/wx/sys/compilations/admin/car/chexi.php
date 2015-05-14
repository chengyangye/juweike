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
                                <h3><i class="icon-table"></i>车系管理</h3>
                            </div>

                        </div>

                        <div class="box-content">

                            <div class="row-fluid">

                                <div class="span12 control-group">
                                    <a href="chexiadd.html" class="btn" id="add_menu"><i class="icon-plus"></i>添加车系</a>
                                    <div class="btn-group datatabletool">
                                        <a class="btn" title="删除" onclick="dellbs('chexi','a',this);"><i class="icon-trash"></i></a>
                                    </div>
                                </div>


                            </div>

                            <div class="row-fluid dataTables_wrapper">

                                <table id="listTable" class="table table-bordered table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th class='with-checkbox'>
                                                <input type="checkbox" class="check_all" onclick="selallck(this);"/></th>
                                            <th>名称</th>
                                            <th>图片</th>
                                            <th>品牌</th>
                                            <th>显示顺序</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
									 <?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>           
									    <tr>
                                        <td class="with-checkbox">
                                            <input type="checkbox" name="check" value="<?php echo $r->id; ?>" /></td>
                                        <td><?php echo $r->name; ?></td>
                                        <td>
                                            <img type="img" src="<?php echo $r->pic; ?>" style="max-height: 50px;" /></td>
                                        <td><?php echo $pinpai_arr[$r->pid]; ?></td>
                                        <td><?php echo $r->sort; ?></td>
                                        <td class="input-medium">
                                            <a class="btn" href="chexiadd-<?php echo $r->id; ?>.html" title="编辑"><i class="icon-edit"></i></a>
                                            <a class="btn" href="javascript:void(0);" title="删除" onclick="dellbs('chexi',<?php echo $r->id; ?>,this);"><i class="icon-remove"></i></a></td>
                                    </tr>
                                    <?php } ?>
									       </table>
                                <div class="dataTables_paginate paging_full_numbers"><span>       </span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	
</body>
<script src="<?php echo $JS; ?>comm.js"></script> 
</html>