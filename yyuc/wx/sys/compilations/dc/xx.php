
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $m->name;?></title>
<link href="/res/dc/diancai.css" rel="stylesheet" type="text/css">
<style>
</style>
</head>
<body class="mode_webapp">
<div class="menu_header"> 
     <div class="menu_topbar">
      <strong class="head-title"></strong>
      <span class="head_btn_left"><a href="javascript:history.go(-1);"><span>返回</span></a><b></b></span>
      <a class="head_btn_right" href="<?php echo Conf::$http_path.'dc/index-'.$wid.'.html?wxid='.$_GET['wxid']; ?>">
      <span><i class="menu_header_home"></i></span><b></b>
      </a>
     </div>
</div>

<div class="cardexplain"> 

<ul class="round">
<li class="title"><span class="none smallspan">订单详情</span></li>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cpbiaoge">
  <tbody><tr>
    <th>菜品名称</th>
     <th class="cc">单价</th>
    <th class="cc">购买份数</th>
    <th class="rr">价格</th>
  </tr>
                                        <?php foreach ((array)explode(";",$ddres->goodsData) as $nn) {
										$a = explode(',',$nn);
										if(!empty($a[1]))
										{
										echo "
 <tr>
    <td>".$cc[$a[0]]['name']."</td>
    <td class='cc'>".$cc[$a[0]]['money']."</td>
     <td class='cc'>".$a[1]."</td>
    <td class='rr'>".$cc[$a[0]]['money']."</td>
  </tr>
										";
										}	}									
										?>
     <tr>
    <td>商品总费</td>
   <td class="cc">￥<?php echo $ddres->captch;?></td>
     <td class="cc">配送费</td>
     <td class="rr">￥0.0</td>
  </tr>
   
   
  <tr>
    <td>总计：</td>
    <td></td>
     <td></td>
    <td class="rr">￥<?php echo $ddres->captch;?></td>
  </tr>
</tbody></table>

</ul>

<ul class="round">
<li class="title"><span class="none smallspan">订单信息</span></li>
        
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="cpbiaoge">
  <tbody><tr>
    <td width="70">订单编号： <?php echo $ddres->time;?></td>
  </tr>
  <tr>
    <td>下单时间：<?php echo date("Y-m-d H:i:s",$ddres->time);?></td>
    </tr>
       <tr>
    <td>联系人 ： <?php echo $ddres->name;?></td>
    </tr>
                 <tr>
    <td>桌号 ：</td>
    </tr>
             <tr>
    <td>联系电话 ： <?php echo $ddres->phone;?></td>
  </tr>
                                                    
  
  <tr>
    <td>订单状态：<em style="width:70px;" class="no"><?php echo $zt[$ddres->state];?></em></td>
  </tr>
   <tr>
    <td>商家留言：</td>
  </tr>
  <tr>
  <td>    
  <!--
    <div class="twobtn">
    <a class="del 3" href="">删除</a></div>-->
   

            <div class="clr"></div>

    </td>
  </tr>
        </tbody></table>

</ul>

 
</div>




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
            <a href="<?php echo "gwc-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <span class="num" id="cartN2">0</span>
            <img src="/res/dc/2yFKO6TwKI.png">
            <p>购物车</p>
            </a>
        </li>
        <li>
            <a class="active" href="<?php echo "dd-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/s22KaR0Wtc.png">
            <p>订单</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "my-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/J0uZbXQWvJ.png">
            <p>我的</p>
            </a>
        </li>
    </ul>
</div>

<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>


</body></html>