<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/appmsg.css">
<style>
	body{
		padding-bottom: 20px;
	}
	.pagination{
		margin: 0 70px;
		float: right;
	}
	#first_col{
		display: inline-block; 
		zoom: 1; 
		*display: inline; 
	}
	#second_col{
		margin-left: 15px;
		display: inline-block; 
		zoom: 1; 
		*display: inline; 
	}
	.add-btn {
		height: 90px;
		margin: 0 18px;
		color: #b5b5b5;
		background: transparent url('<?php echo $IMG; ?>qadmin/appmsg-icon.png') no-repeat 50% -242px;
	}
	.multi-access {
		background-position: 50% -342px;
	}
	ul{
		padding: 0;
		margin: 0;
	}
	li{
		list-style-type: none;
	}
	.sub-msg-item {
		padding: 12px 14px;
		overflow: hidden;
		zoom: 1;
		border-top: 1px solid #c6c6c6;
	}
	.thumb {
		float: right;
		font-size: 0;
	}
	.thumb .default-tip {
		font-size: 16px;
		color: #c0c0c0;
		width: 70px;
		line-height: 70px;
		border: 1px solid #b2b8bd;
	}
	.thumb img {
		width: 70px;
		height: 70px;
		border: 1px solid #b2b8bd;
	}
	.sub-msg-item .msg-t {
		margin-left: 0;
		margin-right: 85px;
		margin-top: 0;
		padding-left: 4px;
		padding-top: 12px;
		line-height: 24px;
		max-height: 48px;
		font-size: 14px;
		overflow: hidden;
	}
	
	
</style>
<title>图文素材管理页面</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<script>
//删除单图文素材
function deldsc(id,o){
	if(confirm('确定删除此素材信息吗？')){
		ajax('contresourceone-del.html',{ id:id},function(m){
			if(m=='ok'){
				$('#dsc_'+id).remove();
			}
		});
	}
}
function delddsc(id,o){
	if(confirm('确定删除此素材信息吗？')){
		ajax('contresourcemore-del.html',{ id:id},function(m){
			if(m=='ok'){
				$('#dsc_'+id).remove();
			}
		});
	}	
}

$(function() {
	$("#gotonext").click(function(){
		window.parent.$('#shouciguanzhu').trigger('click');
	});
	<?php if ($sel){ ?>
	$('.msg-item').click(function(){
		$('.msg-item').unmask();
		var o = this;
		window.selitemid = $(o).attr('itemid'); 
		setTimeout(function(){
			$(o).mask();
			$('#qdxzdbtn').show().css('visibility','visible');
			$('#ddhpng').css('left',($(o).offset().left+$(o).width()/2-37)+'px');
			$('#ddhpng').css('top',($(o).offset().top+$(o).height()/2-30)+'px').show();
		},288);
	});
	$('.msg-item').dblclick(function(){
		parent.setselid(window.selitemid);
		parent.yyucpopclose();
	});
	$('#qdxzdbtn').click(function(){
		parent.setselid(window.selitemid);
		parent.yyucpopclose();
	});
	<?php } ?>
});




</script>
</head>

<body>
<img  src="/res/daduihao.png" style="display: none;position: absolute;z-index:999999" id="ddhpng">
	<div class="container">
		<div class="containerBox">
			<div id="gotonext" >
				<img src="<?php echo $IMG; ?>/admin/v3/shouciguanzhu.png" ></img>
			</div>
			<div class="boxHeader">
				<h4>素材管理</h4>
				
			</div>
			<div class="content">
				<h3 class="page-sub-hd">图文列表</h3>
				<div class="group page-nav">
				<div class="pagination">
   <button class="btn-large btn-primary" style="margin-top: -30px;visibility: hidden;" id="qdxzdbtn">确定选择</button> 
</div>
					<div class="clr"></div>
				</div>
		   		<div class="page-bd">
		   			<div class="tj msg-list">
		   				<!-- 偶数内容 -->
		   				<div id="first_col" class="b-dib vt msg-col">
							<div id="addAppmsg" class="tc add-access">       
								<a href="contresourceone.html" <?php if ($sel){ ?>target="_blank"<?php } ?> class="dib vm add-btn">+单图文消息</a>         
								<a href="contresourcemore.html" <?php if ($sel){ ?>target="_blank"<?php } ?> class="dib vm add-btn multi-access">+多图文消息</a>
					       </div>
		   					<?php $__i=0; foreach ((array)$list1 as $l) { $__i++; ?>
		   					<?php $ll = json_decode($l->con); ?>
		   					<div class="msg-item-wrapper" id="dsc_<?php echo $l->id; ?>">
		   					<div class="msg-item" itemid="<?php echo $l->id; ?>">
		   					<h4 class="msg-t"><a href="javascript:;" class="i-title"><?php echo $ll->tit; ?></a></h4>           
				   							<p class="msg-meta"><span class="msg-date"><?php echo date('Y-m-d'); ?></span></p>
											<div class="cover">
												<p class="default-tip" style="display:none">封面图片</p>
												<img src="<?php echo $ll->pic; ?>" class="i-img" style="">
											</div>
											<p class="msg-text"><?php echo $ll->des; ?></p>         
										</div>		   								   
										<div class="msg-opr">
											<ul class="f0 msg-opr-list">
												<li class="b-dib opr-item"><a data-mul="false" class="block tc opr-btn edit-btn" href="contresourceone-<?php echo $l->id; ?>.html" <?php if ($sel){ ?>target="_blank"<?php } ?> data-rid="20330"><span class="th vm dib opr-icon edit-icon">编辑</span></a></li>           
												<li class="b-dib opr-item"><a class="block tc opr-btn del-btn" href="javascript:;" data-rid="20330" onclick="deldsc(<?php echo $l->id; ?>,this)"><span class="th vm dib opr-icon del-icon">删除</span></a></li>         
											</ul>       
										</div>            
									</div>
		   					<?php } ?>
		   				</div>
		   				<!-- 奇数内容 -->
		   				<div id="second_col" class="b-dib vt msg-col">
			   				<?php $__i=0; foreach ((array)$list2 as $l) { $__i++; ?>			   				
		   					<?php $ll = json_decode($l->con); ?>		   					
				   					<div class="msg-item-wrapper" id="dsc_<?php echo $l->id; ?>">
					   							<div class="msg-item multi-msg"  itemid="<?php echo $l->id; ?>">
					   		<?php $__i=0; foreach ((array)$ll as $lll) { $__i++; ?>
					   		<?php if ($__i==1){ ?>
					   		<div class="appmsgItem">
	   							<h4 class="msg-t"><a href="javascript:;" class="i-title"></a></h4>           
	   							<p class="msg-meta"><span class="msg-date"><?php echo date('Y-m-d'); ?></span></p>
								<div class="cover">
									<img src="<?php echo $lll->pic; ?>" class="i-img" style="">
								</div>
								<p class="msg-text"><?php echo $lll->tit; ?></p>         
							</div>					   		
					   		<?php }else{ ?>
					   		<div class="rel sub-msg-item appmsgItem">              
							<span class="thumb">                 
							<img src="<?php echo $lll->pic; ?>" class="i-img" style="">
							</span>       
							<h4 class="msg-t">                 
							 <a href="javascript:;" target="_blank" class="i-title"><?php echo $lll->tit; ?></a>                
							</h4>       
							</div>
					   		<?php } ?>
					   		<?php } ?>
					   		</div>   
								<div class="msg-opr">
									<ul class="f0 msg-opr-list">
										<li class="b-dib opr-item"><a data-mul="true" class="block tc opr-btn edit-btn" href="contresourcemore-<?php echo $l->id; ?>.html" <?php if ($sel){ ?>target="_blank"<?php } ?> data-rid="20331"><span class="th vm dib opr-icon edit-icon">编辑</span></a></li>           
										<li class="b-dib opr-item"><a class="block tc opr-btn del-btn" href="javascript:delddsc(<?php echo $l->id; ?>,this);" data-rid="20331"><span class="th vm dib opr-icon del-icon">删除</span></a></li>         
									</ul>
								</div>
								</div>
							<?php } ?>
		   				</div>
		   			</div>
		   			
		   		</div>
		   		
		   		
		   		 
			</div>
			<!-- 
			<div class="sideBar">
			   	<div class="menu">
			   		<ul class="nav nav-list">
					  <li class="active"><a href="/admin/content/article?action=list" target="main">图文消息(8)</a></li>
					  <li><a href="/admin/content/voice?action=list" target="main">语音(120)</a></li>
					  <li><a href="account/pay.jsp" target="main">视频(0)</a></li>
					</ul>
			   	</div>
			</div>
			 -->
			
		   	<div class="clr">
	   	</div>
   	</div>


</div>



<br/><br/><br/></body></html>