{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}



@extends('layouts.main')
@section('section')
      
     <!-- Content -->
     <div class="row row-20">        
      <!-- More Politics News -->
      <section class="section mb-2">
        <div class="row row-20">
          <div class="col-md-3">
            @foreach ($portadas2 as $portada)
            @if ($portada->portada == 2)
              <article class="entry">
                <div class="entry__img-holder">
                    <div class="thumb-container thumb-65">
                      <img data-src="{{Storage::url($portada->articulo->img->url)}}" src="img/empty.png" class="entry__img lazyload" alt="">
                    </div>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <ul class="entry__meta">
                      <li>
                        <a href="#" class="entry__meta-category">{{$portada->articulo->categoria->name}}</a>
                      </li>
                    </ul>                     
                    <h2 class="entry__title">
                      <a href="{{route('home.show', $portada->articulo)}}">{{$portada->articulo->titulo}}</a>
                    </h2>                      
                  </div>
                  <div class="entry__excerpt">
                    <p>{{$portada->articulo->subtitulo}}</p>
                  </div>
                </div>
              </article>
            @endif
            @endforeach
          </div>
          <div class="col-md-6">
            @foreach ($portadas1 as $portada)
            @if ($portada->portada == 1)
            <article class="entry thumb thumb--size-3 thumb--mb-20">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url({{Storage::url($portada->articulo->img->url)}});">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder thumb-text-holder--2">
                  <ul class="entry__meta">
                    <li>
                      <a href="#" class="entry__meta-category">{{$portada->articulo->categoria->name}}</a>
                    </li>
                  </ul>
                  <h2 class="thumb-entry-title">
                   
                    <a href="{{route('home.show', $portada->articulo)}}">{{$portada->articulo->titulo}}</a>  
                  
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-views">
                      <i class="ui-eye"></i>
                      <span>1356</span>
                    </li>
                    <li class="entry__meta-comments">
                      <a href="#">
                        <i class="ui-chat-empty"></i>{{$portada->articulo->id}}
                      </a>
                    </li>
                  </ul>
                </div>
                <a href="single-post-politics.html" class="thumb-url"></a>
              </div>
            </article> 
            @endif
            @endforeach
          </div>
          <div class="col-md-3">
            @foreach ($portadas3 as $portada)
            @if ($portada->portada == 3)
            <article class="entry">
              <div class="entry__img-holder">
                  <div class="thumb-container thumb-65">
                    <img data-src="{{Storage::url($portada->articulo->img->url)}}" src="img/empty.png" class="entry__img lazyload" alt="">
                  </div>
              </div>
              <div class="entry__body">
                <div class="entry__header">
                  <ul class="entry__meta">
                    <li>
                      <a href="#" class="entry__meta-category">{{$portada->articulo->categoria->name}}</a>
                    </li>
                  </ul>                     
                  <h2 class="entry__title">
                    <a href="{{route('home.show', $portada->articulo)}}">{{$portada->articulo->titulo}}</a>
                  </h2>                      
                </div>
                <div class="entry__excerpt">
                  <p>{{$portada->articulo->subtitulo}}</p>
                </div>
              </div>
            </article>
            @endif
            @endforeach
          </div>
        </div>
      </section> <!-- end more politics news -->
        <!-- Posts -->
        <div class="col-lg-8 order-lg-2">
          <section class="section mb-16">
            @foreach ($portadas4 as $portada)
            @if ($portada->portada == 4)
            <article class="entry thumb thumb--size-3 thumb--mb-20">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url({{Storage::url($portada->articulo->img->url)}});">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder thumb-text-holder--2">
                    <ul class="entry__meta">
                    <li>
                        <a href="#" class="entry__meta-category">{{$portada->articulo->categoria->name}}</a>
                    </li>
                    </ul>
                    <h2 class="thumb-entry-title">
                    <a href="{{route('home.show', $portada->articulo)}}">{{$portada->articulo->titulo}}</a>
                    </h2>
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
                <a href="single-post-politics.html" class="thumb-url"></a>
                </div>
            </article>    
            @endif    
            @endforeach
            <div class="row row-20">
                @foreach ($portadas5 as $portada)
                @if ($portada->portada == 5)
                <div class="col-md-6">
                  <article class="entry">
                      <div class="entry__img-holder">
                          <div class="thumb-container thumb-65">
                            <img data-src="{{Storage::url($portada->articulo->img->url)}}" src="img/empty.png" class="entry__img lazyload" alt="" />
                          </div>
                      </div>
                      <div class="entry__body">
                        <div class="entry__header">
                            <ul class="entry__meta">
                              <li>
                                  <a href="#" class="entry__meta-category">{{$portada->articulo->categoria->name}}</a>
                              </li>
                            </ul>                     
                            <h2 class="entry__title">
                              <a href="{{route('home.show', $portada->articulo)}}">{{$portada->articulo->titulo}}</a>
                            </h2>                      
                        </div>
                        <div class="entry__excerpt">
                            <p>{{$portada->articulo->subtitulo}}</p>
                        </div>
                      </div>
                  </article>
                </div>
                @endif    
                @endforeach
            </div>          
          </section>
        </div> <!-- end posts -->
        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar order-lg-3">
            <!-- SEMANA POPULAR Posts -->
            <aside class="widget widget-popular-posts">
            <h4 class="widget-title">En esta semana</h4>
            <ul class="post-list-small post-list-small--1">

                @foreach ($semanas as $portada)
                @if ($portada->portada == 7)
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                      <div class="post-list-small__img-holder">
                      <div class="thumb-container thumb-80">
                          <img data-src="{{Storage::url($portada->articulo->img->url)}}" src="img/empty.png" alt="" class=" lazyload">
                      </div>
                      </div>
                      <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                          <a href="{{route('home.show', $portada->articulo)}}">{{$portada->articulo->titulo}}</a>
                      </h3>
                      </div>                  
                  </article>
                </li>
                @endif    
                @endforeach

            </ul>           
            </aside> <!-- end widget popular posts -->
        </aside> <!-- end sidebar -->
    </div> <!-- end content -->

    <!-- Ad Banner 728 -->
    <div class="text-center pb-48">
    <a href="#">
        <img src="img/content/placeholder_728.jpg" alt="">
    </a>
    </div>
      <!-- Carousel posts -->
      <section class="section mb-24">
        <div class="title-wrap title-wrap--line title-wrap--pr">
          <h3 class="section-title">insight &amp; analysis</h3>
        </div>

        <!-- Slider -->
        <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
          <article class="entry">
            <div class="entry__img-holder">
              <a href="single-post-politics.html">
                <div class="thumb-container thumb-65">
                  <img data-src="img/content/carousel/carousel_post_5.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
              </a>
            </div>
            <div class="entry__body">
              <div class="entry__header">
                <ul class="entry__meta">
                  <li>
                    <a href="#" class="entry__meta-category">david smith</a>
                  </li>
                </ul>                     
                <h2 class="entry__title">
                  <a href="single-post-politics.html">Federal budget to spend up to $1 billion on cybersecurity</a>
                </h2>                      
              </div>
            </div>
          </article>
          <article class="entry">
            <div class="entry__img-holder">
              <a href="single-post-politics.html">
                <div class="thumb-container thumb-65">
                  <img data-src="img/content/carousel/carousel_post_6.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
              </a>
            </div>
            <div class="entry__body">
              <div class="entry__header">
                <ul class="entry__meta">
                  <li>
                    <a href="#" class="entry__meta-category">elizabeth Green</a>
                  </li>
                </ul>                     
                <h2 class="entry__title">
                  <a href="single-post-politics.html">US Administration is Waging a Silent War on Asylum Seekers</a>
                </h2>                      
              </div>
            </div>
          </article>
          <article class="entry">
            <div class="entry__img-holder">
              <a href="single-post-politics.html">
                <div class="thumb-container thumb-65">
                  <img data-src="img/content/carousel/carousel_post_7.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
              </a>
            </div>
            <div class="entry__body">
              <div class="entry__header">
                <ul class="entry__meta">
                  <li>
                    <a href="#" class="entry__meta-category">john doe</a>
                  </li>
                </ul>                     
                <h2 class="entry__title">
                  <a href="single-post-politics.html">U.S. To Expel 60 Russian Foreign Service Officers</a>
                </h2>                      
              </div>
            </div>
          </article>
          <article class="entry">
            <div class="entry__img-holder">
              <a href="single-post-politics.html">
                <div class="thumb-container thumb-65">
                  <img data-src="img/content/carousel/carousel_post_8.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
              </a>
            </div>
            <div class="entry__body">
              <div class="entry__header">
                <ul class="entry__meta">
                  <li>
                    <a href="#" class="entry__meta-category">kathlyn wood</a>
                  </li>
                </ul>                     
                <h2 class="entry__title">
                  <a href="single-post-politics.html">John Bolton, North Korea and the Art of the Deal</a>
                </h2>                      
              </div>
            </div>
          </article>
          <article class="entry">
            <div class="entry__img-holder">
              <a href="single-post-politics.html">
                <div class="thumb-container thumb-65">
                  <img data-src="img/content/carousel/carousel_post_6.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
              </a>
            </div>
            <div class="entry__body">
              <div class="entry__header">
                <ul class="entry__meta">
                  <li>
                    <a href="#" class="entry__meta-category">elizabeth Green</a>
                  </li>
                </ul>                     
                <h2 class="entry__title">
                  <a href="single-post-politics.html">US Administration is Waging a Silent War on Asylum Seekers</a>
                </h2>                      
              </div>
            </div>
          </article>
        </div> <!-- end slider -->
      </section> <!-- end carousel posts -->

      <!-- LO MAS VISTO -->
      <section class="section mb-32">
        <div class="title-wrap title-wrap--line">
          <h3 class="section-title">lo mas visto</h3>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              @foreach ($vistos as $portada)
              @if ($portada->portada == 6)
              <div class="col-lg-6">
                <article class="entry">
                  <div class="row">
                    <div class="col-6 entry__img-holder">
                        <div class="thumb-container thumb-65">
                          <img  src="{{Storage::url($portada->articulo->img->url)}}" class="entry__img lazyload" alt="" />
                        </div>
                    </div>
                    <div class="col-6 entry__body">
                      <div class="entry__header">
                          <ul class="entry__meta">
                            <li>
                                <a href="#" class="entry__meta-category">{{$portada->articulo->categoria->name}}</a>
                            </li>
                          </ul>                     
                          <h6 class="">
                            <a href="{{route('home.show', $portada->articulo)}}">{{$portada->articulo->titulo}}</a>
                          </h6>                      
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              @endif    
              @endforeach
            </div>
          </div>
          <div class="col-lg-4 text-right text-md-center">
            <a href="#">
              <img src="img/content/placeholder_300_600.jpg" alt="">
            </a>
          </div>
        </div>
         
      </section> <!-- end most viewed -->  
@endsection


