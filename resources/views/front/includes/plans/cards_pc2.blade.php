<section id="myPriceSeccion">
<div class="container text-center">
    <div class="myBarLeft" id="leftbarprice">
        <div class="row justify-content-center">
                <div class ="col-12 mx-auto  d-none d-lg-block" >
                        <div class="myBarTop typ-montserrat">
                            <ul class=" mt-3">
                                <li><a class="txt-black changePlan" href="javascript:void(0)" data-flag="co">COP $</a></li>
                                <li><a class="txt-black changePlan" href="javascript:void(0)" data-flag="mx">MXN $</a></li>
                                <li><a class="txt-black changePlan" href="javascript:void(0)" data-flag="ec">USD $</a></li>
                                <li><a class="txt-black changePlan" href="javascript:void(0)" data-flag="ch">CLP $</a></li>
                                <li><a class="txt-black changePlan" href="javascript:void(0)" data-flag="pe">PEN $</a></li>
                            </ul>
                        </div>
                </div>        
        </div>   
    </div>  
    
  
    <div class="planszone">
        <div class="row justify-content-center text-center">
            <div class="myBarLeft2 typ-montserrat ">

                <nav class="nav nav-pills nav-fill myBarLeft2 ">
                    <a class="txt-black changePlan nav-link active" href="javascript:void(0)" data-flag="co">COP $</a>
                    <a class="txt-black changePlan nav-link" href="javascript:void(0)" data-flag="mx">MXN $</a>
                    <a class="txt-black changePlan nav-link" href="javascript:void(0)" data-flag="ec">USD $</a>
                    <a class="txt-black changePlan nav-link" href="javascript:void(0)" data-flag="ch">CLP $</a>
                    <a class="txt-black changePlan nav-link" href="javascript:void(0)" data-flag="pe">PEN $</a></li>  
                </nav>
            </div>
            
          
            <div class="card col-lg-3 col-md-8 px-3 pt-0 myPlansContainerB align-items-center">
                <div class="card-body">
                <div class="align-items-center justify-content-center">
                    <h5 class="text-uppercase card-title txt-orange typ-montserrat f-sz-b font-weight-bold">
                        {!! $site['p2_home_seccion_plangratuito_title'] ?? '' !!}
                    </h5>
                </div>
    
                <div class="mt-5" style="height: 10%">
                    <span class="txt-display  txt-black typ-montserrat font-sz-2 price0 price_" 
                            data-valor=0> $0
                    </span>  
                </div>

                <div style="height: 2%; margin-left: 10%;">
                    <hr class="col-10 hr-card"/>
                </div>

                <div class="mt-1" style="height: 10%;">
                    <h5 class="typ-montserrat"><b>{!! $site['p2_home_seccion_plangratuito_subtitle2'] ?? '' !!}</b></h5>
                    <span   class="typ-txt-light typ-montserrat">* 
                        <a class="myLink" 
                            href="https://www.datacrm.com/politicas/" 
                            target="_blank" rel="noopener noreferrer">
                            {!! $site['p2_home_seccion_plangratuito_terminos'] ?? '' !!}
                        </a>
                    </span>
                    <br>
                </div>
               
                <div class="mt-3" >
                    
                    <p class="txt-orange typ-montserrat">                
                        {!! $site['p2_home_seccion_plangratuito_funcionalidades'] ?? '' !!}
                    </p>    
                    <ul class="typ-montserrat text-left" align="left" style="font-size: 0.8rem;">                  
                        @for($i=1;$i<6;$i++)
                            @if($site['p2_home_seccion_plangratuito_funcionalidad' . $i])
                                <li>{!! $site['p2_home_seccion_plangratuito_funcionalidad' . $i] ?? '' !!}</li>
                            @endif
                        @endfor                  
                    </ul>
                </div>

                
                <div class="typ-montserrat mt-3" style="height: 9%;">
                    <p>
                        {!! $site['p2_home_seccion_plangratuito_descuento'] ?? '' !!}
                    </p>
                </div>

                
                <div class="mt-1"  styl="height: 5%;">
                    <p>
                        <span class="txt-blackgray typ-txt-light txt-display ">
                            {!! $site['p2_home_seccion_plangratuito_usuarios'] ?? '' !!}
                        </span>
                    </p>
                </div>

              
                <div class="mx-auto" style="height: 2%;">
                    <hr class="col-10 hr-card mt-2 mb-1"/>
                </div>

                <div style="height: 5%;">
                    <a  href="javascript:void(0)" data-users="50" data-toggle="modal" data-target="#modalPruebaGratis" class="modalPruebaGratis typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-orange effect-zoom  mb-5" 
                        style="border-radius: 1rem"> {!! $site['p2_home_seccion_plangratuito_textoboton'] ?? '' !!}
                    </a>
                </div>

        </div>
    </div>

    
    <div class="card col-lg-3 col-md-8 px-3 pt-0 myPlansContainer align-items-center">    
        <div class="card-body" style="height: 100%;">
            <div class="align-items-center justify-content-center" style="height: 5%;">
                <h5 class="
                    text-uppercase 
                    card-title
                    txt-greenblue
                    typ-montserrat 
                    f-sz-b 
                    font-weight-bold">
                    {!! $site['p2_home_seccion_planbasico_title'] ?? '' !!}
                </h5>
            </div>
            <!-- Precio -->
            <div class="mt-5" style="height: 10%">
                <span class="txt-display  txt-black typ-montserrat font-sz-2 price1 price_"  data-valor=50000>
                    $50.000/COP mes
                </span>  
                <p class="pricedes1">Factura anual</p>
            </div>

            <div class="mx-auto" style="height: 2%;">
                <hr class="col-10 hr-card"></hr>        
            </div>

            <!-- Por usuario-->
            <div class="mt-1">
                <h5 class="typ-montserrat"><b>{!! $site['p2_home_seccion_planbasico_subtitle2'] ?? '' !!}</b></h5>
            </div>
            <div class="txt-orange typ-montserrat mt-1 mb-5" >
                <p>
                    {!! $site['p2_home_seccion_planbasico_descuento'] ?? '' !!}
                </p>
            </div>  

            
               

            <!-- Principales funcionalidades -->
            <div class="mt-3"  style="height: 9rem;  width: 20rem; overflow: hidden;">
                <p class="txt-greenblue typ-montserrat">                
                {!! $site['p2_home_seccion_planbasico_funcionalidades'] ?? '' !!}
                </p>                
                <ul class="typ-montserrat text-left" align="left" style="font-size: 0.8rem;">
                    @for($i=1;$i<6;$i++)
                        @if($site['p2_home_seccion_planbasico_funcionalidad' . $i])
                            <li>{!! $site['p2_home_seccion_planbasico_funcionalidad' . $i] ?? '' !!}</li>
                        @endif
                    @endfor
                </ul>
            </div>


            <!-- implementacion -->
            <div  class="typ-txt-light typ-montserrat mt-3 mb-3">* 
                {!! $site['implementacion_planbasico_usuarios'] ?? '' !!} <span class="implementation"></span>
            </div>
           

            <!-- 2 Usuarios sin Costo -->
            <div class="mt-1 txt-orange" style="height: 5%;">
                <span class="txt-blackgray typ-txt-light txt-display ">
                    <p>
                        {!! $site['p2_home_seccion_planbasico_usuarios'] ?? '' !!}
                    </p>
                </span>
                <br>
            </div>

        
            <div class="mx-auto" style="height: 2%;">
                <hr class="col-10 hr-card mt-2 mb-1"/> 
            </div>            
            <div style="height: 5%;">
                <a  href="javascript:void(0)" data-users="50" data-toggle="modal" data-target="#modalPruebaGratis" class="modalPruebaGratis typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 
                    btn-greenblue effect-zoom mb-3" style="border-radius: 1rem">
                    {!! $site['p2_home_seccion_planbasico_textoboton'] ?? '' !!}
                </a>
            </div>

        </div>
    </div>


    <div class="card col-lg-3 col-md-8 px-3 pt-0 myPlansContainerB align-items-center">
       
        <div class="card-body" style="height: 100%;">
            <!-- PRO -->
            <div class="align-items-center justify-content-center" style="height: 5%;">
                <h5 class="
                    text-uppercase 
                    card-title
                    txt-blue 
                    typ-montserrat 
                    f-sz-b 
                    font-weight-bold">
                    {!! $site['p2_home_seccion_planpro_title'] ?? '' !!}
                </h5>
            </div>
            <!-- Precio -->
            <div class="mt-5" style="height: 10%">
                <span class="txt-display  txt-black typ-montserrat font-sz-2 price2 price_" 
                        data-valor=80000>
                    $80.000/COP mes
                </span>  
                <p class="pricedes2">Factura anual</p>          
            </div>

            <div class="mx-auto" style="height: 2%;">
                <hr class="col-10 hr-card"></hr>        
            </div>

            
            <!-- Por usuario -->
            <div class="mt-1">
                <h5 class="typ-montserrat"><b>{!! $site['p2_home_seccion_planpro_subtitle2'] ?? '' !!}</b></h5>
            </div>

            <div class="txt-orange typ-montserrat mt-1 mb-5" >
                <p>
                    {!! $site['p2_home_seccion_planpro_descuento'] ?? '' !!}
                </p>
            </div>   

            <!-- Principales funcionalidades -->
            <div class="mt-3"  style="height: 9rem;  width: 20rem; overflow: hidden;">
                <p class="txt-blue typ-montserrat">                
                    {!! $site['p2_home_seccion_planpro_funcionalidades'] ?? '' !!}
                </p>                
                <ul class="typ-montserrat text-left" align="left" style="font-size: 0.8rem;">
                @for($i=1;$i<6;$i++)
                    @if($site['p2_home_seccion_planpro_funcionalidad' . $i])
                        <li>{!! $site['p2_home_seccion_planpro_funcionalidad' . $i] ?? '' !!}</li>
                    @endif
                @endfor                
                                 
                </ul>
            </div>

            <!-- Descuento -->
             
            <!-- implementacion -->
            <div  class="typ-txt-light typ-montserrat mt-3 mb-3">* 
                {!! $site['implementacion_planbasico_usuarios'] ?? '' !!} <span class="implementation"></span>
            </div>

            <!-- 2 Usuarios sin Costo -->
            <div class="mt-1" style="height: 5%;">
                <p>
                    <span class="txt-blackgray typ-txt-light txt-display ">
                        {!! $site['p2_home_seccion_planpro_usuarios'] ?? '' !!}
                    </span>
                </p>
                <br>
            </div>

            <div class ="mx-auto" style="height: 2%;">
                <hr class="col-10 hr-card mt-2 mb-1"></hr>  
            </div>
            <div style="height: 5%;">
                <a  href="javascript:void(0)" 
                    data-users="50" 
                    data-toggle="modal" 
                    data-target="#modalPruebaGratis" 
                    class="modalPruebaGratis typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 
                    myBtnBlue effect-zoom mb-3" 
                    style="border-radius: 1rem">
                    {!! $site['p2_home_seccion_planpro_textoboton'] ?? '' !!}
                </a>
            </div>
        </div>
    </div>

   
    </div>
    </div>
</div>
</section>
