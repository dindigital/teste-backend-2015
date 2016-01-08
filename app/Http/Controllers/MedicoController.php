<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Medico;

class MedicoController extends Controller
{
    /**
     * Display all resource
     *
     * @return 
     */
    public function index()
    {
        $medicos=Medico::all();
        return view('pages.home.home', compact('medicos'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return 
     */
    public function show($id)
    {
        $medico=Medico::find($id);
        return view('pages.doctor.doctor', compact('medico'));
    }
}
