<?php

namespace App\Http\Controllers;

use App\Models\Anabolico;
use Illuminate\Http\Request;

class AnabolicoController extends Controller
{
    public function index()
    {
        $anabolicos = Anabolico::all();
        return view('anabolicos', compact('anabolicos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $anabolico = new Anabolico();
        $anabolico->nombre = $request->input('nombre');
        $anabolico->tipo = $request->input('tipo');
        $anabolico->descripcion = $request->input('descripcion');
        $anabolico->save();

        return redirect()->route('anabolicos')->with('success', 'Anabólico agregado correctamente');
    }
    public function destroy($id)
    {
        $anabolico = Anabolico::findOrFail($id);
        $anabolico->delete();

        return redirect()->route('anabolicos')->with('success', 'Anabólico eliminado correctamente');
    }

    public function update(Request $request, $id)
    {
        $anabolico = Anabolico::findOrFail($id);
        $anabolico->nombre = $request->input('nombre');
        $anabolico->tipo = $request->input('tipo');
        $anabolico->descripcion = $request->input('descripcion');
        $anabolico->save();

        return redirect()->route('anabolicos')->with('success', 'Anabólico actualizado correctamente');
    }
    public function edit($id)
    {
        $anabolico = Anabolico::findOrFail($id);
        return view('edit', compact('anabolico'));
    }

}


