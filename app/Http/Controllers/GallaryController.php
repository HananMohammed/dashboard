<?php

namespace App\Http\Controllers;

use App\Gallary;
use App\Http\Requests\GallaryRequest;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( CrudRepository $crud , Gallary $gallary)
    {
        $data = $crud->getAllData($gallary);
        return view('dashboard.dashboardpages.gallary.index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardpages.gallary.edit');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GallaryRequest  $request ,CrudRepository $crud , Gallary $gallary )
    {
         $crud->store($request,$gallary);
         return redirect()->route('gallary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallary  $gallary
     * @return \Illuminate\Http\Response
     */
    public function show(Gallary $gallary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallary  $gallary
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallary $modelneame , CrudRepository $crud ,$id)
    {
       $data = $crud->getById($modelneame , $id);

       return view('dashboard.dashboardpages.gallary.update' ,compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallary  $gallary
     * @return \Illuminate\Http\Response
     */
    public function update ( CrudRepository $crudRepository ,$id , GallaryRequest $request, Gallary $gallarymodel)
    {
         $crudRepository->update($request,$id,$gallarymodel);
         return redirect()->route('gallary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallary  $gallary
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id , Gallary $gallarymodel , CrudRepository $crud)
    {
         $crud->delete($id,$gallarymodel);
         return redirect()->back();
    }
}
