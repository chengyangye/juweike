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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
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
                                <h3><i class="icon-edit"></i>编辑菜单</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>
                        <div class="box-content">
                            <form action="http://0.hgjhms.duapp.com/1.php" method="post" class="form-horizontal form-validate" novalidate="novalidate" id="lbsForm"><input type="hidden" value="tokenvalue" name="token"/>
                                <div class="control-group">
                                    <label for="title" class="control-label">菜单名称：</label>
                                    <div class="controls">
                                     <input type="text"   value="" name="name" class="input-xlarge" required="required"/><span class="maroon">*</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="picurl" class="control-label">菜单图标：</label>
                                    <div class="controls" id="twfmpicarea">
									<input type="text"   value="" name="img" class="input-xlarge" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="typename" class="control-label">单击操作：</label>
                                    <div class="controls" style="vertical-align: middle;padding-top: 5px;">
                                    <input type="radio" name="erji" value="0" checked="checked" style="margin-top:-2px;" onclick="document.getElementById('erji1').style.display='none';document.getElementById('erji2').style.display='';"/>打开链接&nbsp;&nbsp;
									<input type="radio" name="erji" value="1"  style="margin-top:-2px;" onclick="document.getElementById('erji1').style.display='';document.getElementById('erji2').style.display='none';"/>显示二级菜单                                                                       
                                    </div>
                                </div>
								<div id="erji2" class="control-group" >
								<label for="typename" class="control-label">链接地址：</label>
								<input type="text"   value="" name="url" class="input-xlarge" />
                                </div>
                                <div id="erji1" class="control-group" style="display: none;">
                                    <label for="endinfo" class="control-label">二级菜单：</label>
                                    <div class="controls">
                                        <div class="span12"><a href="javascript:addsjtp('sjtptr')" class="btn" id="add_menu"><i class="icon-plus"></i>添加二级菜单</a></div>
                                        <table id="listTable" class="table table-bordered table-hover dataTable">
    <thead>
        <tr><th>菜单名称</th><th>菜单图标</th><th>图片跳转地址以http://开头</th><th>操作</th></tr>
    </thead>
    <tbody id="sjtptr">
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name1" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img1"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url1"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name2" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img2"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url2"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name3" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img3"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url3"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name4" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img4"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url4"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name5" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img5"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url5"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name6" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img6"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url6"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name7" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img7"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url7"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name8" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img8"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url8"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name9" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img9"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url9"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
        <tr style="display: none;">
			<td>
            <input type="text"   value="" name="name10" class="input-small"/><span class="maroon">*</span>
            </td>
            <td>
            <input type="text"   value="" name="img10"  class="input-small"/>            </td>
            <td>
            <input type="text"   value="" name="url10"  class="input-small"/>            </td>
            <td>
                <a href="javascript:void(0);" onclick="delsjtp(this,'sjtptr')" class="del">删除 </a>
            </td>
        </tr>
    </tbody>
</table>
        </div>
                                </div>
                                <div class="form-actions">
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                    <button type="button" class="btn" onclick="window.history.go(-1)">取消</button>
                                </div>                            
                        </div></form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
	function addsjtp(id){
		if($('#'+id).find('tr:hidden').size()>0){
			var htr = $('#'+id).find('tr:hidden').eq(0);
			htr.show();
		}else{
			alert('最多允许添加'+$('#'+id).find('tr').size()+'个二级菜单。')
		}
		
	}
	function delsjtp(o,id){
		$(o).parent().parent().hide();
		var trv = $('#'+id).find('tr:visible');
		var vlen = trv.length;
		var sjy = [];
		trv.each(function(){
			var ssjy = [];
			$(this).find('td').each(function(){
				$(this).find('input,select,img').each(function(){
					ssjy[ssjy.length] = { src:$(this).attr('src'),val:$(this).val()};
				});
			});
			sjy[sjy.length] = ssjy;
		});
		var rtr = $('#'+id).find('tr');
		rtr.hide();
		
		for(var i=0;i<vlen;i++){
			var thetr = rtr.eq(i);
			var thedata = sjy[i];
			var inj = 0;
			thetr.find('td').each(function(){			
				$(this).find('input,select,img').each(function(j){				
					var sthedata = thedata[inj];
					$(this).attr('src',sthedata.src);
					$(this).val(sthedata.val);
					inj++;
				});
			});
			thetr.show();
		}
		$('#'+id).find('tr:hidden').find('input[type="text"]').val('');
	}
	</script>
<br/><br/><br/>
</body>
</html>