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
                            <div class="span7">
                                <h3><i class="icon-table"></i>商家订房订单信息 </h3>
                            </div>
                            <div class="span5">
                                <form action="record-<?php echo $h->id; ?>.html" method="get" class="form-horizontal">
                                    <?php echo $m->date('form2','class="input-small-z datepick" placeholder="入住日期"'); ?>
                                    <?php echo $m->select($state_arr,'state','',false); ?>                                    
                                    <button class="btn" type="submit">查询</button>
                                </form>
                            </div>
                        </div>

                        <div class="box-content">

                            <div class="row-fluid">
                                <div class="span12 control-group">
                                    <div class="alert">
                                        本次收集订单总数：<span class="redamount"><?php echo $ddzs; ?></span>个　　预订成功：<span class="redamount"><?php echo $ddcg; ?></span>个　　预订失败：<span class="redamount"><?php echo $ddsb; ?></span>个　　等待客服回电订单：<span class="redamount"><?php echo $dddd; ?></span>个
                                    </div>
                                </div>

                            </div>
                            <!-- 
                            <div class="row-fluid">
                                <div class="span12 control-group">
                                    <a class=" &lt;a class=" btn"="" href="/Wehotel/HotelOrderExport/hid/1036"><i class="icon-download-alt"></i>导出订单</a>  
                                </div>

                            </div>
                             -->
                            <div class="row-fluid dataTables_wrapper">
                                <form action="/plus/formajax.php" method="post" class="form-horizontal">
                                    <table id="listTable" class="table table-bordered table-hover  dataTable">
                                        <thead>
                                            <tr>
                                                <th>序号</th>
                                                <?php $__i=0; foreach ((array)$ddxjson as $d) { $__i++; ?>
                                                <th><?php echo $d->name; ?></th>
                                                <?php } ?>
                                                <th>订单状态</th>
                                                <th>用户是<br>否删除</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $ind=0; foreach ((array)$ddres as $dd) { $ind++; ?>
                                        <tr>
                                        <td><?php echo $ind; ?></td>
                                        <?php $__i=0; foreach ((array)$ddxjson as $d) { $__i++; ?>
                                        <?php $val = 'form'.($__i-1); ?>
                                        <td>
                                        <?php echo $dd->$val; ?>
                                        </td>
                                        <?php } ?>
                                        <td>
                                        <?php echo $state_arr[$dd->state]; ?>
                                        </td>
                                        <td>
                                        <?php echo $sf_arr[$dd->isudel]; ?>
                                        </td>
                                        <td>
                                        <?php if ($dd->state=='0'){ ?>
                                        <a href="javascript:;" onclick="con_hotel(<?php echo $dd->id; ?>,this);">标记确认</a>
                                        <a href="javascript:;" onclick="rej_hotel(<?php echo $dd->id; ?>,this);">标记拒绝</a>
                                        <a href="javascript:;" onclick="del_hotel(<?php echo $dd->id; ?>,this);">删除</a>
                                        <?php } ?>
                                        <?php if ($dd->state=='1'){ ?>
                                        <a href="javascript:;" onclick="use_hotel(<?php echo $dd->id; ?>,this);">标记使用</a>
                                        <a href="javascript:;" onclick="del_hotel(<?php echo $dd->id; ?>,this);">删除</a>
                                        <?php } ?>
                                        <?php if ($dd->state=='2'){ ?>
                                        <a href="javascript:;" onclick="del_hotel(<?php echo $dd->id; ?>,this);">删除</a>
                                        <?php } ?>
                                        </td>
                                        </tr>
                                        <?php } ?>
										</tbody>
                                    </table>
<div class="dataTables_paginate paging_full_numbers"><span>
<?php if(isset($P)&&($P->totalpage>1||$P->showifone)){  if (!$P->isfirst){ ?>
<a href="<?php echo $P->firstlink; ?>">第一页</a>
<?php }  if (!$P->isfirst){ ?>
<a href="<?php echo $P->prevlink; ?>">上一页</a>
<?php }  if($P->needleftgap){  }  for($page_num=$P->startpage;$page_num<=$P->endpage;$page_num++){  $page_link = $P->firstlink;  if($page_num!=1){  $page_link = ($P->commonlink.Conf::$paging_separate.$page_num.Conf::$suffix).$P->querystr;  }  if($page_num==$P->pagenum){ ?><a class="paginate_active"><?php echo $page_num; ?></a><?php }else{ ?><a href="<?php echo $page_link; ?>"><?php echo $page_num; ?></a><?php }  }  if($P->needrightgap){  }  if (!$P->islast){ ?>
<a href="<?php echo $P->nextlink; ?>">下一页</a>
<?php }  if (!$P->islast){ ?>
<a href="<?php echo $P->lastlink; ?>">末页</a>
<?php }  } ?>
</span></div>
                                </form>
                                <script>
                                   
                                </script>
                                                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<script type="text/javascript">
	function use_hotel(id,o){
		if(confirm('确定标记使用此条记录吗？')){
			ajax('record-bj.html',{ id:id,s:3},function(m){
				tusi('标记成功');
				setTimeout(function(){
					goto(location.href);
				},1000);				
			});
		}
	}
	function con_hotel(id,o){
		if(confirm('确定标记确认此条记录吗？')){
			ajax('record-bj.html',{ id:id,s:1},function(m){
				tusi('标记成功');
				setTimeout(function(){
					goto(location.href);
				},1000);				
			});
		}
	}
	function rej_hotel(id,o){
		if(confirm('确定标记拒绝此条记录吗？')){
			ajax('record-bj.html',{ id:id,s:2},function(m){
				tusi('标记成功');
				setTimeout(function(){
					goto(location.href);
				},1000);				
			});
		}
	}
	function del_hotel(id,o){
		if(confirm('确定删除此条记录吗？')){
			ajax('record-bj.html',{ id:id,s:'del'},function(m){
				tusi('删除成功');
				setTimeout(function(){
					goto(location.href);
				},1000);				
			});
		}
	}

</script>
<br/><br/><br/></body>
</html>