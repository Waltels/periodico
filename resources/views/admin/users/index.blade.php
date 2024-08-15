@extends('layouts.mainadmin')
@section('editor')
<div class="col-md-8 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-primary mb-1 mb-md-0 btn-xs" data-bs-toggle="modal" data-bs-target="#crearModal">Nuevo Usuario</button>
        </div>
        <h6 class="card-title text-center mt-2">USUARIOS DEL SISTEMA</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th class=" text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{$user->id}} </th>
                            <td>{{$user->name}} </td>
                            <td>{{$user->email}} </td>
                            <td >
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-success btn-icon-text btn-xs"><i class="btn-icon-prepend" data-feather="check-square"></i>Editar</a>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="eliminarGrad">
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
            {{$users->links()}}
        </div>
      </div>
    </div>
</div>
    
@endsection