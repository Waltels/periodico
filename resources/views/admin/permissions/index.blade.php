@extends('layouts.mainadmin')
@section('editor')
<div class="col-md-5 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-primary mb-1 mb-md-0 btn-xs" data-bs-toggle="modal" data-bs-target="#crearModal">Nuevo Permiso</button>
        </div>
        <h6 class="card-title text-center mt-2">PERMISOS DEL SISTEMA</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th class=" text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <th>{{$permission->id}} </th>
                            <td>{{$permission->name}} </td>
                            <td >
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="" class="btn btn-success btn-icon-text btn-xs" data-bs-toggle="modal" data-bs-target="#editarModal{{$permission->id}}"><i class="btn-icon-prepend" data-feather="check-square"></i>Editar</a>
                                    <div class="modal fade bd-example-modal-lg" id="editarModal{{$permission->id}}" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="varyingModalLabel">Editar permiso</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                            </div>
                                            <form action="{{route('admin.permissions.update', $permission)}}" method="POST">
                                                @method('PUT')
                                                @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                  <label for="recipient-name" class="form-label">Nombre:</label>
                                                  <input class="form-control" name="name" type="text" value="{{$permission->name}}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Actualizar</button>
                                            </form>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" class="eliminarGrad">
                                        @csrf
                                        @method('DELETE')
                                        <button  class="btn btn-danger btn-icon-text btn-xs"><i class="btn-icon-prepend" data-feather="minus-circle"></i>Eliminar</button>
                                    </form>
                                    
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
 </div>

<div class="modal fade bd-example-modal-lg" id="crearModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="varyingModalLabel">Crear nuevo permiso</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <form action="{{route('admin.permissions.store')}}" method="POST">
          @csrf
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="form-label">Nombre:</label>
              <input class="form-control" name="name" type="text">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        </div>
      </div>
    </div>
</div>
@endsection