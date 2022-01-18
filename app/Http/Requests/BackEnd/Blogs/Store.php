<?php

namespace App\Http\Requests\BackEnd\Blogs;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'title'=>'required|unique:blogs|regex:/^[a-zA-Z0-9_ ]+$/',
            'content'=>'required|regex:/^[a-zA-Z0-9_ ]+$/|min:3|max:1000',
        ];
    }
}
