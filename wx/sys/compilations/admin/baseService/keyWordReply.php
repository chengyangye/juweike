<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>关键字回复</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<style type="text/css">
	table td {
		min-width:50px;
		overflow:hidden;text-overflow:ellipsis;
	}
	
	
</style>


<title>关键词管理</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
<body>
	<div id="questionsContainer">
		<h4>自定义关键词</h4>
		<div class="form-horizontal">
			<div class="control-group">
			    <div class="controls">
			   <!--   <form id="k_search" action="" method="post"> -->
			    	<select class="span2" id="querytype">
					  <option selected="selected" value="1">关键词查询</option>
					</select>
				<!-- 	<?php echo $keyWord->text('keyWord',array('class'=>'span3')); ?> -->
			    	<input id="keyword-input" class="span3" type="text" value="<?php echo htmlspecialchars(($kww),ENT_QUOTES); ?>">
			    	<button id="checkkeyword-btn" class="btn btn-primary">查询</button>
			    	<button id="reset-btn" class="btn btn-primary">重置</button>
			 <!--    </form> -->
			    </div>
		    </div>
		</div>
		<div class="tb-toolbar">
			<button class="btn btn-small btn-primary" id="add">新增</button>
			<button class="btn btn-small" id="del">删除</button>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th style="width:10px;"><!-- <input type="checkbox"  onclick="selallck(this);"> --></th>
					<th>关键词</th>
				<!-- 	<th style="display: none">关键词类型</th> -->
					<!-- <th>绑定公众账户</th> -->
					<th>对应回复</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody id="t">
			<?php $__i=0; foreach ((array)$rs as $item) { $__i++; ?>
			 
			      <tr>
						<td>
						<input type="checkbox"  value="<?php echo $item->id; ?>">
						</td>
						<td><?php echo $item->keyWord; ?></td>
						<td>
					   <a href="javascript:void(0)" onclick="goto('kwReply-<?php echo $item->id; ?>.html');">编辑回复内容</a>				
						</td>
						<td>
						<span>
						[
						<a href="javascript:void(0);"  onclick="if(confirm('确定要修改吗？')){ goto('keyWordUpdate-<?php echo edit; ?>-<?php echo $item->id; ?>.html');}">修改关键字</a>
						]
						</span>
						<span>
						[
						<a href="javascript:void(0);" onclick="if(confirm('确定要删除吗？')){ goto('keyWordReply-<?php echo del; ?>-<?php echo $item->id; ?>.html');}">删除</a>
						]
						</span>
						</td>
				  </tr>
			<?php } ?>
		
			</tbody>
		</table>
		
		


<div class="pagination">
  <ul>

    <?php if(isset($P)&&($P->totalpage>1||$P->showifone)){  if (!$P->isfirst){ ?>
<li class="pagination_first"><a href="<?php echo $P->firstlink; ?>"><span>第一页</span></a></li>
<?php }  if (!$P->isfirst){ ?>
<li class="pagination_prev"><a href="<?php echo $P->prevlink; ?>"><span>上一页</span></a></li>
<?php }  if($P->needleftgap){ ?><li class="page_gap separator"><span>...</span></li><?php }  for($page_num=$P->startpage;$page_num<=$P->endpage;$page_num++){  $page_link = $P->firstlink;  if($page_num!=1){  $page_link = ($P->commonlink.Conf::$paging_separate.$page_num.Conf::$suffix).$P->querystr;  }  if($page_num==$P->pagenum){ ?><li class="pagination_current current"><span><?php echo $page_num; ?></span></li><?php }else{ ?><li class="pagination_common"><a href="<?php echo $page_link; ?>"><span><?php echo $page_num; ?></span></a></li><?php }  }  if($P->needrightgap){ ?><li class="page_gap separator"><span>...</span></li><?php }  if (!$P->islast){ ?>
<li class="pagination_next"><a href="<?php echo $P->nextlink; ?>"><span>下一页</span></a></li>
<?php }  if (!$P->islast){ ?>
<li class="pagination_last"><a href="<?php echo $P->lastlink; ?>"><span>末页</span></a></li>
<?php }  } ?>
  </ul>
  
</div>
	</div>
	<form class="form-horizontal" style="display: none;" id="qform" method="post" action=""><?php echo tk(); ?>
		<input value="-1" style="display:none;" id="qid" type="text">
        <fieldset>
          <legend>关键词添加</legend>
          <div class="control-group">
            <label class="control-label" for="input01">关键词</label>
            <div class="controls">
              <?php echo $keyWord->text('keyWord');; ?>
           <!--    <input class="input-xlarge" id="input01" name="keyword" type="text"> -->
              <p class="help-block">
			  	<span class="maroon">*</span> 必填，亲，多个关键词可以使用英文逗号“,”分隔，拒绝中文逗号“，”喔！任意匹配项请将关键词设为"*"。
	      	  </p>
            </div>
          </div>
          <div class="control-group">
	    	<label class="control-label" for="keytype">匹配类型：</label>
	    	<div class="controls">
				
				<?php echo $keyWord->select(array('1'=>'模糊匹配','2'=>'全匹配'),'matchingType'); ?>
				<p class="help-block">
			  	<span class="maroon">*</span><span class="help-inline">必选，全匹配是对话完全一致才能触发，模糊匹配是是要包含就触发，两种匹配均不区分大小写。</span>
			  	</p>
	    	</div>
		  </div>
          <div class="control-group">
           <!--  <label class="control-label" for="select01">绑定公众号</label>
            <div class="controls">
             <?php echo $keyWord->select($pub,'pubsId'); ?>
              <p class="help-block">
			  	<span class="maroon">*</span> 必选，如果不存在公众号请先创建公众号
	      	  </p>
            </div> -->
          </div>
          <div class="form-actions">
            <button type="button" class="btn btn-primary" id="submitbtn" onclick="keyWordCheck()">保存</button>
          <!--   <button type="submit" class="btn btn-primary" id="saveandjump">保存并设置回复</button> -->
            <button class="btn">取消</button>
          </div>
        </fieldset>
      </form>
	
<div id="gotonext" >
	<img src="<?php echo $IMG; ?>/admin/v3/lbs1.png" ></img>
</div>


<br/><br/><br/></body></html>
<script>
function keyWordCheck(){
		var kw = $("#key_wordkeyWord").val();
		if(kw ==''){
			tusi('关键字不能为空');
		    return false;
		}else{
			 $('#qform').submit();
		}
		
	}
function selallck(o){ 
	if($(o).prop('checked')){
		$('td').find('input[type="checkbox"]').prop('checked',true);
	}else{
		$('td').find('input[type="checkbox"]').prop('checked',false);
	}
}
</script>	
<script>
	$(function(){
		
		//gotonext
		$("#gotonext").click(function(){
    		window.parent.$('.menu-lbs').trigger('click');
		}); 
	
		// 添加切换界面
		 $("#add").click(function() { 
 			$("div#questionsContainer").hide();
			$("#qform").show()
				.find(".input-xlarge").val("")
				.end().find("legend").text("关键词添加")
				.end().find("#qid").val(-1);
		 });
		 
		// 点击修改切换界面
		 $("#questionsContainer tbody td span:first-child").click(function() {
			 $("div#questionsContainer").hide();
			 $("form.form-horizontal").show()
			 	.find("legend").text("关键词修改")
			 	.end().find("#qid").val($(this).closest("tr").find("td:first input").val());
			 var keywordTd = $(this).closest("tr").find("td:eq(1)");
			 $("input.input-xlarge").val(keywordTd.text());
			 $("select.select01").val(keywordTd.next().next().attr("botid"));
			 $("select[name='belongbot']").val(keywordTd.next().next().attr("botid"));
			 $("select#keytype").val(keywordTd.next().text());
		 });
		 
		// 点击返回则恢复
		 $(".form-actions button:last").click(function() {
			 $("form.form-horizontal").hide();
			 $("div#questionsContainer").show();
			 return false;
		 });
		 
		 // 处理 checkbox 的互动
		 $("table th input").click(function() {
			 $(this).closest("table").find("tbody input[type='checkbox']").attr("checked", !!$(this).attr("checked"));
		 });
		 $("tbody input[type='checkbox']").click(function(){
			 if (!$(this).attr("checked")) {
				 $("table th input").removeAttr("checked");
			 }
		 });
		 
		//批量删除关键字 
		 $("#del").click(function() {
			 var checkeds = $("table tbody input[type='checkbox']:checked");
			 if(checkeds.length) {
				 if(confirm("您确定要删除所选的关键词(将同时删除回复)?")) {
					 $(this).attr("disabled", true);
					 var idsArray = [];
					 checkeds.each(function() {
						idsArray.push($(this).val());
					 });
					 if (idsArray.length > 0) {
						 var qids = idsArray.join(','); 
						 $.get("keyWordReply.html", { type:'dels', ids:qids}, function (data){
							 if(data == 1){
								 alert('删除成功！');
							 }else{
								 alert('操作异常！');
							 }
							 location.reload(true);
						 },'text');
					 }
				 }
			 } else {
				 alert("请先选中需要删除的关键词");
			 }
		 });
		 
		 // 查询和重置
		 $("#checkkeyword-btn").click(function(){
			var queryContent = $("#keyword-input").val();
			if (queryContent == '') {
				alert("查询内容不能为空");
				return false;
			}
			window.location.href = "keyWordReply.html?keyword=" + queryContent;
		});
		 $("#reset-btn").click(function() {
			window.location.href = "keyWordReply.html";
			return false;
		 });
		 
		 // 处理添加/修改提交
		 $("#qform").validate({
			 rules : {
				keyword : { required:true},
				belongbot : { required:true}
		 	 }, 
			 messages : {
				keyword : {
					required : "关键词不能为空",
					required : "所属的公众账户不能为空"
				}
			 },
			 showErrors: function(errorMap, errorList) {
					if (errorList && errorList.length > 0) {
						$.each(errorList,
								function(index, obj) {
							var item = $(obj.element);
							// 给输入框添加出错样式
							item.closest(".control-group").addClass('error');
							item.attr("title",obj.message);
						});
					} else {
						var item = $(this.currentElements);
						item.closest(".control-group").removeClass('error');
						item.removeAttr("title");
					}
			 },
			 submitHandler : function() {
				 var submitButton = $(this.submitButton);
				 var $form = $("#qform");
				 $("#submitbtn").attr("disabled", true);
				 $("#saveandjump").attr("disabled", true);
				 var submitData = {
							keyword: $("input[name='keyword']", $form).val(),
							keytype:$("select#keytype",$form).val()
					};
				 if ($("select[name='belongbot']", $form).val()) {
					 submitData.botid = $("select[name='belongbot']", $form).val();
				 }
				 if ($("input#qid", $form).val() == -1) {
					 submitData.type = "add";
				 } else {
					 submitData.type = "modify";
					 submitData.qid = $("input#qid", $form).val();
				 }
				 $.post('qhandler', submitData,function(data) {
					 		$("#submitbtn").removeAttr("disabled");
					 		$("#saveandjump").removeAttr("disabled");
							if (data.success == true) {
								submitButton && submitButton.attr("id") == "saveandjump" ? location.href = ('answer.jsp?qid=' +  data.qid): location.reload();
							} else {
								alert(data.message || "操作失败");
							}
					},"json");
				 return false;
			 }
		 });

	});
</script>