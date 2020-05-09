<?php

namespace App\Http\Controllers;

use App\repository\newsRepository;
use App\repositoryhome\FotterRepo;
use Illuminate\Http\Request;

class ShowNews extends Controller
{
    //
    public function index($id)
    {
//        $alldata=new FotterRepo();
//        $data=$alldata->footerCollection();
//    return view('homepage.allnews',compact('data'));
        $alldata=new FotterRepo();
        $data=$alldata->footerCollection();
        $repo=new  newsRepository();
        $datasingel=$repo->getRecord($id);
        return view('homepage.singelnews',compact('data','datasingel'));
    }

    public function show($id)

    {
        $alldata=new FotterRepo();
        $data=$alldata->footerCollection();
        $repo=new  newsRepository();
        $datasingel=$repo->getRecord($id);
        return view('homepage.singelnews',compact('data','datasingel'));
    }
}
