<?php


namespace App\repositoryhome;
use Mail;

use App\Http\Requests\PhpMail;

class CompanyFormMail
{
    public function sendMail( $request)
    {

//dd($request);
        $data = ['company_name' => $request->company_name,
            'company_activity'=>$request->company_activity,
            'dealing_banks' => $request->dealing_banks,
            'phone_number' => $request->phone_number,
            'type' => $request->type,
            'car_name'=>$request->car_name,
            'city' => $request->city,
            'age_of_company' => $request->age_of_company,
            'responsible_person_name' => $request->responsible_person_name,
            'email' => $request->email,
            'car_id' => $request->car_id,
            'text' => $request->text,
            'commercial_registration_no' => $request->commercial_registration_no,


        ];
        Mail::send('formCompanyMail', $data, function ($message) {

            $message->to('hananmohammed2468@gmail.com', 'zline')->subject('Attractive Car Contact For Company Forms  ');
            $message->from('server@zline-eg.com', 'server');
        });

    }

}