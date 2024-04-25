<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Documento;


class DepartamentoController extends Controller
{
    public function mostrarDepartamentos()
    {
        $departamentos = Departamento::all();
        return view('departamentos', compact('departamentos'));
    }

    public function crear()
    {
        $departamentos = Departamento::all();  // Obtener todos los departamentos
        return view('create', compact('departamentos'));  // Pasar departamentos a la vista
    }
    

    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:departamentos|max:255',
        ]);

        Departamento::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('departamentos.index')
            ->with('success', 'Departamento creado exitosamente.');
    }
}
