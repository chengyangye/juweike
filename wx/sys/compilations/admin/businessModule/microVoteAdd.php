<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>微投票设置</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
	<h3>微投票设置</h3>
	<div class="alert alert-info">
	  	<p><span class="bold">说明：</span>微投票的目的是获得系统客观的收集信息研究数据，为决策做准备。</p>
        <p><span class="bold">当前地址：</span><?php echo getUrl('wtp'); ?></p>
	</div>
	<form class="form-horizontal" id="lbsForm" action="" method="post"><?php echo tk();  echo $lbs->hidden('id'); ?>
		<div class="control-group">
	    	<label class="control-label" for="keyword">微投票名称</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('name','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">微投票键字</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('gjz','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入20个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group">
	    	<label class="control-label" for="location_p">微投票开始时间</label>
	    	<div class="controls">
	    	<?php echo $lbs->datetime('kssj','class="span4"'); ?>
	    	</div>
	  	</div>
	  
	  	<div class="control-group">
	    	<label class="control-label" for="category_f">微投票结束时间</label>
	    	<div class="controls">
	    	<?php echo $lbs->datetime('jssj','class="span4"'); ?>
	    	</div>
	  	</div>
		<div class="control-group">
		    <label class="control-label" for="">微投票展示图片</label>
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
			<label class="control-label" for="detail">微投票简述:</label>
			<div class="controls">
			<?php echo $lbs->textarea('ms','class="span5" style="height:90px;width:520px;"'); ?>
				<span class="maroon">*</span><br><span class="help-inline">最多为1000个字符。</span>
			</div>
		</div>
		
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项1</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option1','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
	  	<div class="control-group">
		    <label class="control-label" for="">展示图片1</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic1',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic1'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic1">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项2</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option2','class="span4"'); ?>
		    	<span class="maroon">*</span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group">
		    <label class="control-label" for="">展示图片2</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic2',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic2'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic2">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项3</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option3','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group">
		    <label class="control-label" for="">展示图片3</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic3',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic3'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic3">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword">选项4</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option4','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group">
		    <label class="control-label" for="">展示图片4</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic4',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic4'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic4">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项5</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option5','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片5</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic5',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic5'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic5">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项6</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option6','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片6</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic6',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic6'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic6">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项7</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option7','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片7</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic7',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic7'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic7">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项8</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option8','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片8</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic8',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic8'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic8">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项9</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option9','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片9</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic9',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic9'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic9">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项10</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option10','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片10</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic10',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic10'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic10">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项11</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option11','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片11</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic11',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic11'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic11">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项12</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option12','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片12</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic12',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic12'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic12">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项13</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option13','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片13</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic13',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic13'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic13">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项14</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option14','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片14</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic14',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic14'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic14">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项15</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option15','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片15</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic15',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic15'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic15">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项16</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option16','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片16</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic16',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic16'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic16">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项17</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option17','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片17</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic17',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic17'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic17">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项18</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option18','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片18</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic18',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic18'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic18">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项19</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option19','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
		<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片19</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic19',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic19'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic19">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
	    	<label class="control-label" for="keyword">选项20</label>
	    	<div class="controls">
	    	<?php echo $lbs->text('option20','class="span4" noneed="1"'); ?>
		    	<span class="maroon"></span>
		    	<span class="help-inline">最多只能输入30个字符。</span>
	    	</div>
	  	</div>
	  	<div class="control-group more" style="display:none;">
		    <label class="control-label" for="">展示图片20</label>
		    <div class="controls">
			    <div class="cover-area">
					<table style="height: 30px;overflow: hidden;">
					<tr>
					<td><?php echo $lbs->upload('headpic20',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'headpic20'); ?></td>
					<td valign="top" style="line-height: 30px;color:gray;">建议尺寸：200像素 * 160像素</td>
					</tr>
					</table>
					<p class="img-area cover-bd" id="headpic20">
					</p>
				</div>
		    </div>
	  	</div>
	  	<div class="control-group">
	    	<label class="control-label" for="keyword"><button id="more_vote" type="button">更多选项</button></label>
	    	<div class="controls">
	    	
	    	<span class="help-inline">提示:请依次填写</span>
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
	$("#more_vote").click(function(){ 
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