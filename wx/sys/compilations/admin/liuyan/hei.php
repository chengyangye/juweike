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
<script src="http://api.map.baidu.com/api?v=1.5&ak=1b0ace7dde0245f796844a06fb112734"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
<div id="main">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">

                <div class="box">

                    <div class="box-title">
                        <div class="span10">
                            <h3><i class="icon-edit"></i>黑名单列表 </h3>
                        </div>
                        <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                    </div>
                    <div class="box-content">

                        <div class="row-fluid">

                        </div>
                        <div class="row-fluid dataTables_wrapper">


                            <table id="listTable" class="table table-bordered   table-hover  dataTable">
                                <thead>
                                    <tr>
                                        <th>用户Openid：微信号独一无二的数字身份识别代码</th>
                                        <th>拉黑时间</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
                                  <tr>
                                        <td><?php echo $r->wxid; ?></td>
                                        <td><?php echo $r->ctime; ?></td>
                                        <td>
                                            <a class="btn" title="取消拉黑" href="javascript:tohei(<?php echo $r->id; ?>);;"><i class="icon-mail-reply "></i></a>
                                        </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                            </table>
                            <div class="dataTables_paginate paging_full_numbers"><span><?php if(isset($P)&&($P->totalpage>1||$P->showifone)){  if (!$P->isfirst){ ?>
<a href="<?php echo $P->firstlink; ?>">第一页</a>
<?php }  if (!$P->isfirst){ ?>
<a href="<?php echo $P->prevlink; ?>">上一页</a>
<?php }  if($P->needleftgap){  }  for($page_num=$P->startpage;$page_num<=$P->endpage;$page_num++){  $page_link = $P->firstlink;  if($page_num!=1){  $page_link = ($P->commonlink.Conf::$paging_separate.$page_num.Conf::$suffix).$P->querystr;  }  if($page_num==$P->pagenum){ ?><a class="paginate_active"><?php echo $page_num; ?></a><?php }else{ ?><a href="<?php echo $page_link; ?>"><?php echo $page_num; ?></a><?php }  }  if($P->needrightgap){  }  if (!$P->islast){ ?>
<a href="<?php echo $P->nextlink; ?>">下一页</a>
<?php }  if (!$P->islast){ ?>
<a href="<?php echo $P->lastlink; ?>">末页</a>
<?php }  } ?></span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
	function tohei(ids){		
		var sel = [];
		if(!ids){
			$('.check_one').each(function(){
				if($(this).prop('checked')){
					sel[sel.length] = $(this).val();
				}
			});
			ids = sel.join(',');
		}		
		if($.trim(ids)!='' && confirm('确定取消拉黑此用户吗？')){
			ajax('hei-back.html',{ ids:ids},function(m){
				tusi('操作完成');
				setTimeout('window.location.href=location.href',1000);
			});
		}
	}
</script>
<script type="text/javascript">

</script>
<br/><br/><br/>
</body>
</html>