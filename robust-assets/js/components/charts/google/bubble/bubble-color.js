function drawBubbleColor(){var a=google.visualization.arrayToDataTable([["ID","X","Y","Temperature"],["",80,167,120],["",79,136,130],["",78,184,50],["",72,278,230],["",81,200,210],["",72,170,100],["",68,477,80]]),b={height:450,fontSize:12,colorAxis:{colors:["#FECEA8","#F6BB42"]},chartArea:{left:"5%",width:"90%",height:400},vAxis:{gridlines:{color:"#e9e9e9",count:10},minValue:0},bubble:{textStyle:{auraColor:"none",color:"#fff"},stroke:"#fff"},legend:{position:"top",alignment:"center",textStyle:{fontSize:12}}},c=new google.visualization.BubbleChart(document.getElementById("bubble-color-chart"));c.draw(a,b)}google.load("visualization","1.0",{packages:["corechart"]}),google.setOnLoadCallback(drawBubbleColor),$(function(){function a(){drawBubbleColor()}$(window).on("resize",a),$(".menu-toggle").on("click",a)});