<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>微贺卡 手机贺卡</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="/res/xheka/style.css" rel="stylesheet" type="text/css" />
</head>
<script>
window.onload = function ()
{
var oWin = document.getElementById("win");
var oLay = document.getElementById("overlay");	
var oBtn = document.getElementById("popmenu");
var oClose = document.getElementById("close");
oBtn.onclick = function ()
{
oLay.style.display = "block";
oWin.style.display = "block"	
};
oLay.onclick = function ()
{
oLay.style.display = "none";
oWin.style.display = "none"	
}
};
</script>
<body id="listhome3">
<div id="ui-header">
<div class="fixed">
<a class="ui-title" id="popmenu">选择分类</a>
<a class="ui-btn-left_pre" href="/heka/index.html"></a>
<a class="ui-btn-write"></a>
<a class="ui-btn-right" href="javascript:location.reload(true);"></a>
</div>
</div>
<div id="overlay"></div>
<div id="win">
<ul class="dropdown">
<?php echo $ls; ?>
<div class="clr"></div>
</ul>
</div>
<div class="Listpage">
<div class="top46"></div>
<div id="bgList">
<ul class="chatPanel">
<li class="media mediaFullText" data="zq1" key="1,13,6,9,20">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春绽放</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/3/t1.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="8,7,2,18,11">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春暖花开</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/3/t2.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="12,5,10,7,17">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春天花会开</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/3/t3.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="16,20,7,4">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/3/t4.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="3,19,8,15">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春天来了</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/3/t5.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="3,19,8,15">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春姿漫迈</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/3/t6.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
</ul>
</div>
<div id="zfyList" style="display: none;">
<ul class="chatPanel">
</ul>
</div>
<div>
<ul class="chatPanel">
<li class="media mediaFullText"><form>
<div class="mediaPanel">
<div class="mediaHead"><input class="editor_input" name="fromname" type="text" placeholder="您的名称" value=""></div>
<div class="mediaContent mediaContentP">
<input type="hidden" name="c" value="<?php echo Request::get(1); ?>"><input type="hidden" name="bg" value=""><input type="hidden" name="token" value=""><input type="hidden" name="style" value="">
<textarea class="editor_input" placeholder="亲，想说什么就写在这里吧" name="zfyTxt"></textarea>
<button class="editor_but">生成贺卡</button>
</div>
</div>
</form>
</li></ul>
<!--ul class="chatPanel">
<li class="media mediaFullText">
</li></ul-->
</div>
<div id="zfyTemp" style="display:none">
<ul class="chatPanel">
<li class="media mediaFullText" id="zfy1">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">立春到，春意闹，我的祝福早送到</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>立春到，春意闹，我的祝福早送到，一祝如意一园春，二祝吉祥再逢春，三祝欢乐三阳春，四祝健康四季春，五祝万安五福春，六祝风顺六合春，七祝灵巧七喜春，八祝发财八方春，九祝长远九洲春，十祝完美十全春！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy2">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">心情好，身体好，小名叫，健康宝</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>立春到，把肝保，少心扰，防焦躁，酸辣要，食少少，春风闹，流感高，保暖好，疾病跑，立春要，健康找，祝福您，立春时，心情好，身体好，小名叫，健康宝！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy3">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你立春享快乐，日新月异天天顺</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>一年之计在于春，二目春色揽不尽，三神俱爽事业新，四肢舒服透着劲，五尺之躯有恒心，六六大顺不消停，七魄笑迎满园香，八面财到贺立春，九九归一福临门，十分祝福表真情；祝你立春享快乐，日新月异天天顺！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy4">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你幸福，春风满面</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>立春已到，注意养肝，饮食注意，避免性寒，多食葱姜，少食点酸，蔬菜要鲜，口味增甘，早睡早起，注意保健，运动锻炼，多多益善。祝你幸福，春风满面。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy5">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">事业春风得意，日子如沐春风</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>搜索春景好运，复制春风顺利，粘贴春阳吉祥，连载春天美好，删除春寒苦闷，发送立春祝福；祝你立春快乐，事业春风得意，日子如沐春风！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy6">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝您立春快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>立春到了，您的烦恼也开始“解冻”了，您的幸福开始“萌芽”了，您的成功已“蠢蠢欲动”，您的财富如“牛毛细雨”，您的健康也“随风舞动”，祝您立春快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy7">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝幸福快乐、如意吉祥</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>立春虽到，寒冷还未退潮，过早去衣脱帽，仍然容易感冒，问候祝福及时送到，教你一条妙招，坚持锻炼运动保健，多素少荤合理膳食，开心快乐时常围绕。祝幸福快乐、如意吉祥。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy8">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">快快发送你身边</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>立春时节送祝福，新建万千问候语，复制千百吉庆词，剪切纷乱烦恼丝，粘贴天天好心情，删除一切不如意，组成幸福新文件，快快发送你身边！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy9">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你吉祥快乐，幸福到永远</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>剪“一匹春光”做成彩衣，采“两朵春花”做成纽扣，求“三生春福”藏在衣袋，把“四季春暖”缝进衣领，立春大吉，送你锦衣一件，祝你吉祥快乐，幸福到永远！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy10">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">今朝的贺卡让亲爱的你更开心了</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>时时的牵挂让友情更持久了；刻刻的关爱让亲情更温暖了；久久的真诚让朋友更贴心了；日日的问候让生活更幸福了；天天的祝福让日子更快乐了；今朝的贺卡让亲爱的你更开心了。祝愿立春愉快！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy11">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">朋友，谢谢你出现在我的生命里</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>一眼新绿绽放春的气息，一声鸟鸣泄露生命的活力，一袭微风夹杂着回忆，一段故事延续着想你，有花有草的季节，有爱有恨的年纪，谢谢你出现在我的生命里。立春快乐，我的朋友，祝你永远幸福如意。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy12">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">愿你春风得意，幸福安康</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>春来百花开，愿你好运来。一朵快乐花，愿你展笑颜；一朵好运花，愿你福相伴；一朵成功花，愿你前途坦；一朵平安花，愿你越千山；一朵健康花，愿你体强健；一朵有钱花，愿你更悠闲；一朵幸福花，愿你日子甜；一朵祝福花，愿你心温暖。立春到了，愿你春风得意，幸福安康！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy13">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">温暖的感觉胸中藏，幸福的花儿心上开</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>春回大地，万物复苏，明媚春光挡不住；春归此处，万紫千红，美丽鲜花满天涯；春来送暖，万山缤纷，百草发芽共争春；春风春雨，万缕千丝，冷暖悲喜心自知。立春到来，万般精彩，愿你快乐展颜，心情自由自在，温暖的感觉胸中藏，幸福的花儿心上开！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy15">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你天天快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>春光照，幸福来开道。春花俏，心情不寂寥。春风跑，开心将你绕。春雨飘，吉祥将你罩。立春到，春天来拥抱。祝你天天快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy16">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">立春到，贺卡祝福忙送到</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>立春到，雨飞飘，贺卡祝福忙送到。莫嫌吵，莫嫌闹，吉祥话要趁早。祝你每年春意盎然，每分春风满面，每秒春花灿烂心情好！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy17">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">立春到，笑开颜</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>立春到，笑开颜，春光乍现无限好。除去寒冬的烦恼，春天的快乐满怀抱。心情舒畅精神好，美好的事物都来到。祝立春快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy18">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">愿立春节气称心如意</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>轻拂的春风捎带着吉祥，细润的春雨裹夹着如意，艳丽的春花绽放出好运，明媚的春光映射着祥瑞。愿立春节气称心如意！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy19">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">朋友立春快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>^o^播种一颗太阳，希望你一生温暖，播种一张笑脸，希望你一生快乐，播种一段旋律，希望你一生美丽，播种一条祝福，希望你一生幸福，朋友立春快乐。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy20">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝春风得意！立春快乐！</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>^o^立春到，让春风吹顺你的事业，春光照亮你的前途，春雨滋润你的生活，春意点缀你的心情，春花灿烂你的笑容，祝春风得意！立春快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
</ul>
</div>
</div>
<script type="text/javascript">
var isSend = false;
$(".editor_but").click(function(){
	if(isSend)
	{
		alert("数据正在上传中，请等待一下下！");
		return false;
	}
	if($("input[name=fromname]").val()==""){
		alert("你还没有输入你的名称呢，亲！");
		return false;
	}
	if($("textarea").val()==""){
		alert("祝福内容也要输入呢，亲！");
		return false;
	}
	if($("input[name=bg]").val()=="")
	{
		$("#bgList").show();
		$("#zfyList").hide();
		return false;
	}
	var url = "f="+encodeURIComponent($("input[name=fromname]").val())+"&t="+$("input[name=c]").val()+"&b="+$("input[name=bg]").val()+"&c="+encodeURIComponent($("textarea").val());
	$.get('/heka/presend.html?'+url,function(data){
		window.location="/heka/send-"+data+".html";
	});

	return false;
});
$(function(){
	$("#bgList").show();
	if($("input[name=bg]").val()=="")
	{
		$("#bgList").show();
		$("#zfyList").hide();
		$(".ui-btn-write").hide();
	}
	else
	{
		$("#bgList").hide();
		$("#zfyList").show();
		$(".ui-btn-write").show();
	}
	$("#bgList li").click(function(){
		$("input[name=bg]").val($(this).find("img").attr("src"));
		$("input[name=style]").val($(this).attr("data"));
		$("#bgList").hide();
		var zfkey = $.trim($(this).attr("key"));
		if(zfkey==""){
			$("#zfyList ul").html($("#zfyTemp ul").html());
		}
		else{
			var zfids = zfkey.split(",");
			for(i=0;i<zfids.length;i++){
				$("#zfyList ul").append('<li class="media mediaFullText">'+ $("#zfy"+zfids[i]).html() +'</li>');
			}
			$("#zfyTemp li").each(function(){
				var zfid = $(this).attr("id").replace("zfy","");
				for(i=0;i<zfids.length;i++){
					if(zfids[i]==zfid)
						$(this).remove();
				}
			});
			$("#zfyList").append("<a class='more'>更多祝福语");
			$("#zfyList .more").click(function(){
				$("#zfyList ul").append($("#zfyTemp ul").html());
				$(this).hide();
				$("#zfyList li").unbind("click");
				$("#zfyList li").click(function(){
					if($(this).find("p").text()!=""){
					$("textarea").val($(this).find("p").text());
					$("textarea").text($(this).find("p").text());
					$("textarea").focus();
					}
				});
			});
		}
		$("#zfyList li").unbind("click");
		$("#zfyList li").click(function(){
			if($(this).find("p").text()!=""){
			$("textarea").val($(this).find("p").text());
			$("textarea").text($(this).find("p").text());
			$("textarea").focus();
			}
		});
		$("#zfyList").show();
		$("html,body").animate({ scrollTop:0},400);
	});
	$(".ui-btn-write").click(function(){
		$("textarea").focus();
	});
});
</script>
<div style="display:none"> </div>
<script id="txt-desc" type="txt/text">微贺卡，节日贺卡、生日贺卡、爱情贺卡、新婚贺卡、友谊贺卡...手指轻轻一点，即可生成个性贺卡，赶快来DIY送给你的好友吧！</script>
<script id="txt-title" type="txt/text">微贺卡</script>
<script>

(function(){
var onBridgeReady = function () {
var
appId = '',
imgUrl = 'http://wx.zongyangtech.cn/res/xheka/fx1.png',
link = location.href,

title = getStrFromTxtDom('title'),
desc = getStrFromTxtDom('desc') || link;
// 发送给好友;
WeixinJSBridge.on('menu:share:appmessage', function(argv){
WeixinJSBridge.invoke('sendAppMessage',{
"appid" : appId,
"img_url" : imgUrl,
"img_width" : "640",
"img_height" : "640",
"link" : link,
"desc" : desc,
"title" : title
}, function(res) {})
});
// 分享到朋友圈;
WeixinJSBridge.on('menu:share:timeline', function(argv){
WeixinJSBridge.invoke('shareTimeline',{
"img_url" : imgUrl,
"img_width" : "640",
"img_height" : "640",
"link" : link,
"desc" : desc,
"title" : title
}, function(res) {
});
});
// 分享到微博;
var weiboContent = '';
WeixinJSBridge.on('menu:share:weibo', function(argv){
WeixinJSBridge.invoke('shareWeibo',{
"content" : title + link,
"url" : link
}, function(res) {
});
});
// 隐藏右上角的选项菜单入口;
//WeixinJSBridge.call('hideOptionMenu');
};
if(document.addEventListener){
document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
} else if(document.attachEvent){
document.attachEvent('WeixinJSBridgeReady' , onBridgeReady);
document.attachEvent('onWeixinJSBridgeReady' , onBridgeReady);
}
})();
</script>
</body>
</html>