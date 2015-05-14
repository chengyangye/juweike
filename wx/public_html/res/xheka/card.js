//分享
$('.sharebtn').click(function() {
	var contmp=doccon+'查看贺卡点击此链接'+docurl;
	showPopWin({
		        content: '<div class="share"><div class="share_body"><div class="share_box"><div class="share_img"><span class="share_span"><img src="'+docimg+'"></span></div><textarea id="share_content" class="share_textarea" preview="80">' + contmp + '</textarea><div class="clear"></div></div></div><div class="shares"><div id="share_btn"></div></div></div>',
			    title: '分享到'
		 	});
		    share_config = {
				'title':document.title,
				'url':docurl,
				'img':docimg,
				'con':doccon,
				'obj':'#share_btn',
				'ids':[["tsina"],["tqq"],["qzone"],["txpengyou"],["renren"],,["douban"]]
			};
		    show_share(share_config);
	
});
function show_share(share_config){
        var share_title = share_config.title
        obj = share_config.obj,
        ids = share_config.ids,
		share_con = share_config.con,
        share_img = share_config.img,
        share_current = share_config.url;
        var sns_id;
        var sns_str={
				"tsina": { "text":"分享到新浪微博"},
				"tqq": { "text":"分享到新腾讯微博"},
				"qzone": { "text":"分享到QQ空间"},
				"renren": { "text":"分享到新人人网"},
				"kaixin001": { "text":"分享到开心网"},
				"t163": { "text":"分享到网易微博"},
				"tsohu": { "text":"分享到搜狐微博"},
				"txpengyou": { "text":"分享到腾讯朋友"},
				"douban": { "text":"分享到豆瓣"},
				"weixin": { "text":"分享到微信"}
		};

        if (!share_title) {
            share_title = "";
        }

        var share_titleVal = encodeURI(share_title),
        share_currentUrl = encodeURI(share_current),
		share_conVal = encodeURI(share_con),
        share_imgUrl = encodeURIComponent(share_img);

        var tsinaVal = function() {
            var _shareUrl = "http://service.weibo.com/share/share.php?",
            _appkey = encodeURI(""),
            _ralateUid = "3842713351"; //添加自己微博账号，显示为"(分享自 @userName)"
            var _u = _shareUrl + '&title=' + share_conVal + '&url=' + share_currentUrl + '&appkey=' + _appkey + '&pic=' + share_img + '&ralateUid=' + _ralateUid;
            return _u;
        },
        tqqVal = function() {
            var _shareUrl = "http://v.t.qq.com/share/share.php?",
            _appkey = encodeURI(""),
            _site = '',
            _assname = "";
            var _u = _shareUrl + '&title=' + share_conVal + '&url=' + share_currentUrl + '&appkey=' + _appkey + '&pic=' + share_img + '&assname=' + _assname;
            return _u;
        },
        qzoneVal = function() {
            var _shareUrl = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?",
            _summary = share_conVal;
            var _u = _shareUrl + 'url=' + share_currentUrl + '&title=' + share_titleVal + '&pics=' + share_img + '&summary=' + _summary;
            return _u;
        },
        renrenVal = function() {
            var _shareUrl = "http://share.renren.com/share/buttonshare.do?";
            var _u = _shareUrl + 'link=' + share_currentUrl + '&title=' + share_titleVal;
            return _u;
        },
        kaixin001Val = function() {
            var _shareUrl = "http://www.kaixin001.com/repaste/share.php?";
            var _u = _shareUrl + 'rtitle=' + share_titleVal + '&rurl=' + share_currentUrl + '&rcontent=' + share_conVal + share_currentUrl;
            return _u;
        },
        t163Val = function() {
            var _shareUrl = "http://t.163.com/article/user/checkLogin.do?",
            _source = share_conVal;
            var _u = _shareUrl + 'source=' + _source + '&info=' + share_titleVal + '+' + share_currentUrl + '&images=' + share_img;
            return _u;
        },
        tsohuVal = function() {
            var _shareUrl = "http://t.sohu.com/third/post.jsp?";
            var _u = _shareUrl + 'url=' + share_currentUrl + '&title=' + share_titleVal + '&content=utf-8&pic=' + share_img;
            return _u;
        },
        txpengyouVal = function() {
            var _shareUrl = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?to=pengyou";
            var _u = _shareUrl + '&url=' + share_currentUrl;
            return _u;
        },
        weixinVal = function(){
			if (typeof WeixinJSBridge == "undefined")
			{
				return '';
			}else{
				var u='WeixinJSBridge.invoke("shareTimeline",{"title": '+share_title+',"link": '+share_current+',"desc": "","img_url": '+share_img+'});';
				return u;
			}
        },
        doubanVal = function() {
            var _shareUrl = "http://shuo.douban.com/!service/share?";
            var _u = _shareUrl + 'image=' + share_img + '&href=' + share_currentUrl + '&name=' + share_titleVal;
            return _u;
        };
        for(sns_id in ids){
        	var sns_name = ids[sns_id];
        	var str = '<a id="share_'+sns_name+'" class="share_btn">&nbsp;</a>';
        	$(obj).append(str);
        	$("#share_"+sns_name).attr("title", sns_str[sns_name].text);
        	$("#share_"+sns_name).on("click", function(){
        			var name = $(this).attr('id').replace('share_','');
        			if(name=='weixin'){
              			if(weixinVal().length>0){
        					eval(weixinVal());
                        }
        			}else{
        				window.open(eval(name + 'Val()'), '_blank', 'location=yes');
					}

			});
        }

}
//弹出窗口
function showPopWin(b) {
    var g = $.extend({
        title: "",
        pid: "pop_" + new Date().getTime(),
		btns:"",
        content: "",
        isModel: false,
        bg_color:'#fff',
        text_color:'#333',
        text_size:'16px',
        onOK: function(){},
        onCancel: function(){},
        onClose: function(){}
    },
    b);
    var a = "";
	var b= "";
    a += "<div class='p_main' id='" + g.pid + "'><div class='p_cont'>";
	if(g.title.length!=0){
		a += "<div class='p_title'>" + g.title + "<a href='javascript:void(0)' class='clo'>x</a></div>";
	}
    a += "<div class='p_text' style='text-align:center'><div style='padding:10px 10px 0 10px;'>";
	a += g.content;
    b += "</div><!--button style='width: 356px;height:30px;' class='cpms'>复制到短信发出去</button-->";
	if(g.btns.length!=0){
		b += "<p class='btns'>"+g.btns+"</p>";
	}
	b+="</div></div></div>";

	a += b;
    if ($(".p_main").size() > 0) {
        $(".p_main").remove()
    }

    $("body").append(a);
    var d = $("#" + g.pid);
    var c = d.find(".btns");
    $(".p_text").css('background','none repeat scroll 0 0 '+g.bg_color).css('color',g.text_color).css('font-size',g.text_size);
    $(".p_main").height(Math.max($("body").height(), $(window).height()) + document.body.scrollTop + document.documentElement.scrollTop).width($(window).width());
    var f = $(".p_main").children(),
    e = document.body.scrollTop  - f.height() / 2;
    if (e < 0) {
        e = 10
    }
    f.css({
        "margin-top": e
    });
    if (!g.isModel) {
        d.click(function(h) {
            if ($(h.target).hasClass("p_main")) {
                d.remove()
            }
        })
    }
    d.find(".h_close,.clo").click(function() {
        d.remove();
        g.onClose(this)
    });
    c.find(".h_ok").click(function() {
        d.remove();
        g.onOK(this);
        g.onClose(this)
    });
	c.find(".cpms").click(function() {
		var con = g.content;
		window.clipboardData.setData('text',con+'查看贺卡点击此链接'+document.location);
    });
    c.find(".h_cancel").click(function() {
        d.remove();
        g.onCancel(this);
        g.onClose(this)
    });
}
if(is_weixn()){
	(function(){

	var
	_dom = jQuery('#con_v'),
	_html0 = _dom.html(),
	_em = jQuery('<p></p>').html('a').css({display:'inline'}),
	_init = function(){
	_em.appendTo(_dom);
	var
	_html = _html0,
	_max = Math.floor( _dom.width() / _em.width() ),
	_reg = new RegExp('[a-z1-9]{' + _max + ',}', 'ig');
	_em.remove();
	_html = _html.replace(/>[^<]+</g,function(txt){
	return txt.replace(_reg, function(str){
	var _str = str, result = []
	while(_str.length > _max){
	result.push(
	_str.substr(0, _max)
	);
	_str = _str.substr(_max);
	}
	result.push(_str);
	return result.join('<br/>');
	});
	});
	_dom.html(_html);
	};
	jQuery(window).on('resize', _init).trigger('resize');
	})();
	function getStrFromTxtDom(selector){
	return jQuery('#txt-' + selector)
	.html()
	.replace(/&lt;/g, '<')
	.replace(/&gt;/g, '>');
	}

	(function(){
	var onBridgeReady = function () {
	var
	appId = '',
	imgUrl = docthumb,
	link = docurl,
	
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
}
function is_weixn(){
var ua = navigator.userAgent.toLowerCase();
if(ua.match(/MicroMessenger/i)=="micromessenger") {
return true;
} else {
return false;
}
}