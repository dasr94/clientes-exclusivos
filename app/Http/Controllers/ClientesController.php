<?php

namespace App\Http\Controllers;

use App\Mail\DescuentosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Clientes;
use App\Models\Logs;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ClientesController extends Controller
{
    //  

    public function ver(){
        $clientes = Clientes::all();
        $logs = Logs::all();
        foreach($logs as $log){
            $log->cliente;
        }
        return view('dashboard', compact('clientes', 'logs'));
    }

    public function agregar(){
        return view('clientes.agregar');
    }

    public function guardar_VIP(Request $request){
        //return response()->json($request);
        //$cliente = Clientes::create($request->all());

        /**
         * @param TIPOS
         * 1 => VIP
         * 2 => encuesta (postre y le tienen que dar follow)
         * 3 => seguimiento de cliente (empresa, darles 10%)
         */

        //QrCode::generate('Make me into a QrCode!', '../public/qrcodes/qrcode.svg');
        
        $cliente = new Clientes();
        $cliente->nombre = $request->nombre;
        $cliente->dui = $request->dui;
        $cliente->correo = $request->correo;
        $cliente->descuento = $request->descuento;
        $cliente->caducidad = date('Y-m-d', strtotime('+90 day'));
        $cliente->tipo = "1";
        $slug = str_replace(" ", "-", $request->nombre);
        $cliente->slug = $slug;
        $cliente->save();

        $id_cliente = $cliente->id;
        //QrCode::format('svg')->size(700)->color(255,0,0)->generate('Desarrollo libre Andres', '../public/qrcode/qrcode2.svg');
        $url = url("") . "/descuento/" . $id_cliente . "/" . $slug;
        QrCode::format('png')->size(300)->generate($url, '../public/qrcode/'. $id_cliente . "_" . $slug . '.png');
        $correo = new DescuentosMailable($cliente);
        Mail::to($request->correo)->send($correo);
        

        return redirect('dashboard');
    }

    public function guardar_10(Request $request){
        $cliente = new Clientes();
        $cliente->nombre = $request->nombre;
        $cliente->dui = $request->dui;
        $cliente->correo = $request->correo;
        $cliente->descuento = $request->descuento;
        $cliente->caducidad = date('Y-m-d', strtotime('+90 day'));
        $cliente->tipo = "6";
        $cliente->empresa = "Panamericana - class96";
        $slug = str_replace(" ", "-", $request->nombre);
        $cliente->slug = $slug;
        $cliente->save();
        $id_cliente = $cliente->id;
        //QrCode::format('svg')->size(700)->color(255,0,0)->generate('Desarrollo libre Andres', '../public/qrcode/qrcode2.svg');
        $url = url("") . "/descuento/" . $id_cliente . "/" . $slug;
        QrCode::format('png')->size(300)->generate($url, '../public/qrcode/'. $id_cliente . "_" . $slug . '.png');
        $correo = new DescuentosMailable($cliente);
        Mail::to($request->correo)->send($correo);
        return redirect($url);
    }

    public function guardar_desayuno(Request $request){
        $cliente = new Clientes();
        $cliente->nombre = $request->nombre;
        $cliente->dui = $request->dui;
        $cliente->correo = $request->correo;
        $cliente->descuento = $request->descuento;
        $cliente->caducidad = date('Y-m-d', strtotime('+90 day'));
        $cliente->tipo = "7";
        $cliente->empresa = "Desayuno";
        $slug = str_replace(" ", "-", $request->nombre);
        $cliente->slug = $slug;
        $cliente->save();
        $id_cliente = $cliente->id;
        //QrCode::format('svg')->size(700)->color(255,0,0)->generate('Desarrollo libre Andres', '../public/qrcode/qrcode2.svg');
        $url = url("") . "/descuento/" . $id_cliente . "/" . $slug;
        QrCode::format('png')->size(300)->generate($url, '../public/qrcode/'. $id_cliente . "_" . $slug . '.png');
        $correo = new DescuentosMailable($cliente);
        Mail::to($request->correo)->send($correo);
        return redirect($url);
    }

    public function card($id, $slug){

        $cliente = Clientes::find($id);
        return view('cliente', compact('cliente'));

    }
}
