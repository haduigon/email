<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailQueueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   // public function authorize()
  //  {
 //       return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
		'databasedata'=>['string','required'],
		'emailtext'=>['string','required'],
		'domain'=>['string','required'],
		'speed'=>['int'],
		'sender_address'=>['string','required'],
		'username'=>['string','required'],
		'userpassword'=>['string','required'],
		'helo'=>['string'],
		'domain'=>['string','required']
        ];
    }
}
