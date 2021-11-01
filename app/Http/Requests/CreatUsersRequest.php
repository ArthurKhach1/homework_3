<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatUsersRequest extends FormRequest
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
            'name'=>'required|min:3|max:64',
            'email'=>'required|email',
            'password'=>'required|min:4',
            'img'=>'file|mimes:jpg,png|max:2040'
        ];
    }
}
