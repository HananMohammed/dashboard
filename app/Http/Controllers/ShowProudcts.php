<?php

namespace App\Http\Controllers;

use App\Fruits;
use App\News;
use App\repository\prouductsRepository;
use App\repositoryhome\FotterRepo;
use Illuminate\Http\Request;

class ShowProudcts extends Controller
{
    //
    public  function index()
    {
        $datapro=new FotterRepo();
        $data=$datapro->footerCollection();
        $prod=Fruits::all();
       return view('homepage.allproduct',compact('data','prod'));
    }
    public function show($d,$id)
    {

        $datapro=new FotterRepo();
        $data=$datapro->footerCollection();
        $datarec=new prouductsRepository();
        $dataproduct=$datarec->getProduct($id);
        return view('homepage.singelproduct',compact('data','dataproduct'));
    }
}
