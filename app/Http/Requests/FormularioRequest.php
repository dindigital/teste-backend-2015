<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
//use Illuminate\Http\Request;


class FormularioRequest extends Request
{
    
    /**
     * The URI to redirect to if validation fails
     *
     * @var string
     */
    protected $redirect = '/#about';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'      => 'required', 
            'email'     => 'required|email', 
            'telefone'  => 'required|numeric', 
        ];
    }

    /**
    * Get the messages of the rules
    *
    * @return array
    */
    public function messages()
    {
        return [
          'nome.required'     => 'O nome é obrigatório.',
          'email.required'    => 'O email é obrigatorio.',  
          'email.email'       => 'O email deve ser um email valido.',   
          'telefone.required' => 'O telefone é obrigatorio.',
          'telefone.numeric'  => 'O telefone só pode conter números.'
        ];
    }
}
