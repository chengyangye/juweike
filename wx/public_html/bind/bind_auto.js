audiojs.events.ready(function() {
	var a = audiojs.createAll()
});
var rebind = $("#rebind").val();
$(function() {
	setCenter($("#wrapper"));
	if (rebind) {
		loadSliderImg();
		$(".box").show()
	} else if(!window.donotflash){
		loadImg()
	}
	doLogo();
	$("#login_form").validate({
		rules : {
			username : {
				required : true
			},
			password : {
				required : true
			}
		},
		messages : {
			username : {
				required : "请输入微信公众号!"
			},
			password : {
				required : "请输入密码!"
			}
		},
		showErrors : function(a, c) {
			if (c && c.length > 0) {
				$.each(c, function(d, f) {
					var e = $(f.element);
					e.addClass("error").attr("title", f.message)
				})
			} else {
				var b = $(this.currentElements);
				b.removeClass("error").removeAttr("title")
			}
		},
		submitHandler : function() {
			if ($("upgrade_btn").hasClass("disabled")) {
				return false
			}
			var a = {};
			a.username = $("#username").val();
			a.password = $("#password").val();
			a.imgcode = $("#imgcode").val();
			a.sig = $("#sig").val();
			$.post("/usr/bind.html", a, function(b) {
				if (b.notres) {
					alert("微信服务器正在升级，请稍候再试");
					return false
				}
				if (b.yzml) {
					alert("一键升级通道繁忙，请尝试点击手动配置");
					return false
				}
				if (b.repeat) {
					alert("您的帐号已经被绑定过,请尝试点击手动配置。");
					return false
				}
				if (b.forbit) {
					alert("您绑定公众号的数量已经达到上限了。");
					return false
				}
				if (b.overcount) {
					alert("您的帐号非法绑定次数超过最大限度，帐号已被冻结，请联系客服解冻！");
					return false
				}
				if (b.error_account) {
					alert("您绑定的公众帐号与所申请的不 一致，请绑定正确的公众帐号，否则，该帐号将会被冻结！")
				}
				if (0 == b.errCode) {
					$main = $(".main");
					$("#main-title").text("智能升级中......");
					$main.find(".login-desc").hide();
					$main.find(".process").show();
					$main.find(".login-form").hide();
					$main.find(".slider").show();
					bind();
				} else {
					var c = $("#login_form");
					c.find(".error-text").text(b.errMsg);
					if (b.imgcode) {
						c.find(".verify-row").show();
						$("#verify_img").attr("src", b.imgcode);
						$("#sig").val(b.cookie);
						$("#imgcode").focus()
					} else {
						c.find(".verify-row").hide()
					}
				}
				$("#upgrade_btn").removeClass("disabled");
				$("#submit_wait").hide()
			}, "json");
			$("#login_form .error-text").text("");
			$("#upgrade_btn").addClass("disabled");
			$("#submit_wait").show();
			return false
		}
	});
	$(".main .rebind-btn").click();
	$(window).resize(function() {
		setCenter($("#wrapper"))
	});
	$(window).bind("beforeunload",function(a) {
						var b = $(".main");
						if (!$(".process", b).is(":hidden")
								&& $(".handler", b).width() < $(".progress", b)
										.width()) {
							return "正在升级中，强制退出可能会导致升级失败，您确定要退出升级吗?"
						} else {
							return
						}
	});
});
function doLogo() {
	if (!BIND_LOGO_SHOW) {
		$(".huaer").hide()
	}
}
function aniText() {
	var a = $("#text");
	var b = parseInt(a.css("top"));
	if (b == -a.height()) {
		a.css("top", "0px")
	}
}
function setCenter(a) {
	var b = $(window).width(), d = $(window).height(), c = a.width(), e = a.height();
	if (b > c) {
		a.css("left", (b - c) / 2 + "px");
	} else {
		a.css("left", "50px")
	}
	if (d - e >= 120) {
		a.css("top", (d - e) / 2)
	} else {
		if (d - e <= 90) {
			a.css("top", "45px")
		} else {
			a.css("top", "55px")
		}
	}
}
var cur = 0;
var step = 1;
function bind() {
	getStep();
}
function getStep() {
	$.post(
					"/usr/tobind.html?step=" + step,
					function(a) {
						if (a.invalid) {
							alert("您的公众账号绑定次数过于频繁，此公众账号已被系统冻结，如有疑问，请联系客服！");s
							return false
						}
						if (a.forbit) {
							alert("没有发现需要绑定的帐号。");
							return false
						}
						if (a.overcount) {
							alert("您的帐号绑定次数超过最大限度，帐号已被冻结，请联系客服解冻！");
							return false
						}
						if (a.repeat) {
							alert("您的帐号已经被绑定过,请尝试点击手动配置。");
							return false
						}
						if (a.finish) {
							if (a.success) {
								doProcess(a)
							} else {
								alert("绑定失败，请登录微信公众平台完成实名认证和填写完成基本资料后，再进行智能升级绑定。如果您新申请的微信公众账号未满7天，请在注册满7天开发者权限开放后，再进行绑定。")
							}
						} else {
							setTimeout(getStep, 3000)
						}
					}, "json");
}
function doProcess(a) {
	if (step != a.step) {
		return
	}
	$main = $(".main");
	$main.find(".do").text(a.message);
	var g = a.percent, f = g - cur, b = 0, e = [];
	while (f - b >= 2) {
		var d = parseInt(Math.random() * 5 + 1);
		if (step == 1 && e.length == 0) {
			d = 10
		}
		d = b + d > f ? f - b : d;
		e.push(d);
		b += d
	}
	e.push(f - b);
	var c = 0;
	var h = setInterval(function() {
		if (c++ >= e.length) {
			clearInterval(h);
			$main.find(".check-box:lt(" + step + ")").addClass("finish");
			if (g < 100) {
				++step;
				getStep()
			} else {
				$main.find(".do").text("升级成功，请稍等...");
				setTimeout(function() {
					$main = $(".main");
					$main.find(".process").hide();
					$main.find(".slider").hide();
					$main.find(".rebind").show();
					$("#main-title").text("绑定完成，测试账号");
					$main.find(".bind-validate").show();
					$(".rebind-btn", $main).attr("data-id", a.wuid);
					$(".bind-validate .done-btn").addClass("done-disabled");
					var j = $(".bind-validate .done-btn");
					j.addClass("done-disabled");
					var k = 5;
					var l = setInterval(function() {
						if (--k > 0) {
							$(".bind-validate .counter").text(k + "s")
						} else {
							j.removeClass("done-disabled");
							$(".bind-validate .count-back").hide();
							clearInterval(l)
						}
					}, 1000)
				}, 5000)
			}
		} else {
			cur += e[c - 1];
			var i = $(".main .handler");
			i.width(i.parent().width() * cur / 100);
			$main.find(".percent").text(cur)
		}
	}, 500)
}
function loadImg() {
	$(".preload").one("load", function() {
		var a = $(window).width(), b = $(window).height();
		$(this).show().css({
			left : (a - $(this).width()) / 2,
			top : (b - $(this).height()) / 2
		});
		loadPreImg()
	}).attr("src", "/bind/loading2.gif");
	loadSliderImg()
}
function loadPreImg() {
	var c = 4;
	var b = 0;
	var d = [];
	for ( var a = 1; a <= c; a++) {
		(function(e) {
			$("#pre_" + e).one(
					"load",
					function() {
						if (++b == c) {
							$(".preload").hide();
							$(".tip").show();
							var j = $(".tip1"), f = $(".circle", j), h = $(
									".loader", j), g = $(".p", j), i = $(
									".progress", j).width();
							h.animate({
								width : "364px"
							}, {
								duration : 5000,
								step : function() {
									var k = h.width();
									f.css("left", k);
									g.text(Math.round(100 * k / i) + "%").css(
											"left", k)
								}
							});
							setTimeout(function() {
								hide($("#pre_1"));
								show($("#pre_2"))
							}, 7000);
							setTimeout(function() {
								h.stop();
								h.animate({
									width : "520px"
								}, {
									duration : 3000,
									step : function() {
										var k = h.width();
										f.css("left", k);
										g.text(Math.round(100 * k / i) + "%")
												.css("left", k)
									}
								})
							}, 10000);
							setTimeout(function() {
								showBigTip()
							}, 15000)
						}
					}).attr("src", BIND_PREIMG_PREFIX + e + ".png?v=20130813")
		})(a)
	}
}
function loadSliderImg() {
	$(".main .loading")
			.one(
					"load",
					function() {
						var c = 3;
						var b = 0;
						var d = [];
						var e = $(".main .slider");
						for ( var a = 1; a <= c; a++) {
							(function(g) {
								var f = $(
										"<img id='big" + g
												+ "' style='display:none'/>")
										.appendTo(e);
								f.one("load", function() {
									if (++b == c) {
										e = $(".main .slider");
										e.find(".loading").remove();
										e.omSlider({
											controlNav : false,
											interval : 3000
										});
										e.find("img").show()
									}
								});
								f.attr("src",
										"/bind/big"	+ g + ".jpg")
							})(a)
						}
					}).attr("src","/bind/loading.gif")
}
function showBigTip() {
	$(".tip1").animate({
		opacity : 0
	}, 2000, function() {
		$(".tip1").hide()
	});
	$(".tip2").show();
	var d = $("#pre_3");
	d.css("top", $("#pre_3").height()).animate({
		top : 0,
		opacity : 1
	}, 3000, function() {
		$("#text_3").animate({
			opacity : 1
		}, 2000);
		setTimeout(function() {
			d.animate({
				left : "-=" + d.width() + "px",
				width : 0,
				opacity : 0
			}, 3000);
			$("#text_3").animate({
				opacity : 0
			}, 2000)
		}, 3000)
	});
	var c = $("#pre_4"), a = c.width(), b = c.height();
	c.css({
		left : "+=" + a / 2,
		top : b / 2,
		width : 0,
		height : 0
	});
	setTimeout(function() {
		c.animate({
			left : "-=" + a / 2,
			top : 0,
			width : a,
			height : b,
			opacity : 1
		}, 6000)
	}, 6000);
	setTimeout(function() {
		$("#text_4").animate({
			opacity : 1
		}, 2000)
	}, 10000);
	setTimeout(function() {
		c.animate({
			top : -1 * (c.offset().top + c.height())
		}, 4000);
		$("#text_4").animate({
			opacity : 0
		}, 2000)
	}, 15000);
	setTimeout(function() {
		var e = $("#text_5");
		setCenter(e);
		if(!window.donotflash){
			e.animate({
				opacity : 1
			}, 2000)
		}		
	}, 19000);
	setTimeout(function() {
		$("#text_5").animate({
			opacity : 0
		}, 2000, function() {
			$("#text_5").hide();
			$(".tip").hide();
			$box = $(".box").show();
			if(!window.donotflash){
				$(".main", $box).css("opacity", 0).animate({
					opacity : 1
				}, 3000);
				if (BIND_LOGO_SHOW) {
					$(".huaer", $box).css("opacity", 0).animate({
						opacity : 1
					}, 3000)
				}
				$(".thank", $box).css("opacity", 0).animate({
					opacity : 1
				}, 3000);
			}			
			
			$("body").css("overflow", "auto")
		})
	}, 22000)
}
function show(a) {
	a.animate({
		opacity : 1
	}, 3000)
}
function hide(a) {
	a.animate({
		opacity : 0
	}, 2000)
}
function showDone() {
	if (!$(".bind-validate .done-btn").hasClass("done-disabled")) {
		$("#wrapper .box").hide();
		$("#wrapper .done").show()
	}
};