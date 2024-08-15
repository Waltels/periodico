@extends('layouts.mainadmin')
@section('editor')
<div class="col-md-5 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-primary mb-1 mb-md-0 btn-xs" data-bs-toggle="modal" data-bs-target="#crearModal">Nuevo Rol</button>
        </div>
        <h6 class="card-title text-center mt-2">ROLES DEL SISTEMA</h6>
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
                    @foreach ($roles as $role)
                        <tr>
                            <th>{{$role->id}} </th>
                            <td>{{$role->name}} </td>
                            <td >
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="" class="btn btn-success btn-icon-text btn-xs" data-bs-toggle="modal" data-bs-target="#editarModal{{$role->id}}"><i class="btn-icon-prepend" data-feather="check-square"></i>Editar</a>
                                    <div class="modal fade bd-example-modal-lg" id="editarModal{{$role->id}}" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="varyingModalLabel">Editar Rol</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                            </div>
                                            <form action="{{route('admin.roles.update', $role)}}" method="POST">
                                                @method('PUT')
                                                @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                  <label for="recipient-name" class="form-label">Nombre:</label>
                                                  <input class="form-control" name="name" type="text" value="{{$role->name}}">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="recipient-name" class="form-label">Permisos:</label>
                                                  @foreach ($permissions as $permission)
                                                  <div class="checkbox">
                                                      <label for="example-checkbox1">
                                                          <x-checkbox 
                                                              name="permissions[]" 
                                                              value="{{$permission->id}}"
                                                              :checked="in_array($permission->id, $role->permissions->pluck('id')->toArray())"/>
                                                              {{$permission->name}}
                                                      </label>
                                                  </div>                            
                                                 @endforeach
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
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" class="eliminarGrad">
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
          <h5 class="modal-title" id="varyingModalLabel">Crear nuevo Rol</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <form action="{{route('admin.roles.store')}}" method="POST">
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