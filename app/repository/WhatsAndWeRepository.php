<?php


namespace App\repository;


use App\Http\Requests\WhatsAndWeChatRequest;
use App\Phones;
use App\WahatsAndWeChate;
use Illuminate\Support\Facades\Auth;

class WhatsAndWeRepository
{
    public  function Phones (){
        return Phones::all();
    }
    public function getAllData(){
        return WahatsAndWeChate::all();
    }
    /**
     * @param WhatsAndWeChatRequest $request
     */

    public function store(WhatsAndWeChatRequest $request){
        $phone=new WahatsAndWeChate();
        $phone->whats=$request->whats;
        $phone->we=$request->we;
        $phone->created_by=Auth::user()->id;
        $phone->save();

    }
    /**
     * update date in our storage
     * @param WhatsAndWeChatRequest $request
     * @param $id
     */
    public function update(WhatsAndWeChatRequest $request ,$id){

        $phone= WahatsAndWeChate::find($id);
        $phone->whats=$request->whats;
        $phone->we=$request->we;
        $phone->created_by=Auth::user()->id;
        $phone->save();

    }

    /**
     *
     * @param $id
     */
    public function destroy($id){
        $phone= WahatsAndWeChate::find($id);
        $phone->delete();
    }

}