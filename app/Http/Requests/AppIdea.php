<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppIdea extends FormRequest
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
            'autor' => 'required|min:3|max:255',
            'texto' => 'required',
           // 'categoria_id' => 'required',
        ];
    }
}
