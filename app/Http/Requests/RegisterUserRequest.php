<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
		'email'=>['string','email','required'],
		'password'=>['string','min:6','required']
        ];
    }
    
    public function messages(){

    return[

    'email.required'=>'Some data is incorrect',
    'password.required'=>'Some data is incorrect'
    

];

}

}
