<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonRequest extends FormRequest
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
        $rules = [];
        if ($this->filled('name')) {
            $rules['name'] = 'required|string';
        }
        if ($this->filled('age')) {
            $rules['age'] = 'required|numeric';
        }
        if ($this->filled('nationalityID')) {
            $rules['nationalityID'] = 'required|numeric';
        }
        if ($this->filled('birthDate')) {
            $rules['birthDate'] = 'required';
        }

        return $rules;
    }
}
