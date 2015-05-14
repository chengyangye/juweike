<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微留言</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
    <meta content="" name="Keywords">
	<meta content="" name="Description">
    <link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/msg/msg.css" media="all" />	

	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta content="eric.wu" name="author">
	<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
	<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
	<meta content="no-cache" http-equiv="pragma">
	<meta content="0" http-equiv="expires">
	<meta content="telephone=no, address=no" name="format-detection">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
 
	<script type="text/javascript"> 
		$(document).ready(function () { 
			$("#showcard1").click(function () { 
				var btn = $(this);
				var wxname = $("#wxname1").val();
				if (wxname  == '') {
					alert("请输入昵称");
					return;
				}
				var info = $("#info1").val();
					if (info == '') {
					alert("请输入内容");
					return;
				}
				var submitData = {
					nc:wxname,
					msg: info,
					pid: "0"
				};
				$.post('lyadd.html', submitData,
					function(data) {
						if (data == 'ok') {
							alert('留言成功');
							setTimeout('window.location.href=location.href',1000);
						return;
					} else {}
				});
			}); 
			//
			$("#showcard2").click(function () { 
				var btn = $(this);
				var wxname = $("#wxname2").val();
					if (wxname  == '') {
					alert("请输入昵称");
					return;
				}
				var info = $("#info2").val();
					if (info == '') {
					alert("请输入内容");
					return;
				}
				var submitData = {
						nc:wxname,
						msg: info,
						pid: "0"
					};
				$.post('lyadd.html', submitData,
						function(data) {
							if (data == 'ok') {
								alert('留言成功');
								setTimeout('window.location.href=location.href',1000);
							return;
						} else {}
				});
			});  
			//
			$(".hhsubmit").click(function () { 
				var objid = $(this).attr("date");
				var info = $(".hly"+objid).val();
					if (info == '') {
					alert("请输入内容");
					return;
				}
				var submitData = {
					nc:'<?php echo htmlspecialchars(($nc),ENT_QUOTES); ?>',
					pid:objid,
					msg: info
				};
				$.post('lyadd.html', submitData,
						function(data) {
							if (data == 'ok') {
								alert('留言成功');
								setTimeout('window.location.href=location.href',1000);
							return;
						} else {}
				});
			});  
			//
			$(".hfinfo").click(function () { 
				var objid = $(this).attr("date");
				$(".hhly"+objid).slideToggle();
			}); 
			//
			$(".hhbt").click(function () { 
				var objid = $(this).attr("date");
				$(".hhly"+objid).slideToggle();
			});
			//
			$("#windowclosebutton").click(function () { 
				$("#windowcenter").slideUp(500);
			});
			//
			$("#alertclose").click(function () { 
				$("#windowcenter").slideUp(500);
			});
		}); 
		//
		function alert(title){ 
			window.scrollTo(0, -1);
			$("#windowcenter").slideToggle("slow"); 
			$("#txt").html(title);
			setTimeout(function(){ $("#windowcenter").slideUp(500);},4000);
		}
		//
		$(document).ready(function(){
			$(".first1").click(function(){
				$(".ly1").slideToggle();
			});
			$(".first2").click(function(){
				$(".ly2").slideToggle();
			});
		});
	</script> 
</head>
 
<body id="message" onselectstart="return true;" ondragstart="return false;">
	<div class="container">
	  	<div class="qiandaobanner">
		  	<a href="javascript:history.go(-1);">
		  		<img src="<?php echo $set->headpic; ?>" style="width:100%;" />
		  	</a>
	  	</div>

		<div class="cardexplain">
			<div class="window" id="windowcenter">
				<div id="title" class="wtitle">操作提示<span class="close" id="alertclose"></span></div>
				<div class="content">
					<div id="txt"></div>
				</div>
			</div>
 
			<div class="history">
				<div class="history-date">
					<ul>
						<a><h2 class="first first1" style="position: relative;">请点击留言</h2></a>
						<!--<li class="nob  mb"><div class="beizhu">留言审核通过后才会显示在留言墙上！</div></li>-->
						<li class="green bounceInDown nob ly1" style="display:none">
							<dl>
								<dt>
									<input name="wxname" type="text" class="px" id="wxname1" value="<?php echo htmlspecialchars(($nc),ENT_QUOTES); ?>" placeholder="请输入您的昵称">
								</dt>
								<dt>
									<textarea name="info" class="pxtextarea" style=" height:60px;" id="info1" placeholder="请输入留言"></textarea>
								</dt>
								<dt><a id="showcard1" class="submit" href="javascript:void(0)">提交留言</a></dt>
							</dl>
						</li>
						<?php $__i=0; foreach ((array)$mres as $m) { $__i++; ?>
						<li class="green bounceInDown">
							<h3>
								<!-- <img src="http://www.apiwx.com/index/images/logo100x100.jpg"> -->
								<?php echo $m->nc; ?><span><?php echo $m->ctime; ?></span>
								<div class="clr"></div>
							</h3>
							<dl>
								<dt class="hfinfo"><?php echo $m->msg; ?></dt>
							</dl>
							<?php $myhf = $nres[$m->id]; ?>
							<dl class="huifu">
								<dt>
									<span>																														<a class="hhbt czan" date="11803" href="javascript:void(0)">回复</a>
										<p style="display:none;" class="hhly11803">
											<textarea name="info" class="pxtextarea hly<?php echo $m->id; ?>"></textarea> 
										<a class="hhsubmit submit" date="<?php echo $m->id; ?>" href="javascript:void(0)">确定</a>
										</p>
									</span>
								</dt>
							</dl>
							<?php $__i=0; foreach ((array)$myhf as $n) { $__i++; ?>
							<dl class="huifu">
								<dt><span><?php echo $n['nc']; ?>回复：<?php echo $n['msg']; ?></span></dt>
							</dl>
							<?php } ?>
						</li>
						<?php } ?>
						<li class="green bounceInDown nob ly2" style="display:none;">
							<dl>
								<dt>
									<input name="wxname" type="text" class="px" id="wxname2" value="<?php echo htmlspecialchars(($nc),ENT_QUOTES); ?>" placeholder="请输入您的昵称">
								</dt>
								<dt>
									<textarea name="info" class="pxtextarea" style=" height:60px;" id="info2" placeholder="请输入留言"></textarea>
								</dt>
								<dt>
									<a id="showcard2" class="submit" href="javascript:void(0)">提交留言</a>
								</dt>
							</dl>
						</li>
						<a><h2 class="first first2" style="position: relative;">请点击留言</h2></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
 	        
    </script>
<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
</div>
<!--
<div style="width: 0px;height: 0px;overflow: hidden;">
<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>
</div>
 -->
<script>
/**
$(function(){
	if($('body').height()<$(window).height()){
		$('body').height($(window).height());
		$('#wxgjfooter').css('position','fixed').css('bottom','0px');
	}
});
**/
</script>
</body>

</html>
