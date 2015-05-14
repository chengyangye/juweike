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
                            <h3><i class="icon-edit"></i>留言管理 <small>拖黑可以禁止用户留言!</small></h3>
                        </div>
                        <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                    </div>
                    <div class="box-content">

                        <div class="row-fluid">
                            <div class="span12 control-group">
                                <div class="span2">

                                    <a class="btn" href="javascript:location.reload()"><i class="icon-refresh"></i></a>
                                </div>
                                <div class="pull-left datatabletool">
                                    <a class="btn" attr="Batchsh" title="通过审核 " onclick="setval()"><i class="icon-ok"></i>通过审核</a>
                                    <a class="btn" attr="BatchDel" title="删除" onclick="todel()"><i class="icon-trash"></i>删除</a>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid dataTables_wrapper">


                            <table id="listTable" class="table table-bordered   table-hover  dataTable">
                                <thead>
                                    <tr>
                                        <th class="with-checkbox">
                                            <input type="checkbox" class="check_all"></th>
                                        <th>用户名</th>
                                        <th>用户Openid：微信号独一无二的数字身份识别代码</th>
                                        <th>留言内容</th>
                                        <th>时间</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
                                  <tr>
                                        <td class="with-checkbox">
                                            <input type="checkbox" class="check_one" name="check" value="<?php echo $r->id; ?>"></td>
                                        <td><?php echo $r->nc; ?></td>
                                        <td><?php echo $r->wxid; ?></td>
                                        <td title="998"><?php echo $r->msg; ?></td>
                                        <td><?php echo $r->ctime; ?></td>
                                        <td><?php echo $zt_arr[$r->isval]; ?></td>
                                        <td>
                                            <a class="btn" title="拉黑" href="javascript:tohei(<?php echo $r->id; ?>);;"><i class="icon-minus-sign"></i></a>
                                            <a class="btn" title="删除" href="javascript:todel(<?php echo $r->id; ?>);"><i class="icon-remove"></i></a></td>

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
	//图片设置
	function setpic(imgid){
		window.piccbk = function(m){
			$('#'+imgid).find('img').attr('src',m);
			$('#'+imgid).find('input[type="hidden"]').val(m);
			window.piccbk = null;
		}
		window.curpic = null;
		openpicset();	
	} 
	function openpicset(){
		pophtml('<iframe src="../businessModule/wspicif.html" style="width:630px;height:470px;border:none;background-color: #dfdfdf;" width="630px" height="475px"></iframe>',670,510,true);
	}
	$(function(){
		$('.check_all').click(function(){
			if($(this).prop('checked')){
				$('.check_one').prop('checked',true);
			}else{
				$('.check_one').prop('checked',false);
			}
		});
	});
	
	function setval(){
		var sel = [];
		$('.check_one').each(function(){
			if($(this).prop('checked')){
				sel[sel.length] = $(this).val();
			}
		});
		if(sel.length>0 && confirm('确定通过审核吗？')){
			ajax('mg-val.html',{ ids:sel.join(',')},function(m){
				tusi('操作完成');
				setTimeout('window.location.href=location.href',1000);
			});
		}
	}
	
	function todel(ids){		
		var sel = [];
		if(!ids){
			$('.check_one').each(function(){
				if($(this).prop('checked')){
					sel[sel.length] = $(this).val();
				}
			});
			ids = sel.join(',');
		}		
		if($.trim(ids)!='' && confirm('确定删除吗？')){
			ajax('mg-del.html',{ ids:ids},function(m){
				tusi('操作完成');
				setTimeout('window.location.href=location.href',1000);
			});
		}
	}
	
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
		if($.trim(ids)!='' && confirm('确定拉黑并删除此用户的留言吗？')){
			ajax('mg-hei.html',{ ids:ids},function(m){
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