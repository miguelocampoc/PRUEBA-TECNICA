<?php

namespace App\Http\Controllers;
use App\arnesyaparejosM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class arnesyaparejos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ver.arnesyaparejos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear.arnesyaparejos',[
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
            'id_propietario'=> ['required'],
            'serial' => ['required'],
            'estado' => ['required'],
            'tipo' => ['required'],
            
        ]); 
    
        
        arnesyaparejosM::create([
            'id_user'=>Auth::user()->id,
            'id_propietario'=>$request->id_propietario,
            'serial'=>$request->serial,
            'estado'=>$request->estado,
            'tipo'=>$request->tipo,
            
            
        
        ]);
        return redirect('/crear/arnesyaparejos')->with('status', 'creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_propietario'=> ['required'],
            'serial' => ['required'],
            'estado' => ['required'],
            'tipo' => ['required'],
            
        ]); 
        $Arnesyaparejos = arnesyaparejosM::find($id);
        $Arnesyaparejos->id_propietario=$request->id_propietario;
        $Arnesyaparejos->serial=$request->serial;
        $Arnesyaparejos->estado=$request->estado;
        $Arnesyaparejos->tipo=$request->tipo;
        $Arnesyaparejos->save();
        return redirect('/ver/arnesyaparejos')->with('status', 'Arnes modificado exitosamente!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
