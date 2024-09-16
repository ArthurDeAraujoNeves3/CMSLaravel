<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            
            "title" => "required|max:80",
            "interprise" => "required|max:100",
            "description" => "required|max:500",
            "date" => "required|max:60"

        ];
    }

    public function messages() {

        return [

            "title.required" => "Preencha o campo acima",
            "title.max" => "Máximo de 80 caracteres",
            "interprise.required" => "Preencha o campo acima",
            "interprise.max" => "Máximo de 100 caracteres",
            "description.required" => "Preencha o campo acima",
            "description.max" => "Máximo de 500 caracteres",
            "date.required" => "Preencha o campo acima",
            "date.max" => "Máximo de 60 caracteres",

        ];

    }
}
