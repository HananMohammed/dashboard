<?php


namespace App\repository;
use App\repository\UploadImage;
use App\Slider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SliderRepositry
{
    /**
     * retrieve all data from db
     *@return Collection;
     */

    public function getAllSlidesFromDb(){
       return Slider::all();
    }

    /**
     * save data from form to our storage
     * @param  \Illuminate\Http\Request  $request
     * @return  Response
     */
    public function createSlider($request){
        $slider =new Slider();
        $slider->title_en=$request->title_en;
        $slider->title_ar=$request->title_ar;
        $slider->description_en=$request->description_en;
        $slider->description_ar=$request->description_ar;
        $image=new UploadImage($request->title_en,'homeslider',$request->image_path);
        $slider->image_path=$image->UploadeImage();
        $slider->created_by=Auth::user()->id;
        $slider->alt=$request->alt;
        $slider->save();
        return $slider;


    }

    /**
     * @param $id
     * @return Collection
     */
    public function EditSlider($id){
        return Slider::find($id);

    }
    public function updateSlider ($request,$id){
        $slider = Slider::find($id);
        $slider->title_en=$request->title_en;
        $slider->title_ar=$request->title_ar;
        $slider->description_en=$request->description_en;
        $slider->description_ar=$request->description_ar;
        if($request->image_path) {
            $image = new UploadImage($request->title_en, 'homeslider', $request->image_path);
            $slider->image_path = $image->UploadeImage();
        }
        $slider->created_by=Auth::user()->id;
        $slider->save();
        return $slider;
    }

    /**
     * delete slide from our storage
     * @param $id
     * @return mixed
     */
    public function destroy($id){
        $slider=Slider::find($id);
       return $slider->delete();

    }

}