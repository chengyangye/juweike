<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="微信">
<title></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" type="text/css" href="/res/page.css" />
<link href="/res/xym.css" rel="stylesheet" type="text/css">
<link href="/res/zwj.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
</head>
<body>


<div class="m_ggl">

<div class="m_ylzjxx">
<table class="ggltb">
<tr>
<td class="ggltd"></td>
<td><h1><?php echo $hd->name; ?></h1></td>
<td class="ggltd"></td>
</tr>
</table>
</div>
<br/>
<div class="m_ylzjxx">
<?php if ($hdlog->has_id()){ ?>
<?php $jjj = 'j'.$hdlog->jx.'ms'; ?>
恭喜<?php echo $hdlog->tel; ?>获得<?php echo $hd->$jjj; ?>
<?php }else{ ?>
目前还没人中奖，快来试一试。
<?php } ?>
</div>
<div class="main" style="background: url('/res/dzpppq.png') no-repeat top center;background-size: 320px auto;">
<div id="rotate_outercont" style="display:block;">
		<div id="outer-cont">
			<div id="outer" style="-webkit-transform: rotate(786deg);-moz-transform: rotate(786deg);transform: rotate(786deg);"><img src="/res/w/dzp.png"></div>
		</div>
		<div id="inner-cont">
			<div id="inner"><img src="/res/w/dzpzz.png"></div>
		</div>
</div>
</div>
<div class="m_yljpsm" style="margin-top: 0px;">
<div class="m_yljpsms">
<h2 style="background: url('/res/stitle.png') no-repeat; color: white;">奖项设置：</h2>
<?php if (trim($hd->j1mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j1mc; ?>： <?php echo $hd->j1ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j1sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j2mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j2mc; ?>： <?php echo $hd->j2ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j2sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j3mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j3mc; ?>： <?php echo $hd->j3ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j3sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j4mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j4mc; ?>： <?php echo $hd->j4ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j4sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j5mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j5mc; ?>： <?php echo $hd->j5ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j5sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j6mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j6mc; ?>： <?php echo $hd->j6ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j6sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j7mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j7mc; ?>： <?php echo $hd->j7ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j7sl;  } ?></div>
<?php } ?>
<?php if (trim($hd->j8mc) !=''){ ?>
<div class="m_yljpsmnr"> <?php echo $hd->j8mc; ?>： <?php echo $hd->j8ms; ?>。<?php if ($hd->isshowsl == 1){ ?>数量：<?php echo $hd->j8sl;  } ?></div>
<?php } ?>
</div>
</div>
<div class="m_yljpsm">
<div class="m_yljpsms">
<h2 style="background: url('/res/stitle.png') no-repeat; color: white;">活动说明：</h2>
<div class="m_yljpsmnr">您今天还有 <span id="syjhspan"><?php echo $sycs; ?></span> 次参与机会</div>
<div class="m_yljpsmnr"><?php echo $hd->ms; ?></div>
</div>
</div>

</div>
<?php if ($sycs >0){ ?>
<script type="text/javascript">
$(function() {	
    window.requestAnimFrame = (function() {
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60)
        }
    })();
    var totalDeg = 360 * 2 + 0;
    var steps = [];
    var lostDeg = [36, 66, 96, 156, 186, 216, 276, 306, 336];
    var prizeDeg = [6, 126, 246,66,186,306,36,226];
    var prize, sncode;
	var prize_type = [];
    var now = 0;
    var a = 0.06;
    var outter, inner, timer, running = false;
    function countSteps() {
        var t = Math.sqrt(2 * totalDeg / a);
        var v = a * t;
        for (var i = 0; i < t; i++) {
            steps.push((2 * v * i - a * i * i) / 2)
        }
        steps.push(totalDeg)
    }
    function step() {
        outter.style.webkitTransform = 'rotate(' + steps[now++] + 'deg)';
        outter.style.MozTransform = 'rotate(' + steps[now++] + 'deg)';
        if (now < steps.length) {
			running = true;
            requestAnimFrame(step);
        } else {
            running = false;
            setTimeout(function() {
            	tellcjok('xydzp');
            },
            200)
        }
    }
    function start(deg) {
        deg = deg || lostDeg[parseInt(lostDeg.length * Math.random())];
        running = true;
        clearInterval(timer);
        totalDeg = 360 * 4 + deg;
        steps = [];
        now = 0;
        countSteps();
        requestAnimFrame(step)
    }
    window.start = start;
    outter = document.getElementById('outer');
    inner = document.getElementById('inner');
    i = 10;
	
    $("#inner").click(function() {
   
        if (running) return;
        timer = setInterval(function() {
            i += 5;
            outter.style.webkitTransform = 'rotate(' + i + 'deg)';
            outter.style.MozTransform = 'rotate(' + i + 'deg)'
        },
        1);
        setTimeout(function(){
        	clearInterval(timer);
        	 prize = $('#hdjxmc').val();
             start(prizeDeg[parseInt($('#hdjx').val())-1])
        },1000);
    })
});

</script>
<input type="hidden" id="hdid" value="<?php echo $hd->id; ?>"/>
<input type="hidden" id="hdjx" value="<?php echo $jx; ?>"/>
<input type="hidden" id="hdjxmc" value="<?php echo $jxmc; ?>"/>
<?php } ?>
<script src="/res/hammer.js"></script>
<script src="/res/wx.js"></script>
<div id="zjtzdiv" style="display: none;position: fixed;width: 100%; bottom: 0px;z-index:9999;">
<div class="Pop-upbox" id="usermsg" >
        <div class="upbox_top">
            <h1>恭喜中奖：</h1>
            <a href=""><div class="close" style="display: none;"></div></a>
        </div>
        <div class="upbox_cens">
        <div>
恭喜获得奖品:<?php echo $jxmc; ?>。
请留下你的手机号码作为领奖依据。<br/>
姓名：<input type="text" id="un" value="<?php echo htmlspecialchars(($op->un),ENT_QUOTES); ?>" class="sinput">
        </div>
     <div style="margin-top: 5px;">
 电话：<input type="text" id="tel" value="<?php echo htmlspecialchars(($op->tel),ENT_QUOTES); ?>" class="sinput">
     </div>
        
        </div>
        <div class="upbox_cen">
            <a href="javascript:tellcjxxok('xydzp')"><div class="button_1"><span>确认信息</span></div></a>
        </div>
</div>
</div>
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
</body></html>
