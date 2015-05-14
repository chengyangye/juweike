//头部
$().ready(function(){
	resizeLeft();
})
function resizeLeft(){
	var slideWidth = $(document).width();
	if(slideWidth<=1200){slideWidth=1200}
	if($('#layout').css('width')<'1200'){
		$('#layout').css('overflow-x','auto')
	}else{
		$('#layout').css('overflow-x','hidden')
	}
	$('#head').css({
		'left':(slideWidth - 1200) / 2
	})
	$('.slide_free').css({
		'left':slideWidth / 2 -504
	})
	$('.free_button').css({
		'left':slideWidth / 2 -162
	})
	$('.slides-tabs').css({'left':slideWidth / 2 -30})
}

//幻灯片
$().ready(function(){
	slide();
	autoplay();
	$(window).resize(function(){
		slide();
		pages(e);
		resizeLeft();
	});
//	$('.z').click(function(){
//		gunleft();
//	})
//	$('.y').click(function(){
//		gunright();
//	})
	$('.slides-tabs .hb').click(function(){
		clearTimeout(timer);
		page($(this).index());
		$('.slides-tabs .hb').removeClass('haha');
		$(this).addClass('haha');
	})
})





function slide(){
	slideWidth = $(document).width();
	var ee = $('#banner .slides-pic li').length;
	$('#banner .slides-pic li,.slides-pic,#banner').css({
		'width':slideWidth
	})
	$('.slides-pic').css({
		'width':ee * slideWidth
	})
}
var slideWidth = 0;
var x = 0;
var e = 0;
var timer = false;
function gunleft(){
	x = x+1;
	x=x<0 ? -x :x;
	e = x % 3;
	$('.hb').removeClass('haha').eq(e).addClass('haha');
	$('.slides-pic').animate({
		'left': -(e * slideWidth)
	},500)
}
function gunright(){
	x = x-1;
	x=x>0?-x:x;
	e = x % 3;
	$('.hb').removeClass('haha').eq(e).addClass('haha');
	$('.slides-pic').animate({
		'left': e * slideWidth
	},500)
}
function autoplay(){
	clearTimeout(timer);
	timer = setInterval(gunleft,4000);
}


function page(bb){
	$('.slides-pic').animate({
		'left': -(bb * slideWidth)
	},500,function(){
		x = bb;
		autoplay();
	})
}

function pages(cc){
	$('.slides-pic').css({
		'left': -(cc * slideWidth)
	});
	x = cc;
	$('.slides-tabs .hb').removeClass('haha').eq(x).addClass('haha');
	autoplay();
}


//导航
$().ready(function(){
	$(window).scroll(function(){
		headEdite();
	});
})
function headEdite(){
	var scrollH = $(this).scrollTop();
	if(scrollH>=40){
		$('#head').addClass('head_scroll');
		$('#head .nav').addClass('nav_scrool');
		$('#head .logo').hide();
		$('#head .head_scroll_logo').show();
	}else{
		$('#head .logo').show();
		$('#head').removeClass('head_scroll');
		$('#head .nav').removeClass('nav_scrool');
		$('#head .head_scroll_logo').hide();
	}
}






//锚点
$().ready(function(){
	rel();
})

function rel(){
	$('.nav a,#top').click(function(){
		var rel = $(this).attr('href');
		if(rel=='javascript:;'){return}
		var pos = $(rel).offset().top;
		$('html,body').animate({
			scrollTop:pos
		},800)
	})
	
}

//scrollBtn
$().ready(function(){
	$('.returnTop').hide();
	scrollBtn();
	backup();
	$(window).resize(function(){
		scrollBtn();
		backup();
	})
})

function scrollBtn(){
	var scrollHeight = $(window).height();
	$('#scrollBtn').css({
		'top':scrollHeight / 2
	})
	$('.cqrm,.qrm').mouseover(function(){
		$('.qrm').show();
		clearTimeout(timer);
	}).mouseout(function(){
		timer = setTimeout(function(){
			$('.qrm').hide();
		},200);
	})
}


function backup(){
	$(window).scroll(function(){
		var scrollHeight = $(window).height();
		var backup = $(document).scrollTop();
		if(backup > scrollHeight /2){
			$('.returnTop').show();
		}else{
			$('.returnTop').hide();
		}
	})
}



//招聘英才
$().ready(function(){
	$('.msg-jobwork').hide();
	$('h3.msg-job-h3').click(function(){
		if ($(this).next('.msg-jobwork').css('display')=='none') {
			$(this).next('.msg-jobwork').slideDown();
		}else{
			$(this).next('.msg-jobwork').slideUp();
		}
	})
})


//微信官方地址dialog
$().ready(function(){
	dialogweixin();
	$(window).resize(function(){
		dialogweixin();
		console.log(1)
	})
})
function dialogweixin(){
	console.log(2);
	var weixinw = $(window).width();
	var weixinh = $(window).height();
	var weixinws = $(document).width();
	var weixinwh = $(document).height();
	$('.weixin').click(function(){
		$('.weixin_dialog').css({
			'display':'block'
		});
		$('.weixin_dialog_bg').css('display','block');
	});
	$('.weixin_dialog').css({
		'left':weixinw / 2 - 180,
		'top':weixinwh - (weixinh / 2 + 180)
	});
	$('.weixin_dialog_click,.weixin_dialog_bg').click(function(){
		$('.weixin_dialog').css('display','none')
		$('.weixin_dialog_bg').css('display','none')
	});
}









