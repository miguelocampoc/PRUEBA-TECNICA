<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    
    {
        $consulta= DB::table('users')->where('users.id','=',auth()->user()->id)->first();
        
        
        return view('admin.dashboard',[
            'home'=>'active',
            'rol'=>$consulta->tipo,
        ]);   
        
    }
}
