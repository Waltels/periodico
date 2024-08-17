@extends('layouts.main')
@section('section')
<!-- Content -->
<div class="row">

    <!-- Posts -->
    <div class="col-lg-8 blog__content mb-72">
      <h1 class="page-title">{{$categoria->slug}}</h1>
      @foreach ($articulos as $articulo)
      @if ($articulo->estado == 3)
        <article class="entry card post-list">
          <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{Storage::url($articulo->img->url)}})">
          </div>

          <div class="entry__body post-list__body card__body">
            <div class="entry__header">
              <h2 class="entry__title">
                <a href="{{route('home.show', $articulo)}}">{{$articulo->titulo}}</a>
              </h2>
              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <span></span>
                  <a href="#">{{$articulo->user->name}}</a>
                </li>
                <li class="entry__meta-date">
                  {{$articulo->facha}}
                </li>
              </ul>
            </div>        
            <div class="entry__excerpt">
              <p>{!! Str::limit($articulo->titulo , 80) !!}</p>
            </div>
          </div>
        </article>
      @endif   
      @endforeach

      <!-- Pagination -->
      <nav class="pagination">
        <span class="pagination__page pagination__page--current">1</span>
        <a href="#" class="pagination__page">2</a>
        <a href="#" class="pagination__page">3</a>
        <a href="#" class="pagination__page">4</a>
        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
      </nav>
    </div> <!-- end posts -->

    <!-- Sidebar -->
    <aside class="col-lg-4 sidebar sidebar--right">

      <!-- Widget Popular Posts -->
      <aside class="widget widget-popular-posts">
        <h4 class="widget-title">más articulos</h4>
        <ul class="post-list-small">
          @foreach ($semanas as $articulo)
          @if ($articulo->estado == 3)
          <li class="post-list-small__item">
            <article class="post-list-small__entry clearfix">
              <div class="post-list-small__img-holder">
                <div class="thumb-container thumb-100">
                  <a href="single-post.html">
                    <img src="{{Storage::url($articulo->img->url)}}" alt="" class=" lazyload">
                  </a>
                </div>
              </div>
              <div class="post-list-small__body">
                <h3 class="post-list-small__entry-title">
                  <a href="{{route('home.show', $articulo)}}">{{$articulo->titulo}}</a>
                </h3>
                <ul class="entry__meta">
                  <li class="entry__meta-author">
                    <span>por</span>
                    <a href="#">{{$articulo->user->name}}</a>
                  </li>
                  <li class="entry__meta-date">
                    {{$articulo->fecha}}
                  </li>
                </ul>
              </div>                  
            </article>
          </li>        
          @endif
          @endforeach
        </ul>           
      </aside> <!-- end widget popular posts -->

      <!-- Widget Newsletter -->
      <aside class="widget widget_mc4wp_form_widget">
        <h4 class="widget-title">MAS INFORMACIÓN</h4>
        <p class="newsletter__text">
          <i class="ui-email newsletter__icon"></i>
          Suscríbete a nuestras noticias diarias
        </p>
        <form class="mc4wp-form" method="post">
          <div class="mc4wp-form-fields">
            <div class="form-group">
              <input type="email" name="EMAIL" placeholder="Tu correo electronico" required="">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-lg btn-color" value="inscribirse">
            </div>
          </div>
        </form>
      </aside> <!-- end widget newsletter -->

      <!-- Widget Socials -->
      <aside class="widget widget-socials">
        <h4 class="widget-title">Nuestras redes sociales</h4>
        <div class="socials socials--wide socials--large">
          <div class="row row-16">
            <div class="col">
              <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
                <span class="social__text">Facebook</span>
              </a><!--
              --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
                <span class="social__text">Twitter</span>
              </a><!--
              -->
            </div>
            <div class="col">
              <a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
                <span class="social__text">Youtube</span>
              </a><!--
              --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
                <span class="social__text">Instagram</span>
              </a><!--
              -->
            </div>                
          </div>           
        </div>
      </aside> <!-- end widget socials -->
    </aside> <!-- end sidebar -->
  </div> <!-- end content -->
  @endsection