! function() {
    var e = {
            7300: function(e) {
                e.exports = function() {
                    "use strict";

                    function e() {
                        return e = Object.assign || function(e) {
                            for (var t = 1; t < arguments.length; t++) {
                                var n = arguments[t];
                                for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (e[i] = n[i])
                            }
                            return e
                        }, e.apply(this, arguments)
                    }

                    function t(e, t) {
                        void 0 === t && (t = []), Array.isArray(t) || (t = [t]), t.forEach((function(t) {
                            return !e.classList.contains(t) && e.classList.add(t)
                        }))
                    }

                    function n(e, t, n, i) {
                        e.addEventListener(t, n, i)
                    }

                    function i(e, t, n) {
                        e.removeEventListener(t, n)
                    }

                    function r(e, t, n) {
                        return void 0 === n && (n = ""), e.setAttribute(t, n), e
                    }

                    function o(e, t, n) {
                        return Object.keys(t).forEach((function(n) {
                            e.style[n] = t[n]
                        })), n && getComputedStyle(e), e
                    }
                    var a = {
                        direction: "horizontal",
                        touchRatio: 1,
                        touchAngle: 45,
                        longSwipesRatio: .5,
                        initialSlide: 0,
                        loop: !1,
                        freeMode: !1,
                        passiveListeners: !0,
                        resistance: !0,
                        resistanceRatio: .85,
                        speed: 300,
                        longSwipesMs: 300,
                        spaceBetween: 0,
                        slidesPerView: 1,
                        centeredSlides: !1,
                        slidePrevClass: "swiper-slide-prev",
                        slideNextClass: "swiper-slide-next",
                        slideActiveClass: "swiper-slide-active",
                        slideClass: "swiper-slide",
                        wrapperClass: "swiper-wrapper",
                        touchStartPreventDefault: !0,
                        touchStartForcePreventDefault: !1,
                        touchMoveStopPropagation: !1,
                        excludeElements: [],
                        injections: {
                            translate: function(e, t, n, i) {
                                o(t.element.$wrapper, {
                                    transition: e.isStart ? "none" : "transform ease " + i + "ms",
                                    transform: n.isHorizontal ? "translate3d(" + e.transforms + "px, 0, 0)" : "translate3d(0, " + e.transforms + "px, 0)"
                                })
                            }
                        }
                    };
                    var s = "before-init",
                        c = "after-init",
                        u = "before-slide",
                        l = "scroll",
                        f = "after-slide",
                        p = "before-destroy",
                        d = "after-destroy";
                    var m = 180 / Math.PI;

                    function v() {
                        var t = [];
                        return {
                            getDuration: function() {
                                var e = t[0],
                                    n = t[t.length - 1];
                                return e ? n.time - e.time : 0
                            },
                            getOffset: function() {
                                var e = t[0],
                                    n = t[t.length - 1];
                                return e ? {
                                    x: n.x - e.x,
                                    y: n.y - e.y
                                } : {
                                    x: 0,
                                    y: 0
                                }
                            },
                            getLogs: function() {
                                return t
                            },
                            vector: function() {
                                return function(t, n) {
                                    var i = t[n],
                                        r = t[n - 1] || i,
                                        o = {
                                            x: i.x - r.x,
                                            y: i.y - r.y
                                        },
                                        a = i.time - r.time,
                                        s = o.x / a || 0,
                                        c = o.y / a || 0;
                                    return e({}, o, {
                                        angle: Math.atan2(Math.abs(o.y), Math.abs(o.x)) * m,
                                        velocityX: s,
                                        velocityY: c
                                    })
                                }(t, t.length - 1)
                            },
                            clear: function() {
                                t = []
                            },
                            push: function(n) {
                                t.push(e({
                                    time: Date.now()
                                }, n))
                            }
                        }
                    }

                    function h() {
                        return performance ? performance.now() : Date.now()
                    }
                    var x = requestAnimationFrame || webkitRequestAnimationFrame || setTimeout,
                        g = cancelAnimationFrame || webkitCancelAnimationFrame || clearTimeout;

                    function S() {
                        var e, t, n = {
                            run: function(n) {
                                e = void 0 === e ? h() : e, t = x((function() {
                                    var t = h(),
                                        i = t - e;
                                    e = t, n(i)
                                }))
                            },
                            stop: function() {
                                e = void 0, g(t)
                            }
                        };
                        return {
                            run: function e(t) {
                                n.run((function(n) {
                                    e(t), t(n)
                                }))
                            },
                            stop: function() {
                                n.stop()
                            }
                        }
                    }

                    function w(e, t) {
                        var n = e.tracker,
                            i = t.initStatus;
                        n.clear(), i()
                    }

                    function y(e, t, r, o) {
                        var a = e.touchable,
                            s = ["INPUT", "SELECT", "OPTION", "TEXTAREA", "BUTTON", "VIDEO"],
                            c = function(e, t, n, i) {
                                var r = i.initLayout,
                                    o = i.initStatus,
                                    a = i.render,
                                    s = i.scrollPixel,
                                    c = i.slideTo,
                                    u = i.getOffsetSteps,
                                    l = S();
                                return {
                                    preheat: function(e, t) {
                                        var i = n.tracker;
                                        l.stop(), i.clear(), i.push(e), r(t), o(t), n.isStart = !0, a()
                                    },
                                    move: function(t) {
                                        var i = n.tracker,
                                            r = e.touchRatio,
                                            o = e.touchAngle,
                                            c = e.isHorizontal;
                                        if (n.isStart && !n.isScrolling) {
                                            i.push(t);
                                            var u = i.vector(),
                                                l = i.getOffset();
                                            if (l.x || l.y)
                                                if (c && u.angle < o || !c && 90 - u.angle < o || n.isTouching) {
                                                    var f = u[c ? "x" : "y"] * r;
                                                    n.isTouching = !0, s(f), a()
                                                } else n.isScrolling = !0, i.clear()
                                        }
                                    },
                                    stop: function() {
                                        var r = n.index,
                                            o = n.tracker,
                                            f = t.measure;
                                        if (n.isStart)
                                            if (n.isStart = !1, e.freeMode) {
                                                var p = o.vector()[e.isHorizontal ? "velocityX" : "velocityY"];
                                                l.run((function(e) {
                                                    var t = p * e;
                                                    p *= .98, Math.abs(t) < .01 ? (l.stop(), w(n, i)) : (s(t), a(0))
                                                }))
                                            } else {
                                                var d = o.getDuration(),
                                                    m = o.getOffset()[e.isHorizontal ? "x" : "y"],
                                                    v = Math.ceil(Math.abs(m) / f.boxSize),
                                                    h = u(m);
                                                d > e.longSwipesMs ? c(r + h * (m > 0 ? -1 : 1)) : c(m > 0 ? r - v : r + v), w(n, i)
                                            }
                                    }
                                }
                            }(r, e, t, o),
                            u = c.preheat,
                            l = c.move,
                            f = c.stop;

                        function p(e) {
                            var t = a ? e.changedTouches[0] : e;
                            return {
                                x: t.pageX,
                                y: t.pageY
                            }
                        }

                        function d(t) {
                            for (var n = 0; n < r.excludeElements.length; n++)
                                if (r.excludeElements[n].contains(t.target)) return;
                            var i, o, c, l, f = e.element.$wrapper,
                                d = r.touchStartPreventDefault && -1 === s.indexOf(t.target.nodeName) || r.touchStartForcePreventDefault;
                            !a && d && t.preventDefault(), u(p(t), (i = f, o = r.isHorizontal, c = getComputedStyle(i).transform.replace(/[a-z]|\(|\)|\s/g, "").split(",").map(parseFloat), l = [], 16 === c.length ? l = c.slice(12, 14) : 6 === c.length && (l = c.slice(4, 6)), l[o ? 0 : 1] || 0))
                        }

                        function m(e) {
                            r.touchMoveStopPropagation && e.stopPropagation(), l(p(e)), t.isTouching && !1 !== e.cancelable && e.preventDefault()
                        }

                        function v() {
                            f()
                        }
                        return {
                            attach: function() {
                                var t = e.element.$el;
                                a ? (n(t, "touchstart", d, {
                                    passive: r.passiveListeners,
                                    capture: !1
                                }), n(t, "touchmove", m), n(t, "touchend", v), n(t, "touchcancel", v)) : (n(t, "mousedown", d), n(document, "mousemove", m), n(document, "mouseup", v))
                            },
                            detach: function() {
                                var t = e.element.$el;
                                i(t, "touchstart", d), i(t, "touchmove", m), i(t, "touchend", v), i(t, "touchcancel", v), i(t, "mousedown", d), i(document, "mousemove", m), i(document, "mouseup", v)
                            }
                        }
                    }

                    function b(e, t, n) {
                        var i = e.$list,
                            r = t.viewSize,
                            o = t.slideSize,
                            a = t.boxSize,
                            s = function(e) {
                                return e.loop ? Math.ceil(e.slidesPerView) : 0
                            }(n),
                            c = s * a,
                            u = -c + (n.centeredSlides ? (r - o) / 2 : 0);
                        return {
                            max: u,
                            min: n.spaceBetween + (n.loop ? o : r) + u - a * i.length,
                            base: u,
                            expand: s,
                            buffer: c,
                            minIndex: 0,
                            maxIndex: i.length - (n.centeredSlides || n.loop ? 1 : Math.ceil(n.slidesPerView))
                        }
                    }

                    function z(e, t) {
                        var n = {};

                        function i(e) {
                            var i = function(e, t) {
                                    var n = t.$el,
                                        i = e.isHorizontal ? n.offsetWidth : n.offsetHeight,
                                        r = (i - Math.ceil(e.slidesPerView - 1) * e.spaceBetween) / e.slidesPerView;
                                    return {
                                        boxSize: r + e.spaceBetween,
                                        viewSize: i,
                                        slideSize: r
                                    }
                                }(t, e),
                                r = b(e, i, t),
                                o = Boolean("ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0 || window.DocumentTouch && document instanceof DocumentTouch);
                            Object.assign(n, {
                                touchable: o,
                                element: e,
                                measure: i,
                                limitation: r
                            })
                        }
                        return n.update = i, i(e), n
                    }
                    var T = "data-shallow-slider",
                        P = "data-slider";

                    function E(e, n) {
                        function i(i) {
                            var r = e.element.$wrapper,
                                o = i.index;
                            r.querySelectorAll("[" + P + "]").forEach((function(e) {
                                var i, r, a = ~~e.getAttribute(P);
                                i = e, void 0 === (r = [n.slidePrevClass, n.slideNextClass, n.slideActiveClass]) && (r = []), Array.isArray(r) || (r = [r]), r.forEach((function(e) {
                                    return i.classList.contains(e) && i.classList.remove(e)
                                })), a === o && t(e, n.slideActiveClass), a === o - 1 && t(e, n.slidePrevClass), a === o + 1 && t(e, n.slideNextClass)
                            }))
                        }

                        function a() {
                            e.element.$wrapper.querySelectorAll("[" + T + "]").forEach((function(t) {
                                return e.element.$wrapper.removeChild(t)
                            }))
                        }

                        function s() {
                            e.element.$list.forEach((function(e, t) {
                                    return r(e, P, t)
                                })), a(),
                                function() {
                                    if (n.loop) {
                                        var t = e.element,
                                            i = e.limitation,
                                            o = t.$list,
                                            a = t.$wrapper,
                                            s = i.expand,
                                            c = o.slice(-s).map((function(e) {
                                                return e.cloneNode(!0)
                                            })),
                                            u = o.slice(0, s).map((function(e) {
                                                return e.cloneNode(!0)
                                            }));
                                        c.forEach((function(e, t) {
                                            a.appendChild(r(u[t], T)), a.insertBefore(r(c[t], T), o[0])
                                        }))
                                    }
                                }()
                        }

                        function c() {
                            var t, i = e.element,
                                r = e.measure,
                                a = i.$wrapper,
                                s = {
                                    display: "flex",
                                    willChange: "transform",
                                    flexDirection: n.isHorizontal ? "row" : "column"
                                },
                                c = ((t = {})[n.isHorizontal ? "width" : "height"] = r.slideSize + "px", t[n.isHorizontal ? "margin-right" : "margin-bottom"] = n.spaceBetween + "px", t);
                            o(a, s), a.querySelectorAll("[" + P + "]").forEach((function(e) {
                                return o(e, c)
                            }))
                        }
                        return {
                            init: function() {
                                s(), c()
                            },
                            render: function(t, r, o, a) {
                                var s = e.element.$wrapper,
                                    c = void 0 === r ? n.speed : r;
                                n.injections.translate(t, e, n, c), t.isStart || i(t), a && getComputedStyle(s).transform, o && setTimeout(o, c)
                            },
                            destroy: function() {
                                var t = e.element,
                                    i = t.$list,
                                    r = t.$wrapper,
                                    o = n.isHorizontal ? "margin-right" : "margin-bottom";
                                ["display", "will-change", "flex-direction"].forEach((function(e) {
                                    r.style.removeProperty(e)
                                })), i.forEach((function(e) {
                                    return e.style.removeProperty(o)
                                })), a()
                            },
                            updateSize: c
                        }
                    }

                    function M(e, t) {
                        var n = e - t.max,
                            i = e - t.min;
                        return n > 0 ? n : i < 0 ? i : 0
                    }

                    function A(t, n, i, r, o) {
                        function a(e) {
                            var n = t.measure;
                            return Math.ceil(Math.abs(e) / n.boxSize - i.longSwipesRatio)
                        }

                        function s(e, t, i) {
                            r.render(n, e, t, i)
                        }

                        function c(r) {
                            var a, s = t.limitation,
                                c = s.min,
                                u = s.max,
                                f = u - c + (i.loop ? t.measure.boxSize : 0),
                                p = f + 1;
                            n.transforms = r, i.loop ? (a = (u - r) % p / f, n.progress = a < 0 ? 1 + a : a > 1 ? a - 1 : a) : (a = (u - r) / f, n.progress = a < 0 ? 0 : a > 1 ? 1 : a), o.emit(l, e({}, n))
                        }

                        function p(e, r) {
                            var l = t.measure,
                                p = t.limitation,
                                d = p.maxIndex - p.minIndex + 1,
                                m = i.loop ? (e % d + d) % d : e > p.maxIndex ? p.maxIndex : e < p.minIndex ? p.minIndex : e,
                                v = -m * l.boxSize + p.base;
                            if (0 !== a(v - n.transforms) && i.loop) {
                                var h = M(n.transforms, p),
                                    x = m - n.index,
                                    g = function(e, t, n, i) {
                                        var r = n.maxIndex,
                                            o = (i > 0 ? 1 : -1) * (n.minIndex - r - 1) + t - e;
                                        return Math.abs(i) > Math.abs(o) ? o : i
                                    }(n.index, m, p, x);
                                g === x || h ? n.index === m && c(h > 0 ? p.min - l.boxSize + h : p.max + l.boxSize + h) : c(g < 0 ? p.min - l.boxSize : p.max + l.boxSize), s(0, void 0, !0)
                            }
                            o.emit(u, n.index, n, m), n.index = m, c(v), s(r, (function() {
                                o.emit(f, m, n)
                            }))
                        }
                        return {
                            update: function() {
                                p(n.index, 0), r.updateSize()
                            },
                            render: s,
                            transform: c,
                            slideTo: p,
                            scrollPixel: function(e) {
                                var r = n.transforms,
                                    o = t.measure,
                                    a = t.limitation,
                                    s = Number(e.toExponential().split("e")[1]),
                                    u = s <= 0 ? Math.pow(10, -(s - 1)) : 1,
                                    l = r;
                                if (i.resistance && !i.loop && (e > 0 && r >= a.max ? e -= Math.pow(e * u, i.resistanceRatio) / u : e < 0 && r <= a.min && (e += Math.pow(-e * u, i.resistanceRatio) / u)), l += e, i.loop) {
                                    var f = n.tracker.vector(),
                                        p = i.isHorizontal ? f.velocityX : f.velocityY,
                                        d = M(r, a);
                                    d && function(e, t, n) {
                                        return e > 0 && t > n.max || e < 0 && t < n.min
                                    }(p, r, a) && (l = d > 0 ? a.min - o.boxSize + d : a.max + o.boxSize + d)
                                }
                                c(l)
                            },
                            initStatus: function(e) {
                                void 0 === e && (e = 0), n.startTransform = e, n.isStart = !1, n.isScrolling = !1, n.isTouching = !1
                            },
                            initLayout: function(e) {
                                c(e)
                            },
                            getOffsetSteps: a
                        }
                    }

                    function C(e, t) {
                        var n = "string" == typeof e ? document.body.querySelector(e) : e,
                            i = n.querySelector("." + t.wrapperClass),
                            r = [].slice.call(n.getElementsByClassName(t.slideClass));
                        return {
                            $el: n,
                            $wrapper: i,
                            $list: r = r.filter((function(e) {
                                return null === e.getAttribute("data-shallow-slider")
                            }))
                        }
                    }
                    var $ = function t(n, i) {
                        var r, o = function(t) {
                                var n = e({}, a, t);
                                return e({}, n, {
                                    isHorizontal: "horizontal" === n.direction
                                })
                            }(i),
                            u = (r = {}, {
                                on: function(e, t) {
                                    r[e] ? r[e].push(t) : r[e] = [t]
                                },
                                off: function(e, t) {
                                    if (r[e]) {
                                        var n = r[e].indexOf(t);
                                        n > -1 && r[e].splice(n, 1)
                                    }
                                },
                                emit: function(e) {
                                    for (var t = arguments.length, n = new Array(t > 1 ? t - 1 : 0), i = 1; i < t; i++) n[i - 1] = arguments[i];
                                    r[e] && r[e].forEach((function(e) {
                                        return e.apply(void 0, n)
                                    }))
                                },
                                clear: function() {
                                    r = {}
                                }
                            }),
                            l = z(C(n, o), o),
                            f = {
                                tracker: v(),
                                index: 0,
                                startTransform: 0,
                                isStart: !1,
                                isScrolling: !1,
                                isTouching: !1,
                                transforms: 0,
                                progress: 0
                            },
                            m = u.on,
                            h = u.off,
                            x = u.emit,
                            g = {
                                on: m,
                                off: h,
                                env: l,
                                state: f,
                                options: o
                            };
                        (o.plugins || t.plugins || []).forEach((function(e) {
                            return e(g, o)
                        })), x(s, g);
                        var S = E(l, o),
                            w = A(l, f, o, S, u),
                            b = y(l, f, o, w);
                        var T = w.slideTo;
                        return Object.assign(g, {
                            update: function() {
                                S.destroy(), l.update(C(n, o)), S.init(), w.update()
                            },
                            destroy: function() {
                                x(p, g), b.detach(), S.destroy(), x(d, g), u.clear()
                            },
                            slideTo: T,
                            updateSize: function() {
                                l.update(C(n, o)), w.update()
                            }
                        }), S.init(), b.attach(), T(o.initialSlide, 0), x(c, g), g
                    };
                    return $.use = function(e) {
                        $.plugins = e
                    }, $
                }()
            }
        },
        t = {};
    ! function n(i) {
        var r = t[i];
        if (void 0 !== r) return r.exports;
        var o = t[i] = {
            exports: {}
        };
        return e[i].call(o.exports, o, o.exports, n), o.exports
    }(7300)
}();