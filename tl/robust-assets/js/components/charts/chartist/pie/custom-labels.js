$(window).on("load", function() {
    var a= {
        labels: ["Completed Enquiry ", "Dropped Enquiry", "Process Enquiry"], series: [20, 15, 40]
    }
    , b= {
        labelInterpolationFnc:function(a) {
            return a[0]
        }
    }
    , c=[["screen and (min-width: 640px)", {
        chartPadding:30, labelOffset:100, labelDirection:"explode", labelInterpolationFnc:function(a) {
            return a
        }
    }
    ], ["screen and (min-width: 1024px)", {
        labelOffset: 70, chartPadding: 10
    }
    ]];
    new Chartist.Pie("#pie-custom-labels", a, b, c)
}

);