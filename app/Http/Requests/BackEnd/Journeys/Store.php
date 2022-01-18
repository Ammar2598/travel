<?php

namespace App\Http\Requests\BackEnd\Journeys;

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
          
             'description' => 'required|regex:/^[a-zA-Z0-9_ ]+$/|min:3|max:1000',
             'duration' => [ 'required'],
             'cost' => [ 'required'],
             'destination' => [ 'required'],
             'category' => ['required'],
             'image'=>'image',
        ];
    }
}
