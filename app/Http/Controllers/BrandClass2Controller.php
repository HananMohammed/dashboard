<?php

namespace App\Http\Controllers;

use App\BrandClass2;
use App\BrandName;
use App\Http\Requests\BrandClassRequest;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class BrandClass2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud ,BrandClass2 $classModel)
    {
         $data = $crud ->getAllData($classModel);
         return view('dashboard.dashboardpages.brandclass.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CrudRepository $crud ,BrandName $brandName)
    {
        $brands =$crud->getAllData($brandName);
        return view('dashboard.dashboardpages.brandclass.edit',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRepository $crud , BrandClassRequest $req , BrandClass2 $brandmodel)
    {

         $crud->store($req,$brandmodel);
         return redirect()->route('dbrandclass.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BrandClass2  $brandClass2
     * @return \Illuminate\Http\Response
     */
    public function show(BrandClass2 $brandClass2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BrandClass2  $brandClass2
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudRepository $crud , $id , BrandClass2 $classModel ,BrandName $brandName)
    {

       $data = $crud->getById($classModel,$id);
        $brands =$crud->getAllData($brandName);
        return view('dashboard.dashboardpages.brandclass.update' ,compact('data','brands'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BrandClass2  $brandClass2
     * @return \Illuminate\Http\Response
     */
    public function update(BrandClassRequest $req, BrandClass2 $ClassModel , CrudRepository $crud ,$id)
    {
          $crud->update($req ,$id , $ClassModel);
          return redirect()->route('dbrandclass.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BrandClass2  $brandClass2
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandClass2 $brandClass2 ,CrudRepository $crud , $id )
    {
         $crud->delete($id , $brandClass2);
         return redirect()->back();
    }
}
