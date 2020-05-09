<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;
use App\repository\prouductsRepository;

class allProducts extends Controller
{
    public function index(FotterRepo $repo)
    {
        $data=$repo->footerCollection();
        return view('homepage.single_purchase',compact('data'));
    }
}
