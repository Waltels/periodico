@extends('layouts.mainadmin')
@section('editor')  
<div class="row">
    <div class="col-lg-10 col-xl-10 stretch-card mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
              <div class=" col-lg-4" >    
              </div>
              <div class="col-lg-8 mr-1">
                  <div class="row">
                      <div class="col-lg-8">
                      </div>
                  </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th class="pt-0">Nº</th>
                  <th class="pt-0 text-center">Titulo</th>
                  <th class="pt-0">categoria</th>
                  
                  <th class="pt-0">estado</th>
                  <th class="pt-0">Acciones</th>
                </tr>     
              </thead>
              <tbody>
                  @foreach ($articulos as $articulo)
                  @if ($articulo->estado != 1)
                  <tr>
                      <td>{{$articulo->id}} </td>
                      <td>
                          @isset($articulo->img)
                            <img class="rounded-circle wd-35" src="{{Storage::url($articulo->img->url)}}" alt="">    
                          @else
                            <img class="rounded-circle wd-35" src="{{asset('img/articulo.jpg')}}" alt="">
                          @endisset
                           {!! Str::limit($articulo->titulo , 80) !!}
                          </td>
                      <td>{{$articulo->categoria->slug}} </td>
                      <td>
                          @switch($articulo->estado)
                              @case(1)
                                      <span class="badge bg-danger">Borrador</span></td>
                                  @break
                              @case(2)
                                  <span class="badge bg-primary">Revision</span></td>
                                  @break
                              @case(3)
                                  <span class="badge bg-success">Publicado</span></td>
                                  @break    
                          @endswitch
                          
                      <td>
                        @can('Ver Articulo')
                        <a class="btn btn-outline-success  btn-xs" href="{{route('articulos.show', $articulo)}}">ver</a>    
                        @endcan
                        @can('Editar Articulo')
                          <a class="btn btn-outline-primary  btn-xs" href="{{route('articulos.edit', $articulo)}}">Editar</a>  
                        @endcan
                        </td>
                  </tr>  
                  @endif    
                  @endforeach
              </tbody>
            </table>
            {{$articulos->links()}}
          </div>
        </div> 
      </div>
    </div>
  </div> <!-- row -->
@endsection