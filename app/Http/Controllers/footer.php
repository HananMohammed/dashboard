<?php

namespace App\Http\Controllers;

use App\repositoryhome\FotterRepo;
use Illuminate\Http\Request;


class footer extends Controller
{
    //
    public function index(Request $request,FotterRepo $fotterRepo){

        if($request->session()->get('locale')==null){
          $request->session()->put('locale','ar');
        }
        $data=$fotterRepo->footerCollection();
        return view('welcome',compact('data'));
    }
}
