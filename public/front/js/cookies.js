function aceptarCookies() {
    (localStorage.aceptaCookies = "true"), (jQuery('#gdprbox').attr("style", "display: none !important"));
}
function compruebaAceptaCookies() {
    "true" == localStorage.aceptaCookies ? (jQuery('#gdprbox').attr("style", "display: none !important")) : (jQuery('#gdprbox').attr("style", "display: block !important"));
}
$(document).ready(function () {
    compruebaAceptaCookies();
});
