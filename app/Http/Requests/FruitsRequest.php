<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FruitsRequest extends FormRequest
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

            'car_name_en'=>'required|string',
            'car_name_ar'=>'required|string',
            'Option_en'=>'required|string',
            'Option_ar'=>'required|string',
            'Year'=>'required',
            'Transmission_en'=>'required',
            'Transmission_ar'=>'required',
            'Engine_en'=>'required',
            'Engine_ar'=>'required',
            'Fuel_en'=>'required',
            'Fuel_ar'=>'required',
            'Drive_Type_en'=>'required',
            'Drive_Type_ar'=>'required',
            'color'=>'required',
            'overview_en'=>'required|string',
            'overview_ar'=>'required|string',
            'features_en'=>'required|string',
            'features_ar'=>'required|string',
            'images'=>'required',
            'price'=>'required',
            'images.*'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
            'Year'=>'required',
//            'name_en'=>'required|string',
//            'name_ar'=>'required|string',
//           // 'short_description_en'=>'required|string',
//            //'short_description_ar'=>'required|string',
//            'description_en'=>'required|string',
//            'description_ar'=>'required|string',
//            'slug_en'=>'required|string|unique:fruits',
//            'slug_ar'=>'required|string|unique:fruits',
//            //'meta'=>'',
//            'alt'=>'required|string',

//           // 'icon'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
        ];
    }
}
