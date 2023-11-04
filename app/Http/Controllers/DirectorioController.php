<?php

namespace App\Http\Controllers;

use App\Models\Directorio;

use Illuminate\Http\Request;

class DirectorioController extends Controller
{   

    public function index(){
        $directorio = Directorio::all();
        return view('directorio', compact('directorio'));
    }
    public function create(){
        return view('crearEntrada');
    }

    public function store(Request $request){
        $directorio= new Directorio();
        $directorio->usuario = $request->input("codigoEntrada");
        $directorio->nombre = $request->input("nombre");
        $directorio->apellido = $request->input("apellido");
        $directorio->correo = $request->input("correo");
        $directorio->telefono = $request->input("telefono");
        
        return redirect('directorio.inicio');
    }

    public function ver(){
        return view('verContactos');
    }

    public function delete(){
        return view('eliminar');

    }
    public function destroy($id){
        $directorio = Directorio::find($id);
        $directorio -> delete ();
        return redirect () -> route ('directorio.inicio');
    }
}
