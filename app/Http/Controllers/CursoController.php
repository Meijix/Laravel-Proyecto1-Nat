<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::paginate(3);
        return view('principal');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'objetivo' => 'required',
            'modalidad' => 'required',
            'cupo' => 'required',
            'periodo' => 'required',
            'horario' => 'required',
            'dias' => 'required',
            'salon' => 'required'
        ]);
        $curso = new Curso;

        $curso->nombre = $request->nombre;
        $curso->objetivo = $request->objetivo;
        $curso->modalidad = $request->modalidad;
        $curso->cupo = $request->cupo;
        $curso->periodo = $request->periodo;
        $curso->horario = $request->horario;
        $curso->dias = $request->dias;
        $curso->salon = $request->salon;
        
        $curso->save();

        return redirect()->route('index')->with('mensaje', 'Curso agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
