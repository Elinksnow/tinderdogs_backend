<?php

namespace App\Http\Controllers;
use App\Models\Perro;
use App\Http\Requests\PerroRequest;
use Illuminate\Http\Request;


class PerroController extends Controller
{
    
    public function index()
    {
        $perros = Perro::all();
        return view('perros.index', ['perros' => $perros]);
    }


    public function create()
    {
        return view('perros.create');
    }

    

    public function store(PerroRequest $request)
    {
        $perro = new Perro();
        $perro->nombre = $request->input('nombre');
        $perro->url_foto = $request->input('url_foto');
        $perro->descripcion = $request->input('descripcion');
        $perro->save();

        return redirect()->route('perros.index')->with('success', 'Perro creado exitosamente.');
    }


    public function show($id)
    {
        $perro = Perro::findOrFail($id);
        return view('perros.show', ['perro' => $perro]);
    }

    
    public function edit($id)
    {
        $perro = Perro::findOrFail($id);
        return view('perros.edit', ['perro' => $perro]);
    }


    public function update(PerroRequest $request, $id)
    {
        $perro = Perro::findOrFail($id);
        $perro->nombre = $request->input('nombre');
        $perro->url_foto = $request->input('url_foto');
        $perro->descripcion = $request->input('descripcion');
        $perro->save();

        return redirect()->route('perros.index')->with('success', 'Perro actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $perro = Perro::findOrFail($id);
        $perro->delete();

        return redirect()->route('perros.index')->with('sucess','Perro eliminado exitosamente');
    }

    public function aceptados()
    {
        // Aquí debes escribir el código necesario para obtener los perros aceptados
        // de la base de datos y devolverlos en formato JSON.
    }

    public function rechazados()
    {
        // Aquí debes escribir el código necesario para obtener los perros rechazados
        // de la base de datos y devolverlos en formato JSON.
    }


}
