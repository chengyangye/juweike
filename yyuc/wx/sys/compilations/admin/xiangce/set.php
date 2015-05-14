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
                            <div class="span12">
                                <h3><i class="icon-cog"></i>微相册设置</h3>
								
                            </div>
                        </div>
                        <div class="box-content">
                            <form action="" method="post" class="form-horizontal form-validate" novalidate="novalidate"><?php echo tk();  echo $set->hidden('id'); ?>
								<input type="hidden" name="aid" value="22423">
								<input type="hidden" name="id" value="1811">
								<input type="hidden" name="type" value="1">
                                <div class="control-group">
                                    <label class="control-label" for="cover">相册头部图片</label>
                                    <div class="controls">
                                        <img class="thumb_img" src="<?php if ($set->headpic == ''){ ?>/res/xiangce/xiangce1.jpg<?php }else{  echo $set->headpic;  } ?>" style="max-height: 70px;">
                                        <?php echo $set->text('headpic','class="hide"'); ?>
                                       <!--  <input class="hide" id="hear_pic_id" type="text" name="head_url" value="http://stc.weimob.com/img/albums_head_url.jpg"> -->
                                        <span class="help-inline">
                                           <button class="btn select_img" type="button"  onclick="setbj()" title="选择景图片" >选择图片</button>
                                            <!-- <button class="btn select_img" type="button">选择图片</button> -->
                                        </span>
										<span class="maroon">*</span>
										<span class="help-inline">请选择尺寸720x150左右的图片,大小不超过300k</span>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label" for="sites">相册展示方式：</label>
                                    <div class="controls">
										 <?php echo $set->radio($show_type,'fs'); ?>    
                                    </div>
                                </div>
                                <!--
                                <div class="control-group">
                                    <label class="control-label">外链地址：</label>
                                    <div class="controls">
                                        <span class="copy_text">
                                        <input type="text" id="data" readonly="readonly" value="<?php echo Conf::$http_path; ?>wx/wxc.html?wid=<?php echo $wid; ?>" /></sapn>
 <button class="btn copy" id="copy_button0" type="button" data-clipboard-text=""  onclick="copy()"><i class="icon-copy"></i>复制</button>

<span class="alert copy-success help-inline alert-success">复制此链接,粘帖到您需要的地方</span></span>
                                    </div>
                                </div>
                                -->
                                <div class="control-group">
                                    <label class="control-label" for="title">
                                        外链地址：</label>
                                    <div class="controls">
                                       <span cp="cp"><?php echo Conf::$http_path; ?>wx/wxc.html?wid=<?php echo $wid; ?></span>
                                    </div>
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
function setbj(){
	window.piccbk = function(m){
		$('.thumb_img').css('backgroundImage','url('+m+')');
		$('.thumb_img').css('backgroundSize','100%, 100%');
		$('.thumb_img').attr('src',m);
		$('#micro_photo_setheadpic').val(m);
		window.piccbk = null;
	}
	window.curpic = null;
	openpicset();	
} 
function openpicset(){
	pophtml('<iframe src="../businessModule/wspicif.html" style="width:630px;height:470px;border:none;background-color: #dfdfdf;" width="630px" height="475px"></iframe>',670,510,true);
}


</script>
<!--
<script type="text/javascript">
    function copy(){   
        clipboardswfdata = $("#url").text();
         window.document.clipboardswf.SetVariable('str', clipboardswfdata);
    //	alert(clipboardswfdata);
			    var clipboardswfdata;
			    clipboardswfdata = document.getElementById('data').value;
			    
			    window.document.clipboardswf.SetVariable('str', clipboardswfdata);
			
			          
			
			   // alert('copy success, ' + clipboardswfdata);
		
    }
</script>
-->
<br/><br/><br/></body>
</html>
