! function(a, b, c) {
    "use strict";
    c("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), c(".skin-square input").iCheck({
        checkboxClass: "icheckbox_square-green",
        radioClass: "iradio_square-green"
    }), c(".touchspin").TouchSpin(), c(".switchBootstrap").bootstrapSwitch();
    var d = 0;
    if (Array.prototype.forEach) {
        var e = Array.prototype.slice.call(b.querySelectorAll(".switchery"));
        e.forEach(function(a) {
            new Switchery(a)
        })
    } else {
        var f = b.querySelectorAll(".switchery");
        for (d = 0; d < f.length; d++) {
            new Switchery(f[d])
        }
    }
}(window, document, jQuery);