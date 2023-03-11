@extends('front.layouts.app')
@section('main_bg')
    bg_blog
@endsection
@section('title_meta', $title_meta ?? $site['blog_title_meta'])

@section('description_meta',  $site['blog_desc_meta'] ?? '')

@section('keywords_meta')
    {{$keywords_meta ?? null}}
@endsection
@section('meta_og')
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$title_meta}}"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="{{$title_meta}}"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>
@endsection

@section('styles_per')

<link href="{{asset('css/jquery-ui/jquery.ui.min.css')}}" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"/> 
<script src="{{asset('js/jquery-ui/jquery-ui.min.js')}}"></script>
@endsection

@section('content')


<div class="container-fluid">
    <div class="row mb-5 pt-4">
        <div class="col-12 px-0">
        </div>
    </div>
</div>

<div class="container p-0 mb-4 font-fm-montserrat font-sz-2">
    <div class="container header-filter background-blog2" >
        <div class="row">
            <div class="mt-2 col-xs-7 col-sm-7 col-md-6 header-filter-logo">
                 <a href="{{route('blog',['locale'=>get_lang()])}}">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/blog/logo-blog.webp')}}">
                        <source type="image/png" srcset="{{asset('front/images/blog/logo-blog.png')}}">
                        <img src="{{asset('front/images/blog/logo-blog.webp')}}" alt="" class="img-fluid">
                    </picture>
                </a> 
                <a href="{{route('blog')}}">
                    <picture>
                        <source type="image/webp" srcset="{{asset('front/images/blog/logo-blog.webp')}}">
                        <source type="image/png" srcset="{{asset('front/images/blog/logo-blog.png')}}">
                        <img src="{{asset('front/images/blog/logo-blog.webp')}}" alt="" class="img-fluid">
                    </picture>
                </a>                
            </div>
           
            <div class="dropdown mt-2 col-xs-2 col-sm-2 col-md-3  d-none d-xs-none d-md-block d-lg-block">                
                <!-- Categorias -->
                <button type="button"  class="btn btn-light dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true"  aria-expanded="false">
                    {{$site['blog_categories'] ?? ''}}
                </button>
                <div class="dropdown-menu" 
                     x-placement="bottom-start" 
                     style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                    @foreach($categories as $category)
                        <a  class="dropdown-item" 
                            href="{{route('blog_category',['slug'=>chstr($category->slug)])}}/">
                            {{$category->info->name}}
                        </a>                    
                    @endforeach
                </div>
            </div>
            <!-- Buscar -->
            <div class="mt-2 col-xs-3 col-sm-5 col-md-3 header-filter-search">
                <div class="input-group">
                    <input type="hidden" id="items" data="{{ $itemsSearch }}">
                    <input type="text" class="form-control" id="search" placeholder="{{$site['blog_search'] ?? ''}}">
                </div>
            </div>
            
        </div>
        <div class="space hide-mobile"></div>
        <div class="row">
            <div class="col-xs-2 col-md-1  col-lg-1 text-center "></div>
            <div class="col-xs-8 col-md-10  col-lg-10 text-center mb-5">
                <strong><h2 class="text-white ft-h2 shadow-text">{{$site['blog_text1'] ?? ''}}</h2></strong>
                <br/>
                <span class="text-white pb-3 f-sz-m">{{$site['blog_text2'] ?? '' }}</span>
                <br/>
            </div>
        </div>
        </div>
    </div>
    

    <div class="container  p-0 area-list-blog">
        <div class="row">
            @if(!empty($current_tag))
                <div class="col-lg-12">
                    <div class="current-category">
                        <h3>{{mb_strtoupper($current_tag->name) . ' TAG'}}</h3>
                    </div>
                </div>
            @endif
            <div class="articles-container col-lg-8 col-md-12">
                <div class="row">
                    @php $i = 0 @endphp
                    @forelse($articles as $article)
                    @php ($i++) @endphp
                    {{ logger('*** blog.blade -> article ' . json_encode($article)) }}
                    {{ logger('*** blog.blade -> slug    ' . json_encode($article->slug)) }}

                    @if($i==1)
                    <div class="col-lg-12 col-sm-12 mt-1 mb-3">
                        <div class="item">
                            <div class="item-header">
                                <a href="{{route('article',['slug'=>$article->slug])}}/">
                                    <figure>
                                        <img src="{{ (!empty($article->image) ? asset('upload/article/b'.$article->image) : asset('upload/article/default.jpg') )}}"    
                                                alt="{{ chstr($article->info->title) }}" class="img-fluid" style="border-rado"></figure>
                                </a>                                        
                            </div>
                            <div class="body articles-body">
                                <a href="{{route('article',['slug'=> $article->slug])}}/">
                                    <h4>{{$article->info->title ?? ''}}</h4>
                                </a>                                        
                                <p>{{$article->info->description ?? ''}}</p>
                            </div>
                            <div class="item-footer">
                                <div class="author-article">
                                    <p>{{$article->author}}</p>
                                </div>
                                <div class="calendar-article">
                                    <p> |  {{getMonthName($article->date->format('M'))}} {{$article->date->day}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else

                    <div class="col-lg-6 col-sm-12 mt-1 mb-3">
                        <div class="item">
                            <div class="item-header">
                                <a href="{{route('article',['slug'=>$article->slug])}}/">
                                    <figure>
                                        <img src="{{ (!empty($article->image) ? asset('upload/article/b'.$article->image) : asset('upload/article/default.jpg') )}}" alt="{{ chstr($article->info->title) }}" class="img-fluid" style="border-rado"></figure>
                                </a>                                        
                            </div>
                            <div class="body articles-body">
                                <a href="{{route('article',['slug'=> $article->slug])}}/">
                                    <h4>{{$article->info->title ?? ''}}</h4>
                                </a>                                        
                                <p>{{$article->info->description ?? ''}}</p>
                            </div>
                            <div class="item-footer">
                                <div class="author-article">
                                    <p>{{$article->author}}</p>
                                </div>
                                <div class="calendar-article">
                                    <p> | {{getMonthName($article->date->format('M'))}} {{$article->date->day}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <br>
                    @empty
                        <div class="col-lg-12 text-center">
                            No se encontraron artículos.
                        </div>

                       
                    @endforelse
                </div>
            </div>

            <div class="col-lg-4 col-md-12 blog-sidebar font-sz-3">
                <div class="sidebar-module blog-start-now text-center">
                    <span class="text-white typ-mon typ-montserrat"><b>{{$site['blog_title_aside'] ?? ''}}</b></span>
                    <button class=" modalPruebaGratis btn btn-md btn-form-blog mt-4 w-75"
                            data-toggle="modal" data-target="#modalPruebaGratis">
                        <b>{{$site['blog_btn_aside']  ?? ''}}</b>
                    </button>
                </div>
                <div class="sidebar-module blog-recommended">

                    <h4>{{$site['blog_text3'] ?? ''}}</h4>
                    <div class="container-grip container-blog-recommended">
                        @foreach($popular as $article)
                            <div class="p-2 m-1 row m-0 blog-recommended-1">
                                <div class="col-xs-12 col-sm-12 col-md-12 font-sz-1 content-vertical-center">
                                    <a href="{{route('article',['slug'=>$article->slug])}}/">
                                      <div class="title">  {{$article->info->title}}
                                        <span class="recommended-date">{{ formatDateshort($article->date) }}</span>
                                     </div>
                                    </a>        
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-module blog-recommended mt-5">
                    <h4>{{$site['blog_text4'] ?? ''}}</h4>
                    <div class="container-grip container-blog-recommended">
                        @foreach($popular as $article)
                            <div class="p-2 m-1 row m-0 blog-recommended-1">
                                <div class="col-xs-12 col-sm-12 col-md-12 font-sz-1 content-vertical-center">
                                    <a href="{{route('article',['slug'=>$article->slug])}}/">
                                      <div class="title">  {{$article->info->title}}
                                        <span class="recommended-date">{{ formatDateshort($article->date) }}</span>
                                     </div>
                                    </a>        
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <br>
                    
                    <div class="p-3 sidebar-module blog-last form-blog font-sz-2 text-center">
                        <p class="text-center">{{$site['newsletter_title'] ?? ''}}</p>
                        <form id="boletin_blog" action="{{route('save-lead-rdstation')}}" method="POST" style="margin:0 auto">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="{{$site['newsletter_desc'] ?? ''}}" required>
                            </div>
                            <div class="input-group text-center">
                                <button class="btn-send btn btn-lg f-sz-s btn-form-blog  mt-4 w-75">
                                    <b>{{$site['newsletter_btn'] ?? ''}}</b>
                                </button>
                            </div>
                            <div class="input-group politics text-center">
                                <p class=" txt-blackgray mt-4 mb-0 ">
                                    <b>{{$site['newsletter_text1'] ?? ''}} <a href="{{route('politicas')}}" target="_blank" rel="noopener noreferrer">{{$site['newsletter_text2'] ?? ''}}</a></b>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div aria-label="Page navigation" class=" mt-5 row text-xs-center pagenav">
                <div class="col-xs-12 col-sm-12 col-md-14">
                    {{$articles->appends(Request::except('page'))->onEachSide(1)->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
        <hr>
        @include('front.includes.topics')
        <div class="space"></div>
    </div>
</div>
@endsection
