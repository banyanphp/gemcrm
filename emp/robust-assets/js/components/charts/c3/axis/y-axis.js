$(window).on("load",function(){var a=c3.generate({bindto:"#y-axis",size:{height:400},color:{pattern:["#673AB7","#E91E63"]},data:{columns:[["sample",30,200,100,400,150,2500]]},axis:{y:{tick:{format:d3.format("$,")}}},grid:{y:{show:!0}}});$(".menu-toggle").on("click",function(){a.resize()})});