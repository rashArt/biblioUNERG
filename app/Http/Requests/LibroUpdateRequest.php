<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LibroUpdateRequest extends Request
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
            'titulo'       => 'required',
            'descripcion'  => 'required',
            'clasificacion' => 'required',
            'pie'           => 'required',
            'nota'          => 'required',
            'serie'         => 'required',
            'fisica'        => 'required',
            'editorial_id' => 'required',
            'autor_id'     => 'required',
            'ano_edicion'  => 'required',
            'ejemplares'   => 'required'
        ];
    }
}
