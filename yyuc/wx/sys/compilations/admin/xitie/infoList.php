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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/uploadify_t.css" media="all" />
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
                            <h3><i class="icon-table"></i>微喜帖信息列表</h3>
                        </div>
                        <div class="span2"><a class="btn" href="javascript:window.history.back()">返回</a></div>
                    </div>

                    <div class="box-content">

                        <div class="row-fluid">
                            <ul class="nav nav-tabs nav-tabs-google">
                                <li class="active">
                                    <a href="javascript:;">赴宴名单</a>
                                </li>
                                <li><a href="infoZhufu-<?php echo $set_id; ?>.html">收到祝福</a></li>
                            </ul>
                        </div>

                        <div class="row-fluid dataTables_wrapper">

                            <table id="listTable" class="table table-bordered table-hover dataTable">

                                <thead>
                                    <tr> 
                                        <th>姓名</th>
                                        <th>电话</th>
                                        <th>赴宴人数</th>
                                      
                                    </tr>
                                </thead>
                                <?php if ($res){ ?>
									<?php $__i=0; foreach ((array)$res as $r ) { $__i++; ?>
									  <tr>
									  <!--    <td><input type="checkbox" value="<?php echo $r->id; ?>"/></td> -->
									     <td><?php echo $r->name; ?></td>
									     <td><?php echo $r->tel; ?></td>
									     <td><?php echo $r->rs; ?></td>
									    
									    
									  </tr>
									  <?php } ?>
									  <?php }else{ ?>
																
										<tr>
											<td colspan="4" style="text-align:center; height:30px;">没有任何信息</td>
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
</body>
</html>