<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    private function validar(Request $request){
    return $request->validate([
        'titulo' => 'required|string|max:255',
        'autor' => 'required|string|max:150',
        'año_publicacion' => 'required|integer|digits:4|min:1000|max:'.date('Y'),
    ], [
        'año_publicacion.integer' => 'El año debe ser un número entero, sin decimales.',
        'año_publicacion.digits' => 'El año debe tener exactamente 4 dígitos.',
        'año_publicacion.max' => 'El año no puede ser mayor al actual.',
    ]);
    }

    public function create(){
    return view('libros.create');
    }

    public function register(Request $request){
    $datos = $this->validar($request);

    Libro::create($datos);
    return redirect()
        ->route('libros.create')
        ->with('exito', 'Libro registrado correctamente.');
    }

    public function index(){
    $libros = Libro::orderByDesc('id')->get();
    return view('libros.index', compact('libros'));
    }

    public function edit(Libro $libro){
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro){
        $libro->update($this->validar($request));

        return redirect()
            ->route('libros.index')
            ->with('exito', 'Libro actualizado correctamente.');
    }

    public function destroy(Libro $libro){
        $libro->delete();

        return redirect()
            ->route('libros.index')
            ->with('exito', 'Libro eliminado correctamente.');
    }

}