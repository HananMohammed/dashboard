<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;
use App\repository\prouductsRepository;

class carGallery extends Controller
{
    public function index(FotterRepo $repo ,$id)
    {
        $data=$repo->footerCollection();
        $datarec=new prouductsRepository();
        $dataproduct=$datarec->getProduct($id);
        return view('homepage.car_gallery',compact('data','dataproduct'));
    }
}
