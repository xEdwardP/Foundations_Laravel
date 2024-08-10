<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Carrera;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::all();
        return view('estudiantes.create', compact('carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Modelo
        $estudiante = new Estudiante();
        // Valores
        $estudiante->cuenta = $request->cuenta;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->direccion = $request->direccion;
        $estudiante->carrera_id = $request->carrera;

        $estudiante->save();
        return redirect()->route('estudiantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cuenta)
    {
        $carreras = Carrera::all();
        $estudiante = Estudiante::findOrFail($cuenta);
        return view('estudiantes.edit', compact('estudiante', 'carreras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cuenta)
    {
        $estudiante = Estudiante::findOrFail($cuenta);
        $estudiante->nombre = $request->nombre;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->direccion = $request->direccion;
        $estudiante->carrera_id = $request->carrera;

        $estudiante->save();
        return redirect()->route('estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
