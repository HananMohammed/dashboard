<?php


namespace App\repository;


use App\Http\Requests\Email;
use App\Emails;
use Illuminate\Support\Facades\Auth;

class MailRepository
{

    public function getAllMailData(){
        return Emails::all();
    }
    /**
     * @param Email $request
     */

    public function store(Email $request){
        $mail=new Emails();
        $mail->mail=$request->mail;
        $mail->created_by=Auth::user()->id;
        $mail->save();

    }

    /**
     * @param Emails $request
     * @param $id
     */
    public function destroy($id){
        $mail= Emails::find($id);
        $mail->delete();
    }

}