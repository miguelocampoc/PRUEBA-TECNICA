<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class conductores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear.conductor',[
            'conductor_create'=>'active'
        ]);
    }
    public function list()
    {
        return view('ver.conductores',[
            'conductor_list'=>'active'
        ]);
    }
    public function edit(Request $request, $id)
    {
        return view('ver.edit_conductor',[
            'conductor_edit'=>'active'
        ]);
    }