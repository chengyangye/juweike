<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/bind/slider.css" />
<link rel="stylesheet" href="/bind/auto.css" />
<title>一键智能绑定</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<style>
.apply_tip td{
	font-size: 14px;
    color: gray;
    text-align: right;
}
.apply_tip a{
	text-decoration: none;
}
.manual-bind{
	text-align: right;
	margin-top: 10px;
	font-size: 14px;
}
.manual-bind a{
	text-decoration: none;
}
</style>
</head>
<body>
	<div id="wrapper">
		<div class="box" style="display:none">
			<div class="main ui-shadow ui-corner-all">
				<div class="header ui-corner-top">
					<h1 id="main-title">为爱升级，微信公众号智能蜕变</h1>
				</div>
				<div class="content ui-corner-bottom">
					<div class="left">
						<div class="login-desc">
							欢迎来到“<?php echo $_SERVER['WEB_NAME']; ?>”的智能世界，在这里我们将帮助您实现微信公众号的智能蜕变。整个过程异常的简单，只需输入你的公众号账号和密码，系统便能帮助您实现一键智能升级，数十种智能服务瞬间开启。（<span class="mind-info">重要提示：我们确保每个公众号的信息安全，公众号账号及密码系统不会做记录，您可放心填写。</span>）
						</div>
						<div class="process" style="display:none">
							<div class="top">
								<div>正在升级，请稍候(<span class="percent">0</span>%)</div>
								<div class="progress ui-corner-all">
									<div class="handler ui-corner-all"></div>
								</div>
								<div class="do">正在绑定微信公众号</div>
							</div>
							<ul>
								<li><span class="check-box"></span><span class="icon step1"></span><span class="info">验证微信公众号</span></li>
								<li><span class="check-box"></span><span class="icon step2"></span><span class="info">创建智能机器人</span></li>
								<li><span class="check-box"></span><span class="icon step3"></span><span class="info">桥接微信公众号平台</span></li>
								<li><span class="check-box"></span><span class="icon step4"></span><span class="info">启动智能模式</span></li>
							</ul>
						</div>
						<div class="rebind" style="display:none">
							<img src="/bind/rebind.png"></img>
							<a href="javascript:void(0)" class="rebind-btn" data-id=""></a>
						</div>
					</div>
					<div class="right">
						<div class="login-form">
							<form id="login_form" action="#" method="POST">
							<table>
								<tr>
									<td>&nbsp;</td>
									<td><span class="error-text"></span></td>
								</tr>
								<tr>
									<td class="text-col">微信公众平台帐号:</td>
									<td>
										<input type="text" name="username" id="username" class="long" value=""/>
									</td>
								</tr>
								<tr>
									<td class="text-col">密码:</td>
									<td><input type="password" name="password" id="password" class="long"/></td>
								</tr>
								<tr class="verify-row" style="display:none">
									<td class="text-col">验证码:</td>
									<td class="verify-col">
										<input type="text" name="imgcode" id="imgcode"/>
										<img src="" id="verify_img"/>
										<input type="text" name="sig" id="sig" style="display:none"/>
									</td>
								</tr>
								<tr class="apply_tip">
									<td colspan="2"><span>仅用于接口配置、公众帐号信息同步，该信息不会保存或泄漏（可随时解除绑定）</span></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
									<table>
									<tr>
									<td>
									<input type="submit" value="" id="upgrade_btn" style="width: 156px;"/>
									</td>
									<td>
									<a href="/admin/main.html?page=admin@baseService@customMenuImpower"><img src="/bind/sdpz.png" style="margin-top: 4px;"></a>
									</td>
									<td>
									<img id="submit_wait" src="/bind/submit_wait.gif" style="display:none"/>
									</td>
									</tr>
									</table>									
									</td>
								</tr>
							</table>
							</form>
						</div>
						<div class="slider" style="display:none">
							<img class="loading"/>
						</div>
						<div class="bind-validate" style="display:none">
							<div>
							用个人帐号往公众帐号发送一条消息“<span>宝宝</span>”，如收到回复“<span>升级成功</span>”，说明您已经升级成功。
							</div>
							<span class="count-back"><span class="counter">5s</span>后启航</span>
							<a href="javascript:showDone()" class="done-btn"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="thank">今天，这一切变得如此简单，简单到你只需轻轻地click一下
			<!-- 
				<img src="/bind/text.png" id="text"/>
				 -->
			</div>
			<img src="/bind/huaer.png" class="huaer"/>
		</div>
		<div class="tip" style="display:none">
			<div class="tip1">
				<img id="pre_1" src="" />
				<img id="pre_2" src="" />
				<div class="progress">
					<div class="loader"></div>
					<div class="circle"></div>
					<div class="p">0%</div>
				</div>
			</div>
			<div class="tip2" style="display:none">
				<img src="" id="pre_3"/>
				<img src="" id="pre_4"/>
				<div id="text_3">在微信里，你好奇地打量着这个世界</div>
				<div id="text_4">你在想着，哪一天我也要像它们一样强大</div>
			</div>
		</div>
		<div class="done" style="display:none">
			<img src="/bind/done.png" />
			<a href="/admin/main.html"></a>
		</div>
	</div>
	<div class="direct-text">微信公众号智能升级中</div>
	<img src="" class="preload" style="display:none"/>
	<input type="text" id="rebind" value="" style="display:none"/>
	<div id="text_5">每个人都有优雅的权利<br/>因为，再小的个体，在这里都有自己的品牌
	</div>
		
	<script type="text/javascript" src="/bind/operamasks-ui.min.js"></script>
	<script type="text/javascript" src="/bind/operamasks-ui-slider.min.js"></script>
	<script type="text/javascript" src="/bind/audiojs/audio.min.js"></script>	
	<script type="text/javascript" src="/bind/config.js"></script>
	<script type="text/javascript" src="/bind/bind_auto.js"></script>
	<!-- 
	<audio src="http://d1.v3gp.com:84/2008/20080527005103_317.mp3" preload="auto" autoplay loop/>
	-->
	<iframe allowtransparency="true" frameBorder="0" scrolling="no" style="border: none;position: fixed;overflow:hidden; bottom: 20px;left: 20px;width: 104px;height: 104px;" src="http://wx.zongyangtech.cn/res/mp3/index.htm"></iframe>
	<img allowtransparency="true" frameBorder="0" scrolling="no" style="border: none;position: fixed;overflow:hidden; bottom: 40px;right: 40px;cursor: pointer;" onclick="tiaoduodh(this);" src="/res/skip.png"/>
<script type="text/javascript">
function tiaoduodh(o){
	$(o).hide();
	$('.tip').remove();
	$('.box').show('slow');
	window.donotflash = true;
}
</script>
</body>
</html>