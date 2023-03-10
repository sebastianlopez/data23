@extends('front.layouts.app')

@section('title_meta', $site['software_title_meta'] ?? '')

@section('description_meta',  $site['software_desc_meta'] ?? '')

@section('meta_og')
    <meta name="robots" content="noodp"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Software CRM en español para prospección - DataCRM"/>
    <meta property="og:description"
          content="Prueba gratis por 15 días nuestro software CRM para prospección. Soporte y capacitación en español."/>
    <meta property="og:url" content="https://www.datacrm.com/software-crm/"/>
    <meta property="og:site_name" content="Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description"
          content="Prueba gratis por 15 días nuestro software CRM para prospección. Soporte y capacitación en español."/>
    <meta name="twitter:title" content="Software CRM en español para prospección - DataCRM"/>
@endsection



@section('content')

    <div class="container p-0 pt-3 font-fm-montserrat">
        <div class="row pt-5 mt-5 section-resize section-init-functions">
            
            <div class="col-md-6">
                <h1 class="mt-5 typ-montserrat myTitleBlue ft-h2">
                   {!! $site['partners_title'] ?? '' !!}
                </h1>
                <p class="txt-gray f-sz-m mt-4 pr-5 mr-5">
                    {!! $site['partners_text'] ?? '' !!}
                </p>
                <div class="row ">
                    <div class="col-lg-5 col-md-5 col-12 mt-3">
                        <a data-toggle="modal"  href="#modalVideo" id="open-modalVideo" href="" 
                            class=" typ-montserrat p-2 f-sz-sm btn btn-orange btn-lg effect-zoom">
                            <b> {{$site['partners_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>              
            </div>
            <div class="col-md-6 mt-4">
                <figure>
                    <source type="image/webp" srcset="{{asset('front/images/partners/Recurso 1-8.webp')}}">
                    <img src="{{ asset('front/images/partners/Recurso 1-8.webp') }}" class="img-fluid" alt="partners">
                 </figure>                
            </div>
        </div>
        
        
        <div class="row section-resize mt-5 mb-5">
            <div class="col-12 text-center">
                <h2 class=" mt-4 myTitleBlue typ-montserrat ft-h2 pr-5 prl-5">
                    {!! $site['partners2_title'] ?? '' !!}
                </h2>
               
                <div class="row mt-5">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            @for($i=1;$i<5;$i++)
                            <div class="col-md-6 @if($i==1 || $i==4) greybackgorund @endif">
                                <div class="card-body text-center">
                                   
                                    <picture class="border-buttom">
                                        <source type="image/webp" srcset="{{asset('front/images/partners/Recurso 7-8.webp')}}">
                                        <img src="{{asset('front/images/partners/Recurso '.($i+6).'-8.webp')}}" alt="icon.{{ $i }}"  >
                                    </picture>             
                                    
                                    
                                    <div class="card-text mt-4 pr-5 pl-5" >
                                        <p class=" typ-montserrat f-sz-sm">{!! $site['partners2_text'.$i] ?? '' !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>    
    
    <div class="myDivgradient" >
        <div class="container  mt-5 mb-5 section-resize">
            <div class="row section-init-index justify-content-center " >
    
                <div class="col-12 ">      
                
                    <h2 class=" text-center mt-3 typ-montserrat ft-h3 txt-white br-wd">
                        {!! $site['partners3_title'] ?? '' !!}
                    </h2>
                    <div class="space"></div>
                </div>
               
            </div>
        </div>
    </div>



    <div class="container p-0 ">
        <div class="row section-resize mt-5">
            <div class="col-12 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-5 col-12 mb-5">
                        <a href="" class="modalPruebaGratis text-uppercase typ-montserrat f-sz-sm p-2 btn btn-outline-success effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                            <b>{{$site['partners4_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center">
                <h3 class="mt-4 txt-black typ-montserrat ft-h4">{!! $site['partners4_title'] ?? '' !!}</h3>
            </div>
        </div>
    </div>    
    <div class="space hide-mobile"></div><div class="space "></div>


    <div class="container p-0  mt-5 mb-5 font-fm-montserrat" id="myHomeSeccion5">
        <div class="row section-resize ">

            <div class="col-md-6 order-2 order-lg-1">
                <h2 class="mt-5 txt-orange typ-montserrat ft-h2">
                    {!! $site['partners5_title'] ?? '' !!}
                </h2>
                <p class="\ txt- f-sz-m mt-4">
                    {!! $site['partners5_text'] ?? ''!!}
                </p>

                <div class="row left">
                    <div class="col-4 mt-2">
                        <a href="#bepartner" name="bepartner" class="text-uppercase typ-montserrat btn-lg btn f-sz-m btn-orange-outline effect-zoom">
                            <b>{{$site['partners5_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 order-1 order-lg-2 text-right">
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/partners/Recurso 2-8.webp')}}">
                    <img src="{{asset('front/images/partners/Recurso 2-8.webp')}}" alt="{{ chstr($site['software4_title']) }}"  class="img-fluid">
                </picture>
                
            </div>
        </div>

        <div class="space hide-mobile"></div><div class="space "></div>

        <div class="row section-resize ">
            <div class="col-12 col-md-6 ">
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/partners/Recurso 3-8.webp')}}">
                    <img src="{{asset('front/images/partners/Recurso 3-8.webp')}}" alt="{{ chstr($site['software4_title']) }}"  class="img-fluid">
                </picture>
            </div>

            <div class="col-md-6 ">
                <h2 class="mt-5 myTitleGreen typ-montserrat ft-h2">
                    {!! $site['partners5_1_title'] ?? '' !!}
                </h2>
                <p class=" txt- f-sz-m mt-4">
                    {!! $site['partners5_1_text'] ?? ''!!}
                </p>

                <div class="row left">
                    <div class="col-4 mt-2">
                        <a href="#bepartner" name="bepartner" class="text-uppercase typ-montserrat btn-lg btn btn-green-outline2 f-sz-m effect-zoom">
                            <b>{{$site['partners5_1_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="myDivBlue1 myDivDiagonalLeftA ">
        <div class="container  mt-4  myDivDiagonalLeftB font-fm-montserrat" id="">
            
            <div class="row section-resize section-init-index" >
                <div class="col-lg-6 col-md-6 col-12  order-2 order-sm-1 mt-5 ">      
                    
                    <h2 class="txt-white mt-3 typ-montserrat ft-h2 br-wd ">
                                {!! $site['partners6_title'] ?? '' !!} 
                    </h2>
                    
                    <p class="typ-montserrat f-sz-m mt-5" aligh="left">
                        <ul class="f-sz-m list-none-dots">
                        {!! features_list($site['partners6_list'] ?? '','circle','txt-white','txt-orange') !!}
                        </ul>
                    </p>    
                    
                    <div class="row ">
                        <div class="col-lg-5 col-md-5 col-12 mt-3">
                            <a data-toggle="modal"  href="#modalVideo" id="open-modalVideo" href="" 
                                class=" typ-montserrat p-2 f-sz-sm btn btn-orange btn-lg pr-5 pl-5 effect-zoom">
                                <b> {{$site['partners6_btn'] ?? ''}}</b>
                            </a>
                        </div>
                    </div>            
    
                </div>
              
                <div class="col-lg-6 col-md-6 col-12 order-1 order-sm-2 " align="center">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/partners/Recurso 4-8.webp')}}">
                        <img src="{{asset('front/images/partners/Recurso 4-8.webp')}}" alt="{{ chstr($site['p2_home_seccion3_title']) }}"  class="img-fluid">
                    </picture>
                    <br>
                    <br>
                </div>
                
            </div>
    
        </div>
    </div>
    <div class="space"></div><div class="space"></div>
    <div class="container p-0 mt-5 font-fm-montserrat">
        <div class="row">
            <div class="col-12 text-center">
              
            </div>
        </div>
        <div class="row">
            
            <div class="col-2 text-center">
                <img src="{{ asset('front/images/partners/Recurso-6-8.webp') }}" alt="be partner" class="img-fluid" id="bepartner">
            </div> 
            <div class="col-8 text-center"></div>
        </div>
        <div class="row"> 
            <div class="col-md-6">
                <h2 class="myTitleBlue  typ-montserrat ft-h2" >
                    {!! $site['sector7_title'] ?? '' !!}
                </h2>
                <p class=" mt-5  txt-gray f-sz-m-home">
                    {!! $site['sector7_text'] ?? '' !!}
                    <img src="{{ asset('front/images/partners/Recurso-5-8.webp') }}" alt="be partner" class="img-fluid">
                </p>
            </div>
            <div class="col-md-6">
                <div role="main" id="form-pag-sector-5892720dec6abb38b543"></div>
                <script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script><script type="text/javascript"> new RDStationForms('form-pag-sector-5892720dec6abb38b543', 'UA-19986828-1').createForm();</script>
            </div>
        </div>
    </div>

    <!-- Seccion Testimoniales -->

    <div class="row justify-content-center section-resize">
        @include('front.includes.testimonials')
    </div>
    <div class="space"></div>

</div>
@endsection