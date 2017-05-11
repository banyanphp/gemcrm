






<script>
function drawColumn(<?php ?>) {

    var a=google.visualization.arrayToDataTable([["Year", "Target / year", "Acheived / year","Upto Current Year","MTT","MTA","DTT","DTA"], ["2017-2018",100,25,29,23,25,2,1]]),
    b= {
        height:400,
        fontSize:12,
        colors:["#00b8ac",
        "#ff5733","#c70239","#c72139","#900c3f","#581845","#daf7a6"],
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
    c=new google.visualization.ColumnChart(document.getElementById("column-chart"));
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
<script>