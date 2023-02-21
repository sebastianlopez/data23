@extends('front.layouts.login')

@section('title_meta', $site['login_title_meta'] ?? '')

@section('description_meta',  $site['login_desc_meta'] ?? '')

@section('meta_og')
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Iniciar sesión"/>
    <meta property="og:description" content="Ingresa a tu CRM"/>
    <meta property="og:url" content="https://www.datacrm.com/iniciar-sesion/"/>
    <meta property="og:site_name" content="Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Ingresa a tu CRM"/>
    <meta name="twitter:title" content="Iniciar sesión"/>
    <meta name="google-signin-client_id" content="227773197957-mhc6md76bnf6hbmnp502fmoosgn55gka.apps.googleusercontent.com">
@endsection

@section('content')
    <div class="container p-0 mt-5">

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 pt-3 border-right" >
                <div class="text-center" align="center">
                <h1 class="mt-5 typ-montserrat txt-greenblue fs-h4 text-center">
                    {{$site['login_title'] ?? ''}}
                </h1>
                <a href="{{route('home')}}">
                    <img src="{{asset('front/images/logo.png')}}"  alt="datacrm"  class="img-fluid" width="180">
                </a> 
                </div>               
                <div id="pagLoginCrm">
                    <form method="" id="form_ingreso" class="mt-5 pl-5 pr-5 mr-5 ml-5">
                        @csrf
                        <input type="hidden" id="_url" value="{{ url('') }}">
                        <input type="hidden" name="google_id" id="google_id" value="">
                        <input type="hidden" name="google_email" id="google_email" value="">
                        <input type="hidden" name="google_login" id="google_login" value="false">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="" class="txt-gray f-sz-sm">{{$site['login_form_email'] ?? ''}}*</label>
                                <input type="text" name="email" id="email"  class="form-control " required>
                                <small class=""> <a href="javascript:void(0)" class="forgotEmail txt-greenblue"> {{$site['login_form_forgot_email'] ?? ''}}</a></small>
                            </div>
                            </div>
        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="txt-gray f-sz-sm">{{$site['login_form_password'] ?? ''}}</label>
                                    <input  type="password" name="password" id="password" class="form-control" required >
                                    <small class=""> <a href="javascript:void(0)" class="pagForgotPass txt-greenblue"> {{$site['login_form_forgot_password'] ?? ''}}</a></small>
                                </div>
                            </div>

                            <div class="col-md-12 company" style="display:none;">
                                <div class="form-group">
                                <label for="" class="txt-gray f-sz-sm">Empresa</label>
                                <input  style="display:none;" type="hidden" name="loginIsOld" id="loginIsOld" value="0">
                                <input  type="text" name="empresa" id="empresa" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button id="btn-submit-email" type="submit" class="btn-submit-email btn btn-greenblue p-2 typ-os-regular f-sz-sm mt-3 effect-zoom btn-long ">
                                    <b>{{$site['login_btn'] ?? ''}}</b>
                                </button> 
                            </div>
                            

                            <div class="col-12">
                                <div style="margin-top:8px; color:#d24949; font-size:1em;">
                                    <span class="typ-os-regular" id="idMsgServe"></span>
                                </div>
                                <div class="text-center">
                                    <span style="font-size:12px;"> {{$site['contact_form_captcha1'] ?? ''}}
                                        <a  href="https://policies.google.com/privacy" 
                                            target="_blank"> {{$site['contact_form_captcha2'] ?? ''}} 
                                        </a>
                                        {{$site['contact_form_captcha3'] ?? ''}} 
                                        <a href="https://policies.google.com/terms" target="_blank"> {{$site['contact_form_captcha4'] ?? ''}} 
                                        </a>. 
                                    </span>
                                </div>
                               
                            </div>
                        </div>    
                    </form>
                </div>

                <div id="forgotPasswordDiv" class="col-12 hide border" >
                    
                    <h1 class="mt-5 typ-montserrat txt-greenblue fs-h4 text-center">
                        {{$site['login_forgot_password_title'] ?? ''}}
                    </h1>
                    <form id="formRequestPass"  class="form-horizontal  pl-5 pr-5 mr-5 ml-5" action="" method="POST">
                        @csrf
                        <div class="row justify-content-center mt-2 pt-5">
                            <div class="col-12">
                                <label for="" class="txt-gray f-sz-sm">{{$site['login_form_email'] ?? ''}}*</label>
                                <input type="text" name="emailPassword" id="emailPassword"  class="form-control">
                            </div>
                            <div class="col-12 mt-3 pt-1">
                                <div style="margin-top:8px; color:#d24949; font-size:1em;">
                                    <span class="typ-os-regular" id="idMsgRecover"></span>
                                </div>
                            </div>
                            <div class="divButton mt-2 pt-4" style="display:flex; justify-content: center; ">
                                <button type="submit" id="formRecoverPass" class="btn-modified radius btn-orange p-2 text-uppercase typ-os-regular f-sz-sm mt-3 effect-zoom" name="retrievePassword" style="border-radius: .25rem; margin:10px; width:150px;">
                                    <b>{{$site['login_forgot_password_btn'] ?? ''}}</b>
                                </button>
    
                                <button  type="button" class="forgotPasswordLink btn-modified radius btn-orange p-2 text-uppercase typ-os-regular f-sz-sm mt-3 effect-zoom backButtons" style="border-radius: .25rem; margin:10px; width:150px;">
                                    <b>{{$site['login_forgot_password_back'] ?? ''}}</b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="space"></div>
                <div class="col-12 mt-2 text-center">
                    <p class="typ-os-regular fs-h4" >
                        {{$site['login_form_register'] ?? ''}} 
                        <a href="" class="modalPruebaGratis txt-greenblue"  data-toggle="modal" data-target="#modalPruebaGratis">
                            <b>{{$site['login_form_btn_register'] ?? ''}}</b>
                        </a>
                    </p>
                </div>
              
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 pt-5" align="center">
                
                <img class="imageGif"  src="{{asset('upload/configsite/'.($site['login_image'] ?? ''))}}" alt="" class="img-fluid" width="350"  height="350">
                
                <h2 class="text-uppercase mt-3 txt-orange typ-montserrat f-sz-b br-wd">
                    {{$site['login_main_text'] ?? ''}}
                </h2>
                
                <p class="typ-os-regular f-sz-m txt-blackgray">
                    {!! $site['login_central_text'] ?? '' !!}
                </p>
                
                <a href="{{$site['login_btn_link'] ?? ''}}" target="_blank" class="btn px-3 btn-orange p-2 typ-os-regular f-sz-sm mt-3 effect-zoom">
                    <b>{{$site['login_btn_text'] ?? ''}}</b>
                </a>
                
                <p class="typ-os-regular f-sz-m mt-5 txt-blackgray">
                    {{$site['login_text_app'] ?? ''}}
                </p>
                
                <div class="row">
                    <div class="col-lg-12">
                        <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank">
                            <picture>
                                <source type="image/webp" srcset="{{asset('front/images/home/home_banner3_boton1.webp')}}" width="150">
                                <source type="image/png" srcset="{{asset('front/images/home/home_banner3_boton1.png')}}" width="150">
                                <img src="{{asset('front/images/home/home_banner3_boton1.png')}}" alt="datacrm ios" width="150" class="effect-zoom mr-md-2 my-1 img-fluid">
                            </picture>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.datacrm.application" target="_blank">
                            <picture>
                                <source type="image/webp" srcset="{{asset('front/images/home/home_banner3_boton2_200x63.webp')}}">
                                <source type="image/png" srcset="{{asset('front/images/home/home_banner3_boton2_200x63.png')}}">
                                <img src="{{asset('front/images/home/home_banner3_boton2_200x63.webp')}}" alt="datacrm on android"  width="150" class="effect-zoom mr-md-2 my-1 img-fluid">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

   <script src="https://www.google.com/recaptcha/api.js?render=6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf" async></script>

   <script src="{{asset('front/js/create-demo.home.js?v=63214')}}"></script>
   
   <script>$(window).bind("load", () => showMobile());</script>
   @include('front.includes.modal_mobile')
@endsection
