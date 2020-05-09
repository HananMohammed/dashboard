<?php

namespace App\Http\Requests;

use App\News;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class NewsUpdateRequest extends FormRequest
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
            'title_en'=>'required|string',
            'title_ar'=>'required|string',
            'news_en'=>'required|string',
            'news_ar'=>'required|string',
            'images'=>'',
            'images.*'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
            'alt'=>'required|string',
            'slug_en'=>'required|string|unique:news,slug_en,'.$this->getSegmentFromEnd(),
            'slug_ar'=>'required|string|unique:news,slug_ar,'.$this->getSegmentFromEnd(),
        ];
    }
    private function getSegmentFromEnd($position_from_end = 1) {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }
}
