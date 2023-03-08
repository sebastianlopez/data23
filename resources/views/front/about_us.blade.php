@extends('front.layouts.app')
@section('title_meta', $site['about_title_meta'] ?? '')

@section('description_meta', $site['about_desc_meta']?? '')

@section('meta_og')
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Nosotros - Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta property="og:url" content="https://www.datacrm.com/nosotros/"/>
    <meta property="og:site_name" content="Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Nosotros - Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
@endsection

@section('content')
    <div class="container-fluid pt-3">
        <div class="row mb-5 pt-5">
    </div>
    <div class="container p-0 mb-4">
        <div class="row section-resize">
            <div class="col-md-12">
                <h1 class="mt-4 myTitleBlue typ-montserrat ft-h2 text-center">
                    {{$site['about_title']??''}}
                </h1>
          
                
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/about/nosotros ok.png')}}">
                    <img class="img-fluid border-img" src="{{asset('front/images/about/nosotros ok.png')}}" alt="about us" >
                </picture> 
                
                
                <p class="typ-os-regular txt-black f-sz-sm mt-4">
                {{$site['about_text']??''}}
                </p>
               
                <p class="typ-os-regular txt-black f-sz-sm mt-2">
                {{$site['about_textb']??''}}
                </p>
               
                <p class="typ-os-regular txt-black f-sz-sm mt-2">
                {{$site['about_titlec']??''}}
                </p>
            </div>
          
            <?php $nosotros = array(
                'alejandra_vargas.webp',
                'alejandro.webp',
                'andres_arrieta.webp',
                'astrid.webp',
                'aura_esp.webp',
                'camila_castiblanco.webp',
                'camila_lazaro.webp',
                'carlos.webp',
                'Carlos_Hernadez.webp',
                'caterine_vinasco.webp',
                'cristian_cuadrado.webp',
                'deisy_maldonado.webp',
                'Diego_Alvarez.webp',
                'Estefania.webp',
                'Jahir.webp',
                'Jasmin.webp',
                'Jorge.webp',
                'Jose.webp',
                'juliana_vargas.webp',
                'julieth_cortes.webp',
                'luis_arrellano.webp',
                'M_silva.webp',
                'Maria.webp',
                'Mario.webp',
                'michael_lopez.webp',
                'natalie_jimenez.webp',
                'Omar.webp',
                'Sandra.webp',
                'sergio_rico.webp',
                'Vanessa.webp',
            ); ?>
            <script>
                $(document).ready(function(){
                    $(".owl-carousel").owlCarousel({
                        items: 1,
                        margin: 10,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        navText : ['<i class="fa-solid fa-chevron-left"></i>','<i class="fa-solid fa-chevron-right"></i>'],
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:2
                            },
                            1000:{
                                items:3
                            }
                        }
                    });
                });
            </script>              
            <div class="col-12 my-3 areaTeam">
                <h2 class="mt-4 myTitleBlue typ-montserrat ft-h2 text-center">
                    {{$site['about_title']??''}}
                </h2>
               
                <div class="owl-carousel owl-theme owl-about mt-4" align="center">                                                         
                @foreach ($nosotros as $nos) 
                <div class="item">
                    <figure>
                        <img src="{{asset('front/images/about/team/black/'.$nos)}}" alt="{{ $nos }}" width="250" height="250"class="rounded-circle team-colour">
                        <img src="{{asset('front/images/about/team/color/'.$nos)}}" alt="{{ $nos }}" width="250" height="250" class="rounded-circle team-white">
                    </figure>
                </div>
                @endforeach

                </div>
            </div>         
        </div>
    </div>

    <div class="py-4 my-5 px-5  section-resize">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-8 col-md-6 col-12 mb-3">
                    <h2 class="text-uppercase mt-5 typ-montserrat myTitleBlue ft-h2">
                        {{$site['about_title2']??''}}
                    </h2>
                    <p class="typ-montserrat txt-gray ft-h4">
                        {!! $site['about_text2'] ?? '' !!}
                    </p>
                    <a href="http://ayuda.datacrm.com/" class="btn btn-orange f-sz-sm txt-white p-2 text-uppercase mt-3 typ-montserrat effect-zoom">
                        <b>{{$site['about_btn']??''}}</b>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-3">
                    <img src="{{asset('front/images/about/Recurso-30.webp')}}" alt="about" width="550" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container p-0">
        <div class="row mb-5 section-resize">
            @include('front.includes.start_now')
        </div>
    </div>
</div>
@endsection