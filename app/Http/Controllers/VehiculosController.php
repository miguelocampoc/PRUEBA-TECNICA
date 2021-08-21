<?php

namespace App\Http\Controllers;
use App\vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\personas;

class VehiculosController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function create()
    {
        return view('crear.vehiculo',[
            'vehiculo_create'=>'active',
            'propietarios'=> personas::where('tipo','Propietario')->get(),
            'conductores'=> personas::where('tipo','Conductor')->get(),
        ]);
    }
    public function list()
    {
        
        return view('ver.vehiculos',[
            'vehiculo_list'=>'active',
            'vehiculos'=>vehiculos::get()
        ]);
        
    }
    public function detalles($id)
    {
       
       $vehiculo= vehiculos::findOrFail($id);
       return view('ver.detalles',[
          'vehiculo'=>$vehiculo,
         'propietario'=> vehiculos::select('vehiculos.id','vehiculos.placa','vehiculos.marca','vehiculos.tipo_vehiculo','personas.n_cedula','personas.primer_nombre','personas.segundo_nombre','personas.apellidos','personas.direccion','personas.telefono','personas.ciudad')
         ->join('personas','personas.id','=','vehiculos.propietario_id')->first(),
         'conductor'=> vehiculos::select('vehiculos.id','vehiculos.placa','vehiculos.marca','vehiculos.tipo_vehiculo','personas.n_cedula','personas.primer_nombre','personas.segundo_nombre','personas.apellidos','personas.direccion','personas.telefono','personas.ciudad')
         ->join('personas','personas.id','=','vehiculos.conductor_id')->first(),
         'consultas_placa'=>'active'
         
    ]);
    }
    
    public function edit(Request $request, $id)
    {
      $vehiculo=vehiculos::findOrFail($id);
        return view('ver.edit_vehiculo',[
            'vehiculo_list'=>'active',
             'vehiculo'=>$vehiculo,
             'propietarios'=>personas::where('tipo','Propietario')->get(),
             'conductores'=>personas::where('tipo','Conductor')->get()
             
        ]);
    }
    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'placa' => ['required', 'string', 'max:255'],
            'color' => ['required', 'string','max:255'],
            'marca' => ['required', 'string', 'max:255'],
            'tipo_vehiculo' => ['required', 'string', 'max:255'],


           
        ]);
        $vehiculo = vehiculos::find($id);
        $vehiculo->placa= $request->placa;
        $vehiculo->color= $request->color;
        $vehiculo->marca= $request->marca;
        $vehiculo->tipo_vehiculo= $request->tipo_vehiculo;
        $vehiculo->conductor_id=$request->conductor;
        $vehiculo->propietario_id=$request->propietario;
        $vehiculo->save();
        
        return redirect('/ver/vehiculos/edit/'.$id)->with('status', 'El vehiculo ha sido editado exitosamente!');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'placa' => ['required', 'string', 'max:255', 'unique:vehiculos'],
            'color' => ['required', 'alpha','max:255'],
            'marca' => ['required', 'string', 'max:255'],
            'tipo_vehiculo' => ['required', 'string', 'max:255'],


           
        ]);

        vehiculos::create([
            'placa'=>$request->placa,
            'color'=>$request->color,
            'marca'=>$request->marca,
            'tipo_vehiculo'=>$request->tipo_vehiculo,
            'conductor_id'=>$request->conductor,
            'propietario_id'=>$request->propietario,
        ]);
        return redirect('/crear/vehiculo')->with('status', 'El vehiculo ha sido creado exitosamente!');

    }
    public function drop(Request $request){
        $orden =vehiculos::findOrFail($request->input('id'));
        $orden->delete();
    }
    
}