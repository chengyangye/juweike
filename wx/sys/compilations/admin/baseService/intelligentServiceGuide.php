<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">

<style type="text/css">
	html , body{
		height: 100%;
	}
	h4{
		margin: 0px;
	}
	.chat , .teach{
		width: 400px;
		margin-top: 20px;
		position: relative;
		float: left;
		margin-left: 30px;
	}
	.header{
		height: 42px;
		padding-left: 20px;
		padding-top: 10px;
		background: url("/media/images/admin/intelligentService/teach-header-bg.png") repeat-x;
	}
	.header h4{
		padding-left: 20px;
		color: #666;
	}
	.left-wrapper .header h4{
		background: url("/media/images/admin/intelligentService/ai-teach.png") no-repeat 0 -123px;
	}
	.right-wrapper .header h4{
		background: url("/media/images/admin/intelligentService/ai-teach.png") no-repeat 0 -143px;
	}
	.chat-segment{
		font-family: Arial,'宋体';
		font-size: 12px;
		padding: 0 5px 3px 5px;
	}
	.chat-segment .robotContent{
		color: #10528f;
		padding-left: 15px;
	}
	.left-wrapper , .right-wrapper{
		border: 1px solid #CECECE;
	}
	.robotName{
		color: #0096DD;
		font-weight: bolder;
		margin-top: 8px;
	}
	.outputArea{
		height: 288px;
		overflow: auto;
		width: 100%;
	}
	.outputArea .userName{
		color: #40a519;
		font-weight: ;
		margin-top: 8px;
	}
	.outputArea .messageDate{
		color: #999999;
		padding-left: 10px;
	}
	.outputArea .userContent{
		color: #2272bd;
		padding-left: 15px;
	}
	#inputAreaDiv{
		height: 85px;
		width: 100%;
	}
	#inputArea {
		padding: 6px;
		height: 40px;
		width: 385px;
		margin-top: 10px;
		font-size: 12px;
		font-color: #666;
		line-height: 18px;
		text-align: left;
		text-indent: 0;
	}
	.cur-ques{
		color: #0198DB;
		padding: 0 0 15px 15px;
	}
	#question{
		margin-left: 10px;
		font-weight: bold;
	}
	#question .init{
		color: gray;
	}
	.t-btn{
		height: 27px;
		background: url("/media/images/admin/intelligentService/ai-teach.png") no-repeat;
		color: white;
		border: none;
		width: 80px;
	}
	#send , #addAns{
		background-position: 0 -60px;
	}
	#send:hover , #addAns:hover{
		background-position: 0 -91px;
	}
	#delAns{
		background-position:0 2px; 
	}
	#delAns:hover{
		background-position:0 -29px; 
	}
	.command-help{
		margin-top: 20px;
	}
	.command-help li{
		list-style-type: decimal;
	}
	#ans-table td{
		word-break: break-all;
	}
	#ans-table .check-col{
		width: 30px;
	}
	.ans-check{
		width: 30px;
	}
	.ans-wrapper{
		height: 250px;
		overflow-y:auto;
	}
	.pagination{
		float: right;
		margin-top: 10px;
	}
	.oper{
		margin-top: 10px;
	}
	.red{
		margin: 0 3px;
	}
	
	#add_ans_dialog textarea{
		width: 350px;
		height: 60px;
	}
	
	#add_ans_dialog td{
		padding: 10px;
	}
	
	#add_ans_dialog .left{
		width: 40px;
	}
	
	#add_ans_dialog #ques{
		color: #0198DB;
	}
	.error{
		color: red;
	}
	.loader{
		position: absolute;
		top: 200px;
		left: 200px;
	}
</style>

<title>机器人自定义调教</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
<body>
 <legend>智能客服设置</legend>
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">×</button>
	  	<span>1. 您可以在”对话窗口“中进行客服专属库的对话模拟。也可以在”我的回答库“中手动添加当前问题的答案。</span><br>
	  	<span>2. 调教完成后，微信用户的相关提问会得到你预先设置好的回答。</span><br>
	</div>
	<div class="chat">
		<div class="left-wrapper">
			<div class="header">
				<h4>智能客服调教系统</h4>
			</div>
			<div class="outputArea">
				<div class="chat-segment">
					<span class="robotName">专属客服</span>
					<div style="" class="robotContent">
						<span style="color:#002060;">您好，欢迎来到专属客服的调教世界。您可以和我聊天，也可以教教我哦。</span>
					</div>
				</div>						
			</div>
		</div>
		<div id="inputAreaDiv">
			<form id="talk_form" action="" method="post">
				<textarea id="inputArea" name="content" placeholder="请在这里输入您的问题"></textarea>
				<button type="button" class="t-btn" id="send">提交</button>
				<span>(按Ctrl+回车   可以快速提交)</span>
			</form>
		</div>
	</div>
	
	<div class="teach">
		<div class="right-wrapper">
			<div class="header">
				<h4>我的回答库</h4>
			</div>
			<div class="cur-ques">
				当前问题:<span id="question"><span class="init">(您还未提问过。)</span></span>
			</div>	
			<div id="ans-table">
				<table class="table table-bordered">
					<tbody id="de">
						<tr>
							<td style="background-color: #F6F6F6">&nbsp;</td>
						</tr>
						<tr>
							<td style="text-align:center">&nbsp;<img src="<?php echo $IMG; ?>/admin/intelligentService/no-ans.png"></td>
						</tr>
						<tr>
							<td style="background-color: #F6F6F6">&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
					</tbody>
                   <tbody id="meq">
                   </tbody>
				</table>
			</div>
		</div>
		<div class="oper">
			<button class="t-btn" id="addAns">添加问答</button>
			<button class="t-btn" id="delAns">删除回答</button>
		</div>
		<div class="command-help">
			客服名称：<input type="text" style="width:160px;height:16px" id="kefu_name" value="<?php echo $kf_name; ?>"/>
	  		<button type="button" class="t-btn" id="kefu_button">修改</button>
		</div>
		<div class="command-help">
	  		<a href="intelligentServiceMytk.html">点击此处查看我的题库</a>
		</div>
		
		<img id="loader" class="loader" style="display:none" src="<?php echo $IMG; ?>/admin/intelligentService/loading.gif">
	</div>
	
	<div id="add_ans_dialog" class="modal hide fade">
		<div class="modal-header">
	    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    	<h3>添加回答</h3>
 		</div>
	  	<div class="modal-body">
	    	<table>
	    		<tbody><tr>
	    			<td class="left">问题:</td>
	    			<td><span id="ques"></span></td>
	    		</tr>
	    		<tr>
	    			<td class="left">答案:</td>
	    			<td><textarea id="answer" name="answer" placeholder="请在这里输入回答"></textarea><span class="error" style="display:none">必填！</span></td>
	    		</tr>
	    	</tbody></table>
	  	</div>
	  	<div class="modal-footer">
		    <a href="javascript:void(0)" class="btn btn-primary" id="save_ans">保存</a>
		    <a href="javascript:void(0)" class="btn" id="cancel">取消</a>
	  	</div>
	</div>

<script type="text/javascript" src="<?php echo $JS; ?>bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $JS; ?>operamasks_ui.js"></script>
<script type="text/javascript" src="<?php echo $JS; ?>html_helper.js"></script>
<script>
	$(function(){
		$("#send").click(function(){
			var tj = 'tj';
			var content = $("#inputArea").val(); 
			content = $.trim(content).replace(/^[\s\u00A0\u3000]+/g,"").replace(/[\s\u00A0\u3000]+$/,"");
			if(content != ""){
				$('<div class="chat-segment"><span class="userName">我</span><span class="messageDate">'+getTime()+'</span><div class="userContent" style="">'+$.htmlEncode(content)+'</div></div>	').appendTo(".outputArea");
			
				$(".outputArea").scrollTop($(".outputArea")[0].scrollHeight); 
				$.post('intelligentServiceGuide.html',{ action:tj,question:content},function(data){
					if(data != ''){
						 $('<div class="chat-segment"><span class="robotName"><?php echo $kf_name; ?></span><span class="messageDate">'+getTime()+'</span><div class="robotContent"><span style="color:#666;">'+$.htmlEncode(data)+'</span></div></div>').appendTo(".outputArea");
		       			 $(".outputArea").scrollTop($(".outputArea")[0].scrollHeight);
					}
				},'text');
		     
			//	$("#inputArea").val("");
				
				if(content.indexOf("#CN")!=0 && content.indexOf("#CP")!=0 && content.indexOf("#DE")!=0){
					$("#question").text(content);							
					//提交时同时发起请求获取答案
					getAns();
				}
			}		
			return false;
		});		
		
		$("#inputArea").keypress(function(e){
			//Ctrl+Enter，也相当于提交
			if(e.ctrlKey && e.which == 13 || e.which == 10){
				$("#send").click();
			}
		});
		
		$(".teach").delegate(".pagination a[href]","click",function(event){
			getAns($(this).attr("href"));
			event.preventDefault();
		});
		
		$("#addAns").click(function(){
			if($("#question .init").length > 0){
				alert("请在左边先输入问题并提交!");
			}else{
				$("#ques").text($("#question").text());
				$("#add_ans_dialog").modal("show");
			}
		});
		//删除我的回答
		$("#delAns").click(function(){
			var del = 'del_ans';
			var $checked = $("#ans-table :checked");
			if($checked.length == 0){
				alert("删除操作至少要选择一个回答。");
			}else{
				var id = $('#my_ans').attr("data-id");
				$.post("intelligentServiceGuide.html",{ action:del , id:id} , function(result){
							if(result == 1){
								getAns();
							}else{
								alert("删除失败。");
							}
						} , "text");
			}
		});
		
		$('#add_ans_dialog').on('show', function () {
			 $("#answer").val("");
			 $("#add_ans_dialog .error").hide();
		}).on('hide' , function(){
		})
		
		$("#save_ans").click(function(){
			var save_ans = 'save_ans';
			var answer = $("#answer").val();
			answer = $.trim(answer).replace(/^[\s\u00A0\u3000]+/g,"").replace(/[\s\u00A0\u3000]+$/,"");
			if(answer == ""){
				$("#add_ans_dialog .error").show();		
				return ;
			}
			$.post("intelligentServiceGuide.html",
					{ action:save_ans,ques:$.trim($("#question").text()),ans:$("#answer").val()} , function(result){
						
						if(result == 1){
							getAns();
						}else if(result == 0){
							alert('请勿重复添加。');
						}else{
							alert("添加回答失败!");
						}
						$("#add_ans_dialog").modal("hide");		
					} , "text");
		});
		
		$("#cancel").click(function(){
			$("#add_ans_dialog").modal("hide");
		});
	});
	function getAns(){ 
		var getAns = 'getAns';
		$.get("intelligentServiceGuide.html" ,{ action:getAns,ques:$("#question").text()} , function(resText){ 
            $("#ans").remove();
	        if(resText.success == false){
	        	    $("#de").show();
	        }else{
	          $("#de").hide();
			  $("#meq").html('<tr id="ans"><td class="check-col"><input id="my_ans" class="ans-check" type="checkbox" data-id="'+resText.id+'"></td><td>'+resText.answer+'</td></tr>');
	        }
	      },'json');
		
	}
	function getTime(){
		var d = new Date();
		var h = d.getHours()<10?"0"+d.getHours() : d.getHours();
		var m  = d.getMinutes()<10?"0"+d.getMinutes() : d.getMinutes();
		var s = d.getSeconds()<10?"0"+d.getSeconds() : d.getSeconds();
		return h+":"+m+":"+s;
	}
//修改客服名称
	$(function(){
		  $("#kefu_button").click(function(){
			  var kefu_name   = $.trim($("#kefu_name").val());
			  if(kefu_name == ''){
				  tusi('请填写客服名称。');
				  return false;
			  }
			  ajax('intelligentServiceGuide-kefu_name.html',{ name:kefu_name},function(data){
				  if(data == 1){
					  tusi('修改成功!');
					  setTimeout(function(){
						  location.href=location.href;
					  },1500); 
				  }
				  
			  });
		  });
		});
</script>

<br/><br/><br/></body></html>