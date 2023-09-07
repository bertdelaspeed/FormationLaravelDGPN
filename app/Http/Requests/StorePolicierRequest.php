<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePolicierRequest extends FormRequest
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
        return [
          'nom' => 'required|string|max:255',
          'prenoms' => 'required|string|max:255',
          'matricule' => 'required|string|max:255|unique:policiers',
          'email' => 'required|string|max:255|unique:policiers|email',
          'telephone' => 'string|max:255',
        ];
    }

    function messages() {
        return [
            'nom.required'=> 'Le nom est obligatoire',
            'nom.string'=> 'Le nom doit etre une chaine de caractères',
            'nom.max'=> 'Le nom ne doit pas depasser 255 caractères',

            'prenoms.required'=> 'Le prenom est obligatoire',
            'prenoms.string'=> 'Le prenom doit etre une chaine de caractères',
            'prenoms.max'=> 'Le prenom ne doit pas depasser 255 caractères',

            'matricule.required'=> 'Le matricule est obligatoire',
            'matricule.string'=> 'Le matricule doit etre une chaine de caractères',
            'matricule.max'=> 'Le matricule ne doit pas depasser 255 caractères',
            'matricule.unique'=> 'Le matricule deja utilise',

            'email.required'=> 'L\' adresse email est obligatoire',
            'email.string'=> 'L\' adresse email doit etre une chaine de caractères',
            'email.max'=> 'L\' adresse email ne doit pas depasser 255 caractères',
            'email.unique'=> 'L\' adresse email deja utilise',
            'email.email' => 'L\' adresse email doit etre valide',

            'telephone.string'=> 'Le numero de telephone doit etre la chaine de caractères',
            'telephone.max'=> 'Le numero de telephone ne doit pas depasser 255 caractères',

        ];
    }
}
