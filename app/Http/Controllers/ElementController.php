<?php

namespace App\Http\Controllers;
use App\motocicletas;
use Illuminate\Http\Request;

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
        'arnesyaparejos'=>'active'
     ]);
    }

    public function motocicletas(){
        return view('crear.motocicletas',[
            'motocicletas'=>'active'
         ]);
    }
    public function escaleras(){
        return view('crear.escaleras',[
            'escaleras'=>'active'
         ]);
    }

    public function listar_arnesyaparejos(){
        return view('ver.arnesyaparejos',[
            'view_arnesyaparejos'=>'active'
         ]);
    }
    public function listar_motocicletas(){
        return view('ver.motocicletas',[
            'view_motocicletas'=>'active'
         ]);
    }
    public function listar_escaleras(){
        return view('ver.escaleras',[
            'view_escaleras'=>'active'
         ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
