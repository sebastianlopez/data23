<div class="row mt-5" id="planesMovil">

    <!-- Gratuito -->

    <div class="col-8 px-4 pt-1 pb-5 mx-auto plans-container plans-container-movil" style="background-size: contain;background-position: center;background-repeat: no-repeat;margin: 20px 25px 0 20px;">

        <!-- Gratuito -->
        <p style="font-size: 19.29px;" class="text-uppercase mt-3 mb-1 txt-orange typ-montserrat font-weight-bold">
            {!! $site['plan1_title'] ?? '' !!}
        </p>
 
        <img data-src="{{asset('front/images/planes/icono1.png')}}" 
            class="img-card lazyload" 
            style="height: 9.4rem;">

        <p class="txt-orange mb-0 typ-montserrat">
            <span class="txt-display mt-1 txt-blackgray typ-montserrat f-sz-b price0 price_" data-valor=0 style="font-size: 19.29px;">
                $0
            </span>
        </p>
        <hr class="col-8 hr-card mt-1 mb-3">

        <!-- Acceso Limitado -->

        <span class="txt-orange typ-montserrat txt-display mt-1 mb-3 f-sz-sm">
            {!! $site['plan1_subtitle'] ?? '' !!}
        </span>
        <br>

        <!-- Aplican terminos y Condiciones -->

        <span class="txt-blackgray typ-txt-light txt-display mb-5 font-weight-normal ">
            *
            <a    
                id="link-politicasGreen" 
                href="https://www.datacrm.com/politicas/" 
                target="_blank" 
                rel="noopener noreferrer"
                style="font-size: 13px !important; font-weight: bold;"
                >
                {!! $site['plan1_subtitle2'] ?? '' !!}
            </a>
        </span>
        <br>

        <!-- 2 Usuarios sin costo -->

        <span class="txt-blackgray typ-txt-light txt-display mb-2" style="font-size: 10.7px;">
            {!! $site['plan1_subtitle3'] ?? '' !!}
        </span><br>

        <hr class="txt-display col-8 hr-card mt-2 mb-2">

        <!-- Lo quiero -->

        <a href="javascript:void(0)" 
            data-users="50" 
            data-toggle="modal" 
            data-target="#modalPruebaGratis" 
            class="modalPruebaGratis typ-montserrat text-uppercase f-sz-b btn mt-2 px-5 btn-orange effect-zoom mb-3 font-weight-bold" style="font-size: 11.7px; border-radius: 1rem">
            {!! $site['plan1_btn'] ?? '' !!}
        </a>
        <br>
    </div>
    <div class="col-8 px-4 pt-1 pb-5 mx-auto mt-5 plans-container plans-container-movil" style="position:relative; background-size: contain;background-position: center;background-repeat: no-repeat;margin: 20px 25px 0 20px;">

        <!-- Basico -->

        <p style="font-size: 19.29px;" class="text-uppercase mt-3 mb-1 txt-greenblue typ-montserrat f-sz-b font-weight-bold">
            {!! $site['plan2_title'] ?? '' !!}
        </p>
        <picture>
            <source 
                type="image/png"
                data-srcset="{{asset('front/images/planes/icono2_120x95.webp')}}" >
            <img 
                data-src="{{asset('front/images/planes/icono2_120x95.png')}}" 
                class="img-card lazyload img-fluid" 
                style="height: 8rem;width: 10rem;">
        </picture>
        <p class="txt-orange mb-0 typ-montserrat">
            <span class="txt-display mt-1 txt-blackgray typ-montserrat f-sz-b price1 price_" data-valor=32000 style="font-size: 2.8rem;">
                $32.000
            </span>

            <hr class="col-8 hr-card mt-1 mb-4"></hr>

            <!-- Por Usuario / Mes Facturación Anual -->
            <span class="txt-greenblue typ-montserrat txt-descuento font-weight-normal diplay-line-heigth">
                <small style="font-size: 8.48px;">{!! $site['plan2_subtitle'] ?? '' !!}</small>
            </span>

            <!-- AHORRA 20% -->
            <!-- <span class="txt-orange typ-montserrat txt-display porcentaje-desc f-sz-sm mt-2 mb-5">
                AHORRA 20%
            </span> -->

            <!-- Plan mínimo con 3 usuarios -->
            <span class="txt-blackgray typ-txt-light txt-display mb-2" style="font-size: 10.7px;">
                {!! $site['plan2_subtitle3'] ?? '' !!}
            </span><br>

            <hr class="txt-display col-8 hr-card mt-2 mb-2"></hr>
            <span class="txt-blackgray d-none ivaP"> +7% ITBMS en Panamá</span>                       
        </p>

        <!-- ¡LO QUIERO! -->
        <button 
            data-users="50" 
            class="modalPruebaGratis typ-montserrat text-uppercase f-sz-b btn mt-2 px-5 btn-greenblue effect-zoom mb-3 font-weight-bold" style="font-size: 11.7px;">
            {!! $site['plan2_btn'] ?? '' !!}
        </button> 
        <br>
    </div>

    <div class="col-8 px-4 pt-1 pb-5 mx-auto mt-5 plans-container plans-container-movil" style="position:relative; background-size: contain;background-position: center;background-repeat: no-repeat;margin: 20px 25px 0 20px;">

        <!-- Pro -->
            
        <p style="font-size: 19.29px;" class="text-uppercase mt-3 mb-1 txt-bluedark typ-montserrat f-sz-b font-weight-bold">
            {!! $site['plan3_title'] ?? '' !!}
        </p>
        <!-- <img data-src="{{asset('front/images/planes/icono3_120x100.png')}}" class="img-card lazyload" style="height: 8rem;width: 10rem;"> -->
        <picture>
            <source type="image/webp" srcset="{{asset('front/images/planes/icono3_120x100.webp')}}">
            <img src="{{asset('front/images/planes/icono3_120x100.png')}}" 
            width="120"
            height="100"
            alt="Automatiza Proceso" 
            class="img-card lazyload" style="height: 8rem;width: 10rem;"
            >
        </picture>        
        <p class="txt-orange mb-0 typ-montserrat">
            <span class="txt-display mt-1 txt-blackgray typ-montserrat f-sz-b price2 price_" data-valor=56000 style="font-size: 2.8rem;">
                $56.000
            </span>
            <hr class="col-8 hr-card mt-1 mb-4"></hr>
            <!-- Por usuario / Mes Facturacion Anual -->
            <span class="txt-greenblue typ-montserrat txt-descuento font-weight-normal diplay-line-heigth">
                <small style="font-size: 8.48px;">{!! $site['plan3_subtitle'] ?? '' !!}</small>
            </span>
            <!-- <span class="txt-orange typ-montserrat txt-display porcentaje-desc f-sz-sm mt-2 mb-5">
                AHORRA 20%
            </span> -->
            <!-- Plan Minimo con 3 usuarios -->
            <span class="txt-blackgray typ-txt-light txt-display mb-2" style="font-size: 10.7px;">
            {!! $site['plan3_subtitle3'] ?? '' !!}
            </span><br>
            <hr class="txt-display col-8 hr-card mt-2 mb-2"></hr>
            <span class="txt-blackgray d-none iva"> +7% ITBMS en Panamá</span>
        </p>
        <!-- ¡Lo Quiero!-->
        <button 
            data-users="50" 
            class="modalPruebaGratis typ-montserrat text-uppercase f-sz-b btn mt-2 px-5 btn-bluedark effect-zoom font-weight-bold" style="font-size: 11.7px;">
            {!! $site['plan3_btn'] ?? '' !!}
        </button>
        <br>
    </div>
</div>