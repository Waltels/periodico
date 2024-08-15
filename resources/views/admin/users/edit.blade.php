@extends('layouts.mainadmin')
@section('editor')
<div class="col-md-7 grid-margin stretch-card mx-auto">
    <div class="card ">
        <div class="card-body">

            <h6 class="card-title text-center mb-4">EDITAR USUARIO</h6>

            <form action="{{route('admin.users.update', $user)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Usuario</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control"  value="{{old('name',$user->name)}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Correo</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail2" value="{{old('email',$user->email)}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Contraseña</label>
                    <div class="col-sm-9">
                        <input name="password" type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Confirmar Contraseña</label>
                    <div class="col-sm-9">
                        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Roles</label>
                    <div class="col-sm-9">
                        @foreach ($roles as $role)
                                <div class="checkbox">
                                    <label for="example-checkbox1">
                                        <x-checkbox 
                                            name="roles[]" 
                                            value="{{$role->id}}"
                                            :checked="in_array($role->id, old('roles', $user->roles->pluck('id')->toArray()))"/>
                                            {{$role->name}}
                                    </label>
                                </div>                            
                            @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Actualizar</button>
                <button class="btn btn-secondary">Cancel</button>
            </form>

        </div>
    </div>
</div>
@endsection