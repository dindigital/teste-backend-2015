<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Formulario;
use Mail;
use App\Http\Requests\FormularioRequest;
use Illuminate\Contracts\Config;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return 
     */
    public function index()
    {
        return view('pages.form.appontment_success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \App\Http\Requests\FormularioReques
     */
    public function store(FormularioRequest $request)
    {
        $input = $request->all();
        $formulario = Formulario::create($input);
        $this->enviarEmail($formulario);
        return redirect('appontment_success');   
    }

    /**
    * Envia o email para o administrador do sistema
    *
    */
    private function enviarEmail($formulario)
    {
        Mail::send('pages.form.email_success', ['formulario' => $formulario], 
            function ($message) use ($formulario) {
            $message->from('ericas.rodriguess@gmail.com', 'Érica Rodrigues');
            $message->to(config('myconfig.administrador_mail'));
            $message->subject("Formulário encaminhado com Sucesso!");
        });
    }


}
