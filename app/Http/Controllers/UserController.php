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
             'users_all'=>User::all()
            ]);
    }
    public function listar_act(){
     echo json_encode(User::where('estado','=','activo')->get());
    }
    public function listar_all(){
     echo json_encode(User::all());

    }
    public function edit_profile(Request $request ){
        $id=Auth::user()->id;
        $foto_perfil=$_FILES['foto_perfil']['type'];
        
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'contacto'=> ['required'],
            'cedula'=> ['required', 'numeric', 'min:5'],
        ]);
    
      
            $usuario = User::find($id);
            $usuario->name=$request->nombre;
            $usuario->apellido=$request->apellido;
            $usuario->email=$request->email;
            $usuario->contacto= $request->contacto;
            $usuario->cedula=$request->cedula;
            $usuario->rol=$request->rol;
            $usuario->foto_perfil='p'.$id.'.jpg';
            $usuario->save();
        
        
    
   
    return redirect('/usuarios/profile')->with('status', 'Su perfil ha sido editado exitosamente!');
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
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'clave' => ['required', 'string', 'min:8'],
           
        ]);
        
    

      $user=  User::create([
            'name'=>$request->nombre,
            'email'=>$request->email,
            'tipo'=>$request->rol,
            'password'=> Hash::make($request->clave),


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
        $user=User::findOrFail($id);
        return view('usuarios.edit',[
            'listar'=>'active',
             'user'=>$user
            ]);

    }
    public function update(Request $request, $id)
    {
     
        $usuario = User::find($id);

     
        $validatedData = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'rol' => ['required','string'],

        ]);

        $usuario->name=$request->nombre;
        $usuario->email=$request->email;
        $usuario->tipo= $request->rol;
        $usuario->save();
        return redirect('/usuarios/editar/'.$id)->with('status', 'Usuario editado exitosamente!');

    }
    public function settingUser(Request $request, $id)
    {
      
        $usuario = User::find($id);
        $usuario->password= Hash::make($request->clave);
        $usuario->save();

    }
    public function destroy(Request $request)
    {

        $usuario =User::findOrFail($request->id);

        $usuario->delete();

    }

}
