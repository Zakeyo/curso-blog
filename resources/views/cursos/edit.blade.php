@extends('layouts.plantilla')
@section('title', 'Cursos edit')
@section('content')
    <h1>En esta página podrás editar un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre: 
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
            @error('name')
                <br>
                <span>*{{$message}}</span>
                <br>
            @enderror
            <br>

        <label>
            Descripción:
            <br>
            <textarea type="text" name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>
            @error('description')
                <br>
                <span>*{{$message}}</span>
                <br>
            @enderror
            <br>

        <label>
            Categoría: 
            <br>            
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
            @error('categoria')
                <br>
                <span>*{{$message}}</span>
                <br>
            @enderror

        <br>
        <button type="submit">ACTUALIZAR</button>
    </form>
@endsection