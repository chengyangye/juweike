
function $id(a) {
    return "string" == typeof a ? document.getElementById(a) : a
}
function $display(a, b) {
    if (a) if (b = b || "", "string" == typeof a) for (var c = a.split(","), d = 0, f = c.length; d < f; d++) {
        var g = $id(c[d]);
        g && (g.style.display = b)
    } else if (a.nodeType) a.style.display = b;
    else if (a.length) for (d = 0, f = a.length; d < f; d++) $display(a[d], b);
    else a.style.display = b
}
function $displayHide(a) {
    $display(a, "none")
}
function $displayShow(a) {
    $display(a, "")
}
function $delClass(a, b) {
    $setClass(a, b, "remove")
}

function $addClass(a, b) {
    $setClass(a, b, "add")
}
function $getTarget(a, b, c) {
    a = window.event || a;
    a = a.srcElement || a.target;
    if (b && c && a.nodeName.toLowerCase() != c) for (; a = a.parentNode;) {
        if (a == b || a == document.body || a == document) return null;
        if (a.nodeName.toLowerCase() == c) break
    }
    return a
}

function $insertHTML(a, b, c) {
    if (!a) return !1;
    try {
        if (a.insertAdjacentHTML) a.insertAdjacentHTML(b, c);
        else {
            var d = a.ownerDocument.createRange(),
				f = 0 == b.indexOf("before"),
				g = -1 != b.indexOf("Begin");
            if (f == g) d[f ? "setStartBefore" : "setStartAfter"](a), a.parentNode.insertBefore(d.createContextualFragment(c), g ? a : a.nextSibling);
            else {
                var e = a[f ? "lastChild" : "firstChild"];
                e ? (d[f ? "setStartAfter" : "setStartBefore"](e), a[f ? "appendChild" : "insertBefore"](d.createContextualFragment(c), e)) : a.innerHTML = c
            }
        }
        return !0
    } catch (l) {
        return !1
    }
}

function $calendars(a) {
    var b = {
        el: null,
        callback: $empty(),
        unit: "",
        nowDate: "",
        pos: "",
        e: null,
        zIndex: null
    },
		c;
    for (c in a) b[c] = a[c];
    $loadCss("http://static.gtimg.com/css/core/calendars.css");
    var d = "",
		d = d + '<div id="winCalendar" class="winCalendar">',
		d = d + '<div class="close_win"><span id="btnCloseCalendar">\u5173\u95ed</span></div>',
		d = d + '<div id="currentTime" class="currentTime">',
		d = d + '<strong id="currentYear"></strong> - <strong id="currentMonth"></strong>',
		d = d + '<span id="yearMinus" class="arrow leftA" title="\u51cf\u5c11\u5e74\u4efd">&laquo;</span>',
		d = d + '<span id="monthMinus" class="arrow leftB" title="\u51cf\u5c11\u6708\u4efd">&lt;</span>',
		d = d + '<span id="monthPlus" class="arrow rightB" title="\u589e\u52a0\u6708\u4efd">&gt;</span>',
		d = d + '<span id="yearPlus" class="arrow rightA" title="\u589e\u52a0\u5e74\u4efd">&raquo;</span>',
		d = d + "</div>",
		d = d + '<ul class="week">',
		d = d + "<li>\u4e00</li><li>\u4e8c</li><li>\u4e09</li><li>\u56db</li><li>\u4e94</li><li>\u516d</li><li>\u65e5</li>",
		d = d + "</ul>",
		d = d + '<div id="days" class="days"></div>',
		d = d + '<div id="time" class="time">',
		d = d + '<input type="number" id="hours" value="00" maxlength="2" min="0" max="23" autocomplete="off"/><span id="minutesWrap"><span class="interval">:</span><input type="number" maxlength="2" id="minutes" value="00" min="0" max="59" autocomplete="off"/></span><span id="secondWrap"><span class="interval">:</span><input type="number" maxlength="2" id="seconds" value="00" min="0" max="59" autocomplete="off"/></span>',
		d = d + '<span id="btnOk" class="btnOk">\u786e\u5b9a</span>',
		d = d + "</div>",
		d = d + "</div>",
		d = d + '<iframe class="frm_calendar" id="frmCalendar" src="about:blank" scrolling="no" frameborder="0"></iframe>',
		f = function () {
		    if (!$id("elCalendarWrap")) {
		        var a = document.createElement("div");
		        a.innerHTML = d;
		        a.setAttribute("id", "elCalendarWrap");
		        document.body.appendChild(a)
		    }
		},
		g = function (a) {
		    for (var b in a) this[b] = a[b]
		};
    g.prototype = {
        finalDate: "",
        getFinalDate: function () {
            return this.finalDate
        },
        display: function (a) {
            a = a || new Date;
            var b = a.getFullYear(),
				c = 10 > a.getMonth() + 1 ? "0" + (a.getMonth() + 1) : a.getMonth() + 1;
            a = a.getDate();
            var d, g;
            this.finalDate = b + "-" + c + "-" + (10 > a ? "0" + a : a);
            this.el.year.innerHTML = b;
            this.el.month.innerHTML = c;
            d = (new Date(b, c - 1, 1)).getDay() - 1;
            d = -1 == d ? 6 : d;
            g = (new Date(b, c, 0)).getDate() + d;
            for (var f = this.createDayDom(), h = this, r = 0, p = 0, s; s = f[p]; p++) {
                var t;
                p < d || p >= g ? (t = " ", s.className = "no_data") : (t = p + 1 - d, s.onclick = function (a, d) {
                    return function () {
                        f[r].className = "";
                        this.className = "selected";
                        r = d;
                        h.finalDate = b + "-" + c + "-" + (10 > a ? "0" + a : a);
                        "day" == h.el.unit && h.callback && h.callback(h.finalDate)
                    }
                }(t, p));
                s.innerHTML = t;
                t == a && (s.id = this.el.today)
            }
        },
        createDayDom: function () {
            var a = this.el.days.getElementsByTagName("a");
            if (0 >= a.length) for (var b = 0; 42 > b; b++) a = document.createElement("a"), a.setAttribute("href", "javascript:void(0);"), this.el.days.appendChild(a);
            else for (var b = 0, c; c = a[b]; b++) c.className = "";
            $id(this.el.today) && ($id(this.el.today).id = "");
            return this.el.days.getElementsByTagName("a")
        },
        change: function (a) {
            var b = $id(this.el.today),
				c = Number(this.el.year.firstChild.nodeValue),
				d = Number(this.el.month.firstChild.nodeValue) - 1,
				b = Number(b.firstChild.nodeValue);
            switch (a) {
                case "yearPlus":
                    c++;
                    break;
                case "yearMinus":
                    c--;
                    break;
                case "monthPlus":
                    31 == b && 6 != d && (b = 1);
                    d++;
                    11 < d && (c++, d = 0);
                    break;
                case "monthMinus":
                    d--, 0 > d && (c--, d = 11)
            }
            this.display(new Date(c, d, b))
        },
        custom: function (a) {
            this.display(a || new Date);
            a = this.el.currentTime.getElementsByTagName("span");
            for (var b = this, c = 0, d; d = a[c]; c++) d.onclick = function () {
                b.change(this.id)
            }
        }
    };
    (function (a, c, d, m, q, k) {
        f();
        d = d || "day";
        var h = $id("elCalendarWrap");
        $id("winCalendar");
        var r = {
            el: {
                year: $id("currentYear"),
                month: $id("currentMonth"),
                currentTime: $id("currentTime"),
                days: $id("days"),
                today: "today",
                unit: d
            },
            callback: function (a) {
                c(a);
                h.style.display = "none"
            }
        },
			p = new g(r);
        showDate = m.substring(0, 10);
        /\d{4}-\d{2}-\d{2}/.test(showDate) ? (showDate = showDate.match(/(\d{4})-(\d{2})-(\d{2})/), p.custom(new Date(showDate[1], showDate[2] - 1, showDate[3]))) : p.custom();
        "hou" == d || "min" == d || "sec" == d ? (m && (m = m.match(/(\d{2}):(\d{2}):(\d{2})/)) && ($id("hours").value = m[1], $id("minutes").value = m[2], $id("seconds").value = m[3]), $id("time").style.display = "block", $id("minutesWrap").style.display = "min" == d || "sec" == d ? "inline" : "none", $id("secondWrap").style.display = "sec" == d ? "inline" : "none", $id("btnOk").onclick = function () {
            var a = $id("hours").value,
				b = $id("minutes").value,
				e = $id("seconds").value;
            if (0 > a || 23 < a) return alert("\u5c0f\u65f6\u53ef\u4ee5\u662f0\u81f323\u7684\u6570"), !1;
            if (("min" == d || "sec" == d) && (0 > b || 59 < b)) return alert("\u5206\u949f\u53ef\u4ee5\u662f0\u81f359\u7684\u6570"), !1;
            if ("sec" == d && (0 > e || 59 < e)) return alert("\u79d2\u6570\u53ef\u4ee5\u662f0\u81f359\u7684\u6570"), !1;
            a = 2 > a.length ? "0" + a : a;
            a = "min" == d || "sec" == d ? a + (":" + (2 > b.length ? "0" + b : b)) : a + ":00";
            a = "sec" == d ? a + (":" + (2 > e.length ? "0" + e : e)) : a + ":00";
            b = p.getFinalDate() + " " + a;
            c && c(b);
            h.style.display = "none"
        }) : $id("time").style.display = "none";
        q = q || [0, 0];
        b.zIndex = parseInt(b.zIndex, 10);
        isNaN(b.zIndex) || null == b.zIndex || (h.style.zIndex = b.zIndex);
        h.style.display = "block";
        h.style.position = "absolute";
        h.style.left = a.getBoundingClientRect().left + $getPageScrollWidth() + q[0] + "px";
        h.style.top = a.getBoundingClientRect().top + $getPageScrollHeight() + q[0] + a.offsetHeight + "px";
        h.onclick = function (a) {
            a = a || window.event;
            $stopBubble(a)
        };
        $stopBubble(k);
        $addEvent(document, "click", function () {
            h.style.display = "none"
        });
        $id("btnCloseCalendar").onclick = function () {
            h.style.display = "none"
        }
    })(b.el, b.callback, b.unit, b.nowDate, b.pos, b.e)
}
function $stopBubble(a) {
    a = a || window.event;
    window.event ? a.cancelBubble = !0 : a.stopPropagation()
}

function $fireEvent(a, b, c) {
    a = $id(a);
    b = b || "click";
    c = c || "MouseEvents";
    a == document && document.createEvent && !a.dispatchEvent && (a = document.documentElement);
    document.createEvent ? (c = document.createEvent(c), c.initEvent(b, !0, !0), a.dispatchEvent(c)) : (c = document.createEventObject(), c.eventType = "on" + b, a.fireEvent(c.eventType, event))
}

function $attr(a, b, c) {
    function d(a, b) {
        b(a);
        for (a = a.firstChild; a;) d(a, b), a = a.nextSibling
    }
    var f = [];
    c = c || document.body;
    d(c, function (d) {
        var c = 1 === d.nodeType && ("class" === a ? d.className : d.getAttribute && d.getAttribute(a));
        "string" !== typeof c || c !== b && "string" === typeof b || f.push(d)
    });
    return f
}

function $formatDate(a, b) {
    return b.replace(/yyyy|YYYY/, a.getFullYear()).replace(/yy|YY/, $addZero(a.getFullYear() % 100, 2)).replace(/mm|MM/, $addZero(a.getMonth() + 1, 2)).replace(/m|M/g, a.getMonth() + 1).replace(/dd|DD/, $addZero(a.getDate(), 2)).replace(/d|D/g, a.getDate()).replace(/hh|HH/, $addZero(a.getHours(), 2)).replace(/h|H/g, a.getHours()).replace(/ii|II/, $addZero(a.getMinutes(), 2)).replace(/i|I/g, a.getMinutes()).replace(/ss|SS/, $addZero(a.getSeconds(), 2)).replace(/s|S/g, a.getSeconds()).replace(/w/g, a.getDay()).replace(/W/g, "\u65e5\u4e00\u4e8c\u4e09\u56db\u4e94\u516d".split("")[a.getDay()])
}
function $htmlEncode(a) {
    return "string" != typeof a ? "" : a.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/\"/g, "&quot;").replace(/\'/g, "&apos;").replace(/ /g, "&nbsp;")
}

function $addEvent(a, b, c) {
    function d(a, b, d, c) {
        a.__hids = a.__hids || [];
        var e = "h" + window.__Hcounter++;
        a.__hids.push(e);
        window.__allHandlers[e] = {
            type: b,
            handler: d,
            wrapper: c
        }
    }
    function f(a, b) {
        return function () {
            return a.apply(b, arguments)
        }
    }
    if (a && b && c) if (a instanceof Array) for (var g = 0, e = a.length; g < e; g++) $addEvent(a[g], b, c);
    else if (b instanceof Array) for (g = 0, e = b.length; g < e; g++) $addEvent(a, b[g], c);
    else window.__allHandlers = window.__allHandlers || {}, window.__Hcounter = window.__Hcounter || 1, window.addEventListener ? (g = f(c, a), d(a, b, c, g), a.addEventListener(b, g, !1)) : window.attachEvent ? (g = f(c, a), d(a, b, c, g), a.attachEvent("on" + b, g)) : a["on" + b] = c
}
function $empty() {
    return function () {
        return !0
    }
}
function $insertAfter(a, b) {
    var c = b.parentNode;
    $getLast(c) == b ? c.appendChild(a) : c.insertBefore(a, $getNext(b))
}
var $ajax = function (a, b) {
    var c, d = 0,
        f = a.ActiveXObject ?
    function () {
        for (var a in c) c[a](0, 1)
    } : !1;
    return function (g) {
        var e = {
            url: "",
            method: "GET",
            data: null,
            type: "text",
            async: !0,
            cache: !1,
            timeout: 0,
            autoToken: !0,
            username: "",
            password: "",
            beforeSend: $empty(),
            onSuccess: $empty(),
            onError: $empty(),
            onComplete: $empty()
        },
            l;
        for (l in g) e[l] = g[l];
        var n, m, q, k;
        try {
            k = location.href
        } catch (h) {
            k = document.createElement("a"), k.href = "", k = k.href
        }
        g = /^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/.exec(k.toLowerCase()) || [];
        e.isLocal = /^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/.test(g[1]);
        e.method = "string" != typeof e.method || "POST" != e.method.toUpperCase() ? "GET" : "POST";
        e.data = "string" == typeof e.data ? e.data : $makeUrl(e.data);
        "GET" == e.method && e.data && (e.url += (0 > e.url.indexOf("?") ? "?" : "&") + e.data);
        e.autoToken && (e.url = $addToken(e.url, "ajax"));
        e.xhr = $xhrMaker();
        if (null === e.xhr) return !1;
        try {
            e.username ? e.xhr.open(e.method, e.url, e.async, e.username, e.password) : e.xhr.open(e.method, e.url, e.async)
        } catch (r) {
            return e.onError(-2, r), !1
        }
        "POST" == e.method && e.xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        e.cache || (e.xhr.setRequestHeader("If-Modified-Since", "Thu, 1 Jan 1970 00:00:00 GMT"), e.xhr.setRequestHeader("Cache-Control", "no-cache"));
        e.beforeSend(e.xhr);
        e.async && 0 < e.timeout && (e.xhr.timeout === b ? m = setTimeout(function () {
            e.xhr && n && n(0, 1);
            e.onError(0, null, "timeout")
        }, e.timeout) : (e.xhr.timeout = e.timeout, e.xhr.ontimeout = function () {
            e.xhr && n && n(0, 1);
            e.onError(0, null, "timeout")
        }));
        e.xhr.send("POST" == e.method ? e.data : null);
        n = function (a, d) {
            m && (clearTimeout(m), m = b);
            if (n && (d || 4 === e.xhr.readyState)) {
                n = b;
                if (q && (e.xhr.onreadystatechange = $empty(), f)) try {
                    delete c[q]
                } catch (g) { }
                if (d) 4 !== e.xhr.readyState && e.xhr.abort();
                else {
                    var h, l, k;
                    k = {
                        headers: e.xhr.getAllResponseHeaders()
                    };
                    h = e.xhr.status;
                    try {
                        l = e.xhr.statusText
                    } catch (r) {
                        l = ""
                    }
                    try {
                        k.text = e.xhr.responseText
                    } catch (w) {
                        k.text = ""
                    } !h && e.isLocal ? h = k.text ? 200 : 404 : 1223 === h && (h = 204);
                    if (200 <= h && 300 > h) switch (k.text = k.text.replace(/\x3c!--\[if !IE\]>[\w\|]+<!\[endif\]--\x3e/g, ""), e.type) {
                        case "text":
                            e.onSuccess(k.text);
                            break;
                        case "json":
                            var u;
                            try {
                                u = (new Function("return (" + k.text + ")"))()
                            } catch (v) {
                                e.onError(h, v, k.text)
                            }
                            if (u) e.onSuccess(u);
                            break;
                        case "xml":
                            e.onSuccess(e.xhr.responseXML)
                    } else if (0 === h && 0 < e.timeout) e.onError(h, null, "timeout");
                    else e.onError(h, null, l);
                    e.onComplete(h, l, k)
                }
                delete e.xhr
            }
        };
        e.async ? 4 === e.xhr.readyState ? setTimeout(n, 0) : (q = ++d, f && (c || (c = {}, a.attachEvent ? a.attachEvent("onunload", f) : a.onunload = f), c[q] = n), e.xhr.onreadystatechange = n) : n()
    }
}(window, void 0);

function $hasClass(a, b) {
    if (!a || !b) return null;
    for (var c = ("object" == typeof a ? a.className : a).split(" "), d = 0, f = c.length; d < f; d++) if (b == c[d]) return b;
    return null
}

function $setClass(a, b, c) {
    if (a) {
        var d = function (a, b, d) {
            if (a) {
                var c = a.className,
                    f = c ? c.split(" ") : [];
                if ("add" == d) $hasClass(c, b) || (f.push(b), a.className = f.join(" "));
                else if ("remove" == d) {
                    d = [];
                    for (var c = 0, g = f.length; c < g; c++) b != f[c] && " " != f[c] && d.push(f[c]);
                    a.className = d.join(" ")
                }
            }
        };
        if ("string" == typeof a) {
            a = a.split(",");
            for (var f = 0, g = a.length; f < g; f++) a[f] && d($id(a[f]), b, c)
        } else if (a instanceof Array) for (f = 0, g = a.length; f < g; f++) a[f] && d(a[f], b, c);
        else d(a, b, c)
    }
}

function $getPageScrollHeight() {
    var a = document.body,
		b = "BackCompat" == document.compatMode ? a : document.documentElement,
		c = navigator.userAgent.toLowerCase();
    return window.MessageEvent && -1 == c.indexOf("firefox") && -1 == c.indexOf("opera") && -1 == c.indexOf("msie") ? a.scrollTop : b.scrollTop
}

function $getPageScrollWidth() {
    var a = document.body,
		b = "BackCompat" == document.compatMode ? a : document.documentElement,
		c = navigator.userAgent.toLowerCase();
    return window.MessageEvent && -1 == c.indexOf("firefox") && -1 == c.indexOf("opera") ? a.scrollLeft : b.scrollLeft
}

function $loadCss(a, b) {
    if (a) {
        var c;
        if (!window._loadCss || 0 > window._loadCss.indexOf(a)) c = document.createElement("link"), c.setAttribute("type", "text/css"), c.setAttribute("rel", "stylesheet"), c.setAttribute("href", a), c.setAttribute("id", "loadCss" + Math.random()), document.getElementsByTagName("head")[0].appendChild(c), window._loadCss ? window._loadCss += "|" + a : window._loadCss = "|" + a;
        c && "function" == typeof b && (c.onload = b);
        return !0
    }
}

function $addZero(a, b) {
    for (var c = 0, d = b - (a + "").length; c < d; c++) a = "0" + a;
    return a + ""
}
function $getLast(a) {
    return (a = a.lastChild) && 1 != a.nodeType ? $getPrev(a) : a
}
function $getNext(a) {
    do a = a.nextSibling;
    while (a && 1 != a.nodeType);
    return a
}
function $getPrev(a) {
    do a = a.previousSibling;
    while (a && 1 != a.nodeType);
    return a
}

function $addToken(a, b) {
    var c = $getToken();
    if ("" == a || 0 != (0 > a.indexOf("://") ? location.href : a).indexOf("http")) return a;
    if (-1 != a.indexOf("#")) {
        var d = a.match(/\?.+\#/);
        if (d) {
            var f = d[0].split("#"),
				c = [f[0], "&g_tk=", c, "&g_ty=", b, "#", f[1]].join("");
            return a.replace(d[0], c)
        }
        f = a.split("#");
        return [f[0], "?g_tk=", c, "&g_ty=", b, "#", f[1]].join("")
    }
    return "" == c ? a + (-1 != a.indexOf("?") ? "&" : "?") + "g_ty=" + b : a + (-1 != a.indexOf("?") ? "&" : "?") + "g_tk=" + c + "&g_ty=" + b
}

function $getCookie(a) {
    return (a = document.cookie.match(RegExp("(^| )" + a + "(?:=([^;]*))?(;|$)"))) ? a[2] ? unescape(a[2]) : "" : null
}
function $setCookie(a, b, c, d, f, g) {
    var e = new Date;
    c = c || null;
    d = d || "/";
    f = f || null;
    g = g || !1;
    c ? e.setMinutes(e.getMinutes() + parseInt(c)) : "";
    document.cookie = a + "=" + escape(b) + (c ? ";expires=" + e.toGMTString() : "") + (d ? ";path=" + d : "") + (f ? ";domain=" + f : "") + (g ? ";secure" : "")
}
function $getToken() {
    var a = $getCookie("skey");
    return null == a ? "" : $time33(a)
}

function $time33(a) {
    for (var b = 0, c = a.length, d = 5381; b < c; ++b) d += (d << 5) + a.charAt(b).charCodeAt();
    return d & 2147483647
}
function $xhrMaker() {
    var a;
    try {
        a = new XMLHttpRequest
    } catch (b) {
        try {
            a = new ActiveXObject("Msxml2.XMLHTTP")
        } catch (c) {
            try {
                a = new ActiveXObject("Microsoft.XMLHTTP")
            } catch (d) {
                a = null
            }
        }
    }
    return a
}
function $report(a) {
    $loadUrl({
        url: a + (-1 == a.indexOf("?") ? "?" : "&") + "cloud=true&" + Math.random(),
        element: "img"
    })
}

function $loadUrl(a) {
    function b() {
        c && (c.onload = c.onreadystatechange = c.onerror = null, c.parentNode && c.parentNode.removeChild(c), c = null)
    }
    a.element = a.element || "script";
    var c = document.createElement(a.element);
    c.charset = a.charset || "utf-8";
    !0 == a.noCallback && c.setAttribute("noCallback", "true");
    c.onload = c.onreadystatechange = function () {
        (/loaded|complete/i.test(this.readyState) || -1 == navigator.userAgent.toLowerCase().indexOf("msie")) && b()
    };
    c.onerror = function () {
        b()
    };
    c.src = a.url;
    document.getElementsByTagName("head")[0].appendChild(c)
}

function $returnCode(a) {
    var b = {
        url: "",
        action: "",
        sTime: "",
        eTime: "",
        retCode: "",
        errCode: "",
        frequence: 1,
        refer: location.href,
        uin: "",
        domain: "paipai.com",
        from: 1,
        report: function (a, b) {
            this.isReport = !0;
            this.eTime = new Date;
            this.retCode = a ? 1 : 2;
            this.errCode = isNaN(parseInt(b)) ? "0" : parseInt(b);
            if (this.action) {
                this.url = "http://retcode.paipai.com/" + this.action;
                var c = $getCookie("retcode");
                a = "";
                for (var e = [], c = c ? c.split("|") : [], l = 0; l < c.length; l++) c[l].split(",")[0] == this.action ? a = c[l].split(",") : e.push(c[l]);
                $setCookie("retcode", e.join("|"), 60, "/", this.domain);
                if (!a) return;
                this.sTime = new Date(parseInt(a[1]))
            }
            this.url && (c = this.url.replace(/^.*\/\//, "").replace(/\/.*/, ""), e = this.eTime - this.sTime, l = encodeURIComponent(this.formatUrl ? this.url.match(/^[\w|/|.|:|-]*/)[0] : this.url), (this.reportUrl = "http://c.isdspeed.qq.com/code.cgi?domain=" + c + "&cgi=" + l + "&type=" + this.retCode + "&code=" + this.errCode + "&time=" + e + "&rate=" + this.frequence + (this.uin ? "&uin=" + this.uin : "")) && Math.random() < 1 / this.frequence && this.url && $report(this.reportUrl))
        },
        isReport: !1,
        timeout: 3E3,
        timeoutCode: 444,
        formatUrl: !0,
        reg: function () {
            this.sTime = new Date;
            if (this.action) {
                for (var a = $getCookie("retcode"), b = [], a = a ? a.split("|") : [], c = 0; c < a.length; c++) a[c].split(",")[0] != this.action && b.push(a[c]);
                b.push(this.action + "," + this.sTime.getTime());
                $setCookie("retcode", b.join("|"), 60, "/", this.domain)
            }
        }
    },
		c;
    for (c in a) b[c] = a[c];
    b.url && (b.sTime = new Date);
    b.timeout && setTimeout(function () {
        b.isReport || b.report(!0, b.timeoutCode)
    }, b.timeout);
    return b
}

function $makeUrl(a) {
    var b = [],
		c;
    for (c in a) b.push(c + "=" + a[c]);
    return b.join("&")
}

function $initDragItem(a) {
    var b = {
        barDom: "",
        targetDom: ""
    },
		c;
    for (c in a) b[c] = a[c];
    var d = arguments.callee;
    d.option ? "" : d.option = {};
    b.barDom.style.cursor = "move";
    b.targetDom.style.position = "absolute";
    b.barDom.onmousedown = function (a) {
        a = window.event || a;
        d.option.barDom = this;
        d.option.targetDom = b.targetDom;
        var c = [parseInt(b.targetDom.style.left) ? parseInt(b.targetDom.style.left) : 0, parseInt(b.targetDom.style.top) ? parseInt(b.targetDom.style.top) : 0];
        d.option.diffPostion = [$getMousePosition({
            evt: a
        })[0] - c[0], $getMousePosition({
            evt: a
        })[1] - c[1]];
        document.onselectstart = function () {
            return !1
        };
        window.onblur = window.onfocus = function () {
            document.onmouseup()
        };
        return !1
    };
    b.targetDom.onmouseup = document.onmouseup = function () {
        d.option.barDom && (d.option = {}, document.onselectstart = window.onblur = window.onfocus = null)
    };
    b.targetDom.onmousemove = document.onmousemove = function (a) {
        try {
            a = window.event || a, d.option.barDom && d.option.targetDom && (d.option.targetDom.style.left = $getMousePosition({
                evt: a
            })[0] - d.option.diffPostion[0] + "px", d.option.targetDom.style.top = $getMousePosition({
                evt: a
            })[1] - d.option.diffPostion[1] + "px")
        } catch (b) { }
    }
}
function $getMousePosition(a) {
    a = window.event ? window.event : a;
    a.evt && (a = a.evt);
    var b = [];
    "undefined" != typeof a.pageX ? b = [a.pageX, a.pageY] : "undefined" != typeof a.clientX && (b = [a.clientX + $getScrollPosition()[0], a.clientY + $getScrollPosition()[1]]);
    return b
}

function $getScrollPosition() {
    var a = document.documentElement.scrollLeft || document.body.scrollLeft || window.pageXOffset,
		b = document.documentElement.scrollTop || document.body.scrollTop || window.pageYOffset;
    return [a ? a : 0, b ? b : 0]
}
window.define && define(function (a, b) {
    b.legos = {
        $id: window.$id,
        $displayShow: window.$displayShow,
        $delClass: window.$delClass,
        $addClass: window.$addClass,
        $calendars: window.$calendars,
        $stopBubble: window.$stopBubble,
        $fireEvent: window.$fireEvent,
        $attr: window.$attr,
        $formatDate: window.$formatDate,
        $htmlEncode: window.$htmlEncode,
        $addEvent: window.$addEvent,
        $empty: window.$empty,
        $insertAfter: window.$insertAfter,
        $displayHide: window.$displayHide,
        $ajax: window.$ajax,
        $hasClass: window.$hasClass,
        $initDragItem: window.$initDragItem
    }
});
function $display(a, b) {
    if (a) if (b = b || "", "string" == typeof a) for (var c = a.split(","), d = 0, f = c.length; d < f; d++) {
        var g = $id(c[d]);
        g && (g.style.display = b)
    } else if (a.nodeType) a.style.display = b;
    else if (a.length) for (d = 0, f = a.length; d < f; d++) $display(a[d], b);
    else a.style.display = b
}
function $displayHide(a) {
    $display(a, "none")
}
function $displayShow(a) {
    $display(a, "")
}
function $delClass(a, b) {
    $setClass(a, b, "remove")
}

function $addClass(a, b) {
    $setClass(a, b, "add")
}
function $getTarget(a, b, c) {
    a = window.event || a;
    a = a.srcElement || a.target;
    if (b && c && a.nodeName.toLowerCase() != c) for (; a = a.parentNode;) {
        if (a == b || a == document.body || a == document) return null;
        if (a.nodeName.toLowerCase() == c) break
    }
    return a
}

function $insertHTML(a, b, c) {
    if (!a) return !1;
    try {
        if (a.insertAdjacentHTML) a.insertAdjacentHTML(b, c);
        else {
            var d = a.ownerDocument.createRange(),
                f = 0 == b.indexOf("before"),
                g = -1 != b.indexOf("Begin");
            if (f == g) d[f ? "setStartBefore" : "setStartAfter"](a), a.parentNode.insertBefore(d.createContextualFragment(c), g ? a : a.nextSibling);
            else {
                var e = a[f ? "lastChild" : "firstChild"];
                e ? (d[f ? "setStartAfter" : "setStartBefore"](e), a[f ? "appendChild" : "insertBefore"](d.createContextualFragment(c), e)) : a.innerHTML = c
            }
        }
        return !0
    } catch (l) {
        return !1
    }
}

function $id(a) {
    return "string" == typeof a ? document.getElementById(a) : a
}
function $initDragItem(a) {
    var b = {
        barDom: "",
        targetDom: ""
    }, c;
    for (c in a) b[c] = a[c];
    var d = arguments.callee;
    d.option ? "" : d.option = {};
    b.barDom.style.cursor = "move";
    b.targetDom.style.position = "absolute";
    b.barDom.onmousedown = function (a) {
        a = window.event || a;
        d.option.barDom = this;
        d.option.targetDom = b.targetDom;
        var c = [parseInt(b.targetDom.style.left) ? parseInt(b.targetDom.style.left) : 0, parseInt(b.targetDom.style.top) ? parseInt(b.targetDom.style.top) : 0];
        d.option.diffPostion = [$getMousePosition({
            evt: a
        })[0] - c[0], $getMousePosition({
            evt: a
        })[1] - c[1]];
        document.onselectstart = function () {
            return !1
        };
        window.onblur = window.onfocus = function () {
            document.onmouseup()
        };
        return !1
    };
    b.targetDom.onmouseup = document.onmouseup = function () {
        d.option.barDom && (d.option = {}, document.onselectstart = window.onblur = window.onfocus = null)
    };
    b.targetDom.onmousemove = document.onmousemove = function (a) {
        try {
            a = window.event || a, d.option.barDom && d.option.targetDom && (d.option.targetDom.style.left = $getMousePosition({
                evt: a
            })[0] - d.option.diffPostion[0] + "px", d.option.targetDom.style.top = $getMousePosition({
                evt: a
            })[1] - d.option.diffPostion[1] + "px")
        } catch (b) { }
    }
}
var DialogBox = (function () {
	return {
		/**
		 * 弹出浮层
		 * @param dom document 浮层对象
		 * @param shadeDom document 遮罩层对�?
		 */
		pop : function(dom, shadeDom, showFast) {
			var n = 0,
				_showDom = function() {
					if(dom.style.position != "absolute") {
						dom.style.position = "fixed";
					}
					n = 0;
					dom.style.top = "0";
					dom.style.left = "0";
					dom.style.opacity = 0;
					dom.style.display = "";
					dom.style.filter = "alpha(opacity=0)";
					var _doc = document,
						_pDoc = parent.document,
						_scrollTop = 0,
						_bodyHeight = _doc.documentElement.clientHeight<_doc.body.clientHeight?_doc.documentElement.clientHeight:_doc.body.clientHeight;
					var _t = 0;
					if(dom.style.position != "fixed") {
						_scrollTop = Utils.getScrollTop();
					}
					if(window == parent.window) {
						if(dom.style.position != "fixed") {
							_scrollTop = Utils.getScrollTop(true);
						}
						_t = _scrollTop + (_bodyHeight - dom.clientHeight)/2;
						if(_t < _scrollTop) {	// 如果该值小�?0，则设置�?10，否者会顶到页面上端�?
							_t = _scrollTop;
						}
					}else {
						var diff = 95;
						var _scorllHeight = _scrollTop > diff ? _scrollTop - diff : 0;
						var browserHeight = _pDoc.documentElement.clientHeight<_pDoc.body.clientHeight?_pDoc.documentElement.clientHeight:_pDoc.body.clientHeight;
						_t = _scorllHeight + (browserHeight>dom.clientHeight?browserHeight-dom.clientHeight:0)/2;
						if(_t == _scorllHeight) {	// 如果该值小�?0，则设置�?10，否者会顶到页面上端�?
							_t += 10;
						}
						// 如果弹出框的高度大于页面高度，则需要重新设置一下页面高度（以弹出框的高度为准）
						if(_bodyHeight < dom.clientHeight) {
							Utils.setPageHeight(dom.clientHeight+100);
						}
					}
					dom.style.top = _t + "px";
					dom.style.left = ((document.body.clientWidth-dom.clientWidth)/2) + "px";
					if(showFast) {
						dom.style.opacity = 1;
						dom.style.filter = "alpha(opacity=100)";
					}else {
						var setOpcity = function() {
							n += 50;
							if(n<=200){
								dom.style.opacity=n/200;
								dom.style.filter = "alpha(opacity="+(n/200*100)+")";
								setTimeout(arguments.callee, 40);
							}
						};
						setTimeout(function(){
							setOpcity();
						},40);
					}
				};
			// 设定弹出框的弹出高度
			if(shadeDom == "default") {	// 如果传的是default，则用默认弹出层
				shadeDom = $id("cover_popup_div_default");
				if(!shadeDom) {
					var	_coverDiv = document.createElement("DIV");
					_coverDiv.className = "ui_mask";
					_coverDiv.id = "cover_popup_div_default";
					_coverDiv.style.zIndex = "1000";
					document.body.appendChild(_coverDiv);
					shadeDom = _coverDiv;
					if(!dom.style.zIndex || parseInt(dom.style.zIndex) <= 1000) {
						dom.style.zIndex = "1001";
					}
				}
			}
			if(shadeDom) {	// 如果有阴影，则先展示阴影
				//shadeDom.style.display = "";
				//shadeDom.style.opacity=1;
				// 如果浮层比内容高，则把内容展示在浮层上面
				var shadeDomZindex = parseInt(shadeDom.style.zIndex);
				var domZindex = parseInt(dom.style.zIndex || 0);
				if(domZindex <= shadeDomZindex) {
					dom.style.zIndex = shadeDomZindex + 1;
				}
			}
			_showDom();
		},
		popup : function(boxDom, shadeDom, titleBox, closeBtn, onClose, showFast) {
			// 检查是否需要添加遮罩层
			if(shadeDom == "default") {
				shadeDom = $id("cover_popup_div_default");
				if(!shadeDom) {
					shadeDom = document.createElement("DIV");
					shadeDom.className = "ui_mask";
					shadeDom.id = "cover_popup_div_default";
					shadeDom.style.zIndex = "1000";
					document.body.appendChild(shadeDom);
				}
			}
			// 如果要弹出的层z-index没有1001则设置到1001
			if(!boxDom.style.zIndex) {
				boxDom.style.zIndex = "1001";
			}
			if(closeBtn) {
				var _close = function() {
					if(shadeDom) {
						$displayHide(shadeDom);
					}else {
						$displayHide("cover_popup_div_default");
					}
					$displayHide(boxDom);
					if(onClose) {
						onClose();
					}
				};
				if(closeBtn instanceof Array) {
					for(var i=0,len=closeBtn.length; i<len; i++) {
						if(!closeBtn[i].onclick) {
							closeBtn[i].onclick = _close;
						}
					}
				}else if(!closeBtn.onclick) {
					closeBtn.onclick = _close;
				}
			}
			if(titleBox && !boxDom.onmousemove) {	// 制造移动效�?
				$initDragItem({
					barDom : titleBox,
					targetDom : boxDom
				});
			}
			DialogBox.pop(boxDom, shadeDom, showFast);
		},
		close : function(domArr) {
			if(!(domArr instanceof Array)) {
				domArr = [domArr];
			}
			for(var i in domArr) {
				if(domArr[i] == "default") {	// 如果传入的是默认遮罩层，这做相应处理
					$displayHide($id('cover_popup_div_default'));
				}else {
					$displayHide(domArr[i]);
				}
			}
		},
		alert : function(option) {
			var opt = {
					content : "",
					buttonValue : "确定",
					onConfirm : null,
					onClose : null,
					type : "error",	// "correct", "error", "question", "normal"
					cover : true	//是否需要遮罩层
			};
			if(typeof option == "string") {		// 如果只传一个string过来，则用默认样式展�?
				opt.content = option;
			}else {
				for(var i in option) {
					opt[i] = option[i];
				}
			}
			var param = {};
			param.content = opt.content;
			param.type = opt.type;
			param.cancelValue = null;	// 把取消按钮设置为�?
			param.onSubmit = function() {
				if(opt.onConfirm) {
					opt.onConfirm();
				}
				DialogBox.closeAlert();
			};
			param.onClose = function() {
				if(opt.onClose) {
					opt.onClose();
				}
				DialogBox.closeAlert();
			};
			param.id = "alert";
			DialogBox.showConfirm(param);
		},
		closeAlert : function() {
			DialogBox.close([$id("layer_popup_div_alert"), $id("cover_popup_div_alert")]);
		},
		confirm : function(option) {
			DialogBox.showConfirm(option);
		},
		showConfirm : function(option) {
			var opt = {
					content : "",
					confirmValue : "确定",
					cancelValue : "取消",
					onSubmit : null,
					onClose : null,
					type : "question",	// "correct", "error", "question", "normal"
					id : "default",	// 用来区分各个浮层的id
					cover : true	//是否需要遮罩层
			};
			for(var i in option) {
				opt[i] = option[i];
			}
			if(!opt.id) {
				opt.id = "default";
			}
			var _getTypeClass = function(iconDom) {
				switch(opt.type) {
					case "correct":
						iconDom.className = "icon icon-confirm";
						break;
					case "error":
						iconDom.className = "icon icon-attention";
						break;
					case "question":
						iconDom.className = "icon icon-warn";
						break;
					default :
						iconDom.className = "icon icon-confirm";
						break;
				}
			};
			if(!$id("layer_popup_div_"+opt.id)) {
				var _html =
						'<div id="layer_popup_title_'+opt.id+'" class="ui-dialog__hd">'+
							'<i id="layer_popup_close_'+opt.id+'" title="关闭" class="ui-dialog__x"></i></a>'+
						'</div>'+
						'<div class="ui-dialog__bd ui-dialog__bd_icon qb_clearfix">'+
							'<div class="qb_fl"><i id="layer_popup_icon_'+opt.id+'" class="icon icon-attention"></i></div>'+
							'<div id="layer_popup_content_'+opt.id+'" class="bfc"></div>'+
						'</div>'+
						'<div class="ui-dialog__ft">'+
							'<a id="layer_popup_confirm_'+opt.id+'" class="ui_btn ui_btn_strong">确定</a>'+
							'<a id="layer_popup_cancel_'+opt.id+'" class="ui_btn">取消</a>'+
						'</div>';
				var _layerDiv = document.createElement("DIV");
				_layerDiv.className = "ui-dialog";
				_layerDiv.style.display = "none";
				_layerDiv.innerHTML = _html;
				_layerDiv.id = "layer_popup_div_"+opt.id;
				if(opt.id == "alert") {
					_layerDiv.style.width = "320px";
					_layerDiv.style.zIndex = "5001";
				}else {
					_layerDiv.style.zIndex = "1001";
				}
				document.body.appendChild(_layerDiv);
				if(opt.cover) {
					if(!$id("cover_popup_div_"+opt.id)) {
						var	_coverDiv = document.createElement("DIV");
						_coverDiv.className = "cover";
						_coverDiv.id = "cover_popup_div_"+opt.id;
						if(opt.id == "alert") {
							_coverDiv.style.zIndex = "5000";
						}else {
							_coverDiv.style.zIndex = "1000";
						}
						document.body.appendChild(_coverDiv);
					}
				}
				var mainDom = $id("layer_popup_div_"+opt.id),
					shadeDom = $id("cover_popup_div_"+opt.id),
					closeDom = $id("layer_popup_close_"+opt.id),
					confirmDom = $id("layer_popup_confirm_"+opt.id),
					cancelDom = $id("layer_popup_cancel_"+opt.id),
					iconDom = $id("layer_popup_icon_"+opt.id);
				$id("layer_popup_content_"+opt.id).innerHTML = $htmlEncode(opt.content);
				confirmDom.innerHTML = Utils.encodeHtml(opt.confirmValue);
				if(opt.cancelValue) {	// 如果取消按钮传的是null，则隐藏起来
					cancelDom.innerHTML = Utils.encodeHtml(opt.cancelValue);
				}else{
					$displayHide(cancelDom);
				}
				_getTypeClass(iconDom);
				if(!closeDom.onclick) {
					$initDragItem({
						barDom : closeDom.parentNode,
						targetDom : mainDom
					});
					closeDom.onclick = cancelDom.onclick = function() {
						DialogBox.close([$id("layer_popup_div_"+opt.id), $id("cover_popup_div_"+opt.id)]);
						if(opt.onClose) {
							opt.onClose();
						}
					};
				}
				confirmDom.onclick = function() {
					DialogBox.close([$id("layer_popup_div_"+opt.id), $id("cover_popup_div_"+opt.id)]);
					if(opt.onSubmit) {
						opt.onSubmit();
					}
				};
				DialogBox.pop(mainDom, shadeDom);
			}else {
				if(!opt.cover && $id("cover_popup_div_"+opt.id)) {
					document.body.removeChild($id("cover_popup_div_"+opt.id));
				}
				var confirmDom = $id("layer_popup_confirm_"+opt.id),
					cancelDom = $id("layer_popup_cancel_"+opt.id);
				$id("layer_popup_content_"+opt.id).innerHTML = $htmlEncode(opt.content);
				confirmDom.innerHTML = Utils.encodeHtml(opt.confirmValue);
				cancelDom.innerHTML = Utils.encodeHtml(opt.cancelValue);
				if(opt.type) {	// 如果给定了icon的样式，则把icon展示出来
					_getTypeClass($id("layer_popup_icon_"+opt.id));
				}
				$id("layer_popup_close_"+opt.id).onclick = cancelDom.onclick = function() {
					DialogBox.close([$id("layer_popup_div_"+opt.id), $id("cover_popup_div_"+opt.id)]);
					if(opt.onClose) {
						opt.onClose();
					}
				};
				confirmDom.onclick = function() {
					DialogBox.close([$id("layer_popup_div_"+opt.id), $id("cover_popup_div_"+opt.id)]);
					if(opt.onSubmit) {
						opt.onSubmit();
					}
				};
				DialogBox.pop($id("layer_popup_div_"+opt.id), $id("cover_popup_div_"+opt.id));
			}
		},
		closeConfirm : function() {
			DialogBox.close([$id("layer_popup_div_default"), $id("cover_popup_div_default")]);
		},
		/**
		 * 提示内容小纸�?
		 * @param target	document	小纸条弹出参考对�?
		 * @param content	string	要显示的内容
		 * @param dir	string	方向�? up（箭头向上）, down（箭头向下）, fixed（在页面中间显示，target参考对象无效）, top(页面顶部)
		 * @returns
		 */
		tips : function(target, content, dir, notFadeaway, width) {
			var tips = $id("tips_float_div_box");
			if(!dir) {
				dir = "up";
			}
			var _className = "ui-tip";
			if(dir == "up") {
				_className = "ui-tip ui-tip_up";
			}else if(dir == "down") {
				_className = "ui-tip ui-tip_down";
			}
			if(!tips) {
				var div = document.createElement("DIV");
				div.id = "tips_float_div_box";
				div.style.zIndex = "10000";	// 始终保持在最上方
				div.style.position = "absolute";
				div.style.display = "none";
				div.className = _className;
				div.innerHTML = $htmlEncode(content);
				document.body.appendChild(div);
				tips = div;
			}else {
				tips.style.zIndex = "10000";	// 始终保持在最上方
				tips.innerHTML = $htmlEncode(content);
				tips.className = _className;
			}
			var top = 0,
				left = 0;
			if(dir == "fixed" || dir=="middle") {
				DialogBox.pop(tips);
			}else if(dir == "top") {
				tips.style.display = "";
				tips.style.top = (Utils.getScrollTop(true) + 10) + "px";
				tips.style.left = (document.body.clientWidth-tips.offsetWidth)/2 + "px";
			}else {
				tips.style.display = "";
				left = Utils.getScrollLeft(true) + target.getBoundingClientRect().left;
				if(dir == "up") {
					top = Utils.getScrollTop(true) + target.getBoundingClientRect().bottom + 10;
				}else if(dir == "down") {
					top = Utils.getScrollTop(true) + target.getBoundingClientRect().top - tips.offsetHeight - 10;
				}
				left += (target.offsetWidth/2 - tips.offsetWidth/2);
				tips.style.top = top + "px";
				tips.style.left = left + "px";
			}
			tips.style.opacity = 1;
			tips.style.filter = "alpha(opacity=100)";
			$displayShow(tips);
			if(DialogBox.tipsTimeout) {
				clearTimeout(DialogBox.tipsTimeout);
			}
			if(!notFadeaway) {	// 如果设置不消失，则不进行消失的设�?
				var n = 0;
				DialogBox.tipsTimeout = setTimeout(function () {
					n = 0;
					DialogBox.tipsTimeout = setTimeout(function(){
						n += 50;
						if(n<=500) {
							tips.style.opacity=(1-n/500);
							tips.style.filter = "alpha(opacity="+((1-n/500)*100)+")";
							DialogBox.tipsTimeout = setTimeout(arguments.callee, 100);
						}else if(n >= 500) {
							tips.style.zIndex = "-100";	// 始终保持在最下方
							$displayHide(tips);
						}
					}, 100);
				}, 2000);
			}
		},

		/**
		 * 提示内容小纸条，初始透明�?0.8
		 * @param target	document	小纸条弹出参考对�?
		 * @param content	string	要显示的内容
		 * @param dir	string	方向�? up（箭头向上）, down（箭头向下）, fixed（在页面中间显示，target参考对象无效）, top(页面顶部)
		 * @returns
		 */
		transparentTips : function(target, content, dir, notFadeaway, width) {
			var tips = $id("tips_float_div_box");
			if(!dir) {
				dir = "up";
			}
			var _className = "ui-tip";
			if(dir == "up") {
				_className = "ui-tip ui-tip_up";
			}else if(dir == "down") {
				_className = "ui-tip ui-tip_down";
			}
			if(!tips) {
				var div = document.createElement("DIV");
				div.id = "tips_float_div_box";
				div.style.zIndex = "10000";	// 始终保持在最上方
				div.style.position = "absolute";
				div.style.display = "none";
				div.className = _className;
				div.innerHTML = $htmlEncode(content);
				document.body.appendChild(div);
				tips = div;
			}else {
				tips.style.zIndex = "10000";	// 始终保持在最上方
				tips.innerHTML = $htmlEncode(content);
				tips.className = _className;
			}
			var top = 0,
				left = 0;
			if(dir == "fixed" || dir=="middle") {
				DialogBox.pop(tips,null,true);
			}else if(dir == "top") {
				tips.style.display = "";
				tips.style.top = (Utils.getScrollTop(true) + 10) + "px";
				tips.style.left = (document.body.clientWidth-tips.offsetWidth)/2 + "px";
			}else {
				tips.style.display = "";
				left = Utils.getScrollLeft(true) + target.getBoundingClientRect().left;
				if(dir == "up") {
					top = Utils.getScrollTop(true) + target.getBoundingClientRect().bottom + 10;
				}else if(dir == "down") {
					top = Utils.getScrollTop(true) + target.getBoundingClientRect().top - tips.offsetHeight - 10;
				}
				left += (target.offsetWidth/2 - tips.offsetWidth/2);
				tips.style.top = top + "px";
				tips.style.left = left + "px";
			}
			tips.style.opacity = 0.8;
			tips.style.filter = "alpha(opacity=80)";
			$displayShow(tips);
			if(DialogBox.tipsTimeout) {
				clearTimeout(DialogBox.tipsTimeout);
			}
			if(!notFadeaway) {	// 如果设置不消失，则不进行消失的设�?
				var n = 50;
				DialogBox.tipsTimeout = setTimeout(function () {
					n = 50;
					DialogBox.tipsTimeout = setTimeout(function(){
						n += 50;
						if(n<=500) {
							tips.style.opacity=(1-n/500);
							tips.style.filter = "alpha(opacity="+((1-n/500)*100)+")";
							DialogBox.tipsTimeout = setTimeout(arguments.callee, 100);
						}else if(n >= 500) {
							tips.style.zIndex = "-100";	// 始终保持在最下方
							$displayHide(tips);
						}
					}, 100);
				}, 2000);
			}
		},

		closeTips : function() {
			var tips = $id("tips_float_div_box");
			if(tips) {
				var	n = 0;
				if(DialogBox.tipsTimeout) {
					clearTimeout(DialogBox.tipsTimeout);
				}
				DialogBox.tipsTimeout =	setTimeout(function(){
					n += 50;
					if(n<=500) {
						tips.style.opacity=(1-n/500);
						tips.style.filter = "alpha(opacity="+((1-n/500)*100)+")";
						DialogBox.tipsTimeout = setTimeout(arguments.callee, 100);
					}else if(n >= 500) {
						tips.style.zIndex = "-100";	// 始终保持在最下方
					}
				}, 100);
			}
		},
		showSendPreview : function(sendFn) {
			if(!$id("preview_by_weixin_box")) {
				var divHtml='<div class="ui-dialog" id="preview_by_weixin_box" style="display:none;width=320px">'+
						'<div class="js_drag ui-dialog__hd"><span class="js_poptitle">发送预�?</span><i class="js_close ui-dialog__x"></i></div>'+
						'<div class="js_content ui-dialog__bd">'+
						'<form id="preview_by_weixin_form" action="#">'+
						'<input id="preview_by_weixin_input" class="txt_short" type="text" placeholder="手机�?/QQ�?"/>'+
						'<input id="preview_by_weixin_submit" type="submit" style="display:none;" />'+
						'</form></div>'+
				'<div class="ui-dialog__ft">'+
				'<a id="preview_by_weixin_confirm" class="js_submit ui_btn ui_btn_strong">发�?</a>'+
				'<a id="preview_by_weixin_cancel" class="js_cancel ui_btn">关闭</a>'+
				'</div>'+'</div>';
				var div = $(divHtml);
				$('body').append(div);

				var pDom = $id("preview_by_weixin_input");
				$id("preview_by_weixin_confirm").onclick=function(){
					$id("preview_by_weixin_submit").click();
				};
				$id("preview_by_weixin_form").onsubmit = function() {
					var input = $id("preview_by_weixin_input");
					if(!input.value) {
						input.focus();
					}else {
						if(localStorage) {
							localStorage.setItem('preview_receiver', input.value);
						}
						ajax({
							url : '/user/get_openid_by_qqormobile.json?qqOrmobileNo='+pDom.value,
							loadingDom : $id("preview_by_weixin_confirm"),
							onSuccess : function(data) {
								if(data.errorCode == 0 && data.data.openId) {
									sendFn(data.data);
								}else {
									$id("preview_by_weixin_input").blur();
									DialogBox.alert(data.msg);
								}
							}
						});
					}
					return false;
				};
				$id("preview_by_weixin_cancel").onclick = function() {
					DialogBox.close([$id("preview_by_weixin_box"), "default"]);
					$displayHide($id("commit_loading"));
					$displayShow($id("preview_by_weixin_confirm"));
				};
				var popBox=div;
				DialogBox.popup(popBox[0], 'default', popBox.find('.js_drag')[0], popBox.find('.js_close')[0],function() {
					$displayHide($id("commit_loading"));
					$displayShow($id("preview_by_weixin_confirm"));
				});
			}else {
				DialogBox.pop($id("preview_by_weixin_box"), "default");
			}
			if(localStorage) {
				var prer = localStorage.getItem('preview_receiver');
				if(prer) {
					$id('preview_by_weixin_input').value = prer;
				}
			}
			setTimeout(function() {
				$id("preview_by_weixin_input").focus();
			}, 500);
		},
		showUploadImg : function(onClose) {
			if(!$id("upload_img_box")) {
				var html = '<div id="upload_img_title" class="hd">'+
						'<h3>本地上传</h3>'+
						'<a id="upload_img_close" class="close" title="关闭" href="javascript:;"><i class="close_layer"></i></a>'+
					'</div>'+
					'<div id="upload_img_main" class="bd"></div>';
				Utils.loadJsFile("/editor/dialogs/tangram.js");
				var div = document.createElement("DIV");
				div.id = "upload_img_box";
				div.className = "layer";
				div.style.width = "650px";
				div.style.height = "380px";
				div.style.overflow = "hidden";
				div.innerHTML = html;
				var body = document.body;
				body.appendChild(div);
				var iframe = document.createElement("IFRAME");
				iframe.id = "edui60_iframe";
				iframe.className = "%%-iframe";
				iframe.height = "100%";
				iframe.width = "100%";
				iframe.frameborder = "0";
				iframe.src = "/editor/dialogs/image/image.html#norich";
				$id("upload_img_main").appendChild(iframe);
				DialogBox.popup($id("upload_img_box"), "default", null, $id('upload_img_close'), onClose);
			}else {
				DialogBox.pop($id("upload_img_box"), "default");
			}
		}
	};
})();

if (window.define) {
	define(function(require, exports) {
	  var legos=require('legos');
	  exports.dialogBox=DialogBox;
	});
}