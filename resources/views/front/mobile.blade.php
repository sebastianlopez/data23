@extends('front.layouts.app')

@section('title_meta', $site['mobile_title_meta'] ?? '')

@section('description_meta',  $site['mobile_desc_meta'] ?? '')


@section('meta_og')
@endsection

@section('content')
    <div class="container p-0  pt-3">
        <div class="row mt-5 section-resize section-init-movil">
            <div class="col-lg-8 col-md-8 col-12 pt-4 section-init-movil-child">
                
                <h1 class="text-uppercase mt-5 pt-5 myTitleBlue typ-montserrat fs-h2">
                    {{$site['mobile_title'] ?? ''}}
                </h1>    
                      
                <p class="typ-os-regular txt-black f-sz-sm mt-4">
                    <b>{{$site['mobile_subtitle'] ?? ''}}</b>
                </p>
                
                <p class="typ-os-regular txt-black f-sz-sm mt-4">
                {{$site['mobile_text1'] ?? ''}}
                </p>
                
                <p class="typ-os-regular txt-black f-sz-sm mt-2">
                {{$site['mobile_text2'] ?? ''}}
                </p>
                
                <p class="typ-os-regular txt-black f-sz-m mt-2">
                {{$site['mobile_text3'] ?? ''}}
                </p>
                <div class="row">
                    <div class="col-12 text-md-left">
                        <div class="row">
                            <div class="col-12 text-sm-left">
                                <a href="https://play.google.com/store/apps/details?id=com.datacrm.application" target="_blank">
                                    <picture>
                                        <source type="image/webp" data-srcset="{{asset('front/images/home/home_banner_app_playstore.webp')}}">
                                        <img data-src="{{asset('front/images/home/home_banner_app_playstore.webp')}}" alt="play store" width="150" height="60" class="effect-zoom ml-md-2 my-1 lazyload img-fluid" id="myImg">
                                    </picture>
                                </a>
                                <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank" class="ml-3">
                                    <picture>
                                        <source type="image/webp" data-srcset="{{asset('front/images/home/home_banner_app_appstore.webp')}}">
                                        <img data-src="{{asset('front/images/home/home_banner_app_appstore.webp')}}" alt="istore" width="150"  height="60" class="effect-zoom mr-md-2 my-1 lazyload img-fluid" id="myImg">
                                    </picture>
                                </a>
                            </div>
                    </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5" align="center">
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/mobile/img-1.webp')}}">
                    <img src="{{asset('front/images/mobile/img-1.webp')}}" alt="crm-movil" width="280" class="img-fluid">
                </picture>
            </div>
        </div>
        
    </div>

    <div class="myDivBlue1 myDivDiagonalLeftA">
        <div class="container p-0   section-resize mt-5  myDivDiagonalLeftB" >


            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
                    <h2 class="mt-5 txt-white typ-montserrat ft-h2 br-wd"><span class="span-border-b-w">
                        {{$site['mobile2_title'] ?? ''}}
                    </span>
                    </h2>
                    <p class="typ-os-regular txt-white f-sz-m mt-3">
                        {!! $site['mobile2_text1'] ?? '' !!}
                    </p>               
                    <button class="modalPruebaGratis btn btn-orange text-uppercase f-sz-sm my-3 p-2 typ-montserrat effect-zoom" 
                            data-toggle="modal" 
                            data-target="#modalPruebaGratis">
                        <b>{{$site['mobile2_btn'] ?? ''}}</b>
                    </button>
                    <div class="space"></div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 order-1 order-lg-2" align="center">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/mobile/img-2.webp')}}">
                        <source type="image/png" srcset="{{asset('front/images/mobile/img-2.webp')}}">
                        <img src="{{asset('front/images/movil/banner2_img1.png')}}" alt="{{$site['mobile2_title'] ?? ''}}"  class="img-fluid">
                    </picture>
                    <div class="space hide-mobile"></div>
                </div>
            </div>
        </div>
   
    </div>


    <div class="container p-0 pb-5 section-resize">
        <div class="row mb-4 mx-5">
            <div class="col-lg-4 col-md-6 col-12 mt-5" align="center">
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/mobile/img-3.webp')}}">
                    <img src="{{asset('front/images/mobile/img-3.webp')}}" alt="{{$site['mobile3_title'] ?? ''}}" class="img-fluid">
                </picture>
            </div>
            <div class="col-lg-8 col-md-6 col-12 px-5 text-right">
                <h2 class="text-uppercase mt-5 txt-orange typ-montserrat ft-h2 br-wd text-right">
                    <span class="">{{$site['mobile3_title'] ?? ''}}</span>
                </h2>
                <p class="typ-os-regular txt-black f-sz-sm my-4">
                    {!! $site['mobile3_text1'] ?? '' !!}
                </p>
                <div class="text-right">
                    <a href="https://play.google.com/store/apps/details?id=com.datacrm.application" target="_blank">
                        <picture>
                            <source type="image/webp" data-srcset="{{asset('front/images/home/home_banner_app_playstore.webp')}}">
                            <img data-src="{{asset('front/images/home/home_banner_app_playstore.webp')}}" alt="play store" width="150" height="60" class="effect-zoom ml-md-2 my-1 lazyload img-fluid" id="myImg">
                        </picture>
                    </a>
                    <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank" class="ml-3">
                        <picture>
                            <source type="image/webp" data-srcset="{{asset('front/images/home/home_banner_app_appstore.webp')}}">
                            <img data-src="{{asset('front/images/home/home_banner_app_appstore.webp')}}" alt="istore" width="150"  height="60" class="effect-zoom mr-md-2 my-1 lazyload img-fluid" id="myImg">
                        </picture>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    <div class="myDivGreen1 myDivDiagonalRightA" >
        <div class="container  mt-5 MB-5 section-resize myDivDiagonalRightB" id="myHomeSeccion5">

                <div class="container">
                    <div class="row mb-4 mx-4">
                        <div class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
                            <h2 class="text-uppercase mt-5 txt-white typ-montserrat ft-h2 br-wd"><span class="">
                                {{$site['mobile4_title'] ?? ''}}
                            </span>
                            </h2>
                            <p class="typ-os-regular txt-white f-sz-m mt-3">
                            {!! $site['mobile4_text1'] ?? '' !!}
                            </p>
                        
                            <button class="modalPruebaGratis btn btn-blue typ-montserrat effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                                <b>{{$site['mobile4_btn'] ?? ''}}</b>
                            </button>

                            <div class="space"></div> <div class="space"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 order-1 order-lg-2" align="center">
                            
                            <picture>
                                <source type="image/webp" srcset="{{asset('front/images/mobile/img-4.webp')}}">
                                <img src="{{asset('front/images/mobile/img-4.webp')}}" alt="{{$site['mobile4_title'] ?? ''}}" class="img-fluid">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
    </div>        

    <!-- Seccion Contacto -->

    <div class="container p-0 pb-5 section-resize">
        <div class="row mb-4 mx-5">
            <div class="col-lg-4 col-md-6 col-12 mt-5 " >
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/mobile/img-5.webp')}}">
                    <img src="{{asset('front/images/mobile/img-5.webp')}}" alt="{{ $site['mobile5_title'] }}" class="img-fluid">
                </picture>            
            </div>
            <div class="col-lg-8 col-md-6 col-12 px-5" >
                <div class="space hide-mobile"></div>
                <h2 class="text-uppercase mt-5 txt-orange typ-montserrat ft-h2 br-wd text-right">
                    <span class="">{{$site['mobile5_title'] ?? ''}}</span>
                </h2>
                <p class="typ-os-regular txt-black f-sz-sm my-4 text-right">
                    {!! $site['mobile5_text1'] ?? '' !!}
                </p>
                <div class="text-right">
                    <a href="https://play.google.com/store/apps/details?id=com.datacrm.application" target="_blank">
                        <picture>
                            <source type="image/webp" data-srcset="{{asset('front/images/home/home_banner_app_playstore.webp')}}">
                            <img data-src="{{asset('front/images/home/home_banner_app_playstore.webp')}}" alt="play store" width="150" height="60" class="effect-zoom ml-md-2 my-1 lazyload img-fluid" id="myImg">
                        </picture>
                    </a>
                    <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank" class="ml-3">
                        <picture>
                            <source type="image/webp" data-srcset="{{asset('front/images/home/home_banner_app_appstore.webp')}}">
                            <img data-src="{{asset('front/images/home/home_banner_app_appstore.webp')}}" alt="istore" width="150"  height="60" class="effect-zoom mr-md-2 my-1 lazyload img-fluid" id="myImg">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="myDivBlue1 myDivDiagonalLeftA">
        <div class="container p-0  mt-5  myDivDiagonalLeftB">

            <div class="row mb-4 mx-4">
                <div class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
                    
                    <h2 class=" mt-5 txt-white typ-montserrat ft-h2 br-wd"><span class="">
                        {{$site['mobile6_title'] ?? ''}}
                    </span>
                    </h2>
                    <p class="typ-os-regular txt-white f-sz-m mt-3">
                        {!! $site['mobile6_text1'] ?? '' !!}
                    </p>
                    <button class="modalPruebaGratis btn btn-orange f-sz-sm my-3 p-2 typ-montserrat effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                        <b>{{$site['mobile6_btn'] ?? ''}}</b>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 col-12 order-1 order-lg-2" align="center">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/mobile/img-6.webp')}}">
                        <img src="{{asset('front/images/mobile/img-6.webp')}}" alt=" {{$site['mobile6_title'] ?? ''}}" width="" class="img-fluid">
                    </picture>
                    <div class="space hide-mobile"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container p-0 pt-3">
        <div class="row  mt-5 section-resize section-init-movil">
            <div class="col-lg-7 col-md-7 col-12 pt-4 text-center order-2 order-lg-1">
                <div class="space"></div>   <div class="space"></div>    
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/mobile/icono-1.webp')}}">
                    <img src="{{asset('front/images/mobile/icono-1.webp')}}" alt="crm-movil" class="img-fluid">
                </picture>
                                
                <h3 class="typ-os-regular txt-black ft-h4 mt-4">
                    <b>{{$site['mobile_subtitle'] ?? ''}}</b>
                </h3>
                
                <p class="typ-os-regular txt-black f-sz-sm mt-4">
                {{$site['mobile_text1'] ?? ''}}
                </p>
                <div class="space hide-mobile"></div>   <div class="space"></div>  
                <hr class="hr-silver"/>
            </div>
            <div class="col-lg-5 col-md-5 col-12 mt-5 order-1 order-lg-2" align="center">
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/mobile/img-7.webp')}}">
                    <img src="{{asset('front/images/mobile/img-7.webp')}}" alt="crm-movil" class="img-fluid">
                </picture>
            </div>
        </div>
        
    </div>

    @include('front.includes.acknowledged')
    <div class="space"></div><div class="space"></div>
    <div class="container p-0">
        <div class="row justify-content-center section-resize">
            @include('front.includes.testimonials')
        </div>
        <div class="row section-resize">
            <div class="col-12 my-2">
                <hr class="bg-hr">
            </div>
        </div>
        <div class="row pt-2 mb-5 section-resize">
            @include('front.includes.start_now')
        </div>
    </div>
@endsection
