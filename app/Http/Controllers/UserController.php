<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('administrador',['except' => ['view_profile', 'edit_profile']]);
    }

    public function view_profile(){
        return view('usuarios.profile',[
            'view_profile'=>'active'
        ]);
    }

    public function index()
    {      
      
        return view('usuarios.list',[
            'listar'=>'active',

            ]);
    }
    public function listar_act(){
     echo json_encode(User::where('estado','=','activo')->get());
    }
    public function listar_all(){
     echo json_encode(User::all());

    }
    public function edit_profile(Request $request ){
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'contacto'=> ['required'],
            'cedula'=> ['required', 'numeric', 'min:5'],
            'licencia_moto'=>['required', 'numeric', 'min:5',],
            'cargo'=>['required', 'string', 'max:255'],
            'rol'=>['required', 'string', 'max:20','max:155'],
            'estado'=>['required']
        ]);
    $path_foto_perfil=$request->file('foto_perfil')->storeAs('public','p'.$request->cedula.'.jpg');
       $path_foto_firma=$request->file('foto_firma')->storeAs('public','f'.$request->cedula.'.jpg');
    
      
       $id_user=Auth::user()->id;
            $usuario = User::find($id_user);
            
            $usuario->name=$request->nombre;
            $usuario->apellido=$request->apellido;
            $usuario->email=$request->email;
            $usuario->contacto= $request->contacto;
            $usuario->cedula=$request->cedula;
            $usuario->licencia_moto=$request->licencia_moto;
            $usuario->cargo= $request->cargo;
            $usuario->rol= $request->rol;
            $usuario->estado= $request->estado;
            $usuario->foto_perfil='p'.$request->cedula.'.jpg';
            $usuario->foto_firma='f'.$request->cedula.'.jpg';
            $usuario->save();
        
        
    
   
    return redirect('/usuarios/profile')->with('status', 'Usuario creado exitosamente!');
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create',[
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
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'clave' => ['required', 'string', 'min:8'],
            'contacto'=> ['required'],
            'cedula'=> ['required', 'numeric', 'min:5','unique:users'],
            'licencia_moto'=>['required', 'numeric', 'min:5',],
            'cargo'=>['required', 'string', 'max:255'],
            'rol'=>['required', 'string', 'max:20','max:155'],
            'foto_perfil'=>['required', 'image'],
            'foto_firma'=>['required', 'image']
        ]);
        
        $path_foto_perfil=$request->file('foto_perfil')->storeAs('public','p'.$request->cedula.'.jpg');
        $path_foto_firma=$request->file('foto_firma')->storeAs('public','f'.$request->cedula.'.jpg');

        User::create([
            'name'=>$request->nombre,
            'apellido'=>$request->apellido,
            'email'=>$request->email,
            'password'=> Hash::make($request->clave),
            'contacto'=> $request->contacto,
            'cedula'=>$request->cedula,
            'licencia_moto'=>$request->licencia_moto,
            'cargo'=> $request->cargo,
            'rol' => $request->rol,
            'estado'=> "activo",
            "foto_perfil"=>'p'.$request->cedula.'.jpg',
            "foto_firma"=>'f'.$request->cedula.'.jpg',
            'created_at'=>date('d-m-Y H:i:s'),
            'updated_at'=>date('d-m-Y H:i:s'),

        ]);
        return redirect('/usuarios/crear')->with('status', 'Usuario creado exitosamente!');

       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('usuarios.edit',[
            'listar'=>'active',
             'user'=>User::findOrFail($id)
            ]);

    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'contacto'=> ['required'],
            'cedula'=> ['required', 'numeric', 'min:5'],
            'licencia_moto'=>['required', 'numeric', 'min:5',],
            'cargo'=>['required', 'string', 'max:255'],
            'rol'=>['required', 'string', 'max:20','max:155'],
            'estado'=>['required']
        ]);
    $path_foto_perfil=$request->file('foto_perfil')->storeAs('public','p'.$request->cedula.'.jpg');
       $path_foto_firma=$request->file('foto_firma')->storeAs('public','f'.$request->cedula.'.jpg');
       
        $usuario = User::find($id);
        $usuario->name=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->email=$request->email;
        $usuario->contacto= $request->contacto;
        $usuario->cedula=$request->cedula;
        $usuario->licencia_moto=$request->licencia_moto;
        $usuario->cargo= $request->cargo;
        $usuario->rol= $request->rol;
        $usuario->estado= $request->estado;
        $usuario->foto_perfil='p'.$request->cedula.'.jpg';
        $usuario->foto_firma='f'.$request->cedula.'.jpg';
        $usuario->save();
    }
    public function settingUser(Request $request, $id)
    {
      
        $usuario = User::find($id);
        $usuario->estado= $request->estado;
        $usuario->password= Hash::make($request->clave);
        $usuario->save();

    }
    public function destroy($id)
    {
        $user= User::select('foto_perfil','foto_firma')->where('id','=',$id)->first();

        $usuario =User::findOrFail($id);

       $usuario->delete();

        Storage::delete(['public/'.$user->foto_perfil, 'public/'.$user->foto_firma]);

    }
}
