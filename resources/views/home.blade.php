@extends('layouts.plantilla')
@section('title', 'HOME')
@section('content')
    <h1>Bienvenido a la página principal</h1>
    <a href="{{route('cursos.index')}}">Ir a CURSOS</a>
@endsection