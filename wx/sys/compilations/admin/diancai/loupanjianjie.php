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
								<h3><i class="icon-cog"></i>店铺设置</h3>
							</div>
						</div>
						<div class="box-content">
							<form action="" method="post" class="form-horizontal form-validate" novalidate="novalidate" id="lbsForm"><?php echo tk();  echo $m->hidden('id'); ?>
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
											<button class="btn select_img" type="button" onclick="setpic('pic_pic','micro_diancai_setpic');">选择封面</button>
											<span class="help-inline">建议尺寸：宽720像素，高400像素</span>
										</span>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label">公司头部图片：</label>
									<div class="controls">
									<img class="thumb_img" src="<?php echo $m->headpic; ?>" id="pic_headpic"  style="max-height:100px;" />
										<?php echo $m->hidden('headpic'); ?>
										<span class="help-inline">
											<button class="btn select_img" type="button" onclick="setpic('pic_headpic','micro_diancai_setheadpic');">选择图片</button>
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
									<label for="estate_desc" class="control-label">公司公告：</label>
									<div class="controls">
									<?php echo $m->texteditor('jianjie',1,'600px','100px'); ?>
									</div>
								</div>
                                <div class="control-group">
                                    <label for="endinfo" class="control-label" >详情介绍：</label>
                                    <div class="controls">
                                       <span class="help-inline">填写你要收集的内容！订单默认选项不可以修改删除！</span>
                                        <table class="table table-bordered table-hover dataTable" id="bookingtb">
                                                <tr>
                                                    <th>字段类型</th>
                                                    <th>字段名称</th>
                                                    <th>初始内容</th>
                                                    <th>操作</th>
                                                </tr>
                                        </table>
                                    </div>
                                    <?php echo $m->hidden('xiangmu','class="bookingset"'); ?>
                                </div>

								<div class="control-group">
									<label for="traffic_desc" class="control-label">店铺信息：</label>
									<div class="controls">
										<?php echo $m->texteditor('jiaotong',1,'600px','100px'); ?>
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
<script type="text/html" id="bookingoption">
<tr class="bookingtr" issys="0">
<td class="booking_type">
<select>
<option value="text" data-name="电话号码" data-holder="请输入您的电话">单行文字</option>
</select>
</td>
<td class="booking_name">
    <input name="data-name" type="text" class="wizard-ignore" required="required" value=""/>
</td>
<td class="booking_holder">
    <input name="data-holder" type="text" class="wizard-ignore" value="" >
</td>
<td><p><a href="javascript:;" class="yydelahref" onclick="dodelit(this)">删除</a>&nbsp;<a href="javascript:;" onclick="doaddit(this)">添加</a></p></td>
</tr>
</script>
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
	var destPoint = new BMap.Point($('#micro_diancai_setjd').val(),$('#micro_diancai_setwd').val());
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
				$('#micro_diancai_setjd').val(destPoint.lng);
				$('#micro_diancai_setwd').val(destPoint.lat);
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
			$("#micro_diancai_setaddr").removeAttr("disabled");
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
			if($("#micro_diancai_setaddr").val() == ""){
				alert("请输地址！");
				return ;
			}
			$("#locate-btn").prop("disabled",true);
			local = new BMap.LocalSearch(map, { //智能搜索
				renderOptions:{ map: map}
			});
			located = true;
			local.setMarkersSetCallback(callback);
			local.search($("#micro_diancai_setaddr").val());
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
			saveyyx();
	    	return cansv;
	    });
	});
	//预约项目设置
	$(function(){
		if($.trim($('.bookingset').val())!=''){
			var intv = $.evalJSON($('.bookingset').val());
			for(var i=0;i<intv.length;i++){
				var tr = addbookingline();
				var msg = intv[i];
				tr.find('.booking_type').find('select').val(msg.type);
				tr.find('.booking_name').find('input').val(msg.name);
				tr.find('.booking_holder').find('input').val(msg.holder);
				if(msg.issys=='1'){
					tr.find('select,input').prop('disabled',true);
					tr.find('.yydelahref').parent().html('默认订单项');
					tr.attr('issys','1');
				}
				//附加
				tr.find('.booking_type').find('select').hide();
				tr.find('.booking_type').append(tr.find('.booking_type').find('option:selected').text());
			}
		}	
	});
	
	function addbookingline(){
		$('#bookingtb').append($('#bookingoption').html());
		var tr = $('#bookingtb').find('tr:last');
		initbookingmsg(tr);
		tr.find('select').change(function(){
			tr.find('input[type="text"]').val('');
			initbookingmsg(tr);
		});
		return tr;
	}
	
	function initbookingmsg(tr){
		tr.find('input[type="text"]').each(function(){
			if($.trim($(this).val())==''){
				var hn = $(this).attr('name');
				$(this).attr('placeholder','如：'+tr.find('option:selected').attr(hn));
			}
		});
	}

	function dodelit(o){
		$(o).parent().parent().parent().remove();
	}
	
	function doaddit(o){
		var tr = $(o).parent().parent().parent();
		var newtr = tr.clone();
		tr.after(newtr);
		initbookingmsg(newtr);
		newtr.find('select').change(function(){
			newtr.find('input[type="text"]').val('');
			initbookingmsg(newtr);			
		});
	}


	//存储预约项
	
	function saveyyx(){
		var bk = [];
		$('.bookingtr').each(function(){
			var msg = {};
			msg.type = $(this).find('.booking_type').find('select').val();
			msg.name = $(this).find('.booking_name').find('input').val();
			msg.holder = $(this).find('.booking_holder').find('input').val();
			msg.issys = $(this).attr('issys');
			bk[bk.length] = msg;
		});
		$('.bookingset').val($.toJSON(bk));
	}
	//多长张图片上传
	$(function(){
		$('#sjtptr').find('tr').each(function(){
			if($.trim($(this).find('input[type="text"]').eq(0).val())!=''){
				$(this).show();
			}
		});
	});
	
	function addsjtp(id){
		if($('#'+id).find('tr:hidden').size()>0){
			var htr = $('#'+id).find('tr:hidden').eq(0);
			htr.show();
		}else{
			alert('最多允许添加'+$('#'+id).find('tr').size()+'张图片。')
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
</html>