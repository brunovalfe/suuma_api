<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class RegisterAuthRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:20',
            'range' => [
                'required',
                Rule::in(['TAM', 'CP']),
            ],
            'check_privacy' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'email' => 'El mail es requerido',
            'password' => 'Contraseña requerida',
            'range' => 'Rango requerido',
            'check_privacy' => 'No se puede registrar sino acepta el aviso.'
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            "status" => "ERROR",
            "message" => "Datos mal formados o con errores",
            "data" => $validator->errors()
        ], 422));
    }
}
