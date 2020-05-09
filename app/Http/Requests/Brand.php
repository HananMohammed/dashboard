<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Brand extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_en'=>'required',

            'name_ar'=>'required',
            //'image_path'=>'required',
            'image_path'=>'mimes:jpeg,jpg,png,gif,svg|max:10000'
        ];
    }
}
