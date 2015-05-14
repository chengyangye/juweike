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
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/uploadify.css" media="all" />
<script type="text/javascript" src="/res/js/jquery_ui_custom.js"></script>
<script type="text/javascript">
function imgSelectorInit() {
    $('#imgSelectorChoice').delegate('img', 'click', function () {
        var el = $(this);
        if (!el.hasClass('selected'))
            buildSelectedImg(el);
    }).delegate('img', 'mouseenter', function () {
        $(this).addClass('hovered');
    }).delegate('img', 'mouseleave', function () {
        $(this).removeClass('hovered');
    });
}
function ipostSortInit() {
    $('.ipost-list').sortable({
        items: '> .post',
        containment: 'parent',
        appendTo: 'parent',
        tolerance: 'pointer',
        axis: 'y',
        placeholder: 'holder',
        forceHelperSize: true,
        forcePlaceholderSize: true,
        opacity: 0.8,
        cursor: 'ns-resize'
    });
}
$(function(){
	imgSelectorInit();
	ipostSortInit();
});
</script>

<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
	<div id="main">
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <h3><i class="icon-picture"></i>上传图片<small>拖拽图片可排序(图片大小不超过300k,50张上限)</small></h3>
                            <a class="btn pull-right" href="Javascript:window.history.go(-1)">返回</a>
                        </div>
                        <div class="box-content">
                                <div id="upimg_main">
                                    <div id="file_upload" class="uploadify"><button id="file_upload-button" class="btn pl_add btn-primary" onclick="setbj1();"><span class="uploadify-button-text"><i class="icon-plus-sign"></i> 添加图片</span></button>   <button id="bsubmit" type="button" onclick="savedata();" class="btn">保存</button></div><div id="file_upload-queue" class="uploadify-queue"></div>
                                    <ul class="ipost-list ui-sortable" id="fileList">
                                    <?php $__i=0; foreach ((array)$pres as $r) { $__i++; ?>
										<li class="post file" style="position: relative; opacity: 1; z-index: 0;">
										<a class="thumb" href="<?php echo $r->pic; ?>" target="_blank" title="点击查看原图，拖动排序">
										<img style="width: 130px;" src="<?php echo $r->pic; ?>"/>
										</a>
										<dl class="form data">
												<dt>标题</dt>
												<dd class="title">
													<input type="text" class="text tittext" name="tit" value="<?php echo htmlspecialchars(($r->title),ENT_QUOTES); ?>">
												</dd>
												<dt>描述</dt>
												<dd class="description">
													<textarea name="des" class="destext"><?php echo htmlspecialchars(($r->desc),ENT_QUOTES); ?></textarea>
												</dd>
											</dl>
											<ul class="action">
												<li class="delete"><a class="ir" href="javascript:;" onclick="delthis(this)">删除</a></li>
												<li class="sort"><a class="ir">排序</a></li>
											</ul></li>
									<?php } ?>
									</ul>
                                    <div id="file_upload_queue" class="uploadifyQueue">
                                    </div>
                                  <!--  <button id="bsubmit" type="button" onclick="savedata();" class="btn">保存</button> --></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>    
<textarea id="ltarea" style="display: none;">
    <li class="post file" style="position: relative; opacity: 1; z-index: 0;">
										<a class="thumb" href="" target="_blank" title="点击查看原图，拖动排序" >
										<img style="width: 130px;"/>
										</a>
										<dl class="form data">
												<dt>标题</dt>
												<dd class="title">
													<input type="text" class="text tittext" name="tit" value="">
												</dd>
												<dt>描述</dt>
												<dd class="description">
													<textarea name="des" class="destext"></textarea>
												</dd>
											</dl>
											<ul class="action">
												<li class="delete"><a class="ir">删除</a></li>
												<li class="sort"><a class="ir">排序</a></li>
											</ul></li>
</textarea>
<script type="text/javascript">
function setbj1(){
	window.piccbk = function(m,n){
		var newl = $('#ltarea').val();
		$('#fileList').append(newl);
		newl = $('#fileList').children('li:last');
		newl.find('.thumb').attr('href',m).find('img').attr('src',m);
		n = n.split('.');
		newl.find('.tittext').val(n[0]);
		
		window.piccbk = null;
	}
	window.curpic = null;
	openpicset();	
} 
function openpicset(){
	pophtml('<iframe src="/admin/businessModule/wspicif.html" style="width:630px;height:470px;border:none;background-color: #dfdfdf;" width="630px" height="475px"></iframe>',670,510,true);
}

function savedata(){
	var data = [];
	$('#fileList').children('li').each(function(i){
		var mm = {};
		mm.pic = $(this).find('.thumb').attr('href');
		mm.title = $.trim($(this).find('.tittext').val());
		mm.desc = $.trim($(this).find('.destext').val());
		mm.sort = i;
		data[data.length] = mm;
	});
	ajaxjson(location.href,data,function(m){
		tusi('保存成功');
		setTimeout(function(){
			goto('list.html');
		},1000);
	});

}

function delthis(o){
	if(confirm('确定删除此条图片吗？')){
		$(o).parent().parent().parent().remove();
	}
}
</script>
<br/><br/><br/></body>
</html>