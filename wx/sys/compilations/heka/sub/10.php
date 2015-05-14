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
<li class="media mediaFullText" data="zq1" key="1,2,6,9">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">新年新福气</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/10/t1.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="8,7,2,18,3">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">给力元旦</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/10/t2.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="7,17,6,10">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">2014 happy New Year</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/10/t7.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="14,3,8,16">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">2014 happy New Year</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/10/t8.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="6,5,4,7">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">元旦快乐</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/10/t3.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="16,20,7,4">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">2014元旦快乐</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/10/t4.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="3,19,8,5">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">happy new year!</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/10/t5.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="10,20,18,12">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">2014新年快乐</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/10/t6.gif"></div>
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
<li class="media mediaFullText" id="zfy14">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">送朋友</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>有一抹色彩叫做阳光，有一种味道叫做温馨，有一款装饰叫做心意，有一份祝福叫做平安，朋友，元旦快乐，健康幸福。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy1">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">全方位的祝福</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>用真心起笔，用关怀和呵护描绘过程，用风雨同舟收笔，世上最美的圆就出现了，因为360°全方位的祝福，是独一无二的啊！元（圆）旦快乐啊！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy2">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">一起努力，再接再厉</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>一份和谐，平平安安，一份安然，快快乐乐，一份深情，吉祥如意，一份祝福，全家幸福，元旦，圆满结束一年，开始新的一年，一起努力，再接再厉。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy3">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">元旦是新年的伊始</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>朝阳是新生的力量，督促奋斗的人前进；初恋是懵懂的情愫，牵绊相爱的人心上；元旦是新年的伊始，带来等待的人希望。朋友，元旦快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy4">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">元旦快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>扎一束曙光，用第一颗露珠的蒸汽作缚，点缀初次绽放的那颗花苞，让第一只早起的鸟儿，在新的一年的第一天，成为你第一眼看见的美好的开始。元旦快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy5">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">新年快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>元旦就来到，我的祝福到，天天开心笑，日日数钞票，老板对你笑，加薪给红包，美女抛绣球，专打你发梢，躲都躲不掉，逃也逃不了，新年快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy6">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">元旦礼物</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>人类一思考，上帝就发笑。上帝一发笑，元旦就来到。元旦一来到，礼物就收到。礼物一收到，幸福就播报。幸福一播报，祝福就送到。元旦快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy7">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">2014年“潜规则”</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>2014年“潜规则”：心情快乐点、身体健康点是人生2个基本点，烦恼执行0标准，快乐生活、工作的方针1生1世不变。元旦快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy8">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">新年出门遇贵人</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>元旦佳节兮，聚天地之欢乐，展山川之喜庆，于雪飞中送吉祥之问候，在风舞里赠平安之祝福，愿君新年出门遇贵人，行大运，恭喜发财。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy9">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">我很生气</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>在过去的一年里，你没怎么关心我，我很生气，特地祈求老天让你在新的一年里被金山挡住，被银海围住，被快乐砸中，被幸福缠住。元旦快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy10">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">提前祝元旦快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>时光华丽丽地来到了2013年底，友情的温暖一直存留在心底，把千般万种的祝福都浓缩到你眼底，愿快乐好运全握在你手底。提前祝元旦快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy11">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">真诚话语不多说，敬祝佳节多快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>岁月如歌蝶恋花，新年朝阳艳如画。元旦喜庆福相随，天地共舞春又归。白雪纷飞送福至，红霞满天寄心意。真诚话语不多说，敬祝佳节多快乐。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy12">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你：新年快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>岁月被一页一页地撕去 新年的脚步悄悄来临... 大街上喜庆的七彩灯 点缀着节日美好氛围... 空中飞舞的祝福 把新年的大门叩响... 祝你：新年快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy13">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">真心真意祝福朋友新年快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>2014新的一年新的开始，新的希望，新的梦想，新的阳光，新的篇章，岁月在变问候不变；季节在变关怀不变.天气在变思念不变，距离在变友情不变；世界在变祝福不变，真心真意祝福朋友新年快乐，万事如意！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy15">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">万事如意事事圆，幸福甜蜜快乐连</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>又到年末，快乐将你淹没，快到年头，财运向你招手。年末接年头，幸福无尽头，句句祝福都是情，幸福快乐永停。新年里，祝你万事如意事事圆，幸福甜蜜快乐连， 吉祥如意永安康，健康平安每一天！新年快乐。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy16">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">淡淡的对你说：祝你元旦快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>淡淡的我，淡淡的你，淡淡的日子发信息，淡淡的情，淡淡的谊，淡淡的祝福甜如蜜，淡淡的心，淡淡的礼，淡淡的美好最无比，淡淡的话，淡淡的笔，淡淡的传递永不止，淡淡的，元旦来了，正如我淡淡的对你说：祝你元旦快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy17">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">希望忙碌的你，永远快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>希望春天的花常开不败，希望夏天的水长流不息，希望秋天的枫叶红透你心，希望冬天的雪花纯洁如你，更希望忙忙碌碌的你，永远快乐、幸福！新年快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy18">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你新年快乐，喜事连连</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>一张圆桌，满堂亲人围成圆。一道大餐，福禄寿财已上全。一杯美酒，喜乐甜蜜都斟满。一张贺卡，千家万户已传遍：祝你新年快乐，喜事连连！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy19">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">元旦已来临，记得要快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>快乐是瘟疫，感染你与我；快乐是糖果，分给你与我；快乐要接力，传递你与我；快乐要提醒，通知你与我；元旦已来临，记得要快乐，整日笑呵呵。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy20">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">世界上没有什么大不了的</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>痛苦最好是别人的，快乐才是自己的；麻烦将是暂时的，朋友总是永恒的；爱情是用心经营的，世界上没有什么大不了的。元旦快乐！</p>
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