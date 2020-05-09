<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositoryhome\FotterRepo;

class formView extends Controller
{
    public function index(Request $request,FotterRepo $fotterRepo){

        if($request->session()->get('locale')==null){
            $request->session()->put('locale','ar');
        }
        $data=$fotterRepo->footerCollection();
        return view('homepage.formCompany',compact('data'));
    }
}
