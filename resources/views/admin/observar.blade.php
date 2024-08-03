@extends('layouts.mainadmin')
@section('editor')


<div class="col-lg-8 mx-auto">
    <h5 class="  mb-4">Observaciones al articulo: <br> "<strong>{{$articulo->titulo}}</strong>"</h5>
    <div class="card">
        <div class="card-body">
            <form  method="POST"  id="articulo" action="{{route('articulos.obs', $articulo)}}"  class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Contenido de la Observacion</label>
                        <textarea class="form-control" name="cuerpo" id="tinymceExample" rows="10" ></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary me-2">Rechazar Articulo</button>
                    <a href="{{route('articulos.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
<div>
@endsection