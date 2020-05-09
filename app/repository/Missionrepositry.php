<?php


namespace App\repository;


use App\Mission;
use App\Http\Requests\AboutUs;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class Missionrepositry
{

    /**
     * retrieve Data Form Storage
     *@return Collection
     */

    public function MissionData():Collection{
        return  Mission::all();

    }

    /**
     * save data to our storage
     * @param Request $request
     *
     */

    public function Create($request){

        $mission=new Mission();
        $mission->mission_ar=$request->mission_ar;
        $mission->mission_en=$request->mission_en;
        $mission->vission_ar=$request->vission_ar;
        $mission->vission_en=$request->vission_en;
        $mission->save();


    }

    /**
     * @param \App\Http\Requests\Mission $request
     * @param Mission $id
     */
    public function update($request ,$id){
        
        $mission= Mission::find($id);
        $mission->mission_ar=$request->mission_ar;
        $mission->mission_en=$request->mission_en;
        $mission->vission_ar=$request->vission_ar;
        $mission->vission_en=$request->vission_en;
        $mission->save();

    }


}