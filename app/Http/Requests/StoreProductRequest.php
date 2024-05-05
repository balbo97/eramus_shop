<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'description' => 'required|string|min:10|max:255',
            'type_id' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Il campo nome è obbligatorio",
            'name.min' => "Il campo nome deve contenere almeno 3 caratteri",
            'name.max' => "Il campo nome non può superare i 50 caratteri",

            'description.required' => "La descrizione del piatto è richiesta",
            'description.string' => "La descrizione deve essere un testo",
            'description.min' => "La descrizione deve avere almeno 10 caratteri",
            'description.max' => "La descrizione non può superare i 255 caratteri",

        ];
    }
}
