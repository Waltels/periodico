@extends('layouts.mainadmin')
@section('editor')
<div class="row inbox-wrapper">
    <div class="col-lg-8 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="p-3 border-bottom">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-end mb-2 mb-md-0">
                      <i data-feather="inbox" class="text-muted me-2"></i>
                      <h4 class="me-1">Informacion del Articulo</h4>
                    </div>
                  </div>
                </div> 
              </div>
              <form  method="POST"  id="articulo" action="{{route('articulos.store')}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <input name="user_id" type="hidden" value="{{auth()->user()->id}}">
                <div class="mb-2">
                    <label for="exampleInputUsername1" class="form-label">Título del Articulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" autocomplete="off" placeholder="Titulo...">
                </div>
                <div class="mb-2">
                    <label for="exampleInputUsername1" class="form-label">Slug del Articulo</label>
                    <input type="text" class="form-control" name="slug" id="slug" autocomplete="off" placeholder="slug..." readonly>
                </div>
                <div class="mb-2">
                    <label for="exampleInputUsername1" class="form-label">Subtítulo del Articulo</label>
                    <input type="text" class="form-control" name="subtitulo" id="subtitulo" autocomplete="off" placeholder="Subtitulo...">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Contenido del Articulo</label>
					      <textarea class="form-control" name="contenido" id="tinymceExample" rows="10" ></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-3 mb-2">
                        <label for="exampleInputPassword1" class="form-label">Categoria</label>
                        <select class="form-select" name="categoria_id" id="ageSelect">
                                @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->slug}}</option> 
                                @endforeach
                        </select>
                    </div>
                    <div class="col-lg-5 mb-2">
                        <label for="exampleInputPassword1" class="form-label">Imagen</label>
                        <figure>
                            <img id="picture" class="w-full h-64 objet-cover objet-center wd-300" src="{{asset('img/articulo.jpg')}}" alt="">
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
                    <button type="submit" class="btn btn-primary me-2">Guardar</button>
                    <a href="{{route('articulos.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
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
