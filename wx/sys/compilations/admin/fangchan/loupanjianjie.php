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
							<div class="span12">
								<h3><i class="icon-cog"></i>楼盘简介</h3>
							</div>
						</div>
						<div class="box-content">
							<form action="" method="post" id="lbsForm" class="form-horizontal form-validate" ><?php echo tk();  echo $m->hidden('id'); ?>
								<div class="control-group">
									<label for="title" class="control-label">图文消息标题：</label>
									<div class="controls">
									<?php echo $m->text('name','class="input-xlarge" required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline">触发关键词后返回的图文消息标题</span>
									</div>
								</div>
								<div class="control-group">
									<label for="keyword" class="control-label">图文消息触发关键词：</label>
									<div class="controls">
										<?php echo $m->text('gjz','class="input-xlarge" required="required"'); ?>
										<span class="maroon">*</span>
										<span class="help-inline"></span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">图文消息封面：</label>
									<div class="controls">
										<img class="thumb_img" src="<?php echo $m->pic; ?>" id="pic_pic" style="max-height:100px;" />
										<?php echo $m->hidden('pic'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_pic','micro_estate_setpic');">选择封面</button>
											<span class="help-inline">建议尺寸：宽720像素，高400像素</span>
										</span>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label">楼盘头部图片：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $m->headpic; ?>" id="pic_headpic"  style="max-height:100px;" />
										<?php echo $m->hidden('headpic'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_headpic','micro_estate_setheadpic');">选择图片</button>
											<span class="help-inline">建议尺寸：宽720像素，高350像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">户型头部图片：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $m->apartpic; ?>" id="pic_apartpic" style="max-height:100px;" />
									<?php echo $m->hidden('apartpic'); ?>									
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_apartpic','micro_estate_setapartpic');">选择图片</button>
											<span class="help-inline">建议尺寸：宽720像素，高350像素</span>
										</span>
									</div>
								</div>
								<div class="control-group">
									<label for="suggestId" class="control-label">地图标识：</label>
									<div class="controls">
										<div class="input-append">
										<?php echo $m->text('addr','class="input-xlarge" required="required"'); ?>	
											<button class="btn" type="button" id="positioning">搜索</button>
										</div>
										<span class="maroon">注意：这个只是模糊定位，准确位置请地图上标注！</span>
										<div id="l-map">
											<i class="icon-spinner icon-spin icon-large"></i>地图加载中...
										</div>
										<div id="r-result">
										<?php echo $m->text('jd'); ?>
										<?php echo $m->text('wd'); ?>
										</div>
									</div>
								</div>
								<div class="control-group">
									<label for="estate_desc" class="control-label">楼盘简介：</label>
									<div class="controls">
									<?php echo $m->texteditor('jianjie',1,'600px','100px'); ?>
									</div>
								</div>
								<div class="control-group">
									<label for="object_desc" class="control-label">项目简介：</label>
									<div class="controls">
										<?php echo $m->texteditor('xiangmu',1,'600px','100px'); ?>
									</div>
								</div>
								<div class="control-group">
									<label for="traffic_desc" class="control-label">交通配套：</label>
									<div class="controls">
										<?php echo $m->texteditor('jiaotong',1,'600px','100px'); ?>
									</div>
								</div>								
								<div class="control-group">
									<label for="traffic_desc" class="control-label">楼盘预约：</label>
									<div class="controls">
										<?php echo $m->select($yy_arr,'yyid'); ?>
									</div>
								</div>	
								<div class="control-group">
									<label for="traffic_desc" class="control-label">楼盘新闻：</label>
									<div class="controls">
										<?php echo $m->select($xw_arr,'xwid'); ?>
									</div>
								</div>
								<div class="control-group">
									<label for="traffic_desc" class="control-label">楼盘会员：</label>
									<div class="controls">
										<?php echo $m->select($hy_arr,'hyid'); ?>
									</div>
								</div>
								<div class="control-group">
									<label for="traffic_desc" class="control-label">联系电话：</label>
									<div class="controls">
										<?php echo $m->text('tel'); ?>
									</div>
								</div>
								<div class="control-group">
									<label for="traffic_desc" class="control-label">链接地址：</label>
									<div class="controls">
										<?php echo $linkurl; ?>
									</div>
								</div>
								
								<hr/>
								<div class="control-group">
									<label for="traffic_desc" class="control-label">行业版底部导航设置：</label>
									
								</div>
								<div class="control-group">
									<label for="album_title" class="control-label">简介名称：</label>
									<div class="controls">
									<?php echo $m->text('jjname','class="input-xlarge" required="required"'); ?>							
										<span class="maroon">*</span>
										<span class="help-inline">导航1</span>
									</div>
								</div>
								<div class="control-group">
									<label for="album_title" class="control-label">相册名称：</label>
									<div class="controls">
									<?php echo $m->text('xcname','class="input-xlarge" required="required"'); ?>							
										<span class="maroon">*</span>
										<span class="help-inline">导航2</span>
									</div>
								</div>
								<div class="control-group">
									<label for="album_title" class="control-label">户型名称：</label>
									<div class="controls">
									<?php echo $m->text('hxname','class="input-xlarge" required="required"'); ?>							
										<span class="maroon">*</span>
										<span class="help-inline">导航3</span>
									</div>
								</div>
								<div class="control-group">
									<label for="album_title" class="control-label">印象名称：</label>
									<div class="controls">
									<?php echo $m->text('yxname','class="input-xlarge" required="required"'); ?>							
										<span class="maroon">*</span>
										<span class="help-inline">导航4</span>
									</div>
								</div>
								<div class="control-group">
									<label for="album_title" class="control-label">新闻名称：</label>
									<div class="controls">
									<?php echo $m->text('xwname','class="input-xlarge" required="required"'); ?>							
										<span class="maroon">*</span>
										<span class="help-inline">导航5</span>
									</div>
								</div>
								<div class="control-group">
									<label for="album_title" class="control-label">预约名称：</label>
									<div class="controls">
									<?php echo $m->text('yyname','class="input-xlarge" required="required"'); ?>							
										<span class="maroon">*</span>
										<span class="help-inline">导航6</span>
									</div>
								</div>
								<div class="control-group">
									<label for="album_title" class="control-label">会员名称：</label>
									<div class="controls">
									<?php echo $m->text('hyname','class="input-xlarge" required="required"'); ?>							
										<span class="maroon">*</span>
										<span class="help-inline">导航7</span>
									</div>
								</div>
								<div class="control-group">
									<label for="album_title" class="control-label">联系名称：</label>
									<div class="controls">
									<?php echo $m->text('lxname','class="input-xlarge" required="required"'); ?>							
										<span class="maroon">*</span>
										<span class="help-inline">导航8</span>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" id="bsubmit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br/><br/><br/></body>
	<script type="text/javascript">
	function setpic(imgid,hideid){
		window.piccbk = function(m){
			$('#'+imgid).attr('src',m);
			$('#'+hideid).val(m);
			window.piccbk = null;
		}
		window.curpic = null;
		openpicset();	
	} 
	function openpicset(){
		pophtml('<iframe src="../businessModule/wspicif.html" style="width:630px;height:470px;border:none;background-color: #dfdfdf;" width="630px" height="475px"></iframe>',670,510,true);
	}

	
	
	//是否从未保存过定位信息，如果从未保存过，并且有填地址信息，那么进入页面后自动定位
	var located = true;
	//定位坐标
	var destPoint = new BMap.Point($('#micro_estate_setjd').val(),$('#micro_estate_setwd').val());
	$(function(){		
		/**开始处理百度地图**/
		var map = new BMap.Map("l-map");
		map.centerAndZoom(new BMap.Point(destPoint.lng, destPoint.lat), 12);//初始化地图
		map.enableScrollWheelZoom();
		map.addControl(new BMap.NavigationControl());
		var marker = new BMap.Marker(destPoint);
		map.addOverlay(marker);//添加标注
		
		map.addEventListener("click", function(e){
			if(confirm("确认选择这个位置？")){
				destPoint = e.point;
				$('#micro_estate_setjd').val(destPoint.lng);
				$('#micro_estate_setwd').val(destPoint.lat);
				map.clearOverlays();
				var marker1 = new BMap.Marker(destPoint);  // 创建标注
				map.addOverlay(marker1); 
			}
		});
		
		
		
		var myValue;

		var local;
		function setPlace(){
		    map.clearOverlays();    //清除地图上所有覆盖物
		    local = new BMap.LocalSearch(map, { //智能搜索
		      renderOptions:{ map: map}
		    });
		    located = true;
		    local.setMarkersSetCallback(callback);
		    local.search(myValue);
		}
		
		function addEventListener(marker){
			marker.addEventListener("click", function(data){
				destPoint = data.target.getPosition(0);
			});
		}
		function callback(posi){
			$("#micro_estate_setaddr").removeAttr("disabled");
			for(var i=0;i<posi.length;i++){
				if(i==0){
					destPoint = posi[0].point;
				}
				posi[i].marker.addEventListener("click", function(data){
					destPoint = data.target.getPosition(0);
				});  
			}
		}
		
		
		$("#positioning").click(function(){
			if($("#micro_estate_setaddr").val() == ""){
				alert("请输地址！");
				return ;
			}
			$("#locate-btn").prop("disabled",true);
			local = new BMap.LocalSearch(map, { //智能搜索
				renderOptions:{ map: map}
			});
			located = true;
			local.setMarkersSetCallback(callback);
			local.search($("#micro_estate_setaddr").val());
			return false;
		});
		
		 $("#lbsForm").submit(function(){
			var cansv= true;
			$(this).find('input[type="text"],select,textarea').filter('[required="required"]').each(function(){
				if($.trim($(this).val())==''){
					cansv = false;
					$(this).css('backgroundColor','yellow');
					$(this).one('focus',function(){
						$(this).css('backgroundColor','transparent');
					});
				}
			});
			if(!cansv){
				tusi('请将信息填写完整');
			}
	    	return cansv;
	    });
	});
	</script>
</html>