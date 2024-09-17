<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectsEditRequest extends FormRequest
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

            "name" => "required|max:80",
            "description" => "required|max:500",
            "github" => "max:1000",
            "website" => "max:1000",
            "image" => "required|file"

        ];
    }

    public function messages()
    {
        
        return [

            "name.required" => "Preencha o campo acima",
            "name.max" => "Máximo de 80 caracteres",
            "description.required" => "Preencha o campo acima",
            "description.max" => "Máximo de 500 caracteres",
            "github.required" => "Preencha o campo acima",
            "website.required" => "Preencha o campo acima",
            "image.required" => "Insira uma imagem",
            "image.image" => "Insira uma imagem válida",
            
        ];

    }
}
