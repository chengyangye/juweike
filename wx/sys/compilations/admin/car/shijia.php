<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="聚微客、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" name="Keywords">
	<meta content="聚微客，国内领先的微信公众智能服务平台，聚微客八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" name="Description">
<!-- yechengyang del -->
<!--
<link rel="stylesheet" type="text/css" href="http://stc.weimob.com/css/bootstrap_min.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="http://stc.weimob.com/css/bootstr
		ap_responsive_min.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="http://stc.weimob.com/css/style.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="http://stc.weimob.com/css/todc_bootstrap_button.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="http://stc.weimob.com/css/themes.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="http://stc.weimob.com/css/inside.css?2013-12-18-1" media="all" />
<script type="text/javascript" src="http://stc.weimob.com/src/jQuery.js?2013-12-18-1"></script>
<script type="text/javascript" src="http://stc.weimob.com/src/bootstrap_min.js?2013-12-18-1"></script>
<script type="text/javascript" src="http://stc.weimob.com/src/plugins/form/jquery_form_min.js?2013-12-18-1"></script>
<script type="text/javascript" src="http://stc.weimob.com/src/inside.js?2013-12-18-1"></script>
-->
<title>聚微客（Weimob）—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>

<!-- yechengyang del -->
<!--    <link rel="shortcut icon" href="http://stc.weimob.com/img/favicon.ico" />   -->
    <!--[if lte IE 9]><script src="http://stc.weimob.com/src/watermark.js"></script><![endif]-->
	<!--[if IE 7]><link href="http://stc.weimob.com/css/font_awesome_ie7.css" rel="stylesheet" /><![endif]-->
</head>
<body>
	
<body>
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
                                <form action="" method="get" class="form-horizontal">
                                    <input type="text" id="keyword-input" name="keywords" class="input-small-z" placeholder="请输入关键词" data-rule-required="true" />
                                    <button class="btn">查询</button>
                                </form>
                            </div>
                        </div>

                        <div class="box-content">

                            <div class="row-fluid">
                                <div class="span12 control-group">
                                    <div class="span4">
                                        <a class="btn" href="/Wecar/AddCarReserve/aid/33260/tp/2"><i class="icon-plus"></i>新增预约</a>
                                        <a class="btn" href="javascript:location.reload()"><i class="icon-refresh"></i>刷新</a>
                                    </div>
                                    <div class="span8 datatabletool">
                                        <a class="btn" title="删除" onclick="batdel(33260);"><i class="icon-trash"></i>删除</a>
                                    </div>
                                </div>

                            </div>

                            <div class="row-fluid dataTables_wrapper">
                                <form action="/plus/formajax.php" method="post" class="form-horizontal">
                                    <table id="listTable" class="table table-bordered table-hover  dataTable">
                                        <thead>
                                            <tr>
                                                <th class='with-checkbox'>
                                                    <input type="checkbox" class="check_all" /></th>
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
                                        											                                            <tr>
                                                <td class="with-checkbox">
                                                    <input type="checkbox" name="check" value="681"/></td>
                                                <td>222</td>
												<td>222</td>
												<td>18769935093</td>
												<td>时间限制</td>
												<td></td>
												<td></td>
                                               <td > 
                                                    <a href="/Wecar/CarreserveManage/rid/681/tp/2" class="btn" title="订单管理"><i class="icon-cog"></i>订单管理</a>
                                                    <a class="btn" href="/Wecar/AddCarReserve/rid/681/aid/33260/tp/2" title="编辑"><i class="icon-edit"></i>编辑</a> 
                                                    <a class="btn" href="javascript:void(0)" onclick="del_reserve(681,33260);" title="删除"><i class="icon-remove"></i>删除</a></td>
                                            </tr>
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
	<script type="text/javascript">
		function del_reserve(rid,aid){
			if(confirm('您确定要删除吗?')){
				$.ajax("/Wecar/DeleteCarReserve", <?php echo dataType: 'json', data: {'rid':rid,'aid':aid; ?>}).done(function (d) {
					if(0 == d.errno){
						G.ui.tips.err("操作成功！");
						window.location.reload();
					}else{
						G.ui.tips.err("操作失败！");
					}
				}).fail(function () {
					G.ui.tips.err("错误订单！");
				});
			}
			
		}

		function batdel(aid){
			var del_ids = '';
			$("input[name='check']:checked").each(function(){
				del_ids += ','+$(this).val();
			});
			if(confirm('您确定要删除吗?')){
				$.ajax("/Wecar/DeleteCarReserve", <?php echo dataType: 'json', data: {'rid':del_ids,'aid':aid; ?>}).done(function (d) {
					if(0 == d.errno){
						G.ui.tips.err("操作成功！");
						window.location.reload();
					}else{
						G.ui.tips.err("操作失败！");
					}
				}).fail(function () {
					G.ui.tips.err("错误订单！");
				});
			}
		}

    </script>
</body>
</body>
</html>
