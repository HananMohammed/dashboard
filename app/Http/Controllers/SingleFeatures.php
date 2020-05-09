<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;

class SingleFeatures extends Controller
{
    public  function index(FotterRepo $repo)
    {
        $data=$repo->footerCollection();
        $feature=$repo->getFeaturesData()[0];

        return view('homepage.singlefeature',compact('data','feature'));
    }
}
