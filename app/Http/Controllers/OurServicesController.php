<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesRequest;
use App\Http\Requests\ServicesUpdateRequest;
use App\OurServices;
use App\repository\CrudRepository;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CrudRepository $crudRepository,OurServices $modelname)
    {
        //
       $data= $crudRepository->getAllData($modelname);
        return view('dashboard.dashboardpages.services.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.dashboardpages.services.edit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesRequest $request, CrudRepository $crudRepository,OurServices $modelname)
    {
        //
        $crudRepository->store($request,$modelname);
        return redirect()->route('dservices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function show(OurServices $ourServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function edit($id ,CrudRepository $crudRepository,OurServices $modelname)
    {
        //

      $data=  $crudRepository->getById($modelname,$id);
        return view('dashboard.dashboardpages.services.update',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesUpdateRequest $request, $id,CrudRepository $crudRepository,OurServices $modelname)
    {
        //
        $crudRepository->update($request,$id,$modelname);
        return redirect()->route('dservices.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurServices  $ourServices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,CrudRepository $crudRepository,OurServices $modelname)
    {
        //
        $crudRepository->delete($id,$modelname);
        return redirect()->back();
    }
}
