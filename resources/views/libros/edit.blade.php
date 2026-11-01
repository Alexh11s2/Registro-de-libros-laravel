@extends('layouts.app')

@section('titulo', 'Editar libro')

@section('contenido')

<div class="card shadow-sm" style="max-width: 540px;">
    <div class="card-body">
        <h1 class="h4 mb-3">Editar libro</h1>

        <form method="POST" action="{{ route('libros.update', $libro) }}">
        @csrf
        @method('PUT')

<div class="mb-3">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $libro->titulo) }}"
        class="form-control @error('titulo') is-invalid @enderror" required maxlength="255">
    @error('titulo') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" id="autor" name="autor" value="{{ old('autor', $libro->autor) }}"
        class="form-control @error('autor') is-invalid @enderror" required maxlength="150">
    @error('autor') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="año_publicacion" class="form-label">Año de publicación</label>
    <input type="number" id="año_publicacion" name="año_publicacion"
        value="{{ old('año_publicacion', $libro->año_publicacion) }}"
        class="form-control @error('año_publicacion') is-invalid @enderror" required>
    @error('año_publicacion') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a class="btn btn-secondary" href="{{ route('libros.index') }}">Cancelar</a>
        </form>
    </div>
</div>
@endsection
