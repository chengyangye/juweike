<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/reset.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/common2.css?2013-12-18-1" media="all" />
<title>我的爱车</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <style>
            img{ width:100%!important;}
        </style>
    </head>
 <body onselectstart="return true;" ondragstart="return false;">
        
		<script>
			
		</script>
		<div id="bookBody" class="body">
			<section>
				<form id="form1" action="" method="post"><?php echo tk();  echo $m->hidden('id'); ?>
					<div class="pb_5 pl_10 pr_10 pt_10">
						<dl class="list_book">
							<dt><label>添加车型</label></dt>
							<dd>
								<div>
								<?php echo $m->mulselect(array('micro_car_pinpai','micro_car_chexi','micro_car_chexing'),array('cpp','cxi','cxing'),'',"wid='".$wid."' order by sort desc","</div></dd><dd><div>"); ?>
								</div>
							</dd>
							<dd>
								<div>
								<?php echo $m->text('ctxt','placeholder="或者您也可以直接输入" maxlength="30"'); ?>
								</div>
							</dd>
						</dl>
					</div>
					<!---------->
					<div class="pb_5 pl_10 pr_10">
						<dl class="list_book">
							<dt><label>基本信息</label></dt>
							<dd class="tbox">
								<div><label>车牌号码</label></div>
								<div><?php echo $m->text('cpai','placeholder="如：京Q88888" maxlength="30"'); ?></div>
							</dd>
							<dd class="tbox">
								<div><label>车主姓名</label></div>
								<div><?php echo $m->text('cpai','placeholder="如：王百万" maxlength="30"'); ?></div>
							</dd>
							<dd class="tbox">
								<div><label>上牌时间</label></div>
								<div><?php echo $m->mdate('cptime','placeholder="" maxlength="30"'); ?></div>
							</dd>
<!-- 
							<dd class="tbox">
								<div><label>爱车靓照</label></div>
								<div class="relative">
									<?php echo $m->upload('pic',array('text'=>'添加照片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100),null,null,'picsethere'); ?>
									<div style="color:red;">建议图片尺寸640*320，大小不超过1M</div>
								</div>
							</dd>
							<style>
							.picsethere img{
								max-height:180px;
								width: 100%; 
							}
							</style>
							<dd>
								<div class="picsethere" id="picsethere">
									 
								</div>
							</dd>
 -->
						</dl>
					</div>
					<!---------->
					<div class="pb_5 pl_10 pr_10">
						<dl class="list_book">
							<dt><label>保险信息</label></dt>
							<dd class="tbox">
								<div><label>上次保险日期</label></div>
								<div><?php echo $m->mdate('bxtime','placeholder="" maxlength="30"'); ?></div>
							</dd>
							<dd class="tbox">
								<div><label>上次保险费用</label></div>
								<div style="width:100%;"><?php echo $m->text('bxprice','placeholder="" maxlength="30"'); ?></div>
								<div>元</div>
							</dd>
						</dl>
					</div>
					<!---------->
					<div class="pb_5 pl_10 pr_10">
						<dl class="list_book">
							<dt><label>保养信息</label></dt>
							<dd class="tbox">
								<div><label>上次保养里程</label></div>
								<div style="width:100%;"><?php echo $m->text('bylong','placeholder="" maxlength="30"'); ?></div>
								<div><pre>公里</pre></div>
							</dd>
							<dd class="tbox">
								<div><label>上次保养时间</label></div>
								<div><?php echo $m->mdate('bytime','placeholder="" maxlength="30"'); ?></div>
							</dd>
							<dd class="tbox">
								<div><label>上次保养费用</label></div>
								<div style="width:100%;"><?php echo $m->text('byprice','placeholder="" maxlength="30"'); ?></div>
								<div>元</div>
							</dd>
						</dl>
					</div>
					<div style="margin:10px;text-align: center;">
						<input type="submit" value="确定" class="btn_submit">
					</div>
				</form>
			</section>
			<footer class="nav_footer">
				<ul class="box">
					<li><a href="javascript:history.go(-1);" >返回</a></li>
					<li><a href="javascript:history.go(1);" >前进</a></li>
					<li><a href="/weiweb/<?php echo $wid; ?>/">首页</a></li>
					<li><a href="javascript:location.reload();" >刷新</a></li>
				</ul>
			</footer>
		</div>
	<script type="text/javascript">
	
	</script>
	</body>
       		
</html>