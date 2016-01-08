<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Medico;
use Illuminate\Html\FormFacade;
use Illuminate\Html\HtmlFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
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

    /**
    * Display all resource()
    *
    * @return
    */
    public function showAll()
    {
        $medicos=Medico::all();
        return view('index', compact('medicos'));
    }
}
