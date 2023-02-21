/*
* create-demo.js
* Modulo para ser utilizado con modals, landing , create-demo-view
* 05-07-2022
* se optimiza para seo, el home para carga mas rapida separando en dos archivos
* modulo principal
* modulo original
*/
(function (window) {
    'use strict';
    // This function will contain all our code
    function demos() {
        var _demosConstruct = {};

        _demosConstruct.init = function () {
            setData();
        }

        var settings = {
            url_domain: window.location.hostname == 'code-pruebas.datacrm.la' 
            // ? 'https://code-pruebas.datacrm.la/webpage/public/' 
            ? window.location.origin + window.location.pathname
            : 'https://www.datacrm.com/',
            key_site_captcha: '6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf',
        };

        var setData = function () {
            registerSubmitSendRD();             // create-demo-view
            registerSubmitSenDemo();            // create-demo-view
            registerSubmitPopup1();             // modals.blade.php
            registerSubmitPopup2();             // create-demode-view.blade.php
            registerSubmitPopup1Landing();      // landing_crm.blade.php
            registerSubmitPopup2Landing();      // landing_crm.blade.php
            registerSubmitPopup1Mobile();       // mobile.blade.php, landing_CRM, landing_CRM2
            registerSubmitPopup2Mobile();       // create-demo-view-mobile.blade.php
            setCampaignIdCrm();
        }
        //
        // create-demo-view.blade.php
        //
        function registerSubmitSendRD() {
            $("#btn-send-rd").on("click", function (e) {
                e.preventDefault();
                $("#send_demo").submit();
            });
        }
        //
        // create-demo-view.blade.php
        //
        function registerSubmitSenDemo() {
            $("#send_demo").on("submit", function (e) {
                e.preventDefault();
                var email_rd = $('#email_to_rd').val();
                var send_demo_to_rd = $('#send_demo_to_rd').val();
                $.ajax({
                    type: "POST",
                    url: settings.url_domain + "save-demo-rdstation",
                    data: {
                        email: email_rd,
                        send_demo_to_rd: send_demo_to_rd
                    },
                    success: function (r) {
                        $('#flag_crm_demo').val(1);
                    }
                });
            });
        }
        //
        // modals.blade.php
        //
        function registerSubmitPopup1() {
            //Solicitar nuevo demo - No modal
            jQuery("#popup_1.modalDemo").on("submit", function (e) {
                e.preventDefault();
                findDemo();
            });
        }
        //
        // modals.blade.php
        // modals-email
        //
        function findDemo() {
            hideErrors();
            disableButtonPopup1();
            var email = $("#popup_1.modalDemo #email").val();
            var company = $("#popup_1.modalDemo #company").val().replace("&", "");
            var sector = $("#popup_1.modalDemo #sector").val();
            var gclid = $("#popup_1.modalDemo #ad_gclib").val();
            var campaign = $("#campaign").val();
            var campaignid = $("#campaignid").val();
            var _token = $("#popup_1 [name='_token']").val();

            var captcha = $("#captcha").val();
            var captchaNumberOne = $("#captchaNumberOne").val();
            var captchaNumberTwo = $("#captchaNumberTwo").val();

            $.ajax({
                type: "POST",
                dataType: 'json',
                url: settings.url_domain + "find-demo",
                data: {
                    _token: _token,
                    email: email,
                    company: company,
                    gclid: gclid,
                    campaign: campaign,
                    sector: sector,
                    captcha: captcha,
                    captchaNumberOne: captchaNumberOne,
                    captchaNumberTwo: captchaNumberTwo
                },
                beforeSend: function () {
                    // setting a timeout
                    $("#gif_loader").fadeIn();
                    disableButtonPopup1();
                },
                success: function (msg) {
                    $("#gif_loader").fadeOut();
                    hideErrors();
                    switch (msg.success) {

                        case 'showPopup':
                            var result = msg.result;
                            $(".modalPruebaGratis").trigger('click');
                            var crm = result.url + '?email=' + result.email;
                            var recover_password = result.url + '?user_name=' + result.user_name + '&email=' + result.email + '&demo=1';
                            $("#access_crm").attr("href", crm);
                            $("#recover_password").attr("href", recover_password);
                            $("#modalemail").modal('show');
                            enableButtonPopup1();
                            break;

                        case false:
                            var data = "";
                            $.each(msg.result, function (indexInArray, valueOfElement) {
                                data += "<li>" + valueOfElement + "</li>";
                            });
                            $("#popup_1.modalDemo #errorsFormDemo ul").html(data);
                            showErrors();
                            enableButtonPopup1();
                            break;

                        case 'robot':
                            $("#popup_1.modalDemo #errorsFormDemo").html(msg.result);
                            showErrors();
                            enableButtonPopup1();
                            break;

                        default:
                            $("#popup_1.modalDemo #email").val("");
                            $("#popup_1.modalDemo #company").val("");
                            redirecCreateCrm(email, company, gclid, msg.result, campaign, campaignid, sector, mobileFlag = "");
                            break;
                    }
                }
            });
        }
        //
        // create-demode-view.blade.php
        //
        function registerSubmitPopup2() {
            //Enviar info demo (segundo popup)
            $("#popup_2").on("submit", function (e) {
                e.preventDefault();
                grecaptcha.ready(function () {
                    grecaptcha.execute(settings.key_site_captcha, { action: 'popup_2' }).then(function (token) {
                        saveInfo(token);
                    });
                });
            });
        }

        //
        // create-demode-view.blade.php
        //
        //Enviar info demo (segundo popup)
        function saveInfo(token) {
            var nombre = $("#nombre").val();
            var telefono = $("#telefono").val();
            var ciudad = $("#ciudad").val();
            var usuarios = $("#usuarios").val();
            var mobileFlag = $('#mobileFlag_crm').val();
            $.ajax({
                type: "GET",
                url: settings.url_domain + "validate-mandatory-popup",
                data: {
                    nombre: nombre,
                    telefono: telefono,
                    ciudad: ciudad,
                    usuarios: usuarios,
                },
                success: function (msg) {
                    $("#gif_loader_demo").fadeOut();
                    $("#gif_loader_demo_mobile").fadeOut();
                    if (!msg.success) {
                        var data = "";
                        $.each(msg.result, function (indexInArray, valueOfElement) {
                            data += "<li>" + valueOfElement + "</li>";
                        });
                        $("#errorsFormInfo ul").html(data);
                        $("#errorsFormInfo").css("display", "block");
                        if (mobileFlag != 'mobile') {
                            $("#modalCrmData").modal('show');
                        }
                    } else {
                        sendInfoPopup2(token);
                    }
                }
            });
        }
        //
        // create-demode-view.blade.php
        //
        function sendInfoPopup2(token) {
            $("#gif_loader_demo").fadeIn();
            $("#gif_loader_demo_mobile").fadeIn();
            if ($('#mobileFlag_crm').val() != 'mobile') {
                $("#modalCrmData").modal('hide');
            }
            $("#errorsFormInfo").css("display", "none");
            var intevalo = setInterval(function () {
                $("#popup_2").find("button").attr("disabled", true);
                if ($('#flag_crm').val() != '' && $('#flag_crm_demo').val() != '') {
                    clearInterval(intevalo);
                    var nombre = $("#nombre").val();
                    var telefono = $("#telefono").val();
                    var ciudad = $("#ciudad").val();
                    var usuarios = $("#usuarios").val();
                    var sector = $("#sector").val();
                    var company_crm = $("#company_crm").val();
                    var email_crm = $("#email_crm").val();
                    var average_sale = $("#average_sale").val();
                    var companydemo_crm = $("#companydemo_crm").val();
                    var ad_gclid = $('#gclid_crm').val();
                    var description_crm = $('#description_crm').val();
                    var campaignid_crm = $('#campaignid_crm').val();
                    var mobileFlag = $('#mobileFlag_crm').val();
                    var campaignid_crm = $("[name='Campaña']").val();
                    var password_new = $("#password_to_rd").val();
                    $("#name").val(nombre);
                    $.ajax({
                        type: "GET",
                        url: settings.url_domain + "save-demo-info",
                        data: {
                            password_new: password_new,
                            identificador: $('form').attr('id'),
                            page_title: document.title,
                            form_url: document.location.hostname,
                            nombre: nombre,
                            telefono: telefono,
                            ciudad: ciudad,
                            usuarios: usuarios,
                            sector: sector,
                            company: company_crm,
                            email: email_crm,
                            average_sale: average_sale,
                            ad_gclid: ad_gclid,
                            companydemo: companydemo_crm,
                            description: description_crm,
                            campaignid: campaignid_crm,
                            tokenreCAPTCHA: token
                        },
                        success: function (msg) {
                            $("#gif_loader_demo").fadeOut();
                            $("#gif_loader_demo_mobile").fadeOut();
                            $("#popup_2").find("button").attr("disabled", false);
                            if (!msg.success) {
                                var data = "";
                                $.each(msg.result, function (indexInArray, valueOfElement) {
                                    data += "<li>" + valueOfElement + "</li>";
                                });
                                $("#errorsFormInfo ul").html(data);
                                $("#errorsFormInfo").css("display", "block");
                                if (mobileFlag != 'mobile') {
                                    $("#modalCrmData").modal('show');
                                }
                            } else {
                                $("#nombre").val("");
                                $("#telefono").val("");
                                $("#ciudad").val("");
                                if (mobileFlag == 'mobile') {
                                    try {
                                        if (getPlataform() == "android") {
                                            Android.loadDemo(company_crm);
                                        } else if (getPlataform() == "ios") {
                                            webkit.messageHandlers.demoAction.postMessage(
                                                company_crm
                                            );
                                        }
                                    } catch (err) {
                                    }
                                } else {
                                    if (detect_platform()) showMobile();
                                    else window.location = $('#flag_crm').val();
                                }
                            }
                        }
                    });
                }
            }, 3000);
        }
        // 
        // landing_crm.blade.php
        // landing_crm2.blade.php        
        //
        function registerSubmitPopup1Landing() {
            //Solicitar nuevo demo - No modal2
            $("#popup_1.f1").on("submit", function (e) {
                e.preventDefault();
                landingFindDemof1();
            });
        }
        // 
        // landing_crm.blade.php
        // landing_crm2.blade.php        
        //
        function landingFindDemof1() {
            $("#popup_1.f1 #errorsFormDemo").css("display", "none");
            $("#popup_1.f1")
                .find("button")
                .attr("disabled", true);
            var email = $("#popup_1.f1 #email").val();
            var company = $("#popup_1.f1 #company").val();
            company = company.replace("&", "");
            var gclid = $("#popup_1.f1 #ad_gclib").val();
            var campaign = $("#campaign").val();
            var campaignid = $("#campaignid").val();
            var sector = $("#popup_1.f1 #sector").val();
            var _token = $("#popup_1 [name='_token']").val();
            $('#empresa').val(company);
            $('input[name="Nombre de la Empresa"]').val(company);

            var captcha = $("#popup_1.f1 .captcha").val();
            var captchaNumberOne = $("#popup_1.f1 .captchaNumberOne").val();
            var captchaNumberTwo = $("#popup_1.f1 .captchaNumberTwo").val();
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: settings.url_domain + "find-demo",
                data: {
                    _token: _token,
                    email: email,
                    company: company,
                    gclid: gclid,
                    campaign: campaign,
                    sector: sector,
                    captcha: captcha,
                    captchaNumberOne: captchaNumberOne,
                    captchaNumberTwo: captchaNumberTwo
                },
                beforeSend: function () {
                    // setting a timeout
                    $("#gif_loader1").fadeIn();
                    $("#popup_1.f1")
                        .find("button")
                        .attr("disabled", true);
                },
                success: function (msg) {
                    $("#gif_loader1").fadeOut();
                    $("#popup_1.f1")
                        .find("button")
                        .attr("disabled", false);
                    if (!msg.success) {
                        var data = "";
                        $.each(msg.result, function (indexInArray, valueOfElement) {
                            data += "<li>" + valueOfElement + "</li>";
                        });
                        $("#popup_1.f1 #errorsFormDemo ul").html(data);
                        $("#popup_1.f1 #errorsFormDemo").css("display", "block");
                    } else if(msg.success == 'robot'){
                        $("#popup_1.f1 #errorsFormDemo ul").html(msg.result);
                        $("#popup_1.f1 #errorsFormDemo").css("display", "block");
                    }else if (msg.success == 'showPopup') {
                        $("#duplicateEmail").show();
                        /*Cambio para ajustar la plantilla landign_CRM.blade.php*/
                        $('#flag_crm').val();
                        crm = msg.result.url + '?email=' + msg.result.email;
                        recover_password = msg.result.url + '?user_name=' + msg.result.user_name + '&email=' + msg.result.email + '&demo=1';
                        $("#access_crm").attr("href", crm);
                        $("#recover_password").attr("href", recover_password);
                        $("#modalemail").modal('show');
                    } else {
                        $("#popup_1.f1 #email").val("");
                        $("#popup_1.f1 #company").val("");
                        redirecCreateCrm(email, company, gclid, msg.result, campaign, campaignid, sector, mobileFlag = "");
                    }
                }
            });
        }
        //
        // Landing_CRM
        // Landing_CRM2
        //
        function registerSubmitPopup2Landing() {
            //Solicitar nuevo demo - No modal2
            $("#popup_1.f2").on("submit", function (e) {
                e.preventDefault();
                landingFindDemof2();
            });
        }
        //
        // Landing_CRM
        // Landing_CRM2 
        //
        function landingFindDemof2() {
            $("#popup_1.f2 #errorsFormDemo").css("display", "none");
            $("#popup_1.f2").find("button").attr("disabled", true);
            var email = $("#popup_1.f2 #email").val();
            var company = $("#popup_1.f2 #company").val();
            company = company.replace("&", "");
            var companydemo_crm = $("#companydemo_crm").val();
            var gclid = $("#popup_1.f2 #ad_gclib").val();
            var campaign = $("#campaign").val();
            var campaignid = $("#campaignid").val();
            var sector = $("#popup_1.f2 #sector").val();
            var _token = $("#popup_1 [name='_token']").val();
            var mobileFlag = $("#popup_1.f2 #mobileFlag").val();

            var captcha = $("#popup_1.f2 .captcha").val();
            var captchaNumberOne = $("#popup_1.f2 .captchaNumberOne").val();
            var captchaNumberTwo = $("#popup_1.f2 .captchaNumberTwo").val();

            $('#empresa').val(company);
            $('input[name="Nombre de la Empresa"]').val(company);
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: settings.url_domain + "find-demo",
                data: {
                    _token: _token,
                    email: email,
                    company: company,
                    gclid: gclid,
                    campaign: campaign,
                    sector: sector,
                    captcha: captcha,
                    captchaNumberOne: captchaNumberOne,
                    captchaNumberTwo: captchaNumberTwo
                },
                beforeSend: function () {
                    // setting a timeout
                    $("#gif_loader2").fadeIn();
                    $("#popup_1.f2").find("button").attr("disabled", true);
                },
                success: function (msg) {
                    $("#gif_loader2").fadeOut();
                    $("#popup_1.f2").find("button").attr("disabled", false);
                    if (!msg.success) {
                        var data = "";
                        $.each(msg.result, function (indexInArray, valueOfElement) {
                            data += "<li>" + valueOfElement + "</li>";
                        });
                        $("#popup_1.f2 #errorsFormDemo ul").html(data);
                        $("#popup_1.f2 #errorsFormDemo").css("display", "block");
                    } else if(msg.success == 'robot'){
                        $("#popup_1.f2 #errorsFormDemo ul").html(msg.result);
                        $("#popup_1.f2 #errorsFormDemo").css("display", "block");
                    }else if (msg.success == 'showPopup') {
                        $("#duplicateEmail").show();
                        if (mobileFlag == 'mobile') {
                            try {
                                if (getPlataform() == "android") {
                                    $("#access_crm").on("click", function () {
                                        Android.loadDemo(msg.result.crm);
                                    });
                                } else if (getPlataform() == "ios") {
                                    $("#access_crm").on("click", function () {
                                        webkit.messageHandlers.demoAction.postMessage(
                                            msg.result.crm
                                        );
                                    });
                                }
                            } catch (err) {
                            }
                        } else {
                            /*Cambio para ajustar la plantilla landign_CRM.blade.php*/
                            $('#flag_crm').val();
                            crm = msg.result.url + '?email=' + msg.result.email;
                            recover_password = msg.result.url + '?user_name=' + msg.result.user_name + '&email=' + msg.result.email + '&demo=1';
                            $("#access_crm").attr("href", crm);
                            $("#recover_password").attr("href", recover_password);
                            $("#modalemail").modal('show');
                        }
                    } else {
                        $("#popup_1.f2 #email").val("");
                        $("#popup_1.f2 #company").val("");
                        redirecCreateCrm(email, company, gclid, msg.result, campaign, campaignid, sector, mobileFlag);
                    }
                }
            });
        }
        //
        // mobile.blade.php
        // landing_CRM
        // landing_CRM2 
        //
        function registerSubmitPopup1Mobile() {
            /*Creacion de demos desde la app*/
            $("#popup_1mobile.f2").on("submit", function (e) {
                $("#popup_1mobile.f2 #errorsFormDemo").css("display", "none");
                e.preventDefault();
                $("#popup_1mobile.f2").find("button").attr("disabled", true);
                var email = $("#popup_1mobile.f2 #email").val();
                var company = $("#popup_1mobile.f2 #company").val();
                company = company.replace("&", "");
                var gclid = $("#popup_1mobile.f2 #ad_gclib").val();
                var campaign = $("#campaign").val();
                var campaignid = $("[name='Campaña']").val()
                var sector = $("#popup_1mobile.f2 #sector").val();
                var _token = $("#popup_1 [name='_token']").val();
                var mobileFlag = $("#popup_1mobile.f2 #mobileFlag").val();
                $('#empresa').val(company);
                $('input[name="Nombre de la Empresa"]').val(company);
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: settings.url_domain + "find-demo",
                    data: {
                        _token: _token,
                        email: email,
                        company: company,
                        gclid: gclid,
                        campaign: campaignid,
                        sector: sector
                    },
                    beforeSend: function () {
                        // setting a timeout
                        $("#gif_loader2").fadeIn();
                        $("#popup_1mobile.f2").find("button").attr("disabled", true);
                    },
                    success: function (msg) {
                        $("#gif_loader2").fadeOut();
                        $("#popup_1mobile.f2").find("button").attr("disabled", false);
                        if (!msg.success) {
                            var data = "";
                            $.each(msg.result, function (indexInArray, valueOfElement) {
                                data += "<li>" + valueOfElement + "</li>";
                            });
                            $("#popup_1mobile.f2 #errorsFormDemo ul").html(data);
                            $("#popup_1mobile.f2 #errorsFormDemo").css("display", "block");
                        } else if (msg.success == 'showPopup') {
                            $("#contact").hide();
                            $("#duplicateEmail").show();
                            if (mobileFlag == 'mobile') {
                                try {
                                    if (getPlataform() == "android") {
                                        $("#access_crm").on("click", function () {
                                            Android.loadDemo(email, msg.result.crm);
                                        });
                                    } else if (getPlataform() == "ios") {
                                        $("#access_crm").on("click", function () {
                                            webkit.messageHandlers.demoAction.postMessage(
                                                email
                                            );
                                        });
                                    }
                                } catch (err) {
                                    console.log('The native context does not exist yet');
                                }
                            }
                        } else {
                            $("#popup_1mobile.f2 #email").val("");
                            $("#popup_1mobile.f2 #company").val("");
                            redirecCreateCrm(email, company, gclid, msg.result, campaign, campaignid, sector, mobileFlag);
                        }
                    }
                });
            });
        }
        //
        // create-demo-view-mobile.blade.php
        //
        function registerSubmitPopup2Mobile() {
            //Enviar info demo (segundo popup) Mobile
            $("#popup_2mobile").on("submit", function (e) {
                e.preventDefault();
                $("#gif_loader_demo").fadeIn();
                $("#gif_loader_demo_mobile").fadeIn();
                if ($('#mobileFlag_crm').val() != 'mobile') {
                    $("#modalCrmData").modal('hide');
                }
                $("#errorsFormInfo").css("display", "none");
                var intevalo = setInterval(function () {
                    $("#popup_2mobile").find("button").attr("disabled", true);
                    if ($('#flag_crm').val() != '' && $('#flag_crm_demo').val() != '') {
                        clearInterval(intevalo);
                        var nombre = $("#nombre").val();
                        var telefono = $("#telefono").val();
                        var ciudad = $("#ciudad").val();
                        var usuarios = $("#usuarios").val();
                        var sector = $("#sector").val();
                        var company_crm = $("#company_crm").val();
                        var email_crm = $("#email_crm").val();
                        var companydemo_crm = $("#send_demo_to_rd").val();
                        var ad_gclid = $('#gclid_crm').val();
                        var description_crm = $('#description_crm').val();
                        var campaignid = $("input[name='Campaña']").val()
                        var mobileFlag = $('#mobileFlag_crm').val();
                        var password_new = $("input[name='new_password']").val();
                        $("#name").val(nombre);
                        $.ajax({
                            type: "GET",
                            url: settings.url_domain + "save-demo-info",
                            data: {
                                type_extern: 'app',
                                nombre: nombre,
                                telefono: telefono,
                                ciudad: ciudad,
                                usuarios: usuarios,
                                sector: sector,
                                company: company_crm,
                                email: email_crm,
                                ad_gclid: ad_gclid,
                                companydemo: $("#send_demo_to_rd").val(),
                                description: description_crm,
                                campaignid: campaignid
                            },
                            success: function (msg) {
                                $("#gif_loader_demo").fadeOut();
                                $("#gif_loader_demo_mobile").fadeOut();
                                $("#popup_2mobile").find("button").attr("disabled", false);
                                if (!msg.success) {
                                    var data = "";
                                    $.each(msg.result, function (indexInArray, valueOfElement) {
                                        data += "<li>" + valueOfElement + "</li>";
                                    });
                                    $("#errorsFormInfo ul").html(data);
                                    $("#errorsFormInfo").css("display", "block");
                                    if (mobileFlag != 'mobile') {
                                        $("#modalCrmData").modal('show');
                                    }
                                } else {
                                    $("#nombre").val("");
                                    $("#telefono").val("");
                                    $("#ciudad").val("");
                                    if (mobileFlag == 'mobile') {
                                        try {
                                            if (getPlataform() == "android") {
                                                Android.loadDemo(email_crm, msg.crm);
                                            } else if (getPlataform() == "ios") {
                                                webkit.messageHandlers.demoAction.postMessage(
                                                    email_crm
                                                );
                                            }
                                        } catch (err) {
                                            console.log('The native context does not exist yet');
                                        }
                                    } else {
                                        if (detect_platform()) showMobile();
                                        else window.location = $('#flag_crm').val();
                                    }
                                }
                            }
                        });
                    }
                }, 3000);
            });
        }
        //
        // create-demo-view-mobile
        // create-demo-view
        // landing_CRM                
        // landing_CRM2
        //
        function setCampaignIdCrm() {
            if ($("#campaignid_crm").val()) {
                $("#campaign").val($("#campaignid_crm").val());
            }
        }
        //
        //  modals.blade.php
        //
        function redirecCreateCrm(email, company, gclid, url, campaign, campaignid, sector, mobileFlag) {
            var gclid = (gclid === undefined) ? '' : gclid;
            var campaign = (campaign === undefined) ? '' : campaign;
            var campaignid = (campaignid === undefined) ? '' : campaignid;
            var data = url + "create-demo-view?company=" + company + "&email=" + email + "&gclid=" + gclid + "&description=" + campaign + "&campaignid=" + campaignid + "&sector=" + sector + "&mobileFlag=" + mobileFlag;
            window.location = data;
        }
        //
        // modals.blade.php
        //
        function hideErrors() {
            $("#errorsFormDemo").css("display", "none");
        }
        //
        // modals.blade.php
        //
        function showErrors() {
            $("#errorsFormDemo").css("display", "block");
        }
        //
        // modals.blade.php
        //
        function disableButtonPopup1() {
            $("#popup_1.modalDemo").find("button").attr("disabled", true);
        }
        //
        // modals.blade.php
        //
        function enableButtonPopup1() {
            $("#popup_1.modalDemo").find("button").attr("disabled", false);
        }
        //
        // create-demo-view.blade.php
        // create-demo-view-mobile.blade.php
        //
        function getPlataform() {
            if (detect_platform() == "https://play.google.com/store/apps/details?id=com.datacrm.application") {
                return "android";
            } else if (detect_platform() == "https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8") {
                return "ios";
            } else {
                return "web";
            }
        }
        //
        // create-demo-view.blade.php
        // create-demo-view-mobile.blade.php
        //
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
        //
        // create-demo-view.blade.php
        // create-demo-view-mobile.blade.php
        //
        function showMobile() {
            if (detect_platform()) $("#modalMobile").modal('show');
        }

        return _demosConstruct;
    }

    if (typeof (window.demos) === 'undefined') {
        window.demos = demos();
    }
})(window);

$(document).ready(function () {
    demos.init({});
});
