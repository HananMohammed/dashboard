<?php

namespace App\Http\Controllers;

use App\BrandClass2;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class getBrandClasses extends Controller
{
    //
    public function index($id,CrudRepository $crud,BrandClass2 $brandClass2)
    {


     return  $crud->getWhereId($brandClass2,'brand_id',$id);
    }
}
