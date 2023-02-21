$(document).ready(function() {
    var urlServer = $("#_url").val();
    var country = $("#country").val();
    var currency_symbol = "";
    var thousands_sep = "";
    var dec_point = "";
    var decimals = 0;

    var google_plan = [
        {
            num: 1,
            label: "1 Campaña",
            price: 400000
        },
        {
            num: 3,
            label: "3 Campañas",
            price: 700000
        },
        {
            num: 5,
            label: "10 Campañas",
            price: 1200000
        }
    ]
    var facebook_plan = [
        {
            num: 1,
            label: "1 Campaña",
            price: 300000
        },
        {
            num: 3,
            label: "3 Campañas",
            price: 500000
        },
        {
            num: 5,
            label: "10 Campañas",
            price: 900000
        }
    ]

    //Simbolo divisa y separadores decimales
    countryConfig(country);

    $("#total").text("0 " + currency_symbol);

    //Cargar campañas en las listas
    setCampaignsList(facebook_plan, "#facebook_campaigns");
    setCampaignsList(google_plan, "#google_campaigns");

    $('#google_campaigns').on('change', function() {
        changeTotal();
    });

    $('#facebook_campaigns').on('change', function() {
        changeTotal();
    });

    $("#check_google").change(function() {
        $('#google_campaigns').toggleClass('d-none');
        changeTotal();
    });

    $("#check_facebook").change(function() {
        $('#facebook_campaigns').toggleClass('d-none');
        changeTotal();
    });

    function countryConfig(country){
        switch (country) {
            case "co":
                currency_symbol = "COP";
                thousands_sep = ".";
                dec_point = ",";
                break;
            case "us":
                currency_symbol = "USD";
                thousands_sep = ",";
                dec_point = ".";
                decimals = 2;
                break;
            default:
                break;
        }
    }

    function getCampaignValue(element){
        return $(element).hasClass("d-none") ? 0 : Number($(element).val());
    }

    function setCampaignsList(plan, element){
        var info = "";
        var price = 0;
        for (var i=0 ; i < plan.length; i++) {
            price = plan[i].price;
            switch (country) {
                case "co":
                    info += '<option value="' + price + '" data-num='+ plan[i].num +'>' + plan[i].label +" $"+ number_format(price, decimals, dec_point, thousands_sep) + "</option>";
                    break;
                case "us":
                    price = convertToUsd(price);
                    price = number_format(price, decimals, dec_point, thousands_sep);
                    info += '<option value="' + price + '" data-num='+ plan[i].num+ '>' + plan[i].label +" $"+ price + "</option>";
                    break;
                default:
                    break;
            }
        }
        $(element).append(info);
    }

    function changeTotal(){
        var numCampaignsG = getCampaignValue("#google_campaigns");
        var numCampaignsF = getCampaignValue("#facebook_campaigns");
        var total = numCampaignsG + numCampaignsF;
        $("#total_payment").val(total);
        $("#total").text(number_format(total, decimals, dec_point, thousands_sep) + " " + currency_symbol);
        $("#price_format").val(number_format(total, decimals, dec_point, thousands_sep));
    }

    function getSelectedCampaigns(checks){
        var campaigns = "";
        for (var i = 0; i < checks.length; i++) {
            if ( $("#check_"+ checks[i]).is(":checked") ) {
                campaigns += $("#check_"+ checks[i]).val()+ "-";
            }
        }
        return campaigns.substring(0, campaigns.length - 1);
    }

    function convertToUsd(total){
        return parseFloat(total) / 3800;//0.00026315789;
    }

    function resetTotal(){
        $("#total_payment").val("0");
        $("#total").text("0 " + currency_symbol);
        $('#google_campaigns').prop('selectedIndex',0);
        $('#google_campaigns').addClass('d-none');
        $('#facebook_campaigns').prop('selectedIndex',0);
        $('#facebook_campaigns').addClass('d-none');
    }

    function validateSelectList(selects){
        var check = true;
        for (var i = 0; i < selects.length; i++) {
            if($("#check_"+selects[i]).is(":checked") && $("#"+selects[i]+"_campaigns"+" option:selected").val() == 0) {
                check = false;
                break;
            }
        }
        if (check == false) {
            errorMessage("Debes seleccionar una campaña");
        }
        return check;
    }

    function validateTotal(){
        var total_payment = $("#total_payment").val();
        if (total_payment == "0" || total_payment == "") {
            errorMessage("Debes seleccionar el canal donde quieres pautar");
            return false;
        }
        return true;
    }

    function getCampaignsDetail(campaigns){
        var detail = "";
        for (var i = 0; i < campaigns.length; i++) {
            if($("#check_"+campaigns[i]).is(":checked") && $("#"+campaigns[i]+"_campaigns").val() != "0"){
                detail += $("#"+campaigns[i]+"_campaigns"+" option:selected").text() + "-";
            }
        }
        return detail.substring(0, detail.length - 1);
    }
    
    function errorMessage(message){
        $("#formPagoDataMKT ul").html(message);
        $("#errorsformPagos").css("display", "block");
        setTimeout(function() {
            $("#errorsformPagos").fadeOut(1500);
        }, 1800);
    }

    //Enviar pago a PayU
    $("#formPagoDataMKT").on("submit", function(e) {
        $("#errorsFormDemo").css("display", "none");
        e.preventDefault();
        var campaigns = getSelectedCampaigns(["google", "facebook"]);
        $("#selected_campaigns").val(campaigns);
        var selects = ["facebook", "google"];
        if (validateSelectList(selects) == true && validateTotal() == true) {  
            $("#campaigns_detail").val(getCampaignsDetail(["google", "facebook"]));
            var formData = $(this).serialize();
            $.ajax({
                url: urlServer + "/DataMKT-payu",
                type: "POST",
                data: formData,
                beforeSend: function() {
                    $("#formPagoDataMKT").find("button").attr("disabled", true);
                },
                success: function(msg) {
                    $(".loader_contact").fadeOut();
                    $("#formPagoDataMKT").find("button").attr("disabled", false);
                    
                    if (!msg.success) {
                        var data = "";
                        $.each(msg.result, function(indexInArray, valueOfElement) {
                            data += "<li>" + valueOfElement + "</li>";
                        });
                        errorMessage(data);
                    } else {
                        $("#modalCompletePay").modal("show");
                        $("#modalCompletePay").on('hidden.bs.modal', function () {
                            $('#formPagoDataMKT').trigger("reset");
                            resetTotal();
                        });
                    }
                }
            });
        }
    });
});