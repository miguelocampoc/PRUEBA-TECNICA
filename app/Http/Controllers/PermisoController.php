<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\permisos_obras;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\json_encode;
class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('hse', ['except' => ['create', 'list']]);
    }
   
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisos.create',['permiso_create'=>'active']);
    }
    public function edit_permiso($id)
    {
        permisos_obras::findOrFail($id);

        return view('permisos.edit_permiso',[
            'permisos_list'=>'active',
            'id' => $id
          ]
        );
    }


    public function permisos_list()
    {
        return view('permisos.permisos_list',[
            'permisos_list'=>'active',
           'permisos' => permisos_obras::select('permisos_obras.id','users.name','users.apellido','permisos_obras.created_at','permisos_obras.updated_at')
            ->join('users','users.id','=','permisos_obras.id_user')
            ->get()
            
            ]);
    }
    public function my_permisos_list()
    {
        return view('permisos.my_permisos_list',
        ['my_permisos_list'=>'active',
          'permisos'=>
          permisos_obras::select('permisos_obras.id','users.name','users.apellido','permisos_obras.created_at','permisos_obras.updated_at')
          ->join('users','users.id','=','permisos_obras.id_user')
          ->where('permisos_obras.id_user','=', Auth::user()->id)
          ->get()
          
        ]);
    }
    public function edit_my_permiso($id)
    {
        permisos_obras::findOrFail($id);

        return view('permisos.edit_my_permiso',[
            'my_permisos_list'=>'active',
            'id' => $id
           ]
        );
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $attributes=[
            'empresa'=>$request->empresa,
            'ciudad'=>$request->ciudad,
            'area_proceso'=>$request->Area_proceso,
            'fecha'=>$request->fecha,
            'lugar'=>$request->lugar,
            'hora'=>$request->hora,
            'ubicacion'=>$request->ubicacion,
            'altura'=>$request->altura,
            'procedimiento'=>$request->procedimiento,
            'elementos'=>$request->elementos,
            'personal_capacitado'=>$request->personal_capacitado,
            'verificacion'=>$request->verificacion,
            'area_limpia'=>$request->area_limpia,
            'delimitacion'=>$request->delimitacion,
            'casco_burbuquejo'=>$request->casco_burbuquejo,
            'guantes'=>$request->guantes,
            'botas'=>$request->botas,
            'gafas'=>$request->gafas,
            'proteccion_auditiva'=>$request->proteccion_auditiva,
            'entrenado'=>$request->entrenado,
            'elementos_estado'=>$request->elementos_estado,
            'certificado'=>$request->certificado,
            'anclaje_seguro'=>$request->anclaje_seguro,
            'adaptadores_anclaje'=>$request->adaptadores_anclaje,
            'altura_trabajador'=>$request->altura_trabajador,
            'longitud_eslinga'=>$request->longitud_eslinga,
            'absorvedor_choque'=>$request->absorvedor_choque,
            'factor_seguridad'=>$request->factor_seguridad,
            'distancia_caida'=>$request->distancia_caida,
            'distancia_caida_libre'=>$request->distancia_caida_libre,
            'distancia_libre'=>$request->distancia_libre,
            'trabajador1'=>$request->trabajador1,
            'trabajador2'=>$request->trabajador2,
        ];
         
        permisos_obras::create([
            'id_user'=>Auth::user()->id,
            'estado'=> 'no aprobado',
            'attributes'=> json_encode($attributes, True)
            
            ]);
            return redirect('/permisos/crear')->with('status', 'permiso creado exitosamente!');
         
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
        
        $attributes=[
            'empresa'=>$request->empresa,
            'ciudad'=>$request->ciudad,
            'area_proceso'=>$request->Area_proceso,
            'fecha'=>$request->fecha,
            'lugar'=>$request->lugar,
            'hora'=>$request->hora,
            'ubicacion'=>$request->ubicacion,
            'altura'=>$request->altura,
            'procedimiento'=>$request->procedimiento,
            'elementos'=>$request->elementos,
            'personal_capacitado'=>$request->personal_capacitado,
            'verificacion'=>$request->verificacion,
            'area_limpia'=>$request->area_limpia,
            'delimitacion'=>$request->delimitacion,
            'casco_burbuquejo'=>$request->casco_burbuquejo,
            'guantes'=>$request->guantes,
            'botas'=>$request->botas,
            'gafas'=>$request->gafas,
            'proteccion_auditiva'=>$request->proteccion_auditiva,
            'entrenado'=>$request->entrenado,
            'elementos_estado'=>$request->elementos_estado,
            'certificado'=>$request->certificado,
            'anclaje_seguro'=>$request->anclaje_seguro,
            'adaptadores_anclaje'=>$request->adaptadores_anclaje,
            'altura_trabajador'=>$request->altura_trabajador,
            'longitud_eslinga'=>$request->longitud_eslinga,
            'absorvedor_choque'=>$request->absorvedor_choque,
            'factor_seguridad'=>$request->factor_seguridad,
            'distancia_caida'=>$request->distancia_caida,
            'distancia_caida_libre'=>$request->distancia_caida_libre,
            'distancia_libre'=>$request->distancia_libre,
            'trabajador1'=>$request->trabajador1,
            'trabajador2'=>$request->trabajador2,
        ];
        $permiso = permisos_obras::find($id);
        $permiso->estado=$request->estado;
        $permiso->attributes=json_decode($attributes, True);
        $permiso->save();
        return redirect('/permisos/editar')->with('status', 'Permiso modificado exitosamente!');
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
