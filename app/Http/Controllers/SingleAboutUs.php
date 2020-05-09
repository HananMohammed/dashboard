<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;

class SingleAboutUs extends Controller
{
    //
    public  function index(FotterRepo $repo)
    {
        $data=$repo->footerCollection();

        return view('homepage/singleaboutus',compact('data'));
    }
}
