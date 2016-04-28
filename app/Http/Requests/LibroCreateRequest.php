<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LibroCreateRequest extends Request
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
            'isbn' => 'required|unique:libros',
            'titulo' => 'required',
            'descripcion' => 'required',
            'editorial' => 'required',
            'autor' => 'required',
            'ano_edicion' => 'required',
            'ejemplares' => 'required'
        ];
    }
}
