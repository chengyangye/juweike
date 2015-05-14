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
刮刮卡活动火爆进行中！
<?php } ?>
</div>
<div class="m_gglmain">
<img src="/res/w/ggl.png"/>
<div class="m_gglgjqs"  style="display: none;"><?php echo $jxmc; ?></div>
<div class="m_gglgjq" id="scratchpad" style="color: #333;"></div>
</div>

<div class="m_yljpsm">
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
<script type="text/javascript" src="/res/wScratchPad.js"></script>
<script type="text/javascript">
$(function(){
	$(window).on('touchmove',function(){
		if ($("#scratchpad").css("color").indexOf("51") > 0) {	    		
            $("#scratchpad").css("color", "rgb(50,50,50)");
        } else if ($("#scratchpad").css("color").indexOf("50") > 0) {
            $("#scratchpad").css("color", "rgb(51,51,51)");
        }
	});
	var useragent = window.navigator.userAgent.toLowerCase();
	$('#scratchpad').wScratchPad({
	    width           : 130,
	    height          : 35,
	    color: "#a9a9a7",
	    scratchUp:function(i,ii){
	    	if(ii>10 && !window.iscyggldeduijing){
	    		window.iscyggldeduijing = true;
	    		tellcjok('ggk');
	    	}
	    },
	    scratchMove:function(i){
	    	tusi($("#scratchpad").css("color"));
	    	if ($("#scratchpad").css("color").indexOf("51") > 0) {	    		
                $("#scratchpad").css("color", "rgb(50,50,50)");
            } else if ($("#scratchpad").css("color").indexOf("50") > 0) {
                $("#scratchpad").css("color", "rgb(51,51,51)");
            }
	    }
	});
	$('.m_gglgjqs').show();
});

</script>
<input type="hidden" id="hdid" value="<?php echo $hd->id; ?>"/>
<input type="hidden" id="hdjx" value="<?php echo $jx; ?>"/>
<input type="hidden" id="hdjxmc" value="<?php echo $jxmc; ?>"/>
<?php } ?>
<script src="/res/hammer.js"></script>
<script src="/res/wx.js"></script>
<div id="zjtzdiv" style="display: none;position: fixed;width: 100%; bottom:0px;z-index:9999;">
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
      <div style="margin-top: 5px;">
 微信用户名：<input type="text" id="wxun" value="<?php echo htmlspecialchars(($op->wxun),ENT_QUOTES); ?>" class="sinput">
     </div>
        
        </div>
        <div class="upbox_cen">
            <a href="javascript:tellcjxxok('ggk')"><div class="button_1"><span>确认信息</span></div></a>
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
