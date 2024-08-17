   <!-- Trending Now -->
<div class="container">
    <div >
        <span class="trending-now__label d-lg-inline-block d-none">
            <i class="ui-flash"></i>
            <span class="trending-now__text d-lg-inline-block d-none">Noticias destacadas de hoy...</span>
        </span>
        <div class="newsticker">
            <ul class="newsticker__list d-lg-inline-block d-none">
                <li class="newsticker__item"><a href="single-post-politics.html" class="newsticker__item-url">A-HA theme is multi-purpose solution for any kind of business</a></li>
                <li class="newsticker__item"><a href="single-post-1.html" class="newsticker__item-url">Satelite cost tens of millions or even hundreds of millions of dollars to build</a></li>
                <li class="newsticker__item"><a href="single-post-3.html" class="newsticker__item-url">8 Hidden Costs of Starting and Running a Business</a></li>          
            </ul>
        </div>
    </div>    
  
    <!-- Header -->
    <header class="header d-lg-block d-none">
        <div class="container">
            <div class="flex-parent">
                <!-- Menu -->
                <nav class="flex-child header__menu d-none d-lg-block">
                    <ul class="header__menu-list">
                        <li><a href="#">Noticias</a></li>
                        <li><a href="#">Anuncios</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </nav> <!-- end menu -->

                <div class="flex-child text-center bg-gray-800">
                <!-- Logo -->
                    <a href="index.html" class="logo">
                    <img class="logo__img" src="{{asset('img/educalibres.png')}}" alt="logo1">  
                    </a>
                </div>
                <!-- Socials -->
                <div class="flex-child"> 
                    <div class="socials socials--nobase socials--dark justify-content-end">
                        <img class="logo__img mr-5" src="{{asset('img/conmerb.png')}}" alt="logo2" width="125"> 
                        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                        <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                        <i class="ui-twitter"></i>
                        </a>
                        <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                        <i class="ui-google"></i>
                        </a>
                        <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                        <i class="ui-youtube"></i>
                        </a>
                        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                        <i class="ui-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </header> <!-- end header -->   

  <!-- Navigation -->
    <header class="nav nav--1">
        <div class="nav__holder nav--sticky">
            <div class="container relative">
                <div class="flex-parent">
                    <div class="flex-child d-lg-none d-block">  
                        <!-- Side Menu Button -->
                        <button class="nav-icon-toggle mt-3" id="nav-icon-toggle" aria-label="Open side menu">
                            <span class="nav-icon-toggle__box">
                                <span class="nav-icon-toggle__inner"></span>
                            </span>
                        </button>
                    </div> 
                    <div class="flex-child text-center d-lg-block d-none">
                        <img class="logo__img" src="{{asset('img/educali.png')}}" width="40" alt="logo3">
                    </div>    
                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-block">              
                    <ul class="nav__menu">
                        <li>
                            <a href="{{route('home.imdex')}}">Inicio</a>
                        </li>

                        <li class="nav__dropdown">
                            <a href="#">actualidad</a>
                            <ul class="nav__dropdown-menu nav__megamenu">
                                <li>
                                    <div class="nav__megamenu-wrap">
                                        <div class="row">
                                            <div class="col nav__megamenu-item">
                                                @foreach ($mundos as $articulo)
                                                @if ($articulo->estado == 3)
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                            <img src="{{Storage::url($articulo->img->url)}}" alt="" class="entry__img">
                                                        <a href="" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{$articulo->categoria->slug}}</a>
                                                    </div>
                                                    <div class="entry__body">   
                                                        <h2 class="entry__title">
                                                            <a href="{{route('home.show', $articulo)}}">{{$articulo->titulo}}</a>
                                                        </h2>
                                                    </div>
                                                </article>                                                 
                                                @endif
                                                @endforeach
                                            </div>
                                            <div class="col nav__megamenu-item">
                                                @foreach ($politicas as $articulo)
                                                @if ($articulo->estado == 3)
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                            <img src="{{Storage::url($articulo->img->url)}}" alt="" class="entry__img">
                                                        <a href="" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{$articulo->categoria->slug}}</a>
                                                    </div>
                                                    <div class="entry__body">   
                                                        <h2 class="entry__title">
                                                            <a href="{{route('home.show', $articulo)}}">{{$articulo->titulo}}</a>
                                                        </h2>
                                                    </div>
                                                </article>                                                 
                                                @endif
                                                @endforeach
                                            </div>
                                            <div class="col nav__megamenu-item">
                                                @foreach ($tecnologias as $articulo)
                                                @if ($articulo->estado == 3)
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                            <img src="{{Storage::url($articulo->img->url)}}" alt="" class="entry__img">
                                                        <a href="" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{$articulo->categoria->slug}}</a>
                                                    </div>
                                                    <div class="entry__body">   
                                                        <h2 class="entry__title">
                                                            <a href="{{route('home.show', $articulo)}}">{{$articulo->titulo}}</a>
                                                        </h2>
                                                    </div>
                                                </article>                                                 
                                                @endif
                                                @endforeach
                                            </div>
                                            <div class="col nav__megamenu-item">
                                                @foreach ($deportes as $articulo)
                                                @if ($articulo->estado == 3)
                                                <article class="entry">
                                                    <div class="entry__img-holder">
                                                            <img src="{{Storage::url($articulo->img->url)}}" alt="" class="entry__img">
                                                        <a href="" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{$articulo->categoria->slug}}</a>
                                                    </div>
                                                    <div class="entry__body">   
                                                        <h2 class="entry__title">
                                                            <a href="{{route('home.show', $articulo)}}">{{$articulo->titulo}}</a>
                                                        </h2>
                                                    </div>
                                                </article>                                                 
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul> <!-- end megamenu -->
                        </li>

                        <li class="nav__dropdown">
                            <a href="#">categorias</a>
                            <ul class="nav__dropdown-menu">
                                @foreach ($categorias as $categoria)
                                    <li><a href="{{route('categoria.name', $categoria)}}">{{$categoria->slug}}</a></li>  
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="#">Nosotros</a>
                        </li>
                    </ul> <!-- end menu -->
                </nav> <!-- end nav-wrap -->

                <!-- Logo Mobile -->
                <a href="index.html" class="logo logo-mobile d-lg-none m-1 px-1">
                    <img class="logo__img" src="{{asset('img/logo_educalibre.png')}}"  alt="logo4" width="220">
                </a>

                <!-- Nav Right -->
                <div class="flex-child">
                    <div class="nav__right">
                        <!-- login -->
                        <div class="nav__right-item nav__search d-lg-block d-none">

                            @auth
                                <ul class="nav__menu">
                                    <li class="nav__dropdown mr-5 px-5">
                                        
                                        <div class="row gap-2">
                                            <div class="col-6">
                                                <a href="#">
                                                    <img src="{{asset('img/user.png')}}" class="rounded-circle" alt="user" width="30"> 
                                                </a>
                                            </div>
                                            <div class="col-6 mt-0">
                                                <p><samp>Sesión</samp>_Iniciada</p> 
                                            </div>
                                        </div>
                                        
                                        <ul class="nav__dropdown-menu  mt-1">
                                            <li class="mt-2">
                                                <a class="text-center h6">{{ auth()->user()->name }}</a>
                                                <a class="mt-0">{{ auth()->user()->email }}</a>
                                            </li>
                                            <hr class="mb-1 mt-1">
                                            @can('Crear Articulo')
                                                <li><a href="{{route('articulos.index')}}">Escritor</a></li>
                                            @endcan
                                            @can('Ver Publicaciones')
                                            <li><a href="{{route('admin.articulos.index')}}">Editor</a></li>                                         
                                            @endcan
                                            @can('Ver Usuarios')
                                            <li><a href="{{route('admin.users.index')}}">Administrador</a></li>                                         
                                            @endcan
                                            <hr class="mb-1 mt-1">
                                            <li>
                                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i>
                                                    {{ __('Finalizar sesión') }} </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>   
                            @else
                                <ul class="footer__nav-menu">
                                    <li><a href="{{ route('login') }}" class="">Iniciar sesión</a></li>
                                    <li><a href="{{ route('register') }}">Registrate</a></li>
                                </ul>
                            @endauth
   
                        </div>             
                    </div> <!-- end nav right -->
                </div>             
            </div> <!-- end flex-parent -->        
        </div>
    </header> <!-- end navigation -->
</div>