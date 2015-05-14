<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<title>智能客服设置</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>


<script type="text/javascript">
	var bottype   = <?php echo $type; ?>;
	var ai_status = <?php echo $state; ?>;
	var name      = '<?php echo $name; ?>'; 
	
	
	$(document).ready(function() { 
		$("#bottype").val(bottype);
		
		if(ai_status == 1){
			 $("input[name=state][value=1]").prop("checked", true);
		}else{
			 $("input[name=state][value=0]").prop("checked", true);
		}
		
		if (bottype == 0) {
			if(name != 0){
				$("#input01").val(name);
			}
			$("div#botname").show();
			$("div#autoreply").hide();
		} else if(bottype == 1){
			$("div#botname").hide();
			$("div#autoreply").hide();
		} else{
			$("div#botname").hide();
			$("div#autoreply").show();
			if(false){
				 $("#answertype").val("1");
				 $("div#textreply").hide();
			 }else{
				 $("#answertype").val("0");
				 $("div#textreply").show();
			 }
		}
		 
		$("form").delegate("#bottype", "change", function() {
			var type = $("#bottype").val();
			if (type == 0) {
				$("div#botname").show();
				$("div#autoreply").hide();
			} else if(type == 1){
				$("div#botname").hide();
				$("div#autoreply").hide();
			} else{
				$("div#botname").hide();
				$("div#autoreply").show();
			}
		});
		
		$("form").delegate("#answertype", "change", function() {
			var type = $("#answertype").val();
			if (type == 0) {
				$("div#textreply").show();
			} else {
				$("div#textreply").hide();
			}
		});
		
		$("#submitbtn").click(function() {
			$("#submitbtn").attr("disabled", true);
			var submitData = { action:"save" };
			submitData.state = $("input[name=state]:checked").val();
			submitData.bottype = $("select#bottype").val();
			
			if(submitData.bottype == 0){
				submitData.botname =  $("input[name='botname']").val();
			}else if(submitData.bottype == 2){
				 submitData.answertype = $("#answertype").val();
				 if (submitData.answertype == 0) {
					 submitData.welcome = $("textarea[name='welcome']").val();
				 }
			}
		//	 alert(serialize(submitData));
		//var data = submitData
			$.post('intelligentService.html',{ action:submitData.action,state:submitData.state,type:submitData.bottype,name:submitData.botname },function(data) { 
		 		$("#submitbtn").removeAttr("disabled");
			
		 		if (data == 1) {
					alert("设置成功");		
				} else {
					alert( "操作失败");
				}
			},"text");
			return false;
		});
		
		$("#gotonext").click(function(){
			window.parent.$('.menu-gjz').trigger('click');
		});
		
	});
</script>

<body>
	<form class="form-horizontal" style="margin-top:30px;margin-left:30px;">
        <fieldset>
          <legend>智能客服设置</legend>
          <div class="alert alert-info">
	  		<p><span class="bold">注意：</span>
	  		</p>
	  		<p>
	  		客服小宝：智能回复机器人，能进行日常的智能应答（基于网友的调教），但可能口味有点重呢！<br>
	  		专属客服：专属于您的智能机器人，但需要您的调教才能进行正常的应答，在专属客服调教菜单进行调教<br>
	  		单一回复客服：可选择回复欢迎文字或者微官网
	  		</p>
		  </div>
          <div class="control-group">
				<label class="control-label">是否智能客服:</label>
				<div class="controls">
				    <label class="radio inline">
					    <input name="state" value="0" type="radio"> 停用
	                         </label>
	                         <label class="radio inline">
					    <input checked="checked" name="state" value="1" type="radio"> 启用
				    </label>
			    </div>
		  </div>
		  
		  <div class="control-group">
			    <label class="control-label" for="bottype">机器人类型:</label>
			    <div class="controls">
			    <!--    <?php echo $customer_service->select(array('0'=>'客服小宝','1'=>'专属客服'),'type',array('class'=>'span2','id'=>'bottype')); ?> --> 
					 <select class="span2" id="bottype">
					  <option selected="selected" value="0">客服小宝</option>
					  <option value="1">专属客服</option> 
					<!--   <option value="2">单一回复客服</option> -->
					</select> 
					  <span class="maroon">*</span><span class="help-inline">必填, <a href="#" onclick="window.top.location.href = '/admin/main.jsp?target=/admin/ai/teach?action=showWxChoice'">专属客服</a>为您自调教的私有客服，客服小宝为系统默认提供的公用客服。</span>
			    </div>
		  </div>
		  
          <div class="control-group" id="botname">
            <label class="control-label" for="input01">客服机器人名称:</label>
            <div class="controls">
             <!--   <?php echo $customer_service->text('name',array('class'=>'input-xlarge')); ?>  -->
            <input class="input-xlarge" id="input01" name="botname" value="" type="text"> 
            </div>
          </div>
          
          <div style="display: none;" class="control-group" id="autoreply">
	          <div class="control-group">
				   <label class="control-label" for="answertype">自动回复类型:</label>
				   <div class="controls">
						<select class="span2" id="answertype" name="answertype">
						  <option selected="selected" value="0">文字</option>
						  
						</select>
				   </div>
			  </div>
			  
		      <div class="control-group" id="textreply">
		            <label class="control-label" for="reply">自动回复内容:</label>
		            <div class="controls">
		                
		           		


<link rel="stylesheet" href="<?php echo $CSS; ?>admin/emotion.css">
<script type="text/javascript" src="<?php echo $JS; ?>emotion.js"></script>
<script type="text/javascript" src="<?php echo $JS; ?>html_helper.js"></script>
<div class="txtArea">
	<div class="functionBar">
		<div class="opt">
			<a class="icon18C iconEmotion block" href="javascript:;">表情</a>
		</div>
		<div class="tip"></div>
		<div class="emotions">
			<table cellpadding="0" cellspacing="0">
								<tbody>
					<tr>
						<td><div class="eItem" style="background-position: 0px 0;" data-title="微笑" data-gifurl="<?php echo $IMG; ?>/admin/emotion/0.gif"></div></td>
						<td><div class="eItem" style="background-position: -24px 0;" data-title="撇嘴" data-gifurl="<?php echo $IMG; ?>/admin/emotion/1.gif"></div></td>
						<td><div class="eItem" style="background-position: -48px 0;" data-title="色" data-gifurl="<?php echo $IMG; ?>/admin/emotion/2.gif"></div></td>
						<td><div class="eItem" style="background-position: -72px 0;" data-title="发呆" data-gifurl="<?php echo $IMG; ?>/admin/emotion/3.gif"></div></td>
						<td><div class="eItem" style="background-position: -96px 0;" data-title="得意" data-gifurl="<?php echo $IMG; ?>/admin/emotion/4.gif"></div></td>
						<td><div class="eItem" style="background-position: -120px 0;" data-title="流泪" data-gifurl="<?php echo $IMG; ?>/admin/emotion/5.gif"></div></td>
						<td><div class="eItem" style="background-position: -144px 0;" data-title="害羞" data-gifurl="<?php echo $IMG; ?>/admin/emotion/6.gif"></div></td>
						<td><div class="eItem" style="background-position: -168px 0;" data-title="闭嘴" data-gifurl="<?php echo $IMG; ?>/admin/emotion/7.gif"></div></td>
						<td><div class="eItem" style="background-position: -192px 0;" data-title="睡" data-gifurl="<?php echo $IMG; ?>/admin/emotion/8.gif"></div></td>
						<td><div class="eItem" style="background-position: -216px 0;" data-title="大哭" data-gifurl="<?php echo $IMG; ?>/admin/emotion/9.gif"></div></td>
						<td><div class="eItem" style="background-position: -240px 0;" data-title="尴尬" data-gifurl="<?php echo $IMG; ?>/admin/emotion/10.gif"></div></td>
						<td><div class="eItem" style="background-position: -264px 0;" data-title="发怒" data-gifurl="<?php echo $IMG; ?>/admin/emotion/11.gif"></div></td>
						<td><div class="eItem" style="background-position: -288px 0;" data-title="调皮" data-gifurl="<?php echo $IMG; ?>/admin/emotion/12.gif"></div></td>
						<td><div class="eItem" style="background-position: -312px 0;" data-title="呲牙" data-gifurl="<?php echo $IMG; ?>/admin/emotion/13.gif"></div></td>
						<td><div class="eItem" style="background-position: -336px 0;" data-title="惊讶" data-gifurl="<?php echo $IMG; ?>/admin/emotion/14.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -360px 0;" data-title="难过" data-gifurl="<?php echo $IMG; ?>/admin/emotion/15.gif"></div></td>
						<td><div class="eItem" style="background-position: -384px 0;" data-title="酷" data-gifurl="<?php echo $IMG; ?>/admin/emotion/16.gif"></div></td>
						<td><div class="eItem" style="background-position: -408px 0;" data-title="冷汗" data-gifurl="<?php echo $IMG; ?>/admin/emotion/17.gif"></div></td>
						<td><div class="eItem" style="background-position: -432px 0;" data-title="抓狂" data-gifurl="<?php echo $IMG; ?>/admin/emotion/18.gif"></div></td>
						<td><div class="eItem" style="background-position: -456px 0;" data-title="吐" data-gifurl="<?php echo $IMG; ?>/admin/emotion/19.gif"></div></td>
						<td><div class="eItem" style="background-position: -480px 0;" data-title="偷笑" data-gifurl="<?php echo $IMG; ?>/admin/emotion/20.gif"></div></td>
						<td><div class="eItem" style="background-position: -504px 0;" data-title="可爱" data-gifurl="<?php echo $IMG; ?>/admin/emotion/21.gif"></div></td>
						<td><div class="eItem" style="background-position: -528px 0;" data-title="白眼" data-gifurl="<?php echo $IMG; ?>/admin/emotion/22.gif"></div></td>
						<td><div class="eItem" style="background-position: -552px 0;" data-title="傲慢" data-gifurl="<?php echo $IMG; ?>/admin/emotion/23.gif"></div></td>
						<td><div class="eItem" style="background-position: -576px 0;" data-title="饥饿" data-gifurl="<?php echo $IMG; ?>/admin/emotion/24.gif"></div></td>
						<td><div class="eItem" style="background-position: -600px 0;" data-title="困" data-gifurl="<?php echo $IMG; ?>/admin/emotion/25.gif"></div></td>
						<td><div class="eItem" style="background-position: -624px 0;" data-title="惊恐" data-gifurl="<?php echo $IMG; ?>/admin/emotion/26.gif"></div></td>
						<td><div class="eItem" style="background-position: -648px 0;" data-title="流汗" data-gifurl="<?php echo $IMG; ?>/admin/emotion/27.gif"></div></td>
						<td><div class="eItem" style="background-position: -672px 0;" data-title="憨笑" data-gifurl="<?php echo $IMG; ?>/admin/emotion/28.gif"></div></td>
						<td><div class="eItem" style="background-position: -696px 0;" data-title="大兵" data-gifurl="<?php echo $IMG; ?>/admin/emotion/29.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -720px 0;" data-title="奋斗" data-gifurl="<?php echo $IMG; ?>/admin/emotion/30.gif"></div></td>
						<td><div class="eItem" style="background-position: -744px 0;" data-title="咒骂" data-gifurl="<?php echo $IMG; ?>/admin/emotion/31.gif"></div></td>
						<td><div class="eItem" style="background-position: -768px 0;" data-title="疑问" data-gifurl="<?php echo $IMG; ?>/admin/emotion/32.gif"></div></td>
						<td><div class="eItem" style="background-position: -792px 0;" data-title="嘘" data-gifurl="<?php echo $IMG; ?>/admin/emotion/33.gif"></div></td>
						<td><div class="eItem" style="background-position: -816px 0;" data-title="晕" data-gifurl="<?php echo $IMG; ?>/admin/emotion/34.gif"></div></td>
						<td><div class="eItem" style="background-position: -840px 0;" data-title="折磨" data-gifurl="<?php echo $IMG; ?>/admin/emotion/35.gif"></div></td>
						<td><div class="eItem" style="background-position: -864px 0;" data-title="衰" data-gifurl="<?php echo $IMG; ?>/admin/emotion/36.gif"></div></td>
						<td><div class="eItem" style="background-position: -888px 0;" data-title="骷髅" data-gifurl="<?php echo $IMG; ?>/admin/emotion/37.gif"></div></td>
						<td><div class="eItem" style="background-position: -912px 0;" data-title="敲打" data-gifurl="<?php echo $IMG; ?>/admin/emotion/38.gif"></div></td>
						<td><div class="eItem" style="background-position: -936px 0;" data-title="再见" data-gifurl="<?php echo $IMG; ?>/admin/emotion/39.gif"></div></td>
						<td><div class="eItem" style="background-position: -960px 0;" data-title="擦汗" data-gifurl="<?php echo $IMG; ?>/admin/emotion/40.gif"></div></td>
						<td><div class="eItem" style="background-position: -984px 0;" data-title="抠鼻" data-gifurl="<?php echo $IMG; ?>/admin/emotion/41.gif"></div></td>
						<td><div class="eItem" style="background-position: -1008px 0;" data-title="鼓掌" data-gifurl="<?php echo $IMG; ?>/admin/emotion/42.gif"></div></td>
						<td><div class="eItem" style="background-position: -1032px 0;" data-title="糗大了" data-gifurl="<?php echo $IMG; ?>/admin/emotion/43.gif"></div></td>
						<td><div class="eItem" style="background-position: -1056px 0;" data-title="坏笑" data-gifurl="<?php echo $IMG; ?>/admin/emotion/44.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -1080px 0;" data-title="左哼哼" data-gifurl="<?php echo $IMG; ?>/admin/emotion/45.gif"></div></td>
						<td><div class="eItem" style="background-position: -1104px 0;" data-title="右哼哼" data-gifurl="<?php echo $IMG; ?>/admin/emotion/46.gif"></div></td>
						<td><div class="eItem" style="background-position: -1128px 0;" data-title="哈欠" data-gifurl="<?php echo $IMG; ?>/admin/emotion/47.gif"></div></td>
						<td><div class="eItem" style="background-position: -1152px 0;" data-title="鄙视" data-gifurl="<?php echo $IMG; ?>/admin/emotion/48.gif"></div></td>
						<td><div class="eItem" style="background-position: -1176px 0;" data-title="委屈" data-gifurl="<?php echo $IMG; ?>/admin/emotion/49.gif"></div></td>
						<td><div class="eItem" style="background-position: -1200px 0;" data-title="快哭了" data-gifurl="<?php echo $IMG; ?>/admin/emotion/50.gif"></div></td>
						<td><div class="eItem" style="background-position: -1224px 0;" data-title="阴险" data-gifurl="<?php echo $IMG; ?>/admin/emotion/51.gif"></div></td>
						<td><div class="eItem" style="background-position: -1248px 0;" data-title="亲亲" data-gifurl="<?php echo $IMG; ?>/admin/emotion/52.gif"></div></td>
						<td><div class="eItem" style="background-position: -1272px 0;" data-title="吓" data-gifurl="<?php echo $IMG; ?>/admin/emotion/53.gif"></div></td>
						<td><div class="eItem" style="background-position: -1296px 0;" data-title="可怜" data-gifurl="<?php echo $IMG; ?>/admin/emotion/54.gif"></div></td>
						<td><div class="eItem" style="background-position: -1320px 0;" data-title="菜刀" data-gifurl="<?php echo $IMG; ?>/admin/emotion/55.gif"></div></td>
						<td><div class="eItem" style="background-position: -1344px 0;" data-title="西瓜" data-gifurl="<?php echo $IMG; ?>/admin/emotion/56.gif"></div></td>
						<td><div class="eItem" style="background-position: -1368px 0;" data-title="啤酒" data-gifurl="<?php echo $IMG; ?>/admin/emotion/57.gif"></div></td>
						<td><div class="eItem" style="background-position: -1392px 0;" data-title="篮球" data-gifurl="<?php echo $IMG; ?>/admin/emotion/58.gif"></div></td>
						<td><div class="eItem" style="background-position: -1416px 0;" data-title="乒乓" data-gifurl="<?php echo $IMG; ?>/admin/emotion/59.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -1440px 0;" data-title="咖啡" data-gifurl="<?php echo $IMG; ?>/admin/emotion/60.gif"></div></td>
						<td><div class="eItem" style="background-position: -1464px 0;" data-title="饭" data-gifurl="<?php echo $IMG; ?>/admin/emotion/61.gif"></div></td>
						<td><div class="eItem" style="background-position: -1488px 0;" data-title="猪头" data-gifurl="<?php echo $IMG; ?>/admin/emotion/62.gif"></div></td>
						<td><div class="eItem" style="background-position: -1512px 0;" data-title="玫瑰" data-gifurl="<?php echo $IMG; ?>/admin/emotion/63.gif"></div></td>
						<td><div class="eItem" style="background-position: -1536px 0;" data-title="凋谢" data-gifurl="<?php echo $IMG; ?>/admin/emotion/64.gif"></div></td>
						<td><div class="eItem" style="background-position: -1560px 0;" data-title="示爱" data-gifurl="<?php echo $IMG; ?>/admin/emotion/65.gif"></div></td>
						<td><div class="eItem" style="background-position: -1584px 0;" data-title="爱心" data-gifurl="<?php echo $IMG; ?>/admin/emotion/66.gif"></div></td>
						<td><div class="eItem" style="background-position: -1608px 0;" data-title="心碎" data-gifurl="<?php echo $IMG; ?>/admin/emotion/67.gif"></div></td>
						<td><div class="eItem" style="background-position: -1632px 0;" data-title="蛋糕" data-gifurl="<?php echo $IMG; ?>/admin/emotion/68.gif"></div></td>
						<td><div class="eItem" style="background-position: -1656px 0;" data-title="闪电" data-gifurl="<?php echo $IMG; ?>/admin/emotion/69.gif"></div></td>
						<td><div class="eItem" style="background-position: -1680px 0;" data-title="炸弹" data-gifurl="<?php echo $IMG; ?>/admin/emotion/70.gif"></div></td>
						<td><div class="eItem" style="background-position: -1704px 0;" data-title="刀" data-gifurl="<?php echo $IMG; ?>/admin/emotion/71.gif"></div></td>
						<td><div class="eItem" style="background-position: -1728px 0;" data-title="足球" data-gifurl="<?php echo $IMG; ?>/admin/emotion/72.gif"></div></td>
						<td><div class="eItem" style="background-position: -1752px 0;" data-title="瓢虫" data-gifurl="<?php echo $IMG; ?>/admin/emotion/73.gif"></div></td>
						<td><div class="eItem" style="background-position: -1776px 0;" data-title="便便" data-gifurl="<?php echo $IMG; ?>/admin/emotion/74.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -1800px 0;" data-title="月亮" data-gifurl="<?php echo $IMG; ?>/admin/emotion/75.gif"></div></td>
						<td><div class="eItem" style="background-position: -1824px 0;" data-title="太阳" data-gifurl="<?php echo $IMG; ?>/admin/emotion/76.gif"></div></td>
						<td><div class="eItem" style="background-position: -1848px 0;" data-title="礼物" data-gifurl="<?php echo $IMG; ?>/admin/emotion/77.gif"></div></td>
						<td><div class="eItem" style="background-position: -1872px 0;" data-title="拥抱" data-gifurl="<?php echo $IMG; ?>/admin/emotion/78.gif"></div></td>
						<td><div class="eItem" style="background-position: -1896px 0;" data-title="强" data-gifurl="<?php echo $IMG; ?>/admin/emotion/79.gif"></div></td>
						<td><div class="eItem" style="background-position: -1920px 0;" data-title="弱" data-gifurl="<?php echo $IMG; ?>/admin/emotion/80.gif"></div></td>
						<td><div class="eItem" style="background-position: -1944px 0;" data-title="握手" data-gifurl="<?php echo $IMG; ?>/admin/emotion/81.gif"></div></td>
						<td><div class="eItem" style="background-position: -1968px 0;" data-title="胜利" data-gifurl="<?php echo $IMG; ?>/admin/emotion/82.gif"></div></td>
						<td><div class="eItem" style="background-position: -1992px 0;" data-title="抱拳" data-gifurl="<?php echo $IMG; ?>/admin/emotion/83.gif"></div></td>
						<td><div class="eItem" style="background-position: -2016px 0;" data-title="勾引" data-gifurl="<?php echo $IMG; ?>/admin/emotion/84.gif"></div></td>
						<td><div class="eItem" style="background-position: -2040px 0;" data-title="拳头" data-gifurl="<?php echo $IMG; ?>/admin/emotion/85.gif"></div></td>
						<td><div class="eItem" style="background-position: -2064px 0;" data-title="差劲" data-gifurl="<?php echo $IMG; ?>/admin/emotion/86.gif"></div></td>
						<td><div class="eItem" style="background-position: -2088px 0;" data-title="爱你" data-gifurl="<?php echo $IMG; ?>/admin/emotion/87.gif"></div></td>
						<td><div class="eItem" style="background-position: -2112px 0;" data-title="NO" data-gifurl="<?php echo $IMG; ?>/admin/emotion/88.gif"></div></td>
						<td><div class="eItem" style="background-position: -2136px 0;" data-title="OK" data-gifurl="<?php echo $IMG; ?>admin/emotion/89.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -2160px 0;" data-title="爱情" data-gifurl="<?php echo $IMG; ?>/admin/emotion/90.gif"></div></td>
						<td><div class="eItem" style="background-position: -2184px 0;" data-title="飞吻" data-gifurl="<?php echo $IMG; ?>/admin/emotion/91.gif"></div></td>
						<td><div class="eItem" style="background-position: -2208px 0;" data-title="跳跳" data-gifurl="<?php echo $IMG; ?>/admin/emotion/92.gif"></div></td>
						<td><div class="eItem" style="background-position: -2232px 0;" data-title="发抖" data-gifurl="<?php echo $IMG; ?>/admin/emotion/93.gif"></div></td>
						<td><div class="eItem" style="background-position: -2256px 0;" data-title="怄火" data-gifurl="<?php echo $IMG; ?>/admin/emotion/94.gif"></div></td>
						<td><div class="eItem" style="background-position: -2280px 0;" data-title="转圈" data-gifurl="<?php echo $IMG; ?>/admin/emotion/95.gif"></div></td>
						<td><div class="eItem" style="background-position: -2304px 0;" data-title="磕头" data-gifurl="<?php echo $IMG; ?>/admin/emotion/96.gif"></div></td>
						<td><div class="eItem" style="background-position: -2328px 0;" data-title="回头" data-gifurl="<?php echo $IMG; ?>/admin/emotion/97.gif"></div></td>
						<td><div class="eItem" style="background-position: -2352px 0;" data-title="跳绳" data-gifurl="<?php echo $IMG; ?>/admin/emotion/98.gif"></div></td>
						<td><div class="eItem" style="background-position: -2376px 0;" data-title="挥手" data-gifurl="<?php echo $IMG; ?>/admin/emotion/99.gif"></div></td>
						<td><div class="eItem" style="background-position: -2400px 0;" data-title="激动" data-gifurl="<?php echo $IMG; ?>/admin/emotion/100.gif"></div></td>
						<td><div class="eItem" style="background-position: -2424px 0;" data-title="街舞" data-gifurl="<?php echo $IMG; ?>/admin/emotion/101.gif"></div></td>
						<td><div class="eItem" style="background-position: -2448px 0;" data-title="献吻" data-gifurl="<?php echo $IMG; ?>/admin/emotion/102.gif"></div></td>
						<td><div class="eItem" style="background-position: -2472px 0;" data-title="左太极" data-gifurl="<?php echo $IMG; ?>/admin/emotion/103.gif"></div></td>
						<td><div class="eItem" style="background-position: -2496px 0;" data-title="右太极" data-gifurl="<?php echo $IMG; ?>/admin/emotion/104.gif"></div></td>
					</tr>
				</tbody>
			</table>
			<div class="emotionsGif"></div>
		</div>
		<div class="clr"></div>
	</div>
	<div class="editArea">
		<textarea id="welcome" name="welcome" style="display: none;">		
			
		
		</textarea>
		<div style="overflow-y: auto; overflow-x: hidden;" contenteditable="true"></div>
	</div>
</div>
<script type="text/javascript">
var $textarea = $(".editArea textarea");
var $contentDiv = $(".editArea div");
$(".functionBar .iconEmotion").click(function(){
	//Emotion.saveRange();
	$(".emotions").show();
});
$(".emotions").hover(function(){
	
},function(){
	$(".emotions").fadeOut();
});
$(".emotions .eItem").mouseenter(function(){
	$(".emotionsGif").html('<img src="'+$(this).attr("data-gifurl")+'">');
}).click(function(){
	Emotion.insertHTML('<img src="' + $(this).attr("data-gifurl") + '"' + 'alt="mo-' + $(this).attr("data-title") + '"' + "/>");
	$(".emotions").fadeOut();
	$textarea.trigger("contentValueChange");
});
$contentDiv.bind("keyup",function(){
	$textarea.trigger("contentValueChange");
	Emotion.saveRange();
}).bind("keydown",function(e){
    switch (e.keyCode) {
    case 8:
        var t = Emotion.getSelection();
        t.type && t.type.toLowerCase() === "control" && (e.preventDefault(), t.clear());
        break;
    case 13:
        e.preventDefault(),
        Emotion.insertHTML("<br/>");
        Emotion.saveRange();
    }
}).bind("mouseup",function(e){
    Emotion.saveRange();
    if ($.browser.msie && />$/.test($contentDiv.html())) {
        var n = Emotion.getSelection();
        n.extend && (n.extend(cursorNode, cursorNode.length), n.collapseToEnd()),
        Emotion.saveRange();
        Emotion.insertHTML(" ");
    }
});
$textarea.bind("contentValueChange",function(){
	$(this).val(Emotion.replaceInput($contentDiv.html()));
});
$contentDiv.html(Emotion.replaceEmoji($contentDiv.html()));
</script>
			      		<span class="maroon">*</span><span class="help-inline">必填, 用户添加您的时候自动回复语</span>
			        </div>
		      </div>
    	  </div>
    
          <div class="form-actions">
            <button type="submit" class="btn btn-primary" id="submitbtn">保存</button>
          </div>
        </fieldset>
      </form>
      
<div id="gotonext" >
	<img src="<?php echo $IMG; ?>/admin/v3/guanjianzi.png" ></img>
</div>
  
<br/><br/><br/></body></html>