@extends('layouts.main')
@section('section')
          <!-- Entry Image -->
          <div class="thumb thumb--size-6">
            @if ($articulo->img)
            <div class="entry__img-holder thumb__img-holder" style="background-image: url({{Storage::url($articulo->img->url)}});">
            @else
            <div class="entry__img-holder thumb__img-holder" style="background-image: url({{asset('img/articulo.jpg')}});">
            @endif
            
              <div class="bottom-gradient"></div>
              <div class="thumb-text-holder thumb-text-holder--2">
                <ul class="entry__meta">
                  <li>
                    <a href="#" class="entry__meta-category">{{$articulo->categoria->name}}</a>
                  </li>
                </ul>
                <h1 class="thumb-entry-title single-post__thumb-entry-title">
                    {{$articulo->titulo}}
                </h1>
                <div class="entry__meta-holder">
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>Por: </span>
                      <a href="#">{{$articulo->user->name}}</a>
                    </li>
                    <li class="entry__meta-date">
                      {{$articulo->fecha}}
                    </li>
                  </ul>
                  <ul class="entry__meta">
                    <li class="entry__meta-views">
                      <i class="ui-eye"></i>
                      <span>1356</span>
                    </li>
                    <li class="entry__meta-comments">
                      <a href="#">
                        <i class="ui-chat-empty"></i>13
                      </a>
                    </li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
    
          <!-- Content -->
          <div class="row">  
    
            <!-- post content -->
            <div class="col-lg-8 blog__content mb-72">
              <!-- standard post -->
              <article class="entry mb-0">
    
                <div class="entry__article-wrap mt-0">
    
                  <!-- Share -->
                  <div class="entry__share">
                    <div class="sticky-col">
                      <div class="socials socials--rounded socials--large">
                        <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                          <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                          <i class="ui-twitter"></i>
                        </a>
                        <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                          <i class="ui-google"></i>
                        </a>
                        <a class="social social-pinterest" href="#" title="pinterest" target="_blank" aria-label="pinterest">
                          <i class="ui-pinterest"></i>
                        </a>
                      </div>
                    </div>                  
                  </div> <!-- share -->
    
                  <div class="entry__article">
                   
                    {!!$articulo->contenido!!}

                  </div> <!-- end entry article -->
                </div> <!-- end entry article wrap -->
    
                <!-- Author -->
                <div class="entry-author clearfix">
                  <img alt="" data-src="img/content/single/author.jpg" src="{{asset('img/user.png')}}" class="avatar lazyload" width="100">
                  <div class="entry-author__info">
                    <h6 class="entry-author__name">
                      <a href="#">{{$articulo->user->name}}</a>
                    </h6>
                    <p class="mb-0">{{$perfil->biografia}}</p>
                  </div>
                </div>
              </article> <!-- end standard post -->
            </div> <!-- end post content -->
    
            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">
    
              <!-- Widget Popular Posts -->
              <aside class="widget widget-popular-posts">
                <h4 class="widget-title">Popular Posts</h4>
                <ul class="post-list-small">
                    @foreach ($semanas as $portada)
                    @if ($portada->portada == 7)
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                            <div class="thumb-container thumb-100">
                            <a href="single-post.html">
                                <img data-src="img/content/post_small/post_small_1.jpg" src=" {{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload">
                            </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                            <a href="{{route('home.show', $portada->articulo)}}">{{$portada->articulo->titulo}}</a>
                            </h3>
                            <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <span>by</span>
                                <a href="#">{{$portada->articulo->user->name}}</a>
                            </li>
                            <li class="entry__meta-date">
                                Jan 21, 2018
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
              <aside class="widget widget_mc4wp_form_widget text-center">
                @can('Editar Articulo')
                <div>
                  <h4 class="widget-title text-center">ACCIONES PARA EL ARTICULO</h4>
                  <p>No cuenta con acciones el autor del Articulo</p>
                  <hr> 
                </div>  
                @endcan
                @can('Publicar Articulo')
                <div>
                    @if ($articulo->estado != 3)
                    <h4 class="widget-title text-center">ACCIONES PARA EL ARTICULO</h4>
                    <hr>
                        <div class="mb-3">
                              <a href="{{route('articulos.observar', $articulo)}}" class="btn btn-sm btn-dark"><i data-feather="check-square"></i> Observar Articulo</a>
                        </div>
                        <div class="mb-3">
                            <form action="{{route('articulos.publicar', $articulo)}}" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-color"><i data-feather="check-square"></i> Publicar Articulo</button>
                            </form>
                        </div>
                    @else
                        <div class="mb-3">
                            <form action="{{route('articulos.revisar', $articulo)}}" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-dark"><i data-feather="check-square"></i> Revisar Articulo </button>
                            </form>
                        </div>
                    @endif   
              </div>
              @endcan
              </aside> <!-- end widget newsletter -->

    
            </aside> <!-- end sidebar -->
      
          </div> <!-- end content -->
        </div> <!-- end main container -->
@endsection