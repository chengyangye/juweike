<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>幸运大转盘设定</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<style type="text/css">
	table td {
		min-width:50px;
		overflow:hidden;text-overflow:ellipsis;
	}
	#picsethere{
		width: 510px;
		display: block;
	}
	#picsethere img{
		max-width: 500px;
		display: block;
	}
</style>
</head>
<body>
	<h3>商家幸运大转盘设置</h3>
	<div class="alert alert-info">
	  	<p><span class="bold">说明：</span>幸运大转盘是一种游戏促销模式。</p>
	  	<p><span class="bold">当前地址：</span><?php echo getUrl('xydzp'); ?></p>
	</div>
	<form class="form-horizontal" id="lbsForm" action="" method="post"><?php echo tk();  echo $lbs->hidden('id'); ?>
		<div class="control-group">
	    	<label class="control-label" for="keyword">幸运大转盘名称</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('name','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">活动关键字</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('gjz','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入20个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group">
	    	<label class="control-label" for="location_p">活动开始时间</label>
	    	<div class="controls">
	    	<?php echo $lbs->datetime('kssj','class="span4"'); ?>
	    	</div>
	  	</div>
	  
	  	<div class="control-group">
	    	<label class="control-label" for="category_f">活动结束时间</label>
	    	<div class="controls">
	    	<?php echo $lbs->datetime('jssj','class="span4"'); ?>
	    	</div>
	  	</div>
		<div class="control-group">
		    <label class="control-label" for="">活动展示图片</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('pic',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'picsethere'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：700像素 * 380像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="picsethere">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group">
			<label class="control-label" for="detail">活动简述:</label>
			<div class="controls">
			<?php echo $lbs->textarea('ms','class="span5" style="height:90px;width:520px;"'); ?>
				<span class="maroon">*</span><br><span class="help-inline">最多为1000个字符。</span>
			</div>
		</div>
  	
	  	<div class="cont fn-clear control-group">
		<h3 style="text-align: center;">奖项设置</h3>
		<table class="prizetable" style="margin-left: 80px;">
			<thead>
				<tr>
					<th width="100" height="30px;"></th>
					<th>奖项名称<br>(<span class="maroon">*</span><span class="help-inline">不能超过50个字 </span>)</th>
					<th>奖品<br>(<span class="maroon">*</span><span class="help-inline">不能超过50个字 </span>)</th>
					<th>奖品数量<br>(<span class="maroon">*</span><span class="help-inline">必须大于0 </span>)</th>
					<th>中奖概率<br>(<span class="maroon">*</span><span class="help-inline">0-100, 支持小数点</span>)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>奖项一</td>
					<td><?php echo $lbs->text('j1mc','class="span3"'); ?></td>
					<td><?php echo $lbs->text('j1ms','class="span3"'); ?></td>
					<td><?php echo $lbs->text('j1sl','class="span1" isint="1"'); ?></td>
					<td><?php echo $lbs->text('j1gl','class="span1" isfloat="1"'); ?>%</td>
				</tr>
				<tr>
					<td>奖项二</td>
					<td><?php echo $lbs->text('j2mc','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j2ms','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j2sl','class="span1" noneed="1" isint="1"'); ?></td>
					<td><?php echo $lbs->text('j2gl','class="span1" noneed="1" isfloat="1"'); ?>%</td>
				</tr>
				<tr>
					<td>奖项三</td>
					<td><?php echo $lbs->text('j3mc','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j3ms','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j3sl','class="span1" noneed="1" isint="1"'); ?></td>
					<td><?php echo $lbs->text('j3gl','class="span1" noneed="1" isfloat="1"'); ?>%</td>
				</tr>
				<tr class="more" style="display:none;">
					<td>奖项四</td>
					<td><?php echo $lbs->text('j4mc','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j4ms','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j4sl','class="span1" noneed="1" isint="1"'); ?></td>
					<td><?php echo $lbs->text('j4gl','class="span1" noneed="1" isfloat="1"'); ?>%</td>
				</tr>
				<tr class="more" style="display:none;">
					<td>奖项五</td>
					<td><?php echo $lbs->text('j5mc','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j5ms','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j5sl','class="span1" noneed="1" isint="1"'); ?></td>
					<td><?php echo $lbs->text('j5gl','class="span1" noneed="1" isfloat="1"'); ?>%</td>
				</tr>
				<tr class="more" style="display:none;">
					<td>奖项六</td>
					<td><?php echo $lbs->text('j6mc','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j6ms','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j6sl','class="span1" noneed="1" isint="1"'); ?></td>
					<td><?php echo $lbs->text('j6gl','class="span1" noneed="1" isfloat="1"'); ?>%</td>
				</tr>
				<tr class="more" style="display:none;">
					<td>奖项七</td>
					<td><?php echo $lbs->text('j7mc','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j7ms','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j7sl','class="span1" noneed="1" isint="1"'); ?></td>
					<td><?php echo $lbs->text('j7gl','class="span1" noneed="1" isfloat="1"'); ?>%</td>
				</tr>
				<tr class="more" style="display:none;">
					<td>奖项八</td>
					<td><?php echo $lbs->text('j8mc','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j8ms','class="span3" noneed="1"'); ?></td>
					<td><?php echo $lbs->text('j8sl','class="span1" noneed="1" isint="1"'); ?></td>
					<td><?php echo $lbs->text('j8gl','class="span1" noneed="1" isfloat="1"'); ?>%</td>
				</tr>
				
				<tr><td><button id="more_jx" type="button">更多奖项</button></td><td>提示:请依次填写奖项</td></tr>
			</tbody>
		</table>
	</div>
	
	<div class="cont fn-clear other-setting">
		<div class="cont-left msg-preview">
		<h3 style="text-align: center;">其他设置</h3>
		</div>
		<div class="cont-right">
			<div class="form-horizontal">
			  <div class="control-group">
			   <label class="control-label" for="showamount">是否显示奖品数量</label>
			    <div class="controls">				    
				    <?php echo $lbs->checkbox('isshowsl','style="margin: 8px;"'); ?>				    
			      	<span class="maroon">*</span><span class="help-inline">取消选择后在活动页面中将不会显示奖品数量 </span>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="playtotal">每人参与的总次数</label>
			    <div class="controls">
			    <?php echo $lbs->text('mrzs','class="span1" isint="1"'); ?>
			    <span class="maroon">*</span><span class="help-inline">必填 ，数量必须是大于1且小于100000</span>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="playperday">每人每天可参与次数</label>
			    <div class="controls">
			    	<?php echo $lbs->text('mtsl','class="span1" isint="1"'); ?>
			      	<span class="maroon">*</span><span class="help-inline">必填 ，数量必须是大于1且不能大于每人可以参与刮奖的总次数</span>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="playperday">每天最多出奖数量</label>
			    <div class="controls">
			    	<?php echo $lbs->text('mrzd','class="span1" isint="1"'); ?>
			      	<span class="maroon">*</span><span class="help-inline">必填 ，0为不限制出奖数</span>
			    </div>
			  </div>
			</div>
		</div>
	</div>
 		<div class="control-group">
		    <div class="controls">
		    
		      <button id="save-btn" type="submit" class="btn btn-primary btn-large">保存并开启</button>
		     
		    </div>
	    </div>
	</form>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
<script type="text/javascript">
$(function(){
	$("#more_jx").click(function(){
		 $(".more").toggle();
		 
	 });
	 $("#lbsForm").submit(function(){
		var cansv= true;
		$(this).find('input[type="text"],select,textarea').each(function(){
			if($.trim($(this).val())=='' && $(this).attr('noneed')!='1'){
				cansv = false;
				$(this).css('backgroundColor','yellow');
				$(this).one('focus',function(){
					$(this).css('backgroundColor','transparent');
				});
			}
		});
		if(!cansv){
			tusi('请将信息填写完整');
			return false;
		}
		$(this).find('input[type="text"],select,textarea').each(function(){
			if($(this).attr('isint')=='1' && $.trim($(this).val())!=''){
				var intthis = parseInt2($(this).val());
				if(intthis+''=='NaN'){
					$(this).val('0');
					cansv = false;
					$(this).css('backgroundColor','yellow');
					$(this).one('focus',function(){
						$(this).css('backgroundColor','transparent');
					});
				}else{
					$(this).val(parseInt($(this).val()));
				}
			}
		});
		if(!cansv){
			tusi('标注的项目必须为整数');
			return false;
		}
		
		$(this).find('input[type="text"],select,textarea').each(function(){
			if($(this).attr('isfloat')=='1' && $.trim($(this).val())!=''){
				var intthis = parseFloat($(this).val());
				if(intthis+''=='NaN'){
					$(this).val('0');
					cansv = false;
					$(this).css('backgroundColor','yellow');
					$(this).one('focus',function(){
						$(this).css('backgroundColor','transparent');
					});
				}else{
					$(this).val(parseFloat($(this).val()));
				}
			}
		});
		if(!cansv){
			tusi('标注的项目必须为数字');
			return false;
		}
		
		if($('#picsethere').find('img').size()<1){
    		cansv = false;
    		tusi('请上传活动图片');
    		return false;
    	}
    	return cansv;
    });
});
</script>
<br/><br/><br/></body>

</html>