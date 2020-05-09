<?php

namespace App\Http\Controllers;

use App\repositoryhome\FotterRepo;
use Illuminate\Http\Request;

class Seasone extends Controller
{
    //
    public function index()
    {
        $datarepo=new FotterRepo();
        $data=$datarepo->footerCollection();
        return view('homepage.season',compact('data'));
    }
}
