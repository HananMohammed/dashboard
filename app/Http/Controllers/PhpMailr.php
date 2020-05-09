<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhpMail;
use App\repositoryhome\PhpMalirRepo;
use Illuminate\Http\Request;

class PhpMailr extends Controller
{
    //
    public  function store(PhpMail $request){
        $repo=new PhpMalirRepo();
        $repo->sendMail($request);
        return redirect()->back();
    }
}
