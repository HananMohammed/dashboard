<?php


namespace App\repositoryhome;
use Mail;

use App\Http\Requests\PhpMail;

class PhpMalirRepo
{
    public function sendMail(PhpMail $request)
    {


        $data = ['name' => $request->name,'mail'=>$request->email_address,'phone' => $request->phone_number, 'msg' => $request->message];
        Mail::send('mail', $data, function ($message) {

            $message->to('hananmohammed2468@gmail.com', 'zline')->subject('Attractive Car Contact ');
            $message->from('server@zline-eg.com', 'server');
        });

    }
//        $to = "mohamed7rabee@gmail.com";
//        $subject = "Web Site Contact";
//
//        $message = "    <html>
//                        <head>
//                        <title>Web Site Contact</title>
//                        </head>
//                        <body>
//                        <p>This email Send from you web site</p>
//                        <table>
//                        <tr>
//                        <th>Name</th>
//                        <th>Email</th>
//                        <th>Phone</th>
//                        <th>Massage</th>
//                        </tr>
//                        <tr>
//                        <td>$request->name</td>
//                        <td>$request->phone_number</td>
//                        <td>$request->message</td>
//                        </tr>
//                        </table>
//                        </body>
//                        </html>
//                        ";
//
//// Always set content-type when sending HTML email
//        $headers = "MIME-Version: 1.0" . "\r\n";
//        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//
//// More headers
//        $headers .= 'From: <webwbs@wbs.com>' . "\r\n";
//        $headers .= 'Cc: myboss@example.com' . "\r\n";
//
//        mail($to,$subject,$message,$headers);
//    }

}