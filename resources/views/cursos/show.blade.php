@extends('layouts.plantilla')
@section('title', 'Curso ' . $curso->name)
@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <p><strong>Categoría: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>
@endsection 