$(window).on("load",function(){var a=c3.generate({bindto:"#data-order",size:{height:400},color:{pattern:["#99B898","#FECEA8","#FF847C","#E84A5F","#2A363B"]},data:{columns:[["data1",130,200,320,400,530,750],["data2",-130,10,130,200,150,250],["data3",-130,-50,-10,-200,-250,-150]],type:"bar",groups:[["data1","data2","data3"]],order:"desc"},grid:{x:{show:!0}}});setTimeout(function(){a.load({columns:[["data4",1200,1300,1450,1600,1520,1820]]})},1e3),setTimeout(function(){a.load({columns:[["data5",200,300,450,600,520,820]]})},2e3),setTimeout(function(){a.groups([["data1","data2","data3","data4","data5"]])},3e3),$(".menu-toggle").on("click",function(){a.resize()})});