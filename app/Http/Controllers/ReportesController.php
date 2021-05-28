<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('tecnico');
    }
   
    public function crear_motocicletas(){
        
        return view('reportes.crear_motocicletas',['crear_motocicletas'=>'active']);
    }
    public function crear_arnes(){
        return view('reportes.crear_arnes',['crear_arnes'=>'active']);
    }
    public function crear_escaleras(){
        return view('reportes.crear_escaleras',['crear_escaleras'=>'active']);
    }
    public function editar_motocicletas(){
        return view('reportes.editar_motocicletas');
    }
    public function editar_arnes(){
        return view('reportes.editar_arnes');
    }
    public function editar_escaleras(){
        return view('reportes.editar_esclaeras');
    }
    public function listar_motocicletas(){
        return view('reportes.listar_motocicletas',['listar_motocicletas'=>'active']);
    }
    public function listar_escaleras(){
        return view('reportes.listar_escaleras',['listar_escaleras'=>'active']);
    }
    public function listar_arnes(){
        return view('reportes.listar_arnes',['listar_arnes'=>'active']);
    }
    
    

    
    
    public function show($id)
    {
    }
    public function create(){
        
    }
  
    public function edit($id)
    {
        return view('reportes.edit');

    }

    
    public function update(Request $request, $id)
    {
       
    }

   
    public function destroy($id)
    {
        
    }
}
