<?php

namespace App\Http\Controllers;
use App\MotocicletasM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class motocicletas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('ver.motocicletas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'id_propietario' =>['required'],
            'placa' => ['required'],
            'marca' => ['required'],
            'modelo' => ['required'],
            'vigenciatecnicomecanica' => ['required'],
            'vigenciasoat'=> ['required'],
             
        ]); 
    
        
        MotocicletasM::create([
            'id_user'=>Auth::user()->id,
            'id_propietario'=>$request->id_propietario,
            'placa'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'vigenciatecnicomecanica'=> $request->vigenciatecnicomecanica,
            'vigenciasoat'=> $request->vigenciasoat,
        
        ]);
        return redirect('/crear/motocicletas')->with('status', 'Motocicleta creado exitosamente!');
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
            'placa' => ['required'],
            'marca' => ['required'],
            'modelo' => ['required'],
            'vigenciatecnicomecanica' => ['required',],
            'vigenciasoat'=> ['required'],
            
        ]); 
        $motocicletas = MotocicletasM::find($id);
        $motocicletas ->placa=$request->placa;
        $motocicletas ->marca=$request->marca;
        $motocicletas ->modelo=$request->modelo;
        $motocicletas ->vigenciatecnicomecanica= $request->vigenciatecnicomecanica;
        $motocicletas ->vigenciasoat= $request->vigenciasoat;
        $motocicletas ->save();

        return redirect('/ver/motocicletas')->with('status', 'Motocicleta editada exitosamente!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
