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
<ul  class="chatPanel">
<li class="media mediaFullText" data="zq2" key="1,13,6,9,20">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">新年快乐</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/1/t1.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="8,7,2,18,11">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">给您拜年</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/1/t2.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="12,5,10,7,17">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">拜年</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/1/t3.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="16,20,7,4">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">恭喜发财</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/1/t4.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="3,19,8,15">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">拜年啦</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/1/t5.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
</ul>
</div>
<div id="zfyList" style="display:none">
<ul class="chatPanel">
</ul>
</div>
<div>
<ul class="chatPanel">
<li class="media mediaFullText"><form>
<div class="mediaPanel">
<div class="mediaHead"><input class="editor_input" name="fromname" type="text" placeholder="您的名称" value=""></input></div>
<div class="mediaContent mediaContentP">
<input type="hidden" name="c" value="<?php echo Request::get(1); ?>"><input type="hidden" name="bg" value=""><input type="hidden" name="token" value=""><input type="hidden" name="style" value="">
<textarea class="editor_input" placeholder="亲，想说什么就写在这里吧" name="zfyTxt"></textarea>
<button class="editor_but">生成贺卡</button>
</div>
</div>
</form>
</li></ul>
</div>
<div id="zfyTemp" style="display:none">
<ul  class="chatPanel">
<li class="media mediaFullText" id="zfy1">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">马年好运来，保准你发财</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>贺卡把年拜，收到笑颜开；马年好运来，保准你发财；健康又实在，做人有情怀；亲情友情在；异性更喜爱；祝福都爱戴，保准你乐坏。祝你新年愉快！!</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy2">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你春节玩得逍遥</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>春节到，精彩节目纷纷上演：唱的，不是歌声，是快递的传播；跳的，不是舞蹈，是欢乐的蔓延；演的，不是小品，是祝福的心声。祝你春节玩得逍遥！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy3">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你万事如意</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>街街巷巷喜气洋洋，家家户户彩灯明亮，老老少少爽爽朗朗，人间处处华章奏响，你来我往传递祝愿，幸福快乐感受新春。新的一年，祝你万事如意！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy4">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">许你愿望一个</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>新年给你惊喜，许你愿望一个：想要金钱？可以；想要美女？可以；想要成功？可以。只要愿意付出，愿望就会实现。有效期，一辈子。快点行动吧！春节愉快！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy5">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝春节快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>炮竹声声春来报，春风得意喜鹊叫。人欢马叫春节到，美酒飘香闹春宵。合家团圆欢声笑，幸福生活节节高。愿君健康福禄寿，举杯贺岁到晨晓。祝春节快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy6">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">青春常驻你身上，友谊永在万年长</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>新年到，愿你家兴业兴财源兴，人旺体旺精神旺；嘴巴整日乐歪歪，脑袋逍遥美晃晃；日子一日一日强，幸福一年一年长；青春常驻你身上，友谊永在万年长。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy7">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">顺利成就梦想</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>祝你新的一年里：天空一片晴朗，快乐心中徜徉；自由随风飘荡，身体力行健康；奋劲儿热情高涨，顺利成就梦想！祝你新年快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy8">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">事事开心，事事顺利</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>祝您新年快乐！事业顺心顺意，工作顺顺利利，爱情甜甜蜜蜜！身体有用不完的力气，滚滚财源广进！身体倍儿棒，吃饭倍儿香，牙好胃口就好，事事开心，事事顺利！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy9">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">记得，我一直都在</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>亲爱的，在新的一年里，你一定会很幸福。相信我，这不止是我对你的祝福，更是我对你的承诺。你脸上的笑容，是我一生的追求。记得，我一直都在。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy10">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春节到，福来报</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>春节到，福来报，开开心心闹一闹；唱一唱，跳一跳，快快乐乐心情好；聚一聚，侃一侃，情谊深深到永远；走一走，看一看，甜蜜相伴在每天；祝福满，传一传，祝你惬意在心间，好梦在每晚！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy11">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">提早给你拜个年</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>新年转瞬到眼前，提早给你拜个年，祝你风风火火招财年，顺顺利利如意年，开开心心好运年，快快乐乐欢喜年，平平安安吉祥年，团团圆圆幸福年！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy12">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春节祝福要赶早</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>春节祝福要赶早：一祝身体好；二祝困难少；三祝烦恼消；四祝不变老；五祝心情好；六祝忧愁抛；七祝幸福绕；八祝收入高；九祝平安罩；十祝乐逍遥！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy13">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">给美女拜年</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>你是玫瑰你是花，娇艳美丽人皆夸。抚媚漂亮回首羡，楚楚动人亭玉雅。世间无敌你最靚，欲说先笑喜媚颜。春节到来花枝绽，上街走亲春满颜。春节快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy15">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">标准企业祝福语</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>愿你新的一年：经济轻松解套，事业成功上道，感情甜蜜牢靠，家庭和睦热闹，生活幸福美妙，日子福星高照。衷心祝您及家人吉祥安康，新年快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy16">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">马年你最牛</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>马年你最牛，个中有缘由：才高过八斗，事业立上游，身体壮如牛，生活有奔头。朋友遍五洲，吉祥伴你走，快乐如水流，幸福到永久！马年春节快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy17">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">提前祝你新年快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>新年快到了，我怕我的祝福没有悍马的力度，奔驰的速度，宝马的气度，奥迪的风度，林肯的大度，挤不上祝福的高速公路，所以让祝福提前上路，提前祝你新年快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy18">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">代表“福禄寿财喜神”恭祝</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>春节快乐，我仅代表“福禄寿财喜神”恭祝你：新年吉祥，合家团圆，幸福美满--福旺财旺人气旺，山高水长福寿长，财源滚滚如江海，汹涌澎湃向你来。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy19">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">春节到来喜事多</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>春节到来喜事多，阖家团圆幸福多！心情愉快朋友多，身体健康快乐多！一切顺利福气多，马年吉祥生意多！祝愿您好事多！多！多！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy20">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">幸福美满万年长</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>五谷丰登闹新春，家家户户福相伴，和气美满团圆年，红红春联写美满，文字里面情飞扬，款款祝福送予君，春节愉快合家欢，幸福美满万年长，春节快乐！</p>
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
imgUrl = '<?php echo Conf::$http_path; ?>/res/xheka/fx1.png',
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