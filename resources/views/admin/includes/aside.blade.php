<!-- aside -->
<aside id="aside" class="app-aside modal fade " role="menu">
    <div class="left">
        <div class="box bg-white">
            <div class="navbar md-whiteframe-z1 no-radius bg-main">
                <a class="navbar-brand">
                    <img src="{{asset('images/logo.png')}}" alt="." style="max-height: 30px;">
                    <span class="hidden-folded m-l inline text-white">{{ config('app.name', 'CMS') }}</span>
                </a>
            </div>
            <div class="box-row">
                <div class="box-cell scrollable hover">
                    <div class="box-inner">
                        <div class="p hidden-folded blue-50"
                             style="background-image:url('{{asset('images/bg.png')}}'); background-size:cover">
                            <a class="block m-t-sm" ui-toggle-class="hide, show" target="#nav, #account">
                                <span class="block font-bold">
                                @role('admin')
                                Administrador
                                @endrole
                                </span>
                                {{auth()->user()->email}}
                            </a>
                        </div>
                        <div id="nav">
                            <nav ui-nav>
                                <ul class="nav">
                                    <!-- languaje -->
                                    <li md-ink-ripple>
                                        <a><span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i></span>
                                            <img src="{{ asset('images/'.app()->getLocale().'.svg')}}" class="lang-icon">
                                            <span class="font-normal">
                                                {{config()->get('languages.'.app()->getLocale())}}
                                             </span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            @foreach (config()->get('languages') as $lang => $language)
                                                @if ($lang != app()->getLocale())
                                                    <li>
                                                        <a md-ink-ripple href="{{ route('lang.switch', $lang) }}">
                                                            {{$language}}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!-- / languaje -->

                                    <li class="nav-header hidden-folded">
                                        Módulos
                                    </li>

                                   
                                  
                                    <li class="{{check_item_active('main_li','articles')}}">
                                        <a><span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i></span>
                                            <i class="icon mdi-action-bookmark-outline i-20"></i>
                                            <span class="font-normal">Blog</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li class="{{check_item_active('inner_li_add','articles','edit')}}">
                                                <a href="{{route('article_edit',['id'=>0])}}">Agregar artículo</a>
                                            </li>
                                            <li class="{{check_item_active('inner_li_list','articles','list,edit')}}">
                                                <a href="{{route('article_list')}}">Lista de artículos</a>
                                            </li>
                                            <li class="{{check_item_active('inner_li','articles','categories')}}">
                                                <a href="{{route('article_categories')}}">Administrar categorías</a>
                                            </li>
                                            <li class="{{check_item_active('inner_li','articles','tags')}}">
                                                <a href="{{route('article_tags')}}">Administrar Tags</a>
                                            </li>
                                        </ul>
                                    </li>
                                   

                                    <li class="b-b b m-v-sm"></li>
                                    <li class="{{check_item_active('main_li','configsite')}}">
                                        <a md-ink-ripple href="{{route('configsite')}}">
                                            <i class="icon mdi-action-settings i-20"></i>
                                            <span>Configuración</span>
                                        </a>
                                    </li>
                                    <li class="{{check_item_active('main_li','account')}}">
                                        <a md-ink-ripple href="{{route('user_edit')}}">
                                            <i class="icon mdi-action-perm-contact-cal i-20"></i>
                                            <span>Mi cuenta</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- / aside -->