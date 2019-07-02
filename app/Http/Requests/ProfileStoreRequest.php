<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class ProfileStoreRequest extends FormRequest
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
            'id' => 'required|string',
            'name' => 'required|string',
            'appat' => 'required|string',
            'apmat' => 'required|string',
            'range' => 'string',
            'date_birth' => [
                'required',
                'regex:/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/'
            ],
            'blood_type' => 'string',
            'CURP' => 'string',
            'tel_contact' => 'required|string|min:8|max:13',
            'tel_contact2' => 'string|min:8|max:13',
            'ec.name' => 'string',
            'ec.appat' => 'string',
            'ec.apmat' => 'string',
            'ec.relationship' => 'string',
            'dir.street' => 'string',
            'dir.state' => 'string',
            'dir.col' => 'string',
            'dir.pc' => 'string',
            'fis.business_name' => 'string',
            'fis.dir_fiscal' => 'string',
            'fis.RFC' => 'string',
            'fis.email' => 'email',
            'generation' => 'string',
            'BLS_exp' => [ 'regex:/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/' ]
        ];
    }

    /**
     * Messages for validation
     * @return array
     */
    public function messages()
    {
        return [
            'id.required' => 'Se requiere el id de usuario',
            'name.required' => 'Se require el nombre del usuario',
            'appat.required' => 'Se requiere el Apellido Paterno',
            'apmat.required' => 'Se requiere el Apellido Materno',
            'date_birth' => 'Se requiere un número telefónico donde contactar'
        ];
    }

    public function response(array $errors){
        return $errors;
    }
}
