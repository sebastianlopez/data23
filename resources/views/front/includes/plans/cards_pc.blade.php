

<div class="justify-content-center" id="planesPc">
    <div class="card col-3 px-3 pt-0 pb-4 plans-container" style="background-size: contain;background-position: center;background-repeat: no-repeat;margin: 20px 25px 0 20px;">

    
        <div class="card-body" style="height: 60%;">
            <div style="height: 10%;">
                <h5 class="cacol-sm-3 rd-title text-uppercase mt-3 mb-1 txt-orange typ-montserrat f-sz-b font-weight-bold">
                    {!! $site['plan1_title'] ?? '' !!}
                </h5>
            </div>
            <div style="height: 30%;">
                <img    data-src="{{asset('front/images/planes/icono1.png')}}" 
                    class="img-card mb-2 lazyload" 
                    style='height: 8.4rem'>            
            </div>

            <div style="height: 15%">
                <span class="txt-display mt-4 txt-black typ-montserrat f-sz-b price0 price_" data-valor=0>
                    $0
                </span>            
            </div>

            <div style="height: 5%; margin-left: 10%;">
                <hr class="col-10 hr-card mt-2 mb-1"></hr>        
            </div>

            <div style="height: 30%;">
                <p class="card-text txt-orange mb-0 typ-montserrat">
                   
                    <!-- Acceso Limitado -->
                    
                    <span class="txt-orange typ-montserrat txt-display mt-1 mb-3">
                        {!! $site['plan1_subtitle'] ?? '' !!}
                    </span>
                    <br>
                    <span   class="txt-greenblue typ-txt-light txt-display mb-5">* 
                            <a class="link-politicasGreen" 
                                id="link-politicasGreen"
                                href="https://www.datacrm.com/politicas/" 
                                target="_blank" rel="noopener noreferrer">
                            {!! $site['plan1_subtitle2'] ?? '' !!}
                            </a>
                    </span>
                    <br>                
                </p>
            </div>

            <!-- 2 Usuarios sin Costo -->

            <div styl="height: 10%;">
                <span class="txt-blackgray typ-txt-light txt-display f-sz-sm">
                    {!! $site['plan1_subtitle3'] ?? '' !!}
                </span>
                <br>
            </div>

            <div style="height: 5%; margin-left: 10%;">
                <hr class="col-10 hr-card mt-2 mb-1"></hr>  
            </div>
        </div>
         
        <!-- <div class="card-footer text-muted" style="height: 15%;"> -->
        <div class="card-body text-muted" style="height: 5%;">

            <a  href="javascript:void(0)" 
                    data-users="50" 
                    data-toggle="modal" 
                    data-target="#modalPruebaGratis" 
                    class="modalPruebaGratis typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-orange effect-zoom mb-3" 
                    style="border-radius: 1rem">
                    {!! $site['plan1_btn'] ?? '' !!}
                </a>
        </div>
    </div>


    <!-- Basico -->


    <div class="card col-3 px-3 pt-0 pb-4 plans-container" style="background-size: contain;background-position: center;background-repeat: no-repeat;margin: 20px 25px 0 20px;">
    <!-- <div class="card" style="background-size: contain;background-position: center;background-repeat: no-repeat;margin: 20px 25px 0 20px;">     -->

        <div class="card-body" style="height: 60%;">
            <div style="height: 10%;">
                <!-- Gratuito -->
                <h5 class="card-title text-uppercase mt-3 mb-1 txt-greenblue typ-montserrat f-sz-b font-weight-bold">                        
                    {!! $site['plan2_title'] ?? '' !!}
                </h5>
            </div>
            <!-- Imagen plan -->
            <div style="height: 30%;">                
                <picture>
                    <source 
                        type="image/png"
                        data-srcset="{{asset('front/images/planes/icono2_120x95.webp')}}" >
                    <img 
                        data-src="{{asset('front/images/planes/icono2_120x95.png')}}" 
                        class="img-card lazyload img-fluid" 
                        style="height: 8rem;width: 10rem;">
                </picture>
            </div>
            <div style="height: 15%">
                <span class="txt-display mt-4 txt-black typ-montserrat f-sz-b price1 price_" data-valor=32000>
                    $32.000
                </span>            
            </div>

            <div style="height: 5%; margin-left: 10%;">
                <!-- <hr class="col-8 hr-card mt-1 mb-3"></hr>       -->
                <hr class="col-10 hr-card mt-2 mb-1"></hr>        
            </div>

            <!-- Por usuario mes/ Facturacion/Anual -->
            
            <div style="height: 30%;">    
                <p class="card-text txt-orange mb-0 typ-montserrat">
                    <span class="txt-greenblue typ-montserrat txt-descuento font-weight-bold diplay-line-heigth">
                        {!! $site['plan2_subtitle'] ?? '' !!}
                    </span>
                    <!-- <span class="txt-orange typ-montserrat txt-display porcentaje-desc font-weight-bold mt-4 mb-3">AHORRA 20%</span> -->
                    <br>
                    <br>
                    <br>
                    <br>
                    <span class="txt-blackgray d-none ivaP"> +7% ITBMS en Panamá</span> 
                </p>
            </div>

            <div styl="height: 10%;">
                <span class="txt-blackgray typ-txt-light txt-display f-sz-sm">
                    {!! $site['plan2_subtitle3'] ?? '' !!}
                </span>
            </div>    
            <div style="height: 5%; margin-left: 10%;">
                <!-- <hr class="col-8 hr-card mt-1 mb-3"></hr>       -->
                <hr class="col-10 hr-card mt-2 mb-1"></hr>        
            </div>
            

            <!-- <a  href="javascript:void(0)" 
                data-users="50" 
                class="modalPagosView typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-greenblue effect-zoom">¡LO QUIERO!</a>  -->
  
        </div>

        <!-- <div class="card-footer text-muted" style="height: 15%;"> -->
        <div class="card-body text-muted" style="height: 5%;">        
            <a  href="javascript:void(0)" 
                    data-users="50"
                    data-toggle="modal" 
                    data-target="#modalPruebaGratis"             
                    class="modalPruebaGratis typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-greenblue effect-zoom">
                    {!! $site['plan2_btn'] ?? '' !!}
                </a>             
        </div>

    </div>          
 
    <!-- PRO -->

    <div class="card col-3 px-3 pt-0 pb-4 plans-container" style="background-size: contain;background-position: center;background-repeat: no-repeat;margin: 20px 25px 0 20px;">
    <!-- <div class="card" style="background-size: contain;background-position: center;background-repeat: no-repeat;margin: 20px 25px 0 20px;">     -->
        <div class="card-body" style="height: 60%;">
            <div style="height: 10%;">
                <h5 class="card-title text-uppercase mt-3 mb-1 txt-bluedark typ-montserrat f-sz-b font-weight-bold">

                        {!! $site['plan3_title'] ?? '' !!}
                    
                </h5>
            </div>
            <div style="height: 30%;">                
                <picture>    
                    <source type="image/webp" srcset="{{asset('front/images/planes/icono3_120x100.webp')}}">
                    <img src="{{asset('front/images/planes/icono3_120x100.png')}}"
                    alt="Automatiza Proceso" 
                    class="img-card lazyload img-fluid"
                    style="height: 8rem;width: 10rem;"
                    >
                </picture>
            </div>
            <div style="height: 15%">
                <span class="txt-display mt-4 txt-black typ-montserrat f-sz-b price2 price_" data-valor=32000>
                    $32.000
                </span>            
            </div>

            <div style="height: 5%; margin-left: 20%;">
                <!-- <hr class="col-8 hr-card mt-1 mb-3"></hr>       -->
                <hr class="col-8 hr-card mt-2 mb-1"></hr>        
            </div>

            <div style="height: 30%;">    
            <p class="card-text txt-orange mb-0 typ-montserrat">


                <span class="txt-greenblue typ-montserrat txt-descuento font-weight-bold diplay-line-heigth">
                  {!! $site['plan3_subtitle'] ?? '' !!}
                </span>
                <!-- <span class="txt-orange typ-montserrat txt-display porcentaje-desc font-weight-bold mt-4 mb-3">AHORRA 20%</span> -->
                <br>
                <br>
                <br>

                <br>

                <span class="txt-blackgray d-none ivaP"> +7% ITBMS en Panamá</span> 

            </p>
            </div>

            <div styl="height: 10%;">
                <span class="txt-blackgray typ-txt-light txt-display f-sz-sm">
                    {!! $site['plan3_subtitle3'] ?? '' !!}
                </span>
            </div>    
            <div style="height: 5%; margin-left: 20%;">
                <!-- <hr class="col-8 hr-card mt-1 mb-3"></hr>       -->
                <hr class="col-8 hr-card mt-2 mb-1"></hr>        
            </div>
            

            <!-- <a  href="javascript:void(0)" 
                data-users="50" 
                class="modalPagosView typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-greenblue effect-zoom">¡LO QUIERO!</a>  -->
  
        </div>

        <!-- <div class="card-footer text-muted" style="height: 15%;"> -->
        <div class="card-body text-muted" style="height: 5%;">        
            <a  href="javascript:void(0)" 
                    data-users="50"
                    data-toggle="modal" 
                    data-target="#modalPruebaGratis"             
                    class="modalPruebaGratis typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-bluedark  effect-zoom">
                    {!! $site['plan3_btn'] ?? '' !!}
                </a>             
        </div>

    </div>     
    

</div>