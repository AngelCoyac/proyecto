<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Documento;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class DocumentoController extends Controller
{

    public function create()
    {
        $departamentos = Departamento::all();
        return view('create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'archivo' => 'required|mimes:pdf,doc,docx|max:2048',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $archivo = $request->file('archivo');
        $rutaArchivo = $archivo->store('documentos');

        $documento = new Documento([
            'titulo' => $request->get('titulo'),
            'ruta_archivo' => $rutaArchivo,
        ]);

        $departamento = Departamento::findOrFail($request->get('departamento_id'));
        $departamento->documentos()->save($documento);

        return redirect()->route($departamento->nombre, $departamento);
    }

    public function show(Departamento $departamento)
    {
        return view($departamento->nombre, compact('departamento'));
    }

    public function mostrarTodas($departamentoId)
        {
            $documentos = Documento::where('departamento_id', $departamentoId)->get();
            $departamento = Departamento::findOrFail($departamentoId);
            $vista = strtolower(str_replace(' ', '_', $departamento->nombre));
            return view( $vista, compact('documentos'));
        }

    public function descargarDocumento($id)
        {
            $documento = Documento::findOrFail($id);
            $rutaArchivo = $documento->ruta_archivo;
            $nombreArchivo = basename($rutaArchivo);
            return response()->download(storage_path('app/public/'.$rutaArchivo), $nombreArchivo);
        }

    public function ver($id)
        {
            $documento = Documento::findOrFail($id);
            $rutaArchivo = $documento->ruta_archivo;
            if (Storage::exists($rutaArchivo)) {
                return response()->file(storage_path('app/' . $rutaArchivo));
            } else {
                return redirect()->back()->with('error', 'El documento solicitado no existe.');
            }
        }
}