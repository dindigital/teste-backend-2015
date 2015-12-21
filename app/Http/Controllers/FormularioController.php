<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Formulario;
use Mail;
use App\Http\Requests\FormularioRequest;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.appontment_success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FormularioRequest $request)
    {
        $input = $request->all();
        $formulario = Formulario::create($input);
        $this->enviarEmail($formulario);
        return redirect('appontment_success');   
    }

    public function enviarEmail($formulario)
    {
        Mail::send('form.email_success', ['formulario' => $formulario], 
            function ($message) use ($formulario) {
            $message->from('ericas.rodriguess@gmail.com', 'Érica Rodrigues');
            $message->to($formulario->email);
            $message->subject("Formulário encaminhado com Sucesso!");
        });
    }


}
