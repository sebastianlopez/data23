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

    <div class="container p-0 pt-3">
        <div class="row pt-5 mt-5 section-resize section-init-functions">

            <div class="col-md-6 text-center hide-mobile">
                <figure>
                    <source type="image/webp" srcset="{{asset('front/images/crm/crm1.webp')}}">
                    <img src="{{ asset('front/images/crm/crm1.webp') }}" class="img-fluid" alt="SOFTWARE CRM hide">
                 </figure>                
            </div>
            <div class="col-md-6">
                <h1 class="mt-5 typ-montserrat myTitleBlue ft-h2">
                   {!! $site['software1_title'] ?? '' !!}
                </h1>
                <p class="txt-gray f-sz-m mt-4 pr-5 mr-5">
                    {{$site['software1_text'] ?? ''}}
                </p>
                <div class="row ">
                    <div class="col-lg-5 col-md-5 col-12 mt-3">
                        <a data-toggle="modal"  href="#modalVideo" id="open-modalVideo" href="" 
                            class=" typ-montserrat p-2 f-sz-sm btn btn-orange btn-lg effect-zoom">
                            <b> {{$site['software1_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>              
            </div>
            <div class="col-md-6 mt-4 show-mobile">
                <figure>
                    <source type="image/webp" srcset="{{asset('front/images/crm/crm1.webp')}}">
                    <img src="{{ asset('front/images/crm/crm1.webp') }}" class="img-fluid" alt="SOFTWARE CRM">
                 </figure>                
            </div>
        </div>
        
        
        <div class="row section-resize mt-5 mb-5">
            <div class="col-12 text-center">
                <h2 class=" mt-4 myTitleBlue typ-montserrat ft-h2">
                    {!! $site['software2_title'] ?? '' !!}
                </h2>
                <p class="typ-os-regular txt-black f-sz-sm pr-3 pl-3">
                    {{$site['software2_text'] ?? ''}}
                </p>
                <div class="row mt-5">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-6 col-md-6 pt-3">
                                @for($i=1;$i<4;$i++)
                                    <div class="col-12 {{ (($i>1)? 'pt-3':'') }}">
                                        <p class="text-center typ-os-regular f-sz-sm">
                                            {!! featured_text($site['software2_text'.$i], $site['software2_featured'.$i] ?? '') !!}
                                        </p>
                                    </div>
                                @endfor
                            </div>
                            <div class="col-6">
                                <picture>
                                    <source type="image/webp" srcset="{{asset('front/images/crm/IMG_3.webp')}}">
                                    <img src="{{asset('front/images/home/home_banner2_img1_1140x374.png')}}" alt="IMG_3" class="img-fluid mt-1">
                                </picture>       
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 videobackg">
                    
                            <div class="embed-responsive embed-responsive-16by9  mt-3" >
                                <iframe class="embed-responsive-item"  autoplay loop muted src="{{asset('front/images/index/Home video.gif')}}"></iframe>
                              </div>
                       
                    </div>
                </div>    

                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-5 col-12 mt-5">
                        <a href="" class="modalPruebaGratis text-uppercase typ-montserrat p-2 f-sz-sm btn btn-orange effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                            <b>{{$site['software2_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="space hide-mobile"></div><div class="space hide-mobile"></div>
        @include('front.includes.acknowledged')
        <div class="space hide-mobile"></div><div class="space"></div>
    </div>    
    
    <div class="myDivGreen1 myDivDiagonalRightA p" >
        <div class="container  mt-5 MB-5  myDivDiagonalRightB section-resize " id="myHomeSeccion5">
            <div class="row section-init-index justify-content-center " >
    
                <div class="col-lg-7 col-md-7 col-12  mt-5 px-max-5 order-2 order-lg-1">      
                
                    <h2 class="text-left txt-white mt-3 ft-h2 br-wd">
                        {!! $site['software3_title'] ?? '' !!}
                    </h2>
            
                    <div class="row section-resize ">
                        <p> {{$site['software3_text'] ?? ''}}</p>
                    </div>  
                    
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-5 col-12 mt-5 text-center">
                            <a href="" class="modalPruebaGratis text-uppercase typ-montserrat f-sz-sm p-2 btn btn-orange effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                                <b>{{$site['software3_btn'] ?? ''}}</b>
                            </a>
                            <div class="space"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12 order-1 order-lg-2" align="Left">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/crm/IMG_4.webp')}}">
                        <img src="{{asset('front/images/crm/IMG_4.webp')}}" alt="{{ chstr($site['software3_title']) }}" alt="{{ chstr($site['software3_text']) }}" class="img-fluid">
                    </picture>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-0 pt-3">
        <div class="row section-resize mt-5">
            <div class="col-md-6 text-center">
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/crm/IMG 5.webp')}}">
                    <img src="{{asset('front/images/crm/IMG 5.webp')}}" alt="{{ chstr($site['software5_title']) }}" class="img-fluid mt-3 img-fluid">
                </picture>
            </div>
            <div class="col-md-4">
                <h2 class="mt-4 myTitleBlue typ-montserrat ft-h2">
                    {!! $site['software5_title'] ?? '' !!}
                </h2>
                <p class="typ-os-regular txt-grey f-sz-m mt-4">
                    {{$site['software5_text'] ?? ''}}
                </p>
               
            </div>
            <div class="col-12 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-5 col-12 mt-5">
                        <a href="" class="modalPruebaGratis text-uppercase typ-montserrat f-sz-sm p-2 btn btn-orange effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                            <b>{{$site['software5_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="space hide-mobile"></div><div class="space "></div>

    <!-- Seccion Usalo donde estes -->

    <div class="myDivGraylight">
        <div class="container  mt-5 MB-5" id="myHomeSeccion5">
        <div class="row section-resize ">

            <div class="col-md-6 order-2 order-lg-1">
                <h2 class="mt-5 myTitleBlue typ-montserrat ft-h2">
                    {!! $site['software4_title'] ?? '' !!}
                </h2>
                <p class="typ-os-regular txt- f-sz-m mt-4">
                    {{$site['software4_text'] ?? ''}}
                </p>

                <div class="row left">
                    <div class="col-4 mt-2">
                        <a href="{{route('mobile',['locale'=>get_lang()])}}" class="text-uppercase typ-montserrat btn-lg btn btn-orange effect-zoom">
                            <b>{{$site['software4_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 text-center order-1 order-lg-2">
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/crm/IMG 6.webp')}}">
                    <img src="{{asset('front/images/crm/IMG 6.webp')}}" 
                    alt="{{ chstr($site['software4_title']) }}"  class="img-fluid myDivGrayLight-img">
                </picture>
                
            </div>
        </div>
        </div>
    </div>
    <div class="space hide-mobile"></div><div class="space"></div>
    <div class="container p-0 pt-3">   
        <section>
        <div class="row section-resize ">
            <div class="col-12 text-center">
                <h2 class="mt-4 myTitleBlue typ-montserrat ft-h2 br-wd">
                    {!! $site['software6_title'] ?? '' !!}
                </h2>
                <p class="typ-os-regular txt-black f-sz-sm mt-4 pr-5 pl-5">
                    {{$site['software6_text'] ?? ''}}
                </p>
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/crm/IMG 7.webp')}}">
                    <img src="{{asset('front/images/crm/IMG 7.webp')}}" alt="" class="img-fluid mt-3">
                </picture>
                <div class="row">
                    <div class="col-2"></div>
                    @for($i=1;$i<4;$i++)
                        <div class="{{ ($i==2)? 'col-4':'col-2' }}">
                            <p class="text-center typ-os-regular f-sz-sm">
                                {!! featured_text($site['software6_text'.$i], $site['software6_featured'.$i] ?? '') !!}
                            </p>
                        </div>
                    @endfor
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-5 col-12 mt-5">
                        <a href="" class="modalPruebaGratis text-uppercase typ-montserrat f-sz-sm pr-4 pl-4 btn btn-orange effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                            <b>{{$site['software6_btn'] ?? ''}}</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <div class="space"></div><div class="space"></div>
    </div>

    @include('front.includes.yourprocess')
    <div class="space"></div><div class="space"></div>

    <!-- Seccion Testimoniales -->

    <div class="row justify-content-center section-resize">
        @include('front.includes.testimonials')
    </div>
    <div class="space"></div>
    <!-- Seccion Unete a miles de usuarios -->

    <div class="row pt-2 mb-5 section-resize">
        @include('front.includes.start_now')
    </div>
</div>
@endsection