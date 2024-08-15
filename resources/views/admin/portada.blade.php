@extends('layouts.mainadmin')
@section('editor')
<h3 class="text-center py-3">PORTADA PRINCIPAL DEL PERIODICO</h3>
@error('articulo_id')
<div class="alert alert-danger" role="alert">
  <h5>ATENCION!!!</h5>
	El articulo ya se encuentra asignado en la portada del periodico...
</div>
@enderror
<button type="button" class="btn btn-primary mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#varyingModal">Nueva Asignacion en portada</button>
  <div class="row profile-body mt-3">
    <!-- left wrapper start -->
    <div class="col-md-8 col-xl-4 middle-wrapper">
        <div class="col-md-12 grid-margin">
            <div class="card rounded">
              <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">													
                    <div class="ms-2">
                      <p>Seccion 1 de la portada</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive pt-3">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ARTICULOS</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portadas2 as $portada)
                            @if ($portada->articulo->estado == 3)
                            <tr>
                                <td>
                                    <div class="thumb-container thumb-80">
                                        <a href="{{route('admin.portada.estado', $portada)}}">
                                            <img  src="{{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </td>
                                <td>{!! Str::limit($portada->articulo->titulo , 50) !!}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
              <div class="card-footer">
                <div class="d-flex post-actions">
                  <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                    <i class="icon-md" data-feather="heart"></i>
                    <p class="d-none d-md-block ms-2">Like</p>
                  </a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- left wrapper end -->
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-4 middle-wrapper">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">													
                  <div class="ms-2">
                    <p>Seccion 2 de la portada</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
                <div class="table-responsive pt-3">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ARTICULOS</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portadas1 as $portada)
                            @if ($portada->articulo->estado == 3)
                            <tr>
                                <td>
                                    <div class="thumb-container thumb-80">
                                      <a href="{{route('admin.portada.estado', $portada)}}">
                                        <img  src="{{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload">
                                    </a>
                                    </div>
                                </td>
                                <td>{!! Str::limit($portada->articulo->titulo , 50) !!}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
              <div class="d-flex post-actions">
                <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                  <i class="icon-md" data-feather="heart"></i>
                  <p class="d-none d-md-block ms-2">Like</p>
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- middle wrapper end -->
    <!-- right wrapper start -->
    <div class="col-md-8 col-xl-4 middle-wrapper">
        <div class="col-md-12 grid-margin">
            <div class="card rounded">
              <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">													
                    <div class="ms-2">
                      <p>Seccion 3 de la portada</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive pt-3">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ARTICULOS</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portadas3 as $portada)
                            @if ($portada->articulo->estado == 3)
                            <tr>
                                <td>
                                    <div class="thumb-container thumb-80">
                                        <a href="{{route('admin.portada.estado', $portada)}}">
                                            <img  src="{{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload">
                                        </a> 
                                    </div>
                                </td>
                                <td>{!! Str::limit($portada->articulo->titulo , 50) !!}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>     
              </div>
              <div class="card-footer">
                <div class="d-flex post-actions">
                  <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                    <i class="icon-md" data-feather="heart"></i>
                    <p class="d-none d-md-block ms-2">Like</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- right wrapper end -->
  </div>
  <div class="row profile-body">
    <!-- left wrapper start -->
    <div class="d-none d-md-block col-md-4 col-xl-8 left-wrapper">
        <div class="col-md-12 grid-margin">
            <div class="card rounded">
              <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">													
                    <div class="ms-2">
                      <p>Seccion 4 de la portada</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive pt-3">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ARTICULOS</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portadas4 as $portada)
                            @if ($portada->articulo->estado == 3)
                            <tr>
                                <td>
                                    <div class="thumb-container thumb-80">
                                      <a href="{{route('admin.portada.estado', $portada)}}">
                                        <img  src="{{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload">
                                    </a>
                                    </div>
                                </td>
                                <td>{!! Str::limit($portada->articulo->titulo , 50) !!}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div> 
              </div>
              <div class="card-footer">
                <div class="d-flex post-actions">
                  <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                    <i class="icon-md" data-feather="heart"></i>
                    <p class="d-none d-md-block ms-2">Like</p>
                  </a>
                </div>
              </div>
            </div>
        </div>
        <div class="row profile-body">
            <div class="d-none d-md-block col-md-4 col-xl-12 left-wrapper">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">													
                        <div class="ms-2">
                          <p>Seccion 5 de la portada</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive pt-3">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ARTICULOS</th>
    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portadas5 as $portada)
                                @if ($portada->articulo->estado == 3)
                                <tr>
                                    <td>
                                        <div class="thumb-container thumb-80">
                                          <a href="{{route('admin.portada.estado', $portada)}}">
                                            <img  src="{{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload">
                                        </a>
                                        </div>
                                    </td>
                                    <td>{!! Str::limit($portada->articulo->titulo , 50) !!}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="d-flex post-actions">
                      <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                        <i class="icon-md" data-feather="heart"></i>
                        <p class="d-none d-md-block ms-2">Like</p>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- left wrapper end -->
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-4 middle-wrapper">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">													
                  <div class="ms-2">
                    <p>Seccion EN ESTA SEMANA</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
                <div class="table-responsive pt-3">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ARTICULOS</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semanas as $portada)
                                @if ($portada->articulo->estado == 3)
                                <tr>
                                    <td>
                                        <div class="thumb-container thumb-80">
                                          <a href="{{route('admin.portada.estado', $portada)}}">
                                            <img  src="{{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload">
                                        </a>
                                        </div>
                                    </td>
                                    <td>{!! Str::limit($portada->articulo->titulo , 50) !!}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
              <div class="d-flex post-actions">
                <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                  <i class="icon-md" data-feather="heart"></i>
                  <p class="d-none d-md-block ms-2">Like</p>
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- middle wrapper end -->

  </div>
  <div class="row profile-body mt-4">
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">													
                  <div class="ms-2">
                    <p> Lomas visto</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
                <div class="table-responsive pt-3">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ARTICULOS</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vistos as $portada)
                                @if ($portada->articulo->estado == 3)
                                <tr>
                                    <td>
                                        <div class="thumb-container thumb-80">
                                          <a href="{{route('admin.portada.estado', $portada)}}">
                                            <img  src="{{Storage::url($portada->articulo->img->url)}}" alt="" class=" lazyload">
                                        </a>
                                        </div>
                                    </td>
                                    <td>{!! Str::limit($portada->articulo->titulo , 50) !!}</td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
              
            </div>
            <div class="card-footer">
              <div class="d-flex post-actions">
                <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                  <i class="icon-md" data-feather="heart"></i>
                  <p class="d-none d-md-block ms-2">Like</p>
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- middle wrapper end -->
  </div> 
  {{-- MOdal crear  --}}


  <div class="modal fade bd-example-modal-lg" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="varyingModalLabel">Asignacion de portada</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <form action="{{route('admin.portada.store')}}" method="POST">
          @csrf
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="form-label">Articulo:</label>
              <select name="articulo_id" class="form-select" id="exampleFormControlSelect1">
                @foreach ($articulos as $articulo)
                @if ($articulo->estado == 3)
                  <option value="{{$articulo->id}}">{!! Str::limit($articulo->titulo , 100) !!}</option>
                @endif
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="form-label">Asignación en portada:</label>
              <select name="portada" class="form-select" id="exampleFormControlSelect1">
                <option selected disabled>Seleccione la sección</option>
                <option value="2" >Primera sección de la portada</option>
                <option value="1">Segunda sección de la portada</option>
                <option value="3">Tercera sección de la portada</option>
                <option value="4">Cuarta sección de la portada</option>
                <option value="5">Quinta sección de la portada</option>
                <option value="7">Sección  senama de la portada</option>
                <option value="6">Sección lo mas visto de la portada</option>
              </select>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Asignar en portada</button>
        </form>
        </div>
      </div>
    </div>
  </div>


@endsection