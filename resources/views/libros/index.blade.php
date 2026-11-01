@extends('layouts.app')
@section('titulo', 'Libros registrados')
@section('contenido')

@if (session('exito'))
    <div class="alert alert-success">{{ session('exito') }}</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h4 m-0">Libros registrados (<span>{{ $libros->count() }}</span>)</h1>
</div>

<table class="table table-striped table-bordered bg-white">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Año</th> 
            <th>Acciones</th>           
        </tr>

</thead>
<tbody>
    @forelse ($libros as $libro)
        <tr>
            <td>{{ $libro->id }}</td>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->año_publicacion }}</td>
            <td class="text-nowrap">
                <a class="btn btn-sm btn-primary" href="{{ route('libros.edit', $libro) }}">Editar</a>
                <form method="POST" action="{{ route('libros.destroy', $libro) }}" class="d-inline"
                    onsubmit="return confirm('¿Eliminar este libro?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="5" class="text-center text-muted">No hay libros registrados.</td></tr>
    @endforelse
</tbody>
</table>
@endsection

