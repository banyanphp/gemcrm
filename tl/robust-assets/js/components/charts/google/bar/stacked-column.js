function drawColumnStacked() {
    var a=google.visualization.arrayToDataTable([["Western","Dryer","Chiller", "Cooler", "Other Products", {
        role: "annotation"
    }
    ], ["Team A", 10, 15, 25, 35,""], ["Team B", 12, 20, 25, 32,""], ["Team C", 5, 24, 20, 34,""],["Team D", 18, 25, 30, 25,""]]),
        
        
    b= {
        height:400,
        fontSize:12,
        colors:["#99B898",
        "#FECEA8",
        "#FF847C",
        "#E84A5F",
        "#474747"],
        chartArea: {
            left: "5%", width: "90%", height: 350
        }
        ,
        vAxis: {
            gridlines: {
                color: "#e9e9e9", count: 10
            }
            ,
            minValue:0
        }
        ,
        legend: {
            position:"top",
            alignment:"center",
            textStyle: {
                fontSize: 12
            }
        }
    }
    ,
    c=new google.visualization.ColumnChart(document.getElementById("stacked-column-chart"));
    c.draw(a, b)
}

google.load("visualization", "1.0", {
    packages: ["corechart"]
}

),
google.setOnLoadCallback(drawColumnStacked),
$(function() {
    function a() {
        drawColumnStacked()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
}

);