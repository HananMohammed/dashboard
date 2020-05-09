<?php


namespace App\repositoryhome;
use Mail;

use App\Http\Requests\PhpMail;

class IndividualFormMail
{
    public function sendMail( $request)
    {

//dd($request);
        $data =

            [
            'name' => $request->name,
            'city'=>$request->city,
            'dealing_banks' => $request->dealing_banks,
            'phone_number' => $request->phone_number,
            'type' => $request->type,
            'nationality'=>$request->nationality,
            'city' => $request->city,
            'text' => $request->text,
                'car_name' => $request->car_name,
            'car_id' => $request->car_id,
            'select_work_selector' => $request->select_work_selector,
            'email' => $request->email,
                'salary_transferring_bank'=>$request->salary_transferring_bank,
                'select_monthly_obligations'=>$request->select_monthly_obligations,
                'years_of_experience'=>$request->years_of_experience,
                'monthly_salary'=>$request->monthly_salary,
                'total_monthly_obligations'=>$request->total_monthly_obligations,



        ];
        Mail::send('individualFormMail', $data, function ($message) {

            $message->to('hananmohammed2468@gmail.com', 'zline')->subject('Attractive Car Contact For individual Forms  ');
            $message->from('server@zline-eg.com', 'server');
        });

    }

}