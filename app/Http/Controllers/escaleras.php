<?php

namespace App\Http\Controllers;
use App\escalerasM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class escaleras extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ver.escaleras');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear.escaleras',[
            'create'=>'active'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $validatedData = $request->validate([
            
            'tipo' => ['required'],
            'codigo_serie' => ['required'],
            'estado' => ['required'],
            
            
        ]); 
    
        
        escalerasM::create([
            'id_user'=>Auth::user()->id,
            'tipo'=>$request->tipo,
            'codigo_serie'=>$request->codigo_serie,
            'estado'=>$request->estado,
            'modified_at'=>'('.date('d-m-Y H:i:s').')'

            
            
        
        ]);
        return redirect('/crear/escaleras')->with('status', 'Escalera creado exitosamente!');
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tipo' => ['required'],
            'codigo_serie' => ['required'],
            'estado' => ['required'],
            
        ]); 
        $escaleras = escalerasM::find($id);
        $escaleras->tipo=$request->tipo;
        $escaleras->codigo_serie=$request->codigo_serie;
        $escaleras->estado=$request->estado;
        $escaleras->save();
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
