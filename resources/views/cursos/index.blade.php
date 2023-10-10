@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenidos a la pagina cursos</h1>

    <ul>
        @foreach ($cursos as $curso)
            <li>
                {{ $curso->name }}
            </li>
        @endforeach
    </ul>

@endsection