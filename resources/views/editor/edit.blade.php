@extends('layouts.mainadmin')
@section('editor')
<div class="row inbox-wrapper">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 border-end-lg">
              <div class="p-3 border-bottom">
                <div class=" text-center">
                  <div class="order-first">
                    <h4 >EDICION DEL ARTICULO</h4>
                  </div>
                </div>
              </div>
              <div class="d-grid my-3">
                <aside class="text-center">
                  <div class="mt-2 ">
                    <a href="{{route('articulos.edit', $articulo)}}"><h5 class="text-dark">INFORMACION DEL ARTICULO</h5></a>
                   </div>
                  @if ($articulo->observacion)
                  <div class="mt-2 border border-danger">
                    <a href="{{route('articulos.observacion', $articulo)}}"><h5 class="text-danger"><strong>OBSEVACIONES DEL ARTICULO</strong></h5>
                    <p class="text-secondary mt-1">El articulo fue observado por le Editor, corrija y vuelba a solicitar la revisiónn</p></a>
                  </div>  
                  @endif
                  
                  <div class="mt-3">
                    @switch($articulo->estado)
                        @case(1)
                          <p class="mt-2 mb-3">Si concluyo con la redaccion del Articulo, a continuación <strong>solicite al editor la revisión y publicación</strong> del Artículo</p>
                            <form action="{{route('articulos.estado', $articulo)}}" method="POST">
                              @csrf
                              <button class="btn btn-success btn-sm"><i data-feather="check-square"></i> Solicitar Revision</button>
                            </form>
                            @break
                        @case(2)
                        <div class="card">
                          <img src="{{asset('img/educalibres.png')}}" class="mt-4 mx-auto" width="150" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><strong>ATENCION</strong></h5>
                            <p class="card-text mb-3">El articulo esta en proceso de  <strong>revisión por los editores de educalibre</strong>, si no presenta observaciones será publicado, caso contrario devuelto para su corrección.</p>
                          </div>
                        </div>
                            @break
                        @case(3)
                        <div class="card">
                          <img src="{{asset('img/educalibres.png')}}" class="mt-4 mx-auto" width="150" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><strong>EXCELTE!!!</strong></h5>
                            <p class="card-text mb-3">El articulo fue <strong>aprovado por los editores de educalibre</strong>, y se encuentra publicad.</p>
                          </div>
                        </div>
                            @break
                        @default
                            
                    @endswitch
                    
                  </div>
                </aside>
              </div>

            </div>
            <div class="col-lg-9">
              <div class="p-3 border-bottom">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-end mb-2 mb-md-0">
                      <i data-feather="inbox" class="text-muted me-2"></i>
                      <h4 class="me-1">Informacion del Articulo</h4>
                      <span class="text-muted">(2 new messages)</span>
                    </div>
                  </div>
                </div> 
              </div>
              @if ($articulo->estado == 3)
              <div class=" mt-2 mb-2">
                <label for="exampleInputUsername1" class="form-label"><strong>Título del Articulo:</strong> <p>{!!$articulo->titulo!!}</p></label>
              </di>
              <div class="mb-2">
                <label for="exampleInputUsername1" class="form-label"><strong>Subítulo del Articulo:</strong><p>{!!$articulo->subtitulo!!}</p></label>
              </di>
              <div class="mb-2">
                <label for="exampleInputUsername1" class="form-label"><strong>Contenido del Articulo:</strong> <p>{!!$articulo->contenido!!}</p></label>
              </di>
              @else
              <form method="POST"  id="articulo" action="{{route('articulos.update', $articulo)}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-2">
                    <label for="exampleInputUsername1" class="form-label">Título del Articulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" autocomplete="off" value="{{$articulo->titulo}}">
                </div>
                <div class="mb-2">
                    <label for="exampleInputUsername1" class="form-label">Slug del Articulo</label>
                    <input type="text" class="form-control" name="slug" id="slug" autocomplete="off" readonly value="{{$articulo->slug}}">
                </div>
                <div class="mb-2">
                    <label for="exampleInputUsername1" class="form-label">Subtítulo del Articulo</label>
                    <input type="text" class="form-control" name="subtitulo" id="subtitulo" autocomplete="off" value="{{$articulo->subtitulo}}">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Contenido del Articulo</label>
					          <textarea class="form-control" name="contenido" id="tinymceExample" rows="10" >{!!$articulo->contenido!!}</textarea>
                </div>
                <div class="row">
                    <div class="col-lg-3 mb-2">
                        <label for="exampleInputPassword1" class="form-label">Categoria</label>
                        <select class="form-select" name="categoria_id" id="ageSelect">
                                @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}" @if($articulo->categoria_id == $categoria->id) selected @endif>{{$categoria->slug}}</option> 
                                @endforeach
                        </select>
                    </div>
                    <div class="col-lg-5 mb-2">
                        <label for="exampleInputPassword1" class="form-label">Imagen</label>
                        <figure>
                          @isset($articulo->img)
                            <img id="picture"  class="w-full h-64 bg-cover bg-center wd-300" src="{{Storage::url($articulo->img->url)}}" alt="">    
                          @else
                            <img id="picture"  class="w-full h-64 objet-cover objet-center wd-300" src="{{asset('img/articulo.jpg')}}" alt="">
                          @endisset
                          </figure>
                          <input name="file" id="file" class="form-control" type="file" accept="image/*">
                    </div>
                    <div class="col-lg-4 mb-2">
                      <label for="exampleInputPassword1" class="form-label">Fecha de publicación</label>
                      <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                        <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
                        <input type="text" name="fecha" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary me-2">Actualizar</button>
                    <a href="{{route('articulos.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
              </form> 
              @endif
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
    @section('js')
      <script src="{{asset('js/periodico.js')}}"></script>
    @endsection
@endsection
