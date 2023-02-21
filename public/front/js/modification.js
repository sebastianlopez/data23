/*
*
* SEO
* 14-07-2022
* Se reemplaza este js por el minimo requerido .home.js
* Luis Arellano
*
*/
$(document).ready(function () {

        //
        // ContactController.php
        // PayUController.php
        // PayUDataMKTController.php
        // accompaniment_plan.blade.php
        // dataMKT_payu.blade.php
        // payu.blade.php
        // DataMKT.blade.php
        // refer_payu_whatsapp.blade.php
        // refer_payu.blade.php
        //
        $("#buyer_name").keyup(function() {
            $("#name").val($("#buyer_name").val());
        });
        
        //
        // plans.home.js
        // main_refer_payu.js
        // refer_payu.blade.php
        //
        $(window).resize(function(){

            if ( ($(window).width() >= 500) && ($(window).width() <= 800)) { 
                $("#resumen").removeClass("col-6");
                $("#resumen").addClass("col-12");
                $("#resumen").addClass("text-center");
                $("#resumen").addClass("mt-4");
                $("#resumen").addClass("mt-4");
                $("#pay").removeClass("col-6");
                $("#pay").addClass("col-12");
                $("#resumen").css("padding-right", "10%");

            } else if($(window).width() <= 500) {  
                $("#resumen").removeClass("col-6");
                $("#resumen").removeClass("padding-l");
                $("#resumen").addClass("col-12");
                $("#resumen").addClass("text-center");
                $("#resumen").removeClass("mt-4");
                $("#resumen").removeClass("mt-4");
                $("#resumen").addClass("mt-0");
                $("#resumen").addClass("mt-0");
                $("#pay").removeClass("col-6");
                $("#pay").addClass("col-12");
            }     
     
        });
        // 
        // main.home.js
        // plans.home.js
        // refer_payu.blade.php
        //
        $( '#check_accompaniment' ).on( 'click', function() {
            if( $(this).is(':checked') ){
                $("#resumen").hide();

            } else {
                $("#resumen").show();
            }
        });
        //
        // plans.blade.php
        // plansection.blade.php
        // compare_mobile.blade.php
        // compare_pc.blade.php
        //
        $(".chevron").click(function() {
            var data = $(".chevron").data("value");
            if(!data){
                $(".chevron").data("value", true);
                $(".chevron").removeClass("fa-chevron-down");
                $(".chevron").addClass("fa-chevron-up");
                $(".feature-1").slideDown("slow");
                $(".feature").slideDown("slow");

            }else{
                $(".chevron").data("value", false);    
                $(".chevron").removeClass("fa-chevron-up");
                $(".chevron").addClass("fa-chevron-down");
                $(".feature-1").slideUp("slow");
                $(".feature").slideUp("slow");
            }
        }); 
        //
        // plans.blade.php
        // plansection.blade.php
        // compare_mobile.blade.php
        // compare_pc.blade.php        
        // 
        $(".chevron-movil").click(function() {
            var data = $(".chevron-movil").data("value");
            if(!data){
                $(".chevron-movil").data("value", true);
                $(".chevron-movil").removeClass("fa-chevron-down");
                $(".chevron-movil").addClass("fa-chevron-up");
                $(".feature-2").slideDown("slow");
                $(".feature").slideDown("slow");

            }else{
                $(".chevron-movil").data("value", false);    
                $(".chevron-movil").removeClass("fa-chevron-up");
                $(".chevron-movil").addClass("fa-chevron-down");
                $(".feature-2").slideUp("slow");
                $(".feature").slideUp("slow");
            }
        }); 


    })
    

