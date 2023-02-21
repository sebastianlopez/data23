@extends('front.layouts.app')
@section('title_meta', $site['webinars_title_meta'] ?? '')

@section('description_meta',$site['webinars_desc_meta'] ?? '')

@section('meta_og')
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="webinar - Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta property="og:url" content="https://www.datacrm.com/proximos-webinars/"/>
    <meta property="og:site_name" content="Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="webinar - Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
@endsection

@section('content')
    <div class="container p-0 pt-3">
        <div class="row pt-5 section-resize section-init-webinars">
            <div class="col-12 text-center mt-3">
                <h1 class="text-uppercase mt-5 txt-blackgray typ-montserrat f-sz-b">
                    {{$site['webinars_title'] ?? ''}}
                </h1>
                <p class="typ-os-regular txt-black f-sz-sm mt-4">
                    {{$site['webinars_desc'] ?? ''}}
                </p>
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <h3 class="typ-montserrat txt-blackgray mt-5 pt-4 tittleWebinarDiv f-sz-sm">
                            {!! featured_text($site['webinars_one_main_text'] ?? '', $site['webinars_one_main_featured'] ?? '') !!}
                        </h3>
                        <p class="text-center typ-os-regular f-sz-s txt-gray mt-3">
                            {{$site['webinars_one_central_text'] ?? ''}}
                        </p>
                        <p class="text-center typ-os-regular f-sz-sm txt-black mt-5">
                            {{$site['webinars_one_hour'] ?? ''}}
                        </p>

                        <a href="{{$site['webinars_one_btn_link'] ?? ''}}"
                           class="btn btn-orange text-uppercase typ-montserrat p-2 f-sz-sm mt-3 effect-zoom"
                           target="_blank">
                            <b>{{$site['webinars_one_btn_text'] ?? ''}}</b>
                        </a>
                    </div>
                    <div class="col-lg-2" id="imgCenterWebinars">
                        <img src="{{asset('front/images/webinars/banner1_img1.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <h3 class="typ-montserrat txt-blackgray mt-5 pt-4 tittleWebinarDiv f-sz-sm">
                            {!! featured_text($site['webinars_two_main_text'] ?? '', $site['webinars_two_main_featured'] ?? '') !!}
                        </h3>
                        <p class="text-center typ-os-regular f-sz-s txt-gray mt-3">
                            {{$site['webinars_two_central_text'] ?? ''}}
                        </p>
                        <p class="text-center typ-os-regular f-sz-sm txt-black mt-5">
                            {{$site['webinars_two_hour'] ?? ''}}
                        </p>
                        <a href="{{$site['webinars_two_btn_link'] ?? ''}}"
                           class="btn btn-orange text-uppercase typ-montserrat p-2 f-sz-sm mt-3 effect-zoom"
                           target="_blank">
                            <b>{{$site['webinars_two_btn_text'] ?? ''}}</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2 section-resize">
            <div class="col-12 my-2">
                <hr class="bg-hr">
            </div>
        </div>
        <div class="row section-resize">
            <div class="col-12 text-center">
                <h1 class="text-uppercase mt-3 txt-blackgray typ-montserrat f-sz-b">
                    {{$site['webinars_calendar_title'] ?? ''}}
                </h1>
                <p class="typ-os-regular txt-black f-sz-sm mt-4">
                    {{$site['webinars_calendar_desc'] ?? ''}}
                </p>
                <div class="row justify-content-center mt-4">
                        @foreach($reg['events'] as $event)
                            @php $date = formatDate($event->date,1) @endphp
                            <div class="col-lg-4 col-md-6 col-12 mt-3">
                                <div class="card-webinars">
                                    <div class="row py-3 bg-card-webinars">
                                        <div class="col-5 line-webinars">
                                            <p class="text-uppercase txt-greenblue typ-os-regular f-sz-bbb">
                                                <b>{{$date[0]}}</b>
                                            </p>
                                        </div>
                                        <div class="col-7">
                                            <p class="text-left txt-blackgray typ-os-regular f-sz-b">
                                                {{$date[1]}}<br>
                                                <b>{{$date[2]}}</b>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="txt-blackgray typ-os-regular f-sz-sm pt-2">
                                        {{$event->title}}
                                    </p>
                                    @if(!empty($event->link) && !empty($event->btn_link))
                                        <a href="{{$event->link}}" target='_blank'
                                           class="btn btn-orange text-uppercase typ-montserrat f-sz-sm mb-3 effect-zoom p-2">
                                            {{$event->btn_link}}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12 my-2">
                <hr class="bg-hr">
            </div>
        </div>
        <div class="row mb-5 section-resize">
            @include('front.includes.start_now')
        </div>
    </div>
@endsection
