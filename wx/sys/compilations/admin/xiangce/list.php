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
                                <h3><i class="icon-table"></i>相册管理</h3>
                            </div>

                        </div>

                        <div class="box-content nozypadding">

                            <div class="row-fluid">
                                <div class="span12 control-group">
                                    <a class="btn" href="/admin/xiangce/add.html" ><i class="icon-plus"></i>创建相册</a>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <ul class="photo">
                                <?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
								    <li>
                                        <div class="photoimg">
                                            <a title="<?php echo $r->name; ?>" class="cover" href="add-<?php echo $r->id; ?>.html">
                                                <img src="<?php echo $r->headpic; ?>">
                                            </a>
                                            <div class="bd">
                                                <h6><?php echo $r->name; ?></h6>
                                                <p class="sn">有<?php echo $r->num; ?>张照片</p>
                                            </div>
                                            <div class="fr">
                                                <a href="detail-<?php echo $r->id; ?>.html">上传图片</a>　<a href="add-<?php echo $r->id; ?>.html">编辑</a>　<a href="javascript:void(0);" onclick="ajaxdel(<?php echo $r->id; ?>);">删除</a>
                                            </div>
                                        </div>
                                    </li>
                               <?php } ?>
							         
							     </ul>
                            </div>

                            <div class="row-fluid dataTables_wrapper">
								<div class="dataTables_paginate paging_full_numbers"><span>       </span></div>                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<script type="text/javascript">
		function ajaxdel(id){
			if(confirm('您确定要删除吗?')){
				ajax("list-del.html", { id:id} ,function (d) {
					if(d == 1){
						tusi('操作成功');
						setTimeout("window.location.reload()",1000);
						
					}else{
						tusi('删除失败');						
					}
				});
			}
		}

    </script>
<br/><br/><br/></body>
<br/><br/><br/></body>
</html>