<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FruitsRequestUpdate extends FormRequest
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
//            //
//            'name_en'=>'required|string',
//            'name_ar'=>'required|string',
//            'description_en'=>'required|string',
//            'description_ar'=>'required|string',
//            'slug_en'=>'required|string|unique:fruits,slug_en,'.$this->getSegmentFromEnd(),
//            'slug_ar'=>'required|string|unique:fruits,slug_ar,'.$this->getSegmentFromEnd(),
//             'alt'=>'required|string',
          //  'images'=>'required',
            'Year'=>'required',
            'images.*'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
         ];
    }
    private function getSegmentFromEnd($position_from_end = 1) {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }
}
