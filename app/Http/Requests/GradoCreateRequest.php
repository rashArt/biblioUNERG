<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GradoCreateRequest extends Request
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
            'titulo' => 'required|unique:grados',
            'autor'  => 'required',
            'tutor'  => 'required',
        ];
    }
}
