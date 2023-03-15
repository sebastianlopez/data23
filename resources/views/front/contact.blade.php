@extends('front.layouts.app')
@section('title_meta', $site['contact_title_meta'] ?? '')

@section('description_meta', $site['contact_desc_meta']?? '')

@section('meta_og')
@endsection

@section('content')

    <div class="container p-0 pt-3">
        <div class="row py-5 mt-5 section-resize section-init-preguntas">
            <div class="col-lg-5 px-5 mt-4 col-12 order-2 order-lg-1" >
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/contact/img-1.webp')}}">
                    <img src="{{asset('front/images/contact/img-1.webp')}}" alt="contact" class="img-fluid mt-3">
                </picture>
            </div>
            <div class="col-lg-5 px-5 mt-4 col-12 order-1 order-lg-2 ">
                <h1 class="myTitleBlue typ-montserrat ft-h2">
                    {{$site['contact_title'] ?? ''}}
                </h1>
                <hr class="hr-gold text-left">
                <p class="typ-montserrat txt-black f-sz-sm mt-4">
                   {!! $site['contact_text'] ?? '' !!}
                </p>
                <form id="formContact" action="{{route('send-contact')}}" method="GET" class="px-2">
                    {{ csrf_field() }}
                    <img class="loader_contact" src="{{asset('front/images/cargandov1.gif')}}">
                    <div class="alert alert-danger hide" id="errorsFormContact">
                        <ul></ul>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="nombre" id="nombre" placeholder="{{$site['contact_form_name'] ?? ''}}" class="form-control txt-greenblue-strong mt-3 typ-os-regular form-radius" >
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="celular" id="celular" placeholder="{{$site['contact_form_phone'] ?? ''}}" class="form-control txt-greenblue-strong mt-3 typ-os-regular form-radius">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                    <input type="text" name="correo" id="correo" placeholder="{{$site['contact_form_email'] ?? ''}}"
                           class=" form-control typ-os-regular txt-greenblue-strong mt-3 form-radius">
                        </div>
                        <div class="col-md-12">
                            <textarea name="mensaje" id="mensaje" rows="3" class="form-control mt-3 typ-os-regular txt-greenblue-strong  form-radius"
                              placeholder="{{$site['contact_form_body'] ?? ''}}"></textarea>
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
                            <button type="submit" class="col-md-12 btn btn-greenblue text-uppercase p-2 typ-montserrat f-sz-sm mt-3 effect-zoom px-3 typ-os-regular form-radius">
                                <b>{{$site['contact_form_btn'] ?? ''}}</b>
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
        <div class="row mb-2 section-resize">
            <div class="col-12 my-2">
                <hr class="hr-silver">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 px-5 mt-4 col-12 text-center">
                <div class="container">
                    <h2 class="text-uppercase txt-blackgray typ-montserrat f-sz-b">
                        {{$site['contact_faq_title'] ?? ''}}
                    </h2>
                    <div id="accordion" class="contact-fqa">
                        @for($i=1;$i<7;$i++)
                        <div class="card mb-1">
                          <div class="card-header" id="heading{{ $i }}" >
                            <h5 class="mb-0 text-left f-sz-sm">
                              <a class="txt-white f-sz-sm" data-toggle="collapse" data-target="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapseOne" >
                                <i class="fa fa-circle txt-white"></i> {{ $site['contact_faq'.$i] ?? '' }}
                              </a>
                            </h5>
                          </div>
                      
                          <div id="collapse{{ $i }}" class="collapse " aria-labelledby="heading{{ $i }}" data-parent="#accordion">
                            <div class="card-body text-left typ-os">
                                {!! $site['contact_faq_aws'.$i] !!}
                            </div>
                          </div>
                        </div>
                        @endfor                
                      </div>

                </div>
            </div>
        </div> 
      
        <div class="row mb-5 section-resize">
            @include('front.includes.start_now')
        </div>
    </div>
    <script src="{{asset('front/js/contact.js?v=6326')}}"></script>     
    <script src="https://www.google.com/recaptcha/api.js?v=6326" async></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf" async></script>
@endsection
