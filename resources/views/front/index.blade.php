@extends('front.layouts.app')
@section('title_meta', $site['home1_title_meta'] ?? '')

@section('description_meta', $site['home1_desc_meta'] ?? '')

@section('meta_og')
    <meta name="robots" content="noodp"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Administración de ventas y gestión comercial - DataCRM"/>
    <meta property="og:description" content="Prueba gratis por 15 días nuestro CRM para administración de ventas y gestión comercial. Miles de usuarios en Colombia, México y otros países en Latam."/>
    <meta property="og:url" content="https://www.datacrm.com/"/>
    <meta property="og:site_name" content="Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Prueba gratis por 15 días nuestro CRM para administración de ventas y gestión comercial. Miles de usuarios en Colombia, México y otros países en Latam."/>
    <meta name="twitter:title" content="Administración de ventas y gestión comercial - DataCRM"/>
    <script type='application/ld+json'>
        {"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.datacrm.com\/","name":"DATACRM","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.datacrm.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}
    </script>
@endsection

@section('content')

<input type="hidden" id="countryCode" value="{{$reg['location']}}">

<div class="container p-1" id="myHomeSeccion1">
    <div class="row section-resize section-init-index " >        
        <div class="col-lg-6 col-md-6 col-12  mt-5 px-5">      

            <h1 class="text-uppercase myTitleBlue mt-5 typ-montserrat ft-h1 br-wd">
                <span class="span-border-b-w">
                    {!! $site['p2_home_seccion1_title'] ?? '' !!}
                </span>
                <span class ="text-uppercase ft-h3 txt-blackgray typ-montserrat br-wd mt-2" >
                    {!! $site['p2_home_seccion1_subtitle'] ?? '' !!}
                </span>
                
            </h1>

            
            <hr class="hr-orange2">
            
            
            <p class="typ-os-regular typ-montserrat f-sz-m  mt-3">
                    {!! $site['p2_home_seccion1_paragraph'] ?? '' !!}
            </p>    
            
            <button class="modalPruebaGratis btn btn-orange f-sz-sm my-3 p-2 typ-montserrat effect-zoom" data-toggle="modal"  data-target="#modalPruebaGratis">
                <b>{!! $site['p2_home_seccion1_btn'] ?? '' !!}</b>
            </button>
        </div>
        
        <div class="col-lg-6 col-md-6 col-12  align-self-center" >
            <picture>
                <source type="image/webp" srcset="{{asset('front/images/Home01_673x449.webp')}}">
                <img src="{{asset('front/images/Home01_673x449.png')}}" alt="{{ chstr($site['p2_home_seccion1_title']) }}"  class="img-fluid">
            </picture>
        </div>  
    </div>
    <hr class="hr-blue hidden-md-up d-none d-sm-block" >
</div>


<div class="container p-1" id="myHomeSeccion2">
    <div class="row section-resize mt-5 justify-content-center">
        <div class="col-12 px-max-5 text-center mt-1">
            
            <h2 class="myTitleBlue typ-montserrat ft-h2 br-wd p-1">
                <span class="span-border-b-w">
                    {!! $site['p2_home_seccion2_title'] ?? '' !!}
                </span>
            </h2>
            
            <h3 class="text-lowercase typ-montserrat ft-h3 br-wd">
                 {!! $site['p2_home_seccion2_subtitle'] ?? '' !!}
            </h3>
        </div> 
    </div>

    <div class="row section-resize mt-4">
        <div class="col-lg-5  col-md-6 col-12 text-center order-1 order-md-1">
            @php $img = array('','home02_icono08_62x62.png','home02_icono09_62x62.png','home02_icono10_62x62.png','home02_icono11_62x62.png'); @endphp
            @for($i=1; $i<5; $i++)
                <div class="row mt-3">
                    <div class="col-6 col-md-3 text-center" >
                        <picture>
                            <source type="image/webp" srcset="{{asset('front/images/'.$img[$i])}}">
                            <img src="{{asset('front/images/'.$img[$i])}}" alt="{{ chstr($site['p2_home_seccion2_texto'.$i]) }}" class="img-fluid">
                        </picture>          
                    </div>  
                    <div  class="col-6 col-md-5">
                        <h5 class="pbod2B text-justify"><b>{!! $site['p2_home_seccion2_texto'.$i] ?? '' !!}</b></h5>
                        <p class="typ-os-regular typ-montserratf-sz-s text-justify pbod3B">
                            {!! $site['p2_home_seccion2_descripcion'.$i] ?? '' !!}
                        </p>  
                    </div>    
                </div>   
            @endfor
        </div>

        <div  class="col-lg-7 col-md-6 col-12 text-center m-auto align-self-center order-3 videobackg your-centered-div">
            <div class="embed-responsive embed-responsive-16by9  your-centered-div" >
                <iframe class="embed-responsive-item" autoplay loop muted src="{{asset('front/images/index/Home video.gif')}}"></iframe>
            </div>
        </div>

        <div class="col-12 mt-4 order-2 order-md-3 mb-5 text-center" >
                <button class="modalPruebaGratis btn btn-orange f-sz-sm mt-3 p-2 typ-montserrat effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                    <b>{!! $site['p2_home_seccion2_btn'] ?? '' !!}</b>
                </button>
            </div>  
        </div>
    </div>
</div>`


@include('front.includes.yourprocess')

<div class="container p-0" id="myHomeSeccion3b">
    <div class="row section-resize justify-content-center "> 

        <div class="col-lg-9 col-md-9 col-12  pt-5">
            <ul class="typ-os-regular f-sz-m mt-4 myBullet">
                @for($i=3;$i<8;$i++)
                <li>
                    <div class="row mb-0">
                        <div class="col-1">
                            <span class="myBulletOrange"></span>
                        </div>
                        <div class="col">
                            <p class="mb-0 mt-0">{!! $site['p2_home_seccion3_texto'.$i] ?? '' !!}</p>
                        </div>
                    </div>                    
                </li>
                @endfor
                              
                <li>
                    <div class="container mt-4">
                        <button class="modalPruebaGratis btn2 btn-orange mt-5 f-sz-m my-3 p-2 typ-montserrat effect-zoom" data-toggle="modal" 
                            data-target="#modalPruebaGratis">
                            <b class="">{!! $site['p2_home_seccion3_btn2'] ?? '' !!}</b>
                        </button>  
                    </div>
                </li>                        
            </ul>
        </div> 
        <div class="col-lg-3 col-md-3 col-12 pt-5 d-none d-sm-block d-md-none d-lg-block" >
            <picture>
                <source type="image/webp" srcset="{{asset('front/images/Logo whatsapp_170x171.webp')}}">
                <img src="{{asset('front/images/Logo whatsapp_170x171.png')}}" alt="Whatsapp" class="img-fluid">
            </picture>
        </div>
    </div>   
    <hr class="hr-silver mt-5 hidden-md-up d-none d-sm-block" >
</div>


<div class="container mt-5 p-0" id="myHomeSeccion4">
    <div class="row section-resize mt-1">
        <div class="col-12 col-lg-8 mt-1 mr-1">
        
            <h2 class="ft-h2">
                <span class="span-border-b-w">
                    {!! $site['p2_home_seccion4_title'] ?? '' !!}
                </span>
            </h2>
            
        </div> 
        <div class="col-12 col-lg-4 px-max-5 text- mt-1"></div>
    </div>
    <div class="row justify-content-center pt-2 col-12 mt-4 mx-auto">
        @for($i=1; $i<4;$i++)
            <div class="card col-lg-3 col-md-12 col-12 text-center mx-1 no-border ">
                <div class="card-body">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/Home04_icono'.$i.'_144x153.webp')}}">
                        <img src="{{asset('front/images/Home04_icono'.$i.'_144x153.png')}}" alt="Home04_icono-{{ $i }}" class="img-fluid" width="72" height="76">
                    </picture>             
                    
                    <div class="card-text mt-5">
                        <p class="typ-os-regular typ-montserrat f-sz-m">{!! $site['p2_home_seccion4_texto'.$i] ?? '' !!}</p>
                    </div>

                </div>
            </div> 

            @if($i<3)
                <div class="myVerticalLine card d-none d-lg-block p-4 myVerticalLinew"></div>
                <div class="myHorizontalLine card d-block d-lg-none mt-5 mx-auto"></div>  
            @endif
        @endfor    
    </div>
        <div class="row mt-1 justify-content-center">
            <div class="col-12 mt-4 text-center">
                <button class="modalPruebaGratis btn2 btn-orange f-sz-m my-3 p-2 typ-montserrat effect-zoom " data-toggle="modal" data-target="#modalPruebaGratis">
                    <b>{!! $site['p2_home_seccion4_btn'] ?? '' !!}</b>
                </button>  
            </div>   
        </div> 
    </div>
</div>


<div class="myDivGreen1 myDivDiagonalRightA" >
    <div class="container  mt-5  myDivDiagonalRightB" id="myHomeSeccion5">
        <div class="row section-resize section-init-index justify-content-center"  >
            <div class="col-lg-5 col-md-5 col-12" >
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/Home05_576x546.webp')}}">
                    <img src="{{asset('front/images/Home05_576x546.png')}}" alt="{{  chstr($site['p2_home_seccion5_title']) }}" class="img-fluid">
                </picture>
        
               
            </div>

            <div class="col-lg-7 col-md-7 col-12  mt-5 px-max-5">      
                <h2 class="mt-5 typ-montserrat f-sz-b br-wd">
                    {!! $site['p2_home_seccion5_title'] ?? '' !!}
                </h2>
                
                <h2 class="typ-os-regular typ-montserrat" aligh="left">
                        {!! $site['p2_home_seccion5_subtitle'] ?? '' !!}
                </h2>    

                <ul class="typ-os-regular f-sz-m mt-4 myBullet">
                    
                    <li>
                        <div class="row">
                            <div>
                                <span class="myBulletBlue"></span>
                            </div>
                            <div class="col" style="padding: 0;">
                                <p>{!! $site['p2_home_seccion5_texto1'] ?? '' !!}</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div>
                                <span class="myBulletBlue"></span>
                            </div>
                            <div class="col" style="padding: 0;">
                                <p>{!! $site['p2_home_seccion5_texto2'] ?? '' !!}</p>
                            </div>
                        </div>
                    <li>
                        <div class="row">
                            <div>
                                <span class="myBulletBlue"></span>
                            </div>
                            <div class="col" style="padding: 0;">
                                <p>{!! $site['p2_home_seccion5_texto3'] ?? '' !!}</p>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="container mt-4">
                            <a class=" btn2 btn-orange f-sz-m my-3 p-2 typ-montserrat effect-zoom" href="https://landing.datacrm.com/asesoria_datamkt" target="_blank">
                                <b class="">{!! $site['p2_home_seccion5_btn'] ?? '' !!}</b>
                            </a>  
                        </div>
                    </li>                        
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container" id="myHomeSeccion6">
    <div class="row mt-1 justify-content-center">
        <div class="col-lg-6 col-12 order-2 order-lg-1">
            <div class="mt-5 pt-5">
                <h4 class="mt-5 myTitleBlue  typ-montserrat f-sz-b">
                    {!! $site['p2_home_seccion6_title'] ?? '' !!}
                </h4>
                <p class="typ-os-regular f-sz-m mt-4">
                    {!! $site['p2_home_seccion6_texto1'] ?? '' !!}
                </p>
                <br/>
            </div>
            <p class="typ-os-regular f-sz-m">
                {!! $site['p2_home_seccion6_texto2'] ?? '' !!}
            </p>
            <div class="row mt-5">
                <div class="col-12 text-lg-center text-sm-left">
                    <a href="https://play.google.com/store/apps/details?id=com.datacrm.application" target="_blank">
                        <picture>
                            <source type="image/webp" srcset="{{asset('front/images/home/home_banner_app_playstore.webp')}}">
                            <img src="{{asset('front/images/home/home_banner_app_playstore.webp')}}" alt="play store" width="200" height="60" class="effect-zoom ml-md-2 my-1 lazyload img-fluid" id="myImg">
                        </picture>
                    </a>
                    <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank" class="ml-3">
                        <picture>
                            <source type="image/webp" srcset="{{asset('front/images/home/home_banner_app_appstore.webp')}}">
                            <img src="{{asset('front/images/home/home_banner_app_appstore.webp')}}" alt="istore" width="200"  height="60" class="effect-zoom mr-md-2 my-1 lazyload img-fluid" id="myImg">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mt-3 order-1 order-lg-2" >
            <div class="mt-5 pt-5 section-movil-index">
                <picture>
                    <img src="{{asset('front/images/Home06_344x337.png')}}" alt="Tus Negocios a donde vayas" height="auto" class="img-fluid lazyload pt-4">                    
                </picture>
            </div>
        </div>
    </div>
    <hr class="hr-silver mt-5" >    
</div> 


<div class="container mt-5" id="myHomeSeccion7">
    <div class="row pt-4 section-resize">

        <div class="col-12 text-center">
            <h2 class="myTitleBlue2 text-capitalize typ-montserrat ft-h2">
                {!! $site['p2_home_seccion7_title'] ?? '' !!}
            </h2>
        </div>
     
        <div class="col-12 text-center">
            <p class=" mt-lg-2 typ-os-regular txt-black f-sz-m-home">
                    {!! $site['p2_home_seccion7_texto1'] ?? '' !!}
            </p>
        </div> 
        <div class="col-12 text-center mt-3">
            <picture>
                <source type="image/webp" srcset="{{asset('front/images/Home07_704x314.webp')}}">
                <img src="{{asset('front/images/Home07_704x314.png')}}" alt="Plataformas Favoritas" class="img-fluid lazyload mt-lg-5">
            </picture>
        </div>
        
    </div>
    <hr class="hr-silver mt-5"  >    
</div>


<div class="container p-0 pt-3" id="myHomeSeccion8">
    <div class="pt-5 mt-2">

        <div class="col-12 text-center">
            <h2 class="myTitleBlue2 text-capitalize typ-montserrat  ">
                {!! $site['p2_home_seccion_crmmonedalocal_titulo'] ?? '' !!}
            </h2>
        </div>
       
        <div class="col-12 text-center">
            <p class="typ-montserrat f-sz-m">
                {!! $site['p2_home_seccion_crmmonedalocal_subtitulo'] ?? '' !!}
            </p>
        </div> 
        
    </div>
</div>

@include('front.includes.plans.cards_pc2')

@include('front.includes.masSobrePlanes2')    

@include('front.includes.modals.modal_prices')

<div class="row mb-2 section-resize">
    <div class="col-12 my-2">
        <hr class="hr-silver mt-5" >   
    </div>
</div>

@include('front.includes.acknowledged')  
<div class="row pb-4"></div>
@include('front.includes.testimonials')


@include('front.includes.start_now')


<div class="divModalPayu" style="display:none">
    @include('front.includes.modals.modalPayu')
    @include('front.includes.modals.modalCompletePay')
</div>    

@endsection
