<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/appmsg.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/appmsg-mul.css">
<style>
	body{
		padding: 20px;
		border-radius:10px; 
	}
	label{
	display: inline-block;
}
.help-inline{
	vertical-align: top;
}
.row{
	padding-top: 20px;
	padding-bottom: 20px;
}
.control-group img{
	max-width: 600px;
}
.jcbtncls{
	background:blue;
	border-radius:8px;
	color: #fff;
	padding:5px 12px;
	line-height: 30px;
	font-size: 16px;
	font-family: 'Microsoft Yahei';
}
</style>
<title>图文素材管理页面</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>


<script>
$(function(){
	$('body').delegate('.appmsgItem','mouseenter',function(){
		$(this).addClass('sub-msg-opr-show');
		window.curedt = $(this);
	});
	$('body').delegate('.appmsgItem','mouseleave',function(){
		$(this).removeClass('sub-msg-opr-show');
	});
	
});

//存贮校验
function czjy(){
	window.dqdiv.find('.m-con').html(window.kindeditor_fg.html());
	var tit = $.trim(window.dqdiv.find('.m-title').text());
	var img = window.dqdiv.find('img').attr('src');
	var url = $.trim(window.dqdiv.find('.m-url').text());
	var con = $.trim(window.dqdiv.find('.m-con').html());
	if(tit==''){
		alert('请填写标题');
		return false;
	}
	if(url=='' && con==''){
		alert('请编辑正文或者链接地址');
		return false;
	}
	return true;
}
function edititem(o,first){
	if(first || czjy()) {
		if(first){
			window.dqdiv = $('#appmsgItem1');
			$('.msg-editer-wrapper').css('marginTop','40px');
		}else{
			$('.msg-editer-wrapper').css('marginTop',($(o).offset().top-99)+'px');
		}
			
		window.dqdiv = window.curedt;	
		$('#title').val(window.dqdiv.find('.m-title').text());
		$('#url').val(window.dqdiv.find('.m-url').text());
		window.kindeditor_fg.html(window.dqdiv.find('.m-con').html());
	}	
}

function delitem(o){
	if(window.dqdiv[0] == window.curedt[0]){
		edititem(null,true);
	}
	if($('.appmsgItem').size()>2){
		$(o).parent().parent().parent().remove();
	}else{
		alert('多图文最少不得少于两篇内容');
	}	
}
function addaline(){
	var theitem = $('.msg-item-wrapper').find('.appmsgItem').eq(1);
	var bzitem = theitem.clone();
	bzitem.find('.m-title').text('标题');
	bzitem.find('.m-url').text('');
	bzitem.find('.m-con').html('');
	bzitem.find('.m-img').attr('src','/res/ddspic.png');
	$('.sub-add').before(bzitem);
}
var UEDITOR_HOME_URL = '/res/ueditor/';
function hidepicname(url,jo,name){
	$('#'+name+'_name').html('');
	$('#'+name+'_bfb').html('');
	cutok();
}
$(function(){
	window.dqdiv = $('#appmsgItem1');
	$('#title').on('change keyup blur',function(){
		window.dqdiv.find('.m-title').text($(this).val());
	});
	$('#url').on('change keyup blur',function(){
		window.dqdiv.find('.m-url').text($(this).val());
	});
	
	
    
    
    
    
    YYUC(function(){
    	window.curedt = $('body').find('.appmsgItem').eq(0);
		var ysdata = $.trim($('#ysdata').val());
		if(ysdata!=''){
			var jcon = $.evalJSON(ysdata);
			for(var i=0;i<jcon.length;i++){
				if(i>1){
					addaline();
				}
				var itm = $('.appmsgItem').eq(i);
				itm.find('.m-title').text(jcon[i].tit)
				itm.find('.m-url').text(jcon[i].url)
				itm.find('img').attr('src',jcon[i].pic)
				itm.find('.m-con').html(jcon[i].con)				
			}
		}
		edititem(null,true);
	});
});

//图片剪裁成功后调用
function cutok(){
	var timg = $('#picsethere').find('img');
	var url = timg.attr('src');
	window.dqdiv.find('.m-img').attr('src',url);
	timg.remove();
}



function savedate(){
	if(czjy()){
		var id = $.trim($('.msg-item-wrapper').attr('relid'));
		var data = [];
		$('.appmsgItem').each(function(){
			var sd = {};
			sd.tit = $.trim($(this).find('.m-title').text());
			sd.pic = $(this).find('img').attr('src');
			sd.url = $.trim($(this).find('.m-url').text());
			sd.con = $.trim($(this).find('.m-con').html());
			data[data.length] = sd;
		});
		loading('数据保存中...');
		ajaxjson('contresourcemore.html',{ id:id,data:data},function(m){
			goto('contresource.html');
		});
	}
}
$(function(){
	
});
</script>
</head>

<body>
<textarea id="ysdata" style="display: none;">
<?php echo $ysdata; ?>
</textarea>
<div class="row">
		<div class="span5 msg-preview" id="nrdiv1">
					
			<div class="msg-item-wrapper" relid="<?php echo $res->id; ?>">
				<div id="appmsgItem1" class="appmsgItem msg-item">
					<p class="msg-meta">
						<span class="msg-date"><?php echo date('Y-m-d'); ?></span>
					</p>
					<div class="cover">
						<img class="i-img m-img" src="/res/fmdtp.jpg" style="width: 440px;height: 176px;">
						<h4 class="msg-t">
							<span class="i-title m-title">标题</span>
						</h4>
						<ul class="abs tc sub-msg-opr">                 
							<li class="b-dib sub-msg-opr-item">                   
								<a href="javascript:;" onclick="edititem(this);" class="th opr-icon edit-icon">编辑</a>                 
							</li>               
						</ul>
						<img class="i-img" style="">
					</div>
					<p class="msg-text"></p>
					<div rel="con" class="m-con" style="display: none;"></div>
					<div rel="url" class="m-url" style="display: none;"></div>
					<input type="hidden" value="" class="sourceurl">
				</div>
				
				<div class="rel sub-msg-item appmsgItem">              
					<span class="thumb">                    
					<img class="i-img m-img" src="/res/ddspic.png" style="width: 72px;height: 72px;">
					</span>       
					<h4 class="msg-t">                    
					<span class="i-title m-title">标题</span>                
					</h4>       
					<ul class="abs tc sub-msg-opr">         
						<li class="b-dib sub-msg-opr-item">           
							<a href="javascript:;" onclick="edititem(this);" class="th opr-icon edit-icon">编辑</a>         
						</li>         
						<li class="b-dib sub-msg-opr-item">           
							<a href="javascript:;" onclick="delitem(this);" class="th opr-icon del-icon">删除</a>         
						</li>       
					</ul>    
					<div rel="con" class="m-con" style="display: none;"></div>
					<div rel="url" class="m-url" style="display: none;"></div>
				</div>
				
				<div class="sub-add">            
				<a href="javascript:;" class="block tc sub-add-btn" onclick="addaline();">
				<span class="vm dib sub-add-icon"></span>增加一条</a>           
				</div>
			</div>
		</div>
		<div class="span7">
			<div class="msg-editer-wrapper">
				<div class="msg-editer">
					<form id="appmsg-form" class="form">
						<div class="control-group">
							<label class="control-label">标题</label><span class="maroon">*</span><span class="help-inline">(必填,不能超过64个字)</span>
							<div class="controls">
						    	<input type="text" value="" id="title" class="span5" style="width: 482px;" name="title">
						    </div>
					    </div>
					    <div class="control-group" id="picsethere"></div>
					    <div class="control-group">
							<label class="control-label">封面</label><span class="maroon">*</span><span class="help-inline">(必须上传一张图片)</span>    
							<div class="controls">
								<div class="cover-area" style="height: 40px;overflow: hidden;">
									<div class="cover-hd" >
										<?php echo $res->upload('pic',array('text'=>'上传图片','onsuccess'=>'hidepicname','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'picsethere'); ?>
									</div>
									<p id="upload-tip" class="upload-tip">请事先调整好图片尺寸</p>
									<p id="imgArea" class="cover-bd" style="display: none;">
									<img src="" id="img">
									<a href="javascript:;" class="vb cover-del" id="delImg">删除</a>
									</p>
								</div>
							</div>
						</div>
					  	<div class="control-group">
						<label class="control-label">正文</label> <span class="maroon">*</span><span class="help-inline">(正文为空时则直接跳转到来源地址)</span>     
						    <div class="controls">
								<?php echo $g->texteditor('g',1,'498px','360px'); ?>
							</div>
						</div>
						<a id="url-block-link" href="javascript:void(0);" class="url-link block" style="display: none;">添加来源</a>
					  	<div id="url-block" style="" class="control-group">
							<label class="control-label">地址</label> <span class="help-inline">(请输入正确的URL链接格式)</span>          
						    <div class="controls">								
								<input type="text" id="url" class="span5" value="" style="width: 482px;" name="source_url">
							</div>
						</div>
					  	<div class="control-group">
						    <div class="controls">
						      <button id="save-btn" type="button" onclick="savedate();" class="btn btn-primary btn-large">保存</button>
						      <button id="cancel-btn" type="button" class="btn btn-large">取消</button>
						    </div>
					    </div>
					    
					    <input id="uid" name="uid" type="hidden" value="15065">
					    <input id="action" name="action" type="hidden" value="add">
					</form> 
				</div>
				<span class="abs msg-arrow a-out" style="margin-top: 0px;"></span>
				<span class="abs msg-arrow a-in" style="margin-top: 0px;"></span>
			</div>
		</div>
	</div>
<br/><br/><br/></body></html>