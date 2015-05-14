<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<link type="text/css" rel="stylesheet" href="/res/wz/style/list.css" />
<title>微</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<script type="text/javascript" src="<?php echo $JS; ?>main.js"></script>
<script type="text/javascript" src="/res/helpmsg.js"></script>


<style type="text/css">


::-webkit-scrollbar-track-piece {
    background-color: #f5f5f5;
    border-left: 1px solid #d2d2d2;
}

::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-thumb {
    background-color: #c2c2c2;
    background-clip: padding-box;
    border: 1px solid #979797;
    min-height: 28px;
}

    ::-webkit-scrollbar-thumb:hover {
        border: 1px solid #636363;
        background-color: #929292;
    }


.lbul{
	text-decoration: none;
	width: 240px;
	margin-top: 8px;
}
.lbul li{
	text-decoration: none;
	border-bottom: 1px solid gray;
	height: 32p;
	display:block;
	line-height:32px;
	list-style: none;
	color:#2c6872;
	padding: 1px 1px 1px 9px;
	background-color:#dcfbfe;
	background: -webkit-gradient(linear, left top, left bottom, from(#dcfbfe), to(#b9ebf3));
	border-bottom: 1px solid #7ab8c2;
	width: 240px;
	cursor: pointer;
	position: relative;
}

.lbul li .clopic{
	position: absolute;
	right: 10px;
	height: 28px;
	width: 32px;
	top: 4px;
}
.czxbtn{
width: 25px; height: 25px;font-size: 30px;
line-height: 15px;
position: absolute;
right: 10px;
top: 5px;
padding-top: -5px;
}

.mainpicshow{
	width: 100%;
	height: 170px;
	overflow-x:auto;
	overflow-y:hidden;
}
.mainpicarea{
	width: 100%;
	height: 100%;
}
.mainpicarea img{
	width: 100%;
	height: 100%;
}
#tpdhtr td{
	width: 400px;
	height: 100%;
	border: none;
}
#tpdhtr td img{
	width: 400px;
	height: 100%;
	cursor: pointer;
}

.jiaocheng {
	font-family:宋体;color:#3980f4;font-size:16px;background-color:#ffffb0;width:300px;border-radius:5px;padding:4px;
}
#gotonext {		position:fixed; top:500px;right:100px;buttom:100px;width:163px;height:81px;	}



body{
background-color: #ffffff;
}
.liindex{
border-radius:6px; 
}
button{

}
</style>

<link rel="stylesheet" href="/res/btncss/font-awesome.min.css">
<link rel="stylesheet" href="/res/btncss/buttons.css">
<script type="text/javascript">
$(function(){
	window.myhelpmsg = [
						{
		            	   ele:$('#step01'),
		            	   msg:'还在羡慕别人的微官网？<br/>别着急，马上动手制作自己的微官网 ～',
		            	   pic:'<?php echo $IMG; ?>/admin/v3/step01.jpg',
		            	   pic_w:310,
		            	   pic_h:280,
		            	   des:' '
		               },
		               {
		            	   ele:$('#step0'),
		            	   msg:'首先，点击”+“增加您的官网页面：',
		            	   pic:'<?php echo $IMG; ?>/admin/v3/step1.jpg',
		            	   pic_w:293,
		            	   pic_h:254,
		            	   des:' '
		               },
		                {
		            	   ele:$('#liindex'),
		            	   msg:'选中左侧的”微首页“，开始完美的微官网首页：',
		            	   pic:'<?php echo $IMG; ?>/admin/v3/step2.jpg',
		            	   pic_w:300,
		            	   pic_h:370,
		            	   des:' '
		               },
		               {
		            	   ele:$('#selst'),
		            	   msg:'设置图片导航，即顶部导航图片，图片导航选择”显示“，点击下面的”封面图片“字样，需确认剪裁才能上传图片：',
		            	   pic:'<?php echo $IMG; ?>/admin/v3/step3.jpg',
		            	   pic_w:405,
		            	   pic_h:338,
		            	   des:''
		               },
		               {
		            	   ele:$('#step4'),
		            	   msg:'接下来点击”选择模板“编辑首页内容,我们为您提供数十种丰富多样的编辑模板:',
		            	   pic:'<?php echo $IMG; ?>/admin/v3/step4_11.jpg',
		            	   pic_w:348,
		            	   pic_h:277,
		            	   des:''
		               },
		               {
		            	   ele:$('#step5'),
		            	   msg:'根据您的活动内容，选中控件内容框，使用“复制添加”和“删除控件”按钮随心设置组件数量：',
		            	   pic:'<?php echo $IMG; ?>/admin/v3/step5.jpg',
		            	   pic_w:329,
		            	   pic_h:312,
		            	   des:''
		               },
		               {
		            	   ele:$('#step6'),
		            	   msg:'选中模板的内容块，右侧”内容与响应“下面即出现编辑框，设置说明，图片，最重要的是，设置页面跳转，即点击内容块跳转到的页面：',
		            	   pic:'<?php echo $IMG; ?>/admin/v3/step6.jpg',
		            	   pic_w:420,
		            	   pic_h:300,
		            	   des:''
		               },
		               {
		            	   ele:$('#savebtn'),
		            	   msg:'这样，微官网首页就设计好啦，别忘记保存哦！ <br/>按这样的方式依次设计所有页面，您的专属微官网就诞生啦～',
		            	   pic:'<?php echo $IMG; ?>/admin/v3/step71.jpg',
		            	   pic_w:250,
		            	   pic_h:350,
		            	   des:''
		               },
		            ];
	if($.cookie('wishelp')!='WH'){
		openhelp(myhelpmsg);
		$.cookie('wishelp','WH');
	}
});
</script>
</head>
<body>
	<div class="main-title">
		<h3>我的微官网:<sub style="color: gray;"><?php echo $mywwz; ?>/</sub>&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="jiaocheng" id="step01" onclick="openhelp(myhelpmsg);return;">新手指导</span>
		
		<span class="jiaocheng">
		                       <a class="btn preview pull-right btn-success" id="yul" href="javascript:;">微官网预览</a>
								<script type="text/javascript">
									$("#yul").click(function () {
										if ($.browser.msie) {
											alert("不支持在IE浏览器下预览，建议使用谷歌浏览器或者360极速浏览器或者直接在微信上预览。");
											return;
										}
										var left = ($(window.parent.parent).width() - 450) / 2;
										window.open("<?php echo $mywwz; ?>", "我的微官网", "height=650,width=450,top=0,left=" + left + ",toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no");
									});
								</script>
</span>
	
</h3>
	</div>
	<!-- 
	<div class="alert alert-info">
	  	<p><span class="bold">注意：</span>微投票的目的是获得系统客观的收集信息研究数据，为决策做准备。。</p>
	</div>
	 -->
	


<div class="pagination">
 <!--  <ul>

    <li class="disabled"><span>上一页</span></li>
  </ul>
 -->  
</div>
	<table class="table table-bordered">
				<tr style="background-color:#f6f6f6;">
					<th id="step0" align="center" style="text-align: center;">页面列表
					<button class="button glow button-rounded button-flat-primary" style="height:25px;font-size:30px;padding:2px;line-height:22px;" onclick="addalb()" title="添加页面">+</button>
					</th>
					<th align="center" style="text-align: center;">样式编辑</th>
					<th align="center" id="step6" style="text-align: center;">内容与响应</th>
				</tr>
				<tr>
					<td style="width: 300px;padding: 0px 0px 0px 0px;">
					<ul class="lbul" id="lbul">
					<li class="liindex" id="liindex" uuid="index"><span>微首页</span></li>
					</ul>
					</td>
					<td style="width: 400px;position: relative;">
					<table>
					<tr>
					<td style="border: none;" nowrap="nowrap"><span style="line-height: 28px;">页面名称：</span></td>
					<td style="border: none;" nowrap="nowrap"><input type="text" id="pagename" style="width: 120px;"/></td>
					<td style="border: none;" nowrap="nowrap"><button id="step4" id="linktobak" onclick="setbj()" class="button glow button-rounded button-flat-primary" style="height:25px;padding:2px;line-height:22px;" title="选择背景图片" >背景图片</button>&nbsp;<button title="删除背景图片" class="button glow button-rounded button-flat-primary" style="height:25px;font-size:20px;padding:2px;line-height:22px;" onclick="delbj()">&nbsp;X&nbsp;</button></td>
					<td style="border: none;" nowrap="nowrap"><button id="step4" onclick="openmbxzq();"  class="button glow button-rounded button-flat-primary" style="height:25px;padding:2px;line-height:22px;" title="选择页面模板">选择模板</button></td>
					</tr>
					<tr>
					<td style="border: none;" nowrap="nowrap"><span style="line-height: 28px;">导航高度：</span></td>
					<td style="border: none;" nowrap="nowrap">
					<select style="width: 85px;" id="selst">
					<option value="n">
					不显示
					</option>
					<option value="150">
					150
					</option>
					<option value="170">
					170
					</option>
					<option value="190">
					190
					</option>
					<option value="210">
					210
					</option>
					<option value="230">
					230
					</option>
					<option value="250">
					250
					</option>
					</select>
					<select style="width: 50px;" id="selstsl">
					<?php for ($__i=1;$__i<=8;$__i++) { ?>
					<option value="<?php echo $__i; ?>">
					<?php echo $__i; ?>
					</option>
					<?php } ?>
					</select>
					</td>
					<td style="border: none;" nowrap="nowrap">
					<button onclick="upadd()" class="button glow button-rounded button-flat-primary" style="height:25px;padding:2px;line-height:22px;"  title="前移选中控件">↑</button>
					<button onclick="downadd()" class="button glow button-rounded button-flat-primary" style="height:25px;padding:2px;line-height:22px;"  title="后移选中控件">↓</button>&nbsp;
					<button id="step5" onclick="copyadd()" class="button glow button-rounded button-flat-primary" style="height:25px;padding:2px;line-height:22px;" title="添加选中控件">复制添加</button>
					</td>
					<td style="border: none;">
					<button onclick="deladd()"  class="button glow button-rounded button-flat-primary" style="height:25px;padding:2px;line-height:22px;" title="删除选中控件">删除控件</button>
					</td>
					</tr>
					<tr>
					<td colspan="4" style="border: none;">
					<div id="dqymdhtm" style="width: 400px;">
					<div id="tophtm">
							<div class="mainpicshow">
    	<div class="mainpicarea">
    	<table style="border: none;height: 100%;">
    	<tr id="tpdhtr">
    	<td><img src="/res/fmdtp.jpg"/></td>
    	</tr>
    	</table>
    	
    	</div>
    	</div>
					</div>
					<div id="mainhtm" style="min-height: 400px;">					
					</div>					
					</div>					
					</td>
					</tr>
					</table>					
					</td>
					<td>					
					<table id="proptable">
					<tr id="t_text" rel="m_text">
					<td style="border: none;"><span style="line-height: 28px;">标题</span></td>
					<td style="border: none;"><input type="text" id="i_text"/></td>
					</tr>
					<tr id="t_desc" rel="m_desc">
					<td style="border: none;"><span style="line-height: 28px;">描述</span></td>
					<td style="border: none;"><textarea id="i_text" style="width: 205px;height: 70px;"></textarea></td>
					</tr>
					<tr id="t_date" rel="m_date">
					<td style="border: none;"><span style="line-height: 28px;">日期</span></td>
					<td style="border: none;"><?php echo $m->date('date'); ?></td>
					</tr>
					<tr id="t_txt" rel="m_txt">
					<td style="border: none;" colspan="2"><span style="line-height: 28px;">内容</span></td>
					</tr>
					<tr id="t_txt" rel="m_txt">
                                        <td style="border: none;" colspan="2"><?php echo $m->texteditor('txt','langType:"zh-cn",allowImageUpload:false,allowFlashUpload:false,allowMediaUpload:false,allowFileManager:false,items:kindeditor_item3,afterChange:setwbdnr','325px','200px'); ?></td>
					</tr>
					<tr id="t_data" rel="m_target">
					<td style="border: none;"><span style="line-height: 28px;">链接</span></td>
					<td style="border: none;">
					<select id="linktourl">
					<option></option>
					</select><br/>
					<input type="text" id="i_linktourl" style="display: none;"/>
					</td>
					</tr>
					<tr id="t_date" rel="m_pic">
					<td style="border: none;"><span style="line-height: 28px;">图片</span></td>
					<td style="border: none;">
					<button id="linktopic">
					上传图片
					</button>
					<span>建议尺寸：</span>
					<span id="jydccid"></span>					
					</td>
					</tr>
					</table>
				<span id="gotonext">
					<img src="<?php echo $IMG; ?>/admin/v3/huiyuanka.png" ></img>
				</span>
					</td>
				</tr>
				<tr>
				<td colspan="3" align="center" style="text-align: center;">
				<button onclick="savewwz()" id="savebtn" class="button button-pill button-primary">保存</button>
				
				
				
				</td>
				</tr>
		</table>
	<div class="tb-toolbar">
	</div>
	


<div class="pagination" style="">
  <!-- <ul>

    <li class="disabled"><span>上一页</span></li>
  </ul> -->
  
</div>

<script type="text/javascript">
//删除北京
function delbj(){
	$('#dqymdhtm').css('backgroundImage','');
	$('#dqymdhtm').attr('backgroundImage','');
}
//设置背景
function setbj(){
	window.piccbk = function(m){
		$('#dqymdhtm').css('backgroundImage','url('+m+')');
		$('#dqymdhtm').css('backgroundSize','100%, 100%');
		$('#dqymdhtm').attr('backgroundImage',m);
		window.piccbk = null;
	}
	window.curpic = null;
	openpicset();	
} 

function addalb(uuuid){
	if(!uuuid){
		uuuid = uuid();
	}
	var sj = $('<li class="liindex" uuid="'+uuuid+'"><span>新的页面</span><button class="czxbtn glow button-rounded button-flat-royal" style="height:25px;font-size:40px;padding:2px;line-height:5px;" title="删除页面">-</button></li>');
	$('#lbul').append(sj);
	return sj;
}
function savewwz(){
	savelastdata();
	var tjres = [];
	$('.liindex').each(function(){
		var btsj = {};
		btsj.htm = $.trim($(this).data('htm'));
		btsj.bgpic = $.trim($(this).data('bgpic'));
		btsj.uuid = $.trim($(this).attr('uuid'));
		btsj.tpdh = $.trim($(this).data('tpdh'));
		btsj.tpdhh = $.trim($(this).data('tpdhh'));
		btsj.name = $.trim($(this).find('span').text());
		tjres[tjres.length] = btsj;
	});
	ajaxjson('swsite.html',<?php echo tjres; ?>,function(){
		tusi('微网站保存成功');
	});
}

function upadd(){
	if(window.curblock && $(window.curblock).prev().size()>0){
		$(window.curblock).prev().before($(window.curblock));
		$(window.curblock).trigger('click');
	}
}
function downadd(){
	if(window.curblock && $(window.curblock).next().size()>0){
		$(window.curblock).next().after($(window.curblock));
		$(window.curblock).trigger('click');
	}
}

function getwwzsj(fun){
	ajax('wsiteinit.html',null,function(m){
		for(var i=0;i<m.length;i++){
			var mm = m[i];
			var li = null;
			if(i==0){
				li = $('#lbul').find('#liindex');				
			}else{
				li = addalb(mm.uuid);
			}
			li.find('span').text(mm.name);
			li.data('htm',mm.htm);
			li.data('tpdh',mm.tpdh);
			li.data('tpdhh',mm.tpdhh);
			li.data('bgpic',mm.bgpic);
		}
		if(fun){
			fun();
		}
	});
}

function openmbxzq(){
	$('#proptable').find('tr').hide();
	$('.add_qq_more').unmask();
	$('body').css('overflow','hidden');
	if($('.qpmbxs2bg').size()>0){
		$('.qpmbxs2bg').show();
	}else{
		$('body').append('<iframe class="qpmbxs2bg" src="../web/set.html" style="_position: absolute;position: fixed;left: 0;top:0;z-index:999999;width:'+$(window).width()+'px;height:'+$(window).height()+'px;border:none;background-color: #dfdfdf;" width="'+$(window).width()+'px" height="'+$(window).height()+'px"></iframe>');
	}
}

function openpicset(){
	pophtml('<iframe src="wspicif.html" style="width:630px;height:470px;border:none;background-color: #dfdfdf;" width="630px" height="475px"></iframe>',670,510,true);
}
$(function(){
	getwwzsj(function(){
		initpagedata($('.liindex')[0]);
	});
	$('#proptable').find('tr').hide();	
	window.endmbxz = function(html){
		if(html !='0'){
			$('#mainhtm').html(html);
		}
		$('.qpmbxs2bg').hide();	
		
		$('body').css('overflow','auto');
	}
	
	$('#tophtm').delegate('img','click',function(){
		window.curpic = this;
		window.piccbk = null;
		openpicset();
	});
	
	$('#lbul').delegate('li','click',function(){
		savelastdata();	
		initpagedata(this);
	});
	
	$('#mainhtm').delegate('.add_qq_more','click',function(){
		$('.add_qq_more').unmask();
		$(this).mask();
		$('#proptable').find('tr').hide();
		initblock(this);
	});
	
	$('#lbul').delegate('li > button','click',function(e){
		if(confirm('确定删除此页面吗？')){
			$(this).parent().remove();
		}
		e.preventDefault();
		e.stopPropagation();
		return false;
	});
	
	$('#selst').change(function(){
		$('#proptable').find('tr').hide();
		$('.add_qq_more').unmask();
		if($(this).val()!='n'){			
			$('.mainpicshow,.mainpicarea').height($(this).val());
			$('.mainpicarea').children('table').height($(this).val());
			$('head').append('<style>#tpdhtr td img{ width: 400px;height: '+$(this).val()+'px;cursor: pointer;}</style>');
			if($('#tophtm').is(':hidden')){
				$('#tophtm').show();
				$('#selstsl').val('1');
				$('#tpdhtr').html('<td><img src="/res/fmdtp.jpg"/></td>');
			}
		}else{
			$('#tophtm').hide();
			$('#selstsl').val('1');
			$('#tpdhtr').html('<td><img src="/res/fmdtp.jpg"/></td>');
		}
		
	});
	//图数
	$('#selstsl').change(function(){
		var ypnum = parseInt($(this).val());
		var tdnum = $('#tpdhtr').find('td').size();
		$('#proptable').find('tr').hide();
		$('.add_qq_more').unmask();
		if(ypnum>tdnum){
			for(var i = 0;i<ypnum-tdnum;i++){
				$('#tpdhtr').find('td:last').after('<td><img src="/res/fmdtp.jpg"/></td>');
			}
		}else if(ypnum < tdnum){
			for(var i = 0;i<tdnum-ypnum;i++){
				$('#tpdhtr').find('td:last').remove();
				
			}
		}
	});
	//组件
	/**
	$('#selkjsl').change(function(){
		if($.trim($('#mainhtm').html())==''){
			$(this).val('1');
		}else{
			var ypnum = parseInt($(this).val());
			var tdnum = $('#mainhtm').find('.add_qq_more').size();
			$('#proptable').find('tr').hide();
			$('.add_qq_more').unmask();
			if(ypnum>tdnum){
				for(var i = 0;i<ypnum-tdnum;i++){
					var lastm = $('#mainhtm').find('.add_qq_more:last');					
					lastm.after(lastm.clone());
				}
			}else if(ypnum < tdnum){
				for(var i = 0;i<tdnum-ypnum;i++){
					$('#mainhtm').find('.add_qq_more:last').remove();					
				}
			}			
		}
	});
	*/
	//目标
	$('#linktourl').change(function(){
		if($(this).val()=='888'){
			$('#i_linktourl').show();
		}else{
			if(window.curblock){
				$(window.curblock).attr('toto',$(this).val());
			}
			$('#i_linktourl').hide();
		}
		
	});
	$('#proptable').find('tr[rel="m_pic"]').find('button').click(function(){
		window.curpic = $(this).data('m_pic');
		window.piccbk = null;
		openpicset();
	});
	$('#proptable').find('tr[rel="m_text"]').find('input[type="text"]').on('click keyup blur',function(){
		$(window.curblock).find('.m_text').text($(this).val());	
	});
	$('#proptable').find('tr[rel="m_target"]').find('input[type="text"]').on('click keyup blur',function(){		
		$(window.curblock).attr('toto',$(this).val());
	});
	
	$('#proptable').find('tr[rel="m_text"]').find('input[type="text"]').on('click keyup blur',function(){
		$(window.curblock).find('.m_text').text($(this).val());	
	});
	$('#proptable').find('tr[rel="m_desc"]').find('textarea').on('click keyup',function(){
		$(window.curblock).find('.m_desc').text($(this).val());	
	});
	$('#proptable').find('tr[rel="m_date"]').find('input[type="text"]').on('click keyup blur',function(){
		$(window.curblock).find('.m_date').text($(this).val());	
	});
	$('#pagename').on('click keyup blur',function(){
		$(window.currli).find('span').text($(this).val());	
	});
	
	$("#gotonext").click(function(){
    	window.parent.$('.menu-huiyuan').trigger('click');
	});
	
});
function copyadd(){
	if(window.curblock){
		$(window.curblock).after($(window.curblock).clone());
	}
}

function deladd(){
	if(window.curblock){
		$('.add_qq_more').unmask();
		$('#proptable').find('tr').hide();
		$(window.curblock).remove();
		window.curblock = null;
	}
}
function initblock(o){
	$('#proptable').find('tr').hide();
	$('#proptable').find('tr[rel="m_target"]').find('input[type="text"]').hide();
	window.curblock = o;
	if($(o).find('.m_pic').size()>0){
		var tpic = $(o).find('.m_pic');
		$('#proptable').find('tr[rel="m_pic"]').show();
		$('#proptable').find('tr[rel="m_pic"]').find('button').data('m_pic',$(o).find('.m_pic')[0]);
		
		$('#jydccid').html(tpic.width()+'X'+tpic.height());
	}
	if($(o).find('.m_text').size()>0){
		$('#proptable').find('tr[rel="m_text"]').show();
		$('#proptable').find('tr[rel="m_text"]').find('input[type="text"]').val($(o).find('.m_text').text());
	}
	if($(o).find('.m_desc').size()>0){
		$('#proptable').find('tr[rel="m_desc"]').show();
		$('#proptable').find('tr[rel="m_desc"]').find('textarea').val($(o).find('.m_desc').text());
	}
	if($(o).find('.m_txt').size()>0){
		$('#proptable').find('tr[rel="m_txt"]').show();
		window.kindeditor_ftxt.html($(o).find('.m_txt').html());
	}
	if($(o).find('.m_date').size()>0){
		$('#proptable').find('tr[rel="m_date"]').show();
		$('#proptable').find('tr[rel="m_date"]').find('input[type="text"]').val($(o).find('.m_date').text());
	}
	$('#proptable').find('tr[rel="m_target"]').show();
	//$('#proptable').find('tr[rel="m_target"]').find('select').val($(o).attr('m_target'));
	//目标更新
	var opt = '<option value="">无跳转</option><option value="888">自定义页面</option>';
	$('.liindex').each(function(){
		opt += '<option value="'+$(this).attr('uuid')+'">'+$(this).find('span').text()+'</option>';
	});
	$('#linktourl').html(opt);
	if($.trim($(o).attr('toto'))==''){
		$('#linktourl').val('');
	}else if($('#linktourl').find('option[value="'+$(o).attr('toto')+'"]').size()==0){
		$('#linktourl').val('888');
		$('#proptable').find('tr[rel="m_target"]').find('input[type="text"]').show().val($(o).attr('toto'));
	}else{
		$('#linktourl').val($(o).attr('toto'));
	}
	
	
	
}

function setwbdnr(){
	$(window.curblock).find('.m_txt').html(window.kindeditor_ftxt.html());	
}


function savelastdata(){
	$('#proptable').find('tr').hide();	
	$('.add_qq_more').unmask();
	if(window.currli){
		$(window.currli).data('htm',$('#mainhtm').html());
		$(window.currli).data('bgpic',$.trim($('#dqymdhtm').attr('backgroundImage')));
		if($('#selst').val()!='n'){
			//有导航图
			$(window.currli).data('tpdh',$('#tophtm').html());	
			$(window.currli).data('tpdhh',$('#selst').val());	
		}else{
			$(window.currli).data('tpdh','');
			$(window.currli).data('tpdhh','0');
		}
	}
}
function initpagedata(o){
	window.currli = o;
	var dat = $.trim($(o).data('htm'));
	var showtph = $.trim($(o).data('tpdhh'));
	var showtp = $.trim($(o).data('tpdh'));
	var bgpic = $.trim($(o).data('bgpic'));
	if(dat==''){
		//$('#selkjsl').val('1');
		$('#mainhtm').html('');
	}else{
		$('#mainhtm').html(dat);
		//$('#selkjsl').val($('#mainhtm').find('.add_qq_more').size());
	}
	if(bgpic==''){
		delbj();
	}else{
		$('#dqymdhtm').css('backgroundImage','url('+bgpic+')');
		$('#dqymdhtm').css('backgroundSize','100%, 100%');
		$('#dqymdhtm').attr('backgroundImage',bgpic);
	}
	if(showtp==''){		
		$('#selst').val('n');
		$('#selstsl').val('1');
		$('#tophtm').hide();
	}else{
		$('#tophtm').show().html(showtp);
		$('#selst').val(showtph);
		$('#selst').trigger('change');
		$('#selstsl').val($('#tophtm').find('img').size());
	}
	var pname = $.trim($(o).find('span').text());
	$('#pagename').val(pname);
	
}
</script>



<br/><br/><br/></body></html>
