<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    // 
    public function agregar( Request $request , $id ) {
        //return response()->json($request);
        $log = new Logs();
        $log->total = $request->total;
        $log->cliente_id = $id;
        $log->descuento = $request->descuento;
        $log->save();
        return redirect('dashboard');
    }
}
