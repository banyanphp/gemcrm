$(document).ready(function() {
    function a(a) {
        var c;
        try {
            c = $.datepicker.parseDate(b, a.value)
        } catch (d) {
            c = null
        }
        return c
    }
    $(".datepicker-default").datepicker({
        minDate: -0,
        
    }), $(".datepicker-animation").datepicker(), $(".dp-animation").on("change", function() {
        $(".datepicker-animation").datepicker("option", "showAnim", $(this).val())
    }), $(".dp-other-month").datepicker({
        showOtherMonths: !0,
        selectOtherMonths: !0
    }), $(".dp-button-bar").datepicker({
        showButtonPanel: !0
    }), $(".dp-inline").datepicker(), $(".dp-month-year").datepicker({
        changeMonth: !0,
        changeYear: !0
    }), $(".dp-multiple-months").datepicker({
        numberOfMonths: 3,
        showButtonPanel: !0
    }), $(".dp-constrain-input").datepicker({
        constrainInput: !0
    }), $(".dp-year-range").datepicker({
        yearRange: "2015:2016"
    }), $(".dp-step-months").datepicker({
        stepMonths: 3
    }), $(".dp-format-date").datepicker(), $(".date-formats").on("change", function() {
        $(".dp-format-date").datepicker("option", "dateFormat", $(this).val())
    }), $(".dp-icon-trigger").datepicker({
        showOn: "button",
        buttonImage: "robust-assets/images/jqueryui/calendar.png",
        buttonImageOnly: !0,
        buttonText: "Select date"
    }), $(".dp-for-alternate").datepicker({
        altField: ".dp-alternate",
        altFormat: "DD, d MM, yy"
    }), $(".dp-date-range").datepicker({
        minDate: -20,
        maxDate: "+1M +10D"
    }), $(".dp-week-year").datepicker({
        showWeek: !0,
        firstDay: 1
    });
    var b = "mm/dd/yy",
        c = $(".dp-date-range-from").datepicker({
            defaultDate: "+1w",
            changeMonth: !0
        }).on("change", function() {
            d.datepicker("option", "minDate", a(this))
        }),
        d = $(".dp-date-range-to").datepicker({
            defaultDate: "+1w",
            changeMonth: !0
        }).on("change", function() {
            c.datepicker("option", "maxDate", a(this))
        });
    $(".ui-datepicker").wrap('<div class="dp-skin"/>')
});