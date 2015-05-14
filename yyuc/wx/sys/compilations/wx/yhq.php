<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="微信">
<title>我的优惠券</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
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
<td><h1><?php echo $yhq->name; ?></h1></td>
<td class="ggltd"></td>
</tr>
</table>
</div>
<br/>
<div style="width: 100%;text-align: center;">
<img src="/res/whd/activity-coupon-winning.jpg" style="width: 80%;"/>
</div>
<br/>
<div class="m_ylzjxx">
<?php echo $yhq->ms; ?>
</div>

<form action="" method="post"><?php echo tk(); ?>
<div class="m_yljpsm">
<div class="m_yljpsms">
<span style="color: gray;font-size:12px;">
活动时间：<?php echo $yhq->kssj; ?>--<?php echo $yhq->jssj; ?>
</span>
</div>
</div>
</form>
</div>
<br/>

<div class="Pop-upbox" id="usermsg" <?php if ($sn!=''){ ?>style="display: none;"<?php } ?>>
        <div class="upbox_top">
            <h1>请填写您的用户资料：</h1>
            <a href=""><div class="close" style="display: none;"></div></a>
        </div>
        <div class="upbox_cens">
        <div>
           姓名：<input type="text" id="un" class="sinput">
        </div>
     <div style="margin-top: 5px;">
     电话：<input type="text" id="tel" class="sinput">
     </div>
        
        </div>
        <div class="upbox_cen">
            <a href="javascript:lingqu()"><div class="button_1"><span>确认领取</span></div></a>
        </div>
</div>
<div class="Pop-upbox" id="snmsg"  <?php if ($sn==''){ ?>style="display: none;"<?php } ?>>
        <div class="upbox_top">
            <h1>优惠券SN码：</h1>           
        </div>
        <div class="upbox_cens">
        <div id="sncode"><?php echo $sn; ?></div>        
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
</body>
<script type="text/javascript">
function lingqu(){
	var un = $.trim($('#un').val());
	var tel = $.trim($('#tel').val());
	if(un=='' || tel==''){
		tusi('请完善用户信息');
		return;
	}
	ajax('yhqok-add.html',{ tel:tel,un:un,id:'<?php echo $yhqid; ?>'},function(m){
		if(m=='rep'){
			location.href=location.href;
		}
		tusi('领取成功');
		$('#usermsg').hide();
		$('#sncode').text(m);
		$('#snmsg').show();
	});	
}

</script>

</html>
