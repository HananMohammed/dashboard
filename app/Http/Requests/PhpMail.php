<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhpMail extends FormRequest
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
            //
            'name'=>'required|string',
            'email_address'=>'required|email',
            'phone_number'=>'required|min:10|numeric',
            'message'=>'required|string',
        ];
    }
}
