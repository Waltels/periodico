@extends('layouts.main')
@section('section')
          <!-- Entry Image -->
          <div class="thumb thumb--size-6">
            <div class="entry__img-holder thumb__img-holder" style="background-image: url({{Storage::url($articulo->img->url)}});">
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
                    <!-- Final Review -->
                  </div> <!-- end entry article -->
                </div> <!-- end entry article wrap -->
    
                <!-- Author -->
                <div class="entry-author clearfix">
                  <img alt="" src="{{asset('img/user.png')}}" class="avatar lazyload" width="50">
                  <div class="entry-author__info">
                    <h6 class="entry-author__name">
                      <a href="#">{{$articulo->user->name}}</a>
                    </h6>
                    {{-- <p class="mb-0">But unfortunately for most of us our role as gardener has never been explained to us. And in misunderstanding our role, we have allowed seeds of all types, both good and bad, to enter our inner garden.</p> --}}
                  </div>
                </div>
    
                
    
                <!-- Related Posts -->
                <section class="section related-posts mt-40 mb-0">
                  <div class="title-wrap title-wrap--line title-wrap--pr">
                    <h3 class="section-title">Artciclulos Relacionados</h3>
                  </div>
    
                  <!-- Slider -->
                    <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                        @foreach ($articulos as $articulo)
                            @if ($articulo->categoria_id != $articulo->categoria->name )
                              @if ($articulo->estado == 3)
                                <article class="entry thumb thumb--size-1">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url({{Storage::url($articulo->img->url)}});">
                                        <div class="bottom-gradient"></div>
                                        <div class="thumb-text-holder">   
                                        <h2 class="thumb-entry-title">
                                            <a href="{{route('home.show', $articulo)}}">{{$articulo->titulo}} </a>
                                        </h2>
                                        </div>
                                        <a href="single-post.html" class="thumb-url"></a>
                                    </div>
                                </article>                                  
                              @endif
                            @endif                        
                        @endforeach
                    </div> <!-- end slider -->
                </section> <!-- end related posts -->            
    
              </article> <!-- end standard post -->


              
    
              <!-- Comments -->
              <div class="entry-comments">
                <div class="title-wrap title-wrap--line">
                  <h3 class="section-title">COMENTARIOS</h3>
                </div>
                {{-- <ul class="comment-list">
                  <li class="comment">  
                    <div class="comment-body">
                      <div class="comment-avatar">
                        <img alt="" src="img/content/single/comment_1.jpg">
                      </div>
                      <div class="comment-text">
                        <h6 class="comment-author">Joeby Ragpa</h6>
                        <div class="comment-metadata">
                          <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                        </div>                      
                        <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                        <a href="#" class="comment-reply">Reply</a>
                      </div>
                    </div>
    
                    <ul class="children">
                      <li class="comment">
                        <div class="comment-body">
                          <div class="comment-avatar">
                            <img alt="" src="img/content/single/comment_2.jpg">
                          </div>
                          <div class="comment-text">
                            <h6 class="comment-author">Alexander Samokhin</h6>
                            <div class="comment-metadata">
                              <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                            </div>                      
                            <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                            <a href="#" class="comment-reply">Reply</a>
                          </div>
                        </div>
                      </li> <!-- end reply comment -->
                    </ul>
    
                  </li> <!-- end 1-2 comment -->
    
                  <li>
                    <div class="comment-body">
                      <div class="comment-avatar">
                        <img alt="" src="img/content/single/comment_3.jpg">
                      </div>
                      <div class="comment-text">
                        <h6 class="comment-author">Chris Root</h6>
                        <div class="comment-metadata">
                          <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                        </div>                      
                        <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                        <a href="#" class="comment-reply">Reply</a>
                      </div>
                    </div>
                  </li> <!-- end 3 comment -->
    
                </ul> --}}         
              </div> <!-- end comments -->
    


              
              <!-- Comment Form -->
              <div id="respond" class="comment-respond">
                <div class="title-wrap">
                  <h5 class="comment-respond__title section-title">COMENTA AQUI</h5>
                </div>
                {{-- <form id="form" class="comment-form" method="post" action="#">
                  <p class="comment-form-comment">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" rows="5" required="required"></textarea>
                  </p>
    
                  <div class="row row-20">
                    <div class="col-lg-4">
                      <label for="name">Name: *</label>
                      <input name="name" id="name" type="text">
                    </div>
                    <div class="col-lg-4">
                      <label for="comment">Email: *</label>
                      <input name="email" id="email" type="email">
                    </div>
                    <div class="col-lg-4">
                      <label for="comment">Website:</label>
                      <input name="website" id="website" type="text">
                    </div>
                  </div>
    
                  <p class="comment-form-submit">
                    <input type="submit" class="btn btn-lg btn-color btn-button" value="Post Comment" id="submit-message">
                  </p>
                  
                </form> --}}
              </div> <!-- end comment form -->
            </div> <!-- end post content -->



    
            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">
    
              <!-- Widget Popular Posts -->
              <aside class="widget widget-popular-posts">
                <h4 class="widget-title">en esta semana</h4>
                <ul class="post-list-small">
                  @foreach ($semanas as $semana)
                  @if ($semana->estado == 3)
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-100">
                            <a href="single-post.html">
                              <img src="{{Storage::url($semana->img->url)}}" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="{{route('home.show', $semana)}}">{{$semana->titulo}}</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>por</span>
                              <a href="#">{{$semana->user->name}}</a>
                            </li>
                            <li class="entry__meta-date">
                              {{$semana->fecha}}
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
        </div> <!-- end main container -->
@endsection
