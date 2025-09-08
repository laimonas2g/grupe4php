<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
          'title' => 'required|string|max:255|min:3',
          'author_id' => 'required|exists:authors,id',
          'pages' => 'required|integer|min:1',
          'description' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Labai reikia pavadinimo',
            'title.string' => 'Pavadinimas turi būti tekstas',
            'title.max' => 'Pavadinimas turi būti trumpesnis nei 255 simboliai',
            'title.min' => 'Pavadinimas turi būti bent 3 simbolių',
            'author_id.required' => 'Autorius yra privalomas',
            'author_id.exists' => 'Autorius turi būti galiojantis autorius',
            'pages.required' => 'Puslapiai yra privalomi',
            'pages.integer' => 'Puslapiai turi būti sveikasis skaičius',
            'pages.min' => 'Puslapiai turi būti bent 1',
            'description.required' => 'Aprašymas yra privalomas',
            'description.string' => 'Aprašymas turi būti tekstas',
        ];
    }

}
