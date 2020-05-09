<?php


namespace App\repository;


use App\Http\Requests\Seorequest;
use App\Seo;

class SeoReposetry
{
    /**
     * get all data fro our storage
     * @return Seo[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllData(){
       return Seo::all();
    }

    /**
     * save data in storage
     * @param Seorequest $request
     */

    public  function store(Seorequest $request){
        $seo=new Seo();

        $seo->meta=$request->meta;
        $seo->script_head=$request->script_head;
        $seo->script_footer=$request->script_footer;
         $seo->save();
    }
    /**
     * update data in storage
     * @param Seorequest $request
     * @param  $id
     */
    public  function update(Seorequest $request,$id){
        $seo= Seo::find($id);

        $seo->meta=$request->meta;
        $seo->script_head=$request->script_head;
        $seo->script_footer=$request->script_footer;
        $seo->save();
    }
}