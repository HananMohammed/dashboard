<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificatesUpdate extends FormRequest
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
            'about_certificates_en'=>'required|string',
            'about_certificates_ar'=>'required|string',
            'alt_certificates_1'=>'required|string',
            'alt_certificates_2'=>'required|string',
            'certificates_1'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
            'certificates_2'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
        ];
    }
}
