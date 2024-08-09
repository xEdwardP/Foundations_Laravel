<?php

namespace App\Http\Controllers;

use App\Models\Aspirante;
use Illuminate\Http\Request;

class AspiranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('aspirantes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aspirantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("Hola Mundo");
        $aspirante = new Aspirante();
        $aspirante->dni = $request->dni;
        $aspirante->nombre = $request->nombre;
        $aspirante->departamento = $request->depto;
        $aspirante->municipio = $request->munic;
        $aspirante->comunidad = $request->comunidad;
        $aspirante->barrio = $request->barrio;
        $aspirante->ingresomensual = $request->ingresomensual;

        $aspirante->save();

        return redirect()->route('aspirantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aspirante $aspirante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aspirante $aspirante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aspirante $aspirante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aspirante $aspirante)
    {
        //
    }
}
