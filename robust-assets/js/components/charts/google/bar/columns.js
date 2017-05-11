function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Target", "Acheived"],["Enquiry",5000,3500], ["Dryer", 1000,250],["chiller", 1000,450],["cooler", 1000,1100],["Var Products", 1000,500],["Small Products", 2000,2150],["Campaign", 200,120]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#673ab7",
        "#e91e63"],
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
    c=new google.visualization.ColumnChart(document.getElementById("columns-charts"));
    c.draw(a, b)
}

google.load("visualization", "1.0", {
    packages: ["corechart"]
}

),
google.setOnLoadCallback(drawColumn),
$(function() {
    function a() {
        drawColumn()
    }
    $(window).on("resize", a), $(".menu-toggle").on("click", a)
}

);