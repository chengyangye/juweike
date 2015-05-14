<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title></title>

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>金韩美食音乐盒</title>
<link rel="stylesheet" type="text/css" href="/res/box/mp3box.css" media="all">
<style type="text/css">
body{
background:url(<?php echo $list1[0]->pic; ?>
) no-repeat left top #666;	background-size:100% auto;
  }
</style>
</head>
<body style="">
<script type="text/javascript">
 	        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {  
          "imgUrl": "http://wx.att2.net/jhms.jpg", 
          "timeLineLink": "http://wx.att2.net/box/?key=510807348",
            "sendFriendLink": "http://wx.att2.net/box/?key=510807348",
            "weiboLink": "http://wx.att2.net/box/?key=510807348",
          "tTitle": "",
            "tContent": "欢迎来到金韩美食音乐搜索页面",
            "fTitle": "",
            "fContent": "",
            "wContent": "欢迎来到金韩美食音乐搜索页面" 
        };
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
    </script>

<div class="page">
    <section class="demo">
        <div id="myAudio" style="margin:0 auto;">
<audio>
<?php
foreach($m1 as $a => $b)
{
echo "<source title='".$b->name."' src='".$b->pic."'  />";
}
?>
</audio>
</div>
<script src="/res/box/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/res/box/AudioPlayer.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
$("#myAudio").initAudio();
});
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>
    </section>

</div>

</body></html>