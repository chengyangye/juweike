/*!
 * index
 * Author: zhugao
 * Date: 2013-5-11
 */

// 添加客户案例html
function appendCase () {
	var $ul = $('#case ul'),
		img_path = $('#case').data('img-path'),
		index_img_path = img_path + '/',
		avatar_path = img_path + '/',
		weixin_url = 'http://open.weixin.qq.com/qr/code/?username=',
		circle_img = '/',
		_data = CaseData;

	if ($.browser.msie && $.browser.version == 6) {
		circle_img = 'circle_bg_ie6.png';
	} else {
		circle_img = 'circle_bg@2x.png';
	}

	$.each(_data, function (k, v) {
		$ul.append(
			'<li id="case_'+ v[1] +'">' +
				'<div class="code"></div>' +
				'<div class="circle"><img src="'+ index_img_path + circle_img +'" alt="" /></div>' +
				'<div class="logo"><img src="' + avatar_path + v[1] + '.jpg" alt="" /></div>' +
				'<h4>'+ k +'</h4>' +
			'</li>'
		);
	});


	// 二维码放在后面截入，提升页面前期加载速度
	$.each(_data, function (k, v) {
		$('#case_'+v[1]).find('.code').append('<img src="'+ weixin_url + v[0] +'" alt="" />');
	});
}

// 客户案例
function showCode(elem, show) {
	var $elem = $(elem),
		$code = $elem.prev('.code');
	if (show) {
		$code.show().css({
			'opacity': 0
		}).stop().animate({
			'margin-top': 78,
			'opacity': 1
		}, function () {
			$code.show();
		});
	} else {
		$code.css({
			'opacity': $code.css('opacity')
		}).stop().animate({
			'margin-top': 98,
			'opacity': 0
		}, function () {
			$code.hide();
		});
	}
}

// 滑动到锚点
function slideTarget(elem) {
	var id = $(elem).attr('href'),
		$target = $(id);
	$('html, body').stop().animate({
		scrollTop: $target.offset().top - 100 // 排除顶部悬浮导航条的高度
	}, 1000);
}

// 标记导航active
function activeNav(num) {
	var num = num + 100 + 80, // 顶部悬浮导航条的高度 + 距离目标块的边距
		$nav = $('#nav');
	$('div[data-connect=nav]').each(function () {
		var $this = $(this),
			id = $this.attr('id');

		/* if (id === 'footer') {
			// 关于我
			num = num + 200;
		} */
		if (num >= $this.data('num')) {
			$('a.active', $nav).removeClass('active');
			$('a[href=#'+id+']', $nav).addClass('active');
		} else {
			$('a[href=#'+id+']', $nav).removeClass('active');
		}
	});
}

 

$(function () {
	var is_click = false,
		timeout = false;

	// 客户案例
	//appendCase();

	$('.block_case .circle').hover(
		function () {
			showCode(this, true);
		},
		function () {
			showCode(this, false);
		}
	);

	// 点击导航，移到锚点
	$('#nav a:not(.login)').click(function (event) {
		slideTarget(this);
		$('a.active', $('#nav')).removeClass('active');
		$(this).addClass('active');
		is_click = true;
		return false;
	});

	// 在每个块上添加 data-num 标记该块的 offset().top， activeNav() 中会用到
	$('div[data-connect=nav]').each(function () {
		$(this).data('num', $(this).offset().top);
	});

	// 监听滚动事件
	$(window).on('scroll', function () {
		var $this = $(this);
		if (timeout) {
			clearTimeout(timeout);
		}
		timeout = setTimeout(function () {
			var num = $this.scrollTop();
			if (!is_click) {
				activeNav(num);
			}
			is_click = false;
		}, 100);
	});

	 
	var arVersion = navigator.appVersion.split("MSIE");
	var version = parseFloat(arVersion[1]);

	$(window).scroll(function () {
	    var bw = $(document.body).width();
	    var yw = $(".head").width();
	    var bh = $(document.body).height();
	    var yh = $(".head").height();
	    var yscroll = $(document).scrollTop();
	    if ($(document).scrollTop() > 0) {
	        if (version < 7.0) {
	            $(".head").css('top', yscroll).css('left', (bw - yw) / 2).css('position', 'absolute');
	        } else {
	            $(".head").css('top', 0).css('left', (bw - yw) / 2).css('position', 'fixed');
	        }

	    } else {
	        $(".head").css('position', 'static'); /*恢复到初始地方*/
	    }
	    /*窗口改变之后*/
	    $(window).resize(function () {
	        bw = $(document.body).width()
	        $(".head").css('left', (bw - yw) / 2)
	    });
	});

});


