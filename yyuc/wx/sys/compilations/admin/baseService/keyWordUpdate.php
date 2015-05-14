<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css" />
<style type="text/css">
	table td {
		min-width:50px;
		overflow:hidden;text-overflow:ellipsis;
	}
</style>

<title>关键词管理</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
<body>
	
	<form class="form-horizontal" style="" id="qform" action="" method="post">
		<input value="21480" style="display:none;" id="qid" type="text">
        <fieldset>
          <legend>关键词修改</legend>
          <div class="control-group">
            <label class="control-label" for="input01">关键词</label>
            <div class="controls">
            <?php echo $keyWord->hidden('id'); ?>
            <?php echo $keyWord->text('keyWord'); ?>
            
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
            <button type="submit" class="btn btn-primary" id="submitbtn">保存</button>
           <!--  <button type="submit" class="btn btn-primary" id="saveandjump">保存并设置回复</button> -->
            <button class="btn">取消</button>
          </div>
        </fieldset>
      </form>

<br/><br/><br/></body></html>