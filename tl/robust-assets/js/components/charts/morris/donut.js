$(window).on("load", function() {
    Morris.Donut( {
        element:"donut-chart", data:[ {
            label: "Dryer", value: 25
        }
        , {
            label: "Chiller", value: 45
        }
        , {
            label: "Cooler", value: 30
        }
        , {
            label: "Var", value: 5
        }
		  , {
            label: "Small", value: 5
        }
        ], resize:!0, colors:["#ff8d1a", "#eddd53", "#add45c", "#57c785","#00baad"]
    }
    )
}

);