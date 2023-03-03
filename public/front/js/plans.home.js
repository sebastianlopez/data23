// const { Alert } = require("bootstrap");

/*
* SEO
* 2022 06
* Optimizacion de Plans.js para tener el minimo requerrido para el home
*
*/
(function (window) {
    'use strict';

    function plans() {
        var _plansConstruct = {};

        _plansConstruct.init = function () {
            setData();
        }

        var settings = {
            // url_domain: window.location.hostname == 'code-pruebas.datacrm.la' 
            //     // ? 'https://code-pruebas.datacrm.la/cpaez/webpage/public/' 
            //     ? window.location.origin + window.location.pathname
            //     : 'https://www.datacrm.com/',
            url_domain: helperBuildURL(),                
        };
        var setData = function () {  
            submitPayments();
            clickModalPaymentsView();       // home / plansection.blade.php
            changePrice();                  // home / plansection
            getCountry();                   // plansection
            changePlan();                   // plansection.blade.php
            $(".changePlan").on("click", function () {
                c = $(this).data('flag');
                changePlan(c);       
            });
            
        }       
        //
        // Modal de pagos
        // plansection.blade.php
        // cards_mobile.blade.php
        // cards_pc.blade.php
        // comnpare_mobile.blade.php// compare_pc.blade.php
        // 
        function clickModalPaymentsView() {
            $(".modalPagosView").on("click", function () {
                $(".payment_identifier").attr("href", settings.url_domain+"iniciar-sesion/?pay=true")
                $('#usuariosPayu').prop('required', true);
                $("#typeForm").val("");
                $('#isAcompa').val('');
                var position_y = window.scrollY;
                var country = $("#country").val();
                var valor = $(this).prev("p").find(".price_").text();
                if ($("#check_accompaniment").is(":checked")) {
                    $("#check_accompaniment").trigger('click');
                }
                $("#check_accompaniment").prop("checked", false);
                $("#check_db_capacity").prop("checked", false);
                $("#check_docs_capacity").prop("checked", false);
                $(".tax_co").hide();

                $("#usuariosPayu").empty();
                $(".usuariosPago").css("display", "none");
                $(".divModalPayu").css("display", "block");
                excepciones = ['pe', 'pa'];
                users_c = "#usuariosPayu";
                modal = "#modalPagos";
                $("#users").show();
                //$("#optionsPlans").show();
                $('#pay').removeClass('mt-4');
                $('#pay').removeClass('col-12');
                $('#pay').addClass('col-6');

                if (jQuery.inArray($("#country").val(), excepciones) != -1) {
                    users_c = "#usuariosPayuEx";
                    modal = "#modalPagosEx";
                }

                $(modal).on("shown.bs.modal", function () {
                    $("#usuariosPayu").trigger("change");
                    $('#resumen').hide();
                }).modal('show');


                if (country == "pa") {
                    valor = valor.replace(/[^\d,]/g, '');
                    valor = valor.replace(',', '.');
                    valor = (parseFloat(valor) * 7 / 100) + parseFloat(valor);
                    valor = String(valor.toFixed(2));
                    valor = valor.replace('.', ',');
                    valor = "$" + valor + " USD";
                }

                $(".pagotitle").html(
                    "Mensualidad " +
                    valor +
                    " por usuario"
                );

                $('.pagoTitlePc').html(
                    "Mensualidad " +
                    valor +
                    " por usuario"
                );
                var users = $(this).data("users");
                var typePlan = $(".pagoTitlePc").text();
                $(users_c).html('');
                var info = '<option value="" >Usuarios</option>';
                let textOption = "De 1 a 3";
                info += '<option value="' + 3 + '" >' + textOption + "</option>";
                for (let index = 4; index < 51; index++) {
                    info += '<option value="' + index + '" >' + index + "</option>";
                }

                $(users_c).append(info);

                var total = $(this).prev("p").find(".price_").data('valor');
                if ($("#strTypePlan").val() == "anual") {
                    total = total * 12;
                    val = isFloat(total);
                    if (val == false) {

                    } else {
                        res = String(total.toFixed(1));
                        total = res.replace(".", ",");
                    }
                }

                var PresentacionTotal = total.toString().replace(/(\d)((?=(\d{3})+(?!\d)))/g, '$1.');
                $(".totalPago").html(0);
                $(".country").val(country);
                $(".userPlan").val(users);
                $(".typePlan").val(typePlan);
                $(".totalPagoBase").html(PresentacionTotal);
                $(".totalPagoBase").val(total);
            });
        }

        //Cambio de precios segun usuarios
        // refer_payu.blade.php
        //
        function changePrice() {
            $("#usuariosPayu, #usuariosPayuEx").on("change", function () {
                var resultado = "";
                var total = $(".totalPagoBase").val();
                var db_capacity = ($("#check_db_capacity").is(":checked")) ? $("#check_db_capacity").val() || 0 : 0;
                var document_capacity = ($("#check_docs_capacity").is(":checked")) ? $("#check_docs_capacity").val() || 0 : 0;
                var accompaniment = ($("#check_accompaniment").is(":checked")) ? $(".valueAccompaniment").data("valor") || 0 : 0;

                if (db_capacity || document_capacity || accompaniment) {
                    $("#resumen").show();
                } else {
                    $("#resumen").hide();
                }

                var usuarios = $(this).val();
                val = isFloat(total);

                var totalMore = total * usuarios;
                var pay_monthly = totalMore + parseFloat(db_capacity) + parseFloat(document_capacity);
                $("#resume_monthly").html("$" + number_format(pay_monthly, 0, ',', '.') + " " + $("#currency").val()).data('valor', pay_monthly);

                //DB Capacity
                totalMore = totalMore + parseFloat(db_capacity);

                //Documents
                totalMore = totalMore + parseFloat(document_capacity);

                //accompaniment
                totalMore = totalMore + parseFloat(accompaniment);

                if ($("#country").val() == "pa") {
                    var iva = totalMore * 7 / 100;
                    totalMore = totalMore + iva;
                }
                var totalDecimal = totalMore.toFixed(2);
                for (var j, i = totalDecimal.length - 1, j = 0; i >= 0; i--, j++) {
                    resultado =
                        totalDecimal.charAt(i) + (j > 0 && j % 3 == 0 ? "." : "") + resultado;
                }
                var addDecimals = resultado.replace("..", ",");
                var totalString = String(addDecimals.replace(/\,00$/, ""));
                $(".totalPago").text(totalString);
                $("#resume_unit_pay").html("$" + number_format(accompaniment, 0, ',', '.') + " " + $("#currency").val()).data('valor', accompaniment);
                $(".totalPagofinal").val(totalString);
            });
        }

       //Enviar pago a PayU

       function submitPayments() {
        $("#formPagos").on("submit", function (e) {
            $("#errorsFormDemo").css("display", "none");
            e.preventDefault();
            var formData = $(this).serialize();
            console.log( settings.url_domain );

            $.ajax({
                type: "POST",
                url: settings.url_domain + "send-payu",
                data: formData,
                beforeSend: function () {
                    $("#formPagos")
                        .find("button")
                        .attr("disabled", true);
                },
                success: function (msg) {
                    console.log('aqui');
                    $(".loader_contact").fadeOut();
                    $("#formPagos")
                        .find("button")
                        .attr("disabled", false);
                    if (!msg.success) {
                        var data = "";
                        $.each(msg.result, function (indexInArray, valueOfElement) {
                            data += "<li>" + valueOfElement + "</li>";
                        });
                        $("#formPagos ul").html(data);
                        $("#errorsformPagos").css("display", "block");
                        setTimeout(function () {
                            $("#errorsformPagos").fadeOut(1500);
                        }, 1800);
                    } else {                    
                        $('#modalReadyPaymentCompleted').modal({
                            backdrop: 'static',
                            keyboard: false, 
                            show: true
                        }).on('hidden.bs.modal', function (e) {
                            window.location = settings.url_domain + "response-payu";
                        }).on('shown.bs.modal', function (e) {
                        }).modal('show');  
                    }
                },
                error: function (myjqXHR, mytextStatus, myerrorThrown ) {
                    console.log("mytextStatus : " . mytextStatus);

                }
            });
        });
        }

        function getCountry() {
            var countryCode = $('#countryCode').val();
            var country = (countryCode) ? countryCode : 'co';
            $('#countryCode').val(country); 
            return country;
        }

        //Funcion para cambiar de precios segun paises
        function changePlan(c = false) {
            if(!c){
                c = ($("#country").val()) ? $("#country").val() : 'co';
            }
            ver_tipo_pago = "inline";
            tipo_pago = "Anual";
            var check_plan = $('input[name="pago"]:checked')[0] || "";
            if (check_plan.id !== "pagoAnualLabel") {
                ver_tipo_pago = "none";
                tipo_pago = "Mensual";
            }
            [...$('.porcentaje-desc')].filter((obj) => obj.style.display = ver_tipo_pago);
            // [...$('.txt-descuento')].filter((obj) => obj.innerHTML = '<p>Por Usuario/Mes <br> Facturación ' + tipo_pago + '</p>');

            $("#country").val(c);
            $('input[name="country"]').val(c);

            //Query para mostar en la página por defecto el input de Colombia y ocultar México
            //Cuando el valor de #country cambia muestra el input correspondiente al cambio
            $(".co").show();
            $(".mx").hide();
            if (c === 'mx') {
                $(".co").hide();
                $(".mx").show();
            }
            if (c === 'co') {
                $(".mx").hide();
                $(".co").show();
            }
            var accompaniment_tax = 0;
            var accompaniment = 0;
            var valor0 = 0;
            var valor1 = 0;
            var valor2 = 0;

            var miSimboloMonetario  = "$";
            if (c === 'pe')  miSimboloMonetario = '';

            var tipo_pago_checked = $("input[name=pago]:checked").attr("id");
            if (tipo_pago_checked == "pagoAnualLabel") {
                $("#strTypePlan").val("anual");
                var document_capacity = '';
                var db_capacity = '';
                var saving_money = '';
                var simbolo_money = '';
                var tax = '';
                var document_id = '';
                switch (c) {
                    case 'co':
                        valor1 = 40000;
                        valor2 = 64000;
                        accompaniment = 300000;
                        type_page = 'anual';
                        document_capacity = 1920000;
                        db_capacity = 2880000;
                        accompaniment_tax = 357000;
                        document_id = 'Cédula';
                        tax = '(IVA incluido)';
                        saving_money = '';
                        simbolo_money = 'COP/mes';
                        implementation = '$ 1\'200K COP'
                        break;
                    case 'mx':
                        valor1 = 200;
                        valor2 = 320;
                        accompaniment = 1600;
                        type_page = 'anual';
                        document_capacity = 10560;
                        db_capacity = 16320;
                        accompaniment_tax = 1600;
                        saving_money = '';
                        tax = '';
                        simbolo_money = 'MXN/mes';
                        document_id = 'CURP';
                        implementation = '$ 6.500 MXN'
                        break;
                    case 'ec': case 'pa': case 'cr':
                        valor1 = 12;
                        valor2 = 16;
                        accompaniment = 100;
                        type_page = 'anual';
                        document_capacity = 576;
                        db_capacity = 816;
                        accompaniment_tax = 100;
                        tax = '';
                        saving_money = '';
                        simbolo_money = 'USD/mes';
                        document_id = 'Documento de identidad';
                        implementation = 'USD $350'
                        break;
                    case 'ch':
                        valor1 = 10400;
                        valor2 = 15200;
                        accompaniment = 100;
                        type_page = 'anual';
                        document_capacity = 576;
                        db_capacity = 816;
                        accompaniment_tax = 100;
                        tax = '';
                        saving_money = '';
                        simbolo_money = 'CLP/mes';
                        document_id = 'Documento de identidad';
                        implementation = '$300.000 CLP'
                        break;       
                    case 'pe':
                        valor1 = 40;
                        valor2 = 64;
                        accompaniment = 100;
                        type_page = 'anual';
                        document_capacity = 576;
                        db_capacity = 816;
                        accompaniment_tax = 100;
                        tax = '';
                        saving_money = '';
                        simbolo_money = ' /mes';
                        document_id = 'Documento de identidad';
                        implementation = '1.300 PEN'
                        break;                                              
                    default:
                        valor1 = 40000;
                        valor2 = 64000;
                        accompaniment = 300000;
                        type_page = 'anual';
                        document_capacity = 1920000;
                        db_capacity = 2880000;
                        accompaniment_tax = 357000;
                        document_id = 'Cédula';
                        tax = '(IVA incluido)';
                        saving_money = '';
                        simbolo_money = 'COP/mes';
                        implementation = '$ 1\'200K COP'
                }
            } else {
                $("#strTypePlan").val("mensual");
                switch (c) {
                    case 'co':
                        valor1 = 65000;
                        valor2 = 95000;
                        accompaniment = 300000;
                        type_page = 'mensual';
                        document_capacity = 200000;
                        db_capacity = 300000;
                        tax = 'IVA incluido';
                        accompaniment_tax = 357000;
                        saving_money = '';
                        simbolo_money = 'COP/mes';
                        document_id = 'Cédula';
                        preciodescripcion1 = "Factura anual de <s>600k</s> / 480k cop";
                        preciodescripcion2 = "Factura anual de <s>960k</s> / 768k cop";
                        implementation = '$ 1\'200K COP'
                        break;
                    case 'mx':
                        // cambio deprecios para mx 05-09-2022
                        valor1 = 350;
                        valor2 = 500;
                        accompaniment = 1600;
                        type_page = 'mensual';
                        document_capacity = 1100;
                        db_capacity = 1700;
                        accompaniment_tax = 1600;
                        tax = '';
                        saving_money = '';
                        simbolo_money = 'MXN/mes';
                        document_id = 'CURP';
                        pais = 'México';
                        preciodescripcion1 = "Factura anual de <s>3.360 </s> / 4.200 mxn";
                        preciodescripcion2 = "Factura anual de <s>4.800 </s> / 6.000 mxn";    
                        implementation = '$ 6.500 MXN'                   
                        break;
                    case 'ec': case 'pa': case 'cr':
                        valor1 = 18;
                        valor2 = 25;
                        accompaniment = 100;
                        type_page = 'mensual';
                        tax = '';
                        document_capacity = 60;
                        db_capacity = 85;
                        accompaniment_tax = 100;
                        saving_money = '';
                        simbolo_money = 'USD/mes';
                        document_id = 'Documento de identidad';
                        preciodescripcion1 = "Factura anual de <s>216</s> / 173 usd";
                        preciodescripcion2 = "Factura anual de <s>300</s> / 240 usd";  
                        implementation = 'USD $350'                    
                        break;
                    case 'ch':
                        valor1 = 15000;
                        valor2 = 20000;
                        accompaniment = 100;
                        type_page = 'mensual';
                        tax = '';
                        document_capacity = 60;
                        db_capacity = 85;
                        accompaniment_tax = 100;
                        saving_money = '';
                        simbolo_money = 'CLP/mes';
                        document_id = 'Documento de identidad';
                        preciodescripcion1 = "Factura anual de <s>180k</s> / 144K clp";
                        preciodescripcion2 = "Factura anual de <s>240k</s> / 192k clp";  
                        implementation = '$300.000 CLP'                   
                        break;     
                    case 'pe':
                        valor1 = 65;
                        valor2 = 95;
                        accompaniment = 100;
                        type_page = 'mensual';
                        tax = '';
                        document_capacity = 60;
                        db_capacity = 85;
                        accompaniment_tax = 100;
                        saving_money = '';
                        simbolo_money = ' PEN/mes';
                        document_id = 'Documento de identidad';
                        preciodescripcion1 = "Factura anual de <s>780</s> / 624 pen";
                        preciodescripcion2 = "Factura anual de <s>1.140</s> / 912 pen";      
                        implementation = '1.300 PEN'                 
                        break;                                           
                    default:
                        valor1 = 65000;
                        valor2 = 90000;
                        accompaniment = 300000;
                        type_page = 'mensual';
                        document_capacity = 200000;
                        db_capacity = 300000;
                        tax = 'IVA incluido';
                        accompaniment_tax = 357000;
                        saving_money = '';
                        simbolo_money = 'COP/mes';
                        document_id = 'Cédula';   
                        preciodescripcion1 = "Factura anual de <s>600k</s> / 480k cop";
                        preciodescripcion2 = "Factura anual de  <s>960k</s> / 768k cop";   
                        implementation = '$ 1\'200K COP'                                        
                }
            }
            $(".valueAccompaniment").val(number_format(accompaniment_tax, 0, ',', '.')).data('valor', accompaniment_tax);
            $("#check_accompaniment").val(accompaniment_tax);
            $(".saving_money").html(saving_money);
            $("#check_db_capacity").val(db_capacity);
            $("#check_docs_capacity").val(document_capacity);
            $(".type_page").html(type_page);
            $(".tax_co_value").val(tax);
            $(".iva").html(tax);
            $("#currency").val(simbolo_money);
            $('#documento_identidad').attr("placeholder", document_id);

            $(".accompaniment").html(miSimboloMonetario + number_format(accompaniment, 0, ',', '.') + " " + simbolo_money).data('valor', accompaniment);
            $(".price0").html(miSimboloMonetario + number_format(valor0, 0, ',', '.')).data('valor', valor0);
            $(".price1").html(miSimboloMonetario + number_format(valor1, 0, ',', '.') + "<span style='font-size: 1.3rem'>" + simbolo_money + "</span>").data('valor', valor1);
            $(".price2").html(miSimboloMonetario + number_format(valor2, 0, ',', '.') + "<span style='font-size: 1.3rem'>" + simbolo_money + "</span>").data('valor', valor2);
            
            $(".pricedes1").html(preciodescripcion1);
            $(".pricedes2").html(preciodescripcion2);

            $('.implementation').text(implementation);

            $(".moneySim").html(simbolo_money);
        }
        return _plansConstruct;
    }

    if (typeof (window.plans) === 'undefined') {
        window.plans = plans();
    }
})(window);

$(document).ready(function () {
    plans.init({});
});
