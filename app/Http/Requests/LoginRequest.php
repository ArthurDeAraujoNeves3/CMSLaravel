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
            "password" => "required|max_digits:255"

        ];
    }
    public function messages() {

        return [

            "error" => "Erro no login",

        ];

    }
}
