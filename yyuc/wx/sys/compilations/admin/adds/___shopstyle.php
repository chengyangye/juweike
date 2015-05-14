
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
<link rel="stylesheet" type="text/css" href="/css/wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/inside.css" media="all" />


<link rel="stylesheet" type="text/css" href="/css/wm/region.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/victor-client.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/wm/chosen.css" media="all" />

<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/js/dialogbox.js"></script>
<script type="text/javascript" src="/js/region.js?df"></script>


<title>聚微客—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>  
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="theme-blue" data-theme="theme-blue">
	<div id="main">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="box">
				<div class="box-title">
					<div class="span10">																												
						<h3><i class="icon-edit"></i>商城设置 </h3>
					</div>
				</div>
				<div class="box-content">
					<div class="row-fluid">
					</div>
					<div class="tab-content">
						<form action="" id="paysetForm" method="post" class="form-horizontal form-validate" >
							<?php echo $set->hidden('id'); ?> 						
							<div class="control-group">
								<label class="control-label">显示设置：</label>
								<div class="controls margin-bm10">
									<?php echo $set->radio($radio,'s_style'); ?>

								</div>
							</div>
							<div class="control-group">
								<label class="control-label">皮肤设置：</label>
								
								<div class="controls">
                                        <ul class="color-picker unstyled">
                                          <li title="默认" class="color-picker__item color-picker__item_bg1 color-picker-item_current" data-color="1"></li>
                                                                                        
                                        <li title="商城红" class="color-picker__item color-picker__item_bg2" data-color="2"></li>
                                                                                        
                                        <li title="橙色" class="color-picker__item color-picker__item_bg3" data-color="3"></li>
                                                                                    </ul>

										<?php echo $set->hidden('s_show'); ?>                               </div>
							</div>
							<div class="form-actions">
								<button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
        $(function () {
            var o = new RegionPicker(regionConfig);
            $("li.color-picker__item").click(function () {
                var $this = $(this), v = $this.data("color"), c = $("#ai9me_shop_styles_show");
                if (v) {
                    c.val(v);
                    $this.addClass("color-picker-item_current").siblings().removeClass("color-picker-item_current")
                }
            })  
        })
    </script>
</body>
</html>