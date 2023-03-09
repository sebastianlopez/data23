<div id="mySidenav" class="sidenav text-center">
    <nav class="home-background  navbar navbar-expand-lg navbar-light bg-dark">    
            <div class="d-inline-block">
                <button class="navbar-toggler d-lg-none d-inline-block txt-white" onclick="closeNav()">
                    <i class="fas fa-times fa-x"></i>      
                </button>
                <a href="{{route('home')}}">
                    <picture>
                        <source type="image/png" 
                            srcset="{{asset('front/images/Logodata_Horizontalblanco180x58.png')}}">
                        <img src="{{asset('front/images/Logodata_Horizontalblanco180x58.webp')}}" alt="Logo data side bar" width="150" class="img-logo img-fluid">
                    </picture>
                </a>
                    
            </div>
            <button class="modalPruebaGratis btn btn-outline-light myNavbarFont mr-1" data-toggle="modal" data-target="#modalPruebaGratis" >
                <b>{{$site['site_demo']??''}}</b>
            </button>  
    </nav>
    <div class="row pt-3">
        <div class="wrapper-menu">
            <ul class="mainMenu">
                <li class="item" id="account">
                    <a href="#account" class="btn"><i class="fas fa-user-circle"></i>Productos</a>
                    <div class="subMenu">
                        <a href="{{route('functions')}}">{{$site['site_software']?? ''}}</a>
                        <a href="{{route('sector')}}" >CRM por Sector</a>
                        <a href="{{route('mobile')}}" >{{$site['site_crmmobile']?? ''}}</a>
                    </div>
                </li>
                <li class="item">
                    <a href="{{route('plans')}}" class="btn">{{$site['site_plans']?? ''}}</a>
                </li>
                <li class="item">
                    <a href="{{route('contact')}}" class="btn">{{$site['site_contact']?? ''}}</a>
                </li>
                <li class="item">
                    <a href="{{ route('partners') }}" class="btn">{{$site['site_partners']?? ''}}</a>
                </li>
                <li class="item">
                    <a href="http://ayuda.datacrm.com/" target="_blank" class="btn">{{$site['site_help']?? ''}}</a>
                </li>
                <li class="item">
                    <a href="https://www.datacrm.com/udatacrm/" target="_blank" class="btn">{{$site['site_unidata']?? ''}}</a>
                </li>

                <li class="item">
                    <a href="#" class="modalPruebaGratis btn btn-outline-light myNavbarFont mr-1 btnspecial" data-toggle="modal" data-target="#modalPruebaGratis" target="_blank">
                        <strong>{{$site['site_demo']?? ''}}</strong>
                    </a>
                </li>
            </ul>
        </div> 

    </div>
    <div class="row pt-3">
        <div class="col-6 border-right">
            <div class="dropdown">
                <button class="btn bg-transparent txt-black dropdown-toggle-ellipsis" type="button" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-globe"></i>
                    @php $langs = config('arrays.langs') @endphp
                    {{ ($langs[get_lang()]) }}
                    <i class="ml-2 fa fa-angle-down" aria-hidden="true"></i>
                </button>

                <div    class="dropdown-menu border" aria-labelledby="dropdownMenuButton">

                    @foreach (config('arrays.langs') as $lang => $language)
                        <a class="dropdown-item {{get_lang() == $lang ? 'font-weight-bold' : ''}}" 
                            href="{{ route('lang.switch.front', $lang) }}">
                            {{$language}}
                        </a>
                    @endforeach

                </div>
            </div>    
        </div>
        <div class="col-6">
            <a class="txt-black" href="{{route('login_datacrm')}}">
            {{$site['site_login']?? ''}}
            </a>
        </div>
    </div>
</div>


<div class="home-background justify-content-center text-align-center" style="width: 100%; height:4.5rem; position: fixed; z-index: 1000;">
    <nav class="navbar navbar-expand-md px-5 py-1 navbar-fixed mobile-nav justify-content-between">
        <div class="d-md-inline-block ">
            <button class="navbar-toggler d-lg-none mr-3 d-inline-block" onclick="openNav()">
                <img src="{{asset('front/images/barswhite.png')}}" alt="barswhite" width="45" height="30">            
            </button>
            <a href="{{route('home')}}">
                <picture>
                    <source type="image/png" 
                        srcset="{{asset('front/images/Logodata_Horizontalblanco180x58.png')}}">
                    <img src="{{asset('front/images/Logodata_Horizontalblanco180x58.webp')}}" alt="Logo data" width="180" class="img-logo">
                </picture>
            </a>
        </div>
        <button class="modalPruebaGratis btn btn-orange myNavbarFont d-block  d-lg-none d-inline-block mr-1" data-toggle="modal" data-target="#modalPruebaGratis">
            <b>{{$site['site_demo']??''}}</b>
        </button>  
        <ul class="navbar-nav ">   
            <li class="nav-item typ-montserrat">    
                <div class="dropdown">
                    <button class="btn bg-transparent  text-white dropdown-toggle-ellipsis" type="button" id="dropdownMenuButton" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                        <i class="fa fa-globe"></i>
                        {{ strtoupper(get_lang()) }}
                        <i class="ml-2 fa fa-angle-down" aria-hidden="true"></i>
                    </button>

                    <div    class="dropdown-menu border" aria-labelledby="dropdownMenuButton">

                        @foreach (config('arrays.langs') as $lang => $language)
                            <a class="dropdown-item {{get_lang() == $lang ? 'font-weight-bold' : ''}}" 
                                href="{{ route('lang.switch.front', $lang) }}">
                                {{$language}}
                            </a>
                        @endforeach

                    </div>
                </div>            
            </li>   
            <li class="nav-item typ-montserrat">            
    
                <a class="text-white text-decoration-n mx-2  myNavbarFont " id="navele01" href="{{route('functions')}}">
                        {{$site['site_software']?? ''}}
                </a>
                
                <a  class="text-white text-decoration-n mx-2  myNavbarFont " id="navele02" href="{{route('plans')}}">
                    {{$site['site_plans']?? ''}}
                </a>

                <a  class="text-white text-decoration-n mx-2  myNavbarFont " href="{{route('contact')}}/">
                    {{$site['site_contact']?? ''}}
                </a>               
                
                <button class="modalPruebaGratis btn btn-typea mx-2 myNavbarFont btn-sm btn-free" data-toggle="modal" data-target="#modalPruebaGratis">
                    <b>{{$site['site_demo']??''}}</b>
                </button> 
                
                @if(!Illuminate\Support\Facades\Route::is('login_datacrm'))
                    <a  class="btn txt-white mx-2 myNavbarFont" href="{{route('login_datacrm')}}/">
                        <i class="fa-regular fa-circle-user"></i> {{$site['site_login']?? ''}}
                    </a> 
                @endif  
                        
            </li>
        </ul>
    </nav>
</div>

