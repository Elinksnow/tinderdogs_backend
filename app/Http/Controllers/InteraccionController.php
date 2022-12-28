<?php

namespace App\Http\Controllers;

use App\Models\Interaccion;
use Illuminate\Http\Request;

class InteraccionController extends Controller
{

    public function index()
    {
        $interacciones = Interaccion::all();
        return $interacciones;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $interaccion = new Interaccion();
        $interaccion->perrointeresado = $request->perrointeresado;
        $interaccion->perrocandidato = $request->perrocandidato;
        $interaccion->preferencia = $request->preferencia;

        $interaccion->save();
    }


    public function show($id)
    {
        $interaccion = Interaccion::find($id);
        return $interaccion;
    }

    
    public function edit(Interaccion $interaccion)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        $interaccion = Interaccion::findOrFail($request -> id);
        $interaccion->perrointeresado = $request->perrointeresado;
        $interaccion->perrocandidato = $request->perrocandidato;
        $interaccion->preferencia = $request->preferencia;

        $interaccion->save();
        return $interaccion;
    }

    
    public function destroy($id)
    {
        $interaccion = Interaccion::destroy($id);
    }
}
