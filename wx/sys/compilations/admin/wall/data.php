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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_switch.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
    <div id="main">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
<!--                      
                        <div class="box-title">
                            <div class="span12">
                                <h3><i class="icon-cog"></i>数据管理</h3>
                            </div>
                        </div>
                      
                        <div class="box-content">
                            <form action="" method="post" class="form-horizontal form-validate">
							 <h4><span class="maroon">上墙关键词:</span></h4>
							<br><br>
							<?php foreach((array)$s as $b) { ?>
                                <div class="control-group">
                                    <label class="control-label" for="keyword"><?php echo $b->name; ?>:</label>
                                    <div class="controls">
									<input type="text"   value="<?php echo $b->count; ?>" name="<?php echo $b->id; ?>" id="<?php echo $b->id; ?>" class="input-xlarge"/>
                                          <span class="maroon">*</span>
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
							<?php } ?>	
                                <div class="form-actions">
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                </div>
                            </form>
                        </div>
						-->
                        <div class="box-title">
                            <div class="span12">
                                <h3><i class="icon-cog"></i>清空数据</h3>
                            </div>
                        </div>
						<div class="box-content">
						        <div class="form-actions">
									<label class="maroon" for="keyword">清空上墙数据:</label>
                                    <button id="bsubmit2" type="button" onclick="return confirm('确实要清除所有上墙数据？'); data-loading-text="提交中..." class="btn btn-primary">清空上墙数据</button>
                                </div>
              <!--
                                <div class="form-actions">
									<label class="maroon" for="keyword">清空投票数据:</label>
                                    <button id="bsubmit1" type="button" onclick="return confirm('确实要清除所有投票数据？'); data-loading-text="提交中..." class="btn btn-primary">清空投票数据</button>
                                </div>
              -->                  
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
	<script type="text/javascript">
$(function(){
	$('#bsubmit1').click(function(){
	alert("清除投票数据成功");
		ajax('data.html',{ rel:"tp"},function(m){});
	});
	$('#bsubmit2').click(function(){
	alert("清除上墙数据成功");
		ajax('data.html',{ rel:"sq"},function(m){});
	});
});
</script>
</html>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>