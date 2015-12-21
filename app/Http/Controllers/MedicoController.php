<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use App\Medico;
use Illuminate\Html\FormFacade;
use Illuminate\Html\HtmlFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Routing\Controller

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos=Medico::all();
        return view('home.home', compact('medicos'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico=Medico::find($id);
        return view('doctor.doctor', compact('medico'));
    }

    public function showAll()
    {
        $medicos=Medico::all();
        return view('index', compact('medicos'));
    }
}
