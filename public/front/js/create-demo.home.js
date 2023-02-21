/*
* SEO
* create-demo.home.js
* Modulo para ser utilizado con modals en el home
* 05-07-2022
* se optimiza para seo, 
* modulo original create-demo.js
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
            url_domain: buildURL2(),
            key_site_captcha: '6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf',
        };

        function buildURL(){
            let mystring = "";
            let myUrl = window.location.origin + window.location.pathname;
            if (window.location.hostname === 'code-pruebas.datacrm.la'){
                let myindex = myUrl.indexOf("public/");
                mystring = myindex != -1 ? myUrl.substring(0, myindex + 7) : myUrl;
            } else {
                mystring = 'https://www.datacrm.com/';
            }
            return mystring;
        }

        /*
        *
        *
        *  funcion para determinar el dominio donde esta (prod o pruebas)
        *
        */
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

        var setData = function () {
            registerSubmitPopup1();             // modals.blade.php
            initModals();
        }
        function initModals(){
            $("#modalPruebaGratis").on('hidden.bs.modal', function () {
                /*
                leam
				alert("Esta accion se ejecuta al cerrar el modal o perder el foco con click " + $("#modalPruebaGratis").css("display"))
                alert("Esta accion se ejecuta al cerrar el modal o perder el foco con click " + $("#modalemail2").css("display"))                
                */
                $("#modalPruebaGratis #modalcontent1").css("display", "block");
                $("#modalPruebaGratis #modalemail2").css("display", "none");                
			});
            $("#modalPruebaGratis #modalemail2 #access_crm").on("click", function  (){
                $("#modalPruebaGratis").trigger("click");         
                   
            });
            
            $("#modalPruebaGratis #modalemail2 #recover_password").on("click", function  (){
                $("#modalPruebaGratis").trigger("click");         
                   
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

            // let mystring = "";
            // if (window.location.hostname === 'code-pruebas.datacrm.la'){
            //     let myindex = settings.url_domain.indexOf("public/");
            //     mystring = myindex != -1 ? settings.url_domain.substring(0, myindex + 7) : settings.url_domain;
            // } else {
            //     mystring = settings.url_domain;
            // }
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
                            // $(".modalPruebaGratis").trigger('click');

                            var crm = result.url + '?email=' + result.email;
                            var recover_password = result.url + '?user_name=' + result.user_name + '&email=' + result.email + '&demo=1';
                            $("#access_crm").attr("href", crm);
                            $("#recover_password").attr("href", recover_password);

                            $("#modalPruebaGratis #modalcontent1").css("display", "none");
                            $("#modalPruebaGratis #modalemail2").css("display", "block");
                          

                            // $("#modalemail").modal('show');   
                            
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
                },
                error: function(jqxhr, status, exception) {
                    // alert('Exception 1 :' + status + ' - ' + JSON.stringify(jqxhr), exception);
                }                
            });
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
        return _demosConstruct;
    }

    if (typeof (window.demos) === 'undefined') {
        window.demos = demos();
    }
})(window);

$(document).ready(function () {
    
    demos.init({});
});
