<?php

namespace App\Http\Controllers;

use App\BrandName;
use App\category;
use App\Fruits;
use App\Http\Requests\FruitsRequest;
use App\Http\Requests\FruitsRequestUpdate;
use App\repository\CrudRepository;
use App\repository\prouductsRepository;
use Illuminate\Http\Request;

class FruitsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param prouductsRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud ,Fruits $products)
    {
        //
        $productsArray=$crud->getAllData($products);
        return view('dashboard.dashboardpages.fruits.index',compact('productsArray'));
    }

    /**
     * Show the form for creating a new resource.
     * @param prouductsRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function create(CrudRepository $crud , BrandName $brandName)
    {
        //
        $brands =$crud->getAllData($brandName);

        return view('dashboard.dashboardpages.fruits.edit',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FruitsRequest  $request
     * @param  prouductsRepository $repository
     */
    public function store(FruitsRequest $request, CrudRepository $crud ,Fruits $products)
    {
        //
   // dd($request);
        //$repository->store($request);
        $crud->store($request,$products);
        return redirect(route('dproducts.index'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fruits  $fruits
     * @return \Illuminate\Http\Response
     */
    public function show(Fruits $fruits )
    {

        return view('dashboard.dashboardpages.fruits.update');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  prouductsRepository  $repository
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, CrudRepository $crud ,category $modelname,Fruits $modelnamepro ,BrandName $brandname )
    {

        $brands=  $crud->getAllData($brandname);
        $data = $crud->getById($modelnamepro,$id);

        return view('dashboard.dashboardpages.fruits.update',compact('data','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FruitsRequest  $request
     * @param  prouductsRepository $repository
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(FruitsRequestUpdate $request, CrudRepository $crud,Fruits $prod , $id)
    {
        //
//        dd($request);
        $crud->update($request ,$id,$prod);
        return redirect(route('dproducts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  prouductsRepository  $repository
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,CrudRepository $crud ,Fruits $prod_model)
    {
        //
        $crud->delete($id,$prod_model);
         return redirect()->back();
    }
}
