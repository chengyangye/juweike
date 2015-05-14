/*
    ScrollUI 1.0
	Copyright(c) 2011 Jundong Liu dongdong14115@126.com
	Date:2011-3-31
	ScrollUI 使新闻滚动效果更加完美，平滑地移动特性与可控制的无限循环移动
*/

(function($){
$.fn.extend({
        rowScroll:function(opt,callback){
                //参数初始化
                if(!opt) var opt={};
                var _btnleft = $("#"+ opt.left);//向左按钮
                var _btnright = $("#"+ opt.right);//向右按钮
                var timerID;
                var _this=this.eq(0).find("ul:first");
                var     lineW=_this.find("li:first").width(), //获取横宽
						timer=13*lineW,
                        line=opt.line?parseInt(opt.line,10):parseInt(this.width()/lineW,10), //每次滚动的行数，默认为一屏，即父容器高度
                        speed=opt.speed?parseInt(opt.speed,10):500; //卷动速度，数值越大，速度越慢（毫秒）
                        timer=opt.timer //?parseInt(opt.timer,10):3000; //滚动的时间间隔（毫秒）

                if(line==0) line=1;
                var leftWidth=0-line*lineW;
				var rightWidth=line*lineW;
                //向左翻页函数
                var scrollleft=function(){
                        _btnleft.unbind("click",scrollleft); //取消向左按钮的函数绑定
						_this.animate({
                                marginLeft:leftWidth
                        },speed,function(){
                                for(i=1;i<=line;i++){
                                        _this.find("li:first").appendTo(_this);
                                }
								lineW=_this.find("li:first").width();
								leftWidth =0-line*lineW;
								//timer = 13*lineW;
                                _this.css({marginLeft:0});
                                _btnleft.bind("click",scrollleft); //绑定向左按钮的点击事件
                        });

                }
                //向右翻页函数
                var scrollright=function(){
                        _btnright.unbind("click",scrollright);
                        for(i=1;i<=line;i++){
                                _this.find("li:last").show().prependTo(_this);
                        }
						lineW=_this.find("li:first").width();
						leftWidth =0-line*lineW;
						//timer = 13*lineW;
                        _this.css({marginLeft:leftWidth});
                        _this.animate({
                                marginLeft:0
                        },speed,function(){
                                _btnright.bind("click",scrollright);
                        });
                }
               //自动播放
                var autoPlay = function(){
                        if(timer){timerID = window.setInterval(scrollleft,timer);}

                };
                var autoStop = function(){
                        if(timer){window.clearInterval(timerID);}

                };
                 //鼠标事件绑定
                _this.hover(autoStop,autoPlay).mouseout();
                _btnleft.css("cursor","pointer").click( scrollleft ).hover(autoStop,autoPlay);//Shawphy:向上向下鼠标事件绑定
                _btnright.css("cursor","pointer").click( scrollright ).hover(autoStop,autoPlay);

        }
})
})(jQuery);

