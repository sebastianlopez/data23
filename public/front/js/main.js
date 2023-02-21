/*
*  SEO 2022 06
*  Se optimiza main.js para seprar solo lo necesario
*  este fuente se debe desincorporar en futuras modificaciones
*  13-07-2022
*  luis arellano
*
*/
var url_app = detect_platform();
$(document).ready(function () {
    $("#flagIsOld").val(0);
    var settings = {
        key_site_captcha: '6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf',
    };
    var url_domain = '';
    if (window.location.hostname == 'pruebas.datacrm.la') {
        url_domain = 'https://pruebas.datacrm.la/mrivera/webpage/public/';
    } else {
        url_domain = 'https://www.datacrm.com/';
    }

    //Registrar conversion en RD leam
    // $("#boletin_blog").on("submit", function(e) {
    //     if(!$("#boletin_blog #email").val().length > 0) {
    //         alert('Debe ingresar el correo electrónico');
    //         return false;
    //     }
    //     e.preventDefault();
    //     alert('Has sido inscrito correctamente');
    //     $("#boletin_blog #email").val('');
    // });

    $('#img_youtube1').click(function () {
        $('#content_video1').html('<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LsEkEteocfM?autoplay=1"></iframe>');
    });

    $('#img_youtube2').click(function () {
        $('#content_video2').html('<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4aqwC9tck6c?autoplay=1"></iframe>');
    });

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


    $('.goTermns').click(function (event) {
        event.preventDefault();
        var country = $('#modalPagos').find('.country').val();
        window.open(url_domain + "contrato-" + country, '_blank');
    });

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

    if ($('#items').length > 0) {
        var itemList = [];
        var items = $('#items').attr('data');
        var json = JSON.parse(items);

        for (var i in json) {
            itemList.push(i);
        }

        $('#search').autocomplete({
            source: itemList,
            select: function (e, ui) {
                if (ui.item.value) {
                    location = json[ui.item.value];
                }
            },
            response: function (event, ui) {
                if (ui.content.length === 0) {
                    var noResult = { value: "", label: "No hay resultados relacionados" };
                    ui.content.push(noResult);
                }
            }
        });
    }
    //Formulario de contactenos
    $("#formContact").on("submit", function(e) {
        e.preventDefault();
        grecaptcha.ready(function () {
            grecaptcha.execute(settings.key_site_captcha, { action: 'formContact' }).then(function (token) {
                sendContact(token);
            });
        });
    });
    
    function sendContact(token){
        $("#errorsFormDemo").css("display", "none");
        $("#formContact")
            .find("button")
            .attr("disabled", true);
        var nombre = $("#formContact #nombre").val();
        var celular = $("#formContact #celular").val();
        var correo = $("#formContact #correo").val();
        var mensaje = $("#formContact #mensaje").val();
        $.ajax({
            type: "GET",
            url: url_domain+"send-contact",
            data: {
            nombre: nombre,
            celular: celular,
            correo: correo,
            mensaje: mensaje,
            tokenreCAPTCHA: token
            },
            beforeSend: function() {
            // setting a timeout
            $(".loader_contact").fadeIn();
            $("#formContact")
                .find("button")
                .attr("disabled", true);
            },
            success: function(msg) {
            $(".loader_contact").fadeOut();
            $("#formContact")
                .find("button")
                .attr("disabled", false);
            if (!msg.success) {
                var data = "";
                $.each(msg.result, function(indexInArray, valueOfElement) {
                data += "<li>" + valueOfElement + "</li>";
                });
                $("#formContact ul").html(data);
                $("#errorsFormContact").css("display", "block");
            } else {
                $("#formContact").html(
                '<img class="loader_contact_img" src="https://www.datacrm.com/front/images/contactoVF.png" >'
                );
                $(".loader_contact_img").css("width", "400px");
                $("#formatContact .loader_contact_img").fadeIn();
                $("#errorsFormContact").css("display", "none");
                $("#formContact #nombre").val("");
                $("#formContact #celular").val("");
                $("#formContact #correo").val("");
                $("#formContact #mensaje").val("");
            }
            }
        });
    }
    
});

$("#open-modalVideo").on("click", function (e) {
    e.preventDefault();
    $.yosemodal({
        youtube: "-jYpjKQgwtA",
        youtubecontrols: true,
        width: "800px",
        height: "500px",
        closeonclick: true,
        showbuttons: false
    });
});

//Cargar por defecto los precios del pai­s actual
$(document).ready(function () {

    var country;
    var countryCode = $('#countryCode').val();
    country = (countryCode) ? countryCode : $("#country").val();
    country = country ? country : 'co';

    //Funcion para capturar buyer_name y documento_identidad y rellenar nombre y nit en formPagos
    $("#telefono").on('change', function () {
        var phone = $(this).val();
        $("#phone").val(phone);
    });

    $("#ciudad").on('change', function () {
        var city = $(this).val();
        $("#city").val(city);
    });

    $("#usuarios").on('change', function () {
        var user = $(this).val();
        $("#user").val(user);
    });

    $("#nombre").on('change', function () {
        var name = $(this).val();
        $("#name").val(name);
    });


    $(".average_sale").on('change', function () {
        var average_sale = $(this).val();
        $("#average_sale").val(average_sale);
    });
    

    $("#buyer_name").on('change', function () {
        var buyer = $(this).val();
        $("#nombre").val(buyer);
    });

    $("#check_db_capacity").on("change", function () {
        $("#usuariosPayu").trigger("change");
    });

    $("#check_docs_capacity").on("change", function () {
        $("#usuariosPayu").trigger("change");
    });

    $("#check_accompaniment").on("change", function () {
        $("#usuariosPayu").trigger("change");
    });
});



// Media querys
$(document).ready(function () {
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