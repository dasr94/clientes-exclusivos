<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Logs;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //  

    public function ver(){
        $clientes = Clientes::all();
        $logs = Logs::all();
        return view('dashboard', compact('clientes', 'logs'));
    }

    public function agregar(){
        return view('clientes.agregar');
    }

    public function guardar(Request $request){
        //return response()->json($request);
        //$cliente = Clientes::create($request->all());
        $cliente = new Clientes();
        $cliente->nombre = $request->nombre;
        $cliente->dui = $request->dui;
        $cliente->correo = $request->correo;
        $cliente->descuento = $request->descuento;
        $slug = str_replace(" ", "-", $request->nombre);
        $cliente->slug = $slug;
        $cliente->save();
        return redirect('dashboard');
    }

    public function card($id, $slug){

        $cliente = Clientes::find($id);
        return view('cliente', compact('cliente'));

    }
}
