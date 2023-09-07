<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePolicierRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // dd($this->route('CheminPolicier'));
        return [
            'nom' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'matricule' => [
                'required',
                'string',
                'max:255',
                Rule::unique('policiers')->ignore($this->route('CheminPolicier')), ],
            'email' => [
                'required',
                'string',
                'max:255',
                'email',
                Rule::unique('policiers')->ignore($this->route('CheminPolicier')),
            ],
            'telephone' => 'string|max:255',
        ];
    }
}
