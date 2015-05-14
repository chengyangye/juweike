
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $m->name;?></title>
<link href="/res/dc/diancai.css" rel="stylesheet" type="text/css">
<script src="/res/dc/jquery.min.js" type="text/javascript"></script>
<script src="/res/dc/alert.js" type="text/javascript"></script><style type="text/css">

.window {
	width:290px;
	position:fixed;
	display:none;
	bottom:30px;
	left:50%;
	 z-index:9999;
	margin:-50px auto 0 -145px;
	padding:2px;
	border-radius:0.6em;
	-webkit-border-radius:0.6em;
	-moz-border-radius:0.6em;
	background-color: #ffffff;
	-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	font:14px/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif;
}
.window .title {
	
	background-color: #A3A2A1;
	line-height: 26px;
    padding: 5px 5px 5px 10px;
	color:#ffffff;
	font-size:16px;
	border-radius:0.5em 0.5em 0 0;
	-webkit-border-radius:0.5em 0.5em 0 0;
	-moz-border-radius:0.5em 0.5em 0 0;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #585858 ), to( #565656 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient(#585858, #565656); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient(#585858, #565656); /* FF3.6 */
	background-image:     -ms-linear-gradient(#585858, #565656); /* IE10 */
	background-image:      -o-linear-gradient(#585858, #565656); /* Opera 11.10+ */
	background-image:         linear-gradient(#585858, #565656);
	
}
.window .content {
	/*min-height:100px;*/
	overflow:auto;
	padding:10px;
	background: linear-gradient(#FBFBFB, #EEEEEE) repeat scroll 0 0 #FFF9DF;
    color: #222222;
    text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0 0 0.6em 0.6em;
	-webkit-border-radius: 0 0 0.6em 0.6em;
	-moz-border-radius: 0 0 0.6em 0.6em;
}
.window #txt {
	min-height:30px;font-size:16px; line-height:22px;
}
.window .txtbtn {
	
	background: #f1f1f1;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #DCDCDC ), to( #f1f1f1 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #DCDCDC ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #DCDCDC ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #DCDCDC ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #DCDCDC ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #DCDCDC );
	border: 1px solid #CCCCCC;
	border-bottom: 1px solid #B4B4B4;
	color: #555555;
	font-weight: bold;
	text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0.6em 0.6em 0.6em 0.6em;
	display: block;
	width: 100%;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
	text-overflow: ellipsis;
	white-space: nowrap;
	cursor: pointer;
	text-align: windowcenter;
	font-weight: bold;
	font-size: 18px;
	padding:6px;
	margin:10px 0 0 0;
}
.window .txtbtn:visited {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #cccccc );
}
.window .txtbtn:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #cccccc );
}
.window .txtbtn:active {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #cccccc ), to( #ffffff )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #cccccc , #ffffff ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #cccccc , #ffffff ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #cccccc , #ffffff ); /* IE10 */
	background-image:      -o-linear-gradient( #cccccc , #ffffff ); /* Opera 11.10+ */
	background-image:         linear-gradient( #cccccc , #ffffff );
	border: 1px solid #C9C9C9;
	border-top: 1px solid #B4B4B4;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) inset;
}

.window .title .close {
	float:right;
	background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACTSURBVEhL7dNtCoAgDAZgb60nsGN1tPLVCVNHmg76kQ8E1mwv+GG27cestQ4PvTZ69SFocBGpWa8+zHt/Up+IN+MhgLlUmnIE1CpBQB2COZibfpnXhHFaIZkYph0SOeeK/QJ8o7KOek84fkCWSBtfL+Ny2MPpCkPFMH6PWEhWhKncIyEk69VfiUuVhqJefds+YcwNbEwxGqGIFWYAAAAASUVORK5CYII=");
	width:26px;
	height:26px;
	display:block;	
}
</style>
</head><body class="mode_webapp"><div class="window" id="windowcenter">
	<div id="title" class="title">消息提醒<span class="close" id="alertclose"></span></div>
	<div class="content">
	 <div id="txt"></div>
	 <input type="button" value="确定" id="windowclosebutton" name="确定" class="txtbtn">	
	</div>
</div>

<style>
</style>


<div class="menu_header"> 
     <div class="menu_topbar">
      <strong class="head-title">查看我的订单</strong>
      <span class="head_btn_left"><a href="javascript:history.go(-1);"><span>返回</span></a><b></b></span>
      <a class="head_btn_right" href="<?php echo Conf::$http_path.'dc/index-'.$wid.'.html?wxid='.$_GET['wxid']; ?>">
      <span><i class="menu_header_home"></i></span><b></b>
      </a>
     </div>
</div>

<div class="cardexplain"> 

<!--超过预订时间3天后自动删掉预订记录，免得占服务器资源！-->

<?php foreach((array)$f as $b){  ?>
<ul class="round">
<li class="title"><a href="<?php echo "xx-".Request::get('1')."-".$b->id.".html?wxid=".$_GET['wxid']."#mp.weixin.qq.com" ?>"><span><?php echo date("Y-m-d H:i:s",$b->time);?></span></a></li>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cpbiaoge">
  <tbody><tr>
    <th>订单编号</th>
    <th width="70" class="cc">订单金额</th>
    <th width="55" class="cc">订单状态</th>
  </tr>
  	<tr><td><?php echo $b->time;?></td>
    <td class="cc"><?php echo $b->captch;?></td>
    <td class="cc"> <em class="no"><?php echo $zt[$b->state];?></em> </td>
  </tr>
        </tbody></table>
</ul>         
			<?php  }?>
	
	
	

         
         
         
 
 
<!--页码-->
    


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



</div></body></html>