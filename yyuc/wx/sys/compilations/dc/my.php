
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $m->name; ?></title>
<link href="/res/dc/diancai.css" rel="stylesheet" type="text/css">
<script src="/res/dc/jquery.min.js" type="text/javascript"></script>
<style>
</style>
</head>

<body class="mode_webapp" style="">
<div class="menu_header"> 
     <div class="menu_topbar">
      <strong class="head-title">修改个人资料</strong>
      <span class="head_btn_left"><a href="javascript:history.go(-1);"><span>返回</span></a><b></b></span>
      <a class="head_btn_right" href="<?php echo Conf::$http_path.'dc/index-'.$wid.'.html?wxid='.$_GET['wxid']; ?>">
      <span><i class="menu_header_home"></i></span><b></b>
      </a>
     </div>
</div>

    

<form class="form" method="post" action="" enctype="multipart/form-data">
  <input type="hidden" name="formhash" id="formhash" value="0d11a58b">
   <input type="hidden" name="insetmb" id="insetmb" value="">
<div class="contact-info" style=" margin-top:10px;">
<ul>
<li class="title">个人信息</li>
<li>
<table style="padding: 0; margin: 0; width: 100%;">
<tbody>
                        <tr>
<td width="80px"><label for="wxname" class="ui-input-text">微信昵称：</label></td>
<td>
<div class="ui-input-text"><?php echo  $m->text('wxname','placeholder="如：亲亲小猪" class="ui-input-text"');?></div>
</td>
</tr>
                        
                      <tr>
<td width="80px"><label for="username" class="ui-input-text">姓名：</label></td>
<td>
<div class="ui-input-text"><?php echo $m->text('name','placeholder="如：张三" class="ui-input-text"');?></div>
</td>
</tr>
<tr id="nameinfo-layout" style="display: none;">
<td width="80px"></td>
<td colspan="2" id="nameinfo" class="cart-editalertinfo"></td>
</tr>

<tr>
<td width="80px"><label for="phone" class="ui-input-text">电话：</label></td>
<td>
<div class="ui-input-text"><?php echo $m->text('tel','placeholder="如：18200000000" class="ui-input-text"');?></div>
</td>
</tr>
<tr id="phoneinfo-layout" style="display: none;">
<td width="80px"></td>
<td colspan="2" id="phoneinfo" class="cart-editalertinfo"></td>
</tr>	

<tr>
<td width="80px"><label for="address" class="ui-input-text">地址：</label></td>
<td><?php echo $m->textarea('addr','placeholder="如：XX小区5号楼318" class="ui-input-text"');?>
</td>
</tr>
<tr id="addressinfo-layout">
<td width="80px"></td>
<td colspan="2" id="addressinfo" class="cart-editalertinfo"></td>
</tr>
</tbody></table>					
</li>
</ul>
   
    </div>

    
    
    <div class="footReturn" style="margin-bottom:80px;">
 <input type="submit" id="showcard" class="submit" value="保存" style="width:100%"> 
<div class="window" id="windowcenter">
<div id="title" class="wtitle">操作提示<span class="close" id="alertclose"></span></div>
<div class="content">
<div id="txt"></div>
</div>
</div>
</div>
    
    </form>
     
<div class="footermenu">
    <ul>
        <li>
            <a href="<?php echo "index-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/xxyX63YryG.png">
            <p>关于</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "dc-".Request::get('1')."-1.html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/Lngjm86JQq.png">
            <p>点菜</p>
            </a>
        </li>
        <li>
            <a  href="<?php echo "gwc-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <span class="num" id="cartN2">0</span>
            <img src="/res/dc/2yFKO6TwKI.png">
            <p>购物车</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "dd-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/s22KaR0Wtc.png">
            <p>订单</p>
            </a>
        </li>
        <li>
            <a class="active" href="<?php echo "my-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/J0uZbXQWvJ.png">
            <p>我的</p>
            </a>
        </li>
    </ul>
</div>
    
    
<script type="text/javascript"> 



$("#showcard").click(function () { 

 $(".form").submit();

 alert("保存成功");
}); 


$("#windowclosebutton").click(function () { 
$("#windowcenter").slideUp(500);
oLay.style.display = "none";

}); 
$("#alertclose").click(function () { 
$("#windowcenter").slideUp(500);
oLay.style.display = "none";

}); 

function alert(title){ 
//var windowHeight; 
//var windowWidth; 
//var popWidth;  
//var popHeight; 
//windowHeight=$(window).height(); 
//windowWidth=$(window).width(); 
//popHeight=$(".window").height(); 
//popWidth=$(".window").width(); 
//var popY=(windowHeight-popHeight)/2; 
//var popX=(windowWidth-popWidth)/2; 
//$("#windowcenter").css("top",popY).css("left",popX).slideToggle("slow"); 
$("#windowcenter").slideToggle("slow"); 
$("#txt").html(title);
//$("#windowcenter").hide("slow"); 
setTimeout('$("#windowcenter").slideUp(500)',4000);
} 
</script>

<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>


</body></html>