<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotoRequest extends FormRequest
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
            //
            'marcas_id' => 'required',
            'categoria_id' => 'required',
            'codigo' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'estado' => 'required'

        ];
    }
}
