<?php


namespace App\repository;


use App\Http\Requests\Phone;
use App\Phones;
use Illuminate\Support\Facades\Auth;

class PhoneRepository
{

    public function getAllPhoneData(){
        return Phones::all();
    }
    /**
     * @param Phone $request
     */

    public function store(Phone $request){
        $phone=new Phones();
        $phone->phone=$request->phone;
        $phone->created_by=Auth::user()->id;
        $phone->save();

    }

    /**
     * @param Phone $request
     * @param $id
     */
    public function destroy($id){
        $phone= Phones::find($id);
        $phone->delete();
    }

}