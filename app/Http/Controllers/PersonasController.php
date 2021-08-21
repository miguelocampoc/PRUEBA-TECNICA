<?php
namespace App\Http\Controllers;
use App\personas;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index(){
        return view('crear.conductor',[
            'crear_conductor'=>'active'
        ]);
    }
    public function store(request $request){
        $validatedData = $request->validate([
            'numero_de_cedula' => ['required', 'string', 'max:255','unique:personas'],
            'primer_nombre' => ['required', 'string', 'max:255'],
            'segundo_nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'ciudad' => ['required', 'string', 'max:255'],


        ]);
      $persona=  personas::create([
           'n_cedula'=>$request->numero_de_cedula,
           'tipo'=>$request->tipo,
           'primer_nombre'=>$request->primer_nombre,
           'segundo_nombre'=>$request->segundo_nombre,
           'apellidos'=>$request->apellidos,
           'direccion'=>$request->direccion,
           'telefono' =>$request->telefono,
           'ciudad'=>$request->ciudad,
        ]);
        
       return redirect('/crear/persona')->with('status', 'El '.$request->tipo.' ha sido creado correctamente');

    }
    public function list(){
        
    return view('ver.personas',[
        'personas_list'=>'active',
        'personas'=>personas::all()
    ]);
    }
    public function edit($id){
        $persona=personas::findOrFail($id);
        return view('ver.edit_persona',[
            'personas_list'=>'active',
            'persona'=>$persona
            
        ]);
        }
    public function update(request $request, $id){
        $validatedData = $request->validate([
            'cedula' => ['required', 'string', 'max:255'],
            'primer_nombre' => ['required', 'string', 'max:255'],
            'segundo_nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'ciudad' => ['required', 'string', 'max:255'],


        ]);
        $persona=personas::findOrFail($id);
        $persona->n_cedula= $request->cedula;
        $persona->primer_nombre= $request->primer_nombre;
        $persona->segundo_nombre= $request->segundo_nombre;
        $persona->apellidos= $request->apellidos;
        $persona->direccion=$request->direccion;
        $persona->tipo=$request->tipo;
        $persona->ciudad=$request->ciudad;
        $persona->save();
        return redirect('/ver/persona/edit/'.$id)->with('status', 'El '.$request->tipo.' ha sido modificado correctamente');

    }
    public function drop(request $request){
        $persona =personas::findOrFail($request->id);
        $persona->delete();

    }
}
