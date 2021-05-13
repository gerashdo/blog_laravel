@extends('base')

@section('contenido')
<h1>Bienvenido al sistema <b>{{$nombre}}</b></h1>
<h3>Materias</h3>
<ul>
    {{-- @if ($materias)
        @foreach ($materias as $materia)
        <li>{{ $materia }}</li>
        @endforeach
        @else
        <li>No hay materias</li>
        @endif --}}
        
        @forelse ($materias as $materia)
            <li>{{ $materia }}</li>
        @empty
            <li>No hay materias</li>
        @endforelse
            
    </ul>
@endsection