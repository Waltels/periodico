@extends('layouts.mainadmin')
@section('editor')
<h4 class="text-center mb-3">CAMBIO DE SECCION DE LA PORTADA</h4>

<div class=" mx-auto col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title text-center">DETALLES DEL ARTICULO</h6>
            <form class="forms-sample" action="{{route('admin.portada.update', $portada)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="border rounded-end row mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img  src="{{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload" width="200"> 
                        </div>
                        <div class="col-md-8">
                            <p>Categoria: <h3><strong>{{$portada->articulo->categoria->slug}}</strong></h3></p>
                            <p class="mt-2">Titulo: <h6>{{$portada->articulo->titulo}} </h6></p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label text-center"><strong>PORTADA</strong></label>
                    <div class="col-sm-9">
                                    <select name="portada" class="form-select" id="exampleFormControlSelect1">
                                        <option value="2"@if($portada->portada == 2) selected @endif>Seccion 1</option>
                                        <option value="1"@if($portada->portada == 1) selected @endif>Seccion 2</option>
                                        <option value="3"@if($portada->portada == 3) selected @endif>Seccion 3</option>
                                        <option value="4"@if($portada->portada == 4) selected @endif>Seccion 4</option>
                                        <option value="5"@if($portada->portada == 5) selected @endif>Seccion 5</option>
                                        <option value="6"@if($portada->portada == 6) selected @endif>En la semana</option>
                                        <option value="7"@if($portada->portada == 7) selected @endif>Mas vistos</option>
                                    </select>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary me-2">Guardar en portada</button>
                <button class="btn btn-secondary">Cancelar</button>
            </form>

        </div>
    </div>
</div>

@endsection