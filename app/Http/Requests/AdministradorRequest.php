<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministradorRequest extends FormRequest
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
            'name' => 'required',
            'apellidos' => 'required',
            'documento' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required',
            'email' => 'required',
            'email' => 'unique:users',
            'password' => 'required|min:6|',
        ];
    }
}
