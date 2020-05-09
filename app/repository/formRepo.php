<?php


namespace App\repository;


use App\Http\Requests\formRequest;
use Illuminate\Http\Request;

class formRepo
{


    public function sendMail( Request $request)
    {
        $to = "mohamed7rabee@gmail.com";
        $subject = "Web Site Contact";

        $message = "    <html>
                        <head>
                        <title>Web Site Contact</title>
                        </head>
                        <body>
                        <p>This email Send from you web site</p>
                        <table>
                        <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>region</th>
                        <th>Email</th>
                        <th>choose_service</th>
                        <th>lenght</th>
                        <th>width</th>
                        <th>height</th>
                        <th>file</th>
                        <th>text</th>
                        </tr>
                        <tr>
                        <td>$request->fName</td>
                        <td>$request->lNamer</td>
                        <td>$request->phone</td>
                        <td>$request->region</td>
                        <td>$request->email</td>
                        <td>$request->choose_service</td>
                        <td>$request->length</td>
                       <td>$request->width</td>
                        <td>$request->height</td>
                        <td>$request->file</td>
                        <td>$request->text</td>

                        </tr>
                        </table>
                        </body>
                        </html>
                        ";

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <webwbs@wbs.com>' . "\r\n";
        $headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to,$subject,$message,$headers);
    }

}