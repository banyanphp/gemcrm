function drawColumn() {
    var a=google.visualization.arrayToDataTable([["Year", "Targetyear", "Acheivedyear","DTT","DTA"], ["Team A",7,5,1,1],["Team B",10,6,1,2],["Team C",4,5,1,0],["Team D",8,5,2,1]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#2494be",
        "#F6B75A","#581845","#daf7a6"],
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
    c=new google.visualization.ColumnChart(document.getElementById("column-chartS"));
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