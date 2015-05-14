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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/uploadify.css" media="all" />
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
                            <div class="span10">
                                <h3><i class="icon-edit"></i>添加车型</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>

                        <div class="box-content">
                            <form id="transform" action="" method="post" class="form-horizontal form-validate"><?php echo tk();  echo $m->hidden('id'); ?>
                                <div class="control-group">
                                    <label for="name" class="control-label">车型名称：</label>
                                    <div class="controls">
                                    <?php echo $m->text('name','class="input-medium" required="required"'); ?>
                                        <span class="maroon">*</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="brands" class="control-label">品牌/车系：</label>
                                    <div class="controls">
                                     <?php echo $m->mulselect(array('micro_car_pinpai','micro_car_chexi'),array('ppid','pid'),'',"wid='".$wid."' order by sort desc"); ?>
                                     
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="model_year" class="control-label">年款：</label>
                                    <div class="controls">
                                        <?php echo $m->select($nk,'nk'); ?>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="sort" class="control-label">显示顺序：</label>
                                    <div class="controls">
                                    <?php echo $m->text('sort','class="input-mini" '); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="prices" class="control-label">指导价：</label>
                                    <div class="controls">
                                    <?php echo $m->text('zdj','class="input-mini" '); ?>
                                        <span class="help-inline">(万元)</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="prices" class="control-label">经销商报价：</label>
                                    <div class="controls">
                                     <?php echo $m->text('bj','class="input-medium" '); ?>
                                        <span class="help-inline">(万元) 如:19.24-23.52</span>
                                    </div>
                                </div>
                                <div class="control-group">
									<label for="prices" class="control-label">图片：</label>
									<?php echo $m->hidden('pic'); ?>
									<div class="controls">
										<div id="upimg_main">
											<div id="file_upload" class="uploadify"><button  id="file_upload-button" class="btn pl_add btn-primary" onclick="addmorepic();return false;"><i class="icon-plus-sign"></i>添加图片</button><span class="maroon">*</span><span class="help-inline">图片大小640*320，图片大小不超过300K</span></div><div id="file_upload-queue" class="uploadify-queue"></div>
											<ul class="ipost-list ui-sortable" id="fileList">
											</ul><div id="file_upload_queue" class="uploadifyQueue">
											</div>
										</div>
									<span for="imagestexts[40829][]" class="help-block error valid" style=""></span><span for="imagestexts[67544][]" class="help-block error valid" style=""></span><span for="imagestexts[99277][]" class="help-block error valid" style=""></span></div>
								</div>
								<div class="control-group">
                                    <label for="prices" class="control-label">排量：</label>
                                    <div class="controls">
                                    <?php echo $m->text('pl','class="input-mini"'); ?>
                                        <span class="help-inline">(L)</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="dwgs" class="control-label">挡位个数：</label>
                                    <div class="controls">
                                    <?php echo $m->text('dws','class="input-mini"'); ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="bsx" class="control-label" >变速箱：</label>
                                    <div class="controls">
                                        <?php echo $m->select($bsx_arr,'bsx'); ?>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                    <button type="button" class="btn" onclick="window.history.go(-1)">取消</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<script type="text/template" id="picdemo">
<li class="imgbox">
<a class="item_close" href="javascript:void(0)" onclick="$(this).parent().remove();" title="删除">
</a>
<span class="item_box">
    <img src="" style="max-height:100%;">
</span>
<span class="item_input">
    <textarea class="bewrite" cols="3" rows="4" style="resize: none" placeholder="图片描述..." onfocus="$(this).parent().addClass('on');" onblur="$(this).parent().removeClass('on');">
    </textarea>
    <i class="shadow hc">
    </i>
</span>
</li>
</script>

<script type="text/javascript" src="<?php echo $JS; ?>/comm.js"></script>
<script>		
		//上传图片
		function addmorepic(){
			window.piccbk = function(m,n){
				addoneing(m,n);
				window.piccbk = null;
			}
			window.curpic = null;
			openpicset();	
		}
		function addoneing(m,n){
			n = n.split(',');
			n = n[0];
			$('#fileList').append($('#picdemo').html());
			var li = $('#fileList').children('li:last');
			li.find('img').attr('src',m);
			li.find('textarea').val(n);
		}
		$(function(){
			$('#transform').submit(function(){
				var pics = [];
				$('#fileList').find('li').each(function(){
					var msg = {};
					var img = $(this).find('img');
					msg.src = img.attr('src');
					msg.txt = $.trim($(this).find('textarea').val());
					var w = img.width();
					var h = img.height();
					w = parseInt(450*w/h);
					msg.w = w;
					msg.h = 450;
					pics[pics.length] = msg;
				});
				$('#micro_car_chexingpic').val($.toJSON(pics));
			});
			var val = $('#micro_car_chexingpic').val();
			if($.trim(val)==''){
				val = '[]';
			}
			var data = $.evalJSON(val);
			for(var i=0;i<data.length;i++){
				var msg = data[i];
				addoneing(msg.src,msg.txt);
			}
		});
	</script>
</body>

</html>