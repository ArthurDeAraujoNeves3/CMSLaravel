<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            "welcomeMessage" => "required|max:100",
            "expertise" => "required|max:80"

        ];
    }

    // Mensagens de erro
    public function messages() {

        return [

            "welcomeMessage.required" => "Preencha o campo acima",
            "welcomeMessage.max" => "Máximo de 100 caracteres",
            "expertise.required" => "Preencha o campo acima",
            "expertise.max" => "Máximo de 80 caracteres"

        ];

    }
}
