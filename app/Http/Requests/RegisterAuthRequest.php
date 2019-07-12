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

            'email.required' => 'El email es requerido.',
            'email.email' => 'La cadena no es un correo.',
            'email.unique' => 'El email ya se ha registrado antes.',


            'password.required' => 'Contraseña requerida.',
            'password.min' => 'Mínimo 6 caracteres.',
            'password.max' => 'Máximo 20 caracteres.',

            'range.in' => 'Tiene que ser del tipo de rango TAM o CP.',
            'check_privacy.required' => 'No se puede registrar sino acepta el aviso.'
        ];
    }

    // Fix found: https://laracasts.com/discuss/channels/laravel/how-make-a-custom-formrequest-error-response-in-laravel-55?page=1
    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            "status" => "Error",
            "errorCode" => 422,
            "message" => "Datos mal formados o con errores.",
            "data" => $validator->errors()
        ], 200));
    }
}
