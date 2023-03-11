@extends('front.layouts.app')

@section('title_meta', $site['plans_title_meta'] ?? '')

@section('description_meta',  $site['plans_desc_meta'] ?? '')

@section('meta_og')
    <meta name="robots" content="noodp"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Precios – DATACRM"/>
    <meta property="og:description" content="Conoce los diferentes precios y paquetes de nuestro software CRM; uno de ellos está hecho especialmente para tus necesidades."/>
    <meta property="og:url" content="https://www.datacrm.com/precios/"/>
    <meta property="og:site_name" content="Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta property="og:image" content="https://www.datacrm.com/wp-content/uploads/white-check-mark-hi.png"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description"  content="Conoce los diferentes precios y paquetes de nuestro software CRM; uno de ellos está hecho especialmente para tus necesidades."/>
    <meta name="twitter:title" content="Precios – DATACRM"/>
    <meta name="twitter:image" content="https://www.datacrm.com/wp-content/uploads/white-check-mark-hi.png"/>
@endsection


@section('content')
    <div class="container p-0 pt-3">
        <div class="pt-5 mt-5 section-resize section-init-planes">
            <div class="col-14 text-center">
                <h1 class="myTitleBlue mt-5 typ-montserrat ft-h2 title-movil">
                    {!! $site['plans_title'] ?? '' !!}
                </h1>
                
                <p class="typ-os-regular txt-gray f-sz-m mt-4 txt-intro-movil">
                    {!! $site['plans_subtitle'] ?? '' !!}
                </p>
                <div class="space"></div>

                @include('front.includes.plans.cards_pc2')
               
                <br>
                
                <button type="button" class="btn btn-orange typ-montserrat btn2 btn-orange p-2 f-sz-m  text-decoration-n br-wd effect-zoom" data-toggle="modal" data-target="#exampleModal">
                    {!! $site['plans_btn2'] ?? '' !!}
                </button>
                @include('front.includes.modals.modal_prices')

                 
            </div>
        </div>
    </div>
    <div class="container p-0 pt-3">
        <div class="row mb-2 section-resize">
            <div class="col-12 my-2">
                <hr class="hr-silver">
            </div>
        </div>
    </div>

    <div class="space"></div>
    <div class="container p-0 pt-3">
        <div class="col-12 text-center" >
            <picture>
                <img data-src="{{asset('front/images/plans/ICONO 1.webp')}}" alt="Tienes dudas" class="img-fluid lazyload pt-4" >                    
            </picture>
            <h2 class="mt-4 txt-blackgray typ-montserrat ft-h2">
                <span>{{$site['plans_blue_title'] ?? ''}}</span>
                <p class="typ-os-regular txt-black f-sz-mx">{{$site['plans_blue_middle'] ?? ''}}</p>
            </h2>
           
            <a  href="https://landing.datacrm.com/asesoria_agenda" target="_blank"  class="typ-montserrat text-uppercase f-sz-m btn mt-2 px-4 myBtnBlue effect-zoom mb-3">
            {{$site['plans_blue_btn'] ?? ''}}
            </a>
        </div>
    </div>

    <div class="myDivGreen1 myDivDiagonalLeftA" >
        <div class="container  mt-5  myDivDiagonalLeftB" id="myHomeSeccion3a">
        
            <div class="row  section-resize section-init-index justify-content-center" >
                <div class="col-lg-7 col-md-7 col-12  order-2 order-sm-1  ">      
                    <h2 class="ft-h2 mt-5 typ-montserrat ">
                        {!! $site['plans_white_title'] ?? '' !!} 
                    </h2>

                    <h3 class="ft-h3"> {!! $site['plans_white_subtitle'] ?? '' !!} </h3>
                    <div class="greentextp mt-5"> {!! $site['plans_white_text'] !!}  </div>                        
                </div>
                
                <div class="col-lg-5 col-md-5 col-12 order-1 order-sm-2 " align="center">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/plans/IMG 1.webp')}}">
                        <img src="{{asset('front/images/plans/IMG 1.webp')}}" 
                            alt="{{ chstr($site['plans_white_title']) }}" class="img-fluid">
                    </picture>
                    <br>
            
                </div>
                
            </div>
    
        </div>
    </div>

   
    <div class="container-fluid mt-5 pt-5">
        <div class="container">
            <h2 class="mt-4 txt-blue text-center typ-montserrat f-sz-bb">
                {{$site['plans_gray_title'] ?? ''}}
            </h2>
            <div class="row py-4 mt-4 movil" >
                <div class="col-md-12" align="left">
                   
                    <ul class="f-sz-sm list-none-dots">
                        {!! features_list($site['plans_gray_features'] ?? '','circle') !!}
                    </ul>                    
                </div>
                
                <div class="col-12 text-center" align="center">
                    
                    <div class="space"></div>

                    <div class="outline-look-btn" >
                        
                        <span class="txt-gray f-sz-b"><small class="">{{$site['plans_gray_from'] ?? ''}}</small></span>
                        <span class="txt-black f-sz-b"><small class="accompaniment"></small></span>
                        <span class="txt-gray f-sz-b"><small >{{$site['plans_gray_month'] ?? ''}}</small></span>

                        <input type="hidden" class="valueAccompaniment" value="">
                    </div>
                    <br>
                    <a href="https://landing.datacrm.com/asesoria_datamkt" class="typ-montserrat text-uppercase f-sz-m btn mt-2 px-4 btn-orange effect-zoom" target="_blank">{{$site['plans_gray_btn'] ?? ''}}</a>
                </div>
                <div class="space"><br></div>
                <div class="space"><br></div>
            </div>
        </div>
    </div>

    
    <div class="container p-0">
        <div class="row mb-2 section-resize">
            <div class="col-12 my-2">
                <hr class="hr-silver">
            </div>
        </div>
        <div class="row section-resize ">
            <div class="col-md-12 col-12 text-center">
                <h2 class="text-uppercase mt-4 txt-blue typ-montserrat ft-h2">
                    {{$site['faq_title'] ?? ''}}
                </h2>
                <div class="space"></div>
               
                <div class="row mt-2  d-none d-lg-block" id="">
                    <div class="col-12">
                        <div class="row">
                            @for($i=1;$i<5;$i++)
                            <div class="col-6 px-4 mt-3">
                                <div class="card">
                                    <div class="card-header text-left faq_question_title">
                                        {!! faq_box_question($site['faq_question'.$i] ?? '') !!}
                                    </div>
                                    <div class="card-body">
                                      <p class="card-text faq_question_anwser"> {!! $site['faq_answer'.$i] ?? '' !!}</p>
                                    </div>
                                  </div>
                            </div>
                            @endfor

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 d-none d-block d-sm-none d-sm-block d-md-none">
                    <div id="accordion" class="plans-head">
                        @for($i=1;$i<5;$i++)
                        <div class="card">
                          <div class="card-header text-left" id="">
                            <h5 class="mb-0 text-left">
                              <a class="f-sx-sm" data-toggle="collapse" data-target="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapse{{ $i }}">
                                <i class="fa fa-circle txt-orange"></i>  {!! $site['faq_question'.$i] !!}
                              </a>
                            </h5>
                          </div>
                      
                          <div id="collapse{{ $i }}" class="collapse " aria-labelledby="heading{{ $i }}" data-parent="#accordion">
                            <div class="card-body text-left f-sx-sm">
                                <p>{!! $site['faq_answer'.$i] ?? '' !!}</p>
                            </div>
                          </div>
                        </div>
                        @endfor
                      </div>
                </div>

                <div class="col-12 text-center">
                    <button class="modalPruebaGratis btn btn-orange text-uppercase p-2 f-sz-m mt-5  effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                        <b>{{$site['faq_btn'] ?? ''}}</b>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mb-2 section-resize">
            <div class="col-12 my-2">
                <div class="space"></div><div class="space"></div>
                <hr class="hr-silver">
            </div>
        </div>

        <div class="row justify-content-center section-resize">
            @include('front.includes.testimonials')
        </div>

        <div class="space"></div><div class="space"></div>

        <div class="row mb-5 section-resize">
            @include('front.includes.start_now')
        </div>
    </div>

    <div class="divModalPayu" style="display:none">
        @include('front.includes.modalPayu')
        @include('front.includes.modalCompletePay')
    </div>

@endsection
