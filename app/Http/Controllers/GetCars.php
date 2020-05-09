<?php

namespace App\Http\Controllers;

use App\Fruits;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class GetCars extends Controller
{
    public function index($id,CrudRepository $crud,Fruits $fruitclass)
    {


        return  $crud->getWhereId($fruitclass,'class_id',$id);
    }
}
