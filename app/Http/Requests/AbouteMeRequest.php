<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbouteMeRequest extends FormRequest
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
            
            "location" => "required|max:80",
            "description" => "required|max:500",
            "pdf" => "required|file"

        ];
    }

    public function messages()
    {
        return [

            "location.required" => "Preencha o input",
            "location.max" => "Máximo de 80 caracteres",
            "description.required" => "Preencha o input",
            "description.max" => "Máximo de 500 caracteres",
            "pdf.required" => "Envie o seu currículo por favor",
            "pdf.file" => "Envie um arquivo válido por favor"

        ];
    }
}
