@extends('layouts.main')
@section('section')
    {{$articulo->categoria->name}} <br>
     esta es la seccion de shopw <br>
     {{$articulo->titulo}}
@endsection
