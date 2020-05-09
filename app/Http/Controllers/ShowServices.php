<?php

namespace App\Http\Controllers;

use App\OurServices;
use App\repository\CrudRepository;
use App\repositoryhome\FotterRepo;
use App\Seo;
use Illuminate\Http\Request;

class ShowServices extends Controller
{
    //
    public  function index($id,$slug,CrudRepository $crudRepository,OurServices $modelname,Seo $seo,FotterRepo $repo){

        $serv=$crudRepository->getById($modelname,$id);
        $data=$repo->footerCollection();

        return view('homepage.singelservices',compact('data','serv'));
    }
}
