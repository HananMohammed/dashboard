<?php


namespace App\repositoryhome;
use Mail;

use App\Http\Requests\PhpMail;

class GovenmentFormMail
{
    public function sendMail( $request)
    {

//dd($request);
        $data =

            [
                'sector_name' => $request->sector_name,
                'email' => $request->email,
                'person_name' => $request->person_name,
                'phone' => $request->phone,
                 'city' => $request->city,
                'text' => $request->text,
                'car_name' => $request->car_name,

            ];
        Mail::send('GovernmentFormMail', $data, function ($message) {

            $message->to('hananmohammed2468@gmail.com', 'zline')->subject('Attractive Car Contact For Government Forms  ');
            $message->from('server@zline-eg.com', 'server');
        });

    }

}