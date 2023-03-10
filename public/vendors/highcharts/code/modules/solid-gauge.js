/*
 Highcharts JS v5.0.9 (2017-03-08)
 Solid angular gauge module

 (c) 2010-2016 Torstein Honsi

 License: www.highcharts.com/license
 */
(function (l) {
    "object" === typeof module && module.exports ? module.exports = l : l(Highcharts)
})(function (l) {
    (function (f) {
        var l = f.pInt, u = f.pick, m = f.each, v = f.isNumber, w = f.wrap, n;
        w(f.Renderer.prototype.symbols, "arc", function (a, d, e, c, f, g) {
            a = a(d, e, c, f, g);
            g.rounded && (c = ((g.r || c) - g.innerR) / 2, g = ["A", c, c, 0, 1, 1, a[12], a[13]], a.splice.apply(a, [a.length - 1, 0].concat(["A", c, c, 0, 1, 1, a[1], a[2]])), a.splice.apply(a, [11, 3].concat(g)));
            return a
        });
        n = {
            initDataClasses: function (a) {
                var d = this, e = this.chart, c, t = 0, g = this.options;
                this.dataClasses =
                    c = [];
                m(a.dataClasses, function (h, b) {
                    h = f.merge(h);
                    c.push(h);
                    h.color || ("category" === g.dataClassColor ? (b = e.options.colors, h.color = b[t++], t === b.length && (t = 0)) : h.color = d.tweenColors(f.color(g.minColor), f.color(g.maxColor), b / (a.dataClasses.length - 1)))
                })
            }, initStops: function (a) {
                this.stops = a.stops || [[0, this.options.minColor], [1, this.options.maxColor]];
                m(this.stops, function (a) {
                    a.color = f.color(a[1])
                })
            }, toColor: function (a, d) {
                var e = this.stops, c, f, g = this.dataClasses, h, b;
                if (g)for (b = g.length; b--;) {
                    if (h = g[b], c = h.from,
                            e = h.to, (void 0 === c || a >= c) && (void 0 === e || a <= e)) {
                        f = h.color;
                        d && (d.dataClass = b);
                        break
                    }
                } else {
                    this.isLog && (a = this.val2lin(a));
                    a = 1 - (this.max - a) / (this.max - this.min);
                    for (b = e.length; b-- && !(a > e[b][0]););
                    c = e[b] || e[b + 1];
                    e = e[b + 1] || c;
                    a = 1 - (e[0] - a) / (e[0] - c[0] || 1);
                    f = this.tweenColors(c.color, e.color, a)
                }
                return f
            }, tweenColors: function (a, d, e) {
                var c;
                d.rgba.length && a.rgba.length ? (a = a.rgba, d = d.rgba, c = 1 !== d[3] || 1 !== a[3], a = (c ? "rgba(" : "rgb(") + Math.round(d[0] + (a[0] - d[0]) * (1 - e)) + "," + Math.round(d[1] + (a[1] - d[1]) * (1 - e)) + "," + Math.round(d[2] +
                        (a[2] - d[2]) * (1 - e)) + (c ? "," + (d[3] + (a[3] - d[3]) * (1 - e)) : "") + ")") : a = d.input || "none";
                return a
            }
        };
        m(["fill", "stroke"], function (a) {
            f.Fx.prototype[a + "Setter"] = function () {
                this.elem.attr(a, n.tweenColors(f.color(this.start), f.color(this.end), this.pos), null, !0)
            }
        });
        f.seriesType("solidgauge", "gauge", {colorByPoint: !0}, {
            translate: function () {
                var a = this.yAxis;
                f.extend(a, n);
                !a.dataClasses && a.options.dataClasses && a.initDataClasses(a.options);
                a.initStops(a.options);
                f.seriesTypes.gauge.prototype.translate.call(this)
            }, drawPoints: function () {
                var a =
                    this, d = a.yAxis, e = d.center, c = a.options, t = a.chart.renderer, g = c.overshoot, h = v(g) ? g / 180 * Math.PI : 0, b;
                v(c.threshold) && (b = d.startAngleRad + d.translate(c.threshold, null, null, null, !0));
                this.thresholdAngleRad = u(b, d.startAngleRad);
                m(a.points, function (b) {
                    var g = b.graphic, k = d.startAngleRad + d.translate(b.y, null, null, null, !0), m = l(u(b.options.radius, c.radius, 100)) * e[2] / 200, p = l(u(b.options.innerRadius, c.innerRadius, 60)) * e[2] / 200, q = d.toColor(b.y, b), r = Math.min(d.startAngleRad, d.endAngleRad), n = Math.max(d.startAngleRad,
                        d.endAngleRad);
                    "none" === q && (q = b.color || a.color || "none");
                    "none" !== q && (b.color = q);
                    k = Math.max(r - h, Math.min(n + h, k));
                    !1 === c.wrap && (k = Math.max(r, Math.min(n, k)));
                    r = Math.min(k, a.thresholdAngleRad);
                    k = Math.max(k, a.thresholdAngleRad);
                    k - r > 2 * Math.PI && (k = r + 2 * Math.PI);
                    b.shapeArgs = p = {x: e[0], y: e[1], r: m, innerR: p, start: r, end: k, rounded: c.rounded};
                    b.startR = m;
                    g ? (b = p.d, g.animate(f.extend({fill: q}, p)), b && (p.d = b)) : (b.graphic = t.arc(p).addClass("highcharts-point").attr({
                        fill: q,
                        "sweep-flag": 0
                    }).add(a.group), "square" !== c.linecap &&
                    b.graphic.attr({
                        "stroke-linecap": "round",
                        "stroke-linejoin": "round"
                    }), b.graphic.attr({stroke: c.borderColor || "none", "stroke-width": c.borderWidth || 0}))
                })
            }, animate: function (a) {
                a || (this.startAngleRad = this.thresholdAngleRad, f.seriesTypes.pie.prototype.animate.call(this, a))
            }
        })
    })(l)
});
