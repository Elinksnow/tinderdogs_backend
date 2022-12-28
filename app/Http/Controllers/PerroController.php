<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use Illuminate\Http\Request;

class PerroController extends Controller
{
    
    public function index()
    {
        $perros = Perro::all();
        return $perros;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $perro = new Perro();
        $perro->nombre = $request->nombre;
        $perro->urlfoto = $request->urlfoto;
        $perro->descripcion = $request->descripcion;

        $perro->save();
    }

    public function show($id)
    {
        $perro = Perro::find($id);
        return $perro;
    }

    public function edit(Perro $perro)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $perro = Perro::findOrFail($request -> id);
        $perro->nombre = $request->nombre;
        $perro->urlfoto = $request->urlfoto;
        $perro->descripcion = $request->descripcion;

        $perro->save();
        return $perro;
    }

    public function destroy($id)
    {
        $perro = Perro::destroy($id);
    }
}
