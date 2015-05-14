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
<script src="http://api.map.baidu.com/api?v=1.5&ak=1b0ace7dde0245f796844a06fb112734"></script>
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
<div id="main">
	
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">

                    <div class="box">
                        <div class="box-title">
                            <div class="span8">
                                <h3><i class="icon-table"></i>自定义文本回复信息</h3>
                            </div>
                            <div class="span4">
                                <!-- <div class="form-horizontal">
                                    <input type="text" id="keyword-input" class="input-small-z" placeholder="请输入关键词">
                                    <select name="type" class="input-small" id="select_type">
                                        <option selected="selected" value="0">全部</option>
                                        <option value="1">完全匹配</option>
                                        <option value="2">包含匹配</option>
                                    </select>
                                    <button class="btn" id="btn_search">查询</button>
									<input type="hidden" name="aid" id ="aid" value="42538">

                                </div> -->
                            </div>
                        </div>

                        <div class="box-content nozypadding">
                            <div class="row-fluid">
                                <div class="span8 control-group">
                                    <div class="span3">
                                        <a class="btn" href="keywordaddd.html"><i class="icon-plus"></i>添加</a>
                                        <a class="btn" href="javascript:location.reload();"><i class="icon-refresh"></i></a>
                                        <a class="btn" id="del" attr="BatchDel" title="删除"><i class="icon-trash"></i></a>
                                    </div>

                                    <div class="span9 datatabletool">

                                        <div class="btn-group">
                                            <a class="btn" style="display:none;" title="批量导入文本"><i class="icon-upload-alt"></i></a>
                                            <a class="btn" style="display:none;" title="批量导出本页文本结果"><i class="icon-download-alt"></i></a>
                                            <a class="btn" attr="BatchDel" style="display:none;" title="删除"><i class="icon-trash"></i></a>
                                        </div>
                                       
                                    </div>

                                </div>


                            </div>

                            <div class="row-fluid dataTables_wrapper">
                                    <table id="listTable" class="table table-hover table-nomargin table-bordered usertable dataTable">
                                        <thead>
                                            <tr>
                                                <th class='with-checkbox'>
                                                    <input type="checkbox" class="check_all" onclick="selallck(this);"></th>
                                                <th>关键词</th>
                                                <th>回答</th>
                                                <th>匹配类型</th>
                                                <th>时间</th>
                                                <th>操作</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                        <?php $__i=0; foreach ((array)$rs as $item) { $__i++; ?>
															<tr>
                                                <td class="with-checkbox">
                                                  <input type="checkbox"  value="<?php echo $item->id; ?>">
                                                </td>
                                                <td><?php echo $item->keyWord; ?></td>
                                                <td width="350"><?php if ($item->replyType == 1){  echo substr($item->replyContent,0,100);  }else{  echo getTitleById($item->resId);  } ?></td>
                                                <td><span class="label label-satgreen"><?php if ($item->matchingType == 1){ ?>模糊<?php }else{ ?>完全<?php } ?></span></td>
                                                <td><?php echo substr($item->ctime,0,10); ?></td>
                                                <td class='hidden-480'>
                                                    <a href="keywordaddd-<?php echo $item->id; ?>.html" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                                    <a href="javascript:void(0);" class="btn" rel="tooltip" title="Delete" attr="deltext_42538_55181" onclick="if(confirm('确定要删除吗？')){ goto('keyword-<?php echo del; ?>-<?php echo $item->id; ?>.html');}"><i class="icon-remove"></i></a>
                                                </td>
                                            </tr>
										<?php } ?>	
                                        </tbody>

                                    </table>

		<div class="dataTables_paginate paging_full_numbers"><span> <?php if(isset($P)&&($P->totalpage>1||$P->showifone)){  if (!$P->isfirst){ ?>
<a href="<?php echo $P->firstlink; ?>">第一页</a>
<?php }  if (!$P->isfirst){ ?>
<a href="<?php echo $P->prevlink; ?>">上一页</a>
<?php }  if($P->needleftgap){  }  for($page_num=$P->startpage;$page_num<=$P->endpage;$page_num++){  $page_link = $P->firstlink;  if($page_num!=1){  $page_link = ($P->commonlink.Conf::$paging_separate.$page_num.Conf::$suffix).$P->querystr;  }  if($page_num==$P->pagenum){ ?><a class="paginate_active"><?php echo $page_num; ?></a><?php }else{ ?><a href="<?php echo $page_link; ?>"><?php echo $page_num; ?></a><?php }  }  if($P->needrightgap){  }  if (!$P->islast){ ?>
<a href="<?php echo $P->nextlink; ?>">下一页</a>
<?php }  if (!$P->islast){ ?>
<a href="<?php echo $P->lastlink; ?>">末页</a>
<?php }  } ?>      </span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
	<script>
	//批量删除关键字 
	 $("#del").click(function() {
		 var checkeds = $("table tbody input[type='checkbox']:checked");
		 if(checkeds.length) {
			 if(confirm("您确定要删除所选的关键词(将同时删除回复)?")) {
				 $(this).attr("disabled", true);
				 var idsArray = [];
				 checkeds.each(function() {
					idsArray.push($(this).val());
				 });
				 if (idsArray.length > 0) {
					 var qids = idsArray.join(','); 
					 $.get("keyword.html", { type:'dels', ids:qids}, function (data){
						 if(data == 1){
							 tusi('删除成功！');
						 }else{
							 tusi('操作异常！');
						 }
						 location.reload(true);
					 },'text');
				 }
			 }
		 } else {
			 alert("请先选中需要删除的关键词");
		 }
	 });
	</script></body>
</html>