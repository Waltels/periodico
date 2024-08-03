<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="{{route('home.imdex')}}" class="sidenav__menu-url">Inicio</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">Publicaciones</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="about.html" class="sidenav__menu-url">About</a></li>
            <li><a href="contact.html" class="sidenav__menu-url">Contact</a></li>
            <li><a href="search-results.html" class="sidenav__menu-url">Search Results</a></li>
            <li><a href="categories.html" class="sidenav__menu-url">Categories</a></li>
            <li><a href="404.html" class="sidenav__menu-url">404</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="sidenav__menu-url">educalibre</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li>
              <a href="#" class="sidenav__menu-url">Categorias</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li><a href="single-post.html" class="sidenav__menu-url">Style 1</a></li>
                <li><a href="single-post-politics.html" class="sidenav__menu-url">Style 2</a></li>
                <li><a href="single-post-fashion.html" class="sidenav__menu-url">Style 3</a></li>
                <li><a href="single-post-games.html" class="sidenav__menu-url">Style 4</a></li>
                <li><a href="single-post-videos.html" class="sidenav__menu-url">Style 5</a></li>
                <li><a href="single-post-music.html" class="sidenav__menu-url">Style 6</a></li>
              </ul>
            </li>
            <li><a href="shortcodes.html" class="sidenav__menu-url">Noticias</a></li>
            <li><a href="shortcodes.html" class="sidenav__menu-url">Anuncios</a></li>
            <li><a href="shortcodes.html" class="sidenav__menu-url">Nosotros</a></li>
          </ul>
        </li>        
        <!-- Categories -->
        <li class="d-lg-none d-block">

          @auth
          <div class="text-center mt-2">
            <a class="text-center h6">{{ auth()->user()->name }}</a> <br>
            <a class="mt-0">{{ auth()->user()->email }}</a>
          </div>
      
          <div class="mt-3">
            <a href="" class="ml-4"> <strong class="text-dark">Escritorio</strong></a><br>
            <a href="" class="ml-4"><strong class="text-dark">Administrador</strong></a>
            <hr class="mt-2 mb-0">
            <a class="sidenav__menu-url" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i>
                {{ __('Finalizar sesión') }} </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                </form>
          </div>
          @else  
          <a href="{{route('login')}}" class="sidenav__menu-url m-0">Iniciar sesión</a>
          <a href="{{route('register')}}" class="sidenav__menu-url mt-0">Registrate</a>
        
          @endauth
        </li>
      </ul>
    </nav>

    <div class="socials sidenav__socials"> 
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
  </header> <!-- end sidenav -->