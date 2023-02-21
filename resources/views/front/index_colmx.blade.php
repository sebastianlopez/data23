
@extends('front.layouts.app')
@section('title_meta', country_text($site['homep1_title_meta'] ?? '', $pais))

@section('description_meta',  country_text($site['homep1_desc_meta'] ?? '', $pais))

@section('meta_og')
    <meta name="robots" content="noodp"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Administración de ventas y gestión comercial - DataCRM"/>
    <meta property="og:description"
          content="Prueba gratis por 15 días nuestro CRM para administración de ventas y gestión comercial. Miles de usuarios en {{$pais}}"/>
    <meta property="og:url" content="https://www.datacrm.com/"/>
    <meta property="og:site_name" content="Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description"
          content="Prueba gratis por 15 días nuestro CRM para administración de ventas y gestión comercial. Miles de usuarios en {{$pais}}"/>
    <meta name="twitter:title" content="Administración de ventas y gestión comercial - DataCRM"/>
    <script type='application/ld+json'>
        {"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.datacrm.com\/","name":"DATACRM","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.datacrm.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}
    </script>
@endsection


@section('content')
    <div class="container p-5">
        <div class="row section-resize section-init-index mt-5">

            <div class="col-12 col-md-6 headerCountries">
                <h1 class="myTitleBlue text-uppercase  typ-montserrat ft-1 countryname">
                    {!! country_text_strong($site['homep1_title'] ?? '', $pais) !!} 
                </h1>
                <br>
                <p class="typ-os-regular f-sz-b mt-3 txt-blackgray">
                    {!!  country_text($site['homep1_subtitle'] ?? '', $pais)  !!}
                </p>
                <br>
                <button class="modalPruebaGratis btn btn-orange f-sz-sm mt-3 typ-montserrat effect-zoom p-2" data-toggle="modal" data-target="#modalPruebaGratis">
                    <b>{{country_text($site['homep1_btn'] ?? '', $pais)}}</b>
                </button>
            </div>
            <div class="col-12 col-md-6">
               
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/countries/IMG 1.webp')}}">
                    <img src="{{asset('front/images/countries/IMG 1.webp')}}" alt="{{ chstr($site['blog_bottom_title1']) }}" class="img-fluid img-topic">
                </picture>
            </div>


        </div>
 
        <div class="space"></div>

        <div class="container mt-5" id="">
            
                <div class="row pt-2 col-12 mt-4 ">
                    @for($i=1;$i<5;$i++)
                     <div class="col-lg-3 col-md-3 col-12 text-center  @if($i<4) right-border @endif">
                        <div class="card-body">
                            <picture>
                                <source type="image/webp" srcset="{{asset('front/images/countries/ICONO '.$i.'.webp')}}">
                                <img src="{{asset('front/images/countries/ICONO '.$i.'.webp')}}" alt="icon.{{ $i }}"  >
                            </picture>             
                            
                            <div class="card-text mt-4" >
                                <p class="typ-os-regular typ-montserrat f-sz-sm">{!! $site['p2_home_seccion4_texto1'] ?? '' !!}</p>
                            </div>
                        </div>
                    </div> 
                    @endfor
                </div>
            </div>
        </div>

        <div class="container mt-5 justify-content-center" >
            <div class="row text-center">
                <div class="col-12">
                    
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/countries/IMG 2.webp')}}">
                        <img src="{{asset('front/images/countries/IMG 2.webp')}}" alt="{{ chstr($site['blog_bottom_title1']) }}" class="img-fluid img-topic">
                    </picture>
                </div>
            </div>
        </div>

        <div class="container mt-5" id="myHomeSeccion7">
            <div class="row pt-4 section-resize">
                
                <div class="col-12 text-center">
                    <h2 class=" myTitleBlue2 text-capitalize typ-montserrat ">
                       Que nos hace un CRM Difrente?
                    </h2>
                </div>
            </div>

            <div class="row section-resize">
                @for($i=5;$i<9;$i++)
                <div class="col-md-6">
                    <div class="card-body text-center">
                       
                        <picture class="border-buttom">
                            <source type="image/webp" srcset="{{asset('front/images/countries/ICONO '.$i.'.webp')}}">
                            <img src="{{asset('front/images/countries/ICONO '.$i.'.webp')}}" alt="icon.{{ $i }}"  >
                        </picture>             
                        <hr class="hr-blue-25">
                        
                        <div class="card-text mt-4" >
                            <p class="typ-os-regular typ-montserrat f-sz-sm">{!! $site['p2_home_seccion4_texto1'] ?? '' !!}</p>
                        </div>
                    </div>
                </div>
                @endfor
                
            </div>
        </div>        
       
        
      
        <div class="col-12 text-center">
            <hr class="hr-silver mt-5" >   
        </div>
       

        @include('front.includes.integrations')
       
        <div class="col-12 text-center">
               
        </div>

        
        @include('front.includes.plans.cards_pc2')
               
        <br>

        @include('front.includes.masSobrePlanes2')     

       
        <div class="row justify-content-center section-resize mt-5 pt-3">
            @include('front.includes.acknowledged')
        </div>

        
        <div class="row justify-content-center section-resize mt-5">
            @include('front.includes.testimonials')
        </div>
        
        <div class="row pt-2 mb-5 section-resize mt-5">
            @include('front.includes.start_now')
        </div>
    </div>

<div class="modal fade hide" id="modalPagoSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content p-5">
            <div class="modal-header" style="padding: 0 !important; margin: 0 !important; border: 0 !important;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img 
                    width="100%" 
                    height="auto"
                    src="{{asset('front/images/cronograma-de-gestion-final100x119.webp')}}"
                    class="img-fluid">
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
</div>

<div class="divModalPayu" style="display:none">
    @include('front.includes.modalPayu')
    @include('front.includes.modalCompletePay')
</div>

@endsection
