<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostsRequest extends FormRequest
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
            "title" => "required|string|min:2|max:30",
            "description" => "required|string|min:20",
            "author" => "required|string|min:2|max:50"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere composto da almeno 2 caratteri",
            "description.required" => "La descrizione è obbligatoria",
            "description.min" => "La descrizione deve essere più lunga di 20 caratteri",
            "author.required" => "L'autore è obbligatorio",
            "author.min" => "Il nome autore deve essere composto da almeno 2 caratteri"
            ];
    }
}
