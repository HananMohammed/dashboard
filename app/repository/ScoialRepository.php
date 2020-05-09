<?php


namespace App\repository;


use App\Http\Requests\SocialDataRequest;
use App\SocialData;
use Illuminate\Support\Facades\Auth;

class ScoialRepository
{

    public function getAllSocialData(){
        return SocialData::all();
    }
    /**
     * @param SocialDataRequest $request
     */

    public function store(SocialDataRequest $request){
        $social=new SocialData();
        $social->icon=$request->icon;
        $social->link=$request->link;
        $social->created_by=Auth::user()->id;
        $social->save();

    }

    /**
     * @param SocialDataRequest $request
     * @param $id
     */
    public function destroy($id){
        $social= SocialData::find($id);
        $social->delete();
    }

}