@extends('front.layouts.app')
@section('main_bg')
    bg_blog
@endsection
@section('title_meta')
    {{$title_meta}}
@endsection
@section('description_meta')
    {{$description_meta}}
@endsection
@section('keywords_meta')
    {{$keywords_meta}}
@endsection
@section('meta_og')
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$title_meta}}"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="{{$title_meta}}"/>
    <link href="{{asset('front/css/blog/dateStyle.css')}}" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="styles.css"></noscript>
    <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>
@endsection

@section('content')
    
    <script src="{{asset('admin/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <div class="container-fluid">
        <div class="row mb-5 pt-3">
            <div class="col-12 px-0">
            </div>
        </div>
    </div>
    {{ logger('detail.blade $categories : ' . json_encode($categories)) }}
    {{ logger('detail.blade $reg        : ' . json_encode($reg)) }}
    {{ logger('detail.blade $related    : ' . json_encode($related)) }}

    <div class="container p-0 mb-5 font-fm-montserrat">
        <div class="container header-filter">
            <div class="row">
                <div class="mt-2 col-xs-7 col-sm-7 col-md-6 header-filter-logo">
                    <!-- <a href="{{route('blog',['locale'=>get_lang()])}}">
                        <picture>
                            <source type="image/webp" srcset="{{asset('front/images/blog/logo-blog.webp')}}">
                            <source type="image/png" srcset="{{asset('front/images/blog/logo-blog.png')}}">
                            <img src="{{asset('front/images/blog/logo-blog.webp')}}" alt="" class="img-fluid">
                        </picture>
                    </a> -->
                    <a href="{{route('blog')}}">
                        <picture>
                            <source type="image/webp" srcset="{{asset('front/images/blog/logo-blog.webp')}}">
                            <source type="image/png" srcset="{{asset('front/images/blog/logo-blog.png')}}">
                            <img src="{{asset('front/images/blog/logo-blog.webp')}}" alt="" class="img-fluid">
                        </picture>
                    </a>                
                </div>
                
                <div class="mt-2 col-xs-2 col-sm-2 col-md-3  d-none d-xs-none d-md-block d-lg-block">
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$site['blog_categories'] ?? ''}}</button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                        @foreach($categories as $category)
                            <a class="dropdown-item" href="{{route('blog_category',['slug'=>chstr($category->slug),'locale'=>get_lang()])}}/">{{$category->info->name}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="mt-2 col-xs-3 col-sm-5 col-md-3 header-filter-search">
                    <div class="input-group">
                        <input type="hidden" id="items" data="{{ $itemsSearch }}">
                        <input type="text" class="form-control" id="search" placeholder="{{$site['blog_search'] ?? ''}}">
                    </div>
                </div>
            </div>
        </div>
        <hr style="border-top: 0px solid rgba(0, 0, 0, 0.1);">
        <div class="area-list-blog">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                <!-- Titulo y contenido -->                    
                    
                <div class="area-article ">
                    <div class="row section-resize">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h1 class="">{{$reg->info->title}}</h1>
                            <h4>{!! $reg->info->description !!}</h4>
                            <br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="author-article">
                                        <p>{{$reg->author}}</p>
                                    </div>
                                    <div class="calendar-article">
                                        <p>{{$reg->date->day}} {{getMonthName($reg->date->format('M'))}} {{$reg->date->year}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <div>
                                        @if(!empty($reg->image))
                                        <img src="{{asset('upload/article/b'.$reg->image)}}" alt="{{$reg->info->alt}}"
                                        class="img-article-detail">
                                        @endif
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row content-detail" >
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div>
                                        {!! $reg->info->content !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                        

                    <!-- Galeria -->

                    @if(isset($gallery) && !empty($gallery))
                        <div class="gallery popup-gallery-images">
                            <div class="row">
                                @foreach($gallery as $image)
                                    <div class="col-md-3 col-6">
                                        <a href="{{asset('upload/gallery/b'.$image->filename)}}"
                                            title="{{$image->info->description}}"><img
                                                    src="{{asset('upload/gallery/s'.$image->filename)}}"
                                                    class="img-fluid" alt="{{$image->info->alt}}"></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                        
                    <!-- Cronologia -->

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        @if(count($cronologies) > 0)
                            @include('admin.includes.cronology_blog')
                        @endif
                    </div>
                    <br>

                    <!-- Comenzar Gratis -->
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 blog-detail-start-now font-sz-3 text-center">
                                            
                        <div class="row">
                            <div class="col-xs-5 col-sm-5 col-md-5">
                                <span style="font-size: 1.30rem;" class="text-white">
                                    <b>{{$site['blog_title_aside'] ?? ''}}</b>
                                </span>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            </div>

                            <!--
                            <div class="col-xs-7 col-sm-7 col-md-7 content-vertical-center">
                                <button class=" modalPruebaGratis btn btn-lg btn-orange text-uppercase w-100"
                                        data-toggle="modal" data-target="#modalPruebaGratis">
                                    <b>{{$site['blog_btn_aside']  ?? ''}}</b>
                                </button>
                            </div>
                            -->
                            <div class="col-xs-5 col-sm-5 col-md-5 content-vertical-center align-items-center">
                                <button class=" modalPruebaGratis btn btn-lg btn-orange text-uppercase w-100"
                                        data-toggle="modal" data-target="#modalPruebaGratis">
                                    <b>{{$site['blog_btn_aside']  ?? ''}}</b>
                                </button>
                            </div>                            
                        </div>
                    </div>

                </div>
                    
                <!-- Entradas o Articulos Relacionados -->

                <div class="container related area-recommended">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <h2>{{$site['blog_related'] ?? ''}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($related as $article)
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="img-content-recommended">
                                <a href="{{route('article',['slug'=>$article->slug,'locale'=>get_lang()])}}/">
                                    <picture>
                                        <img src="{{ (!empty($article->image) ? asset('upload/article/s'.$article->image) : asset('upload/article/default.jpg') )}}" alt="" class="img-fluid img-topic">
                                    </picture>
                                </a>
                            </div>
                            <h5 class="area-content-recommended">
                                <!-- <a href="{{route('article',['slug'=>$article->slug,'locale'=>get_lang()])}}/">
                                    {{$article->info->title}}
                                </a> -->
                                <a href="{{route('article',['slug'=>$article->slug])}}/">
                                    {{$article->info->title}}
                                </a>                                    
                            </h5>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
@endsection
