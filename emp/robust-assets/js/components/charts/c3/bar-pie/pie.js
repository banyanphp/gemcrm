$(window).on("load", function() {
    var a = c3.generate({
        bindto: "#pie-chart",
        color: {
            pattern: ["#99B898", "#FECEA8", "#FF847C","#ff0000","#000000"]
        },
        data: {
            columns: [
                ["data1", 30],
                ["data2", 120]
            ],
            type: "pie",
			
            onclick: function(a, b) {
                console.log("onclick", a, b)
            },
            onmouseover: function(a, b) {
                console.log("onmouseover", a, b)
            },
            onmouseout: function(a, b) {
                console.log("onmouseout", a, b)
            }
        },
		  pie: {
        label: {
          format: function(value, ratio, id) {
            return value;
          }
        }
      }
    });
    setTimeout(function() {
        a.load({
            columns: [
                ["TeamA",20],
                ["TeamB",20],
				["TeamC",20], 
				["TeamD",20],
                ["Remaining",20]
            ]
        })
    }, 1500), setTimeout(function() {
        a.unload({
            ids: "data1"
        }), a.unload({
            ids: "data2"
        })
    }, 2500), $(".menu-toggle").on("click", function() {
        a.resize()
    })
});