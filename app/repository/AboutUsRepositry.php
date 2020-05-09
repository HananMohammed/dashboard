<?php


namespace App\repository;


use App\About;
use App\Http\Requests\AboutUs;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class AboutUsRepositry
{
    /**
     * retrieve Data Form Storage
     *@return Collection
     */

    public function AboutUsData():Collection{
       return  About::all();

    }

    /**
     * save data to our storage
     * @param Request $request
     *
     */

    public function Create($request){

        $about=new About();
        $about->about_en=$request->about_en;
        $about->about_ar=$request->about_ar;
        $about->save();


    }

    /**
     * @param AboutUs $request
     * @param About $id
     */
    public function update($request ,$id){
        $about=About::find($id);
        $about->about_en=$request->about_en;
        $about->about_ar=$request->about_ar;
        $about->save();

    }

}