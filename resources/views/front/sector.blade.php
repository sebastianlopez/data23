@extends('front.layouts.app')

@section('title_meta', $site['sector_title_meta'] ?? '')

@section('description_meta',  $site['sector_desc_meta'] ?? '')

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

    <div class="container p-0 pt-3 typ-montserrat">
        <div class="row pt-5 mt-4 section-resize section-init-functions">
            <div class="col-md-6">
                <h1 class=" mt-5 typ-montserrat myTitleBlue ht-h1">
                   {!! $site['sector_title'] ?? '' !!}
                </h1>
                <p class="txt-gray f-sz-m mt-4 pr-5 mr-5">
                    {!! $site['sector_text'] ?? ''!!}
                </p>
                <div class="row ">
                    <div class="col-lg-5 col-md-5 col-12 mt-3">
                        <a data-toggle="modal"  href="#modalVideo" id="open-modalVideo" href="" 
                            class=" typ-montserrat p-2 f-sz-sm btn btn-orange btn-lg effect-zoom">
                            <b> {{$site['sector_btn'] ?? ''}}</b>
                        </a>
                        <div class="space"></div> 
                    </div>
                </div>              
            </div>
            <div class="col-md-6 text-center">
                <figure>
                    <source type="image/webp" srcset="{{asset('front/images/sector/recurso-1-8.webp')}}">
                    <img src="{{ asset('front/images/sector/recurso-1-8.webp') }}" class="img-fluid" alt="{{ chstr($site['sector_title']) }}">
                 </figure>  
                             
            </div>
        </div>
    </div>    

    <div class="space"></div>

    <div class="myDivBlue1 myDivDiagonalLeftA">
        <div class="container  mt-5  myDivDiagonalLeftB typ-montserrat" id="">
            
            <div class="row section-resize section-init-index justify-content-center" >
                <div class="col-lg-7 col-md-7 col-12  order-2 order-sm-1  ">      
                   
                    <h2 class="mt-5 typ-montserrat strongorange ft-h2" aligh="left">
                         {!! $site['sector2_title'] ?? '' !!} 
                    </h2>
                    
                    <p class="typ-os-regular typ-montserrat f-sz-m mt-3" aligh="left">
                            {!! $site['sector2_text'] ?? '' !!} 

                            <ul class="f-sz-m list-none-dots">
                                {!! features_list($site['sector2_list'] ?? '','circle','txt-white','txt-orange') !!}
                            </ul>   
                    </p>        
                    <div class="row ">
                        <div class="col-lg-5 col-md-5 col-12 mt-3">
                            <a data-toggle="modal"  href="#modalVideo" id="open-modalVideo" href="" 
                                class=" typ-montserrat p-2 f-sz-sm btn btn-orange btn-lg effect-zoom">
                                <b> {{$site['sector2_btn'] ?? ''}}</b>
                            </a>
                            <div class="space"></div> 
                        </div>
                        
                    </div>   
                </div>
               
                <div class="col-lg-5 col-md-5 col-12 order-1 order-sm-2" align="center">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/sector/recurso-2-8.webp')}}">
                        <img src="{{asset('front/images/sector/recurso-2-8.webp')}}" alt="{{ 'sector' }}"  class="img-fluid">
                    </picture>
                    <br>
                    <br>
                </div>
                
            </div>
    
        </div>
    </div>


    <div class="container p-0 pt-3 typ-montserrat">
        <div class="row pt-5 mt-5 section-resize section-init-functions">
           
            <div class="col-md-6 text-center">
                <figure>
                    <source type="image/webp" srcset="{{asset('front/images/sector/recurso-3-8.webp')}}">
                    <img src="{{ asset('front/images/sector/recurso-3-8.webp') }}" class="img-fluid" alt="{{ chstr($site['sector3_title']) }}">
                 </figure>                
            </div>
            <div class="col-md-6">
                <h2 class="mt-5 typ-montserrat strongorange f-sz-bb myTitleBlue ft-h2" aligh="left">
                    {!! $site['sector3_title'] ?? '' !!} 
               </h2>
               
               <p class="typ-os-regular typ-montserrat f-sz-m mt-3 txt-gray" aligh="left">
                       {!! $site['sector3_text'] ?? '' !!} 

                       <ul class="f-sz-m list-none-dots">
                           {!! features_list($site['sector3_list'] ?? '','circle','txt-gray','txt-orange') !!}
                       </ul>   
               </p>        
               <div class="row ">
                   <div class="col-lg-5 col-md-5 col-12 mt-3">
                       <a data-toggle="modal"  href="#modalVideo" id="open-modalVideo" href="" 
                           class=" typ-montserrat p-2 f-sz-sm btn btn-orange btn-lg effect-zoom">
                           <b> {{$site['sector3_btn'] ?? ''}}</b>
                       </a>
                   </div>
               </div>                 
            </div>
        </div>
    </div>    
        

    <div class="space"></div>   
    
    <div class="myDivGreen1 myDivDiagonalRightA" >
        <div class="container  mt-5 MB-5  myDivDiagonalRightB" id="myHomeSeccion5">
            <div class="row section-resize section-init-index" >
    
                <div class="col-lg-7 col-md-7 col-12 order-2 order-lg-1">      
                    <div class="row">
                        <h2 class="text-left  mt-1 typ-montserrat ft-h2 ">
                            {!! $site['sector4_title'] ?? '' !!} 
                        </h2>
            
                        <p>  {!! $site['sector4_text'] ?? '' !!} 
                            <ul class="f-sz-m list-none-dots">
                                {!! features_list($site['sector4_list'] ?? '','circle','txt-white','txt-orange') !!}
                            </ul> 
                        </p>
                    </div>  
                    
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 mt-3">
                            <a href="" class="modalPruebaGratis text-uppercase typ-montserrat f-sz-sm p-2 btn btn-orange effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                                <b>{{$site['software3_btn'] ?? ''}}</b>
                            </a>
                            <div class="space"></div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12  order-1 order-lg-2" align="Left">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/sector/recurso-4-8.webp')}}">
                        <img src="{{asset('front/images/crm/IMG_4.webp')}}" alt="{{ chstr($site['software3_title']) }}" alt="{{ chstr($site['software3_text']) }}" class="img-fluid">
                    </picture>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-0 pt-3 typ-montserrat">
        <div class="row pt-5 mt-5 section-resize section-init-functions">
           
            <div class="col-md-6 text-center">
                <figure>
                    <source type="image/webp" srcset="{{asset('front/images/sector/recurso-5-8.webp')}}">
                    <img src="{{ asset('front/images/sector/recurso-5-8.webp') }}" class="img-fluid" alt="{{ chstr($site['sector5_title']) }}">
                 </figure>                
            </div>
            <div class="col-md-6">
                <h2 class="mt-5 typ-montserrat strongorange ft-h2 myTitleBlue" aligh="left">
                    {!! $site['sector5_title'] ?? '' !!} 
               </h2>
               
               <p class="typ-os-regular typ-montserrat f-sz-m mt-3 txt-gray" aligh="left">
                       {!! $site['sector5_text'] ?? '' !!} 

                       <ul class="f-sz-m list-none-dots">
                           {!! features_list($site['sector5_list'] ?? '','circle','txt-gray','txt-orange') !!}
                       </ul>   
               </p>        
               <div class="row ">
                   <div class="col-lg-5 col-md-5 col-12 mt-3">
                       <a data-toggle="modal"  href="#modalVideo" id="open-modalVideo" href="" 
                           class=" typ-montserrat p-2 f-sz-sm btn btn-orange btn-lg effect-zoom">
                           <b> {{ $site['sector5_btn'] ?? ''}}</b>
                       </a>
                   </div>
               </div>                 
            </div>
        </div>
    </div>   


    <div class="space"></div>

    <div class="myDivBlue1 myDivDiagonalLeftA">
        <div class="container  mt-5  myDivDiagonalLeftB" id="">
            
            <div class="row section-resize section-init-index justify-content-center" >
                <div class="col-lg-7 col-md-7 col-12  order-2 order-sm-1  ">      
                   
                    <h2 class="mt-5 typ-montserrat strongorange ft-h2" aligh="left">
                         {!! $site['sector6_title'] ?? '' !!} 
                    </h2>
                    
                    <p class="typ-os-regular typ-montserrat f-sz-m mt-3" aligh="left">
                            {!! $site['sector6_text'] ?? '' !!} 

                            <ul class="f-sz-m list-none-dots">
                                {!! features_list($site['sector6_list'] ?? '','circle','txt-white','txt-orange') !!}
                            </ul>   
                    </p>        
                    <div class="row ">
                        <div class="col-lg-5 col-md-5 col-12 mt-3">
                            <a data-toggle="modal"  href="#modalVideo" id="open-modalVideo" href="" 
                                class=" typ-montserrat p-2 f-sz-sm btn btn-orange btn-lg effect-zoom">
                                <b> {{$site['sector6_btn'] ?? ''}}</b>
                            </a>
                            <div class="space"></div>
                        </div>
                    </div>   
                </div>
               
                <div class="col-lg-5 col-md-5 col-12 order-1 order-sm-2" align="center">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/sector/recurso-6-8.webp')}}">
                        <img src="{{asset('front/images/sector/recurso-6-8.webp')}}" alt="{{ 'sector' }}"  class="img-fluid">
                    </picture>
                    <br>
                    <br>
                </div>
                
            </div>
    
        </div>
    </div>
    <div class="space"></div><div class="space hide-mobile"></div>
    <div class="container p-0 mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="myTitleBlue  typ-montserrat ft-h2">
                    {!! $site['sector7_title'] ?? '' !!}
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2 text-center"></div>
            <div class="col-8 text-center">
                <p class=" mt-5  typ-os-regular txt-gray f-sz-m-home">
                        {!! $site['sector7_text'] ?? '' !!}
                </p>
            </div> 
        </div>
        <div class="row"> 
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form id="formContact" action="{{route('send-contact')}}" method="GET" class="px-2">
                {{ csrf_field() }}
                <img class="loader_contact" src="{{asset('front/images/cargandov1.gif')}}">
                <div class="alert alert-danger hide" id="errorsFormContact">
                    <ul></ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="" class="txt-gray f-sz-sm">{{$site['contact_form_name'] ?? ''}}*</label>
                        <input type="text" name="nombre" id="nombre" class="form-control  " >
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="" class="txt-gray f-sz-sm">Nombre de la empresa*</label>
                        <input type="text" name="empresa" id="empresa" class="form-control  " >
                      </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="" class="txt-gray f-sz-sm">{{$site['contact_form_phone'] ?? ''}}*</label>
                        <input type="text" name="celular" id="celular" class="form-control  " >
                         </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="" class="txt-gray f-sz-sm">Paīs*</label>
                        <select class="form-control -"></select>
                        
                         </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="" class="txt-gray f-sz-sm">Actividad*</label>
                        <select class="form-control "></select>
                        
                         </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="" class="txt-gray f-sz-sm">Cuantas personas tiene tu equipo comercial?*</label>
                        <input type="text" name="celular" id="celular" class="form-control  " >
                         </div>
                    </div>

                 
    
                </div>    
                <div class="row">
                    <div class="col-12 mb-3" align="left">
                        <span> {{$site['contact_form_captcha1'] ?? ''}}
                            <a href="https://policies.google.com/privacy"
                               target="_blank"> {{$site['contact_form_captcha2'] ?? ''}} </a>
                            {{$site['contact_form_captcha3'] ?? ''}} <a href="https://policies.google.com/terms"
                                                                        target="_blank"> {{$site['contact_form_captcha4'] ?? ''}}
                                . </a>
                        </span>
                        <br>
                        <button type="submit" class="col-md-12 btn btn-orange text-uppercase p-2 typ-montserrat f-sz-sm mt-3 effect-zoom px-3 typ-os-regular ">
                            <b>Quiero la asesoria !</b>
                        </button>
                    </div>
               
                    <div class="col-12">
                        <p class="typ-os-regular txt-blackgray mt-4 mb-4 text-center mb-0">
                            <b>{{$site['contact_form_bottom1'] ?? ''}} <a href="{{route('politicas')}}" 
                                                                          target="_blank"
                                                                          rel="noopener noreferrer">{{$site['contact_form_bottom2'] ?? ''}}</a></b>
                        </p>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div class="row mb-2 section-resize">
        <div class="col-12 my-2">
            <hr class="hr-silver">
        </div>
    </div>


    <div class="space"></div>
    @include('front.includes.acknowledged')
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