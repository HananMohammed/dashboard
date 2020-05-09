<?php

namespace App\Http\Controllers;

use App\Fruits;
use App\News;
use App\repository\CrudRepository;
use App\repository\DashboaredRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

 /*
       public function index(CrudRepository $crud ,Fruits $prod , News $news ){
           $product =count( $crud->getAllData($prod));
           $news = count( $crud->getAllData($news));
           $data =$product.$news;
           return view('dashboard.dashboardpages.home',compact('data'));
       }


*/

      public function index(DashboaredRepository $dashdata){
          $data= $dashdata->DashBoardData();
           return view('dashboard.dashboardpages.home',compact('data'));
       }




}