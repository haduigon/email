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
		'databasedata'=>'required|string',
		'emailtext'=>'required|string',
		'speed'=>'nullable|int',
		'sender_address'=>'required|string',
		'username'=>'required|string',
		'userpassword'=>'required|string',
		'helo'=>'nullable|string',
		'compainname'=>'nullable|string',
		'subject'=>'nullable|string',
		'name'=>'nullable|string'
		
        ];
    }
}
