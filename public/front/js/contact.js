/*
*  SEO 2022 06
*  Se optimiza main.js para seprar solo lo necesario
*  este fuente se debe desincorporar en futuras modificaciones
*  13-07-2022
*  luis arellano
*
*/
var url_app = detect_platform();

function buildURL2(){
    let  mystring = "";
    let  myUrl = "";
    let myHost = "";
    
    myHost = window.location.hostname;
    let myArray = myHost.split('.');
    myArray.shift();
    myArray.pop();

    myUrl = myArray.toString().replace(",",".");
    
    // if (myUrl === "datacrm"){
    //     mystring = window.origin + '/';
    // }else{
    //     myUrl = window.location.origin + window.location.pathname;
    //     let myindex = myUrl.indexOf("public/");
    //     mystring = myindex != -1 ? myUrl.substring(0, myindex + 7) : myUrl;                
    // }

    
    if (myUrl === "datacrm"){        
        mystring = window.origin + '/';
    }

    myUrl = window.location.origin + window.location.pathname;
    let myindex = myUrl.indexOf("public/");
    if (myindex != -1){
        mystring = myUrl.substring(0, myindex + 7)
    }

    return mystring;
}

$(document).ready(function () {
    // $("#flagIsOld").val(0);
    var settings = {
        key_site_captcha: '6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf',
    };
    var url_domain = '';
    url_domain = buildURL2();

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


// Media querys
$(document).ready(function () {
    resize();
    $(window).resize(function () {
        resize();
    });
});
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

