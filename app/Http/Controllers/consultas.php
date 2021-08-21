<?php

namespace App\Http\Controllers;
use App\orden;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class consultas extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fecha()
    {
        return view('consultas.fecha',[
            'consultas_fecha'=>'active'
        ]);
    }
    public function placa()
    {
        return view('consultas.placa',[
            'consultas_placa'=>'active'
        ]);
    }
    public function consult_fecha(Request $request){
           
               $ordenes= DB::table('ordenes')->select('tipo','placa','pcd')->whereDate('created_at',$request->fecha)->get();
                echo $ordenes;
           
    }
    public function consult_placa(Request $request){
        $vehiculo= DB::table('vehiculos')->where('placa',$request->placa)->get();
        echo $vehiculo;
    }
}