<?php


namespace App\repository;


use App\category;
use App\Fruits;
use App\Http\Requests\FruitsRequest;
use App\Http\Requests\FruitsRequestUpdate;
use Illuminate\Support\Facades\Auth;

class prouductsRepository
{
    /**
     * retreve data from our storage
     * @return Fruits[]|\Illuminate\Database\Eloquent\Collection
     */
    public function  getAllData(){
        return Fruits::all();
    }
    public function getProduct($id){
        return Fruits::find($id);
    }

    /**
     * get all category from storage
     * @return category[]|\Illuminate\Database\Eloquent\Collection
     */
    public  function  getAllCategory(){
        return category::all();
    }

    /**
     * save date in storage
     * @param FruitsRequest $request
     */
    public  function store(FruitsRequest $request){
        $pro=new Fruits();

        $pro->name_en=$request->name_en;
        $pro->name_ar=$request->name_ar;
        $pro->short_description_en=$request->short_description_en;
        $pro->short_description_ar=$request->short_description_ar;
        $pro->description_en=$request->description_en;
        $pro->description_ar=$request->description_ar;
        $pro->slug_en=$request->slug_en;
        $pro->slug_ar=$request->slug_ar;
        $pro->meta=$request->meta;
        $pro->alt=$request->alt;
        $icon=new UploadImage($pro->name_en,'products_icon',$request->icon);
        $pro->icon=$icon->uploadeImage();
        $imags=new UploadImage($pro->name_en,'products',$request->images);
        $pro->images=json_encode($imags->uploadeImages());
        $pro->created_by=Auth::user()->id;
        for ($i=0;$i<12;$i++){
            $mon='mon_'.($i+1);
            $mo='mo_'.($i+1);
            $pro->$mon=$request->$mo;
        }

        $pro->save();
    }

    /**
     * update record in storage
     * @param FruitsRequestUpdate $request
     * @param $id
     */
    public function update(FruitsRequestUpdate $request,$id){
        $pro=Fruits::find($id);
        $pro->name_en=$request->name_en;
        $pro->name_ar=$request->name_ar;
        $pro->short_description_en=$request->short_description_en;
        $pro->short_description_ar=$request->short_description_ar;
        $pro->description_en=$request->description_en;
        $pro->description_ar=$request->description_ar;
        $pro->slug_en=$request->slug_en;
        $pro->slug_ar=$request->slug_ar;
        $pro->meta=$request->meta;
        $pro->alt=$request->alt;
        if($request->hasFile('icon')){
            $icon=new UploadImage($pro->name_en,'products_icon',$request->icon);
            $pro->icon=$icon->uploadeImage();
        }
        if($request->hasFile('images')) {
            $imags = new UploadImage($pro->name_en, 'products', $request->images);
            $pro->images = json_encode($imags->uploadeImages());
        }
        $pro->created_by=Auth::user()->id;
        for ($i=0;$i<12;$i++){
            $mon='mon_'.($i+1);
            $mo='mo_'.($i+1);
            $pro->$mon=$request->$mo;
        }

        $pro->save();
    }

    /**
     * @param $id
     */
    public function destroy($id){
        $pro=Fruits::find($id);
        $pro->delete();
    }
}