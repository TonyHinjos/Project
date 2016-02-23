/*
 * NguvuSlider v1.1.0
 * Contributing author: Mama Apima
 */
;
!function () {
    function t(t) {
        return void 0 !== t
    }

    function e() {
    }

    function i(t) {
        t.kb = function () {
            return t.Gf ? t.Gf : t.Gf = new t
        }
    }

    function n(t) {
        var e = typeof t;
        if ("object" == e) {
            if (!t)return "null";
            if (t instanceof Array)return "array";
            if (t instanceof Object)return e;
            var i = Object.prototype.toString.call(t);
            if ("[object Window]" == i)return "object";
            if ("[object Array]" == i || "number" == typeof t.length && "undefined" != typeof t.splice && "undefined" != typeof t.propertyIsEnumerable && !t.propertyIsEnumerable("splice"))return "array";
            if ("[object Function]" == i || "undefined" != typeof t.call && "undefined" != typeof t.propertyIsEnumerable && !t.propertyIsEnumerable("call"))return "function"
        } else if ("function" == e && "undefined" == typeof t.call)return "object";
        return e
    }

    function s(t) {
        return "array" == n(t)
    }

    function h(t) {
        var e = n(t);
        return "array" == e || "object" == e && "number" == typeof t.length
    }

    function r(t) {
        return "string" == typeof t
    }

    function o(t) {
        return "number" == typeof t
    }

    function a(t) {
        return "function" == n(t)
    }

    function c(t) {
        var e = typeof t;
        return "object" == e && null != t || "function" == e
    }

    function l(t) {
        return t[ah] || (t[ah] = ++ch)
    }

    function u(t) {
        return t.call.apply(t.bind, arguments)
    }

    function f(t, e) {
        if (!t)throw Error();
        if (2 < arguments.length) {
            var i = Array.prototype.slice.call(arguments, 2);
            return function () {
                var n = Array.prototype.slice.call(arguments);
                return Array.prototype.unshift.apply(n, i), t.apply(e, n)
            }
        }
        return function () {
            return t.apply(e, arguments)
        }
    }

    function d() {
        return d = Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? u : f, d.apply(null, arguments)
    }

    function p(t) {
        var e = Array.prototype.slice.call(arguments, 1);
        return function () {
            var i = e.slice();
            return i.push.apply(i, arguments), t.apply(this, i)
        }
    }

    function g(e, i) {
        var n = e.split("."), s = oh;
        n[0]in s || !s.execScript || s.execScript("var " + n[0]);
        for (var h; n.length && (h = n.shift());)!n.length && t(i) ? s[h] = i : s = s[h] ? s[h] : s[h] = {}
    }

    function b(t, e) {
        function i() {
        }

        i.prototype = e.prototype, t.c = e.prototype, t.prototype = new i, t.prototype.constructor = t, t.Ni = function (t, i) {
            for (var n = Array(arguments.length - 2), s = 2; s < arguments.length; s++)n[s - 2] = arguments[s];
            return e.prototype[i].apply(t, n)
        }
    }

    function v(t) {
        if (Error.captureStackTrace)Error.captureStackTrace(this, v); else {
            var e = Error().stack;
            e && (this.stack = e)
        }
        t && (this.message = String(t))
    }

    function y(t) {
        for (var e = t.split("%s"), i = "", n = Array.prototype.slice.call(arguments, 1); n.length && 1 < e.length;)i += e.shift() + n.shift();
        return i + e.join("%s")
    }

    function m(t) {
        return decodeURIComponent(t.replace(/\+/g, " "))
    }

    function w(t) {
        return mh.test(t) ? (-1 != t.indexOf("&") && (t = t.replace(dh, "&amp;")), -1 != t.indexOf("<") && (t = t.replace(ph, "&lt;")), -1 != t.indexOf(">") && (t = t.replace(gh, "&gt;")), -1 != t.indexOf('"') && (t = t.replace(bh, "&quot;")), -1 != t.indexOf("'") && (t = t.replace(vh, "&#39;")), -1 != t.indexOf("\x00") && (t = t.replace(yh, "&#0;")), t) : t
    }

    function x(t, e) {
        return e > t ? -1 : t > e ? 1 : 0
    }

    function S(t) {
        return String(t).replace(/\-([a-z])/g, function (t, e) {
            return e.toUpperCase()
        })
    }

    function E(t) {
        return String(t).replace(/([A-Z])/g, "-$1").toLowerCase()
    }

    function C(t) {
        var e = r(void 0) ? "undefined".replace(/([-()\[\]{}+?*.$\^|,:#<!\\])/g, "\\$1").replace(/\x08/g, "\\x08") : "\\s";
        return t.replace(new RegExp("(^" + (e ? "|[" + e + "]+" : "") + ")([a-z])", "g"), function (t, e, i) {
            return e + i.toUpperCase()
        })
    }

    function T(t, e) {
        e.unshift(t), v.call(this, y.apply(null, e)), e.shift()
    }

    function N(t) {
        throw new T("Failure" + (t ? ": " + t : ""), Array.prototype.slice.call(arguments, 1))
    }

    function M(t, e) {
        return 0 <= Sh(t, e)
    }

    function A(t, e) {
        var i, n = Sh(t, e);
        return (i = n >= 0) && xh.splice.call(t, n, 1), i
    }

    function I() {
        return xh.concat.apply(xh, arguments)
    }

    function k(t) {
        var e = t.length;
        if (e > 0) {
            for (var i = Array(e), n = 0; e > n; n++)i[n] = t[n];
            return i
        }
        return []
    }

    function L(t) {
        xh.splice.apply(t, D(arguments, 1))
    }

    function D(t, e, i) {
        return 2 >= arguments.length ? xh.slice.call(t, e) : xh.slice.call(t, e, i)
    }

    function P(t) {
        return -1 != wh.indexOf(t)
    }

    function j(t, e, i) {
        for (var n in t)e.call(i, t[n], n, t)
    }

    function O(t, e) {
        for (var i in t)if (e.call(void 0, t[i], i, t))return !0;
        return !1
    }

    function B(t) {
        var e, i = [], n = 0;
        for (e in t)i[n++] = t[e];
        return i
    }

    function R(t) {
        var e, i = [], n = 0;
        for (e in t)i[n++] = e;
        return i
    }

    function F(t) {
        for (var e in t)return !1;
        return !0
    }

    function H(t, e) {
        e in t && delete t[e]
    }

    function Y(t, e, i) {
        if (e in t)throw Error('The object already contains the key "' + e + '"');
        t[e] = i
    }

    function X(t, e, i) {
        return e in t ? t[e] : i
    }

    function K(t) {
        for (var e, i, n = 1; n < arguments.length; n++) {
            i = arguments[n];
            for (e in i)t[e] = i[e];
            for (var s = 0; s < Mh.length; s++)e = Mh[s], Object.prototype.hasOwnProperty.call(i, e) && (t[e] = i[e])
        }
    }

    function U() {
        var t = arguments.length;
        if (1 == t && s(arguments[0]))return U.apply(null, arguments[0]);
        for (var e = {}, i = 0; t > i; i++)e[arguments[i]] = !0;
        return e
    }

    function W() {
        return P("Opera") || P("OPR")
    }

    function z() {
        return (P("Chrome") || P("CriOS")) && !W() && !P("Edge")
    }

    function V() {
        var t = wh;
        return Lh ? /rv\:([^\);]+)(\)|;)/.exec(t) : kh ? /Edge\/([\d\.]+)/.exec(t) : Ih ? /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(t) : Dh ? /WebKit\/(\S+)/.exec(t) : void 0
    }

    function G() {
        var t = oh.document;
        return t ? t.documentMode : void 0
    }

    function $(t) {
        var e;
        if (!(e = Bh[t])) {
            e = 0;
            for (var i = fh(String(Oh)).split("."), n = fh(String(t)).split("."), s = Math.max(i.length, n.length), h = 0; 0 == e && s > h; h++) {
                var r = i[h] || "", o = n[h] || "", a = RegExp("(\\d*)(\\D*)", "g"), c = RegExp("(\\d*)(\\D*)", "g");
                do {
                    var l = a.exec(r) || ["", "", ""], u = c.exec(o) || ["", "", ""];
                    if (0 == l[0].length && 0 == u[0].length)break;
                    e = x(0 == l[1].length ? 0 : parseInt(l[1], 10), 0 == u[1].length ? 0 : parseInt(u[1], 10)) || x(0 == l[2].length, 0 == u[2].length) || x(l[2], u[2])
                } while (0 == e)
            }
            e = Bh[t] = e >= 0
        }
        return e
    }

    function J() {
        0 != Kh && (Uh[l(this)] = this), this.Ya = this.Ya, this.ob = this.ob
    }

    function Z(e, i) {
        e.Ya ? i.call(void 0) : (e.ob || (e.ob = []), e.ob.push(t(void 0) ? d(i, void 0) : i))
    }

    function q(t) {
        t && "function" == typeof t.ya && t.ya()
    }

    function _(t, e) {
        this.type = t, this.currentTarget = this.target = e, this.defaultPrevented = this.qb = !1, this.pg = !0
    }

    function Q(t) {
        t.preventDefault()
    }

    function te(t) {
        return te[" "](t), t
    }

    function ee(t, e) {
        _.call(this, t ? t.type : ""), this.relatedTarget = this.currentTarget = this.target = null, this.charCode = this.keyCode = this.button = this.screenY = this.screenX = this.clientY = this.clientX = this.offsetY = this.offsetX = 0, this.metaKey = this.shiftKey = this.altKey = this.ctrlKey = !1, this.H = this.state = null, t && this.Pa(t, e)
    }

    function ie(t) {
        return Hh ? 0 == t.H.button : "click" == t.type ? !0 : !!(t.H.button & Wh[0])
    }

    function ne(t) {
        return !(!t || !t[zh])
    }

    function se(t, e, i, n, s) {
        this.listener = t, this.ed = null, this.src = e, this.type = i, this.Yb = !!n, this.Nc = s, this.key = ++Vh, this.Nb = this.Dc = !1
    }

    function he(t) {
        t.Nb = !0, t.listener = null, t.ed = null, t.src = null, t.Nc = null
    }

    function re(t) {
        this.src = t, this.M = {}, this.xc = 0
    }

    function oe(t, e) {
        var i = e.type;
        i in t.M && A(t.M[i], e) && (he(e), 0 == t.M[i].length && (delete t.M[i], t.xc--))
    }

    function ae(t, e, i, n) {
        for (var s = 0; s < t.length; ++s) {
            var h = t[s];
            if (!h.Nb && h.listener == e && h.Yb == !!i && h.Nc == n)return s
        }
        return -1
    }

    function ce(t, e, i, n, h) {
        if (s(e)) {
            for (var r = 0; r < e.length; r++)ce(t, e[r], i, n, h);
            return null
        }
        return i = we(i), ne(t) ? t.l(e, i, n, h) : le(t, e, i, !1, n, h)
    }

    function le(t, e, i, n, s, h) {
        if (!e)throw Error("Invalid event type");
        var r = !!s, o = me(t);
        if (o || (t[Gh] = o = new re(t)), i = o.add(e, i, n, s, h), i.ed)return i;
        if (n = ue(), i.ed = n, n.src = t, n.listener = i, t.addEventListener)t.addEventListener(e.toString(), n, r); else {
            if (!t.attachEvent)throw Error("addEventListener and attachEvent are unavailable.");
            t.attachEvent(ge(e.toString()), n)
        }
        return Jh++, i
    }

    function ue() {
        var t = ye, e = Yh ? function (i) {
            return t.call(e.src, e.listener, i)
        } : function (i) {
            return i = t.call(e.src, e.listener, i), i ? void 0 : i
        };
        return e
    }

    function fe(t, e, i, n, h) {
        if (s(e)) {
            for (var r = 0; r < e.length; r++)fe(t, e[r], i, n, h);
            return null
        }
        return i = we(i), ne(t) ? t.Pf(e, i, n, h) : le(t, e, i, !0, n, h)
    }

    function de(t, e, i, n, h) {
        if (s(e))for (var r = 0; r < e.length; r++)de(t, e[r], i, n, h); else i = we(i), ne(t) ? t.sb(e, i, n, h) : t && (t = me(t)) && (e = t.ec(e, i, !!n, h)) && pe(e)
    }

    function pe(t) {
        if (!o(t) && t && !t.Nb) {
            var e = t.src;
            if (ne(e))oe(e.za, t); else {
                var i = t.type, n = t.ed;
                e.removeEventListener ? e.removeEventListener(i, n, t.Yb) : e.detachEvent && e.detachEvent(ge(i), n), Jh--, (i = me(e)) ? (oe(i, t), 0 == i.xc && (i.src = null, e[Gh] = null)) : he(t)
            }
        }
    }

    function ge(t) {
        return t in $h ? $h[t] : $h[t] = "on" + t
    }

    function be(t, e, i, n) {
        var s = !0;
        if ((t = me(t)) && (e = t.M[e.toString()]))for (e = e.concat(), t = 0; t < e.length; t++) {
            var h = e[t];
            h && h.Yb == i && !h.Nb && (h = ve(h, n), s = s && !1 !== h)
        }
        return s
    }

    function ve(t, e) {
        var i = t.listener, n = t.Nc || t.src;
        return t.Dc && pe(t), i.call(n, e)
    }

    function ye(t, e) {
        if (t.Nb)return !0;
        if (!Yh) {
            var i;
            if (!(i = e))t:{
                i = ["window", "event"];
                for (var n, s = oh; n = i.shift();) {
                    if (null == s[n]) {
                        i = null;
                        break t
                    }
                    s = s[n]
                }
                i = s
            }
            if (n = i, i = new ee(n, this), s = !0, !(0 > n.keyCode || void 0 != n.returnValue)) {
                t:{
                    var h = !1;
                    if (0 == n.keyCode)try {
                        n.keyCode = -1;
                        break t
                    } catch (r) {
                        h = !0
                    }
                    (h || void 0 == n.returnValue) && (n.returnValue = !0)
                }
                for (n = [], h = i.currentTarget; h; h = h.parentNode)n.push(h);
                for (var h = t.type, o = n.length - 1; !i.qb && o >= 0; o--) {
                    i.currentTarget = n[o];
                    var a = be(n[o], h, !0, i), s = s && a
                }
                for (o = 0; !i.qb && o < n.length; o++)i.currentTarget = n[o], a = be(n[o], h, !1, i), s = s && a
            }
            return s
        }
        return ve(t, new ee(e, this))
    }

    function me(t) {
        return t = t[Gh], t instanceof re ? t : null
    }

    function we(t) {
        return a(t) ? t : (t[Zh] || (t[Zh] = function (e) {
            return t.handleEvent(e)
        }), t[Zh])
    }

    function xe() {
        this.kd = "", this.Wg = er
    }

    function Se(t) {
        return t instanceof xe && t.constructor === xe && t.Wg === er ? t.kd : (N("expected object of type Const, got '" + t + "'"), "type_error:Const")
    }

    function Ee(t) {
        var e = new xe;
        return e.kd = t, e
    }

    function Ce() {
        this.cd = "", this.Ug = ir
    }

    function Te(t) {
        return t instanceof Ce && t.constructor === Ce && t.Ug === ir ? t.cd : (N("expected object of type SafeStyle, got '" + t + "'"), "type_error:SafeStyle")
    }

    function Ne() {
        this.Ta = "", this.Vg = ar
    }

    function Me(t) {
        return t instanceof Ne && t.constructor === Ne && t.Vg === ar ? t.Ta : (N("expected object of type SafeUrl, got '" + t + "'"), "type_error:SafeUrl")
    }

    function Ae(t) {
        if (t instanceof Ne)return t;
        t = t.mb ? t.La() : String(t), t = hr.test(t) ? Ie(t) : "about:invalid#zClosurez";
        var e = new Ne;
        return e.Ta = t, e
    }

    function Ie(t) {
        try {
            var e = encodeURI(t)
        } catch (i) {
            return "about:invalid#zClosurez"
        }
        return e.replace(rr, function (t) {
            return or[t]
        })
    }

    function ke() {
        this.dd = "", this.Yg = cr
    }

    function Le(t) {
        return t instanceof ke && t.constructor === ke && t.Yg === cr ? t.dd : (N("expected object of type TrustedResourceUrl, got '" + t + "'"), "type_error:TrustedResourceUrl")
    }

    function De(t) {
        var e = new ke;
        return e.dd = t, e
    }

    function Pe() {
        this.Ta = "", this.Tg = dr, this.Te = null
    }

    function je(t) {
        return t instanceof Pe && t.constructor === Pe && t.Tg === dr ? t.Ta : (N("expected object of type SafeHtml, got '" + t + "'"), "type_error:SafeHtml")
    }

    function Oe(t, e, i) {
        if (!lr.test(t))throw Error("Invalid tag name <" + t + ">.");
        if (t.toUpperCase()in fr)throw Error("Tag name <" + t + "> is not allowed for SafeHtml.");
        return Fe(t, e, i)
    }

    function Be() {
        function t(n) {
            if (s(n))Eh(n, t); else {
                if (!(n instanceof Pe)) {
                    var h = null;
                    n.Zd && (h = n.dc()), n = Re(w(n.mb ? n.La() : String(n)), h)
                }
                i += je(n), n = n.dc(), 0 == e ? e = n : 0 != n && e != n && (e = null)
            }
        }

        var e = 0, i = "";
        return Eh(arguments, t), Re(i, e)
    }

    function Re(t, e) {
        return (new Pe).Db(t, e)
    }

    function Fe(t, e, i) {
        var n = null, h = "<" + t;
        if (e)for (var r in e) {
            if (!lr.test(r))throw Error('Invalid attribute name "' + r + '".');
            var o = e[r];
            if (null != o) {
                var a, l = t;
                if (a = r, o instanceof xe)o = Se(o); else if ("style" == a.toLowerCase()) {
                    if (!c(o))throw Error('The "style" attribute requires goog.html.SafeStyle or map of style properties, ' + typeof o + " given: " + o);
                    if (!(o instanceof Ce)) {
                        var l = "", u = void 0;
                        for (u in o) {
                            if (!/^[-_a-zA-Z0-9]+$/.test(u))throw Error("Name allows only [-_a-zA-Z0-9], got: " + u);
                            var f = o[u];
                            if (null != f) {
                                if (f instanceof xe)f = Se(f); else if (sr.test(f)) {
                                    for (var d = !0, p = !0, g = 0; g < f.length; g++) {
                                        var b = f.charAt(g);
                                        "'" == b && p ? d = !d : '"' == b && d && (p = !p)
                                    }
                                    d && p || (N("String value requires balanced quotes, got: " + f), f = "zClosurez")
                                } else N("String value allows only [-,.\"'%_!# a-zA-Z0-9], got: " + f), f = "zClosurez";
                                l += u + ":" + f + ";"
                            }
                        }
                        o = l ? (new Ce).Db(l) : nr
                    }
                    o = Te(o)
                } else {
                    if (/^on/i.test(a))throw Error('Attribute "' + a + '" requires goog.string.Const value, "' + o + '" given.');
                    if (a.toLowerCase()in ur)if (o instanceof ke)o = Le(o); else {
                        if (!(o instanceof Ne))throw Error('Attribute "' + a + '" on tag "' + l + '" requires goog.html.SafeUrl or goog.string.Const value, "' + o + '" given.');
                        o = Me(o)
                    }
                }
                o.mb && (o = o.La()), a = a + '="' + w(String(o)) + '"', h += " " + a
            }
        }
        return null != i ? s(i) || (i = [i]) : i = [], uh.md.Jh(t.toLowerCase()) ? h += ">" : (n = Be(i), h += ">" + je(n) + "</" + t + ">", n = n.dc()), (t = e && e.dir) && (n = /^(ltr|rtl|auto)$/i.test(t) ? 0 : null), Re(h, n)
    }

    function He(e, i) {
        this.x = t(e) ? e : 0, this.y = t(i) ? i : 0
    }

    function Ye(t, e) {
        this.width = t, this.height = e
    }

    function Xe(t) {
        this.u = t || oh.document || document
    }

    function Ke(t) {
        J.call(this), this.ga = t, this.v = {}
    }

    function Ue(t, e, i, n, h, r) {
        if (s(i))for (var o = 0; o < i.length; o++)Ue(t, e, i[o], n, h, r); else {
            if (e = fe(e, i, n || t.handleEvent, h, r || t.ga || t), !e)return t;
            t.v[e.key] = e
        }
        return t
    }

    function We() {
        J.call(this), this.za = new re(this), this.$g = this, this.Jb = null
    }

    function ze(t, e, i, n) {
        if (e = t.za.M[String(e)], !e)return !0;
        e = e.concat();
        for (var s = !0, h = 0; h < e.length; ++h) {
            var r = e[h];
            if (r && !r.Nb && r.Yb == i) {
                var o = r.listener, a = r.Nc || r.src;
                r.Dc && oe(t.za, r), s = !1 !== o.call(a, n) && s
            }
        }
        return s && 0 != n.pg
    }

    function Ve(t, e, i, n) {
        this.top = t, this.right = e, this.bottom = i, this.left = n
    }

    function Ge(t, e, i, n) {
        this.left = t, this.top = e, this.width = i, this.height = n
    }

    function $e(t, e, i) {
        if (r(e))(e = Je(t, e)) && (t.style[e] = i); else for (var n in e) {
            i = t;
            var s = e[n], h = Je(i, n);
            h && (i.style[h] = s)
        }
    }

    function Je(t, e) {
        var i = vr[e];
        if (!i) {
            var n = S(e), i = n;
            void 0 === t.style[n] && (n = uh.vendor.Rd() + C(n), void 0 !== t.style[n] && (i = n)), vr[e] = i
        }
        return i
    }

    function Ze(t, e) {
        var i = uh.S(t);
        return i.defaultView && i.defaultView.getComputedStyle && (i = i.defaultView.getComputedStyle(t, null)) ? i[e] || i.getPropertyValue(e) || "" : ""
    }

    function qe(t, e) {
        return Ze(t, e) || (t.currentStyle ? t.currentStyle[e] : null) || t.style && t.style[e]
    }

    function _e(t, e, i) {
        var n;
        e instanceof He ? (n = e.x, e = e.y) : (n = e, e = i), t.style.left = si(n, !1), t.style.top = si(e, !1)
    }

    function Qe(t) {
        var e;
        try {
            e = t.getBoundingClientRect()
        } catch (i) {
            return {left: 0, top: 0, right: 0, bottom: 0}
        }
        return Ih && t.ownerDocument.body && (t = t.ownerDocument, e.left -= t.documentElement.clientLeft + t.body.clientLeft, e.top -= t.documentElement.clientTop + t.body.clientTop), e
    }

    function ti(t) {
        var e, i = uh.S(t), n = new He(0, 0);
        e = i ? uh.S(i) : uh.L();
        var s;
        return (s = !Ih) || (s = Fh >= 9), e = s || uh.h(e).Hf() ? e.documentElement : e.body, t == e ? n : (t = Qe(t), i = uh.h(i).$a(), n.x = t.left + i.x, n.y = t.top + i.y, n)
    }

    function ei(t, e) {
        var i = ii(t), n = ii(e);
        return new He(i.x - n.x, i.y - n.y)
    }

    function ii(t) {
        if (1 == t.nodeType)return t = Qe(t), new He(t.left, t.top);
        var e = a(t.ph), i = t;
        return t.targetTouches && t.targetTouches.length ? i = t.targetTouches[0] : e && t.H.targetTouches && t.H.targetTouches.length && (i = t.H.targetTouches[0]), new He(i.clientX, i.clientY)
    }

    function ni(t, e, i) {
        if (e instanceof Ye)i = e.height, e = e.width; else if (void 0 == i)throw Error("missing height argument");
        t.style.width = si(e, !0), t.style.height = si(i, !0)
    }

    function si(t, e) {
        return "number" == typeof t && (t = (e ? Math.round(t) : t) + "px"), t
    }

    function hi(t) {
        var e = ri;
        if ("none" != qe(t, "display"))return e(t);
        var i = t.style, n = i.display, s = i.visibility, h = i.position;
        return i.visibility = "hidden", i.position = "absolute", i.display = "inline", t = e(t), i.display = n, i.position = h, i.visibility = s, t
    }

    function ri(e) {
        var i = e.offsetWidth, n = e.offsetHeight, s = Dh && !i && !n;
        return t(i) && !s || !e.getBoundingClientRect ? new Ye(i, n) : (e = Qe(e), new Ye(e.right - e.left, e.bottom - e.top))
    }

    function oi(t, e) {
        var i = t.style;
        "opacity"in i ? i.opacity = e : "MozOpacity"in i ? i.MozOpacity = e : "filter"in i && (i.filter = "" === e ? "" : "alpha(opacity=" + 100 * e + ")")
    }

    function ai(t, e) {
        t.style.display = e ? "" : "none"
    }

    function ci(t, e) {
        if ("none" == (t.currentStyle ? t.currentStyle[e + "Style"] : null))return 0;
        var i, n = t.currentStyle ? t.currentStyle[e + "Width"] : null;
        if (n in yr)i = yr[n]; else if (/^\d+px?$/.test(n))i = parseInt(n, 10); else {
            i = t.style.left;
            var s = t.runtimeStyle.left;
            t.runtimeStyle.left = t.currentStyle.left, t.style.left = n, n = t.style.pixelLeft, t.style.left = i, t.runtimeStyle.left = s, i = n
        }
        return i
    }

    function li(t) {
        if (Ih && !(Fh >= 9)) {
            var e = ci(t, "borderLeft"), i = ci(t, "borderRight"), n = ci(t, "borderTop");
            return t = ci(t, "borderBottom"), new Ve(n, i, t, e)
        }
        return e = Ze(t, "borderLeftWidth"), i = Ze(t, "borderRightWidth"), n = Ze(t, "borderTopWidth"), t = Ze(t, "borderBottomWidth"), new Ve(parseFloat(n), parseFloat(i), parseFloat(t), parseFloat(e))
    }

    function ui() {
    }

    function fi(t) {
        We.call(this), this.Y = t || uh.h(), this.pe = mr, this.T = null, this.G = !1, this.g = null, this.ab = void 0, this.ba = this.o = this.B = this.Ra = null, this.Jg = !1
    }

    function di(t) {
        return t.T || (t.T = ":" + (t.Fh.$f++).toString(36))
    }

    function pi(t, e) {
        return t.o ? t.o[e] || null : null
    }

    function gi(t, e) {
        t.o && Eh(t.o, e, void 0)
    }

    function bi() {
        We.call(this), this.pa = wr, this.endTime = this.startTime = null
    }

    function vi(t, e) {
        We.call(this), this.nb = t || 1, this.Sb = e || oh, this.yd = d(this.Ii, this), this.he = lh()
    }

    function yi(t, e, i) {
        if (a(t))i && (t = d(t, i)); else {
            if (!t || "function" != typeof t.handleEvent)throw Error("Invalid listener argument");
            t = d(t.handleEvent, t)
        }
        return e > 2147483647 ? -1 : oh.setTimeout(t, e || 0)
    }

    function mi(t, e, i) {
        J.call(this), this.je = t, this.nb = e || 0, this.ga = i, this.Ec = d(this.kh, this)
    }

    function wi(t) {
        t = l(t), delete Sr[t], F(Sr) && Er && Er.stop()
    }

    function xi() {
        Er || (Er = new mi(function () {
            Si()
        }, 20));
        var t = Er;
        0 != t.T || t.start()
    }

    function Si() {
        var t = lh();
        j(Sr, function (e) {
            Ci(e, t)
        }), F(Sr) || xi()
    }

    function Ei(t, e, i, n) {
        if (bi.call(this), !s(t) || !s(e))throw Error("Start and end parameters must be arrays");
        if (t.length != e.length)throw Error("Start and end points must be the same length");
        this.wc = t, this.nh = e, this.duration = i, this.Ae = n, this.coords = [], this.qd = !1, this.oa = 0
    }

    function Ci(t, e) {
        t.oa = (e - t.startTime) / (t.endTime - t.startTime), 1 <= t.oa && (t.oa = 1), Ti(t, t.oa), 1 == t.oa ? (t.pa = wr, wi(t), t.xa("finish"), t.eb()) : 1 == t.pa && t.le()
    }

    function Ti(t, e) {
        a(t.Ae) && (e = t.Ae(e)), t.coords = Array(t.wc.length);
        for (var i = 0; i < t.wc.length; i++)t.coords[i] = (t.nh[i] - t.wc[i]) * e + t.wc[i]
    }

    function Ni(t, e) {
        _.call(this, t), this.coords = e.coords, this.x = e.coords[0], this.y = e.coords[1], this.z = e.coords[2], this.duration = e.duration, this.oa = e.oa, this.state = e.pa
    }

    function Mi(t) {
        return Math.pow(t, 3)
    }

    function Ai(t) {
        return 1 - Math.pow(1 - t, 3)
    }

    function Ii(t) {
        return 3 * t * t - 2 * t * t * t
    }

    function ki(t) {
        if ("function" == typeof t.Ma)return t.Ma();
        if (r(t))return t.split("");
        if (h(t)) {
            for (var e = [], i = t.length, n = 0; i > n; n++)e.push(t[n]);
            return e
        }
        return B(t)
    }

    function Li(t, e, i) {
        if ("function" == typeof t.forEach)t.forEach(e, i); else if (h(t) || r(t))Eh(t, e, i); else {
            var n;
            if ("function" == typeof t.lb)n = t.lb(); else if ("function" != typeof t.Ma)if (h(t) || r(t)) {
                n = [];
                for (var s = t.length, o = 0; s > o; o++)n.push(o)
            } else n = R(t); else n = void 0;
            for (var s = ki(t), o = s.length, a = 0; o > a; a++)e.call(i, s[a], n && n[a], t)
        }
    }

    function Di(t) {
        this.Ca = {}, this.v = [], this.C = 0;
        var e = arguments.length;
        if (e > 1) {
            if (e % 2)throw Error("Uneven number of arguments");
            for (var i = 0; e > i; i += 2)this.set(arguments[i], arguments[i + 1])
        } else t && this.addAll(t)
    }

    function Pi(t) {
        if (t.C != t.v.length) {
            for (var e = 0, i = 0; e < t.v.length;) {
                var n = t.v[e];
                ji(t.Ca, n) && (t.v[i++] = n), e++
            }
            t.v.length = i
        }
        if (t.C != t.v.length) {
            for (var s = {}, i = e = 0; e < t.v.length;)n = t.v[e], ji(s, n) || (t.v[i++] = n, s[n] = 1), e++;
            t.v.length = i
        }
    }

    function ji(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }

    function Oi(t, e, i, n, s) {
        this.reset(t, e, i, n, s)
    }

    function Bi(t) {
        this.Uf = t, this.zf = this.o = this.jc = this.B = null
    }

    function Ri(t, e) {
        this.name = t, this.value = e
    }

    function Fi(t) {
        return t.jc ? t.jc : t.B ? Fi(t.B) : (N("Root logger has no level set."), null)
    }

    function Hi(t) {
        Ar || (Ar = new Bi(""), Mr[""] = Ar, Ar.ug(Nr));
        var e;
        if (!(e = Mr[t])) {
            e = new Bi(t);
            var i = t.lastIndexOf("."), n = t.substr(i + 1), i = Hi(t.substr(0, i));
            i.zb()[n] = e, e.B = i, Mr[t] = e
        }
        return e
    }

    function Yi(t, e) {
        t && t.info(e, void 0)
    }

    function Xi(t, e) {
        this.Nf = t, this.Ig = e
    }

    function Ki() {
        _.call(this, "navigate")
    }

    function Ui() {
        return !(P("iPad") || P("Android") && !P("Mobile") || P("Silk")) && (P("iPod") || P("iPhone") || P("Android") || P("IEMobile"))
    }

    function Wi(t, e) {
        for (var i = [t], n = e.length - 1; n >= 0; --n)i.push(typeof e[n], e[n]);
        return i.join("")
    }

    function zi(t, e, i, n) {
        if (We.call(this), t && !e)throw Error("Can't use invisible history without providing a blank page.");
        var s;
        if (i)s = i; else {
            s = "history_state" + Dr;
            var h = Oe("input", {type: "text", name: s, id: s, style: Ee("display:none")});
            uh.w.Ic(document, h), s = uh.b(s)
        }
        if (this.fc = s, this.aa = i ? uh.fa(uh.S(i)) : window, this.Yd = r(e) ? De(e) : e, Ih && !e && (e = Ee("https" == window.location.protocol ? "https:///" : 'javascript:""'), this.Yd = e = De(Se(e))), this.m = new vi(Pr), Z(this, p(q, this.m)), this.ub = !t, this.D = new Ke(this), t || kr) {
            var o;
            if (n)o = n; else {
                t = "history_iframe" + Dr, n = {
                    id: t,
                    style: Ee("display:none"),
                    sandbox: void 0
                }, e = {}, e.src = this.Yd || null, e.srcdoc = null, i = {sandbox: ""}, s = {};
                for (o in e)s[o] = e[o];
                for (o in i)s[o] = i[o];
                for (o in n) {
                    if (h = o.toLowerCase(), h in e)throw Error('Cannot override "' + h + '" attribute, got "' + o + '" with value "' + n[o] + '"');
                    h in i && delete s[h], s[o] = n[o]
                }
                o = Fe("iframe", s, void 0), uh.w.Ic(document, o), o = uh.b(t)
            }
            this.Oc = o, this.Fg = !0
        }
        kr && (this.D.l(this.aa, "load", this.Uh), this.xg = this.Gd = !1), this.ub ? $i(this, Vi(this), !0) : Ji(this, this.fc.value), Dr++
    }

    function Vi(t) {
        return null != t.Hb ? t.Hb : t.ub ? Gi(t.aa) : Zi(t) || ""
    }

    function Gi(t) {
        t = t.location.href;
        var e = t.indexOf("#");
        return 0 > e ? "" : t.substring(e + 1)
    }

    function $i(t, e, i) {
        t = t.aa.location;
        var n = t.href.split("#")[0], s = -1 != t.href.indexOf("#");
        (kr || s || e) && (n += "#" + e), n != t.href && (i ? t.replace(n) : t.href = n)
    }

    function Ji(t, e, i, n) {
        if (t.Fg || e != Zi(t))if (t.Fg = !1, e = encodeURIComponent(String(e)), Ih) {
            var s = uh.Ab(t.Oc);
            s.open("text/html", i ? "replace" : void 0), i = Be(Oe("title", {}, n || t.aa.document.title), Oe("body", {}, e)), uh.w.Ic(s, i), s.close()
        } else s = Le(t.Yd) + "#" + e, (t = t.Oc.contentWindow) && (i ? t.location.replace(s) : t.location.href = s)
    }

    function Zi(t) {
        if (Ih)return t = uh.Ab(t.Oc), t.body ? m(t.body.innerHTML) : null;
        var e = t.Oc.contentWindow;
        if (e) {
            var i;
            try {
                i = m(Gi(e))
            } catch (n) {
                return t.Ib || (1 != t.Ib && t.m.setInterval(jr), t.Ib = !0), null
            }
            return t.Ib && (0 != t.Ib && t.m.setInterval(Pr), t.Ib = !1), i || null
        }
        return null
    }

    function qi(t, e) {
        t.Gb = t.fc.value = e, t.ub ? (kr && Ji(t, e), $i(t, e)) : Ji(t, e), t.dispatchEvent(new Ki(Vi(t)))
    }

    function _i(t, e, i, n, s) {
        Ei.call(this, e, i, n, s), this.element = t
    }

    function Qi(t, e, i, n, s) {
        if (o(e) && (e = [e]), o(i) && (i = [i]), _i.call(this, t, e, i, n, s), 1 != e.length || 1 != i.length)throw Error("Start and end points must be 1D");
        this.Sc = Br
    }

    function tn(t, e, i) {
        Qi.call(this, t, 1, 0, e, i)
    }

    function en(t, e, i) {
        Qi.call(this, t, 0, 1, e, i)
    }

    function nn(t, e, i) {
        Qi.call(this, t, 1, 0, e, i)
    }

    function sn(t, e, i) {
        Qi.call(this, t, 0, 1, e, i)
    }

    function hn(t) {
        if (Fr) {
            Fr = !1;
            var e = oh.location;
            if (e) {
                var i = e.href;
                if (i && (i = (i = hn(i)[3] || null) ? decodeURI(i) : i) && i != e.hostname)throw Fr = !0, Error()
            }
        }
        return t.match(Rr)
    }

    function rn(t, e) {
        if (t)for (var i = t.split("&"), n = 0; n < i.length; n++) {
            var s = i[n].indexOf("="), h = null, r = null;
            s >= 0 ? (h = i[n].substring(0, s), r = i[n].substring(s + 1)) : h = i[n], e(h, r ? m(r) : "")
        }
    }

    function on(e, i) {
        this.Ja = this.tb = this.gb = "", this.Mb = null, this.ib = this.Ea = "", this.na = this.Ih = !1;
        var n;
        if (e instanceof on)this.na = t(i) ? i : e.na, an(this, e.gb), n = e.tb, un(this), this.tb = n, n = e.Ja, un(this), this.Ja = n, cn(this, e.Mb), n = e.Ea, un(this), this.Ea = n, ln(this, e.ia.clone()), n = e.ib, un(this), this.ib = n; else if (e && (n = hn(String(e)))) {
            this.na = !!i, an(this, n[1] || "", !0);
            var s = n[2] || "";
            un(this), this.tb = fn(s), s = n[3] || "", un(this), this.Ja = fn(s, !0), cn(this, n[4]), s = n[5] || "", un(this), this.Ea = fn(s, !0), ln(this, n[6] || "", !0), n = n[7] || "", un(this), this.ib = fn(n)
        } else this.na = !!i, this.ia = new gn(null, 0, this.na)
    }

    function an(t, e, i) {
        un(t), t.gb = i ? fn(e, !0) : e, t.gb && (t.gb = t.gb.replace(/:$/, ""))
    }

    function cn(t, e) {
        if (un(t), e) {
            if (e = Number(e), isNaN(e) || 0 > e)throw Error("Bad port number " + e);
            t.Mb = e
        } else t.Mb = null
    }

    function ln(t, e, i) {
        un(t), e instanceof gn ? (t.ia = e, t.ia.se(t.na)) : (i || (e = dn(e, Kr)), t.ia = new gn(e, 0, t.na))
    }

    function un(t) {
        if (t.Ih)throw Error("Tried to modify a read-only Uri")
    }

    function fn(t, e) {
        return t ? e ? decodeURI(t.replace(/%25/g, "%2525")) : decodeURIComponent(t) : ""
    }

    function dn(t, e, i) {
        return r(t) ? (t = encodeURI(t).replace(e, pn), i && (t = t.replace(/%25([0-9a-fA-F]{2})/g, "%$1")), t) : null
    }

    function pn(t) {
        return t = t.charCodeAt(0), "%" + (t >> 4 & 15).toString(16) + (15 & t).toString(16)
    }

    function gn(t, e, i) {
        this.C = this.A = null, this.da = t || null, this.na = !!i
    }

    function bn(t) {
        t.A || (t.A = new Di, t.C = 0, t.da && rn(t.da, function (e, i) {
            t.add(m(e), i)
        }))
    }

    function vn(t, e) {
        var i = String(e);
        return t.na && (i = i.toLowerCase()), i
    }

    function yn(t, e, i, n, s) {
        if (!(Ih || Dh && $("525")))return !0;
        if (jh && s)return mn(t);
        if (s && !n)return !1;
        if (o(e) && (e = wn(e)), !i && (17 == e || 18 == e || jh && 91 == e))return !1;
        if (Dh && n && i)switch (t) {
            case 220:
            case 219:
            case 221:
            case 192:
            case 186:
            case 189:
            case 187:
            case 188:
            case 190:
            case 191:
            case 192:
            case 222:
                return !1
        }
        if (Ih && n && e == t)return !1;
        switch (t) {
            case 13:
                return !0;
            case 27:
                return !Dh
        }
        return mn(t)
    }

    function mn(t) {
        if (t >= 48 && 57 >= t || t >= 96 && 106 >= t || t >= 65 && 90 >= t || Dh && 0 == t)return !0;
        switch (t) {
            case 32:
            case 63:
            case 107:
            case 109:
            case 110:
            case 111:
            case 186:
            case 59:
            case 189:
            case 187:
            case 61:
            case 188:
            case 190:
            case 191:
            case 192:
            case 222:
            case 219:
            case 220:
            case 221:
                return !0;
            default:
                return !1
        }
    }

    function wn(t) {
        if (Lh)t = xn(t); else if (jh && Dh)t:switch (t) {
            case 93:
                t = 91
        }
        return t
    }

    function xn(t) {
        switch (t) {
            case 61:
                return 187;
            case 59:
                return 186;
            case 173:
                return 189;
            case 224:
                return 91;
            case 0:
                return 224;
            default:
                return t
        }
    }

    function Sn(t, e) {
        We.call(this), t && (this.Rc && this.detach(), this.g = t, this.Qc = ce(this.g, "keypress", this, e), this.ge = ce(this.g, "keydown", this.vh, e, this), this.Rc = ce(this.g, "keyup", this.xh, e, this))
    }

    function En(t, e, i, n) {
        ee.call(this, n), this.type = "key", this.keyCode = t, this.charCode = e, this.repeat = i
    }

    function Cn(t) {
        We.call(this), this.hc = {}, this.gc = {}, this.ga = new Ke(this), this.B = t
    }

    function Tn(e, i, n) {
        (n = r(n) ? n : n.src) && (e.hc[i] = {src: n, Qe: t(void 0) ? void 0 : null})
    }

    function Nn(t, e) {
        e ? t.setAttribute("role", e) : t.removeAttribute("role")
    }

    function Mn(t, e, i) {
        s(i) && (i = i.join(" "));
        var n = "aria-" + e;
        "" === i || void 0 == i ? (Jr || (Jr = {
            atomic: !1,
            autocomplete: "none",
            dropeffect: "none",
            haspopup: !1,
            live: "off",
            multiline: !1,
            multiselectable: !1,
            orientation: "vertical",
            readonly: !1,
            relevant: "additions text",
            required: !1,
            sort: "none",
            busy: !1,
            disabled: !1,
            hidden: !1,
            invalid: "false"
        }), i = Jr, e in i ? t.setAttribute(n, i[e]) : t.removeAttribute(n)) : t.setAttribute(n, i)
    }

    function An(t, e, i) {
        We.call(this), this.target = t, this.handle = e || t, this.Uc = i || new Ge(0 / 0, 0 / 0, 0 / 0, 0 / 0), this.u = uh.S(t), this.D = new Ke(this), Z(this, p(q, this.D)), this.deltaY = this.deltaX = this.Cg = this.Bg = this.screenY = this.screenX = this.clientY = this.clientX = 0, this.Ka = !0, this.hb = !1, this.mg = !0, this.Ef = 0, this.qd = this.Gh = !1, ce(this.handle, ["touchstart", "mousedown"], this.Ag, !1, this)
    }

    function In(e) {
        return t(e.pe) || (e.pe = "rtl" == qe(e.target, "direction")), e.pe
    }

    function kn(t) {
        var e = t.type;
        "touchstart" == e || "touchmove" == e ? t.Pa(t.H.targetTouches[0], t.currentTarget) : "touchend" != e && "touchcancel" != e || t.Pa(t.H.changedTouches[0], t.currentTarget)
    }

    function Ln(t, e, i) {
        var n = uh.h(t.u).$a();
        return e += n.x - t.me.x, i += n.y - t.me.y, t.me = n, t.deltaX += e, t.deltaY += i, e = Pn(t, t.deltaX), t = jn(t, t.deltaY), new He(e, t)
    }

    function Dn(t, e, i, n) {
        t.qd && In(t) ? t.target.style.right = i + "px" : t.target.style.left = i + "px", t.target.style.top = n + "px", t.dispatchEvent(new On("drag", t, e.clientX, e.clientY, 0, i, n))
    }

    function Pn(t, e) {
        var i = t.Uc, n = isNaN(i.left) ? null : i.left, i = isNaN(i.width) ? 0 : i.width;
        return Math.min(null != n ? n + i : 1 / 0, Math.max(null != n ? n : -1 / 0, e))
    }

    function jn(t, e) {
        var i = t.Uc, n = isNaN(i.top) ? null : i.top, i = isNaN(i.height) ? 0 : i.height;
        return Math.min(null != n ? n + i : 1 / 0, Math.max(null != n ? n : -1 / 0, e))
    }

    function On(e, i, n, s, h, r, o) {
        _.call(this, e), this.clientX = n, this.clientY = s, this.left = t(r) ? r : i.deltaX, this.top = t(o) ? o : i.deltaY
    }

    function Bn(t) {
        We.call(this), this.g = t, t = Ih ? "focusout" : "blur", this.Kh = ce(this.g, Ih ? "focusin" : "focus", this, !Ih), this.Lh = ce(this.g, t, this, !Ih)
    }

    function Rn(t, e) {
        this.g = t, this.Y = e
    }

    function Fn(t, e) {
        fi.call(this, e), this.Ki = !!t, this.Fb = null
    }

    function Hn(t) {
        t.Ki && !t.J && (t.J = uh.Z.Dd(t.h()), t.J.className = t.cc() + "-bg", ai(t.J, !1), oi(t.J, 0)), t.W || (t.W = t.h().i("DIV", t.cc() + "-bg"), ai(t.W, !1))
    }

    function Yn(t) {
        t.va || (t.va = t.h().createElement("SPAN"), ai(t.va, !1), uh.Pb(t.va, !0), t.va.style.position = "absolute")
    }

    function Xn(t, e) {
        t.Rf || (t.Rf = new Rn(t.g, t.Y));
        var i = t.Rf;
        if (e) {
            i.Cb || (i.Cb = []);
            for (var n = i.Y.zb(i.Y.L().body), s = 0; s < n.length; s++) {
                var h, r = n[s];
                (h = r != i.g) && (h = r.getAttribute("aria-hidden"), h = !(null == h || void 0 == h ? 0 : String(h))), h && (Mn(r, "hidden", !0), i.Cb.push(r))
            }
        } else if (i.Cb) {
            for (s = 0; s < i.Cb.length; s++)i.Cb[s].removeAttribute("aria-hidden");
            i.Cb = null
        }
    }

    function Kn(t, e) {
        t.J && ai(t.J, e), t.W && ai(t.W, e), ai(t.b(), e), ai(t.va, e)
    }

    function Un(t, e, i) {
        Fn.call(this, e, i), this.P = t || "modal-dialog", this.O = Jn(Jn(new $n, io, !0), no, !1, !0)
    }

    function Wn(t, e) {
        if (t.Bc = e, t.b()) {
            var i = t.Kc();
            i && oi(i, t.Bc)
        }
    }

    function zn(t, e) {
        var i = fh(t.P + "-title-draggable").split(" ");
        t.b() && (e ? uh.f.addAll(t.I, i) : uh.f.Fa(t.I, i)), e && !t.Za ? (t.Za = new An(t.b(), t.I), uh.f.addAll(t.I, i), ce(t.Za, "start", t.xi, !1, t)) : !e && t.Za && (t.Za.ya(), t.Za = null)
    }

    function Vn(t) {
        if (t.Ud) {
            var e = t.O, i = e && e.Ad;
            i ? (e = e.get(i), t.dispatchEvent(new Gn(i, e)) && t.Ga(!1)) : t.Ga(!1)
        }
    }

    function Gn(t, e) {
        this.type = qr, this.key = t, this.caption = e
    }

    function $n(t) {
        this.Y = t || uh.h(), Di.call(this)
    }

    function Jn(t, e, i, n) {
        return t.set(e.key, e.caption, i, n)
    }

    function Zn(t, e, i) {
        this.Ec = t, this.ga = e, i || (t = i = new on("//www.evisa.go.ke/assets/img/cleardot.gif"), un(t), e = Math.floor(2147483648 * Math.random()).toString(36) + Math.abs(Math.floor(2147483648 * Math.random()) ^ lh()).toString(36), un(t), t.ia.set("zx", e)), this.Gg = i
    }

    function qn(t) {
        t.Ac++, "onLine"in navigator && !navigator.onLine ? (Yi(t.cb, "Browser is set to work offline."), yi(d(t.mc, t, !1), 0)) : (Yi(t.cb, "Loading image (attempt " + t.Ac + ") at " + t.Gg), t.Na = new Image, t.Na.onload = d(t.$h, t), t.Na.onerror = d(t.Zh, t), t.Na.onabort = d(t.Yh, t), t.nd = yi(t.ai, t.Eg, t), t.Na.src = String(t.Gg))
    }

    function _n(t) {
        t.Na && (t.Na.onload = null, t.Na.onerror = null, t.Na.onabort = null, t.Na = null), t.nd && (oh.clearTimeout(t.nd), t.nd = null), t.pc && (oh.clearTimeout(t.pc), t.pc = null)
    }

    function Qn(t) {
        We.call(this), this.aa = t || window, this.ie = ce(this.aa, "resize", this.Td, !1, this), this.vc = uh.ra(this.aa)
    }

    function ts() {
        fi.call(this), this.constructor == ts && N("Abstract model cannot be instantiated directly."), this.Ra = {}, this.Cc = {};
        var t = {}, e = this.constructor;
        do {
            var i = e.Model;
            c(i) && K(t, i), e.c && (e = e.c.constructor)
        } while (e.c && e != ts);
        for (var n in t)this.add(n, t[n])
    }

    function es(t, e) {
        return new ns(t, e)
    }

    function is(t, e) {
        var i = t.get(e), n = new ss("a", t, e, i);
        t.G && t.dispatchEvent(n) && t.dispatchEvent(new ss(["a", e].join("_"), t, e, i)) && t.handle(e, i)
    }

    function ns(t, e) {
        this.Tf = t, this.key = e
    }

    function ss(t, e, i, n) {
        _.call(this, t, e), this.key = i, this.value = n
    }

    function hs() {
        ts.call(this), this.Zb = {}
    }

    function rs(t) {
        var e = hs.kb(), i = [];
        t = e.h().Ba("multi-control", t);
        for (var n, s = 0; n = t[s]; s++)n = n ? n.id : null, i.push(n ? X(e.Zb, n) : null);
        return i
    }

    function os(t) {
        Y(ao, as(t), t)
    }

    function as(t) {
        return t = [t.CLASS_NAME], t.unshift("nguvu"), t.join("-")
    }

    function cs(t, e, i, n) {
        if (null !== t) {
            t = t.firstChild;
            for (var s = a(n); t;)e(t) && i.push(t), s ? n(t) || cs(t, e, i, n) : cs(t, e, i), t = t.nextSibling
        }
    }

    function ls(t) {
        if (ts.call(this), this.constructor == ls && N("Abstract component cannot be instantiated directly."), this.Ia = {}, c(t)) {
            var e, i = this.Od();
            for (e in i)e in t && this.set(e, t[e])
        }
    }

    function us(t, e) {
        function i(t, e) {
            return uh.a.has(e, t)
        }

        var n = t.b(), s = as(t.constructor), h = [];
        return cs(n, p(i, e), h, p(i, s)), h
    }

    function fs(t, e) {
        if (!(di(e)in t.Ia)) {
            e.Rb(t);
            var i = di(e);
            t.Ia[i] = e
        }
    }

    function ds(t, e) {
        return as(t.constructor) + "-" + e
    }

    function ps(t, e, i) {
        uh.a.enable(t.b(), ds(t, e), i)
    }

    function gs(t, e, i, n) {
        n = "boolean" == typeof n ? n : !1, i = uh.a.has(t.b(), ds(t, i)), n && (i = !i), t.set(e, i)
    }

    function bs(t) {
        ls.call(this, t)
    }

    function vs(t, e, i) {
        ee.call(this, i.H), this.type = t, this.target = e
    }

    function ys(t) {
        ls.call(this, t), this.bind("enableController", this.enabledState)
    }

    function ms() {
        We.call(this)
    }

    function ws(t, e) {
        var i = uh.a.get(e);
        t:{
            for (var n, s = 0; n = i[s]; s++)if (n = X(ao, n)) {
                i = n;
                break t
            }
            i = null
        }
        (s = i) && (s = hs.kb(), s = !(e.id in s.Zb)), s && ((new i).Wa(e), t.dispatchEvent(new xs("o", t, e))), i = uh.zb(e);
        for (s = 0; n = i[s]; s++)ws(t, n)
    }

    function xs(t, e, i) {
        _.call(this, t, e), this.element = i
    }

    function Ss(t) {
        t = t || {};
        var e = uh.i("input", {id: "history_state", style: "display:none;", type: "hidden"});
        if (document.body.appendChild(e), this.Wd = new zi(!1, null, e), this.Bh = X(t, "hashParam", "slide"), this.R = uh.b(t.carouselId), this.bh = "animInDuration"in t ? t.animInDuration : fo, this.dh = "animOutDuration"in t ? t.animOutDuration : 800, this.sg = t.selectedTabClass || "tab-on", this.Eb = "isTimerSet"in t ? t.isTimerSet : !1, this.Jf = "isHistorySet"in t ? t.isHistorySet : !1, this.Qh = t.navPreviousClass || "nav-previous", this.Ph = t.navNextClass || "nav-next", this.Gi = t.tabContainerClass || "tabs", this.Ji = "timerDuration"in t ? t.timerDuration : 5e3, this.ja = [], this.m = this.Ha = null, this.rb = 0, this.ae = !1, this.Hi = uh.F("", this.Gi, this.R)[0], this.ld = uh.F("li", "", this.Hi), this.bd = uh.F("", this.Qh, this.R)[0], this.Zf = uh.F("", this.Ph, this.R)[0], this.bc = new Ke(this), 1 < this.ld.length)if (Cs(this), this.Eb && Ts(this), Ns(this), Es(this), this.Jf)if (t = (t = Vi(this.Wd).match(new RegExp(this.Bh + "=([^&]+)"))) ? t[1] : null, e = !1, t) {
            for (var i in this.ja) {
                var n = uh.F("a", "", this.ja[i].R)[0].href.split("#")[1];
                t == n && (this.ja[i].show(), e = !0)
            }
            e || (this.ja[0].show(), Ms(this, 0))
        } else this.ja[0].show(), Ms(this, 0); else this.ja[0].show(); else 1 == this.ld.length && (this.ld[0].parentNode.style.display = "none", this.bd && (this.bd.parentNode.style.display = "none"), this.Eb && Ts(this), Ns(this), Es(this))
    }

    function Es(t) {
        t.Eb && (t.bc.l(t.R, "mouseover", t.We), t.bc.l(t.R, "mouseout", p(t.Fd, t.rb)))
    }

    function Cs(t) {
        Eh(t.ld, function (t, e) {
            var i = new Is(t, this, e);
            this.ja.push(i), i.we.style.display = "none"
        }, t)
    }

    function Ts(t) {
        q(t.m), t.m = new vi(t.Ji), t.m.start(), t.bc.l(t.m, xr, function () {
            Ms(this, this.rb), this.ja[this.rb].show(), this.rb == this.ja.length - 1 ? this.rb = 0 : this.rb++
        })
    }

    function Ns(t) {
        t.bd && t.bc.l(t.bd, "click", function (t) {
            As(this, 0 < this.Ha.index ? this.Ha.index - 1 : this.ja.length - 1), t.preventDefault()
        }), t.Zf && t.bc.l(t.Zf, "click", function (t) {
            this.next(), t.preventDefault()
        })
    }

    function Ms(t, e) {
        if (t.Jf) {
            var i = uh.F("a", "", t.Ha.R)[0].href.split("#")[1], n = uh.F("a", "", t.ja[e].R)[0].href.split("#")[1], s = Vi(t.Wd), i = s ? s.replace(i, n) : n, n = t.Wd;
            Vi(n) != i && (n.ub ? ($i(n, i, !1), Ir() || Ih && !Ui() && Ji(n, i, !1, void 0), n.Ka && n.Je()) : (Ji(n, i, !1), n.Hb = n.Gb = n.fc.value = i, n.dispatchEvent(new Ki)))
        }
    }

    function As(t, e) {
        Ms(t, e), t.Eb && t.We(), t.ja[e].show(), t.Eb && t.Fd(e)
    }

    function Is(t, e, i) {
        this.index = i, this.R = t, this.parent = e, t = this.R.id ? this.R.id.match(po)[1] : uh.F("a", "", this.R)[0].href.split("#")[1], this.we = uh.b(t), ce(this.R, "click", function (t) {
            As(this.parent, this.index), t.preventDefault()
        }, !1, this)
    }

    function ks(t, e) {
        Un.call(this, go, !0), this.Me = t || Co, this.kc = go + "-" + this.Me, this.Xd = this.kc + "-iframe", this.pd = e || "", this.K = [], this.wa = null, this.bf = !0, this.ta = this.g, this.fe = this.ca = this.Vf = this.Wf = this.X = this.Aa = this.$ = this.sa = null, this.Da = 0, this.oc = !1, this.uc = !0, this.wd = this.rg = !1, this.Yf = yo, this.Xf = mo, this.Le = vo, this.Bf = !1, this.nc = -1, this.lc = !1, this.Wc = new Cn, this.ac = this.jd = !1, this.Ge = !0, this.Hc = !1, this.Ve = To, this.fd = null
    }

    function Ls(t, e) {
        var i = uh.ra().width <= t.Ve;
        return t.Hc && !i || !t.Hc && !e || !t.Hc && e && !i
    }

    function Ds(t) {
        return t = uh.dataset.get(t, "lightboxIndex"), parseInt(t, 10)
    }

    function Ps(t, e) {
        var i = uh.i("span", "", "gweb-lightbox-next" == e ? t.Xf : t.Yf), n = uh.i("img", {
            src: "//www.evisa.go.ke/assets/img/cleardot.gif",
            alt: ""
        }), i = uh.i("a", {"class": "gweb-lightbox-nav " + e, href: "#"}, [i, n]);
        return ai(i, !1), uh.appendChild(t.s, i), ai(t.s, !0), ce(i, bo, function (t) {
            t.preventDefault(), this.dispatchEvent("gweb-lightbox-next" == e ? "navigatenext" : "navigateprev")
        }, !1, t), i
    }

    function js(t, e, i) {
        e = uh.Nd(e), e.style.visibility = "visible", "gweb-lightbox-prev" == i ? e.style.left = "0" : "gweb-lightbox-next" == i && (e.style.right = "0"), yi(p(t.oh, e), 2e3, t)
    }

    function Os(t, e) {
        try {
            var i = window.frames[t.Xd];
            i && i.location.replace(e)
        } catch (n) {
        }
    }

    function Bs(t, e, i) {
        uh.a.enable(t.ta, "gweb-lightbox-loading", e), t.jd && i && (e ? oi(i, .5) : new en(i, 500).play())
    }

    function Rs(t, e) {
        t.Fc("IFRAME"), Bs(t, !0, t.$), fe(t.sa, "load", function (t) {
            t.preventDefault(), this.sa.width = e.width, this.sa.height = e.height, this.ca = new Ye(e.width, e.height), this.dispatchEvent("iframeloaded")
        }, !1, t), Os(t, Ys(e))
    }

    function Fs() {
        _i.apply(this, arguments)
    }

    function Hs(t) {
        this.type = this.th(t), this.href = t.href || "", this.title = this.xf(t), this.width = "IMG" == this.type ? 0 : parseInt(uh.dataset.get(t, Ao), 10) || 200, this.height = "IMG" == this.type ? 0 : parseInt(uh.dataset.get(t, No), 10) || 200, this.ih = uh.dataset.has(t, Mo), this.Qf = null
    }

    function Ys(t) {
        if (Eo.test(t.href)) {
            t = new on(t.href);
            var e;
            return e = t.ia.get("v"), un(t), t.ia.remove("v"), "//www.youtube.com/embed/" + e + "?" + fn(t.ia.toString())
        }
        return t.href
    }

    function Xs(t) {
        ys.call(this, t)
    }

    function Ks(t) {
        ys.call(this, t)
    }

    function Us(t) {
        ls.call(this, t)
    }

    function Ws(t) {
        ls.call(this, t), this.Va = new vi
    }

    function zs(t, e) {
        var i = t.get("lowerBound"), n = t.get("upperBound");
        if (o(i) && i > e || o(n) && e > n) {
            if (t.get("enableWrap")) {
                var s = Math.abs(i) + Math.abs(n) + 1;
                i > e ? e = e % s + s : e > n && (e %= s), t.set("selectedIndex", e), t.dispatchEvent("p")
            } else e = t.Of;
            t.set("selectedIndex", e)
        } else(i = pi(t, t.Of)) && i.set("selectedState", !1), (i = pi(t, e)) && !i.get("selectedState") && i.set("selectedState", !0), t.Va.enabled && (t.Va.stop(), yi(function () {
            this.Va.start()
        }, 0, t)), t.Of = e
    }

    function Vs(t) {
        ls.call(this, t)
    }

    function Gs(t) {
        ys.call(this, t)
    }

    function $s(t) {
        ls.call(this, t)
    }

    function Js(t) {
        ls.call(this, t)
    }

    function Zs(t) {
        this.pb = t, this.Qa()
    }

    function qs(t, e) {
        this.mh = t, this.Hg = t.src, this.ne = e || Io, this.Cf = this.Hg.replace(/\.\w+$/, this.ne + "$&")
    }

    function _s() {
        this.He = uh.b("browser-warning"), this.Qa()
    }

    function Qs(t) {
        this.pb = t, this.Qa()
    }

    function th(t, e) {
        this.ua = t, this.T = e, this.Vc = uh.ma("listen-icon"), this.Yc = uh.ma("mute-icon")
    }

    function eh() {
        swfobject.embedSWF("//www.youtube.com/apiplayer?version=3&enablejsapi=1&playerapiid=player1&loop=1&playlist=Fp0aWFEPTco", "videoDiv", "335", "250", "9", null, null, {
            allowScriptAccess: "always",
            wmode: "opaque"
        }, {id: "chromelessPlayer"})
    }

    function ih() {
        this.yb = uh.b("features-inbox-expand-button"), this.xb = uh.b("features-inbox-collapse-button"), this.Oa = uh.b("features-inbox-drawer"), this.Qa()
    }

    function nh() {
        this.Ce = uh.Ba("features-compose-animation"), this.gd = uh.b("features-compose-reload-button"), this.hd = uh.b("features-compose-reload-button-alt"), uh.Ba("features-compose-animation-toggle"), this.Qa()
    }

    function sh(t) {
        this.rd = t, sh.sd = uh.b("feature-1"), sh.td = uh.b("feature-2"), sh.Ub = uh.b("attachments-cursor-anim"), sh.Vb = uh.b("attachment-images-anim"), 1030 < this.rd.width && sh.Ub && uh.f.add(sh.Ub, "features-attachments-animation"), 1190 < this.rd.width && sh.Vb && uh.f.add(sh.Vb, "attachments-anim"), sh.ud = uh.b("features-action"), sh.Og = ii(sh.sd), sh.Pg = ii(sh.td), t = d(this.yh, this), ce(window, "scroll", t)
    }

    function hh() {
        window.scrollTo(0, ti(zo).y - 117)
    }

    var rh, oh = this, ah = "closure_uid_" + (1e9 * Math.random() >>> 0), ch = 0, lh = Date.now || function () {
            return +new Date
        };
    Function.prototype.bind = Function.prototype.bind || function (t) {
            if (1 < arguments.length) {
                var e = Array.prototype.slice.call(arguments, 1);
                return e.unshift(this, t), d.apply(null, e)
            }
            return d(this, t)
        }, b(v, Error), v.prototype.name = "CustomError";
    var uh = {}, fh = String.prototype.trim ? function (t) {
        return t.trim()
    } : function (t) {
        return t.replace(/^[\s\xa0]+|[\s\xa0]+$/g, "")
    }, dh = /&/g, ph = /</g, gh = />/g, bh = /"/g, vh = /'/g, yh = /\x00/g, mh = /[\x00&<>"']/;
    b(T, v), T.prototype.name = "AssertionError";
    var wh, xh = Array.prototype, Sh = xh.indexOf ? function (t, e, i) {
        return xh.indexOf.call(t, e, i)
    } : function (t, e, i) {
        if (i = null == i ? 0 : 0 > i ? Math.max(0, t.length + i) : i, r(t))return r(e) && 1 == e.length ? t.indexOf(e, i) : -1;
        for (; i < t.length; i++)if (i in t && t[i] === e)return i;
        return -1
    }, Eh = xh.forEach ? function (t, e, i) {
        xh.forEach.call(t, e, i)
    } : function (t, e, i) {
        for (var n = t.length, s = r(t) ? t.split("") : t, h = 0; n > h; h++)h in s && e.call(i, s[h], h, t)
    }, Ch = xh.filter ? function (t, e, i) {
        return xh.filter.call(t, e, i)
    } : function (t, e, i) {
        for (var n = t.length, s = [], h = 0, o = r(t) ? t.split("") : t, a = 0; n > a; a++)if (a in o) {
            var c = o[a];
            e.call(i, c, a, t) && (s[h++] = c)
        }
        return s
    };
    t:{
        var Th = oh.navigator;
        if (Th) {
            var Nh = Th.userAgent;
            if (Nh) {
                wh = Nh;
                break t
            }
        }
        wh = ""
    }
    var Mh = "constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" "), Ah = W(), Ih = P("Trident") || P("MSIE"), kh = P("Edge"), Lh = !(!P("Gecko") || -1 != wh.toLowerCase().indexOf("webkit") && !P("Edge") || P("Trident") || P("MSIE") || P("Edge")), Dh = -1 != wh.toLowerCase().indexOf("webkit") && !P("Edge"), Ph = Dh && P("Mobile"), jh = P("Macintosh"), Oh = function () {
        if (Ah && oh.opera) {
            var t = oh.opera.version;
            return a(t) ? t() : t
        }
        var t = "", e = V();
        return e && (t = e ? e[1] : ""), Ih && (e = G(), e > parseFloat(t)) ? String(e) : t
    }(), Bh = {}, Rh = oh.document, Fh = Rh && Ih ? G() || ("CSS1Compat" == Rh.compatMode ? parseInt(Oh, 10) : 5) : void 0, Hh = !Ih || Fh >= 9, Yh = !Ih || Fh >= 9, Xh = Ih && !$("9");
    !Dh || $("528"), Lh && $("1.9b") || Ih && $("8") || Ah && $("9.5") || Dh && $("528"), Lh && !$("8") || Ih && $("9");
    var Kh = 0, Uh = {};
    J.prototype.Ya = !1, J.prototype.ya = function () {
        if (!this.Ya && (this.Ya = !0, this.j(), 0 != Kh)) {
            var t = l(this);
            delete Uh[t]
        }
    }, J.prototype.j = function () {
        if (this.ob)for (; this.ob.length;)this.ob.shift()()
    }, _.prototype.stopPropagation = function () {
        this.qb = !0
    }, _.prototype.preventDefault = function () {
        this.defaultPrevented = !0, this.pg = !1
    }, te[" "] = e, b(ee, _);
    var Wh = [1, 4, 2];
    ee.prototype.Pa = function (t, e) {
        var i = this.type = t.type;
        this.target = t.target || t.srcElement, this.currentTarget = e;
        var n = t.relatedTarget;
        if (n) {
            if (Lh) {
                var s;
                t:{
                    try {
                        te(n.nodeName), s = !0;
                        break t
                    } catch (h) {
                    }
                    s = !1
                }
                s || (n = null)
            }
        } else"mouseover" == i ? n = t.fromElement : "mouseout" == i && (n = t.toElement);
        this.relatedTarget = n, this.offsetX = Dh || void 0 !== t.offsetX ? t.offsetX : t.layerX, this.offsetY = Dh || void 0 !== t.offsetY ? t.offsetY : t.layerY, this.clientX = void 0 !== t.clientX ? t.clientX : t.pageX, this.clientY = void 0 !== t.clientY ? t.clientY : t.pageY, this.screenX = t.screenX || 0, this.screenY = t.screenY || 0, this.button = t.button, this.keyCode = t.keyCode || 0, this.charCode = t.charCode || ("keypress" == i ? t.keyCode : 0), this.ctrlKey = t.ctrlKey, this.altKey = t.altKey, this.shiftKey = t.shiftKey, this.metaKey = t.metaKey, this.state = t.state, this.H = t, t.defaultPrevented && this.preventDefault()
    }, ee.prototype.stopPropagation = function () {
        ee.c.stopPropagation.call(this), this.H.stopPropagation ? this.H.stopPropagation() : this.H.cancelBubble = !0
    }, ee.prototype.preventDefault = function () {
        ee.c.preventDefault.call(this);
        var t = this.H;
        if (t.preventDefault)t.preventDefault(); else if (t.returnValue = !1, Xh)try {
            (t.ctrlKey || 112 <= t.keyCode && 123 >= t.keyCode) && (t.keyCode = -1)
        } catch (e) {
        }
    }, ee.prototype.ph = function () {
        return this.H
    };
    var zh = "closure_listenable_" + (1e6 * Math.random() | 0), Vh = 0;
    rh = re.prototype, rh.add = function (t, e, i, n, s) {
        var h = t.toString();
        t = this.M[h], t || (t = this.M[h] = [], this.xc++);
        var r = ae(t, e, n, s);
        return r > -1 ? (e = t[r], i || (e.Dc = !1)) : (e = new se(e, this.src, h, !!n, s), e.Dc = i, t.push(e)), e
    }, rh.remove = function (t, e, i, n) {
        if (t = t.toString(), !(t in this.M))return !1;
        var s = this.M[t];
        return e = ae(s, e, i, n), e > -1 ? (he(s[e]), xh.splice.call(s, e, 1), 0 == s.length && (delete this.M[t], this.xc--), !0) : !1
    }, rh.Fa = function (t) {
        t = t && t.toString();
        var e, i = 0;
        for (e in this.M)if (!t || e == t) {
            for (var n = this.M[e], s = 0; s < n.length; s++)++i, he(n[s]);
            delete this.M[e], this.xc--
        }
        return i
    }, rh.ec = function (t, e, i, n) {
        t = this.M[t.toString()];
        var s = -1;
        return t && (s = ae(t, e, i, n)), s > -1 ? t[s] : null
    }, rh.hasListener = function (e, i) {
        var n = t(e), s = n ? e.toString() : "", h = t(i);
        return O(this.M, function (t) {
            for (var e = 0; e < t.length; ++e)if (!(n && t[e].type != s || h && t[e].Yb != i))return !0;
            return !1
        })
    };
    var Gh = "closure_lm_" + (1e6 * Math.random() | 0), $h = {}, Jh = 0, Zh = "__closure_events_fn_" + (1e9 * Math.random() >>> 0), qh = !Ih || Fh >= 9, _h = !Lh && !Ih || Ih && Fh >= 9 || Lh && $("1.9.1"), Qh = Ih && !$("9"), tr = Ih || Ah || Dh;
    uh.md = {}, uh.md.Zg = U("area base br col command embed hr img input keygen link meta param source track wbr".split(" ")), uh.md.Jh = function (t) {
        return !0 === uh.md.Zg[t]
    }, xe.prototype.mb = !0, xe.prototype.La = function () {
        return this.kd
    }, xe.prototype.toString = function () {
        return "Const{" + this.kd + "}"
    };
    var er = {};
    Ce.prototype.mb = !0;
    var ir = {};
    Ce.prototype.La = function () {
        return this.cd
    }, Ce.prototype.toString = function () {
        return "SafeStyle{" + this.cd + "}"
    }, Ce.prototype.Db = function (t) {
        return this.cd = t, this
    };
    var nr = (new Ce).Db(""), sr = /^[-,."'%_!# a-zA-Z0-9]+$/;
    rh = Ne.prototype, rh.mb = !0, rh.La = function () {
        return this.Ta
    }, rh.Zd = !0, rh.dc = function () {
        return 1
    }, rh.toString = function () {
        return "SafeUrl{" + this.Ta + "}"
    };
    var hr = /^(?:(?:https?|mailto|ftp):|[^&:/?#]*(?:[/?#]|$))/i, rr = /[()']|%5B|%5D|%25/g, or = {
        "'": "%27",
        "(": "%28",
        ")": "%29",
        "%5B": "[",
        "%5D": "]",
        "%25": "%"
    }, ar = {};
    rh = ke.prototype, rh.mb = !0, rh.La = function () {
        return this.dd
    }, rh.Zd = !0, rh.dc = function () {
        return 1
    }, rh.toString = function () {
        return "TrustedResourceUrl{" + this.dd + "}"
    };
    var cr = {};
    rh = Pe.prototype, rh.Zd = !0, rh.dc = function () {
        return this.Te
    }, rh.mb = !0, rh.La = function () {
        return this.Ta
    }, rh.toString = function () {
        return "SafeHtml{" + this.Ta + "}"
    };
    var lr = /^[a-zA-Z0-9-]+$/, ur = {
        action: !0,
        cite: !0,
        data: !0,
        formaction: !0,
        href: !0,
        manifest: !0,
        poster: !0,
        src: !0
    }, fr = {EMBED: !0, IFRAME: !0, LINK: !0, OBJECT: !0, SCRIPT: !0, STYLE: !0, TEMPLATE: !0}, dr = {};
    Pe.prototype.Db = function (t, e) {
        return this.Ta = t, this.Te = e, this
    };
    var pr = Re("<!DOCTYPE html>", 0), gr = Re("", 0);
    uh.w = {}, uh.w.Wi = function (t, e, i) {
        t.insertAdjacentHTML(e, je(i))
    }, uh.w.Qb = function (t, e) {
        t.innerHTML = je(e)
    }, uh.w.fj = function (t, e) {
        t.outerHTML = je(e)
    }, uh.w.Ic = function (t, e) {
        t.write(je(e))
    }, uh.w.Zi = function (t, e) {
        var i;
        i = e instanceof Ne ? e : Ae(e), t.href = Me(i)
    }, uh.w.$i = function (t, e) {
        t.src = Le(e)
    }, uh.w.aj = function (t, e) {
        t.src = Le(e)
    }, uh.w.bj = function (t, e) {
        t.src = Le(e)
    }, uh.w.cj = function (t, e, i) {
        t.rel = i, t.href = -1 != i.toLowerCase().indexOf("stylesheet") ? Le(e) : e instanceof ke ? Le(e) : e instanceof Ne ? Me(e) : Ae(e).La()
    }, uh.w.ej = function (t, e) {
        t.data = Le(e)
    }, uh.w.gj = function (t, e) {
        t.src = Le(e)
    }, uh.w.dj = function (t, e) {
        var i;
        i = e instanceof Ne ? e : Ae(e), t.href = Me(i)
    }, uh.w.Xi = function (t, e, i, n, s) {
        return t = t instanceof Ne ? t : Ae(t), (e || window).open(Me(t), i ? Se(i) : "", n, s)
    }, rh = He.prototype, rh.clone = function () {
        return new He(this.x, this.y)
    }, rh.toString = function () {
        return "(" + this.x + ", " + this.y + ")"
    }, rh.ceil = function () {
        return this.x = Math.ceil(this.x), this.y = Math.ceil(this.y), this
    }, rh.floor = function () {
        return this.x = Math.floor(this.x), this.y = Math.floor(this.y), this
    }, rh.round = function () {
        return this.x = Math.round(this.x), this.y = Math.round(this.y), this
    }, rh.translate = function (t, e) {
        return t instanceof He ? (this.x += t.x, this.y += t.y) : (this.x += t, o(e) && (this.y += e)), this
    }, rh.scale = function (t, e) {
        var i = o(e) ? e : t;
        return this.x *= t, this.y *= i, this
    }, rh = Ye.prototype, rh.clone = function () {
        return new Ye(this.width, this.height)
    }, rh.toString = function () {
        return "(" + this.width + " x " + this.height + ")"
    }, rh.ceil = function () {
        return this.width = Math.ceil(this.width), this.height = Math.ceil(this.height), this
    }, rh.floor = function () {
        return this.width = Math.floor(this.width), this.height = Math.floor(this.height), this
    }, rh.round = function () {
        return this.width = Math.round(this.width), this.height = Math.round(this.height), this
    }, rh.scale = function (t, e) {
        var i = o(e) ? e : t;
        return this.width *= t, this.height *= i, this
    }, uh.Qg = !1, uh.xe = !1, uh.Sg = uh.Qg || uh.xe, uh.h = function (t) {
        return t ? new Xe(uh.S(t)) : uh.gh || (uh.gh = new Xe)
    }, uh.L = function () {
        return document
    }, uh.b = function (t) {
        return uh.Md(document, t)
    }, uh.Md = function (t, e) {
        return r(e) ? t.getElementById(e) : e
    }, uh.sh = function (t) {
        return uh.vf(document, t)
    }, uh.vf = function (t, e) {
        return uh.Md(t, e)
    }, uh.Lg = uh.b, uh.F = function (t, e, i) {
        return uh.Lc(document, t, e, i)
    }, uh.Ba = function (t, e) {
        var i = e || document;
        return uh.zd(i) ? i.querySelectorAll("." + t) : uh.Lc(document, "*", t, e)
    }, uh.ma = function (t, e) {
        var i = e || document, n = null;
        return (n = i.getElementsByClassName ? i.getElementsByClassName(t)[0] : uh.zd(i) ? i.querySelector("." + t) : uh.Lc(document, "*", t, e)[0]) || null
    }, uh.Pd = function (t, e) {
        return uh.ma(t, e)
    }, uh.zd = function (t) {
        return !(!t.querySelectorAll || !t.querySelector)
    }, uh.Lc = function (t, e, i, n) {
        if (t = n || t, e = e && "*" != e ? e.toUpperCase() : "", uh.zd(t) && (e || i))return t.querySelectorAll(e + (i ? "." + i : ""));
        if (i && t.getElementsByClassName) {
            if (t = t.getElementsByClassName(i), e) {
                n = {};
                for (var s, h = 0, r = 0; s = t[r]; r++)e == s.nodeName && (n[h++] = s);
                return n.length = h, n
            }
            return t
        }
        if (t = t.getElementsByTagName(e || "*"), i) {
            for (n = {}, r = h = 0; s = t[r]; r++)e = s.className, "function" == typeof e.split && M(e.split(/\s+/), i) && (n[h++] = s);
            return n.length = h, n
        }
        return t
    }, uh.Mg = uh.F, uh.te = function (t, e) {
        j(e, function (e, i) {
            "style" == i ? t.style.cssText = e : "class" == i ? t.className = e : "for" == i ? t.htmlFor = e : uh.ye.hasOwnProperty(i) ? t.setAttribute(uh.ye[i], e) : 0 == i.lastIndexOf("aria-", 0) || 0 == i.lastIndexOf("data-", 0) ? t.setAttribute(i, e) : t[i] = e
        })
    }, uh.ye = {
        cellpadding: "cellPadding",
        cellspacing: "cellSpacing",
        colspan: "colSpan",
        frameborder: "frameBorder",
        height: "height",
        maxlength: "maxLength",
        role: "role",
        rowspan: "rowSpan",
        type: "type",
        usemap: "useMap",
        valign: "vAlign",
        width: "width"
    }, uh.ra = function (t) {
        return uh.yf(t || window)
    }, uh.yf = function (t) {
        return t = t.document, t = uh.ic(t) ? t.documentElement : t.body, new Ye(t.clientWidth, t.clientHeight)
    }, uh.qh = function () {
        return uh.hf(window)
    }, uh.hf = function (t) {
        var e = t.document, i = 0;
        if (e) {
            var i = e.body, n = e.documentElement;
            if (!n || !i)return 0;
            if (t = uh.yf(t).height, uh.ic(e) && n.scrollHeight)i = n.scrollHeight != t ? n.scrollHeight : n.offsetHeight; else {
                var e = n.scrollHeight, s = n.offsetHeight;
                n.clientHeight != s && (e = i.scrollHeight, s = i.offsetHeight), i = e > t ? e > s ? e : s : s > e ? e : s
            }
        }
        return i
    }, uh.Qi = function (t) {
        return uh.h((t || oh || window).document).$a()
    }, uh.$a = function () {
        return uh.jf(document)
    }, uh.jf = function (t) {
        var e = uh.Ld(t);
        return t = uh.Sd(t), Ih && $("10") && t.pageYOffset != e.scrollTop ? new He(e.scrollLeft, e.scrollTop) : new He(t.pageXOffset || e.scrollLeft, t.pageYOffset || e.scrollTop)
    }, uh.rh = function () {
        return uh.Ld(document)
    }, uh.Ld = function (t) {
        return t.ti ? t.ti : !Dh && uh.ic(t) ? t.documentElement : t.body || t.documentElement
    }, uh.fa = function (t) {
        return t ? uh.Sd(t) : window
    }, uh.Sd = function (t) {
        return t.parentWindow || t.defaultView
    }, uh.i = function () {
        return uh.Re(document, arguments)
    }, uh.Re = function (t, e) {
        var i = e[0], n = e[1];
        if (!qh && n && (n.name || n.type)) {
            if (i = ["<", i], n.name && i.push(' name="', w(n.name), '"'), n.type) {
                i.push(' type="', w(n.type), '"');
                var h = {};
                K(h, n), delete h.type, n = h
            }
            i.push(">"), i = i.join("")
        }
        return i = t.createElement(i), n && (r(n) ? i.className = n : s(n) ? i.className = n.join(" ") : uh.te(i, n)), 2 < e.length && uh.Fe(t, i, e, 2), i
    }, uh.Fe = function (t, e, i, n) {
        function s(i) {
            i && e.appendChild(r(i) ? t.createTextNode(i) : i)
        }

        for (; n < i.length; n++) {
            var o = i[n];
            h(o) && !uh.de(o) ? Eh(uh.ee(o) ? k(o) : o, s) : s(o)
        }
    }, uh.Ng = uh.i, uh.createElement = function (t) {
        return document.createElement(t)
    }, uh.createTextNode = function (t) {
        return document.createTextNode(String(t))
    }, uh.eh = function (t, e, i) {
        return uh.Se(document, t, e, !!i)
    }, uh.Se = function (t, e, i, n) {
        for (var s = t.createElement("TABLE"), h = s.appendChild(t.createElement("TBODY")), r = 0; e > r; r++) {
            for (var o = t.createElement("TR"), a = 0; i > a; a++) {
                var c = t.createElement("TD");
                n && uh.ue(c, " "), o.appendChild(c)
            }
            h.appendChild(o)
        }
        return s
    }, uh.pi = function (t) {
        return uh.qg(document, t)
    }, uh.qg = function (t, e) {
        var i = t.createElement("DIV");
        return Ih ? (uh.w.Qb(i, Be(Oe("br"), e)), i.removeChild(i.firstChild)) : uh.w.Qb(i, e), uh.Ke(t, i)
    }, uh.Eh = function (t) {
        return uh.Df(document, t)
    }, uh.Df = function (t, e) {
        var i = t.createElement("DIV");
        return Ih ? (i.innerHTML = "<br>" + e, i.removeChild(i.firstChild)) : i.innerHTML = e, uh.Ke(t, i)
    }, uh.Ke = function (t, e) {
        if (1 == e.childNodes.length)return e.removeChild(e.firstChild);
        for (var i = t.createDocumentFragment(); e.firstChild;)i.appendChild(e.firstChild);
        return i
    }, uh.Hf = function () {
        return uh.ic(document)
    }, uh.ic = function (t) {
        return uh.Sg ? uh.xe : "CSS1Compat" == t.compatMode
    }, uh.canHaveChildren = function (t) {
        if (1 != t.nodeType)return !1;
        switch (t.tagName) {
            case"APPLET":
            case"AREA":
            case"BASE":
            case"BR":
            case"COL":
            case"COMMAND":
            case"EMBED":
            case"FRAME":
            case"HR":
            case"IMG":
            case"INPUT":
            case"IFRAME":
            case"ISINDEX":
            case"KEYGEN":
            case"LINK":
            case"NOFRAMES":
            case"NOSCRIPT":
            case"META":
            case"OBJECT":
            case"PARAM":
            case"SCRIPT":
            case"SOURCE":
            case"STYLE":
            case"TRACK":
            case"WBR":
                return !1
        }
        return !0
    }, uh.appendChild = function (t, e) {
        t.appendChild(e)
    }, uh.append = function (t) {
        uh.Fe(uh.S(t), t, arguments, 1)
    }, uh.qc = function (t) {
        for (var e; e = t.firstChild;)t.removeChild(e)
    }, uh.Pc = function (t, e) {
        e.parentNode && e.parentNode.insertBefore(t, e)
    }, uh.$d = function (t, e) {
        e.parentNode && e.parentNode.insertBefore(t, e.nextSibling)
    }, uh.Ff = function (t, e, i) {
        t.insertBefore(e, t.childNodes[i] || null)
    }, uh.removeNode = function (t) {
        return t && t.parentNode ? t.parentNode.removeChild(t) : null
    }, uh.ng = function (t, e) {
        var i = e.parentNode;
        i && i.replaceChild(t, e)
    }, uh.cf = function (t) {
        var e, i = t.parentNode;
        if (i && 11 != i.nodeType) {
            if (t.removeNode)return t.removeNode(!1);
            for (; e = t.firstChild;)i.insertBefore(e, t);
            return uh.removeNode(t)
        }
    }, uh.zb = function (t) {
        return _h && void 0 != t.children ? t.children : Ch(t.childNodes, function (t) {
            return 1 == t.nodeType
        })
    }, uh.Nd = function (e) {
        return t(e.firstElementChild) ? e.firstElementChild : uh.Mc(e.firstChild, !0)
    }, uh.lf = function (e) {
        return t(e.lastElementChild) ? e.lastElementChild : uh.Mc(e.lastChild, !1)
    }, uh.mf = function (e) {
        return t(e.nextElementSibling) ? e.nextElementSibling : uh.Mc(e.nextSibling, !0)
    }, uh.tf = function (e) {
        return t(e.previousElementSibling) ? e.previousElementSibling : uh.Mc(e.previousSibling, !1)
    }, uh.Mc = function (t, e) {
        for (; t && 1 != t.nodeType;)t = e ? t.nextSibling : t.previousSibling;
        return t
    }, uh.nf = function (t) {
        if (!t)return null;
        if (t.firstChild)return t.firstChild;
        for (; t && !t.nextSibling;)t = t.parentNode;
        return t ? t.nextSibling : null
    }, uh.uf = function (t) {
        if (!t)return null;
        if (!t.previousSibling)return t.parentNode;
        for (t = t.previousSibling; t && t.lastChild;)t = t.lastChild;
        return t
    }, uh.de = function (t) {
        return c(t) && 0 < t.nodeType
    }, uh.be = function (t) {
        return c(t) && 1 == t.nodeType
    }, uh.Mf = function (t) {
        return c(t) && t.window == t
    }, uh.sf = function (t) {
        var e;
        return !tr || Ih && $("9") && !$("10") && oh.SVGElement && t instanceof oh.SVGElement || !(e = t.parentElement) ? (e = t.parentNode, uh.be(e) ? e : null) : e
    }, uh.contains = function (t, e) {
        if (t.contains && 1 == e.nodeType)return t == e || t.contains(e);
        if ("undefined" != typeof t.compareDocumentPosition)return t == e || Boolean(16 & t.compareDocumentPosition(e));
        for (; e && t != e;)e = e.parentNode;
        return e == t
    }, uh.Ne = function (t, e) {
        if (t == e)return 0;
        if (t.compareDocumentPosition)return 2 & t.compareDocumentPosition(e) ? 1 : -1;
        if (Ih && !(Fh >= 9)) {
            if (9 == t.nodeType)return -1;
            if (9 == e.nodeType)return 1
        }
        if ("sourceIndex"in t || t.parentNode && "sourceIndex"in t.parentNode) {
            var i = 1 == t.nodeType, n = 1 == e.nodeType;
            if (i && n)return t.sourceIndex - e.sourceIndex;
            var s = t.parentNode, h = e.parentNode;
            return s == h ? uh.Pe(t, e) : !i && uh.contains(s, e) ? -1 * uh.Oe(t, e) : !n && uh.contains(h, t) ? uh.Oe(e, t) : (i ? t.sourceIndex : s.sourceIndex) - (n ? e.sourceIndex : h.sourceIndex)
        }
        return n = uh.S(t), i = n.createRange(), i.selectNode(t), i.collapse(!0), n = n.createRange(), n.selectNode(e), n.collapse(!0), i.compareBoundaryPoints(oh.Range.START_TO_END, n)
    }, uh.Oe = function (t, e) {
        var i = t.parentNode;
        if (i == e)return -1;
        for (var n = e; n.parentNode != i;)n = n.parentNode;
        return uh.Pe(n, t)
    }, uh.Pe = function (t, e) {
        for (var i = e; i = i.previousSibling;)if (i == t)return -1;
        return 1
    }, uh.Ze = function () {
        var t, e = arguments.length;
        if (!e)return null;
        if (1 == e)return arguments[0];
        var i = [], n = 1 / 0;
        for (t = 0; e > t; t++) {
            for (var s = [], h = arguments[t]; h;)s.unshift(h), h = h.parentNode;
            i.push(s), n = Math.min(n, s.length)
        }
        for (s = null, t = 0; n > t; t++) {
            for (var h = i[0][t], r = 1; e > r; r++)if (h != i[r][t])return s;
            s = h
        }
        return s
    },uh.S = function (t) {
        return 9 == t.nodeType ? t : t.ownerDocument || t.document
    },uh.Ab = function (t) {
        return t.contentDocument || t.contentWindow.document
    },uh.kf = function (t) {
        return t.contentWindow || uh.fa(uh.Ab(t))
    },uh.ue = function (t, e) {
        if ("textContent"in t)t.textContent = e; else if (3 == t.nodeType)t.data = e; else if (t.firstChild && 3 == t.firstChild.nodeType) {
            for (; t.lastChild != t.firstChild;)t.removeChild(t.lastChild);
            t.firstChild.data = e
        } else {
            uh.qc(t);
            var i = uh.S(t);
            t.appendChild(i.createTextNode(String(e)))
        }
    },uh.rf = function (t) {
        if ("outerHTML"in t)return t.outerHTML;
        var e = uh.S(t).createElement("DIV");
        return e.appendChild(t.cloneNode(!0)), e.innerHTML
    },uh.$e = function (t, e) {
        var i = [];
        return uh.Hd(t, e, i, !0) ? i[0] : void 0
    },uh.af = function (t, e) {
        var i = [];
        return uh.Hd(t, e, i, !1), i
    },uh.Hd = function (t, e, i, n) {
        if (null != t)for (t = t.firstChild; t;) {
            if (e(t) && (i.push(t), n) || uh.Hd(t, e, i, n))return !0;
            t = t.nextSibling
        }
        return !1
    },uh.ze = {SCRIPT: 1, STYLE: 1, HEAD: 1, IFRAME: 1, OBJECT: 1},uh.zc = {IMG: " ", BR: "\n"},uh.ce = function (t) {
        return uh.Af(t) && uh.Lf(t)
    },uh.Pb = function (t, e) {
        e ? t.tabIndex = 0 : (t.tabIndex = -1, t.removeAttribute("tabIndex"))
    },uh.If = function (t) {
        var e;
        return (e = uh.Oh(t) ? !t.disabled && (!uh.Af(t) || uh.Lf(t)) : uh.ce(t)) && Ih ? uh.Ah(t) : e
    },uh.Af = function (t) {
        return t = t.getAttributeNode("tabindex"), null != t && t.specified
    },uh.Lf = function (t) {
        return t = t.tabIndex, o(t) && t >= 0 && 32768 > t
    },uh.Oh = function (t) {
        return "A" == t.tagName || "INPUT" == t.tagName || "TEXTAREA" == t.tagName || "SELECT" == t.tagName || "BUTTON" == t.tagName
    },uh.Ah = function (t) {
        return t = a(t.getBoundingClientRect) ? t.getBoundingClientRect() : {
            height: t.offsetHeight,
            width: t.offsetWidth
        }, null != t && 0 < t.height && 0 < t.width
    },uh.Bb = function (t) {
        if (Qh && "innerText"in t)t = t.innerText.replace(/(\r\n|\r|\n)/g, "\n"); else {
            var e = [];
            uh.Qd(t, e, !0), t = e.join("")
        }
        return t = t.replace(/ \xAD /g, " ").replace(/\xAD/g, ""), t = t.replace(/\u200B/g, ""), Qh || (t = t.replace(/ +/g, " ")), " " != t && (t = t.replace(/^\s*/, "")), t
    },uh.Ui = function (t) {
        var e = [];
        return uh.Qd(t, e, !1), e.join("")
    },uh.Qd = function (t, e, i) {
        if (!(t.nodeName in uh.ze))if (3 == t.nodeType)e.push(i ? String(t.nodeValue).replace(/(\r\n|\r|\n)/g, "") : t.nodeValue); else if (t.nodeName in uh.zc)e.push(uh.zc[t.nodeName]); else for (t = t.firstChild; t;)uh.Qd(t, e, i), t = t.nextSibling
    },uh.pf = function (t) {
        return uh.Bb(t).length
    },uh.qf = function (t, e) {
        for (var i = e || uh.S(t).body, n = []; t && t != i;) {
            for (var s = t; s = s.previousSibling;)n.unshift(uh.Bb(s));
            t = t.parentNode
        }
        return n.join("").replace(/^[\s\xa0]+/, "").replace(/ +/g, " ").length
    },uh.of = function (t, e, i) {
        t = [t];
        for (var n = 0, s = null; 0 < t.length && e > n;)if (s = t.pop(), !(s.nodeName in uh.ze))if (3 == s.nodeType)var h = s.nodeValue.replace(/(\r\n|\r|\n)/g, "").replace(/ +/g, " "), n = n + h.length; else if (s.nodeName in uh.zc)n += uh.zc[s.nodeName].length; else for (h = s.childNodes.length - 1; h >= 0; h--)t.push(s.childNodes[h]);
        return c(i) && (i.Yi = s ? s.nodeValue.length + e - n - 1 : 0, i.node = s), s
    },uh.ee = function (t) {
        if (t && "number" == typeof t.length) {
            if (c(t))return "function" == typeof t.item || "string" == typeof t.item;
            if (a(t))return "function" == typeof t.item
        }
        return !1
    },uh.Kd = function (t, e, i, n) {
        if (!e && !i)return null;
        var s = e ? e.toUpperCase() : null;
        return uh.Jd(t, function (t) {
            return (!s || t.nodeName == s) && (!i || r(t.className) && M(t.className.split(/\s+/), i))
        }, !0, n)
    },uh.ff = function (t, e, i) {
        return uh.Kd(t, null, e, i)
    },uh.Jd = function (t, e, i, n) {
        i || (t = t.parentNode), i = null == n;
        for (var s = 0; t && (i || n >= s);) {
            if (e(t))return t;
            t = t.parentNode, s++
        }
        return null
    },uh.ef = function (t) {
        try {
            return t && t.activeElement
        } catch (e) {
        }
        return null
    },uh.Ri = function () {
        var e = uh.fa(), i = Lh && Ph;
        return t(e.devicePixelRatio) && !i ? e.devicePixelRatio : e.matchMedia ? uh.Xc(.75) || uh.Xc(1.5) || uh.Xc(2) || uh.Xc(3) || 1 : 1
    },uh.Xc = function (t) {
        return uh.fa().matchMedia("(-webkit-min-device-pixel-ratio: " + t + "),(min--moz-device-pixel-ratio: " + t + "),(min-resolution: " + t + "dppx)").matches ? t : 0
    },rh = Xe.prototype,rh.h = uh.h,rh.L = function () {
        return this.u
    },rh.b = function (t) {
        return uh.Md(this.u, t)
    },rh.sh = function (t) {
        return uh.vf(this.u, t)
    },rh.Lg = Xe.prototype.b,rh.F = function (t, e, i) {
        return uh.Lc(this.u, t, e, i)
    },rh.Ba = function (t, e) {
        return uh.Ba(t, e || this.u)
    },rh.ma = function (t, e) {
        return uh.ma(t, e || this.u)
    },rh.Pd = function (t, e) {
        return uh.Pd(t, e || this.u)
    },rh.Mg = Xe.prototype.F,rh.te = uh.te,rh.ra = function (t) {
        return uh.ra(t || this.fa())
    },rh.qh = function () {
        return uh.hf(this.fa())
    },rh.i = function () {
        return uh.Re(this.u, arguments)
    },rh.Ng = Xe.prototype.i,rh.createElement = function (t) {
        return this.u.createElement(t)
    },rh.createTextNode = function (t) {
        return this.u.createTextNode(String(t))
    },rh.eh = function (t, e, i) {
        return uh.Se(this.u, t, e, !!i)
    },rh.pi = function (t) {
        return uh.qg(this.u, t)
    },rh.Eh = function (t) {
        return uh.Df(this.u, t)
    },rh.Hf = function () {
        return uh.ic(this.u)
    },rh.fa = function () {
        return uh.Sd(this.u)
    },rh.rh = function () {
        return uh.Ld(this.u)
    },rh.$a = function () {
        return uh.jf(this.u)
    },rh.ef = function (t) {
        return uh.ef(t || this.u)
    },rh.appendChild = uh.appendChild,rh.append = uh.append,rh.canHaveChildren = uh.canHaveChildren,rh.qc = uh.qc,rh.Pc = uh.Pc,rh.$d = uh.$d,rh.Ff = uh.Ff,rh.removeNode = uh.removeNode,rh.ng = uh.ng,rh.cf = uh.cf,rh.zb = uh.zb,rh.Nd = uh.Nd,rh.lf = uh.lf,rh.mf = uh.mf,rh.tf = uh.tf,rh.nf = uh.nf,rh.uf = uh.uf,rh.de = uh.de,rh.be = uh.be,rh.Mf = uh.Mf,rh.sf = uh.sf,rh.contains = uh.contains,rh.Ne = uh.Ne,rh.Ze = uh.Ze,rh.S = uh.S,rh.Ab = uh.Ab,rh.kf = uh.kf,rh.ue = uh.ue,rh.rf = uh.rf,rh.$e = uh.$e,rh.af = uh.af,rh.ce = uh.ce,rh.Pb = uh.Pb,rh.If = uh.If,rh.Bb = uh.Bb,rh.pf = uh.pf,rh.qf = uh.qf,rh.of = uh.of,rh.ee = uh.ee,rh.Kd = uh.Kd,rh.ff = uh.ff,rh.Jd = uh.Jd,b(Ke, J);
    var br = [];
    rh = Ke.prototype, rh.l = function (t, e, i, n) {
        s(e) || (e && (br[0] = e.toString()), e = br);
        for (var h = 0; h < e.length; h++) {
            var r = ce(t, e[h], i || this.handleEvent, n || !1, this.ga || this);
            if (!r)break;
            this.v[r.key] = r
        }
        return this
    }, rh.Pf = function (t, e, i, n) {
        return Ue(this, t, e, i, n)
    }, rh.sb = function (t, e, i, n, h) {
        if (s(e))for (var r = 0; r < e.length; r++)this.sb(t, e[r], i, n, h); else i = i || this.handleEvent, h = h || this.ga || this, i = we(i), n = !!n, e = ne(t) ? t.ec(e, i, n, h) : t && (t = me(t)) ? t.ec(e, i, n, h) : null, e && (pe(e), delete this.v[e.key]);
        return this
    }, rh.Fa = function () {
        j(this.v, function (t, e) {
            this.v.hasOwnProperty(e) && pe(t)
        }, this), this.v = {}
    }, rh.j = function () {
        Ke.c.j.call(this), this.Fa()
    }, rh.handleEvent = function () {
        throw Error("EventHandler.handleEvent not implemented")
    }, b(We, J), We.prototype[zh] = !0, rh = We.prototype, rh.tc = function (t) {
        this.Jb = t
    }, rh.addEventListener = function (t, e, i, n) {
        ce(this, t, e, i, n)
    }, rh.removeEventListener = function (t, e, i, n) {
        de(this, t, e, i, n)
    }, rh.dispatchEvent = function (t) {
        var e, i = this.Jb;
        if (i)for (e = []; i; i = i.Jb)e.push(i);
        var i = this.$g, n = t.type || t;
        if (r(t))t = new _(t, i); else if (t instanceof _)t.target = t.target || i; else {
            var s = t;
            t = new _(n, i), K(t, s)
        }
        var h, s = !0;
        if (e)for (var o = e.length - 1; !t.qb && o >= 0; o--)h = t.currentTarget = e[o], s = ze(h, n, !0, t) && s;
        if (t.qb || (h = t.currentTarget = i, s = ze(h, n, !0, t) && s, t.qb || (s = ze(h, n, !1, t) && s)), e)for (o = 0; !t.qb && o < e.length; o++)h = t.currentTarget = e[o], s = ze(h, n, !1, t) && s;
        return s
    }, rh.j = function () {
        We.c.j.call(this), this.za && this.za.Fa(void 0), this.Jb = null
    }, rh.l = function (t, e, i, n) {
        return this.za.add(String(t), e, !1, i, n)
    }, rh.Pf = function (t, e, i, n) {
        return this.za.add(String(t), e, !0, i, n)
    }, rh.sb = function (t, e, i, n) {
        return this.za.remove(String(t), e, i, n)
    }, rh.ec = function (t, e, i, n) {
        return this.za.ec(String(t), e, i, n)
    }, rh.hasListener = function (e, i) {
        return this.za.hasListener(t(e) ? String(e) : void 0, i)
    }, uh.vendor = {}, uh.vendor.Rd = function () {
        return Dh ? "Webkit" : Lh ? "Moz" : Ih ? "ms" : Ah ? "O" : null
    }, uh.vendor.Vi = function () {
        return Dh ? "-webkit" : Lh ? "-moz" : Ih ? "-ms" : Ah ? "-o" : null
    }, uh.vendor.Ti = function (e, i) {
        if (i && e in i)return e;
        var n = uh.vendor.Rd();
        return n ? (n = n.toLowerCase(), n += C(e), !t(i) || n in i ? n : null) : null
    }, uh.vendor.Si = function (t) {
        return ((uh.vendor.Rd() || "") + t).toLowerCase()
    }, rh = Ve.prototype, rh.clone = function () {
        return new Ve(this.top, this.right, this.bottom, this.left)
    }, rh.toString = function () {
        return "(" + this.top + "t, " + this.right + "r, " + this.bottom + "b, " + this.left + "l)"
    }, rh.contains = function (t) {
        return this && t ? t instanceof Ve ? t.left >= this.left && t.right <= this.right && t.top >= this.top && t.bottom <= this.bottom : t.x >= this.left && t.x <= this.right && t.y >= this.top && t.y <= this.bottom : !1
    }, rh.expand = function (t, e, i, n) {
        return c(t) ? (this.top -= t.top, this.right += t.right, this.bottom += t.bottom, this.left -= t.left) : (this.top -= t, this.right += e, this.bottom += i, this.left -= n), this
    }, rh.ceil = function () {
        return this.top = Math.ceil(this.top), this.right = Math.ceil(this.right), this.bottom = Math.ceil(this.bottom), this.left = Math.ceil(this.left), this
    }, rh.floor = function () {
        return this.top = Math.floor(this.top), this.right = Math.floor(this.right), this.bottom = Math.floor(this.bottom), this.left = Math.floor(this.left), this
    }, rh.round = function () {
        return this.top = Math.round(this.top), this.right = Math.round(this.right), this.bottom = Math.round(this.bottom), this.left = Math.round(this.left), this
    }, rh.translate = function (t, e) {
        return t instanceof He ? (this.left += t.x, this.right += t.x, this.top += t.y, this.bottom += t.y) : (this.left += t, this.right += t, o(e) && (this.top += e, this.bottom += e)), this
    }, rh.scale = function (t, e) {
        var i = o(e) ? e : t;
        return this.left *= t, this.right *= t, this.top *= i, this.bottom *= i, this
    }, rh = Ge.prototype, rh.clone = function () {
        return new Ge(this.left, this.top, this.width, this.height)
    }, rh.toString = function () {
        return "(" + this.left + ", " + this.top + " - " + this.width + "w x " + this.height + "h)"
    }, rh.contains = function (t) {
        return t instanceof Ge ? this.left <= t.left && this.left + this.width >= t.left + t.width && this.top <= t.top && this.top + this.height >= t.top + t.height : t.x >= this.left && t.x <= this.left + this.width && t.y >= this.top && t.y <= this.top + this.height
    }, rh.wf = function () {
        return new Ye(this.width, this.height)
    }, rh.ceil = function () {
        return this.left = Math.ceil(this.left), this.top = Math.ceil(this.top), this.width = Math.ceil(this.width), this.height = Math.ceil(this.height), this
    }, rh.floor = function () {
        return this.left = Math.floor(this.left), this.top = Math.floor(this.top), this.width = Math.floor(this.width), this.height = Math.floor(this.height), this
    }, rh.round = function () {
        return this.left = Math.round(this.left), this.top = Math.round(this.top), this.width = Math.round(this.width), this.height = Math.round(this.height), this
    }, rh.translate = function (t, e) {
        return t instanceof He ? (this.left += t.x, this.top += t.y) : (this.left += t, o(e) && (this.top += e)), this
    }, rh.scale = function (t, e) {
        var i = o(e) ? e : t;
        return this.left *= t, this.width *= t, this.top *= i, this.height *= i, this
    };
    var vr = {}, yr = {thin: 2, medium: 4, thick: 6};
    Ih && $(12), i(ui), ui.prototype.$f = 0, b(fi, We), fi.prototype.Fh = ui.kb();
    var mr = null;
    rh = fi.prototype, rh.re = function (t) {
        this.B && this.B.ba && (H(this.B.ba, this.T), Y(this.B.ba, t, this)), this.T = t
    }, rh.b = function () {
        return this.g
    }, rh.Ba = function (t) {
        return this.g ? this.Y.Ba(t, this.g) : []
    }, rh.ma = function (t) {
        return this.g ? this.Y.ma(t, this.g) : null
    }, rh.Pd = function (t) {
        return this.ma(t)
    }, rh.ea = function () {
        return this.ab || (this.ab = new Ke(this)), this.ab
    }, rh.Rb = function (t) {
        if (this == t)throw Error("Unable to set parent component");
        var e;
        if (e = t && this.B && this.T) {
            e = this.B;
            var i = this.T;
            e = e.ba && i ? X(e.ba, i) || null : null
        }
        if (e && this.B != t)throw Error("Unable to set parent component");
        this.B = t, fi.c.tc.call(this, t)
    }, rh.getParent = function () {
        return this.B
    }, rh.tc = function (t) {
        if (this.B && this.B != t)throw Error("Method not supported");
        fi.c.tc.call(this, t)
    }, rh.h = function () {
        return this.Y
    }, rh.i = function () {
        this.g = this.Y.createElement("DIV")
    }, rh.fb = function (t) {
        if (this.G)throw Error("Component already rendered");
        this.g || this.i(), t ? t.insertBefore(this.g, null) : this.Y.L().body.appendChild(this.g), this.B && !this.B.G || this.la()
    }, rh.Wa = function (t) {
        if (this.G)throw Error("Component already rendered");
        if (!t || !this.Ie(t))throw Error("Invalid element to decorate");
        this.Jg = !0;
        var e = uh.S(t);
        this.Y && this.Y.L() == e || (this.Y = uh.h(t)), this.Xa(t), this.la()
    }, rh.Ie = function () {
        return !0
    }, rh.Xa = function (t) {
        this.g = t
    }, rh.la = function () {
        this.G = !0, gi(this, function (t) {
            !t.G && t.b() && t.la()
        })
    }, rh.qa = function () {
        gi(this, function (t) {
            t.G && t.qa()
        }), this.ab && this.ab.Fa(), this.G = !1
    }, rh.j = function () {
        this.G && this.qa(), this.ab && (this.ab.ya(), delete this.ab), gi(this, function (t) {
            t.ya()
        }), !this.Jg && this.g && uh.removeNode(this.g), this.B = this.Ra = this.g = this.ba = this.o = null, fi.c.j.call(this)
    }, rh.Od = function () {
        return this.Ra
    }, rh.jb = function () {
        return this.g
    }, rh.removeChild = function (t, e) {
        if (t) {
            var i = r(t) ? t : di(t);
            t = this.ba && i ? X(this.ba, i) || null : null, i && t && (H(this.ba, i), A(this.o, t), e && (t.qa(), t.g && uh.removeNode(t.g)), t.Rb(null))
        }
        if (!t)throw Error("Child is not in parent component");
        return t
    }, rh.qc = function (t) {
        for (var e = []; this.o && 0 != this.o.length;)e.push(this.removeChild(pi(this, 0), t));
        return e
    }, b(bi, We);
    var wr = 0;
    bi.prototype.Sa = function () {
        this.xa("begin")
    }, bi.prototype.eb = function () {
        this.xa("end")
    }, bi.prototype.xa = function (t) {
        this.dispatchEvent(t)
    }, b(vi, We), rh = vi.prototype, rh.enabled = !1, rh.m = null, rh.setInterval = function (t) {
        this.nb = t, this.m && this.enabled ? (this.stop(), this.start()) : this.m && this.stop()
    }, rh.Ii = function () {
        if (this.enabled) {
            var t = lh() - this.he;
            t > 0 && t < .8 * this.nb ? this.m = this.Sb.setTimeout(this.yd, this.nb - t) : (this.m && (this.Sb.clearTimeout(this.m), this.m = null), this.dispatchEvent(xr), this.enabled && (this.m = this.Sb.setTimeout(this.yd, this.nb), this.he = lh()))
        }
    }, rh.start = function () {
        this.enabled = !0, this.m || (this.m = this.Sb.setTimeout(this.yd, this.nb), this.he = lh())
    }, rh.stop = function () {
        this.enabled = !1, this.m && (this.Sb.clearTimeout(this.m), this.m = null)
    }, rh.j = function () {
        vi.c.j.call(this), this.stop(), delete this.Sb
    };
    var xr = "tick";
    b(mi, J), rh = mi.prototype, rh.T = 0, rh.j = function () {
        mi.c.j.call(this), this.stop(), delete this.je, delete this.ga
    }, rh.start = function (e) {
        this.stop(), this.T = yi(this.Ec, t(e) ? e : this.nb)
    }, rh.stop = function () {
        0 != this.T && oh.clearTimeout(this.T), this.T = 0
    }, rh.kh = function () {
        this.T = 0, this.je && this.je.call(this.ga)
    };
    var Sr = {}, Er = null;
    b(Ei, bi), rh = Ei.prototype, rh.play = function (t) {
        if (t || this.pa == wr)this.oa = 0, this.coords = this.wc; else if (1 == this.pa)return !1;
        wi(this), this.startTime = t = lh(), -1 == this.pa && (this.startTime -= this.duration * this.oa), this.endTime = this.startTime + this.duration, this.oa || this.Sa(), this.xa("play"), -1 == this.pa && this.xa("resume"), this.pa = 1;
        var e = l(this);
        return e in Sr || (Sr[e] = this), xi(), Ci(this, t), !0
    }, rh.stop = function (t) {
        wi(this), this.pa = wr, t && (this.oa = 1), Ti(this, this.oa), this.xa("stop"), this.eb()
    }, rh.pause = function () {
        1 == this.pa && (wi(this), this.pa = -1, this.xa("pause"))
    }, rh.j = function () {
        this.pa == wr || this.stop(!1), this.xa("destroy"), Ei.c.j.call(this)
    }, rh.le = function () {
        this.xa("animate")
    }, rh.xa = function (t) {
        this.dispatchEvent(new Ni(t, this))
    }, b(Ni, _), uh.a = {}, uh.a.set = function (t, e) {
        t.className = e
    }, uh.a.get = function (t) {
        return t = t.className, r(t) && t.match(/\S+/g) || []
    }, uh.a.add = function (t) {
        var e = uh.a.get(t), i = D(arguments, 1), n = e.length + i.length;
        return uh.a.Be(e, i), uh.a.set(t, e.join(" ")), e.length == n
    }, uh.a.remove = function (t) {
        var e = uh.a.get(t), i = D(arguments, 1), n = uh.a.gf(e, i);
        return uh.a.set(t, n.join(" ")), n.length == e.length - i.length
    }, uh.a.Be = function (t, e) {
        for (var i = 0; i < e.length; i++)M(t, e[i]) || t.push(e[i])
    }, uh.a.gf = function (t, e) {
        return Ch(t, function (t) {
            return !M(e, t)
        })
    }, uh.a.N = function (t, e, i) {
        for (var n = uh.a.get(t), s = !1, h = 0; h < n.length; h++)n[h] == e && (L(n, h--, 1), s = !0);
        return s && (n.push(i), uh.a.set(t, n.join(" "))), s
    }, uh.a.ah = function (t, e, i) {
        var n = uh.a.get(t);
        r(e) ? A(n, e) : s(e) && (n = uh.a.gf(n, e)), r(i) && !M(n, i) ? n.push(i) : s(i) && uh.a.Be(n, i), uh.a.set(t, n.join(" "))
    }, uh.a.has = function (t, e) {
        return M(uh.a.get(t), e)
    }, uh.a.enable = function (t, e, i) {
        i ? uh.a.add(t, e) : uh.a.remove(t, e)
    }, uh.a.toggle = function (t, e) {
        var i = !uh.a.has(t, e);
        return uh.a.enable(t, e, i), i
    }, rh = Di.prototype, rh.Ma = function () {
        Pi(this);
        for (var t = [], e = 0; e < this.v.length; e++)t.push(this.Ca[this.v[e]]);
        return t
    }, rh.lb = function () {
        return Pi(this), this.v.concat()
    }, rh.$b = function (t) {
        return ji(this.Ca, t)
    }, rh.clear = function () {
        this.Ca = {}, this.C = this.v.length = 0
    }, rh.remove = function (t) {
        return ji(this.Ca, t) ? (delete this.Ca[t], this.C--, this.v.length > 2 * this.C && Pi(this), !0) : !1
    }, rh.get = function (t, e) {
        return ji(this.Ca, t) ? this.Ca[t] : e
    }, rh.set = function (t, e) {
        ji(this.Ca, t) || (this.C++, this.v.push(t)), this.Ca[t] = e
    }, rh.addAll = function (t) {
        var e;
        t instanceof Di ? (e = t.lb(), t = t.Ma()) : (e = R(t), t = B(t));
        for (var i = 0; i < e.length; i++)this.set(e[i], t[i])
    }, rh.forEach = function (t, e) {
        for (var i = this.lb(), n = 0; n < i.length; n++) {
            var s = i[n], h = this.get(s);
            t.call(e, h, s, this)
        }
    }, rh.clone = function () {
        return new Di(this)
    }, Oi.prototype.Ye = null;
    var Cr = 0;
    Oi.prototype.reset = function (t, e, i, n, s) {
        "number" == typeof s || Cr++, n || lh(), this.jc = t, this.Nh = e, delete this.Ye
    }, Oi.prototype.ug = function (t) {
        this.jc = t
    }, Ri.prototype.toString = function () {
        return this.name
    };
    var Tr = new Ri("INFO", 800), Nr = new Ri("CONFIG", 700);
    rh = Bi.prototype, rh.getName = function () {
        return this.Uf
    }, rh.getParent = function () {
        return this.B
    }, rh.zb = function () {
        return this.o || (this.o = {}), this.o
    }, rh.ug = function (t) {
        this.jc = t
    }, rh.log = function (t, e, i) {
        if (t.value >= Fi(this).value)for (a(e) && (e = e()), t = new Oi(t, String(e), this.Uf), i && (t.Ye = i), i = "log:" + t.Nh, oh.console && (oh.console.timeStamp ? oh.console.timeStamp(i) : oh.console.markTimeline && oh.console.markTimeline(i)), oh.msWriteProfilerMark && oh.msWriteProfilerMark(i), i = this; i;) {
            e = i;
            var n = t;
            if (e.zf)for (var s = 0, h = void 0; h = e.zf[s]; s++)h(n);
            i = i.getParent()
        }
    }, rh.info = function (t, e) {
        this.log(Tr, t, e)
    };
    var Mr = {}, Ar = null;
    !P("Android") || z() || P("Firefox") || W(), z(), uh.dataset = {}, uh.dataset.Tb = !Ih, uh.dataset.wb = "data-", uh.dataset.set = function (t, e, i) {
        uh.dataset.Tb && t.dataset ? t.dataset[e] = i : t.setAttribute(uh.dataset.wb + E(e), i)
    }, uh.dataset.get = function (t, e) {
        return uh.dataset.Tb && t.dataset ? e in t.dataset ? t.dataset[e] : null : t.getAttribute(uh.dataset.wb + E(e))
    }, uh.dataset.remove = function (t, e) {
        uh.dataset.Tb && t.dataset ? delete t.dataset[e] : t.removeAttribute(uh.dataset.wb + E(e))
    }, uh.dataset.has = function (t, e) {
        return uh.dataset.Tb && t.dataset ? e in t.dataset : t.hasAttribute ? t.hasAttribute(uh.dataset.wb + E(e)) : !!t.getAttribute(uh.dataset.wb + E(e))
    }, uh.dataset.getAll = function (t) {
        if (uh.dataset.Tb && t.dataset)return t.dataset;
        var e = {};
        t = t.attributes;
        for (var i = 0; i < t.length; ++i) {
            var n = t[i];
            if (0 == n.name.lastIndexOf(uh.dataset.wb, 0)) {
                var s = S(n.name.substr(5));
                e[s] = n.value
            }
        }
        return e
    }, Xi.prototype.getKey = function () {
        return this.Nf
    }, Xi.prototype.clone = function () {
        return new Xi(this.Nf, this.Ig)
    }, b(Ki, _), b(zi, We), zi.prototype.Ka = !1, zi.prototype.Ib = !1, zi.prototype.Gb = null;
    var Ir = function (t, e) {
        var i = e || Wi;
        return function () {
            var e = this || oh, e = e.closure_memoize_cache_ || (e.closure_memoize_cache_ = {}), n = i(l(t), arguments);
            return e.hasOwnProperty(n) ? e[n] : e[n] = t.apply(this, arguments)
        }
    }(function () {
        return Ih ? Fh >= 8 : "onhashchange"in oh
    }), kr = Ih && !(Fh >= 8);
    rh = zi.prototype, rh.Hb = null, rh.j = function () {
        zi.c.j.call(this), this.D.ya(), this.sc(!1)
    }, rh.sc = function (t) {
        t != this.Ka && (kr && !this.Gd ? this.xg = t : t ? (Ah ? this.D.l(this.aa.document, Lr, this.ki) : Lh && this.D.l(this.aa, "pageshow", this.ei), Ir() && this.ub ? (this.D.l(this.aa, "hashchange", this.Xh), this.Ka = !0, this.dispatchEvent(new Ki(Vi(this)))) : (!Ih || Ui() || this.Gd) && (this.D.l(this.m, xr, d(this.Je, this, !0)), this.Ka = !0, kr || (this.Gb = Vi(this), this.dispatchEvent(new Ki(Vi(this)))), this.m.start())) : (this.Ka = !1, this.D.Fa(), this.m.stop()))
    }, rh.Uh = function () {
        this.Gd = !0, this.fc.value && Ji(this, this.fc.value, !0), this.sc(this.xg)
    }, rh.ei = function (t) {
        t.H.persisted && (this.sc(!1), this.sc(!0))
    }, rh.Xh = function () {
        var t = Gi(this.aa);
        t != this.Gb && qi(this, t)
    }, rh.Je = function () {
        if (this.ub) {
            var t = Gi(this.aa);
            t != this.Gb && qi(this, t)
        }
        (!this.ub || kr) && (t = Zi(this) || "", (null == this.Hb || t == this.Hb) && (this.Hb = null, t != this.Gb && qi(this, t)))
    }, rh.ki = function () {
        this.m.stop(), this.m.start()
    };
    var Lr = ["mousedown", "keydown", "mousemove"], Dr = 0, Pr = 150, jr = 1e4;
    b(_i, Ei), _i.prototype.yc = e, _i.prototype.le = function () {
        this.yc(), _i.c.le.call(this)
    }, _i.prototype.eb = function () {
        this.yc(), _i.c.eb.call(this)
    }, _i.prototype.Sa = function () {
        this.yc(), _i.c.Sa.call(this)
    }, b(Qi, _i);
    var Or = 1 / 1024, Br = -1;
    rh = Qi.prototype, rh.yc = function () {
        var t = this.coords[0];
        Math.abs(t - this.Sc) >= Or && (oi(this.element, t), this.Sc = t)
    }, rh.Sa = function () {
        this.Sc = Br, Qi.c.Sa.call(this)
    }, rh.eb = function () {
        this.Sc = Br, Qi.c.eb.call(this)
    }, rh.show = function () {
        this.element.style.display = ""
    }, rh.Vd = function () {
        this.element.style.display = "none"
    }, b(tn, Qi), b(en, Qi), b(nn, Qi), nn.prototype.Sa = function () {
        this.show(), nn.c.Sa.call(this)
    }, nn.prototype.eb = function () {
        this.Vd(), nn.c.eb.call(this)
    }, b(sn, Qi), sn.prototype.Sa = function () {
        this.show(), sn.c.Sa.call(this)
    };
    var Rr = /^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/, Fr = Dh;
    on.prototype.toString = function () {
        var t = [], e = this.gb;
        if (e && t.push(dn(e, Hr, !0), ":"), e = this.Ja) {
            t.push("//");
            var i = this.tb;
            i && t.push(dn(i, Hr, !0), "@"), t.push(encodeURIComponent(String(e)).replace(/%25([0-9a-fA-F]{2})/g, "%$1")), e = this.Mb, null != e && t.push(":", String(e))
        }
        return (e = this.Ea) && (this.Ja && "/" != e.charAt(0) && t.push("/"), t.push(dn(e, "/" == e.charAt(0) ? Xr : Yr, !0))), (e = this.ia.toString()) && t.push("?", e), (e = this.ib) && t.push("#", dn(e, Ur)), t.join("")
    }, on.prototype.resolve = function (t) {
        var e = this.clone(), i = !!t.gb;
        if (i ? an(e, t.gb) : i = !!t.tb, i) {
            var n = t.tb;
            un(e), e.tb = n
        } else i = !!t.Ja;
        if (i ? (n = t.Ja, un(e), e.Ja = n) : i = null != t.Mb, n = t.Ea, i)cn(e, t.Mb); else if (i = !!t.Ea) {
            if ("/" != n.charAt(0))if (this.Ja && !this.Ea)n = "/" + n; else {
                var s = e.Ea.lastIndexOf("/");
                -1 != s && (n = e.Ea.substr(0, s + 1) + n)
            }
            if (s = n, ".." == s || "." == s)n = ""; else if (-1 != s.indexOf("./") || -1 != s.indexOf("/.")) {
                for (var n = 0 == s.lastIndexOf("/", 0), s = s.split("/"), h = [], r = 0; r < s.length;) {
                    var o = s[r++];
                    "." == o ? n && r == s.length && h.push("") : ".." == o ? ((1 < h.length || 1 == h.length && "" != h[0]) && h.pop(), n && r == s.length && h.push("")) : (h.push(o), n = !0)
                }
                n = h.join("/")
            } else n = s
        }
        return i ? (un(e), e.Ea = n) : i = "" !== t.ia.toString(), i ? ln(e, fn(t.ia.toString())) : i = !!t.ib, i && (t = t.ib, un(e), e.ib = t), e
    }, on.prototype.clone = function () {
        return new on(this)
    }, on.prototype.se = function (t) {
        return this.na = t, this.ia && this.ia.se(t), this
    };
    var Hr = /[#\/\?@]/g, Yr = /[\#\?:]/g, Xr = /[\#\?]/g, Kr = /[\#\?@]/g, Ur = /#/g;
    rh = gn.prototype, rh.add = function (t, e) {
        bn(this), this.da = null, t = vn(this, t);
        var i = this.A.get(t);
        return i || this.A.set(t, i = []), i.push(e), this.C++, this
    }, rh.remove = function (t) {
        return bn(this), t = vn(this, t), this.A.$b(t) ? (this.da = null, this.C -= this.A.get(t).length, this.A.remove(t)) : !1
    }, rh.clear = function () {
        this.A = this.da = null, this.C = 0
    }, rh.$b = function (t) {
        return bn(this), t = vn(this, t), this.A.$b(t)
    }, rh.lb = function () {
        bn(this);
        for (var t = this.A.Ma(), e = this.A.lb(), i = [], n = 0; n < e.length; n++)for (var s = t[n], h = 0; h < s.length; h++)i.push(e[n]);
        return i
    }, rh.Ma = function (t) {
        bn(this);
        var e = [];
        if (r(t))this.$b(t) && (e = I(e, this.A.get(vn(this, t)))); else {
            t = this.A.Ma();
            for (var i = 0; i < t.length; i++)e = I(e, t[i])
        }
        return e
    }, rh.set = function (t, e) {
        return bn(this), this.da = null, t = vn(this, t), this.$b(t) && (this.C -= this.A.get(t).length), this.A.set(t, [e]), this.C++, this
    }, rh.get = function (t, e) {
        var i = t ? this.Ma(t) : [];
        return 0 < i.length ? String(i[0]) : e
    }, rh.toString = function () {
        if (this.da)return this.da;
        if (!this.A)return "";
        for (var t = [], e = this.A.lb(), i = 0; i < e.length; i++)for (var n = e[i], s = encodeURIComponent(String(n)), n = this.Ma(n), h = 0; h < n.length; h++) {
            var r = s;
            "" !== n[h] && (r += "=" + encodeURIComponent(String(n[h]))), t.push(r)
        }
        return this.da = t.join("&")
    }, rh.clone = function () {
        var t = new gn;
        return t.da = this.da, this.A && (t.A = this.A.clone(), t.C = this.C), t
    }, rh.se = function (t) {
        t && !this.na && (bn(this), this.da = null, this.A.forEach(function (t, e) {
            var i = e.toLowerCase();
            e != i && (this.remove(e), this.remove(i), 0 < t.length && (this.da = null, this.A.set(vn(this, i), k(t)), this.C += t.length))
        }, this)), this.na = t
    }, rh.extend = function () {
        for (var t = 0; t < arguments.length; t++)Li(arguments[t], function (t, e) {
            this.add(e, t)
        }, this)
    }, uh.Z = {}, uh.Z.Rg = Ih ? 'javascript:""' : "about:blank", uh.Z.Mi = Ih ? 'javascript:""' : "javascript:undefined", uh.Z.Xg = "border:0;vertical-align:bottom;", uh.Z.Dd = function (t, e) {
        var i;
        return i = r(e) ? (new Ce).Db(e).La() : e instanceof Ce ? Te(e) : "", t.i("iframe", {
            frameborder: 0,
            style: uh.Z.Xg + i,
            src: uh.Z.Rg
        })
    }, uh.Z.hj = function (t, e) {
        uh.Z.Kg(t, Re(e, null))
    }, uh.Z.Kg = function (t, e) {
        var i = uh.Ab(t);
        i.open(), uh.w.Ic(i, e), i.close()
    }, uh.Z.Oi = function (t, e, i, n, s) {
        var h = uh.h(t);
        return r(e) && (e = Re(e, null)), r(i) && (i = Re(i, null)), r(n) && (n = (new Ce).Db(n)), e = Oe("html", {}, Be(Oe("head", {}, e), Oe("body", {}, i))), s || (e = Be(pr, e)), n = uh.Z.Dd(h, n), t.appendChild(n), uh.Z.Kg(n, e), n
    }, b(Sn, We), rh = Sn.prototype, rh.g = null, rh.Qc = null, rh.ge = null, rh.Rc = null, rh.ha = -1, rh.bb = -1, rh.vd = !1;
    var Wr = {
        3: 13,
        12: 144,
        63232: 38,
        63233: 40,
        63234: 37,
        63235: 39,
        63236: 112,
        63237: 113,
        63238: 114,
        63239: 115,
        63240: 116,
        63241: 117,
        63242: 118,
        63243: 119,
        63244: 120,
        63245: 121,
        63246: 122,
        63247: 123,
        63248: 44,
        63272: 46,
        63273: 36,
        63275: 35,
        63276: 33,
        63277: 34,
        63289: 144,
        63302: 45
    }, zr = {
        Up: 38,
        Down: 40,
        Left: 37,
        Right: 39,
        Enter: 13,
        F1: 112,
        F2: 113,
        F3: 114,
        F4: 115,
        F5: 116,
        F6: 117,
        F7: 118,
        F8: 119,
        F9: 120,
        F10: 121,
        F11: 122,
        F12: 123,
        "U+007F": 46,
        Home: 36,
        End: 35,
        PageUp: 33,
        PageDown: 34,
        Insert: 45
    }, Vr = Ih || Dh && $("525"), Gr = jh && Lh;
    rh = Sn.prototype, rh.vh = function (t) {
        Dh && (17 == this.ha && !t.ctrlKey || 18 == this.ha && !t.altKey || jh && 91 == this.ha && !t.metaKey) && (this.bb = this.ha = -1), -1 == this.ha && (t.ctrlKey && 17 != t.keyCode ? this.ha = 17 : t.altKey && 18 != t.keyCode ? this.ha = 18 : t.metaKey && 91 != t.keyCode && (this.ha = 91)), Vr && !yn(t.keyCode, this.ha, t.shiftKey, t.ctrlKey, t.altKey) ? this.handleEvent(t) : (this.bb = wn(t.keyCode), Gr && (this.vd = t.altKey))
    }, rh.xh = function (t) {
        this.bb = this.ha = -1, this.vd = t.altKey
    }, rh.handleEvent = function (t) {
        var e, i, n = t.H, s = n.altKey;
        Ih && "keypress" == t.type ? (e = this.bb, i = 13 != e && 27 != e ? n.keyCode : 0) : Dh && "keypress" == t.type ? (e = this.bb, i = 0 <= n.charCode && 63232 > n.charCode && mn(e) ? n.charCode : 0) : Ah ? (e = this.bb, i = mn(e) ? n.keyCode : 0) : (e = n.keyCode || this.bb, i = n.charCode || 0, Gr && (s = this.vd), jh && 63 == i && 224 == e && (e = 191));
        var h = e = wn(e), r = n.keyIdentifier;
        e ? e >= 63232 && e in Wr ? h = Wr[e] : 25 == e && t.shiftKey && (h = 9) : r && r in zr && (h = zr[r]), t = h == this.ha, this.ha = h, n = new En(h, i, t, n), n.altKey = s, this.dispatchEvent(n)
    }, rh.b = function () {
        return this.g
    }, rh.detach = function () {
        this.Qc && (pe(this.Qc), pe(this.ge), pe(this.Rc), this.Rc = this.ge = this.Qc = null), this.g = null, this.bb = this.ha = -1
    }, rh.j = function () {
        Sn.c.j.call(this), this.detach()
    }, b(En, ee), b(Cn, We);
    var $r = [Ih && !$("11") ? "readystatechange" : "load", "abort", "error"];
    Cn.prototype.start = function () {
        var t = this.hc;
        Eh(R(t), function (e) {
            var i = t[e];
            if (i && (delete t[e], !this.Ya)) {
                var n;
                n = this.B ? uh.h(this.B).i("IMG") : new Image, i.Qe && (n.crossOrigin = i.Qe), this.ga.l(n, $r, this.fg), this.gc[e] = n, n.id = e, n.src = i.src
            }
        }, this)
    }, Cn.prototype.fg = function (t) {
        var e = t.currentTarget;
        if (e) {
            if ("readystatechange" == t.type) {
                if ("complete" != e.readyState)return;
                t.type = "load"
            }
            "undefined" == typeof e.naturalWidth && ("load" == t.type ? (e.naturalWidth = e.width, e.naturalHeight = e.height) : (e.naturalWidth = 0, e.naturalHeight = 0)), this.dispatchEvent({
                type: t.type,
                target: e
            }), !this.Ya && (t = e.id, delete this.hc[t], e = this.gc[t]) && (delete this.gc[t], this.ga.sb(e, $r, this.fg), F(this.gc) && F(this.hc) && this.dispatchEvent("complete"))
        }
    }, Cn.prototype.j = function () {
        delete this.hc, delete this.gc, q(this.ga), Cn.c.j.call(this)
    };
    var Jr;
    uh.f = {}, uh.f.vb = !1, uh.f.get = function (t) {
        return uh.f.vb || t.classList ? t.classList : (t = t.className, r(t) && t.match(/\S+/g) || [])
    }, uh.f.set = function (t, e) {
        t.className = e
    }, uh.f.contains = function (t, e) {
        return uh.f.vb || t.classList ? t.classList.contains(e) : M(uh.f.get(t), e)
    }, uh.f.add = function (t, e) {
        uh.f.vb || t.classList ? t.classList.add(e) : uh.f.contains(t, e) || (t.className += 0 < t.className.length ? " " + e : e)
    }, uh.f.addAll = function (t, e) {
        if (uh.f.vb || t.classList)Eh(e, function (e) {
            uh.f.add(t, e)
        }); else {
            var i = {};
            Eh(uh.f.get(t), function (t) {
                i[t] = !0
            }), Eh(e, function (t) {
                i[t] = !0
            }), t.className = "";
            for (var n in i)t.className += 0 < t.className.length ? " " + n : n
        }
    }, uh.f.remove = function (t, e) {
        uh.f.vb || t.classList ? t.classList.remove(e) : uh.f.contains(t, e) && (t.className = Ch(uh.f.get(t), function (t) {
            return t != e
        }).join(" "))
    }, uh.f.Fa = function (t, e) {
        uh.f.vb || t.classList ? Eh(e, function (e) {
            uh.f.remove(t, e)
        }) : t.className = Ch(uh.f.get(t), function (t) {
            return !M(e, t)
        }).join(" ")
    }, uh.f.enable = function (t, e, i) {
        i ? uh.f.add(t, e) : uh.f.remove(t, e)
    }, uh.f.Pi = function (t, e, i) {
        (i ? uh.f.addAll : uh.f.Fa)(t, e)
    }, uh.f.N = function (t, e, i) {
        return uh.f.contains(t, e) ? (uh.f.remove(t, e), uh.f.add(t, i), !0) : !1
    }, uh.f.toggle = function (t, e) {
        var i = !uh.f.contains(t, e);
        return uh.f.enable(t, e, i), i
    }, uh.f.ah = function (t, e, i) {
        uh.f.remove(t, e), uh.f.add(t, i)
    }, b(An, We);
    var Zr = Ih && !$("12") || Lh && $("1.9.3");
    rh = An.prototype, rh.ea = function () {
        return this.D
    }, rh.sc = function (t) {
        this.Ka = t
    }, rh.j = function () {
        An.c.j.call(this), de(this.handle, ["touchstart", "mousedown"], this.Ag, !1, this), this.D.Fa(), Zr && this.u.releaseCapture(), this.handle = this.target = null
    }, rh.Ag = function (t) {
        var e = "mousedown" == t.type;
        if (!this.Ka || this.hb || e && (!ie(t) || Dh && jh && t.ctrlKey))this.dispatchEvent("earlycancel"); else {
            if (kn(t), 0 == this.Ef) {
                if (!this.dispatchEvent(new On("start", this, t.clientX, t.clientY)))return;
                this.hb = !0, this.mg && t.preventDefault()
            } else this.mg && t.preventDefault();
            var e = this.u, i = e.documentElement, n = !Zr;
            this.D.l(e, ["touchmove", "mousemove"], this.zh, n), this.D.l(e, ["touchend", "mouseup"], this.Jc, n), Zr ? (i.setCapture(!1), this.D.l(i, "losecapture", this.Jc)) : this.D.l(uh.fa(e), "blur", this.Jc), Ih && this.Gh && this.D.l(e, "dragstart", Q), this.si && this.D.l(this.si, "scroll", this.di, n), this.clientX = this.Bg = t.clientX, this.clientY = this.Cg = t.clientY, this.screenX = t.screenX, this.screenY = t.screenY, this.qd ? (t = this.target, e = t.offsetLeft, i = t.offsetParent, i || "fixed" != qe(t, "position") || (i = uh.S(t).documentElement), i ? (Lh ? (n = li(i), e += n.left) : Fh >= 8 && !(Fh >= 9) && (n = li(i), e -= n.left), t = "rtl" == qe(i, "direction") ? i.clientWidth - (e + t.offsetWidth) : e) : t = e) : t = this.target.offsetLeft, this.deltaX = t, this.deltaY = this.target.offsetTop, this.me = uh.h(this.u).$a(), lh()
        }
    }, rh.Jc = function (t) {
        if (this.D.Fa(), Zr && this.u.releaseCapture(), this.hb) {
            kn(t), this.hb = !1;
            var e = Pn(this, this.deltaX), i = jn(this, this.deltaY);
            this.dispatchEvent(new On("end", this, t.clientX, t.clientY, 0, e, i))
        } else this.dispatchEvent("earlycancel")
    }, rh.zh = function (t) {
        if (this.Ka) {
            kn(t);
            var e = (this.qd && In(this) ? -1 : 1) * (t.clientX - this.clientX), i = t.clientY - this.clientY;
            if (this.clientX = t.clientX, this.clientY = t.clientY, this.screenX = t.screenX, this.screenY = t.screenY, !this.hb) {
                var n = this.Bg - this.clientX, s = this.Cg - this.clientY;
                if (n * n + s * s > this.Ef) {
                    if (!this.dispatchEvent(new On("start", this, t.clientX, t.clientY)))return void(this.Ya || this.Jc(t));
                    this.hb = !0
                }
            }
            i = Ln(this, e, i), e = i.x, i = i.y, this.hb && this.dispatchEvent(new On("beforedrag", this, t.clientX, t.clientY, 0, e, i)) && (Dn(this, t, e, i), t.preventDefault())
        }
    }, rh.di = function (t) {
        var e = Ln(this, 0, 0);
        t.clientX = this.clientX, t.clientY = this.clientY, Dn(this, t, e.x, e.y)
    }, b(On, _), b(Bn, We), Bn.prototype.handleEvent = function (t) {
        var e = new ee(t.H);
        e.type = "focusin" == t.type || "focus" == t.type ? "focusin" : "focusout", this.dispatchEvent(e)
    }, Bn.prototype.j = function () {
        Bn.c.j.call(this), pe(this.Kh), pe(this.Lh), delete this.g
    }, b(Fn, fi), rh = Fn.prototype, rh.Id = null, rh.Ua = !1, rh.W = null, rh.J = null, rh.va = null, rh.xd = !1, rh.cc = function () {
        return "goog-modalpopup"
    }, rh.Kc = function () {
        return this.W
    }, rh.i = function () {
        Fn.c.i.call(this);
        var t = this.b(), e = fh(this.cc()).split(" ");
        uh.f.addAll(t, e), uh.Pb(t, !0), ai(t, !1), Hn(this), Yn(this)
    }, rh.og = function () {
        this.xd = !1
    }, rh.Ie = function (t) {
        return !!t && "DIV" == t.tagName
    }, rh.Xa = function (t) {
        Fn.c.Xa.call(this, t), t = fh(this.cc()).split(" "), uh.f.addAll(this.b(), t), Hn(this), Yn(this), uh.Pb(this.b(), !0), ai(this.b(), !1)
    }, rh.la = function () {
        this.J && uh.Pc(this.J, this.b()), uh.Pc(this.W, this.b()), Fn.c.la.call(this), uh.$d(this.va, this.b()), this.Id = new Bn(this.h().L()), this.ea().l(this.Id, "focusin", this.Wh), Xn(this, !1)
    }, rh.qa = function () {
        this.Ua && this.Ga(!1), q(this.Id), Fn.c.qa.call(this), uh.removeNode(this.J), uh.removeNode(this.W), uh.removeNode(this.va)
    }, rh.Ga = function (t) {
        t != this.Ua && (this.Lb && this.Lb.stop(), this.Xb && this.Xb.stop(), this.Kb && this.Kb.stop(), this.Wb && this.Wb.stop(), this.G && Xn(this, t), t ? this.Fi() : this.Dh())
    }, rh.Fi = function () {
        if (this.dispatchEvent("beforeshow")) {
            try {
                this.Fb = this.h().L().activeElement
            } catch (t) {
            }
            this.oe(), this.Ob(), this.ea().l(this.h().fa(), "resize", this.oe), Kn(this, !0), this.focus(), this.Ua = !0, this.Lb && this.Xb ? (fe(this.Lb, "end", this.ad, !1, this), this.Xb.play(), this.Lb.play()) : this.ad()
        }
    }, rh.Dh = function () {
        if (this.dispatchEvent("beforehide")) {
            this.ea().sb(this.h().fa(), "resize", this.oe), this.Ua = !1, this.Kb && this.Wb ? (fe(this.Kb, "end", this.$c, !1, this), this.Wb.play(), this.Kb.play()) : this.$c();
            t:{
                try {
                    var t = this.h(), e = t.L().body, i = t.L().activeElement || e;
                    if (!this.Fb || this.Fb == e) {
                        this.Fb = null;
                        break t
                    }
                    (i == e || t.contains(this.b(), i)) && this.Fb.focus()
                } catch (n) {
                }
                this.Fb = null
            }
        }
    }, rh.ad = function () {
        this.dispatchEvent("show")
    }, rh.$c = function () {
        Kn(this, !1), this.dispatchEvent("hide")
    }, rh.focus = function () {
        this.df()
    }, rh.oe = function () {
        this.J && ai(this.J, !1), this.W && ai(this.W, !1);
        var t = this.h().L(), e = uh.ra(uh.fa(t) || window), i = Math.max(e.width, Math.max(t.body.scrollWidth, t.documentElement.scrollWidth)), t = Math.max(e.height, Math.max(t.body.scrollHeight, t.documentElement.scrollHeight));
        this.J && (ai(this.J, !0), ni(this.J, i, t)), this.W && (ai(this.W, !0), ni(this.W, i, t))
    }, rh.Ob = function () {
        var t = this.h().L(), e = uh.fa(t) || window;
        if ("fixed" == qe(this.b(), "position"))var i = t = 0; else i = this.h().$a(), t = i.x, i = i.y;
        var n = hi(this.b()), e = uh.ra(e), t = Math.max(t + e.width / 2 - n.width / 2, 0), i = Math.max(i + e.height / 2 - n.height / 2, 0);
        _e(this.b(), t, i), _e(this.va, t, i)
    }, rh.Wh = function (t) {
        this.xd ? this.og() : t.target == this.va && yi(this.df, 0, this)
    }, rh.df = function () {
        try {
            Ih && this.h().L().body.focus(), this.b().focus()
        } catch (t) {
        }
    }, rh.j = function () {
        q(this.Lb), this.Lb = null, q(this.Kb), this.Kb = null, q(this.Xb), this.Xb = null, q(this.Wb), this.Wb = null, Fn.c.j.call(this)
    }, b(Un, Fn), rh = Un.prototype, rh.Xe = !0, rh.Ud = !0, rh.Sf = !0, rh.lh = !0, rh.Bc = .5, rh.pd = "", rh.Gc = null, rh.Za = null, rh.jh = !1, rh.I = null, rh.V = null, rh.od = null, rh.U = null, rh.ka = null, rh.s = null, rh.kg = "dialog", rh.cc = function () {
        return this.P
    }, rh.xf = function () {
        return this.pd
    }, rh.jb = function () {
        return this.b() || this.fb(), this.ka
    }, rh.Kc = function () {
        return this.b() || this.fb(), Un.c.Kc.call(this)
    }, rh.i = function () {
        Un.c.i.call(this);
        var t = this.b(), e = this.h();
        this.I = e.i("DIV", this.P + "-title", this.V = e.i("SPAN", {
            className: this.P + "-title-text",
            id: di(this)
        }, this.pd), this.U = e.i("SPAN", this.P + "-title-close")), uh.append(t, this.I, this.ka = e.i("DIV", this.P + "-content"), this.s = e.i("DIV", this.P + "-buttons")), Nn(this.V, "heading"), Nn(this.U, "button"), uh.Pb(this.U, !0), Mn(this.U, "label", eo), this.od = this.V.id, Nn(t, this.kg), Mn(t, "labelledby", this.od || ""), this.Gc && uh.w.Qb(this.ka, this.Gc), ai(this.U, this.Ud), this.O && (t = this.O, t.g = this.s, t.fb()), ai(this.s, !!this.O), Wn(this, this.Bc)
    }, rh.Xa = function (t) {
        Un.c.Xa.call(this, t), t = this.b();
        var e = this.P + "-content";
        this.ka = uh.F(null, e, t)[0], this.ka || (this.ka = this.h().i("DIV", e), this.Gc && uh.w.Qb(this.ka, this.Gc), t.appendChild(this.ka));
        var e = this.P + "-title", i = this.P + "-title-text", n = this.P + "-title-close";
        (this.I = uh.F(null, e, t)[0]) ? (this.V = uh.F(null, i, this.I)[0], this.U = uh.F(null, n, this.I)[0]) : (this.I = this.h().i("DIV", e), t.insertBefore(this.I, this.ka)), this.V ? (this.pd = uh.Bb(this.V), this.V.id || (this.V.id = di(this))) : (this.V = uh.i("SPAN", {
            className: i,
            id: di(this)
        }), this.I.appendChild(this.V)), this.od = this.V.id, Mn(t, "labelledby", this.od || ""), this.U || (this.U = this.h().i("SPAN", n), this.I.appendChild(this.U)), ai(this.U, this.Ud), e = this.P + "-buttons", (this.s = uh.F(null, e, t)[0]) ? (this.O = new $n(this.h()), this.O.Wa(this.s)) : (this.s = this.h().i("DIV", e), t.appendChild(this.s), this.O && (t = this.O, t.g = this.s, t.fb()), ai(this.s, !!this.O)), Wn(this, this.Bc)
    }, rh.la = function () {
        Un.c.la.call(this), this.ea().l(this.b(), "keydown", this.dg).l(this.b(), "keypress", this.dg), this.ea().l(this.s, "click", this.Sh), zn(this, this.lh), this.ea().l(this.U, "click", this.fi);
        var t = this.b();
        if (Nn(t, this.kg), "" !== this.V.id && Mn(t, "labelledby", this.V.id), !this.Sf) {
            if (this.Sf = !1, this.G) {
                var t = this.h(), e = this.Kc();
                t.removeNode(this.J), t.removeNode(e)
            }
            this.Ua && Xn(this, !1)
        }
    }, rh.qa = function () {
        this.Ua && this.Ga(!1), zn(this, !1), Un.c.qa.call(this)
    }, rh.Ga = function (t) {
        t != this.Ua && (this.G || this.fb(), Un.c.Ga.call(this, t))
    }, rh.ad = function () {
        Un.c.ad.call(this), this.dispatchEvent(Qr)
    }, rh.$c = function () {
        Un.c.$c.call(this), this.dispatchEvent(_r), this.jh && this.ya()
    }, rh.xi = function () {
        var t = this.h().L(), e = uh.ra(uh.fa(t) || window), i = Math.max(t.body.scrollWidth, e.width), t = Math.max(t.body.scrollHeight, e.height), n = hi(this.b());
        "fixed" == qe(this.b(), "position") ? (e = new Ge(0, 0, Math.max(0, e.width - n.width), Math.max(0, e.height - n.height)), this.Za.Uc = e || new Ge(0 / 0, 0 / 0, 0 / 0, 0 / 0)) : this.Za.Uc = new Ge(0, 0, i - n.width, t - n.height) || new Ge(0 / 0, 0 / 0, 0 / 0, 0 / 0)
    }, rh.fi = function () {
        Vn(this)
    }, rh.j = function () {
        this.s = this.U = null, Un.c.j.call(this)
    }, rh.Sh = function (t) {
        t:{
            for (t = t.target; null != t && t != this.s;) {
                if ("BUTTON" == t.tagName)break t;
                t = t.parentNode
            }
            t = null
        }
        if (t && !t.disabled) {
            t = t.name;
            var e = this.O.get(t);
            this.dispatchEvent(new Gn(t, e)) && this.Ga(!1)
        }
    }, rh.dg = function (t) {
        var e = !1, i = !1, n = this.O, s = t.target;
        if ("keydown" == t.type) {
            if (this.Xe && 27 == t.keyCode) {
                var h = n && n.Ad, s = "SELECT" == s.tagName && !s.disabled;
                h && !s ? (i = !0, e = n.get(h), e = this.dispatchEvent(new Gn(h, e))) : s || (e = !0)
            } else if (9 == t.keyCode && t.shiftKey && s == this.b()) {
                this.xd = !0;
                try {
                    this.va.focus()
                } catch (r) {
                }
                yi(this.og, 0, this)
            }
        } else if (13 == t.keyCode) {
            if ("BUTTON" != s.tagName || s.disabled) {
                if (s == this.U)Vn(this); else if (n) {
                    var o, a = n.Ed;
                    if (o = a)t:{
                        o = n.g.getElementsByTagName("BUTTON");
                        for (var c, l = 0; c = o[l]; l++)if (c.name == a || c.id == a) {
                            o = c;
                            break t
                        }
                        o = null
                    }
                    s = ("TEXTAREA" == s.tagName || "SELECT" == s.tagName || "A" == s.tagName) && !s.disabled, !o || o.disabled || s || (h = a)
                }
            } else h = s.name;
            h && n && (i = !0, e = this.dispatchEvent(new Gn(h, String(n.get(h)))))
        } else s == this.U && 32 == t.keyCode && Vn(this);
        (e || i) && (t.stopPropagation(), t.preventDefault()), e && this.Ga(!1)
    }, b(Gn, _);
    var qr = "dialogselect", _r = "afterhide", Qr = "aftershow";
    b($n, Di), rh = $n.prototype, rh.P = "goog-buttonset", rh.Ed = null, rh.g = null, rh.Ad = null, rh.set = function (t, e, i, n) {
        return Di.prototype.set.call(this, t, e), i && (this.Ed = t), n && (this.Ad = t), this
    }, rh.fb = function () {
        if (this.g) {
            uh.w.Qb(this.g, gr);
            var t = uh.h(this.g);
            this.forEach(function (e, i) {
                var n = t.i("BUTTON", {name: i}, e);
                i == this.Ed && (n.className = this.P + "-default"), this.g.appendChild(n)
            }, this)
        }
    }, rh.Wa = function (t) {
        if (t && 1 == t.nodeType) {
            this.g = t, t = this.g.getElementsByTagName("BUTTON");
            for (var e, i, n, s = 0; e = t[s]; s++)if (i = e.name || e.id, n = uh.Bb(e) || e.value, i) {
                var h = 0 == s;
                this.set(i, n, h, e.name == to), h && uh.f.add(e, this.P + "-default")
            }
        }
    }, rh.b = function () {
        return this.g
    }, rh.h = function () {
        return this.Y
    };
    var to = "cancel", eo = "Close", io = {key: "ok", caption: "OK"}, no = {
        key: to,
        caption: "Cancel"
    }, so = {key: "yes", caption: "Yes"}, ho = {key: "no", caption: "No"}, ro = {
        key: "save",
        caption: "Save"
    }, oo = {key: "continue", caption: "Continue"};
    "undefined" != typeof document && (Jn(new $n, io, !0, !0), Jn(Jn(new $n, io, !0), no, !1, !0), Jn(Jn(new $n, so, !0), ho, !1, !0), Jn(Jn(Jn(new $n, so), ho, !0), no, !1, !0), Jn(Jn(Jn(new $n, oo), ro), no, !0, !0)), rh = Zn.prototype, rh.cb = Hi("goog.net.NetworkTester"), rh.Eg = 1e4, rh.rc = !1, rh.oi = 0, rh.Ac = 0, rh.jg = 0, rh.nd = null, rh.pc = null, rh.setTimeout = function (t) {
        this.Eg = t
    }, rh.start = function () {
        if (this.rc)throw Error("NetworkTester.start called when already running");
        this.rc = !0, Yi(this.cb, "Starting"), this.Ac = 0, qn(this)
    }, rh.stop = function () {
        _n(this), this.rc = !1
    }, rh.$h = function () {
        Yi(this.cb, "Image loaded"), this.mc(!0)
    }, rh.Zh = function () {
        Yi(this.cb, "Image load error"), this.mc(!1)
    }, rh.Yh = function () {
        Yi(this.cb, "Image load aborted"), this.mc(!1)
    }, rh.ai = function () {
        Yi(this.cb, "Image load timed out"), this.mc(!1)
    }, rh.mc = function (t) {
        _n(this), t ? (this.rc = !1, this.Ec.call(this.ga, !0)) : this.Ac <= this.oi ? this.jg ? this.pc = yi(this.bi, this.jg, this) : qn(this) : (this.rc = !1, this.Ec.call(this.ga, !1))
    }, rh.bi = function () {
        this.pc = null, qn(this)
    }, b(Qn, We), Qn.prototype.wf = function () {
        return this.vc ? this.vc.clone() : null
    }, Qn.prototype.j = function () {
        Qn.c.j.call(this), this.ie && (pe(this.ie), this.ie = null), this.vc = this.aa = null
    }, Qn.prototype.Td = function () {
        var t = uh.ra(this.aa), e = this.vc;
        t == e || t && e && t.width == e.width && t.height == e.height || (this.vc = t, this.dispatchEvent("resize"))
    }, b(ts, fi), ts.Model, rh = ts.prototype, rh.Rh = function (t) {
        var e = t.target, i = t.key;
        t = t.value;
        for (var n in this.Cc) {
            var s = this.Cc[n];
            s.Tf == e && s.key == i && this.set(n, t)
        }
    }, rh.add = function (t, e) {
        var i = this.Ra;
        t in i || (i[t] = e), this[t] = es(this, t)
    }, rh.has = function (t) {
        return t in this.Ra
    }, rh.set = function (t, e) {
        this.get(t) !== e && (this.Ra[t] = e, is(this, t))
    }, rh.get = function (t) {
        return X(this.Ra, t)
    }, rh.Od = function () {
        var t, e = this.Ra, i = {};
        for (t in e)i[t] = e[t];
        return i
    }, rh.bind = function (t, e) {
        this.Cc[t] = e;
        var i = e.Tf, n = e.key;
        this.ea().l(i, "a", this.Rh), is(i, n)
    }, rh.handle = e, b(ss, _), b(hs, ts), hs.Model = {
        scrollDuration: 600,
        scrollTiming: "ease-out"
    }, hs.prototype.ci = function (t) {
        switch (t.type) {
            case"begin":
                this.dispatchEvent("b");
                break;
            case"finish":
                window.scrollTo(t.x, t.y), this.dispatchEvent("c"), t.ya();
                break;
            case"animate":
                window.scrollTo(t.x, t.y)
        }
    }, hs.prototype.scrollTo = function (t, e) {
        var i = new He(t, e), n = uh.$a(), n = [n.x, n.y], i = [i.x, i.y], s = this.get("scrollDuration"), h = this.get("scrollTiming"), r = {};
        Y(r, "ease-in", Mi), Y(r, "ease-out", Ai), Y(r, "ease-in-out", Ii), n = new Ei(n, i, s, r[h]), this.ea().l(n, ["begin", "finish", "animate"], this.ci), n.play()
    }, i(hs);
    var ao = {};
    (function (t) {
        this.g = t, this.g._wect = this
    }).prototype.cb = Hi("wireless.events.ListenerCoalescer"), b(ls, ts), ls.CLASS_NAME, ls.DescendantRegistry, ls.Model = {
        parent: null,
        content: null
    }, rh = ls.prototype, rh.re = function (t) {
        var e = this.getParent();
        e && (H(e.Ia, di(this)), Y(e.Ia, t, this)), ls.c.re.call(this, t)
    }, rh.Rb = function (t) {
        ls.c.Rb.call(this, t), this.Tc = this.get("parent"), t != this.Tc && this.set("parent", t)
    }, rh.jb = function () {
        return this.Cd || this.b()
    }, rh.L = function () {
        return hs.kb()
    }, rh.Xa = function (t) {
        this.g = t;
        var e, i = this.Od();
        for (e in i)if (uh.dataset.has(t, e)) {
            var n;
            t:{
                n = uh.dataset.get(t, e);
                var h;
                if ((h = !/^[\s\xa0]*$/.test(n) && 0 != n.lastIndexOf(" ", 0)) && (h = n.length - 1, h = !(h >= 0 && n.indexOf(" ", h) == h)), h) {
                    if (h = Number(n), h = 0 == h && /^[\s\xa0]*$/.test(n) ? 0 / 0 : h, !isNaN(h)) {
                        n = h;
                        break t
                    }
                    if (n.match(/^(true|false)$/i)) {
                        n = String(n).toLowerCase(), n = 0 == (n > "true" ? -1 : "true" == n ? 0 : 1) ? !0 : !1;
                        break t
                    }
                }
            }
            h = i[e], null !== h && typeof h != typeof n || this.set(e, n), uh.dataset.remove(t, e)
        }
        if (t = ds(this, "content"), t = us(this, t), 1 == t.length && (this.Cd = t[0]), t = [], i = s(this.constructor.DescendantRegistry) ? this.constructor.DescendantRegistry : [], e = i.length, e > 1)for (n = 0; e > n; n += 2) {
            h = t;
            var r = new Xi(i[n], i[n + 1]);
            M(h, r) || h.push(r)
        }
        for (i = 0; n = t[i]; i++) {
            e = n.getKey(), n = n.Ig, n = "boolean" == typeof n ? n : !1, h = [];
            for (var r = as(e), r = us(this, r), o = 0, a = void 0; a = r[o]; o++) {
                var c = new e;
                if (n) {
                    var l = c, u = this.o ? this.o.length : 0;
                    if (l.G && !this.G)throw Error("Component already rendered");
                    if (0 > u || u > (this.o ? this.o.length : 0))throw Error("Child component index out of bounds");
                    if (this.ba && this.o || (this.ba = {}, this.o = []), l.getParent() == this) {
                        var f = di(l);
                        this.ba[f] = l, A(this.o, l)
                    } else Y(this.ba, di(l), l);
                    l.Rb(this), L(this.o, u, 0, l), l.G && this.G && l.getParent() == this ? (f = this.jb(), u = f.childNodes[u] || null, u != l.b() && f.insertBefore(l.b(), u)) : this.G && !l.G && l.g && l.g.parentNode && 1 == l.g.parentNode.nodeType && l.la()
                } else fs(this, c);
                c.Wa(a), h.push(c)
            }
        }
    }, rh.la = function () {
        ls.c.la.call(this);
        var t = this.b();
        t.id ? this.re(t.id) : t.id = di(this), uh.a.add(t, as(this.constructor));
        var t = this.L(), e = di(this);
        t.Zb[e] = this, this.Jb || this.tc(t);
        for (var i in this.Ra)is(this, i)
    }, rh.qa = function () {
        ls.c.qa.call(this);
        var t = this.L();
        H(t.Zb, di(this)), this.Jb instanceof hs && this.tc(null)
    }, rh.j = function () {
        ls.c.j.call(this), this.Cd = this.Tc = null;
        for (var t in this.Ia)this.Ia[t].ya();
        this.Ia = null
    }, rh.handle = function (t, e) {
        switch (ls.c.handle.call(this, t, e), t) {
            case"parent":
                if (this.Tc) {
                    var i = this.Tc;
                    di(this)in i.Ia && (this.Rb(null), H(i.Ia, di(this)))
                }
                e && fs(e, this);
                break;
            case"content":
                if (i = this.jb(), null === e) {
                    this.set("content", i.innerHTML);
                    break
                }
                i.innerHTML != e && (i.innerHTML = e)
        }
    }, b(bs, ls), bs.CLASS_NAME = "component", bs.Model = {
        enableController: !1,
        activeState: !1,
        selectedState: !1,
        hoverState: !1,
        focusedState: !1,
        openedState: !1,
        toggledState: !1,
        enabledState: !0
    }, rh = bs.prototype, rh.Xa = function (t) {
        bs.c.Xa.call(this, t), gs(this, "activeState", "active"), gs(this, "selectedState", "selected"), gs(this, "hoverState", "hover"), gs(this, "focusedState", "focused"), gs(this, "openedState", "opened"), gs(this, "toggledState", "toggled"), gs(this, "enabledState", "disabled", !0)
    }, rh.qa = function () {
        bs.c.qa.call(this), this.set("enableController", !1)
    }, rh.handle = function (e, i) {
        switch (bs.c.handle.call(this, e, i), e) {
            case"enableController":
                var n = ["click", "mouseover", "mouseout", "mousedown", "mouseup"];
                t(window.ontouchstart) && n.push("touchstart", "touchmove", "touchend", "touchcancel");
                var s = this.b();
                i ? this.ea().l(s, n, this.bg) : this.ea().sb(s, n, this.bg);
                break;
            case"activeState":
                ps(this, "active", i);
                break;
            case"selectedState":
                ps(this, "selected", i);
                break;
            case"hoverState":
                ps(this, "hover", i);
                break;
            case"focusedState":
                ps(this, "focused", i);
                break;
            case"openedState":
                ps(this, "opened", i);
                break;
            case"toggledState":
                ps(this, "toggled", i);
                break;
            case"enabledState":
                ps(this, "disabled", !i)
        }
    }, rh.bg = function (t) {
        if (this.get("enabledState") && (!this.getParent() || this.getParent().get("enabledState"))) {
            var e, i;
            switch (t.type) {
                case"click":
                    e = new vs("d", this, t), i = d(this.Zc, this, t);
                    break;
                case"mouseover":
                    t.relatedTarget && uh.contains(this.b(), t.relatedTarget) || (e = new vs("e", this, t), i = d(this.cg, this, t));
                    break;
                case"mouseout":
                    t.relatedTarget && uh.contains(this.b(), t.relatedTarget) || (e = new vs("f", this, t), i = d(this.eg, this, t));
                    break;
                case"mousedown":
                    !ie(t) || Dh && jh && t.ctrlKey || (e = new vs("g", this, t), i = d(this.gg, this, t));
                    break;
                case"mouseup":
                    e = new vs("h", this, t), i = d(this.hg, this, t);
                    break;
                case"touchstart":
                    e = new vs("i", this, t), i = d(this.ji, this, t);
                    break;
                case"touchmove":
                    e = new vs("j", this, t), i = d(this.ii, this, t);
                    break;
                case"touchend":
                    e = new vs("k", this, t), i = d(this.hi, this, t);
                    break;
                case"touchcancel":
                    e = new vs("l", this, t), i = d(this.gi, this, t)
            }
            e && a(i) && this.dispatchEvent(e) && i()
        }
    }, rh.Zc = e, rh.cg = e, rh.eg = e, rh.gg = e, rh.hg = e, rh.ji = e, rh.hi = e, rh.ii = e, rh.gi = e, b(vs, ee), os(bs);
    var co = /Mac OS X.+Silk\//, lo = /iPhone|iPod|iPad/.test(navigator.userAgent) || -1 != navigator.userAgent.indexOf("Android") || co.test(navigator.userAgent), uo = window.navigator.msPointerEnabled;
    b(ys, bs), ys.CLASS_NAME = "control", ys.prototype.cg = function () {
        this.set("hoverState", !0)
    }, ys.prototype.eg = function () {
        this.set("hoverState", !1), this.set("activeState", !1)
    }, ys.prototype.gg = function () {
        this.set("activeState", !0)
    }, ys.prototype.hg = function () {
        this.set("activeState", !1)
    }, os(ys), b(ms, We), ms.prototype.Wa = function (t) {
        this.dispatchEvent(new xs("m", this, t)), ws(this, t), this.dispatchEvent(new xs("n", this, t))
    }, b(xs, _), i(ms), g("gweb.ui.TimedCarousel", Ss);
    var fo = 800;
    Ss.prototype.Fd = function (t) {
        this.rb = t, this.m.start()
    }, Ss.prototype.We = function () {
        this.m && this.m.stop()
    }, Ss.prototype.next = function () {
        var t = this.Ha.index < this.ja.length - 1 ? this.Ha.index + 1 : 0;
        return As(this, t), t
    };
    var po = /tab-(.*)$/;
    Is.prototype.show = function () {
        if (this.parent.ae)return null;
        if (this != this.parent.Ha) {
            this.parent.Ha && this.parent.Ha.Vd(), this.parent.Eb && this.parent.Fd(this.index);
            var t = new sn(this.we, this.parent.bh);
            return ce(t, "begin", this.De, !1, this), ce(t, "end", this.Ee, !1, this), t.play(), uh.a.add(this.R, this.parent.sg), this.parent.Ha = this, this
        }
        return null
    }, Is.prototype.Vd = function () {
        var t = new nn(this.we, this.parent.dh);
        return ce(t, "begin", this.De, !1, this), ce(t, "end", this.Ee, !1, this), t.play(), uh.a.remove(this.R, this.parent.sg), this
    }, Is.prototype.De = function () {
        this.parent.ae = !0
    }, Is.prototype.Ee = function () {
        this.parent.ae = !1
    }, b(ks, Un), g("gweb.ui.LightBox", ks);
    var go = "gweb-lightbox", bo = lo ? "touchstart" : uo ? "MSPointerDown" : "click", vo = "×", yo = "‹", mo = "›", wo = /\.(gif|jpg|jpeg|png|webp)$/i, xo = /^#/, So = /\/\/(www\.)?youtube\.com\//, Eo = /\/\/(www\.)?youtube\.com\/watch/, Co = "lb", To = 767;
    ks.prototype.Ei = function (t) {
        this.oc = t
    }, ks.prototype.setOverlayCaption = ks.prototype.Ei, ks.prototype.zi = function (t) {
        this.uc = t
    }, ks.prototype.setItemCount = ks.prototype.zi, ks.prototype.wg = function (t) {
        this.rg = t
    }, ks.prototype.setScaleImages = ks.prototype.wg, ks.prototype.tg = function (t) {
        this.wd = t
    }, ks.prototype.setAnimate = ks.prototype.tg, ks.prototype.Di = function (t) {
        this.Yf = t
    }, ks.prototype.setNavTextPrev = ks.prototype.Di, ks.prototype.Ci = function (t) {
        this.Xf = t
    }, ks.prototype.setNavTextNext = ks.prototype.Ci, ks.prototype.wi = function (t) {
        this.Le = t
    }, ks.prototype.setCloseText = ks.prototype.wi, ks.prototype.yi = function (t) {
        this.Bf = t
    }, ks.prototype.setHideNav = ks.prototype.yi, ks.prototype.vg = function (t) {
        this.nc = t ? 1 : 0
    }, ks.prototype.setOutsideNav = ks.prototype.vg, ks.prototype.Ai = function (t) {
        this.lc = t
    }, ks.prototype.setLoop = ks.prototype.Ai, ks.prototype.Bi = function (t) {
        this.Ve = t || To
    }, ks.prototype.setMobileWidthThreshold = ks.prototype.Bi, ks.prototype.hh = function () {
        this.uc = !1, this.ac = !0
    }, ks.prototype.disableNav = ks.prototype.hh, ks.prototype.Ue = function () {
        this.Hc = !0
    }, ks.prototype.disableOnMobile = ks.prototype.Ue, ks.prototype.vi = function (t) {
        this.Ge = t
    }, ks.prototype.setBackgroundClickable = ks.prototype.vi, ks.prototype.Pa = function () {
        if (Ls(this)) {
            for (var t = uh.Ba(this.Me), e = 0, i = t.length; i > e; e++) {
                var n = t[e], s = new Hs(n);
                s.Qf = ce(n, bo, p(this.uh, n), !1, this), this.K.push(s), uh.dataset.set(n, "lightboxIndex", this.K.length - 1), -1 == this.nc && So.test(s.href) && (this.nc = 1)
            }
            Wn(this, .8), this.Xe = !0, this.O = null, this.s && (this.O ? (t = this.O, t.g = this.s, t.fb()) : uh.w.Qb(this.s, gr), ai(this.s, !!this.O)), this.fb(), 1 == this.nc && uh.a.add(this.ta, "gweb-lightbox-outside-nav"), this.Da = Math.ceil(2 * li(this.ta).top), this.ac || (t = new Sn(document), ce(t, "key", this.wh, !1, this)), ce(this, "imageloaded", p(this.Bd, this.$), !1, this), ce(this, "iframeloaded", p(this.Bd, this.sa), !1, this), ce(this, "fragmentloaded", p(this.Bd, this.Aa), !1, this), this.Ge && ce(this.W, bo, p(this.Ga, !1), !1, this), ce(this, _r, this.Fc, !1, this), ce(this, "navigateprev", p(this.ve, this.Wf), !1, this), ce(this, "navigatenext", p(this.ve, this.Vf), !1, this), "opacity"in window.document.body.style && (this.jd = !0)
        }
        ce(window, "resize", p(this.fh, 250), !1, this)
    }, ks.prototype.init = ks.prototype.Pa, rh = ks.prototype, rh.fh = function (t) {
        this.fd || (this.fd = yi(p(this.Td), t, this))
    }, rh.i = function () {
        ks.c.i.call(this), uh.appendChild(this.U, uh.createTextNode(this.Le)), this.g.setAttribute("id", this.kc), this.s && (this.X = uh.i("div", "gweb-lightbox-caption gweb-lightbox-hide"), uh.appendChild(this.s, this.X)), this.uc && 1 < this.K.length && this.V ? (this.fe = uh.i("span"), uh.appendChild(this.V, this.fe)) : this.uc = !1, this.ta = this.g, this.ac ? ai(this.s, !0) : (this.Wf = Ps(this, "gweb-lightbox-prev"), this.Vf = Ps(this, "gweb-lightbox-next"));
        for (var t = 0, e = this.K.length; e > t; t++) {
            var i = this.K[t];
            this.$ || "IMG" != i.type ? this.sa || "IFRAME" != i.type ? this.Aa || "A" != i.type || (this.Aa = uh.i("div", {
                id: this.kc + "-fragment",
                "class": go + "-fragment"
            }), uh.append(this.ka, this.Aa)) : (this.sa = uh.Z.Dd(uh), this.sa.id = this.Xd, this.sa.name = this.Xd, uh.append(this.ka, this.sa)) : (this.$ = uh.i("img", {
                id: this.kc + "-image",
                src: "//www.evisa.go.ke/assets/img/cleardot.gif"
            }), ni(this.$, 200, 200), uh.appendChild(this.ka, this.$))
        }
    }, rh.uh = function (t, e) {
        var i = this.K[Ds(t)].ih;
        Ls(this, i) && (e.preventDefault(), this.ve(t))
    }, rh.Td = function () {
        oh.clearTimeout(this.fd), this.fd = null;
        var t = Ls(this);
        if (!this.b() && t)this.Pa(); else if (this.b())if (t)this.Ob(this.lg); else {
            for (t = this.K.length - 1; t >= 0; t--)pe(this.K[t].Qf);
            this.K = [], this.ya()
        }
    }, rh.wh = function (t) {
        if (this.Ua && !this.ac)switch (t.keyCode) {
            case 37:
                (this.lc || 0 != this.wa) && this.dispatchEvent("navigateprev");
                break;
            case 39:
                (this.lc || this.wa != this.K.length - 1) && this.dispatchEvent("navigatenext")
        }
    }, rh.qe = function (t) {
        t ? (uh.a.remove(this.X, "gweb-lightbox-hide"), this.X.innerHTML = t, this.oc && uh.a.add(this.X, "gweb-lightbox-overlay")) : (this.X.innerHTML = "", uh.a.add(this.X, "gweb-lightbox-hide")), ai(this.X, !1)
    }, ks.prototype.setCaption = ks.prototype.qe, rh = ks.prototype, rh.yg = function () {
        ai(this.X, !0), this.wd && new en(this.X, 200).play()
    }, rh.oh = function (t) {
        t = new tn(t, 500), ce(t, "end", this.Ch, !1, this), t.play()
    }, rh.Ch = function (t) {
        t = t.target.element, t.style.visibility = "hidden", t.style.opacity = 1, t.style.filter = ""
    }, rh.ve = function (t) {
        this.zg(Ds(t))
    }, rh.zg = function (t) {
        if (this.K && t <= this.K.length - 1) {
            if (this.wa = t, t = this.K[this.wa], this.qe(""), !this.Ua) {
                this.Ga(!0);
                var e = new en(this.ta, 200);
                this.jd || ce(e, "end", p($e, this.ta, "filter", ""), !1, this), e.play()
            }
            switch (this.uc && (this.fe.innerHTML = this.wa + 1 + "/" + this.K.length), this.lg = hi(this.ta), t.type) {
                case"A":
                    if (this.Fc("A"), Bs(this, !0, this.Aa), ni(this.Aa, t.width, t.height), this.ca = new Ye(t.width, t.height), e = t.href.split("#"), !(1 < e.length))throw Error("Invalid url:" + t.href);
                    t = uh.b(e[1]).cloneNode(!0), uh.append(this.Aa, t.childNodes), this.dispatchEvent("fragmentloaded");
                    break;
                case"IFRAME":
                    Rs(this, t);
                    break;
                case"IMG":
                    this.ke(t)
            }
        }
    }, ks.prototype.showContentByIndex = ks.prototype.zg, ks.prototype.Fc = function (t) {
        this.sa && ("IFRAME" != t && Os(this, "//www.evisa.go.ke/assets/img/cleardot.gif"), ai(this.sa, !t || "IFRAME" == t)), this.$ && ("IMG" != t && (this.$.src = "//www.evisa.go.ke/assets/img/cleardot.gif"), ai(this.$, !t || "IMG" == t)), this.Aa && (uh.qc(this.Aa), ai(this.Aa, !t || "A" == t))
    }, ks.prototype.ke = function (t) {
        var e = uh.ra(window), i = this.kc + "-image";
        this.Fc("IMG"), this.Wc && (Tn(this.Wc, i, t.href), this.Wc.start()), Bs(this, !0, this.$), fe(this.Wc, "load", function (t) {
            if (t = t.target, this.$.src = t.src, this.rg) {
                var i = this.I, i = new Ye(i.offsetWidth, i.offsetHeight).height, n = hi(this.X).height + this.Da, i = this.oc ? e.height - this.Da - i : e.height - this.Da - i - n, n = 1 == this.nc ? e.width - 3 * this.Da : e.width - this.Da;
                t.height > i || t.width > n ? (n = Math.min(n / t.width - .1, i / t.height - .05), i = Math.floor(t.width * n), t = Math.floor(t.height * n), ni(this.$, i, t), this.ca = new Ye(i, t)) : (ni(this.$, t.width, t.height), this.ca = new Ye(t.width, t.height))
            } else ni(this.$, t.width, t.height), this.ca = new Ye(t.width, t.height);
            this.dispatchEvent("imageloaded")
        }, !1, this)
    }, ks.prototype.Bd = function (t) {
        var e = this.K[this.wa], i = 200 < this.ca.width ? this.ca.width : 200;
        if (this.ta.style.width = si(i, !0), this.X.style.width = si(i, !0), this.qe(e.title), this.Ob(this.lg), !this.ac) {
            var n = this.K.length, i = uh.ma("gweb-lightbox-prev", this.s), s = uh.ma("gweb-lightbox-next", this.s), e = uh.F("img", null, this.s);
            0 == this.wa ? this.lc ? (ai(i, !0), uh.dataset.set(i, "lightboxIndex", n - 1)) : ai(i, !1) : (ai(i, !0), uh.dataset.set(i, "lightboxIndex", this.wa - 1)), this.wa + 1 == n ? this.lc ? (ai(s, !0), uh.dataset.set(s, "lightboxIndex", 0)) : ai(s, !1) : (ai(s, !0), uh.dataset.set(s, "lightboxIndex", this.wa + 1)), this.Bf && this.bf && this.jd && (js(this, s, "gweb-lightbox-next"), js(this, i, "gweb-lightbox-prev"));
            var n = hi(this.X).height, h = hi(this.I).height + "px";
            for ($e(i, "top", h), $e(s, "top", h), i = this.oc ? this.ca.height - n : this.ca.height, s = .35 * this.ca.width, n = e.length - 1; n >= 0; n--)ni(e[n], s, i);
            this.bf = !1
        }
        Bs(this, !1, t)
    }, ks.prototype.Ob = function (t) {
        if (t) {
            var e = uh.ra(window), i = uh.$a(), n = hi(this.I), s = hi(this.X), h = [], r = 200 <= this.ca.width ? this.ca.width : 200, n = this.ca.height + n.height;
            this.oc || (n += s.height), s = Math.floor(i.x + e.width / 2 - r / 2) - this.Da / 2, e = Math.floor(i.y + e.height / 2 - n / 2) - this.Da / 2, this.wd ? (h = [t.width - this.Da, t.height - this.Da, ti(this.ta).x, ti(this.ta).y], t = new Fs(this.ta, h, [r, n, s, e], 800, Ai), ce(t, "end", this.yg, !1, this), t.play()) : (ks.c.Ob.call(this), this.yg())
        } else ks.c.Ob.call(this)
    }, b(Fs, _i), Fs.prototype.yc = function () {
        ni(this.element, this.coords[0], this.coords[1]), _e(this.element, this.coords[2], this.coords[3])
    };
    var No = "lightboxHeight", Mo = "lightboxMobile", Ao = "lightboxWidth";
    Hs.prototype.th = function (t) {
        var e = t.href, i = e.match(/[^\?#]*(?=[\?#])/);
        return (i && i[0] || e).match(wo) ? "IMG" : t.getAttribute("href", 2).match(xo) ? "A" : "IFRAME"
    }, Hs.prototype.xf = function (t) {
        return uh.dataset.get(t, "lightboxCaption") || t.getAttribute("title") || ""
    }, b(Xs, ys), Xs.CLASS_NAME = "selector-control-nav", Xs.Model = {step: 0}, Xs.prototype.Zc = function () {
        var t = this.getParent();
        if (t && t instanceof Ws) {
            var e = t.get("selectedIndex");
            t.set("selectedIndex", e + this.get("step"))
        }
    }, b(Ks, ys), Ks.CLASS_NAME = "selector-control-item", Ks.prototype.Zc = function () {
        this.get("selectedState") || this.set("selectedState", !0)
    }, Ks.prototype.handle = function (t, e) {
        switch (Ks.c.handle.call(this, t, e), t) {
            case"selectedState":
                if (e) {
                    var i = this.getParent();
                    if (i) {
                        var n = i.o && this ? Sh(i.o, this) : -1;
                        o(n) && i.set("selectedIndex", n)
                    }
                }
        }
    }, b(Us, bs), Us.CLASS_NAME = "selector-item", Us.prototype.handle = function (t, e) {
        switch (Us.c.handle.call(this, t, e), t) {
            case"selectedState":
                if (e) {
                    var i = this.getParent();
                    if (i) {
                        var n = i.o && this ? Sh(i.o, this) : -1;
                        o(n) && i.set("selectedIndex", n)
                    }
                }
        }
    }, b(Ws, bs), Ws.CLASS_NAME = "selector", Ws.DescendantRegistry = [Us, !0, Ks, !0, Xs, !1], Ws.Model = {
        selectedIndex: null,
        lowerBound: 0,
        upperBound: null,
        enableWrap: !1,
        enableAutoplay: !1,
        autoplayInterval: 5e3,
        autoplayStep: 1
    }, Ws.prototype.la = function () {
        Ws.c.la.call(this), o(this.get("upperBound")) || this.set("upperBound", (this.o ? this.o.length : 0) - 1);
        for (var t, e = 0; t = pi(this, e); e++) {
            var i = this.get("selectedIndex");
            i == e ? this.set("selectedIndex", e) : null === i && t.get("selectedState") ? this.set("selectedIndex", e) : i >= 0 && t.get("selectedState") && t.set("selectedState", !1)
        }
    }, Ws.prototype.ag = function () {
        var t = this.get("selectedIndex"), e = this.get("autoplayStep");
        this.set("selectedIndex", t + e)
    }, Ws.prototype.handle = function (t, e) {
        switch (Ws.c.handle.call(this, t, e), t) {
            case"enableAutoplay":
                e ? (this.get("autoplayInterval"), this.ea().l(this.Va, xr, this.ag), this.Va.start()) : (this.ea().sb(this.Va, xr, this.ag), this.Va.stop());
                break;
            case"autoplayInterval":
                this.Va.setInterval(e);
                break;
            case"selectedIndex":
                zs(this, e)
        }
    }, os(Xs), os(Ws), b(Vs, bs), Vs.CLASS_NAME = "drawer", Vs.Model = {orientation: "vertical"}, Vs.prototype.i = function () {
        Vs.c.i.call(this);
        var t = this.h(), e = this.b(), i = t.i("div", ds(this, "content"));
        t.appendChild(e, i), this.Cd = i
    }, Vs.prototype.handle = function (t, e) {
        switch (Vs.c.handle.call(this, t, e), t) {
            case"openedState":
                var i = this.b(), n = this.jb(), n = hi(n), s = this.get("orientation");
                e ? "vertical" == s ? i.style.height = n.height + "px" : "horizontal" == s && ni(i, n) : "vertical" == s ? i.style.height = 0 : "horizontal" == s && (i.style.width = 0);
                break;
            case"content":
                is(this, "openedState")
        }
    }, os(Vs), b(Gs, ys), Gs.CLASS_NAME = "toggle-control", Gs.Model = {toggleProperty: "toggledState"}, Gs.prototype.Zc = function () {
        this.set("toggledState", !this.get("toggledState"))
    }, Gs.prototype.handle = function (t, e) {
        switch (Gs.c.handle.call(this, t, e), t) {
            case"parent":
                c(e) ? this.bind("toggledState", es(e, this.get("toggleProperty"))) : H(this.Cc, "toggledState");
                break;
            case"toggleProperty":
                is(this, "parent");
                break;
            case"toggledState":
                var i = this.getParent();
                i && i.set(this.get("toggleProperty"), e);
                break;
            case"enabledState":
                e || this.set("toggledState", !1)
        }
    }, os(Gs), b($s, bs), $s.CLASS_NAME = "scroll-carousel-item", b(Js, bs), Js.CLASS_NAME = "scroll-carousel", Js.DescendantRegistry = [$s, !0], Js.Model = {
        scrollIndex: 0,
        orientation: "horizontal"
    }, Js.prototype.handle = function (t, e) {
        switch (Js.c.handle.call(this, t, e), t) {
            case"scrollIndex":
                var i;
                i = new Ye(0, 0);
                var n = pi(this, 0);
                if (n) {
                    var s = pi(this, 1);
                    if (s) {
                        var h = this.jb(), n = ei(n.b(), h), s = ei(s.b(), h);
                        i.width = Math.abs(n.x - s.x), i.height = Math.abs(n.y - s.y)
                    } else i = hi(n.b())
                }
                i.width = -1 * i.width * e, i.height = -1 * i.height * e, s = this.jb(), ei(s, this.b()), h = this.get("orientation"), "horizontal" == h ? _e(s, i.width, 0) : "vertical" == h ? _e(s, 0, i.height) : N("Invalid orientation value: " + h)
        }
    }, os(Js), Zs.prototype.Qa = function () {
        var t = uh.ma("nguvu-scroll-carousel", this.pb), e = uh.ma("nguvu-selector", this.pb);
        if (t && e) {
            var i = new Js, n = new Ws;
            i.Wa(t), n.Wa(e), i.bind("scrollIndex", n.selectedIndex), "true" == uh.dataset.get(this.pb, "interactionEnabled") && ce(this.pb, "click", function () {
                n.handle("enableAutoplay", !1)
            }), ce(window, "resize", function () {
                i.handle("scrollIndex", n.get("selectedIndex"))
            })
        }
    };
    var Io = "_2x";
    qs.prototype.Hh = function () {
        return this.Hg.match("//" + document.domain)
    }, qs.prototype.ke = function (t) {
        this.Hh && (t ? (t = new on(this.Cf), new Zn(p(this.Dg), this, t).start()) : this.Dg(!0))
    }, qs.prototype.Dg = function (t) {
        t && (this.mh.src = this.Cf)
    }, g("ecitizen.browser.Detection", _s), _s.prototype.Qa = function () {
        this.He && Ih && "7.0" == Oh && uh.a.remove(this.He, "hidden")
    }, Qs.prototype.Qa = function () {
        var t = this.pb.id;
        t || (t = ":" + (ui.kb().$f++).toString(36), this.pb.id = t), new Ss({
            carouselId: t,
            tabClass: null,
            isTimerSet: !0,
            timerDuration: 3e3,
            navPreviousClass: null,
            navNextClass: null,
            animInDuration: 250,
            animOutDuration: 250
        })
    };
    var ko = null;
    try {
        evisa.load("swfobject", "2.1")
    } catch (Lo) {
    }
    th.prototype.Pa = function () {
        this.ua.addEventListener("onStateChange", "ecitizen.ChromelessPlayer.onPlayerStateChange"), this.ua.cueVideoById(this.T), this.ua && this.ua.mute(), this.play(), this.Vc && this.Yc && (ce(this.Vc, "click", this.ig, !1, this), ce(this.Yc, "click", this.ig, !1, this))
    }, th.prototype.play = function () {
        this.ua && this.ua.playVideo()
    }, th.prototype.ig = function () {
        this.ua.isMuted() ? (this.ua && this.ua.unMute(), uh.a.add(this.Vc, "hidden"), uh.a.remove(this.Yc, "hidden")) : (this.ua && this.ua.mute(), uh.a.add(this.Yc, "hidden"), uh.a.remove(this.Vc, "hidden"))
    }, g("onYouTubePlayerReady", function () {
        ko = new th(document.getElementById("chromelessPlayer"), "5FT7FUIMZvw"), ko.Pa()
    });
    try {
        evisa.setOnLoadCallback(eh)
    } catch (Do) {
    }
    g("ecitizen.inbox.Drawer", ih), ih.prototype.Qa = function () {
        ce(this.yb, "click", this.Vh, !1, this), ce(this.xb, "click", this.Th, !1, this), "#the-new-inbox" == window.location.hash && (uh.a.N(this.Oa, "features-inbox-drawer-close", "features-inbox-drawer-open"), uh.a.N(this.yb, "features-show-button", "features-hide-button"), uh.a.N(this.xb, "features-hide-button", "features-show-button"))
    }, ih.prototype.Vh = function () {
        uh.a.has(this.Oa, "features-inbox-drawer-close") ? (uh.a.N(this.Oa, "features-inbox-drawer-close", "features-inbox-drawer-open"), uh.a.N(this.yb, "features-show-button", "features-hide-button"), uh.a.N(this.xb, "features-hide-button", "features-show-button")) : uh.a.has(this.Oa, "features-inbox-drawer-open") && (uh.a.N(this.Oa, "features-inbox-drawer-open", "features-inbox-drawer-close"), uh.a.N(this.yb, "features-hide-button", "features-show-button"), uh.a.N(this.xb, "features-show-button", "features-hide-button"))
    }, ih.prototype.Th = function () {
        uh.a.has(this.Oa, "features-inbox-drawer-open") ? (uh.a.N(this.Oa, "features-inbox-drawer-open", "features-inbox-drawer-close"), uh.a.N(this.yb, "features-hide-button", "features-show-button"), uh.a.N(this.xb, "features-show-button", "features-hide-button")) : uh.a.has(this.Oa, "features-inbox-drawer-close") && (uh.a.N(this.Oa, "features-inbox-drawer-close", "features-inbox-drawer-open"), uh.a.N(this.yb, "features-show-button", "features-hide-button"), uh.a.N(this.xb, "features-hide-button", "features-show-button"))
    }, g("ecitizen.reload.Animation", nh), nh.prototype.Qa = function () {
        ce(window, "load", this.Li, !1, this), ce(this.gd, "click", this.ni, !1, this), ce(this.hd, "click", this.mi, !1, this)
    }, nh.prototype.Li = function () {
        Dh || Lh && $(2) || Dh && $(528.16) || (uh.a.remove(this.gd, "features-compose-reload-trigger"), uh.a.remove(this.hd, "features-compose-reload-trigger-alt"))
    }, nh.prototype.ni = function () {
        for (var t, e = 0; t = this.Ce[e]; e++) {
            var i = t.cloneNode(!0);
            t.parentNode.replaceChild(i, t)
        }
        uh.a.remove(this.gd, "features-compose-reload-trigger"), uh.a.add(this.hd, "features-compose-reload-trigger-alt")
    }, nh.prototype.mi = function () {
        for (var t, e = 0; t = this.Ce[e]; e++) {
            var i = t.cloneNode(!0);
            t.parentNode.replaceChild(i, t)
        }
        uh.a.remove(this.hd, "features-compose-reload-trigger-alt"), uh.a.add(this.gd, "features-compose-reload-trigger")
    }, g("ecitizen.play.Animation", sh), sh.sd = "", sh.Og = "", sh.td = "", sh.Pg = "", sh.Ub = "", sh.Vb = "", sh.ud = "", sh.prototype.yh = function () {
        var t = ii(sh.sd), e = ii(sh.td), i = this.rd.height / 2;
        1030 < this.rd.width && (t.y < i && 0 < t.y ? (uh.f.add(sh.Ub, "features-attachments-animation"), uh.f.add(sh.Vb, "attachments-anim")) : (t.y > i || 0 > t.y) && (uh.f.remove(sh.Ub, "features-attachments-animation"), uh.f.remove(sh.Vb, "attachments-anim")), e.y < i && 0 < e.y ? uh.f.add(sh.ud, "features-action-animation") : (e.y > i || 0 > e.y) && uh.f.remove(sh.ud, "features-action-animation"))
    };
    for (var Po, jo = new Qn(this).wf(), Oo = uh.Ba("ecitizen-js-carousel"), Bo = 0; Po = Oo[Bo]; Bo++)new Zs(Po);
    var Ro = document.body;
    ms.kb().Wa(Ro);
    var Fo, Ho = hs.kb();
    Fo = X(Ho.Zb, "basic-drawer");
    var Yo = c(void 0) ? rs(void 0) : rs();
    if (Fo && Yo)for (var Xo, Yo = c(void 0) ? rs(void 0) : rs(), Ko = 0; Xo = Yo[Ko]; Ko++)Xo.set("toggleProperty", "openedState"), Xo.set("parent", Fo);
    for (new function () {
        if (this.Mh = 768, this.li = 1.5, this.ne = void 0, this.ri = !1, this.Kf = Ph, (window.devicePixelRatio || screen.deviceXDPI && screen.deviceXDPI / 96 || 1) >= this.li && (!this.Kf || this.Kf && (-1 != navigator.userAgent.indexOf("Android") || screen.width > screen.height ? screen.width : window.innerWidth > window.innerHeight ? screen.height > screen.width ? screen.height : screen.width : screen.height < screen.width ? screen.height : screen.width) >= this.Mh && !/^([23]g|3|4)$/.test((navigator.connection || {type: 0}).type))) {
            for (var t, e = uh.F("IMG", "hi-dpi"), i = 0; t = e[i]; i++)new qs(t, this.ne).ke(this.ri);
            uh.a.add(document.documentElement, "hidpi-ready")
        }
    }, new _s, Oo = uh.Ba("ecitizen-js-imagerotator"), Bo = 0; Po = Oo[Bo]; Bo++)new Qs(Po);
    var Uo = new ks("as-lightbox");
    if (Uo && (Uo.tg(!0), Uo.wg(!0), Uo.vg(!0), Uo.Ue(), Uo.Pa()), document.location.hash) {
        var Wo = document.location.hash.replace("#", ""), zo = uh.b(Wo);
        zo && 767 < uh.ra().width && setTimeout(hh, 100)
    }
    new sh(jo)
}();
