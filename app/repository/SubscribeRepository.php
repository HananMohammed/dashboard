<?php


namespace App\repository;


use App\Http\Requests\SubcriberRequest;
use App\Subscriber;

class SubscribeRepository
{
    /**
     * @param SubcriberRequest $request
     */
    public  function  store(SubcriberRequest $request)

    {
        $subscriber=new Subscriber();
        $subscriber->mail =$request->mail;
        $subscriber->save();

    }
}