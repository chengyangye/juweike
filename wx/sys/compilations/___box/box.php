<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>音乐盒列表</title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="/res/box/mp3boxlist.css" rel="stylesheet" type="text/css">
 
</head>

<body id="mp3box">
<script type="text/javascript">
 	        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {  
           // "imgUrl": "", 
            "timeLineLink": "http://www.wxapi.cn?ac=boxl&id=650&tid=650&refwx=mp.weixin.qq.com",
            "sendFriendLink": "http://www.wxapi.cn?ac=boxl&id=650&tid=650&refwx=mp.weixin.qq.com",
            "weiboLink": "http://www.wxapi.cn?ac=boxl&id=650&tid=650&refwx=mp.weixin.qq.com",
            "tTitle": "点击进入音乐盒",
            "tContent": "点击进入音乐盒",
            "fTitle": "点击进入音乐盒",
            "fContent": "点击进入音乐盒",
            "wContent": "点击进入音乐盒" 
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
<div class="qiandaobanner"> <a href=""><img src="/res/box/VplEAqBgzz.png"></a> </div>
<div id="todayList">
<!--显示音乐盒名称+说明-->
<ul class="chatPanel">
  <?php foreach($list1 as $a => $b)
  {
  echo "
<li class='media mediaFullText'>
<a href='".Conf::$http_path."box/player-".$b->id."-".$b->wid.".html'>
<div class='mediaPanel'></div>
<div class='mediaImg'><img src='".$b->pic."'></div>
<div class='mediaHead'><span class='title'>".$b->name."</span> 
<div class='mediaContent mediaContentP'>
<p>".$b->ms."</p>
</div>
                            </div>
                        <div class='clr'></div>
</a>
</li>";
  
  
  
  }
  ?>

    </ul>

 
   
</div>
<!--页码-->

<script>
function dourl(url){
location.href= url;
}
</script>
<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>





</body></html>