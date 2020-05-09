<?php


namespace App\repository;


use App\Http\Requests\AddressRequest;
use Illuminate\Support\Facades\Auth;
use App\Address;
class AddressRepository
{

    public function getAllAddressData(){
        return Address::all();
    }
    /**
     * @param AddressRequest $request
     */

    public function store(AddressRequest $request){
        $address=new Address();
        $address->address_en=$request->address_en;
        $address->address_ar=$request->address_ar;
        $address->created_by=Auth::user()->id;
        $address->save();

    }

    /**
     * @param Emails $request
     * @param $id
     */
    public function destroy($id){
        $mail= Address::find($id);
        $mail->delete();
    }

}