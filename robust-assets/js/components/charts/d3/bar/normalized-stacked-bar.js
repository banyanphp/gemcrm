$(window).on("load", function() {
    function a() {
        d = b.node().getBoundingClientRect().width - c.left - c.right, k.attr("width", d + c.left + c.right), l.attr("width", d + c.left + c.right), f.rangeRoundBands([0, d], .1), l.selectAll(".d3-xaxis").call(i), l.selectAll(".state").attr("transform", function(a) {
            return "translate(" + f(a.State) + ",0)"
        }), l.selectAll(".d3-bar").attr("width", f.rangeBand()).attr("x", function(a) {
            return f(a.name)
        }), l.selectAll(".d3-legend text").attr("x", d - 24), l.selectAll(".d3-legend rect").attr("x", d - 18)
    }
    var b = d3.select("#normalized-stacked"),
        c = {
            top: 20,
            right: 20,
            bottom: 30,
            left: 50
        },
        d = b.node().getBoundingClientRect().width - c.left - c.right,
        e = 500 - c.top - c.bottom,
        f = d3.scale.ordinal().rangeRoundBands([0, d], .1),
        g = d3.scale.linear().rangeRound([e, 0]),
        h = d3.scale.ordinal().range(["#99B898", "#C7C29F", "#FECEA8", "#FEAC94", "#FF847C", "#F56A6F", "#E84A5F"]),
        i = d3.svg.axis().scale(f).orient("bottom"),
        j = d3.svg.axis().scale(g).orient("left").tickFormat(d3.format(".0%")),
        k = b.append("svg"),
        l = k.attr("width", d + c.left + c.right).attr("height", e + c.top + c.bottom).append("g").attr("transform", "translate(" + c.left + "," + c.top + ")");
    d3.csv("robust-assets/demo-data/d3/bar/normalized-stacked-bar.csv", function(a, b) {
        if (a) throw a;
        h.domain(d3.keys(b[0]).filter(function(a) {
            return "State" !== a
        })), b.forEach(function(a) {
            var b = 0;
            a.ages = h.domain().map(function(c) {
                return {
                    name: c,
                    y0: b,
                    y1: b += +a[c]
                }
            }), a.ages.forEach(function(a) {
                a.y0 /= b, a.y1 /= b
            })
        }), b.sort(function(a, b) {
            return b.ages[0].y1 - a.ages[0].y1
        }), f.domain(b.map(function(a) {
            return a.State
        })), l.append("g").attr("class", "d3-axis d3-xaxis").attr("transform", "translate(0," + e + ")").call(i), l.append("g").attr("class", "d3-axis d3-yaxis").call(j);
        var c = l.selectAll(".state").data(b).enter().append("g").attr("class", "state").attr("transform", function(a) {
            return "translate(" + f(a.State) + ",0)"
        });
        c.selectAll(".d3-bar").data(function(a) {
            return a.ages
        }).enter().append("rect").attr("class", "d3-bar").attr("width", f.rangeBand()).attr("y", function(a) {
            return g(a.y1)
        }).attr("height", function(a) {
            return g(a.y0) - g(a.y1)
        }).style("fill", function(a) {
            return h(a.name)
        });
        var d = l.select(".state:last-child").selectAll(".d3-legend").data(function(a) {
            return a.ages
        }).enter().append("g").attr("class", "d3-legend").attr("transform", function(a) {
            return "translate(" + f.rangeBand() / 2 + "," + g((a.y0 + a.y1) / 2) + ")"
        });
        d.append("line").attr("x2", 10), d.append("text").attr("x", 13).attr("dy", ".35em").text(function(a) {
            return a.name
        })
    }), $(window).on("resize", a), $(".menu-toggle").on("click", a)
});