<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateAutor extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtAutor'=>'min:4|required',
            'txtFecha'=>'required',
            'txtCant'=>'numeric|digits_between:1,4|required'
        ];
    }
}
