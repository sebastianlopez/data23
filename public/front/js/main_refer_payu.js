var url_app = detect_platform();
$(document).ready(function() {

    var country;
    ///////////////NEW //////////
    $('#isAcompa').val('');
    var position_y = window.scrollY;
    var country = $("#country").val();
    var valor = $(".price_").text();
    if ($("#check_accompaniment").is(":checked")) {
        $("#check_accompaniment").trigger('click');
    }
    $("#check_accompaniment").prop("checked", false);
    $("#check_db_capacity").prop("checked", false);
    $("#check_docs_capacity").prop("checked", false);
    $(".tax_co").hide();
   
    //
    // users Selelect
    //
    $("#usuariosPayu").empty();
    excepciones = ['pe', 'pa'];
    users_c = "#usuariosPayu";
    $("#users").show();
    //$("#optionsPlans").show();
    //
    //
    $('#pay').removeClass('mt-4');
    $('#pay').removeClass('col-12');
    $('#pay').addClass('col-6');     

    if (jQuery.inArray($("#country").val(), excepciones) != -1) {
        users_c = "#usuariosPayuEx";
    }

    $("#usuariosPayu").trigger("change");
    $('#resumen').hide();
 
    if (country == "pa") {
        valor = valor.replace(/[^\d,]/g, '');
        valor = valor.replace(',', '.');
        valor = (parseFloat(valor) * 7 / 100) + parseFloat(valor);
        valor = String(valor.toFixed(2));
        valor = valor.replace('.', ',');
        valor = "$" + valor + " USD";
    }

    if($('#refer-payu').val() != "0"){
        valor = $('#refer-payu').val();
    }
    $('.pagoTitlePcs').html(
        "Mensualidad " +
        valor +
        " por usuario"
    );

    var users = $(this).data("users");
    var typePlan = $(".pagoTitlePcs").text();
    $(users_c).html('');
    var info = '<option value="" >Usuarios</option>';
    let textOption = "1";

    var usersQuantity = ($("#make-the-payment-more-one-user").val() == "true") ? 1 : 3 
    for (let index = usersQuantity; index <= 100; index++) {
        info += '<option value="' + index + '" >' + index + "</option>";
    }
    
    $(users_c).append(info);
    
    var total =  $("#refer-payu").val() || "";
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
    if($('#refer-payu').val() != "0"){
        $(".totalPago").html($('#refer-payu').val());
    }else{
        $(".totalPago").html(0);
    }
    $(".country").val(country);
    $(".userPlan").val(users);
    $(".typePlan").val(typePlan);
    $(".totalPagoBase").html(PresentacionTotal);
    $(".totalPagoBase").val(total);
    ////////END /////////////

    //Cambio de precios segun usuarios
    
    if($("#country").val() == 'co'){
        simbolo_money = "CO"
    }else if ($("#country").val() == 'mx'){
        simbolo_money = "MXN"
    }else{
        simbolo_money = "USD"
    }
    
    $(".moneySim").html(simbolo_money)

    $("#usuariosPayu, #usuariosPayuEx").on("change", function() {
        var resultado = "";
        var total = $(".totalPagoBase").val();
        var db_capacity = ($("#check_db_capacity").is(":checked"))? $("#check_db_capacity").val() || 0 : 0;
        var document_capacity = ($("#check_docs_capacity").is(":checked"))? $("#check_docs_capacity").val() || 0 : 0;
        var accompaniment = ($("#check_accompaniment").is(":checked"))? $(".valueAccompaniment").data("valor") || 0 : 0;

        if (db_capacity || document_capacity || accompaniment) {
            $("#resumen").show();
        }else{
            $("#resumen").hide();
        }
        var usuarios = $(this).val();
        val = isFloat(total);

        var totalMore = total * usuarios;
        var pay_monthly = totalMore + parseFloat(db_capacity) + parseFloat(document_capacity);
        //$("#resume_monthly").html(pay_monthly);
        $("#resume_monthly").html("$"+number_format(pay_monthly,0,',','.')+" "+$("#currency").val()).data('valor',pay_monthly);

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
        var codeMoney = $('#currency').val();
        $(".totalPago").text(totalString);
        $("#resume_unit_pay").html("$"+number_format(accompaniment,0,',','.')+" "+$("#currency").val()).data('valor',accompaniment);
        $(".totalPagofinal").val(totalString);
    });
});






