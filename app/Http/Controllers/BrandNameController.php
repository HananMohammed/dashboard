<?php

namespace App\Http\Controllers;
use App\Fruits;
use App\BrandClass2;
use App\BrandName;
use App\Http\Requests\Brand;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class BrandNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud ,BrandName $brandmodel )
    {
        $data =$crud->getAllData($brandmodel);
        return view('dashboard.dashboardpages.brand.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.dashboardpages.brand.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Brand $req ,BrandName $brandmodel ,CrudRepository $crud)
    {

       $crud->store($req,$brandmodel);

        return redirect()->route('dbrand.index')  ;  }

    /**
     * Display the specified resource.
     *
     * @param  \App\BrandName  $brandName
     * @return \Illuminate\Http\Response
     */
    public function show(BrandName $brandName)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BrandName  $brandName
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandName $brandName ,CrudRepository $crud ,$id)
    {
        $data =$crud->getById($brandName ,$id);

        return view('dashboard.dashboardpages.brand.update' ,compact('data' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BrandName  $brandName
     * @return \Illuminate\Http\Response
     */
    public function update( CrudRepository $crud , Brand $req, BrandName $brandModel ,$id)
    {
        //dd($req);
          $crud->update( $req ,$id,$brandModel);
          return redirect()->route('dbrand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BrandName  $brandName
     * @return \Illuminate\Http\Response
     */
    public function destroy($id , BrandName $brandModel ,BrandClass2 $classmodel, Fruits $carmodel ,CrudRepository $crud)
    {
        $crud->deleteBrand($id,$brandModel,$classmodel,$carmodel) ;
        return redirect()->back();

    }
}
