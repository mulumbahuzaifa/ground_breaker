! function(e, o) {
    "object" == typeof exports && "object" == typeof module ? module.exports = o() : "function" == typeof define && define.amd ? define([], o) : "object" == typeof exports ? exports.postscribe = o() : e.postscribe = o()
}(this, function() {
    return function(e) {
        function o(r) {
            if (t[r]) return t[r].exports;
            var n = t[r] = {
                exports: {},
                id: r,
                loaded: !1
            };
            return e[r].call(n.exports, n, n.exports, o), n.loaded = !0, n.exports
        }
        var t = {};
        return o.m = e, o.c = t, o.p = "", o(0)
    }([function(e, o, t) {
        "use strict";
        var r = t(1),
            n = function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }(r);
        e.exports = n.default
    }, function(e, o, t) {
        "use strict";

        function r() {}

        function n() {
            var e = f.shift();
            if (e) {
                var o = _.last(e);
                o.afterDequeue(), e.stream = i.apply(void 0, e), o.afterStreamStart()
            }
        }

        function i(e, o, t) {
            function i(e) {
                e = t.beforeWrite(e), u.write(e), t.afterWrite(e)
            }
            u = new c.default(e, t), u.id = g++, u.name = t.name || u.id, a.streams[u.name] = u;
            var d = e.ownerDocument,
                p = {
                    close: d.close,
                    open: d.open,
                    write: d.write,
                    writeln: d.writeln
                };
            s(d, {
                close: r,
                open: r,
                write: function() {
                    for (var e = arguments.length, o = Array(e), t = 0; t < e; t++) o[t] = arguments[t];
                    return i(o.join(""))
                },
                writeln: function() {
                    for (var e = arguments.length, o = Array(e), t = 0; t < e; t++) o[t] = arguments[t];
                    return i(o.join("") + "\n")
                }
            });
            var _ = u.win.onerror || r;
            return u.win.onerror = function(e, o, r) {
                t.error({
                    msg: e + " - " + o + ": " + r
                }), _.apply(u.win, [e, o, r])
            }, u.write(o, function() {
                s(d, p), u.win.onerror = _, t.done(), u = null, n()
            }), u
        }

        function a(e, o, t) {
            if (_.isFunction(t)) t = {
                done: t
            };
            else if ("clear" === t) return f = [], u = null, void(g = 0);
            t = _.defaults(t, l), e = /^#/.test(e) ? window.document.getElementById(e.substr(1)) : e.jquery ? e[0] : e;
            var i = [e, o, t];
            return e.postscribe = {
                cancel: function() {
                    i.stream ? i.stream.abort() : i[1] = r
                }
            }, t.beforeEnqueue(i), f.push(i), u || n(), e.postscribe
        }
        o.__esModule = !0;
        var s = Object.assign || function(e) {
            for (var o = 1; o < arguments.length; o++) {
                var t = arguments[o];
                for (var r in t) Object.prototype.hasOwnProperty.call(t, r) && (e[r] = t[r])
            }
            return e
        };
        o.default = a;
        var d = t(2),
            c = function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }(d),
            p = t(4),
            _ = function(e) {
                if (e && e.__esModule) return e;
                var o = {};
                if (null != e)
                    for (var t in e) Object.prototype.hasOwnProperty.call(e, t) && (o[t] = e[t]);
                return o.default = e, o
            }(p),
            l = {
                afterAsync: r,
                afterDequeue: r,
                afterStreamStart: r,
                afterWrite: r,
                autoFix: !0,
                beforeEnqueue: r,
                beforeWriteToken: function(e) {
                    return e
                },
                beforeWrite: function(e) {
                    return e
                },
                done: r,
                error: function(e) {
                    throw new Error(e.msg)
                },
                releaseAsync: !1
            },
            g = 0,
            f = [],
            u = null;
        s(a, {
            streams: {},
            queue: f,
            WriteStream: c.default
        })
    }, function(e, o, t) {
        "use strict";

        function r(e, o) {
            if (!(e instanceof o)) throw new TypeError("Cannot call a class as a function")
        }

        function n(e, o) {
            var t = _ + o,
                r = e.getAttribute(t);
            return p.existy(r) ? String(r) : r
        }

        function i(e, o) {
            var t = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null,
                r = _ + o;
            p.existy(t) && "" !== t ? e.setAttribute(r, t) : e.removeAttribute(r)
        }
        o.__esModule = !0;
        var a = Object.assign || function(e) {
                for (var o = 1; o < arguments.length; o++) {
                    var t = arguments[o];
                    for (var r in t) Object.prototype.hasOwnProperty.call(t, r) && (e[r] = t[r])
                }
                return e
            },
            s = t(3),
            d = function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }(s),
            c = t(4),
            p = function(e) {
                if (e && e.__esModule) return e;
                var o = {};
                if (null != e)
                    for (var t in e) Object.prototype.hasOwnProperty.call(e, t) && (o[t] = e[t]);
                return o.default = e, o
            }(c),
            _ = "data-ps-",
            l = "ps-style",
            g = "ps-script",
            f = function() {
                function e(o) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                    r(this, e), this.root = o, this.options = t, this.doc = o.ownerDocument, this.win = this.doc.defaultView || this.doc.parentWindow, this.parser = new d.default("", {
                        autoFix: t.autoFix
                    }), this.actuals = [o], this.proxyHistory = "", this.proxyRoot = this.doc.createElement(o.nodeName), this.scriptStack = [], this.writeQueue = [], i(this.proxyRoot, "proxyof", 0)
                }
                return e.prototype.write = function() {
                    var e;
                    for ((e = this.writeQueue).push.apply(e, arguments); !this.deferredRemote && this.writeQueue.length;) {
                        var o = this.writeQueue.shift();
                        p.isFunction(o) ? this._callFunction(o) : this._writeImpl(o)
                    }
                }, e.prototype._callFunction = function(e) {
                    var o = {
                        type: "function",
                        value: e.name || e.toString()
                    };
                    this._onScriptStart(o), e.call(this.win, this.doc), this._onScriptDone(o)
                }, e.prototype._writeImpl = function(e) {
                    this.parser.append(e);
                    for (var o = void 0, t = void 0, r = void 0, n = [];
                        (o = this.parser.readToken()) && !(t = p.isScript(o)) && !(r = p.isStyle(o));)(o = this.options.beforeWriteToken(o)) && n.push(o);
                    n.length > 0 && this._writeStaticTokens(n), t && this._handleScriptToken(o), r && this._handleStyleToken(o)
                }, e.prototype._writeStaticTokens = function(e) {
                    var o = this._buildChunk(e);
                    return o.actual ? (o.html = this.proxyHistory + o.actual, this.proxyHistory += o.proxy, this.proxyRoot.innerHTML = o.html, this._walkChunk(), o) : null
                }, e.prototype._buildChunk = function(e) {
                    for (var o = this.actuals.length, t = [], r = [], n = [], i = e.length, a = 0; a < i; a++) {
                        var s = e[a],
                            d = s.toString();
                        if (t.push(d), s.attrs) {
                            if (!/^noscript$/i.test(s.tagName)) {
                                var c = o++;
                                r.push(d.replace(/(\/?>)/, " " + _ + "id=" + c + " $1")), s.attrs.id !== g && s.attrs.id !== l && n.push("atomicTag" === s.type ? "" : "<" + s.tagName + " " + _ + "proxyof=" + c + (s.unary ? " />" : ">"))
                            }
                        } else r.push(d), n.push("endTag" === s.type ? d : "")
                    }
                    return {
                        tokens: e,
                        raw: t.join(""),
                        actual: r.join(""),
                        proxy: n.join("")
                    }
                }, e.prototype._walkChunk = function() {
                    for (var e = void 0, o = [this.proxyRoot]; p.existy(e = o.shift());) {
                        var t = 1 === e.nodeType;
                        if (!(t && n(e, "proxyof"))) {
                            t && (this.actuals[n(e, "id")] = e, i(e, "id"));
                            var r = e.parentNode && n(e.parentNode, "proxyof");
                            r && this.actuals[r].appendChild(e)
                        }
                        o.unshift.apply(o, p.toArray(e.childNodes))
                    }
                }, e.prototype._handleScriptToken = function(e) {
                    var o = this,
                        t = this.parser.clear();
                    t && this.writeQueue.unshift(t), e.src = e.attrs.src || e.attrs.SRC, (e = this.options.beforeWriteToken(e)) && (e.src && this.scriptStack.length ? this.deferredRemote = e : this._onScriptStart(e), this._writeScriptToken(e, function() {
                        o._onScriptDone(e)
                    }))
                }, e.prototype._handleStyleToken = function(e) {
                    var o = this.parser.clear();
                    o && this.writeQueue.unshift(o), e.type = e.attrs.type || e.attrs.TYPE || "text/css", e = this.options.beforeWriteToken(e), e && this._writeStyleToken(e), o && this.write()
                }, e.prototype._writeStyleToken = function(e) {
                    var o = this._buildStyle(e);
                    this._insertCursor(o, l), e.content && (o.styleSheet && !o.sheet ? o.styleSheet.cssText = e.content : o.appendChild(this.doc.createTextNode(e.content)))
                }, e.prototype._buildStyle = function(e) {
                    var o = this.doc.createElement(e.tagName);
                    return o.setAttribute("type", e.type), p.eachKey(e.attrs, function(e, t) {
                        o.setAttribute(e, t)
                    }), o
                }, e.prototype._insertCursor = function(e, o) {
                    this._writeImpl('<span id="' + o + '"/>');
                    var t = this.doc.getElementById(o);
                    t && t.parentNode.replaceChild(e, t)
                }, e.prototype._onScriptStart = function(e) {
                    e.outerWrites = this.writeQueue, this.writeQueue = [], this.scriptStack.unshift(e)
                }, e.prototype._onScriptDone = function(e) {
                    return e !== this.scriptStack[0] ? void this.options.error({
                        msg: "Bad script nesting or script finished twice"
                    }) : (this.scriptStack.shift(), this.write.apply(this, e.outerWrites), void(!this.scriptStack.length && this.deferredRemote && (this._onScriptStart(this.deferredRemote), this.deferredRemote = null)))
                }, e.prototype._writeScriptToken = function(e, o) {
                    var t = this._buildScript(e),
                        r = this._shouldRelease(t),
                        n = this.options.afterAsync;
                    e.src && (t.src = e.src, this._scriptLoadHandler(t, r ? n : function() {
                        o(), n()
                    }));
                    try {
                        this._insertCursor(t, g), t.src && !r || o()
                    } catch (e) {
                        this.options.error(e), o()
                    }
                }, e.prototype._buildScript = function(e) {
                    var o = this.doc.createElement(e.tagName);
                    return p.eachKey(e.attrs, function(e, t) {
                        o.setAttribute(e, t)
                    }), e.content && (o.text = e.content), o
                }, e.prototype._scriptLoadHandler = function(e, o) {
                    function t() {
                        e = e.onload = e.onreadystatechange = e.onerror = null
                    }

                    function r() {
                        t(), null != o && o(), o = null
                    }

                    function n(e) {
                        t(), s(e), null != o && o(), o = null
                    }

                    function i(e, o) {
                        var t = e["on" + o];
                        null != t && (e["_on" + o] = t)
                    }
                    var s = this.options.error;
                    i(e, "load"), i(e, "error"), a(e, {
                        onload: function() {
                            if (e._onload) try {
                                e._onload.apply(this, Array.prototype.slice.call(arguments, 0))
                            } catch (o) {
                                n({
                                    msg: "onload handler failed " + o + " @ " + e.src
                                })
                            }
                            r()
                        },
                        onerror: function() {
                            if (e._onerror) try {
                                e._onerror.apply(this, Array.prototype.slice.call(arguments, 0))
                            } catch (o) {
                                return void n({
                                    msg: "onerror handler failed " + o + " @ " + e.src
                                })
                            }
                            n({
                                msg: "remote script failed " + e.src
                            })
                        },
                        onreadystatechange: function() {
                            /^(loaded|complete)$/.test(e.readyState) && r()
                        }
                    })
                }, e.prototype._shouldRelease = function(e) {
                    return !/^script$/i.test(e.nodeName) || !!(this.options.releaseAsync && e.src && e.hasAttribute("async"))
                }, e
            }();
        o.default = f
    }, function(e, o, t) {
        ! function(o, t) {
            e.exports = function() {
                return function(e) {
                    function o(r) {
                        if (t[r]) return t[r].exports;
                        var n = t[r] = {
                            exports: {},
                            id: r,
                            loaded: !1
                        };
                        return e[r].call(n.exports, n, n.exports, o), n.loaded = !0, n.exports
                    }
                    var t = {};
                    return o.m = e, o.c = t, o.p = "", o(0)
                }([function(e, o, t) {
                    "use strict";
                    var r = t(1),
                        n = function(e) {
                            return e && e.__esModule ? e : {
                                default: e
                            }
                        }(r);
                    e.exports = n.default
                }, function(e, o, t) {
                    "use strict";

                    function r(e) {
                        if (e && e.__esModule) return e;
                        var o = {};
                        if (null != e)
                            for (var t in e) Object.prototype.hasOwnProperty.call(e, t) && (o[t] = e[t]);
                        return o.default = e, o
                    }

                    function n(e, o) {
                        if (!(e instanceof o)) throw new TypeError("Cannot call a class as a function")
                    }
                    o.__esModule = !0;
                    var i = t(2),
                        a = r(i),
                        s = t(3),
                        d = r(s),
                        c = t(6),
                        p = function(e) {
                            return e && e.__esModule ? e : {
                                default: e
                            }
                        }(c),
                        _ = t(5),
                        l = {
                            comment: /^<!--/,
                            endTag: /^<\//,
                            atomicTag: /^<\s*(script|style|noscript|iframe|textarea)[\s\/>]/i,
                            startTag: /^</,
                            chars: /^[^<]/
                        },
                        g = function() {
                            function e() {
                                var o = this,
                                    t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                                    r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                                n(this, e), this.stream = t;
                                var i = !1,
                                    s = {};
                                for (var d in a) a.hasOwnProperty(d) && (r.autoFix && (s[d + "Fix"] = !0), i = i || s[d + "Fix"]);
                                i ? (this._readToken = (0, p.default)(this, s, function() {
                                    return o._readTokenImpl()
                                }), this._peekToken = (0, p.default)(this, s, function() {
                                    return o._peekTokenImpl()
                                })) : (this._readToken = this._readTokenImpl, this._peekToken = this._peekTokenImpl)
                            }
                            return e.prototype.append = function(e) {
                                this.stream += e
                            }, e.prototype.prepend = function(e) {
                                this.stream = e + this.stream
                            }, e.prototype._readTokenImpl = function() {
                                var e = this._peekTokenImpl();
                                if (e) return this.stream = this.stream.slice(e.length), e
                            }, e.prototype._peekTokenImpl = function() {
                                for (var e in l)
                                    if (l.hasOwnProperty(e) && l[e].test(this.stream)) {
                                        var o = d[e](this.stream);
                                        if (o) return "startTag" === o.type && /script|style/i.test(o.tagName) ? null : (o.text = this.stream.substr(0, o.length), o)
                                    }
                            }, e.prototype.peekToken = function() {
                                return this._peekToken()
                            }, e.prototype.readToken = function() {
                                return this._readToken()
                            }, e.prototype.readTokens = function(e) {
                                for (var o = void 0; o = this.readToken();)
                                    if (e[o.type] && !1 === e[o.type](o)) return
                            }, e.prototype.clear = function() {
                                var e = this.stream;
                                return this.stream = "", e
                            }, e.prototype.rest = function() {
                                return this.stream
                            }, e
                        }();
                    o.default = g, g.tokenToString = function(e) {
                        return e.toString()
                    }, g.escapeAttributes = function(e) {
                        var o = {};
                        for (var t in e) e.hasOwnProperty(t) && (o[t] = (0, _.escapeQuotes)(e[t], null));
                        return o
                    }, g.supports = a;
                    for (var f in a) a.hasOwnProperty(f) && (g.browserHasFlaw = g.browserHasFlaw || !a[f] && f)
                }, function(e, o) {
                    "use strict";
                    o.__esModule = !0;
                    var t = !1,
                        r = !1,
                        n = window.document.createElement("div");
                    try {
                        var i = "<P><I></P></I>";
                        n.innerHTML = i, o.tagSoup = t = n.innerHTML !== i
                    } catch (e) {
                        o.tagSoup = t = !1
                    }
                    try {
                        n.innerHTML = "<P><i><P></P></i></P>", o.selfClose = r = 2 === n.childNodes.length
                    } catch (e) {
                        o.selfClose = r = !1
                    }
                    n = null, o.tagSoup = t, o.selfClose = r
                }, function(e, o, t) {
                    "use strict";

                    function r(e) {
                        var o = e.indexOf("--\x3e");
                        if (o >= 0) return new c.CommentToken(e.substr(4, o - 1), o + 3)
                    }

                    function n(e) {
                        var o = e.indexOf("<");
                        return new c.CharsToken(o >= 0 ? o : e.length)
                    }

                    function i(e) {
                        if (-1 !== e.indexOf(">")) {
                            var o = e.match(p.startTag);
                            if (o) {
                                var t = function() {
                                    var e = {},
                                        t = {},
                                        r = o[2];
                                    return o[2].replace(p.attr, function(o, n) {
                                        arguments[2] || arguments[3] || arguments[4] || arguments[5] ? arguments[5] ? (e[arguments[5]] = "", t[arguments[5]] = !0) : e[n] = arguments[2] || arguments[3] || arguments[4] || p.fillAttr.test(n) && n || "" : e[n] = "", r = r.replace(o, "")
                                    }), {
                                        v: new c.StartTagToken(o[1], o[0].length, e, t, !!o[3], r.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, ""))
                                    }
                                }();
                                if ("object" === (void 0 === t ? "undefined" : d(t))) return t.v
                            }
                        }
                    }

                    function a(e) {
                        var o = i(e);
                        if (o) {
                            var t = e.slice(o.length);
                            if (t.match(new RegExp("</\\s*" + o.tagName + "\\s*>", "i"))) {
                                var r = t.match(new RegExp("([\\s\\S]*?)</\\s*" + o.tagName + "\\s*>", "i"));
                                if (r) return new c.AtomicTagToken(o.tagName, r[0].length + o.length, o.attrs, o.booleanAttrs, r[1])
                            }
                        }
                    }

                    function s(e) {
                        var o = e.match(p.endTag);
                        if (o) return new c.EndTagToken(o[1], o[0].length)
                    }
                    o.__esModule = !0;
                    var d = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                        return typeof e
                    } : function(e) {
                        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                    };
                    o.comment = r, o.chars = n, o.startTag = i, o.atomicTag = a, o.endTag = s;
                    var c = t(4),
                        p = {
                            startTag: /^<([\-A-Za-z0-9_]+)((?:\s+[\w\-]+(?:\s*=?\s*(?:(?:"[^"]*")|(?:'[^']*')|[^>\s]+))?)*)\s*(\/?)>/,
                            endTag: /^<\/([\-A-Za-z0-9_]+)[^>]*>/,
                            attr: /(?:([\-A-Za-z0-9_]+)\s*=\s*(?:(?:"((?:\\.|[^"])*)")|(?:'((?:\\.|[^'])*)')|([^>\s]+)))|(?:([\-A-Za-z0-9_]+)(\s|$)+)/g,
                            fillAttr: /^(checked|compact|declare|defer|disabled|ismap|multiple|nohref|noresize|noshade|nowrap|readonly|selected)$/i
                        }
                }, function(e, o, t) {
                    "use strict";

                    function r(e, o) {
                        if (!(e instanceof o)) throw new TypeError("Cannot call a class as a function")
                    }
                    o.__esModule = !0, o.EndTagToken = o.AtomicTagToken = o.StartTagToken = o.TagToken = o.CharsToken = o.CommentToken = o.Token = void 0;
                    var n = t(5),
                        i = (o.Token = function e(o, t) {
                            r(this, e), this.type = o, this.length = t, this.text = ""
                        }, o.CommentToken = function() {
                            function e(o, t) {
                                r(this, e), this.type = "comment", this.length = t || (o ? o.length : 0), this.text = "", this.content = o
                            }
                            return e.prototype.toString = function() {
                                return "\x3c!--" + this.content
                            }, e
                        }(), o.CharsToken = function() {
                            function e(o) {
                                r(this, e), this.type = "chars", this.length = o, this.text = ""
                            }
                            return e.prototype.toString = function() {
                                return this.text
                            }, e
                        }(), o.TagToken = function() {
                            function e(o, t, n, i, a) {
                                r(this, e), this.type = o, this.length = n, this.text = "", this.tagName = t, this.attrs = i, this.booleanAttrs = a, this.unary = !1, this.html5Unary = !1
                            }
                            return e.formatTag = function(e) {
                                var o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
                                    t = "<" + e.tagName;
                                for (var r in e.attrs)
                                    if (e.attrs.hasOwnProperty(r)) {
                                        t += " " + r;
                                        var i = e.attrs[r];
                                        void 0 !== e.booleanAttrs && void 0 !== e.booleanAttrs[r] || (t += '="' + (0, n.escapeQuotes)(i) + '"')
                                    }
                                return e.rest && (t += " " + e.rest), t += e.unary && !e.html5Unary ? "/>" : ">", void 0 !== o && null !== o && (t += o + "</" + e.tagName + ">"), t
                            }, e
                        }());
                    o.StartTagToken = function() {
                        function e(o, t, n, i, a, s) {
                            r(this, e), this.type = "startTag", this.length = t, this.text = "", this.tagName = o, this.attrs = n, this.booleanAttrs = i, this.html5Unary = !1, this.unary = a, this.rest = s
                        }
                        return e.prototype.toString = function() {
                            return i.formatTag(this)
                        }, e
                    }(), o.AtomicTagToken = function() {
                        function e(o, t, n, i, a) {
                            r(this, e), this.type = "atomicTag", this.length = t, this.text = "", this.tagName = o, this.attrs = n, this.booleanAttrs = i, this.unary = !1, this.html5Unary = !1, this.content = a
                        }
                        return e.prototype.toString = function() {
                            return i.formatTag(this, this.content)
                        }, e
                    }(), o.EndTagToken = function() {
                        function e(o, t) {
                            r(this, e), this.type = "endTag", this.length = t, this.text = "", this.tagName = o
                        }
                        return e.prototype.toString = function() {
                            return "</" + this.tagName + ">"
                        }, e
                    }()
                }, function(e, o) {
                    "use strict";

                    function t(e) {
                        var o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
                        return e ? e.replace(/([^"]*)"/g, function(e, o) {
                            return /\\/.test(o) ? o + '"' : o + '\\"'
                        }) : o
                    }
                    o.__esModule = !0, o.escapeQuotes = t
                }, function(e, o) {
                    "use strict";

                    function t(e) {
                        return e && "startTag" === e.type && (e.unary = s.test(e.tagName) || e.unary, e.html5Unary = !/\/>$/.test(e.text)), e
                    }

                    function r(e, o) {
                        var r = e.stream,
                            n = t(o());
                        return e.stream = r, n
                    }

                    function n(e, o) {
                        var t = o.pop();
                        e.prepend("</" + t.tagName + ">")
                    }

                    function i() {
                        var e = [];
                        return e.last = function() {
                            return this[this.length - 1]
                        }, e.lastTagNameEq = function(e) {
                            var o = this.last();
                            return o && o.tagName && o.tagName.toUpperCase() === e.toUpperCase()
                        }, e.containsTagName = function(e) {
                            for (var o, t = 0; o = this[t]; t++)
                                if (o.tagName === e) return !0;
                            return !1
                        }, e
                    }

                    function a(e, o, a) {
                        function s() {
                            var o = r(e, a);
                            o && p[o.type] && p[o.type](o)
                        }
                        var c = i(),
                            p = {
                                startTag: function(t) {
                                    var r = t.tagName;
                                    "TR" === r.toUpperCase() && c.lastTagNameEq("TABLE") ? (e.prepend("<TBODY>"), s()) : o.selfCloseFix && d.test(r) && c.containsTagName(r) ? c.lastTagNameEq(r) ? n(e, c) : (e.prepend("</" + t.tagName + ">"), s()) : t.unary || c.push(t)
                                },
                                endTag: function(t) {
                                    c.last() ? o.tagSoupFix && !c.lastTagNameEq(t.tagName) ? n(e, c) : c.pop() : o.tagSoupFix && (a(), s())
                                }
                            };
                        return function() {
                            return s(), t(a())
                        }
                    }
                    o.__esModule = !0, o.default = a;
                    var s = /^(AREA|BASE|BASEFONT|BR|COL|FRAME|HR|IMG|INPUT|ISINDEX|LINK|META|PARAM|EMBED)$/i,
                        d = /^(COLGROUP|DD|DT|LI|OPTIONS|P|TD|TFOOT|TH|THEAD|TR)$/i
                }])
            }()
        }()
    }, function(e, o) {
        "use strict";

        function t(e) {
            return void 0 !== e && null !== e
        }

        function r(e) {
            return "function" == typeof e
        }

        function n(e, o, t) {
            var r = void 0,
                n = e && e.length || 0;
            for (r = 0; r < n; r++) o.call(t, e[r], r)
        }

        function i(e, o, t) {
            for (var r in e) e.hasOwnProperty(r) && o.call(t, r, e[r])
        }

        function a(e, o) {
            return e = e || {}, i(o, function(o, r) {
                t(e[o]) || (e[o] = r)
            }), e
        }

        function s(e) {
            try {
                return Array.prototype.slice.call(e)
            } catch (t) {
                var o = function() {
                    var o = [];
                    return n(e, function(e) {
                        o.push(e)
                    }), {
                        v: o
                    }
                }();
                if ("object" === (void 0 === o ? "undefined" : l(o))) return o.v
            }
        }

        function d(e) {
            return e[e.length - 1]
        }

        function c(e, o) {
            return !(!e || "startTag" !== e.type && "atomicTag" !== e.type || !("tagName" in e) || !~e.tagName.toLowerCase().indexOf(o))
        }

        function p(e) {
            return c(e, "script")
        }

        function _(e) {
            return c(e, "style")
        }
        o.__esModule = !0;
        var l = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        };
        o.existy = t, o.isFunction = r, o.each = n, o.eachKey = i, o.defaults = a, o.toArray = s, o.last = d, o.isTag = c, o.isScript = p, o.isStyle = _
    }])
}),
function(e, o) {
    e.gdpr_lightbox = function(e, o) {
        "use strict";

        function t(e) {
            var o = I();
            return U && e.length ? (e.one(U, o.resolve), setTimeout(o.resolve, 500)) : o.resolve(), o.promise()
        }

        function r(e, t, r) {
            if (1 === arguments.length) return o.extend({}, e);
            if ("string" == typeof t) {
                if (void 0 === r) return void 0 === e[t] ? null : e[t];
                e[t] = r
            } else o.extend(e, t);
            return this
        }

        function n(e) {
            for (var o, t = decodeURI(e.split("#")[0]).split("&"), r = {}, n = 0, i = t.length; n < i; n++) t[n] && (o = t[n].split("="), r[o[0]] = o[1]);
            return r
        }

        function i(e, t) {
            return e + (e.indexOf("?") > -1 ? "&" : "?") + o.param(t)
        }

        function a(e, o) {
            var t = e.indexOf("#");
            return -1 === t ? o : (t > 0 && (e = e.substr(t)), o + e)
        }

        function s(e) {
            return o('<span class="gdpr_lightbox-error"></span>').append(e)
        }

        function d(e, t) {
            var r = t.opener() && t.opener().data("gdpr_lightbox-desc") || "Image with no description",
                n = o('<img src="' + e + '" alt="' + r + '"/>'),
                i = I(),
                a = function() {
                    i.reject(s("Failed loading image"))
                };
            return n.on("load", function() {
                if (0 === this.naturalWidth) return a();
                i.resolve(n)
            }).on("error", a), i.promise()
        }

        function c(e, t) {
            var r, n, i;
            try {
                r = o(e)
            } catch (e) {
                return !1
            }
            return !!r.length && (n = o('<i style="display:none !important"></i>'), i = r.hasClass("gdpr_lightbox-hide"), t.element().one("gdpr_lightbox:remove", function() {
                n.before(r).remove(), i && !r.closest(".gdpr_lightbox-content").length && r.addClass("gdpr_lightbox-hide")
            }), r.removeClass("gdpr_lightbox-hide").after(n))
        }

        function p(e) {
            var t = P.exec(e);
            return !!t && f(a(e, i("https://www.youtube" + (t[2] || "") + ".com/embed/" + t[4], o.extend({
                autoplay: 1
            }, n(t[5] || "")))))
        }

        function _(e) {
            var t = R.exec(e);
            return !!t && f(a(e, i("https://player.vimeo.com/video/" + t[3], o.extend({
                autoplay: 1
            }, n(t[4] || "")))))
        }

        function l(e) {
            var t = F.exec(e);
            return !!t && (0 !== e.indexOf("http") && (e = "https:" + e), f(a(e, i("https://www.facebook.com/plugins/video.php?href=" + e, o.extend({
                autoplay: 1
            }, n(t[4] || ""))))))
        }

        function g(e) {
            var o = M.exec(e);
            return !!o && f(a(e, i("https://www.google." + o[3] + "/maps?" + o[6], {
                output: o[6].indexOf("layer=c") > 0 ? "svembed" : "embed"
            })))
        }

        function f(e) {
            return '<div class="gdpr_lightbox-iframe-container"><iframe frameborder="0" allowfullscreen allow="autoplay; fullscreen" src="' + e + '"/></div>'
        }

        function u() {
            return C.documentElement.clientHeight ? C.documentElement.clientHeight : Math.round(S.height())
        }

        function v(e) {
            var o = k();
            o && (27 === e.keyCode && o.options("esc") && o.close(), 9 === e.keyCode && m(e, o))
        }

        function m(e, o) {
            var t = o.element().find(E),
                r = t.index(C.activeElement);
            e.shiftKey && r <= 0 ? (t.get(t.length - 1), e.preventDefault()) : e.shiftKey || r !== t.length - 1 || (t.get(0), e.preventDefault())
        }

        function h() {
            o.each(O, function(e, o) {
                o.resize()
            })
        }

        function b(e) {
            1 === O.unshift(e) && (N.addClass("gdpr_lightbox-active"), S.on({
                resize: h,
                keydown: v
            })), o("body > *").not(e.element()).addClass("gdpr_lightbox-hidden").each(function() {
                var e = o(this);
                void 0 === e.data(D) && e.data(D, e.attr(j) || null)
            }).attr(j, "true")
        }

        function y(e) {
            var t;
            e.element().attr(j, "true"), 1 === O.length && (N.removeClass("gdpr_lightbox-active"), S.off({
                resize: h,
                keydown: v
            })), O = o.grep(O, function(o) {
                return e !== o
            }), t = O.length ? O[0].element() : o(".gdpr_lightbox-hidden"), t.removeClass("gdpr_lightbox-hidden").each(function() {
                var e = o(this),
                    t = e.data(D);
                t ? e.attr(j, t) : e.removeAttr(j), e.removeData(D)
            })
        }

        function k() {
            return 0 === O.length ? null : O[0]
        }

        function w(e, t, r, n) {
            var i, a = "inline",
                s = o.extend({}, r);
            return n && s[n] ? (i = s[n](e, t), a = n) : (o.each(["inline", "iframe"], function(e, o) {
                delete s[o], s[o] = r[o]
            }), o.each(s, function(o, r) {
                return !r || (!(!r.test || r.test(e, t)) || (i = r(e, t), !1 !== i ? (a = o, !1) : void 0))
            })), {
                handler: a,
                content: i || ""
            }
        }

        function x(e, n, i, a) {
            function s(e) {
                p = o(e).css("max-height", u() + "px"), c.find(".gdpr_lightbox-loader").each(function() {
                    var e = o(this);
                    t(e).always(function() {
                        e.remove()
                    })
                }), c.removeClass("gdpr_lightbox-loading").find(".gdpr_lightbox-content").empty().append(p), l = !0, p.trigger("gdpr_lightbox:ready", [_])
            }
            var d, c, p, _ = this,
                l = !1,
                g = !1;
            n = o.extend({}, A, n), c = o(n.template), _.element = function() {
                return c
            }, _.opener = function() {
                return i
            }, _.options = o.proxy(r, _, n), _.handlers = o.proxy(r, _, n.handlers), _.resize = function() {
                l && !g && p.css("max-height", u() + "px").trigger("gdpr_lightbox:resize", [_])
            }, _.close = function() {
                if (l && !g) {
                    g = !0, y(_);
                    var e = I();
                    return a && (C.activeElement === c[0] || o.contains(c[0], C.activeElement)), p.trigger("gdpr_lightbox:close", [_]), c.removeClass("gdpr_lightbox-opened").addClass("gdpr_lightbox-closed"), t(p.add(c)).always(function() {
                        p.trigger("gdpr_lightbox:remove", [_]), c.remove(), c = void 0, e.resolve()
                    }), e.promise()
                }
            }, d = w(e, _, n.handlers, n.handler), c.attr(j, "false").addClass("gdpr_lightbox-loading gdpr_lightbox-opened gdpr_lightbox-" + d.handler).appendTo("body").on("click", "[data-gdpr_lightbox-close]", function(e) {
                o(e.target).is("[data-gdpr_lightbox-close]") && _.close()
            }).trigger("gdpr_lightbox:open", [_]), b(_), o.when(d.content).always(s)
        }

        function T(e, t, r) {
            e.preventDefault ? (e.preventDefault(), r = o(this), e = r.data("gdpr_lightbox-target") || r.attr("href") || r.attr("src")) : r = o(r);
            var n = new x(e, o.extend({}, r.data("gdpr_lightbox-options") || r.data("gdpr_lightbox"), t), r, C.activeElement);
            if (!e.preventDefault) return n
        }
        var C = e.document,
            S = o(e),
            I = o.Deferred,
            N = o("html"),
            O = [],
            j = "aria-hidden",
            D = "gdpr_lightbox-" + j,
            E = 'a[href],area[href],input:not([disabled]),select:not([disabled]),textarea:not([disabled]),button:not([disabled]),iframe,object,embed,[contenteditable],[tabindex]:not([tabindex^="-"])',
            A = {
                esc: !0,
                handler: null,
                handlers: {
                    image: d,
                    inline: c,
                    youtube: p,
                    vimeo: _,
                    googlemaps: g,
                    facebookvideo: l,
                    iframe: f
                },
                template: '<div class="gdpr_lightbox" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"><div class="gdpr_lightbox-wrap" data-gdpr_lightbox-close role="document"><div class="gdpr_lightbox-loader" aria-hidden="true">Loading...</div><div class="gdpr_lightbox-container"><div class="gdpr_lightbox-content"></div><button class="gdpr_lightbox-close" type="button" aria-label="Close (Press escape to close)" data-gdpr_lightbox-close>&times;</button></div></div></div>'
            },
            J = /(^data:image\/)|(\.(png|jpe?g|gif|svg|webp|bmp|ico|tiff?)(\?\S*)?$)/i,
            P = /(youtube(-nocookie)?\.com|youtu\.be)\/(watch\?v=|v\/|u\/|embed\/?)?([\w-]{11})(.*)?/i,
            R = /(vimeo(pro)?.com)\/(?:[^\d]+)?(\d+)\??(.*)?$/,
            M = /((maps|www)\.)?google\.([^\/\?]+)\/?((maps\/?)?\?)(.*)/i,
            F = /(facebook\.com)\/([a-z0-9_-]*)\/videos\/([0-9]*)(.*)?$/i,
            U = function() {
                var e = C.createElement("div"),
                    o = {
                        WebkitTransition: "webkitTransitionEnd",
                        MozTransition: "transitionend",
                        OTransition: "oTransitionEnd otransitionend",
                        transition: "transitionend"
                    };
                for (var t in o)
                    if (void 0 !== e.style[t]) return o[t];
                return !1
            }();
        return d.test = function(e) {
            return J.test(e)
        }, T.options = o.proxy(r, T, A), T.handlers = o.proxy(r, T, A.handlers), T.current = k, o(C).on("click.gdpr_lightbox", "[data-gdpr_lightbox]", T), T
    }(e, e.jQuery || e.Zepto)
}("undefined" != typeof window ? window : this),
function(e) {
    var o = {
            common: {
                init: function() {
                    "use strict";

                    function o(e) {
                        var o;
                        try {
                            o = new URL(e)
                        } catch (e) {
                            return !1
                        }
                        return "http:" === o.protocol || "https:" === o.protocol
                    }

                    function t(e) {
                        try {
                            new URLSearchParams(window.location.search).has("gdpr_dbg") && console.warn(e)
                        } catch (e) {
                            console.warn(e)
                        }
                    }

                    function r() {
                        "true" === (void 0 !== moove_frontend_gdpr_scripts.ajax_cookie_removal ? moove_frontend_gdpr_scripts.ajax_cookie_removal : "false") && e.post(moove_frontend_gdpr_scripts.ajaxurl, {
                            action: "moove_gdpr_remove_php_cookies"
                        }, function(e) {
                            t("dbg - cookies removed")
                        })
                    }

                    function n() {
                        r();
                        var o = void 0 !== moove_frontend_gdpr_scripts.wp_lang ? moove_frontend_gdpr_scripts.wp_lang : "";
                        "true" === (void 0 !== moove_frontend_gdpr_scripts.ajax_cookie_removal ? moove_frontend_gdpr_scripts.ajax_cookie_removal : "false") ? e.post(moove_frontend_gdpr_scripts.ajaxurl, {
                            action: "moove_gdpr_get_scripts",
                            strict: 0,
                            thirdparty: 0,
                            advanced: 0,
                            wp_lang: o
                        }, function(e) {
                            var o = {};
                            o.strict = 1, o.thirdparty = 0, o.advanced = 0, h(), i("script_inject", o), _(o)
                        }): h()
                    }

                    function i(e, o) {
                        try {
                            jQuery().gdpr_cookie_compliance_analytics(e, o)
                        } catch (e) {}
                    }

                    function a(e) {
                        try {
                            jQuery().gdpr_cookie_compliance_consent_log(e)
                        } catch (e) {}
                    }

                    function s() {
                        var e = u("moove_gdpr_popup"),
                            o = {};
                        return o.strict = "0", o.thirdparty = "0", o.advanced = "0", e && (e = JSON.parse(e), o.strict = e.strict, o.thirdparty = e.thirdparty, o.advanced = e.advanced, _(o), i("script_inject", e)), void 0 !== moove_frontend_gdpr_scripts.ifbc ? ("strict" === moove_frontend_gdpr_scripts.ifbc && e && 1 === parseInt(e.strict) && d(), "thirdparty" === moove_frontend_gdpr_scripts.ifbc && e && 1 === parseInt(e.thirdparty) && d(), "advanced" === moove_frontend_gdpr_scripts.ifbc && e && 1 === parseInt(e.advanced) && d()) : "1" !== moove_frontend_gdpr_scripts.strict_init && d(), o
                    }

                    function d() {
                        e(document).find("iframe[data-gdpr-iframesrc]").each(function() {
                            e(this).attr("src", e(this).attr("data-gdpr-iframesrc"))
                        })
                    }

                    function c(e) {
                        f("moove_gdpr_popup", JSON.stringify({
                            strict: "1",
                            thirdparty: "1",
                            advanced: "1"
                        }), y), p("enabled-all"), i("accept_all", "")
                    }

                    function p(r) {
                        var n = !1;
                        try {
                            void 0 !== moove_frontend_gdpr_scripts.force_reload && "true" === moove_frontend_gdpr_scripts.force_reload && (n = !0)
                        } catch (e) {}
                        var a = s(),
                            d = moove_frontend_gdpr_scripts.enabled_default.third_party,
                            c = moove_frontend_gdpr_scripts.enabled_default.advanced;
                        if (document.cookie.indexOf("moove_gdpr_popup") >= 0 || 1 == d || 1 == c) {
                            var p = u("moove_gdpr_popup");
                            1 == d && (I.strict = 1, I.thirdparty = d), 1 == c && (I.strict = 1, I.advanced = c), I && (parseInt(a.strict) - parseInt(I.strict) < 0 && (n = !0), parseInt(a.thirdparty) - parseInt(I.thirdparty) < 0 && (n = !0), parseInt(a.advanced) - parseInt(I.advanced) < 0 && (n = !0))
                        }
                        if (n)
                            if (p = {
                                    strict: 0,
                                    thirdparty: 0,
                                    advanced: 0
                                }, i("script_inject", p), void 0 !== moove_frontend_gdpr_scripts.scripts_defined) setTimeout(function() {
                                location.reload(!0)
                            }, 800);
                            else {
                                var _ = e(document).find('script[src*="googletagmanager.com"]');
                                _.length > 0 && _.each(function() {
                                    var t = e(this).attr("src");
                                    if (t && o(t)) {
                                        var r = new URL(t),
                                            n = r.searchParams.get("id");
                                        n && (document.cookie = "woocommerce_" + n + "=true; expires=Thu, 31 Dec 1970 23:59:59 UTC; path=/", window["ga-disable-" + n] = !0), window.gtag && window.gtag("remove"), e(this).remove()
                                    }
                                });
                                var g = void 0 !== moove_frontend_gdpr_scripts.ajax_cookie_removal ? moove_frontend_gdpr_scripts.ajax_cookie_removal : "true";
                                if ("function" == typeof navigator.sendBeacon)
                                    if ("true" === g) {
                                        var f = new FormData;
                                        f.append("action", "moove_gdpr_remove_php_cookies"), navigator.sendBeacon(moove_frontend_gdpr_scripts.ajaxurl, f), location.reload(!0)
                                    } else location.reload(!0);
                                else "true" === g ? e.post(moove_frontend_gdpr_scripts.ajaxurl, {
                                    action: "moove_gdpr_remove_php_cookies"
                                }, function(e) {
                                    location.reload(!0)
                                }).fail(function() {
                                    location.reload(!0)
                                }) : location.reload(!0)
                            }
                        else {
                            var m = u("moove_gdpr_popup");
                            t("dbg - inject - 4"), v(m), l(), e("#moove_gdpr_save_popup_settings_button").show()
                        }
                    }

                    function _(o) {
                        o && (i("script_inject", o), 1 === parseInt(o.strict) ? e("#moove_gdpr_strict_cookies").is(":checked") || (e("#moove_gdpr_strict_cookies").prop("checked", !0).trigger("change"), e("#third_party_cookies fieldset, #third_party_cookies .gdpr-cc-form-fieldset").removeClass("fl-disabled"), e("#moove_gdpr_performance_cookies").prop("disabled", !1), e("#third_party_cookies .moove-gdpr-strict-secondary-warning-message").slideUp(), e("#advanced-cookies fieldset, #advanced-cookies .gdpr-cc-form-fieldset").removeClass("fl-disabled"), e("#advanced-cookies .moove-gdpr-strict-secondary-warning-message").slideUp(), e("#moove_gdpr_advanced_cookies").prop("disabled", !1)) : e("#moove_gdpr_strict_cookies").is(":checked") && (e("#moove_gdpr_strict_cookies").prop("checked", !0).trigger("change"), e("#third_party_cookies fieldset, #third_party_cookies .gdpr-cc-form-fieldset").addClass("fl-disabled").closest(".moove-gdpr-status-bar").removeClass("checkbox-selected"), e("#moove_gdpr_performance_cookies").prop("disabled", !0).prop("checked", !1), e("#advanced-cookies fieldset, #advanced-cookies .gdpr-cc-form-fieldset").addClass("fl-disabled").closest(".moove-gdpr-status-bar").removeClass("checkbox-selected"), e("#moove_gdpr_advanced_cookies").prop("disabled", !0).prop("checked", !1)), 1 === parseInt(o.thirdparty) ? e("#moove_gdpr_performance_cookies").is(":checked") || e("#moove_gdpr_performance_cookies").prop("checked", !0).trigger("change") : e("#moove_gdpr_performance_cookies").is(":checked") && e("#moove_gdpr_performance_cookies").prop("checked", !1).trigger("change"), 1 === parseInt(o.advanced) ? e("#moove_gdpr_advanced_cookies").is(":checked") || e("#moove_gdpr_advanced_cookies").prop("checked", !0).trigger("change") : e("#moove_gdpr_advanced_cookies").is(":checked") && e("#moove_gdpr_advanced_cookies").prop("checked", !1).trigger("change"), e('input[data-name="moove_gdpr_performance_cookies"]').prop("checked", e("#moove_gdpr_performance_cookies").is(":checked")), e('input[data-name="moove_gdpr_strict_cookies"]').prop("checked", e("#moove_gdpr_strict_cookies").is(":checked")), e('input[data-name="moove_gdpr_advanced_cookies"]').prop("checked", e("#moove_gdpr_advanced_cookies").is(":checked")))
                    }

                    function l() {
                        e("#moove_gdpr_cookie_info_bar").length > 0 && (e("#moove_gdpr_cookie_info_bar").addClass("moove-gdpr-info-bar-hidden"), e("body").removeClass("gdpr-infobar-visible"), e("#moove_gdpr_cookie_info_bar").hide())
                    }

                    function g() {
                        var o = !0;
                        if ("undefined" != typeof sessionStorage && 1 === parseInt(sessionStorage.getItem("gdpr_infobar_hidden")) && (o = !1), void 0 !== moove_frontend_gdpr_scripts.display_cookie_banner && o) {
                            if ("true" === moove_frontend_gdpr_scripts.display_cookie_banner) e("#moove_gdpr_cookie_info_bar").length > 0 && (e("#moove_gdpr_cookie_info_bar").removeClass("moove-gdpr-info-bar-hidden"), e("#moove_gdpr_save_popup_settings_button:not(.button-visible)").hide(), e("body").addClass("gdpr-infobar-visible"), e("#moove_gdpr_cookie_info_bar").show(), i("show_infobar", ""));
                            else if (e("#moove_gdpr_cookie_info_bar").length > 0) {
                                e("#moove_gdpr_cookie_info_bar").addClass("moove-gdpr-info-bar-hidden"), e("body").removeClass("gdpr-infobar-visible"), e("#moove_gdpr_cookie_info_bar").hide();
                                var r = {
                                    strict: 1,
                                    thirdparty: 1,
                                    advanced: 1
                                };
                                t("dbg - inject - 5"), v(JSON.stringify(r))
                            }
                        } else e("#moove_gdpr_cookie_info_bar").length > 0 && o && (e("#moove_gdpr_cookie_info_bar").removeClass("moove-gdpr-info-bar-hidden"), e("#moove_gdpr_save_popup_settings_button:not(.button-visible)").hide(), e("body").addClass("gdpr-infobar-visible"), e("#moove_gdpr_cookie_info_bar").show(), i("show_infobar", ""))
                    }

                    function f(e, o, r) {
                        var n;
                        if (r > 0) {
                            var i = new Date;
                            i.setTime(i.getTime() + 24 * r * 60 * 60 * 1e3), n = "; expires=" + i.toGMTString()
                        } else n = "";
                        try {
                            var s = "SameSite=Lax";
                            void 0 !== moove_frontend_gdpr_scripts.cookie_attributes && (s = moove_frontend_gdpr_scripts.cookie_attributes), void 0 !== moove_frontend_gdpr_scripts.gdpr_consent_version && (o = JSON.parse(o), o.version = moove_frontend_gdpr_scripts.gdpr_consent_version, o = JSON.stringify(o)), "moove_gdpr_popup" === e && 0 === parseInt(o.strict) ? void 0 !== moove_frontend_gdpr_scripts.gdpr_scor && "false" === moove_frontend_gdpr_scripts.gdpr_scor ? document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(o) + n + "; path=/; " + s : document.cookie = encodeURIComponent(e) + "=; Path=/;" : document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(o) + n + "; path=/; " + s, o !== E && (E = o, a(o))
                        } catch (e) {
                            t("error - moove_gdpr_create_cookie: " + e)
                        }
                    }

                    function u(e) {
                        for (var o = encodeURIComponent(e) + "=", t = document.cookie.split(";"), r = 0; r < t.length; r++) {
                            for (var n = t[r];
                                " " === n.charAt(0);) n = n.substring(1, n.length);
                            if (0 === n.indexOf(o)) {
                                var i = decodeURIComponent(n.substring(o.length, n.length)),
                                    a = JSON.parse(i);
                                if (void 0 !== a.version) {
                                    if (void 0 !== moove_frontend_gdpr_scripts.gdpr_consent_version) {
                                        var s = moove_frontend_gdpr_scripts.gdpr_consent_version;
                                        if (parseFloat(s) > parseFloat(a.version)) return document.cookie = e + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;", null
                                    }
                                } else if (void 0 !== moove_frontend_gdpr_scripts.gdpr_consent_version && parseFloat(moove_frontend_gdpr_scripts.gdpr_consent_version) > 1) return document.cookie = e + "=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;", null;
                                return i
                            }
                        }
                        return null
                    }

                    function v(o) {
                        if (I = s(), o) {
                            var t = o;
                            o = JSON.parse(o);
                            s();
                            if (!1 !== N) {
                                var r = JSON.parse(N);
                                1 === parseInt(r.thirdparty) && 1 === parseInt(o.thirdparty) && (o.thirdparty = "0"), 1 === parseInt(r.advanced) && 1 === parseInt(o.advanced) && (o.advanced = "0")
                            }
                            if (i("script_inject", o), O = !0, void 0 !== moove_frontend_gdpr_scripts.ifbc ? ("strict" === moove_frontend_gdpr_scripts.ifbc && o && 1 === parseInt(o.strict) && d(), "thirdparty" === moove_frontend_gdpr_scripts.ifbc && o && 1 === parseInt(o.thirdparty) && d(), "advanced" === moove_frontend_gdpr_scripts.ifbc && o && 1 === parseInt(o.advanced) && d()) : 1 === parseInt(o.strict) && d(), void 0 !== moove_frontend_gdpr_scripts.scripts_defined) try {
                                var a = JSON.parse(moove_frontend_gdpr_scripts.scripts_defined);
                                if (1 === parseInt(o.strict)) 1 === parseInt(o.thirdparty) && void 0 === k.thirdparty && (a.thirdparty.header && postscribe(document.head, a.thirdparty.header), a.thirdparty.body && e(a.thirdparty.body).prependTo(document.body), a.thirdparty.footer && postscribe(document.body, a.thirdparty.footer), k.thirdparty = !0), 1 === parseInt(o.advanced) && void 0 === k.advanced && (a.advanced.header && postscribe(document.head, a.advanced.header), a.advanced.body && e(a.advanced.body).prependTo(document.body), a.advanced.footer && postscribe(document.body, a.advanced.footer), k.advanced = !0);
                                else {
                                    var o = u("moove_gdpr_popup");
                                    o && (h(), n())
                                }
                            } catch (e) {
                                console.error(e)
                            } else if (void 0 === k.thirdparty || void 0 === k.advanced) {
                                1 === o.thirdparty && (k.thirdparty = !0), 1 === o.advanced && (k.advanced = !0);
                                var c = void 0 !== moove_frontend_gdpr_scripts.wp_lang ? moove_frontend_gdpr_scripts.wp_lang : "";
                                0 === parseInt(o.thirdparty) && 0 === parseInt(o.advanced) && h(), e.post(moove_frontend_gdpr_scripts.ajaxurl, {
                                    action: "moove_gdpr_get_scripts",
                                    strict: o.strict,
                                    thirdparty: o.thirdparty,
                                    advanced: o.advanced,
                                    wp_lang: c
                                }, function(r) {
                                    N = t, i("script_inject", o);
                                    var n = JSON.parse(r);
                                    n.header && postscribe(document.head, n.header), n.body && e(n.body).prependTo(document.body), n.footer && postscribe(document.body, n.footer)
                                })
                            }
                        } else g()
                    }

                    function m() {
                        var o = !0;
                        e(document).find("#moove_gdpr_cookie_modal input[type=checkbox]").each(function() {
                            e(this).is(":checked") || (o = !1)
                        })
                    }

                    function h(o) {
                        try {
                            e(document).find("script[data-gdpr]").each(function() {
                                t("script_removed: " + e(this).attr("src"))
                            });
                            for (var r = document.cookie.split(";"), n = window.location.hostname, i = 0; i < r.length; i++) {
                                var a = r[i],
                                    s = a.indexOf("="),
                                    d = s > -1 ? a.substr(0, s) : a;
                                d.includes("woocommerce") || d.includes("wc_") || d.includes("moove_gdpr_popup") || d.includes("wordpress") || (document.cookie = d + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;domain=" + n, document.cookie = d + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;domain=." + n, t("cookie removed: " + d + " - " + n))
                            }
                        } catch (e) {
                            t("error in gdpr_delete_all_cookies: " + e)
                        }
                        "undefined" != typeof sessionStorage && sessionStorage.removeItem("gdpr_session")
                    }

                    function b() {
                        var o = u("moove_gdpr_popup");
                        h(), r();
                        var t = "0",
                            n = "0",
                            i = "0",
                            a = !1;
                        o && (o = JSON.parse(o), t = o.strict, n = o.advanced, i = o.thirdparty), e("#moove_gdpr_strict_cookies").length > 0 ? e("#moove_gdpr_strict_cookies").is(":checked") ? (t = "1", a = !0) : t = "0" : (a = !0, t = "1"), e("#moove_gdpr_performance_cookies").is(":checked") ? (i = "1", a = !0) : i = "0", e("#moove_gdpr_advanced_cookies").is(":checked") ? (n = "1", a = !0) : n = "0", !o && a ? (f("moove_gdpr_popup", JSON.stringify({
                            strict: t,
                            thirdparty: i,
                            advanced: n
                        }), y), l(), e("#moove_gdpr_save_popup_settings_button").show()) : o && f("moove_gdpr_popup", JSON.stringify({
                            strict: t,
                            thirdparty: i,
                            advanced: n
                        }), y);
                        var o = u("moove_gdpr_popup");
                        o && (o = JSON.parse(o), "0" == o.strict && "0" == o.advanced && "0" == o.thirdparty && h())
                    }
                    var y = 365,
                        k = [];
                    void 0 !== moove_frontend_gdpr_scripts.cookie_expiration && (y = moove_frontend_gdpr_scripts.cookie_expiration), e(document).on("click", "#moove_gdpr_cookie_modal .moove-gdpr-modal-content.moove_gdpr_modal_theme_v1 .main-modal-content .moove-gdpr-tab-main:not(#privacy_overview) .tab-title", function(o) {
                        window.innerWidth < 768 && (e(this).closest(".moove-gdpr-tab-main").find(".moove-gdpr-tab-main-content").is(":visible") ? e(this).closest(".moove-gdpr-tab-main").find(".moove-gdpr-tab-main-content").slideUp(300) : e(this).closest(".moove-gdpr-tab-main").find(".moove-gdpr-tab-main-content").slideDown(300))
                    }), e(document).on("click tap", '#moove_gdpr_cookie_info_bar .moove-gdpr-infobar-reject-btn, [href*="#gdpr-reject-cookies"], .moove-gdpr-modal-reject-all', function(o) {
                        o.preventDefault(), h(), n(), e("#moove_gdpr_cookie_info_bar").length > 0 && (e("#moove_gdpr_cookie_info_bar").addClass("moove-gdpr-info-bar-hidden"), e("body").removeClass("gdpr-infobar-visible"), e("#moove_gdpr_cookie_info_bar").hide(), e("#moove_gdpr_save_popup_settings_button").show()), e(".gdpr_lightbox .gdpr_lightbox-close").trigger("click"), e(document).moove_gdpr_lightbox_close(), void 0 !== moove_frontend_gdpr_scripts.gdpr_scor && "false" === moove_frontend_gdpr_scripts.gdpr_scor || (f("moove_gdpr_popup", JSON.stringify({
                            strict: "1",
                            thirdparty: "0",
                            advanced: "0"
                        }), y), setTimeout(function() {
                            f("moove_gdpr_popup", JSON.stringify({
                                strict: "1",
                                thirdparty: "0",
                                advanced: "0"
                            }), y)
                        }, 500)), p("reject-btn")
                    });
                    var w = !1,
                        x = e(".moove_gdpr_modal_theme_v2 .moove-gdpr-tab-main").first(),
                        T = e(".moove_gdpr_modal_theme_v2 .moove-gdpr-tab-main").first(),
                        C = 0,
                        S = !1;
                    e(document).on("keydown", function(o) {
                        if (e("body").hasClass("moove_gdpr_overflow") && e(".moove-gdpr-modal-content").hasClass("moove_gdpr_modal_theme_v1")) {
                            if (38 == o.keyCode) {
                                o.preventDefault();
                                var t = e("#moove-gdpr-menu li.menu-item-selected"),
                                    r = t.prev();
                                0 === r.length && (r = e("#moove-gdpr-menu li").last()), r.find(".moove-gdpr-tab-nav:visible").trigger("click"), e(".moove-gdpr-tab-main:visible").trigger("focus")
                            }
                            if (40 == o.keyCode)
                                if (o.preventDefault(), S) {
                                    var t = e("#moove-gdpr-menu li.menu-item-selected"),
                                        r = t.prev();
                                    0 === r.length && (r = e("#moove-gdpr-menu li").last()), r.find(".moove-gdpr-tab-nav:visible").trigger("click"), e(".moove-gdpr-tab-main:visible").trigger("focus")
                                } else {
                                    var t = e("#moove-gdpr-menu li.menu-item-selected"),
                                        n = t.next();
                                    0 === n.length && (n = e("#moove-gdpr-menu li").first()), n.find(".moove-gdpr-tab-nav:visible").trigger("click"), e(".moove-gdpr-tab-main:visible").trigger("focus")
                                }
                            if (9 == o.keyCode) {
                                o.preventDefault();
                                var i = e("#moove_gdpr_cookie_modal .mgbutton, #moove_gdpr_cookie_modal .moove-gdpr-modal-close, #moove_gdpr_cookie_modal #moove-gdpr-menu > li");
                                if (i.length > 0) {
                                    var a = !1;
                                    if (C <= i.length ? (S ? C-- : C++, a = i[C], e(a).is(":visible") || (S ? C-- : C++, a = i[C])) : (C = 0, a = i[C]), e("#moove_gdpr_cookie_modal .focus-g").removeClass("focus-g"), C < 0 && S && (C = i.length), !a && C > i.length && (C = 0, a = i[C]), e(a).addClass("focus-g").trigger("focus"), (e(a).hasClass("menu-item-on") || e(a).hasClass("menu-item-off")) && e(a).find("button").trigger("click"), e(a).length > 0) try {
                                        e(a)[0].scrollIntoViewIfNeeded()
                                    } catch (e) {
                                        console.warn(e)
                                    }
                                } else {
                                    e(".cookie-switch").removeClass("focus-g");
                                    var n = x.next();
                                    if (x = n, 0 === n.length && (n = T, x = T), n.find(".cookie-switch").trigger("focus").addClass("focus-g"), n.find(".cookie-switch").length > 0) try {
                                        n.find(".cookie-switch")[0].scrollIntoViewIfNeeded()
                                    } catch (e) {
                                        console.warn(e)
                                    }
                                }
                            }
                            if (32 == o.keyCode) {
                                o.preventDefault();
                                e(".moove-gdpr-tab-main:visible").find(".moove-gdpr-status-bar input[type=checkbox]").trigger("click")
                            }
                            13 == o.keyCode && (o.preventDefault(), e(document).find(".focus-g").length > 0 ? e(document).find(".focus-g").trigger("click") : e(".moove-gdpr-modal-save-settings").trigger("click"))
                        }
                        if (e("body").hasClass("moove_gdpr_overflow") && e(".moove-gdpr-modal-content").hasClass("moove_gdpr_modal_theme_v2")) {
                            if (38 == o.keyCode) {
                                o.preventDefault();
                                var t = e("#moove-gdpr-menu li.menu-item-selected"),
                                    r = t.prev();
                                0 === r.length && (r = e("#moove-gdpr-menu li").last()), r.find(".moove-gdpr-tab-nav:visible").trigger("click"), e(".moove-gdpr-tab-main:visible").trigger("focus")
                            }
                            if (40 == o.keyCode) {
                                o.preventDefault();
                                var t = e("#moove-gdpr-menu li.menu-item-selected"),
                                    n = t.next();
                                0 === n.length && (n = e("#moove-gdpr-menu li").first()), n.find(".moove-gdpr-tab-nav:visible").trigger("click"), e(".moove-gdpr-tab-main:visible").trigger("focus")
                            }
                            if (32 == o.keyCode) {
                                o.preventDefault();
                                e("#moove_gdpr_cookie_modal").find(".focus-g").trigger("click")
                            }
                            if (9 == o.keyCode) {
                                o.preventDefault();
                                var i = e("#moove_gdpr_cookie_modal .cookie-switch, #moove_gdpr_cookie_modal .mgbutton, #moove_gdpr_cookie_modal a:not(.moove-gdpr-branding), #moove_gdpr_cookie_modal .moove-gdpr-modal-close");
                                if (i.length > 0) {
                                    var a = !1;
                                    if (C <= i.length ? (S ? C-- : C++, a = i[C], e(a).is(":visible") || (S ? C-- : C++, a = i[C])) : (C = 0, a = i[C]), e("#moove_gdpr_cookie_modal .focus-g").removeClass("focus-g"), C < 0 && S && (C = i.length), !a && C > i.length && (C = 0, a = i[C]), e(a).addClass("focus-g").trigger("focus"), e(a).length > 0) try {
                                        e(a)[0].scrollIntoViewIfNeeded()
                                    } catch (e) {
                                        console.warn(e)
                                    }
                                } else {
                                    e(".cookie-switch").removeClass("focus-g");
                                    var n = x.next();
                                    if (x = n, 0 === n.length && (n = T, x = T), n.find(".cookie-switch").trigger("focus").addClass("focus-g"), n.find(".cookie-switch").length > 0) try {
                                        n.find(".cookie-switch")[0].scrollIntoViewIfNeeded()
                                    } catch (e) {
                                        console.warn(e)
                                    }
                                }
                            }
                            13 == o.keyCode && (e("#moove_gdpr_cookie_modal .focus-g").length > 0 && (e("#moove_gdpr_cookie_modal .focus-g").hasClass("mgbutton") || e("#moove_gdpr_cookie_modal .focus-g").hasClass("moove-gdpr-modal-close") || e("#moove_gdpr_cookie_modal .focus-g").attr("href")) ? e("#moove_gdpr_cookie_modal .focus-g").attr("href") ? e("#moove_gdpr_cookie_modal .focus-g").trigger("click") : (o.preventDefault(), e("#moove_gdpr_cookie_modal .focus-g").trigger("click")) : (o.preventDefault(), e(".moove-gdpr-modal-save-settings").trigger("click")))
                        }
                    }), e(document).on("keyup", function(e) {
                        16 == e.keyCode && (S = !1), 17 != e.keyCode && 18 != e.keyCode && 13 != e.keyCode || (S = !1)
                    }), document.addEventListener("visibilitychange", function(e) {
                        S = !1
                    }), e(document).on("keydown", function(o) {
                        if (16 == o.keyCode && (S = !0), e("body").hasClass("gdpr-infobar-visible") && !e("body").hasClass("moove_gdpr_overflow") && e("#moove_gdpr_cookie_info_bar").hasClass("gdpr-full-screen-infobar")) {
                            if (9 == o.keyCode) {
                                o.preventDefault(), console.warn("fsw-tab");
                                var t = e('#moove_gdpr_cookie_info_bar.gdpr-full-screen-infobar span.change-settings-button, #moove_gdpr_cookie_info_bar.gdpr-full-screen-infobar button.change-settings-button, #moove_gdpr_cookie_info_bar.gdpr-full-screen-infobar [data-target="third_party_cookies"] label, #moove_gdpr_cookie_info_bar.gdpr-full-screen-infobar [data-target="advanced-cookies"] label, #moove_gdpr_cookie_info_bar.gdpr-full-screen-infobar .mgbutton');
                                if (t.length > 0) {
                                    var r = !1;
                                    if (C <= t.length ? (S ? C-- : C++, r = t[C], e(r).is(":visible") || (S ? C-- : C++, r = t[C])) : (C = 0, r = t[C]), e("#moove_gdpr_cookie_info_bar .focus-g").removeClass("focus-g"), C < 0 && S && (C = t.length), !r && C > t.length && (C = 0, r = t[C]), e(document).find("*").blur(), e(r).addClass("focus-g").trigger("focus"), e(r).length > 0) try {
                                        e(r)[0].scrollIntoViewIfNeeded()
                                    } catch (e) {
                                        console.warn(e)
                                    }
                                } else {
                                    e(".cookie-switch").removeClass("focus-g");
                                    var n = x.next();
                                    if (x = n, 0 === n.length && (n = T, x = T), n.find(".cookie-switch").trigger("focus").addClass("focus-g"), n.find(".cookie-switch").length > 0) try {
                                        n.find(".cookie-switch")[0].scrollIntoViewIfNeeded()
                                    } catch (e) {
                                        console.warn(e)
                                    }
                                }
                            }
                            if (32 == o.keyCode) {
                                o.preventDefault();
                                var i = e("#moove_gdpr_cookie_info_bar").find(".gdpr-shr-switch.focus-g input[type=checkbox]");
                                console.warn("space"), i.trigger("click")
                            }
                        }
                        13 == o.keyCode && e(document.activeElement).length > 0 && e(document.activeElement).closest("#moove_gdpr_cookie_info_bar").length > 0 && (o.preventDefault(), e(document.activeElement).trigger("click"))
                    }), e.fn.moove_gdpr_read_cookies = function(e) {
                        var o = u("moove_gdpr_popup"),
                            t = {};
                        return t.strict = "0", t.thirdparty = "0", t.advanced = "0", o && (o = JSON.parse(o), t.strict = parseInt(o.strict), t.thirdparty = parseInt(o.thirdparty), t.advanced = parseInt(o.advanced)), t
                    };
                    var I = s(),
                        N = !1,
                        O = !1,
                        j = "",
                        D = !1,
                        E = "";
                    e(document).on("click tap", "#moove_gdpr_cookie_info_bar .moove-gdpr-infobar-close-btn", function(o) {
                            if (o.preventDefault(), void 0 !== moove_frontend_gdpr_scripts.close_btn_action) {
                                var t = parseInt(moove_frontend_gdpr_scripts.close_btn_action);
                                1 === t && (l(), e("#moove_gdpr_save_popup_settings_button").show(), "undefined" != typeof sessionStorage && sessionStorage.setItem("gdpr_infobar_hidden", 1)), 2 === t && (h(), n(), e("#moove_gdpr_cookie_info_bar").length > 0 && (e("#moove_gdpr_cookie_info_bar").addClass("moove-gdpr-info-bar-hidden"), e("body").removeClass("gdpr-infobar-visible"), e("#moove_gdpr_cookie_info_bar").hide(), e("#moove_gdpr_save_popup_settings_button").show()), e(".gdpr_lightbox .gdpr_lightbox-close").trigger("click"), e(document).moove_gdpr_lightbox_close(), void 0 !== moove_frontend_gdpr_scripts.gdpr_scor && "false" === moove_frontend_gdpr_scripts.gdpr_scor || (f("moove_gdpr_popup", JSON.stringify({
                                    strict: "1",
                                    thirdparty: "0",
                                    advanced: "0"
                                }), y), setTimeout(function() {
                                    f("moove_gdpr_popup", JSON.stringify({
                                        strict: "1",
                                        thirdparty: "0",
                                        advanced: "0"
                                    }), y)
                                }, 500)), p("reject-btn")), 3 === t && c("enable_all close-btn"), 4 === t && (h(), n(), e("#moove_gdpr_cookie_info_bar").length > 0 && (e("#moove_gdpr_cookie_info_bar").addClass("moove-gdpr-info-bar-hidden"), e("body").removeClass("gdpr-infobar-visible"), e("#moove_gdpr_cookie_info_bar").hide(), e("#moove_gdpr_save_popup_settings_button").show()), e(".gdpr_lightbox .gdpr_lightbox-close").trigger("click"), e(document).moove_gdpr_lightbox_close(), void 0 !== moove_frontend_gdpr_scripts.gdpr_scor && "false" === moove_frontend_gdpr_scripts.gdpr_scor || (f("moove_gdpr_popup", JSON.stringify({
                                    strict: "1",
                                    thirdparty: "0",
                                    advanced: "0"
                                }), y), setTimeout(function() {
                                    f("moove_gdpr_popup", JSON.stringify({
                                        strict: "1",
                                        thirdparty: "0",
                                        advanced: "0"
                                    }), y)
                                }, 500)), void 0 !== moove_frontend_gdpr_scripts.close_btn_rdr && "" !== moove_frontend_gdpr_scripts.close_btn_rdr ? window.parent.location.href = moove_frontend_gdpr_scripts.close_btn_rdr : p("reject-btn"))
                            } else l(), e("#moove_gdpr_save_popup_settings_button").show(), "undefined" != typeof sessionStorage && sessionStorage.setItem("gdpr_infobar_hidden", 1)
                        }), e.fn.moove_gdpr_save_cookie = function(o) {
                            var t = u("moove_gdpr_popup"),
                                r = t,
                                a = e(window).scrollTop();
                            if (!t) {
                                if (o.thirdParty) var s = "1";
                                else var s = "0";
                                if (o.advanced) var c = "1";
                                else var c = "0";
                                if (o.scrollEnable) {
                                    var p = o.scrollEnable;
                                    e(window).scroll(function() {
                                        !O && e(this).scrollTop() - a > p && ("undefined" === o.thirdparty && "undefined" === o.advanced || (f("moove_gdpr_popup", JSON.stringify({
                                            strict: "1",
                                            thirdparty: s,
                                            advanced: c
                                        }), y), t = JSON.parse(t), _(t)))
                                    })
                                } else "undefined" === o.thirdparty && "undefined" === o.advanced || (f("moove_gdpr_popup", JSON.stringify({
                                    strict: "1",
                                    thirdparty: s,
                                    advanced: c
                                }), y), t = JSON.parse(t), _(t));
                                if (t = u("moove_gdpr_popup"))
                                    if (t = JSON.parse(t), i("script_inject", t), O = !0, void 0 !== moove_frontend_gdpr_scripts.ifbc ? ("strict" === moove_frontend_gdpr_scripts.ifbc && t && 1 === parseInt(t.strict) && d(), "thirdparty" === moove_frontend_gdpr_scripts.ifbc && t && 1 === parseInt(t.thirdparty) && d(), "advanced" === moove_frontend_gdpr_scripts.ifbc && t && 1 === parseInt(t.advanced) && d()) : 1 === parseInt(t.strict) && d(), void 0 !== moove_frontend_gdpr_scripts.scripts_defined) try {
                                        var l = JSON.parse(moove_frontend_gdpr_scripts.scripts_defined);
                                        if (1 === parseInt(t.strict)) 1 === parseInt(t.thirdparty) && void 0 === k.thirdparty && (l.thirdparty.header && postscribe(document.head, l.thirdparty.header), l.thirdparty.body && e(l.thirdparty.body).prependTo(document.body), l.thirdparty.footer && postscribe(document.body, l.thirdparty.footer), k.thirdparty = !0), 1 === parseInt(t.advanced) && void 0 === k.advanced && (l.advanced.header && postscribe(document.head, l.advanced.header), l.advanced.body && e(l.advanced.body).prependTo(document.body), l.advanced.footer && postscribe(document.body, l.advanced.footer), k.advanced = !0);
                                        else {
                                            var t = u("moove_gdpr_popup");
                                            t && (h(), n())
                                        }
                                    } catch (e) {
                                        console.error(e)
                                    } else if (void 0 === k.thirdparty || void 0 === k.advanced) {
                                        1 === t.thirdparty && (k.thirdparty = !0), 1 === t.advanced && (k.advanced = !0);
                                        var g = void 0 !== moove_frontend_gdpr_scripts.wp_lang ? moove_frontend_gdpr_scripts.wp_lang : "";
                                        0 === parseInt(t.thirdparty) && 0 === parseInt(t.advanced) && h(), e.post(moove_frontend_gdpr_scripts.ajaxurl, {
                                            action: "moove_gdpr_get_scripts",
                                            strict: t.strict,
                                            thirdparty: t.thirdparty,
                                            advanced: t.advanced,
                                            wp_lang: g
                                        }, function(o) {
                                            N = r, i("script_inject", t);
                                            var n = JSON.parse(o);
                                            n.header && postscribe(document.head, n.header), n.body && e(n.body).prependTo(document.body), n.footer && postscribe(document.body, n.footer)
                                        })
                                    }
                            }
                        },
                        function() {
                            var o = (location.pathname, e(window).scrollTop());
                            e("#moove_gdpr_save_popup_settings_button").show();
                            var r = moove_frontend_gdpr_scripts.enabled_default.third_party,
                                n = moove_frontend_gdpr_scripts.enabled_default.advanced;
                            if (void 0 !== moove_frontend_gdpr_scripts.enable_on_scroll && "true" === moove_frontend_gdpr_scripts.enable_on_scroll && 1 !== parseInt(r) && 1 !== parseInt(n) && (r = 1, n = 1), document.cookie.indexOf("moove_gdpr_popup") >= 0 || 1 == r || 1 == n) {
                                var i = u("moove_gdpr_popup");
                                if (i) {
                                    var a = s();
                                    "0" == a.strict && "0" == a.advanced && "0" == a.thirdparty && (h(), g())
                                } else {
                                    var d = !1;
                                    if ("undefined" != typeof sessionStorage && (d = sessionStorage.getItem("gdpr_session")), void 0 !== moove_frontend_gdpr_scripts.enable_on_scroll && "true" === moove_frontend_gdpr_scripts.enable_on_scroll) {
                                        if (d) try {
                                            _(JSON.parse(d)), O = !0, t("dbg - inject - 1"), v(d), f("moove_gdpr_popup", d, y), l()
                                        } catch (e) {} else if ((!O && 1 == moove_frontend_gdpr_scripts.enabled_default.third_party || !O && 1 == moove_frontend_gdpr_scripts.enabled_default.advanced) && (i = {
                                                strict: 1,
                                                thirdparty: r,
                                                advanced: n
                                            }, _(i), i = JSON.stringify(i), w = !0, g(), t("dbg - default scroll inject")), void 0 !== moove_frontend_gdpr_scripts.gdpr_aos_hide && ("1" === moove_frontend_gdpr_scripts.gdpr_aos_hide || "true" === moove_frontend_gdpr_scripts.gdpr_aos_hide || "object" == typeof moove_frontend_gdpr_scripts.gdpr_aos_hide && moove_frontend_gdpr_scripts.gdpr_aos_hide.includes("1")) && (t("dbg - enable on scroll - enter"), e(window).scroll(function() {
                                                if ((!O || w) && e(this).scrollTop() - o > 200) {
                                                    i = {
                                                        strict: 1,
                                                        thirdparty: r,
                                                        advanced: n
                                                    }, u("moove_gdpr_popup") || "undefined" != typeof sessionStorage && ((d = sessionStorage.getItem("gdpr_session")) || (sessionStorage.setItem("gdpr_session", JSON.stringify(i)), d = sessionStorage.getItem("gdpr_session")));
                                                    try {
                                                        _(i), i = JSON.stringify(i), g(), O = !0, t("dbg - inject - 2 - accept on scroll"), w || v(i), w = !1, f("moove_gdpr_popup", i, y), l(), p("check reload on scroll"), e("#moove_gdpr_save_popup_settings_button").show()
                                                    } catch (e) {}
                                                }
                                            })), void 0 !== moove_frontend_gdpr_scripts.gdpr_aos_hide && ("2" === moove_frontend_gdpr_scripts.gdpr_aos_hide || "object" == typeof moove_frontend_gdpr_scripts.gdpr_aos_hide && moove_frontend_gdpr_scripts.gdpr_aos_hide.includes("2"))) {
                                            var c = 30;
                                            if (void 0 !== moove_frontend_gdpr_scripts.gdpr_aos_hide_seconds) var c = parseInt(moove_frontend_gdpr_scripts.gdpr_aos_hide_seconds);
                                            t("dbg - hidetimer - enter, seconds: " + c), setTimeout(function() {
                                                if (t("dbg - hidetimer - is_created: " + O), !O) {
                                                    i = {
                                                        strict: 1,
                                                        thirdparty: r,
                                                        advanced: n
                                                    };
                                                    var o = u("moove_gdpr_popup");
                                                    t("dbg - hidetimer - cookies_stored: " + o), o || "undefined" != typeof sessionStorage && ((d = sessionStorage.getItem("gdpr_session")) || (sessionStorage.setItem("gdpr_session", JSON.stringify(i)), d = sessionStorage.getItem("gdpr_session")));
                                                    try {
                                                        _(i), i = JSON.stringify(i), g(), O = !0, t("dbg - inject - 2a"), v(i), f("moove_gdpr_popup", i, y), p("check reload hidetimer")
                                                    } catch (e) {}
                                                }
                                                l(), e("#moove_gdpr_save_popup_settings_button").show()
                                            }, 1e3 * c)
                                        }
                                    } else i = {
                                        strict: 1,
                                        thirdparty: r,
                                        advanced: n
                                    }, _(i), i = JSON.stringify(i), g()
                                }
                                t("dbg - inject - 3"), v(i)
                            } else g()
                        }(), e(document).on("click", '[data-href*="#moove_gdpr_cookie_modal"],[href*="#moove_gdpr_cookie_modal"]', function(o) {
                            o.preventDefault(), e("#moove_gdpr_cookie_modal").length > 0 && (D = !0, j = gdpr_lightbox("#moove_gdpr_cookie_modal"), e(".gdpr_lightbox").addClass("moove_gdpr_cookie_modal_open"), e(document).moove_gdpr_lightbox_open(), i("opened_modal_from_link", ""))
                        }), e(document).on("click", '[data-href*="#gdpr_cookie_modal"],[href*="#gdpr_cookie_modal"]', function(o) {
                            o.preventDefault(), e("#moove_gdpr_cookie_modal").length > 0 && (D = !0, j = gdpr_lightbox("#moove_gdpr_cookie_modal"), e(".gdpr_lightbox").addClass("moove_gdpr_cookie_modal_open"), e(document).moove_gdpr_lightbox_open(), i("opened_modal_from_link", ""))
                        }), e(document).on("click tap", "#moove_gdpr_cookie_info_bar .moove-gdpr-close-modal-button a, #moove_gdpr_cookie_info_bar .moove-gdpr-close-modal-button button", function(e) {
                            e.preventDefault()
                        }), e(document).on("click tap", ".moove-gdpr-modal-close", function(o) {
                            o.preventDefault(), e(".gdpr_lightbox .gdpr_lightbox-close").trigger("click"), e(document).moove_gdpr_lightbox_close()
                        }), e(document).on("click", "#moove-gdpr-menu .moove-gdpr-tab-nav", function(o) {
                            o.preventDefault(), o.stopPropagation(), e("#moove-gdpr-menu li").removeClass("menu-item-selected"), e(this).parent().addClass("menu-item-selected"), e(".moove-gdpr-tab-content .moove-gdpr-tab-main").hide(), e(e(this).attr("href")).show(), e(e(this).attr("data-href")).show(), i("clicked_to_tab", e(this).attr("data-href"))
                        }), e(document).on("gdpr_lightbox:close", function(o, t) {
                            e(document).moove_gdpr_lightbox_close()
                        }), e.fn.moove_gdpr_lightbox_close = function(o) {
                            D && (e("body").removeClass("moove_gdpr_overflow"), D = !1)
                        }, e.fn.moove_gdpr_lightbox_open = function(o) {
                            if (D) {
                                e("body").addClass("moove_gdpr_overflow");
                                var t = u("moove_gdpr_popup");
                                document.activeElement.blur(), "none" === moove_frontend_gdpr_scripts.show_icons && e("body").addClass("gdpr-no-icons"), e(".moove-gdpr-status-bar input[type=checkbox]").each(function() {
                                    e(this).is(":checked") ? e(this).closest(".moove-gdpr-tab-main").find(".moove-gdpr-strict-warning-message").slideUp() : e(this).closest(".moove-gdpr-tab-main").find(".moove-gdpr-strict-warning-message").slideDown()
                                }), t ? (t = JSON.parse(t), _(t)) : e("#moove_gdpr_strict_cookies").is(":checked") || (e("#advanced-cookies .gdpr-cc-form-fieldset").addClass("fl-disabled"), e("#third_party_cookies .gdpr-cc-form-fieldset").addClass("fl-disabled")), void 0 !== moove_frontend_gdpr_scripts.hide_save_btn && "true" === moove_frontend_gdpr_scripts.hide_save_btn ? e(".moove-gdpr-modal-save-settings").removeClass("button-visible").hide() : e(".moove-gdpr-modal-save-settings").addClass("button-visible").show(), m()
                            }
                        }, e(document).on("gdpr_lightbox:open", function(o, t) {
                            e(document).moove_gdpr_lightbox_open()
                        }), e(document).on("click tap", ".fl-disabled", function(o) {
                            e("#moove_gdpr_cookie_modal .moove-gdpr-modal-content").is(".moove_gdpr_modal_theme_v2") ? e("#moove_gdpr_strict_cookies").length > 0 && (e("#moove_gdpr_strict_cookies").trigger("click"), e(this).trigger("click")) : e(this).closest(".moove-gdpr-tab-main-content").find(".moove-gdpr-strict-secondary-warning-message").slideDown()
                        }), e(document).on("change", ".moove-gdpr-status-bar input[type=checkbox]", function(o) {
                            e(".moove-gdpr-modal-save-settings").addClass("button-visible").show();
                            var t = e(this).closest(".moove-gdpr-tab-main").attr("id");
                            e(this).closest(".moove-gdpr-status-bar").toggleClass("checkbox-selected"), e(this).closest(".moove-gdpr-tab-main").toggleClass("checkbox-selected"), e("#moove-gdpr-menu .menu-item-" + t).toggleClass("menu-item-off"), e(this).is(":checked") ? e(this).closest(".moove-gdpr-tab-main").find(".moove-gdpr-strict-warning-message").slideUp() : e(this).closest(".moove-gdpr-tab-main").find(".moove-gdpr-strict-warning-message").slideDown(), e(this).is("#moove_gdpr_strict_cookies") && (e(this).is(":checked") ? (e("#third_party_cookies fieldset, #third_party_cookies .gdpr-cc-form-fieldset").removeClass("fl-disabled"), e("#moove_gdpr_performance_cookies").prop("disabled", !1), e("#third_party_cookies .moove-gdpr-strict-secondary-warning-message").slideUp(), e("#advanced-cookies fieldset, #advanced-cookies .gdpr-cc-form-fieldset").removeClass("fl-disabled"), e("#advanced-cookies .moove-gdpr-strict-secondary-warning-message").slideUp(), e("#moove_gdpr_advanced_cookies").prop("disabled", !1)) : (e(".gdpr_cookie_settings_shortcode_content").find("input").each(function() {
                                e(this).prop("checked", !1)
                            }), e("#third_party_cookies fieldset, #third_party_cookies .gdpr-cc-form-fieldset").addClass("fl-disabled").closest(".moove-gdpr-status-bar").removeClass("checkbox-selected"), e("#moove_gdpr_performance_cookies").prop("disabled", !0).prop("checked", !1), e("#advanced-cookies fieldset, #advanced-cookies .gdpr-cc-form-fieldset").addClass("fl-disabled").closest(".moove-gdpr-status-bar").removeClass("checkbox-selected"), e("#moove_gdpr_advanced_cookies").prop("disabled", !0).prop("checked", !1))), e('input[data-name="' + e(this).attr("name") + '"]').prop("checked", e(this).is(":checked")), m()
                        }), e(document).on("click tap", ".gdpr_cookie_settings_shortcode_content a.gdpr-shr-save-settings", function(o) {
                            o.preventDefault(), b(), e(".gdpr_lightbox .gdpr_lightbox-close").trigger("click"), e(document).moove_gdpr_lightbox_close(), p("modal-save-settings")
                        }), e(document).on("change", ".gdpr_cookie_settings_shortcode_content input[type=checkbox]", function(o) {
                            var t = e(this).attr("data-name"),
                                r = e("#" + t);
                            e(this).is(":checked") ? (e('input[data-name="' + t + '"]').prop("checked", !0), "moove_gdpr_strict_cookies" !== e(this).attr("data-name") && (e(this).closest(".gdpr_cookie_settings_shortcode_content").find('input[data-name="moove_gdpr_strict_cookies"]').is(":checked") || (e('input[data-name="' + t + '"]').prop("checked", !1), e('.gdpr_cookie_settings_shortcode_content input[data-name="moove_gdpr_strict_cookies"]').closest(".gdpr-shr-switch").css("transform", "scale(1.2)"), setTimeout(function() {
                                e('.gdpr_cookie_settings_shortcode_content input[data-name="moove_gdpr_strict_cookies"]').closest(".gdpr-shr-switch").css("transform", "scale(1)")
                            }, 300)))) : (e('input[data-name="' + t + '"]').prop("checked", e(this).is(":checked")), "moove_gdpr_strict_cookies" === e(this).attr("data-name") && e(".gdpr_cookie_settings_shortcode_content").find('input[type="checkbox"]').prop("checked", !1)), r.trigger("click")
                        }), e(document).on("click tap", '.moove-gdpr-modal-allow-all, [href*="#gdpr-accept-cookies"]', function(o) {
                            o.preventDefault(), e("#moove_gdpr_cookie_modal").find("input[type=checkbox]").each(function() {
                                var o = e(this);
                                o.is(":checked") || o.trigger("click")
                            }), c("enable_all enable-all-button"), e(".gdpr_lightbox .gdpr_lightbox-close").trigger("click"), l(), b(), e(document).moove_gdpr_lightbox_close()
                        }), e(document).on("click tap", ".moove-gdpr-infobar-allow-all", function(e) {
                            e.preventDefault(), c("enable_all allow-btn")
                        }), e(document).on("click tap", ".moove-gdpr-modal-save-settings", function(o) {
                            o.preventDefault(), b(), e(".gdpr_lightbox .gdpr_lightbox-close").trigger("click"), e(document).moove_gdpr_lightbox_close(), p("modal-save-settings")
                        });
                    if (window.location.hash) {
                        var A = window.location.hash.substring(1);
                        A = A.replace(/\/$/, ""), "moove_gdpr_cookie_modal" !== A && "gdpr_cookie_modal" !== A || (D = !0, i("opened_modal_from_link", ""), setTimeout(function() {
                            e("#moove_gdpr_cookie_modal").length > 0 && (j = gdpr_lightbox("#moove_gdpr_cookie_modal"), e(".gdpr_lightbox").addClass("moove_gdpr_cookie_modal_open"), e(document).moove_gdpr_lightbox_open())
                        }, 500)), "gdpr-accept-cookies" === A && (e("#moove_gdpr_cookie_modal").find("input[type=checkbox]").each(function() {
                            var o = e(this);
                            o.is(":checked") || o.trigger("click")
                        }), c("enable_all enable-all-button"), e(".gdpr_lightbox .gdpr_lightbox-close").trigger("click"), l(), b(), e(document).moove_gdpr_lightbox_close()), "gdpr-reject-cookies" === A && (h(), n(), e("#moove_gdpr_cookie_info_bar").length > 0 && (e("#moove_gdpr_cookie_info_bar").addClass("moove-gdpr-info-bar-hidden"), e("body").removeClass("gdpr-infobar-visible"), e("#moove_gdpr_cookie_info_bar").hide(), e("#moove_gdpr_save_popup_settings_button").show()), g(), f("moove_gdpr_popup", JSON.stringify({
                            strict: "1",
                            thirdparty: "0",
                            advanced: "0"
                        }), y), setTimeout(function() {
                            f("moove_gdpr_popup", JSON.stringify({
                                strict: "1",
                                thirdparty: "0",
                                advanced: "0"
                            }), y)
                        }, 500))
                    }
                },
                finalize: function() {}
            }
        },
        t = {
            fire: function(e, t, r) {
                var n, i = o;
                t = void 0 === t ? "init" : t, n = "" !== e, n = n && i[e], (n = n && "function" == typeof i[e][t]) && i[e][t](r)
            },
            loadEvents: function() {
                var o = !1,
                    r = !1;
                if (void 0 !== moove_frontend_gdpr_scripts.gpc && 1 === parseInt(moove_frontend_gdpr_scripts.gpc) && void 0 !== navigator.globalPrivacyControl && (gpcValue = navigator.globalPrivacyControl, gpcValue && (r = !0, console.warn("GDPR Cookie Compliance - Blocked by Global Policy Control (GPC)"))), !r)
                    if (void 0 !== moove_frontend_gdpr_scripts.geo_location && "true" === moove_frontend_gdpr_scripts.geo_location) jQuery.post(moove_frontend_gdpr_scripts.ajaxurl, {
                        action: "moove_gdpr_localize_scripts"
                    }, function(e) {
                        var r = JSON.parse(e);
                        void 0 !== r.display_cookie_banner && (moove_frontend_gdpr_scripts.display_cookie_banner = r.display_cookie_banner), void 0 !== r.enabled_default && (moove_frontend_gdpr_scripts.enabled_default = r.enabled_default), o || (o = !0, t.fire("common"))
                    });
                    else {
                        var n = void 0 !== typeof moove_frontend_gdpr_scripts.script_delay && parseInt(moove_frontend_gdpr_scripts.script_delay) >= 0 ? parseInt(moove_frontend_gdpr_scripts.script_delay) : 0;
                        n > 0 ? setTimeout(function() {
                            t.fire("common")
                        }, n) : t.fire("common")
                    }
                e.each(document.body.className.replace(/-/g, "_").split(/\s+/), function(e, o) {
                    t.fire(o), t.fire(o, "finalize")
                }), t.fire("common", "finalize")
            }
        };
    e(document).ready(t.loadEvents)
}(jQuery);