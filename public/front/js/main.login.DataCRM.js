/*
* SEO 202206
* Luis Arellano
* reducir al minimo requerido el Main
* separar por modulos o clases
* 05-07-2022
* modulo original main.js
*
*/
var url_app = detect_platform();
$(document).ready(function () {
    $("#flagIsOld").val(0);
    var settings = {
        key_site_captcha: '6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf',
    };
    var url_domain = helperBuildURL();
    // var url_domain = '';
    // if (window.location.hostname == 'pruebas.datacrm.la') {
    //     url_domain = 'https://pruebas.datacrm.la/mrivera/webpage/public/';
    // } else {
    //     url_domain = 'https://www.datacrm.com/';
    // }

    // login

    //Cambiar a pagina de olvido contrasena
    $(".pagForgotPass").click(function (e) {
        $("#pagLoginCrm").css("display", "none");
        $("#forgotPasswordDiv").css("display", "block");
    });
    //Cambiar a pagina de login
    $(".forgotPasswordLink").click(function (e) {
        $("#pagLoginCrm").css("display", "block");
        $("#forgotPasswordDiv").css("display", "none");
    });

    $(".forgotEmail").click(function (e) {
        $("#email").attr('placeholder', 'Usuario');
        $("#loginIsOld").val(1);
        $("#headerLoginCrm").css("display", "block");
        $(".company").css("display", "block");
        $(".forgotEmail").css("display", "none");
    });

    /*Login viejo*/
    let params = new URLSearchParams(location.search);
    var login = params.get('login');
    if (login == '1') {
        $(".forgotEmail").click()
    }

    // login
    //Solicitar correo de nueva contraseÃ±a
    $("#formRequestPass").on("submit", function (e) {
        e.preventDefault();
        var email = $("#email").val();
        $.ajax({
            type: "GET",
            url: url_domain + "request-pass",
            data: {
                email: email
            },
            success: function (msg) {
                if (!msg.success) {
                    var data = "";
                    $.each(msg.result, function (indexInArray, valueOfElement) {
                        data += "<li>" + valueOfElement + "</li>";
                    });
                    $("#errorsFormRequestPass ul").html(data);
                    $("#errorsFormRequestPass").css("display", "block");
                } else {
                    var data = "<li>" + msg.result + "</li>";
                    $("#errorsFormRequestPass").css("display", "none");
                    $("#successFormRequestPass ul").html(data);
                    $("#successFormRequestPass").css("display", "block");
                    $("#email").val("");
                    $("#formRequestPass")
                        .find("button")
                        .attr("disabled", true);
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
                //$('#formRequestPass').find('button').attr('disabled',false);
            }
        });
    });

    resize();
    $(window).resize(function () {
        resize();
    });

});

number_format = function (number, decimals, dec_point, thousands_sep) {
    number = number.toFixed(decimals);

    var nstr = number.toString();
    nstr += '';
    x = nstr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? dec_point + x[1] : '';
    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

    return x1 + x2;
}

function resize() {
    if ($(window).width() <= 420) {
        jQuery('.titlePagoModal').css('font-size', '1.2rem');
        jQuery('.radioPagos').css('text-align', 'left');
        jQuery("#formPagos div.col-6").each(function () {
            $(this).addClass('col-12');
        });

    } else {
        jQuery('.titlePagoModal').css('font-size', '2rem');
        jQuery('.radioPagos').css('text-align', 'center');
        jQuery("#formPagos div.col-6").each(function () {
            $(this).removeClass('col-12');
        });

    }
}

function isFloat(valor) {
    if (!/^([0-9])*[,]?[0-9]*$/.test(valor)) {
        return true;
    } else {
        return false;
    }
}

function isMobile() {
    if ($("#flag_crm").length) window.location = $('#flag_crm').val();
}

function detect_platform() {
    userAgent = navigator.userAgent || navigator.vendor || window.opera;
    url_app = null;
    if (/android/i.test(userAgent)) {
        url_app = "https://play.google.com/store/apps/details?id=com.datacrm.application";
    }

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        url_app = "https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8";
    }
    $("#descarga_app").attr("href", url_app ? url_app : '');
    return url_app;
}

function cambiar_idioma(e) {
    window.location = e.target.value;
}

function validationTokenCaptcha(token) {
    $("#tokenCaptcha").val(token);
    $("#popup_1.modalDemo").submit();
}

function showMobile() {
    if (detect_platform()) $("#modalMobile").modal('show');
}
