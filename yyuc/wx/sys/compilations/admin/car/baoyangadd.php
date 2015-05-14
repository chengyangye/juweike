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
                                <h3><i class="icon-edit"></i>预约系统设置</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>
                        <div class="box-content">
                            <form action="" method="post" class='form-horizontal form-validate'><?php echo tk();  echo $m->hidden('id'); ?>
                             <div class="control-group">
                                                <label for="keyword" class="control-label">触发关键词：</label>
                                                <div class="controls">
                                                     <?php echo $m->text('gjz','class="input-xlarge" required="required"'); ?>
                                                    <span class="maroon">*</span><span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="title" class="control-label">图文消息标题：</label>
                                                <div class="controls">
                                                 <?php echo $m->text('tit','class="input-xlarge" required="required"'); ?>
                                                    <span class="maroon">*</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="picurl" class="control-label">图文封面：</label>
                                                 <div class="controls" id="twfmpicarea">
											  	 <img class="artpic"  id="artpic" src="<?php echo $m->artpic; ?>" style="max-height: 100px;">
                                        			<?php echo $m->hidden('artpic'); ?>
                                       			 <span class="help-inline"><button class="btn select_img" onclick="setpic('artpic','micro_car_yuyue_baoyangartpic')" type="button">选择封面</button></span>
                                       			 <span class="help-inline">建议图片尺寸720*400，大小不超过300K</span>
                                                </div>
                                             </div>
                                            <div class="control-group">
                                                <label for="address" class="control-label">预约地址：</label>
                                                <div class="controls">
                                                <?php echo $m->text('yuyue_addr','class="input-xlarge" required="required"  placeholder="请输入接待预约用户的地址"'); ?>
                                                    <span class="maroon">*</span><span class="help-inline">如上海市杨浦区五角场万达广场</span>
                                                </div>
                                            </div>
                                 <div class="control-group">
                                    <label class="control-label" for="">地图标识</label>
                                    <div class="controls">
                                        <div class="input-append">
                                           <?php echo $m->text('jw_addr','class="input-xlarge mapkw" required="required"'); ?>
                                            <button class="btn" type="button" id="positioning">搜索</button>
                                        </div>
										<span class="maroon">注意：这个只是模糊定位，准确位置请地图上标注！</span>
										<div id="l-map">
											<i class="icon-spinner icon-spin icon-large"></i>地图加载中...
										</div>
										<div id="r-result">
										<?php echo $m->text('jd','class="mapjd"'); ?>
										<?php echo $m->text('wd','class="mapwd"'); ?>
										</div>
                                    </div>
								</div>
                                    <div class="control-group">
                                                <label for="tel" class="control-label">预约电话：</label>
                                                <div class="controls">
                                                      <?php echo $m->text('yuyue_tel','class="input-xlarge" required="required" placeholder="请输入接收预约的电话号码'); ?>
                                                    <span class="maroon">*</span><span class="help-inline">如021-61234567</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="headpic" class="control-label">预约页面头部图片：</label>
                                                <div class="controls" id="twfmpicarea">
											  	 <img class="pic" id="headpic" src="<?php echo $m->headpic; ?>" style="max-height: 100px;">
                                        			<?php echo $m->hidden('headpic'); ?>
                                       			 <span class="help-inline"><button class="btn select_img" onclick="setpic('headpic','micro_car_yuyue_baoyangheadpic')" type="button">选择封面</button></span>
                                       			 <span class="help-inline">默认图片大小640*320，图片大小不超过300K</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="info" class="control-label">预约详情：</label>
                                                <div class="controls">
                                                  <?php echo $m->textarea('yuyue_detail','class="input-xxlarge" style="height:80px;width:300px;" placeholder="简述用户预约需要注意的事项"'); ?>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="typename" class="control-label">重命名订单：</label>
                                                <div class="controls">
                                                  <?php echo $m->text('re_order','class="input-xlarge"'); ?>
                                                    <span class="maroon">*</span><span class="help-inline">用户修改用户手机中“我的订单”栏目的名称，您可以将其修改成诸如“我的团购”、“我的预约”等</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="typename2" class="control-label">重命名订单说明：</label>
                                                <div class="controls">
                                                <?php echo $m->text('re_order_explain','class="input-xlarge"'); ?>
                                                    <span class="maroon">*</span><span class="help-inline">用户修改用户手机中“订单说明”栏目的名称，您可以将其修改成诸如“预约说明”、“试驾说明”等</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="typename3" class="control-label">重命名订单电话：</label>
                                                <div class="controls">
                                                <?php echo $m->text('re_order_tel','class="input-xlarge"'); ?>
                                                    <span class="maroon">*</span><span class="help-inline">用户修改用户手机中“订单电话”栏目的名称，您可以将其修改成诸如“预约电话”、“试驾电话”等</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="typename" class="control-label">订单接收设置：</label>
                                                <div class="controls">
                                                    <label class="radio inline">
                                                        <input type="radio" name="type" value="1"  checked="checked"  />
                                                        限定时间
                                                    </label>
                                                    <label class="radio inline">
                                                        <input type="radio" name="type" value="2"  />
                                                        限定每日量
                                                    </label>
                                                    <label class="radio inline">
                                                        <input type="radio" name="type" value="3"  />
                                                        限定全部总量
                                                    </label>
													<span class="help-inline" id="type1">设定您接受订单的起始和结束时间</span>
													<span class="help-inline" id="type2" style="display:none;">设定您每日接收的订单总数</span>
													<span class="help-inline" id="type3" style="display:none;">设定您总计可接收的订单总数</span>
                                                </div>
                                            </div>

                                            <div class="control-group" >
                                                <label for="date" class="control-label"></label>
                                                <div class="controls">
												<div class="input-prepend">

												 <span class="add-on"><i class="icon-calendar"></i></span>
                                                    <input type="text" class="input-xlarge daterangepick" value="" name="date" id="date" />
													
                                                </div><span class="help-inline">填写订单的起始和结束时间(为空表示不限制)</span></div>
                                            </div>
                                            <div class="control-group"  style="display: none;" >
                                                <label for="allnums" class="control-label"></label>
                                                <div class="controls">
                                                    <input type="text" name="allnums" id="allnums" class="input-mini" value="" data-rule-number="true" />
                                                    <span class="help-inline">填写最大接收订单数(为空表示不限制)</span>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                $(function () {
                                                    $("input[type='radio']").click(function () {
                                                        var $this = $(this), $val = $this.val(), $div = $this.parents(".control-group");
                                                        if ($val == 1) {
                                                            $div.next().show();
                                                            $div.next().next().hide();
															$("#type1").show();
															$("#type2").hide();
															$("#type3").hide();
                                                        } else {
                                                            $div.next().next().show();
                                                            $div.next().hide();
															if($val == 2){
																$("#type2").show();
																$("#type1").hide();
																$("#type3").hide();
															}else{
																$("#type3").show();
																$("#type1").hide();
																$("#type2").hide();
															}
                                                        }
                                                    })
                                                })
                                            </script>

<script>
                                        function dodelit(i) {



                                            document.getElementById("txt" + i).value = "";
                                            document.getElementById("value" + i).value = "";
                                            if (i != 1) {
                                                document.getElementById("trtxt" + i).style.display = "none";
                                                document.getElementById("add" + i).style.display = "";
                                            }
                                        }
                                        function doaddit(i) {

                                            document.getElementById('trtxt' + i).style.display = "";
                                            document.getElementById('add' + i).style.display = "none";


                                        }
                                        function sdodelit(i) {



                                            document.getElementById("select" + i).value = "";
                                            document.getElementById("svalue" + i).value = "";
                                            if (i != 1) {
                                                document.getElementById("strtxt" + i).style.display = "none";
                                                document.getElementById("sadd" + i).style.display = "";
                                            }
                                        }
                                        function sdoaddit(i) {

                                            document.getElementById('strtxt' + i).style.display = "";
                                            document.getElementById('sadd' + i).style.display = "none";


                                        }
                                    </script>

                                     <div class="control-group">
                                                <label for="tel" class="control-label" onclick="addbookingline();">订单内容设置：</label>
                                                <div class="controls">
												<span class="help-inline">填写你要收集的内容！订单默认选项不可以修改删除！</span>
                                                     <table id="bookingtb" class="table table-bordered table-hover dataTable">
			                                            <tr>
			                                                <th>字段类型</th>
			                                                <th>字段名称</th>
			                                                <th>初始内容</th>
			
			                                                <th>操作</th>
			                                            </tr>
			                                           </table>
                                                      <?php echo $m->hidden('bookingset','class="bookingset"'); ?>
                                                </div>
                                            </div>

                            <div class="form-actions">
									
                                    <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
									<a class="btn" href="Javascript:window.history.go(-1)">取消</a>
                                </div>
                            </form>
                        </div>
                        <link href="/templates/kindeditor/themes/default/default.css" rel="stylesheet" />
                        <script src="/templates/kindeditor/kindeditor-min.js"></script>
                        <script src="/templates/kindeditor/lang/zh_CN.js"></script> 
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
<script type="text/javascript">
      
//////////////map begin  /////////      
      //是否从未保存过定位信息，如果从未保存过，并且有填地址信息，那么进入页面后自动定位
    	var located = true;
    	//定位坐标
    	var destPoint = new BMap.Point($('.mapjd').val(),$('.mapwd').val());
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
    				$('.mapjd').val(destPoint.lng);
    				$('.mapwd').val(destPoint.lat);
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
    			$(".mapkw").removeAttr("disabled");
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
    			if($(".mapkw").val() == ""){
    				alert("请输地址！");
    				return ;
    			}
    			$("#locate-btn").prop("disabled",true);
    			local = new BMap.LocalSearch(map, { //智能搜索
    				renderOptions:{ map: map}
    			});
    			located = true;
    			local.setMarkersSetCallback(callback);
    			local.search($(".mapkw").val());
    			return false;
    		});
 ////////////map end ////////////////   		
 </script>
 <script type="text/html" id="bookingoption">
 <tr class="bookingtr" issys="0">
 <td class="booking_type">
 <select>
 <option value="text" data-name="电话号码" data-holder="请输入您的电话">单行文字</option>
 <option value="textarea" data-name="反馈意见" data-holder="请输入您的意见">多行文字</option>
 <option value="date" data-name="预定日期" data-holder="请选择">日期选择</option>
 <option value="datetime" data-name="入住时间" data-holder="请选择">日期时间选择</option>
 <option value="select" data-name="入住人数" data-holder="1|2|3|4|5|6|7|8">自定义下拉选择</option>
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
 
 </script>   
    
</body>
</html>