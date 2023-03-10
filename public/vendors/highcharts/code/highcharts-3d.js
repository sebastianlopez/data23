/*
 Highcharts JS v5.0.9 (2017-03-08)

 3D features for Highcharts JS

 @license: www.highcharts.com/license
 */
(function (F) {
    "object" === typeof module && module.exports ? module.exports = F : F(Highcharts)
})(function (F) {
    (function (a) {
        var r = a.deg2rad, k = a.pick;
        a.perspective = function (p, m, u) {
            var n = m.options.chart.options3d, g = u ? m.inverted : !1, h = m.plotWidth / 2, q = m.plotHeight / 2, d = n.depth / 2, e = k(n.depth, 1) * k(n.viewDistance, 0), c = m.scale3d || 1, b = r * n.beta * (g ? -1 : 1), n = r * n.alpha * (g ? -1 : 1), f = Math.cos(n), w = Math.cos(-b), y = Math.sin(n), z = Math.sin(-b);
            u || (h += m.plotLeft, q += m.plotTop);
            return a.map(p, function (b) {
                var a, n;
                n = (g ? b.y : b.x) - h;
                var m = (g ?
                        b.x : b.y) - q, k = (b.z || 0) - d;
                a = w * n - z * k;
                b = -y * z * n + f * m - w * y * k;
                n = f * z * n + y * m + f * w * k;
                m = 0 < e && e < Number.POSITIVE_INFINITY ? e / (n + d + e) : 1;
                a = a * m * c + h;
                b = b * m * c + q;
                return {x: g ? b : a, y: g ? a : b, z: n * c + d}
            })
        };
        a.pointCameraDistance = function (a, m) {
            var p = m.options.chart.options3d, n = m.plotWidth / 2;
            m = m.plotHeight / 2;
            p = k(p.depth, 1) * k(p.viewDistance, 0) + p.depth;
            return Math.sqrt(Math.pow(n - a.plotX, 2) + Math.pow(m - a.plotY, 2) + Math.pow(p - a.plotZ, 2))
        }
    })(F);
    (function (a) {
        function r(b) {
            var c = 0, l, x;
            for (l = 0; l < b.length; l++)x = (l + 1) % b.length, c += b[l].x * b[x].y -
                b[x].x * b[l].y;
            return c / 2
        }

        function k(b) {
            var c = 0, l;
            for (l = 0; l < b.length; l++)c += b[l].z;
            return b.length ? c / b.length : 0
        }

        function p(b, c, l, x, a, f, d, e) {
            var D = [], g = f - a;
            return f > a && f - a > Math.PI / 2 + .0001 ? (D = D.concat(p(b, c, l, x, a, a + Math.PI / 2, d, e)), D = D.concat(p(b, c, l, x, a + Math.PI / 2, f, d, e))) : f < a && a - f > Math.PI / 2 + .0001 ? (D = D.concat(p(b, c, l, x, a, a - Math.PI / 2, d, e)), D = D.concat(p(b, c, l, x, a - Math.PI / 2, f, d, e))) : ["C", b + l * Math.cos(a) - l * t * g * Math.sin(a) + d, c + x * Math.sin(a) + x * t * g * Math.cos(a) + e, b + l * Math.cos(f) + l * t * g * Math.sin(f) + d, c + x * Math.sin(f) -
            x * t * g * Math.cos(f) + e, b + l * Math.cos(f) + d, c + x * Math.sin(f) + e]
        }

        var m = Math.cos, u = Math.PI, n = Math.sin, g = a.animObject, h = a.charts, q = a.color, d = a.defined, e = a.deg2rad, c = a.each, b = a.extend, f = a.inArray, w = a.map, y = a.merge, z = a.perspective, G = a.pick, B = a.SVGElement, H = a.SVGRenderer, C = a.wrap, t = 4 * (Math.sqrt(2) - 1) / 3 / (u / 2);
        H.prototype.toLinePath = function (b, a) {
            var f = [];
            c(b, function (b) {
                f.push("L", b.x, b.y)
            });
            b.length && (f[0] = "M", a && f.push("Z"));
            return f
        };
        H.prototype.cuboid = function (b) {
            var c = this.g(), f = c.destroy;
            b = this.cuboidPath(b);
            c.attr({"stroke-linejoin": "round"});
            c.front = this.path(b[0]).attr({"class": "highcharts-3d-front", zIndex: b[3]}).add(c);
            c.top = this.path(b[1]).attr({"class": "highcharts-3d-top", zIndex: b[4]}).add(c);
            c.side = this.path(b[2]).attr({"class": "highcharts-3d-side", zIndex: b[5]}).add(c);
            c.fillSetter = function (b) {
                this.front.attr({fill: b});
                this.top.attr({fill: q(b).brighten(.1).get()});
                this.side.attr({fill: q(b).brighten(-.1).get()});
                this.color = b;
                return this
            };
            c.opacitySetter = function (b) {
                this.front.attr({opacity: b});
                this.top.attr({opacity: b});
                this.side.attr({opacity: b});
                return this
            };
            c.attr = function (b, c) {
                if ("string" === typeof b && "undefined" !== typeof c) {
                    var f = b;
                    b = {};
                    b[f] = c
                }
                if (b.shapeArgs || d(b.x))b = this.renderer.cuboidPath(b.shapeArgs || b), this.front.attr({
                    d: b[0],
                    zIndex: b[3]
                }), this.top.attr({d: b[1], zIndex: b[4]}), this.side.attr({
                    d: b[2],
                    zIndex: b[5]
                }); else return a.SVGElement.prototype.attr.call(this, b);
                return this
            };
            c.animate = function (b, c, f) {
                d(b.x) && d(b.y) ? (b = this.renderer.cuboidPath(b), this.front.attr({zIndex: b[3]}).animate({d: b[0]},
                    c, f), this.top.attr({zIndex: b[4]}).animate({d: b[1]}, c, f), this.side.attr({zIndex: b[5]}).animate({d: b[2]}, c, f), this.attr({zIndex: -b[6]})) : b.opacity ? (this.front.animate(b, c, f), this.top.animate(b, c, f), this.side.animate(b, c, f)) : B.prototype.animate.call(this, b, c, f);
                return this
            };
            c.destroy = function () {
                this.front.destroy();
                this.top.destroy();
                this.side.destroy();
                return f.call(this)
            };
            c.attr({zIndex: -b[6]});
            return c
        };
        H.prototype.cuboidPath = function (b) {
            function c(b) {
                return q[b]
            }

            var f = b.x, a = b.y, d = b.z, e = b.height,
                D = b.width, g = b.depth, q = [{x: f, y: a, z: d}, {x: f + D, y: a, z: d}, {
                    x: f + D,
                    y: a + e,
                    z: d
                }, {x: f, y: a + e, z: d}, {x: f, y: a + e, z: d + g}, {x: f + D, y: a + e, z: d + g}, {
                    x: f + D,
                    y: a,
                    z: d + g
                }, {x: f, y: a, z: d + g}], q = z(q, h[this.chartIndex], b.insidePlotArea), d = function (b, f) {
                    var a = [];
                    b = w(b, c);
                    f = w(f, c);
                    0 > r(b) ? a = b : 0 > r(f) && (a = f);
                    return a
                };
            b = d([3, 2, 1, 0], [7, 6, 5, 4]);
            f = [4, 5, 2, 3];
            a = d([1, 6, 7, 0], f);
            d = d([1, 2, 5, 6], [0, 7, 4, 3]);
            return [this.toLinePath(b, !0), this.toLinePath(a, !0), this.toLinePath(d, !0), k(b), k(a), k(d), 9E9 * k(w(f, c))]
        };
        a.SVGRenderer.prototype.arc3d = function (a) {
            function d(b) {
                var c =
                    !1, a = {}, d;
                for (d in b)-1 !== f(d, n) && (a[d] = b[d], delete b[d], c = !0);
                return c ? a : !1
            }

            var l = this.g(), x = l.renderer, n = "x y r innerR start end".split(" ");
            a = y(a);
            a.alpha *= e;
            a.beta *= e;
            l.top = x.path();
            l.side1 = x.path();
            l.side2 = x.path();
            l.inn = x.path();
            l.out = x.path();
            l.onAdd = function () {
                var b = l.parentGroup, a = l.attr("class");
                l.top.add(l);
                c(["out", "inn", "side1", "side2"], function (c) {
                    l[c].addClass(a + " highcharts-3d-side").add(b)
                })
            };
            l.setPaths = function (b) {
                var c = l.renderer.arc3dPath(b), a = 100 * c.zTop;
                l.attribs = b;
                l.top.attr({
                    d: c.top,
                    zIndex: c.zTop
                });
                l.inn.attr({d: c.inn, zIndex: c.zInn});
                l.out.attr({d: c.out, zIndex: c.zOut});
                l.side1.attr({d: c.side1, zIndex: c.zSide1});
                l.side2.attr({d: c.side2, zIndex: c.zSide2});
                l.zIndex = a;
                l.attr({zIndex: a});
                b.center && (l.top.setRadialReference(b.center), delete b.center)
            };
            l.setPaths(a);
            l.fillSetter = function (b) {
                var c = q(b).brighten(-.1).get();
                this.fill = b;
                this.side1.attr({fill: c});
                this.side2.attr({fill: c});
                this.inn.attr({fill: c});
                this.out.attr({fill: c});
                this.top.attr({fill: b});
                return this
            };
            c(["opacity", "translateX",
                "translateY", "visibility"], function (b) {
                l[b + "Setter"] = function (b, a) {
                    l[a] = b;
                    c(["out", "inn", "side1", "side2", "top"], function (c) {
                        l[c].attr(a, b)
                    })
                }
            });
            C(l, "attr", function (c, a) {
                var f;
                "object" === typeof a && (f = d(a)) && (b(l.attribs, f), l.setPaths(l.attribs));
                return c.apply(this, [].slice.call(arguments, 1))
            });
            C(l, "animate", function (b, c, a, f) {
                var l, e = this.attribs, q;
                delete c.center;
                delete c.z;
                delete c.depth;
                delete c.alpha;
                delete c.beta;
                q = g(G(a, this.renderer.globalAnimation));
                q.duration && (c = y(c), l = d(c), c.dummy = 1, l &&
                (q.step = function (b, c) {
                    function a(b) {
                        return e[b] + (G(l[b], e[b]) - e[b]) * c.pos
                    }

                    "dummy" === c.prop && c.elem.setPaths(y(e, {
                        x: a("x"),
                        y: a("y"),
                        r: a("r"),
                        innerR: a("innerR"),
                        start: a("start"),
                        end: a("end")
                    }))
                }), a = q);
                return b.call(this, c, a, f)
            });
            l.destroy = function () {
                this.top.destroy();
                this.out.destroy();
                this.inn.destroy();
                this.side1.destroy();
                this.side2.destroy();
                B.prototype.destroy.call(this)
            };
            l.hide = function () {
                this.top.hide();
                this.out.hide();
                this.inn.hide();
                this.side1.hide();
                this.side2.hide()
            };
            l.show = function () {
                this.top.show();
                this.out.show();
                this.inn.show();
                this.side1.show();
                this.side2.show()
            };
            return l
        };
        H.prototype.arc3dPath = function (b) {
            function c(b) {
                b %= 2 * Math.PI;
                b > Math.PI && (b = 2 * Math.PI - b);
                return b
            }

            var a = b.x, f = b.y, d = b.start, e = b.end - .00001, g = b.r, q = b.innerR, w = b.depth, h = b.alpha, k = b.beta, y = Math.cos(d), r = Math.sin(d);
            b = Math.cos(e);
            var z = Math.sin(e), v = g * Math.cos(k), g = g * Math.cos(h), t = q * Math.cos(k), C = q * Math.cos(h), q = w * Math.sin(k), A = w * Math.sin(h), w = ["M", a + v * y, f + g * r], w = w.concat(p(a, f, v, g, d, e, 0, 0)), w = w.concat(["L", a + t * b, f + C * z]), w =
                w.concat(p(a, f, t, C, e, d, 0, 0)), w = w.concat(["Z"]), G = 0 < k ? Math.PI / 2 : 0, k = 0 < h ? 0 : Math.PI / 2, G = d > -G ? d : e > -G ? -G : d, E = e < u - k ? e : d < u - k ? u - k : e, B = 2 * u - k, h = ["M", a + v * m(G), f + g * n(G)], h = h.concat(p(a, f, v, g, G, E, 0, 0));
            e > B && d < B ? (h = h.concat(["L", a + v * m(E) + q, f + g * n(E) + A]), h = h.concat(p(a, f, v, g, E, B, q, A)), h = h.concat(["L", a + v * m(B), f + g * n(B)]), h = h.concat(p(a, f, v, g, B, e, 0, 0)), h = h.concat(["L", a + v * m(e) + q, f + g * n(e) + A]), h = h.concat(p(a, f, v, g, e, B, q, A)), h = h.concat(["L", a + v * m(B), f + g * n(B)]), h = h.concat(p(a, f, v, g, B, E, 0, 0))) : e > u - k && d < u - k && (h = h.concat(["L",
                a + v * Math.cos(E) + q, f + g * Math.sin(E) + A]), h = h.concat(p(a, f, v, g, E, e, q, A)), h = h.concat(["L", a + v * Math.cos(e), f + g * Math.sin(e)]), h = h.concat(p(a, f, v, g, e, E, 0, 0)));
            h = h.concat(["L", a + v * Math.cos(E) + q, f + g * Math.sin(E) + A]);
            h = h.concat(p(a, f, v, g, E, G, q, A));
            h = h.concat(["Z"]);
            k = ["M", a + t * y, f + C * r];
            k = k.concat(p(a, f, t, C, d, e, 0, 0));
            k = k.concat(["L", a + t * Math.cos(e) + q, f + C * Math.sin(e) + A]);
            k = k.concat(p(a, f, t, C, e, d, q, A));
            k = k.concat(["Z"]);
            y = ["M", a + v * y, f + g * r, "L", a + v * y + q, f + g * r + A, "L", a + t * y + q, f + C * r + A, "L", a + t * y, f + C * r, "Z"];
            a = ["M", a + v * b,
                f + g * z, "L", a + v * b + q, f + g * z + A, "L", a + t * b + q, f + C * z + A, "L", a + t * b, f + C * z, "Z"];
            z = Math.atan2(A, -q);
            f = Math.abs(e + z);
            b = Math.abs(d + z);
            d = Math.abs((d + e) / 2 + z);
            f = c(f);
            b = c(b);
            d = c(d);
            d *= 1E5;
            e = 1E5 * b;
            f *= 1E5;
            return {
                top: w,
                zTop: 1E5 * Math.PI + 1,
                out: h,
                zOut: Math.max(d, e, f),
                inn: k,
                zInn: Math.max(d, e, f),
                side1: y,
                zSide1: .99 * f,
                side2: a,
                zSide2: .99 * e
            }
        }
    })(F);
    (function (a) {
        function r(a, d) {
            var e = a.plotLeft, c = a.plotWidth + e, b = a.plotTop, f = a.plotHeight + b, g = e + a.plotWidth / 2, h = b + a.plotHeight / 2, q = Number.MAX_VALUE, k = -Number.MAX_VALUE, n = Number.MAX_VALUE,
                m = -Number.MAX_VALUE, r, t = 1;
            r = [{x: e, y: b, z: 0}, {x: e, y: b, z: d}];
            p([0, 1], function (b) {
                r.push({x: c, y: r[b].y, z: r[b].z})
            });
            p([0, 1, 2, 3], function (b) {
                r.push({x: r[b].x, y: f, z: r[b].z})
            });
            r = u(r, a, !1);
            p(r, function (b) {
                q = Math.min(q, b.x);
                k = Math.max(k, b.x);
                n = Math.min(n, b.y);
                m = Math.max(m, b.y)
            });
            e > q && (t = Math.min(t, 1 - Math.abs((e + g) / (q + g)) % 1));
            c < k && (t = Math.min(t, (c - g) / (k - g)));
            b > n && (t = 0 > n ? Math.min(t, (b + h) / (-n + b + h)) : Math.min(t, 1 - (b + h) / (n + h) % 1));
            f < m && (t = Math.min(t, Math.abs((f - h) / (m - h))));
            return t
        }

        var k = a.Chart, p = a.each, m = a.merge,
            u = a.perspective, n = a.pick, g = a.wrap;
        k.prototype.is3d = function () {
            return this.options.chart.options3d && this.options.chart.options3d.enabled
        };
        k.prototype.propsRequireDirtyBox.push("chart.options3d");
        k.prototype.propsRequireUpdateSeries.push("chart.options3d");
        a.wrap(a.Chart.prototype, "isInsidePlot", function (a) {
            return this.is3d() || a.apply(this, [].slice.call(arguments, 1))
        });
        var h = a.getOptions();
        m(!0, h, {
            chart: {
                options3d: {
                    enabled: !1, alpha: 0, beta: 0, depth: 100, fitToPlot: !0, viewDistance: 25, frame: {
                        bottom: {size: 1},
                        side: {size: 1}, back: {size: 1}
                    }
                }
            }
        });
        g(k.prototype, "setClassName", function (a) {
            a.apply(this, [].slice.call(arguments, 1));
            this.is3d() && (this.container.className += " highcharts-3d-chart")
        });
        a.wrap(a.Chart.prototype, "setChartSize", function (a) {
            var d = this.options.chart.options3d;
            a.apply(this, [].slice.call(arguments, 1));
            if (this.is3d()) {
                var e = this.inverted, c = this.clipBox, b = this.margin;
                c[e ? "y" : "x"] = -(b[3] || 0);
                c[e ? "x" : "y"] = -(b[0] || 0);
                c[e ? "height" : "width"] = this.chartWidth + (b[3] || 0) + (b[1] || 0);
                c[e ? "width" : "height"] =
                    this.chartHeight + (b[0] || 0) + (b[2] || 0);
                this.scale3d = 1;
                !0 === d.fitToPlot && (this.scale3d = r(this, d.depth))
            }
        });
        g(k.prototype, "redraw", function (a) {
            this.is3d() && (this.isDirtyBox = !0);
            a.apply(this, [].slice.call(arguments, 1))
        });
        g(k.prototype, "renderSeries", function (a) {
            var d = this.series.length;
            if (this.is3d())for (; d--;)a = this.series[d], a.translate(), a.render(); else a.call(this)
        });
        k.prototype.retrieveStacks = function (a) {
            var d = this.series, e = {}, c, b = 1;
            p(this.series, function (f) {
                c = n(f.options.stack, a ? 0 : d.length - 1 - f.index);
                e[c] ? e[c].series.push(f) : (e[c] = {series: [f], position: b}, b++)
            });
            e.totalStacks = b + 1;
            return e
        }
    })(F);
    (function (a) {
        var r, k = a.Axis, p = a.Chart, m = a.each, u = a.extend, n = a.merge, g = a.perspective, h = a.pick, q = a.splat, d = a.Tick, e = a.wrap;
        e(k.prototype, "setOptions", function (a, b) {
            a.call(this, b);
            this.chart.is3d() && "colorAxis" !== this.coll && (a = this.options, a.tickWidth = h(a.tickWidth, 0), a.gridLineWidth = h(a.gridLineWidth, 1))
        });
        e(k.prototype, "render", function (a) {
            a.apply(this, [].slice.call(arguments, 1));
            if (this.chart.is3d() && "colorAxis" !==
                this.coll) {
                var b = this.chart, f = b.renderer, c = b.options.chart.options3d, d = c.frame, e = d.bottom, g = d.back, d = d.side, h = c.depth, k = this.height, q = this.width, n = this.left, m = this.top;
                this.isZAxis || (this.horiz ? (g = {
                    x: n,
                    y: m + (b.xAxis[0].opposite ? -e.size : k),
                    z: 0,
                    width: q,
                    height: e.size,
                    depth: h,
                    insidePlotArea: !1
                }, this.bottomFrame ? this.bottomFrame.animate(g) : (this.bottomFrame = f.cuboid(g).attr({
                    "class": "highcharts-3d-frame highcharts-3d-frame-bottom",
                    zIndex: b.yAxis[0].reversed && 0 < c.alpha ? 4 : -1
                }).add(), this.bottomFrame.attr({
                    fill: e.color ||
                    "none", stroke: e.color || "none"
                }))) : (c = {
                    x: n + (b.yAxis[0].opposite ? 0 : -d.size),
                    y: m + (b.xAxis[0].opposite ? -e.size : 0),
                    z: h,
                    width: q + d.size,
                    height: k + e.size,
                    depth: g.size,
                    insidePlotArea: !1
                }, this.backFrame ? this.backFrame.animate(c) : (this.backFrame = f.cuboid(c).attr({
                    "class": "highcharts-3d-frame highcharts-3d-frame-back",
                    zIndex: -3
                }).add(), this.backFrame.attr({fill: g.color || "none", stroke: g.color || "none"})), b = {
                    x: n + (b.yAxis[0].opposite ? q : -d.size),
                    y: m + (b.xAxis[0].opposite ? -e.size : 0),
                    z: 0,
                    width: d.size,
                    height: k + e.size,
                    depth: h,
                    insidePlotArea: !1
                }, this.sideFrame ? this.sideFrame.animate(b) : (this.sideFrame = f.cuboid(b).attr({
                    "class": "highcharts-3d-frame highcharts-3d-frame-side",
                    zIndex: -2
                }).add(), this.sideFrame.attr({fill: d.color || "none", stroke: d.color || "none"}))))
            }
        });
        e(k.prototype, "getPlotLinePath", function (a) {
            var b = a.apply(this, [].slice.call(arguments, 1));
            if (!this.chart.is3d() || "colorAxis" === this.coll || null === b)return b;
            var f = this.chart, c = f.options.chart.options3d, f = this.isZAxis ? f.plotWidth : c.depth, c = this.opposite;
            this.horiz && (c = !c);
            b = [this.swapZ({x: b[1], y: b[2], z: c ? f : 0}), this.swapZ({
                x: b[1],
                y: b[2],
                z: f
            }), this.swapZ({x: b[4], y: b[5], z: f}), this.swapZ({x: b[4], y: b[5], z: c ? 0 : f})];
            b = g(b, this.chart, !1);
            return b = this.chart.renderer.toLinePath(b, !1)
        });
        e(k.prototype, "getLinePath", function (a) {
            return this.chart.is3d() ? [] : a.apply(this, [].slice.call(arguments, 1))
        });
        e(k.prototype, "getPlotBandPath", function (a) {
            if (!this.chart.is3d() || "colorAxis" === this.coll)return a.apply(this, [].slice.call(arguments, 1));
            var b = arguments, c = b[1],
                b = this.getPlotLinePath(b[2]);
            (c = this.getPlotLinePath(c)) && b ? c.push("L", b[10], b[11], "L", b[7], b[8], "L", b[4], b[5], "L", b[1], b[2]) : c = null;
            return c
        });
        e(d.prototype, "getMarkPath", function (a) {
            var b = a.apply(this, [].slice.call(arguments, 1));
            if (!this.axis.chart.is3d() || "colorAxis" === this.coll)return b;
            b = [this.axis.swapZ({x: b[1], y: b[2], z: 0}), this.axis.swapZ({x: b[4], y: b[5], z: 0})];
            b = g(b, this.axis.chart, !1);
            return b = ["M", b[0].x, b[0].y, "L", b[1].x, b[1].y]
        });
        e(d.prototype, "getLabelPosition", function (a) {
            var b = a.apply(this,
                [].slice.call(arguments, 1));
            this.axis.chart.is3d() && "colorAxis" !== this.coll && (b = g([this.axis.swapZ({
                x: b.x,
                y: b.y,
                z: 0
            })], this.axis.chart, !1)[0]);
            return b
        });
        a.wrap(k.prototype, "getTitlePosition", function (a) {
            var b = this.chart.is3d() && "colorAxis" !== this.coll, c, d;
            b && (d = this.axisTitleMargin, this.axisTitleMargin = 0);
            c = a.apply(this, [].slice.call(arguments, 1));
            b && (c = g([this.swapZ({
                x: c.x,
                y: c.y,
                z: 0
            })], this.chart, !1)[0], c[this.horiz ? "y" : "x"] += (this.horiz ? 1 : -1) * (this.opposite ? -1 : 1) * d, this.axisTitleMargin = d);
            return c
        });
        e(k.prototype, "drawCrosshair", function (a) {
            var b = arguments;
            this.chart.is3d() && b[2] && (b[2] = {
                plotX: b[2].plotXold || b[2].plotX,
                plotY: b[2].plotYold || b[2].plotY
            });
            a.apply(this, [].slice.call(b, 1))
        });
        e(k.prototype, "destroy", function (a) {
            m(["backFrame", "bottomFrame", "sideFrame"], function (b) {
                this[b] && (this[b] = this[b].destroy())
            }, this);
            a.apply(this, [].slice.call(arguments, 1))
        });
        k.prototype.swapZ = function (a, b) {
            if (this.isZAxis) {
                b = b ? 0 : this.chart.plotLeft;
                var c = this.chart;
                return {
                    x: b + (c.yAxis[0].opposite ? a.z : c.xAxis[0].width -
                    a.z), y: a.y, z: a.x - b
                }
            }
            return a
        };
        r = a.ZAxis = function () {
            this.init.apply(this, arguments)
        };
        u(r.prototype, k.prototype);
        u(r.prototype, {
            isZAxis: !0, setOptions: function (a) {
                a = n({offset: 0, lineWidth: 0}, a);
                k.prototype.setOptions.call(this, a);
                this.coll = "zAxis"
            }, setAxisSize: function () {
                k.prototype.setAxisSize.call(this);
                this.width = this.len = this.chart.options.chart.options3d.depth;
                this.right = this.chart.chartWidth - this.width - this.left
            }, getSeriesExtremes: function () {
                var a = this, b = a.chart;
                a.hasVisibleSeries = !1;
                a.dataMin =
                    a.dataMax = a.ignoreMinPadding = a.ignoreMaxPadding = null;
                a.buildStacks && a.buildStacks();
                m(a.series, function (c) {
                    if (c.visible || !b.options.chart.ignoreHiddenSeries)a.hasVisibleSeries = !0, c = c.zData, c.length && (a.dataMin = Math.min(h(a.dataMin, c[0]), Math.min.apply(null, c)), a.dataMax = Math.max(h(a.dataMax, c[0]), Math.max.apply(null, c)))
                })
            }
        });
        e(p.prototype, "getAxes", function (a) {
            var b = this, c = this.options, c = c.zAxis = q(c.zAxis || {});
            a.call(this);
            b.is3d() && (this.zAxis = [], m(c, function (a, c) {
                a.index = c;
                a.isX = !0;
                (new r(b, a)).setScale()
            }))
        })
    })(F);
    (function (a) {
        function r(a) {
            var d = a.apply(this, [].slice.call(arguments, 1));
            this.chart.is3d() && (d.stroke = this.options.edgeColor || d.fill, d["stroke-width"] = u(this.options.edgeWidth, 1));
            return d
        }

        function k(a) {
            if (this.chart.is3d()) {
                var d = this.chart.options.plotOptions.column.grouping;
                void 0 === d || d || void 0 === this.group.zIndex || this.zIndexSet || (this.group.attr({zIndex: 10 * this.group.zIndex}), this.zIndexSet = !0)
            }
            a.apply(this, [].slice.call(arguments, 1))
        }

        var p = a.each, m = a.perspective, u = a.pick, n = a.Series, g = a.seriesTypes,
            h = a.svg;
        a = a.wrap;
        a(g.column.prototype, "translate", function (a) {
            a.apply(this, [].slice.call(arguments, 1));
            if (this.chart.is3d()) {
                var d = this.chart, e = this.options, c = e.depth || 25, b = (e.stacking ? e.stack || 0 : this._i) * (c + (e.groupZPadding || 1));
                !1 !== e.grouping && (b = 0);
                b += e.groupZPadding || 1;
                p(this.data, function (a) {
                    if (null !== a.y) {
                        var f = a.shapeArgs, e = a.tooltipPos;
                        a.shapeType = "cuboid";
                        f.z = b;
                        f.depth = c;
                        f.insidePlotArea = !0;
                        e = m([{x: e[0], y: e[1], z: b}], d, !0)[0];
                        a.tooltipPos = [e.x, e.y]
                    }
                });
                this.z = b
            }
        });
        a(g.column.prototype, "animate",
            function (a) {
                if (this.chart.is3d()) {
                    var d = arguments[1], e = this.yAxis, c = this, b = this.yAxis.reversed;
                    h && (d ? p(c.data, function (a) {
                        null !== a.y && (a.height = a.shapeArgs.height, a.shapey = a.shapeArgs.y, a.shapeArgs.height = 1, b || (a.shapeArgs.y = a.stackY ? a.plotY + e.translate(a.stackY) : a.plotY + (a.negative ? -a.height : a.height)))
                    }) : (p(c.data, function (a) {
                        null !== a.y && (a.shapeArgs.height = a.height, a.shapeArgs.y = a.shapey, a.graphic && a.graphic.animate(a.shapeArgs, c.options.animation))
                    }), this.drawDataLabels(), c.animate = null))
                } else a.apply(this,
                    [].slice.call(arguments, 1))
            });
        a(g.column.prototype, "init", function (a) {
            a.apply(this, [].slice.call(arguments, 1));
            if (this.chart.is3d()) {
                var d = this.options, e = d.grouping, c = d.stacking, b = u(this.yAxis.options.reversedStacks, !0), f = 0;
                if (void 0 === e || e) {
                    e = this.chart.retrieveStacks(c);
                    f = d.stack || 0;
                    for (c = 0; c < e[f].series.length && e[f].series[c] !== this; c++);
                    f = 10 * (e.totalStacks - e[f].position) + (b ? c : -c);
                    this.xAxis.reversed || (f = 10 * e.totalStacks - f)
                }
                d.zIndex = f
            }
        });
        a(g.column.prototype, "pointAttribs", r);
        g.columnrange && a(g.columnrange.prototype,
            "pointAttribs", r);
        a(n.prototype, "alignDataLabel", function (a) {
            if (this.chart.is3d() && ("column" === this.type || "columnrange" === this.type)) {
                var d = arguments[4], e = {x: d.x, y: d.y, z: this.z}, e = m([e], this.chart, !0)[0];
                d.x = e.x;
                d.y = e.y
            }
            a.apply(this, [].slice.call(arguments, 1))
        });
        g.columnrange && a(g.columnrange.prototype, "drawPoints", k);
        a(g.column.prototype, "drawPoints", k)
    })(F);
    (function (a) {
        var r = a.deg2rad, k = a.each, p = a.pick, m = a.seriesTypes, u = a.svg;
        a = a.wrap;
        a(m.pie.prototype, "translate", function (a) {
            a.apply(this, [].slice.call(arguments,
                1));
            if (this.chart.is3d()) {
                var g = this, h = g.options, n = h.depth || 0, d = g.chart.options.chart.options3d, e = d.alpha, c = d.beta, b = h.stacking ? (h.stack || 0) * n : g._i * n, b = b + n / 2;
                !1 !== h.grouping && (b = 0);
                k(g.data, function (a) {
                    var d = a.shapeArgs;
                    a.shapeType = "arc3d";
                    d.z = b;
                    d.depth = .75 * n;
                    d.alpha = e;
                    d.beta = c;
                    d.center = g.center;
                    d = (d.end + d.start) / 2;
                    a.slicedTranslation = {
                        translateX: Math.round(Math.cos(d) * h.slicedOffset * Math.cos(e * r)),
                        translateY: Math.round(Math.sin(d) * h.slicedOffset * Math.cos(e * r))
                    }
                })
            }
        });
        a(m.pie.prototype.pointClass.prototype,
            "haloPath", function (a) {
                var g = arguments;
                return this.series.chart.is3d() ? [] : a.call(this, g[1])
            });
        a(m.pie.prototype, "pointAttribs", function (a, g, h) {
            a = a.call(this, g, h);
            h = this.options;
            this.chart.is3d() && (a.stroke = h.edgeColor || g.color || this.color, a["stroke-width"] = p(h.edgeWidth, 1));
            return a
        });
        a(m.pie.prototype, "drawPoints", function (a) {
            a.apply(this, [].slice.call(arguments, 1));
            this.chart.is3d() && k(this.points, function (a) {
                var g = a.graphic;
                if (g)g[a.y && a.visible ? "show" : "hide"]()
            })
        });
        a(m.pie.prototype, "drawDataLabels",
            function (a) {
                if (this.chart.is3d()) {
                    var g = this.chart.options.chart.options3d;
                    k(this.data, function (a) {
                        var h = a.shapeArgs, d = h.r, e = (h.start + h.end) / 2, c = a.labelPos, b = -d * (1 - Math.cos((h.alpha || g.alpha) * r)) * Math.sin(e), f = d * (Math.cos((h.beta || g.beta) * r) - 1) * Math.cos(e);
                        k([0, 2, 4], function (a) {
                            c[a] += f;
                            c[a + 1] += b
                        })
                    })
                }
                a.apply(this, [].slice.call(arguments, 1))
            });
        a(m.pie.prototype, "addPoint", function (a) {
            a.apply(this, [].slice.call(arguments, 1));
            this.chart.is3d() && this.update(this.userOptions, !0)
        });
        a(m.pie.prototype, "animate",
            function (a) {
                if (this.chart.is3d()) {
                    var g = arguments[1], h = this.options.animation, k = this.center, d = this.group, e = this.markerGroup;
                    u && (!0 === h && (h = {}), g ? (d.oldtranslateX = d.translateX, d.oldtranslateY = d.translateY, g = {
                        translateX: k[0],
                        translateY: k[1],
                        scaleX: .001,
                        scaleY: .001
                    }, d.attr(g), e && (e.attrSetters = d.attrSetters, e.attr(g))) : (g = {
                        translateX: d.oldtranslateX,
                        translateY: d.oldtranslateY,
                        scaleX: 1,
                        scaleY: 1
                    }, d.animate(g, h), e && e.animate(g, h), this.animate = null))
                } else a.apply(this, [].slice.call(arguments, 1))
            })
    })(F);
    (function (a) {
        var r = a.perspective, k = a.pick, p = a.Point, m = a.seriesTypes, u = a.wrap;
        u(m.scatter.prototype, "translate", function (a) {
            a.apply(this, [].slice.call(arguments, 1));
            if (this.chart.is3d()) {
                var g = this.chart, h = k(this.zAxis, g.options.zAxis[0]), m = [], d, e, c;
                for (c = 0; c < this.data.length; c++)d = this.data[c], e = h.isLog && h.val2lin ? h.val2lin(d.z) : d.z, d.plotZ = h.translate(e), d.isInside = d.isInside ? e >= h.min && e <= h.max : !1, m.push({
                    x: d.plotX,
                    y: d.plotY,
                    z: d.plotZ
                });
                g = r(m, g, !0);
                for (c = 0; c < this.data.length; c++)d = this.data[c], h =
                    g[c], d.plotXold = d.plotX, d.plotYold = d.plotY, d.plotZold = d.plotZ, d.plotX = h.x, d.plotY = h.y, d.plotZ = h.z
            }
        });
        u(m.scatter.prototype, "init", function (a, g, h) {
            g.is3d() && (this.axisTypes = ["xAxis", "yAxis", "zAxis"], this.pointArrayMap = ["x", "y", "z"], this.parallelArrays = ["x", "y", "z"], this.directTouch = !0);
            a = a.apply(this, [g, h]);
            this.chart.is3d() && (this.tooltipOptions.pointFormat = this.userOptions.tooltip ? this.userOptions.tooltip.pointFormat || "x: \x3cb\x3e{point.x}\x3c/b\x3e\x3cbr/\x3ey: \x3cb\x3e{point.y}\x3c/b\x3e\x3cbr/\x3ez: \x3cb\x3e{point.z}\x3c/b\x3e\x3cbr/\x3e" :
                "x: \x3cb\x3e{point.x}\x3c/b\x3e\x3cbr/\x3ey: \x3cb\x3e{point.y}\x3c/b\x3e\x3cbr/\x3ez: \x3cb\x3e{point.z}\x3c/b\x3e\x3cbr/\x3e");
            return a
        });
        u(m.scatter.prototype, "pointAttribs", function (k, g) {
            var h = k.apply(this, [].slice.call(arguments, 1));
            this.chart.is3d() && g && (h.zIndex = a.pointCameraDistance(g, this.chart));
            return h
        });
        u(p.prototype, "applyOptions", function (a) {
            var g = a.apply(this, [].slice.call(arguments, 1));
            this.series.chart.is3d() && void 0 === g.z && (g.z = 0);
            return g
        })
    })(F);
    (function (a) {
        var r = a.Axis, k = a.SVGRenderer,
            p = a.VMLRenderer;
        p && (a.setOptions({animate: !1}), p.prototype.cuboid = k.prototype.cuboid, p.prototype.cuboidPath = k.prototype.cuboidPath, p.prototype.toLinePath = k.prototype.toLinePath, p.prototype.createElement3D = k.prototype.createElement3D, p.prototype.arc3d = function (a) {
            a = k.prototype.arc3d.call(this, a);
            a.css({zIndex: a.zIndex});
            return a
        }, a.VMLRenderer.prototype.arc3dPath = a.SVGRenderer.prototype.arc3dPath, a.wrap(r.prototype, "render", function (a) {
            a.apply(this, [].slice.call(arguments, 1));
            this.sideFrame && (this.sideFrame.css({zIndex: 0}),
                this.sideFrame.front.attr({fill: this.sideFrame.color}));
            this.bottomFrame && (this.bottomFrame.css({zIndex: 1}), this.bottomFrame.front.attr({fill: this.bottomFrame.color}));
            this.backFrame && (this.backFrame.css({zIndex: 0}), this.backFrame.front.attr({fill: this.backFrame.color}))
        }))
    })(F)
});
