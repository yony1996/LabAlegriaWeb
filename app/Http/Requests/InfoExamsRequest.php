<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoExamsRequest extends FormRequest
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
            'user_id' => 'integer|exists:users,id',
            'doctor' => 'required|string',
            'orden' => 'required|string',
            'type' => 'required|string',
            'fechaMuestra'=>'required|date_format:Y-m-d'
        ];
    }
    public function messages()
    {
        return [

            'user_id.integer' => 'El dato ingresado deben ser números',
            'user_id.exists' => 'La identificacion ingresada no está registarda.',
            'doctor.required'=> 'El campo doctor es requerido.',
            'doctor.string'=> 'El campo doctor debe contener letras.',
            'orden.required'=> 'El campo orden es requerido.',
            'orden.string'=> 'El campo orden debe contener letras.',
            'fechaMuestra'=>'El campo fecha toma muestra es requerido.',
        ];
    }
}
