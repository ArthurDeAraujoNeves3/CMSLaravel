<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, 
     */
    public function rules(): array
    {
        return [
            
            "email" => "required|email",
            "password" => "required|min_digits:8|max_digits:255"

        ];
    }
    
    // Mensagens de retorno
    public function messages() {

        return [

            "email.required" => "Email não inserido",
            "email.email" => "Email não é válido!",
            "email.max" => "Tamanho máximo de 255",
            "password.required" => "Senha não inserida",
            "password.max" => "Tamanho máximo de 60 caracteres",
            "password.min" => "Tamanho mínimo de 8 caracteres"

        ];

    }
}
