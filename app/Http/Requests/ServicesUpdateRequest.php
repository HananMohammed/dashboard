<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesUpdateRequest extends FormRequest
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
            'title_en'=>'required|string',
            'title_ar'=>'required|string',
            'des_en'=>'required|string',
            'des_ar'=>'required|string',
            'image_path'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
        ];
    }
}
