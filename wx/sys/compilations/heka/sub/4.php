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
<li class="media mediaFullText" data="zq1" key="20,1,13,6,18">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">团团圆圆闹元宵</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/4/t1.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="3,19,8,15">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">正月十五闹元宵</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/4/t8.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="8,7,2,18,16">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">欢欢乐乐 元宵佳节</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/4/t2.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="12,5,10,7,17">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">正月十五闹元宵</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/4/t3.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="16,20,7,4">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">喜庆闹元宵</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/4/t4.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq1" key="14,19,17,21">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">共度佳节合家欢</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/4/t5.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="17,21,3,8">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">正月十五闹元宵</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/4/t6.gif"></div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" data="zq2" key="9,2,11,13">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">元宵节</span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img src="/res/xheka/4/t7.gif"></div>
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
<div class="mediaHead"><span class="title">元宵节到，祝福到</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>元宵节到，祝你：亲朋像汤圆团团圆圆，财富像流水源源不断，理想像支票愿愿兑现，事业像你我巧遇机缘，爱情像月儿圆圆满满，好运像出门捡到美元！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy2">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">事事成功，元宵快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>钟声飘荡，欢快的焰火燃起来；雪花飞舞，大红的灯笼挂起来。喜庆弥漫大街小巷，祝福陪伴你的身旁。祝好运滔滔，幸福绵绵，事事成功，元宵快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy3">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">生活美满如意汤圆，送给你</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>把思念揉成面，用快乐来作馅，加一勺甜蜜水，点一束平安火，真心守护，熬成碗生活美满如意汤圆，送给你，祝你幸福到永远。元宵快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy4">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">吉祥如意万事皆圆圆</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>汤圆圆，月圆圆，我的祝福也圆圆：梦圆圆，财圆圆，寿圆圆，情圆圆，福圆圆，运圆圆，家圆圆，人圆圆，愿圆圆--元宵节愿你吉祥如意万事皆圆圆！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy5">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝元宵节圆源缘愿</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>汤圆，月圆，祝你亲朋团团圆圆!官源，财源，祝你事业左右逢源!人缘，机缘，祝你好运缘缘不断!心愿，情愿，祝你理想天随人愿!祝元宵节圆源缘愿！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy6">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">元宵快乐 合家逍遥 健康常伴 幸福驾到</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>灯笼红红，月亮皎皎，朗朗乾坤，思念普照。圆圆元宵，祝福为勺，圆你心愿，圆你梦晓。祝：元宵快乐，合家逍遥，健康常伴，幸福驾到！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy7">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">情愿、心愿，愿愿成真</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>喜庆元宵佳节，我祝你：日圆，月圆，圆圆如意。官源、财源，源源不断。人缘、福缘，缘缘于手。情愿、心愿，愿愿成真！元宵节快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy8">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">祝你快乐到永远</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>彩灯点缀世界的华彩乐章，汤圆包裹甜蜜的团团圆圆。家是大大的同心圆，把我们的心紧紧相牵。一个美好的夜晚，祝你快乐到永远。元宵节快乐！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy9">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">生活自在又“宵”遥</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>元宵节到了，愿你一切的烦恼都“宵”去，一切的厄运都“宵”去，一切的折磨都“宵”去，一切的苦难都“宵”去，生活自在又“宵”遥。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy10">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">送你十个元宵</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>元宵节送你十个元宵O※O※O※O※O※O※O※O※O※O，代表我送你的十个祝福：一开心二快乐三平安四幸福五好运六发财七如意八吉祥九安康十团圆！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy11">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">愿你生活比春花艳，事业比月亮圆</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>美丽的夜空，把梦想呈现；圆圆的明月，把幸福实现；漂亮的花灯，把节日妆扮；温馨的贺卡，把祝福传递；我的心愿：愿你元宵节快乐幸福每一天。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy12">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">思念此刻在欢跳，祝福立马来报到</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>元宵到，元宵闹，花灯猜谜生活俏，思念此刻在欢跳，祝福立马来报到，好运特地来关照，幸福常伴常微笑，欢欣袭来欢乐傲，万种如意陪元宵。祝你元宵快乐。</p>
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
<p>带上诚挚的祝福，愿你在元宵佳节张灯结彩之际，带着幸福，牵着开心，抱着团圆，拥着吉祥，一起步入2014年，愿一年四季平安健康！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy14">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">我亲爱的朋友天涯海角元宵节快乐</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>元宵佳节倍思您，发张贺卡祝福您：家圆人圆多宠您！幸福快乐追着您！福星高照绕着您！财源滚滚奔向您！花好月圆只爱您！祝我亲爱的朋友天涯海角元宵节快乐!</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy15">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">前程一片光辉</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>我用真诚为竹签，用祝福为丝线，用幸福为灯台，做了一个彩灯，送给你，祝你：马上幸福安康，马上甜蜜吉祥，元宵节快乐，前程一片光辉！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy16">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">开心元宵，快乐元宵，幸福元宵</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>一年一度的彩灯，一年一度的汤圆，一年一度的元宵，愿你被甜言蜜语笼罩，被祝福贺卡挡道，被吉祥甜蜜拥抱，开心元宵，快乐元宵，幸福元宵！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy17">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">愿绘出你四季的安康</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>元宵到，送你一个彩灯，红色代表开心，绿色代表幸福，黄色代表梦想，蓝色代表思念，橙色代表寄托，紫色代表希望，青色代表吉祥，愿绘出你四季的安康！</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy18">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">喜迎元宵送你“三大元”</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>喜迎元宵送你“三大元”：一送你，团圆的“圆”，愿你马上美事圆圆；二送你，财源的“源”，愿你四季有财源；三送你，缘分的“缘”，愿你新年逢佳缘。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy19">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">愿幸福伴你走过一年又一年</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>月儿圆，寄托着我的无数思念；汤圆圆，包裹着我无限的祝愿；梦儿圆，蕴藏着我无穷的挂恋；贺卡的祝福圆，愿幸福伴你走过一年又一年。元宵节快乐。</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">选择</span>
<div class="clr"></div>
</div>
</div>
</li>
<li class="media mediaFullText" id="zfy20">
<div class="mediaPanel">
<div class="mediaHead"><span class="title">愿温馨、温情、温柔在祝福中停留</span>
<div class="clr"></div>
</div>
<div class="mediaContent mediaContentP">
<p>千万个祝愿，在寒风中凝固，但元宵节的灯笼，元宵节的汤圆，元宵节的贺卡祝福却在温暖中传送，愿温馨、温情、温柔在祝福中停留，祝你元宵节快乐！</p>
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