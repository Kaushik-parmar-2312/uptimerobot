! function(t) {
    var e = {};

    function n(i) {
        if (e[i]) return e[i].exports;
        var r = e[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return t[i].call(r.exports, r, r.exports, n), r.l = !0, r.exports
    }
    n.m = t, n.c = e, n.d = function(t, e, i) {
        n.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: i
        })
    }, n.r = function(t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, n.t = function(t, e) {
        if (1 & e && (t = n(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var i = Object.create(null);
        if (n.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var r in t) n.d(i, r, function(e) {
                return t[e]
            }.bind(null, r));
        return i
    }, n.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return n.d(e, "a", e), e
    }, n.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, n.p = "", n(n.s = 5)
}([function(t, e, n) {
    var i;
    /*!
     * jQuery JavaScript Library v3.5.1
     * https://jquery.com/
     *
     * Includes Sizzle.js
     * https://sizzlejs.com/
     *
     * Copyright JS Foundation and other contributors
     * Released under the MIT license
     * https://jquery.org/license
     *
     * Date: 2020-05-04T22:49Z
     */
    ! function(e, n) {
        "use strict";
        "object" == typeof t.exports ? t.exports = e.document ? n(e, !0) : function(t) {
            if (!t.document) throw new Error("jQuery requires a window with a document");
            return n(t)
        } : n(e)
    }("undefined" != typeof window ? window : this, (function(n, r) {
        "use strict";
        var o = [],
            s = Object.getPrototypeOf,
            a = o.slice,
            u = o.flat ? function(t) {
                return o.flat.call(t)
            } : function(t) {
                return o.concat.apply([], t)
            },
            l = o.push,
            c = o.indexOf,
            h = {},
            d = h.toString,
            f = h.hasOwnProperty,
            p = f.toString,
            g = p.call(Object),
            m = {},
            v = function(t) {
                return "function" == typeof t && "number" != typeof t.nodeType
            },
            y = function(t) {
                return null != t && t === t.window
            },
            w = n.document,
            b = {
                type: !0,
                src: !0,
                nonce: !0,
                noModule: !0
            };

        function x(t, e, n) {
            var i, r, o = (n = n || w).createElement("script");
            if (o.text = t, e)
                for (i in b)(r = e[i] || e.getAttribute && e.getAttribute(i)) && o.setAttribute(i, r);
            n.head.appendChild(o).parentNode.removeChild(o)
        }

        function k(t) {
            return null == t ? t + "" : "object" == typeof t || "function" == typeof t ? h[d.call(t)] || "object" : typeof t
        }
        var T = function(t, e) {
            return new T.fn.init(t, e)
        };

        function E(t) {
            var e = !!t && "length" in t && t.length,
                n = k(t);
            return !v(t) && !y(t) && ("array" === n || 0 === e || "number" == typeof e && e > 0 && e - 1 in t)
        }
        T.fn = T.prototype = {
            jquery: "3.5.1",
            constructor: T,
            length: 0,
            toArray: function() {
                return a.call(this)
            },
            get: function(t) {
                return null == t ? a.call(this) : t < 0 ? this[t + this.length] : this[t]
            },
            pushStack: function(t) {
                var e = T.merge(this.constructor(), t);
                return e.prevObject = this, e
            },
            each: function(t) {
                return T.each(this, t)
            },
            map: function(t) {
                return this.pushStack(T.map(this, (function(e, n) {
                    return t.call(e, n, e)
                })))
            },
            slice: function() {
                return this.pushStack(a.apply(this, arguments))
            },
            first: function() {
                return this.eq(0)
            },
            last: function() {
                return this.eq(-1)
            },
            even: function() {
                return this.pushStack(T.grep(this, (function(t, e) {
                    return (e + 1) % 2
                })))
            },
            odd: function() {
                return this.pushStack(T.grep(this, (function(t, e) {
                    return e % 2
                })))
            },
            eq: function(t) {
                var e = this.length,
                    n = +t + (t < 0 ? e : 0);
                return this.pushStack(n >= 0 && n < e ? [this[n]] : [])
            },
            end: function() {
                return this.prevObject || this.constructor()
            },
            push: l,
            sort: o.sort,
            splice: o.splice
        }, T.extend = T.fn.extend = function() {
            var t, e, n, i, r, o, s = arguments[0] || {},
                a = 1,
                u = arguments.length,
                l = !1;
            for ("boolean" == typeof s && (l = s, s = arguments[a] || {}, a++), "object" == typeof s || v(s) || (s = {}), a === u && (s = this, a--); a < u; a++)
                if (null != (t = arguments[a]))
                    for (e in t) i = t[e], "__proto__" !== e && s !== i && (l && i && (T.isPlainObject(i) || (r = Array.isArray(i))) ? (n = s[e], o = r && !Array.isArray(n) ? [] : r || T.isPlainObject(n) ? n : {}, r = !1, s[e] = T.extend(l, o, i)) : void 0 !== i && (s[e] = i));
            return s
        }, T.extend({
            expando: "jQuery" + ("3.5.1" + Math.random()).replace(/\D/g, ""),
            isReady: !0,
            error: function(t) {
                throw new Error(t)
            },
            noop: function() {},
            isPlainObject: function(t) {
                var e, n;
                return !(!t || "[object Object]" !== d.call(t)) && (!(e = s(t)) || "function" == typeof(n = f.call(e, "constructor") && e.constructor) && p.call(n) === g)
            },
            isEmptyObject: function(t) {
                var e;
                for (e in t) return !1;
                return !0
            },
            globalEval: function(t, e, n) {
                x(t, {
                    nonce: e && e.nonce
                }, n)
            },
            each: function(t, e) {
                var n, i = 0;
                if (E(t))
                    for (n = t.length; i < n && !1 !== e.call(t[i], i, t[i]); i++);
                else
                    for (i in t)
                        if (!1 === e.call(t[i], i, t[i])) break;
                return t
            },
            makeArray: function(t, e) {
                var n = e || [];
                return null != t && (E(Object(t)) ? T.merge(n, "string" == typeof t ? [t] : t) : l.call(n, t)), n
            },
            inArray: function(t, e, n) {
                return null == e ? -1 : c.call(e, t, n)
            },
            merge: function(t, e) {
                for (var n = +e.length, i = 0, r = t.length; i < n; i++) t[r++] = e[i];
                return t.length = r, t
            },
            grep: function(t, e, n) {
                for (var i = [], r = 0, o = t.length, s = !n; r < o; r++) !e(t[r], r) !== s && i.push(t[r]);
                return i
            },
            map: function(t, e, n) {
                var i, r, o = 0,
                    s = [];
                if (E(t))
                    for (i = t.length; o < i; o++) null != (r = e(t[o], o, n)) && s.push(r);
                else
                    for (o in t) null != (r = e(t[o], o, n)) && s.push(r);
                return u(s)
            },
            guid: 1,
            support: m
        }), "function" == typeof Symbol && (T.fn[Symbol.iterator] = o[Symbol.iterator]), T.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), (function(t, e) {
            h["[object " + e + "]"] = e.toLowerCase()
        }));
        var S =
            /*!
             * Sizzle CSS Selector Engine v2.3.5
             * https://sizzlejs.com/
             *
             * Copyright JS Foundation and other contributors
             * Released under the MIT license
             * https://js.foundation/
             *
             * Date: 2020-03-14
             */
            function(t) {
                var e, n, i, r, o, s, a, u, l, c, h, d, f, p, g, m, v, y, w, b = "sizzle" + 1 * new Date,
                    x = t.document,
                    k = 0,
                    T = 0,
                    E = ut(),
                    S = ut(),
                    C = ut(),
                    $ = ut(),
                    I = function(t, e) {
                        return t === e && (h = !0), 0
                    },
                    N = {}.hasOwnProperty,
                    A = [],
                    D = A.pop,
                    M = A.push,
                    P = A.push,
                    O = A.slice,
                    j = function(t, e) {
                        for (var n = 0, i = t.length; n < i; n++)
                            if (t[n] === e) return n;
                        return -1
                    },
                    _ = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    L = "[\\x20\\t\\r\\n\\f]",
                    H = "(?:\\\\[\\da-fA-F]{1,6}" + L + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
                    B = "\\[" + L + "*(" + H + ")(?:" + L + "*([*^$|!~]?=)" + L + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + H + "))|)" + L + "*\\]",
                    R = ":(" + H + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + B + ")*)|.*)\\)|)",
                    F = new RegExp(L + "+", "g"),
                    z = new RegExp("^" + L + "+|((?:^|[^\\\\])(?:\\\\.)*)" + L + "+$", "g"),
                    q = new RegExp("^" + L + "*," + L + "*"),
                    W = new RegExp("^" + L + "*([>+~]|" + L + ")" + L + "*"),
                    V = new RegExp(L + "|>"),
                    U = new RegExp(R),
                    X = new RegExp("^" + H + "$"),
                    Y = {
                        ID: new RegExp("^#(" + H + ")"),
                        CLASS: new RegExp("^\\.(" + H + ")"),
                        TAG: new RegExp("^(" + H + "|[*])"),
                        ATTR: new RegExp("^" + B),
                        PSEUDO: new RegExp("^" + R),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + L + "*(even|odd|(([+-]|)(\\d*)n|)" + L + "*(?:([+-]|)" + L + "*(\\d+)|))" + L + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + _ + ")$", "i"),
                        needsContext: new RegExp("^" + L + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + L + "*((?:-\\d)?\\d*)" + L + "*\\)|)(?=[^-]|$)", "i")
                    },
                    J = /HTML$/i,
                    G = /^(?:input|select|textarea|button)$/i,
                    Q = /^h\d$/i,
                    K = /^[^{]+\{\s*\[native \w/,
                    Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    tt = /[+~]/,
                    et = new RegExp("\\\\[\\da-fA-F]{1,6}" + L + "?|\\\\([^\\r\\n\\f])", "g"),
                    nt = function(t, e) {
                        var n = "0x" + t.slice(1) - 65536;
                        return e || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320))
                    },
                    it = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
                    rt = function(t, e) {
                        return e ? "\0" === t ? "�" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
                    },
                    ot = function() {
                        d()
                    },
                    st = bt((function(t) {
                        return !0 === t.disabled && "fieldset" === t.nodeName.toLowerCase()
                    }), {
                        dir: "parentNode",
                        next: "legend"
                    });
                try {
                    P.apply(A = O.call(x.childNodes), x.childNodes), A[x.childNodes.length].nodeType
                } catch (t) {
                    P = {
                        apply: A.length ? function(t, e) {
                            M.apply(t, O.call(e))
                        } : function(t, e) {
                            for (var n = t.length, i = 0; t[n++] = e[i++];);
                            t.length = n - 1
                        }
                    }
                }

                function at(t, e, i, r) {
                    var o, a, l, c, h, p, v, y = e && e.ownerDocument,
                        x = e ? e.nodeType : 9;
                    if (i = i || [], "string" != typeof t || !t || 1 !== x && 9 !== x && 11 !== x) return i;
                    if (!r && (d(e), e = e || f, g)) {
                        if (11 !== x && (h = Z.exec(t)))
                            if (o = h[1]) {
                                if (9 === x) {
                                    if (!(l = e.getElementById(o))) return i;
                                    if (l.id === o) return i.push(l), i
                                } else if (y && (l = y.getElementById(o)) && w(e, l) && l.id === o) return i.push(l), i
                            } else {
                                if (h[2]) return P.apply(i, e.getElementsByTagName(t)), i;
                                if ((o = h[3]) && n.getElementsByClassName && e.getElementsByClassName) return P.apply(i, e.getElementsByClassName(o)), i
                            }
                        if (n.qsa && !$[t + " "] && (!m || !m.test(t)) && (1 !== x || "object" !== e.nodeName.toLowerCase())) {
                            if (v = t, y = e, 1 === x && (V.test(t) || W.test(t))) {
                                for ((y = tt.test(t) && vt(e.parentNode) || e) === e && n.scope || ((c = e.getAttribute("id")) ? c = c.replace(it, rt) : e.setAttribute("id", c = b)), a = (p = s(t)).length; a--;) p[a] = (c ? "#" + c : ":scope") + " " + wt(p[a]);
                                v = p.join(",")
                            }
                            try {
                                return P.apply(i, y.querySelectorAll(v)), i
                            } catch (e) {
                                $(t, !0)
                            } finally {
                                c === b && e.removeAttribute("id")
                            }
                        }
                    }
                    return u(t.replace(z, "$1"), e, i, r)
                }

                function ut() {
                    var t = [];
                    return function e(n, r) {
                        return t.push(n + " ") > i.cacheLength && delete e[t.shift()], e[n + " "] = r
                    }
                }

                function lt(t) {
                    return t[b] = !0, t
                }

                function ct(t) {
                    var e = f.createElement("fieldset");
                    try {
                        return !!t(e)
                    } catch (t) {
                        return !1
                    } finally {
                        e.parentNode && e.parentNode.removeChild(e), e = null
                    }
                }

                function ht(t, e) {
                    for (var n = t.split("|"), r = n.length; r--;) i.attrHandle[n[r]] = e
                }

                function dt(t, e) {
                    var n = e && t,
                        i = n && 1 === t.nodeType && 1 === e.nodeType && t.sourceIndex - e.sourceIndex;
                    if (i) return i;
                    if (n)
                        for (; n = n.nextSibling;)
                            if (n === e) return -1;
                    return t ? 1 : -1
                }

                function ft(t) {
                    return function(e) {
                        return "input" === e.nodeName.toLowerCase() && e.type === t
                    }
                }

                function pt(t) {
                    return function(e) {
                        var n = e.nodeName.toLowerCase();
                        return ("input" === n || "button" === n) && e.type === t
                    }
                }

                function gt(t) {
                    return function(e) {
                        return "form" in e ? e.parentNode && !1 === e.disabled ? "label" in e ? "label" in e.parentNode ? e.parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && st(e) === t : e.disabled === t : "label" in e && e.disabled === t
                    }
                }

                function mt(t) {
                    return lt((function(e) {
                        return e = +e, lt((function(n, i) {
                            for (var r, o = t([], n.length, e), s = o.length; s--;) n[r = o[s]] && (n[r] = !(i[r] = n[r]))
                        }))
                    }))
                }

                function vt(t) {
                    return t && void 0 !== t.getElementsByTagName && t
                }
                for (e in n = at.support = {}, o = at.isXML = function(t) {
                        var e = t.namespaceURI,
                            n = (t.ownerDocument || t).documentElement;
                        return !J.test(e || n && n.nodeName || "HTML")
                    }, d = at.setDocument = function(t) {
                        var e, r, s = t ? t.ownerDocument || t : x;
                        return s != f && 9 === s.nodeType && s.documentElement ? (p = (f = s).documentElement, g = !o(f), x != f && (r = f.defaultView) && r.top !== r && (r.addEventListener ? r.addEventListener("unload", ot, !1) : r.attachEvent && r.attachEvent("onunload", ot)), n.scope = ct((function(t) {
                            return p.appendChild(t).appendChild(f.createElement("div")), void 0 !== t.querySelectorAll && !t.querySelectorAll(":scope fieldset div").length
                        })), n.attributes = ct((function(t) {
                            return t.className = "i", !t.getAttribute("className")
                        })), n.getElementsByTagName = ct((function(t) {
                            return t.appendChild(f.createComment("")), !t.getElementsByTagName("*").length
                        })), n.getElementsByClassName = K.test(f.getElementsByClassName), n.getById = ct((function(t) {
                            return p.appendChild(t).id = b, !f.getElementsByName || !f.getElementsByName(b).length
                        })), n.getById ? (i.filter.ID = function(t) {
                            var e = t.replace(et, nt);
                            return function(t) {
                                return t.getAttribute("id") === e
                            }
                        }, i.find.ID = function(t, e) {
                            if (void 0 !== e.getElementById && g) {
                                var n = e.getElementById(t);
                                return n ? [n] : []
                            }
                        }) : (i.filter.ID = function(t) {
                            var e = t.replace(et, nt);
                            return function(t) {
                                var n = void 0 !== t.getAttributeNode && t.getAttributeNode("id");
                                return n && n.value === e
                            }
                        }, i.find.ID = function(t, e) {
                            if (void 0 !== e.getElementById && g) {
                                var n, i, r, o = e.getElementById(t);
                                if (o) {
                                    if ((n = o.getAttributeNode("id")) && n.value === t) return [o];
                                    for (r = e.getElementsByName(t), i = 0; o = r[i++];)
                                        if ((n = o.getAttributeNode("id")) && n.value === t) return [o]
                                }
                                return []
                            }
                        }), i.find.TAG = n.getElementsByTagName ? function(t, e) {
                            return void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t) : n.qsa ? e.querySelectorAll(t) : void 0
                        } : function(t, e) {
                            var n, i = [],
                                r = 0,
                                o = e.getElementsByTagName(t);
                            if ("*" === t) {
                                for (; n = o[r++];) 1 === n.nodeType && i.push(n);
                                return i
                            }
                            return o
                        }, i.find.CLASS = n.getElementsByClassName && function(t, e) {
                            if (void 0 !== e.getElementsByClassName && g) return e.getElementsByClassName(t)
                        }, v = [], m = [], (n.qsa = K.test(f.querySelectorAll)) && (ct((function(t) {
                            var e;
                            p.appendChild(t).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", t.querySelectorAll("[msallowcapture^='']").length && m.push("[*^$]=" + L + "*(?:''|\"\")"), t.querySelectorAll("[selected]").length || m.push("\\[" + L + "*(?:value|" + _ + ")"), t.querySelectorAll("[id~=" + b + "-]").length || m.push("~="), (e = f.createElement("input")).setAttribute("name", ""), t.appendChild(e), t.querySelectorAll("[name='']").length || m.push("\\[" + L + "*name" + L + "*=" + L + "*(?:''|\"\")"), t.querySelectorAll(":checked").length || m.push(":checked"), t.querySelectorAll("a#" + b + "+*").length || m.push(".#.+[+~]"), t.querySelectorAll("\\\f"), m.push("[\\r\\n\\f]")
                        })), ct((function(t) {
                            t.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                            var e = f.createElement("input");
                            e.setAttribute("type", "hidden"), t.appendChild(e).setAttribute("name", "D"), t.querySelectorAll("[name=d]").length && m.push("name" + L + "*[*^$|!~]?="), 2 !== t.querySelectorAll(":enabled").length && m.push(":enabled", ":disabled"), p.appendChild(t).disabled = !0, 2 !== t.querySelectorAll(":disabled").length && m.push(":enabled", ":disabled"), t.querySelectorAll("*,:x"), m.push(",.*:")
                        }))), (n.matchesSelector = K.test(y = p.matches || p.webkitMatchesSelector || p.mozMatchesSelector || p.oMatchesSelector || p.msMatchesSelector)) && ct((function(t) {
                            n.disconnectedMatch = y.call(t, "*"), y.call(t, "[s!='']:x"), v.push("!=", R)
                        })), m = m.length && new RegExp(m.join("|")), v = v.length && new RegExp(v.join("|")), e = K.test(p.compareDocumentPosition), w = e || K.test(p.contains) ? function(t, e) {
                            var n = 9 === t.nodeType ? t.documentElement : t,
                                i = e && e.parentNode;
                            return t === i || !(!i || 1 !== i.nodeType || !(n.contains ? n.contains(i) : t.compareDocumentPosition && 16 & t.compareDocumentPosition(i)))
                        } : function(t, e) {
                            if (e)
                                for (; e = e.parentNode;)
                                    if (e === t) return !0;
                            return !1
                        }, I = e ? function(t, e) {
                            if (t === e) return h = !0, 0;
                            var i = !t.compareDocumentPosition - !e.compareDocumentPosition;
                            return i || (1 & (i = (t.ownerDocument || t) == (e.ownerDocument || e) ? t.compareDocumentPosition(e) : 1) || !n.sortDetached && e.compareDocumentPosition(t) === i ? t == f || t.ownerDocument == x && w(x, t) ? -1 : e == f || e.ownerDocument == x && w(x, e) ? 1 : c ? j(c, t) - j(c, e) : 0 : 4 & i ? -1 : 1)
                        } : function(t, e) {
                            if (t === e) return h = !0, 0;
                            var n, i = 0,
                                r = t.parentNode,
                                o = e.parentNode,
                                s = [t],
                                a = [e];
                            if (!r || !o) return t == f ? -1 : e == f ? 1 : r ? -1 : o ? 1 : c ? j(c, t) - j(c, e) : 0;
                            if (r === o) return dt(t, e);
                            for (n = t; n = n.parentNode;) s.unshift(n);
                            for (n = e; n = n.parentNode;) a.unshift(n);
                            for (; s[i] === a[i];) i++;
                            return i ? dt(s[i], a[i]) : s[i] == x ? -1 : a[i] == x ? 1 : 0
                        }, f) : f
                    }, at.matches = function(t, e) {
                        return at(t, null, null, e)
                    }, at.matchesSelector = function(t, e) {
                        if (d(t), n.matchesSelector && g && !$[e + " "] && (!v || !v.test(e)) && (!m || !m.test(e))) try {
                            var i = y.call(t, e);
                            if (i || n.disconnectedMatch || t.document && 11 !== t.document.nodeType) return i
                        } catch (t) {
                            $(e, !0)
                        }
                        return at(e, f, null, [t]).length > 0
                    }, at.contains = function(t, e) {
                        return (t.ownerDocument || t) != f && d(t), w(t, e)
                    }, at.attr = function(t, e) {
                        (t.ownerDocument || t) != f && d(t);
                        var r = i.attrHandle[e.toLowerCase()],
                            o = r && N.call(i.attrHandle, e.toLowerCase()) ? r(t, e, !g) : void 0;
                        return void 0 !== o ? o : n.attributes || !g ? t.getAttribute(e) : (o = t.getAttributeNode(e)) && o.specified ? o.value : null
                    }, at.escape = function(t) {
                        return (t + "").replace(it, rt)
                    }, at.error = function(t) {
                        throw new Error("Syntax error, unrecognized expression: " + t)
                    }, at.uniqueSort = function(t) {
                        var e, i = [],
                            r = 0,
                            o = 0;
                        if (h = !n.detectDuplicates, c = !n.sortStable && t.slice(0), t.sort(I), h) {
                            for (; e = t[o++];) e === t[o] && (r = i.push(o));
                            for (; r--;) t.splice(i[r], 1)
                        }
                        return c = null, t
                    }, r = at.getText = function(t) {
                        var e, n = "",
                            i = 0,
                            o = t.nodeType;
                        if (o) {
                            if (1 === o || 9 === o || 11 === o) {
                                if ("string" == typeof t.textContent) return t.textContent;
                                for (t = t.firstChild; t; t = t.nextSibling) n += r(t)
                            } else if (3 === o || 4 === o) return t.nodeValue
                        } else
                            for (; e = t[i++];) n += r(e);
                        return n
                    }, (i = at.selectors = {
                        cacheLength: 50,
                        createPseudo: lt,
                        match: Y,
                        attrHandle: {},
                        find: {},
                        relative: {
                            ">": {
                                dir: "parentNode",
                                first: !0
                            },
                            " ": {
                                dir: "parentNode"
                            },
                            "+": {
                                dir: "previousSibling",
                                first: !0
                            },
                            "~": {
                                dir: "previousSibling"
                            }
                        },
                        preFilter: {
                            ATTR: function(t) {
                                return t[1] = t[1].replace(et, nt), t[3] = (t[3] || t[4] || t[5] || "").replace(et, nt), "~=" === t[2] && (t[3] = " " + t[3] + " "), t.slice(0, 4)
                            },
                            CHILD: function(t) {
                                return t[1] = t[1].toLowerCase(), "nth" === t[1].slice(0, 3) ? (t[3] || at.error(t[0]), t[4] = +(t[4] ? t[5] + (t[6] || 1) : 2 * ("even" === t[3] || "odd" === t[3])), t[5] = +(t[7] + t[8] || "odd" === t[3])) : t[3] && at.error(t[0]), t
                            },
                            PSEUDO: function(t) {
                                var e, n = !t[6] && t[2];
                                return Y.CHILD.test(t[0]) ? null : (t[3] ? t[2] = t[4] || t[5] || "" : n && U.test(n) && (e = s(n, !0)) && (e = n.indexOf(")", n.length - e) - n.length) && (t[0] = t[0].slice(0, e), t[2] = n.slice(0, e)), t.slice(0, 3))
                            }
                        },
                        filter: {
                            TAG: function(t) {
                                var e = t.replace(et, nt).toLowerCase();
                                return "*" === t ? function() {
                                    return !0
                                } : function(t) {
                                    return t.nodeName && t.nodeName.toLowerCase() === e
                                }
                            },
                            CLASS: function(t) {
                                var e = E[t + " "];
                                return e || (e = new RegExp("(^|" + L + ")" + t + "(" + L + "|$)")) && E(t, (function(t) {
                                    return e.test("string" == typeof t.className && t.className || void 0 !== t.getAttribute && t.getAttribute("class") || "")
                                }))
                            },
                            ATTR: function(t, e, n) {
                                return function(i) {
                                    var r = at.attr(i, t);
                                    return null == r ? "!=" === e : !e || (r += "", "=" === e ? r === n : "!=" === e ? r !== n : "^=" === e ? n && 0 === r.indexOf(n) : "*=" === e ? n && r.indexOf(n) > -1 : "$=" === e ? n && r.slice(-n.length) === n : "~=" === e ? (" " + r.replace(F, " ") + " ").indexOf(n) > -1 : "|=" === e && (r === n || r.slice(0, n.length + 1) === n + "-"))
                                }
                            },
                            CHILD: function(t, e, n, i, r) {
                                var o = "nth" !== t.slice(0, 3),
                                    s = "last" !== t.slice(-4),
                                    a = "of-type" === e;
                                return 1 === i && 0 === r ? function(t) {
                                    return !!t.parentNode
                                } : function(e, n, u) {
                                    var l, c, h, d, f, p, g = o !== s ? "nextSibling" : "previousSibling",
                                        m = e.parentNode,
                                        v = a && e.nodeName.toLowerCase(),
                                        y = !u && !a,
                                        w = !1;
                                    if (m) {
                                        if (o) {
                                            for (; g;) {
                                                for (d = e; d = d[g];)
                                                    if (a ? d.nodeName.toLowerCase() === v : 1 === d.nodeType) return !1;
                                                p = g = "only" === t && !p && "nextSibling"
                                            }
                                            return !0
                                        }
                                        if (p = [s ? m.firstChild : m.lastChild], s && y) {
                                            for (w = (f = (l = (c = (h = (d = m)[b] || (d[b] = {}))[d.uniqueID] || (h[d.uniqueID] = {}))[t] || [])[0] === k && l[1]) && l[2], d = f && m.childNodes[f]; d = ++f && d && d[g] || (w = f = 0) || p.pop();)
                                                if (1 === d.nodeType && ++w && d === e) {
                                                    c[t] = [k, f, w];
                                                    break
                                                }
                                        } else if (y && (w = f = (l = (c = (h = (d = e)[b] || (d[b] = {}))[d.uniqueID] || (h[d.uniqueID] = {}))[t] || [])[0] === k && l[1]), !1 === w)
                                            for (;
                                                (d = ++f && d && d[g] || (w = f = 0) || p.pop()) && ((a ? d.nodeName.toLowerCase() !== v : 1 !== d.nodeType) || !++w || (y && ((c = (h = d[b] || (d[b] = {}))[d.uniqueID] || (h[d.uniqueID] = {}))[t] = [k, w]), d !== e)););
                                        return (w -= r) === i || w % i == 0 && w / i >= 0
                                    }
                                }
                            },
                            PSEUDO: function(t, e) {
                                var n, r = i.pseudos[t] || i.setFilters[t.toLowerCase()] || at.error("unsupported pseudo: " + t);
                                return r[b] ? r(e) : r.length > 1 ? (n = [t, t, "", e], i.setFilters.hasOwnProperty(t.toLowerCase()) ? lt((function(t, n) {
                                    for (var i, o = r(t, e), s = o.length; s--;) t[i = j(t, o[s])] = !(n[i] = o[s])
                                })) : function(t) {
                                    return r(t, 0, n)
                                }) : r
                            }
                        },
                        pseudos: {
                            not: lt((function(t) {
                                var e = [],
                                    n = [],
                                    i = a(t.replace(z, "$1"));
                                return i[b] ? lt((function(t, e, n, r) {
                                    for (var o, s = i(t, null, r, []), a = t.length; a--;)(o = s[a]) && (t[a] = !(e[a] = o))
                                })) : function(t, r, o) {
                                    return e[0] = t, i(e, null, o, n), e[0] = null, !n.pop()
                                }
                            })),
                            has: lt((function(t) {
                                return function(e) {
                                    return at(t, e).length > 0
                                }
                            })),
                            contains: lt((function(t) {
                                return t = t.replace(et, nt),
                                    function(e) {
                                        return (e.textContent || r(e)).indexOf(t) > -1
                                    }
                            })),
                            lang: lt((function(t) {
                                return X.test(t || "") || at.error("unsupported lang: " + t), t = t.replace(et, nt).toLowerCase(),
                                    function(e) {
                                        var n;
                                        do {
                                            if (n = g ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return (n = n.toLowerCase()) === t || 0 === n.indexOf(t + "-")
                                        } while ((e = e.parentNode) && 1 === e.nodeType);
                                        return !1
                                    }
                            })),
                            target: function(e) {
                                var n = t.location && t.location.hash;
                                return n && n.slice(1) === e.id
                            },
                            root: function(t) {
                                return t === p
                            },
                            focus: function(t) {
                                return t === f.activeElement && (!f.hasFocus || f.hasFocus()) && !!(t.type || t.href || ~t.tabIndex)
                            },
                            enabled: gt(!1),
                            disabled: gt(!0),
                            checked: function(t) {
                                var e = t.nodeName.toLowerCase();
                                return "input" === e && !!t.checked || "option" === e && !!t.selected
                            },
                            selected: function(t) {
                                return t.parentNode && t.parentNode.selectedIndex, !0 === t.selected
                            },
                            empty: function(t) {
                                for (t = t.firstChild; t; t = t.nextSibling)
                                    if (t.nodeType < 6) return !1;
                                return !0
                            },
                            parent: function(t) {
                                return !i.pseudos.empty(t)
                            },
                            header: function(t) {
                                return Q.test(t.nodeName)
                            },
                            input: function(t) {
                                return G.test(t.nodeName)
                            },
                            button: function(t) {
                                var e = t.nodeName.toLowerCase();
                                return "input" === e && "button" === t.type || "button" === e
                            },
                            text: function(t) {
                                var e;
                                return "input" === t.nodeName.toLowerCase() && "text" === t.type && (null == (e = t.getAttribute("type")) || "text" === e.toLowerCase())
                            },
                            first: mt((function() {
                                return [0]
                            })),
                            last: mt((function(t, e) {
                                return [e - 1]
                            })),
                            eq: mt((function(t, e, n) {
                                return [n < 0 ? n + e : n]
                            })),
                            even: mt((function(t, e) {
                                for (var n = 0; n < e; n += 2) t.push(n);
                                return t
                            })),
                            odd: mt((function(t, e) {
                                for (var n = 1; n < e; n += 2) t.push(n);
                                return t
                            })),
                            lt: mt((function(t, e, n) {
                                for (var i = n < 0 ? n + e : n > e ? e : n; --i >= 0;) t.push(i);
                                return t
                            })),
                            gt: mt((function(t, e, n) {
                                for (var i = n < 0 ? n + e : n; ++i < e;) t.push(i);
                                return t
                            }))
                        }
                    }).pseudos.nth = i.pseudos.eq, {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    }) i.pseudos[e] = ft(e);
                for (e in {
                        submit: !0,
                        reset: !0
                    }) i.pseudos[e] = pt(e);

                function yt() {}

                function wt(t) {
                    for (var e = 0, n = t.length, i = ""; e < n; e++) i += t[e].value;
                    return i
                }

                function bt(t, e, n) {
                    var i = e.dir,
                        r = e.next,
                        o = r || i,
                        s = n && "parentNode" === o,
                        a = T++;
                    return e.first ? function(e, n, r) {
                        for (; e = e[i];)
                            if (1 === e.nodeType || s) return t(e, n, r);
                        return !1
                    } : function(e, n, u) {
                        var l, c, h, d = [k, a];
                        if (u) {
                            for (; e = e[i];)
                                if ((1 === e.nodeType || s) && t(e, n, u)) return !0
                        } else
                            for (; e = e[i];)
                                if (1 === e.nodeType || s)
                                    if (c = (h = e[b] || (e[b] = {}))[e.uniqueID] || (h[e.uniqueID] = {}), r && r === e.nodeName.toLowerCase()) e = e[i] || e;
                                    else {
                                        if ((l = c[o]) && l[0] === k && l[1] === a) return d[2] = l[2];
                                        if (c[o] = d, d[2] = t(e, n, u)) return !0
                                    } return !1
                    }
                }

                function xt(t) {
                    return t.length > 1 ? function(e, n, i) {
                        for (var r = t.length; r--;)
                            if (!t[r](e, n, i)) return !1;
                        return !0
                    } : t[0]
                }

                function kt(t, e, n, i, r) {
                    for (var o, s = [], a = 0, u = t.length, l = null != e; a < u; a++)(o = t[a]) && (n && !n(o, i, r) || (s.push(o), l && e.push(a)));
                    return s
                }

                function Tt(t, e, n, i, r, o) {
                    return i && !i[b] && (i = Tt(i)), r && !r[b] && (r = Tt(r, o)), lt((function(o, s, a, u) {
                        var l, c, h, d = [],
                            f = [],
                            p = s.length,
                            g = o || function(t, e, n) {
                                for (var i = 0, r = e.length; i < r; i++) at(t, e[i], n);
                                return n
                            }(e || "*", a.nodeType ? [a] : a, []),
                            m = !t || !o && e ? g : kt(g, d, t, a, u),
                            v = n ? r || (o ? t : p || i) ? [] : s : m;
                        if (n && n(m, v, a, u), i)
                            for (l = kt(v, f), i(l, [], a, u), c = l.length; c--;)(h = l[c]) && (v[f[c]] = !(m[f[c]] = h));
                        if (o) {
                            if (r || t) {
                                if (r) {
                                    for (l = [], c = v.length; c--;)(h = v[c]) && l.push(m[c] = h);
                                    r(null, v = [], l, u)
                                }
                                for (c = v.length; c--;)(h = v[c]) && (l = r ? j(o, h) : d[c]) > -1 && (o[l] = !(s[l] = h))
                            }
                        } else v = kt(v === s ? v.splice(p, v.length) : v), r ? r(null, s, v, u) : P.apply(s, v)
                    }))
                }

                function Et(t) {
                    for (var e, n, r, o = t.length, s = i.relative[t[0].type], a = s || i.relative[" "], u = s ? 1 : 0, c = bt((function(t) {
                            return t === e
                        }), a, !0), h = bt((function(t) {
                            return j(e, t) > -1
                        }), a, !0), d = [function(t, n, i) {
                            var r = !s && (i || n !== l) || ((e = n).nodeType ? c(t, n, i) : h(t, n, i));
                            return e = null, r
                        }]; u < o; u++)
                        if (n = i.relative[t[u].type]) d = [bt(xt(d), n)];
                        else {
                            if ((n = i.filter[t[u].type].apply(null, t[u].matches))[b]) {
                                for (r = ++u; r < o && !i.relative[t[r].type]; r++);
                                return Tt(u > 1 && xt(d), u > 1 && wt(t.slice(0, u - 1).concat({
                                    value: " " === t[u - 2].type ? "*" : ""
                                })).replace(z, "$1"), n, u < r && Et(t.slice(u, r)), r < o && Et(t = t.slice(r)), r < o && wt(t))
                            }
                            d.push(n)
                        }
                    return xt(d)
                }
                return yt.prototype = i.filters = i.pseudos, i.setFilters = new yt, s = at.tokenize = function(t, e) {
                    var n, r, o, s, a, u, l, c = S[t + " "];
                    if (c) return e ? 0 : c.slice(0);
                    for (a = t, u = [], l = i.preFilter; a;) {
                        for (s in n && !(r = q.exec(a)) || (r && (a = a.slice(r[0].length) || a), u.push(o = [])), n = !1, (r = W.exec(a)) && (n = r.shift(), o.push({
                                value: n,
                                type: r[0].replace(z, " ")
                            }), a = a.slice(n.length)), i.filter) !(r = Y[s].exec(a)) || l[s] && !(r = l[s](r)) || (n = r.shift(), o.push({
                            value: n,
                            type: s,
                            matches: r
                        }), a = a.slice(n.length));
                        if (!n) break
                    }
                    return e ? a.length : a ? at.error(t) : S(t, u).slice(0)
                }, a = at.compile = function(t, e) {
                    var n, r = [],
                        o = [],
                        a = C[t + " "];
                    if (!a) {
                        for (e || (e = s(t)), n = e.length; n--;)(a = Et(e[n]))[b] ? r.push(a) : o.push(a);
                        (a = C(t, function(t, e) {
                            var n = e.length > 0,
                                r = t.length > 0,
                                o = function(o, s, a, u, c) {
                                    var h, p, m, v = 0,
                                        y = "0",
                                        w = o && [],
                                        b = [],
                                        x = l,
                                        T = o || r && i.find.TAG("*", c),
                                        E = k += null == x ? 1 : Math.random() || .1,
                                        S = T.length;
                                    for (c && (l = s == f || s || c); y !== S && null != (h = T[y]); y++) {
                                        if (r && h) {
                                            for (p = 0, s || h.ownerDocument == f || (d(h), a = !g); m = t[p++];)
                                                if (m(h, s || f, a)) {
                                                    u.push(h);
                                                    break
                                                }
                                            c && (k = E)
                                        }
                                        n && ((h = !m && h) && v--, o && w.push(h))
                                    }
                                    if (v += y, n && y !== v) {
                                        for (p = 0; m = e[p++];) m(w, b, s, a);
                                        if (o) {
                                            if (v > 0)
                                                for (; y--;) w[y] || b[y] || (b[y] = D.call(u));
                                            b = kt(b)
                                        }
                                        P.apply(u, b), c && !o && b.length > 0 && v + e.length > 1 && at.uniqueSort(u)
                                    }
                                    return c && (k = E, l = x), w
                                };
                            return n ? lt(o) : o
                        }(o, r))).selector = t
                    }
                    return a
                }, u = at.select = function(t, e, n, r) {
                    var o, u, l, c, h, d = "function" == typeof t && t,
                        f = !r && s(t = d.selector || t);
                    if (n = n || [], 1 === f.length) {
                        if ((u = f[0] = f[0].slice(0)).length > 2 && "ID" === (l = u[0]).type && 9 === e.nodeType && g && i.relative[u[1].type]) {
                            if (!(e = (i.find.ID(l.matches[0].replace(et, nt), e) || [])[0])) return n;
                            d && (e = e.parentNode), t = t.slice(u.shift().value.length)
                        }
                        for (o = Y.needsContext.test(t) ? 0 : u.length; o-- && (l = u[o], !i.relative[c = l.type]);)
                            if ((h = i.find[c]) && (r = h(l.matches[0].replace(et, nt), tt.test(u[0].type) && vt(e.parentNode) || e))) {
                                if (u.splice(o, 1), !(t = r.length && wt(u))) return P.apply(n, r), n;
                                break
                            }
                    }
                    return (d || a(t, f))(r, e, !g, n, !e || tt.test(t) && vt(e.parentNode) || e), n
                }, n.sortStable = b.split("").sort(I).join("") === b, n.detectDuplicates = !!h, d(), n.sortDetached = ct((function(t) {
                    return 1 & t.compareDocumentPosition(f.createElement("fieldset"))
                })), ct((function(t) {
                    return t.innerHTML = "<a href='#'></a>", "#" === t.firstChild.getAttribute("href")
                })) || ht("type|href|height|width", (function(t, e, n) {
                    if (!n) return t.getAttribute(e, "type" === e.toLowerCase() ? 1 : 2)
                })), n.attributes && ct((function(t) {
                    return t.innerHTML = "<input/>", t.firstChild.setAttribute("value", ""), "" === t.firstChild.getAttribute("value")
                })) || ht("value", (function(t, e, n) {
                    if (!n && "input" === t.nodeName.toLowerCase()) return t.defaultValue
                })), ct((function(t) {
                    return null == t.getAttribute("disabled")
                })) || ht(_, (function(t, e, n) {
                    var i;
                    if (!n) return !0 === t[e] ? e.toLowerCase() : (i = t.getAttributeNode(e)) && i.specified ? i.value : null
                })), at
            }(n);
        T.find = S, T.expr = S.selectors, T.expr[":"] = T.expr.pseudos, T.uniqueSort = T.unique = S.uniqueSort, T.text = S.getText, T.isXMLDoc = S.isXML, T.contains = S.contains, T.escapeSelector = S.escape;
        var C = function(t, e, n) {
                for (var i = [], r = void 0 !== n;
                    (t = t[e]) && 9 !== t.nodeType;)
                    if (1 === t.nodeType) {
                        if (r && T(t).is(n)) break;
                        i.push(t)
                    }
                return i
            },
            $ = function(t, e) {
                for (var n = []; t; t = t.nextSibling) 1 === t.nodeType && t !== e && n.push(t);
                return n
            },
            I = T.expr.match.needsContext;

        function N(t, e) {
            return t.nodeName && t.nodeName.toLowerCase() === e.toLowerCase()
        }
        var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

        function D(t, e, n) {
            return v(e) ? T.grep(t, (function(t, i) {
                return !!e.call(t, i, t) !== n
            })) : e.nodeType ? T.grep(t, (function(t) {
                return t === e !== n
            })) : "string" != typeof e ? T.grep(t, (function(t) {
                return c.call(e, t) > -1 !== n
            })) : T.filter(e, t, n)
        }
        T.filter = function(t, e, n) {
            var i = e[0];
            return n && (t = ":not(" + t + ")"), 1 === e.length && 1 === i.nodeType ? T.find.matchesSelector(i, t) ? [i] : [] : T.find.matches(t, T.grep(e, (function(t) {
                return 1 === t.nodeType
            })))
        }, T.fn.extend({
            find: function(t) {
                var e, n, i = this.length,
                    r = this;
                if ("string" != typeof t) return this.pushStack(T(t).filter((function() {
                    for (e = 0; e < i; e++)
                        if (T.contains(r[e], this)) return !0
                })));
                for (n = this.pushStack([]), e = 0; e < i; e++) T.find(t, r[e], n);
                return i > 1 ? T.uniqueSort(n) : n
            },
            filter: function(t) {
                return this.pushStack(D(this, t || [], !1))
            },
            not: function(t) {
                return this.pushStack(D(this, t || [], !0))
            },
            is: function(t) {
                return !!D(this, "string" == typeof t && I.test(t) ? T(t) : t || [], !1).length
            }
        });
        var M, P = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
        (T.fn.init = function(t, e, n) {
            var i, r;
            if (!t) return this;
            if (n = n || M, "string" == typeof t) {
                if (!(i = "<" === t[0] && ">" === t[t.length - 1] && t.length >= 3 ? [null, t, null] : P.exec(t)) || !i[1] && e) return !e || e.jquery ? (e || n).find(t) : this.constructor(e).find(t);
                if (i[1]) {
                    if (e = e instanceof T ? e[0] : e, T.merge(this, T.parseHTML(i[1], e && e.nodeType ? e.ownerDocument || e : w, !0)), A.test(i[1]) && T.isPlainObject(e))
                        for (i in e) v(this[i]) ? this[i](e[i]) : this.attr(i, e[i]);
                    return this
                }
                return (r = w.getElementById(i[2])) && (this[0] = r, this.length = 1), this
            }
            return t.nodeType ? (this[0] = t, this.length = 1, this) : v(t) ? void 0 !== n.ready ? n.ready(t) : t(T) : T.makeArray(t, this)
        }).prototype = T.fn, M = T(w);
        var O = /^(?:parents|prev(?:Until|All))/,
            j = {
                children: !0,
                contents: !0,
                next: !0,
                prev: !0
            };

        function _(t, e) {
            for (;
                (t = t[e]) && 1 !== t.nodeType;);
            return t
        }
        T.fn.extend({
            has: function(t) {
                var e = T(t, this),
                    n = e.length;
                return this.filter((function() {
                    for (var t = 0; t < n; t++)
                        if (T.contains(this, e[t])) return !0
                }))
            },
            closest: function(t, e) {
                var n, i = 0,
                    r = this.length,
                    o = [],
                    s = "string" != typeof t && T(t);
                if (!I.test(t))
                    for (; i < r; i++)
                        for (n = this[i]; n && n !== e; n = n.parentNode)
                            if (n.nodeType < 11 && (s ? s.index(n) > -1 : 1 === n.nodeType && T.find.matchesSelector(n, t))) {
                                o.push(n);
                                break
                            }
                return this.pushStack(o.length > 1 ? T.uniqueSort(o) : o)
            },
            index: function(t) {
                return t ? "string" == typeof t ? c.call(T(t), this[0]) : c.call(this, t.jquery ? t[0] : t) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
            },
            add: function(t, e) {
                return this.pushStack(T.uniqueSort(T.merge(this.get(), T(t, e))))
            },
            addBack: function(t) {
                return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
            }
        }), T.each({
            parent: function(t) {
                var e = t.parentNode;
                return e && 11 !== e.nodeType ? e : null
            },
            parents: function(t) {
                return C(t, "parentNode")
            },
            parentsUntil: function(t, e, n) {
                return C(t, "parentNode", n)
            },
            next: function(t) {
                return _(t, "nextSibling")
            },
            prev: function(t) {
                return _(t, "previousSibling")
            },
            nextAll: function(t) {
                return C(t, "nextSibling")
            },
            prevAll: function(t) {
                return C(t, "previousSibling")
            },
            nextUntil: function(t, e, n) {
                return C(t, "nextSibling", n)
            },
            prevUntil: function(t, e, n) {
                return C(t, "previousSibling", n)
            },
            siblings: function(t) {
                return $((t.parentNode || {}).firstChild, t)
            },
            children: function(t) {
                return $(t.firstChild)
            },
            contents: function(t) {
                return null != t.contentDocument && s(t.contentDocument) ? t.contentDocument : (N(t, "template") && (t = t.content || t), T.merge([], t.childNodes))
            }
        }, (function(t, e) {
            T.fn[t] = function(n, i) {
                var r = T.map(this, e, n);
                return "Until" !== t.slice(-5) && (i = n), i && "string" == typeof i && (r = T.filter(i, r)), this.length > 1 && (j[t] || T.uniqueSort(r), O.test(t) && r.reverse()), this.pushStack(r)
            }
        }));
        var L = /[^\x20\t\r\n\f]+/g;

        function H(t) {
            return t
        }

        function B(t) {
            throw t
        }

        function R(t, e, n, i) {
            var r;
            try {
                t && v(r = t.promise) ? r.call(t).done(e).fail(n) : t && v(r = t.then) ? r.call(t, e, n) : e.apply(void 0, [t].slice(i))
            } catch (t) {
                n.apply(void 0, [t])
            }
        }
        T.Callbacks = function(t) {
            t = "string" == typeof t ? function(t) {
                var e = {};
                return T.each(t.match(L) || [], (function(t, n) {
                    e[n] = !0
                })), e
            }(t) : T.extend({}, t);
            var e, n, i, r, o = [],
                s = [],
                a = -1,
                u = function() {
                    for (r = r || t.once, i = e = !0; s.length; a = -1)
                        for (n = s.shift(); ++a < o.length;) !1 === o[a].apply(n[0], n[1]) && t.stopOnFalse && (a = o.length, n = !1);
                    t.memory || (n = !1), e = !1, r && (o = n ? [] : "")
                },
                l = {
                    add: function() {
                        return o && (n && !e && (a = o.length - 1, s.push(n)), function e(n) {
                            T.each(n, (function(n, i) {
                                v(i) ? t.unique && l.has(i) || o.push(i) : i && i.length && "string" !== k(i) && e(i)
                            }))
                        }(arguments), n && !e && u()), this
                    },
                    remove: function() {
                        return T.each(arguments, (function(t, e) {
                            for (var n;
                                (n = T.inArray(e, o, n)) > -1;) o.splice(n, 1), n <= a && a--
                        })), this
                    },
                    has: function(t) {
                        return t ? T.inArray(t, o) > -1 : o.length > 0
                    },
                    empty: function() {
                        return o && (o = []), this
                    },
                    disable: function() {
                        return r = s = [], o = n = "", this
                    },
                    disabled: function() {
                        return !o
                    },
                    lock: function() {
                        return r = s = [], n || e || (o = n = ""), this
                    },
                    locked: function() {
                        return !!r
                    },
                    fireWith: function(t, n) {
                        return r || (n = [t, (n = n || []).slice ? n.slice() : n], s.push(n), e || u()), this
                    },
                    fire: function() {
                        return l.fireWith(this, arguments), this
                    },
                    fired: function() {
                        return !!i
                    }
                };
            return l
        }, T.extend({
            Deferred: function(t) {
                var e = [
                        ["notify", "progress", T.Callbacks("memory"), T.Callbacks("memory"), 2],
                        ["resolve", "done", T.Callbacks("once memory"), T.Callbacks("once memory"), 0, "resolved"],
                        ["reject", "fail", T.Callbacks("once memory"), T.Callbacks("once memory"), 1, "rejected"]
                    ],
                    i = "pending",
                    r = {
                        state: function() {
                            return i
                        },
                        always: function() {
                            return o.done(arguments).fail(arguments), this
                        },
                        catch: function(t) {
                            return r.then(null, t)
                        },
                        pipe: function() {
                            var t = arguments;
                            return T.Deferred((function(n) {
                                T.each(e, (function(e, i) {
                                    var r = v(t[i[4]]) && t[i[4]];
                                    o[i[1]]((function() {
                                        var t = r && r.apply(this, arguments);
                                        t && v(t.promise) ? t.promise().progress(n.notify).done(n.resolve).fail(n.reject) : n[i[0] + "With"](this, r ? [t] : arguments)
                                    }))
                                })), t = null
                            })).promise()
                        },
                        then: function(t, i, r) {
                            var o = 0;

                            function s(t, e, i, r) {
                                return function() {
                                    var a = this,
                                        u = arguments,
                                        l = function() {
                                            var n, l;
                                            if (!(t < o)) {
                                                if ((n = i.apply(a, u)) === e.promise()) throw new TypeError("Thenable self-resolution");
                                                l = n && ("object" == typeof n || "function" == typeof n) && n.then, v(l) ? r ? l.call(n, s(o, e, H, r), s(o, e, B, r)) : (o++, l.call(n, s(o, e, H, r), s(o, e, B, r), s(o, e, H, e.notifyWith))) : (i !== H && (a = void 0, u = [n]), (r || e.resolveWith)(a, u))
                                            }
                                        },
                                        c = r ? l : function() {
                                            try {
                                                l()
                                            } catch (n) {
                                                T.Deferred.exceptionHook && T.Deferred.exceptionHook(n, c.stackTrace), t + 1 >= o && (i !== B && (a = void 0, u = [n]), e.rejectWith(a, u))
                                            }
                                        };
                                    t ? c() : (T.Deferred.getStackHook && (c.stackTrace = T.Deferred.getStackHook()), n.setTimeout(c))
                                }
                            }
                            return T.Deferred((function(n) {
                                e[0][3].add(s(0, n, v(r) ? r : H, n.notifyWith)), e[1][3].add(s(0, n, v(t) ? t : H)), e[2][3].add(s(0, n, v(i) ? i : B))
                            })).promise()
                        },
                        promise: function(t) {
                            return null != t ? T.extend(t, r) : r
                        }
                    },
                    o = {};
                return T.each(e, (function(t, n) {
                    var s = n[2],
                        a = n[5];
                    r[n[1]] = s.add, a && s.add((function() {
                        i = a
                    }), e[3 - t][2].disable, e[3 - t][3].disable, e[0][2].lock, e[0][3].lock), s.add(n[3].fire), o[n[0]] = function() {
                        return o[n[0] + "With"](this === o ? void 0 : this, arguments), this
                    }, o[n[0] + "With"] = s.fireWith
                })), r.promise(o), t && t.call(o, o), o
            },
            when: function(t) {
                var e = arguments.length,
                    n = e,
                    i = Array(n),
                    r = a.call(arguments),
                    o = T.Deferred(),
                    s = function(t) {
                        return function(n) {
                            i[t] = this, r[t] = arguments.length > 1 ? a.call(arguments) : n, --e || o.resolveWith(i, r)
                        }
                    };
                if (e <= 1 && (R(t, o.done(s(n)).resolve, o.reject, !e), "pending" === o.state() || v(r[n] && r[n].then))) return o.then();
                for (; n--;) R(r[n], s(n), o.reject);
                return o.promise()
            }
        });
        var F = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
        T.Deferred.exceptionHook = function(t, e) {
            n.console && n.console.warn && t && F.test(t.name) && n.console.warn("jQuery.Deferred exception: " + t.message, t.stack, e)
        }, T.readyException = function(t) {
            n.setTimeout((function() {
                throw t
            }))
        };
        var z = T.Deferred();

        function q() {
            w.removeEventListener("DOMContentLoaded", q), n.removeEventListener("load", q), T.ready()
        }
        T.fn.ready = function(t) {
            return z.then(t).catch((function(t) {
                T.readyException(t)
            })), this
        }, T.extend({
            isReady: !1,
            readyWait: 1,
            ready: function(t) {
                (!0 === t ? --T.readyWait : T.isReady) || (T.isReady = !0, !0 !== t && --T.readyWait > 0 || z.resolveWith(w, [T]))
            }
        }), T.ready.then = z.then, "complete" === w.readyState || "loading" !== w.readyState && !w.documentElement.doScroll ? n.setTimeout(T.ready) : (w.addEventListener("DOMContentLoaded", q), n.addEventListener("load", q));
        var W = function(t, e, n, i, r, o, s) {
                var a = 0,
                    u = t.length,
                    l = null == n;
                if ("object" === k(n))
                    for (a in r = !0, n) W(t, e, a, n[a], !0, o, s);
                else if (void 0 !== i && (r = !0, v(i) || (s = !0), l && (s ? (e.call(t, i), e = null) : (l = e, e = function(t, e, n) {
                        return l.call(T(t), n)
                    })), e))
                    for (; a < u; a++) e(t[a], n, s ? i : i.call(t[a], a, e(t[a], n)));
                return r ? t : l ? e.call(t) : u ? e(t[0], n) : o
            },
            V = /^-ms-/,
            U = /-([a-z])/g;

        function X(t, e) {
            return e.toUpperCase()
        }

        function Y(t) {
            return t.replace(V, "ms-").replace(U, X)
        }
        var J = function(t) {
            return 1 === t.nodeType || 9 === t.nodeType || !+t.nodeType
        };

        function G() {
            this.expando = T.expando + G.uid++
        }
        G.uid = 1, G.prototype = {
            cache: function(t) {
                var e = t[this.expando];
                return e || (e = {}, J(t) && (t.nodeType ? t[this.expando] = e : Object.defineProperty(t, this.expando, {
                    value: e,
                    configurable: !0
                }))), e
            },
            set: function(t, e, n) {
                var i, r = this.cache(t);
                if ("string" == typeof e) r[Y(e)] = n;
                else
                    for (i in e) r[Y(i)] = e[i];
                return r
            },
            get: function(t, e) {
                return void 0 === e ? this.cache(t) : t[this.expando] && t[this.expando][Y(e)]
            },
            access: function(t, e, n) {
                return void 0 === e || e && "string" == typeof e && void 0 === n ? this.get(t, e) : (this.set(t, e, n), void 0 !== n ? n : e)
            },
            remove: function(t, e) {
                var n, i = t[this.expando];
                if (void 0 !== i) {
                    if (void 0 !== e) {
                        n = (e = Array.isArray(e) ? e.map(Y) : (e = Y(e)) in i ? [e] : e.match(L) || []).length;
                        for (; n--;) delete i[e[n]]
                    }(void 0 === e || T.isEmptyObject(i)) && (t.nodeType ? t[this.expando] = void 0 : delete t[this.expando])
                }
            },
            hasData: function(t) {
                var e = t[this.expando];
                return void 0 !== e && !T.isEmptyObject(e)
            }
        };
        var Q = new G,
            K = new G,
            Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
            tt = /[A-Z]/g;

        function et(t, e, n) {
            var i;
            if (void 0 === n && 1 === t.nodeType)
                if (i = "data-" + e.replace(tt, "-$&").toLowerCase(), "string" == typeof(n = t.getAttribute(i))) {
                    try {
                        n = function(t) {
                            return "true" === t || "false" !== t && ("null" === t ? null : t === +t + "" ? +t : Z.test(t) ? JSON.parse(t) : t)
                        }(n)
                    } catch (t) {}
                    K.set(t, e, n)
                } else n = void 0;
            return n
        }
        T.extend({
            hasData: function(t) {
                return K.hasData(t) || Q.hasData(t)
            },
            data: function(t, e, n) {
                return K.access(t, e, n)
            },
            removeData: function(t, e) {
                K.remove(t, e)
            },
            _data: function(t, e, n) {
                return Q.access(t, e, n)
            },
            _removeData: function(t, e) {
                Q.remove(t, e)
            }
        }), T.fn.extend({
            data: function(t, e) {
                var n, i, r, o = this[0],
                    s = o && o.attributes;
                if (void 0 === t) {
                    if (this.length && (r = K.get(o), 1 === o.nodeType && !Q.get(o, "hasDataAttrs"))) {
                        for (n = s.length; n--;) s[n] && 0 === (i = s[n].name).indexOf("data-") && (i = Y(i.slice(5)), et(o, i, r[i]));
                        Q.set(o, "hasDataAttrs", !0)
                    }
                    return r
                }
                return "object" == typeof t ? this.each((function() {
                    K.set(this, t)
                })) : W(this, (function(e) {
                    var n;
                    if (o && void 0 === e) return void 0 !== (n = K.get(o, t)) || void 0 !== (n = et(o, t)) ? n : void 0;
                    this.each((function() {
                        K.set(this, t, e)
                    }))
                }), null, e, arguments.length > 1, null, !0)
            },
            removeData: function(t) {
                return this.each((function() {
                    K.remove(this, t)
                }))
            }
        }), T.extend({
            queue: function(t, e, n) {
                var i;
                if (t) return e = (e || "fx") + "queue", i = Q.get(t, e), n && (!i || Array.isArray(n) ? i = Q.access(t, e, T.makeArray(n)) : i.push(n)), i || []
            },
            dequeue: function(t, e) {
                e = e || "fx";
                var n = T.queue(t, e),
                    i = n.length,
                    r = n.shift(),
                    o = T._queueHooks(t, e);
                "inprogress" === r && (r = n.shift(), i--), r && ("fx" === e && n.unshift("inprogress"), delete o.stop, r.call(t, (function() {
                    T.dequeue(t, e)
                }), o)), !i && o && o.empty.fire()
            },
            _queueHooks: function(t, e) {
                var n = e + "queueHooks";
                return Q.get(t, n) || Q.access(t, n, {
                    empty: T.Callbacks("once memory").add((function() {
                        Q.remove(t, [e + "queue", n])
                    }))
                })
            }
        }), T.fn.extend({
            queue: function(t, e) {
                var n = 2;
                return "string" != typeof t && (e = t, t = "fx", n--), arguments.length < n ? T.queue(this[0], t) : void 0 === e ? this : this.each((function() {
                    var n = T.queue(this, t, e);
                    T._queueHooks(this, t), "fx" === t && "inprogress" !== n[0] && T.dequeue(this, t)
                }))
            },
            dequeue: function(t) {
                return this.each((function() {
                    T.dequeue(this, t)
                }))
            },
            clearQueue: function(t) {
                return this.queue(t || "fx", [])
            },
            promise: function(t, e) {
                var n, i = 1,
                    r = T.Deferred(),
                    o = this,
                    s = this.length,
                    a = function() {
                        --i || r.resolveWith(o, [o])
                    };
                for ("string" != typeof t && (e = t, t = void 0), t = t || "fx"; s--;)(n = Q.get(o[s], t + "queueHooks")) && n.empty && (i++, n.empty.add(a));
                return a(), r.promise(e)
            }
        });
        var nt = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            it = new RegExp("^(?:([+-])=|)(" + nt + ")([a-z%]*)$", "i"),
            rt = ["Top", "Right", "Bottom", "Left"],
            ot = w.documentElement,
            st = function(t) {
                return T.contains(t.ownerDocument, t)
            },
            at = {
                composed: !0
            };
        ot.getRootNode && (st = function(t) {
            return T.contains(t.ownerDocument, t) || t.getRootNode(at) === t.ownerDocument
        });
        var ut = function(t, e) {
            return "none" === (t = e || t).style.display || "" === t.style.display && st(t) && "none" === T.css(t, "display")
        };

        function lt(t, e, n, i) {
            var r, o, s = 20,
                a = i ? function() {
                    return i.cur()
                } : function() {
                    return T.css(t, e, "")
                },
                u = a(),
                l = n && n[3] || (T.cssNumber[e] ? "" : "px"),
                c = t.nodeType && (T.cssNumber[e] || "px" !== l && +u) && it.exec(T.css(t, e));
            if (c && c[3] !== l) {
                for (u /= 2, l = l || c[3], c = +u || 1; s--;) T.style(t, e, c + l), (1 - o) * (1 - (o = a() / u || .5)) <= 0 && (s = 0), c /= o;
                c *= 2, T.style(t, e, c + l), n = n || []
            }
            return n && (c = +c || +u || 0, r = n[1] ? c + (n[1] + 1) * n[2] : +n[2], i && (i.unit = l, i.start = c, i.end = r)), r
        }
        var ct = {};

        function ht(t) {
            var e, n = t.ownerDocument,
                i = t.nodeName,
                r = ct[i];
            return r || (e = n.body.appendChild(n.createElement(i)), r = T.css(e, "display"), e.parentNode.removeChild(e), "none" === r && (r = "block"), ct[i] = r, r)
        }

        function dt(t, e) {
            for (var n, i, r = [], o = 0, s = t.length; o < s; o++)(i = t[o]).style && (n = i.style.display, e ? ("none" === n && (r[o] = Q.get(i, "display") || null, r[o] || (i.style.display = "")), "" === i.style.display && ut(i) && (r[o] = ht(i))) : "none" !== n && (r[o] = "none", Q.set(i, "display", n)));
            for (o = 0; o < s; o++) null != r[o] && (t[o].style.display = r[o]);
            return t
        }
        T.fn.extend({
            show: function() {
                return dt(this, !0)
            },
            hide: function() {
                return dt(this)
            },
            toggle: function(t) {
                return "boolean" == typeof t ? t ? this.show() : this.hide() : this.each((function() {
                    ut(this) ? T(this).show() : T(this).hide()
                }))
            }
        });
        var ft, pt, gt = /^(?:checkbox|radio)$/i,
            mt = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
            vt = /^$|^module$|\/(?:java|ecma)script/i;
        ft = w.createDocumentFragment().appendChild(w.createElement("div")), (pt = w.createElement("input")).setAttribute("type", "radio"), pt.setAttribute("checked", "checked"), pt.setAttribute("name", "t"), ft.appendChild(pt), m.checkClone = ft.cloneNode(!0).cloneNode(!0).lastChild.checked, ft.innerHTML = "<textarea>x</textarea>", m.noCloneChecked = !!ft.cloneNode(!0).lastChild.defaultValue, ft.innerHTML = "<option></option>", m.option = !!ft.lastChild;
        var yt = {
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };

        function wt(t, e) {
            var n;
            return n = void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e || "*") : void 0 !== t.querySelectorAll ? t.querySelectorAll(e || "*") : [], void 0 === e || e && N(t, e) ? T.merge([t], n) : n
        }

        function bt(t, e) {
            for (var n = 0, i = t.length; n < i; n++) Q.set(t[n], "globalEval", !e || Q.get(e[n], "globalEval"))
        }
        yt.tbody = yt.tfoot = yt.colgroup = yt.caption = yt.thead, yt.th = yt.td, m.option || (yt.optgroup = yt.option = [1, "<select multiple='multiple'>", "</select>"]);
        var xt = /<|&#?\w+;/;

        function kt(t, e, n, i, r) {
            for (var o, s, a, u, l, c, h = e.createDocumentFragment(), d = [], f = 0, p = t.length; f < p; f++)
                if ((o = t[f]) || 0 === o)
                    if ("object" === k(o)) T.merge(d, o.nodeType ? [o] : o);
                    else if (xt.test(o)) {
                for (s = s || h.appendChild(e.createElement("div")), a = (mt.exec(o) || ["", ""])[1].toLowerCase(), u = yt[a] || yt._default, s.innerHTML = u[1] + T.htmlPrefilter(o) + u[2], c = u[0]; c--;) s = s.lastChild;
                T.merge(d, s.childNodes), (s = h.firstChild).textContent = ""
            } else d.push(e.createTextNode(o));
            for (h.textContent = "", f = 0; o = d[f++];)
                if (i && T.inArray(o, i) > -1) r && r.push(o);
                else if (l = st(o), s = wt(h.appendChild(o), "script"), l && bt(s), n)
                for (c = 0; o = s[c++];) vt.test(o.type || "") && n.push(o);
            return h
        }
        var Tt = /^key/,
            Et = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
            St = /^([^.]*)(?:\.(.+)|)/;

        function Ct() {
            return !0
        }

        function $t() {
            return !1
        }

        function It(t, e) {
            return t === function() {
                try {
                    return w.activeElement
                } catch (t) {}
            }() == ("focus" === e)
        }

        function Nt(t, e, n, i, r, o) {
            var s, a;
            if ("object" == typeof e) {
                for (a in "string" != typeof n && (i = i || n, n = void 0), e) Nt(t, a, n, i, e[a], o);
                return t
            }
            if (null == i && null == r ? (r = n, i = n = void 0) : null == r && ("string" == typeof n ? (r = i, i = void 0) : (r = i, i = n, n = void 0)), !1 === r) r = $t;
            else if (!r) return t;
            return 1 === o && (s = r, (r = function(t) {
                return T().off(t), s.apply(this, arguments)
            }).guid = s.guid || (s.guid = T.guid++)), t.each((function() {
                T.event.add(this, e, r, i, n)
            }))
        }

        function At(t, e, n) {
            n ? (Q.set(t, e, !1), T.event.add(t, e, {
                namespace: !1,
                handler: function(t) {
                    var i, r, o = Q.get(this, e);
                    if (1 & t.isTrigger && this[e]) {
                        if (o.length)(T.event.special[e] || {}).delegateType && t.stopPropagation();
                        else if (o = a.call(arguments), Q.set(this, e, o), i = n(this, e), this[e](), o !== (r = Q.get(this, e)) || i ? Q.set(this, e, !1) : r = {}, o !== r) return t.stopImmediatePropagation(), t.preventDefault(), r.value
                    } else o.length && (Q.set(this, e, {
                        value: T.event.trigger(T.extend(o[0], T.Event.prototype), o.slice(1), this)
                    }), t.stopImmediatePropagation())
                }
            })) : void 0 === Q.get(t, e) && T.event.add(t, e, Ct)
        }
        T.event = {
            global: {},
            add: function(t, e, n, i, r) {
                var o, s, a, u, l, c, h, d, f, p, g, m = Q.get(t);
                if (J(t))
                    for (n.handler && (n = (o = n).handler, r = o.selector), r && T.find.matchesSelector(ot, r), n.guid || (n.guid = T.guid++), (u = m.events) || (u = m.events = Object.create(null)), (s = m.handle) || (s = m.handle = function(e) {
                            return void 0 !== T && T.event.triggered !== e.type ? T.event.dispatch.apply(t, arguments) : void 0
                        }), l = (e = (e || "").match(L) || [""]).length; l--;) f = g = (a = St.exec(e[l]) || [])[1], p = (a[2] || "").split(".").sort(), f && (h = T.event.special[f] || {}, f = (r ? h.delegateType : h.bindType) || f, h = T.event.special[f] || {}, c = T.extend({
                        type: f,
                        origType: g,
                        data: i,
                        handler: n,
                        guid: n.guid,
                        selector: r,
                        needsContext: r && T.expr.match.needsContext.test(r),
                        namespace: p.join(".")
                    }, o), (d = u[f]) || ((d = u[f] = []).delegateCount = 0, h.setup && !1 !== h.setup.call(t, i, p, s) || t.addEventListener && t.addEventListener(f, s)), h.add && (h.add.call(t, c), c.handler.guid || (c.handler.guid = n.guid)), r ? d.splice(d.delegateCount++, 0, c) : d.push(c), T.event.global[f] = !0)
            },
            remove: function(t, e, n, i, r) {
                var o, s, a, u, l, c, h, d, f, p, g, m = Q.hasData(t) && Q.get(t);
                if (m && (u = m.events)) {
                    for (l = (e = (e || "").match(L) || [""]).length; l--;)
                        if (f = g = (a = St.exec(e[l]) || [])[1], p = (a[2] || "").split(".").sort(), f) {
                            for (h = T.event.special[f] || {}, d = u[f = (i ? h.delegateType : h.bindType) || f] || [], a = a[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), s = o = d.length; o--;) c = d[o], !r && g !== c.origType || n && n.guid !== c.guid || a && !a.test(c.namespace) || i && i !== c.selector && ("**" !== i || !c.selector) || (d.splice(o, 1), c.selector && d.delegateCount--, h.remove && h.remove.call(t, c));
                            s && !d.length && (h.teardown && !1 !== h.teardown.call(t, p, m.handle) || T.removeEvent(t, f, m.handle), delete u[f])
                        } else
                            for (f in u) T.event.remove(t, f + e[l], n, i, !0);
                    T.isEmptyObject(u) && Q.remove(t, "handle events")
                }
            },
            dispatch: function(t) {
                var e, n, i, r, o, s, a = new Array(arguments.length),
                    u = T.event.fix(t),
                    l = (Q.get(this, "events") || Object.create(null))[u.type] || [],
                    c = T.event.special[u.type] || {};
                for (a[0] = u, e = 1; e < arguments.length; e++) a[e] = arguments[e];
                if (u.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, u)) {
                    for (s = T.event.handlers.call(this, u, l), e = 0;
                        (r = s[e++]) && !u.isPropagationStopped();)
                        for (u.currentTarget = r.elem, n = 0;
                            (o = r.handlers[n++]) && !u.isImmediatePropagationStopped();) u.rnamespace && !1 !== o.namespace && !u.rnamespace.test(o.namespace) || (u.handleObj = o, u.data = o.data, void 0 !== (i = ((T.event.special[o.origType] || {}).handle || o.handler).apply(r.elem, a)) && !1 === (u.result = i) && (u.preventDefault(), u.stopPropagation()));
                    return c.postDispatch && c.postDispatch.call(this, u), u.result
                }
            },
            handlers: function(t, e) {
                var n, i, r, o, s, a = [],
                    u = e.delegateCount,
                    l = t.target;
                if (u && l.nodeType && !("click" === t.type && t.button >= 1))
                    for (; l !== this; l = l.parentNode || this)
                        if (1 === l.nodeType && ("click" !== t.type || !0 !== l.disabled)) {
                            for (o = [], s = {}, n = 0; n < u; n++) void 0 === s[r = (i = e[n]).selector + " "] && (s[r] = i.needsContext ? T(r, this).index(l) > -1 : T.find(r, this, null, [l]).length), s[r] && o.push(i);
                            o.length && a.push({
                                elem: l,
                                handlers: o
                            })
                        }
                return l = this, u < e.length && a.push({
                    elem: l,
                    handlers: e.slice(u)
                }), a
            },
            addProp: function(t, e) {
                Object.defineProperty(T.Event.prototype, t, {
                    enumerable: !0,
                    configurable: !0,
                    get: v(e) ? function() {
                        if (this.originalEvent) return e(this.originalEvent)
                    } : function() {
                        if (this.originalEvent) return this.originalEvent[t]
                    },
                    set: function(e) {
                        Object.defineProperty(this, t, {
                            enumerable: !0,
                            configurable: !0,
                            writable: !0,
                            value: e
                        })
                    }
                })
            },
            fix: function(t) {
                return t[T.expando] ? t : new T.Event(t)
            },
            special: {
                load: {
                    noBubble: !0
                },
                click: {
                    setup: function(t) {
                        var e = this || t;
                        return gt.test(e.type) && e.click && N(e, "input") && At(e, "click", Ct), !1
                    },
                    trigger: function(t) {
                        var e = this || t;
                        return gt.test(e.type) && e.click && N(e, "input") && At(e, "click"), !0
                    },
                    _default: function(t) {
                        var e = t.target;
                        return gt.test(e.type) && e.click && N(e, "input") && Q.get(e, "click") || N(e, "a")
                    }
                },
                beforeunload: {
                    postDispatch: function(t) {
                        void 0 !== t.result && t.originalEvent && (t.originalEvent.returnValue = t.result)
                    }
                }
            }
        }, T.removeEvent = function(t, e, n) {
            t.removeEventListener && t.removeEventListener(e, n)
        }, T.Event = function(t, e) {
            if (!(this instanceof T.Event)) return new T.Event(t, e);
            t && t.type ? (this.originalEvent = t, this.type = t.type, this.isDefaultPrevented = t.defaultPrevented || void 0 === t.defaultPrevented && !1 === t.returnValue ? Ct : $t, this.target = t.target && 3 === t.target.nodeType ? t.target.parentNode : t.target, this.currentTarget = t.currentTarget, this.relatedTarget = t.relatedTarget) : this.type = t, e && T.extend(this, e), this.timeStamp = t && t.timeStamp || Date.now(), this[T.expando] = !0
        }, T.Event.prototype = {
            constructor: T.Event,
            isDefaultPrevented: $t,
            isPropagationStopped: $t,
            isImmediatePropagationStopped: $t,
            isSimulated: !1,
            preventDefault: function() {
                var t = this.originalEvent;
                this.isDefaultPrevented = Ct, t && !this.isSimulated && t.preventDefault()
            },
            stopPropagation: function() {
                var t = this.originalEvent;
                this.isPropagationStopped = Ct, t && !this.isSimulated && t.stopPropagation()
            },
            stopImmediatePropagation: function() {
                var t = this.originalEvent;
                this.isImmediatePropagationStopped = Ct, t && !this.isSimulated && t.stopImmediatePropagation(), this.stopPropagation()
            }
        }, T.each({
            altKey: !0,
            bubbles: !0,
            cancelable: !0,
            changedTouches: !0,
            ctrlKey: !0,
            detail: !0,
            eventPhase: !0,
            metaKey: !0,
            pageX: !0,
            pageY: !0,
            shiftKey: !0,
            view: !0,
            char: !0,
            code: !0,
            charCode: !0,
            key: !0,
            keyCode: !0,
            button: !0,
            buttons: !0,
            clientX: !0,
            clientY: !0,
            offsetX: !0,
            offsetY: !0,
            pointerId: !0,
            pointerType: !0,
            screenX: !0,
            screenY: !0,
            targetTouches: !0,
            toElement: !0,
            touches: !0,
            which: function(t) {
                var e = t.button;
                return null == t.which && Tt.test(t.type) ? null != t.charCode ? t.charCode : t.keyCode : !t.which && void 0 !== e && Et.test(t.type) ? 1 & e ? 1 : 2 & e ? 3 : 4 & e ? 2 : 0 : t.which
            }
        }, T.event.addProp), T.each({
            focus: "focusin",
            blur: "focusout"
        }, (function(t, e) {
            T.event.special[t] = {
                setup: function() {
                    return At(this, t, It), !1
                },
                trigger: function() {
                    return At(this, t), !0
                },
                delegateType: e
            }
        })), T.each({
            mouseenter: "mouseover",
            mouseleave: "mouseout",
            pointerenter: "pointerover",
            pointerleave: "pointerout"
        }, (function(t, e) {
            T.event.special[t] = {
                delegateType: e,
                bindType: e,
                handle: function(t) {
                    var n, i = this,
                        r = t.relatedTarget,
                        o = t.handleObj;
                    return r && (r === i || T.contains(i, r)) || (t.type = o.origType, n = o.handler.apply(this, arguments), t.type = e), n
                }
            }
        })), T.fn.extend({
            on: function(t, e, n, i) {
                return Nt(this, t, e, n, i)
            },
            one: function(t, e, n, i) {
                return Nt(this, t, e, n, i, 1)
            },
            off: function(t, e, n) {
                var i, r;
                if (t && t.preventDefault && t.handleObj) return i = t.handleObj, T(t.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this;
                if ("object" == typeof t) {
                    for (r in t) this.off(r, e, t[r]);
                    return this
                }
                return !1 !== e && "function" != typeof e || (n = e, e = void 0), !1 === n && (n = $t), this.each((function() {
                    T.event.remove(this, t, n, e)
                }))
            }
        });
        var Dt = /<script|<style|<link/i,
            Mt = /checked\s*(?:[^=]|=\s*.checked.)/i,
            Pt = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

        function Ot(t, e) {
            return N(t, "table") && N(11 !== e.nodeType ? e : e.firstChild, "tr") && T(t).children("tbody")[0] || t
        }

        function jt(t) {
            return t.type = (null !== t.getAttribute("type")) + "/" + t.type, t
        }

        function _t(t) {
            return "true/" === (t.type || "").slice(0, 5) ? t.type = t.type.slice(5) : t.removeAttribute("type"), t
        }

        function Lt(t, e) {
            var n, i, r, o, s, a;
            if (1 === e.nodeType) {
                if (Q.hasData(t) && (a = Q.get(t).events))
                    for (r in Q.remove(e, "handle events"), a)
                        for (n = 0, i = a[r].length; n < i; n++) T.event.add(e, r, a[r][n]);
                K.hasData(t) && (o = K.access(t), s = T.extend({}, o), K.set(e, s))
            }
        }

        function Ht(t, e) {
            var n = e.nodeName.toLowerCase();
            "input" === n && gt.test(t.type) ? e.checked = t.checked : "input" !== n && "textarea" !== n || (e.defaultValue = t.defaultValue)
        }

        function Bt(t, e, n, i) {
            e = u(e);
            var r, o, s, a, l, c, h = 0,
                d = t.length,
                f = d - 1,
                p = e[0],
                g = v(p);
            if (g || d > 1 && "string" == typeof p && !m.checkClone && Mt.test(p)) return t.each((function(r) {
                var o = t.eq(r);
                g && (e[0] = p.call(this, r, o.html())), Bt(o, e, n, i)
            }));
            if (d && (o = (r = kt(e, t[0].ownerDocument, !1, t, i)).firstChild, 1 === r.childNodes.length && (r = o), o || i)) {
                for (a = (s = T.map(wt(r, "script"), jt)).length; h < d; h++) l = r, h !== f && (l = T.clone(l, !0, !0), a && T.merge(s, wt(l, "script"))), n.call(t[h], l, h);
                if (a)
                    for (c = s[s.length - 1].ownerDocument, T.map(s, _t), h = 0; h < a; h++) l = s[h], vt.test(l.type || "") && !Q.access(l, "globalEval") && T.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? T._evalUrl && !l.noModule && T._evalUrl(l.src, {
                        nonce: l.nonce || l.getAttribute("nonce")
                    }, c) : x(l.textContent.replace(Pt, ""), l, c))
            }
            return t
        }

        function Rt(t, e, n) {
            for (var i, r = e ? T.filter(e, t) : t, o = 0; null != (i = r[o]); o++) n || 1 !== i.nodeType || T.cleanData(wt(i)), i.parentNode && (n && st(i) && bt(wt(i, "script")), i.parentNode.removeChild(i));
            return t
        }
        T.extend({
            htmlPrefilter: function(t) {
                return t
            },
            clone: function(t, e, n) {
                var i, r, o, s, a = t.cloneNode(!0),
                    u = st(t);
                if (!(m.noCloneChecked || 1 !== t.nodeType && 11 !== t.nodeType || T.isXMLDoc(t)))
                    for (s = wt(a), i = 0, r = (o = wt(t)).length; i < r; i++) Ht(o[i], s[i]);
                if (e)
                    if (n)
                        for (o = o || wt(t), s = s || wt(a), i = 0, r = o.length; i < r; i++) Lt(o[i], s[i]);
                    else Lt(t, a);
                return (s = wt(a, "script")).length > 0 && bt(s, !u && wt(t, "script")), a
            },
            cleanData: function(t) {
                for (var e, n, i, r = T.event.special, o = 0; void 0 !== (n = t[o]); o++)
                    if (J(n)) {
                        if (e = n[Q.expando]) {
                            if (e.events)
                                for (i in e.events) r[i] ? T.event.remove(n, i) : T.removeEvent(n, i, e.handle);
                            n[Q.expando] = void 0
                        }
                        n[K.expando] && (n[K.expando] = void 0)
                    }
            }
        }), T.fn.extend({
            detach: function(t) {
                return Rt(this, t, !0)
            },
            remove: function(t) {
                return Rt(this, t)
            },
            text: function(t) {
                return W(this, (function(t) {
                    return void 0 === t ? T.text(this) : this.empty().each((function() {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = t)
                    }))
                }), null, t, arguments.length)
            },
            append: function() {
                return Bt(this, arguments, (function(t) {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Ot(this, t).appendChild(t)
                }))
            },
            prepend: function() {
                return Bt(this, arguments, (function(t) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var e = Ot(this, t);
                        e.insertBefore(t, e.firstChild)
                    }
                }))
            },
            before: function() {
                return Bt(this, arguments, (function(t) {
                    this.parentNode && this.parentNode.insertBefore(t, this)
                }))
            },
            after: function() {
                return Bt(this, arguments, (function(t) {
                    this.parentNode && this.parentNode.insertBefore(t, this.nextSibling)
                }))
            },
            empty: function() {
                for (var t, e = 0; null != (t = this[e]); e++) 1 === t.nodeType && (T.cleanData(wt(t, !1)), t.textContent = "");
                return this
            },
            clone: function(t, e) {
                return t = null != t && t, e = null == e ? t : e, this.map((function() {
                    return T.clone(this, t, e)
                }))
            },
            html: function(t) {
                return W(this, (function(t) {
                    var e = this[0] || {},
                        n = 0,
                        i = this.length;
                    if (void 0 === t && 1 === e.nodeType) return e.innerHTML;
                    if ("string" == typeof t && !Dt.test(t) && !yt[(mt.exec(t) || ["", ""])[1].toLowerCase()]) {
                        t = T.htmlPrefilter(t);
                        try {
                            for (; n < i; n++) 1 === (e = this[n] || {}).nodeType && (T.cleanData(wt(e, !1)), e.innerHTML = t);
                            e = 0
                        } catch (t) {}
                    }
                    e && this.empty().append(t)
                }), null, t, arguments.length)
            },
            replaceWith: function() {
                var t = [];
                return Bt(this, arguments, (function(e) {
                    var n = this.parentNode;
                    T.inArray(this, t) < 0 && (T.cleanData(wt(this)), n && n.replaceChild(e, this))
                }), t)
            }
        }), T.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        }, (function(t, e) {
            T.fn[t] = function(t) {
                for (var n, i = [], r = T(t), o = r.length - 1, s = 0; s <= o; s++) n = s === o ? this : this.clone(!0), T(r[s])[e](n), l.apply(i, n.get());
                return this.pushStack(i)
            }
        }));
        var Ft = new RegExp("^(" + nt + ")(?!px)[a-z%]+$", "i"),
            zt = function(t) {
                var e = t.ownerDocument.defaultView;
                return e && e.opener || (e = n), e.getComputedStyle(t)
            },
            qt = function(t, e, n) {
                var i, r, o = {};
                for (r in e) o[r] = t.style[r], t.style[r] = e[r];
                for (r in i = n.call(t), e) t.style[r] = o[r];
                return i
            },
            Wt = new RegExp(rt.join("|"), "i");

        function Vt(t, e, n) {
            var i, r, o, s, a = t.style;
            return (n = n || zt(t)) && ("" !== (s = n.getPropertyValue(e) || n[e]) || st(t) || (s = T.style(t, e)), !m.pixelBoxStyles() && Ft.test(s) && Wt.test(e) && (i = a.width, r = a.minWidth, o = a.maxWidth, a.minWidth = a.maxWidth = a.width = s, s = n.width, a.width = i, a.minWidth = r, a.maxWidth = o)), void 0 !== s ? s + "" : s
        }

        function Ut(t, e) {
            return {
                get: function() {
                    if (!t()) return (this.get = e).apply(this, arguments);
                    delete this.get
                }
            }
        }! function() {
            function t() {
                if (c) {
                    l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", ot.appendChild(l).appendChild(c);
                    var t = n.getComputedStyle(c);
                    i = "1%" !== t.top, u = 12 === e(t.marginLeft), c.style.right = "60%", s = 36 === e(t.right), r = 36 === e(t.width), c.style.position = "absolute", o = 12 === e(c.offsetWidth / 3), ot.removeChild(l), c = null
                }
            }

            function e(t) {
                return Math.round(parseFloat(t))
            }
            var i, r, o, s, a, u, l = w.createElement("div"),
                c = w.createElement("div");
            c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", m.clearCloneStyle = "content-box" === c.style.backgroundClip, T.extend(m, {
                boxSizingReliable: function() {
                    return t(), r
                },
                pixelBoxStyles: function() {
                    return t(), s
                },
                pixelPosition: function() {
                    return t(), i
                },
                reliableMarginLeft: function() {
                    return t(), u
                },
                scrollboxSize: function() {
                    return t(), o
                },
                reliableTrDimensions: function() {
                    var t, e, i, r;
                    return null == a && (t = w.createElement("table"), e = w.createElement("tr"), i = w.createElement("div"), t.style.cssText = "position:absolute;left:-11111px", e.style.height = "1px", i.style.height = "9px", ot.appendChild(t).appendChild(e).appendChild(i), r = n.getComputedStyle(e), a = parseInt(r.height) > 3, ot.removeChild(t)), a
                }
            }))
        }();
        var Xt = ["Webkit", "Moz", "ms"],
            Yt = w.createElement("div").style,
            Jt = {};

        function Gt(t) {
            var e = T.cssProps[t] || Jt[t];
            return e || (t in Yt ? t : Jt[t] = function(t) {
                for (var e = t[0].toUpperCase() + t.slice(1), n = Xt.length; n--;)
                    if ((t = Xt[n] + e) in Yt) return t
            }(t) || t)
        }
        var Qt = /^(none|table(?!-c[ea]).+)/,
            Kt = /^--/,
            Zt = {
                position: "absolute",
                visibility: "hidden",
                display: "block"
            },
            te = {
                letterSpacing: "0",
                fontWeight: "400"
            };

        function ee(t, e, n) {
            var i = it.exec(e);
            return i ? Math.max(0, i[2] - (n || 0)) + (i[3] || "px") : e
        }

        function ne(t, e, n, i, r, o) {
            var s = "width" === e ? 1 : 0,
                a = 0,
                u = 0;
            if (n === (i ? "border" : "content")) return 0;
            for (; s < 4; s += 2) "margin" === n && (u += T.css(t, n + rt[s], !0, r)), i ? ("content" === n && (u -= T.css(t, "padding" + rt[s], !0, r)), "margin" !== n && (u -= T.css(t, "border" + rt[s] + "Width", !0, r))) : (u += T.css(t, "padding" + rt[s], !0, r), "padding" !== n ? u += T.css(t, "border" + rt[s] + "Width", !0, r) : a += T.css(t, "border" + rt[s] + "Width", !0, r));
            return !i && o >= 0 && (u += Math.max(0, Math.ceil(t["offset" + e[0].toUpperCase() + e.slice(1)] - o - u - a - .5)) || 0), u
        }

        function ie(t, e, n) {
            var i = zt(t),
                r = (!m.boxSizingReliable() || n) && "border-box" === T.css(t, "boxSizing", !1, i),
                o = r,
                s = Vt(t, e, i),
                a = "offset" + e[0].toUpperCase() + e.slice(1);
            if (Ft.test(s)) {
                if (!n) return s;
                s = "auto"
            }
            return (!m.boxSizingReliable() && r || !m.reliableTrDimensions() && N(t, "tr") || "auto" === s || !parseFloat(s) && "inline" === T.css(t, "display", !1, i)) && t.getClientRects().length && (r = "border-box" === T.css(t, "boxSizing", !1, i), (o = a in t) && (s = t[a])), (s = parseFloat(s) || 0) + ne(t, e, n || (r ? "border" : "content"), o, i, s) + "px"
        }

        function re(t, e, n, i, r) {
            return new re.prototype.init(t, e, n, i, r)
        }
        T.extend({
            cssHooks: {
                opacity: {
                    get: function(t, e) {
                        if (e) {
                            var n = Vt(t, "opacity");
                            return "" === n ? "1" : n
                        }
                    }
                }
            },
            cssNumber: {
                animationIterationCount: !0,
                columnCount: !0,
                fillOpacity: !0,
                flexGrow: !0,
                flexShrink: !0,
                fontWeight: !0,
                gridArea: !0,
                gridColumn: !0,
                gridColumnEnd: !0,
                gridColumnStart: !0,
                gridRow: !0,
                gridRowEnd: !0,
                gridRowStart: !0,
                lineHeight: !0,
                opacity: !0,
                order: !0,
                orphans: !0,
                widows: !0,
                zIndex: !0,
                zoom: !0
            },
            cssProps: {},
            style: function(t, e, n, i) {
                if (t && 3 !== t.nodeType && 8 !== t.nodeType && t.style) {
                    var r, o, s, a = Y(e),
                        u = Kt.test(e),
                        l = t.style;
                    if (u || (e = Gt(a)), s = T.cssHooks[e] || T.cssHooks[a], void 0 === n) return s && "get" in s && void 0 !== (r = s.get(t, !1, i)) ? r : l[e];
                    "string" === (o = typeof n) && (r = it.exec(n)) && r[1] && (n = lt(t, e, r), o = "number"), null != n && n == n && ("number" !== o || u || (n += r && r[3] || (T.cssNumber[a] ? "" : "px")), m.clearCloneStyle || "" !== n || 0 !== e.indexOf("background") || (l[e] = "inherit"), s && "set" in s && void 0 === (n = s.set(t, n, i)) || (u ? l.setProperty(e, n) : l[e] = n))
                }
            },
            css: function(t, e, n, i) {
                var r, o, s, a = Y(e);
                return Kt.test(e) || (e = Gt(a)), (s = T.cssHooks[e] || T.cssHooks[a]) && "get" in s && (r = s.get(t, !0, n)), void 0 === r && (r = Vt(t, e, i)), "normal" === r && e in te && (r = te[e]), "" === n || n ? (o = parseFloat(r), !0 === n || isFinite(o) ? o || 0 : r) : r
            }
        }), T.each(["height", "width"], (function(t, e) {
            T.cssHooks[e] = {
                get: function(t, n, i) {
                    if (n) return !Qt.test(T.css(t, "display")) || t.getClientRects().length && t.getBoundingClientRect().width ? ie(t, e, i) : qt(t, Zt, (function() {
                        return ie(t, e, i)
                    }))
                },
                set: function(t, n, i) {
                    var r, o = zt(t),
                        s = !m.scrollboxSize() && "absolute" === o.position,
                        a = (s || i) && "border-box" === T.css(t, "boxSizing", !1, o),
                        u = i ? ne(t, e, i, a, o) : 0;
                    return a && s && (u -= Math.ceil(t["offset" + e[0].toUpperCase() + e.slice(1)] - parseFloat(o[e]) - ne(t, e, "border", !1, o) - .5)), u && (r = it.exec(n)) && "px" !== (r[3] || "px") && (t.style[e] = n, n = T.css(t, e)), ee(0, n, u)
                }
            }
        })), T.cssHooks.marginLeft = Ut(m.reliableMarginLeft, (function(t, e) {
            if (e) return (parseFloat(Vt(t, "marginLeft")) || t.getBoundingClientRect().left - qt(t, {
                marginLeft: 0
            }, (function() {
                return t.getBoundingClientRect().left
            }))) + "px"
        })), T.each({
            margin: "",
            padding: "",
            border: "Width"
        }, (function(t, e) {
            T.cssHooks[t + e] = {
                expand: function(n) {
                    for (var i = 0, r = {}, o = "string" == typeof n ? n.split(" ") : [n]; i < 4; i++) r[t + rt[i] + e] = o[i] || o[i - 2] || o[0];
                    return r
                }
            }, "margin" !== t && (T.cssHooks[t + e].set = ee)
        })), T.fn.extend({
            css: function(t, e) {
                return W(this, (function(t, e, n) {
                    var i, r, o = {},
                        s = 0;
                    if (Array.isArray(e)) {
                        for (i = zt(t), r = e.length; s < r; s++) o[e[s]] = T.css(t, e[s], !1, i);
                        return o
                    }
                    return void 0 !== n ? T.style(t, e, n) : T.css(t, e)
                }), t, e, arguments.length > 1)
            }
        }), T.Tween = re, re.prototype = {
            constructor: re,
            init: function(t, e, n, i, r, o) {
                this.elem = t, this.prop = n, this.easing = r || T.easing._default, this.options = e, this.start = this.now = this.cur(), this.end = i, this.unit = o || (T.cssNumber[n] ? "" : "px")
            },
            cur: function() {
                var t = re.propHooks[this.prop];
                return t && t.get ? t.get(this) : re.propHooks._default.get(this)
            },
            run: function(t) {
                var e, n = re.propHooks[this.prop];
                return this.options.duration ? this.pos = e = T.easing[this.easing](t, this.options.duration * t, 0, 1, this.options.duration) : this.pos = e = t, this.now = (this.end - this.start) * e + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : re.propHooks._default.set(this), this
            }
        }, re.prototype.init.prototype = re.prototype, re.propHooks = {
            _default: {
                get: function(t) {
                    var e;
                    return 1 !== t.elem.nodeType || null != t.elem[t.prop] && null == t.elem.style[t.prop] ? t.elem[t.prop] : (e = T.css(t.elem, t.prop, "")) && "auto" !== e ? e : 0
                },
                set: function(t) {
                    T.fx.step[t.prop] ? T.fx.step[t.prop](t) : 1 !== t.elem.nodeType || !T.cssHooks[t.prop] && null == t.elem.style[Gt(t.prop)] ? t.elem[t.prop] = t.now : T.style(t.elem, t.prop, t.now + t.unit)
                }
            }
        }, re.propHooks.scrollTop = re.propHooks.scrollLeft = {
            set: function(t) {
                t.elem.nodeType && t.elem.parentNode && (t.elem[t.prop] = t.now)
            }
        }, T.easing = {
            linear: function(t) {
                return t
            },
            swing: function(t) {
                return .5 - Math.cos(t * Math.PI) / 2
            },
            _default: "swing"
        }, T.fx = re.prototype.init, T.fx.step = {};
        var oe, se, ae = /^(?:toggle|show|hide)$/,
            ue = /queueHooks$/;

        function le() {
            se && (!1 === w.hidden && n.requestAnimationFrame ? n.requestAnimationFrame(le) : n.setTimeout(le, T.fx.interval), T.fx.tick())
        }

        function ce() {
            return n.setTimeout((function() {
                oe = void 0
            })), oe = Date.now()
        }

        function he(t, e) {
            var n, i = 0,
                r = {
                    height: t
                };
            for (e = e ? 1 : 0; i < 4; i += 2 - e) r["margin" + (n = rt[i])] = r["padding" + n] = t;
            return e && (r.opacity = r.width = t), r
        }

        function de(t, e, n) {
            for (var i, r = (fe.tweeners[e] || []).concat(fe.tweeners["*"]), o = 0, s = r.length; o < s; o++)
                if (i = r[o].call(n, e, t)) return i
        }

        function fe(t, e, n) {
            var i, r, o = 0,
                s = fe.prefilters.length,
                a = T.Deferred().always((function() {
                    delete u.elem
                })),
                u = function() {
                    if (r) return !1;
                    for (var e = oe || ce(), n = Math.max(0, l.startTime + l.duration - e), i = 1 - (n / l.duration || 0), o = 0, s = l.tweens.length; o < s; o++) l.tweens[o].run(i);
                    return a.notifyWith(t, [l, i, n]), i < 1 && s ? n : (s || a.notifyWith(t, [l, 1, 0]), a.resolveWith(t, [l]), !1)
                },
                l = a.promise({
                    elem: t,
                    props: T.extend({}, e),
                    opts: T.extend(!0, {
                        specialEasing: {},
                        easing: T.easing._default
                    }, n),
                    originalProperties: e,
                    originalOptions: n,
                    startTime: oe || ce(),
                    duration: n.duration,
                    tweens: [],
                    createTween: function(e, n) {
                        var i = T.Tween(t, l.opts, e, n, l.opts.specialEasing[e] || l.opts.easing);
                        return l.tweens.push(i), i
                    },
                    stop: function(e) {
                        var n = 0,
                            i = e ? l.tweens.length : 0;
                        if (r) return this;
                        for (r = !0; n < i; n++) l.tweens[n].run(1);
                        return e ? (a.notifyWith(t, [l, 1, 0]), a.resolveWith(t, [l, e])) : a.rejectWith(t, [l, e]), this
                    }
                }),
                c = l.props;
            for (! function(t, e) {
                    var n, i, r, o, s;
                    for (n in t)
                        if (r = e[i = Y(n)], o = t[n], Array.isArray(o) && (r = o[1], o = t[n] = o[0]), n !== i && (t[i] = o, delete t[n]), (s = T.cssHooks[i]) && "expand" in s)
                            for (n in o = s.expand(o), delete t[i], o) n in t || (t[n] = o[n], e[n] = r);
                        else e[i] = r
                }(c, l.opts.specialEasing); o < s; o++)
                if (i = fe.prefilters[o].call(l, t, c, l.opts)) return v(i.stop) && (T._queueHooks(l.elem, l.opts.queue).stop = i.stop.bind(i)), i;
            return T.map(c, de, l), v(l.opts.start) && l.opts.start.call(t, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), T.fx.timer(T.extend(u, {
                elem: t,
                anim: l,
                queue: l.opts.queue
            })), l
        }
        T.Animation = T.extend(fe, {
                tweeners: {
                    "*": [function(t, e) {
                        var n = this.createTween(t, e);
                        return lt(n.elem, t, it.exec(e), n), n
                    }]
                },
                tweener: function(t, e) {
                    v(t) ? (e = t, t = ["*"]) : t = t.match(L);
                    for (var n, i = 0, r = t.length; i < r; i++) n = t[i], fe.tweeners[n] = fe.tweeners[n] || [], fe.tweeners[n].unshift(e)
                },
                prefilters: [function(t, e, n) {
                    var i, r, o, s, a, u, l, c, h = "width" in e || "height" in e,
                        d = this,
                        f = {},
                        p = t.style,
                        g = t.nodeType && ut(t),
                        m = Q.get(t, "fxshow");
                    for (i in n.queue || (null == (s = T._queueHooks(t, "fx")).unqueued && (s.unqueued = 0, a = s.empty.fire, s.empty.fire = function() {
                            s.unqueued || a()
                        }), s.unqueued++, d.always((function() {
                            d.always((function() {
                                s.unqueued--, T.queue(t, "fx").length || s.empty.fire()
                            }))
                        }))), e)
                        if (r = e[i], ae.test(r)) {
                            if (delete e[i], o = o || "toggle" === r, r === (g ? "hide" : "show")) {
                                if ("show" !== r || !m || void 0 === m[i]) continue;
                                g = !0
                            }
                            f[i] = m && m[i] || T.style(t, i)
                        }
                    if ((u = !T.isEmptyObject(e)) || !T.isEmptyObject(f))
                        for (i in h && 1 === t.nodeType && (n.overflow = [p.overflow, p.overflowX, p.overflowY], null == (l = m && m.display) && (l = Q.get(t, "display")), "none" === (c = T.css(t, "display")) && (l ? c = l : (dt([t], !0), l = t.style.display || l, c = T.css(t, "display"), dt([t]))), ("inline" === c || "inline-block" === c && null != l) && "none" === T.css(t, "float") && (u || (d.done((function() {
                                p.display = l
                            })), null == l && (c = p.display, l = "none" === c ? "" : c)), p.display = "inline-block")), n.overflow && (p.overflow = "hidden", d.always((function() {
                                p.overflow = n.overflow[0], p.overflowX = n.overflow[1], p.overflowY = n.overflow[2]
                            }))), u = !1, f) u || (m ? "hidden" in m && (g = m.hidden) : m = Q.access(t, "fxshow", {
                            display: l
                        }), o && (m.hidden = !g), g && dt([t], !0), d.done((function() {
                            for (i in g || dt([t]), Q.remove(t, "fxshow"), f) T.style(t, i, f[i])
                        }))), u = de(g ? m[i] : 0, i, d), i in m || (m[i] = u.start, g && (u.end = u.start, u.start = 0))
                }],
                prefilter: function(t, e) {
                    e ? fe.prefilters.unshift(t) : fe.prefilters.push(t)
                }
            }), T.speed = function(t, e, n) {
                var i = t && "object" == typeof t ? T.extend({}, t) : {
                    complete: n || !n && e || v(t) && t,
                    duration: t,
                    easing: n && e || e && !v(e) && e
                };
                return T.fx.off ? i.duration = 0 : "number" != typeof i.duration && (i.duration in T.fx.speeds ? i.duration = T.fx.speeds[i.duration] : i.duration = T.fx.speeds._default), null != i.queue && !0 !== i.queue || (i.queue = "fx"), i.old = i.complete, i.complete = function() {
                    v(i.old) && i.old.call(this), i.queue && T.dequeue(this, i.queue)
                }, i
            }, T.fn.extend({
                fadeTo: function(t, e, n, i) {
                    return this.filter(ut).css("opacity", 0).show().end().animate({
                        opacity: e
                    }, t, n, i)
                },
                animate: function(t, e, n, i) {
                    var r = T.isEmptyObject(t),
                        o = T.speed(e, n, i),
                        s = function() {
                            var e = fe(this, T.extend({}, t), o);
                            (r || Q.get(this, "finish")) && e.stop(!0)
                        };
                    return s.finish = s, r || !1 === o.queue ? this.each(s) : this.queue(o.queue, s)
                },
                stop: function(t, e, n) {
                    var i = function(t) {
                        var e = t.stop;
                        delete t.stop, e(n)
                    };
                    return "string" != typeof t && (n = e, e = t, t = void 0), e && this.queue(t || "fx", []), this.each((function() {
                        var e = !0,
                            r = null != t && t + "queueHooks",
                            o = T.timers,
                            s = Q.get(this);
                        if (r) s[r] && s[r].stop && i(s[r]);
                        else
                            for (r in s) s[r] && s[r].stop && ue.test(r) && i(s[r]);
                        for (r = o.length; r--;) o[r].elem !== this || null != t && o[r].queue !== t || (o[r].anim.stop(n), e = !1, o.splice(r, 1));
                        !e && n || T.dequeue(this, t)
                    }))
                },
                finish: function(t) {
                    return !1 !== t && (t = t || "fx"), this.each((function() {
                        var e, n = Q.get(this),
                            i = n[t + "queue"],
                            r = n[t + "queueHooks"],
                            o = T.timers,
                            s = i ? i.length : 0;
                        for (n.finish = !0, T.queue(this, t, []), r && r.stop && r.stop.call(this, !0), e = o.length; e--;) o[e].elem === this && o[e].queue === t && (o[e].anim.stop(!0), o.splice(e, 1));
                        for (e = 0; e < s; e++) i[e] && i[e].finish && i[e].finish.call(this);
                        delete n.finish
                    }))
                }
            }), T.each(["toggle", "show", "hide"], (function(t, e) {
                var n = T.fn[e];
                T.fn[e] = function(t, i, r) {
                    return null == t || "boolean" == typeof t ? n.apply(this, arguments) : this.animate(he(e, !0), t, i, r)
                }
            })), T.each({
                slideDown: he("show"),
                slideUp: he("hide"),
                slideToggle: he("toggle"),
                fadeIn: {
                    opacity: "show"
                },
                fadeOut: {
                    opacity: "hide"
                },
                fadeToggle: {
                    opacity: "toggle"
                }
            }, (function(t, e) {
                T.fn[t] = function(t, n, i) {
                    return this.animate(e, t, n, i)
                }
            })), T.timers = [], T.fx.tick = function() {
                var t, e = 0,
                    n = T.timers;
                for (oe = Date.now(); e < n.length; e++)(t = n[e])() || n[e] !== t || n.splice(e--, 1);
                n.length || T.fx.stop(), oe = void 0
            }, T.fx.timer = function(t) {
                T.timers.push(t), T.fx.start()
            }, T.fx.interval = 13, T.fx.start = function() {
                se || (se = !0, le())
            }, T.fx.stop = function() {
                se = null
            }, T.fx.speeds = {
                slow: 600,
                fast: 200,
                _default: 400
            }, T.fn.delay = function(t, e) {
                return t = T.fx && T.fx.speeds[t] || t, e = e || "fx", this.queue(e, (function(e, i) {
                    var r = n.setTimeout(e, t);
                    i.stop = function() {
                        n.clearTimeout(r)
                    }
                }))
            },
            function() {
                var t = w.createElement("input"),
                    e = w.createElement("select").appendChild(w.createElement("option"));
                t.type = "checkbox", m.checkOn = "" !== t.value, m.optSelected = e.selected, (t = w.createElement("input")).value = "t", t.type = "radio", m.radioValue = "t" === t.value
            }();
        var pe, ge = T.expr.attrHandle;
        T.fn.extend({
            attr: function(t, e) {
                return W(this, T.attr, t, e, arguments.length > 1)
            },
            removeAttr: function(t) {
                return this.each((function() {
                    T.removeAttr(this, t)
                }))
            }
        }), T.extend({
            attr: function(t, e, n) {
                var i, r, o = t.nodeType;
                if (3 !== o && 8 !== o && 2 !== o) return void 0 === t.getAttribute ? T.prop(t, e, n) : (1 === o && T.isXMLDoc(t) || (r = T.attrHooks[e.toLowerCase()] || (T.expr.match.bool.test(e) ? pe : void 0)), void 0 !== n ? null === n ? void T.removeAttr(t, e) : r && "set" in r && void 0 !== (i = r.set(t, n, e)) ? i : (t.setAttribute(e, n + ""), n) : r && "get" in r && null !== (i = r.get(t, e)) ? i : null == (i = T.find.attr(t, e)) ? void 0 : i)
            },
            attrHooks: {
                type: {
                    set: function(t, e) {
                        if (!m.radioValue && "radio" === e && N(t, "input")) {
                            var n = t.value;
                            return t.setAttribute("type", e), n && (t.value = n), e
                        }
                    }
                }
            },
            removeAttr: function(t, e) {
                var n, i = 0,
                    r = e && e.match(L);
                if (r && 1 === t.nodeType)
                    for (; n = r[i++];) t.removeAttribute(n)
            }
        }), pe = {
            set: function(t, e, n) {
                return !1 === e ? T.removeAttr(t, n) : t.setAttribute(n, n), n
            }
        }, T.each(T.expr.match.bool.source.match(/\w+/g), (function(t, e) {
            var n = ge[e] || T.find.attr;
            ge[e] = function(t, e, i) {
                var r, o, s = e.toLowerCase();
                return i || (o = ge[s], ge[s] = r, r = null != n(t, e, i) ? s : null, ge[s] = o), r
            }
        }));
        var me = /^(?:input|select|textarea|button)$/i,
            ve = /^(?:a|area)$/i;

        function ye(t) {
            return (t.match(L) || []).join(" ")
        }

        function we(t) {
            return t.getAttribute && t.getAttribute("class") || ""
        }

        function be(t) {
            return Array.isArray(t) ? t : "string" == typeof t && t.match(L) || []
        }
        T.fn.extend({
            prop: function(t, e) {
                return W(this, T.prop, t, e, arguments.length > 1)
            },
            removeProp: function(t) {
                return this.each((function() {
                    delete this[T.propFix[t] || t]
                }))
            }
        }), T.extend({
            prop: function(t, e, n) {
                var i, r, o = t.nodeType;
                if (3 !== o && 8 !== o && 2 !== o) return 1 === o && T.isXMLDoc(t) || (e = T.propFix[e] || e, r = T.propHooks[e]), void 0 !== n ? r && "set" in r && void 0 !== (i = r.set(t, n, e)) ? i : t[e] = n : r && "get" in r && null !== (i = r.get(t, e)) ? i : t[e]
            },
            propHooks: {
                tabIndex: {
                    get: function(t) {
                        var e = T.find.attr(t, "tabindex");
                        return e ? parseInt(e, 10) : me.test(t.nodeName) || ve.test(t.nodeName) && t.href ? 0 : -1
                    }
                }
            },
            propFix: {
                for: "htmlFor",
                class: "className"
            }
        }), m.optSelected || (T.propHooks.selected = {
            get: function(t) {
                var e = t.parentNode;
                return e && e.parentNode && e.parentNode.selectedIndex, null
            },
            set: function(t) {
                var e = t.parentNode;
                e && (e.selectedIndex, e.parentNode && e.parentNode.selectedIndex)
            }
        }), T.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], (function() {
            T.propFix[this.toLowerCase()] = this
        })), T.fn.extend({
            addClass: function(t) {
                var e, n, i, r, o, s, a, u = 0;
                if (v(t)) return this.each((function(e) {
                    T(this).addClass(t.call(this, e, we(this)))
                }));
                if ((e = be(t)).length)
                    for (; n = this[u++];)
                        if (r = we(n), i = 1 === n.nodeType && " " + ye(r) + " ") {
                            for (s = 0; o = e[s++];) i.indexOf(" " + o + " ") < 0 && (i += o + " ");
                            r !== (a = ye(i)) && n.setAttribute("class", a)
                        }
                return this
            },
            removeClass: function(t) {
                var e, n, i, r, o, s, a, u = 0;
                if (v(t)) return this.each((function(e) {
                    T(this).removeClass(t.call(this, e, we(this)))
                }));
                if (!arguments.length) return this.attr("class", "");
                if ((e = be(t)).length)
                    for (; n = this[u++];)
                        if (r = we(n), i = 1 === n.nodeType && " " + ye(r) + " ") {
                            for (s = 0; o = e[s++];)
                                for (; i.indexOf(" " + o + " ") > -1;) i = i.replace(" " + o + " ", " ");
                            r !== (a = ye(i)) && n.setAttribute("class", a)
                        }
                return this
            },
            toggleClass: function(t, e) {
                var n = typeof t,
                    i = "string" === n || Array.isArray(t);
                return "boolean" == typeof e && i ? e ? this.addClass(t) : this.removeClass(t) : v(t) ? this.each((function(n) {
                    T(this).toggleClass(t.call(this, n, we(this), e), e)
                })) : this.each((function() {
                    var e, r, o, s;
                    if (i)
                        for (r = 0, o = T(this), s = be(t); e = s[r++];) o.hasClass(e) ? o.removeClass(e) : o.addClass(e);
                    else void 0 !== t && "boolean" !== n || ((e = we(this)) && Q.set(this, "__className__", e), this.setAttribute && this.setAttribute("class", e || !1 === t ? "" : Q.get(this, "__className__") || ""))
                }))
            },
            hasClass: function(t) {
                var e, n, i = 0;
                for (e = " " + t + " "; n = this[i++];)
                    if (1 === n.nodeType && (" " + ye(we(n)) + " ").indexOf(e) > -1) return !0;
                return !1
            }
        });
        var xe = /\r/g;
        T.fn.extend({
            val: function(t) {
                var e, n, i, r = this[0];
                return arguments.length ? (i = v(t), this.each((function(n) {
                    var r;
                    1 === this.nodeType && (null == (r = i ? t.call(this, n, T(this).val()) : t) ? r = "" : "number" == typeof r ? r += "" : Array.isArray(r) && (r = T.map(r, (function(t) {
                        return null == t ? "" : t + ""
                    }))), (e = T.valHooks[this.type] || T.valHooks[this.nodeName.toLowerCase()]) && "set" in e && void 0 !== e.set(this, r, "value") || (this.value = r))
                }))) : r ? (e = T.valHooks[r.type] || T.valHooks[r.nodeName.toLowerCase()]) && "get" in e && void 0 !== (n = e.get(r, "value")) ? n : "string" == typeof(n = r.value) ? n.replace(xe, "") : null == n ? "" : n : void 0
            }
        }), T.extend({
            valHooks: {
                option: {
                    get: function(t) {
                        var e = T.find.attr(t, "value");
                        return null != e ? e : ye(T.text(t))
                    }
                },
                select: {
                    get: function(t) {
                        var e, n, i, r = t.options,
                            o = t.selectedIndex,
                            s = "select-one" === t.type,
                            a = s ? null : [],
                            u = s ? o + 1 : r.length;
                        for (i = o < 0 ? u : s ? o : 0; i < u; i++)
                            if (((n = r[i]).selected || i === o) && !n.disabled && (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))) {
                                if (e = T(n).val(), s) return e;
                                a.push(e)
                            }
                        return a
                    },
                    set: function(t, e) {
                        for (var n, i, r = t.options, o = T.makeArray(e), s = r.length; s--;)((i = r[s]).selected = T.inArray(T.valHooks.option.get(i), o) > -1) && (n = !0);
                        return n || (t.selectedIndex = -1), o
                    }
                }
            }
        }), T.each(["radio", "checkbox"], (function() {
            T.valHooks[this] = {
                set: function(t, e) {
                    if (Array.isArray(e)) return t.checked = T.inArray(T(t).val(), e) > -1
                }
            }, m.checkOn || (T.valHooks[this].get = function(t) {
                return null === t.getAttribute("value") ? "on" : t.value
            })
        })), m.focusin = "onfocusin" in n;
        var ke = /^(?:focusinfocus|focusoutblur)$/,
            Te = function(t) {
                t.stopPropagation()
            };
        T.extend(T.event, {
            trigger: function(t, e, i, r) {
                var o, s, a, u, l, c, h, d, p = [i || w],
                    g = f.call(t, "type") ? t.type : t,
                    m = f.call(t, "namespace") ? t.namespace.split(".") : [];
                if (s = d = a = i = i || w, 3 !== i.nodeType && 8 !== i.nodeType && !ke.test(g + T.event.triggered) && (g.indexOf(".") > -1 && (m = g.split("."), g = m.shift(), m.sort()), l = g.indexOf(":") < 0 && "on" + g, (t = t[T.expando] ? t : new T.Event(g, "object" == typeof t && t)).isTrigger = r ? 2 : 3, t.namespace = m.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + m.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), e = null == e ? [t] : T.makeArray(e, [t]), h = T.event.special[g] || {}, r || !h.trigger || !1 !== h.trigger.apply(i, e))) {
                    if (!r && !h.noBubble && !y(i)) {
                        for (u = h.delegateType || g, ke.test(u + g) || (s = s.parentNode); s; s = s.parentNode) p.push(s), a = s;
                        a === (i.ownerDocument || w) && p.push(a.defaultView || a.parentWindow || n)
                    }
                    for (o = 0;
                        (s = p[o++]) && !t.isPropagationStopped();) d = s, t.type = o > 1 ? u : h.bindType || g, (c = (Q.get(s, "events") || Object.create(null))[t.type] && Q.get(s, "handle")) && c.apply(s, e), (c = l && s[l]) && c.apply && J(s) && (t.result = c.apply(s, e), !1 === t.result && t.preventDefault());
                    return t.type = g, r || t.isDefaultPrevented() || h._default && !1 !== h._default.apply(p.pop(), e) || !J(i) || l && v(i[g]) && !y(i) && ((a = i[l]) && (i[l] = null), T.event.triggered = g, t.isPropagationStopped() && d.addEventListener(g, Te), i[g](), t.isPropagationStopped() && d.removeEventListener(g, Te), T.event.triggered = void 0, a && (i[l] = a)), t.result
                }
            },
            simulate: function(t, e, n) {
                var i = T.extend(new T.Event, n, {
                    type: t,
                    isSimulated: !0
                });
                T.event.trigger(i, null, e)
            }
        }), T.fn.extend({
            trigger: function(t, e) {
                return this.each((function() {
                    T.event.trigger(t, e, this)
                }))
            },
            triggerHandler: function(t, e) {
                var n = this[0];
                if (n) return T.event.trigger(t, e, n, !0)
            }
        }), m.focusin || T.each({
            focus: "focusin",
            blur: "focusout"
        }, (function(t, e) {
            var n = function(t) {
                T.event.simulate(e, t.target, T.event.fix(t))
            };
            T.event.special[e] = {
                setup: function() {
                    var i = this.ownerDocument || this.document || this,
                        r = Q.access(i, e);
                    r || i.addEventListener(t, n, !0), Q.access(i, e, (r || 0) + 1)
                },
                teardown: function() {
                    var i = this.ownerDocument || this.document || this,
                        r = Q.access(i, e) - 1;
                    r ? Q.access(i, e, r) : (i.removeEventListener(t, n, !0), Q.remove(i, e))
                }
            }
        }));
        var Ee = n.location,
            Se = {
                guid: Date.now()
            },
            Ce = /\?/;
        T.parseXML = function(t) {
            var e;
            if (!t || "string" != typeof t) return null;
            try {
                e = (new n.DOMParser).parseFromString(t, "text/xml")
            } catch (t) {
                e = void 0
            }
            return e && !e.getElementsByTagName("parsererror").length || T.error("Invalid XML: " + t), e
        };
        var $e = /\[\]$/,
            Ie = /\r?\n/g,
            Ne = /^(?:submit|button|image|reset|file)$/i,
            Ae = /^(?:input|select|textarea|keygen)/i;

        function De(t, e, n, i) {
            var r;
            if (Array.isArray(e)) T.each(e, (function(e, r) {
                n || $e.test(t) ? i(t, r) : De(t + "[" + ("object" == typeof r && null != r ? e : "") + "]", r, n, i)
            }));
            else if (n || "object" !== k(e)) i(t, e);
            else
                for (r in e) De(t + "[" + r + "]", e[r], n, i)
        }
        T.param = function(t, e) {
            var n, i = [],
                r = function(t, e) {
                    var n = v(e) ? e() : e;
                    i[i.length] = encodeURIComponent(t) + "=" + encodeURIComponent(null == n ? "" : n)
                };
            if (null == t) return "";
            if (Array.isArray(t) || t.jquery && !T.isPlainObject(t)) T.each(t, (function() {
                r(this.name, this.value)
            }));
            else
                for (n in t) De(n, t[n], e, r);
            return i.join("&")
        }, T.fn.extend({
            serialize: function() {
                return T.param(this.serializeArray())
            },
            serializeArray: function() {
                return this.map((function() {
                    var t = T.prop(this, "elements");
                    return t ? T.makeArray(t) : this
                })).filter((function() {
                    var t = this.type;
                    return this.name && !T(this).is(":disabled") && Ae.test(this.nodeName) && !Ne.test(t) && (this.checked || !gt.test(t))
                })).map((function(t, e) {
                    var n = T(this).val();
                    return null == n ? null : Array.isArray(n) ? T.map(n, (function(t) {
                        return {
                            name: e.name,
                            value: t.replace(Ie, "\r\n")
                        }
                    })) : {
                        name: e.name,
                        value: n.replace(Ie, "\r\n")
                    }
                })).get()
            }
        });
        var Me = /%20/g,
            Pe = /#.*$/,
            Oe = /([?&])_=[^&]*/,
            je = /^(.*?):[ \t]*([^\r\n]*)$/gm,
            _e = /^(?:GET|HEAD)$/,
            Le = /^\/\//,
            He = {},
            Be = {},
            Re = "*/".concat("*"),
            Fe = w.createElement("a");

        function ze(t) {
            return function(e, n) {
                "string" != typeof e && (n = e, e = "*");
                var i, r = 0,
                    o = e.toLowerCase().match(L) || [];
                if (v(n))
                    for (; i = o[r++];) "+" === i[0] ? (i = i.slice(1) || "*", (t[i] = t[i] || []).unshift(n)) : (t[i] = t[i] || []).push(n)
            }
        }

        function qe(t, e, n, i) {
            var r = {},
                o = t === Be;

            function s(a) {
                var u;
                return r[a] = !0, T.each(t[a] || [], (function(t, a) {
                    var l = a(e, n, i);
                    return "string" != typeof l || o || r[l] ? o ? !(u = l) : void 0 : (e.dataTypes.unshift(l), s(l), !1)
                })), u
            }
            return s(e.dataTypes[0]) || !r["*"] && s("*")
        }

        function We(t, e) {
            var n, i, r = T.ajaxSettings.flatOptions || {};
            for (n in e) void 0 !== e[n] && ((r[n] ? t : i || (i = {}))[n] = e[n]);
            return i && T.extend(!0, t, i), t
        }
        Fe.href = Ee.href, T.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: Ee.href,
                type: "GET",
                isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Ee.protocol),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": Re,
                    text: "text/plain",
                    html: "text/html",
                    xml: "application/xml, text/xml",
                    json: "application/json, text/javascript"
                },
                contents: {
                    xml: /\bxml\b/,
                    html: /\bhtml/,
                    json: /\bjson\b/
                },
                responseFields: {
                    xml: "responseXML",
                    text: "responseText",
                    json: "responseJSON"
                },
                converters: {
                    "* text": String,
                    "text html": !0,
                    "text json": JSON.parse,
                    "text xml": T.parseXML
                },
                flatOptions: {
                    url: !0,
                    context: !0
                }
            },
            ajaxSetup: function(t, e) {
                return e ? We(We(t, T.ajaxSettings), e) : We(T.ajaxSettings, t)
            },
            ajaxPrefilter: ze(He),
            ajaxTransport: ze(Be),
            ajax: function(t, e) {
                "object" == typeof t && (e = t, t = void 0), e = e || {};
                var i, r, o, s, a, u, l, c, h, d, f = T.ajaxSetup({}, e),
                    p = f.context || f,
                    g = f.context && (p.nodeType || p.jquery) ? T(p) : T.event,
                    m = T.Deferred(),
                    v = T.Callbacks("once memory"),
                    y = f.statusCode || {},
                    b = {},
                    x = {},
                    k = "canceled",
                    E = {
                        readyState: 0,
                        getResponseHeader: function(t) {
                            var e;
                            if (l) {
                                if (!s)
                                    for (s = {}; e = je.exec(o);) s[e[1].toLowerCase() + " "] = (s[e[1].toLowerCase() + " "] || []).concat(e[2]);
                                e = s[t.toLowerCase() + " "]
                            }
                            return null == e ? null : e.join(", ")
                        },
                        getAllResponseHeaders: function() {
                            return l ? o : null
                        },
                        setRequestHeader: function(t, e) {
                            return null == l && (t = x[t.toLowerCase()] = x[t.toLowerCase()] || t, b[t] = e), this
                        },
                        overrideMimeType: function(t) {
                            return null == l && (f.mimeType = t), this
                        },
                        statusCode: function(t) {
                            var e;
                            if (t)
                                if (l) E.always(t[E.status]);
                                else
                                    for (e in t) y[e] = [y[e], t[e]];
                            return this
                        },
                        abort: function(t) {
                            var e = t || k;
                            return i && i.abort(e), S(0, e), this
                        }
                    };
                if (m.promise(E), f.url = ((t || f.url || Ee.href) + "").replace(Le, Ee.protocol + "//"), f.type = e.method || e.type || f.method || f.type, f.dataTypes = (f.dataType || "*").toLowerCase().match(L) || [""], null == f.crossDomain) {
                    u = w.createElement("a");
                    try {
                        u.href = f.url, u.href = u.href, f.crossDomain = Fe.protocol + "//" + Fe.host != u.protocol + "//" + u.host
                    } catch (t) {
                        f.crossDomain = !0
                    }
                }
                if (f.data && f.processData && "string" != typeof f.data && (f.data = T.param(f.data, f.traditional)), qe(He, f, e, E), l) return E;
                for (h in (c = T.event && f.global) && 0 == T.active++ && T.event.trigger("ajaxStart"), f.type = f.type.toUpperCase(), f.hasContent = !_e.test(f.type), r = f.url.replace(Pe, ""), f.hasContent ? f.data && f.processData && 0 === (f.contentType || "").indexOf("application/x-www-form-urlencoded") && (f.data = f.data.replace(Me, "+")) : (d = f.url.slice(r.length), f.data && (f.processData || "string" == typeof f.data) && (r += (Ce.test(r) ? "&" : "?") + f.data, delete f.data), !1 === f.cache && (r = r.replace(Oe, "$1"), d = (Ce.test(r) ? "&" : "?") + "_=" + Se.guid++ + d), f.url = r + d), f.ifModified && (T.lastModified[r] && E.setRequestHeader("If-Modified-Since", T.lastModified[r]), T.etag[r] && E.setRequestHeader("If-None-Match", T.etag[r])), (f.data && f.hasContent && !1 !== f.contentType || e.contentType) && E.setRequestHeader("Content-Type", f.contentType), E.setRequestHeader("Accept", f.dataTypes[0] && f.accepts[f.dataTypes[0]] ? f.accepts[f.dataTypes[0]] + ("*" !== f.dataTypes[0] ? ", " + Re + "; q=0.01" : "") : f.accepts["*"]), f.headers) E.setRequestHeader(h, f.headers[h]);
                if (f.beforeSend && (!1 === f.beforeSend.call(p, E, f) || l)) return E.abort();
                if (k = "abort", v.add(f.complete), E.done(f.success), E.fail(f.error), i = qe(Be, f, e, E)) {
                    if (E.readyState = 1, c && g.trigger("ajaxSend", [E, f]), l) return E;
                    f.async && f.timeout > 0 && (a = n.setTimeout((function() {
                        E.abort("timeout")
                    }), f.timeout));
                    try {
                        l = !1, i.send(b, S)
                    } catch (t) {
                        if (l) throw t;
                        S(-1, t)
                    }
                } else S(-1, "No Transport");

                function S(t, e, s, u) {
                    var h, d, w, b, x, k = e;
                    l || (l = !0, a && n.clearTimeout(a), i = void 0, o = u || "", E.readyState = t > 0 ? 4 : 0, h = t >= 200 && t < 300 || 304 === t, s && (b = function(t, e, n) {
                        for (var i, r, o, s, a = t.contents, u = t.dataTypes;
                            "*" === u[0];) u.shift(), void 0 === i && (i = t.mimeType || e.getResponseHeader("Content-Type"));
                        if (i)
                            for (r in a)
                                if (a[r] && a[r].test(i)) {
                                    u.unshift(r);
                                    break
                                }
                        if (u[0] in n) o = u[0];
                        else {
                            for (r in n) {
                                if (!u[0] || t.converters[r + " " + u[0]]) {
                                    o = r;
                                    break
                                }
                                s || (s = r)
                            }
                            o = o || s
                        }
                        if (o) return o !== u[0] && u.unshift(o), n[o]
                    }(f, E, s)), !h && T.inArray("script", f.dataTypes) > -1 && (f.converters["text script"] = function() {}), b = function(t, e, n, i) {
                        var r, o, s, a, u, l = {},
                            c = t.dataTypes.slice();
                        if (c[1])
                            for (s in t.converters) l[s.toLowerCase()] = t.converters[s];
                        for (o = c.shift(); o;)
                            if (t.responseFields[o] && (n[t.responseFields[o]] = e), !u && i && t.dataFilter && (e = t.dataFilter(e, t.dataType)), u = o, o = c.shift())
                                if ("*" === o) o = u;
                                else if ("*" !== u && u !== o) {
                            if (!(s = l[u + " " + o] || l["* " + o]))
                                for (r in l)
                                    if ((a = r.split(" "))[1] === o && (s = l[u + " " + a[0]] || l["* " + a[0]])) {
                                        !0 === s ? s = l[r] : !0 !== l[r] && (o = a[0], c.unshift(a[1]));
                                        break
                                    }
                            if (!0 !== s)
                                if (s && t.throws) e = s(e);
                                else try {
                                    e = s(e)
                                } catch (t) {
                                    return {
                                        state: "parsererror",
                                        error: s ? t : "No conversion from " + u + " to " + o
                                    }
                                }
                        }
                        return {
                            state: "success",
                            data: e
                        }
                    }(f, b, E, h), h ? (f.ifModified && ((x = E.getResponseHeader("Last-Modified")) && (T.lastModified[r] = x), (x = E.getResponseHeader("etag")) && (T.etag[r] = x)), 204 === t || "HEAD" === f.type ? k = "nocontent" : 304 === t ? k = "notmodified" : (k = b.state, d = b.data, h = !(w = b.error))) : (w = k, !t && k || (k = "error", t < 0 && (t = 0))), E.status = t, E.statusText = (e || k) + "", h ? m.resolveWith(p, [d, k, E]) : m.rejectWith(p, [E, k, w]), E.statusCode(y), y = void 0, c && g.trigger(h ? "ajaxSuccess" : "ajaxError", [E, f, h ? d : w]), v.fireWith(p, [E, k]), c && (g.trigger("ajaxComplete", [E, f]), --T.active || T.event.trigger("ajaxStop")))
                }
                return E
            },
            getJSON: function(t, e, n) {
                return T.get(t, e, n, "json")
            },
            getScript: function(t, e) {
                return T.get(t, void 0, e, "script")
            }
        }), T.each(["get", "post"], (function(t, e) {
            T[e] = function(t, n, i, r) {
                return v(n) && (r = r || i, i = n, n = void 0), T.ajax(T.extend({
                    url: t,
                    type: e,
                    dataType: r,
                    data: n,
                    success: i
                }, T.isPlainObject(t) && t))
            }
        })), T.ajaxPrefilter((function(t) {
            var e;
            for (e in t.headers) "content-type" === e.toLowerCase() && (t.contentType = t.headers[e] || "")
        })), T._evalUrl = function(t, e, n) {
            return T.ajax({
                url: t,
                type: "GET",
                dataType: "script",
                cache: !0,
                async: !1,
                global: !1,
                converters: {
                    "text script": function() {}
                },
                dataFilter: function(t) {
                    T.globalEval(t, e, n)
                }
            })
        }, T.fn.extend({
            wrapAll: function(t) {
                var e;
                return this[0] && (v(t) && (t = t.call(this[0])), e = T(t, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && e.insertBefore(this[0]), e.map((function() {
                    for (var t = this; t.firstElementChild;) t = t.firstElementChild;
                    return t
                })).append(this)), this
            },
            wrapInner: function(t) {
                return v(t) ? this.each((function(e) {
                    T(this).wrapInner(t.call(this, e))
                })) : this.each((function() {
                    var e = T(this),
                        n = e.contents();
                    n.length ? n.wrapAll(t) : e.append(t)
                }))
            },
            wrap: function(t) {
                var e = v(t);
                return this.each((function(n) {
                    T(this).wrapAll(e ? t.call(this, n) : t)
                }))
            },
            unwrap: function(t) {
                return this.parent(t).not("body").each((function() {
                    T(this).replaceWith(this.childNodes)
                })), this
            }
        }), T.expr.pseudos.hidden = function(t) {
            return !T.expr.pseudos.visible(t)
        }, T.expr.pseudos.visible = function(t) {
            return !!(t.offsetWidth || t.offsetHeight || t.getClientRects().length)
        }, T.ajaxSettings.xhr = function() {
            try {
                return new n.XMLHttpRequest
            } catch (t) {}
        };
        var Ve = {
                0: 200,
                1223: 204
            },
            Ue = T.ajaxSettings.xhr();
        m.cors = !!Ue && "withCredentials" in Ue, m.ajax = Ue = !!Ue, T.ajaxTransport((function(t) {
            var e, i;
            if (m.cors || Ue && !t.crossDomain) return {
                send: function(r, o) {
                    var s, a = t.xhr();
                    if (a.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
                        for (s in t.xhrFields) a[s] = t.xhrFields[s];
                    for (s in t.mimeType && a.overrideMimeType && a.overrideMimeType(t.mimeType), t.crossDomain || r["X-Requested-With"] || (r["X-Requested-With"] = "XMLHttpRequest"), r) a.setRequestHeader(s, r[s]);
                    e = function(t) {
                        return function() {
                            e && (e = i = a.onload = a.onerror = a.onabort = a.ontimeout = a.onreadystatechange = null, "abort" === t ? a.abort() : "error" === t ? "number" != typeof a.status ? o(0, "error") : o(a.status, a.statusText) : o(Ve[a.status] || a.status, a.statusText, "text" !== (a.responseType || "text") || "string" != typeof a.responseText ? {
                                binary: a.response
                            } : {
                                text: a.responseText
                            }, a.getAllResponseHeaders()))
                        }
                    }, a.onload = e(), i = a.onerror = a.ontimeout = e("error"), void 0 !== a.onabort ? a.onabort = i : a.onreadystatechange = function() {
                        4 === a.readyState && n.setTimeout((function() {
                            e && i()
                        }))
                    }, e = e("abort");
                    try {
                        a.send(t.hasContent && t.data || null)
                    } catch (t) {
                        if (e) throw t
                    }
                },
                abort: function() {
                    e && e()
                }
            }
        })), T.ajaxPrefilter((function(t) {
            t.crossDomain && (t.contents.script = !1)
        })), T.ajaxSetup({
            accepts: {
                script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
            },
            contents: {
                script: /\b(?:java|ecma)script\b/
            },
            converters: {
                "text script": function(t) {
                    return T.globalEval(t), t
                }
            }
        }), T.ajaxPrefilter("script", (function(t) {
            void 0 === t.cache && (t.cache = !1), t.crossDomain && (t.type = "GET")
        })), T.ajaxTransport("script", (function(t) {
            var e, n;
            if (t.crossDomain || t.scriptAttrs) return {
                send: function(i, r) {
                    e = T("<script>").attr(t.scriptAttrs || {}).prop({
                        charset: t.scriptCharset,
                        src: t.url
                    }).on("load error", n = function(t) {
                        e.remove(), n = null, t && r("error" === t.type ? 404 : 200, t.type)
                    }), w.head.appendChild(e[0])
                },
                abort: function() {
                    n && n()
                }
            }
        }));
        var Xe, Ye = [],
            Je = /(=)\?(?=&|$)|\?\?/;
        T.ajaxSetup({
            jsonp: "callback",
            jsonpCallback: function() {
                var t = Ye.pop() || T.expando + "_" + Se.guid++;
                return this[t] = !0, t
            }
        }), T.ajaxPrefilter("json jsonp", (function(t, e, i) {
            var r, o, s, a = !1 !== t.jsonp && (Je.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Je.test(t.data) && "data");
            if (a || "jsonp" === t.dataTypes[0]) return r = t.jsonpCallback = v(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, a ? t[a] = t[a].replace(Je, "$1" + r) : !1 !== t.jsonp && (t.url += (Ce.test(t.url) ? "&" : "?") + t.jsonp + "=" + r), t.converters["script json"] = function() {
                return s || T.error(r + " was not called"), s[0]
            }, t.dataTypes[0] = "json", o = n[r], n[r] = function() {
                s = arguments
            }, i.always((function() {
                void 0 === o ? T(n).removeProp(r) : n[r] = o, t[r] && (t.jsonpCallback = e.jsonpCallback, Ye.push(r)), s && v(o) && o(s[0]), s = o = void 0
            })), "script"
        })), m.createHTMLDocument = ((Xe = w.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Xe.childNodes.length), T.parseHTML = function(t, e, n) {
            return "string" != typeof t ? [] : ("boolean" == typeof e && (n = e, e = !1), e || (m.createHTMLDocument ? ((i = (e = w.implementation.createHTMLDocument("")).createElement("base")).href = w.location.href, e.head.appendChild(i)) : e = w), o = !n && [], (r = A.exec(t)) ? [e.createElement(r[1])] : (r = kt([t], e, o), o && o.length && T(o).remove(), T.merge([], r.childNodes)));
            var i, r, o
        }, T.fn.load = function(t, e, n) {
            var i, r, o, s = this,
                a = t.indexOf(" ");
            return a > -1 && (i = ye(t.slice(a)), t = t.slice(0, a)), v(e) ? (n = e, e = void 0) : e && "object" == typeof e && (r = "POST"), s.length > 0 && T.ajax({
                url: t,
                type: r || "GET",
                dataType: "html",
                data: e
            }).done((function(t) {
                o = arguments, s.html(i ? T("<div>").append(T.parseHTML(t)).find(i) : t)
            })).always(n && function(t, e) {
                s.each((function() {
                    n.apply(this, o || [t.responseText, e, t])
                }))
            }), this
        }, T.expr.pseudos.animated = function(t) {
            return T.grep(T.timers, (function(e) {
                return t === e.elem
            })).length
        }, T.offset = {
            setOffset: function(t, e, n) {
                var i, r, o, s, a, u, l = T.css(t, "position"),
                    c = T(t),
                    h = {};
                "static" === l && (t.style.position = "relative"), a = c.offset(), o = T.css(t, "top"), u = T.css(t, "left"), ("absolute" === l || "fixed" === l) && (o + u).indexOf("auto") > -1 ? (s = (i = c.position()).top, r = i.left) : (s = parseFloat(o) || 0, r = parseFloat(u) || 0), v(e) && (e = e.call(t, n, T.extend({}, a))), null != e.top && (h.top = e.top - a.top + s), null != e.left && (h.left = e.left - a.left + r), "using" in e ? e.using.call(t, h) : ("number" == typeof h.top && (h.top += "px"), "number" == typeof h.left && (h.left += "px"), c.css(h))
            }
        }, T.fn.extend({
            offset: function(t) {
                if (arguments.length) return void 0 === t ? this : this.each((function(e) {
                    T.offset.setOffset(this, t, e)
                }));
                var e, n, i = this[0];
                return i ? i.getClientRects().length ? (e = i.getBoundingClientRect(), n = i.ownerDocument.defaultView, {
                    top: e.top + n.pageYOffset,
                    left: e.left + n.pageXOffset
                }) : {
                    top: 0,
                    left: 0
                } : void 0
            },
            position: function() {
                if (this[0]) {
                    var t, e, n, i = this[0],
                        r = {
                            top: 0,
                            left: 0
                        };
                    if ("fixed" === T.css(i, "position")) e = i.getBoundingClientRect();
                    else {
                        for (e = this.offset(), n = i.ownerDocument, t = i.offsetParent || n.documentElement; t && (t === n.body || t === n.documentElement) && "static" === T.css(t, "position");) t = t.parentNode;
                        t && t !== i && 1 === t.nodeType && ((r = T(t).offset()).top += T.css(t, "borderTopWidth", !0), r.left += T.css(t, "borderLeftWidth", !0))
                    }
                    return {
                        top: e.top - r.top - T.css(i, "marginTop", !0),
                        left: e.left - r.left - T.css(i, "marginLeft", !0)
                    }
                }
            },
            offsetParent: function() {
                return this.map((function() {
                    for (var t = this.offsetParent; t && "static" === T.css(t, "position");) t = t.offsetParent;
                    return t || ot
                }))
            }
        }), T.each({
            scrollLeft: "pageXOffset",
            scrollTop: "pageYOffset"
        }, (function(t, e) {
            var n = "pageYOffset" === e;
            T.fn[t] = function(i) {
                return W(this, (function(t, i, r) {
                    var o;
                    if (y(t) ? o = t : 9 === t.nodeType && (o = t.defaultView), void 0 === r) return o ? o[e] : t[i];
                    o ? o.scrollTo(n ? o.pageXOffset : r, n ? r : o.pageYOffset) : t[i] = r
                }), t, i, arguments.length)
            }
        })), T.each(["top", "left"], (function(t, e) {
            T.cssHooks[e] = Ut(m.pixelPosition, (function(t, n) {
                if (n) return n = Vt(t, e), Ft.test(n) ? T(t).position()[e] + "px" : n
            }))
        })), T.each({
            Height: "height",
            Width: "width"
        }, (function(t, e) {
            T.each({
                padding: "inner" + t,
                content: e,
                "": "outer" + t
            }, (function(n, i) {
                T.fn[i] = function(r, o) {
                    var s = arguments.length && (n || "boolean" != typeof r),
                        a = n || (!0 === r || !0 === o ? "margin" : "border");
                    return W(this, (function(e, n, r) {
                        var o;
                        return y(e) ? 0 === i.indexOf("outer") ? e["inner" + t] : e.document.documentElement["client" + t] : 9 === e.nodeType ? (o = e.documentElement, Math.max(e.body["scroll" + t], o["scroll" + t], e.body["offset" + t], o["offset" + t], o["client" + t])) : void 0 === r ? T.css(e, n, a) : T.style(e, n, r, a)
                    }), e, s ? r : void 0, s)
                }
            }))
        })), T.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], (function(t, e) {
            T.fn[e] = function(t) {
                return this.on(e, t)
            }
        })), T.fn.extend({
            bind: function(t, e, n) {
                return this.on(t, null, e, n)
            },
            unbind: function(t, e) {
                return this.off(t, null, e)
            },
            delegate: function(t, e, n, i) {
                return this.on(e, t, n, i)
            },
            undelegate: function(t, e, n) {
                return 1 === arguments.length ? this.off(t, "**") : this.off(e, t || "**", n)
            },
            hover: function(t, e) {
                return this.mouseenter(t).mouseleave(e || t)
            }
        }), T.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), (function(t, e) {
            T.fn[e] = function(t, n) {
                return arguments.length > 0 ? this.on(e, null, t, n) : this.trigger(e)
            }
        }));
        var Ge = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        T.proxy = function(t, e) {
            var n, i, r;
            if ("string" == typeof e && (n = t[e], e = t, t = n), v(t)) return i = a.call(arguments, 2), (r = function() {
                return t.apply(e || this, i.concat(a.call(arguments)))
            }).guid = t.guid = t.guid || T.guid++, r
        }, T.holdReady = function(t) {
            t ? T.readyWait++ : T.ready(!0)
        }, T.isArray = Array.isArray, T.parseJSON = JSON.parse, T.nodeName = N, T.isFunction = v, T.isWindow = y, T.camelCase = Y, T.type = k, T.now = Date.now, T.isNumeric = function(t) {
            var e = T.type(t);
            return ("number" === e || "string" === e) && !isNaN(t - parseFloat(t))
        }, T.trim = function(t) {
            return null == t ? "" : (t + "").replace(Ge, "")
        }, void 0 === (i = function() {
            return T
        }.apply(e, [])) || (t.exports = i);
        var Qe = n.jQuery,
            Ke = n.$;
        return T.noConflict = function(t) {
            return n.$ === T && (n.$ = Ke), t && n.jQuery === T && (n.jQuery = Qe), T
        }, void 0 === r && (n.jQuery = n.$ = T), T
    }))
}, function(t, e) {
    var n;
    n = function() {
        return this
    }();
    try {
        n = n || new Function("return this")()
    } catch (t) {
        "object" == typeof window && (n = window)
    }
    t.exports = n
}, function(t, e, n) {
    (function(e) {
        var n = /^\s+|\s+$/g,
            i = /^[-+]0x[0-9a-f]+$/i,
            r = /^0b[01]+$/i,
            o = /^0o[0-7]+$/i,
            s = parseInt,
            a = "object" == typeof e && e && e.Object === Object && e,
            u = "object" == typeof self && self && self.Object === Object && self,
            l = a || u || Function("return this")(),
            c = Object.prototype.toString,
            h = Math.max,
            d = Math.min,
            f = function() {
                return l.Date.now()
            };

        function p(t, e, n) {
            var i, r, o, s, a, u, l = 0,
                c = !1,
                p = !1,
                v = !0;
            if ("function" != typeof t) throw new TypeError("Expected a function");

            function y(e) {
                var n = i,
                    o = r;
                return i = r = void 0, l = e, s = t.apply(o, n)
            }

            function w(t) {
                return l = t, a = setTimeout(x, e), c ? y(t) : s
            }

            function b(t) {
                var n = t - u;
                return void 0 === u || n >= e || n < 0 || p && t - l >= o
            }

            function x() {
                var t = f();
                if (b(t)) return k(t);
                a = setTimeout(x, function(t) {
                    var n = e - (t - u);
                    return p ? d(n, o - (t - l)) : n
                }(t))
            }

            function k(t) {
                return a = void 0, v && i ? y(t) : (i = r = void 0, s)
            }

            function T() {
                var t = f(),
                    n = b(t);
                if (i = arguments, r = this, u = t, n) {
                    if (void 0 === a) return w(u);
                    if (p) return a = setTimeout(x, e), y(u)
                }
                return void 0 === a && (a = setTimeout(x, e)), s
            }
            return e = m(e) || 0, g(n) && (c = !!n.leading, o = (p = "maxWait" in n) ? h(m(n.maxWait) || 0, e) : o, v = "trailing" in n ? !!n.trailing : v), T.cancel = function() {
                void 0 !== a && clearTimeout(a), l = 0, i = u = r = a = void 0
            }, T.flush = function() {
                return void 0 === a ? s : k(f())
            }, T
        }

        function g(t) {
            var e = typeof t;
            return !!t && ("object" == e || "function" == e)
        }

        function m(t) {
            if ("number" == typeof t) return t;
            if (function(t) {
                    return "symbol" == typeof t || function(t) {
                        return !!t && "object" == typeof t
                    }(t) && "[object Symbol]" == c.call(t)
                }(t)) return NaN;
            if (g(t)) {
                var e = "function" == typeof t.valueOf ? t.valueOf() : t;
                t = g(e) ? e + "" : e
            }
            if ("string" != typeof t) return 0 === t ? t : +t;
            t = t.replace(n, "");
            var a = r.test(t);
            return a || o.test(t) ? s(t.slice(2), a ? 2 : 8) : i.test(t) ? NaN : +t
        }
        t.exports = function(t, e, n) {
            var i = !0,
                r = !0;
            if ("function" != typeof t) throw new TypeError("Expected a function");
            return g(n) && (i = "leading" in n ? !!n.leading : i, r = "trailing" in n ? !!n.trailing : r), p(t, e, {
                leading: i,
                maxWait: e,
                trailing: r
            })
        }
    }).call(this, n(1))
}, function(t, e, n) {
    (function(e) { /*!UIkit 3.4.3 | https://www.getuikit.com | (c) 2014 - 2020 YOOtheme | MIT License*/
        t.exports = function() {
            "use strict";
            var t = Object.prototype,
                n = t.hasOwnProperty;

            function i(t, e) {
                return n.call(t, e)
            }
            var r = {},
                o = /([a-z\d])([A-Z])/g;

            function s(t) {
                return t in r || (r[t] = t.replace(o, "$1-$2").toLowerCase()), r[t]
            }
            var a = /-(\w)/g;

            function u(t) {
                return t.replace(a, l)
            }

            function l(t, e) {
                return e ? e.toUpperCase() : ""
            }

            function c(t) {
                return t.length ? l(0, t.charAt(0)) + t.slice(1) : ""
            }
            var h = String.prototype,
                d = h.startsWith || function(t) {
                    return 0 === this.lastIndexOf(t, 0)
                };

            function f(t, e) {
                return d.call(t, e)
            }
            var p = h.endsWith || function(t) {
                return this.substr(-t.length) === t
            };

            function g(t, e) {
                return p.call(t, e)
            }
            var m = Array.prototype,
                v = function(t, e) {
                    return !!~this.indexOf(t, e)
                },
                y = h.includes || v,
                w = m.includes || v;

            function b(t, e) {
                return t && (j(t) ? y : w).call(t, e)
            }
            var x = m.findIndex || function(t) {
                for (var e = arguments, n = 0; n < this.length; n++)
                    if (t.call(e[1], this[n], n, this)) return n;
                return -1
            };

            function k(t, e) {
                return x.call(t, e)
            }
            var T = Array.isArray;

            function E(t) {
                return "function" == typeof t
            }

            function S(t) {
                return null !== t && "object" == typeof t
            }
            var C = t.toString;

            function $(t) {
                return "[object Object]" === C.call(t)
            }

            function I(t) {
                return S(t) && t === t.window
            }

            function N(t) {
                return S(t) && 9 === t.nodeType
            }

            function A(t) {
                return S(t) && !!t.jquery
            }

            function D(t) {
                return S(t) && t.nodeType >= 1
            }

            function M(t) {
                return S(t) && 1 === t.nodeType
            }

            function P(t) {
                return C.call(t).match(/^\[object (NodeList|HTMLCollection)\]$/)
            }

            function O(t) {
                return "boolean" == typeof t
            }

            function j(t) {
                return "string" == typeof t
            }

            function _(t) {
                return "number" == typeof t
            }

            function L(t) {
                return _(t) || j(t) && !isNaN(t - parseFloat(t))
            }

            function H(t) {
                return !(T(t) ? t.length : S(t) && Object.keys(t).length)
            }

            function B(t) {
                return void 0 === t
            }

            function R(t) {
                return O(t) ? t : "true" === t || "1" === t || "" === t || "false" !== t && "0" !== t && t
            }

            function F(t) {
                var e = Number(t);
                return !isNaN(e) && e
            }

            function z(t) {
                return parseFloat(t) || 0
            }

            function q(t) {
                return D(t) ? t : P(t) || A(t) ? t[0] : T(t) ? q(t[0]) : null
            }

            function W(t) {
                return D(t) ? [t] : P(t) ? m.slice.call(t) : T(t) ? t.map(q).filter(Boolean) : A(t) ? t.toArray() : []
            }

            function V(t) {
                return I(t) ? t : (t = q(t)) ? (N(t) ? t : t.ownerDocument).defaultView : window
            }

            function U(t) {
                return T(t) ? t : j(t) ? t.split(/,(?![^(]*\))/).map((function(t) {
                    return L(t) ? F(t) : R(t.trim())
                })) : [t]
            }

            function X(t) {
                return t ? g(t, "ms") ? z(t) : 1e3 * z(t) : 0
            }

            function Y(t, e) {
                return t === e || S(t) && S(e) && Object.keys(t).length === Object.keys(e).length && K(t, (function(t, n) {
                    return t === e[n]
                }))
            }

            function J(t, e, n) {
                return t.replace(new RegExp(e + "|" + n, "g"), (function(t) {
                    return t === e ? n : e
                }))
            }
            var G = Object.assign || function(t) {
                for (var e = [], n = arguments.length - 1; n-- > 0;) e[n] = arguments[n + 1];
                t = Object(t);
                for (var r = 0; r < e.length; r++) {
                    var o = e[r];
                    if (null !== o)
                        for (var s in o) i(o, s) && (t[s] = o[s])
                }
                return t
            };

            function Q(t) {
                return t[t.length - 1]
            }

            function K(t, e) {
                for (var n in t)
                    if (!1 === e(t[n], n)) return !1;
                return !0
            }

            function Z(t, e) {
                return t.sort((function(t, n) {
                    var i = t[e];
                    void 0 === i && (i = 0);
                    var r = n[e];
                    return void 0 === r && (r = 0), i > r ? 1 : r > i ? -1 : 0
                }))
            }

            function tt(t, e) {
                var n = new Set;
                return t.filter((function(t) {
                    var i = t[e];
                    return !n.has(i) && (n.add(i) || !0)
                }))
            }

            function et(t, e, n) {
                return void 0 === e && (e = 0), void 0 === n && (n = 1), Math.min(Math.max(F(t) || 0, e), n)
            }

            function nt() {}

            function it(t, e) {
                return t.left < e.right && t.right > e.left && t.top < e.bottom && t.bottom > e.top
            }

            function rt(t, e) {
                return t.x <= e.right && t.x >= e.left && t.y <= e.bottom && t.y >= e.top
            }
            var ot = {
                ratio: function(t, e, n) {
                    var i, r = "width" === e ? "height" : "width";
                    return (i = {})[r] = t[e] ? Math.round(n * t[r] / t[e]) : t[r], i[e] = n, i
                },
                contain: function(t, e) {
                    var n = this;
                    return K(t = G({}, t), (function(i, r) {
                        return t = t[r] > e[r] ? n.ratio(t, r, e[r]) : t
                    })), t
                },
                cover: function(t, e) {
                    var n = this;
                    return K(t = this.contain(t, e), (function(i, r) {
                        return t = t[r] < e[r] ? n.ratio(t, r, e[r]) : t
                    })), t
                }
            };

            function st(t, e, n) {
                if (S(e))
                    for (var i in e) st(t, i, e[i]);
                else {
                    if (B(n)) return (t = q(t)) && t.getAttribute(e);
                    W(t).forEach((function(t) {
                        E(n) && (n = n.call(t, st(t, e))), null === n ? ut(t, e) : t.setAttribute(e, n)
                    }))
                }
            }

            function at(t, e) {
                return W(t).some((function(t) {
                    return t.hasAttribute(e)
                }))
            }

            function ut(t, e) {
                t = W(t), e.split(" ").forEach((function(e) {
                    return t.forEach((function(t) {
                        return t.hasAttribute(e) && t.removeAttribute(e)
                    }))
                }))
            }

            function lt(t, e) {
                for (var n = 0, i = [e, "data-" + e]; n < i.length; n++)
                    if (at(t, i[n])) return st(t, i[n])
            }
            var ct = /msie|trident/i.test(window.navigator.userAgent),
                ht = "rtl" === st(document.documentElement, "dir"),
                dt = "ontouchstart" in window,
                ft = window.PointerEvent,
                pt = dt || window.DocumentTouch && document instanceof DocumentTouch || navigator.maxTouchPoints,
                gt = ft ? "pointerdown" : dt ? "touchstart" : "mousedown",
                mt = ft ? "pointermove" : dt ? "touchmove" : "mousemove",
                vt = ft ? "pointerup" : dt ? "touchend" : "mouseup",
                yt = ft ? "pointerenter" : dt ? "" : "mouseenter",
                wt = ft ? "pointerleave" : dt ? "" : "mouseleave",
                bt = ft ? "pointercancel" : "touchcancel";

            function xt(t, e) {
                return q(t) || Et(t, Tt(t, e))
            }

            function kt(t, e) {
                var n = W(t);
                return n.length && n || St(t, Tt(t, e))
            }

            function Tt(t, e) {
                return void 0 === e && (e = document), Nt(t) || N(e) ? e : e.ownerDocument
            }

            function Et(t, e) {
                return q(Ct(t, e, "querySelector"))
            }

            function St(t, e) {
                return W(Ct(t, e, "querySelectorAll"))
            }

            function Ct(t, e, n) {
                if (void 0 === e && (e = document), !t || !j(t)) return null;
                var i;
                Nt(t = t.replace(It, "$1 *")) && (i = [], t = function(t) {
                    return t.match(At).map((function(t) {
                        return t.replace(/,$/, "").trim()
                    }))
                }(t).map((function(t, n) {
                    var r = e;
                    if ("!" === t[0]) {
                        var o = t.substr(1).trim().split(" ");
                        r = jt(_t(e), o[0]), t = o.slice(1).join(" ").trim()
                    }
                    if ("-" === t[0]) {
                        var s = t.substr(1).trim().split(" "),
                            a = (r || e).previousElementSibling;
                        r = Pt(a, t.substr(1)) ? a : null, t = s.slice(1).join(" ")
                    }
                    return r ? (r.id || (r.id = "uk-" + Date.now() + n, i.push((function() {
                        return ut(r, "id")
                    }))), "#" + Ht(r.id) + " " + t) : null
                })).filter(Boolean).join(","), e = document);
                try {
                    return e[n](t)
                } catch (t) {
                    return null
                } finally {
                    i && i.forEach((function(t) {
                        return t()
                    }))
                }
            }
            var $t = /(^|[^\\],)\s*[!>+~-]/,
                It = /([!>+~-])(?=\s+[!>+~-]|\s*$)/g;

            function Nt(t) {
                return j(t) && t.match($t)
            }
            var At = /.*?[^\\](?:,|$)/g,
                Dt = Element.prototype,
                Mt = Dt.matches || Dt.webkitMatchesSelector || Dt.msMatchesSelector;

            function Pt(t, e) {
                return W(t).some((function(t) {
                    return Mt.call(t, e)
                }))
            }
            var Ot = Dt.closest || function(t) {
                var e = this;
                do {
                    if (Pt(e, t)) return e
                } while (e = _t(e))
            };

            function jt(t, e) {
                return f(e, ">") && (e = e.slice(1)), M(t) ? Ot.call(t, e) : W(t).map((function(t) {
                    return jt(t, e)
                })).filter(Boolean)
            }

            function _t(t) {
                return (t = q(t)) && M(t.parentNode) && t.parentNode
            }
            var Lt = window.CSS && CSS.escape || function(t) {
                return t.replace(/([^\x7f-\uFFFF\w-])/g, (function(t) {
                    return "\\" + t
                }))
            };

            function Ht(t) {
                return j(t) ? Lt.call(null, t) : ""
            }
            var Bt = {
                area: !0,
                base: !0,
                br: !0,
                col: !0,
                embed: !0,
                hr: !0,
                img: !0,
                input: !0,
                keygen: !0,
                link: !0,
                menuitem: !0,
                meta: !0,
                param: !0,
                source: !0,
                track: !0,
                wbr: !0
            };

            function Rt(t) {
                return W(t).some((function(t) {
                    return Bt[t.tagName.toLowerCase()]
                }))
            }

            function Ft(t) {
                return W(t).some((function(t) {
                    return t.offsetWidth || t.offsetHeight || t.getClientRects().length
                }))
            }
            var zt = "input,select,textarea,button";

            function qt(t) {
                return W(t).some((function(t) {
                    return Pt(t, zt)
                }))
            }

            function Wt(t, e) {
                return W(t).filter((function(t) {
                    return Pt(t, e)
                }))
            }

            function Vt(t, e) {
                return j(e) ? Pt(t, e) || jt(t, e) : t === e || (N(e) ? e.documentElement : q(e)).contains(q(t))
            }

            function Ut(t, e) {
                for (var n = []; t = _t(t);) e && !Pt(t, e) || n.push(t);
                return n
            }

            function Xt(t, e) {
                var n = (t = q(t)) ? W(t.children) : [];
                return e ? Wt(n, e) : n
            }

            function Yt() {
                for (var t = [], e = arguments.length; e--;) t[e] = arguments[e];
                var n = Zt(t),
                    i = n[0],
                    r = n[1],
                    o = n[2],
                    s = n[3],
                    a = n[4];
                return i = se(i), s.length > 1 && (s = ee(s)), a && a.self && (s = ne(s)), o && (s = te(i, o, s)), a = ie(a), r.split(" ").forEach((function(t) {
                        return i.forEach((function(e) {
                            return e.addEventListener(t, s, a)
                        }))
                    })),
                    function() {
                        return Jt(i, r, s, a)
                    }
            }

            function Jt(t, e, n, i) {
                void 0 === i && (i = !1), i = ie(i), t = se(t), e.split(" ").forEach((function(e) {
                    return t.forEach((function(t) {
                        return t.removeEventListener(e, n, i)
                    }))
                }))
            }

            function Gt() {
                for (var t = [], e = arguments.length; e--;) t[e] = arguments[e];
                var n = Zt(t),
                    i = n[0],
                    r = n[1],
                    o = n[2],
                    s = n[3],
                    a = n[4],
                    u = n[5],
                    l = Yt(i, r, o, (function(t) {
                        var e = !u || u(t);
                        e && (l(), s(t, e))
                    }), a);
                return l
            }

            function Qt(t, e, n) {
                return se(t).reduce((function(t, i) {
                    return t && i.dispatchEvent(Kt(e, !0, !0, n))
                }), !0)
            }

            function Kt(t, e, n, i) {
                if (void 0 === e && (e = !0), void 0 === n && (n = !1), j(t)) {
                    var r = document.createEvent("CustomEvent");
                    r.initCustomEvent(t, e, n, i), t = r
                }
                return t
            }

            function Zt(t) {
                return E(t[2]) && t.splice(2, 0, !1), t
            }

            function te(t, e, n) {
                var i = this;
                return function(r) {
                    t.forEach((function(t) {
                        var o = ">" === e[0] ? St(e, t).reverse().filter((function(t) {
                            return Vt(r.target, t)
                        }))[0] : jt(r.target, e);
                        o && (r.delegate = t, r.current = o, n.call(i, r))
                    }))
                }
            }

            function ee(t) {
                return function(e) {
                    return T(e.detail) ? t.apply(void 0, [e].concat(e.detail)) : t(e)
                }
            }

            function ne(t) {
                return function(e) {
                    if (e.target === e.currentTarget || e.target === e.current) return t.call(null, e)
                }
            }

            function ie(t) {
                return t && ct && !O(t) ? !!t.capture : t
            }

            function re(t) {
                return t && "addEventListener" in t
            }

            function oe(t) {
                return re(t) ? t : q(t)
            }

            function se(t) {
                return T(t) ? t.map(oe).filter(Boolean) : j(t) ? St(t) : re(t) ? [t] : W(t)
            }

            function ae(t) {
                return "touch" === t.pointerType || !!t.touches
            }

            function ue(t) {
                var e = t.touches,
                    n = t.changedTouches,
                    i = e && e[0] || n && n[0] || t;
                return {
                    x: i.clientX,
                    y: i.clientY
                }
            }
            var le = "Promise" in window ? window.Promise : de,
                ce = function() {
                    var t = this;
                    this.promise = new le((function(e, n) {
                        t.reject = n, t.resolve = e
                    }))
                },
                he = "setImmediate" in window ? e : setTimeout;

            function de(t) {
                this.state = 2, this.value = void 0, this.deferred = [];
                var e = this;
                try {
                    t((function(t) {
                        e.resolve(t)
                    }), (function(t) {
                        e.reject(t)
                    }))
                } catch (t) {
                    e.reject(t)
                }
            }
            de.reject = function(t) {
                return new de((function(e, n) {
                    n(t)
                }))
            }, de.resolve = function(t) {
                return new de((function(e, n) {
                    e(t)
                }))
            }, de.all = function(t) {
                return new de((function(e, n) {
                    var i = [],
                        r = 0;

                    function o(n) {
                        return function(o) {
                            i[n] = o, (r += 1) === t.length && e(i)
                        }
                    }
                    0 === t.length && e(i);
                    for (var s = 0; s < t.length; s += 1) de.resolve(t[s]).then(o(s), n)
                }))
            }, de.race = function(t) {
                return new de((function(e, n) {
                    for (var i = 0; i < t.length; i += 1) de.resolve(t[i]).then(e, n)
                }))
            };
            var fe = de.prototype;

            function pe(t, e) {
                return new le((function(n, i) {
                    var r = G({
                        data: null,
                        method: "GET",
                        headers: {},
                        xhr: new XMLHttpRequest,
                        beforeSend: nt,
                        responseType: ""
                    }, e);
                    r.beforeSend(r);
                    var o = r.xhr;
                    for (var s in r)
                        if (s in o) try {
                            o[s] = r[s]
                        } catch (t) {}
                    for (var a in o.open(r.method.toUpperCase(), t), r.headers) o.setRequestHeader(a, r.headers[a]);
                    Yt(o, "load", (function() {
                        0 === o.status || o.status >= 200 && o.status < 300 || 304 === o.status ? n(o) : i(G(Error(o.statusText), {
                            xhr: o,
                            status: o.status
                        }))
                    })), Yt(o, "error", (function() {
                        return i(G(Error("Network Error"), {
                            xhr: o
                        }))
                    })), Yt(o, "timeout", (function() {
                        return i(G(Error("Network Timeout"), {
                            xhr: o
                        }))
                    })), o.send(r.data)
                }))
            }

            function ge(t, e, n) {
                return new le((function(i, r) {
                    var o = new Image;
                    o.onerror = r, o.onload = function() {
                        return i(o)
                    }, n && (o.sizes = n), e && (o.srcset = e), o.src = t
                }))
            }

            function me(t) {
                if ("loading" === document.readyState) var e = Yt(document, "DOMContentLoaded", (function() {
                    e(), t()
                }));
                else t()
            }

            function ve(t, e) {
                return e ? W(t).indexOf(q(e)) : Xt(_t(t)).indexOf(t)
            }

            function ye(t, e, n, i) {
                void 0 === n && (n = 0), void 0 === i && (i = !1);
                var r = (e = W(e)).length;
                return t = L(t) ? F(t) : "next" === t ? n + 1 : "previous" === t ? n - 1 : ve(e, t), i ? et(t, 0, r - 1) : (t %= r) < 0 ? t + r : t
            }

            function we(t) {
                return (t = Pe(t)).innerHTML = "", t
            }

            function be(t, e) {
                return t = Pe(t), B(e) ? t.innerHTML : xe(t.hasChildNodes() ? we(t) : t, e)
            }

            function xe(t, e) {
                return t = Pe(t), Ee(e, (function(e) {
                    return t.appendChild(e)
                }))
            }

            function ke(t, e) {
                return t = Pe(t), Ee(e, (function(e) {
                    return t.parentNode.insertBefore(e, t)
                }))
            }

            function Te(t, e) {
                return t = Pe(t), Ee(e, (function(e) {
                    return t.nextSibling ? ke(t.nextSibling, e) : xe(t.parentNode, e)
                }))
            }

            function Ee(t, e) {
                return (t = j(t) ? De(t) : t) ? "length" in t ? W(t).map(e) : e(t) : null
            }

            function Se(t) {
                W(t).map((function(t) {
                    return t.parentNode && t.parentNode.removeChild(t)
                }))
            }

            function Ce(t, e) {
                for (e = q(ke(t, e)); e.firstChild;) e = e.firstChild;
                return xe(e, t), e
            }

            function $e(t, e) {
                return W(W(t).map((function(t) {
                    return t.hasChildNodes ? Ce(W(t.childNodes), e) : xe(t, e)
                })))
            }

            function Ie(t) {
                W(t).map(_t).filter((function(t, e, n) {
                    return n.indexOf(t) === e
                })).forEach((function(t) {
                    ke(t, t.childNodes), Se(t)
                }))
            }
            fe.resolve = function(t) {
                var e = this;
                if (2 === e.state) {
                    if (t === e) throw new TypeError("Promise settled with itself.");
                    var n = !1;
                    try {
                        var i = t && t.then;
                        if (null !== t && S(t) && E(i)) return void i.call(t, (function(t) {
                            n || e.resolve(t), n = !0
                        }), (function(t) {
                            n || e.reject(t), n = !0
                        }))
                    } catch (t) {
                        return void(n || e.reject(t))
                    }
                    e.state = 0, e.value = t, e.notify()
                }
            }, fe.reject = function(t) {
                if (2 === this.state) {
                    if (t === this) throw new TypeError("Promise settled with itself.");
                    this.state = 1, this.value = t, this.notify()
                }
            }, fe.notify = function() {
                var t = this;
                he((function() {
                    if (2 !== t.state)
                        for (; t.deferred.length;) {
                            var e = t.deferred.shift(),
                                n = e[0],
                                i = e[1],
                                r = e[2],
                                o = e[3];
                            try {
                                0 === t.state ? E(n) ? r(n.call(void 0, t.value)) : r(t.value) : 1 === t.state && (E(i) ? r(i.call(void 0, t.value)) : o(t.value))
                            } catch (t) {
                                o(t)
                            }
                        }
                }))
            }, fe.then = function(t, e) {
                var n = this;
                return new de((function(i, r) {
                    n.deferred.push([t, e, i, r]), n.notify()
                }))
            }, fe.catch = function(t) {
                return this.then(void 0, t)
            };
            var Ne = /^\s*<(\w+|!)[^>]*>/,
                Ae = /^<(\w+)\s*\/?>(?:<\/\1>)?$/;

            function De(t) {
                var e = Ae.exec(t);
                if (e) return document.createElement(e[1]);
                var n = document.createElement("div");
                return Ne.test(t) ? n.insertAdjacentHTML("beforeend", t.trim()) : n.textContent = t, n.childNodes.length > 1 ? W(n.childNodes) : n.firstChild
            }

            function Me(t, e) {
                if (M(t))
                    for (e(t), t = t.firstElementChild; t;) {
                        var n = t.nextElementSibling;
                        Me(t, e), t = n
                    }
            }

            function Pe(t, e) {
                return j(t) ? je(t) ? q(De(t)) : Et(t, e) : q(t)
            }

            function Oe(t, e) {
                return j(t) ? je(t) ? W(De(t)) : St(t, e) : W(t)
            }

            function je(t) {
                return "<" === t[0] || t.match(/^\s*</)
            }

            function _e(t) {
                for (var e = [], n = arguments.length - 1; n-- > 0;) e[n] = arguments[n + 1];
                ze(t, e, "add")
            }

            function Le(t) {
                for (var e = [], n = arguments.length - 1; n-- > 0;) e[n] = arguments[n + 1];
                ze(t, e, "remove")
            }

            function He(t, e) {
                st(t, "class", (function(t) {
                    return (t || "").replace(new RegExp("\\b" + e + "\\b", "g"), "")
                }))
            }

            function Be(t) {
                for (var e = [], n = arguments.length - 1; n-- > 0;) e[n] = arguments[n + 1];
                e[0] && Le(t, e[0]), e[1] && _e(t, e[1])
            }

            function Re(t, e) {
                return e && W(t).some((function(t) {
                    return t.classList.contains(e.split(" ")[0])
                }))
            }

            function Fe(t) {
                for (var e = [], n = arguments.length - 1; n-- > 0;) e[n] = arguments[n + 1];
                if (e.length) {
                    var i = j(Q(e = qe(e))) ? [] : e.pop();
                    e = e.filter(Boolean), W(t).forEach((function(t) {
                        for (var n = t.classList, r = 0; r < e.length; r++) We.Force ? n.toggle.apply(n, [e[r]].concat(i)) : n[(B(i) ? !n.contains(e[r]) : i) ? "add" : "remove"](e[r])
                    }))
                }
            }

            function ze(t, e, n) {
                (e = qe(e).filter(Boolean)).length && W(t).forEach((function(t) {
                    var i = t.classList;
                    We.Multiple ? i[n].apply(i, e) : e.forEach((function(t) {
                        return i[n](t)
                    }))
                }))
            }

            function qe(t) {
                return t.reduce((function(t, e) {
                    return t.concat.call(t, j(e) && b(e, " ") ? e.trim().split(" ") : e)
                }), [])
            }
            var We = {
                    get Multiple() {
                        return this.get("_multiple")
                    },
                    get Force() {
                        return this.get("_force")
                    },
                    get: function(t) {
                        if (!i(this, t)) {
                            var e = document.createElement("_").classList;
                            e.add("a", "b"), e.toggle("c", !1), this._multiple = e.contains("b"), this._force = !e.contains("c")
                        }
                        return this[t]
                    }
                },
                Ve = {
                    "animation-iteration-count": !0,
                    "column-count": !0,
                    "fill-opacity": !0,
                    "flex-grow": !0,
                    "flex-shrink": !0,
                    "font-weight": !0,
                    "line-height": !0,
                    opacity: !0,
                    order: !0,
                    orphans: !0,
                    "stroke-dasharray": !0,
                    "stroke-dashoffset": !0,
                    widows: !0,
                    "z-index": !0,
                    zoom: !0
                };

            function Ue(t, e, n) {
                return W(t).map((function(t) {
                    if (j(e)) {
                        if (e = Ke(e), B(n)) return Ye(t, e);
                        n || _(n) ? t.style[e] = L(n) && !Ve[e] ? n + "px" : n : t.style.removeProperty(e)
                    } else {
                        if (T(e)) {
                            var i = Xe(t);
                            return e.reduce((function(t, e) {
                                return t[e] = i[Ke(e)], t
                            }), {})
                        }
                        S(e) && K(e, (function(e, n) {
                            return Ue(t, n, e)
                        }))
                    }
                    return t
                }))[0]
            }

            function Xe(t, e) {
                return (t = q(t)).ownerDocument.defaultView.getComputedStyle(t, e)
            }

            function Ye(t, e, n) {
                return Xe(t, n)[e]
            }
            var Je = {};

            function Ge(t) {
                var e = document.documentElement;
                if (!ct) return Xe(e).getPropertyValue("--uk-" + t);
                if (!(t in Je)) {
                    var n = xe(e, document.createElement("div"));
                    _e(n, "uk-" + t), Je[t] = Ye(n, "content", ":before").replace(/^["'](.*)["']$/, "$1"), Se(n)
                }
                return Je[t]
            }
            var Qe = {};

            function Ke(t) {
                var e = Qe[t];
                return e || (e = Qe[t] = function(t) {
                    t = s(t);
                    var e = document.documentElement.style;
                    if (t in e) return t;
                    for (var n, i = Ze.length; i--;)
                        if ((n = "-" + Ze[i] + "-" + t) in e) return n
                }(t) || t), e
            }
            var Ze = ["webkit", "moz", "ms"];

            function tn(t, e, n, i) {
                return void 0 === n && (n = 400), void 0 === i && (i = "linear"), le.all(W(t).map((function(t) {
                    return new le((function(r, o) {
                        for (var s in e) {
                            var a = Ue(t, s);
                            "" === a && Ue(t, s, a)
                        }
                        var u = setTimeout((function() {
                            return Qt(t, "transitionend")
                        }), n);
                        Gt(t, "transitionend transitioncanceled", (function(e) {
                            var n = e.type;
                            clearTimeout(u), Le(t, "uk-transition"), Ue(t, {
                                transitionProperty: "",
                                transitionDuration: "",
                                transitionTimingFunction: ""
                            }), "transitioncanceled" === n ? o() : r()
                        }), {
                            self: !0
                        }), _e(t, "uk-transition"), Ue(t, G({
                            transitionProperty: Object.keys(e).map(Ke).join(","),
                            transitionDuration: n + "ms",
                            transitionTimingFunction: i
                        }, e))
                    }))
                })))
            }
            var en = {
                start: tn,
                stop: function(t) {
                    return Qt(t, "transitionend"), le.resolve()
                },
                cancel: function(t) {
                    Qt(t, "transitioncanceled")
                },
                inProgress: function(t) {
                    return Re(t, "uk-transition")
                }
            };

            function nn(t, e, n, i, r) {
                var o = arguments;
                return void 0 === n && (n = 200), le.all(W(t).map((function(t) {
                    return new le((function(s, a) {
                        if (Re(t, "uk-cancel-animation")) requestAnimationFrame((function() {
                            return le.resolve().then((function() {
                                return nn.apply(void 0, o).then(s, a)
                            }))
                        }));
                        else {
                            var u = e + " uk-animation-" + (r ? "leave" : "enter");
                            f(e, "uk-animation-") && (i && (u += " uk-transform-origin-" + i), r && (u += " uk-animation-reverse")), l(), Gt(t, "animationend animationcancel", (function(e) {
                                var n = e.type,
                                    i = !1;
                                "animationcancel" === n ? (a(), l()) : (s(), le.resolve().then((function() {
                                    i = !0, l()
                                }))), requestAnimationFrame((function() {
                                    i || (_e(t, "uk-cancel-animation"), requestAnimationFrame((function() {
                                        return Le(t, "uk-cancel-animation")
                                    })))
                                }))
                            }), {
                                self: !0
                            }), Ue(t, "animationDuration", n + "ms"), _e(t, u)
                        }

                        function l() {
                            Ue(t, "animationDuration", ""), He(t, "uk-animation-\\S*")
                        }
                    }))
                })))
            }
            var rn = new RegExp("uk-animation-(enter|leave)"),
                on = { in: function(t, e, n, i) {
                        return nn(t, e, n, i, !1)
                    },
                    out: function(t, e, n, i) {
                        return nn(t, e, n, i, !0)
                    },
                    inProgress: function(t) {
                        return rn.test(st(t, "class"))
                    },
                    cancel: function(t) {
                        Qt(t, "animationcancel")
                    }
                },
                sn = {
                    width: ["x", "left", "right"],
                    height: ["y", "top", "bottom"]
                };

            function an(t, e, n, i, r, o, s, a) {
                n = vn(n), i = vn(i);
                var u = {
                    element: n,
                    target: i
                };
                if (!t || !e) return u;
                var l = ln(t),
                    c = ln(e),
                    h = c;
                if (mn(h, n, l, -1), mn(h, i, c, 1), r = yn(r, l.width, l.height), o = yn(o, c.width, c.height), r.x += o.x, r.y += o.y, h.left += r.x, h.top += r.y, s) {
                    var d = [ln(V(t))];
                    a && d.unshift(ln(a)), K(sn, (function(t, e) {
                        var o = t[0],
                            a = t[1],
                            f = t[2];
                        (!0 === s || b(s, o)) && d.some((function(t) {
                            var s = n[o] === a ? -l[e] : n[o] === f ? l[e] : 0,
                                d = i[o] === a ? c[e] : i[o] === f ? -c[e] : 0;
                            if (h[a] < t[a] || h[a] + l[e] > t[f]) {
                                var p = l[e] / 2,
                                    g = "center" === i[o] ? -c[e] / 2 : 0;
                                return "center" === n[o] && (m(p, g) || m(-p, -g)) || m(s, d)
                            }

                            function m(n, i) {
                                var s = h[a] + n + i - 2 * r[o];
                                if (s >= t[a] && s + l[e] <= t[f]) return h[a] = s, ["element", "target"].forEach((function(t) {
                                    u[t][o] = n ? u[t][o] === sn[e][1] ? sn[e][2] : sn[e][1] : u[t][o]
                                })), !0
                            }
                        }))
                    }))
                }
                return un(t, h), u
            }

            function un(t, e) {
                if (!e) return ln(t);
                var n = un(t),
                    i = Ue(t, "position");
                ["left", "top"].forEach((function(r) {
                    if (r in e) {
                        var o = Ue(t, r);
                        Ue(t, r, e[r] - n[r] + z("absolute" === i && "auto" === o ? cn(t)[r] : o))
                    }
                }))
            }

            function ln(t) {
                if (!t) return {};
                var e, n, i = V(t),
                    r = i.pageYOffset,
                    o = i.pageXOffset;
                if (I(t)) {
                    var s = t.innerHeight,
                        a = t.innerWidth;
                    return {
                        top: r,
                        left: o,
                        height: s,
                        width: a,
                        bottom: r + s,
                        right: o + a
                    }
                }
                Ft(t) || "none" !== Ue(t, "display") || (e = st(t, "style"), n = st(t, "hidden"), st(t, {
                    style: (e || "") + ";display:block !important;",
                    hidden: null
                }));
                var u = (t = q(t)).getBoundingClientRect();
                return B(e) || st(t, {
                    style: e,
                    hidden: n
                }), {
                    height: u.height,
                    width: u.width,
                    top: u.top + r,
                    left: u.left + o,
                    bottom: u.bottom + r,
                    right: u.right + o
                }
            }

            function cn(t, e) {
                e = e || q(t).offsetParent || V(t).document.documentElement;
                var n = un(t),
                    i = un(e);
                return {
                    top: n.top - i.top - z(Ue(e, "borderTopWidth")),
                    left: n.left - i.left - z(Ue(e, "borderLeftWidth"))
                }
            }

            function hn(t) {
                var e = [0, 0];
                t = q(t);
                do {
                    if (e[0] += t.offsetTop, e[1] += t.offsetLeft, "fixed" === Ue(t, "position")) {
                        var n = V(t);
                        return e[0] += n.pageYOffset, e[1] += n.pageXOffset, e
                    }
                } while (t = t.offsetParent);
                return e
            }
            var dn = pn("height"),
                fn = pn("width");

            function pn(t) {
                var e = c(t);
                return function(n, i) {
                    if (B(i)) {
                        if (I(n)) return n["inner" + e];
                        if (N(n)) {
                            var r = n.documentElement;
                            return Math.max(r["offset" + e], r["scroll" + e])
                        }
                        return (i = "auto" === (i = Ue(n = q(n), t)) ? n["offset" + e] : z(i) || 0) - gn(n, t)
                    }
                    Ue(n, t, i || 0 === i ? +i + gn(n, t) + "px" : "")
                }
            }

            function gn(t, e, n) {
                return void 0 === n && (n = "border-box"), Ue(t, "boxSizing") === n ? sn[e].slice(1).map(c).reduce((function(e, n) {
                    return e + z(Ue(t, "padding" + n)) + z(Ue(t, "border" + n + "Width"))
                }), 0) : 0
            }

            function mn(t, e, n, i) {
                K(sn, (function(r, o) {
                    var s = r[0],
                        a = r[1],
                        u = r[2];
                    e[s] === u ? t[a] += n[o] * i : "center" === e[s] && (t[a] += n[o] * i / 2)
                }))
            }

            function vn(t) {
                var e = /left|center|right/,
                    n = /top|center|bottom/;
                return 1 === (t = (t || "").split(" ")).length && (t = e.test(t[0]) ? t.concat("center") : n.test(t[0]) ? ["center"].concat(t) : ["center", "center"]), {
                    x: e.test(t[0]) ? t[0] : "center",
                    y: n.test(t[1]) ? t[1] : "center"
                }
            }

            function yn(t, e, n) {
                var i = (t || "").split(" "),
                    r = i[0],
                    o = i[1];
                return {
                    x: r ? z(r) * (g(r, "%") ? e / 100 : 1) : 0,
                    y: o ? z(o) * (g(o, "%") ? n / 100 : 1) : 0
                }
            }

            function wn(t) {
                switch (t) {
                    case "left":
                        return "right";
                    case "right":
                        return "left";
                    case "top":
                        return "bottom";
                    case "bottom":
                        return "top";
                    default:
                        return t
                }
            }

            function bn(t, e, n) {
                return void 0 === e && (e = "width"), void 0 === n && (n = window), L(t) ? +t : g(t, "vh") ? xn(dn(V(n)), t) : g(t, "vw") ? xn(fn(V(n)), t) : g(t, "%") ? xn(ln(n)[e], t) : z(t)
            }

            function xn(t, e) {
                return t * z(e) / 100
            }
            var kn = {
                reads: [],
                writes: [],
                read: function(t) {
                    return this.reads.push(t), En(), t
                },
                write: function(t) {
                    return this.writes.push(t), En(), t
                },
                clear: function(t) {
                    return Cn(this.reads, t) || Cn(this.writes, t)
                },
                flush: Tn
            };

            function Tn(t) {
                void 0 === t && (t = 1), Sn(kn.reads), Sn(kn.writes.splice(0, kn.writes.length)), kn.scheduled = !1, (kn.reads.length || kn.writes.length) && En(t + 1)
            }

            function En(t) {
                if (!kn.scheduled) {
                    if (kn.scheduled = !0, t > 5) throw new Error("Maximum recursion limit reached.");
                    t ? le.resolve().then((function() {
                        return Tn(t)
                    })) : requestAnimationFrame((function() {
                        return Tn()
                    }))
                }
            }

            function Sn(t) {
                for (var e; e = t.shift();) e()
            }

            function Cn(t, e) {
                var n = t.indexOf(e);
                return !!~n && !!t.splice(n, 1)
            }

            function $n() {}
            $n.prototype = {
                positions: [],
                init: function() {
                    var t, e = this;
                    this.positions = [], this.unbind = Yt(document, "mousemove", (function(e) {
                        return t = ue(e)
                    })), this.interval = setInterval((function() {
                        t && (e.positions.push(t), e.positions.length > 5 && e.positions.shift())
                    }), 50)
                },
                cancel: function() {
                    this.unbind && this.unbind(), this.interval && clearInterval(this.interval)
                },
                movesTo: function(t) {
                    if (this.positions.length < 2) return !1;
                    var e = t.getBoundingClientRect(),
                        n = e.left,
                        i = e.right,
                        r = e.top,
                        o = e.bottom,
                        s = this.positions[0],
                        a = Q(this.positions),
                        u = [s, a];
                    return !rt(a, e) && [
                        [{
                            x: n,
                            y: r
                        }, {
                            x: i,
                            y: o
                        }],
                        [{
                            x: n,
                            y: o
                        }, {
                            x: i,
                            y: r
                        }]
                    ].some((function(t) {
                        var n = function(t, e) {
                            var n = t[0],
                                i = n.x,
                                r = n.y,
                                o = t[1],
                                s = o.x,
                                a = o.y,
                                u = e[0],
                                l = u.x,
                                c = u.y,
                                h = e[1],
                                d = h.x,
                                f = h.y,
                                p = (f - c) * (s - i) - (d - l) * (a - r);
                            if (0 === p) return !1;
                            var g = ((d - l) * (r - c) - (f - c) * (i - l)) / p;
                            return !(g < 0) && {
                                x: i + g * (s - i),
                                y: r + g * (a - r)
                            }
                        }(u, t);
                        return n && rt(n, e)
                    }))
                }
            };
            var In = {};

            function Nn(t, e, n) {
                return In.computed(E(t) ? t.call(n, n) : t, E(e) ? e.call(n, n) : e)
            }

            function An(t, e) {
                return t = t && !T(t) ? [t] : t, e ? t ? t.concat(e) : T(e) ? e : [e] : t
            }

            function Dn(t, e) {
                return B(e) ? t : e
            }

            function Mn(t, e, n) {
                var r = {};
                if (E(e) && (e = e.options), e.extends && (t = Mn(t, e.extends, n)), e.mixins)
                    for (var o = 0, s = e.mixins.length; o < s; o++) t = Mn(t, e.mixins[o], n);
                for (var a in t) l(a);
                for (var u in e) i(t, u) || l(u);

                function l(i) {
                    r[i] = (In[i] || Dn)(t[i], e[i], n)
                }
                return r
            }

            function Pn(t, e) {
                var n;
                void 0 === e && (e = []);
                try {
                    return t ? f(t, "{") ? JSON.parse(t) : e.length && !b(t, ":") ? ((n = {})[e[0]] = t, n) : t.split(";").reduce((function(t, e) {
                        var n = e.split(/:(.*)/),
                            i = n[0],
                            r = n[1];
                        return i && !B(r) && (t[i.trim()] = r.trim()), t
                    }), {}) : {}
                } catch (t) {
                    return {}
                }
            }
            In.events = In.created = In.beforeConnect = In.connected = In.beforeDisconnect = In.disconnected = In.destroy = An, In.args = function(t, e) {
                return !1 !== e && An(e || t)
            }, In.update = function(t, e) {
                return Z(An(t, E(e) ? {
                    read: e
                } : e), "order")
            }, In.props = function(t, e) {
                return T(e) && (e = e.reduce((function(t, e) {
                    return t[e] = String, t
                }), {})), In.methods(t, e)
            }, In.computed = In.methods = function(t, e) {
                return e ? t ? G({}, t, e) : e : t
            }, In.data = function(t, e, n) {
                return n ? Nn(t, e, n) : e ? t ? function(n) {
                    return Nn(t, e, n)
                } : e : t
            };
            var On = 0,
                jn = function(t) {
                    this.id = ++On, this.el = q(t)
                };

            function _n(t, e) {
                try {
                    t.contentWindow.postMessage(JSON.stringify(G({
                        event: "command"
                    }, e)), "*")
                } catch (t) {}
            }

            function Ln(t, e, n) {
                if (void 0 === e && (e = 0), void 0 === n && (n = 0), !Ft(t)) return !1;
                for (var i = qn(t).concat(t), r = 0; r < i.length - 1; r++) {
                    var o = un(zn(i[r])),
                        s = {
                            top: o.top - e,
                            left: o.left - n,
                            bottom: o.bottom + e,
                            right: o.right + n
                        },
                        a = un(i[r + 1]);
                    if (!it(a, s) && !rt({
                            x: a.left,
                            y: a.top
                        }, s)) return !1
                }
                return !0
            }

            function Hn(t, e) {
                (t = I(t) || N(t) ? Wn(t) : q(t)).scrollTop = e
            }

            function Bn(t, e) {
                void 0 === e && (e = {});
                var n = e.offset;
                if (void 0 === n && (n = 0), Ft(t)) {
                    for (var i = qn(t).concat(t), r = le.resolve(), o = function(t) {
                            r = r.then((function() {
                                return new le((function(e) {
                                    var r, o = i[t],
                                        s = i[t + 1],
                                        a = o.scrollTop,
                                        u = Math.ceil(cn(s, zn(o)).top - n),
                                        l = (r = Math.abs(u), 40 * Math.pow(r, .375)),
                                        c = Date.now(),
                                        h = function() {
                                            var t, n = (t = et((Date.now() - c) / l), .5 * (1 - Math.cos(Math.PI * t)));
                                            Hn(o, a + u * n), 1 !== n ? requestAnimationFrame(h) : e()
                                        };
                                    h()
                                }))
                            }))
                        }, s = 0; s < i.length - 1; s++) o(s);
                    return r
                }
            }

            function Rn(t, e) {
                if (void 0 === e && (e = 0), !Ft(t)) return 0;
                var n = Q(Fn(t)),
                    i = n.scrollHeight,
                    r = n.scrollTop,
                    o = un(zn(n)).height,
                    s = hn(t)[0] - r - hn(n)[0],
                    a = Math.min(o, s + r);
                return et(-1 * (s - a) / Math.min(un(t).height + e + a, i - (s + r), i - o))
            }

            function Fn(t, e) {
                void 0 === e && (e = /auto|scroll/);
                var n = Wn(t),
                    i = Ut(t).filter((function(t) {
                        return t === n || e.test(Ue(t, "overflow")) && t.scrollHeight > Math.round(un(t).height)
                    })).reverse();
                return i.length ? i : [n]
            }

            function zn(t) {
                return t === Wn(t) ? window : t
            }

            function qn(t) {
                return Fn(t, /auto|scroll|hidden/)
            }

            function Wn(t) {
                var e = V(t).document;
                return e.scrollingElement || e.documentElement
            }
            jn.prototype.isVideo = function() {
                return this.isYoutube() || this.isVimeo() || this.isHTML5()
            }, jn.prototype.isHTML5 = function() {
                return "VIDEO" === this.el.tagName
            }, jn.prototype.isIFrame = function() {
                return "IFRAME" === this.el.tagName
            }, jn.prototype.isYoutube = function() {
                return this.isIFrame() && !!this.el.src.match(/\/\/.*?youtube(-nocookie)?\.[a-z]+\/(watch\?v=[^&\s]+|embed)|youtu\.be\/.*/)
            }, jn.prototype.isVimeo = function() {
                return this.isIFrame() && !!this.el.src.match(/vimeo\.com\/video\/.*/)
            }, jn.prototype.enableApi = function() {
                var t = this;
                if (this.ready) return this.ready;
                var e, n = this.isYoutube(),
                    i = this.isVimeo();
                return n || i ? this.ready = new le((function(r) {
                    var o;
                    Gt(t.el, "load", (function() {
                        if (n) {
                            var i = function() {
                                return _n(t.el, {
                                    event: "listening",
                                    id: t.id
                                })
                            };
                            e = setInterval(i, 100), i()
                        }
                    })), (o = function(e) {
                        return n && e.id === t.id && "onReady" === e.event || i && Number(e.player_id) === t.id
                    }, new le((function(t) {
                        return Gt(window, "message", (function(e, n) {
                            return t(n)
                        }), !1, (function(t) {
                            var e = t.data;
                            if (e && j(e)) {
                                try {
                                    e = JSON.parse(e)
                                } catch (t) {
                                    return
                                }
                                return e && o(e)
                            }
                        }))
                    }))).then((function() {
                        r(), e && clearInterval(e)
                    })), st(t.el, "src", t.el.src + (b(t.el.src, "?") ? "&" : "?") + (n ? "enablejsapi=1" : "api=1&player_id=" + t.id))
                })) : le.resolve()
            }, jn.prototype.play = function() {
                var t = this;
                if (this.isVideo())
                    if (this.isIFrame()) this.enableApi().then((function() {
                        return _n(t.el, {
                            func: "playVideo",
                            method: "play"
                        })
                    }));
                    else if (this.isHTML5()) try {
                    var e = this.el.play();
                    e && e.catch(nt)
                } catch (t) {}
            }, jn.prototype.pause = function() {
                var t = this;
                this.isVideo() && (this.isIFrame() ? this.enableApi().then((function() {
                    return _n(t.el, {
                        func: "pauseVideo",
                        method: "pause"
                    })
                })) : this.isHTML5() && this.el.pause())
            }, jn.prototype.mute = function() {
                var t = this;
                this.isVideo() && (this.isIFrame() ? this.enableApi().then((function() {
                    return _n(t.el, {
                        func: "mute",
                        method: "setVolume",
                        value: 0
                    })
                })) : this.isHTML5() && (this.el.muted = !0, st(this.el, "muted", "")))
            };
            var Vn = "IntersectionObserver" in window ? window.IntersectionObserver : function() {
                function t(t, e) {
                    var n = this;
                    void 0 === e && (e = {});
                    var i = e.rootMargin;
                    void 0 === i && (i = "0 0"), this.targets = [];
                    var r, o = (i || "0 0").split(" ").map(z),
                        s = o[0],
                        a = o[1];
                    this.offsetTop = s, this.offsetLeft = a, this.apply = function() {
                        r || (r = requestAnimationFrame((function() {
                            return setTimeout((function() {
                                var e = n.takeRecords();
                                e.length && t(e, n), r = !1
                            }))
                        })))
                    }, this.off = Yt(window, "scroll resize load", this.apply, {
                        passive: !0,
                        capture: !0
                    })
                }
                return t.prototype.takeRecords = function() {
                    var t = this;
                    return this.targets.filter((function(e) {
                        var n = Ln(e.target, t.offsetTop, t.offsetLeft);
                        if (null === e.isIntersecting || n ^ e.isIntersecting) return e.isIntersecting = n, !0
                    }))
                }, t.prototype.observe = function(t) {
                    this.targets.push({
                        target: t,
                        isIntersecting: null
                    }), this.apply()
                }, t.prototype.disconnect = function() {
                    this.targets = [], this.off()
                }, t
            }();

            function Un(t) {
                return !(!f(t, "uk-") && !f(t, "data-uk-")) && u(t.replace("data-uk-", "").replace("uk-", ""))
            }
            var Xn = function(t) {
                this._init(t)
            };
            Xn.util = Object.freeze({
                    __proto__: null,
                    ajax: pe,
                    getImage: ge,
                    transition: tn,
                    Transition: en,
                    animate: nn,
                    Animation: on,
                    attr: st,
                    hasAttr: at,
                    removeAttr: ut,
                    data: lt,
                    addClass: _e,
                    removeClass: Le,
                    removeClasses: He,
                    replaceClass: Be,
                    hasClass: Re,
                    toggleClass: Fe,
                    positionAt: an,
                    offset: un,
                    position: cn,
                    offsetPosition: hn,
                    height: dn,
                    width: fn,
                    boxModelAdjust: gn,
                    flipPosition: wn,
                    toPx: bn,
                    ready: me,
                    index: ve,
                    getIndex: ye,
                    empty: we,
                    html: be,
                    prepend: function(t, e) {
                        return (t = Pe(t)).hasChildNodes() ? Ee(e, (function(e) {
                            return t.insertBefore(e, t.firstChild)
                        })) : xe(t, e)
                    },
                    append: xe,
                    before: ke,
                    after: Te,
                    remove: Se,
                    wrapAll: Ce,
                    wrapInner: $e,
                    unwrap: Ie,
                    fragment: De,
                    apply: Me,
                    $: Pe,
                    $$: Oe,
                    isIE: ct,
                    isRtl: ht,
                    hasTouch: pt,
                    pointerDown: gt,
                    pointerMove: mt,
                    pointerUp: vt,
                    pointerEnter: yt,
                    pointerLeave: wt,
                    pointerCancel: bt,
                    on: Yt,
                    off: Jt,
                    once: Gt,
                    trigger: Qt,
                    createEvent: Kt,
                    toEventTargets: se,
                    isTouch: ae,
                    getEventPos: ue,
                    fastdom: kn,
                    isVoidElement: Rt,
                    isVisible: Ft,
                    selInput: zt,
                    isInput: qt,
                    filter: Wt,
                    within: Vt,
                    parents: Ut,
                    children: Xt,
                    hasOwn: i,
                    hyphenate: s,
                    camelize: u,
                    ucfirst: c,
                    startsWith: f,
                    endsWith: g,
                    includes: b,
                    findIndex: k,
                    isArray: T,
                    isFunction: E,
                    isObject: S,
                    isPlainObject: $,
                    isWindow: I,
                    isDocument: N,
                    isJQuery: A,
                    isNode: D,
                    isElement: M,
                    isNodeCollection: P,
                    isBoolean: O,
                    isString: j,
                    isNumber: _,
                    isNumeric: L,
                    isEmpty: H,
                    isUndefined: B,
                    toBoolean: R,
                    toNumber: F,
                    toFloat: z,
                    toNode: q,
                    toNodes: W,
                    toWindow: V,
                    toList: U,
                    toMs: X,
                    isEqual: Y,
                    swap: J,
                    assign: G,
                    last: Q,
                    each: K,
                    sortBy: Z,
                    uniqueBy: tt,
                    clamp: et,
                    noop: nt,
                    intersectRect: it,
                    pointInRect: rt,
                    Dimensions: ot,
                    MouseTracker: $n,
                    mergeOptions: Mn,
                    parseOptions: Pn,
                    Player: jn,
                    Promise: le,
                    Deferred: ce,
                    IntersectionObserver: Vn,
                    query: xt,
                    queryAll: kt,
                    find: Et,
                    findAll: St,
                    matches: Pt,
                    closest: jt,
                    parent: _t,
                    escape: Ht,
                    css: Ue,
                    getStyles: Xe,
                    getStyle: Ye,
                    getCssVar: Ge,
                    propName: Ke,
                    isInView: Ln,
                    scrollTop: Hn,
                    scrollIntoView: Bn,
                    scrolledOver: Rn,
                    scrollParents: Fn,
                    getViewport: zn
                }), Xn.data = "__uikit__", Xn.prefix = "uk-", Xn.options = {}, Xn.version = "3.4.3",
                function(t) {
                    var e, n = t.data;

                    function i(t, e) {
                        if (t)
                            for (var n in t) t[n]._connected && t[n]._callUpdate(e)
                    }
                    t.use = function(t) {
                        if (!t.installed) return t.call(null, this), t.installed = !0, this
                    }, t.mixin = function(e, n) {
                        (n = (j(n) ? t.component(n) : n) || this).options = Mn(n.options, e)
                    }, t.extend = function(t) {
                        t = t || {};
                        var e = function(t) {
                            this._init(t)
                        };
                        return (e.prototype = Object.create(this.prototype)).constructor = e, e.options = Mn(this.options, t), e.super = this, e.extend = this.extend, e
                    }, t.update = function(t, e) {
                        Ut(t = t ? q(t) : document.body).reverse().forEach((function(t) {
                            return i(t[n], e)
                        })), Me(t, (function(t) {
                            return i(t[n], e)
                        }))
                    }, Object.defineProperty(t, "container", {
                        get: function() {
                            return e || document.body
                        },
                        set: function(t) {
                            e = Pe(t)
                        }
                    })
                }(Xn),
                function(t) {
                    t.prototype._callHook = function(t) {
                        var e = this,
                            n = this.$options[t];
                        n && n.forEach((function(t) {
                            return t.call(e)
                        }))
                    }, t.prototype._callConnected = function() {
                        this._connected || (this._data = {}, this._computeds = {}, this._frames = {
                            reads: {},
                            writes: {}
                        }, this._initProps(), this._callHook("beforeConnect"), this._connected = !0, this._initEvents(), this._initObserver(), this._callHook("connected"), this._callUpdate())
                    }, t.prototype._callDisconnected = function() {
                        this._connected && (this._callHook("beforeDisconnect"), this._observer && (this._observer.disconnect(), this._observer = null), this._unbindEvents(), this._callHook("disconnected"), this._connected = !1)
                    }, t.prototype._callUpdate = function(t) {
                        var e = this;
                        void 0 === t && (t = "update");
                        var n = t.type || t;
                        b(["update", "resize"], n) && this._callWatches();
                        var i = this.$options.update,
                            r = this._frames,
                            o = r.reads,
                            s = r.writes;
                        i && i.forEach((function(t, i) {
                            var r = t.read,
                                a = t.write,
                                u = t.events;
                            ("update" === n || b(u, n)) && (r && !b(kn.reads, o[i]) && (o[i] = kn.read((function() {
                                var t = e._connected && r.call(e, e._data, n);
                                !1 === t && a ? kn.clear(s[i]) : $(t) && G(e._data, t)
                            }))), a && !b(kn.writes, s[i]) && (s[i] = kn.write((function() {
                                return e._connected && a.call(e, e._data, n)
                            }))))
                        }))
                    }, t.prototype._callWatches = function() {
                        var t = this,
                            e = this._frames;
                        if (!e.watch) {
                            var n = !i(e, "watch");
                            e.watch = kn.read((function() {
                                if (t._connected) {
                                    var r = t,
                                        o = r.$options.computed,
                                        s = r._computeds;
                                    for (var a in o) {
                                        var u = i(s, a),
                                            l = s[a];
                                        delete s[a];
                                        var c = o[a],
                                            h = c.watch,
                                            d = c.immediate;
                                        h && (n && d || u && !Y(l, t[a])) && h.call(t, t[a], l)
                                    }
                                    e.watch = null
                                }
                            }))
                        }
                    }
                }(Xn),
                function(t) {
                    var e = 0;

                    function n(t, e) {
                        var n = {},
                            i = t.args;
                        void 0 === i && (i = []);
                        var r = t.props;
                        void 0 === r && (r = {});
                        var o = t.el;
                        if (!r) return n;
                        for (var a in r) {
                            var c = s(a),
                                h = lt(o, c);
                            B(h) || (h = r[a] === Boolean && "" === h || l(r[a], h), ("target" !== c || h && !f(h, "_")) && (n[a] = h))
                        }
                        var d = Pn(lt(o, e), i);
                        for (var p in d) {
                            var g = u(p);
                            void 0 !== r[g] && (n[g] = l(r[g], d[p]))
                        }
                        return n
                    }

                    function r(t, e, n) {
                        Object.defineProperty(t, e, {
                            enumerable: !0,
                            get: function() {
                                var r = t._computeds,
                                    o = t.$props,
                                    s = t.$el;
                                return i(r, e) || (r[e] = (n.get || n).call(t, o, s)), r[e]
                            },
                            set: function(i) {
                                var r = t._computeds;
                                r[e] = n.set ? n.set.call(t, i) : i, B(r[e]) && delete r[e]
                            }
                        })
                    }

                    function o(t, e, n) {
                        $(e) || (e = {
                            name: n,
                            handler: e
                        });
                        var i = e.name,
                            r = e.el,
                            s = e.handler,
                            a = e.capture,
                            u = e.passive,
                            l = e.delegate,
                            c = e.filter,
                            h = e.self;
                        r = E(r) ? r.call(t) : r || t.$el, T(r) ? r.forEach((function(i) {
                            return o(t, G({}, e, {
                                el: i
                            }), n)
                        })) : !r || c && !c.call(t) || t._events.push(Yt(r, i, l ? j(l) ? l : l.call(t) : null, j(s) ? t[s] : s.bind(t), {
                            passive: u,
                            capture: a,
                            self: h
                        }))
                    }

                    function a(t, e) {
                        return t.every((function(t) {
                            return !t || !i(t, e)
                        }))
                    }

                    function l(t, e) {
                        return t === Boolean ? R(e) : t === Number ? F(e) : "list" === t ? U(e) : t ? t(e) : e
                    }
                    t.prototype._init = function(t) {
                        (t = t || {}).data = function(t, e) {
                            var n = t.data,
                                i = (t.el, e.args),
                                r = e.props;
                            if (void 0 === r && (r = {}), n = T(n) ? H(i) ? void 0 : n.slice(0, i.length).reduce((function(t, e, n) {
                                    return $(e) ? G(t, e) : t[i[n]] = e, t
                                }), {}) : n)
                                for (var o in n) B(n[o]) ? delete n[o] : n[o] = r[o] ? l(r[o], n[o]) : n[o];
                            return n
                        }(t, this.constructor.options), this.$options = Mn(this.constructor.options, t, this), this.$el = null, this.$props = {}, this._uid = e++, this._initData(), this._initMethods(), this._initComputeds(), this._callHook("created"), t.el && this.$mount(t.el)
                    }, t.prototype._initData = function() {
                        var t = this.$options.data;
                        for (var e in void 0 === t && (t = {}), t) this.$props[e] = this[e] = t[e]
                    }, t.prototype._initMethods = function() {
                        var t = this.$options.methods;
                        if (t)
                            for (var e in t) this[e] = t[e].bind(this)
                    }, t.prototype._initComputeds = function() {
                        var t = this.$options.computed;
                        if (this._computeds = {}, t)
                            for (var e in t) r(this, e, t[e])
                    }, t.prototype._initProps = function(t) {
                        var e;
                        for (e in t = t || n(this.$options, this.$name)) B(t[e]) || (this.$props[e] = t[e]);
                        var i = [this.$options.computed, this.$options.methods];
                        for (e in this.$props) e in t && a(i, e) && (this[e] = this.$props[e])
                    }, t.prototype._initEvents = function() {
                        var t = this;
                        this._events = [];
                        var e = this.$options.events;
                        e && e.forEach((function(e) {
                            if (i(e, "handler")) o(t, e);
                            else
                                for (var n in e) o(t, e[n], n)
                        }))
                    }, t.prototype._unbindEvents = function() {
                        this._events.forEach((function(t) {
                            return t()
                        })), delete this._events
                    }, t.prototype._initObserver = function() {
                        var t = this,
                            e = this.$options,
                            i = e.attrs,
                            r = e.props,
                            o = e.el;
                        if (!this._observer && r && !1 !== i) {
                            i = T(i) ? i : Object.keys(r), this._observer = new MutationObserver((function(e) {
                                var r = n(t.$options, t.$name);
                                e.some((function(e) {
                                    var n = e.attributeName.replace("data-", "");
                                    return (n === t.$name ? i : [u(n)]).some((function(e) {
                                        return !B(r[e]) && r[e] !== t.$props[e]
                                    }))
                                })) && t.$reset()
                            }));
                            var a = i.map((function(t) {
                                return s(t)
                            })).concat(this.$name);
                            this._observer.observe(o, {
                                attributes: !0,
                                attributeFilter: a.concat(a.map((function(t) {
                                    return "data-" + t
                                })))
                            })
                        }
                    }
                }(Xn),
                function(t) {
                    var e = t.data,
                        n = {};
                    t.component = function(e, i) {
                        var r = s(e);
                        if (e = u(r), !i) return $(n[e]) && (n[e] = t.extend(n[e])), n[e];
                        t[e] = function(n, i) {
                            for (var r = arguments.length, o = Array(r); r--;) o[r] = arguments[r];
                            var s = t.component(e);
                            return s.options.functional ? new s({
                                data: $(n) ? n : [].concat(o)
                            }) : n ? Oe(n).map(a)[0] : a(n);

                            function a(n) {
                                var r = t.getComponent(n, e);
                                if (r) {
                                    if (!i) return r;
                                    r.$destroy()
                                }
                                return new s({
                                    el: n,
                                    data: i
                                })
                            }
                        };
                        var o = $(i) ? G({}, i) : i.options;
                        return o.name = e, o.install && o.install(t, o, e), t._initialized && !o.functional && kn.read((function() {
                            return t[e]("[uk-" + r + "],[data-uk-" + r + "]")
                        })), n[e] = $(i) ? o : i
                    }, t.getComponents = function(t) {
                        return t && t[e] || {}
                    }, t.getComponent = function(e, n) {
                        return t.getComponents(e)[n]
                    }, t.connect = function(i) {
                        if (i[e])
                            for (var r in i[e]) i[e][r]._callConnected();
                        for (var o = 0; o < i.attributes.length; o++) {
                            var s = Un(i.attributes[o].name);
                            s && s in n && t[s](i)
                        }
                    }, t.disconnect = function(t) {
                        for (var n in t[e]) t[e][n]._callDisconnected()
                    }
                }(Xn),
                function(t) {
                    var e = t.data;
                    t.prototype.$create = function(e, n, i) {
                        return t[e](n, i)
                    }, t.prototype.$mount = function(t) {
                        var n = this.$options.name;
                        t[e] || (t[e] = {}), t[e][n] || (t[e][n] = this, this.$el = this.$options.el = this.$options.el || t, Vt(t, document) && this._callConnected())
                    }, t.prototype.$reset = function() {
                        this._callDisconnected(), this._callConnected()
                    }, t.prototype.$destroy = function(t) {
                        void 0 === t && (t = !1);
                        var n = this.$options,
                            i = n.el,
                            r = n.name;
                        i && this._callDisconnected(), this._callHook("destroy"), i && i[e] && (delete i[e][r], H(i[e]) || delete i[e], t && Se(this.$el))
                    }, t.prototype.$emit = function(t) {
                        this._callUpdate(t)
                    }, t.prototype.$update = function(e, n) {
                        void 0 === e && (e = this.$el), t.update(e, n)
                    }, t.prototype.$getComponent = t.getComponent;
                    var n = {};
                    Object.defineProperties(t.prototype, {
                        $container: Object.getOwnPropertyDescriptor(t, "container"),
                        $name: {
                            get: function() {
                                var e = this.$options.name;
                                return n[e] || (n[e] = t.prefix + s(e)), n[e]
                            }
                        }
                    })
                }(Xn);
            var Yn = {
                    connected: function() {
                        !Re(this.$el, this.$name) && _e(this.$el, this.$name)
                    }
                },
                Jn = {
                    props: {
                        cls: Boolean,
                        animation: "list",
                        duration: Number,
                        origin: String,
                        transition: String,
                        queued: Boolean
                    },
                    data: {
                        cls: !1,
                        animation: [!1],
                        duration: 200,
                        origin: !1,
                        transition: "linear",
                        queued: !1,
                        initProps: {
                            overflow: "",
                            height: "",
                            paddingTop: "",
                            paddingBottom: "",
                            marginTop: "",
                            marginBottom: ""
                        },
                        hideProps: {
                            overflow: "hidden",
                            height: 0,
                            paddingTop: 0,
                            paddingBottom: 0,
                            marginTop: 0,
                            marginBottom: 0
                        }
                    },
                    computed: {
                        hasAnimation: function(t) {
                            return !!t.animation[0]
                        },
                        hasTransition: function(t) {
                            var e = t.animation;
                            return this.hasAnimation && !0 === e[0]
                        }
                    },
                    methods: {
                        toggleElement: function(t, e, n) {
                            var i = this;
                            return new le((function(r) {
                                t = W(t);
                                var o, s = function(t) {
                                    return le.all(t.map((function(t) {
                                        return i._toggleElement(t, e, n)
                                    })))
                                };
                                if (!i.queued || !B(e) || !i.hasAnimation || t.length < 2) o = s(t);
                                else {
                                    var a = t.filter((function(t) {
                                            return i.isToggled(t)
                                        })),
                                        u = t.filter((function(t) {
                                            return !b(a, t)
                                        })),
                                        l = document.body,
                                        c = l.scrollTop,
                                        h = a[0],
                                        d = on.inProgress(h) && Re(h, "uk-animation-leave") || en.inProgress(h) && "0px" === h.style.height;
                                    o = s(a), d || (o = o.then((function() {
                                        var t = s(u);
                                        return l.scrollTop = c, t
                                    })))
                                }
                                o.then(r, nt)
                            }))
                        },
                        isToggled: function(t) {
                            var e = W(t || this.$el);
                            return this.cls ? Re(e, this.cls.split(" ")[0]) : !at(e, "hidden")
                        },
                        updateAria: function(t) {
                            !1 === this.cls && st(t, "aria-hidden", !this.isToggled(t))
                        },
                        _toggleElement: function(t, e, n) {
                            var i = this;
                            if (e = O(e) ? e : on.inProgress(t) ? Re(t, "uk-animation-leave") : en.inProgress(t) ? "0px" === t.style.height : !this.isToggled(t), !Qt(t, "before" + (e ? "show" : "hide"), [this])) return le.reject();
                            var r, o = (E(n) ? n : !1 !== n && this.hasAnimation ? this.hasTransition ? Gn(this) : (r = this, function(t, e) {
                                on.cancel(t);
                                var n = r.animation,
                                    i = r.duration,
                                    o = r._toggle;
                                return e ? (o(t, !0), on.in(t, n[0], i, r.origin)) : on.out(t, n[1] || n[0], i, r.origin).then((function() {
                                    return o(t, !1)
                                }))
                            }) : this._toggle)(t, e);
                            Qt(t, e ? "show" : "hide", [this]);
                            var s = function() {
                                Qt(t, e ? "shown" : "hidden", [i]), i.$update(t)
                            };
                            return o ? o.then(s) : le.resolve(s())
                        },
                        _toggle: function(t, e) {
                            var n;
                            t && (e = Boolean(e), this.cls ? (n = b(this.cls, " ") || e !== Re(t, this.cls)) && Fe(t, this.cls, b(this.cls, " ") ? void 0 : e) : (n = e === at(t, "hidden")) && st(t, "hidden", e ? null : ""), Oe("[autofocus]", t).some((function(t) {
                                return Ft(t) ? t.focus() || !0 : t.blur()
                            })), this.updateAria(t), n && (Qt(t, "toggled", [this]), this.$update(t)))
                        }
                    }
                };

            function Gn(t) {
                var e = t.isToggled,
                    n = t.duration,
                    i = t.initProps,
                    r = t.hideProps,
                    o = t.transition,
                    s = t._toggle;
                return function(t, a) {
                    var u = en.inProgress(t),
                        l = t.hasChildNodes ? z(Ue(t.firstElementChild, "marginTop")) + z(Ue(t.lastElementChild, "marginBottom")) : 0,
                        c = Ft(t) ? dn(t) + (u ? 0 : l) : 0;
                    en.cancel(t), e(t) || s(t, !0), dn(t, ""), kn.flush();
                    var h = dn(t) + (u ? 0 : l);
                    return dn(t, c), (a ? en.start(t, G({}, i, {
                        overflow: "hidden",
                        height: h
                    }), Math.round(n * (1 - c / h)), o) : en.start(t, r, Math.round(n * (c / h)), o).then((function() {
                        return s(t, !1)
                    }))).then((function() {
                        return Ue(t, i)
                    }))
                }
            }
            var Qn = {
                mixins: [Yn, Jn],
                props: {
                    targets: String,
                    active: null,
                    collapsible: Boolean,
                    multiple: Boolean,
                    toggle: String,
                    content: String,
                    transition: String,
                    offset: Number
                },
                data: {
                    targets: "> *",
                    active: !1,
                    animation: [!0],
                    collapsible: !0,
                    multiple: !1,
                    clsOpen: "uk-open",
                    toggle: "> .uk-accordion-title",
                    content: "> .uk-accordion-content",
                    transition: "ease",
                    offset: 0
                },
                computed: {
                    items: {
                        get: function(t, e) {
                            return Oe(t.targets, e)
                        },
                        watch: function(t, e) {
                            var n = this;
                            if (t.forEach((function(t) {
                                    return Kn(Pe(n.content, t), !Re(t, n.clsOpen))
                                })), !e && !Re(t, this.clsOpen)) {
                                var i = !1 !== this.active && t[Number(this.active)] || !this.collapsible && t[0];
                                i && this.toggle(i, !1)
                            }
                        },
                        immediate: !0
                    }
                },
                events: [{
                    name: "click",
                    delegate: function() {
                        return this.targets + " " + this.$props.toggle
                    },
                    handler: function(t) {
                        t.preventDefault(), this.toggle(ve(Oe(this.targets + " " + this.$props.toggle, this.$el), t.current))
                    }
                }],
                methods: {
                    toggle: function(t, e) {
                        var n = this,
                            i = [this.items[ye(t, this.items)]],
                            r = Wt(this.items, "." + this.clsOpen);
                        this.multiple || b(r, i[0]) || (i = i.concat(r)), (this.collapsible || Wt(i, ":not(." + this.clsOpen + ")").length) && i.forEach((function(t) {
                            return n.toggleElement(t, !Re(t, n.clsOpen), (function(t, i) {
                                Fe(t, n.clsOpen, i);
                                var r = Pe((t._wrapper ? "> * " : "") + n.content, t);
                                if (!1 !== e && n.hasTransition) return t._wrapper || (t._wrapper = Ce(r, "<div" + (i ? " hidden" : "") + ">")), Kn(r, !1), Gn(n)(t._wrapper, i).then((function() {
                                    if (Kn(r, !i), delete t._wrapper, Ie(r), i) {
                                        var e = Pe(n.$props.toggle, t);
                                        Ln(e) || Bn(e, {
                                            offset: n.offset
                                        })
                                    }
                                }));
                                Kn(r, !i)
                            }))
                        }))
                    }
                }
            };

            function Kn(t, e) {
                st(t, "hidden", e ? "" : null)
            }
            var Zn, ti = {
                    mixins: [Yn, Jn],
                    args: "animation",
                    props: {
                        close: String
                    },
                    data: {
                        animation: [!0],
                        selClose: ".uk-alert-close",
                        duration: 150,
                        hideProps: G({
                            opacity: 0
                        }, Jn.data.hideProps)
                    },
                    events: [{
                        name: "click",
                        delegate: function() {
                            return this.selClose
                        },
                        handler: function(t) {
                            t.preventDefault(), this.close()
                        }
                    }],
                    methods: {
                        close: function() {
                            var t = this;
                            this.toggleElement(this.$el).then((function() {
                                return t.$destroy(!0)
                            }))
                        }
                    }
                },
                ei = {
                    args: "autoplay",
                    props: {
                        automute: Boolean,
                        autoplay: Boolean
                    },
                    data: {
                        automute: !1,
                        autoplay: !0
                    },
                    computed: {
                        inView: function(t) {
                            return "inview" === t.autoplay
                        }
                    },
                    connected: function() {
                        this.inView && !at(this.$el, "preload") && (this.$el.preload = "none"), this.player = new jn(this.$el), this.automute && this.player.mute()
                    },
                    update: {
                        read: function() {
                            return !!this.player && {
                                visible: Ft(this.$el) && "hidden" !== Ue(this.$el, "visibility"),
                                inView: this.inView && Ln(this.$el)
                            }
                        },
                        write: function(t) {
                            var e = t.visible,
                                n = t.inView;
                            !e || this.inView && !n ? this.player.pause() : (!0 === this.autoplay || this.inView && n) && this.player.play()
                        },
                        events: ["resize", "scroll"]
                    }
                },
                ni = {
                    mixins: [Yn, ei],
                    props: {
                        width: Number,
                        height: Number
                    },
                    data: {
                        automute: !0
                    },
                    update: {
                        read: function() {
                            var t = this.$el,
                                e = function(t) {
                                    for (; t = _t(t);)
                                        if ("static" !== Ue(t, "position")) return t
                                }(t) || t.parentNode,
                                n = e.offsetHeight,
                                i = e.offsetWidth,
                                r = ot.cover({
                                    width: this.width || t.naturalWidth || t.videoWidth || t.clientWidth,
                                    height: this.height || t.naturalHeight || t.videoHeight || t.clientHeight
                                }, {
                                    width: i + (i % 2 ? 1 : 0),
                                    height: n + (n % 2 ? 1 : 0)
                                });
                            return !(!r.width || !r.height) && r
                        },
                        write: function(t) {
                            var e = t.height,
                                n = t.width;
                            Ue(this.$el, {
                                height: e,
                                width: n
                            })
                        },
                        events: ["resize"]
                    }
                },
                ii = {
                    props: {
                        pos: String,
                        offset: null,
                        flip: Boolean,
                        clsPos: String
                    },
                    data: {
                        pos: "bottom-" + (ht ? "right" : "left"),
                        flip: !0,
                        offset: !1,
                        clsPos: ""
                    },
                    computed: {
                        pos: function(t) {
                            var e = t.pos;
                            return (e + (b(e, "-") ? "" : "-center")).split("-")
                        },
                        dir: function() {
                            return this.pos[0]
                        },
                        align: function() {
                            return this.pos[1]
                        }
                    },
                    methods: {
                        positionAt: function(t, e, n) {
                            var i;
                            He(t, this.clsPos + "-(top|bottom|left|right)(-[a-z]+)?"), Ue(t, {
                                top: "",
                                left: ""
                            });
                            var r = this.offset,
                                o = this.getAxis();
                            L(r) || (r = (i = Pe(r)) ? un(i)["x" === o ? "left" : "top"] - un(e)["x" === o ? "right" : "bottom"] : 0);
                            var s = an(t, e, "x" === o ? wn(this.dir) + " " + this.align : this.align + " " + wn(this.dir), "x" === o ? this.dir + " " + this.align : this.align + " " + this.dir, "x" === o ? "" + ("left" === this.dir ? -r : r) : " " + ("top" === this.dir ? -r : r), null, this.flip, n).target,
                                a = s.x,
                                u = s.y;
                            this.dir = "x" === o ? a : u, this.align = "x" === o ? u : a, Fe(t, this.clsPos + "-" + this.dir + "-" + this.align, !1 === this.offset)
                        },
                        getAxis: function() {
                            return "top" === this.dir || "bottom" === this.dir ? "y" : "x"
                        }
                    }
                },
                ri = {
                    mixins: [ii, Jn],
                    args: "pos",
                    props: {
                        mode: "list",
                        toggle: Boolean,
                        boundary: Boolean,
                        boundaryAlign: Boolean,
                        delayShow: Number,
                        delayHide: Number,
                        clsDrop: String
                    },
                    data: {
                        mode: ["click", "hover"],
                        toggle: "- *",
                        boundary: window,
                        boundaryAlign: !1,
                        delayShow: 0,
                        delayHide: 800,
                        clsDrop: !1,
                        animation: ["uk-animation-fade"],
                        cls: "uk-open"
                    },
                    computed: {
                        boundary: function(t, e) {
                            return xt(t.boundary, e)
                        },
                        clsDrop: function(t) {
                            return t.clsDrop || "uk-" + this.$options.name
                        },
                        clsPos: function() {
                            return this.clsDrop
                        }
                    },
                    created: function() {
                        this.tracker = new $n
                    },
                    connected: function() {
                        _e(this.$el, this.clsDrop);
                        var t = this.$props.toggle;
                        this.toggle = t && this.$create("toggle", xt(t, this.$el), {
                            target: this.$el,
                            mode: this.mode
                        }), !this.toggle && Qt(this.$el, "updatearia")
                    },
                    disconnected: function() {
                        this.isActive() && (Zn = null)
                    },
                    events: [{
                        name: "click",
                        delegate: function() {
                            return "." + this.clsDrop + "-close"
                        },
                        handler: function(t) {
                            t.preventDefault(), this.hide(!1)
                        }
                    }, {
                        name: "click",
                        delegate: function() {
                            return 'a[href^="#"]'
                        },
                        handler: function(t) {
                            var e = t.defaultPrevented,
                                n = t.current.hash;
                            e || !n || Vt(n, this.$el) || this.hide(!1)
                        }
                    }, {
                        name: "beforescroll",
                        handler: function() {
                            this.hide(!1)
                        }
                    }, {
                        name: "toggle",
                        self: !0,
                        handler: function(t, e) {
                            t.preventDefault(), this.isToggled() ? this.hide(!1) : this.show(e, !1)
                        }
                    }, {
                        name: "toggleshow",
                        self: !0,
                        handler: function(t, e) {
                            t.preventDefault(), this.show(e)
                        }
                    }, {
                        name: "togglehide",
                        self: !0,
                        handler: function(t) {
                            t.preventDefault(), this.hide()
                        }
                    }, {
                        name: yt,
                        filter: function() {
                            return b(this.mode, "hover")
                        },
                        handler: function(t) {
                            ae(t) || this.clearTimers()
                        }
                    }, {
                        name: wt,
                        filter: function() {
                            return b(this.mode, "hover")
                        },
                        handler: function(t) {
                            ae(t) || this.hide()
                        }
                    }, {
                        name: "toggled",
                        self: !0,
                        handler: function() {
                            this.isToggled() && (this.clearTimers(), on.cancel(this.$el), this.position())
                        }
                    }, {
                        name: "show",
                        self: !0,
                        handler: function() {
                            var t = this;
                            Zn = this, this.tracker.init(), Qt(this.$el, "updatearia"), Gt(this.$el, "hide", Yt(document, gt, (function(e) {
                                var n = e.target;
                                return !Vt(n, t.$el) && Gt(document, vt + " " + bt + " scroll", (function(e) {
                                    var i = e.defaultPrevented,
                                        r = e.type,
                                        o = e.target;
                                    i || r !== vt || n !== o || t.toggle && Vt(n, t.toggle.$el) || t.hide(!1)
                                }), !0)
                            })), {
                                self: !0
                            }), Gt(this.$el, "hide", Yt(document, "keydown", (function(e) {
                                27 === e.keyCode && (e.preventDefault(), t.hide(!1))
                            })), {
                                self: !0
                            })
                        }
                    }, {
                        name: "beforehide",
                        self: !0,
                        handler: function() {
                            this.clearTimers()
                        }
                    }, {
                        name: "hide",
                        handler: function(t) {
                            var e = t.target;
                            this.$el === e ? (Zn = this.isActive() ? null : Zn, Qt(this.$el, "updatearia"), this.tracker.cancel()) : Zn = null === Zn && Vt(e, this.$el) && this.isToggled() ? this : Zn
                        }
                    }, {
                        name: "updatearia",
                        self: !0,
                        handler: function(t, e) {
                            t.preventDefault(), this.updateAria(this.$el), (e || this.toggle) && (st((e || this.toggle).$el, "aria-expanded", this.isToggled()), Fe(this.toggle.$el, this.cls, this.isToggled()))
                        }
                    }],
                    update: {
                        write: function() {
                            this.isToggled() && !on.inProgress(this.$el) && this.position()
                        },
                        events: ["resize"]
                    },
                    methods: {
                        show: function(t, e) {
                            var n = this;
                            if (void 0 === t && (t = this.toggle), void 0 === e && (e = !0), this.isToggled() && t && this.toggle && t.$el !== this.toggle.$el && this.hide(!1), this.toggle = t, this.clearTimers(), !this.isActive()) {
                                if (Zn) {
                                    if (e && Zn.isDelaying) return void(this.showTimer = setTimeout(this.show, 10));
                                    for (; Zn && !Vt(this.$el, Zn.$el);) Zn.hide(!1)
                                }
                                this.showTimer = setTimeout((function() {
                                    return !n.isToggled() && n.toggleElement(n.$el, !0)
                                }), e && this.delayShow || 0)
                            }
                        },
                        hide: function(t) {
                            var e = this;
                            void 0 === t && (t = !0);
                            var n, i, r = function() {
                                return e.toggleElement(e.$el, !1, !1)
                            };
                            this.clearTimers(), this.isDelaying = (n = this.$el, i = [], Me(n, (function(t) {
                                return "static" !== Ue(t, "position") && i.push(t)
                            })), i).some((function(t) {
                                return e.tracker.movesTo(t)
                            })), t && this.isDelaying ? this.hideTimer = setTimeout(this.hide, 50) : t && this.delayHide ? this.hideTimer = setTimeout(r, this.delayHide) : r()
                        },
                        clearTimers: function() {
                            clearTimeout(this.showTimer), clearTimeout(this.hideTimer), this.showTimer = null, this.hideTimer = null, this.isDelaying = !1
                        },
                        isActive: function() {
                            return Zn === this
                        },
                        position: function() {
                            He(this.$el, this.clsDrop + "-(stack|boundary)"), Fe(this.$el, this.clsDrop + "-boundary", this.boundaryAlign);
                            var t = un(this.boundary),
                                e = this.boundaryAlign ? t : un(this.toggle.$el);
                            if ("justify" === this.align) {
                                var n = "y" === this.getAxis() ? "width" : "height";
                                Ue(this.$el, n, e[n])
                            } else this.$el.offsetWidth > Math.max(t.right - e.left, e.right - t.left) && _e(this.$el, this.clsDrop + "-stack");
                            this.positionAt(this.$el, this.boundaryAlign ? this.boundary : this.toggle.$el, this.boundary)
                        }
                    }
                },
                oi = {
                    mixins: [Yn],
                    args: "target",
                    props: {
                        target: Boolean
                    },
                    data: {
                        target: !1
                    },
                    computed: {
                        input: function(t, e) {
                            return Pe(zt, e)
                        },
                        state: function() {
                            return this.input.nextElementSibling
                        },
                        target: function(t, e) {
                            var n = t.target;
                            return n && (!0 === n && this.input.parentNode === e && this.input.nextElementSibling || xt(n, e))
                        }
                    },
                    update: function() {
                        var t = this.target,
                            e = this.input;
                        if (t) {
                            var n, i = qt(t) ? "value" : "textContent",
                                r = t[i],
                                o = e.files && e.files[0] ? e.files[0].name : Pt(e, "select") && (n = Oe("option", e).filter((function(t) {
                                    return t.selected
                                }))[0]) ? n.textContent : e.value;
                            r !== o && (t[i] = o)
                        }
                    },
                    events: [{
                        name: "change",
                        handler: function() {
                            this.$update()
                        }
                    }, {
                        name: "reset",
                        el: function() {
                            return jt(this.$el, "form")
                        },
                        handler: function() {
                            this.$update()
                        }
                    }]
                },
                si = {
                    update: {
                        read: function(t) {
                            var e = Ln(this.$el);
                            if (!e || t.isInView === e) return !1;
                            t.isInView = e
                        },
                        write: function() {
                            this.$el.src = this.$el.src
                        },
                        events: ["scroll", "resize"]
                    }
                },
                ai = {
                    props: {
                        margin: String,
                        firstColumn: Boolean
                    },
                    data: {
                        margin: "uk-margin-small-top",
                        firstColumn: "uk-first-column"
                    },
                    update: {
                        read: function() {
                            return {
                                columns: (t = this.$el.children, e = li(t, "left", "right"), ht ? e.reverse() : e),
                                rows: ui(this.$el.children)
                            };
                            var t, e
                        },
                        write: function(t) {
                            var e = this,
                                n = t.columns;
                            t.rows.forEach((function(t, i) {
                                return t.forEach((function(t) {
                                    Fe(t, e.margin, 0 !== i), Fe(t, e.firstColumn, b(n[0], t))
                                }))
                            }))
                        },
                        events: ["resize"]
                    }
                };

            function ui(t) {
                return li(t, "top", "bottom")
            }

            function li(t, e, n) {
                for (var i = [
                        []
                    ], r = 0; r < t.length; r++) {
                    var o = t[r];
                    if (Ft(o))
                        for (var s = ci(o), a = i.length - 1; a >= 0; a--) {
                            var u = i[a];
                            if (!u[0]) {
                                u.push(o);
                                break
                            }
                            var l = void 0;
                            if (u[0].offsetParent === o.offsetParent ? l = ci(u[0]) : (s = ci(o, !0), l = ci(u[0], !0)), s[e] >= l[n] - 1 && s[e] !== l[e]) {
                                i.push([o]);
                                break
                            }
                            if (s[n] > l[e] || s[e] === l[e]) {
                                u.push(o);
                                break
                            }
                            if (0 === a) {
                                i.unshift([o]);
                                break
                            }
                        }
                }
                return i
            }

            function ci(t, e) {
                var n;
                void 0 === e && (e = !1);
                var i = t.offsetTop,
                    r = t.offsetLeft,
                    o = t.offsetHeight,
                    s = t.offsetWidth;
                return e && (i = (n = hn(t))[0], r = n[1]), {
                    top: i,
                    left: r,
                    bottom: i + o,
                    right: r + s
                }
            }
            var hi = {
                    extends: ai,
                    mixins: [Yn],
                    name: "grid",
                    props: {
                        masonry: Boolean,
                        parallax: Number
                    },
                    data: {
                        margin: "uk-grid-margin",
                        clsStack: "uk-grid-stack",
                        masonry: !1,
                        parallax: 0
                    },
                    connected: function() {
                        this.masonry && _e(this.$el, "uk-flex-top uk-flex-wrap-top")
                    },
                    update: [{
                        write: function(t) {
                            var e = t.columns;
                            Fe(this.$el, this.clsStack, e.length < 2)
                        },
                        events: ["resize"]
                    }, {
                        read: function(t) {
                            var e = t.columns,
                                n = t.rows,
                                i = Xt(this.$el);
                            if (!i.length || !this.masonry && !this.parallax) return !1;
                            var r = i.some(en.inProgress),
                                o = !1,
                                s = "",
                                a = Math.abs(this.parallax);
                            if (this.masonry) {
                                var u = function(t) {
                                        return t.map((function(t) {
                                            return t.reduce((function(t, e) {
                                                return t + e.offsetHeight
                                            }), 0)
                                        }))
                                    }(e = e.map((function(t) {
                                        return Z(t, "offsetTop")
                                    }))),
                                    l = function(t, e) {
                                        var n = t.filter((function(t) {
                                            return Re(t, e)
                                        }))[0];
                                        return z(n ? Ue(n, "marginTop") : Ue(t[0], "paddingLeft"))
                                    }(i, this.margin) * (n.length - 1);
                                o = function(t, e) {
                                    var n = [],
                                        i = t.map((function(t) {
                                            return Math.max.apply(Math, t.map((function(t) {
                                                return t.offsetHeight
                                            })))
                                        }));
                                    return e.forEach((function(t, r) {
                                        return t.forEach((function(t, o) {
                                            0 === o ? n[r] = [0] : n[r][o] = i[o - 1] - e[r][o - 1].offsetHeight + n[r].reduce((function(t, e) {
                                                return t + e
                                            }), 0)
                                        }))
                                    })), n
                                }(n, e), s = Math.max.apply(Math, u) + l, a && (a = u.reduce((function(t, e, n) {
                                    return Math.max(t, e + l + (n % 2 ? a : a / 8) - s)
                                }), 0))
                            }
                            return {
                                padding: a,
                                columns: e,
                                translates: o,
                                height: !r && s
                            }
                        },
                        write: function(t) {
                            var e = t.height,
                                n = t.padding;
                            Ue(this.$el, "paddingBottom", n), !1 !== e && Ue(this.$el, "height", e)
                        },
                        events: ["resize"]
                    }, {
                        read: function(t) {
                            var e = t.height;
                            return {
                                scrolled: !!this.parallax && Rn(this.$el, e ? e - dn(this.$el) : 0) * Math.abs(this.parallax)
                            }
                        },
                        write: function(t) {
                            var e = t.columns,
                                n = t.scrolled,
                                i = t.translates;
                            (!1 !== n || i) && e.forEach((function(t, e) {
                                return t.forEach((function(t, r) {
                                    return Ue(t, "transform", n || i ? "translateY(" + ((i && -i[e][r]) + (n ? e % 2 ? n : n / 8 : 0)) + "px)" : "")
                                }))
                            }))
                        },
                        events: ["scroll", "resize"]
                    }]
                },
                di = ct ? {
                    props: {
                        selMinHeight: String
                    },
                    data: {
                        selMinHeight: !1,
                        forceHeight: !1
                    },
                    computed: {
                        elements: function(t, e) {
                            var n = t.selMinHeight;
                            return n ? Oe(n, e) : [e]
                        }
                    },
                    update: [{
                        read: function() {
                            Ue(this.elements, "height", "")
                        },
                        order: -5,
                        events: ["resize"]
                    }, {
                        write: function() {
                            var t = this;
                            this.elements.forEach((function(e) {
                                var n = z(Ue(e, "minHeight"));
                                n && (t.forceHeight || Math.round(n + gn(e, "height", "content-box")) >= e.offsetHeight) && Ue(e, "height", n)
                            }))
                        },
                        order: 5,
                        events: ["resize"]
                    }]
                } : {},
                fi = {
                    mixins: [di],
                    args: "target",
                    props: {
                        target: String,
                        row: Boolean
                    },
                    data: {
                        target: "> *",
                        row: !0,
                        forceHeight: !0
                    },
                    computed: {
                        elements: function(t, e) {
                            return Oe(t.target, e)
                        }
                    },
                    update: {
                        read: function() {
                            return {
                                rows: (this.row ? ui(this.elements) : [this.elements]).map(pi)
                            }
                        },
                        write: function(t) {
                            t.rows.forEach((function(t) {
                                var e = t.heights;
                                return t.elements.forEach((function(t, n) {
                                    return Ue(t, "minHeight", e[n])
                                }))
                            }))
                        },
                        events: ["resize"]
                    }
                };

            function pi(t) {
                var e;
                if (t.length < 2) return {
                    heights: [""],
                    elements: t
                };
                var n = gi(t),
                    i = n.heights,
                    r = n.max,
                    o = t.some((function(t) {
                        return t.style.minHeight
                    })),
                    s = t.some((function(t, e) {
                        return !t.style.minHeight && i[e] < r
                    }));
                return o && s && (Ue(t, "minHeight", ""), e = gi(t), i = e.heights, r = e.max), {
                    heights: i = t.map((function(t, e) {
                        return i[e] === r && z(t.style.minHeight).toFixed(2) !== r.toFixed(2) ? "" : r
                    })),
                    elements: t
                }
            }

            function gi(t) {
                var e = t.map((function(t) {
                    return un(t).height - gn(t, "height", "content-box")
                }));
                return {
                    heights: e,
                    max: Math.max.apply(null, e)
                }
            }
            var mi = {
                mixins: [di],
                props: {
                    expand: Boolean,
                    offsetTop: Boolean,
                    offsetBottom: Boolean,
                    minHeight: Number
                },
                data: {
                    expand: !1,
                    offsetTop: !1,
                    offsetBottom: !1,
                    minHeight: 0
                },
                update: {
                    read: function(t) {
                        var e = t.minHeight;
                        if (!Ft(this.$el)) return !1;
                        var n = "",
                            i = gn(this.$el, "height", "content-box");
                        if (this.expand) {
                            if (this.$el.dataset.heightExpand = "", Pe("[data-height-expand]") !== this.$el) return !1;
                            n = dn(window) - (vi(document.documentElement) - vi(this.$el)) - i || ""
                        } else {
                            if (n = "calc(100vh", this.offsetTop) {
                                var r = un(this.$el).top;
                                n += r > 0 && r < dn(window) / 2 ? " - " + r + "px" : ""
                            }!0 === this.offsetBottom ? n += " - " + vi(this.$el.nextElementSibling) + "px" : L(this.offsetBottom) ? n += " - " + this.offsetBottom + "vh" : this.offsetBottom && g(this.offsetBottom, "px") ? n += " - " + z(this.offsetBottom) + "px" : j(this.offsetBottom) && (n += " - " + vi(xt(this.offsetBottom, this.$el)) + "px"), n += (i ? " - " + i + "px" : "") + ")"
                        }
                        return {
                            minHeight: n,
                            prev: e
                        }
                    },
                    write: function(t) {
                        var e = t.minHeight,
                            n = t.prev;
                        Ue(this.$el, {
                            minHeight: e
                        }), e !== n && this.$update(this.$el, "resize"), this.minHeight && z(Ue(this.$el, "minHeight")) < this.minHeight && Ue(this.$el, "minHeight", this.minHeight)
                    },
                    events: ["resize"]
                }
            };

            function vi(t) {
                return t && un(t).height || 0
            }
            var yi = {
                    args: "src",
                    props: {
                        id: Boolean,
                        icon: String,
                        src: String,
                        style: String,
                        width: Number,
                        height: Number,
                        ratio: Number,
                        class: String,
                        strokeAnimation: Boolean,
                        focusable: Boolean,
                        attributes: "list"
                    },
                    data: {
                        ratio: 1,
                        include: ["style", "class", "focusable"],
                        class: "",
                        strokeAnimation: !1
                    },
                    beforeConnect: function() {
                        this.class += " uk-svg"
                    },
                    connected: function() {
                        var t, e = this;
                        !this.icon && b(this.src, "#") && (t = this.src.split("#"), this.src = t[0], this.icon = t[1]), this.svg = this.getSvg().then((function(t) {
                            return e.applyAttributes(t), e.svgEl = function(t, e) {
                                if (Rt(e) || "CANVAS" === e.tagName) {
                                    st(e, "hidden", !0);
                                    var n = e.nextElementSibling;
                                    return Ti(t, n) ? n : Te(e, t)
                                }
                                var i = e.lastElementChild;
                                return Ti(t, i) ? i : xe(e, t)
                            }(t, e.$el)
                        }), nt)
                    },
                    disconnected: function() {
                        var t = this;
                        Rt(this.$el) && st(this.$el, "hidden", null), this.svg && this.svg.then((function(e) {
                            return (!t._connected || e !== t.svgEl) && Se(e)
                        }), nt), this.svg = this.svgEl = null
                    },
                    update: {
                        read: function() {
                            return !!(this.strokeAnimation && this.svgEl && Ft(this.svgEl))
                        },
                        write: function() {
                            var t, e;
                            t = this.svgEl, (e = ki(t)) && t.style.setProperty("--uk-animation-stroke", e)
                        },
                        type: ["resize"]
                    },
                    methods: {
                        getSvg: function() {
                            var t, e = this;
                            return (t = this.src, wi[t] ? wi[t] : wi[t] = new le((function(e, n) {
                                t ? f(t, "data:") ? e(decodeURIComponent(t.split(",")[1])) : pe(t).then((function(t) {
                                    return e(t.response)
                                }), (function() {
                                    return n("SVG not found.")
                                })) : n()
                            }))).then((function(t) {
                                return function(t, e) {
                                    return e && b(t, "<symbol") && (t = function(t, e) {
                                        var n;
                                        if (!xi[t])
                                            for (xi[t] = {}, bi.lastIndex = 0; n = bi.exec(t);) xi[t][n[3]] = '<svg xmlns="http://www.w3.org/2000/svg"' + n[1] + "svg>";
                                        return xi[t][e]
                                    }(t, e) || t), (t = Pe(t.substr(t.indexOf("<svg")))) && t.hasChildNodes() && t
                                }(t, e.icon) || le.reject("SVG not found.")
                            }))
                        },
                        applyAttributes: function(t) {
                            var e = this;
                            for (var n in this.$options.props) this[n] && b(this.include, n) && st(t, n, this[n]);
                            for (var i in this.attributes) {
                                var r = this.attributes[i].split(":", 2),
                                    o = r[0],
                                    s = r[1];
                                st(t, o, s)
                            }
                            this.id || ut(t, "id");
                            var a = ["width", "height"],
                                u = [this.width, this.height];
                            u.some((function(t) {
                                return t
                            })) || (u = a.map((function(e) {
                                return st(t, e)
                            })));
                            var l = st(t, "viewBox");
                            l && !u.some((function(t) {
                                return t
                            })) && (u = l.split(" ").slice(2)), u.forEach((function(n, i) {
                                (n = (0 | n) * e.ratio) && st(t, a[i], n), n && !u[1 ^ i] && ut(t, a[1 ^ i])
                            })), st(t, "data-svg", this.icon || this.src)
                        }
                    }
                },
                wi = {},
                bi = /<symbol([^]*?id=(['"])(.+?)\2[^]*?<\/)symbol>/g,
                xi = {};

            function ki(t) {
                return Math.ceil(Math.max.apply(Math, [0].concat(Oe("[stroke]", t).map((function(t) {
                    try {
                        return t.getTotalLength()
                    } catch (t) {
                        return 0
                    }
                })))))
            }

            function Ti(t, e) {
                return st(t, "data-svg") === st(e, "data-svg")
            }
            var Ei = {
                    spinner: '<svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" cx="15" cy="15" r="14"/></svg>',
                    totop: '<svg width="18" height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 9 9 1 17 9 "/></svg>',
                    marker: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="9" y="4" width="1" height="11"/><rect x="4" y="9" width="11" height="1"/></svg>',
                    "close-icon": '<svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"/><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"/></svg>',
                    "close-large": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"/><line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"/></svg>',
                    "navbar-toggle-icon": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect y="9" width="20" height="2"/><rect y="3" width="20" height="2"/><rect y="15" width="20" height="2"/></svg>',
                    "overlay-icon": '<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><rect x="19" y="0" width="1" height="40"/><rect x="0" y="19" width="40" height="1"/></svg>',
                    "pagination-next": '<svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 1 6 6 1 11"/></svg>',
                    "pagination-previous": '<svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="6 1 1 6 6 11"/></svg>',
                    "search-icon": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"/><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"/></svg>',
                    "search-large": '<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.8" cx="17.5" cy="17.5" r="16.5"/><line fill="none" stroke="#000" stroke-width="1.8" x1="38" y1="39" x2="29" y2="30"/></svg>',
                    "search-navbar": '<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="10.5" cy="10.5" r="9.5"/><line fill="none" stroke="#000" stroke-width="1.1" x1="23" y1="23" x2="17" y2="17"/></svg>',
                    "slidenav-next": '<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "/></svg>',
                    "slidenav-next-large": '<svg width="25px" height="40px" viewBox="0 0 25 40" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="2" points="4.002,38.547 22.527,20.024 4,1.5 "/></svg>',
                    "slidenav-previous": '<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "/></svg>',
                    "slidenav-previous-large": '<svg width="25px" height="40px" viewBox="0 0 25 40" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="2" points="20.527,1.5 2,20.024 20.525,38.547 "/></svg>'
                },
                Si = {
                    install: function(t) {
                        t.icon.add = function(e, n) {
                            var i, r = j(e) ? ((i = {})[e] = n, i) : e;
                            K(r, (function(t, e) {
                                Ei[e] = t, delete Di[e]
                            })), t._initialized && Me(document.body, (function(e) {
                                return K(t.getComponents(e), (function(t) {
                                    t.$options.isIcon && t.icon in r && t.$reset()
                                }))
                            }))
                        }
                    },
                    extends: yi,
                    args: "icon",
                    props: ["icon"],
                    data: {
                        include: ["focusable"]
                    },
                    isIcon: !0,
                    beforeConnect: function() {
                        _e(this.$el, "uk-icon")
                    },
                    methods: {
                        getSvg: function() {
                            var t = function(t) {
                                return Ei[t] ? (Di[t] || (Di[t] = Pe((Ei[function(t) {
                                    return ht ? J(J(t, "left", "right"), "previous", "next") : t
                                }(t)] || Ei[t]).trim())), Di[t].cloneNode(!0)) : null
                            }(this.icon);
                            return t ? le.resolve(t) : le.reject("Icon not found.")
                        }
                    }
                },
                Ci = {
                    args: !1,
                    extends: Si,
                    data: function(t) {
                        return {
                            icon: s(t.constructor.options.name)
                        }
                    },
                    beforeConnect: function() {
                        _e(this.$el, this.$name)
                    }
                },
                $i = {
                    extends: Ci,
                    beforeConnect: function() {
                        _e(this.$el, "uk-slidenav")
                    },
                    computed: {
                        icon: function(t, e) {
                            var n = t.icon;
                            return Re(e, "uk-slidenav-large") ? n + "-large" : n
                        }
                    }
                },
                Ii = {
                    extends: Ci,
                    computed: {
                        icon: function(t, e) {
                            var n = t.icon;
                            return Re(e, "uk-search-icon") && Ut(e, ".uk-search-large").length ? "search-large" : Ut(e, ".uk-search-navbar").length ? "search-navbar" : n
                        }
                    }
                },
                Ni = {
                    extends: Ci,
                    computed: {
                        icon: function() {
                            return "close-" + (Re(this.$el, "uk-close-large") ? "large" : "icon")
                        }
                    }
                },
                Ai = {
                    extends: Ci,
                    connected: function() {
                        var t = this;
                        this.svg.then((function(e) {
                            return 1 !== t.ratio && Ue(Pe("circle", e), "strokeWidth", 1 / t.ratio)
                        }), nt)
                    }
                },
                Di = {},
                Mi = {
                    args: "dataSrc",
                    props: {
                        dataSrc: String,
                        dataSrcset: Boolean,
                        sizes: String,
                        width: Number,
                        height: Number,
                        offsetTop: String,
                        offsetLeft: String,
                        target: String
                    },
                    data: {
                        dataSrc: "",
                        dataSrcset: !1,
                        sizes: !1,
                        width: !1,
                        height: !1,
                        offsetTop: "50vh",
                        offsetLeft: 0,
                        target: !1
                    },
                    computed: {
                        cacheKey: function(t) {
                            var e = t.dataSrc;
                            return this.$name + "." + e
                        },
                        width: function(t) {
                            var e = t.width,
                                n = t.dataWidth;
                            return e || n
                        },
                        height: function(t) {
                            var e = t.height,
                                n = t.dataHeight;
                            return e || n
                        },
                        sizes: function(t) {
                            var e = t.sizes,
                                n = t.dataSizes;
                            return e || n
                        },
                        isImg: function(t, e) {
                            return Ri(e)
                        },
                        target: {
                            get: function(t) {
                                var e = t.target;
                                return [this.$el].concat(kt(e, this.$el))
                            },
                            watch: function() {
                                this.observe()
                            }
                        },
                        offsetTop: function(t) {
                            return bn(t.offsetTop, "height")
                        },
                        offsetLeft: function(t) {
                            return bn(t.offsetLeft, "width")
                        }
                    },
                    connected: function() {
                        _i[this.cacheKey] ? Pi(this.$el, _i[this.cacheKey] || this.dataSrc, this.dataSrcset, this.sizes) : this.isImg && this.width && this.height && Pi(this.$el, function(t, e, n) {
                            var i;
                            return n && (i = ot.ratio({
                                width: t,
                                height: e
                            }, "width", bn(ji(n))), t = i.width, e = i.height), 'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="' + t + '" height="' + e + '"></svg>'
                        }(this.width, this.height, this.sizes)), this.observer = new Vn(this.load, {
                            rootMargin: this.offsetTop + "px " + this.offsetLeft + "px"
                        }), requestAnimationFrame(this.observe)
                    },
                    disconnected: function() {
                        this.observer.disconnect()
                    },
                    update: {
                        read: function(t) {
                            var e = this,
                                n = t.image;
                            if (n || "complete" !== document.readyState || this.load(this.observer.takeRecords()), this.isImg) return !1;
                            n && n.then((function(t) {
                                return t && "" !== t.currentSrc && Pi(e.$el, Fi(t))
                            }))
                        },
                        write: function(t) {
                            if (this.dataSrcset && 1 !== window.devicePixelRatio) {
                                var e = Ue(this.$el, "backgroundSize");
                                (e.match(/^(auto\s?)+$/) || z(e) === t.bgSize) && (t.bgSize = (n = this.dataSrcset, i = this.sizes, r = bn(ji(i)), (o = (n.match(Bi) || []).map(z).sort((function(t, e) {
                                    return t - e
                                }))).filter((function(t) {
                                    return t >= r
                                }))[0] || o.pop() || ""), Ue(this.$el, "backgroundSize", t.bgSize + "px"))
                            }
                            var n, i, r, o
                        },
                        events: ["resize"]
                    },
                    methods: {
                        load: function(t) {
                            var e = this;
                            t.some((function(t) {
                                return B(t.isIntersecting) || t.isIntersecting
                            })) && (this._data.image = ge(this.dataSrc, this.dataSrcset, this.sizes).then((function(t) {
                                return Pi(e.$el, Fi(t), t.srcset, t.sizes), _i[e.cacheKey] = Fi(t), t
                            }), nt), this.observer.disconnect())
                        },
                        observe: function() {
                            var t = this;
                            this._connected && !this._data.image && this.target.forEach((function(e) {
                                return t.observer.observe(e)
                            }))
                        }
                    }
                };

            function Pi(t, e, n, i) {
                Ri(t) ? (i && (t.sizes = i), n && (t.srcset = n), e && (t.src = e)) : e && !b(t.style.backgroundImage, e) && (Ue(t, "backgroundImage", "url(" + Ht(e) + ")"), Qt(t, Kt("load", !1)))
            }
            var Oi = /\s*(.*?)\s*(\w+|calc\(.*?\))\s*(?:,|$)/g;

            function ji(t) {
                var e, n;
                for (Oi.lastIndex = 0; e = Oi.exec(t);)
                    if (!e[1] || window.matchMedia(e[1]).matches) {
                        e = f(n = e[2], "calc") ? n.substring(5, n.length - 1).replace(Li, (function(t) {
                            return bn(t)
                        })).replace(/ /g, "").match(Hi).reduce((function(t, e) {
                            return t + +e
                        }), 0) : n;
                        break
                    }
                return e || "100vw"
            }
            var _i, Li = /\d+(?:\w+|%)/g,
                Hi = /[+-]?(\d+)/g,
                Bi = /\s+\d+w\s*(?:,|$)/g;

            function Ri(t) {
                return "IMG" === t.tagName
            }

            function Fi(t) {
                return t.currentSrc || t.src
            }
            try {
                (_i = window.sessionStorage || {}).__test__ = 1, delete _i.__test__
            } catch (t) {
                _i = {}
            }
            var zi = {
                    props: {
                        media: Boolean
                    },
                    data: {
                        media: !1
                    },
                    computed: {
                        matchMedia: function() {
                            var t = function(t) {
                                if (j(t))
                                    if ("@" === t[0]) {
                                        var e = "breakpoint-" + t.substr(1);
                                        t = z(Ge(e))
                                    } else if (isNaN(t)) return t;
                                return !(!t || isNaN(t)) && "(min-width: " + t + "px)"
                            }(this.media);
                            return !t || window.matchMedia(t).matches
                        }
                    }
                },
                qi = {
                    mixins: [Yn, zi],
                    props: {
                        fill: String
                    },
                    data: {
                        fill: "",
                        clsWrapper: "uk-leader-fill",
                        clsHide: "uk-leader-hide",
                        attrFill: "data-fill"
                    },
                    computed: {
                        fill: function(t) {
                            return t.fill || Ge("leader-fill-content")
                        }
                    },
                    connected: function() {
                        var t;
                        t = $e(this.$el, '<span class="' + this.clsWrapper + '">'), this.wrapper = t[0]
                    },
                    disconnected: function() {
                        Ie(this.wrapper.childNodes)
                    },
                    update: {
                        read: function(t) {
                            var e = t.changed,
                                n = t.width,
                                i = n;
                            return {
                                width: n = Math.floor(this.$el.offsetWidth / 2),
                                fill: this.fill,
                                changed: e || i !== n,
                                hide: !this.matchMedia
                            }
                        },
                        write: function(t) {
                            Fe(this.wrapper, this.clsHide, t.hide), t.changed && (t.changed = !1, st(this.wrapper, this.attrFill, new Array(t.width).join(t.fill)))
                        },
                        events: ["resize"]
                    }
                },
                Wi = {
                    props: {
                        container: Boolean
                    },
                    data: {
                        container: !0
                    },
                    computed: {
                        container: function(t) {
                            var e = t.container;
                            return !0 === e && this.$container || e && Pe(e)
                        }
                    }
                },
                Vi = [],
                Ui = {
                    mixins: [Yn, Wi, Jn],
                    props: {
                        selPanel: String,
                        selClose: String,
                        escClose: Boolean,
                        bgClose: Boolean,
                        stack: Boolean
                    },
                    data: {
                        cls: "uk-open",
                        escClose: !0,
                        bgClose: !0,
                        overlay: !0,
                        stack: !1
                    },
                    computed: {
                        panel: function(t, e) {
                            return Pe(t.selPanel, e)
                        },
                        transitionElement: function() {
                            return this.panel
                        },
                        bgClose: function(t) {
                            return t.bgClose && this.panel
                        }
                    },
                    beforeDisconnect: function() {
                        this.isToggled() && this.toggleElement(this.$el, !1, !1)
                    },
                    events: [{
                        name: "click",
                        delegate: function() {
                            return this.selClose
                        },
                        handler: function(t) {
                            t.preventDefault(), this.hide()
                        }
                    }, {
                        name: "toggle",
                        self: !0,
                        handler: function(t) {
                            t.defaultPrevented || (t.preventDefault(), this.isToggled() === b(Vi, this) && this.toggle())
                        }
                    }, {
                        name: "beforeshow",
                        self: !0,
                        handler: function(t) {
                            if (b(Vi, this)) return !1;
                            !this.stack && Vi.length ? (le.all(Vi.map((function(t) {
                                return t.hide()
                            }))).then(this.show), t.preventDefault()) : Vi.push(this)
                        }
                    }, {
                        name: "show",
                        self: !0,
                        handler: function() {
                            var t = this;
                            fn(window) - fn(document) && this.overlay && Ue(document.body, "overflowY", "scroll"), this.stack && Ue(this.$el, "zIndex", Ue(this.$el, "zIndex") + Vi.length), _e(document.documentElement, this.clsPage), this.bgClose && Gt(this.$el, "hide", Yt(document, gt, (function(e) {
                                var n = e.target;
                                Q(Vi) !== t || t.overlay && !Vt(n, t.$el) || Vt(n, t.panel) || Gt(document, vt + " " + bt + " scroll", (function(e) {
                                    var i = e.defaultPrevented,
                                        r = e.type,
                                        o = e.target;
                                    i || r !== vt || n !== o || t.hide()
                                }), !0)
                            })), {
                                self: !0
                            }), this.escClose && Gt(this.$el, "hide", Yt(document, "keydown", (function(e) {
                                27 === e.keyCode && Q(Vi) === t && (e.preventDefault(), t.hide())
                            })), {
                                self: !0
                            })
                        }
                    }, {
                        name: "hidden",
                        self: !0,
                        handler: function() {
                            var t = this;
                            Vi.splice(Vi.indexOf(this), 1), Vi.length || Ue(document.body, "overflowY", ""), Ue(this.$el, "zIndex", ""), Vi.some((function(e) {
                                return e.clsPage === t.clsPage
                            })) || Le(document.documentElement, this.clsPage)
                        }
                    }],
                    methods: {
                        toggle: function() {
                            return this.isToggled() ? this.hide() : this.show()
                        },
                        show: function() {
                            var t = this;
                            return this.container && this.$el.parentNode !== this.container ? (xe(this.container, this.$el), new le((function(e) {
                                return requestAnimationFrame((function() {
                                    return t.show().then(e)
                                }))
                            }))) : this.toggleElement(this.$el, !0, Xi(this))
                        },
                        hide: function() {
                            return this.toggleElement(this.$el, !1, Xi(this))
                        }
                    }
                };

            function Xi(t) {
                var e = t.transitionElement,
                    n = t._toggle;
                return function(t, i) {
                    return new le((function(r, o) {
                        return Gt(t, "show hide", (function() {
                            t._reject && t._reject(), t._reject = o, n(t, i);
                            var s = Gt(e, "transitionstart", (function() {
                                    Gt(e, "transitionend transitioncancel", r, {
                                        self: !0
                                    }), clearTimeout(a)
                                }), {
                                    self: !0
                                }),
                                a = setTimeout((function() {
                                    s(), r()
                                }), X(Ue(e, "transitionDuration")))
                        }))
                    }))
                }
            }
            var Yi = {
                    install: function(t) {
                        var e = t.modal;

                        function n(t, n, i, r) {
                            n = G({
                                bgClose: !1,
                                escClose: !0,
                                labels: e.labels
                            }, n);
                            var o = e.dialog(t(n), n),
                                s = new ce,
                                a = !1;
                            return Yt(o.$el, "submit", "form", (function(t) {
                                t.preventDefault(), s.resolve(r && r(o)), a = !0, o.hide()
                            })), Yt(o.$el, "hide", (function() {
                                return !a && i(s)
                            })), s.promise.dialog = o, s.promise
                        }
                        e.dialog = function(t, n) {
                            var i = e('<div class="uk-modal"> <div class="uk-modal-dialog">' + t + "</div> </div>", n);
                            return i.show(), Yt(i.$el, "hidden", (function() {
                                return le.resolve().then((function() {
                                    return i.$destroy(!0)
                                }))
                            }), {
                                self: !0
                            }), i
                        }, e.alert = function(t, e) {
                            return n((function(e) {
                                var n = e.labels;
                                return '<div class="uk-modal-body">' + (j(t) ? t : be(t)) + '</div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-primary uk-modal-close" autofocus>' + n.ok + "</button> </div>"
                            }), e, (function(t) {
                                return t.resolve()
                            }))
                        }, e.confirm = function(t, e) {
                            return n((function(e) {
                                var n = e.labels;
                                return '<form> <div class="uk-modal-body">' + (j(t) ? t : be(t)) + '</div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-default uk-modal-close" type="button">' + n.cancel + '</button> <button class="uk-button uk-button-primary" autofocus>' + n.ok + "</button> </div> </form>"
                            }), e, (function(t) {
                                return t.reject()
                            }))
                        }, e.prompt = function(t, e, i) {
                            return n((function(n) {
                                var i = n.labels;
                                return '<form class="uk-form-stacked"> <div class="uk-modal-body"> <label>' + (j(t) ? t : be(t)) + '</label> <input class="uk-input" value="' + (e || "") + '" autofocus> </div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-default uk-modal-close" type="button">' + i.cancel + '</button> <button class="uk-button uk-button-primary">' + i.ok + "</button> </div> </form>"
                            }), i, (function(t) {
                                return t.resolve(null)
                            }), (function(t) {
                                return Pe("input", t.$el).value
                            }))
                        }, e.labels = {
                            ok: "Ok",
                            cancel: "Cancel"
                        }
                    },
                    mixins: [Ui],
                    data: {
                        clsPage: "uk-modal-page",
                        selPanel: ".uk-modal-dialog",
                        selClose: ".uk-modal-close, .uk-modal-close-default, .uk-modal-close-outside, .uk-modal-close-full"
                    },
                    events: [{
                        name: "show",
                        self: !0,
                        handler: function() {
                            Re(this.panel, "uk-margin-auto-vertical") ? _e(this.$el, "uk-flex") : Ue(this.$el, "display", "block"), dn(this.$el)
                        }
                    }, {
                        name: "hidden",
                        self: !0,
                        handler: function() {
                            Ue(this.$el, "display", ""), Le(this.$el, "uk-flex")
                        }
                    }]
                },
                Ji = {
                    extends: Qn,
                    data: {
                        targets: "> .uk-parent",
                        toggle: "> a",
                        content: "> ul"
                    }
                },
                Gi = {
                    mixins: [Yn, di],
                    props: {
                        dropdown: String,
                        mode: "list",
                        align: String,
                        offset: Number,
                        boundary: Boolean,
                        boundaryAlign: Boolean,
                        clsDrop: String,
                        delayShow: Number,
                        delayHide: Number,
                        dropbar: Boolean,
                        dropbarMode: String,
                        dropbarAnchor: Boolean,
                        duration: Number
                    },
                    data: {
                        dropdown: ".uk-navbar-nav > li",
                        align: ht ? "right" : "left",
                        clsDrop: "uk-navbar-dropdown",
                        mode: void 0,
                        offset: void 0,
                        delayShow: void 0,
                        delayHide: void 0,
                        boundaryAlign: void 0,
                        flip: "x",
                        boundary: !0,
                        dropbar: !1,
                        dropbarMode: "slide",
                        dropbarAnchor: !1,
                        duration: 200,
                        forceHeight: !0,
                        selMinHeight: ".uk-navbar-nav > li > a, .uk-navbar-item, .uk-navbar-toggle"
                    },
                    computed: {
                        boundary: function(t, e) {
                            var n = t.boundary,
                                i = t.boundaryAlign;
                            return !0 === n || i ? e : n
                        },
                        dropbarAnchor: function(t, e) {
                            return xt(t.dropbarAnchor, e)
                        },
                        pos: function(t) {
                            return "bottom-" + t.align
                        },
                        dropbar: {
                            get: function(t) {
                                var e = t.dropbar;
                                return e ? (e = this._dropbar || xt(e, this.$el) || Pe("+ .uk-navbar-dropbar", this.$el)) || (this._dropbar = Pe("<div></div>")) : null
                            },
                            watch: function(t) {
                                _e(t, "uk-navbar-dropbar")
                            },
                            immediate: !0
                        },
                        dropdowns: {
                            get: function(t, e) {
                                return Oe(t.dropdown + " ." + t.clsDrop, e)
                            },
                            watch: function(t) {
                                var e = this;
                                this.$create("drop", t.filter((function(t) {
                                    return !e.getDropdown(t)
                                })), G({}, this.$props, {
                                    boundary: this.boundary,
                                    pos: this.pos,
                                    offset: this.dropbar || this.offset
                                }))
                            },
                            immediate: !0
                        }
                    },
                    disconnected: function() {
                        this.dropbar && Se(this.dropbar), delete this._dropbar
                    },
                    events: [{
                        name: "mouseover",
                        delegate: function() {
                            return this.dropdown
                        },
                        handler: function(t) {
                            var e = t.current,
                                n = this.getActive();
                            n && n.toggle && !Vt(n.toggle.$el, e) && !n.tracker.movesTo(n.$el) && n.hide(!1)
                        }
                    }, {
                        name: "mouseleave",
                        el: function() {
                            return this.dropbar
                        },
                        handler: function() {
                            var t = this.getActive();
                            t && !this.dropdowns.some((function(t) {
                                return Pt(t, ":hover")
                            })) && t.hide()
                        }
                    }, {
                        name: "beforeshow",
                        capture: !0,
                        filter: function() {
                            return this.dropbar
                        },
                        handler: function() {
                            this.dropbar.parentNode || Te(this.dropbarAnchor || this.$el, this.dropbar)
                        }
                    }, {
                        name: "show",
                        capture: !0,
                        filter: function() {
                            return this.dropbar
                        },
                        handler: function(t, e) {
                            var n = e.$el,
                                i = e.dir;
                            Fe(this.dropbar, "uk-navbar-dropbar-slide", "slide" === this.dropbarMode || Ut(this.$el).some((function(t) {
                                return "static" !== Ue(t, "position")
                            }))), this.clsDrop && _e(n, this.clsDrop + "-dropbar"), "bottom" === i && this.transitionTo(n.offsetHeight + z(Ue(n, "marginTop")) + z(Ue(n, "marginBottom")), n)
                        }
                    }, {
                        name: "beforehide",
                        filter: function() {
                            return this.dropbar
                        },
                        handler: function(t, e) {
                            var n = e.$el,
                                i = this.getActive();
                            Pt(this.dropbar, ":hover") && i && i.$el === n && t.preventDefault()
                        }
                    }, {
                        name: "hide",
                        filter: function() {
                            return this.dropbar
                        },
                        handler: function(t, e) {
                            var n = e.$el,
                                i = this.getActive();
                            (!i || i && i.$el === n) && this.transitionTo(0)
                        }
                    }],
                    methods: {
                        getActive: function() {
                            var t = this.dropdowns.map(this.getDropdown).filter((function(t) {
                                return t && t.isActive()
                            }))[0];
                            return t && b(t.mode, "hover") && Vt(t.toggle.$el, this.$el) && t
                        },
                        transitionTo: function(t, e) {
                            var n = this,
                                i = this.dropbar,
                                r = Ft(i) ? dn(i) : 0;
                            return Ue(e = r < t && e, "clip", "rect(0," + e.offsetWidth + "px," + r + "px,0)"), dn(i, r), en.cancel([e, i]), le.all([en.start(i, {
                                height: t
                            }, this.duration), en.start(e, {
                                clip: "rect(0," + e.offsetWidth + "px," + t + "px,0)"
                            }, this.duration)]).catch(nt).then((function() {
                                Ue(e, {
                                    clip: ""
                                }), n.$update(i)
                            }))
                        },
                        getDropdown: function(t) {
                            return this.$getComponent(t, "drop") || this.$getComponent(t, "dropdown")
                        }
                    }
                },
                Qi = {
                    mixins: [Ui],
                    args: "mode",
                    props: {
                        mode: String,
                        flip: Boolean,
                        overlay: Boolean
                    },
                    data: {
                        mode: "slide",
                        flip: !1,
                        overlay: !1,
                        clsPage: "uk-offcanvas-page",
                        clsContainer: "uk-offcanvas-container",
                        selPanel: ".uk-offcanvas-bar",
                        clsFlip: "uk-offcanvas-flip",
                        clsContainerAnimation: "uk-offcanvas-container-animation",
                        clsSidebarAnimation: "uk-offcanvas-bar-animation",
                        clsMode: "uk-offcanvas",
                        clsOverlay: "uk-offcanvas-overlay",
                        selClose: ".uk-offcanvas-close",
                        container: !1
                    },
                    computed: {
                        clsFlip: function(t) {
                            var e = t.flip,
                                n = t.clsFlip;
                            return e ? n : ""
                        },
                        clsOverlay: function(t) {
                            var e = t.overlay,
                                n = t.clsOverlay;
                            return e ? n : ""
                        },
                        clsMode: function(t) {
                            var e = t.mode;
                            return t.clsMode + "-" + e
                        },
                        clsSidebarAnimation: function(t) {
                            var e = t.mode,
                                n = t.clsSidebarAnimation;
                            return "none" === e || "reveal" === e ? "" : n
                        },
                        clsContainerAnimation: function(t) {
                            var e = t.mode,
                                n = t.clsContainerAnimation;
                            return "push" !== e && "reveal" !== e ? "" : n
                        },
                        transitionElement: function(t) {
                            return "reveal" === t.mode ? this.panel.parentNode : this.panel
                        }
                    },
                    events: [{
                        name: "click",
                        delegate: function() {
                            return 'a[href^="#"]'
                        },
                        handler: function(t) {
                            var e = t.current.hash;
                            !t.defaultPrevented && e && Pe(e, document.body) && this.hide()
                        }
                    }, {
                        name: "touchstart",
                        passive: !0,
                        el: function() {
                            return this.panel
                        },
                        handler: function(t) {
                            var e = t.targetTouches;
                            1 === e.length && (this.clientY = e[0].clientY)
                        }
                    }, {
                        name: "touchmove",
                        self: !0,
                        passive: !1,
                        filter: function() {
                            return this.overlay
                        },
                        handler: function(t) {
                            t.cancelable && t.preventDefault()
                        }
                    }, {
                        name: "touchmove",
                        passive: !1,
                        el: function() {
                            return this.panel
                        },
                        handler: function(t) {
                            if (1 === t.targetTouches.length) {
                                var e = event.targetTouches[0].clientY - this.clientY,
                                    n = this.panel,
                                    i = n.scrollTop,
                                    r = n.scrollHeight,
                                    o = n.clientHeight;
                                (o >= r || 0 === i && e > 0 || r - i <= o && e < 0) && t.cancelable && t.preventDefault()
                            }
                        }
                    }, {
                        name: "show",
                        self: !0,
                        handler: function() {
                            "reveal" !== this.mode || Re(this.panel.parentNode, this.clsMode) || (Ce(this.panel, "<div>"), _e(this.panel.parentNode, this.clsMode)), Ue(document.documentElement, "overflowY", this.overlay ? "hidden" : ""), _e(document.body, this.clsContainer, this.clsFlip), Ue(document.body, "touch-action", "pan-y pinch-zoom"), Ue(this.$el, "display", "block"), _e(this.$el, this.clsOverlay), _e(this.panel, this.clsSidebarAnimation, "reveal" !== this.mode ? this.clsMode : ""), dn(document.body), _e(document.body, this.clsContainerAnimation), this.clsContainerAnimation && (Ki().content += ",user-scalable=0")
                        }
                    }, {
                        name: "hide",
                        self: !0,
                        handler: function() {
                            Le(document.body, this.clsContainerAnimation), Ue(document.body, "touch-action", "")
                        }
                    }, {
                        name: "hidden",
                        self: !0,
                        handler: function() {
                            var t;
                            this.clsContainerAnimation && ((t = Ki()).content = t.content.replace(/,user-scalable=0$/, "")), "reveal" === this.mode && Ie(this.panel), Le(this.panel, this.clsSidebarAnimation, this.clsMode), Le(this.$el, this.clsOverlay), Ue(this.$el, "display", ""), Le(document.body, this.clsContainer, this.clsFlip), Ue(document.documentElement, "overflowY", "")
                        }
                    }, {
                        name: "swipeLeft swipeRight",
                        handler: function(t) {
                            this.isToggled() && g(t.type, "Left") ^ this.flip && this.hide()
                        }
                    }]
                };

            function Ki() {
                return Pe('meta[name="viewport"]', document.head) || xe(document.head, '<meta name="viewport">')
            }
            var Zi = {
                    mixins: [Yn],
                    props: {
                        selContainer: String,
                        selContent: String
                    },
                    data: {
                        selContainer: ".uk-modal",
                        selContent: ".uk-modal-dialog"
                    },
                    computed: {
                        container: function(t, e) {
                            return jt(e, t.selContainer)
                        },
                        content: function(t, e) {
                            return jt(e, t.selContent)
                        }
                    },
                    connected: function() {
                        Ue(this.$el, "minHeight", 150)
                    },
                    update: {
                        read: function() {
                            return !(!this.content || !this.container) && {
                                current: z(Ue(this.$el, "maxHeight")),
                                max: Math.max(150, dn(this.container) - (un(this.content).height - dn(this.$el)))
                            }
                        },
                        write: function(t) {
                            var e = t.current,
                                n = t.max;
                            Ue(this.$el, "maxHeight", n), Math.round(e) !== Math.round(n) && Qt(this.$el, "resize")
                        },
                        events: ["resize"]
                    }
                },
                tr = {
                    props: ["width", "height"],
                    connected: function() {
                        _e(this.$el, "uk-responsive-width")
                    },
                    update: {
                        read: function() {
                            return !!(Ft(this.$el) && this.width && this.height) && {
                                width: fn(this.$el.parentNode),
                                height: this.height
                            }
                        },
                        write: function(t) {
                            dn(this.$el, ot.contain({
                                height: this.height,
                                width: this.width
                            }, t).height)
                        },
                        events: ["resize"]
                    }
                },
                er = {
                    props: {
                        offset: Number
                    },
                    data: {
                        offset: 0
                    },
                    methods: {
                        scrollTo: function(t) {
                            var e = this;
                            t = t && Pe(t) || document.body, Qt(this.$el, "beforescroll", [this, t]) && Bn(t, {
                                offset: this.offset
                            }).then((function() {
                                return Qt(e.$el, "scrolled", [e, t])
                            }))
                        }
                    },
                    events: {
                        click: function(t) {
                            t.defaultPrevented || (t.preventDefault(), this.scrollTo(Ht(decodeURIComponent(this.$el.hash)).substr(1)))
                        }
                    }
                },
                nr = {
                    args: "cls",
                    props: {
                        cls: String,
                        target: String,
                        hidden: Boolean,
                        offsetTop: Number,
                        offsetLeft: Number,
                        repeat: Boolean,
                        delay: Number
                    },
                    data: function() {
                        return {
                            cls: !1,
                            target: !1,
                            hidden: !0,
                            offsetTop: 0,
                            offsetLeft: 0,
                            repeat: !1,
                            delay: 0,
                            inViewClass: "uk-scrollspy-inview"
                        }
                    },
                    computed: {
                        elements: {
                            get: function(t, e) {
                                var n = t.target;
                                return n ? Oe(n, e) : [e]
                            },
                            watch: function(t) {
                                this.hidden && Ue(Wt(t, ":not(." + this.inViewClass + ")"), "visibility", "hidden")
                            },
                            immediate: !0
                        }
                    },
                    update: [{
                        read: function(t) {
                            var e = this;
                            t.update && this.elements.forEach((function(t) {
                                var n = t._ukScrollspyState;
                                n || (n = {
                                    cls: lt(t, "uk-scrollspy-class") || e.cls
                                }), n.show = Ln(t, e.offsetTop, e.offsetLeft), t._ukScrollspyState = n
                            }))
                        },
                        write: function(t) {
                            var e = this;
                            if (!t.update) return this.$emit(), t.update = !0;
                            this.elements.forEach((function(n) {
                                var i = n._ukScrollspyState,
                                    r = function(t) {
                                        Ue(n, "visibility", !t && e.hidden ? "hidden" : ""), Fe(n, e.inViewClass, t), Fe(n, i.cls), Qt(n, t ? "inview" : "outview"), i.inview = t, e.$update(n)
                                    };
                                !i.show || i.inview || i.queued ? !i.show && i.inview && !i.queued && e.repeat && r(!1) : (i.queued = !0, t.promise = (t.promise || le.resolve()).then((function() {
                                    return new le((function(t) {
                                        return setTimeout(t, e.delay)
                                    }))
                                })).then((function() {
                                    r(!0), setTimeout((function() {
                                        return i.queued = !1
                                    }), 300)
                                })))
                            }))
                        },
                        events: ["scroll", "resize"]
                    }]
                },
                ir = {
                    props: {
                        cls: String,
                        closest: String,
                        scroll: Boolean,
                        overflow: Boolean,
                        offset: Number
                    },
                    data: {
                        cls: "uk-active",
                        closest: !1,
                        scroll: !1,
                        overflow: !0,
                        offset: 0
                    },
                    computed: {
                        links: {
                            get: function(t, e) {
                                return Oe('a[href^="#"]', e).filter((function(t) {
                                    return t.hash
                                }))
                            },
                            watch: function(t) {
                                this.scroll && this.$create("scroll", t, {
                                    offset: this.offset || 0
                                })
                            },
                            immediate: !0
                        },
                        targets: function() {
                            return Oe(this.links.map((function(t) {
                                return Ht(t.hash).substr(1)
                            })).join(","))
                        },
                        elements: function(t) {
                            var e = t.closest;
                            return jt(this.links, e || "*")
                        }
                    },
                    update: [{
                        read: function() {
                            var t = this,
                                e = this.targets.length;
                            if (!e || !Ft(this.$el)) return !1;
                            var n = Q(Fn(this.targets[0])),
                                i = n.scrollTop,
                                r = n.scrollHeight,
                                o = zn(n),
                                s = r - un(o).height,
                                a = !1;
                            return i === s ? a = e - 1 : (this.targets.every((function(e, n) {
                                if (cn(e, o).top - t.offset <= 0) return a = n, !0
                            })), !1 === a && this.overflow && (a = 0)), {
                                active: a
                            }
                        },
                        write: function(t) {
                            var e = t.active;
                            this.links.forEach((function(t) {
                                return t.blur()
                            })), Le(this.elements, this.cls), !1 !== e && Qt(this.$el, "active", [e, _e(this.elements[e], this.cls)])
                        },
                        events: ["scroll", "resize"]
                    }]
                },
                rr = {
                    mixins: [Yn, zi],
                    props: {
                        top: null,
                        bottom: Boolean,
                        offset: String,
                        animation: String,
                        clsActive: String,
                        clsInactive: String,
                        clsFixed: String,
                        clsBelow: String,
                        selTarget: String,
                        widthElement: Boolean,
                        showOnUp: Boolean,
                        targetOffset: Number
                    },
                    data: {
                        top: 0,
                        bottom: !1,
                        offset: 0,
                        animation: "",
                        clsActive: "uk-active",
                        clsInactive: "",
                        clsFixed: "uk-sticky-fixed",
                        clsBelow: "uk-sticky-below",
                        selTarget: "",
                        widthElement: !1,
                        showOnUp: !1,
                        targetOffset: !1
                    },
                    computed: {
                        offset: function(t) {
                            return bn(t.offset)
                        },
                        selTarget: function(t, e) {
                            var n = t.selTarget;
                            return n && Pe(n, e) || e
                        },
                        widthElement: function(t, e) {
                            return xt(t.widthElement, e) || this.placeholder
                        },
                        isActive: {
                            get: function() {
                                return Re(this.selTarget, this.clsActive)
                            },
                            set: function(t) {
                                t && !this.isActive ? (Be(this.selTarget, this.clsInactive, this.clsActive), Qt(this.$el, "active")) : t || Re(this.selTarget, this.clsInactive) || (Be(this.selTarget, this.clsActive, this.clsInactive), Qt(this.$el, "inactive"))
                            }
                        }
                    },
                    connected: function() {
                        this.placeholder = Pe("+ .uk-sticky-placeholder", this.$el) || Pe('<div class="uk-sticky-placeholder"></div>'), this.isFixed = !1, this.isActive = !1
                    },
                    disconnected: function() {
                        this.isFixed && (this.hide(), Le(this.selTarget, this.clsInactive)), Se(this.placeholder), this.placeholder = null, this.widthElement = null
                    },
                    events: [{
                        name: "load hashchange popstate",
                        el: window,
                        handler: function() {
                            var t = this;
                            if (!1 !== this.targetOffset && location.hash && window.pageYOffset > 0) {
                                var e = Pe(location.hash);
                                e && kn.read((function() {
                                    var n = un(e).top,
                                        i = un(t.$el).top,
                                        r = t.$el.offsetHeight;
                                    t.isFixed && i + r >= n && i <= n + e.offsetHeight && Hn(window, n - r - (L(t.targetOffset) ? t.targetOffset : 0) - t.offset)
                                }))
                            }
                        }
                    }],
                    update: [{
                        read: function(t, e) {
                            var n = t.height;
                            this.isActive && "update" !== e && (this.hide(), n = this.$el.offsetHeight, this.show()), n = this.isActive ? n : this.$el.offsetHeight, this.topOffset = un(this.isFixed ? this.placeholder : this.$el).top, this.bottomOffset = this.topOffset + n;
                            var i = or("bottom", this);
                            return this.top = Math.max(z(or("top", this)), this.topOffset) - this.offset, this.bottom = i && i - this.$el.offsetHeight, this.inactive = !this.matchMedia, {
                                lastScroll: !1,
                                height: n,
                                margins: Ue(this.$el, ["marginTop", "marginBottom", "marginLeft", "marginRight"])
                            }
                        },
                        write: function(t) {
                            var e = t.height,
                                n = t.margins,
                                i = this.placeholder;
                            Ue(i, G({
                                height: e
                            }, n)), Vt(i, document) || (Te(this.$el, i), st(i, "hidden", "")), this.isActive = this.isActive
                        },
                        events: ["resize"]
                    }, {
                        read: function(t) {
                            var e = t.scroll;
                            return void 0 === e && (e = 0), this.width = un(Ft(this.widthElement) ? this.widthElement : this.$el).width, this.scroll = window.pageYOffset, {
                                dir: e <= this.scroll ? "down" : "up",
                                scroll: this.scroll,
                                visible: Ft(this.$el),
                                top: hn(this.placeholder)[0]
                            }
                        },
                        write: function(t, e) {
                            var n = this,
                                i = t.initTimestamp;
                            void 0 === i && (i = 0);
                            var r = t.dir,
                                o = t.lastDir,
                                s = t.lastScroll,
                                a = t.scroll,
                                u = t.top,
                                l = t.visible,
                                c = performance.now();
                            if (t.lastScroll = a, !(a < 0 || a === s || !l || this.disabled || this.showOnUp && "scroll" !== e || ((c - i > 300 || r !== o) && (t.initScroll = a, t.initTimestamp = c), t.lastDir = r, this.showOnUp && !this.isFixed && Math.abs(t.initScroll - a) <= 30 && Math.abs(s - a) <= 10)))
                                if (this.inactive || a < this.top || this.showOnUp && (a <= this.top || "down" === r || "up" === r && !this.isFixed && a <= this.bottomOffset)) {
                                    if (!this.isFixed) return void(on.inProgress(this.$el) && u > a && (on.cancel(this.$el), this.hide()));
                                    this.isFixed = !1, this.animation && a > this.topOffset ? (on.cancel(this.$el), on.out(this.$el, this.animation).then((function() {
                                        return n.hide()
                                    }), nt)) : this.hide()
                                } else this.isFixed ? this.update() : this.animation ? (on.cancel(this.$el), this.show(), on.in(this.$el, this.animation).catch(nt)) : this.show()
                        },
                        events: ["resize", "scroll"]
                    }],
                    methods: {
                        show: function() {
                            this.isFixed = !0, this.update(), st(this.placeholder, "hidden", null)
                        },
                        hide: function() {
                            this.isActive = !1, Le(this.$el, this.clsFixed, this.clsBelow), Ue(this.$el, {
                                position: "",
                                top: "",
                                width: ""
                            }), st(this.placeholder, "hidden", "")
                        },
                        update: function() {
                            var t = 0 !== this.top || this.scroll > this.top,
                                e = Math.max(0, this.offset);
                            L(this.bottom) && this.scroll > this.bottom - this.offset && (e = this.bottom - this.scroll), Ue(this.$el, {
                                position: "fixed",
                                top: e + "px",
                                width: this.width
                            }), this.isActive = t, Fe(this.$el, this.clsBelow, this.scroll > this.bottomOffset), _e(this.$el, this.clsFixed)
                        }
                    }
                };

            function or(t, e) {
                var n = e.$props,
                    i = e.$el,
                    r = e[t + "Offset"],
                    o = n[t];
                if (o) return j(o) && o.match(/^-?\d/) ? r + bn(o) : un(!0 === o ? i.parentNode : xt(o, i)).bottom
            }
            var sr, ar = {
                    mixins: [Jn],
                    args: "connect",
                    props: {
                        connect: String,
                        toggle: String,
                        active: Number,
                        swiping: Boolean
                    },
                    data: {
                        connect: "~.uk-switcher",
                        toggle: "> * > :first-child",
                        active: 0,
                        swiping: !0,
                        cls: "uk-active",
                        clsContainer: "uk-switcher",
                        attrItem: "uk-switcher-item",
                        queued: !0
                    },
                    computed: {
                        connects: {
                            get: function(t, e) {
                                return kt(t.connect, e)
                            },
                            watch: function(t) {
                                var e = this;
                                t.forEach((function(t) {
                                    return e.updateAria(t.children)
                                })), this.swiping && Ue(t, "touch-action", "pan-y pinch-zoom")
                            },
                            immediate: !0
                        },
                        toggles: {
                            get: function(t, e) {
                                return Oe(t.toggle, e).filter((function(t) {
                                    return !Pt(t, ".uk-disabled *, .uk-disabled, [disabled]")
                                }))
                            },
                            watch: function(t) {
                                var e = this.index();
                                this.show(~e && e || t[this.active] || t[0])
                            },
                            immediate: !0
                        }
                    },
                    events: [{
                        name: "click",
                        delegate: function() {
                            return this.toggle
                        },
                        handler: function(t) {
                            b(this.toggles, t.current) && (t.preventDefault(), this.show(t.current))
                        }
                    }, {
                        name: "click",
                        el: function() {
                            return this.connects
                        },
                        delegate: function() {
                            return "[" + this.attrItem + "],[data-" + this.attrItem + "]"
                        },
                        handler: function(t) {
                            t.preventDefault(), this.show(lt(t.current, this.attrItem))
                        }
                    }, {
                        name: "swipeRight swipeLeft",
                        filter: function() {
                            return this.swiping
                        },
                        el: function() {
                            return this.connects
                        },
                        handler: function(t) {
                            var e = t.type;
                            this.show(g(e, "Left") ? "next" : "previous")
                        }
                    }, {
                        name: "show",
                        el: function() {
                            return this.connects
                        },
                        handler: function() {
                            var t = this,
                                e = this.index();
                            this.toggles.forEach((function(n, i) {
                                Fe(Xt(t.$el).filter((function(t) {
                                    return Vt(n, t)
                                })), t.cls, e === i), st(n, "aria-expanded", e === i)
                            }))
                        }
                    }],
                    methods: {
                        index: function() {
                            return ve(Xt(this.connects[0], "." + this.cls)[0])
                        },
                        show: function(t) {
                            var e = this,
                                n = this.index(),
                                i = ye(t, this.toggles, n);
                            this.connects.forEach((function(t) {
                                var r = t.children;
                                return e.toggleElement([r[n], r[i]], void 0, n >= 0)
                            }))
                        }
                    }
                },
                ur = {
                    mixins: [Yn],
                    extends: ar,
                    props: {
                        media: Boolean
                    },
                    data: {
                        media: 960,
                        attrItem: "uk-tab-item"
                    },
                    connected: function() {
                        var t = Re(this.$el, "uk-tab-left") ? "uk-tab-left" : !!Re(this.$el, "uk-tab-right") && "uk-tab-right";
                        t && this.$create("toggle", this.$el, {
                            cls: t,
                            mode: "media",
                            media: this.media
                        })
                    }
                },
                lr = {
                    mixins: [zi, Jn],
                    args: "target",
                    props: {
                        href: String,
                        target: null,
                        mode: "list"
                    },
                    data: {
                        href: !1,
                        target: !1,
                        mode: "click",
                        queued: !0
                    },
                    computed: {
                        target: {
                            get: function(t, e) {
                                var n = t.href,
                                    i = t.target;
                                return (i = kt(i || n, e)).length && i || [e]
                            },
                            watch: function() {
                                Qt(this.target, "updatearia", [this])
                            },
                            immediate: !0
                        }
                    },
                    events: [{
                        name: yt + " " + wt,
                        filter: function() {
                            return b(this.mode, "hover")
                        },
                        handler: function(t) {
                            ae(t) || this.toggle("toggle" + (t.type === yt ? "show" : "hide"))
                        }
                    }, {
                        name: "click",
                        filter: function() {
                            return b(this.mode, "click") || pt && b(this.mode, "hover")
                        },
                        handler: function(t) {
                            var e;
                            (jt(t.target, 'a[href="#"], a[href=""]') || (e = jt(t.target, "a[href]")) && (this.cls && !Re(this.target, this.cls.split(" ")[0]) || !Ft(this.target) || e.hash && Pt(this.target, e.hash))) && t.preventDefault(), this.toggle()
                        }
                    }],
                    update: {
                        read: function() {
                            return !(!b(this.mode, "media") || !this.media) && {
                                match: this.matchMedia
                            }
                        },
                        write: function(t) {
                            var e = t.match,
                                n = this.isToggled(this.target);
                            (e ? !n : n) && this.toggle()
                        },
                        events: ["resize"]
                    },
                    methods: {
                        toggle: function(t) {
                            Qt(this.target, t || "toggle", [this]) && this.toggleElement(this.target)
                        }
                    }
                },
                cr = Object.freeze({
                    __proto__: null,
                    Accordion: Qn,
                    Alert: ti,
                    Cover: ni,
                    Drop: ri,
                    Dropdown: ri,
                    FormCustom: oi,
                    Gif: si,
                    Grid: hi,
                    HeightMatch: fi,
                    HeightViewport: mi,
                    Icon: Si,
                    Img: Mi,
                    Leader: qi,
                    Margin: ai,
                    Modal: Yi,
                    Nav: Ji,
                    Navbar: Gi,
                    Offcanvas: Qi,
                    OverflowAuto: Zi,
                    Responsive: tr,
                    Scroll: er,
                    Scrollspy: nr,
                    ScrollspyNav: ir,
                    Sticky: rr,
                    Svg: yi,
                    Switcher: ar,
                    Tab: ur,
                    Toggle: lr,
                    Video: ei,
                    Close: Ni,
                    Spinner: Ai,
                    SlidenavNext: $i,
                    SlidenavPrevious: $i,
                    SearchIcon: Ii,
                    Marker: Ci,
                    NavbarToggleIcon: Ci,
                    OverlayIcon: Ci,
                    PaginationNext: Ci,
                    PaginationPrevious: Ci,
                    Totop: Ci
                }),
                hr = {
                    mixins: [Yn],
                    props: {
                        date: String,
                        clsWrapper: String
                    },
                    data: {
                        date: "",
                        clsWrapper: ".uk-countdown-%unit%"
                    },
                    computed: {
                        date: function(t) {
                            var e = t.date;
                            return Date.parse(e)
                        },
                        days: function(t, e) {
                            return Pe(t.clsWrapper.replace("%unit%", "days"), e)
                        },
                        hours: function(t, e) {
                            return Pe(t.clsWrapper.replace("%unit%", "hours"), e)
                        },
                        minutes: function(t, e) {
                            return Pe(t.clsWrapper.replace("%unit%", "minutes"), e)
                        },
                        seconds: function(t, e) {
                            return Pe(t.clsWrapper.replace("%unit%", "seconds"), e)
                        },
                        units: function() {
                            var t = this;
                            return ["days", "hours", "minutes", "seconds"].filter((function(e) {
                                return t[e]
                            }))
                        }
                    },
                    connected: function() {
                        this.start()
                    },
                    disconnected: function() {
                        var t = this;
                        this.stop(), this.units.forEach((function(e) {
                            return we(t[e])
                        }))
                    },
                    events: [{
                        name: "visibilitychange",
                        el: document,
                        handler: function() {
                            document.hidden ? this.stop() : this.start()
                        }
                    }],
                    update: {
                        write: function() {
                            var t, e, n = this,
                                i = (t = this.date, {
                                    total: e = t - Date.now(),
                                    seconds: e / 1e3 % 60,
                                    minutes: e / 1e3 / 60 % 60,
                                    hours: e / 1e3 / 60 / 60 % 24,
                                    days: e / 1e3 / 60 / 60 / 24
                                });
                            i.total <= 0 && (this.stop(), i.days = i.hours = i.minutes = i.seconds = 0), this.units.forEach((function(t) {
                                var e = String(Math.floor(i[t]));
                                e = e.length < 2 ? "0" + e : e;
                                var r = n[t];
                                r.textContent !== e && ((e = e.split("")).length !== r.children.length && be(r, e.map((function() {
                                    return "<span></span>"
                                })).join("")), e.forEach((function(t, e) {
                                    return r.children[e].textContent = t
                                })))
                            }))
                        }
                    },
                    methods: {
                        start: function() {
                            this.stop(), this.date && this.units.length && (this.$update(), this.timer = setInterval(this.$update, 1e3))
                        },
                        stop: function() {
                            this.timer && (clearInterval(this.timer), this.timer = null)
                        }
                    }
                },
                dr = {
                    props: {
                        animation: Number
                    },
                    data: {
                        animation: 150
                    },
                    computed: {
                        target: function() {
                            return this.$el
                        }
                    },
                    methods: {
                        animate: function(t) {
                            var e = this;
                            sr || (sr = xe(document.head, "<style>").sheet).insertRule(".uk-animation-target > * {\n            margin-top: 0 !important;\n            transform: none !important;\n        }", 0);
                            var n = Xt(this.target),
                                i = n.map((function(t) {
                                    return fr(t, !0)
                                })),
                                r = dn(this.target),
                                o = window.pageYOffset;
                            t(), en.cancel(this.target), n.forEach(en.cancel), pr(this.target), this.$update(this.target, "resize"), kn.flush();
                            var s = dn(this.target),
                                a = (n = n.concat(Xt(this.target).filter((function(t) {
                                    return !b(n, t)
                                })))).map((function(t, e) {
                                    return !(!t.parentNode || !(e in i)) && (i[e] ? Ft(t) ? gr(t) : {
                                        opacity: 0
                                    } : {
                                        opacity: Ft(t) ? 1 : 0
                                    })
                                }));
                            return i = a.map((function(t, r) {
                                var o = n[r].parentNode === e.target && (i[r] || fr(n[r]));
                                return o && (t ? "opacity" in t || (o.opacity % 1 ? t.opacity = 1 : delete o.opacity) : delete o.opacity), o
                            })), _e(this.target, "uk-animation-target"), n.forEach((function(t, e) {
                                return i[e] && Ue(t, i[e])
                            })), Ue(this.target, {
                                height: r,
                                display: "block"
                            }), Hn(window, o), le.all(n.map((function(t, n) {
                                return ["top", "left", "height", "width"].some((function(t) {
                                    return i[n][t] !== a[n][t]
                                })) && en.start(t, a[n], e.animation, "ease")
                            })).concat(r !== s && en.start(this.target, {
                                height: s
                            }, this.animation, "ease"))).then((function() {
                                n.forEach((function(t, e) {
                                    return Ue(t, {
                                        display: 0 === a[e].opacity ? "none" : "",
                                        zIndex: ""
                                    })
                                })), pr(e.target), e.$update(e.target, "resize"), kn.flush()
                            }), nt)
                        }
                    }
                };

            function fr(t, e) {
                var n = Ue(t, "zIndex");
                return !!Ft(t) && G({
                    display: "",
                    opacity: e ? Ue(t, "opacity") : "0",
                    pointerEvents: "none",
                    position: "absolute",
                    zIndex: "auto" === n ? ve(t) : n
                }, gr(t))
            }

            function pr(t) {
                Ue(t.children, {
                    height: "",
                    left: "",
                    opacity: "",
                    pointerEvents: "",
                    position: "",
                    top: "",
                    width: ""
                }), Le(t, "uk-animation-target"), Ue(t, {
                    height: "",
                    display: ""
                })
            }

            function gr(t) {
                var e = un(t),
                    n = e.height,
                    i = e.width,
                    r = cn(t);
                return {
                    top: r.top,
                    left: r.left,
                    height: n,
                    width: i
                }
            }
            var mr = {
                mixins: [dr],
                args: "target",
                props: {
                    target: Boolean,
                    selActive: Boolean
                },
                data: {
                    target: null,
                    selActive: !1,
                    attrItem: "uk-filter-control",
                    cls: "uk-active",
                    animation: 250
                },
                computed: {
                    toggles: {
                        get: function(t, e) {
                            return t.attrItem, Oe("[" + this.attrItem + "],[data-" + this.attrItem + "]", e)
                        },
                        watch: function() {
                            var t = this;
                            if (this.updateState(), !1 !== this.selActive) {
                                var e = Oe(this.selActive, this.$el);
                                this.toggles.forEach((function(n) {
                                    return Fe(n, t.cls, b(e, n))
                                }))
                            }
                        },
                        immediate: !0
                    },
                    target: function(t, e) {
                        return Pe(t.target, e)
                    },
                    children: {
                        get: function() {
                            return Xt(this.target)
                        },
                        watch: function(t, e) {
                            var n, i;
                            i = e, (n = t).length === i.length && n.every((function(t) {
                                return ~i.indexOf(t)
                            })) || this.updateState()
                        }
                    }
                },
                events: [{
                    name: "click",
                    delegate: function() {
                        return "[" + this.attrItem + "],[data-" + this.attrItem + "]"
                    },
                    handler: function(t) {
                        t.preventDefault(), this.apply(t.current)
                    }
                }],
                methods: {
                    apply: function(t) {
                        this.setState(yr(t, this.attrItem, this.getState()))
                    },
                    getState: function() {
                        var t = this;
                        return this.toggles.filter((function(e) {
                            return Re(e, t.cls)
                        })).reduce((function(e, n) {
                            return yr(n, t.attrItem, e)
                        }), {
                            filter: {
                                "": ""
                            },
                            sort: []
                        })
                    },
                    setState: function(t, e) {
                        var n = this;
                        void 0 === e && (e = !0), t = G({
                            filter: {
                                "": ""
                            },
                            sort: []
                        }, t), Qt(this.$el, "beforeFilter", [this, t]);
                        var i = this.children;
                        this.toggles.forEach((function(e) {
                            return Fe(e, n.cls, !! function(t, e, n) {
                                var i = n.filter;
                                void 0 === i && (i = {
                                    "": ""
                                });
                                var r = n.sort,
                                    o = r[0],
                                    s = r[1],
                                    a = vr(t, e),
                                    u = a.filter;
                                void 0 === u && (u = "");
                                var l = a.group;
                                void 0 === l && (l = "");
                                var c = a.sort,
                                    h = a.order;
                                return void 0 === h && (h = "asc"), B(c) ? l in i && u === i[l] || !u && l && !(l in i) && !i[""] : o === c && s === h
                            }(e, n.attrItem, t))
                        }));
                        var r = function() {
                            var e = function(t) {
                                var e = t.filter,
                                    n = "";
                                return K(e, (function(t) {
                                    return n += t || ""
                                })), n
                            }(t);
                            i.forEach((function(t) {
                                return Ue(t, "display", e && !Pt(t, e) ? "none" : "")
                            }));
                            var r = t.sort,
                                o = r[0],
                                s = r[1];
                            if (o) {
                                var a = function(t, e, n) {
                                    return G([], t).sort((function(t, i) {
                                        return lt(t, e).localeCompare(lt(i, e), void 0, {
                                            numeric: !0
                                        }) * ("asc" === n || -1)
                                    }))
                                }(i, o, s);
                                Y(a, i) || a.forEach((function(t) {
                                    return xe(n.target, t)
                                }))
                            }
                        };
                        e ? this.animate(r).then((function() {
                            return Qt(n.$el, "afterFilter", [n])
                        })) : (r(), Qt(this.$el, "afterFilter", [this]))
                    },
                    updateState: function() {
                        var t = this;
                        kn.write((function() {
                            return t.setState(t.getState(), !1)
                        }))
                    }
                }
            };

            function vr(t, e) {
                return Pn(lt(t, e), ["filter"])
            }

            function yr(t, e, n) {
                var i = vr(t, e),
                    r = i.filter,
                    o = i.group,
                    s = i.sort,
                    a = i.order;
                return void 0 === a && (a = "asc"), (r || B(s)) && (o ? r ? (delete n.filter[""], n.filter[o] = r) : (delete n.filter[o], (H(n.filter) || "" in n.filter) && (n.filter = {
                    "": r || ""
                })) : n.filter = {
                    "": r || ""
                }), B(s) || (n.sort = [s, a]), n
            }
            var wr = {
                slide: {
                    show: function(t) {
                        return [{
                            transform: xr(-100 * t)
                        }, {
                            transform: xr()
                        }]
                    },
                    percent: function(t) {
                        return br(t)
                    },
                    translate: function(t, e) {
                        return [{
                            transform: xr(-100 * e * t)
                        }, {
                            transform: xr(100 * e * (1 - t))
                        }]
                    }
                }
            };

            function br(t) {
                return Math.abs(Ue(t, "transform").split(",")[4] / t.offsetWidth) || 0
            }

            function xr(t, e) {
                return void 0 === t && (t = 0), void 0 === e && (e = "%"), t += t ? e : "", ct ? "translateX(" + t + ")" : "translate3d(" + t + ", 0, 0)"
            }

            function kr(t) {
                return "scale3d(" + t + ", " + t + ", 1)"
            }
            var Tr = G({}, wr, {
                fade: {
                    show: function() {
                        return [{
                            opacity: 0
                        }, {
                            opacity: 1
                        }]
                    },
                    percent: function(t) {
                        return 1 - Ue(t, "opacity")
                    },
                    translate: function(t) {
                        return [{
                            opacity: 1 - t
                        }, {
                            opacity: t
                        }]
                    }
                },
                scale: {
                    show: function() {
                        return [{
                            opacity: 0,
                            transform: kr(.8)
                        }, {
                            opacity: 1,
                            transform: kr(1)
                        }]
                    },
                    percent: function(t) {
                        return 1 - Ue(t, "opacity")
                    },
                    translate: function(t) {
                        return [{
                            opacity: 1 - t,
                            transform: kr(1 - .2 * t)
                        }, {
                            opacity: t,
                            transform: kr(.8 + .2 * t)
                        }]
                    }
                }
            });

            function Er(t, e, n) {
                Qt(t, Kt(e, !1, !1, n))
            }
            var Sr = {
                    props: {
                        autoplay: Boolean,
                        autoplayInterval: Number,
                        pauseOnHover: Boolean
                    },
                    data: {
                        autoplay: !1,
                        autoplayInterval: 7e3,
                        pauseOnHover: !0
                    },
                    connected: function() {
                        this.autoplay && this.startAutoplay()
                    },
                    disconnected: function() {
                        this.stopAutoplay()
                    },
                    update: function() {
                        st(this.slides, "tabindex", "-1")
                    },
                    events: [{
                        name: "visibilitychange",
                        el: document,
                        filter: function() {
                            return this.autoplay
                        },
                        handler: function() {
                            document.hidden ? this.stopAutoplay() : this.startAutoplay()
                        }
                    }],
                    methods: {
                        startAutoplay: function() {
                            var t = this;
                            this.stopAutoplay(), this.interval = setInterval((function() {
                                return (!t.draggable || !Pe(":focus", t.$el)) && (!t.pauseOnHover || !Pt(t.$el, ":hover")) && !t.stack.length && t.show("next")
                            }), this.autoplayInterval)
                        },
                        stopAutoplay: function() {
                            this.interval && clearInterval(this.interval)
                        }
                    }
                },
                Cr = {
                    props: {
                        draggable: Boolean
                    },
                    data: {
                        draggable: !0,
                        threshold: 10
                    },
                    created: function() {
                        var t = this;
                        ["start", "move", "end"].forEach((function(e) {
                            var n = t[e];
                            t[e] = function(e) {
                                var i = ue(e).x * (ht ? -1 : 1);
                                t.prevPos = i !== t.pos ? t.pos : t.prevPos, t.pos = i, n(e)
                            }
                        }))
                    },
                    events: [{
                        name: gt,
                        delegate: function() {
                            return this.selSlides
                        },
                        handler: function(t) {
                            var e;
                            !this.draggable || !ae(t) && (!(e = t.target).children.length && e.childNodes.length) || jt(t.target, zt) || t.button > 0 || this.length < 2 || this.start(t)
                        }
                    }, {
                        name: "touchmove",
                        passive: !1,
                        handler: "move",
                        filter: function() {
                            return "touchmove" === mt
                        },
                        delegate: function() {
                            return this.selSlides
                        }
                    }, {
                        name: "dragstart",
                        handler: function(t) {
                            t.preventDefault()
                        }
                    }],
                    methods: {
                        start: function() {
                            var t = this;
                            this.drag = this.pos, this._transitioner ? (this.percent = this._transitioner.percent(), this.drag += this._transitioner.getDistance() * this.percent * this.dir, this._transitioner.cancel(), this._transitioner.translate(this.percent), this.dragging = !0, this.stack = []) : this.prevIndex = this.index;
                            var e = "touchmove" !== mt ? Yt(document, mt, this.move, {
                                passive: !1
                            }) : nt;
                            this.unbindMove = function() {
                                e(), t.unbindMove = null
                            }, Yt(window, "scroll", this.unbindMove), Yt(window.visualViewport, "resize", this.unbindMove), Yt(document, vt + " " + bt, this.end, !0), Ue(this.list, "userSelect", "none")
                        },
                        move: function(t) {
                            var e = this;
                            if (this.unbindMove) {
                                var n = this.pos - this.drag;
                                if (!(0 === n || this.prevPos === this.pos || !this.dragging && Math.abs(n) < this.threshold)) {
                                    Ue(this.list, "pointerEvents", "none"), t.cancelable && t.preventDefault(), this.dragging = !0, this.dir = n < 0 ? 1 : -1;
                                    for (var i = this.slides, r = this.prevIndex, o = Math.abs(n), s = this.getIndex(r + this.dir, r), a = this._getDistance(r, s) || i[r].offsetWidth; s !== r && o > a;) this.drag -= a * this.dir, r = s, o -= a, s = this.getIndex(r + this.dir, r), a = this._getDistance(r, s) || i[r].offsetWidth;
                                    this.percent = o / a;
                                    var u, l = i[r],
                                        c = i[s],
                                        h = this.index !== s,
                                        d = r === s;
                                    [this.index, this.prevIndex].filter((function(t) {
                                        return !b([s, r], t)
                                    })).forEach((function(t) {
                                        Qt(i[t], "itemhidden", [e]), d && (u = !0, e.prevIndex = r)
                                    })), (this.index === r && this.prevIndex !== r || u) && Qt(i[this.index], "itemshown", [this]), h && (this.prevIndex = r, this.index = s, !d && Qt(l, "beforeitemhide", [this]), Qt(c, "beforeitemshow", [this])), this._transitioner = this._translate(Math.abs(this.percent), l, !d && c), h && (!d && Qt(l, "itemhide", [this]), Qt(c, "itemshow", [this]))
                                }
                            }
                        },
                        end: function() {
                            if (Jt(window, "scroll", this.unbindMove), Jt(window.visualViewport, "resize", this.unbindMove), this.unbindMove && this.unbindMove(), Jt(document, vt, this.end, !0), this.dragging)
                                if (this.dragging = null, this.index === this.prevIndex) this.percent = 1 - this.percent, this.dir *= -1, this._show(!1, this.index, !0), this._transitioner = null;
                                else {
                                    var t = (ht ? this.dir * (ht ? 1 : -1) : this.dir) < 0 == this.prevPos > this.pos;
                                    this.index = t ? this.index : this.prevIndex, t && (this.percent = 1 - this.percent), this.show(this.dir > 0 && !t || this.dir < 0 && t ? "next" : "previous", !0)
                                }
                            Ue(this.list, {
                                userSelect: "",
                                pointerEvents: ""
                            }), this.drag = this.percent = null
                        }
                    }
                },
                $r = {
                    mixins: [Sr, Cr, {
                        data: {
                            selNav: !1
                        },
                        computed: {
                            nav: function(t, e) {
                                return Pe(t.selNav, e)
                            },
                            selNavItem: function(t) {
                                var e = t.attrItem;
                                return "[" + e + "],[data-" + e + "]"
                            },
                            navItems: function(t, e) {
                                return Oe(this.selNavItem, e)
                            }
                        },
                        update: {
                            write: function() {
                                var t = this;
                                this.nav && this.length !== this.nav.children.length && be(this.nav, this.slides.map((function(e, n) {
                                    return "<li " + t.attrItem + '="' + n + '"><a href></a></li>'
                                })).join("")), Fe(Oe(this.selNavItem, this.$el).concat(this.nav), "uk-hidden", !this.maxIndex), this.updateNav()
                            },
                            events: ["resize"]
                        },
                        events: [{
                            name: "click",
                            delegate: function() {
                                return this.selNavItem
                            },
                            handler: function(t) {
                                t.preventDefault(), this.show(lt(t.current, this.attrItem))
                            }
                        }, {
                            name: "itemshow",
                            handler: "updateNav"
                        }],
                        methods: {
                            updateNav: function() {
                                var t = this,
                                    e = this.getValidIndex();
                                this.navItems.forEach((function(n) {
                                    var i = lt(n, t.attrItem);
                                    Fe(n, t.clsActive, F(i) === e), Fe(n, "uk-invisible", t.finite && ("previous" === i && 0 === e || "next" === i && e >= t.maxIndex))
                                }))
                            }
                        }
                    }],
                    props: {
                        clsActivated: Boolean,
                        easing: String,
                        index: Number,
                        finite: Boolean,
                        velocity: Number,
                        selSlides: String
                    },
                    data: function() {
                        return {
                            easing: "ease",
                            finite: !1,
                            velocity: 1,
                            index: 0,
                            prevIndex: -1,
                            stack: [],
                            percent: 0,
                            clsActive: "uk-active",
                            clsActivated: !1,
                            Transitioner: !1,
                            transitionOptions: {}
                        }
                    },
                    connected: function() {
                        this.prevIndex = -1, this.index = this.getValidIndex(this.index), this.stack = []
                    },
                    disconnected: function() {
                        Le(this.slides, this.clsActive)
                    },
                    computed: {
                        duration: function(t, e) {
                            var n = t.velocity;
                            return Ir(e.offsetWidth / n)
                        },
                        list: function(t, e) {
                            return Pe(t.selList, e)
                        },
                        maxIndex: function() {
                            return this.length - 1
                        },
                        selSlides: function(t) {
                            return t.selList + " " + (t.selSlides || "> *")
                        },
                        slides: {
                            get: function() {
                                return Oe(this.selSlides, this.$el)
                            },
                            watch: function() {
                                this.$reset()
                            }
                        },
                        length: function() {
                            return this.slides.length
                        }
                    },
                    events: {
                        itemshown: function() {
                            this.$update(this.list)
                        }
                    },
                    methods: {
                        show: function(t, e) {
                            var n = this;
                            if (void 0 === e && (e = !1), !this.dragging && this.length) {
                                var i = this.stack,
                                    r = e ? 0 : i.length,
                                    o = function() {
                                        i.splice(r, 1), i.length && n.show(i.shift(), !0)
                                    };
                                if (i[e ? "unshift" : "push"](t), !e && i.length > 1) 2 === i.length && this._transitioner.forward(Math.min(this.duration, 200));
                                else {
                                    var s = this.getIndex(this.index),
                                        a = Re(this.slides, this.clsActive) && this.slides[s],
                                        u = this.getIndex(t, this.index),
                                        l = this.slides[u];
                                    if (a !== l) {
                                        if (this.dir = function(t, e) {
                                                return "next" === t ? 1 : "previous" === t || t < e ? -1 : 1
                                            }(t, s), this.prevIndex = s, this.index = u, a && !Qt(a, "beforeitemhide", [this]) || !Qt(l, "beforeitemshow", [this, a])) return this.index = this.prevIndex, void o();
                                        var c = this._show(a, l, e).then((function() {
                                            return a && Qt(a, "itemhidden", [n]), Qt(l, "itemshown", [n]), new le((function(t) {
                                                kn.write((function() {
                                                    i.shift(), i.length ? n.show(i.shift(), !0) : n._transitioner = null, t()
                                                }))
                                            }))
                                        }));
                                        return a && Qt(a, "itemhide", [this]), Qt(l, "itemshow", [this]), c
                                    }
                                    o()
                                }
                            }
                        },
                        getIndex: function(t, e) {
                            return void 0 === t && (t = this.index), void 0 === e && (e = this.index), et(ye(t, this.slides, e, this.finite), 0, this.maxIndex)
                        },
                        getValidIndex: function(t, e) {
                            return void 0 === t && (t = this.index), void 0 === e && (e = this.prevIndex), this.getIndex(t, e)
                        },
                        _show: function(t, e, n) {
                            if (this._transitioner = this._getTransitioner(t, e, this.dir, G({
                                    easing: n ? e.offsetWidth < 600 ? "cubic-bezier(0.25, 0.46, 0.45, 0.94)" : "cubic-bezier(0.165, 0.84, 0.44, 1)" : this.easing
                                }, this.transitionOptions)), !n && !t) return this._translate(1), le.resolve();
                            var i = this.stack.length;
                            return this._transitioner[i > 1 ? "forward" : "show"](i > 1 ? Math.min(this.duration, 75 + 75 / (i - 1)) : this.duration, this.percent)
                        },
                        _getDistance: function(t, e) {
                            return this._getTransitioner(t, t !== e && e).getDistance()
                        },
                        _translate: function(t, e, n) {
                            void 0 === e && (e = this.prevIndex), void 0 === n && (n = this.index);
                            var i = this._getTransitioner(e !== n && e, n);
                            return i.translate(t), i
                        },
                        _getTransitioner: function(t, e, n, i) {
                            return void 0 === t && (t = this.prevIndex), void 0 === e && (e = this.index), void 0 === n && (n = this.dir || 1), void 0 === i && (i = this.transitionOptions), new this.Transitioner(_(t) ? this.slides[t] : t, _(e) ? this.slides[e] : e, n * (ht ? -1 : 1), i)
                        }
                    }
                };

            function Ir(t) {
                return .5 * t + 300
            }
            var Nr = {
                    mixins: [$r],
                    props: {
                        animation: String
                    },
                    data: {
                        animation: "slide",
                        clsActivated: "uk-transition-active",
                        Animations: wr,
                        Transitioner: function(t, e, n, i) {
                            var r = i.animation,
                                o = i.easing,
                                s = r.percent,
                                a = r.translate,
                                u = r.show;
                            void 0 === u && (u = nt);
                            var l = u(n),
                                c = new ce;
                            return {
                                dir: n,
                                show: function(i, r, s) {
                                    var a = this;
                                    void 0 === r && (r = 0);
                                    var u = s ? "linear" : o;
                                    return i -= Math.round(i * et(r, -1, 1)), this.translate(r), Er(e, "itemin", {
                                        percent: r,
                                        duration: i,
                                        timing: u,
                                        dir: n
                                    }), Er(t, "itemout", {
                                        percent: 1 - r,
                                        duration: i,
                                        timing: u,
                                        dir: n
                                    }), le.all([en.start(e, l[1], i, u), en.start(t, l[0], i, u)]).then((function() {
                                        a.reset(), c.resolve()
                                    }), nt), c.promise
                                },
                                stop: function() {
                                    return en.stop([e, t])
                                },
                                cancel: function() {
                                    en.cancel([e, t])
                                },
                                reset: function() {
                                    for (var n in l[0]) Ue([e, t], n, "")
                                },
                                forward: function(n, i) {
                                    return void 0 === i && (i = this.percent()), en.cancel([e, t]), this.show(n, i, !0)
                                },
                                translate: function(i) {
                                    this.reset();
                                    var r = a(i, n);
                                    Ue(e, r[1]), Ue(t, r[0]), Er(e, "itemtranslatein", {
                                        percent: i,
                                        dir: n
                                    }), Er(t, "itemtranslateout", {
                                        percent: 1 - i,
                                        dir: n
                                    })
                                },
                                percent: function() {
                                    return s(t || e, e, n)
                                },
                                getDistance: function() {
                                    return t && t.offsetWidth
                                }
                            }
                        }
                    },
                    computed: {
                        animation: function(t) {
                            var e = t.animation,
                                n = t.Animations;
                            return G(n[e] || n.slide, {
                                name: e
                            })
                        },
                        transitionOptions: function() {
                            return {
                                animation: this.animation
                            }
                        }
                    },
                    events: {
                        "itemshow itemhide itemshown itemhidden": function(t) {
                            var e = t.target;
                            this.$update(e)
                        },
                        beforeitemshow: function(t) {
                            _e(t.target, this.clsActive)
                        },
                        itemshown: function(t) {
                            _e(t.target, this.clsActivated)
                        },
                        itemhidden: function(t) {
                            Le(t.target, this.clsActive, this.clsActivated)
                        }
                    }
                },
                Ar = {
                    mixins: [Wi, Ui, Jn, Nr],
                    functional: !0,
                    props: {
                        delayControls: Number,
                        preload: Number,
                        videoAutoplay: Boolean,
                        template: String
                    },
                    data: function() {
                        return {
                            preload: 1,
                            videoAutoplay: !1,
                            delayControls: 3e3,
                            items: [],
                            cls: "uk-open",
                            clsPage: "uk-lightbox-page",
                            selList: ".uk-lightbox-items",
                            attrItem: "uk-lightbox-item",
                            selClose: ".uk-close-large",
                            selCaption: ".uk-lightbox-caption",
                            pauseOnHover: !1,
                            velocity: 2,
                            Animations: Tr,
                            template: '<div class="uk-lightbox uk-overflow-hidden"> <ul class="uk-lightbox-items"></ul> <div class="uk-lightbox-toolbar uk-position-top uk-text-right uk-transition-slide-top uk-transition-opaque"> <button class="uk-lightbox-toolbar-icon uk-close-large" type="button" uk-close></button> </div> <a class="uk-lightbox-button uk-position-center-left uk-position-medium uk-transition-fade" href uk-slidenav-previous uk-lightbox-item="previous"></a> <a class="uk-lightbox-button uk-position-center-right uk-position-medium uk-transition-fade" href uk-slidenav-next uk-lightbox-item="next"></a> <div class="uk-lightbox-toolbar uk-lightbox-caption uk-position-bottom uk-text-center uk-transition-slide-bottom uk-transition-opaque"></div> </div>'
                        }
                    },
                    created: function() {
                        var t = Pe(this.template),
                            e = Pe(this.selList, t);
                        this.items.forEach((function() {
                            return xe(e, "<li>")
                        })), this.$mount(xe(this.container, t))
                    },
                    computed: {
                        caption: function(t, e) {
                            return t.selCaption, Pe(".uk-lightbox-caption", e)
                        }
                    },
                    events: [{
                        name: mt + " " + gt + " keydown",
                        handler: "showControls"
                    }, {
                        name: "click",
                        self: !0,
                        delegate: function() {
                            return this.selSlides
                        },
                        handler: function(t) {
                            t.defaultPrevented || this.hide()
                        }
                    }, {
                        name: "shown",
                        self: !0,
                        handler: function() {
                            this.showControls()
                        }
                    }, {
                        name: "hide",
                        self: !0,
                        handler: function() {
                            this.hideControls(), Le(this.slides, this.clsActive), en.stop(this.slides)
                        }
                    }, {
                        name: "hidden",
                        self: !0,
                        handler: function() {
                            this.$destroy(!0)
                        }
                    }, {
                        name: "keyup",
                        el: document,
                        handler: function(t) {
                            if (this.isToggled(this.$el) && this.draggable) switch (t.keyCode) {
                                case 37:
                                    this.show("previous");
                                    break;
                                case 39:
                                    this.show("next")
                            }
                        }
                    }, {
                        name: "beforeitemshow",
                        handler: function(t) {
                            this.isToggled() || (this.draggable = !1, t.preventDefault(), this.toggleElement(this.$el, !0, !1), this.animation = Tr.scale, Le(t.target, this.clsActive), this.stack.splice(1, 0, this.index))
                        }
                    }, {
                        name: "itemshow",
                        handler: function() {
                            be(this.caption, this.getItem().caption || "");
                            for (var t = -this.preload; t <= this.preload; t++) this.loadItem(this.index + t)
                        }
                    }, {
                        name: "itemshown",
                        handler: function() {
                            this.draggable = this.$props.draggable
                        }
                    }, {
                        name: "itemload",
                        handler: function(t, e) {
                            var n = this,
                                i = e.source,
                                r = e.type,
                                o = e.alt;
                            void 0 === o && (o = "");
                            var s = e.poster,
                                a = e.attrs;
                            if (void 0 === a && (a = {}), this.setItem(e, "<span uk-spinner></span>"), i) {
                                var u, l = {
                                    frameborder: "0",
                                    allow: "autoplay",
                                    allowfullscreen: "",
                                    style: "max-width: 100%; box-sizing: border-box;",
                                    "uk-responsive": "",
                                    "uk-video": "" + this.videoAutoplay
                                };
                                if ("image" === r || i.match(/\.(jpe?g|png|gif|svg|webp)($|\?)/i)) ge(i, a.srcset, a.size).then((function(t) {
                                    var r = t.width,
                                        s = t.height;
                                    return n.setItem(e, Dr("img", G({
                                        src: i,
                                        width: r,
                                        height: s,
                                        alt: o
                                    }, a)))
                                }), (function() {
                                    return n.setError(e)
                                }));
                                else if ("video" === r || i.match(/\.(mp4|webm|ogv)($|\?)/i)) {
                                    var c = Dr("video", G({
                                        src: i,
                                        poster: s,
                                        controls: "",
                                        playsinline: "",
                                        "uk-video": "" + this.videoAutoplay
                                    }, a));
                                    Yt(c, "loadedmetadata", (function() {
                                        st(c, {
                                            width: c.videoWidth,
                                            height: c.videoHeight
                                        }), n.setItem(e, c)
                                    })), Yt(c, "error", (function() {
                                        return n.setError(e)
                                    }))
                                } else "iframe" === r || i.match(/\.(html|php)($|\?)/i) ? this.setItem(e, Dr("iframe", G({
                                    src: i,
                                    frameborder: "0",
                                    allowfullscreen: "",
                                    class: "uk-lightbox-iframe"
                                }, a))) : (u = i.match(/\/\/(?:.*?youtube(-nocookie)?\..*?[?&]v=|youtu\.be\/)([\w-]{11})[&?]?(.*)?/)) ? this.setItem(e, Dr("iframe", G({
                                    src: "https://www.youtube" + (u[1] || "") + ".com/embed/" + u[2] + (u[3] ? "?" + u[3] : ""),
                                    width: 1920,
                                    height: 1080
                                }, l, a))) : (u = i.match(/\/\/.*?vimeo\.[a-z]+\/(\d+)[&?]?(.*)?/)) && pe("https://vimeo.com/api/oembed.json?maxwidth=1920&url=" + encodeURI(i), {
                                    responseType: "json",
                                    withCredentials: !1
                                }).then((function(t) {
                                    var i = t.response,
                                        r = i.height,
                                        o = i.width;
                                    return n.setItem(e, Dr("iframe", G({
                                        src: "https://player.vimeo.com/video/" + u[1] + (u[2] ? "?" + u[2] : ""),
                                        width: o,
                                        height: r
                                    }, l, a)))
                                }), (function() {
                                    return n.setError(e)
                                }))
                            }
                        }
                    }],
                    methods: {
                        loadItem: function(t) {
                            void 0 === t && (t = this.index);
                            var e = this.getItem(t);
                            this.getSlide(e).childElementCount || Qt(this.$el, "itemload", [e])
                        },
                        getItem: function(t) {
                            return void 0 === t && (t = this.index), this.items[ye(t, this.slides)]
                        },
                        setItem: function(t, e) {
                            Qt(this.$el, "itemloaded", [this, be(this.getSlide(t), e)])
                        },
                        getSlide: function(t) {
                            return this.slides[this.items.indexOf(t)]
                        },
                        setError: function(t) {
                            this.setItem(t, '<span uk-icon="icon: bolt; ratio: 2"></span>')
                        },
                        showControls: function() {
                            clearTimeout(this.controlsTimer), this.controlsTimer = setTimeout(this.hideControls, this.delayControls), _e(this.$el, "uk-active", "uk-transition-active")
                        },
                        hideControls: function() {
                            Le(this.$el, "uk-active", "uk-transition-active")
                        }
                    }
                };

            function Dr(t, e) {
                var n = De("<" + t + ">");
                return st(n, e), n
            }
            var Mr, Pr = {
                install: function(t, e) {
                    t.lightboxPanel || t.component("lightboxPanel", Ar), G(e.props, t.component("lightboxPanel").options.props)
                },
                props: {
                    toggle: String
                },
                data: {
                    toggle: "a"
                },
                computed: {
                    toggles: {
                        get: function(t, e) {
                            return Oe(t.toggle, e)
                        },
                        watch: function() {
                            this.hide()
                        }
                    }
                },
                disconnected: function() {
                    this.hide()
                },
                events: [{
                    name: "click",
                    delegate: function() {
                        return this.toggle + ":not(.uk-disabled)"
                    },
                    handler: function(t) {
                        t.preventDefault(), this.show(t.current)
                    }
                }],
                methods: {
                    show: function(t) {
                        var e = this,
                            n = tt(this.toggles.map(Or), "source");
                        if (M(t)) {
                            var i = Or(t).source;
                            t = k(n, (function(t) {
                                var e = t.source;
                                return i === e
                            }))
                        }
                        return this.panel = this.panel || this.$create("lightboxPanel", G({}, this.$props, {
                            items: n
                        })), Yt(this.panel.$el, "hidden", (function() {
                            return e.panel = !1
                        })), this.panel.show(t)
                    },
                    hide: function() {
                        return this.panel && this.panel.hide()
                    }
                }
            };

            function Or(t) {
                var e = {};
                return ["href", "caption", "type", "poster", "alt", "attrs"].forEach((function(n) {
                    e["href" === n ? "source" : n] = lt(t, n)
                })), e.attrs = Pn(e.attrs), e
            }
            var jr = {
                    functional: !0,
                    args: ["message", "status"],
                    data: {
                        message: "",
                        status: "",
                        timeout: 5e3,
                        group: null,
                        pos: "top-center",
                        clsContainer: "uk-notification",
                        clsClose: "uk-notification-close",
                        clsMsg: "uk-notification-message"
                    },
                    install: function(t) {
                        t.notification.closeAll = function(e, n) {
                            Me(document.body, (function(i) {
                                var r = t.getComponent(i, "notification");
                                !r || e && e !== r.group || r.close(n)
                            }))
                        }
                    },
                    computed: {
                        marginProp: function(t) {
                            return "margin" + (f(t.pos, "top") ? "Top" : "Bottom")
                        },
                        startProps: function() {
                            var t;
                            return (t = {
                                opacity: 0
                            })[this.marginProp] = -this.$el.offsetHeight, t
                        }
                    },
                    created: function() {
                        var t = Pe("." + this.clsContainer + "-" + this.pos, this.$container) || xe(this.$container, '<div class="' + this.clsContainer + " " + this.clsContainer + "-" + this.pos + '" style="display: block"></div>');
                        this.$mount(xe(t, '<div class="' + this.clsMsg + (this.status ? " " + this.clsMsg + "-" + this.status : "") + '"> <a href class="' + this.clsClose + '" data-uk-close></a> <div>' + this.message + "</div> </div>"))
                    },
                    connected: function() {
                        var t, e = this,
                            n = z(Ue(this.$el, this.marginProp));
                        en.start(Ue(this.$el, this.startProps), (t = {
                            opacity: 1
                        }, t[this.marginProp] = n, t)).then((function() {
                            e.timeout && (e.timer = setTimeout(e.close, e.timeout))
                        }))
                    },
                    events: (Mr = {
                        click: function(t) {
                            jt(t.target, 'a[href="#"],a[href=""]') && t.preventDefault(), this.close()
                        }
                    }, Mr[yt] = function() {
                        this.timer && clearTimeout(this.timer)
                    }, Mr[wt] = function() {
                        this.timeout && (this.timer = setTimeout(this.close, this.timeout))
                    }, Mr),
                    methods: {
                        close: function(t) {
                            var e = this,
                                n = function() {
                                    var t = e.$el.parentNode;
                                    Qt(e.$el, "close", [e]), Se(e.$el), t && !t.hasChildNodes() && Se(t)
                                };
                            this.timer && clearTimeout(this.timer), t ? n() : en.start(this.$el, this.startProps).then(n)
                        }
                    }
                },
                _r = ["x", "y", "bgx", "bgy", "rotate", "scale", "color", "backgroundColor", "borderColor", "opacity", "blur", "hue", "grayscale", "invert", "saturate", "sepia", "fopacity", "stroke"],
                Lr = {
                    mixins: [zi],
                    props: _r.reduce((function(t, e) {
                        return t[e] = "list", t
                    }), {}),
                    data: _r.reduce((function(t, e) {
                        return t[e] = void 0, t
                    }), {}),
                    computed: {
                        props: function(t, e) {
                            var n = this;
                            return _r.reduce((function(i, r) {
                                if (B(t[r])) return i;
                                var o, s, a, u = r.match(/color/i),
                                    l = u || "opacity" === r,
                                    c = t[r].slice(0);
                                l && Ue(e, r, ""), c.length < 2 && c.unshift(("scale" === r ? 1 : l ? Ue(e, r) : 0) || 0);
                                var h = function(t) {
                                    return t.reduce((function(t, e) {
                                        return j(e) && e.replace(/-|\d/g, "").trim() || t
                                    }), "")
                                }(c);
                                if (u) {
                                    var d = e.style.color;
                                    c = c.map((function(t) {
                                        return function(t, e) {
                                            return Ue(Ue(t, "color", e), "color").split(/[(),]/g).slice(1, -1).concat(1).slice(0, 4).map(z)
                                        }(e, t)
                                    })), e.style.color = d
                                } else if (f(r, "bg")) {
                                    var p = "bgy" === r ? "height" : "width";
                                    if (c = c.map((function(t) {
                                            return bn(t, p, n.$el)
                                        })), Ue(e, "background-position-" + r[2], ""), s = Ue(e, "backgroundPosition").split(" ")["x" === r[2] ? 0 : 1], n.covers) {
                                        var g = Math.min.apply(Math, c),
                                            m = Math.max.apply(Math, c),
                                            v = c.indexOf(g) < c.indexOf(m);
                                        a = m - g, c = c.map((function(t) {
                                            return t - (v ? g : m)
                                        })), o = (v ? -a : 0) + "px"
                                    } else o = s
                                } else c = c.map(z);
                                if ("stroke" === r) {
                                    if (!c.some((function(t) {
                                            return t
                                        }))) return i;
                                    var y = ki(n.$el);
                                    Ue(e, "strokeDasharray", y), "%" === h && (c = c.map((function(t) {
                                        return t * y / 100
                                    }))), c = c.reverse(), r = "strokeDashoffset"
                                }
                                return i[r] = {
                                    steps: c,
                                    unit: h,
                                    pos: o,
                                    bgPos: s,
                                    diff: a
                                }, i
                            }), {})
                        },
                        bgProps: function() {
                            var t = this;
                            return ["bgx", "bgy"].filter((function(e) {
                                return e in t.props
                            }))
                        },
                        covers: function(t, e) {
                            return function(t) {
                                var e = t.style.backgroundSize,
                                    n = "cover" === Ue(Ue(t, "backgroundSize", ""), "backgroundSize");
                                return t.style.backgroundSize = e, n
                            }(e)
                        }
                    },
                    disconnected: function() {
                        delete this._image
                    },
                    update: {
                        read: function(t) {
                            var e = this;
                            if (t.active = this.matchMedia, t.active) {
                                if (!t.image && this.covers && this.bgProps.length) {
                                    var n = Ue(this.$el, "backgroundImage").replace(/^none|url\(["']?(.+?)["']?\)$/, "$1");
                                    if (n) {
                                        var i = new Image;
                                        i.src = n, t.image = i, i.naturalWidth || (i.onload = function() {
                                            return e.$update()
                                        })
                                    }
                                }
                                var r = t.image;
                                if (r && r.naturalWidth) {
                                    var o = {
                                            width: this.$el.offsetWidth,
                                            height: this.$el.offsetHeight
                                        },
                                        s = {
                                            width: r.naturalWidth,
                                            height: r.naturalHeight
                                        },
                                        a = ot.cover(s, o);
                                    this.bgProps.forEach((function(t) {
                                        var n = e.props[t],
                                            i = n.diff,
                                            r = n.bgPos,
                                            u = n.steps,
                                            l = "bgy" === t ? "height" : "width",
                                            c = a[l] - o[l];
                                        if (c < i) o[l] = a[l] + i - c;
                                        else if (c > i) {
                                            var h = o[l] / bn(r, l, e.$el);
                                            h && (e.props[t].steps = u.map((function(t) {
                                                return t - (c - i) / h
                                            })))
                                        }
                                        a = ot.cover(s, o)
                                    })), t.dim = a
                                }
                            }
                        },
                        write: function(t) {
                            var e = t.dim;
                            t.active ? e && Ue(this.$el, {
                                backgroundSize: e.width + "px " + e.height + "px",
                                backgroundRepeat: "no-repeat"
                            }) : Ue(this.$el, {
                                backgroundSize: "",
                                backgroundRepeat: ""
                            })
                        },
                        events: ["resize"]
                    },
                    methods: {
                        reset: function() {
                            var t = this;
                            K(this.getCss(0), (function(e, n) {
                                return Ue(t.$el, n, "")
                            }))
                        },
                        getCss: function(t) {
                            var e = this.props;
                            return Object.keys(e).reduce((function(n, i) {
                                var r = e[i],
                                    o = r.steps,
                                    s = r.unit,
                                    a = r.pos,
                                    u = function(t, e, n) {
                                        void 0 === n && (n = 2);
                                        var i = Hr(t, e),
                                            r = i[0],
                                            o = i[1],
                                            s = i[2];
                                        return (_(r) ? r + Math.abs(r - o) * s * (r < o ? 1 : -1) : +o).toFixed(n)
                                    }(o, t);
                                switch (i) {
                                    case "x":
                                    case "y":
                                        s = s || "px", n.transform += " translate" + c(i) + "(" + z(u).toFixed("px" === s ? 0 : 2) + s + ")";
                                        break;
                                    case "rotate":
                                        s = s || "deg", n.transform += " rotate(" + (u + s) + ")";
                                        break;
                                    case "scale":
                                        n.transform += " scale(" + u + ")";
                                        break;
                                    case "bgy":
                                    case "bgx":
                                        n["background-position-" + i[2]] = "calc(" + a + " + " + u + "px)";
                                        break;
                                    case "color":
                                    case "backgroundColor":
                                    case "borderColor":
                                        var l = Hr(o, t),
                                            h = l[0],
                                            d = l[1],
                                            f = l[2];
                                        n[i] = "rgba(" + h.map((function(t, e) {
                                            return t += f * (d[e] - t), 3 === e ? z(t) : parseInt(t, 10)
                                        })).join(",") + ")";
                                        break;
                                    case "blur":
                                        s = s || "px", n.filter += " blur(" + (u + s) + ")";
                                        break;
                                    case "hue":
                                        s = s || "deg", n.filter += " hue-rotate(" + (u + s) + ")";
                                        break;
                                    case "fopacity":
                                        s = s || "%", n.filter += " opacity(" + (u + s) + ")";
                                        break;
                                    case "grayscale":
                                    case "invert":
                                    case "saturate":
                                    case "sepia":
                                        s = s || "%", n.filter += " " + i + "(" + (u + s) + ")";
                                        break;
                                    default:
                                        n[i] = u
                                }
                                return n
                            }), {
                                transform: "",
                                filter: ""
                            })
                        }
                    }
                };

            function Hr(t, e) {
                var n = t.length - 1,
                    i = Math.min(Math.floor(n * e), n - 1),
                    r = t.slice(i, i + 2);
                return r.push(1 === e ? 1 : e % (1 / n) * n), r
            }
            var Br = {
                    mixins: [Lr],
                    props: {
                        target: String,
                        viewport: Number,
                        easing: Number
                    },
                    data: {
                        target: !1,
                        viewport: 1,
                        easing: 1
                    },
                    computed: {
                        target: function(t, e) {
                            var n = t.target;
                            return function t(e) {
                                return e ? "offsetTop" in e ? e : t(e.parentNode) : document.body
                            }(n && xt(n, e) || e)
                        }
                    },
                    update: {
                        read: function(t, e) {
                            var n = t.percent;
                            if ("scroll" !== e && (n = !1), t.active) {
                                var i = n;
                                return {
                                    percent: n = function(t, e) {
                                        return et(t * (1 - (e - e * t)))
                                    }(Rn(this.target) / (this.viewport || 1), this.easing),
                                    style: i !== n && this.getCss(n)
                                }
                            }
                        },
                        write: function(t) {
                            var e = t.style;
                            t.active ? e && Ue(this.$el, e) : this.reset()
                        },
                        events: ["scroll", "resize"]
                    }
                },
                Rr = {
                    update: {
                        write: function() {
                            if (!this.stack.length && !this.dragging) {
                                var t = this.getValidIndex(this.index);
                                ~this.prevIndex && this.index === t || this.show(t)
                            }
                        },
                        events: ["resize"]
                    }
                };

            function Fr(t, e, n) {
                var i = Wr(t, e);
                return n ? i - function(t, e) {
                    return un(e).width / 2 - un(t).width / 2
                }(t, e) : Math.min(i, zr(e))
            }

            function zr(t) {
                return Math.max(0, qr(t) - un(t).width)
            }

            function qr(t) {
                return Ur(t).reduce((function(t, e) {
                    return un(e).width + t
                }), 0)
            }

            function Wr(t, e) {
                return (cn(t).left + (ht ? un(t).width - un(e).width : 0)) * (ht ? -1 : 1)
            }

            function Vr(t, e, n) {
                Qt(t, Kt(e, !1, !1, n))
            }

            function Ur(t) {
                return Xt(t)
            }
            var Xr = {
                    mixins: [Yn, $r, Rr],
                    props: {
                        center: Boolean,
                        sets: Boolean
                    },
                    data: {
                        center: !1,
                        sets: !1,
                        attrItem: "uk-slider-item",
                        selList: ".uk-slider-items",
                        selNav: ".uk-slider-nav",
                        clsContainer: "uk-slider-container",
                        Transitioner: function(t, e, n, i) {
                            var r = i.center,
                                o = i.easing,
                                s = i.list,
                                a = new ce,
                                u = t ? Fr(t, s, r) : Fr(e, s, r) + un(e).width * n,
                                l = e ? Fr(e, s, r) : u + un(t).width * n * (ht ? -1 : 1);
                            return {
                                dir: n,
                                show: function(e, i, r) {
                                    void 0 === i && (i = 0);
                                    var u = r ? "linear" : o;
                                    return e -= Math.round(e * et(i, -1, 1)), this.translate(i), t && this.updateTranslates(), i = t ? i : et(i, 0, 1), Vr(this.getItemIn(), "itemin", {
                                        percent: i,
                                        duration: e,
                                        timing: u,
                                        dir: n
                                    }), t && Vr(this.getItemIn(!0), "itemout", {
                                        percent: 1 - i,
                                        duration: e,
                                        timing: u,
                                        dir: n
                                    }), en.start(s, {
                                        transform: xr(-l * (ht ? -1 : 1), "px")
                                    }, e, u).then(a.resolve, nt), a.promise
                                },
                                stop: function() {
                                    return en.stop(s)
                                },
                                cancel: function() {
                                    en.cancel(s)
                                },
                                reset: function() {
                                    Ue(s, "transform", "")
                                },
                                forward: function(t, e) {
                                    return void 0 === e && (e = this.percent()), en.cancel(s), this.show(t, e, !0)
                                },
                                translate: function(e) {
                                    var i = this.getDistance() * n * (ht ? -1 : 1);
                                    Ue(s, "transform", xr(et(i - i * e - l, -qr(s), un(s).width) * (ht ? -1 : 1), "px")), this.updateTranslates(), t && (e = et(e, -1, 1), Vr(this.getItemIn(), "itemtranslatein", {
                                        percent: e,
                                        dir: n
                                    }), Vr(this.getItemIn(!0), "itemtranslateout", {
                                        percent: 1 - e,
                                        dir: n
                                    }))
                                },
                                percent: function() {
                                    return Math.abs((Ue(s, "transform").split(",")[4] * (ht ? -1 : 1) + u) / (l - u))
                                },
                                getDistance: function() {
                                    return Math.abs(l - u)
                                },
                                getItemIn: function(e) {
                                    void 0 === e && (e = !1);
                                    var i = this.getActives(),
                                        r = Z(Ur(s), "offsetLeft"),
                                        o = ve(r, i[n * (e ? -1 : 1) > 0 ? i.length - 1 : 0]);
                                    return ~o && r[o + (t && !e ? n : 0)]
                                },
                                getActives: function() {
                                    var n = Fr(t || e, s, r);
                                    return Z(Ur(s).filter((function(t) {
                                        var e = Wr(t, s);
                                        return e >= n && e + un(t).width <= un(s).width + n
                                    })), "offsetLeft")
                                },
                                updateTranslates: function() {
                                    var t = this.getActives();
                                    Ur(s).forEach((function(n) {
                                        var i = b(t, n);
                                        Vr(n, "itemtranslate" + (i ? "in" : "out"), {
                                            percent: i ? 1 : 0,
                                            dir: n.offsetLeft <= e.offsetLeft ? 1 : -1
                                        })
                                    }))
                                }
                            }
                        }
                    },
                    computed: {
                        avgWidth: function() {
                            return qr(this.list) / this.length
                        },
                        finite: function(t) {
                            return t.finite || Math.ceil(qr(this.list)) < un(this.list).width + Ur(this.list).reduce((function(t, e) {
                                return Math.max(t, un(e).width)
                            }), 0) + this.center
                        },
                        maxIndex: function() {
                            if (!this.finite || this.center && !this.sets) return this.length - 1;
                            if (this.center) return Q(this.sets);
                            Ue(this.slides, "order", "");
                            for (var t = zr(this.list), e = this.length; e--;)
                                if (Wr(this.list.children[e], this.list) < t) return Math.min(e + 1, this.length - 1);
                            return 0
                        },
                        sets: function(t) {
                            var e = this,
                                n = t.sets,
                                i = un(this.list).width / (this.center ? 2 : 1),
                                r = 0,
                                o = i,
                                s = 0;
                            return !H(n = n && this.slides.reduce((function(t, n, a) {
                                var u = un(n).width;
                                if (s + u > r && (!e.center && a > e.maxIndex && (a = e.maxIndex), !b(t, a))) {
                                    var l = e.slides[a + 1];
                                    e.center && l && u < o - un(l).width / 2 ? o -= u : (o = i, t.push(a), r = s + i + (e.center ? u / 2 : 0))
                                }
                                return s += u, t
                            }), [])) && n
                        },
                        transitionOptions: function() {
                            return {
                                center: this.center,
                                list: this.list
                            }
                        }
                    },
                    connected: function() {
                        Fe(this.$el, this.clsContainer, !Pe("." + this.clsContainer, this.$el))
                    },
                    update: {
                        write: function() {
                            var t = this;
                            Oe("[" + this.attrItem + "],[data-" + this.attrItem + "]", this.$el).forEach((function(e) {
                                var n = lt(e, t.attrItem);
                                t.maxIndex && Fe(e, "uk-hidden", L(n) && (t.sets && !b(t.sets, z(n)) || n > t.maxIndex))
                            })), !this.length || this.dragging || this.stack.length || (this.reorder(), this._translate(1));
                            var e = this._getTransitioner(this.index).getActives();
                            this.slides.forEach((function(n) {
                                return Fe(n, t.clsActive, b(e, n))
                            })), (!this.sets || b(this.sets, z(this.index))) && this.slides.forEach((function(n) {
                                return Fe(n, t.clsActivated, b(e, n))
                            }))
                        },
                        events: ["resize"]
                    },
                    events: {
                        beforeitemshow: function(t) {
                            !this.dragging && this.sets && this.stack.length < 2 && !b(this.sets, this.index) && (this.index = this.getValidIndex());
                            var e = Math.abs(this.index - this.prevIndex + (this.dir > 0 && this.index < this.prevIndex || this.dir < 0 && this.index > this.prevIndex ? (this.maxIndex + 1) * this.dir : 0));
                            if (!this.dragging && e > 1) {
                                for (var n = 0; n < e; n++) this.stack.splice(1, 0, this.dir > 0 ? "next" : "previous");
                                t.preventDefault()
                            } else this.duration = Ir(this.avgWidth / this.velocity) * (un(this.dir < 0 || !this.slides[this.prevIndex] ? this.slides[this.index] : this.slides[this.prevIndex]).width / this.avgWidth), this.reorder()
                        },
                        itemshow: function() {
                            ~this.prevIndex && _e(this._getTransitioner().getItemIn(), this.clsActive)
                        }
                    },
                    methods: {
                        reorder: function() {
                            var t = this;
                            if (this.finite) Ue(this.slides, "order", "");
                            else {
                                var e = this.dir > 0 && this.slides[this.prevIndex] ? this.prevIndex : this.index;
                                if (this.slides.forEach((function(n, i) {
                                        return Ue(n, "order", t.dir > 0 && i < e ? 1 : t.dir < 0 && i >= t.index ? -1 : "")
                                    })), this.center)
                                    for (var n = this.slides[e], i = un(this.list).width / 2 - un(n).width / 2, r = 0; i > 0;) {
                                        var o = this.getIndex(--r + e, e),
                                            s = this.slides[o];
                                        Ue(s, "order", o > e ? -2 : -1), i -= un(s).width
                                    }
                            }
                        },
                        getValidIndex: function(t, e) {
                            if (void 0 === t && (t = this.index), void 0 === e && (e = this.prevIndex), t = this.getIndex(t, e), !this.sets) return t;
                            var n;
                            do {
                                if (b(this.sets, t)) return t;
                                n = t, t = this.getIndex(t + this.dir, e)
                            } while (t !== n);
                            return t
                        }
                    }
                },
                Yr = {
                    mixins: [Lr],
                    data: {
                        selItem: "!li"
                    },
                    computed: {
                        item: function(t, e) {
                            return xt(t.selItem, e)
                        }
                    },
                    events: [{
                        name: "itemshown",
                        self: !0,
                        el: function() {
                            return this.item
                        },
                        handler: function() {
                            Ue(this.$el, this.getCss(.5))
                        }
                    }, {
                        name: "itemin itemout",
                        self: !0,
                        el: function() {
                            return this.item
                        },
                        handler: function(t) {
                            var e = t.type,
                                n = t.detail,
                                i = n.percent,
                                r = n.duration,
                                o = n.timing,
                                s = n.dir;
                            en.cancel(this.$el), Ue(this.$el, this.getCss(Gr(e, s, i))), en.start(this.$el, this.getCss(Jr(e) ? .5 : s > 0 ? 1 : 0), r, o).catch(nt)
                        }
                    }, {
                        name: "transitioncanceled transitionend",
                        self: !0,
                        el: function() {
                            return this.item
                        },
                        handler: function() {
                            en.cancel(this.$el)
                        }
                    }, {
                        name: "itemtranslatein itemtranslateout",
                        self: !0,
                        el: function() {
                            return this.item
                        },
                        handler: function(t) {
                            var e = t.type,
                                n = t.detail,
                                i = n.percent,
                                r = n.dir;
                            en.cancel(this.$el), Ue(this.$el, this.getCss(Gr(e, r, i)))
                        }
                    }]
                };

            function Jr(t) {
                return g(t, "in")
            }

            function Gr(t, e, n) {
                return n /= 2, Jr(t) ? e < 0 ? 1 - n : n : e < 0 ? n : 1 - n
            }
            var Qr, Kr, Zr = G({}, wr, {
                    fade: {
                        show: function() {
                            return [{
                                opacity: 0,
                                zIndex: 0
                            }, {
                                zIndex: -1
                            }]
                        },
                        percent: function(t) {
                            return 1 - Ue(t, "opacity")
                        },
                        translate: function(t) {
                            return [{
                                opacity: 1 - t,
                                zIndex: 0
                            }, {
                                zIndex: -1
                            }]
                        }
                    },
                    scale: {
                        show: function() {
                            return [{
                                opacity: 0,
                                transform: kr(1.5),
                                zIndex: 0
                            }, {
                                zIndex: -1
                            }]
                        },
                        percent: function(t) {
                            return 1 - Ue(t, "opacity")
                        },
                        translate: function(t) {
                            return [{
                                opacity: 1 - t,
                                transform: kr(1 + .5 * t),
                                zIndex: 0
                            }, {
                                zIndex: -1
                            }]
                        }
                    },
                    pull: {
                        show: function(t) {
                            return t < 0 ? [{
                                transform: xr(30),
                                zIndex: -1
                            }, {
                                transform: xr(),
                                zIndex: 0
                            }] : [{
                                transform: xr(-100),
                                zIndex: 0
                            }, {
                                transform: xr(),
                                zIndex: -1
                            }]
                        },
                        percent: function(t, e, n) {
                            return n < 0 ? 1 - br(e) : br(t)
                        },
                        translate: function(t, e) {
                            return e < 0 ? [{
                                transform: xr(30 * t),
                                zIndex: -1
                            }, {
                                transform: xr(-100 * (1 - t)),
                                zIndex: 0
                            }] : [{
                                transform: xr(100 * -t),
                                zIndex: 0
                            }, {
                                transform: xr(30 * (1 - t)),
                                zIndex: -1
                            }]
                        }
                    },
                    push: {
                        show: function(t) {
                            return t < 0 ? [{
                                transform: xr(100),
                                zIndex: 0
                            }, {
                                transform: xr(),
                                zIndex: -1
                            }] : [{
                                transform: xr(-30),
                                zIndex: -1
                            }, {
                                transform: xr(),
                                zIndex: 0
                            }]
                        },
                        percent: function(t, e, n) {
                            return n > 0 ? 1 - br(e) : br(t)
                        },
                        translate: function(t, e) {
                            return e < 0 ? [{
                                transform: xr(100 * t),
                                zIndex: 0
                            }, {
                                transform: xr(-30 * (1 - t)),
                                zIndex: -1
                            }] : [{
                                transform: xr(-30 * t),
                                zIndex: -1
                            }, {
                                transform: xr(100 * (1 - t)),
                                zIndex: 0
                            }]
                        }
                    }
                }),
                to = {
                    mixins: [Yn, Nr, Rr],
                    props: {
                        ratio: String,
                        minHeight: Number,
                        maxHeight: Number
                    },
                    data: {
                        ratio: "16:9",
                        minHeight: !1,
                        maxHeight: !1,
                        selList: ".uk-slideshow-items",
                        attrItem: "uk-slideshow-item",
                        selNav: ".uk-slideshow-nav",
                        Animations: Zr
                    },
                    update: {
                        read: function() {
                            var t = this.ratio.split(":").map(Number),
                                e = t[0],
                                n = t[1];
                            return n = n * this.list.offsetWidth / e || 0, this.minHeight && (n = Math.max(this.minHeight, n)), this.maxHeight && (n = Math.min(this.maxHeight, n)), {
                                height: n - gn(this.list, "height", "content-box")
                            }
                        },
                        write: function(t) {
                            var e = t.height;
                            e > 0 && Ue(this.list, "minHeight", e)
                        },
                        events: ["resize"]
                    }
                },
                eo = {
                    mixins: [Yn, dr],
                    props: {
                        group: String,
                        threshold: Number,
                        clsItem: String,
                        clsPlaceholder: String,
                        clsDrag: String,
                        clsDragState: String,
                        clsBase: String,
                        clsNoDrag: String,
                        clsEmpty: String,
                        clsCustom: String,
                        handle: String
                    },
                    data: {
                        group: !1,
                        threshold: 5,
                        clsItem: "uk-sortable-item",
                        clsPlaceholder: "uk-sortable-placeholder",
                        clsDrag: "uk-sortable-drag",
                        clsDragState: "uk-drag",
                        clsBase: "uk-sortable",
                        clsNoDrag: "uk-sortable-nodrag",
                        clsEmpty: "uk-sortable-empty",
                        clsCustom: "",
                        handle: !1,
                        pos: {}
                    },
                    created: function() {
                        var t = this;
                        ["init", "start", "move", "end"].forEach((function(e) {
                            var n = t[e];
                            t[e] = function(e) {
                                G(t.pos, ue(e)), n(e)
                            }
                        }))
                    },
                    events: {
                        name: gt,
                        passive: !1,
                        handler: "init"
                    },
                    computed: {
                        target: function() {
                            return (this.$el.tBodies || [this.$el])[0]
                        },
                        items: function() {
                            return Xt(this.target)
                        },
                        isEmpty: {
                            get: function() {
                                return H(this.items)
                            },
                            watch: function(t) {
                                Fe(this.target, this.clsEmpty, t)
                            },
                            immediate: !0
                        },
                        handles: {
                            get: function(t, e) {
                                var n = t.handle;
                                return n ? Oe(n, e) : this.items
                            },
                            watch: function(t, e) {
                                Ue(e, {
                                    touchAction: "",
                                    userSelect: ""
                                }), Ue(t, {
                                    touchAction: pt ? "none" : "",
                                    userSelect: "none"
                                })
                            },
                            immediate: !0
                        }
                    },
                    update: {
                        write: function() {
                            if (this.drag && _t(this.placeholder)) {
                                var t = this.pos,
                                    e = t.x,
                                    n = t.y,
                                    i = this.origin,
                                    r = i.offsetTop,
                                    o = i.offsetLeft,
                                    s = this.drag,
                                    a = s.offsetHeight,
                                    u = s.offsetWidth,
                                    l = un(window),
                                    c = l.right,
                                    h = l.bottom,
                                    d = document.elementFromPoint(e, n);
                                Ue(this.drag, {
                                    top: et(n - r, 0, h - a),
                                    left: et(e - o, 0, c - u)
                                });
                                var f = this.getSortable(d),
                                    p = this.getSortable(this.placeholder),
                                    g = f !== p;
                                if (f && !Vt(d, this.placeholder) && (!g || f.group && f.group === p.group)) {
                                    if (d = f.target === d.parentNode && d || f.items.filter((function(t) {
                                            return Vt(d, t)
                                        }))[0], g) p.remove(this.placeholder);
                                    else if (!d) return;
                                    f.insert(this.placeholder, d), b(this.touched, f) || this.touched.push(f)
                                }
                            }
                        },
                        events: ["move"]
                    },
                    methods: {
                        init: function(t) {
                            var e = t.target,
                                n = t.button,
                                i = t.defaultPrevented,
                                r = this.items.filter((function(t) {
                                    return Vt(e, t)
                                }))[0];
                            !r || i || n > 0 || qt(e) || Vt(e, "." + this.clsNoDrag) || this.handle && !Vt(e, this.handle) || (t.preventDefault(), this.touched = [this], this.placeholder = r, this.origin = G({
                                target: e,
                                index: ve(r)
                            }, this.pos), Yt(document, mt, this.move), Yt(document, vt, this.end), this.threshold || this.start(t))
                        },
                        start: function(t) {
                            var e, n, i;
                            this.drag = (e = this.$container, n = this.placeholder, st(i = xe(e, n.outerHTML.replace(/(^<)(?:li|tr)|(?:li|tr)(\/>$)/g, "$1div$2")), "style", st(i, "style") + ";margin:0!important"), Ue(i, G({
                                boxSizing: "border-box",
                                width: n.offsetWidth,
                                height: n.offsetHeight,
                                overflow: "hidden"
                            }, Ue(n, ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom"]))), dn(i.firstElementChild, dn(n.firstElementChild)), i);
                            var r = this.placeholder.getBoundingClientRect(),
                                o = r.left,
                                s = r.top;
                            G(this.origin, {
                                    offsetLeft: this.pos.x - o,
                                    offsetTop: this.pos.y - s
                                }), _e(this.drag, this.clsDrag, this.clsCustom), _e(this.placeholder, this.clsPlaceholder), _e(this.items, this.clsItem), _e(document.documentElement, this.clsDragState), Qt(this.$el, "start", [this, this.placeholder]),
                                function(t) {
                                    var e = Date.now();
                                    Qr = setInterval((function() {
                                        var n = t.x,
                                            i = t.y;
                                        i += window.pageYOffset;
                                        var r = .3 * (Date.now() - e);
                                        e = Date.now(), Fn(document.elementFromPoint(n, t.y)).some((function(t) {
                                            var e = t.scrollTop,
                                                n = t.scrollHeight,
                                                o = un(zn(t)),
                                                s = o.top,
                                                a = o.bottom,
                                                u = o.height;
                                            if (s < i && s + 30 > i) e -= r;
                                            else {
                                                if (!(a > i && a - 30 < i)) return;
                                                e += r
                                            }
                                            if (e > 0 && e < n - u) return Hn(t, e), !0
                                        }))
                                    }), 15)
                                }(this.pos), this.move(t)
                        },
                        move: function(t) {
                            this.drag ? this.$emit("move") : (Math.abs(this.pos.x - this.origin.x) > this.threshold || Math.abs(this.pos.y - this.origin.y) > this.threshold) && this.start(t)
                        },
                        end: function(t) {
                            if (Jt(document, mt, this.move), Jt(document, vt, this.end), Jt(window, "scroll", this.scroll), this.drag) {
                                clearInterval(Qr);
                                var e = this.getSortable(this.placeholder);
                                this === e ? this.origin.index !== ve(this.placeholder) && Qt(this.$el, "moved", [this, this.placeholder]) : (Qt(e.$el, "added", [e, this.placeholder]), Qt(this.$el, "removed", [this, this.placeholder])), Qt(this.$el, "stop", [this, this.placeholder]), Se(this.drag), this.drag = null;
                                var n = this.touched.map((function(t) {
                                    return t.clsPlaceholder + " " + t.clsItem
                                })).join(" ");
                                this.touched.forEach((function(t) {
                                    return Le(t.items, n)
                                })), Le(document.documentElement, this.clsDragState)
                            } else "touchend" === t.type && t.target.click()
                        },
                        insert: function(t, e) {
                            var n = this;
                            _e(this.items, this.clsItem);
                            var i = function() {
                                e ? !Vt(t, n.target) || function(t, e) {
                                    return t.parentNode === e.parentNode && ve(t) > ve(e)
                                }(t, e) ? ke(e, t) : Te(e, t) : xe(n.target, t)
                            };
                            this.animation ? this.animate(i) : i()
                        },
                        remove: function(t) {
                            Vt(t, this.target) && (this.animation ? this.animate((function() {
                                return Se(t)
                            })) : Se(t))
                        },
                        getSortable: function(t) {
                            return t && (this.$getComponent(t, "sortable") || this.getSortable(t.parentNode))
                        }
                    }
                },
                no = [],
                io = {
                    mixins: [Wi, Jn, ii],
                    args: "title",
                    props: {
                        delay: Number,
                        title: String
                    },
                    data: {
                        pos: "top",
                        title: "",
                        delay: 0,
                        animation: ["uk-animation-scale-up"],
                        duration: 100,
                        cls: "uk-active",
                        clsPos: "uk-tooltip"
                    },
                    beforeConnect: function() {
                        this._hasTitle = at(this.$el, "title"), st(this.$el, {
                            title: "",
                            "aria-expanded": !1
                        })
                    },
                    disconnected: function() {
                        this.hide(), st(this.$el, {
                            title: this._hasTitle ? this.title : null,
                            "aria-expanded": null
                        })
                    },
                    methods: {
                        show: function() {
                            var t = this;
                            !this.isActive() && this.title && (no.forEach((function(t) {
                                return t.hide()
                            })), no.push(this), this._unbind = Yt(document, vt, (function(e) {
                                return !Vt(e.target, t.$el) && t.hide()
                            })), clearTimeout(this.showTimer), this.showTimer = setTimeout(this._show, this.delay))
                        },
                        hide: function() {
                            var t = this;
                            this.isActive() && !Pt(this.$el, "input:focus") && this.toggleElement(this.tooltip, !1, !1).then((function() {
                                no.splice(no.indexOf(t), 1), clearTimeout(t.showTimer), t.tooltip = Se(t.tooltip), t._unbind()
                            }))
                        },
                        _show: function() {
                            var t = this;
                            this.tooltip = xe(this.container, '<div class="' + this.clsPos + '"> <div class="' + this.clsPos + '-inner">' + this.title + "</div> </div>"), Yt(this.tooltip, "toggled", (function() {
                                var e = t.isToggled(t.tooltip);
                                st(t.$el, "aria-expanded", e), e && (t.positionAt(t.tooltip, t.$el), t.origin = "y" === t.getAxis() ? wn(t.dir) + "-" + t.align : t.align + "-" + wn(t.dir))
                            })), this.toggleElement(this.tooltip, !0)
                        },
                        isActive: function() {
                            return b(no, this)
                        }
                    },
                    events: (Kr = {
                        focus: "show",
                        blur: "hide"
                    }, Kr[yt + " " + wt] = function(t) {
                        ae(t) || (t.type === yt ? this.show() : this.hide())
                    }, Kr[gt] = function(t) {
                        ae(t) && (this.isActive() ? this.hide() : this.show())
                    }, Kr)
                },
                ro = {
                    props: {
                        allow: String,
                        clsDragover: String,
                        concurrent: Number,
                        maxSize: Number,
                        method: String,
                        mime: String,
                        msgInvalidMime: String,
                        msgInvalidName: String,
                        msgInvalidSize: String,
                        multiple: Boolean,
                        name: String,
                        params: Object,
                        type: String,
                        url: String
                    },
                    data: {
                        allow: !1,
                        clsDragover: "uk-dragover",
                        concurrent: 1,
                        maxSize: 0,
                        method: "POST",
                        mime: !1,
                        msgInvalidMime: "Invalid File Type: %s",
                        msgInvalidName: "Invalid File Name: %s",
                        msgInvalidSize: "Invalid File Size: %s Kilobytes Max",
                        multiple: !1,
                        name: "files[]",
                        params: {},
                        type: "",
                        url: "",
                        abort: nt,
                        beforeAll: nt,
                        beforeSend: nt,
                        complete: nt,
                        completeAll: nt,
                        error: nt,
                        fail: nt,
                        load: nt,
                        loadEnd: nt,
                        loadStart: nt,
                        progress: nt
                    },
                    events: {
                        change: function(t) {
                            Pt(t.target, 'input[type="file"]') && (t.preventDefault(), t.target.files && this.upload(t.target.files), t.target.value = "")
                        },
                        drop: function(t) {
                            so(t);
                            var e = t.dataTransfer;
                            e && e.files && (Le(this.$el, this.clsDragover), this.upload(e.files))
                        },
                        dragenter: function(t) {
                            so(t)
                        },
                        dragover: function(t) {
                            so(t), _e(this.$el, this.clsDragover)
                        },
                        dragleave: function(t) {
                            so(t), Le(this.$el, this.clsDragover)
                        }
                    },
                    methods: {
                        upload: function(t) {
                            var e = this;
                            if (t.length) {
                                Qt(this.$el, "upload", [t]);
                                for (var n = 0; n < t.length; n++) {
                                    if (this.maxSize && 1e3 * this.maxSize < t[n].size) return void this.fail(this.msgInvalidSize.replace("%s", this.maxSize));
                                    if (this.allow && !oo(this.allow, t[n].name)) return void this.fail(this.msgInvalidName.replace("%s", this.allow));
                                    if (this.mime && !oo(this.mime, t[n].type)) return void this.fail(this.msgInvalidMime.replace("%s", this.mime))
                                }
                                this.multiple || (t = [t[0]]), this.beforeAll(this, t);
                                var i = function(t, e) {
                                        for (var n = [], i = 0; i < t.length; i += e) {
                                            for (var r = [], o = 0; o < e; o++) r.push(t[i + o]);
                                            n.push(r)
                                        }
                                        return n
                                    }(t, this.concurrent),
                                    r = function(t) {
                                        var n = new FormData;
                                        for (var o in t.forEach((function(t) {
                                                return n.append(e.name, t)
                                            })), e.params) n.append(o, e.params[o]);
                                        pe(e.url, {
                                            data: n,
                                            method: e.method,
                                            responseType: e.type,
                                            beforeSend: function(t) {
                                                var n = t.xhr;
                                                n.upload && Yt(n.upload, "progress", e.progress), ["loadStart", "load", "loadEnd", "abort"].forEach((function(t) {
                                                    return Yt(n, t.toLowerCase(), e[t])
                                                })), e.beforeSend(t)
                                            }
                                        }).then((function(t) {
                                            e.complete(t), i.length ? r(i.shift()) : e.completeAll(t)
                                        }), (function(t) {
                                            return e.error(t)
                                        }))
                                    };
                                r(i.shift())
                            }
                        }
                    }
                };

            function oo(t, e) {
                return e.match(new RegExp("^" + t.replace(/\//g, "\\/").replace(/\*\*/g, "(\\/[^\\/]+)*").replace(/\*/g, "[^\\/]+").replace(/((?!\\))\?/g, "$1.") + "$", "i"))
            }

            function so(t) {
                t.preventDefault(), t.stopPropagation()
            }
            var ao = Object.freeze({
                __proto__: null,
                Countdown: hr,
                Filter: mr,
                Lightbox: Pr,
                LightboxPanel: Ar,
                Notification: jr,
                Parallax: Br,
                Slider: Xr,
                SliderParallax: Yr,
                Slideshow: to,
                SlideshowParallax: Yr,
                Sortable: eo,
                Tooltip: io,
                Upload: ro
            });

            function uo(t, e) {
                Xn.component(e, t)
            }
            return K(cr, uo), K(ao, uo), Xn.use((function(t) {
                    me((function() {
                        var e;
                        t.update(), Yt(window, "load resize", (function() {
                            return t.update(null, "resize")
                        })), Yt(document, "loadedmetadata load", (function(e) {
                            var n = e.target;
                            return t.update(n, "resize")
                        }), !0), Yt(window, "scroll", (function(n) {
                            e || (e = !0, kn.write((function() {
                                return e = !1
                            })), t.update(null, n.type))
                        }), {
                            passive: !0,
                            capture: !0
                        });
                        var n, i = 0;
                        Yt(document, "animationstart", (function(t) {
                            var e = t.target;
                            (Ue(e, "animationName") || "").match(/^uk-.*(left|right)/) && (i++, Ue(document.body, "overflowX", "hidden"), setTimeout((function() {
                                --i || Ue(document.body, "overflowX", "")
                            }), X(Ue(e, "animationDuration")) + 100))
                        }), !0), Yt(document, gt, (function(t) {
                            if (n && n(), ae(t)) {
                                var e = ue(t),
                                    i = "tagName" in t.target ? t.target : t.target.parentNode;
                                n = Gt(document, vt + " " + bt, (function(t) {
                                    var n = ue(t),
                                        r = n.x,
                                        o = n.y;
                                    (i && r && Math.abs(e.x - r) > 100 || o && Math.abs(e.y - o) > 100) && setTimeout((function() {
                                        Qt(i, "swipe"), Qt(i, "swipe" + function(t, e, n, i) {
                                            return Math.abs(t - n) >= Math.abs(e - i) ? t - n > 0 ? "Left" : "Right" : e - i > 0 ? "Up" : "Down"
                                        }(e.x, e.y, r, o))
                                    }))
                                }))
                            }
                        }), {
                            passive: !0
                        })
                    }))
                })),
                function(t) {
                    var e = t.connect,
                        n = t.disconnect;
                    "MutationObserver" in window && kn.read((function() {
                        document.body && Me(document.body, e), new MutationObserver((function(i) {
                            var r = [];
                            i.forEach((function(i) {
                                return function(i, r) {
                                    var o = i.target;
                                    ("attributes" !== i.type ? function(t) {
                                        for (var i = t.addedNodes, r = t.removedNodes, o = 0; o < i.length; o++) Me(i[o], e);
                                        for (var s = 0; s < r.length; s++) Me(r[s], n);
                                        return !0
                                    }(i) : function(e) {
                                        var n = e.target,
                                            i = e.attributeName;
                                        if ("href" === i) return !0;
                                        var r = Un(i);
                                        if (r && r in t) {
                                            if (at(n, i)) return t[r](n), !0;
                                            var o = t.getComponent(n, r);
                                            return o ? (o.$destroy(), !0) : void 0
                                        }
                                    }(i)) && !r.some((function(t) {
                                        return t.contains(o)
                                    })) && r.push(o.contains ? o : o.parentNode)
                                }(i, r)
                            })), r.forEach((function(e) {
                                return t.update(e)
                            }))
                        })).observe(document, {
                            childList: !0,
                            subtree: !0,
                            characterData: !0,
                            attributes: !0
                        }), t._initialized = !0
                    }))
                }(Xn), Xn
        }()
    }).call(this, n(7).setImmediate)
}, function(t, e, n) {
    /*!***************************************************
     * mark.js v8.11.1
     * https://markjs.io/
     * Copyright (c) 2014–2018, Julian Kühnel
     * Released under the MIT license https://git.io/vwTVl
     *****************************************************/
    t.exports = function(t) {
        "use strict";
        t = t && t.hasOwnProperty("default") ? t.default : t;
        var e = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                return typeof t
            } : function(t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            },
            n = function(t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
            },
            i = function() {
                function t(t, e) {
                    for (var n = 0; n < e.length; n++) {
                        var i = e[n];
                        i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                    }
                }
                return function(e, n, i) {
                    return n && t(e.prototype, n), i && t(e, i), e
                }
            }(),
            r = Object.assign || function(t) {
                for (var e = 1; e < arguments.length; e++) {
                    var n = arguments[e];
                    for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
                }
                return t
            },
            o = function() {
                function t(e) {
                    var i = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1],
                        r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : [],
                        o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 5e3;
                    n(this, t), this.ctx = e, this.iframes = i, this.exclude = r, this.iframesTimeout = o
                }
                return i(t, [{
                    key: "getContexts",
                    value: function() {
                        var t = [];
                        return (void 0 !== this.ctx && this.ctx ? NodeList.prototype.isPrototypeOf(this.ctx) ? Array.prototype.slice.call(this.ctx) : Array.isArray(this.ctx) ? this.ctx : "string" == typeof this.ctx ? Array.prototype.slice.call(document.querySelectorAll(this.ctx)) : [this.ctx] : []).forEach((function(e) {
                            var n = t.filter((function(t) {
                                return t.contains(e)
                            })).length > 0; - 1 !== t.indexOf(e) || n || t.push(e)
                        })), t
                    }
                }, {
                    key: "getIframeContents",
                    value: function(t, e) {
                        var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : function() {},
                            i = void 0;
                        try {
                            var r = t.contentWindow;
                            if (i = r.document, !r || !i) throw new Error("iframe inaccessible")
                        } catch (t) {
                            n()
                        }
                        i && e(i)
                    }
                }, {
                    key: "isIframeBlank",
                    value: function(t) {
                        var e = "about:blank",
                            n = t.getAttribute("src").trim();
                        return t.contentWindow.location.href === e && n !== e && n
                    }
                }, {
                    key: "observeIframeLoad",
                    value: function(t, e, n) {
                        var i = this,
                            r = !1,
                            o = null,
                            s = function s() {
                                if (!r) {
                                    r = !0, clearTimeout(o);
                                    try {
                                        i.isIframeBlank(t) || (t.removeEventListener("load", s), i.getIframeContents(t, e, n))
                                    } catch (t) {
                                        n()
                                    }
                                }
                            };
                        t.addEventListener("load", s), o = setTimeout(s, this.iframesTimeout)
                    }
                }, {
                    key: "onIframeReady",
                    value: function(t, e, n) {
                        try {
                            "complete" === t.contentWindow.document.readyState ? this.isIframeBlank(t) ? this.observeIframeLoad(t, e, n) : this.getIframeContents(t, e, n) : this.observeIframeLoad(t, e, n)
                        } catch (t) {
                            n()
                        }
                    }
                }, {
                    key: "waitForIframes",
                    value: function(t, e) {
                        var n = this,
                            i = 0;
                        this.forEachIframe(t, (function() {
                            return !0
                        }), (function(t) {
                            i++, n.waitForIframes(t.querySelector("html"), (function() {
                                --i || e()
                            }))
                        }), (function(t) {
                            t || e()
                        }))
                    }
                }, {
                    key: "forEachIframe",
                    value: function(e, n, i) {
                        var r = this,
                            o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : function() {},
                            s = e.querySelectorAll("iframe"),
                            a = s.length,
                            u = 0;
                        s = Array.prototype.slice.call(s);
                        var l = function() {
                            --a <= 0 && o(u)
                        };
                        a || l(), s.forEach((function(e) {
                            t.matches(e, r.exclude) ? l() : r.onIframeReady(e, (function(t) {
                                n(e) && (u++, i(t)), l()
                            }), l)
                        }))
                    }
                }, {
                    key: "createIterator",
                    value: function(t, e, n) {
                        return document.createNodeIterator(t, e, n, !1)
                    }
                }, {
                    key: "createInstanceOnIframe",
                    value: function(e) {
                        return new t(e.querySelector("html"), this.iframes)
                    }
                }, {
                    key: "compareNodeIframe",
                    value: function(t, e, n) {
                        if (t.compareDocumentPosition(n) & Node.DOCUMENT_POSITION_PRECEDING) {
                            if (null === e) return !0;
                            if (e.compareDocumentPosition(n) & Node.DOCUMENT_POSITION_FOLLOWING) return !0
                        }
                        return !1
                    }
                }, {
                    key: "getIteratorNode",
                    value: function(t) {
                        var e = t.previousNode();
                        return {
                            prevNode: e,
                            node: (null === e || t.nextNode()) && t.nextNode()
                        }
                    }
                }, {
                    key: "checkIframeFilter",
                    value: function(t, e, n, i) {
                        var r = !1,
                            o = !1;
                        return i.forEach((function(t, e) {
                            t.val === n && (r = e, o = t.handled)
                        })), this.compareNodeIframe(t, e, n) ? (!1 !== r || o ? !1 === r || o || (i[r].handled = !0) : i.push({
                            val: n,
                            handled: !0
                        }), !0) : (!1 === r && i.push({
                            val: n,
                            handled: !1
                        }), !1)
                    }
                }, {
                    key: "handleOpenIframes",
                    value: function(t, e, n, i) {
                        var r = this;
                        t.forEach((function(t) {
                            t.handled || r.getIframeContents(t.val, (function(t) {
                                r.createInstanceOnIframe(t).forEachNode(e, n, i)
                            }))
                        }))
                    }
                }, {
                    key: "iterateThroughNodes",
                    value: function(t, e, n, i, r) {
                        for (var o, s = this, a = this.createIterator(e, t, i), u = [], l = [], c = void 0, h = void 0; o = void 0, o = s.getIteratorNode(a), h = o.prevNode, c = o.node;) this.iframes && this.forEachIframe(e, (function(t) {
                            return s.checkIframeFilter(c, h, t, u)
                        }), (function(e) {
                            s.createInstanceOnIframe(e).forEachNode(t, (function(t) {
                                return l.push(t)
                            }), i)
                        })), l.push(c);
                        l.forEach((function(t) {
                            n(t)
                        })), this.iframes && this.handleOpenIframes(u, t, n, i), r()
                    }
                }, {
                    key: "forEachNode",
                    value: function(t, e, n) {
                        var i = this,
                            r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : function() {},
                            o = this.getContexts(),
                            s = o.length;
                        s || r(), o.forEach((function(o) {
                            var a = function() {
                                i.iterateThroughNodes(t, o, e, n, (function() {
                                    --s <= 0 && r()
                                }))
                            };
                            i.iframes ? i.waitForIframes(o, a) : a()
                        }))
                    }
                }], [{
                    key: "matches",
                    value: function(t, e) {
                        var n = "string" == typeof e ? [e] : e,
                            i = t.matches || t.matchesSelector || t.msMatchesSelector || t.mozMatchesSelector || t.oMatchesSelector || t.webkitMatchesSelector;
                        if (i) {
                            var r = !1;
                            return n.every((function(e) {
                                return !i.call(t, e) || (r = !0, !1)
                            })), r
                        }
                        return !1
                    }
                }]), t
            }(),
            s = function() {
                function t(e) {
                    n(this, t), this.ctx = e, this.ie = !1;
                    var i = window.navigator.userAgent;
                    (i.indexOf("MSIE") > -1 || i.indexOf("Trident") > -1) && (this.ie = !0)
                }
                return i(t, [{
                    key: "log",
                    value: function(t) {
                        var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "debug",
                            i = this.opt.log;
                        this.opt.debug && "object" === (void 0 === i ? "undefined" : e(i)) && "function" == typeof i[n] && i[n]("mark.js: " + t)
                    }
                }, {
                    key: "escapeStr",
                    value: function(t) {
                        return t.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
                    }
                }, {
                    key: "createRegExp",
                    value: function(t) {
                        return "disabled" !== this.opt.wildcards && (t = this.setupWildcardsRegExp(t)), t = this.escapeStr(t), Object.keys(this.opt.synonyms).length && (t = this.createSynonymsRegExp(t)), (this.opt.ignoreJoiners || this.opt.ignorePunctuation.length) && (t = this.setupIgnoreJoinersRegExp(t)), this.opt.diacritics && (t = this.createDiacriticsRegExp(t)), t = this.createMergedBlanksRegExp(t), (this.opt.ignoreJoiners || this.opt.ignorePunctuation.length) && (t = this.createJoinersRegExp(t)), "disabled" !== this.opt.wildcards && (t = this.createWildcardsRegExp(t)), t = this.createAccuracyRegExp(t)
                    }
                }, {
                    key: "createSynonymsRegExp",
                    value: function(t) {
                        var e = this.opt.synonyms,
                            n = this.opt.caseSensitive ? "" : "i",
                            i = this.opt.ignoreJoiners || this.opt.ignorePunctuation.length ? "\0" : "";
                        for (var r in e)
                            if (e.hasOwnProperty(r)) {
                                var o = e[r],
                                    s = "disabled" !== this.opt.wildcards ? this.setupWildcardsRegExp(r) : this.escapeStr(r),
                                    a = "disabled" !== this.opt.wildcards ? this.setupWildcardsRegExp(o) : this.escapeStr(o);
                                "" !== s && "" !== a && (t = t.replace(new RegExp("(" + this.escapeStr(s) + "|" + this.escapeStr(a) + ")", "gm" + n), i + "(" + this.processSynomyms(s) + "|" + this.processSynomyms(a) + ")" + i))
                            }
                        return t
                    }
                }, {
                    key: "processSynomyms",
                    value: function(t) {
                        return (this.opt.ignoreJoiners || this.opt.ignorePunctuation.length) && (t = this.setupIgnoreJoinersRegExp(t)), t
                    }
                }, {
                    key: "setupWildcardsRegExp",
                    value: function(t) {
                        return (t = t.replace(/(?:\\)*\?/g, (function(t) {
                            return "\\" === t.charAt(0) ? "?" : ""
                        }))).replace(/(?:\\)*\*/g, (function(t) {
                            return "\\" === t.charAt(0) ? "*" : ""
                        }))
                    }
                }, {
                    key: "createWildcardsRegExp",
                    value: function(t) {
                        var e = "withSpaces" === this.opt.wildcards;
                        return t.replace(/\u0001/g, e ? "[\\S\\s]?" : "\\S?").replace(/\u0002/g, e ? "[\\S\\s]*?" : "\\S*")
                    }
                }, {
                    key: "setupIgnoreJoinersRegExp",
                    value: function(t) {
                        return t.replace(/[^(|)\\]/g, (function(t, e, n) {
                            var i = n.charAt(e + 1);
                            return /[(|)\\]/.test(i) || "" === i ? t : t + "\0"
                        }))
                    }
                }, {
                    key: "createJoinersRegExp",
                    value: function(t) {
                        var e = [],
                            n = this.opt.ignorePunctuation;
                        return Array.isArray(n) && n.length && e.push(this.escapeStr(n.join(""))), this.opt.ignoreJoiners && e.push("\\u00ad\\u200b\\u200c\\u200d"), e.length ? t.split(/\u0000+/).join("[" + e.join("") + "]*") : t
                    }
                }, {
                    key: "createDiacriticsRegExp",
                    value: function(t) {
                        var e = this.opt.caseSensitive ? "" : "i",
                            n = this.opt.caseSensitive ? ["aàáảãạăằắẳẵặâầấẩẫậäåāą", "AÀÁẢÃẠĂẰẮẲẴẶÂẦẤẨẪẬÄÅĀĄ", "cçćč", "CÇĆČ", "dđď", "DĐĎ", "eèéẻẽẹêềếểễệëěēę", "EÈÉẺẼẸÊỀẾỂỄỆËĚĒĘ", "iìíỉĩịîïī", "IÌÍỈĨỊÎÏĪ", "lł", "LŁ", "nñňń", "NÑŇŃ", "oòóỏõọôồốổỗộơởỡớờợöøō", "OÒÓỎÕỌÔỒỐỔỖỘƠỞỠỚỜỢÖØŌ", "rř", "RŘ", "sšśșş", "SŠŚȘŞ", "tťțţ", "TŤȚŢ", "uùúủũụưừứửữựûüůū", "UÙÚỦŨỤƯỪỨỬỮỰÛÜŮŪ", "yýỳỷỹỵÿ", "YÝỲỶỸỴŸ", "zžżź", "ZŽŻŹ"] : ["aàáảãạăằắẳẵặâầấẩẫậäåāąAÀÁẢÃẠĂẰẮẲẴẶÂẦẤẨẪẬÄÅĀĄ", "cçćčCÇĆČ", "dđďDĐĎ", "eèéẻẽẹêềếểễệëěēęEÈÉẺẼẸÊỀẾỂỄỆËĚĒĘ", "iìíỉĩịîïīIÌÍỈĨỊÎÏĪ", "lłLŁ", "nñňńNÑŇŃ", "oòóỏõọôồốổỗộơởỡớờợöøōOÒÓỎÕỌÔỒỐỔỖỘƠỞỠỚỜỢÖØŌ", "rřRŘ", "sšśșşSŠŚȘŞ", "tťțţTŤȚŢ", "uùúủũụưừứửữựûüůūUÙÚỦŨỤƯỪỨỬỮỰÛÜŮŪ", "yýỳỷỹỵÿYÝỲỶỸỴŸ", "zžżźZŽŻŹ"],
                            i = [];
                        return t.split("").forEach((function(r) {
                            n.every((function(n) {
                                if (-1 !== n.indexOf(r)) {
                                    if (i.indexOf(n) > -1) return !1;
                                    t = t.replace(new RegExp("[" + n + "]", "gm" + e), "[" + n + "]"), i.push(n)
                                }
                                return !0
                            }))
                        })), t
                    }
                }, {
                    key: "createMergedBlanksRegExp",
                    value: function(t) {
                        return t.replace(/[\s]+/gim, "[\\s]+")
                    }
                }, {
                    key: "createAccuracyRegExp",
                    value: function(t) {
                        var e = this,
                            n = this.opt.accuracy,
                            i = "string" == typeof n ? n : n.value,
                            r = "string" == typeof n ? [] : n.limiters,
                            o = "";
                        switch (r.forEach((function(t) {
                            o += "|" + e.escapeStr(t)
                        })), i) {
                            case "partially":
                            default:
                                return "()(" + t + ")";
                            case "complementary":
                                return "()([^" + (o = "\\s" + (o || this.escapeStr("!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~¡¿"))) + "]*" + t + "[^" + o + "]*)";
                            case "exactly":
                                return "(^|\\s" + o + ")(" + t + ")(?=$|\\s" + o + ")"
                        }
                    }
                }, {
                    key: "getSeparatedKeywords",
                    value: function(t) {
                        var e = this,
                            n = [];
                        return t.forEach((function(t) {
                            e.opt.separateWordSearch ? t.split(" ").forEach((function(t) {
                                t.trim() && -1 === n.indexOf(t) && n.push(t)
                            })) : t.trim() && -1 === n.indexOf(t) && n.push(t)
                        })), {
                            keywords: n.sort((function(t, e) {
                                return e.length - t.length
                            })),
                            length: n.length
                        }
                    }
                }, {
                    key: "isNumeric",
                    value: function(t) {
                        return Number(parseFloat(t)) == t
                    }
                }, {
                    key: "checkRanges",
                    value: function(t) {
                        var e = this;
                        if (!Array.isArray(t) || "[object Object]" !== Object.prototype.toString.call(t[0])) return this.log("markRanges() will only accept an array of objects"), this.opt.noMatch(t), [];
                        var n = [],
                            i = 0;
                        return t.sort((function(t, e) {
                            return t.start - e.start
                        })).forEach((function(t) {
                            var r = e.callNoMatchOnInvalidRanges(t, i),
                                o = r.start,
                                s = r.end;
                            r.valid && (t.start = o, t.length = s - o, n.push(t), i = s)
                        })), n
                    }
                }, {
                    key: "callNoMatchOnInvalidRanges",
                    value: function(t, e) {
                        var n = void 0,
                            i = void 0,
                            r = !1;
                        return t && void 0 !== t.start ? (i = (n = parseInt(t.start, 10)) + parseInt(t.length, 10), this.isNumeric(t.start) && this.isNumeric(t.length) && i - e > 0 && i - n > 0 ? r = !0 : (this.log("Ignoring invalid or overlapping range: " + JSON.stringify(t)), this.opt.noMatch(t))) : (this.log("Ignoring invalid range: " + JSON.stringify(t)), this.opt.noMatch(t)), {
                            start: n,
                            end: i,
                            valid: r
                        }
                    }
                }, {
                    key: "checkWhitespaceRanges",
                    value: function(t, e, n) {
                        var i = void 0,
                            r = !0,
                            o = n.length,
                            s = e - o,
                            a = parseInt(t.start, 10) - s;
                        return (i = (a = a > o ? o : a) + parseInt(t.length, 10)) > o && (i = o, this.log("End range automatically set to the max value of " + o)), a < 0 || i - a < 0 || a > o || i > o ? (r = !1, this.log("Invalid range: " + JSON.stringify(t)), this.opt.noMatch(t)) : "" === n.substring(a, i).replace(/\s+/g, "") && (r = !1, this.log("Skipping whitespace only range: " + JSON.stringify(t)), this.opt.noMatch(t)), {
                            start: a,
                            end: i,
                            valid: r
                        }
                    }
                }, {
                    key: "getTextNodes",
                    value: function(t) {
                        var e = this,
                            n = "",
                            i = [];
                        this.iterator.forEachNode(NodeFilter.SHOW_TEXT, (function(t) {
                            i.push({
                                start: n.length,
                                end: (n += t.textContent).length,
                                node: t
                            })
                        }), (function(t) {
                            return e.matchesExclude(t.parentNode) ? NodeFilter.FILTER_REJECT : NodeFilter.FILTER_ACCEPT
                        }), (function() {
                            t({
                                value: n,
                                nodes: i
                            })
                        }))
                    }
                }, {
                    key: "matchesExclude",
                    value: function(t) {
                        return o.matches(t, this.opt.exclude.concat(["script", "style", "title", "head", "html"]))
                    }
                }, {
                    key: "wrapRangeInTextNode",
                    value: function(t, e, n) {
                        var i = this.opt.element ? this.opt.element : "mark",
                            r = t.splitText(e),
                            o = r.splitText(n - e),
                            s = document.createElement(i);
                        return s.setAttribute("data-markjs", "true"), this.opt.className && s.setAttribute("class", this.opt.className), s.textContent = r.textContent, r.parentNode.replaceChild(s, r), o
                    }
                }, {
                    key: "wrapRangeInMappedTextNode",
                    value: function(t, e, n, i, r) {
                        var o = this;
                        t.nodes.every((function(s, a) {
                            var u = t.nodes[a + 1];
                            if (void 0 === u || u.start > e) {
                                if (!i(s.node)) return !1;
                                var l = e - s.start,
                                    c = (n > s.end ? s.end : n) - s.start,
                                    h = t.value.substr(0, s.start),
                                    d = t.value.substr(c + s.start);
                                if (s.node = o.wrapRangeInTextNode(s.node, l, c), t.value = h + d, t.nodes.forEach((function(e, n) {
                                        n >= a && (t.nodes[n].start > 0 && n !== a && (t.nodes[n].start -= c), t.nodes[n].end -= c)
                                    })), n -= c, r(s.node.previousSibling, s.start), !(n > s.end)) return !1;
                                e = s.end
                            }
                            return !0
                        }))
                    }
                }, {
                    key: "wrapMatches",
                    value: function(t, e, n, i, r) {
                        var o = this,
                            s = 0 === e ? 0 : e + 1;
                        this.getTextNodes((function(e) {
                            e.nodes.forEach((function(e) {
                                e = e.node;
                                for (var r = void 0; null !== (r = t.exec(e.textContent)) && "" !== r[s];)
                                    if (n(r[s], e)) {
                                        var a = r.index;
                                        if (0 !== s)
                                            for (var u = 1; u < s; u++) a += r[u].length;
                                        e = o.wrapRangeInTextNode(e, a, a + r[s].length), i(e.previousSibling), t.lastIndex = 0
                                    }
                            })), r()
                        }))
                    }
                }, {
                    key: "wrapMatchesAcrossElements",
                    value: function(t, e, n, i, r) {
                        var o = this,
                            s = 0 === e ? 0 : e + 1;
                        this.getTextNodes((function(e) {
                            for (var a = void 0; null !== (a = t.exec(e.value)) && "" !== a[s];) {
                                var u = a.index;
                                if (0 !== s)
                                    for (var l = 1; l < s; l++) u += a[l].length;
                                var c = u + a[s].length;
                                o.wrapRangeInMappedTextNode(e, u, c, (function(t) {
                                    return n(a[s], t)
                                }), (function(e, n) {
                                    t.lastIndex = n, i(e)
                                }))
                            }
                            r()
                        }))
                    }
                }, {
                    key: "wrapRangeFromIndex",
                    value: function(t, e, n, i) {
                        var r = this;
                        this.getTextNodes((function(o) {
                            var s = o.value.length;
                            t.forEach((function(t, i) {
                                var a = r.checkWhitespaceRanges(t, s, o.value),
                                    u = a.start,
                                    l = a.end;
                                a.valid && r.wrapRangeInMappedTextNode(o, u, l, (function(n) {
                                    return e(n, t, o.value.substring(u, l), i)
                                }), (function(e) {
                                    n(e, t)
                                }))
                            })), i()
                        }))
                    }
                }, {
                    key: "unwrapMatches",
                    value: function(t) {
                        for (var e = t.parentNode, n = document.createDocumentFragment(); t.firstChild;) n.appendChild(t.removeChild(t.firstChild));
                        e.replaceChild(n, t), this.ie ? this.normalizeTextNode(e) : e.normalize()
                    }
                }, {
                    key: "normalizeTextNode",
                    value: function(t) {
                        if (t) {
                            if (3 === t.nodeType)
                                for (; t.nextSibling && 3 === t.nextSibling.nodeType;) t.nodeValue += t.nextSibling.nodeValue, t.parentNode.removeChild(t.nextSibling);
                            else this.normalizeTextNode(t.firstChild);
                            this.normalizeTextNode(t.nextSibling)
                        }
                    }
                }, {
                    key: "markRegExp",
                    value: function(t, e) {
                        var n = this;
                        this.opt = e, this.log('Searching with expression "' + t + '"');
                        var i = 0,
                            r = "wrapMatches";
                        this.opt.acrossElements && (r = "wrapMatchesAcrossElements"), this[r](t, this.opt.ignoreGroups, (function(t, e) {
                            return n.opt.filter(e, t, i)
                        }), (function(t) {
                            i++, n.opt.each(t)
                        }), (function() {
                            0 === i && n.opt.noMatch(t), n.opt.done(i)
                        }))
                    }
                }, {
                    key: "mark",
                    value: function(t, e) {
                        var n = this;
                        this.opt = e;
                        var i = 0,
                            r = "wrapMatches",
                            o = this.getSeparatedKeywords("string" == typeof t ? [t] : t),
                            s = o.keywords,
                            a = o.length,
                            u = this.opt.caseSensitive ? "" : "i";
                        this.opt.acrossElements && (r = "wrapMatchesAcrossElements"), 0 === a ? this.opt.done(i) : function t(e) {
                            var o = new RegExp(n.createRegExp(e), "gm" + u),
                                l = 0;
                            n.log('Searching with expression "' + o + '"'), n[r](o, 1, (function(t, r) {
                                return n.opt.filter(r, e, i, l)
                            }), (function(t) {
                                l++, i++, n.opt.each(t)
                            }), (function() {
                                0 === l && n.opt.noMatch(e), s[a - 1] === e ? n.opt.done(i) : t(s[s.indexOf(e) + 1])
                            }))
                        }(s[0])
                    }
                }, {
                    key: "markRanges",
                    value: function(t, e) {
                        var n = this;
                        this.opt = e;
                        var i = 0,
                            r = this.checkRanges(t);
                        r && r.length ? (this.log("Starting to mark with the following ranges: " + JSON.stringify(r)), this.wrapRangeFromIndex(r, (function(t, e, i, r) {
                            return n.opt.filter(t, e, i, r)
                        }), (function(t, e) {
                            i++, n.opt.each(t, e)
                        }), (function() {
                            n.opt.done(i)
                        }))) : this.opt.done(i)
                    }
                }, {
                    key: "unmark",
                    value: function(t) {
                        var e = this;
                        this.opt = t;
                        var n = this.opt.element ? this.opt.element : "*";
                        n += "[data-markjs]", this.opt.className && (n += "." + this.opt.className), this.log('Removal selector "' + n + '"'), this.iterator.forEachNode(NodeFilter.SHOW_ELEMENT, (function(t) {
                            e.unwrapMatches(t)
                        }), (function(t) {
                            var i = o.matches(t, n),
                                r = e.matchesExclude(t);
                            return !i || r ? NodeFilter.FILTER_REJECT : NodeFilter.FILTER_ACCEPT
                        }), this.opt.done)
                    }
                }, {
                    key: "opt",
                    set: function(t) {
                        this._opt = r({}, {
                            element: "",
                            className: "",
                            exclude: [],
                            iframes: !1,
                            iframesTimeout: 5e3,
                            separateWordSearch: !0,
                            diacritics: !0,
                            synonyms: {},
                            accuracy: "partially",
                            acrossElements: !1,
                            caseSensitive: !1,
                            ignoreJoiners: !1,
                            ignoreGroups: 0,
                            ignorePunctuation: [],
                            wildcards: "disabled",
                            each: function() {},
                            noMatch: function() {},
                            filter: function() {
                                return !0
                            },
                            done: function() {},
                            debug: !1,
                            log: window.console
                        }, t)
                    },
                    get: function() {
                        return this._opt
                    }
                }, {
                    key: "iterator",
                    get: function() {
                        return new o(this.ctx, this.opt.iframes, this.opt.exclude, this.opt.iframesTimeout)
                    }
                }]), t
            }();
        return t.fn.mark = function(t, e) {
            return new s(this.get()).mark(t, e), this
        }, t.fn.markRegExp = function(t, e) {
            return new s(this.get()).markRegExp(t, e), this
        }, t.fn.markRanges = function(t, e) {
            return new s(this.get()).markRanges(t, e), this
        }, t.fn.unmark = function(t) {
            return new s(this.get()).unmark(t), this
        }, t
    }(n(0))
}, function(t, e, n) {
    t.exports = n(6)
}, function(t, e, n) {
    "use strict";
    n.r(e),
        function(t) {
            var e = n(0),
                i = n.n(e),
                r = n(3),
                o = n.n(r),
                s = (n(10), n(4)),
                a = n.n(s);
            n(2), n(15);
            i.a, window.$ = i.a, window.UIkit = o.a, window.mark = a.a;
            const u = n(11);
            i()(document).ready(() => {
                u.init()
            })
        }.call(this, n(0))
}, function(t, e, n) {
    (function(t) {
        var i = void 0 !== t && t || "undefined" != typeof self && self || window,
            r = Function.prototype.apply;

        function o(t, e) {
            this._id = t, this._clearFn = e
        }
        e.setTimeout = function() {
            return new o(r.call(setTimeout, i, arguments), clearTimeout)
        }, e.setInterval = function() {
            return new o(r.call(setInterval, i, arguments), clearInterval)
        }, e.clearTimeout = e.clearInterval = function(t) {
            t && t.close()
        }, o.prototype.unref = o.prototype.ref = function() {}, o.prototype.close = function() {
            this._clearFn.call(i, this._id)
        }, e.enroll = function(t, e) {
            clearTimeout(t._idleTimeoutId), t._idleTimeout = e
        }, e.unenroll = function(t) {
            clearTimeout(t._idleTimeoutId), t._idleTimeout = -1
        }, e._unrefActive = e.active = function(t) {
            clearTimeout(t._idleTimeoutId);
            var e = t._idleTimeout;
            e >= 0 && (t._idleTimeoutId = setTimeout((function() {
                t._onTimeout && t._onTimeout()
            }), e))
        }, n(8), e.setImmediate = "undefined" != typeof self && self.setImmediate || void 0 !== t && t.setImmediate || this && this.setImmediate, e.clearImmediate = "undefined" != typeof self && self.clearImmediate || void 0 !== t && t.clearImmediate || this && this.clearImmediate
    }).call(this, n(1))
}, function(t, e, n) {
    (function(t, e) {
        ! function(t, n) {
            "use strict";
            if (!t.setImmediate) {
                var i, r, o, s, a, u = 1,
                    l = {},
                    c = !1,
                    h = t.document,
                    d = Object.getPrototypeOf && Object.getPrototypeOf(t);
                d = d && d.setTimeout ? d : t, "[object process]" === {}.toString.call(t.process) ? i = function(t) {
                    e.nextTick((function() {
                        p(t)
                    }))
                } : ! function() {
                    if (t.postMessage && !t.importScripts) {
                        var e = !0,
                            n = t.onmessage;
                        return t.onmessage = function() {
                            e = !1
                        }, t.postMessage("", "*"), t.onmessage = n, e
                    }
                }() ? t.MessageChannel ? ((o = new MessageChannel).port1.onmessage = function(t) {
                    p(t.data)
                }, i = function(t) {
                    o.port2.postMessage(t)
                }) : h && "onreadystatechange" in h.createElement("script") ? (r = h.documentElement, i = function(t) {
                    var e = h.createElement("script");
                    e.onreadystatechange = function() {
                        p(t), e.onreadystatechange = null, r.removeChild(e), e = null
                    }, r.appendChild(e)
                }) : i = function(t) {
                    setTimeout(p, 0, t)
                } : (s = "setImmediate$" + Math.random() + "$", a = function(e) {
                    e.source === t && "string" == typeof e.data && 0 === e.data.indexOf(s) && p(+e.data.slice(s.length))
                }, t.addEventListener ? t.addEventListener("message", a, !1) : t.attachEvent("onmessage", a), i = function(e) {
                    t.postMessage(s + e, "*")
                }), d.setImmediate = function(t) {
                    "function" != typeof t && (t = new Function("" + t));
                    for (var e = new Array(arguments.length - 1), n = 0; n < e.length; n++) e[n] = arguments[n + 1];
                    var r = {
                        callback: t,
                        args: e
                    };
                    return l[u] = r, i(u), u++
                }, d.clearImmediate = f
            }

            function f(t) {
                delete l[t]
            }

            function p(t) {
                if (c) setTimeout(p, 0, t);
                else {
                    var e = l[t];
                    if (e) {
                        c = !0;
                        try {
                            ! function(t) {
                                var e = t.callback,
                                    n = t.args;
                                switch (n.length) {
                                    case 0:
                                        e();
                                        break;
                                    case 1:
                                        e(n[0]);
                                        break;
                                    case 2:
                                        e(n[0], n[1]);
                                        break;
                                    case 3:
                                        e(n[0], n[1], n[2]);
                                        break;
                                    default:
                                        e.apply(void 0, n)
                                }
                            }(e)
                        } finally {
                            f(t), c = !1
                        }
                    }
                }
            }
        }("undefined" == typeof self ? void 0 === t ? this : t : self)
    }).call(this, n(1), n(9))
}, function(t, e) {
    var n, i, r = t.exports = {};

    function o() {
        throw new Error("setTimeout has not been defined")
    }

    function s() {
        throw new Error("clearTimeout has not been defined")
    }

    function a(t) {
        if (n === setTimeout) return setTimeout(t, 0);
        if ((n === o || !n) && setTimeout) return n = setTimeout, setTimeout(t, 0);
        try {
            return n(t, 0)
        } catch (e) {
            try {
                return n.call(null, t, 0)
            } catch (e) {
                return n.call(this, t, 0)
            }
        }
    }! function() {
        try {
            n = "function" == typeof setTimeout ? setTimeout : o
        } catch (t) {
            n = o
        }
        try {
            i = "function" == typeof clearTimeout ? clearTimeout : s
        } catch (t) {
            i = s
        }
    }();
    var u, l = [],
        c = !1,
        h = -1;

    function d() {
        c && u && (c = !1, u.length ? l = u.concat(l) : h = -1, l.length && f())
    }

    function f() {
        if (!c) {
            var t = a(d);
            c = !0;
            for (var e = l.length; e;) {
                for (u = l, l = []; ++h < e;) u && u[h].run();
                h = -1, e = l.length
            }
            u = null, c = !1,
                function(t) {
                    if (i === clearTimeout) return clearTimeout(t);
                    if ((i === s || !i) && clearTimeout) return i = clearTimeout, clearTimeout(t);
                    try {
                        i(t)
                    } catch (e) {
                        try {
                            return i.call(null, t)
                        } catch (e) {
                            return i.call(this, t)
                        }
                    }
                }(t)
        }
    }

    function p(t, e) {
        this.fun = t, this.array = e
    }

    function g() {}
    r.nextTick = function(t) {
        var e = new Array(arguments.length - 1);
        if (arguments.length > 1)
            for (var n = 1; n < arguments.length; n++) e[n - 1] = arguments[n];
        l.push(new p(t, e)), 1 !== l.length || c || a(f)
    }, p.prototype.run = function() {
        this.fun.apply(null, this.array)
    }, r.title = "browser", r.browser = !0, r.env = {}, r.argv = [], r.version = "", r.versions = {}, r.on = g, r.addListener = g, r.once = g, r.off = g, r.removeListener = g, r.removeAllListeners = g, r.emit = g, r.prependListener = g, r.prependOnceListener = g, r.listeners = function(t) {
        return []
    }, r.binding = function(t) {
        throw new Error("process.binding is not supported")
    }, r.cwd = function() {
        return "/"
    }, r.chdir = function(t) {
        throw new Error("process.chdir is not supported")
    }, r.umask = function() {
        return 0
    }
}, function(t, e, n) {
    var i, r, o; /*!rangeslider.js - v2.3.2 | (c) 2018 @andreruffert | MIT license | https://github.com/andreruffert/rangeslider.js*/
    ! function(s) {
        "use strict";
        r = [n(0)], void 0 === (o = "function" == typeof(i = function(t) {
            Number.isNaN = Number.isNaN || function(t) {
                return "number" == typeof t && t != t
            };
            var e = 0,
                n = (o = document.createElement("input"), o.setAttribute("type", "range"), "text" !== o.type),
                i = {
                    polyfill: !0,
                    orientation: "horizontal",
                    rangeClass: "rangeslider",
                    disabledClass: "rangeslider--disabled",
                    activeClass: "rangeslider--active",
                    horizontalClass: "rangeslider--horizontal",
                    verticalClass: "rangeslider--vertical",
                    fillClass: "rangeslider__fill",
                    handleClass: "rangeslider__handle",
                    startEvent: ["mousedown", "touchstart", "pointerdown"],
                    moveEvent: ["mousemove", "touchmove", "pointermove"],
                    endEvent: ["mouseup", "touchend", "pointerup"]
                },
                r = {
                    orientation: {
                        horizontal: {
                            dimension: "width",
                            direction: "left",
                            directionStyle: "left",
                            coordinate: "x"
                        },
                        vertical: {
                            dimension: "height",
                            direction: "top",
                            directionStyle: "bottom",
                            coordinate: "y"
                        }
                    }
                };
            var o;

            function s(t) {
                return t && (0 === t.offsetWidth || 0 === t.offsetHeight || !1 === t.open)
            }

            function a(t, e) {
                var n = function(t) {
                        for (var e = [], n = t.parentNode; s(n);) e.push(n), n = n.parentNode;
                        return e
                    }(t),
                    i = n.length,
                    r = [],
                    o = t[e];

                function a(t) {
                    void 0 !== t.open && (t.open = !t.open)
                }
                if (i) {
                    for (var u = 0; u < i; u++) r[u] = n[u].style.cssText, n[u].style.setProperty ? n[u].style.setProperty("display", "block", "important") : n[u].style.cssText += ";display: block !important", n[u].style.height = "0", n[u].style.overflow = "hidden", n[u].style.visibility = "hidden", a(n[u]);
                    o = t[e];
                    for (var l = 0; l < i; l++) n[l].style.cssText = r[l], a(n[l])
                }
                return o
            }

            function u(t, e) {
                var n = parseFloat(t);
                return Number.isNaN(n) ? e : n
            }

            function l(t) {
                return t.charAt(0).toUpperCase() + t.substr(1)
            }

            function c(o, s) {
                if (this.$window = t(window), this.$document = t(document), this.$element = t(o), this.options = t.extend({}, i, s), this.polyfill = this.options.polyfill, this.orientation = this.$element[0].getAttribute("data-orientation") || this.options.orientation, this.onInit = this.options.onInit, this.onSlide = this.options.onSlide, this.onSlideEnd = this.options.onSlideEnd, this.DIMENSION = r.orientation[this.orientation].dimension, this.DIRECTION = r.orientation[this.orientation].direction, this.DIRECTION_STYLE = r.orientation[this.orientation].directionStyle, this.COORDINATE = r.orientation[this.orientation].coordinate, this.polyfill && n) return !1;
                this.identifier = "js-rangeslider-" + e++, this.startEvent = this.options.startEvent.join("." + this.identifier + " ") + "." + this.identifier, this.moveEvent = this.options.moveEvent.join("." + this.identifier + " ") + "." + this.identifier, this.endEvent = this.options.endEvent.join("." + this.identifier + " ") + "." + this.identifier, this.toFixed = (this.step + "").replace(".", "").length - 1, this.$fill = t('<div class="' + this.options.fillClass + '" />'), this.$handle = t('<div class="' + this.options.handleClass + '" />'), this.$range = t('<div class="' + this.options.rangeClass + " " + this.options[this.orientation + "Class"] + '" id="' + this.identifier + '" />').insertAfter(this.$element).prepend(this.$fill, this.$handle), this.$element.css({
                    position: "absolute",
                    width: "1px",
                    height: "1px",
                    overflow: "hidden",
                    opacity: "0"
                }), this.handleDown = t.proxy(this.handleDown, this), this.handleMove = t.proxy(this.handleMove, this), this.handleEnd = t.proxy(this.handleEnd, this), this.init();
                var a, u, l = this;
                this.$window.on("resize." + this.identifier, (a = function() {
                    ! function(t, e) {
                        var n = Array.prototype.slice.call(arguments, 2);
                        setTimeout((function() {
                            return t.apply(null, n)
                        }), e)
                    }((function() {
                        l.update(!1, !1)
                    }), 300)
                }, u = (u = 20) || 100, function() {
                    if (!a.debouncing) {
                        var t = Array.prototype.slice.apply(arguments);
                        a.lastReturnVal = a.apply(window, t), a.debouncing = !0
                    }
                    return clearTimeout(a.debounceTimeout), a.debounceTimeout = setTimeout((function() {
                        a.debouncing = !1
                    }), u), a.lastReturnVal
                })), this.$document.on(this.startEvent, "#" + this.identifier + ":not(." + this.options.disabledClass + ")", this.handleDown), this.$element.on("change." + this.identifier, (function(t, e) {
                    if (!e || e.origin !== l.identifier) {
                        var n = t.target.value,
                            i = l.getPositionFromValue(n);
                        l.setPosition(i)
                    }
                }))
            }
            return c.prototype.init = function() {
                this.update(!0, !1), this.onInit && "function" == typeof this.onInit && this.onInit()
            }, c.prototype.update = function(t, e) {
                (t = t || !1) && (this.min = u(this.$element[0].getAttribute("min"), 0), this.max = u(this.$element[0].getAttribute("max"), 100), this.value = u(this.$element[0].value, Math.round(this.min + (this.max - this.min) / 2)), this.step = u(this.$element[0].getAttribute("step"), 1)), this.handleDimension = a(this.$handle[0], "offset" + l(this.DIMENSION)), this.rangeDimension = a(this.$range[0], "offset" + l(this.DIMENSION)), this.maxHandlePos = this.rangeDimension - this.handleDimension, this.grabPos = this.handleDimension / 2, this.position = this.getPositionFromValue(this.value), this.$element[0].disabled ? this.$range.addClass(this.options.disabledClass) : this.$range.removeClass(this.options.disabledClass), this.setPosition(this.position, e)
            }, c.prototype.handleDown = function(t) {
                if (t.preventDefault(), !(t.button && 0 !== t.button || (this.$document.on(this.moveEvent, this.handleMove), this.$document.on(this.endEvent, this.handleEnd), this.$range.addClass(this.options.activeClass), (" " + t.target.className + " ").replace(/[\n\t]/g, " ").indexOf(this.options.handleClass) > -1))) {
                    var e = this.getRelativePosition(t),
                        n = this.$range[0].getBoundingClientRect()[this.DIRECTION],
                        i = this.getPositionFromNode(this.$handle[0]) - n,
                        r = "vertical" === this.orientation ? this.maxHandlePos - (e - this.grabPos) : e - this.grabPos;
                    this.setPosition(r), e >= i && e < i + this.handleDimension && (this.grabPos = e - i)
                }
            }, c.prototype.handleMove = function(t) {
                t.preventDefault();
                var e = this.getRelativePosition(t),
                    n = "vertical" === this.orientation ? this.maxHandlePos - (e - this.grabPos) : e - this.grabPos;
                this.setPosition(n)
            }, c.prototype.handleEnd = function(t) {
                t.preventDefault(), this.$document.off(this.moveEvent, this.handleMove), this.$document.off(this.endEvent, this.handleEnd), this.$range.removeClass(this.options.activeClass), this.$element.trigger("change", {
                    origin: this.identifier
                }), this.onSlideEnd && "function" == typeof this.onSlideEnd && this.onSlideEnd(this.position, this.value)
            }, c.prototype.cap = function(t, e, n) {
                return t < e ? e : t > n ? n : t
            }, c.prototype.setPosition = function(t, e) {
                var n, i;
                void 0 === e && (e = !0), n = this.getValueFromPosition(this.cap(t, 0, this.maxHandlePos)), i = this.getPositionFromValue(n), this.$fill[0].style[this.DIMENSION] = i + this.grabPos + "px", this.$handle[0].style[this.DIRECTION_STYLE] = i + "px", this.setValue(n), this.position = i, this.value = n, e && this.onSlide && "function" == typeof this.onSlide && this.onSlide(i, n)
            }, c.prototype.getPositionFromNode = function(t) {
                for (var e = 0; null !== t;) e += t.offsetLeft, t = t.offsetParent;
                return e
            }, c.prototype.getRelativePosition = function(t) {
                var e = l(this.COORDINATE),
                    n = this.$range[0].getBoundingClientRect()[this.DIRECTION],
                    i = 0;
                return void 0 !== t.originalEvent["client" + e] ? i = t.originalEvent["client" + e] : t.originalEvent.touches && t.originalEvent.touches[0] && void 0 !== t.originalEvent.touches[0]["client" + e] ? i = t.originalEvent.touches[0]["client" + e] : t.currentPoint && void 0 !== t.currentPoint[this.COORDINATE] && (i = t.currentPoint[this.COORDINATE]), i - n
            }, c.prototype.getPositionFromValue = function(t) {
                var e;
                return e = (t - this.min) / (this.max - this.min), Number.isNaN(e) ? 0 : e * this.maxHandlePos
            }, c.prototype.getValueFromPosition = function(t) {
                var e, n;
                return e = t / (this.maxHandlePos || 1), n = this.step * Math.round(e * (this.max - this.min) / this.step) + this.min, Number(n.toFixed(this.toFixed))
            }, c.prototype.setValue = function(t) {
                t === this.value && "" !== this.$element[0].value || this.$element.val(t).trigger("input", {
                    origin: this.identifier
                })
            }, c.prototype.destroy = function() {
                this.$document.off("." + this.identifier), this.$window.off("." + this.identifier), this.$element.off("." + this.identifier).removeAttr("style").removeData("plugin_rangeslider"), this.$range && this.$range.length && this.$range[0].parentNode.removeChild(this.$range[0])
            }, t.fn.rangeslider = function(e) {
                var n = Array.prototype.slice.call(arguments, 1);
                return this.each((function() {
                    var i = t(this),
                        r = i.data("plugin_rangeslider");
                    r || i.data("plugin_rangeslider", r = new c(this, e)), "string" == typeof e && r[e].apply(r, n)
                }))
            }, "rangeslider.js is available in jQuery context e.g $(selector).rangeslider(options);"
        }) ? i.apply(e, r) : i) || (t.exports = o)
    }()
}, function(t, e, n) {
    const i = n(12);
    t.exports = {
        init() {
            n(13), i.init()
        }
    }
}, function(t, e, n) {
    (function(e, n) {
        t.exports = {
            stickyHeader() {
                e(".page-header").length && (e(document).scrollTop() >= 150 ? e(".page-header").addClass("is-scrolled") : e(".page-header").removeClass("is-scrolled"))
            },
            pricingSlider() {
                function t(t) {
                    if (null == t || "null" == t || void 0 === t) return "N/A";
                    t = Number(t), t = Math.round(100 * (t + Number.EPSILON)) / 100, t += "", x = t.split("."), x1 = x[0], x2 = x.length > 1 ? "." + x[1] : "";
                    for (var e = /(\d+)(\d{3})/; e.test(x1);) x1 = x1.replace(e, "$1,$2");
                    return "" === x2 ? x1 : 2 == x2.length ? x1 + x2 + "0" : x1 + x2
                }

                function n(t) {
                    return (t = parseFloat(t).toFixed(2).split("."))[0] + " <sup>" + t[1] + "</sup>"
                }
                const i = [{
                    alerts: 20,
                    annualMonthlyPrice: 7,
                    annualPrice: 84,
                    monthlyPrice: 8,
                    id: 91,
                    idBF: 129,
                    volume: 50
                }, {
                    alerts: 30,
                    annualMonthlyPrice: 21,
                    annualPrice: 252,
                    monthlyPrice: 26,
                    id: 92,
                    idBF: 130,
                    volume: 100
                }, {
                    alerts: 50,
                    annualMonthlyPrice: 28,
                    annualPrice: 336,
                    monthlyPrice: 34,
                    id: 93,
                    idBF: 131,
                    volume: 200
                }, {
                    alerts: 100,
                    annualMonthlyPrice: 62,
                    annualPrice: 744,
                    monthlyPrice: 74,
                    id: 94,
                    idBF: 132,
                    volume: 500
                }, {
                    alerts: 160,
                    annualMonthlyPrice: 121,
                    annualPrice: 1452,
                    monthlyPrice: 134,
                    id: 95,
                    idBF: 133,
                    volume: 1e3
                }, {
                    alerts: 240,
                    annualMonthlyPrice: 204,
                    annualPrice: 2448,
                    monthlyPrice: 224,
                    id: 96,
                    idBF: 134,
                    volume: 2e3
                }, {
                    alerts: 480,
                    annualMonthlyPrice: 412,
                    annualPrice: 4944,
                    monthlyPrice: 444,
                    id: 97,
                    idBF: 135,
                    volume: 5e3
                }, {
                    alerts: 900,
                    annualMonthlyPrice: 828,
                    annualPrice: 9936,
                    monthlyPrice: 884,
                    idBF: 136,
                    volume: 1e4
                }];

                function r(r) {
                    var o = Date.now(),
                        s = -1 !== window.location.pathname.indexOf("bf2021") && o >= 16365888e5 && o <= 1638403199e3,
                        a = (e(".pricing-highlighted .pricing-image").data("scale"), 1 + r / 100 * 5);
                    s ? e("#product-id").val(i[r].idBF) : e("#product-id").val(i[r].id), e(".pricing-highlighted .pricing-image").css("transform", "scale(" + a + ")"), e(".pricing-highlighted .pricing-image").attr("data-scale", a), s ? (e("#price-display-monthly").html(n(.75 * i[r].monthlyPrice)), e("#price-display-annual").html(n(.75 * i[r].annualMonthlyPrice)), e("#monitors-count").text(t(i[r].volume)), e("#alerts-count").text(t(i[r].alerts)), e(".price-display:last-of-type").html(n(i[r].monthlyPrice)), e(".price-display:first-of-type").html(n(i[r].annualMonthlyPrice))) : (e("#price-display-monthly").html(n(i[r].monthlyPrice)), e("#price-display-annual").html(n(i[r].annualMonthlyPrice)), e("#monitors-count").text(t(i[r].volume)), e("#alerts-count").text(t(i[r].alerts)), r >= 1 ? e(".price-discount").addClass("uk-hidden") : e(".price-discount").removeClass("uk-hidden")), 7 == r ? e(".pricing-enterprise").addClass("pricing-shake") : e(".pricing-enterprise").removeClass("pricing-shake")
                }
                e("#pricing-range").length > 0 && (e("#pricing-range").val(0), e("#pricing-range").rangeslider({
                    polyfill: !1,
                    rangeClass: "rangeslider",
                    disabledClass: "is-disabled",
                    horizontalClass: "is-horizontal",
                    fillClass: "rangeslider-fill",
                    handleClass: "rangeslider-handle",
                    onInit: function() {},
                    onSlide: function(t, e) {
                        r(e)
                    },
                    onSlideEnd: function(t, n) {
                        r(n);
                        var i = e("#price-display-monthly, #price-display-annual, #monitors-count, #alerts-count");
                        i.css("transform", "scale(1.4)").delay(150).queue((function() {
                            i.css("transform", "scale(1)").dequeue()
                        }))
                    }
                }), setTimeout((function() {
                    e("#pricing-range").rangeslider("update", !0)
                }), 100))
            },
            pricingSwitcher() {
                e("[data-pricing-switch]").on("click", (function() {
                    e(this).find(".pricing-billing-period").toggleClass("uk-text-muted"), "true" == e(this).find(".toggle").attr("aria-checked") ? e(this).find(".toggle").attr("aria-checked", "false") : e(this).find(".toggle").attr("aria-checked", "true")
                }))
            },
            initLogosSlider() {
                function t() {
                    e(window).width() < 960 ? (UIkit.slider(".testimonial-logos", {
                        autoplay: !0,
                        autoplayInterval: 1500
                    }), e(".testimonial-logos ul").removeClass("uk-flex uk-flex-around uk-flex-middle")) : (UIkit.slider(".testimonial-logos").$destroy(), e(".testimonial-logos ul").css("transform", "none"), e(".testimonial-logos ul").addClass("uk-flex uk-flex-around uk-flex-middle"))
                }
                e(".testimonial-logos").length > 0 && (t(), e(window).resize((function() {
                    t()
                })))
            },
            trimSpaces() {
                e("pre code").length > 0 && e("pre code").each((function() {
                    e(this).text(e(this).text().replace(/^[^\S\r\n]{50}/gm, "").trim())
                }))
            },
            handleFAQPage() {
                if (e("#search-faq").length > 0) {
                    var t = e("#search-faq").val(),
                        n = (e("#faq .uk-accordion-content mark, #faq .uk-accordion-title mark"), e("#faq > div > ul > li"));
                    n.unmark(), n.removeClass("uk-hidden"), t.length >= 3 ? n.mark(t, {
                        separateWordSearch: !1,
                        done: function() {
                            n.each((function() {
                                0 == e(this).find("mark").length ? e(this).addClass("uk-hidden") : e(this).removeClass("uk-hidden")
                            })), e("#faq > div > ul").each((function(t) {
                                e("#faq-c-" + (t + 1)).text(e(this).find("> li").length - e(this).find("> li.uk-hidden").length), e(this).find("> li").length == e(this).find("> li.uk-hidden").length ? e(this).next(".no-results").removeClass("uk-hidden").attr("aria-hidden", !1) : e(this).next(".no-results").addClass("uk-hidden").attr("aria-hidden", !0)
                            }))
                        }
                    }) : (e('[id*="faq-c-"]').each((function() {
                        e(this).text(e(this).attr("data-original"))
                    })), e("#faq > div .no-results").addClass("uk-hidden").attr("aria-hidden", !0))
                }
            },
            apiNav() {
                e(".api-page").length > 0 && (e("[uk-scrollspy-nav] li .uk-nav-sub .uk-active").length > 0 || e("[uk-scrollspy-nav] li .uk-nav-sub").parent().hasClass("uk-active") ? e("[uk-scrollspy-nav] li .uk-nav-sub").removeClass("uk-hidden") : e("[uk-scrollspy-nav] .uk-nav-sub").addClass("uk-hidden"))
            },
            openApiAccordion() {
                e("#apimethodsmenu > li").on("click", (function() {
                    var t = e(this).index(),
                        n = e("#methodsacc > li.uk-open").index(); - 1 != n && t != n ? (UIkit.accordion(e("#methodsacc")).toggle(n, !1), UIkit.accordion(e("#methodsacc")).toggle(t, !1), setTimeout((function() {
                        const n = e("#methodsacc > li")[t].getBoundingClientRect().top + window.pageYOffset + -90;
                        window.scrollTo({
                            top: n,
                            behavior: "auto"
                        })
                    }), 800)) : -1 == n && UIkit.accordion(e("#methodsacc")).toggle(t, !1)
                }))
            },
            handleMobileHashMenuClick() {
                e("body.is-home-page").length > 0 && e("#mobile-menu a[uk-scroll]").on("click", (function() {
                    UIkit.offcanvas(e("#mobile-menu")).hide()
                }))
            },
            checkForUser() {
                "true" == function(t) {
                    for (var e = t + "=", n = document.cookie.split(";"), i = 0; i < n.length; i++) {
                        for (var r = n[i];
                            " " == r.charAt(0);) r = r.substring(1, r.length);
                        if (0 == r.indexOf(e)) return r.substring(e.length, r.length)
                    }
                    return null
                }("loggedin") ? (e(".hide-for-logged").addClass("uk-hidden"), e(".show-for-logged").removeClass("uk-hidden")) : (e(".hide-for-logged").removeClass("uk-hidden"), e(".show-for-logged").addClass("uk-hidden"))
            },
            handleBlackFriday() {
                Date.now() >= 1637971201e3 && e(".bf-show").removeClass("uk-hidden")
            },
            init() {
                this.throttledStickyHeader = n(this.stickyHeader, 250), window.addEventListener("scroll", this.throttledStickyHeader), this.throttledapiNav = n(this.apiNav, 250), window.addEventListener("scroll", this.throttledapiNav), this.throttledhandleFAQPage = n(this.handleFAQPage, 250), window.addEventListener("keyup", this.throttledhandleFAQPage), this.stickyHeader(), this.pricingSlider(), this.pricingSwitcher(), this.initLogosSlider(), this.trimSpaces(), this.handleFAQPage(), this.apiNav(), this.openApiAccordion(), this.handleMobileHashMenuClick(), this.checkForUser(), this.handleBlackFriday()
            }
        }
    }).call(this, n(0), n(2))
}, function(t, e, n) {
    n(14)
}, function(t, e) {
    /*!
     * @copyright Copyright (c) 2017 IcoMoon.io
     * @license Licensed under MIT license
     * See https://github.com/Keyamoon/svgxuse
     * @version 1.2.6
     */
    ! function() {
        "use strict";
        if ("undefined" != typeof window && window.addEventListener) {
            var t, e, n, i = Object.create(null),
                r = function() {
                    clearTimeout(e), e = setTimeout(t, 100)
                },
                o = function() {},
                s = function(t) {
                    function e(t) {
                        var e;
                        return void 0 !== t.protocol ? e = t : (e = document.createElement("a")).href = t, e.protocol.replace(/:/g, "") + e.host
                    }
                    var n, i, r;
                    return window.XMLHttpRequest && (n = new XMLHttpRequest, i = e(location), r = e(t), n = void 0 === n.withCredentials && "" !== r && r !== i ? XDomainRequest || void 0 : XMLHttpRequest), n
                },
                a = "http://www.w3.org/1999/xlink";
            t = function() {
                var t, e, n, u, l, c, h, d, f, p, g = 0;

                function m() {
                    var t;
                    0 === (g -= 1) && (o(), window.addEventListener("resize", r, !1), window.addEventListener("orientationchange", r, !1), window.MutationObserver ? ((t = new MutationObserver(r)).observe(document.documentElement, {
                        childList: !0,
                        subtree: !0,
                        attributes: !0
                    }), o = function() {
                        try {
                            t.disconnect(), window.removeEventListener("resize", r, !1), window.removeEventListener("orientationchange", r, !1)
                        } catch (t) {}
                    }) : (document.documentElement.addEventListener("DOMSubtreeModified", r, !1), o = function() {
                        document.documentElement.removeEventListener("DOMSubtreeModified", r, !1), window.removeEventListener("resize", r, !1), window.removeEventListener("orientationchange", r, !1)
                    }))
                }

                function v(t) {
                    return function() {
                        !0 !== i[t.base] && (t.useEl.setAttributeNS(a, "xlink:href", "#" + t.hash), t.useEl.hasAttribute("href") && t.useEl.setAttribute("href", "#" + t.hash))
                    }
                }

                function y(t) {
                    return function() {
                        var e, n = document.body,
                            i = document.createElement("x");
                        t.onload = null, i.innerHTML = t.responseText, (e = i.getElementsByTagName("svg")[0]) && (e.setAttribute("aria-hidden", "true"), e.style.position = "absolute", e.style.width = 0, e.style.height = 0, e.style.overflow = "hidden", n.insertBefore(e, n.firstChild)), m()
                    }
                }

                function w(t) {
                    return function() {
                        t.onerror = null, t.ontimeout = null, m()
                    }
                }
                for (o(), f = document.getElementsByTagName("use"), l = 0; l < f.length; l += 1) {
                    try {
                        e = f[l].getBoundingClientRect()
                    } catch (t) {
                        e = !1
                    }
                    t = (d = (u = f[l].getAttribute("href") || f[l].getAttributeNS(a, "href") || f[l].getAttribute("xlink:href")) && u.split ? u.split("#") : ["", ""])[0], n = d[1], c = e && 0 === e.left && 0 === e.right && 0 === e.top && 0 === e.bottom, e && 0 === e.width && 0 === e.height && !c ? (f[l].hasAttribute("href") && f[l].setAttributeNS(a, "xlink:href", u), t.length && (!0 !== (p = i[t]) && setTimeout(v({
                        useEl: f[l],
                        base: t,
                        hash: n
                    }), 0), void 0 === p && void 0 !== (h = s(t)) && (p = new h, i[t] = p, p.onload = y(p), p.onerror = w(p), p.ontimeout = w(p), p.open("GET", t), p.send(), g += 1))) : c ? t.length && i[t] && setTimeout(v({
                        useEl: f[l],
                        base: t,
                        hash: n
                    }), 0) : void 0 === i[t] ? i[t] = !0 : i[t].onload && (i[t].abort(), delete i[t].onload, i[t] = !0)
                }
                f = "", g += 1, m()
            }, n = function() {
                window.removeEventListener("load", n, !1), e = setTimeout(t, 0)
            }, "complete" !== document.readyState ? window.addEventListener("load", n, !1) : n()
        }
    }()
}, function(t, e, n) {}]);