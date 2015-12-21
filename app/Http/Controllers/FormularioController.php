<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Formulario;
use Mail;
use App\Http\Requests\FormularioRequest;

//use Validator;
//use Illuminate\Html\FormFacade;
//use Illuminate\Html\HtmlFacade;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Redirect;
//use Illuminate\Routing\Controller;

//use Illuminate\Routing\Controller;
//use Illuminate\Http\Request;
//use Response;
//use View;

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
        //$input = $request->all();
        //Formulario::create($input);
        //$this->enviarEmail($request->input('email'));
        //return redirect('appontment_success');     
        
        $input = $request->all();
        $formulario = Formulario::create($input);
        $this->enviarEmail($formulario);
        return redirect('appontment_success');

        //$rules = array(
        //    'nome'      => 'required', 
        //    'email'     => 'required|email', 
        //    'telefone'  => 'required|numeric', 
        //);

        //$messages = [
        //  'nome.required'     => 'O nome é obrigatório.',
        //  'email.required'    => 'O email é obrigatorio',  
        //  'email.email'       => 'O email deve ser um email valido',   
        //  'telefone.required' => 'O telefone é obrigatorio',
        //  'telefone.numeric'  => 'O telefone só pode conter números'
        //];

        //$input = $request->all();
        //$validator = Validator::make($input, $rules, $messages);



        //if($validator->fails()){
        //    return redirect('/#about')->withErrors($validator->errors());
        //}else {
           
        //    $formulario = Formulario::create($input);
        //    $this->enviarEmail($formulario);
        //    return redirect('appontment_success');
        //}        
    }

    public function enviarEmail($formulario)
    {
        //var_dump($formulario);
        var_dump($formulario->email);
        var_dump($formulario->nome);

        Mail::send('form.email_success', ['formulario' => $formulario], 
            function ($message) use ($formulario) {
            $message->from('ericas.rodriguess@gmail.com', 'Érica Rodrigues');
            $message->to($formulario->email);
            $message->subject("Formulário encaminhado com Sucesso!");
        });
    }


}
