@extends('admin.layouts.app')

@section('title', 'Configuración')

@section('breadcrumb')
    <ol class="breadcrumb bread-main">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="mdi-action-home"></i></a></li>
        <li class="breadcrumb-item active">Configuración</li>
    </ol>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ul class="nav nav-tabs cnav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">SITIO</a></li>
                    <li role="presentation"><a href="#index" aria-controls="index" role="tab" data-toggle="tab">INICIO</a></li>
                    <li role="presentation"><a href="#country" aria-controls="country" role="tab" data-toggle="tab">PAISES</a></li>
                    <li role="presentation"><a href="#blog" aria-controls="blog" role="tab" data-toggle="tab">BLOG</a></li>
                    <li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">NOSOTROS</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">CONTÁCTENOS</a></li>
                    <li role="presentation"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">LOGIN</a></li>
                    <li role="presentation"><a href="#webinars" aria-controls="webinars" role="tab" data-toggle="tab">WEBINARS</a></li>
                    <li role="presentation"><a href="#crm" aria-controls="crm" role="tab" data-toggle="tab">CRM MOVIL</a></li>
                    <li role="presentation"><a href="#software" aria-controls="software" role="tab" data-toggle="tab">SOFTWARE CRM</a></li>
                    <li role="presentation"><a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">PLANS</a></li>
                    <li role="presentation"><a href="#sector" aria-controls="sector" role="tab" data-toggle="tab">SECTOR</a></li>
                    <li role="presentation"><a href="#partners" aria-controls="partners" role="tab" data-toggle="tab">PARTNERS</a></li>
                </ul>
                <form class="validate-form" method="POST" enctype="multipart/form-data" action="">
                    @csrf
                    <div class="panel-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="info">
                                @include('admin.includes.configsite.site')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="index">
                                @include('admin.includes.configsite.index')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="country">
                                @include('admin.includes.configsite.countries')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="blog">
                                @include('admin.includes.configsite.blog')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="about">
                                @include('admin.includes.configsite.about')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="contact">
                                @include('admin.includes.configsite.contact')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="login">
                                @include('admin.includes.configsite.login')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="webinars">
                                @include('admin.includes.configsite.webinars')
                            </div>
                            <div role="tabpanel" class="tab-pane " id="crm">
                                @include('admin.includes.configsite.crm')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="software">
                                @include('admin.includes.configsite.software')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="plan">
                                @include('admin.includes.configsite.plan')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="sector">
                                @include('admin.includes.configsite.sector')
                            </div>

                            <div role="tabpanel" class="tab-pane " id="partners">
                                @include('admin.includes.configsite.partners')
                            </div>

                           
                        </div>
                    </div>
                    <div class="panel-footer bg-white">
                        <button type="submit" class="btn btn-main"><i class="fa fa-save"></i> Guardar</button>
                        <a href="{{route('dashboard')}}" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js_vars')
    <script>
        var map,
            marker,
            infowindow,
            contentString = '',
            icon = '{{asset('upload/default/marker.png')}}',
            img_default = '{{asset('upload/default/no-image-small.png')}}',
            latitude = '{{getInfo('latitude')}}',
            longitude = '{{getInfo('longitude')}}',
            icon_map_url = '{{asset('images/marker.png')}}';
    </script>
@endsection