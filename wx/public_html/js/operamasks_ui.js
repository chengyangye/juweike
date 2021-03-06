(function(a, d) {
    a.om = a.om || {};
    if (a.om.version) {
        return
    }
    a.extend(a.om, {
        version: "2.0",
        keyCode: {
            TAB: 9,
            ENTER: 13,
            ESCAPE: 27,
            SPACE: 32,
            LEFT: 37,
            UP: 38,
            RIGHT: 39,
            DOWN: 40
        },
        lang: {
            _get: function(g, f, e) {
                return g[e] ? g[e] : a.om.lang[f][e]
            }
        }
    });
    a.fn.extend({
        propAttr: a.fn.prop || a.fn.attr,
        _oldFocus: a.fn.focus,
        focus: function(e, f) {
            return typeof e === "number" ? this.each(function() {
                var g = this;
                setTimeout(function() {
                    a(g).focus();
                    if (f) {
                        f.call(g)
                    }
                },
                e)
            }) : this._oldFocus.apply(this, arguments)
        },
        scrollParent: function() {
            var e;
            if ((a.browser.msie && (/(static|relative)/).test(this.css("position"))) || (/absolute/).test(this.css("position"))) {
                e = this.parents().filter(function() {
                    return (/(relative|absolute|fixed)/).test(a.curCSS(this, "position", 1)) && (/(auto|scroll)/).test(a.curCSS(this, "overflow", 1) + a.curCSS(this, "overflow-y", 1) + a.curCSS(this, "overflow-x", 1))
                }).eq(0)
            } else {
                e = this.parents().filter(function() {
                    return (/(auto|scroll)/).test(a.curCSS(this, "overflow", 1) + a.curCSS(this, "overflow-y", 1) + a.curCSS(this, "overflow-x", 1))
                }).eq(0)
            }
            return (/fixed/).test(this.css("position")) || !e.length ? a(document) : e
        },
        zIndex: function(h) {
            if (h !== d) {
                return this.css("zIndex", h)
            }
            if (this.length) {
                var f = a(this[0]),
                e,
                g;
                while (f.length && f[0] !== document) {
                    e = f.css("position");
                    if (e === "absolute" || e === "relative" || e === "fixed") {
                        g = parseInt(f.css("zIndex"), 10);
                        if (!isNaN(g) && g !== 0) {
                            return g
                        }
                    }
                    f = f.parent()
                }
            }
            return 0
        },
        disableSelection: function() {
            return this.bind((a.support.selectstart ? "selectstart": "mousedown") + ".om-disableSelection",
            function(e) {
                e.preventDefault()
            })
        },
        enableSelection: function() {
            return this.unbind(".om-disableSelection")
        }
    });
    a.each(["Width", "Height"],
    function(g, e) {
        var f = e === "Width" ? ["Left", "Right"] : ["Top", "Bottom"],
        h = e.toLowerCase(),
        k = {
            innerWidth: a.fn.innerWidth,
            innerHeight: a.fn.innerHeight,
            outerWidth: a.fn.outerWidth,
            outerHeight: a.fn.outerHeight
        };
        function j(m, l, i, n) {
            a.each(f,
            function() {
                l -= parseFloat(a.curCSS(m, "padding" + this, true)) || 0;
                if (i) {
                    l -= parseFloat(a.curCSS(m, "border" + this + "Width", true)) || 0
                }
                if (n) {
                    l -= parseFloat(a.curCSS(m, "margin" + this, true)) || 0
                }
            });
            return l
        }
        a.fn["inner" + e] = function(i) {
            if (i === d) {
                return k["inner" + e].call(this)
            }
            return this.each(function() {
                a(this).css(h, j(this, i) + "px")
            })
        };
        a.fn["outer" + e] = function(i, l) {
            if (typeof i !== "number") {
                return k["outer" + e].call(this, i)
            }
            return this.each(function() {
                a(this).css(h, j(this, i, true, l) + "px")
            })
        }
    });
    function c(g, e) {
        var j = g.nodeName.toLowerCase();
        if ("area" === j) {
            var i = g.parentNode,
            h = i.name,
            f;
            if (!g.href || !h || i.nodeName.toLowerCase() !== "map") {
                return false
            }
            f = a("img[usemap=#" + h + "]")[0];
            return !! f && b(f)
        }
        return (/input|select|textarea|button|object/.test(j) ? !g.disabled: "a" == j ? g.href || e: e) && b(g)
    }
    function b(e) {
        return ! a(e).parents().andSelf().filter(function() {
            return a.curCSS(this, "visibility") === "hidden" || a.expr.filters.hidden(this)
        }).length
    }
    a.extend(a.expr[":"], {
        data: function(g, f, e) {
            return !! a.data(g, e[3])
        },
        focusable: function(e) {
            return c(e, !isNaN(a.attr(e, "tabindex")))
        },
        tabbable: function(g) {
            var e = a.attr(g, "tabindex"),
            f = isNaN(e);
            return (f || e >= 0) && c(g, !f)
        }
    });
    a(function() {
        var e = document.body,
        f = e.appendChild(f = document.createElement("div"));
        a.extend(f.style, {
            minHeight: "100px",
            height: "auto",
            padding: 0,
            borderWidth: 0
        });
        a.support.minHeight = f.offsetHeight === 100;
        a.support.selectstart = "onselectstart" in f;
        e.removeChild(f).style.display = "none"
    });
    a.extend(a.om, {
        plugin: {
            add: function(f, g, j) {
                var h = a.om[f].prototype;
                for (var e in j) {
                    h.plugins[e] = h.plugins[e] || [];
                    h.plugins[e].push([g, j[e]])
                }
            },
            call: function(e, g, f) {
                var j = e.plugins[g];
                if (!j || !e.element[0].parentNode) {
                    return
                }
                for (var h = 0; h < j.length; h++) {
                    if (e.options[j[h][0]]) {
                        j[h][1].apply(e.element, f)
                    }
                }
            }
        }
    })
})(jQuery); (function(a, c) {
    if (a.cleanData) {
        var b = a.cleanData;
        a.cleanData = function(d) {
            for (var e = 0,
            f; (f = d[e]) != null; e++) {
                a(f).triggerHandler("om-remove")
            }
            b(d)
        }
    }
    a.omWidget = function(e, g, d) {
        var f = e.split(".")[0],
        i;
        e = e.split(".")[1];
        i = f + "-" + e;
        if (!d) {
            d = g;
            g = a.OMWidget
        }
        a.expr[":"][i] = function(j) {
            return !! a.data(j, e)
        };
        a[f] = a[f] || {};
        a[f][e] = function(j, k) {
            if (arguments.length) {
                this._createWidget(j, k)
            }
        };
        var h = new g();
        h.options = a.extend(true, {},
        h.options);
        a[f][e].prototype = a.extend(true, h, {
            namespace: f,
            widgetName: e,
            widgetEventPrefix: a[f][e].prototype.widgetEventPrefix || e,
            widgetBaseClass: i
        },
        d);
        a.omWidget.bridge(e, a[f][e])
    };
    a.omWidget.bridge = function(e, d) {
        a.fn[e] = function(h) {
            var f = typeof h === "string",
            g = Array.prototype.slice.call(arguments, 1),
            i = this;
            h = !f && g.length ? a.extend.apply(null, [true, h].concat(g)) : h;
            if (f && h.charAt(0) === "_") {
                return i
            }
            if (f) {
                this.each(function() {
                    var j = a.data(this, e);
                    if (h == "options") {
                        i = j && j.options;
                        return false
                    } else {
                        var k = j && a.isFunction(j[h]) ? j[h].apply(j, g) : j;
                        if (k !== j && k !== c) {
                            i = k;
                            return false
                        }
                    }
                })
            } else {
                this.each(function() {
                    var j = a.data(this, e);
                    if (j) {
                        j._setOptions(h || {});
                        a.extend(j.options, h);
                        a(j.beforeInitListeners).each(function() {
                            this.call(j)
                        });
                        j._init();
                        a(j.initListeners).each(function() {
                            this.call(j)
                        })
                    } else {
                        a.data(this, e, new d(h, this))
                    }
                })
            }
            return i
        }
    };
    a.omWidget.addCreateListener = function(e, f) {
        var d = e.split(".");
        a[d[0]][d[1]].prototype.createListeners.push(f)
    };
    a.omWidget.addInitListener = function(e, f) {
        var d = e.split(".");
        a[d[0]][d[1]].prototype.initListeners.push(f)
    };
    a.omWidget.addBeforeInitListener = function(e, f) {
        var d = e.split(".");
        a[d[0]][d[1]].prototype.beforeInitListeners.push(f)
    };
    a.OMWidget = function(d, e) {
        this.createListeners = [];
        this.initListeners = [];
        this.beforeInitListeners = [];
        if (arguments.length) {
            this._createWidget(d, e)
        }
    };
    a.OMWidget.prototype = {
        widgetName: "widget",
        widgetEventPrefix: "",
        options: {
            disabled: false
        },
        _createWidget: function(e, f) {
            a.data(f, this.widgetName, this);
            this.element = a(f);
            this.options = a.extend(true, {},
            this.options, this._getCreateOptions(), e);
            var d = this;
            this.element.bind("om-remove._" + this.widgetName,
            function() {
                d.destroy()
            });
            this._create();
            a(this.createListeners).each(function() {
                this.call(d)
            });
            this._trigger("create");
            a(this.beforeInitListeners).each(function() {
                this.call(d)
            });
            this._init();
            a(this.initListeners).each(function() {
                this.call(d)
            })
        },
        _getCreateOptions: function() {
            return a.metadata && a.metadata.get(this.element[0])[this.widgetName]
        },
        _create: function() {},
        _init: function() {},
        destroy: function() {
            this.element.unbind("." + this.widgetName).removeData(this.widgetName);
            this.widget().unbind("." + this.widgetName)
        },
        widget: function() {
            return this.element
        },
        option: function(e, f) {
            var d = e;
            if (arguments.length === 0) {
                return a.extend({},
                this.options)
            }
            if (typeof e === "string") {
                if (f === c) {
                    return this.options[e]
                }
                d = {};
                d[e] = f
            }
            this._setOptions(d);
            return this
        },
        _setOptions: function(e) {
            var d = this;
            a.each(e,
            function(f, g) {
                d._setOption(f, g)
            });
            return this
        },
        _setOption: function(d, e) {
            this.options[d] = e;
            return this
        },
        _trigger: function(f, g) {
            var k = this.options[f];
            g = a.Event(g);
            g.type = f;
            if (g.originalEvent) {
                for (var e = a.event.props.length,
                j; e;) {
                    j = a.event.props[--e];
                    g[j] = g.originalEvent[j]
                }
            }
            var d = [],
            h = arguments.length;
            for (var e = 2; e < h; e++) {
                d[e - 2] = arguments[e]
            }
            if (h > 1) {
                d[h - 2] = arguments[1]
            }
            return ! (a.isFunction(k) && k.apply(this.element, d) === false || g.isDefaultPrevented())
        }
    }
})(jQuery); (function(b) {
    b.fn.omAjaxSubmit = function(d) {
        if (!this.length) {
            a("omAjaxSubmit: skipping submit process - no element selected");
            return this
        }
        var c, p, f, g = this;
        if (typeof d == "function") {
            d = {
                success: d
            }
        }
        c = this.attr("method");
        p = this.attr("action");
        f = (typeof p === "string") ? b.trim(p) : "";
        f = f || window.location.href || "";
        if (f) {
            f = (f.match(/^([^#]+)/) || [])[1]
        }
        d = b.extend(true, {
            url: f,
            success: b.ajaxSettings.success,
            method: c || "GET",
            iframeSrc: /^https/i.test(window.location.href || "") ? "javascript:false": "about:blank"
        },
        d);
        var j = {};
        this.trigger("form-pre-serialize", [this, d, j]);
        if (j.veto) {
            a("omAjaxSubmit: submit vetoed via form-pre-serialize trigger");
            return this
        }
        if (d.beforeSerialize && d.beforeSerialize(this, d) === false) {
            a("omAjaxSubmit: submit aborted via beforeSerialize callback");
            return this
        }
        var o, i, w = this.formToArray(d.semantic);
        if (d.data) {
            d.extraData = d.data;
            for (o in d.data) {
                if (d.data[o] instanceof Array) {
                    for (var r in d.data[o]) {
                        w.push({
                            name: o,
                            value: d.data[o][r]
                        })
                    }
                } else {
                    i = d.data[o];
                    i = b.isFunction(i) ? i() : i;
                    w.push({
                        name: o,
                        value: i
                    })
                }
            }
        }
        if (d.beforeSubmit && d.beforeSubmit(w, this, d) === false) {
            a("omAjaxSubmit: submit aborted via beforeSubmit callback");
            return this
        }
        this.trigger("form-submit-validate", [w, this, d, j]);
        if (j.veto) {
            a("omAjaxSubmit: submit vetoed via form-submit-validate trigger");
            return this
        }
        var m = b.param(w);
        if (d.method.toUpperCase() == "GET") {
            d.url += (d.url.indexOf("?") >= 0 ? "&": "?") + m;
            d.data = null
        } else {
            d.data = m
        }
        var x = [];
        if (d.resetForm) {
            x.push(function() {
                g.resetForm()
            })
        }
        if (d.clearForm) {
            x.push(function() {
                g.clearForm()
            })
        }
        if (!d.dataType && d.target) {
            var e = d.success ||
            function() {};
            x.push(function(n) {
                var k = d.replaceTarget ? "replaceWith": "html";
                b(d.target)[k](n).each(e, arguments)
            })
        } else {
            if (d.success) {
                x.push(d.success)
            }
        }
        d.success = function(y, n, z) {
            var v = d.context || d;
            for (var q = 0,
            k = x.length; q < k; q++) {
                x[q].apply(v, [y, n, z || g, g])
            }
        };
        var t = b("input:file", this).length > 0;
        var s = "multipart/form-data";
        var l = (g.attr("enctype") == s || g.attr("encoding") == s);
        if (d.iframe !== false && (t || d.iframe || l)) {
            if (d.closeKeepAlive) {
                b.get(d.closeKeepAlive,
                function() {
                    h(w)
                })
            } else {
                h(w)
            }
        } else {
            if (b.browser.msie && c == "get") {
                var u = g[0].getAttribute("method");
                if (typeof u === "string") {
                    d.method = u
                }
            }
            d.type = d.method;
            b.ajax(d)
        }
        this.trigger("form-submit-notify", [this, d]);
        return this;
        function h(T) {
            var y = g[0],
            v,
            P,
            J,
            R,
            M,
            A,
            E,
            C,
            D,
            N,
            Q,
            H;
            var B = !!b.fn.prop;
            if (T) {
                for (P = 0; P < T.length; P++) {
                    v = b(y[T[P].name]);
                    v[B ? "prop": "attr"]("disabled", false)
                }
            }
            if (b(":input[name=submit],:input[id=submit]", y).length) {
                alert('Error: Form elements must not have name or id of "submit".');
                return
            }
            J = b.extend(true, {},
            b.ajaxSettings, d);
            J.context = J.context || J;
            M = "jqFormIO" + (new Date().getTime());
            if (J.iframeTarget) {
                A = b(J.iframeTarget);
                N = A.attr("name");
                if (N == null) {
                    A.attr("name", M)
                } else {
                    M = N
                }
            } else {
                A = b('<iframe name="' + M + '" src="' + J.iframeSrc + '" />');
                A.css({
                    position: "absolute",
                    top: "-1000px",
                    left: "-1000px"
                })
            }
            E = A[0];
            C = {
                aborted: 0,
                responseText: null,
                responseXML: null,
                status: 0,
                statusText: "n/a",
                getAllResponseHeaders: function() {},
                getResponseHeader: function() {},
                setRequestHeader: function() {},
                abort: function(n) {
                    var W = (n === "timeout" ? "timeout": "aborted");
                    a("aborting upload... " + W);
                    this.aborted = 1;
                    A.attr("src", J.iframeSrc);
                    C.error = W;
                    J.error && J.error.call(J.context, C, W, n);
                    R && b.event.trigger("ajaxError", [C, J, W]);
                    J.complete && J.complete.call(J.context, C, W)
                }
            };
            R = J.global;
            if (R && !b.active++) {
                b.event.trigger("ajaxStart")
            }
            if (R) {
                b.event.trigger("ajaxSend", [C, J])
            }
            if (J.beforeSend && J.beforeSend.call(J.context, C, J) === false) {
                if (J.global) {
                    b.active--
                }
                return
            }
            if (C.aborted) {
                return
            }
            D = y.clk;
            if (D) {
                N = D.name;
                if (N && !D.disabled) {
                    J.extraData = J.extraData || {};
                    J.extraData[N] = D.value;
                    if (D.type == "image") {
                        J.extraData[N + ".x"] = y.clk_x;
                        J.extraData[N + ".y"] = y.clk_y
                    }
                }
            }
            var I = 1;
            var F = 2;
            function G(W) {
                var n = W.contentWindow ? W.contentWindow.document: W.contentDocument ? W.contentDocument: W.document;
                return n
            }
            function O() {
                var Y = g.attr("target"),
                W = g.attr("action");
                y.setAttribute("target", M);
                if (!c) {
                    y.setAttribute("method", "POST")
                }
                if (W != J.url) {
                    y.setAttribute("action", J.url)
                }
                if (!J.skipEncodingOverride && (!c || /post/i.test(c))) {
                    g.attr({
                        encoding: "multipart/form-data",
                        enctype: "multipart/form-data"
                    })
                }
                if (J.timeout) {
                    H = setTimeout(function() {
                        Q = true;
                        L(I)
                    },
                    J.timeout)
                }
                function Z() {
                    try {
                        var n = G(E).readyState;
                        a("state = " + n);
                        if (n.toLowerCase() == "uninitialized") {
                            setTimeout(Z, 50)
                        }
                    } catch(ab) {
                        a("Server abort: ", ab, " (", ab.name, ")");
                        L(F);
                        H && clearTimeout(H);
                        H = undefined
                    }
                }
                var X = [];
                try {
                    if (J.extraData) {
                        for (var aa in J.extraData) {
                            X.push(b('<input type="hidden" name="' + aa + '" />').attr("value", J.extraData[aa]).appendTo(y)[0])
                        }
                    }
                    if (!J.iframeTarget) {
                        A.appendTo("body");
                        E.attachEvent ? E.attachEvent("onload", L) : E.addEventListener("load", L, false)
                    }
                    setTimeout(Z, 15);
                    y.submit()
                } finally {
                    y.setAttribute("action", W);
                    if (Y) {
                        y.setAttribute("target", Y)
                    } else {
                        g.removeAttr("target")
                    }
                    b(X).remove()
                }
            }
            if (J.forceSync) {
                O()
            } else {
                setTimeout(O, 10)
            }
            var U, V, S = 50,
            z;
            function L(aa) {
                if (C.aborted || z) {
                    return
                }
                try {
                    V = G(E)
                } catch(ad) {
                    a("cannot access response document: ", ad);
                    aa = F
                }
                if (aa === I && C) {
                    C.abort("timeout");
                    return
                } else {
                    if (aa == F && C) {
                        C.abort("server abort");
                        return
                    }
                }
                if (!V || V.location.href == J.iframeSrc) {
                    if (!Q) {
                        return
                    }
                }
                E.detachEvent ? E.detachEvent("onload", L) : E.removeEventListener("load", L, false);
                var Y = "success",
                ac;
                try {
                    if (Q) {
                        throw "timeout"
                    }
                    var X = J.dataType == "xml" || V.XMLDocument || b.isXMLDoc(V);
                    a("isXml=" + X);
                    if (!X && window.opera && (V.body == null || V.body.innerHTML == "")) {
                        if (--S) {
                            a("requeing onLoad callback, DOM not available");
                            setTimeout(L, 250);
                            return
                        }
                    }
                    var ae = V.body ? V.body: V.documentElement;
                    C.responseText = ae ? ae.innerHTML: null;
                    C.responseXML = V.XMLDocument ? V.XMLDocument: V;
                    if (X) {
                        J.dataType = "xml"
                    }
                    C.getResponseHeader = function(ah) {
                        var ag = {
                            "content-type": J.dataType
                        };
                        return ag[ah]
                    };
                    if (ae) {
                        C.status = Number(ae.getAttribute("status")) || C.status;
                        C.statusText = ae.getAttribute("statusText") || C.statusText
                    }
                    var n = J.dataType || "";
                    var ab = /(json|script|text)/.test(n.toLowerCase());
                    if (ab || J.textarea) {
                        var Z = V.getElementsByTagName("textarea")[0];
                        if (Z) {
                            C.responseText = Z.value;
                            C.status = Number(Z.getAttribute("status")) || C.status;
                            C.statusText = Z.getAttribute("statusText") || C.statusText
                        } else {
                            if (ab) {
                                var W = V.getElementsByTagName("pre")[0];
                                var af = V.getElementsByTagName("body")[0];
                                if (W) {
                                    C.responseText = W.textContent ? W.textContent: W.innerHTML
                                } else {
                                    if (af) {
                                        C.responseText = af.innerHTML
                                    }
                                }
                            }
                        }
                    } else {
                        if (J.dataType == "xml" && !C.responseXML && C.responseText != null) {
                            C.responseXML = K(C.responseText)
                        }
                    }
                    try {
                        U = k(C, J.dataType, J)
                    } catch(aa) {
                        Y = "parsererror";
                        C.error = ac = (aa || Y)
                    }
                } catch(aa) {
                    a("error caught: ", aa);
                    Y = "error";
                    C.error = ac = (aa || Y)
                }
                if (C.aborted) {
                    a("upload aborted");
                    Y = null
                }
                if (C.status) {
                    Y = (C.status >= 200 && C.status < 300 || C.status === 304) ? "success": "error"
                }
                if (Y === "success") {
                    J.success && J.success.call(J.context, U, "success", C);
                    R && b.event.trigger("ajaxSuccess", [C, J])
                } else {
                    if (Y) {
                        if (ac == undefined) {
                            ac = C.statusText
                        }
                        J.error && J.error.call(J.context, C, Y, ac);
                        R && b.event.trigger("ajaxError", [C, J, ac])
                    }
                }
                R && b.event.trigger("ajaxComplete", [C, J]);
                if (R && !--b.active) {
                    b.event.trigger("ajaxStop")
                }
                J.complete && J.complete.call(J.context, C, Y);
                z = true;
                if (J.timeout) {
                    clearTimeout(H)
                }
                setTimeout(function() {
                    if (!J.iframeTarget) {
                        A.remove()
                    }
                    C.responseXML = null
                },
                100)
            }
            var K = b.parseXML ||
            function(n, W) {
                if (window.ActiveXObject) {
                    W = new ActiveXObject("Microsoft.XMLDOM");
                    W.async = "false";
                    W.loadXML(n)
                } else {
                    W = (new DOMParser()).parseFromString(n, "text/xml")
                }
                return (W && W.documentElement && W.documentElement.nodeName != "parsererror") ? W: null
            };
            var q = b.parseJSON ||
            function(n) {
                return window["eval"]("(" + n + ")")
            };
            var k = function(aa, Y, X) {
                var W = aa.getResponseHeader("content-type") || "",
                n = Y === "xml" || !Y && W.indexOf("xml") >= 0,
                Z = n ? aa.responseXML: aa.responseText;
                if (n && Z.documentElement.nodeName === "parsererror") {
                    b.error && b.error("parsererror")
                }
                if (X && X.dataFilter) {
                    Z = X.dataFilter(Z, Y)
                }
                if (typeof Z === "string") {
                    if (Y === "json" || !Y && W.indexOf("json") >= 0) {
                        Z = q(Z)
                    } else {
                        if (Y === "script" || !Y && W.indexOf("javascript") >= 0) {
                            b.globalEval(Z)
                        }
                    }
                }
                return Z
            }
        }
    };
    b.fn.ajaxForm = function(c) {
        if (this.length === 0) {
            var d = {
                s: this.selector,
                c: this.context
            };
            if (!b.isReady && d.s) {
                a("DOM not ready, queuing ajaxForm");
                b(function() {
                    b(d.s, d.c).ajaxForm(c)
                });
                return this
            }
            a("terminating; zero elements found by selector" + (b.isReady ? "": " (DOM not ready)"));
            return this
        }
        return this.ajaxFormUnbind().bind("submit.form-plugin",
        function(f) {
            if (!f.isDefaultPrevented()) {
                f.preventDefault();
                b(this).omAjaxSubmit(c)
            }
        }).bind("click.form-plugin",
        function(j) {
            var i = j.target;
            var g = b(i);
            if (! (g.is(":submit,input:image"))) {
                var f = g.closest(":submit");
                if (f.length == 0) {
                    return
                }
                i = f[0]
            }
            var h = this;
            h.clk = i;
            if (i.type == "image") {
                if (j.offsetX != undefined) {
                    h.clk_x = j.offsetX;
                    h.clk_y = j.offsetY
                } else {
                    if (typeof b.fn.offset == "function") {
                        var k = g.offset();
                        h.clk_x = j.pageX - k.left;
                        h.clk_y = j.pageY - k.top
                    } else {
                        h.clk_x = j.pageX - i.offsetLeft;
                        h.clk_y = j.pageY - i.offsetTop
                    }
                }
            }
            setTimeout(function() {
                h.clk = h.clk_x = h.clk_y = null
            },
            100)
        })
    };
    b.fn.ajaxFormUnbind = function() {
        return this.unbind("submit.form-plugin click.form-plugin")
    };
    b.fn.formToArray = function(q) {
        var p = [];
        if (this.length === 0) {
            return p
        }
        var d = this[0];
        var g = q ? d.getElementsByTagName("*") : d.elements;
        if (!g) {
            return p
        }
        var k, h, f, r, e, m, c;
        for (k = 0, m = g.length; k < m; k++) {
            e = g[k];
            f = e.name;
            if (!f) {
                continue
            }
            if (q && d.clk && e.type == "image") {
                if (!e.disabled && d.clk == e) {
                    p.push({
                        name: f,
                        value: b(e).val()
                    });
                    p.push({
                        name: f + ".x",
                        value: d.clk_x
                    },
                    {
                        name: f + ".y",
                        value: d.clk_y
                    })
                }
                continue
            }
            r = b.fieldValue(e, true);
            if (r && r.constructor == Array) {
                for (h = 0, c = r.length; h < c; h++) {
                    p.push({
                        name: f,
                        value: r[h]
                    })
                }
            } else {
                if (r !== null && typeof r != "undefined") {
                    p.push({
                        name: f,
                        value: r
                    })
                }
            }
        }
        if (!q && d.clk) {
            var l = b(d.clk),
            o = l[0];
            f = o.name;
            if (f && !o.disabled && o.type == "image") {
                p.push({
                    name: f,
                    value: l.val()
                });
                p.push({
                    name: f + ".x",
                    value: d.clk_x
                },
                {
                    name: f + ".y",
                    value: d.clk_y
                })
            }
        }
        return p
    };
    b.fn.formSerialize = function(c) {
        return b.param(this.formToArray(c))
    };
    b.fn.fieldSerialize = function(d) {
        var c = [];
        this.each(function() {
            var h = this.name;
            if (!h) {
                return
            }
            var f = b.fieldValue(this, d);
            if (f && f.constructor == Array) {
                for (var g = 0,
                e = f.length; g < e; g++) {
                    c.push({
                        name: h,
                        value: f[g]
                    })
                }
            } else {
                if (f !== null && typeof f != "undefined") {
                    c.push({
                        name: this.name,
                        value: f
                    })
                }
            }
        });
        return b.param(c)
    };
    b.fn.fieldValue = function(h) {
        for (var g = [], e = 0, c = this.length; e < c; e++) {
            var f = this[e];
            var d = b.fieldValue(f, h);
            if (d === null || typeof d == "undefined" || (d.constructor == Array && !d.length)) {
                continue
            }
            d.constructor == Array ? b.merge(g, d) : g.push(d)
        }
        return g
    };
    b.fieldValue = function(c, j) {
        var e = c.name,
        p = c.type,
        q = c.tagName.toLowerCase();
        if (j === undefined) {
            j = true
        }
        if (j && (!e || c.disabled || p == "reset" || p == "button" || (p == "checkbox" || p == "radio") && !c.checked || (p == "submit" || p == "image") && c.form && c.form.clk != c || q == "select" && c.selectedIndex == -1)) {
            return null
        }
        if (q == "select") {
            var k = c.selectedIndex;
            if (k < 0) {
                return null
            }
            var m = [],
            d = c.options;
            var g = (p == "select-one");
            var l = (g ? k + 1 : d.length);
            for (var f = (g ? k: 0); f < l; f++) {
                var h = d[f];
                if (h.selected) {
                    var o = h.value;
                    if (!o) {
                        o = (h.attributes && h.attributes.value && !(h.attributes.value.specified)) ? h.text: h.value
                    }
                    if (g) {
                        return o
                    }
                    m.push(o)
                }
            }
            return m
        }
        return b(c).val()
    };
    b.fn.clearForm = function() {
        return this.each(function() {
            b("input,select,textarea", this).clearFields()
        })
    };
    b.fn.clearFields = b.fn.clearInputs = function() {
        var c = /^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;
        return this.each(function() {
            var e = this.type,
            d = this.tagName.toLowerCase();
            if (c.test(e) || d == "textarea") {
                this.value = ""
            } else {
                if (e == "checkbox" || e == "radio") {
                    this.checked = false
                } else {
                    if (d == "select") {
                        this.selectedIndex = -1
                    }
                }
            }
        })
    };
    b.fn.resetForm = function() {
        return this.each(function() {
            if (typeof this.reset == "function" || (typeof this.reset == "object" && !this.reset.nodeType)) {
                this.reset()
            }
        })
    };
    b.fn.enable = function(c) {
        if (c === undefined) {
            c = true
        }
        return this.each(function() {
            this.disabled = !c
        })
    };
    b.fn.selected = function(c) {
        if (c === undefined) {
            c = true
        }
        return this.each(function() {
            var d = this.type;
            if (d == "checkbox" || d == "radio") {
                this.checked = c
            } else {
                if (this.tagName.toLowerCase() == "option") {
                    var e = b(this).parent("select");
                    if (c && e[0] && e[0].type == "select-one") {
                        e.find("option").selected(false)
                    }
                    this.selected = c
                }
            }
        })
    };
    function a() {
        var c = "[jquery.form] " + Array.prototype.join.call(arguments, "");
        if (window.console && window.console.log) {
            window.console.log(c)
        } else {
            if (window.opera && window.opera.postError) {
                window.opera.postError(c)
            }
        }
    }
})(jQuery);
var swfobject = function() {
    var aq = "undefined",
    aD = "object",
    ab = "Shockwave Flash",
    X = "ShockwaveFlash.ShockwaveFlash",
    aE = "application/x-shockwave-flash",
    ac = "SWFObjectExprInst",
    ax = "onreadystatechange",
    af = window,
    aL = document,
    aB = navigator,
    aa = false,
    Z = [aN],
    aG = [],
    ag = [],
    al = [],
    aJ,
    ad,
    ap,
    at,
    ak = false,
    aU = false,
    aH,
    an,
    aI = true,
    ah = function() {
        var a = typeof aL.getElementById != aq && typeof aL.getElementsByTagName != aq && typeof aL.createElement != aq,
        e = aB.userAgent.toLowerCase(),
        c = aB.platform.toLowerCase(),
        h = c ? /win/.test(c) : /win/.test(e),
        j = c ? /mac/.test(c) : /mac/.test(e),
        g = /webkit/.test(e) ? parseFloat(e.replace(/^.*webkit\/(\d+(\.\d+)?).*$/, "$1")) : false,
        d = !+"\v1",
        f = [0, 0, 0],
        k = null;
        if (typeof aB.plugins != aq && typeof aB.plugins[ab] == aD) {
            k = aB.plugins[ab].description;
            if (k && !(typeof aB.mimeTypes != aq && aB.mimeTypes[aE] && !aB.mimeTypes[aE].enabledPlugin)) {
                aa = true;
                d = false;
                k = k.replace(/^.*\s+(\S+\s+\S+$)/, "$1");
                f[0] = parseInt(k.replace(/^(.*)\..*$/, "$1"), 10);
                f[1] = parseInt(k.replace(/^.*\.(.*)\s.*$/, "$1"), 10);
                f[2] = /[a-zA-Z]/.test(k) ? parseInt(k.replace(/^.*[a-zA-Z]+(.*)$/, "$1"), 10) : 0
            }
        } else {
            if (typeof af.ActiveXObject != aq) {
                try {
                    var i = new ActiveXObject(X);
                    if (i) {
                        k = i.GetVariable("$version");
                        if (k) {
                            d = true;
                            k = k.split(" ")[1].split(",");
                            f = [parseInt(k[0], 10), parseInt(k[1], 10), parseInt(k[2], 10)]
                        }
                    }
                } catch(b) {}
            }
        }
        return {
            w3: a,
            pv: f,
            wk: g,
            ie: d,
            win: h,
            mac: j
        }
    } (),
    aK = function() {
        if (!ah.w3) {
            return
        }
        if ((typeof aL.readyState != aq && aL.readyState == "complete") || (typeof aL.readyState == aq && (aL.getElementsByTagName("body")[0] || aL.body))) {
            aP()
        }
        if (!ak) {
            if (typeof aL.addEventListener != aq) {
                aL.addEventListener("DOMContentLoaded", aP, false)
            }
            if (ah.ie && ah.win) {
                aL.attachEvent(ax,
                function() {
                    if (aL.readyState == "complete") {
                        aL.detachEvent(ax, arguments.callee);
                        aP()
                    }
                });
                if (af == top) { (function() {
                        if (ak) {
                            return
                        }
                        try {
                            aL.documentElement.doScroll("left")
                        } catch(a) {
                            setTimeout(arguments.callee, 0);
                            return
                        }
                        aP()
                    })()
                }
            }
            if (ah.wk) { (function() {
                    if (ak) {
                        return
                    }
                    if (!/loaded|complete/.test(aL.readyState)) {
                        setTimeout(arguments.callee, 0);
                        return
                    }
                    aP()
                })()
            }
            aC(aP)
        }
    } ();
    function aP() {
        if (ak) {
            return
        }
        try {
            var b = aL.getElementsByTagName("body")[0].appendChild(ar("span"));
            b.parentNode.removeChild(b)
        } catch(a) {
            return
        }
        ak = true;
        var d = Z.length;
        for (var c = 0; c < d; c++) {
            Z[c]()
        }
    }
    function aj(a) {
        if (ak) {
            a()
        } else {
            Z[Z.length] = a
        }
    }
    function aC(a) {
        if (typeof af.addEventListener != aq) {
            af.addEventListener("load", a, false)
        } else {
            if (typeof aL.addEventListener != aq) {
                aL.addEventListener("load", a, false)
            } else {
                if (typeof af.attachEvent != aq) {
                    aM(af, "onload", a)
                } else {
                    if (typeof af.onload == "function") {
                        var b = af.onload;
                        af.onload = function() {
                            b();
                            a()
                        }
                    } else {
                        af.onload = a
                    }
                }
            }
        }
    }
    function aN() {
        if (aa) {
            Y()
        } else {
            am()
        }
    }
    function Y() {
        var d = aL.getElementsByTagName("body")[0];
        var b = ar(aD);
        b.setAttribute("type", aE);
        var a = d.appendChild(b);
        if (a) {
            var c = 0; (function() {
                if (typeof a.GetVariable != aq) {
                    var e = a.GetVariable("$version");
                    if (e) {
                        e = e.split(" ")[1].split(",");
                        ah.pv = [parseInt(e[0], 10), parseInt(e[1], 10), parseInt(e[2], 10)]
                    }
                } else {
                    if (c < 10) {
                        c++;
                        setTimeout(arguments.callee, 10);
                        return
                    }
                }
                d.removeChild(b);
                a = null;
                am()
            })()
        } else {
            am()
        }
    }
    function am() {
        var g = aG.length;
        if (g > 0) {
            for (var h = 0; h < g; h++) {
                var c = aG[h].id;
                var l = aG[h].callbackFn;
                var a = {
                    success: false,
                    id: c
                };
                if (ah.pv[0] > 0) {
                    var i = aS(c);
                    if (i) {
                        if (ao(aG[h].swfVersion) && !(ah.wk && ah.wk < 312)) {
                            ay(c, true);
                            if (l) {
                                a.success = true;
                                a.ref = av(c);
                                l(a)
                            }
                        } else {
                            if (aG[h].expressInstall && au()) {
                                var e = {};
                                e.data = aG[h].expressInstall;
                                e.width = i.getAttribute("width") || "0";
                                e.height = i.getAttribute("height") || "0";
                                if (i.getAttribute("class")) {
                                    e.styleclass = i.getAttribute("class")
                                }
                                if (i.getAttribute("align")) {
                                    e.align = i.getAttribute("align")
                                }
                                var f = {};
                                var d = i.getElementsByTagName("param");
                                var k = d.length;
                                for (var j = 0; j < k; j++) {
                                    if (d[j].getAttribute("name").toLowerCase() != "movie") {
                                        f[d[j].getAttribute("name")] = d[j].getAttribute("value")
                                    }
                                }
                                ae(e, f, c, l)
                            } else {
                                aF(i);
                                if (l) {
                                    l(a)
                                }
                            }
                        }
                    }
                } else {
                    ay(c, true);
                    if (l) {
                        var b = av(c);
                        if (b && typeof b.SetVariable != aq) {
                            a.success = true;
                            a.ref = b
                        }
                        l(a)
                    }
                }
            }
        }
    }
    function av(b) {
        var d = null;
        var c = aS(b);
        if (c && c.nodeName == "OBJECT") {
            if (typeof c.SetVariable != aq) {
                d = c
            } else {
                var a = c.getElementsByTagName(aD)[0];
                if (a) {
                    d = a
                }
            }
        }
        return d
    }
    function au() {
        return ! aU && ao("6.0.65") && (ah.win || ah.mac) && !(ah.wk && ah.wk < 312)
    }
    function ae(f, d, h, e) {
        aU = true;
        ap = e || null;
        at = {
            success: false,
            id: h
        };
        var a = aS(h);
        if (a) {
            if (a.nodeName == "OBJECT") {
                aJ = aO(a);
                ad = null
            } else {
                aJ = a;
                ad = h
            }
            f.id = ac;
            if (typeof f.width == aq || (!/%$/.test(f.width) && parseInt(f.width, 10) < 310)) {
                f.width = "310"
            }
            if (typeof f.height == aq || (!/%$/.test(f.height) && parseInt(f.height, 10) < 137)) {
                f.height = "137"
            }
            aL.title = aL.title.slice(0, 47) + " - Flash Player Installation";
            var b = ah.ie && ah.win ? "ActiveX": "PlugIn",
            c = "MMredirectURL=" + af.location.toString().replace(/&/g, "%26") + "&MMplayerType=" + b + "&MMdoctitle=" + aL.title;
            if (typeof d.flashvars != aq) {
                d.flashvars += "&" + c
            } else {
                d.flashvars = c
            }
            if (ah.ie && ah.win && a.readyState != 4) {
                var g = ar("div");
                h += "SWFObjectNew";
                g.setAttribute("id", h);
                a.parentNode.insertBefore(g, a);
                a.style.display = "none"; (function() {
                    if (a.readyState == 4) {
                        a.parentNode.removeChild(a)
                    } else {
                        setTimeout(arguments.callee, 10)
                    }
                })()
            }
            aA(f, d, h)
        }
    }
    function aF(a) {
        if (ah.ie && ah.win && a.readyState != 4) {
            var b = ar("div");
            a.parentNode.insertBefore(b, a);
            b.parentNode.replaceChild(aO(a), b);
            a.style.display = "none"; (function() {
                if (a.readyState == 4) {
                    a.parentNode.removeChild(a)
                } else {
                    setTimeout(arguments.callee, 10)
                }
            })()
        } else {
            a.parentNode.replaceChild(aO(a), a)
        }
    }
    function aO(b) {
        var d = ar("div");
        if (ah.win && ah.ie) {
            d.innerHTML = b.innerHTML
        } else {
            var e = b.getElementsByTagName(aD)[0];
            if (e) {
                var a = e.childNodes;
                if (a) {
                    var f = a.length;
                    for (var c = 0; c < f; c++) {
                        if (! (a[c].nodeType == 1 && a[c].nodeName == "PARAM") && !(a[c].nodeType == 8)) {
                            d.appendChild(a[c].cloneNode(true))
                        }
                    }
                }
            }
        }
        return d
    }
    function aA(e, g, c) {
        var d, a = aS(c);
        if (ah.wk && ah.wk < 312) {
            return d
        }
        if (a) {
            if (typeof e.id == aq) {
                e.id = c
            }
            if (ah.ie && ah.win) {
                var f = "";
                for (var i in e) {
                    if (e[i] != Object.prototype[i]) {
                        if (i.toLowerCase() == "data") {
                            g.movie = e[i]
                        } else {
                            if (i.toLowerCase() == "styleclass") {
                                f += ' class="' + e[i] + '"'
                            } else {
                                if (i.toLowerCase() != "classid") {
                                    f += " " + i + '="' + e[i] + '"'
                                }
                            }
                        }
                    }
                }
                var h = "";
                for (var j in g) {
                    if (g[j] != Object.prototype[j]) {
                        h += '<param name="' + j + '" value="' + g[j] + '" />'
                    }
                }
                a.outerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"' + f + ">" + h + "</object>";
                ag[ag.length] = e.id;
                d = aS(e.id)
            } else {
                var b = ar(aD);
                b.setAttribute("type", aE);
                for (var k in e) {
                    if (e[k] != Object.prototype[k]) {
                        if (k.toLowerCase() == "styleclass") {
                            b.setAttribute("class", e[k])
                        } else {
                            if (k.toLowerCase() != "classid") {
                                b.setAttribute(k, e[k])
                            }
                        }
                    }
                }
                for (var l in g) {
                    if (g[l] != Object.prototype[l] && l.toLowerCase() != "movie") {
                        aQ(b, l, g[l])
                    }
                }
                a.parentNode.replaceChild(b, a);
                d = b
            }
        }
        return d
    }
    function aQ(b, d, c) {
        var a = ar("param");
        a.setAttribute("name", d);
        a.setAttribute("value", c);
        b.appendChild(a)
    }
    function aw(a) {
        var b = aS(a);
        if (b && b.nodeName == "OBJECT") {
            if (ah.ie && ah.win) {
                b.style.display = "none"; (function() {
                    if (b.readyState == 4) {
                        aT(a)
                    } else {
                        setTimeout(arguments.callee, 10)
                    }
                })()
            } else {
                b.parentNode.removeChild(b)
            }
        }
    }
    function aT(a) {
        var b = aS(a);
        if (b) {
            for (var c in b) {
                if (typeof b[c] == "function") {
                    b[c] = null
                }
            }
            b.parentNode.removeChild(b)
        }
    }
    function aS(a) {
        var c = null;
        try {
            c = aL.getElementById(a)
        } catch(b) {}
        return c
    }
    function ar(a) {
        return aL.createElement(a)
    }
    function aM(a, c, b) {
        a.attachEvent(c, b);
        al[al.length] = [a, c, b]
    }
    function ao(a) {
        var b = ah.pv,
        c = a.split(".");
        c[0] = parseInt(c[0], 10);
        c[1] = parseInt(c[1], 10) || 0;
        c[2] = parseInt(c[2], 10) || 0;
        return (b[0] > c[0] || (b[0] == c[0] && b[1] > c[1]) || (b[0] == c[0] && b[1] == c[1] && b[2] >= c[2])) ? true: false
    }
    function az(b, f, a, c) {
        if (ah.ie && ah.mac) {
            return
        }
        var e = aL.getElementsByTagName("head")[0];
        if (!e) {
            return
        }
        var g = (a && typeof a == "string") ? a: "screen";
        if (c) {
            aH = null;
            an = null
        }
        if (!aH || an != g) {
            var d = ar("style");
            d.setAttribute("type", "text/css");
            d.setAttribute("media", g);
            aH = e.appendChild(d);
            if (ah.ie && ah.win && typeof aL.styleSheets != aq && aL.styleSheets.length > 0) {
                aH = aL.styleSheets[aL.styleSheets.length - 1]
            }
            an = g
        }
        if (ah.ie && ah.win) {
            if (aH && typeof aH.addRule == aD) {
                aH.addRule(b, f)
            }
        } else {
            if (aH && typeof aL.createTextNode != aq) {
                aH.appendChild(aL.createTextNode(b + " {" + f + "}"))
            }
        }
    }
    function ay(a, c) {
        if (!aI) {
            return
        }
        var b = c ? "visible": "hidden";
        if (ak && aS(a)) {
            aS(a).style.visibility = b
        } else {
            az("#" + a, "visibility:" + b)
        }
    }
    function ai(b) {
        var a = /[\\\"<>\.;]/;
        var c = a.exec(b) != null;
        return c && typeof encodeURIComponent != aq ? encodeURIComponent(b) : b
    }
    var aR = function() {
        if (ah.ie && ah.win) {
            window.attachEvent("onunload",
            function() {
                var a = al.length;
                for (var b = 0; b < a; b++) {
                    al[b][0].detachEvent(al[b][1], al[b][2])
                }
                var d = ag.length;
                for (var c = 0; c < d; c++) {
                    aw(ag[c])
                }
                for (var e in ah) {
                    ah[e] = null
                }
                ah = null;
                for (var f in swfobject) {
                    swfobject[f] = null
                }
                swfobject = null
            })
        }
    } ();
    return {
        registerObject: function(a, e, c, b) {
            if (ah.w3 && a && e) {
                var d = {};
                d.id = a;
                d.swfVersion = e;
                d.expressInstall = c;
                d.callbackFn = b;
                aG[aG.length] = d;
                ay(a, false)
            } else {
                if (b) {
                    b({
                        success: false,
                        id: a
                    })
                }
            }
        },
        getObjectById: function(a) {
            if (ah.w3) {
                return av(a)
            }
        },
        embedSWF: function(k, e, h, f, c, a, b, i, g, j) {
            var d = {
                success: false,
                id: e
            };
            if (ah.w3 && !(ah.wk && ah.wk < 312) && k && e && h && f && c) {
                ay(e, false);
                aj(function() {
                    h += "";
                    f += "";
                    var q = {};
                    if (g && typeof g === aD) {
                        for (var o in g) {
                            q[o] = g[o]
                        }
                    }
                    q.data = k;
                    q.width = h;
                    q.height = f;
                    var n = {};
                    if (i && typeof i === aD) {
                        for (var p in i) {
                            n[p] = i[p]
                        }
                    }
                    if (b && typeof b === aD) {
                        for (var l in b) {
                            if (typeof n.flashvars != aq) {
                                n.flashvars += "&" + l + "=" + b[l]
                            } else {
                                n.flashvars = l + "=" + b[l]
                            }
                        }
                    }
                    if (ao(c)) {
                        var m = aA(q, n, e);
                        if (q.id == e) {
                            ay(e, true)
                        }
                        d.success = true;
                        d.ref = m
                    } else {
                        if (a && au()) {
                            q.data = a;
                            ae(q, n, e, j);
                            return
                        } else {
                            ay(e, true)
                        }
                    }
                    if (j) {
                        j(d)
                    }
                })
            } else {
                if (j) {
                    j(d)
                }
            }
        },
        switchOffAutoHideShow: function() {
            aI = false
        },
        ua: ah,
        getFlashPlayerVersion: function() {
            return {
                major: ah.pv[0],
                minor: ah.pv[1],
                release: ah.pv[2]
            }
        },
        hasFlashPlayerVersion: ao,
        createSWF: function(a, b, c) {
            if (ah.w3) {
                return aA(a, b, c)
            } else {
                return undefined
            }
        },
        showExpressInstall: function(b, a, d, c) {
            if (ah.w3 && au()) {
                ae(b, a, d, c)
            }
        },
        removeSWF: function(a) {
            if (ah.w3) {
                aw(a)
            }
        },
        createCSS: function(b, a, c, d) {
            if (ah.w3) {
                az(b, a, c, d)
            }
        },
        addDomLoadEvent: aj,
        addLoadEvent: aC,
        getQueryParamValue: function(b) {
            var a = aL.location.search || aL.location.hash;
            if (a) {
                if (/\?/.test(a)) {
                    a = a.split("?")[1]
                }
                if (b == null) {
                    return ai(a)
                }
                var c = a.split("&");
                for (var d = 0; d < c.length; d++) {
                    if (c[d].substring(0, c[d].indexOf("=")) == b) {
                        return ai(c[d].substring((c[d].indexOf("=") + 1)))
                    }
                }
            }
            return ""
        },
        expressInstallCallback: function() {
            if (aU) {
                var a = aS(ac);
                if (a && aJ) {
                    a.parentNode.replaceChild(aJ, a);
                    if (ad) {
                        ay(ad, true);
                        if (ah.ie && ah.win) {
                            aJ.style.display = "block"
                        }
                    }
                    if (ap) {
                        ap(at)
                    }
                }
                aU = false
            }
        }
    }
} (); (function(b) {
    function a(g, d) {
        var c = g + "Queue";
        var f = b("#" + c + " .om-fileupload-queueitem").length;
        if (d == null || isNaN(d) || d < 0 || d >= f) {
            return false
        }
        var e = b("#" + c + " .om-fileupload-queueitem:eq(" + d + ")");
        return e.attr("id").replace(g, "")
    }
    b.omWidget("om.omFileUpload", {
        options: {
            swf: "/operamasks-ui/ui/om-fileupload.swf",
            action: "",
            actionData: {},
            height: 30,
            width: 120,
            buttonImg: null,
            multi: false,
            autoUpload: false,
            fileDataName: "Filedata",
            method: "POST",
            queueSizeLimit: 999,
            removeCompleted: true,
            fileExt: "*.*",
            fileDesc: null,
            sizeLimit: null,
            onSelect: function() {},
            onQueueFull: function() {},
            onCancel: function() {},
            onError: function() {},
            onProgress: function() {},
            onComplete: function() {},
            onAllComplete: function() {}
        },
        upload: function(e) {
            var f = this.element;
            var h = f.attr("id"),
            c = null,
            d = f.attr("id") + "Queue",
            g = f.attr("id") + "Uploader";
            if (typeof(e) != "undefined") {
                if ((c = a(h, e)) === false) {
                    return
                }
            }
            document.getElementById(g).startFileUpload(c, false)
        },
        cancel: function(e) {
            var f = this.element;
            var h = f.attr("id"),
            c = null,
            d = f.attr("id") + "Queue",
            g = f.attr("id") + "Uploader";
            if (typeof(e) != "undefined") {
                if (isNaN(e)) {
                    c = e
                } else {
                    if ((c = a(f.attr("id"), e)) === false) {
                        return
                    }
                }
                document.getElementById(g).cancelFileUpload(c, true, true, false)
            } else {
                document.getElementById(g).clearFileUploadQueue(false)
            }
        },
        _setOption: function(g, h) {
            var k = document.getElementById(this.element.attr("id") + "Uploader");
            if (g == "actionData") {
                var j = "";
                for (var e in h) {
                    j += "&" + e + "=" + h[e]
                }
                var d = document.cookie.split(";");
                for (var f = 0; f < d.length; f++) {
                    if (d[f] !== "") {
                        j += "&" + d[f]
                    }
                }
                h = encodeURI(j.substr(1));
                k.updateSettings(g, h);
                return
            }
            var c = ["buttonImg", "buttonText", "fileDesc", "fileExt", "height", "action", "sizeLimit", "width"];
            if (b.inArray(g, c) != -1) {
                k.updateSettings(g, h)
            }
        },
        _create: function() {
            var m = this;
            var f = this.element;
            var d = b.extend({},
            this.options);
            d.wmode = "opaque";
            d.expressInstall = null;
            d.displayData = "percentage";
            d.folder = "";
            d.simUploadLimit = 1;
            d.scriptAccess = "sameDomain";
            d.queueID = false;
            d.onInit = function() {};
            d.onSelectOnce = function() {};
            d.onClearQueue = function() {};
            d.id = this.element.attr("id");
            b(f).data("settings", d);
            var h = location.pathname;
            h = h.split("/");
            h.pop();
            h = h.join("/") + "/";
            var e = {};
            e.omFileUploadID = d.id;
            e.pagepath = h;
            if (d.buttonImg) {
                e.buttonImg = escape(d.buttonImg)
            }
            e.buttonText = encodeURI(b.om.lang._get(d, "omFileUpload", "buttonText"));
            if (d.rollover) {
                e.rollover = true
            }
            e.action = d.action;
            e.folder = escape(d.folder);
            var k = "";
            var l = document.cookie.split(";");
            for (var g = 0; g < l.length; g++) {
                k += "&" + l[g]
            }
            if (d.actionData) {
                for (var c in d.actionData) {
                    k += "&" + c + "=" + d.actionData[c]
                }
            }
            e.actionData = escape(encodeURI(k.substr(1)));
            e.width = d.width;
            e.height = d.height;
            e.wmode = d.wmode;
            e.method = d.method;
            e.queueSizeLimit = d.queueSizeLimit;
            e.simUploadLimit = d.simUploadLimit;
            if (d.hideButton) {
                e.hideButton = true
            }
            if (d.fileDesc) {
                e.fileDesc = d.fileDesc
            }
            if (d.fileExt) {
                e.fileExt = d.fileExt
            }
            if (d.multi) {
                e.multi = true
            }
            if (d.autoUpload) {
                e.autoUpload = true
            }
            if (d.sizeLimit) {
                e.sizeLimit = d.sizeLimit
            }
            if (d.checkScript) {
                e.checkScript = d.checkScript
            }
            if (d.fileDataName) {
                e.fileDataName = d.fileDataName
            }
            if (d.queueID) {
                e.queueID = d.queueID
            }
            if (d.onInit() !== false) {
                f.css("display", "none");
                f.after('<div id="' + f.attr("id") + 'Uploader"></div>');
                swfobject.embedSWF(d.swf, d.id + "Uploader", d.width, d.height, "9.0.24", d.expressInstall, e, {
                    quality: "high",
                    wmode: d.wmode,
                    allowScriptAccess: d.scriptAccess
                },
                {},
                function(i) {
                    if (typeof(d.onSWFReady) == "function" && i.success) {
                        d.onSWFReady()
                    }
                });
                if (d.queueID == false) {
                    b("#" + f.attr("id") + "Uploader").after('<div id="' + f.attr("id") + 'Queue" class="om-fileupload-queue"></div>')
                } else {
                    b("#" + d.queueID).addClass("om-fileupload-queue")
                }
            }
            if (typeof(d.onOpen) == "function") {
                f.bind("omFileUploadOpen", d.onOpen)
            }
            f.bind("omFileUploadSelect", {
                action: d.onSelect,
                queueID: d.queueID
            },
            function(o, i, n) {
                if (m._trigger("onSelect", o, i, n) !== false) {
                    var p = Math.round(n.size / 1024 * 100) * 0.01;
                    var q = "KB";
                    if (p > 1000) {
                        p = Math.round(p * 0.001 * 100) * 0.01;
                        q = "MB"
                    }
                    var r = p.toString().split(".");
                    if (r.length > 1) {
                        p = r[0] + "." + r[1].substr(0, 2)
                    } else {
                        p = r[0]
                    }
                    if (n.name.length > 20) {
                        fileName = n.name.substr(0, 20) + "..."
                    } else {
                        fileName = n.name
                    }
                    queue = "#" + b(this).attr("id") + "Queue";
                    if (o.data.queueID) {
                        queue = "#" + o.data.queueID
                    }
                    b(queue).append('<div id="' + b(this).attr("id") + i + '" class="om-fileupload-queueitem">                            <div class="cancel" onclick="$(\'#' + b(this).attr("id") + "').omFileUpload('cancel','" + i + '\')">                            </div>                            <span class="fileName">' + fileName + " (" + p + q + ')</span><span class="percentage"></span>                            <div class="om-fileupload-progress">                                <div id="' + b(this).attr("id") + i + 'ProgressBar" class="om-fileupload-progressbar"><!--Progress Bar--></div>                            </div>                        </div>')
                }
            });
            f.bind("omFileUploadSelectOnce", {
                action: d.onSelectOnce
            },
            function(i, n) {
                m._trigger("onSelectOnce", i, n);
                if (d.autoUpload) {
                    b(this).omFileUpload("upload")
                }
            });
            f.bind("omFileUploadQueueFull", {
                action: d.onQueueFull
            },
            function(i, n) {
                if (m._trigger("onQueueFull", i, n) !== false) {
                    alert(b.om.lang.omFileUpload.queueSizeLimitMsg + n + ".")
                }
            });
            f.bind("omFileUploadCancel", {
                action: d.onCancel
            },
            function(r, n, q, s, i, p) {
                if (m._trigger("onCancel", r, n, q, s) !== false) {
                    if (i) {
                        var o = (p == true) ? 0 : 250;
                        b("#" + b(this).attr("id") + n).fadeOut(o,
                        function() {
                            b(this).remove()
                        })
                    }
                }
            });
            f.bind("omFileUploadClearQueue", {
                action: d.onClearQueue
            },
            function(o, n) {
                var i = (d.queueID) ? d.queueID: b(this).attr("id") + "Queue";
                if (n) {
                    b("#" + i).find(".om-fileupload-queueitem").remove()
                }
                if (m._trigger("onClearQueue", o, n) !== false) {
                    b("#" + i).find(".om-fileupload-queueitem").each(function() {
                        var p = b(".om-fileupload-queueitem").index(this);
                        b(this).delay(p * 100).fadeOut(250,
                        function() {
                            b(this).remove()
                        })
                    })
                }
            });
            var j = [];
            f.bind("omFileUploadError", {
                action: d.onError
            },
            function(q, i, p, o) {
                if (m._trigger("onError", q, i, p, o) !== false) {
                    var n = new Array(i, p, o);
                    j.push(n);
                    b("#" + b(this).attr("id") + i).find(".percentage").text(" - " + o.type + " Error");
                    b("#" + b(this).attr("id") + i).find(".om-fileupload-progress").hide();
                    b("#" + b(this).attr("id") + i).addClass("om-fileupload-error")
                }
            });
            if (typeof(d.onUpload) == "function") {
                f.bind("omFileUploadUpload", d.onUpload)
            }
            f.bind("omFileUploadProgress", {
                action: d.onProgress,
                toDisplay: d.displayData
            },
            function(o, i, n, p) {
                if (m._trigger("onProgress", o, i, n, p) !== false) {
                    b("#" + b(this).attr("id") + i + "ProgressBar").animate({
                        width: p.percentage + "%"
                    },
                    250,
                    function() {
                        if (p.percentage == 100) {
                            b(this).closest(".om-fileupload-progress").fadeOut(250,
                            function() {
                                b(this).remove()
                            })
                        }
                    });
                    if (o.data.toDisplay == "percentage") {
                        displayData = " - " + p.percentage + "%"
                    }
                    if (o.data.toDisplay == "speed") {
                        displayData = " - " + p.speed + "KB/s"
                    }
                    if (o.data.toDisplay == null) {
                        displayData = " "
                    }
                    b("#" + b(this).attr("id") + i).find(".percentage").text(displayData)
                }
            });
            f.bind("omFileUploadComplete", {
                action: d.onComplete
            },
            function(p, i, o, n, q) {
                if (m._trigger("onComplete", p, i, o, unescape(n), q) !== false) {
                    b("#" + b(this).attr("id") + i).find(".percentage").text(" - Completed");
                    if (d.removeCompleted) {
                        b("#" + b(p.target).attr("id") + i).fadeOut(250,
                        function() {
                            b(this).remove()
                        })
                    }
                    b("#" + b(p.target).attr("id") + i).addClass("completed")
                }
            });
            if (typeof(d.onAllComplete) == "function") {
                f.bind("omFileUploadAllComplete", {
                    action: d.onAllComplete
                },
                function(i, n) {
                    if (m._trigger("onAllComplete", i, n) !== false) {
                        j = []
                    }
                })
            }
        }
    });
    b.om.lang.omFileUpload = {
        queueSizeLimitMsg: "鏂囦欢涓婁紶闃熷垪宸叉弧锛屾暟閲忎笉鑳借秴杩�",
        buttonText: "閫夋嫨鏂囦欢"
    }
})(jQuery); (function(a) {
    a.extend(a.fn, {
        validate: function(b) {
            if (!this.length) {
                b && b.debug && window.console && console.warn("nothing selected, can't validate, returning nothing");
                return
            }
            var c = a.data(this[0], "validator");
            if (c) {
                return c
            }
            c = new a.validator(b, this[0]);
            a.data(this[0], "validator", c);
            if (c.settings.onsubmit) {
                this.find("input, button").filter(".cancel").click(function() {
                    c.cancelSubmit = true
                });
                if (c.settings.submitHandler) {
                    this.find("input, button").filter(":submit").click(function() {
                        c.submitButton = this
                    })
                }
                this.submit(function(d) {
                    if (c.settings.debug) {
                        d.preventDefault()
                    }
                    function e() {
                        if (c.settings.submitHandler) {
                            if (c.submitButton) {
                                var f = a("<input type='hidden'/>").attr("name", c.submitButton.name).val(c.submitButton.value).appendTo(c.currentForm)
                            }
                            c.settings.submitHandler.call(c, c.currentForm);
                            if (c.submitButton) {
                                f.remove()
                            }
                            return false
                        }
                        return true
                    }
                    if (c.cancelSubmit) {
                        c.cancelSubmit = false;
                        return e()
                    }
                    if (c.form()) {
                        if (c.pendingRequest) {
                            c.formSubmitted = true;
                            return false
                        }
                        return e()
                    } else {
                        c.focusInvalid();
                        return false
                    }
                })
            }
            return c
        },
        valid: function() {
            if (a(this[0]).is("form")) {
                return this.validate().form()
            } else {
                var c = true;
                var b = a(this[0].form).validate();
                this.each(function() {
                    c &= b.element(this)
                });
                return c
            }
        },
        removeAttrs: function(d) {
            var b = {},
            c = this;
            a.each(d.split(/\s/),
            function(e, f) {
                b[f] = c.attr(f);
                c.removeAttr(f)
            });
            return b
        },
        rules: function(e, b) {
            var g = this[0];
            if (e) {
                var d = a.data(g.form, "validator").settings;
                var i = d.rules;
                var j = a.validator.staticRules(g);
                switch (e) {
                case "add":
                    a.extend(j, a.validator.normalizeRule(b));
                    i[g.name] = j;
                    if (b.messages) {
                        d.messages[g.name] = a.extend(d.messages[g.name], b.messages)
                    }
                    break;
                case "remove":
                    if (!b) {
                        delete i[g.name];
                        return j
                    }
                    var h = {};
                    a.each(b.split(/\s/),
                    function(k, l) {
                        h[l] = j[l];
                        delete j[l]
                    });
                    return h
                }
            }
            var f = a.validator.normalizeRules(a.extend({},
            a.validator.metadataRules(g), a.validator.classRules(g), a.validator.attributeRules(g), a.validator.staticRules(g)), g);
            if (f.required) {
                var c = f.required;
                delete f.required;
                f = a.extend({
                    required: c
                },
                f)
            }
            return f
        }
    });
    a.extend(a.expr[":"], {
        blank: function(b) {
            return ! a.trim("" + b.value)
        },
        filled: function(b) {
            return !! a.trim("" + b.value)
        },
        unchecked: function(b) {
            return ! b.checked
        }
    });
    a.validator = function(b, c) {
        this.settings = a.extend(true, {},
        a.validator.defaults, b);
        this.currentForm = c;
        this.init()
    };
    a.validator.format = function(b, c) {
        if (arguments.length == 1) {
            return function() {
                var d = a.makeArray(arguments);
                d.unshift(b);
                return a.validator.format.apply(this, d)
            }
        }
        if (arguments.length > 2 && c.constructor != Array) {
            c = a.makeArray(arguments).slice(1)
        }
        if (c.constructor != Array) {
            c = [c]
        }
        a.each(c,
        function(d, e) {
            b = b.replace(new RegExp("\\{" + d + "\\}", "g"), e)
        });
        return b
    };
    a.extend(a.validator, {
        defaults: {
            validateOnEmpty: false,
            messages: {},
            groups: {},
            rules: {},
            errorClass: "error",
            validClass: "valid",
            errorElement: "label",
            focusInvalid: true,
            focusCleanup: false,
            errorContainer: a([]),
            errorLabelContainer: a([]),
            onsubmit: true,
            ignore: [],
            ignoreTitle: false,
            onfocusin: function(b) {
                this.lastActive = b;
                if (this.settings.focusCleanup && !this.blockFocusCleanup) {
                    this.settings.unhighlight && this.settings.unhighlight.call(this, b, this.settings.errorClass, this.settings.validClass);
                    this.addWrapper(this.errorsFor(b)).hide()
                }
            },
            onfocusout: function(b) {
                if (this.settings.validateOnEmpty) {
                    if (!this.checkable(b) || (b.name in this.submitted)) {
                        this.element(b)
                    }
                } else {
                    if (!this.checkable(b) && (b.name in this.submitted || !this.optional(b))) {
                        this.element(b)
                    }
                }
            },
            onkeyup: function(b) {
                if (b.name in this.submitted || b == this.lastElement) {
                    this.element(b)
                }
            },
            onclick: function(b) {
                if (b.name in this.submitted) {
                    this.element(b)
                } else {
                    if (b.parentNode.name in this.submitted) {
                        this.element(b.parentNode)
                    }
                }
            },
            highlight: function(d, b, c) {
                if (d.type === "radio") {
                    this.findByName(d.name).addClass(b).removeClass(c)
                } else {
                    a(d).addClass(b).removeClass(c)
                }
            },
            unhighlight: function(d, b, c) {
                if (d.type === "radio") {
                    this.findByName(d.name).removeClass(b).addClass(c)
                } else {
                    a(d).removeClass(b).addClass(c)
                }
            }
        },
        setDefaults: function(b) {
            a.extend(a.validator.defaults, b)
        },
        messages: {
            required: "This field is required.",
            remote: "Please fix this field.",
            email: "Please enter a valid email address.",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            number: "Please enter a valid number.",
            digits: "Please enter only digits.",
            equalTo: "Please enter the same value again.",
            accept: "Please enter a value with a valid extension.",
            maxlength: a.validator.format("Please enter no more than {0} characters."),
            minlength: a.validator.format("Please enter at least {0} characters."),
            rangelength: a.validator.format("Please enter a value between {0} and {1} characters long."),
            range: a.validator.format("Please enter a value between {0} and {1}."),
            max: a.validator.format("Please enter a value less than or equal to {0}."),
            min: a.validator.format("Please enter a value greater than or equal to {0}.")
        },
        autoCreateRanges: false,
        prototype: {
            init: function() {
                this.labelContainer = a(this.settings.errorLabelContainer);
                this.errorContext = this.labelContainer.length && this.labelContainer || a(this.currentForm);
                this.containers = a(this.settings.errorContainer).add(this.settings.errorLabelContainer);
                this.submitted = {};
                this.valueCache = {};
                this.pendingRequest = 0;
                this.pending = {};
                this.invalid = {};
                this.reset();
                var b = (this.groups = {});
                a.each(this.settings.groups,
                function(e, f) {
                    a.each(f.split(/\s/),
                    function(h, g) {
                        b[g] = e
                    })
                });
                var d = this.settings.rules;
                a.each(d,
                function(e, f) {
                    d[e] = a.validator.normalizeRule(f)
                });
                function c(g) {
                    var f = a.data(this[0].form, "validator"),
                    e = "on" + g.type.replace(/^validate/, "");
                    f.settings[e] && f.settings[e].call(f, this[0])
                }
                a(this.currentForm).validateDelegate(":text, :password, :file, select, textarea", "focusin focusout keyup", c).validateDelegate(":radio, :checkbox, select, option", "click", c);
                if (this.settings.invalidHandler) {
                    a(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler)
                }
            },
            form: function() {
                this.checkForm();
                a.extend(this.submitted, this.errorMap);
                this.invalid = a.extend({},
                this.errorMap);
                if (!this.valid()) {
                    a(this.currentForm).triggerHandler("invalid-form", [this])
                }
                this.showErrors();
                return this.valid()
            },
            checkForm: function() {
                this.prepareForm();
                for (var b = 0,
                c = (this.currentElements = this.elements()); c[b]; b++) {
                    this.check(c[b])
                }
                return this.valid()
            },
            element: function(c) {
                c = this.clean(c);
                this.lastElement = c;
                this.prepareElement(c);
                this.currentElements = a(c);
                var b = this.check(c);
                if (b) {
                    delete this.invalid[c.name]
                } else {
                    this.invalid[c.name] = true
                }
                if (!this.numberOfInvalids()) {
                    this.toHide = this.toHide.add(this.containers)
                }
                this.showErrors();
                return b
            },
            showErrors: function(c) {
                if (c) {
                    a.extend(this.errorMap, c);
                    this.errorList = [];
                    for (var b in c) {
                        this.errorList.push({
                            message: c[b],
                            element: this.findByName(b)[0]
                        })
                    }
                    this.successList = a.grep(this.successList,
                    function(d) {
                        return ! (d.name in c)
                    })
                }
                this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
            },
            resetForm: function() {
                if (a.fn.resetForm) {
                    a(this.currentForm).resetForm()
                }
                this.submitted = {};
                this.prepareForm();
                this.hideErrors();
                this.elements().removeClass(this.settings.errorClass)
            },
            numberOfInvalids: function() {
                return this.objectLength(this.invalid)
            },
            objectLength: function(d) {
                var c = 0;
                for (var b in d) {
                    c++
                }
                return c
            },
            hideErrors: function() {
                this.addWrapper(this.toHide).hide()
            },
            valid: function() {
                return this.size() == 0
            },
            size: function() {
                return this.errorList.length
            },
            focusInvalid: function() {
                if (this.settings.focusInvalid) {
                    try {
                        a(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin")
                    } catch(b) {}
                }
            },
            findLastActive: function() {
                var b = this.lastActive;
                return b && a.grep(this.errorList,
                function(c) {
                    return c.element.name == b.name
                }).length == 1 && b
            },
            elements: function() {
                var c = this,
                b = {};
                return a(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function() { ! this.name && c.settings.debug && window.console && console.error("%o has no name assigned", this);
                    if (this.name in b || !c.objectLength(a(this).rules())) {
                        return false
                    }
                    b[this.name] = true;
                    return true
                })
            },
            clean: function(b) {
                return a(b)[0]
            },
            errors: function() {
                return a(this.settings.errorElement + "." + this.settings.errorClass, this.errorContext)
            },
            reset: function() {
                this.successList = [];
                this.errorList = [];
                this.errorMap = {};
                this.toShow = a([]);
                this.toHide = a([]);
                this.currentElements = a([])
            },
            prepareForm: function() {
                this.reset();
                this.toHide = this.errors().add(this.containers)
            },
            prepareElement: function(b) {
                this.reset();
                this.toHide = this.errorsFor(b)
            },
            check: function(c) {
                c = this.clean(c);
                if (this.checkable(c)) {
                    c = this.findByName(c.name).not(this.settings.ignore)[0]
                }
                var h = a(c).rules();
                var d = false;
                for (var i in h) {
                    var g = {
                        method: i,
                        parameters: h[i]
                    };
                    try {
                        var b = a.validator.methods[i].call(this, c.value.replace(/\r/g, ""), c, g.parameters);
                        if (b == "dependency-mismatch") {
                            d = true;
                            continue
                        }
                        d = false;
                        if (b == "pending") {
                            this.toHide = this.toHide.not(this.errorsFor(c));
                            return
                        }
                        if (!b) {
                            this.formatAndAdd(c, g);
                            return false
                        }
                    } catch(f) {
                        this.settings.debug && window.console && console.log("exception occured when checking element " + c.id + ", check the '" + g.method + "' method", f);
                        throw f
                    }
                }
                if (d) {
                    return
                }
                if (this.objectLength(h)) {
                    this.successList.push(c)
                }
                return true
            },
            customMetaMessage: function(b, d) {
                if (!a.metadata) {
                    return
                }
                var c = this.settings.meta ? a(b).metadata()[this.settings.meta] : a(b).metadata();
                return c && c.messages && c.messages[d]
            },
            customMessage: function(c, d) {
                var b = this.settings.messages[c];
                return b && (b.constructor == String ? b: b[d])
            },
            findDefined: function() {
                for (var b = 0; b < arguments.length; b++) {
                    if (arguments[b] !== undefined) {
                        return arguments[b]
                    }
                }
                return undefined
            },
            defaultMessage: function(b, c) {
                return this.findDefined(this.customMessage(b.name, c), this.customMetaMessage(b, c), !this.settings.ignoreTitle && b.title || undefined, a.validator.messages[c], "<strong>Warning: No message defined for " + b.name + "</strong>")
            },
            formatAndAdd: function(c, e) {
                var d = this.defaultMessage(c, e.method),
                b = /\$?\{(\d+)\}/g;
                if (typeof d == "function") {
                    d = d.call(this, e.parameters, c)
                } else {
                    if (b.test(d)) {
                        d = jQuery.format(d.replace(b, "{$1}"), e.parameters)
                    }
                }
                this.errorList.push({
                    message: d,
                    element: c
                });
                this.errorMap[c.name] = d;
                this.submitted[c.name] = d
            },
            addWrapper: function(b) {
                if (this.settings.wrapper) {
                    b = b.add(b.parent(this.settings.wrapper))
                }
                return b
            },
            defaultShowErrors: function() {
                for (var c = 0; this.errorList[c]; c++) {
                    var b = this.errorList[c];
                    this.settings.highlight && this.settings.highlight.call(this, b.element, this.settings.errorClass, this.settings.validClass);
                    this.showLabel(b.element, b.message)
                }
                if (this.errorList.length) {
                    this.toShow = this.toShow.add(this.containers)
                }
                if (this.settings.success) {
                    for (var c = 0; this.successList[c]; c++) {
                        this.showLabel(this.successList[c])
                    }
                }
                if (this.settings.unhighlight) {
                    for (var c = 0,
                    d = this.validElements(); d[c]; c++) {
                        this.settings.unhighlight.call(this, d[c], this.settings.errorClass, this.settings.validClass)
                    }
                }
                this.toHide = this.toHide.not(this.toShow);
                this.hideErrors();
                this.addWrapper(this.toShow).show()
            },
            validElements: function() {
                return this.currentElements.not(this.invalidElements())
            },
            invalidElements: function() {
                return a(this.errorList).map(function() {
                    return this.element
                })
            },
            showLabel: function(c, d) {
                var b = this.errorsFor(c);
                if (b.length) {
                    b.removeClass().addClass(this.settings.errorClass);
                    b.attr("generated") && b.html(d)
                } else {
                    b = a("<" + this.settings.errorElement + "/>").attr({
                        "for": this.idOrName(c),
                        generated: true
                    }).addClass(this.settings.errorClass).html(d || "");
                    if (this.settings.wrapper) {
                        b = b.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()
                    }
                    if (!this.labelContainer.append(b).length) {
                        this.settings.errorPlacement ? this.settings.errorPlacement(b, a(c)) : b.insertAfter(c)
                    }
                }
                if (!d && this.settings.success) {
                    b.text("");
                    typeof this.settings.success == "string" ? b.addClass(this.settings.success) : this.settings.success(b)
                }
                this.toShow = this.toShow.add(b)
            },
            errorsFor: function(c) {
                var b = this.idOrName(c);
                return this.errors().filter(function() {
                    return a(this).attr("for") == b
                })
            },
            idOrName: function(b) {
                return this.groups[b.name] || (this.checkable(b) ? b.name: b.id || b.name)
            },
            checkable: function(b) {
                return /radio|checkbox/i.test(b.type)
            },
            findByName: function(b) {
                var c = this.currentForm;
                return a(document.getElementsByName(b)).map(function(d, e) {
                    return e.form == c && e.name == b && e || null
                })
            },
            getLength: function(c, b) {
                switch (b.nodeName.toLowerCase()) {
                case "select":
                    return a("option:selected", b).length;
                case "input":
                    if (this.checkable(b)) {
                        return this.findByName(b.name).filter(":checked").length
                    }
                }
                return c.length
            },
            depend: function(c, b) {
                return this.dependTypes[typeof c] ? this.dependTypes[typeof c](c, b) : true
            },
            dependTypes: {
                "boolean": function(c, b) {
                    return c
                },
                string: function(c, b) {
                    return !! a(c, b.form).length
                },
                "function": function(c, b) {
                    return c(b)
                }
            },
            optional: function(b) {
                return ! a.validator.methods.required.call(this, a.trim(b.value), b) && "dependency-mismatch"
            },
            startRequest: function(b) {
                if (!this.pending[b.name]) {
                    this.pendingRequest++;
                    this.pending[b.name] = true
                }
            },
            stopRequest: function(b, c) {
                this.pendingRequest--;
                if (this.pendingRequest < 0) {
                    this.pendingRequest = 0
                }
                delete this.pending[b.name];
                if (c && this.pendingRequest == 0 && this.formSubmitted && this.form()) {
                    a(this.currentForm).submit();
                    this.formSubmitted = false
                } else {
                    if (!c && this.pendingRequest == 0 && this.formSubmitted) {
                        a(this.currentForm).triggerHandler("invalid-form", [this]);
                        this.formSubmitted = false
                    }
                }
            },
            previousValue: function(b) {
                return a.data(b, "previousValue") || a.data(b, "previousValue", {
                    old: null,
                    valid: true,
                    message: this.defaultMessage(b, "remote")
                })
            }
        },
        classRuleSettings: {
            required: {
                required: true
            },
            email: {
                email: true
            },
            url: {
                url: true
            },
            date: {
                date: true
            },
            number: {
                number: true
            },
            digits: {
                digits: true
            },
            creditcard: {
                creditcard: true
            }
        },
        addClassRules: function(b, c) {
            b.constructor == String ? this.classRuleSettings[b] = c: a.extend(this.classRuleSettings, b)
        },
        classRules: function(c) {
            var d = {};
            var b = a(c).attr("class");
            b && a.each(b.split(" "),
            function() {
                if (this in a.validator.classRuleSettings) {
                    a.extend(d, a.validator.classRuleSettings[this])
                }
            });
            return d
        },
        attributeRules: function(c) {
            var e = {};
            var b = a(c);
            for (var f in a.validator.methods) {
                var d = b.attr(f);
                if (d) {
                    e[f] = d
                }
            }
            if (e.maxlength && /-1|2147483647|524288/.test(e.maxlength)) {
                delete e.maxlength
            }
            return e
        },
        metadataRules: function(b) {
            if (!a.metadata) {
                return {}
            }
            var c = a.data(b.form, "validator").settings.meta;
            return c ? a(b).metadata()[c] : a(b).metadata()
        },
        staticRules: function(c) {
            var d = {};
            var b = a.data(c.form, "validator");
            if (b.settings.rules) {
                d = a.validator.normalizeRule(b.settings.rules[c.name]) || {}
            }
            return d
        },
        normalizeRules: function(c, b) {
            a.each(c,
            function(f, e) {
                if (e === false) {
                    delete c[f];
                    return
                }
                if (e.param || e.depends) {
                    var d = true;
                    switch (typeof e.depends) {
                    case "string":
                        d = !!a(e.depends, b.form).length;
                        break;
                    case "function":
                        d = e.depends.call(b, b);
                        break
                    }
                    if (d) {
                        c[f] = e.param !== undefined ? e.param: true
                    } else {
                        delete c[f]
                    }
                }
            });
            a.each(c,
            function(d, e) {
                c[d] = a.isFunction(e) ? e(b) : e
            });
            a.each(["minlength", "maxlength", "min", "max"],
            function() {
                if (c[this]) {
                    c[this] = Number(c[this])
                }
            });
            a.each(["rangelength", "range"],
            function() {
                if (c[this]) {
                    c[this] = [Number(c[this][0]), Number(c[this][1])]
                }
            });
            if (a.validator.autoCreateRanges) {
                if (c.min && c.max) {
                    c.range = [c.min, c.max];
                    delete c.min;
                    delete c.max
                }
                if (c.minlength && c.maxlength) {
                    c.rangelength = [c.minlength, c.maxlength];
                    delete c.minlength;
                    delete c.maxlength
                }
            }
            if (c.messages) {
                delete c.messages
            }
            return c
        },
        normalizeRule: function(c) {
            if (typeof c == "string") {
                var b = {};
                a.each(c.split(/\s/),
                function() {
                    b[this] = true
                });
                c = b
            }
            return c
        },
        addMethod: function(b, d, c) {
            a.validator.methods[b] = d;
            a.validator.messages[b] = c != undefined ? c: a.validator.messages[b];
            if (d.length < 3) {
                a.validator.addClassRules(b, a.validator.normalizeRule(b))
            }
        },
        methods: {
            required: function(c, b, e) {
                if (!this.depend(e, b)) {
                    return "dependency-mismatch"
                }
                switch (b.nodeName.toLowerCase()) {
                case "select":
                    var d = a(b).val();
                    return d && d.length > 0;
                case "input":
                    if (this.checkable(b)) {
                        return this.getLength(c, b) > 0
                    }
                default:
                    return a.trim(c).length > 0
                }
            },
            remote: function(f, c, g) {
                if (this.optional(c)) {
                    return "dependency-mismatch"
                }
                var d = this.previousValue(c);
                if (!this.settings.messages[c.name]) {
                    this.settings.messages[c.name] = {}
                }
                d.originalMessage = this.settings.messages[c.name].remote;
                this.settings.messages[c.name].remote = d.message;
                g = typeof g == "string" && {
                    url: g
                } || g;
                if (this.pending[c.name]) {
                    return "pending"
                }
                if (d.old === f) {
                    return d.valid
                }
                d.old = f;
                var b = this;
                this.startRequest(c);
                var e = {};
                e[c.name] = f;
                a.ajax(a.extend(true, {
                    url: g,
                    mode: "abort",
                    port: "validate" + c.name,
                    dataType: "json",
                    data: e,
                    success: function(i) {
                        b.settings.messages[c.name].remote = d.originalMessage;
                        var k = i === true;
                        if (k) {
                            var h = b.formSubmitted;
                            b.prepareElement(c);
                            b.formSubmitted = h;
                            b.successList.push(c);
                            b.showErrors()
                        } else {
                            var l = {};
                            var j = i || b.defaultMessage(c, "remote");
                            l[c.name] = d.message = a.isFunction(j) ? j(f) : j;
                            b.showErrors(l)
                        }
                        d.valid = k;
                        b.stopRequest(c, k)
                    }
                },
                g));
                return "pending"
            },
            minlength: function(c, b, d) {
                return this.optional(b) || this.getLength(a.trim(c), b) >= d
            },
            maxlength: function(c, b, d) {
                return this.optional(b) || this.getLength(a.trim(c), b) <= d
            },
            rangelength: function(d, b, e) {
                var c = this.getLength(a.trim(d), b);
                return this.optional(b) || (c >= e[0] && c <= e[1])
            },
            min: function(c, b, d) {
                return this.optional(b) || c >= d
            },
            max: function(c, b, d) {
                return this.optional(b) || c <= d
            },
            range: function(c, b, d) {
                return this.optional(b) || (c >= d[0] && c <= d[1])
            },
            email: function(c, b) {
                return this.optional(b) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(c)
            },
            url: function(c, b) {
                return this.optional(b) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(c)
            },
            date: function(c, b) {
                return this.optional(b) || !/Invalid|NaN/.test(new Date(Date.parse(c.replace(/-/g, "/"))))
            },
            number: function(c, b) {
                return this.optional(b) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(c)
            },
            digits: function(c, b) {
                return this.optional(b) || /^\d+$/.test(c)
            },
            accept: function(c, b, d) {
                d = typeof d == "string" ? d.replace(/,/g, "|") : "png|jpe?g|gif";
                return this.optional(b) || c.match(new RegExp(".(" + d + ")$", "i"))
            },
            equalTo: function(c, b, e) {
                var d = a(e).unbind(".validate-equalTo").bind("blur.validate-equalTo",
                function() {
                    a(b).valid()
                });
                return c == d.val()
            }
        }
    });
    a.format = a.validator.format
})(jQuery); (function(c) {
    var a = {};
    if (c.ajaxPrefilter) {
        c.ajaxPrefilter(function(f, e, g) {
            var d = f.port;
            if (f.mode == "abort") {
                if (a[d]) {
                    a[d].abort()
                }
                a[d] = g
            }
        })
    } else {
        var b = c.ajax;
        c.ajax = function(e) {
            var f = ("mode" in e ? e: c.ajaxSettings).mode,
            d = ("port" in e ? e: c.ajaxSettings).port;
            if (f == "abort") {
                if (a[d]) {
                    a[d].abort()
                }
                return (a[d] = b.apply(this, arguments))
            }
            return b.apply(this, arguments)
        }
    }
})(jQuery); (function(a) {
    if (!jQuery.event.special.focusin && !jQuery.event.special.focusout && document.addEventListener) {
        a.each({
            focus: "focusin",
            blur: "focusout"
        },
        function(c, b) {
            a.event.special[b] = {
                setup: function() {
                    this.addEventListener(c, d, true)
                },
                teardown: function() {
                    this.removeEventListener(c, d, true)
                },
                handler: function(f) {
                    arguments[0] = a.event.fix(f);
                    arguments[0].type = b;
                    return a.event.handle.apply(this, arguments)
                }
            };
            function d(f) {
                f = a.event.fix(f);
                f.type = b;
                return a.event.handle.call(this, f)
            }
        })
    }
    a.extend(a.fn, {
        validateDelegate: function(d, c, b) {
            return this.bind(c,
            function(e) {
                var f = a(e.target);
                if (f.is(d)) {
                    return b.apply(f, arguments)
                }
            })
        }
    })
})(jQuery);