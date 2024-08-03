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
                  <div class="mt-3 border border-danger">
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
                      <h4 class="me-1">Contenido de la Observación</h4>
                    </div>
                  </div>
                </div> 
              </div>
                <div class="px-2">
                    <p class=" my-4 ">{!!$articulo->observacion->cuerpo!!} </p>
                </div>
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
