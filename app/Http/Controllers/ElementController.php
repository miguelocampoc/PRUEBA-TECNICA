<?php

namespace App\Http\Controllers;
use App\motocicletas;
use Illuminate\Http\Request;
use App\User;
use App\MotocicletasM;
use App\escalerasM;
use App\arnesyaparejosM;
class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function arnesyaparejos(){
     return view('crear.arnesyaparejos',[
        'arnesyaparejos'=>'active',
         'users'=>user::where('rol','=','tecnico')->where('estado','=','activo')->get()
     ]);
    }

    public function motocicletas(){
        return view('crear.motocicletas',[
            'motocicletas'=>'active',
            'users'=>
            User::where('rol','=','tecnico')
            ->where('estado','=','activo')
            ->get(),

         ]
        );
    }
    public function escaleras(){
        return view('crear.escaleras',[
            'escaleras'=>'active'
         ]);
    }

    public function listar_arnesyaparejos(){
        return view('ver.arnesyaparejos',[
            'view_arnesyaparejos'=>'active',
              'ayp'=>arnesyaparejosM::select('arnesyaparejos.id','users.name','users.apellido','arnesyaparejos.serial','arnesyaparejos.estado','arnesyaparejos.tipo','arnesyaparejos.created_at','arnesyaparejos.updated_at')->join('users', 'users.id', '=', 'arnesyaparejos.id_propietario')->get()
         ]);
    }
    public function listar_motocicletas(){
        return view('ver.motocicletas',[
            'view_motocicletas'=>'active',
            'data'=>
              MotocicletasM::select('motocicletas.placa','motocicletas.modelo','motocicletas.marca','motocicletas.vigenciatecnicomecanica','motocicletas.vigenciasoat','motocicletas.created_at','motocicletas.updated_at','motocicletas.id','users.name','users.apellido')->join('users', 'users.id', '=', 'motocicletas.id_propietario')
              ->get()
           

           
         ]);
    }
    public function listar_escaleras(){
        return view('ver.escaleras',[
            'view_escaleras'=>'active',
             'escalerasdata'=>escalerasM::all()
         ]);
    }
    public function editar_motocicletas($id){

        return view('ver.editar_motocicletas',[
            
            'view_motocicletas'=>'active',
             'data'=> MotocicletasM::findOrFail($id),
             'propietario'=>MotocicletasM::select('motocicletas.id_propietario','users.name','users.apellido')
             ->join('users','users.id','=','motocicletas.id_propietario')
             ->where('motocicletas.id','=',$id)
             ->first(),
             'usuarios'=>User::select('users.id','users.name','users.apellido')
             ->where('rol','=','tecnico')
             ->where('estado','=','activo')
             ->get()
    
         ]);
    }
    public function editar_ayp($id){
        return view('ver.editar_ayp',[
            'view_arnesyaparejos'=>'active',
            'users'=>user::where('rol','=','tecnico')->where('estado','=','activo')->get()

            ]);
    }
    public function editar_escaleras($id){
        return view('ver.editar_escaleras',[
            'view_escaleras'=>'active'


            ]);

    }
   public function listar_escaleras_all(){
     echo json_encode(escalerasM::all());
   }

   public function listar_escaleras_act(){
   echo json_encode(
    escalerasM::select('escaleras.modified_at','escaleras.codigo_serie','escaleras.estado','escaleras.tipo','users.name','users.apellido','users.rol')
   ->join('users','users.id','=','escaleras.id_user')
   ->where('escaleras.estado','=','Activo')
   ->get()
    ); 
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
}
