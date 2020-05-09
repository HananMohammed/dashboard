<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Seorequest extends FormRequest
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
//            'title_eng' =>'required|string',
//            'title_ar' =>'required|string',
//            'description_eng' =>'required|string',
//            'description_ar' =>'required|string',
//            'keyword_eng' =>'required|string',
//            'keyword_ar' =>'required|string',


        ];
    }
}
