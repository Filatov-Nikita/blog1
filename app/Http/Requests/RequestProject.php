<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProject extends FormRequest
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
           '*' => 'required',
            'name' => 'min:3|max:128',
            'description' => 'min:3',
            'term' => 'required',
            'content' => 'min:3',
        ];
    }
}
