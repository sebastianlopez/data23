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


