! function() {
    var e = {
            9334: function(e) {
                e.exports = function() {
                    "use strict";

                    function e() {
                        return (e = Object.assign || function(e) {
                            for (var t = 1; t < arguments.length; t++) {
                                var n, i = arguments[t];
                                for (n in i) Object.prototype.hasOwnProperty.call(i, n) && (e[n] = i[n])
                            }
                            return e
                        }).apply(this, arguments)
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

                    function o(e, t, n) {
                        return void 0 === n && (n = ""), e.setAttribute(t, n), e
                    }

                    function r(e, t, n) {
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
                                    r(t.element.$wrapper, {
                                        transition: e.isStart ? "none" : "transform ease " + i + "ms",
                                        transform: n.isHorizontal ? "translate3d(" + e.transforms + "px, 0, 0)" : "translate3d(0, " + e.transforms + "px, 0)"
                                    })
                                }
                            }
                        },
                        s = "before-slide",
                        l = "scroll",
                        c = "after-slide";
                    var u = 180 / Math.PI;

                    function d() {
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
                                return i = (n = t).length - 1, o = n[i], n = n[i - 1] || o, i = {
                                    x: o.x - n.x,
                                    y: o.y - n.y
                                }, o = o.time - n.time, n = i.x / o || 0, o = i.y / o || 0, e({}, i, {
                                    angle: Math.atan2(Math.abs(i.y), Math.abs(i.x)) * u,
                                    velocityX: n,
                                    velocityY: o
                                });
                                var n, i, o
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

                    function p() {
                        return (performance || Date).now()
                    }
                    var f = requestAnimationFrame || webkitRequestAnimationFrame || setTimeout,
                        m = cancelAnimationFrame || webkitCancelAnimationFrame || clearTimeout;

                    function v() {
                        var e = function() {
                            var e, t;
                            return {
                                run: function(n) {
                                    e = void 0 === e ? p() : e, t = f((function() {
                                        var t = p(),
                                            i = t - e;
                                        e = t, n(i)
                                    }))
                                },
                                stop: function() {
                                    e = void 0, m(t)
                                }
                            }
                        }();
                        return {
                            run: function t(n) {
                                e.run((function(e) {
                                    t(n), n(e)
                                }))
                            },
                            stop: function() {
                                e.stop()
                            }
                        }
                    }

                    function x(e, t) {
                        e = e.tracker, t = t.initStatus, e.clear(), t()
                    }

                    function h(e, t, n, i) {
                        var o = i.initLayout,
                            r = i.initStatus,
                            a = i.render,
                            s = i.scrollPixel,
                            l = i.slideTo,
                            c = i.getOffsetSteps,
                            u = v();
                        return {
                            preheat: function(e, t) {
                                var i = n.tracker;
                                u.stop(), i.clear(), i.push(e), o(t), r(t), n.isStart = !0, a()
                            },
                            move: function(t) {
                                var i, o = n.tracker,
                                    r = e.touchRatio,
                                    l = e.touchAngle,
                                    c = e.isHorizontal;
                                n.isStart && !n.isScrolling && (o.push(t), i = o.vector(), ((t = o.getOffset()).x || t.y) && (c && i.angle < l || !c && 90 - i.angle < l || n.isTouching ? (r = i[c ? "x" : "y"] * r, n.isTouching = !0, s(r), a()) : (n.isScrolling = !0, o.clear())))
                            },
                            stop: function() {
                                var o, r, d, p = n.index,
                                    f = n.tracker,
                                    m = t.measure;
                                n.isStart && (n.isStart = !1, e.freeMode ? (o = f.vector()[e.isHorizontal ? "velocityX" : "velocityY"], u.run((function(e) {
                                    e *= o, o *= .98, Math.abs(e) < .01 ? (u.stop(), x(n, i)) : (s(e), a(0))
                                }))) : (r = f.getDuration(), d = f.getOffset()[e.isHorizontal ? "x" : "y"], f = Math.ceil(Math.abs(d) / m.boxSize), m = c(d), r > e.longSwipesMs ? l(p + m * (0 < d ? -1 : 1)) : l(0 < d ? p - f : p + f), x(n, i)))
                            }
                        }
                    }

                    function g(e, t) {
                        var n = {};
                        return (n.update = function(e) {
                            var i, o = function(e, t, n) {
                                    var i = e.$list,
                                        o = t.viewSize,
                                        r = t.slideSize,
                                        a = t.boxSize,
                                        s = -(t = (e = (s = n).loop ? Math.ceil(s.slidesPerView) : 0) * a) + (n.centeredSlides ? (o - r) / 2 : 0);
                                    return {
                                        max: s,
                                        min: n.spaceBetween + (n.loop ? r : o) + s - a * i.length,
                                        base: s,
                                        expand: e,
                                        buffer: t,
                                        minIndex: 0,
                                        maxIndex: i.length - (n.centeredSlides || n.loop ? 1 : Math.ceil(n.slidesPerView))
                                    }
                                }(e, (i = t, r = (o = e).$el, i = {
                                    boxSize: (r = ((o = i.isHorizontal ? r.offsetWidth : r.offsetHeight) - Math.ceil(i.slidesPerView - 1) * i.spaceBetween) / i.slidesPerView) + i.spaceBetween,
                                    viewSize: o,
                                    slideSize: r
                                }), t),
                                r = Boolean("ontouchstart" in window || 0 < navigator.maxTouchPoints || 0 < navigator.msMaxTouchPoints || window.DocumentTouch && document instanceof DocumentTouch);
                            Object.assign(n, {
                                touchable: r,
                                element: e,
                                measure: i,
                                limitation: o
                            })
                        })(e), n
                    }
                    var b = "data-shallow-slider",
                        y = "data-slider";

                    function S(e, n) {
                        function i() {
                            e.element.$wrapper.querySelectorAll("[" + b + "]").forEach((function(t) {
                                return e.element.$wrapper.removeChild(t)
                            }))
                        }

                        function a() {
                            var t = e.element,
                                i = e.measure,
                                o = t.$wrapper,
                                a = {
                                    display: "flex",
                                    willChange: "transform",
                                    flexDirection: n.isHorizontal ? "row" : "column"
                                },
                                s = ((t = {})[n.isHorizontal ? "width" : "height"] = i.slideSize + "px", t[n.isHorizontal ? "margin-right" : "margin-bottom"] = n.spaceBetween + "px", t);
                            r(o, a), o.querySelectorAll("[" + y + "]").forEach((function(e) {
                                return r(e, s)
                            }))
                        }
                        return {
                            init: function() {
                                (function() {
                                    var t, r, a, s, l, c;
                                    e.element.$list.forEach((function(e, t) {
                                        return o(e, y, t)
                                    })), i(), n.loop && (t = e.element, s = e.limitation, r = t.$list, a = t.$wrapper, s = s.expand, l = r.slice(-s).map((function(e) {
                                        return e.cloneNode(!0)
                                    })), c = r.slice(0, s).map((function(e) {
                                        return e.cloneNode(!0)
                                    })), l.forEach((function(e, t) {
                                        a.appendChild(o(c[t], b)), a.insertBefore(o(l[t], b), r[0])
                                    })))
                                })(), a()
                            },
                            render: function(i, o, r, a) {
                                var s = e.element.$wrapper;
                                o = void 0 === o ? n.speed : o, n.injections.translate(i, e, n, o), i.isStart || function(i) {
                                    var o = e.element.$wrapper,
                                        r = i.index;
                                    o.querySelectorAll("[" + y + "]").forEach((function(e) {
                                        var i, o, a = ~~e.getAttribute(y);
                                        i = e, void 0 === (o = [n.slidePrevClass, n.slideNextClass, n.slideActiveClass]) && (o = []), Array.isArray(o) || (o = [o]), o.forEach((function(e) {
                                            return i.classList.contains(e) && i.classList.remove(e)
                                        })), a === r && t(e, n.slideActiveClass), a == r - 1 && t(e, n.slidePrevClass), a === r + 1 && t(e, n.slideNextClass)
                                    }))
                                }(i), a && getComputedStyle(s).transform, r && setTimeout(r, o)
                            },
                            destroy: function() {
                                var t = e.element,
                                    o = t.$list,
                                    r = t.$wrapper,
                                    a = n.isHorizontal ? "margin-right" : "margin-bottom";
                                ["display", "will-change", "flex-direction"].forEach((function(e) {
                                    r.style.removeProperty(e)
                                })), o.forEach((function(e) {
                                    return e.style.removeProperty(a)
                                })), i()
                            },
                            updateSize: a
                        }
                    }

                    function w(e, t) {
                        var n = e - t.max;
                        return t = e - t.min, 0 < n ? n : t < 0 ? t : 0
                    }

                    function E(t, n, i, o, r) {
                        function a(e) {
                            var n = t.measure;
                            return Math.ceil(Math.abs(e) / n.boxSize - i.longSwipesRatio)
                        }

                        function u(e, t, i) {
                            o.render(n, e, t, i)
                        }

                        function d(o) {
                            var a, s, c = (s = t.limitation).min,
                                u = s.max;
                            c = (s = u - c + (i.loop ? t.measure.boxSize : 0)) + 1, n.transforms = o, i.loop ? (a = (u - o) % c / s, n.progress = a < 0 ? 1 + a : 1 < a ? a - 1 : a) : (a = (u - o) / s, n.progress = a < 0 ? 0 : 1 < a ? 1 : a), r.emit(l, e({}, n))
                        }

                        function p(e, o) {
                            var l, p, f, m, v, x = t.measure,
                                h = t.limitation,
                                g = h.maxIndex - h.minIndex + 1,
                                b = i.loop ? (e % g + g) % g : e > h.maxIndex ? h.maxIndex : e < h.minIndex ? h.minIndex : e,
                                y = -b * x.boxSize + h.base;
                            0 !== a(y - n.transforms) && i.loop && (l = w(n.transforms, h), p = b - n.index, f = n.index, m = b, v = p, e = (g = h).maxIndex, f = (0 < v ? 1 : -1) * (g.minIndex - e - 1) + m - f, (v = Math.abs(v) > Math.abs(f) ? f : v) === p || l ? n.index === b && d(0 < l ? h.min - x.boxSize + l : h.max + x.boxSize + l) : d(v < 0 ? h.min - x.boxSize : h.max + x.boxSize), u(0, void 0, !0)), r.emit(s, n.index, n, b), n.index = b, d(y), u(o, (function() {
                                r.emit(c, b, n)
                            }))
                        }
                        return {
                            update: function() {
                                p(n.index, 0), o.updateSize()
                            },
                            render: u,
                            transform: d,
                            slideTo: p,
                            scrollPixel: function(e) {
                                var o, r = n.transforms,
                                    a = t.measure,
                                    s = t.limitation,
                                    l = (o = Number(e.toExponential().split("e")[1])) <= 0 ? Math.pow(10, -(o - 1)) : 1,
                                    c = r;
                                i.resistance && !i.loop && (0 < e && r >= s.max ? e -= Math.pow(e * l, i.resistanceRatio) / l : e < 0 && r <= s.min && (e += Math.pow(-e * l, i.resistanceRatio) / l)), c += e, i.loop && (o = n.tracker.vector(), l = i.isHorizontal ? o.velocityX : o.velocityY, (e = w(r, s)) && (o = r, r = s, 0 < l && o > r.max || l < 0 && o < r.min) && (c = 0 < e ? s.min - a.boxSize + e : s.max + a.boxSize + e)), d(c)
                            },
                            initStatus: function(e) {
                                void 0 === e && (e = 0), n.startTransform = e, n.isStart = !1, n.isScrolling = !1, n.isTouching = !1
                            },
                            initLayout: function(e) {
                                d(e)
                            },
                            getOffsetSteps: a
                        }
                    }

                    function z(e, t) {
                        var n = "string" == typeof e ? document.body.querySelector(e) : e;
                        return e = n.querySelector("." + t.wrapperClass), t = [].slice.call(n.getElementsByClassName(t.slideClass)), {
                            $el: n,
                            $wrapper: e,
                            $list: t = t.filter((function(e) {
                                return null === e.getAttribute("data-shallow-slider")
                            }))
                        }
                    }

                    function L(t, o) {
                        var r = (u = e({}, a, u = o), e({}, u, {
                                isHorizontal: "horizontal" === u.direction
                            })),
                            s = function() {
                                var e = {};
                                return {
                                    on: function(t, n) {
                                        e[t] ? e[t].push(n) : e[t] = [n]
                                    },
                                    off: function(t, n) {
                                        !e[t] || -1 < (n = e[t].indexOf(n)) && e[t].splice(n, 1)
                                    },
                                    emit: function(t) {
                                        for (var n = arguments.length, i = new Array(1 < n ? n - 1 : 0), o = 1; o < n; o++) i[o - 1] = arguments[o];
                                        e[t] && e[t].forEach((function(e) {
                                            return e.apply(void 0, i)
                                        }))
                                    },
                                    clear: function() {
                                        e = {}
                                    }
                                }
                            }(),
                            l = g(z(t, r), r),
                            c = {
                                tracker: d(),
                                index: 0,
                                startTransform: 0,
                                isStart: !1,
                                isScrolling: !1,
                                isTouching: !1,
                                transforms: 0,
                                progress: 0
                            },
                            u = (o = s.on, s.off),
                            p = s.emit,
                            f = {
                                on: o,
                                off: u,
                                env: l,
                                state: c,
                                options: r
                            };
                        (r.plugins || L.plugins || []).forEach((function(e) {
                            return e(f, r)
                        })), p("before-init", f);
                        var m = S(l, r),
                            v = E(l, c, r, m, s),
                            x = function(e, t, o, r) {
                                var a = e.touchable,
                                    s = ["INPUT", "SELECT", "OPTION", "TEXTAREA", "BUTTON", "VIDEO"],
                                    l = (r = h(o, e, t, r)).preheat,
                                    c = r.move,
                                    u = r.stop;

                                function d(e) {
                                    return {
                                        x: (e = a ? e.changedTouches[0] : e).pageX,
                                        y: e.pageY
                                    }
                                }

                                function p(t) {
                                    for (var n = 0; n < o.excludeElements.length; n++)
                                        if (o.excludeElements[n].contains(t.target)) return;
                                    var i, r = e.element.$wrapper,
                                        c = o.touchStartPreventDefault && -1 === s.indexOf(t.target.nodeName) || o.touchStartForcePreventDefault;
                                    !a && c && t.preventDefault(), l(d(t), (i = r, c = o.isHorizontal, r = getComputedStyle(i).transform.replace(/[a-z]|\(|\)|\s/g, "").split(",").map(parseFloat), i = [], 16 === r.length ? i = r.slice(12, 14) : 6 === r.length && (i = r.slice(4, 6)), i[c ? 0 : 1] || 0))
                                }

                                function f(e) {
                                    o.touchMoveStopPropagation && e.stopPropagation(), c(d(e)), t.isTouching && !1 !== e.cancelable && e.preventDefault()
                                }

                                function m() {
                                    u()
                                }
                                return {
                                    attach: function() {
                                        var t = e.element.$el;
                                        a ? (n(t, "touchstart", p, {
                                            passive: o.passiveListeners,
                                            capture: !1
                                        }), n(t, "touchmove", f), n(t, "touchend", m), n(t, "touchcancel", m)) : (n(t, "mousedown", p), n(document, "mousemove", f), n(document, "mouseup", m))
                                    },
                                    detach: function() {
                                        var t = e.element.$el;
                                        i(t, "touchstart", p), i(t, "touchmove", f), i(t, "touchend", m), i(t, "touchcancel", m), i(t, "mousedown", p), i(document, "mousemove", f), i(document, "mouseup", m)
                                    }
                                }
                            }(l, c, r, v);
                        return c = v.slideTo, Object.assign(f, {
                            update: function() {
                                m.destroy(), l.update(z(t, r)), m.init(), v.update()
                            },
                            destroy: function() {
                                p("before-destroy", f), x.detach(), m.destroy(), p("after-destroy", f), s.clear()
                            },
                            slideTo: c,
                            updateSize: function() {
                                l.update(z(t, r)), v.update()
                            }
                        }), m.init(), x.attach(), c(r.initialSlide, 0), p("after-init", f), f
                    }
                    return L.use = function(e) {
                        L.plugins = e
                    }, L
                }()
            },
            8608: function(e) {
                e.exports = function() {
                    "use strict";

                    function e(e, t, n, i) {
                        e.addEventListener(t, n, i)
                    }

                    function t(e, t, n) {
                        e.removeEventListener(t, n)
                    }
                    return function(n, i) {
                        function o(e) {
                            c(e.target, "next")
                        }

                        function r(e) {
                            c(e.target, "prev")
                        }
                        var a = Boolean(i.navigation),
                            s = {
                                nextEl: null,
                                prevEl: null
                            },
                            l = Object.assign({
                                disabledClass: "swiper-button-disabled"
                            }, i.navigation),
                            c = function(e, t) {
                                u(e) && !n.options.loop || (e = n.state.index, "next" === t && n.slideTo(e + 1), "prev" === t && n.slideTo(e - 1))
                            },
                            u = function(e) {
                                return e.classList.contains(l.disabledClass)
                            };
                        n.on("before-slide", (function(e, t, i) {
                            var o, r;
                            n.options.loop || (o = i, i = (r = n.env.limitation).minIndex, r = r.maxIndex, s && s.prevEl && s.nextEl && (s.nextEl.classList.contains(l.disabledClass) && i <= o && s.nextEl.classList.remove(l.disabledClass), s.prevEl.classList.contains(l.disabledClass) && o <= r && s.prevEl.classList.remove(l.disabledClass), o === i && s.prevEl.classList.add(l.disabledClass), o === r && s.nextEl.classList.add(l.disabledClass)))
                        })), n.on("after-init", (function() {
                            var t, i, c;
                            a && (s.nextEl = "string" == typeof l.nextEl ? document.body.querySelector(l.nextEl) : l.nextEl, s.prevEl = "string" == typeof l.prevEl ? document.body.querySelector(l.prevEl) : l.prevEl, n.options.loop || (t = n.state.index, i = n.env.element.$list, t === (c = n.env.limitation.minIndex) && s.prevEl && s.prevEl.classList.add(l.disabledClass), i.length === c && s.nextEl && s.nextEl.classList.add(l.disabledClass)), e(s.nextEl, "click", o), e(s.prevEl, "click", r))
                        })), n.on("after-destroy", (function() {
                            s && s.prevEl && s.nextEl && (t(s.nextEl, "click", o), t(s.prevEl, "click", r), delete s.nextEl, delete s.prevEl)
                        }))
                    }
                }()
            }
        },
        t = {};

    function n(i) {
        var o = t[i];
        if (void 0 !== o) return o.exports;
        var r = t[i] = {
            exports: {}
        };
        return e[i].call(r.exports, r, r.exports, n), r.exports
    }
    n.n = function(e) {
            var t = e && e.__esModule ? function() {
                return e.default
            } : function() {
                return e
            };
            return n.d(t, {
                a: t
            }), t
        }, n.d = function(e, t) {
            for (var i in t) n.o(t, i) && !n.o(e, i) && Object.defineProperty(e, i, {
                enumerable: !0,
                get: t[i]
            })
        }, n.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        },
        function() {
            "use strict";
            var e = n(9334),
                t = n.n(e),
                i = n(8608),
                o = n.n(i);
            ! function() {
                const e = document.querySelectorAll(".wp-block-coblocks-gallery-carousel");
                for (let n = 0; n < e.length; n++) {
                    let i = null,
                        r = 0,
                        a = !1;
                    const s = e[n],
                        l = e => {
                            const t = s.querySelector(`.wp-block-coblocks-gallery-carousel-thumbnail-${r}`);
                            if (t) {
                                t.classList.remove("is-active");
                                const n = s.querySelector(`.wp-block-coblocks-gallery-carousel-thumbnail-${e}`);
                                n && n.classList.add("is-active")
                            }
                        },
                        c = e => {
                            i ? .slideTo(e), l(e), r = e
                        },
                        u = e => {
                            e !== r && (l(e), r = e)
                        },
                        d = s.querySelector(".swiper-container");
                    if (d) {
                        const e = d.getAttribute("data-swiper");
                        if (e) {
                            const n = JSON.parse(e),
                                r = s.querySelector(".nav-button__prev"),
                                l = s.querySelector(".nav-button__next");
                            r && r.setAttribute("aria-label", coblocksTinyswiper.carouselPrevButtonAriaLabel), l && l.setAttribute("aria-label", coblocksTinyswiper.carouselNextButtonAriaLabel);
                            const p = s.querySelectorAll("img");
                            for (let e = 0; e < p.length; ++e) p[e].alt || (p[e].alt = coblocksTinyswiper.sliderImageAriaLabel);
                            const f = {
                                centeredSlides: !1,
                                freeMode: !1,
                                longSwipesRatio: .8,
                                loop: !1,
                                passiveListeners: !0,
                                plugins: [],
                                slidesPerView: 1
                            };
                            if (!0 === n.loop && (f.loop = n.loop), n.slidesPerView && (f.slidesPerView = n.slidesPerView), n.navigation && (f.plugins = [...f.plugins, o()], f.navigation = {
                                    nextEl: l,
                                    prevEl: r
                                }), i = new(t())(d, f), new ResizeObserver((() => {
                                    i.update()
                                })).observe(d), n.thumbnails) {
                                const e = s.querySelectorAll(".wp-block-coblocks-gallery-carousel-thumbnail");
                                for (const [t, n] of Object.entries(e)) n.addEventListener("click", (() => c(t)));
                                const t = s.querySelector(".wp-block-coblocks-gallery-carousel-thumbnail-0");
                                t && t.classList.add("is-active")
                            }
                            if (!n.thumbnails && n.pageDots) {
                                const e = s.querySelectorAll(".wp-block-coblocks-gallery-carousel-page-dot-pagination");
                                for (const [t, n] of Object.entries(e)) n.addEventListener("click", (() => c(t)));
                                const t = s.querySelector(".wp-block-coblocks-gallery-carousel-page-dot--0");
                                t && t.classList.add("is-active")
                            }
                            if (!0 !== n.draggable) {
                                const e = s.querySelector(".swiper-wrapper");
                                e ? .addEventListener("mousedown", (e => {
                                    e.stopPropagation()
                                }))
                            }!0 === n.autoPlay && n.autoPlaySpeed && (!0 === n.pauseHover && (d.addEventListener("mouseenter", (() => {
                                a = !0
                            })), d.addEventListener("mouseleave", (() => {
                                a = !1
                            }))), setInterval((() => {
                                !0 === n.pauseHover && !0 === a || i ? .slideTo(i.state.index + 1)
                            }), n.autoPlaySpeed)), i.on("after-slide", u)
                        }
                    }
                }
            }()
        }()
}();